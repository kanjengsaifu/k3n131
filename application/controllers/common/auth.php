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

class Auth extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
//        $this->session->set_flashdata('message', $this->message->get_message('success', 'failed'));
        $this->load->view('webadmin/auth/sign_in');
        
    }

    public function process_login() {
        $username = $this->input->post('inpUsername');
        $password = $this->input->post('inpPassword');
        $param = array(
            'username' => $username,
            'password' => $password
        );
        $count_user = $this->user_model->select('*', $param, null, null, null)->num_rows();
        if ($count_user == 1) {
            $data_user = $this->user_model->select('*', $param, null, null, null)->row();
            if ($data_user->status == 0) {
                $this->session->set_flashdata('message', $this->message->get_message('danger', 'User Belum Aktip' ,'test'));
                redirect('common/auth');
            } else {
                $sessionData['kn_username'] = $data_user->username;
                $sessionData['kn_nama'] = $data_user->nama;
                $sessionData['hak_akses'] = explode(',', $data_user->hak_akses);
                $sessionData['kn_id_user'] = $data_user->id_user;
                $sessionData['kn_type'] = $data_user->type_user;
                
                $sessionData['kn_is_login'] = TRUE;
                $this->session->set_userdata($sessionData);
                $this->log->add_log('Login ',$param['username']);
                redirect('common/dash');
            }
        } else {
            $this->session->set_flashdata('message', $this->message->get_message('danger', 'Username/Password Salah!','login'));
//            echo $this->message->get_message('danger', 'failed');
            redirect('common/auth');
        }
    }
    
    public function process_logout() {
        $this->session->sess_destroy();
        $this->log->add_log('Logout');
        redirect('common/auth');
    }

}
