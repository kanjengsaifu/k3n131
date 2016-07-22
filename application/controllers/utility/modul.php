<?php
/*
 * @author TIAbdilah
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Modul extends MY_Controller {

    var $modul = 'Modul';

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
            'title_content' => 'Data Pegawai',
            'list_data_kategori' => $this->listcode_model->select('*', array('head_list' => 'MD'), null, null, null)->result(),
            'list_data' => $this->modul_model->select('*', null, null, null, array('field'=>'kode_modul', 'sort'=>'asc'))->result(),
            'page' => 'webadmin/utility/modul/list'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function view($id = null) {
        
    }

    public function add() {
       
    }

    public function edit($id = null) {
        
    }

    public function process($action, $id = null) {
        //var
        $data['kategori'] = $this->input->post('inpKategori');
        $data['kode_modul'] = $this->input->post('inpKode');
        $data['nama_modul'] = $this->input->post('inpNama');        
        $data['link'] = $this->input->post('inpLink');

        if ($action == 'add') {
            $res = $this->modul_model->add($data);
            $this->log->add_log('Tambah Data ' . $this->modul, $data['nama_modul']);
            if ($res) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'add-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'failed'));
            }
        } else if ($action == 'edit') {
            $content = $this->modul_model->edit($data, array('id_modul' => $id));
            $this->log->add_log('Ubah Data ' . $this->modul, $data['nama']);
            if ($content) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'edit-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
            }
        }
        redirect('utility/modul');
    }

    public function delete($id = null) {
        $res = $this->modul_model->delete(array('id_modul' => $id));
        $this->log->add_log('Hapus Data ' . $this->modul);
        if ($res) {
            $this->session->set_flashdata('message', $this->message->get_message('success', 'delete-success'));
        } else {
            $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
        }
        redirect('utility/modul');
    }

}
