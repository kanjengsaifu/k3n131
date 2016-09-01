<?php

/**
 * Description of MY_Controller
 *
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gaji_guru extends MY_Controller {

    var $modul = 'Gaji Guru';

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
            'list_data' => $this->gaji_guru_model->select('*', null, null, null, array('field' => 'id_gaji_guru', 'sort' => 'desc'))->result(),
            'list_data_tingkat' => $this->listcode_model->select('*', array('head_list' => 'TK'), null, null, null)->result(),
            'page' => 'webadmin/transaksi/gaji_guru/list'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function view($id = NULL) {
        $data_gaji = $this->gaji_guru_model->select('*', array('id_gaji_guru' => $id), null, null, null)->row();
        $array_where = array(
            'tgl_absen >= \'' . $data_gaji->tgl_awal . '\'' => null,
            'tgl_absen <= \'' . $data_gaji->tgl_akhir . '\'' => null,
            'tingkat' => $data_gaji->tingkat
        );

        $field = 'kode_guru '
                . ',sum(jumlah_jam) as jml_jam';

        $data = array(
            'title_page' => 'Semua Data',
            'common' => $this,
            'modul' => $this->modul,
            'title_content' => 'Lihat Data ' . $this->modul,
            'data' => $data_gaji,
            'list_data_absen' => $this->absen_guru_model->select($field, $array_where, null, null, array('field' => 'kode_guru', 'sort' => 'asc'), 'kode_guru')->result(),
            'page' => 'webadmin/transaksi/gaji_guru/view'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function cetak($id = null) {

        $data_gaji = $this->gaji_guru_model->select('*', array('id_gaji_guru' => $id), null, null, null)->row();
        $array_where = array(
            'tgl_absen >= \'' . $data_gaji->tgl_awal . '\'' => null,
            'tgl_absen <= \'' . $data_gaji->tgl_akhir . '\'' => null,
            'tingkat' => $data_gaji->tingkat
        );

        $filename = 'Rekap Gaji Guru' . '_' . $data_gaji->tingkat . '' . mt_rand(1, 1000) . '.xls'; //just some random filename
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $field = 'kode_guru '
                . ',sum(jumlah_jam) as jml_jam';

        $data = array(
            'common' => $this,
            'data' => $data_gaji,
            'list_data_absen' => $this->absen_guru_model->select($field, $array_where, null, null, array('field' => 'kode_guru', 'sort' => 'asc'), 'kode_guru')->result(),
        );
        $this->load->view('webadmin/transaksi/gaji_guru/cetak', $data);
    }

    public function cetak_detil($act, $id = null) {
        $data_gaji = $this->gaji_guru_model->select('*', array('id_gaji_guru' => $id), null, null, null)->row();
        $array_where = array(
            'tgl_absen >= \'' . $data_gaji->tgl_awal . '\'' => null,
            'tgl_absen <= \'' . $data_gaji->tgl_akhir . '\'' => null,
            'tingkat' => $data_gaji->tingkat
        );

        if ($act == 'excel') {
            $filename = 'Rekap Gaji Guru (Detil)' . '_' . $data_gaji->tingkat . '' . mt_rand(1, 1000) . '.xls'; //just some random filename
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="' . $filename . '"');
            header('Cache-Control: max-age=0');
        }

        $field = 'kode_guru '
                . ',sum(jumlah_jam) as jml_jam';

        $data = array(
            'common' => $this,
            'param' => $array_where,
            'data' => $data_gaji,
            'list_data_absen' => $this->absen_guru_model->select($field, $array_where, null, null, array('field' => 'kode_guru', 'sort' => 'asc'), 'kode_guru')->result(),
        );
        $this->load->view('webadmin/transaksi/gaji_guru/cetak_detil', $data);
    }

    public function process($action, $id = null) {

        $data['tgl_awal'] = date('Y-m-d', strtotime($this->input->post('inp_tgl_awal')));
        $data['tgl_akhir'] = date('Y-m-d', strtotime($this->input->post('inp_tgl_akhir')));
        $data['tingkat'] = $this->input->post('inp_tingkat');

        if ($action == 'add') {
            $cnt = $this->counter->generate_id_with_zero('HG' . date('ym'), 3);
            $data['kode_transaksi'] = 'HG' . date('ym') . $cnt;
            $ctn = $this->gaji_guru_model->add($data);
            $this->log->add_log('Tambah Data ' . $this->modul, $data['tgl_awal'] . ' - ' . $data['tgl_akhir'] . ' - ' . $data['tgl_tingkat']);
            if ($ctn) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'add-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
            }
        } elseif ($action == 'update_status') {
            $us['status'] = 1;
            $ctn = $this->gaji_guru_model->edit($us, array('id_gaji_guru' => $id));
            $this->log->add_log('Ubah Data ' . $this->modul, null);

            $gg = $this->gaji_guru_model->select('*', array('id_gaji_guru' => $id), null, null, null)->row();
            $arr_jurnal = array(
                'tgl_jurnal' => date('Y-m-d'),
                'jenis_transaksi' => 'D06',
                'keterangan' => 'Gaji Guru (' . $gg->tgl_awal . '-' . $gg->tgl_akhir . ')',
                'kredit' => 0,
                'debit' => $gg->tot_jam * $this->setting['honor_' . strtolower($gg->tingkat)],
                'kode_transaksi' => $gg->kode_transaksi
            );
//            print_r($arr_jurnal);
            $this->jurnal->add_jurnal($arr_jurnal);

            if ($ctn) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'add-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
            }
        }
        redirect('transaksi/gaji_guru');
    }

    public function delete($kode_transaksi = null) {
        $res = $this->gaji_guru_model->delete(array('kode_transaksi' => $kode_transaksi));
        $this->log->add_log('Hapus Data ' . $this->modul);
        $this->jurnal->delete_jurnal($kode_transaksi);
        if ($res) {
            $this->session->set_flashdata('message', $this->message->get_message('success', 'delete-success'));
        } else {
            $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
        }
        redirect('transaksi/gaji_guru');
    }

    public function get_gaji_tingkat($tingkat) {
        $kode_setting = 'HG_' . $tingkat;
        $gj = $this->setting_model->select('*', array('kode_setting' => $kode_setting), null, null, null)->row();
        return $gj;
    }

    public function get_list_absen($param) {
        $absen = $this->absen_guru_model->select('*', $param, null, null, array('field' => 'tgl_absen', 'sort' => 'asc'))->result();
        return $absen;
    }

}
