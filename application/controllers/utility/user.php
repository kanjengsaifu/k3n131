<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Controller
 *
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends MY_Controller {

    var $modul = 'User';

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
            'title_content' => 'Data '.$this->modul,
            'list_data' => $this->user_model->select('*', null, null, null, array('field' => 'id_user', 'sort' => 'desc'))->result(),
            'list_role' => $this->role_model->select('*', null, null, null, null)->result(),
            'page' => 'webadmin/utility/user/list'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function view($id = null) {
        $data = array(
            'common' => $this,
            'title_page' => 'Lihat Data',
            'modul' => $this->modul,
            'title_content' => 'Lihat Data',
            'data' => $this->user_model->select('*', array('id_user' => $id), null, null, null)->row(),
            'page' => 'webadmin/utility/user/view'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function add() {
        $data = array(
            'common' => $this,
            'title_page' => 'Tambah Data',
            'modul' => $this->modul,
            'title_content' => 'Form Add Data',
            'page' => 'webadmin/utility/user/add',
        );
        $this->load->view('webadmin/index', $data);
    }

    public function edit($id = null) {
        $data = array(
            'common' => $this,
            'title_page' => 'Ubah Data',
            'modul' => $this->modul,
            'title_content' => 'Ubah Data',
            'data' => $this->user_model->select('*', array('id_user' => $id), null, null, null)->row(),
            'page' => 'webadmin/utility/user/edit'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function process($action, $id = null) {
        //var
        $data['id_user'] = $this->input->post('inpId');
        $data['nama'] = $this->input->post('inp_nama');
        $data['username'] = $this->input->post('inp_username');
        $data['password'] = $this->input->post('inp_password');
        $data['email'] = $this->input->post('inp_email');
        $data['type_user'] = $this->input->post('inp_type_user');
        $data['date'] = date('Y-m-d H:i:s');
        $data['telp'] = $this->input->post('inp_telp');
        
        if ($action == 'add') {
            $data['status'] = '0';
            $res = $this->user_model->add($data);
            $this->log->add_log('Tambah Data ' . $this->modul, $data['nama']);
            if ($res) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'add-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'failed'));
            }
        } else if ($action == 'edit') {
            $content = $this->user_model->edit($data, array('id_user' => $id));
            $this->log->add_log('Ubah Data ' . $this->modul, $data['nama']);
            if ($content) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'edit-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
            }
        }
        redirect('utility/user');
    }

    public function delete($id = null) {
        $res = $this->user_model->delete(array('id_user' => $id));
        $this->log->add_log('Hapus Data ' . $this->modul);
        if ($res) {
            $this->session->set_flashdata('message', $this->message->get_message('success', 'delete-success'));
        } else {
            $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
        }
        redirect('utility/user');
    }

    public function aktivasi_user($action, $id = null) {
        if ($action == 'active') {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }
        $this->user_model->edit($data, array('id_user' => $id));
        $this->session->set_flashdata('message', $this->message->get_message('success', 'edit-success'));
        redirect('utility/user');
    }

}
