<?php
/*
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Setting extends MY_Controller {

    var $modul = 'Setting';

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
            'title_content' => 'List Data',
            'list_data' => $this->setting_model->select('*', null, null, null, array('field' => 'id_setting', 'sort' => 'asc'))->result(),
            'page' => 'webadmin/utility/setting/list'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function add() {
        
    }

    public function edit($id = null) {
        $data = array(
            'title_page' => 'Semua Data',
            'common' => $this,
            'modul' => $this->modul,
            'title_content' => 'List Data',
            'list_data_head' => $this->setting_model->select('*', array('head_list' => null), null, null, array('field' => 'id_setting', 'sort' => 'asc'))->result(),
            'data' => $this->setting_model->select('*', array('id_setting' => $id), null, null, null)->row(),
            'page' => 'webadmin/utility/setting/edit'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function process($action, $id = null) {
        //var
        $data['kode_setting'] = $this->input->post('inp_kode_setting');
        $data['nama_setting'] = $this->input->post('inp_nama_setting');
        $data['value_setting'] = $this->input->post('inp_value_setting');
        
        if ($action == 'add') {
            $res = $this->setting_model->add($data);
            if ($res) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'add-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'failed'));
            }
        } else if ($action == 'edit') {
            $res = $this->setting_model->edit($data, array('id_setting' => $id));
            if ($res) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'edit-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
            }
        }
        redirect('utility/setting');
    }

    public function delete($id = null) {
        $res = $this->setting_model->delete(array('id_setting' => $id));
        if ($res) {
            $this->session->set_flashdata('message', $this->message->get_message('success', 'delete-success'));
        } else {
            $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
        }
        redirect('utility/setting');
    }

}
