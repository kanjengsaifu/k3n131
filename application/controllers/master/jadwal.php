<?php

/**
 * Description of MY_Controller
 *
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jadwal extends MY_Controller {

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
            'list_data' => $this->jadwal_model->select('*', null, null, null, array('field' => 'id_jadwal', 'sort' => 'desc'))->result(),
            'list_data_mapel' => $this->listcode_model->select('*', array('head_list' => 'MP'), null, null, array('field' => 'nama_list', 'sort' => 'asc'))->result(),
            'list_data_kelas' => $this->listcode_model->select('*', array('head_list' => 'KLS'), null, null, null)->result(),
            'page' => 'webadmin/master/jadwal/list'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function view($kode_jadwal) {
        $data = array(
            'title_page' => 'Lihat Data',
            'common' => $this,
            'modul' => $this->modul,
            'title_content' => 'Lihat Data ' . $this->modul,
            'data_jadwal' => $this->jadwal_model->select('*', array('kode_jadwal' => $kode_jadwal), null, null, null)->row(),
            'list_data_jk' => $this->listcode_model->select('*', array('head_list' => 'JK'), null, null, null)->result(),
            'list_data_kelas' => $this->listcode_model->select('*', array('head_list' => 'KLS'), null, null, null)->result(),
            'page' => 'webadmin/master/jadwal/view'
        );
        $this->load->view('webadmin/index', $data);
    }
    
     public function cetak_data() {
        $filename = 'Jadwal' . '_' . mt_rand(1, 1000) . '.xls'; //just some random filename
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $data = array(
            'common' => $this,
            'list_data_kelas' => $this->listcode_model->select('*', array('head_list' => 'KLS'), null, null, null)->result()
        );
        $this->load->view('webadmin/master/jadwal/cetak', $data);
    }

    public function process($action, $kode = null) {
        //var
        $data['jam'] = $this->input->post('inp_jam');
        $data['hari'] = $this->input->post('inp_hari');
        $data['kelas'] = $this->input->post('inp_kelas');
        $data['mapel'] = $this->input->post('inp_mapel');

        if ($action == 'add') {
            $res = $this->jadwal_model->add($data);
            $this->log->add_log('Tambah Data ' . $this->modul, $data['nama_depan']);
            if ($res) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'add-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'failed'));
            }
        } else if ($action == 'edit') {
            $content = $this->jadwal_model->edit($data, array('id_jadwal' => $kode));
            $this->log->add_log('Ubah Data ' . $this->modul, $data['nama_jadwal']);
            if ($content) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'edit-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
            }
        }

        redirect('master/jadwal');
    }

    public function delete($id = null) {
        $res = $this->jadwal_model->delete(array('id_jadwal' => $id));
        $this->log->add_log('Hapus Data ' . $this->modul);
        if ($res) {
            $this->session->set_flashdata('message', $this->message->get_message('success', 'delete-success'));
        } else {
            $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
        }
        redirect('master/jadwal');
    }

    public function get_jadwal($hari, $jam, $kelas) {
        $array_where = array(
            'hari' => $hari,
            'jam' => $jam,
            'kelas' => $kelas
        );
        return $this->jadwal_model->select('*', $array_where, null, null, null)->row();
    }

}
