<?php

/**
 * Description of MY_Controller
 *
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pembayaran extends MY_Controller {

    var $modul = 'Pembayaran SPP';

    public function __construct() {
        parent::__construct();
        $this->is_logged_in();
    }

    public function index() {
        $data = array(
            'title_page' => 'Semua Data',
            'common' => $this,
            'modul' => $this->modul,
            'title_content' => 'Data ' . $this->modul,
            'list_data' => $this->pembayaran_header_model->select('*', array('status' => 'LUNAS'), null, null, array('field' => 'tgl_pembayaran', 'sort' => 'desc'))->result(),
            'page' => 'webadmin/transaksi/pembayaran/list'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function search() {
        $param = array('tgl' => $this->input->post('inp_tgl_transaksi'));
        $tgl_transaksi = date('Y-m-d', strtotime($this->input->post('inp_tgl_transaksi')));
        $array_where = array(
            'tgl_pembayaran' => $tgl_transaksi,
            'status' => 'LUNAS'
        );
        $data = array(
            'title_page' => 'Semua Data',
            'common' => $this,
            'modul' => $this->modul,
            'title_content' => 'Data ' . $this->modul,
            'list_data' => $this->pembayaran_header_model->select('*', $array_where, null, null, array('field' => 'tgl_pembayaran', 'sort' => 'desc'))->result(),
            'page' => 'webadmin/transaksi/pembayaran/search',
            'param' => $param
        );
        $this->load->view('webadmin/index', $data);
    }

    public function add($kode_transaksi = null) {
        if ($kode_transaksi == null) {
            $cnt = $this->counter->generate_id_with_zero('PB' . date('ym'), 4);
            $kode_transaksi = 'PB' . date('ym') . $cnt;
            $data['kode_pembayaran'] = $kode_transaksi;
            $data['tgl_pembayaran'] = date('Y-m-d');
            $this->pembayaran_header_model->add($data);
            redirect('transaksi/pembayaran/add/' . $kode_transaksi);
        } else {
            $data = array(
                'title_page' => 'Tambah Data',
                'common' => $this,
                'data_header' => $this->pembayaran_header_model->select('*', array('kode_pembayaran' => $kode_transaksi), null, null, null)->row(),
                'list_data_det' => $this->pembayaran_det_model->select('*', array('kode_pembayaran' => $kode_transaksi), null, null, null)->result(),
                'list_data_siswa' => $this->siswa_model->select('*', null, null, null, null)->result(),
                'list_data_kat' => $this->listcode_model->select('*', array('head_list' => 'JL', 'substr(kode_list, 1,1) = \'K\'' => NULL), null, null, null)->result(),
                'page' => 'webadmin/transaksi/pembayaran/add',
                'modul' => $this->modul,
            );
            $this->load->view('webadmin/index', $data);
        }
    }

    public function view($kode_transaksi = null) {
        $data = array(
            'title_page' => 'Lihat Data',
            'common' => $this,
            'data_header' => $this->pembayaran_header_model->select('*', array('kode_pembayaran' => $kode_transaksi), null, null, null)->row(),
            'list_data_det' => $this->pembayaran_det_model->select('*', array('kode_pembayaran' => $kode_transaksi), null, null, null)->result(),
            'page' => 'webadmin/transaksi/pembayaran/view',
            'modul' => $this->modul,
        );
        $this->load->view('webadmin/index', $data);
    }

    public function cetak($kode_transaksi = null) {
        $data = array(
            'data_header' => $this->pembayaran_header_model->select('*', array('kode_pembayaran' => $kode_transaksi), null, null, null)->row(),
            'list_data_det' => $this->pembayaran_det_model->select('*', array('kode_pembayaran' => $kode_transaksi), null, null, null)->result(),
        );
        $this->load->view('webadmin/transaksi/pembayaran/print_1', $data);
    }

    public function process($kode = null) {
        $data['kode_siswa'] = $this->input->post('inp_kode_siswa');
        $data['tgl_pembayaran'] = date('Y-m-d', strtotime($this->input->post('inp_tgl_pembayaran')));

        $submit = $this->input->post('submit');
        if ($submit == 'save_header') {
            $data['status'] = 'Lunas';
            $content = $this->pembayaran_header_model->edit($data, array('kode_pembayaran' => $kode));
            $this->add_jurnal($kode);
            $this->log->add_log('Lunas ' . $this->modul, $kode);
            if ($content) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'add-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
            }
            redirect('transaksi/pembayaran/view/' . $kode);
        } else if ($submit == 'save_detail') {
            $this->pembayaran_header_model->edit($data, array('kode_pembayaran' => $kode));

            $data_detil = array(
                'kode_pembayaran' => $kode,
                'jenis_pembayaran' => $this->input->post('inp_jenis_pembayaran'),
                'jumlah' => $this->input->post('inp_jumlah'),
                'bulan' => $this->input->post('inp_bulan'),
                'tahun' => $this->input->post('inp_tahun'),
                'keterangan' => $this->input->post('inp_ket')
            );
            $content = $this->pembayaran_det_model->add($data_detil);
            if ($content) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'Pembayaran Berhasil ditambah', 'test'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
            }
            redirect('transaksi/pembayaran/add/' . $kode);
        }
    }

    public function delete($kode_transaksi = null) {
        $res = $this->pembayaran_header_model->delete(array('kode_pembayaran' => $kode_transaksi));
        $this->log->add_log('Hapus Data ' . $this->modul, $kode_transaksi);
        $this->jurnal->delete_jurnal($kode_transaksi);
        if ($res) {
            $this->session->set_flashdata('message', $this->message->get_message('success', 'delete-success'));
        } else {
            $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
        }
        redirect('transaksi/pembayaran');
    }

    public function delete_detil($kode, $id = null) {
        $res = $this->pembayaran_det_model->delete(array('id_pembayaran_detail' => $id));
        $this->log->add_log('Hapus Data ' . 'Detail Pembayaran');
        if ($res) {
            $this->session->set_flashdata('message', $this->message->get_message('success', 'delete-success'));
        } else {
            $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
        }
        redirect('transaksi/pembayaran/add/' . $kode);
    }

    //add jurnal khusus pembayaran
    public function add_jurnal($kode) {
        $data_header = $this->pembayaran_header_model->select('*', array('kode_pembayaran' => $kode), null, null, null)->row();
        $list_detil = $this->pembayaran_det_model->select('*', array('kode_pembayaran' => $kode), null, null, null)->result();
        foreach ($list_detil as $detil) {
            $arr_jurnal = array(
                'tgl_jurnal' => $data_header->tgl_pembayaran,
                'jenis_transaksi' => $detil->jenis_pembayaran,
                'keterangan' => $detil->jenis_pembayaran == 'K01' ? 'Pendaftaran (' . $data_header->nama_siswa . ')' : 'SPP ' . $data_header->nama_siswa . ' (' . $detil->bulan . '/' . $detil->tahun . ')',
                'kredit' => $detil->jumlah,
                'debit' => 0,
                'kode_transaksi' => $detil->kode_pembayaran
            );
            $this->jurnal->add_jurnal($arr_jurnal);
        }
    }
    
    //ajax post untuk detail data
    public function save_detail() {
        $kode = $this->input->post('inp_kode');

        $data_detil = array(
            'kode_pembayaran' => $kode,
            'jenis_pembayaran' => $this->input->post('inp_jenis_pembayaran'),
            'jumlah' => $this->input->post('inp_jumlah'),
            'bulan' => $this->input->post('inp_bulan'),
            'tahun' => $this->input->post('inp_tahun'),
            'keterangan' => $this->input->post('inp_ket')
        );
        $this->pembayaran_det_model->add($data_detil);

        $return[0] = $this->get_table_detail($kode);
        echo json_encode($return);
    }
    
    public function delete_detail() {
        $id_detail = $this->input->post('inp_id_detail');
        $kode = $this->input->post('inp_kode');
        $this->pembayaran_det_model->delete(array('id_pembayaran_detail' => $id_detail));
        
        $return[0] = $this->get_table_detail($kode);
        echo json_encode($return);
    }

    public function get_table_detail($kode) {
        $data = array(
            'list_data_det' => $this->pembayaran_det_model->select('*', array('kode_pembayaran' => $kode), null, null, null)->result()
        );
        return $this->load->view('webadmin/transaksi/pembayaran/list_detail', $data, TRUE);
    }

}
