<?php

/**
 * Description of MY_Controller
 *
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jurnal extends MY_Controller {

    var $modul;

    public function __construct() {
        parent::__construct();
        $this->is_logged_in();
        $this->modul = get_class($this);
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
            'list_data_jl' => $this->listcode_model->select('*', array('head_list' => 'JL'), null, null, null)->result(),
            'page' => 'webadmin/report/jurnal/list'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function search() {
        $submit = $this->input->post('submit');
        $param = array(
            'bulan' => $this->input->post('inp_bulan'),
            'tahun' => $this->input->post('inp_tahun'),
            'kategori' => $this->input->post('inp_kat')
        );

        $array_where1 = array(
            'bulan_tahun' => $this->get_bulan_tahun($param['bulan'], $param['tahun'])
        );
        
        $array_where2 = array(
            'date_format(tgl_jurnal, \'%Y\') = ' . '\'' . $param['tahun'] . '\'' => null
        );
        $bulan = $param['bulan'];
        if ($bulan != 'ALL') {
            $array_where2 = array_merge($array_where2, array('date_format(tgl_jurnal, \'%m\') = ' . '\'' . $bulan . '\'' => null));
        }
        $kat = $param['kategori'];
        if ($kat != 'ALL') {
            $array_where2 = array_merge($array_where2, array('SUBSTR(kode_jurnal,1,3) = ' . '\'' . $kat . '\'' => null));
        }

        if ($submit == 'search_data') {
            $data = array(
                'title_page' => 'Semua Data',
                'common' => $this,
                'modul' => $this->modul,
                'title_content' => 'Data ' . $this->modul,
                'data_bulan' => $this->jurnal_model->select_view('*', $array_where1, null, null, null)->row(),
                'list_data' => $this->jurnal_model->select('*', $array_where2, null, null, array('field' => 'tgl_jurnal', 'sort' => 'asc'))->result(),
                'list_data_jl' => $this->listcode_model->select('*', array('head_list' => 'JL'), null, null, null)->result(),
                'page' => 'webadmin/report/jurnal/search',
                'param' => $param
            );
            $this->load->view('webadmin/index', $data);
        } else {
            $this->cetak_data($array_where2, $param);
        }
    }

    public function cetak_data($array_where, $param) {
        $filename = 'Jurnal' . '_' . $param['bulan'] . $param['tahun'] . '_' . mt_rand(1, 1000) . '.xls'; //just some random filename
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $data = array(
            'data_bulan' => $this->jurnal_model->select_view('*', array('bulan_tahun' => $param['tahun'] . '-' . $param['bulan']), null, null, null)->row(),
            'list_data' => $this->jurnal_model->select('*', $array_where, null, null, array('field' => 'tgl_jurnal', 'sort' => 'asc'))->result(),
            'param'=>$param
        );
        $this->load->view('webadmin/report/jurnal/cetak', $data);
    }

    public function process($action, $id = null) {
        //var
        $data['nama_siswa'] = $this->input->post('inp_nama_siswa');
        $data['jenis_kelamin'] = $this->input->post('inp_jenis_kelamin');
        $data['tempat_lahir'] = $this->input->post('inp_tempat_lahir');
        $data['tgl_lahir'] = date('Y-m-d', strtotime($this->input->post('inp_tgl_lahir')));
        $data['anak_ke'] = $this->input->post('inp_anak_ke');
        $data['asal_sekolah'] = $this->input->post('inp_asal_sekolah');
        $data['kelas'] = $this->input->post('inp_kelas');
        $data['telp_siswa'] = $this->input->post('inp_telp_siswa');
        $data['alamat'] = $this->input->post('inp_alamat');
        $data['nama_ayah'] = $this->input->post('inp_nama_ayah');
        $data['pkj_ayah'] = $this->input->post('inp_pkj_ayah');
        $data['nama_ibu'] = $this->input->post('inp_nama_ibu');
        $data['pkj_ibu'] = $this->input->post('inp_pkj_ibu');
        $data['telp_ortu'] = $this->input->post('inp_telp_ortu');
        $data['telp_ortu_2'] = $this->input->post('inp_telp_ortu_2');

        if ($action == 'add') {
            $cnt = $this->counter->generate_id_with_zero(date('Y'), 5);
            $data['kode_siswa'] = date('Y') . $cnt;
            $res = $this->siswa_model->add($data);
            $this->log->add_log('Tambah Data ' . $this->modul, $data['nama_depan']);
            if ($res) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'add-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'failed'));
            }
        } else if ($action == 'edit') {
            $content = $this->siswa_model->edit($data, array('id_siswa' => $id));
            $this->log->add_log('Ubah Data ' . $this->modul, $data['nama_siswa']);
            if ($content) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'edit-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
            }
        }
        redirect('report/jurnal');
    }

    public function delete($id = null) {
        $res = $this->siswa_model->delete(array('id_siswa' => $id));
        $this->log->add_log('Hapus Data ' . $this->modul);
        if ($res) {
            $this->session->set_flashdata('message', $this->message->get_message('success', 'delete-success'));
        } else {
            $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
        }
        redirect('report/jurnal');
    }

    public function get_bulan_tahun($bulan, $tahun) {
        $date = null;
        if ($bulan != 'ALL') {
            $str_date = $tahun . '-' . $bulan.'-01';            
        } else {
            $str_date = $tahun . '-01-01' ;
        }
        $date = strtotime($str_date);
        return date('Y-m', $date);
    }

}
