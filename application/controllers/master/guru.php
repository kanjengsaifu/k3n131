<?php

/**
 * Description of MY_Controller
 *
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Guru extends MY_Controller {

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
            'list_data' => $this->guru_model->select('*', null, null, null, array('field' => 'nama_guru', 'sort' => 'asc'))->result(),
            'list_data_jk' => $this->listcode_model->select('*', array('head_list'=>'JK'), null, null, null)->result(),
            'page' => 'webadmin/master/guru/list'
        );
        $this->load->view('webadmin/index', $data);
    }
    
    public function process($action, $id = null) {
        //var
        $data['nama_guru'] = $this->input->post('inp_nama_guru');
        $data['mata_pelajaran'] = $this->input->post('inp_mata_pelajaran');
        $data['no_telp'] = $this->input->post('inp_telp_guru');
        $data['alamat'] = $this->input->post('inp_alamat');
        
        if ($action == 'add') {
            $cnt = $this->counter->generate_id_with_zero('G', 3);
            $data['kode_guru'] = 'G' . $cnt;
            $res = $this->guru_model->add($data);
            $this->log->add_log('Tambah Data ' . $this->modul, $data['nama_depan']);
            if ($res) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'add-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'failed'));
            }
        } else if ($action == 'edit') {
            $content = $this->guru_model->edit($data, array('id_guru' => $id));
            $this->log->add_log('Ubah Data ' . $this->modul, $data['nama_guru']);
            if ($content) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'edit-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
            }
        }
        redirect('master/guru');
    }

    public function delete($id = null) {
        $res = $this->guru_model->delete(array('id_guru' => $id));
        $this->log->add_log('Hapus Data ' . $this->modul);
        if ($res) {
            $this->session->set_flashdata('message', $this->message->get_message('success', 'delete-success'));
        } else {
            $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
        }
        redirect('master/guru');
    }

}
