<?php

/**
 * Description of MY_Controller
 *
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gaji_guru extends MY_Controller {

    var $modul = 'Gaji Guru';

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
            'list_data' => $this->gaji_guru_model->select('*', null, null, null, array('field' => 'tgl_gaji_guru', 'sort' => 'desc'))->result(),
            'page' => 'webadmin/transaksi/gaji_guru/list'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function add() {

        $submit = $this->input->post('submit');
        $array_where = array();
        $param = array();
        $tingkat = $this->input->post('inp_tingkat');
        if ($tingkat != null) {
            $array_where = array_merge($array_where, array('tingkat' => $tingkat));
            $param = array_merge($param, array('tingkat' => $tingkat));
        }

        $bulan = $this->input->post('inp_bulan');
        $tahun = $this->input->post('inp_tahun');
        if ($bulan != null && $tahun != null) {
            $array_where = array_merge($array_where, array('bulan_tahun' => $bulan . '-' . $tahun));
            $param = array_merge($param, array('bulan' => $bulan, 'tahun' => $tahun));
        }

        if ($submit == 'print_data') {
//            echo 'print';
        $filename = 'Rekap Gaji Guru'. '_' . $param['tingkat'] . '_' . $param['bulan'] . $param['tahun'] . '_' . mt_rand(1, 1000) . '.xls'; //just some random filename
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

            $data = array(
                'list_data' => $param == null ? null : $this->gaji_guru_model->select_view('*', $array_where, null, null, array('field' => 'nama_guru', 'sort' => 'asc'))->result(),
                'param' => $param
            );
            $this->load->view('webadmin/transaksi/gaji_guru/cetak', $data);
        } elseif ($submit == 'print_data_detil') {
//            echo 'print_detil';
//        $filename = 'Jurnal' . '_' . $param['bulan'] . $param['tahun'] . '_' . mt_rand(1, 1000) . '.xls'; //just some random filename
//        header('Content-Type: application/vnd.ms-excel');
//        header('Content-Disposition: attachment;filename="' . $filename . '"');
//        header('Cache-Control: max-age=0');

            $data = array(
                'list_data_absen_guru' => $this->absen_guru_model->select('*', array('date_format(tgl_absen, \'%m-%Y\') = \''.$param['bulan'] .'-'. $param['tahun'].'\''=> null, 'tingkat'=>$param['tingkat']), null, null, array('field'=>'tgl_absen', 'sort'=>'asc'))->result(),
                'list_data' => $param == null ? null : $this->gaji_guru_model->select_view('*', $array_where, null, null, array('field' => 'nama_guru', 'sort' => 'asc'))->result(),
                'param' => $param
            );
            $this->load->view('webadmin/transaksi/gaji_guru/cetak_detil', $data);
        }else {
            $data = array(
                'title_page' => 'Tambah Data',
                'common' => $this,
                'modul' => $this->modul,
                'title_content' => 'Data ' . $this->modul,
                'list_data_tingkat' => $this->listcode_model->select('*', array('head_list' => 'TK'), null, null, null)->result(),
                'list_data' => $param == null ? null : $this->gaji_guru_model->select_view('*', $array_where, null, null, array('field' => 'nama_guru', 'sort' => 'asc'))->result(),
                'param' => $param,
                'page' => 'webadmin/transaksi/gaji_guru/add'
            );

            $this->load->view('webadmin/index', $data);
        } 
    }

    public function process_add($bulan_tahun, $tingkat, $kode_guru) {
        //var
        $array_where = array(
            'bulan_tahun' => $bulan_tahun,
            'tingkat' => $tingkat,
            'kode_guru' => $kode_guru
        );
        $gaji = $this->gaji_guru_model->select_view('*', $array_where, null, null, array('field' => 'nama_guru', 'sort' => 'asc'))->row();

        $cnt = $this->counter->generate_id_with_zero('HG' . date('ym'), 3);
        $data['kode_transaksi'] = 'HG' . date('ym') . $cnt;
        $data['kode_guru'] = $kode_guru;
        $data['bulan_tahun'] = $bulan_tahun;
        $data['tingkat'] = $tingkat;
        $data['tgl_gaji_guru'] = date('Y-m-d');
        $data['jml_absen'] = $gaji->jml_absen;
        $data['honor_mengajar'] = $gaji->honor_mengajar;
        $data['jml_materi'] = $gaji->jml_materi;
        $data['honor_materi'] = $gaji->honor_materi;
        $data['jml_soal'] = $gaji->jml_soal;
        $data['honor_soal'] = $gaji->honor_soal;
        $data['status'] = 1;

        $total = ($data['jml_absen'] * $data['honor_mengajar']) + ($data['jml_materi'] * $data['honor_materi']) + ($data['jml_soal'] * $data['honor_soal']);

        $res = $this->gaji_guru_model->add($data);
        $this->log->add_log('Tambah Data ' . $this->modul, $data['kode_transaksi']);

        $arr_jurnal = array(
            'tgl_jurnal' => $data['tgl_gaji_guru'],
            'jenis_transaksi' => 'D06',
            'keterangan' => 'Honor Guru - ' . $gaji->nama_guru . ' (' . $bulan_tahun . ')',
            'kredit' => 0,
            'debit' => $total,
            'kode_transaksi' => $data['kode_transaksi']
        );
        $this->jurnal->add_jurnal($arr_jurnal);

        if ($res) {
            $this->session->set_flashdata('message', $this->message->get_message('success', 'add-success'));
        } else {
            $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
        }

        redirect('transaksi/gaji_guru');
    }

    public function delete($kode_transaksi = null) {
        $res = $this->gaji_guru_model->delete(array('kode_transaksi' => $kode_transaksi));
        $this->log->add_log('Hapus Data ' . $this->modul);
        $this->jurnal->delete_jurnal($kode_transaksi);
        if ($res) {
            $this->session->set_flashdata('message', $this->message->get_message('success', 'delete-success'));
        } else {
            $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
        }
        redirect('transaksi/gaji_guru');
    }

    public function testing() {
        echo date('my', strtotime('2016-07-20'));
    }

}
