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
 * STUDIOIT
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class c_log extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('common/log_model');
    }

    public function index() {
        $this->list_data();
    }

    public function list_data() {
        $data = array(
            'title_page' => 'Semua Data',
            'common' => $this,
            'modul' => $this->modul,
            'title_content' => 'Log',
            'page' => 'webadmin/log/list'
        );
        $this->load->view('webadmin/index', $data);
    }

    function add_log($aksi, $keterangan=null) {
        $data_log = array(
            'pegawai' => $this->session->userdata('kn_id_user'),
            'type_user' => $this->session->userdata('kn_type'),
            'date' => date("Y-m-d H:i:s", strtotime("now")),
            'aksi' => $aksi,
            'keterangan' => $keterangan
        );
        $this->log_model->add($data_log);
    }

}
