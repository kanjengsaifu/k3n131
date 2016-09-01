<?php

/**
 * Description of MY_Controller
 *
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Absen_guru extends MY_Controller {

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
            'list_data_guru' => $this->guru_model->select('*', null, null, null, array('field' => 'nama_guru', 'sort' => 'asc'))->result(),
            'list_data_tingkat' => $this->listcode_model->select('*', array('head_list' => 'TK'), null, null, null)->result(),
            'page' => 'webadmin/transaksi/absen_guru/list'
        );
        $this->load->view('webadmin/index', $data);
    }
    
    public function search() {
        $param = array('tgl'=>$this->input->post('inp_tgl_absen'));
        $tgl_absen = date('Y-m-d', strtotime($this->input->post('inp_tgl_absen')));
        $array_where = array(
            'tgl_absen' => $tgl_absen
        );
        $data = array(
            'title_page' => 'Semua Data',
            'common' => $this,
            'modul' => $this->modul,
            'title_content' => 'Data ' . $this->modul,
            'list_data' => $this->absen_guru_model->select('*', $array_where, null, null, array('field' => 'nama_guru', 'sort' => 'asc'))->result(),
            'list_data_guru' => $this->guru_model->select('*', null, null, null, array('field' => 'nama_guru', 'sort' => 'asc'))->result(),
            'list_data_tingkat' => $this->listcode_model->select('*', array('head_list' => 'TK'), null, null, null)->result(),
            'page' => 'webadmin/transaksi/absen_guru/search',
            'param'=>$param
        );
        $this->load->view('webadmin/index', $data);
    }

    public function process($action, $id = null) {
        //var
        $data['kode_guru'] = $this->input->post('inp_kode_guru');
        $data['tgl_absen'] = date('Y-m-d', strtotime($this->input->post('inp_tgl_absen')));
        $data['jumlah_jam'] = $this->input->post('inp_jumlah_jam');
        $data['tingkat'] = $this->input->post('inp_tingkat');
        
        $cek = $this->absen_guru_model->select('*', $data, null, null, null)->num_rows();

        if ($action == 'add') {

            if ($cek == 0) {
                $res = $this->absen_guru_model->add($data);
                $this->log->add_log('Tambah Data ' . $this->modul, $data['kode_guru']);
                if ($res) {
                    $this->session->set_flashdata('message', $this->message->get_message('success', 'add-success'));
                } else {
                    $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
                }
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
            }
        } else if ($action == 'edit') {
            if ($cek == 0) {
                $content = $this->absen_guru_model->edit($data, array('id_absen_guru' => $id));
                $this->log->add_log('Ubah Data ' . $this->modul, $data['nama_guru']);
                if ($content) {
                    $this->session->set_flashdata('message', $this->message->get_message('success', 'edit-success'));
                } else {
                    $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
                }
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
            }
        }
        redirect('transaksi/absen_guru');
    }

    public function delete($id = null) {
        $res = $this->absen_guru_model->delete(array('id_absen_guru' => $id));
        $this->log->add_log('Hapus Data ' . $this->modul);
        if ($res) {
            $this->session->set_flashdata('message', $this->message->get_message('success', 'delete-success'));
        } else {
            $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
        }
        redirect('transaksi/absen_guru');
    }

}
