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

class Log extends MY_Controller {

    var $modul = 'Log';

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
            'list_data' => $this->log_model->select('*', null, null, null, array('field' => 'date', 'sort' => 'desc'))->result(),
            'page' => 'webadmin/utility/log/list'
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
        
    }

    public function delete($id = null) {
        $res = $this->log_model->delete(array('id_log' => $id));
        $this->log->add_log('Hapus Data ' . $this->modul);
        if ($res) {
            $this->session->set_flashdata('message', $this->message->get_message('success', 'delete-success'));
        } else {
            $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
        }
        redirect('utility/log');
    }
    
    public function delete_all() {
        $res = $this->log_model->truncate();
        $this->log->add_log('Delete All Data ' . $this->modul);
        if ($res) {
            $this->session->set_flashdata('message', $this->message->get_message('success', 'delete-success'));
        } else {
            $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
        }
        redirect('utility/log');
    }

}
