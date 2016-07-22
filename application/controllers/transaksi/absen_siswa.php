<?php

/**
 * Description of MY_Controller
 *
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Absen_siswa extends MY_Controller {

    var $modul = 'Absensi Siswa';

    public function __construct() {
        parent::__construct();
        $this->is_logged_in();
    }

    public function index() {
        $this->list_data();
    }

    public function list_data() {
        $data = array(
            'title_page' => 'Semua Data',
            'common' => $this,
            'modul' => $this->modul,
            'title_content' => 'Data ' . $this->modul,
            'list_data_kelas' => $this->listcode_model->select('*', array('head_list' => 'KLS'), null, null, null)->result(),
            'page' => 'webadmin/transaksi/absen_siswa/list'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function search() {
        $param = array(
            'kelas' => $this->input->post('inp_kelas')
        );

        $tahun = $this->input->post('inp_tahun');
        if ($tahun != 'ALL') {
            $param = array_merge($param, array('tahun' => $tahun));
        }

        $bulan = $this->input->post('inp_bulan');
        if ($bulan != 'ALL') {
            $param = array_merge($param, array('bulan' => $bulan));
        }

        $data = array(
            'title_page' => 'Semua Data',
            'common' => $this,
            'modul' => $this->modul,
            'param' => $param,
            'title_content' => 'Data ' . $this->modul,
            'list_data' => $this->absen_siswa_model->select_view('*', $param, null, null, array('field' => 'bulan', 'sort' => 'desc'))->result_array(),
            'list_data_kelas' => $this->listcode_model->select('*', array('head_list' => 'KLS'), null, null, null)->result(),
            'page' => 'webadmin/transaksi/absen_siswa/search'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function view($kelas, $bulan, $tahun, $pertemuan) {
        $array_where = array(
            'kelas' => $kelas,
            'date_format(tanggal, \'%m\') = ' . $bulan => null,
            'date_format(tanggal, \'%Y\') = ' . $tahun => null,
            'pertemuan' => $pertemuan
        );
        $list_data = $this->absen_siswa_model->select('*', $array_where, null, null, array('field' => 'tanggal', 'sort' => 'desc'));

        $data = array(
            'title_page' => 'Lihat Data',
            'common' => $this,
            'modul' => $this->modul,
            'title_content' => 'Data ' . $this->modul,
            'data' => $list_data->first_row(),
            'list_data' => $list_data->result(),
            'page' => 'webadmin/transaksi/absen_siswa/view'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function add() {

        $data = array(
            'title_page' => 'Tambah Data',
            'common' => $this,
//                'data_header' => $this->spp_header_model->select('*', array('kode_pembayaran' => $kode_transaksi), null, null, null)->row(),
//                'list_data_det' => $this->spp_det_model->select('*', array('kode_pembayaran' => $kode_transaksi), null, null, null)->result(),
            'list_data_kelas' => $this->listcode_model->select('*', array('head_list' => 'KLS'), null, null, null)->result(),
            'page' => 'webadmin/transaksi/absen_siswa/add',
            'modul' => $this->modul,
        );
        $this->load->view('webadmin/index', $data);
    }

    public function process($action, $id = null) {

        $tanggal = date('Y-m-d', strtotime($this->input->post('inp_tanggal')));
        $pertemuan = $this->input->post('inp_pertemuan');
        $kelas = $this->input->post('inp_kelas');
        $hadir = $this->input->post('hadir');
        $kode_siswa = $this->input->post('kode_siswa');

        if ($action == 'add') {
            $array_cek = array(
                'date_format(tanggal, \'%m-%Y\') = \''.date('m-Y',  strtotime($tanggal)).'\'' => NULL,
                'pertemuan' => $pertemuan,
                'kelas' => $kelas
            );
            $cek = $this->absen_siswa_model->select('*', $array_cek, null, null, null)->num_rows();
            if ($cek > 0) {
                $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
            } else {
                for ($i = 0; $i < count($hadir); $i++) {
                    $data_add = array(
                        'tanggal' => $tanggal,
                        'pertemuan' => $pertemuan,
                        'kelas' => $kelas,
                        'kode_siswa' => $kode_siswa[$i],
                        'keterangan' => $hadir[$i] == 1 ? 'Hadir' : 'Alfa'
                    );
                    $ctn = $this->absen_siswa_model->add($data_add);
                }
                $this->log->add_log('Tambah Data ' . $this->modul, $pertemuan . ' - ' . $kelas);
                if ($ctn) {
                    $this->session->set_flashdata('message', $this->message->get_message('success', 'add-success'));
                } else {
                    $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
                }
            }
            redirect('transaksi/absen_siswa');
        } else {
            $data_edit = array(
                'keterangan' => $this->input->post('inp_hadir')
            );
            $ctn = $this->absen_siswa_model->edit($data_edit, array('id_absen_siswa' => $id));
            $this->log->add_log('Ubah Data ' . $this->modul, $this->input->post('inp_kode_siswa') . '_' . $id);
            if ($ctn) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'add-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
            }

            $kelas = $this->input->post('inp_kelas');
            $bulan = $this->input->post('inp_bulan');
            $tahun = $this->input->post('inp_tahun');
            $pertemuan = $this->input->post('inp_pertemuan');

            redirect('transaksi/absen_siswa/view/' . $kelas . '/' . $bulan . '/' . $tahun . '/' . $pertemuan);
        }
    }

}
