<?php
/*
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Listcode extends MY_Controller {

    var $modul = 'List Code';

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
            'list_data_head' => $this->listcode_model->select_view('*', null, null, null, array('field' => 'jml_list', 'sort' => 'asc'))->result(),
            'list_data' => $this->listcode_model->select('*', array('head_list is not null' => null), null, null, array('field' => 'id_list_code', 'sort' => 'asc'))->result(),
            'page' => 'webadmin/utility/listcode/list'
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
            'list_data_head' => $this->listcode_model->select('*', array('head_list' => null), null, null, array('field' => 'id_list_code', 'sort' => 'asc'))->result(),
            'data' => $this->listcode_model->select('*', array('id_list_code' => $id), null, null, null)->row(),
            'page' => 'webadmin/utility/listcode/edit'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function process($action, $id = null) {
        //var
        $data['id_list_code'] = $this->input->post('inpId');
        $data['kode_list'] = $this->input->post('inpKodeList');
        $data['nama_list'] = $this->input->post('inpNamaList');
        $data['date'] = date('Y-m-d H:i:s');

        $head = $this->input->post('inpHeadList');
        if ($head != '') {
            $data['head_list'] = $head;
        } else {
            $data['head_list'] = null;
        }        
        if ($action == 'add') {
            $res = $this->listcode_model->add($data);
            if ($res) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'add-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'failed'));
            }
        } else if ($action == 'edit') {
            $res = $this->listcode_model->edit($data, array('id_list_code' => $id));
            if ($res) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'edit-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
            }
        }
        redirect('utility/listcode');
    }

    public function delete($id = null) {
        $res = $this->listcode_model->delete(array('id_list_code' => $id));
        if ($res) {
            $this->session->set_flashdata('message', $this->message->get_message('success', 'delete-success'));
        } else {
            $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
        }
        redirect('utility/listcode');
    }

}
