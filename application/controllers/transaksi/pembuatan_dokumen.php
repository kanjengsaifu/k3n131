<?php

/**
 * Description of MY_Controller
 *
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pembuatan_dokumen extends MY_Controller {

    var $modul = 'Pembuatan Dokumen';

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
            'title_content' => 'Data ' . $this->modul,
            'list_data' => $this->pembuatan_dokumen_model->select('*', null, null, null, array('field' => 'tgl_pembuatan_dok', 'sort' => 'desc'))->result(),
            'list_data_guru' => $this->guru_model->select('*', null, null, null, array('field' => 'nama_guru', 'sort' => 'asc'))->result(),
            'list_data_tipe' => $this->listcode_model->select('*', array('head_list'=>'TD'), null, null, null)->result(),
            'list_data_tingkat' => $this->listcode_model->select('*', array('head_list'=>'TK'), null, null, null)->result(),
            'page' => 'webadmin/transaksi/pembuatan_dokumen/list'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function process($action, $id = null) {
        //var
        $data['kode_guru'] = $this->input->post('inp_kode_guru');
        $data['tgl_pembuatan_dok'] = date('Y-m-d', strtotime($this->input->post('inp_tgl_pembuatan_dok')));
        $data['tipe_dok'] = $this->input->post('inp_tipe_dok');
        $data['keterangan'] = $this->input->post('inp_keterangan');
        $data['tingkat'] = $this->input->post('inp_tingkat');
        
        $cek = $this->pembuatan_dokumen_model->select('*', $data, null, null, null)->num_rows();

        if ($action == 'add') {
            if ($cek == 0) {
                $res = $this->pembuatan_dokumen_model->add($data);
                $this->log->add_log('Tambah Data ' . $this->modul, $data['kode_guru']);
                if ($res) {
                    $this->session->set_flashdata('message', $this->message->get_message('success', 'add-success'));
                } else {
                    $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
                }
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
            }
        } else if ($action == 'edit') {
            if ($cek == 0) {
                $content = $this->pembuatan_dokumen_model->edit($data, array('id_pembuatan_dok' => $id));
                $this->log->add_log('Ubah Data ' . $this->modul, $data['nama_guru']);
                if ($content) {
                    $this->session->set_flashdata('message', $this->message->get_message('success', 'edit-success'));
                } else {
                    $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
                }
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
            }
        }
        redirect('transaksi/pembuatan_dokumen');
    }

    public function delete($id = null) {
        $res = $this->pembuatan_dokumen_model->delete(array('id_pembuatan_dok' => $id));
        $this->log->add_log('Hapus Data ' . $this->modul);
        if ($res) {
            $this->session->set_flashdata('message', $this->message->get_message('success', 'delete-success'));
        } else {
            $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
        }
        redirect('transaksi/pembuatan_dokumen');
    }

}
