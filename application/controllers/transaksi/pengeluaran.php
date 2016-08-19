<?php

/**
 * Description of MY_Controller
 *
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengeluaran extends MY_Controller {

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
            'list_data' => $this->pengeluaran_model->select('*', null, null, null, array('field' => 'tgl_pengeluaran', 'sort' => 'desc'))->result(),
            'list_data_kat' => $this->listcode_model->select('*', array('head_list' => 'JL', 'substr(kode_list, 1,1) = \'D\'' => NULL), null, null, null)->result(),
            'page' => 'webadmin/transaksi/pengeluaran/list'
        );
        $this->load->view('webadmin/index', $data);
    }
    
    public function search() {
        $param = array('tgl'=>$this->input->post('inp_tgl_transaksi'));
        $tgl_transaksi = date('Y-m-d', strtotime($this->input->post('inp_tgl_transaksi')));
        $array_where = array(
            'tgl_pengeluaran' => $tgl_transaksi
        );
        $data = array(
            'title_page' => 'Semua Data',
            'common' => $this,
            'modul' => $this->modul,
            'title_content' => 'Data ' . $this->modul,
            'list_data' => $this->pengeluaran_model->select('*', $array_where, null, null, array('field' => 'tgl_pengeluaran', 'sort' => 'desc'))->result(),
            'list_data_kat' => $this->listcode_model->select('*', array('head_list' => 'JL', 'substr(kode_list, 1,1) = \'D\'' => NULL), null, null, null)->result(),
            'page' => 'webadmin/transaksi/pengeluaran/search',
            'param'=>$param
        );
        $this->load->view('webadmin/index', $data);
    }

    public function process($action, $id = null) {
        //var        
        $data['tgl_pengeluaran'] = date('Y-m-d', strtotime($this->input->post('inp_tgl')));
        $data['jenis_pengeluaran'] = $this->input->post('inp_jenis_pengeluaran');
        $data['keterangan'] = $this->input->post('inp_ket');
        $data['jumlah'] = $this->input->post('inp_jumlah');

        if ($action == 'add') {
            $cnt = $this->counter->generate_id_with_zero('DE' . date('ym'), 3);
            $data['kode_pengeluaran'] = 'DE' . date('ym') . $cnt;
            $res = $this->pengeluaran_model->add($data);
            $this->log->add_log('Tambah Data ' . $this->modul, $data['keterangan']);

            $arr_jurnal = array(
                'tgl_jurnal' => $data['tgl_pengeluaran'],
                'jenis_transaksi' => $data['jenis_pengeluaran'],
                'keterangan' => $data['keterangan'],
                'kredit' => 0,
                'debit' => $data['jumlah'],
                'kode_transaksi' => $data['kode_pengeluaran']
            );
            $this->jurnal->add_jurnal($arr_jurnal);

            if ($res) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'add-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'failed'));
            }
        } 
        redirect('transaksi/pengeluaran');
    }

    public function delete($kode_transaksi = null) {
        $res = $this->pengeluaran_model->delete(array('kode_pengeluaran' => $kode_transaksi));
        $this->log->add_log('Hapus Data ' . $this->modul, $kode_transaksi);
        $this->jurnal->delete_jurnal($kode_transaksi);
        if ($res) {
            $this->session->set_flashdata('message', $this->message->get_message('success', 'delete-success'));
        } else {
            $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
        }
        redirect('transaksi/pengeluaran');
    }
    
    public function jurnal_manual() {
        $list_data = $this->pengeluaran_model->select('*', null, null, null, null)->result();
        foreach ($list_data as $data) {
            echo $data->kode_pengeluaran.'<br>';
            $arr_jurnal = array(
                'tgl_jurnal' => $data->tgl_pengeluaran,
                'jenis_transaksi' => $data->jenis_pengeluaran,
                'keterangan' => $data->keterangan,
                'kredit' => 0,
                'debit' => $data->jumlah,
                'kode_transaksi' => $data->kode_pengeluaran
            );
            $this->jurnal->add_jurnal($arr_jurnal);
        }
    }

}
