<?php

/**
 * Description of MY_Controller
 *
 * @author TIAbdilah
 * STUDIOIT
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//counter
require_once(APPPATH . 'controllers/common/counter.php');
require_once(APPPATH . 'controllers/common/c_log.php');
require_once(APPPATH . 'controllers/common/c_jurnal.php');

class MY_Controller extends CI_Controller {

    var $test = 'test from my_controller';
    var $counter = null;
    var $log = null;
    var $jurnal = null;
    var $template_path = null;
    var $grafik_pasien = null;
    var $menu = null;
    var $submenu = null;
    var $setting = null;
    var $countmenu = null;

    public function __construct() {
        parent::__construct();
        //model master
        $this->load->model('master/siswa_model');
        $this->load->model('master/guru_model');
        $this->load->model('master/jadwal_model');

        //model transaksi
        $this->load->model('transaksi/pembayaran_header_model');
        $this->load->model('transaksi/pembayaran_det_model');
        $this->load->model('transaksi/pengeluaran_model');
        $this->load->model('transaksi/absen_siswa_model');
        $this->load->model('transaksi/absen_guru_model');
        $this->load->model('transaksi/pembuatan_dokumen_model');
        $this->load->model('transaksi/gaji_guru_model');

        //model report
        $this->load->model('report/jurnal_model');

        //model utilitas
        $this->load->model('utility/user_model');
        $this->load->model('utility/modul_model');
        $this->load->model('utility/role_model');
        $this->load->model('utility/listcode_model');
        $this->load->model('utility/setting_model');
        //model common
        $this->load->model('common/log_model');

        //library
        $this->load->library('upload');
        $this->load->library('image_lib');
        $this->load->library('datatables_ssp');

        //$this->is_logged_in();
        $this->conn = array(
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db' => $this->db->database,
            'host' => $this->db->hostname
        );

        $this->template_path = FCPATH . "assets/webadmin/template_report/";
//        $this->grafik_pasien = $this->date_grafik();
        $this->initialize();
    }

    public function count_data($param) {
        switch ($param) {
            case 'plan_complete';
                $data['tile'] = $this->planning_model->select('id_planning', array('status_job in (\'C\', \'CP\')' => NULL), null, null, null)->num_rows();
                return $data['tile'];
                break;
            case 'plan_progress';
                $data['tile'] = $this->planning_model->select('id_planning', array('status_job' => 'IP'), null, null, null)->num_rows();
                return $data['tile'];
                break;
            case 'plan_open';
                $data['tile'] = $this->planning_model->select('id_planning', array('status_job' => 'O'), null, null, null)->num_rows();
                return $data['tile'];
                break;
            case 'plan_pending';
                $data['tile'] = $this->planning_model->select('id_planning', array('status_job' => 'P'), null, null, null)->num_rows();
                return $data['tile'];
                break;
            default :
                return 'unknow';
                break;
        }
    }

    public function initialize() {
        $this->menu = $this->listcode_model->select('*', array('head_list' => 'MD'), NULL, NULL, NULL)->result();
        $this->submenu = $this->modul_model->select('*', NULL, NULL, NULL, array('field' => 'kode_modul', 'sort' => 'asc'))->result();
        $this->counter = new Counter();
        $this->log = new C_log();
        $this->jurnal = new C_jurnal();

        $data_tahun_awal = $this->setting_model->select('*', array('kode_setting' => 'THA'), NULL, NULL, NULL)->row();
        $data_honor = $this->listcode_model->select('*', array('head_list' => 'MD'), NULL, NULL, NULL)->result();

        $this->setting = array(
            'tahun_awal' => $data_tahun_awal->value_setting,
            'dash_url' => site_url('common/dash')
        );

        $field_countmenu = 'nama_role,'
                . '(SELECT count(r.id_role) FROM u_role r WHERE r.kode_role = u_role.kode_role AND r.hak_akses LIKE \'%M%\') AS master, '
                . '(SELECT count(r.id_role) FROM u_role r WHERE r.kode_role = u_role.kode_role AND r.hak_akses LIKE \'%T%\') AS transaksi, '
                . '(SELECT count(r.id_role) FROM u_role r WHERE r.kode_role = u_role.kode_role AND r.hak_akses LIKE \'%R%\') AS report, '
                . '(SELECT count(r.id_role) FROM u_role r WHERE r.kode_role = u_role.kode_role AND r.hak_akses LIKE \'%U%\') AS utilitas';
        $this->countmenu = $this->role_model->select($field_countmenu, array('nama_role' => $this->session->userdata('kn_type')), NULL, NULL, NULL)->result_array();
    }

    public function ajax_tabel_lib($table_name, $table_column, $button = null) {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $connection = array(
                'user' => $this->db->username,
                'pass' => $this->db->password,
                'db' => $this->db->database,
                'host' => $this->db->hostname
            );
            $primaryKey = $table_column[0];
            $columns = array();
            for ($i = 0; $i < count($table_column); $i++) {
                if ($i == 0) {
                    $arr = array('db' => $table_column[$i], 'dt' => 'DT_RowId');
                    array_push($columns, $arr);
                } else {
                    $arr = array('db' => $table_column[$i], 'dt' => $table_column[$i]);
                    array_push($columns, $arr);
                }
            }
            //button
            if ($button != null) {
                $frmt = array('db' => $table_column[0], 'dt' => 'aksi');
                $format = array_merge($frmt, $button);
                array_push($columns, $format);
            }

            // json data
            // $connection : detil koneksi database
            // $table_name : nama tabel yang akan ditampilkan datanya
            // $primaryKey : primari key dari tabel 
            // $columns : array field tabel
            echo json_encode(
                    Datatables_ssp::simple($_GET, $connection, $table_name, $primaryKey, $columns)
            );
        }
    }

    public function is_logged_in() {
        if ($this->session->userdata('kn_is_login') == '') {
            redirect('common/auth');
        }
    }

}
