<?php
/*
 * @author TIAbdilah
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Role extends MY_Controller {

    var $modul = 'Role';

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
            'title_content' => 'Data Role',
            'list_data_kategori' => $this->listcode_model->select('*', array('head_list' => 'MD'), null, null, null)->result(),
            'list_data_modul' => $this->modul_model->select('*', null, null, null, null)->result(),
            'list_data' => $this->role_model->select('*', null, null, null, null)->result(),
            'page' => 'webadmin/utility/role/list'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function view($id = null) {
        
    }

    public function add() {
       $data = array(
            'title_page' => 'Semua Data',
            'common' => $this,
            'modul' => $this->modul,
            'title_content' => 'Tambah Data Role',
            'list_data_kategori' => $this->listcode_model->select('*', array('head_list' => 'MD'), null, null, null)->result(),
            'list_data_modul' => $this->modul_model->select('*', null, null, null, null)->result(),
            'page' => 'webadmin/utility/role/add'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function edit($id = null) {
       $data = array(
            'title_page' => 'Semua Data',
            'common' => $this,
            'modul' => $this->modul,
            'title_content' => 'Edit Data Role',
            'list_data_kategori' => $this->listcode_model->select('*', array('head_list' => 'MD'), null, null, null)->result(),
            'list_data_modul' => $this->modul_model->select('*', null, null, null, null)->result(),
            'data' => $this->role_model->select('*', array('id_role'=>$id), null, null, null)->row(),
            'page' => 'webadmin/utility/role/edit'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function process($action, $id = null) {
        //var
        $data['nama_role'] = $this->input->post('inpNama');
        $data['kode_role'] = $this->input->post('inpKode');
        $data['hak_akses'] = implode(',', $this->input->post('inpHak'));

        if ($action == 'add') {
            $res = $this->role_model->add($data);
            $this->log->add_log('Tambah Data ' . $this->modul, $data['nama_modul']);
            if ($res) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'add-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'failed'));
            }
        } else if ($action == 'edit') {
            $content = $this->role_model->edit($data, array('id_role' => $id));
            $this->log->add_log('Ubah Data ' . $this->modul, $data['nama']);
            if ($content) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'edit-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
            }
        }
        redirect('utility/role');
    }

    public function delete($id = null) {
        $res = $this->role_model->delete(array('id_role' => $id));
        $this->log->add_log('Hapus Data ' . $this->modul);
        if ($res) {
            $this->session->set_flashdata('message', $this->message->get_message('success', 'delete-success'));
        } else {
            $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
        }
        redirect('utility/role');
    }

}
