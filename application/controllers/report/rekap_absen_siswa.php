<?php

/**
 * Description of MY_Controller
 *
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Rekap_absen_siswa extends MY_Controller {

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
            'list_data_kelas' => $this->listcode_model->select('*', array('head_list' => 'KLS'), null, null, null)->result(),
            'page' => 'webadmin/report/rekap_absen_siswa/list'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function search() {
        $submit = $this->input->post('submit');

        $param = array(
            'bulan' => $this->input->post('inp_bulan'),
            'tahun' => $this->input->post('inp_tahun'),
            'kelas' => $this->input->post('inp_kelas')
        );

        $field = 'kode_siswa, nama_siswa';
        for ($i = 1; $i <= 10; $i++) {
            $as = 'ket_' . $i;
            $field .= ',('
                    . 'select t.keterangan '
                    . 'from t_absen_siswa t '
                    . 'WHERE t.kode_siswa = m_siswa.kode_siswa '
                    . 'and t.pertemuan = \'' . $i . '\''
                    . 'and year(t.tanggal)= \'' . $param['tahun'] . '\' '
                    . 'and month(t.tanggal)= \'' . $param['bulan'] . '\''
                    . ') as ' . $as;
        }

        $array_where = array('kelas' => $param['kelas']);

        if ($submit == 'search_data') {
            $data = array(
                'title_page' => 'Semua Data',
                'common' => $this,
                'modul' => $this->modul,
                'title_content' => 'Data ' . $this->modul,
                'list_data' => $this->siswa_model->select($field, $array_where, null, null, null)->result_array(),
                'list_data_kelas' => $this->listcode_model->select('*', array('head_list' => 'KLS'), null, null, null)->result(),
                'page' => 'webadmin/report/rekap_absen_siswa/search',
                'param' => $param
            );
            $this->load->view('webadmin/index', $data);
        } else if ($submit == 'print_data') {
            $this->cetak_data($field, $array_where, $param);
        } else {

            $filename = 'Daftar Hadir' . '_' . $param['kelas'] . '_' . $param['bulan'] . $param['tahun'] . '_' . mt_rand(1, 1000) . '.xls'; //just some random filename
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="' . $filename . '"');
            header('Cache-Control: max-age=0');

            $data = array(
                'common' => $this,
                'list_data' => $this->siswa_model->select($field, $array_where, null, null, null)->result_array(),
                'param' => $param
            );
            $this->load->view('webadmin/report/rekap_absen_siswa/cetak_absen', $data);
        }
    }

    public function cetak_data($field, $array_where, $param) {
        $filename = 'Rekap absensi' . '_' . $param['kelas'] . '_' . $param['bulan'] . $param['tahun'] . '_' . mt_rand(1, 1000) . '.xls'; //just some random filename
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $data = array(
            'common' => $this,
            'list_data' => $this->siswa_model->select($field, $array_where, null, null, null)->result_array(),
            'param' => $param
        );
        $this->load->view('webadmin/report/rekap_absen_siswa/cetak', $data);
    }

    public function process($action, $id = null) {
        //var
        $data['nama_siswa'] = $this->input->post('inp_nama_siswa');
        $data['jenis_kelamin'] = $this->input->post('inp_jenis_kelamin');
        $data['tempat_lahir'] = $this->input->post('inp_tempat_lahir');
        $data['tgl_lahir'] = date('Y-m-d', strtotime($this->input->post('inp_tgl_lahir')));
        $data['anak_ke'] = $this->input->post('inp_anak_ke');
        $data['asal_sekolah'] = $this->input->post('inp_asal_sekolah');
        $data['kelas'] = $this->input->post('inp_kelas');
        $data['telp_siswa'] = $this->input->post('inp_telp_siswa');
        $data['alamat'] = $this->input->post('inp_alamat');
        $data['nama_ayah'] = $this->input->post('inp_nama_ayah');
        $data['pkj_ayah'] = $this->input->post('inp_pkj_ayah');
        $data['nama_ibu'] = $this->input->post('inp_nama_ibu');
        $data['pkj_ibu'] = $this->input->post('inp_pkj_ibu');
        $data['telp_ortu'] = $this->input->post('inp_telp_ortu');
        $data['telp_ortu_2'] = $this->input->post('inp_telp_ortu_2');

        if ($action == 'add') {
            $cnt = $this->counter->generate_id_with_zero(date('Y'), 5);
            $data['kode_siswa'] = date('Y') . $cnt;
            $res = $this->siswa_model->add($data);
            $this->log->add_log('Tambah Data ' . $this->modul, $data['nama_depan']);
            if ($res) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'add-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'failed'));
            }
        } else if ($action == 'edit') {
            $content = $this->siswa_model->edit($data, array('id_siswa' => $id));
            $this->log->add_log('Ubah Data ' . $this->modul, $data['nama_siswa']);
            if ($content) {
                $this->session->set_flashdata('message', $this->message->get_message('success', 'edit-success'));
            } else {
                $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
            }
        }
        redirect('report/rekap_absen_siswa');
    }

    public function delete($id = null) {
        $res = $this->siswa_model->delete(array('id_siswa' => $id));
        $this->log->add_log('Hapus Data ' . $this->modul);
        if ($res) {
            $this->session->set_flashdata('message', $this->message->get_message('success', 'delete-success'));
        } else {
            $this->session->set_flashdata('message', $this->message->get_message('danger', 'failed'));
        }
        redirect('report/rekap_absen_siswa');
    }

    public function testing() {
        $awal = '06/2016';
        $akhir = '12/2016';
        print_r($this->get_bulan_tahun($awal, $akhir));
    }

    public function get_bulan_tahun($start, $end) {
        $thn_aw = substr($start, 3, 4);
        $bln_aw = intval(substr($start, 0, 2));
        $thn_ak = substr($end, 3, 4);
        $bln_ak = intval(substr($end, 0, 2));
        if ($bln_ak < 12) {
            $bln_ak += 1;
        } else {
            $bln_ak = 1;
            $thn_ak += 1;
        }

        $bl_ck = $bln_aw;
        $th_ck = $thn_aw;
        $arr_bt_cek = array();
        $xxx = '';
        while ($th_ck < $thn_ak || $bl_ck < $bln_ak) {
            $txt_bl = $bl_ck < 10 ? '0' . $bl_ck : $bl_ck;
            $xxx = $txt_bl . '-' . $th_ck;
            $bl_ck += 1;
            if ($bl_ck > 12) {
                $bl_ck = 1;
                $th_ck += 1;
            }
            array_push($arr_bt_cek, $xxx);
        }
        return $arr_bt_cek;
    }

}
