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
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dash extends MY_Controller {

    var $modul = 'Dashboard';

    public function __construct() {
        parent::__construct();
        $this->is_logged_in();
        $this->load->library('datatables_ssp');
    }

    public function index() {
        $data = array(
            'title_page' => 'Dashboard',
            'title_content' => 'Dashboard',
            'modul' => $this->modul,
            'common' => $this,
            'list_data_kelas' => $this->listcode_model->select('*', array('head_list' => 'KLS'), null, null, null)->result(),
            'page' => 'webadmin/tile/dash'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function get_jadwal($hari, $jam, $kelas) {
        $array_where = array(
            'hari' => $hari,
            'jam' => $jam,
            'kelas' => $kelas
        );
        return $this->jadwal_model->select('*', $array_where, null, null, null)->row();
    }

    public function get_jml_siswa($kelas = null) {
        if ($kelas != null) {
            $array_where = array('kelas' => $kelas);
            $field = 'kelas, count(id_siswa) as jml';
        } else {
            $array_where = null;
            $field = 'count(id_siswa) as jml';
        }
        return $this->siswa_model->select($field, $array_where, null, null, null)->row();
    }

    public function tour() {
        $data = array(
            'tile' => $this,
            'page' => 'webadmin/tile/tour'
        );
        $this->load->view($data['page'], $data);
    }

    public function backup_db() {
        $this->load->helper('download');
        /* Store All Table name in an Array */
        $return = "";
        $allTables = array();
        $result = mysql_query('SHOW TABLES');

        while ($row = mysql_fetch_row($result)) {
            $allTables[] = $row[0];
        }

        foreach ($allTables as $table) {
            $result = mysql_query('SELECT * FROM ' . $table);
            $num_fields = mysql_num_fields($result);
            $return.= 'DROP TABLE IF EXISTS ' . $table . ';';
            $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE ' . $table));
            $return.= "\n\n" . $row2[1] . ";\n\n";

            for ($i = 0; $i < $num_fields; $i++) {
                while ($row = mysql_fetch_row($result)) {
                    $return.= 'INSERT INTO ' . $table . ' VALUES(';
                    for ($j = 0; $j < $num_fields; $j++) {
                        $row[$j] = addslashes($row[$j]);
                        $row[$j] = str_replace("\n", "\\n", $row[$j]);
                        if (isset($row[$j])) {
                            $return.= '"' . $row[$j] . '"';
                        } else {
                            $return.= '""';
                        }
                        if ($j < ($num_fields - 1)) {
                            $return.= ',';
                        }
                    }
                    $return.= ");\n";
                }
            }
            $return.="\n\n";
        }

        // Create Backup Folder
        $folder = './assets/backup_db/';
        if (!is_dir($folder))
            mkdir($folder, 0755, true);
        chmod($folder, 0755);
        $date = date('d-m-Y_H-i', time());
        $filename = $folder . "KENBI_DATABASE_" . $date;
        $handle = fopen($filename . '.sql', 'w+');
        fwrite($handle, $return);
        fclose($handle);

//        force_download($filename);
//        redirect($filename . '.sql');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filename . '.sql'));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filename . '.sql'));
        readfile($filename . '.sql');
        exit;
    }

    public function setting_account() {
        $data = array(
            'title_page' => 'Setting Account',
            'title_content' => 'Setting Account',
            'modul' => 'Setting Account',
            'common' => $this,
            'data' => $this->user_model->select('*', array('id_user' => $this->session->userdata('kn_id_user')), NULL, NULL, NULL)->row(),
            'page' => 'webadmin/tile/setting_acc'
        );
        $this->load->view('webadmin/index', $data);
    }

    public function process_setting($action, $id = null) {

        if ($action == 'edit_info') {
            $data['nama'] = $this->input->post('inp_nama');
            $data['username'] = $this->input->post('inp_username');
            $data['email'] = $this->input->post('inp_email');
            $res = $this->user_model->edit($data, array('id_user' => $id));
            $this->log->add_log('Ubah Data Info User', $data['nama']);
            if ($res) {
                $this->session->set_flashdata('message1', $this->message->get_message('success', 'add-success'));
            } else {
                $this->session->set_flashdata('message1', $this->message->get_message('success', 'failed'));
            }
        } else if ($action == 'edit_password') {
            $data['pass'] = $this->input->post('inp_pass');
            $data['new_pass'] = $this->input->post('inp_new_pass');
            $data['new_pass_confirm'] = $this->input->post('inp_new_pass_confirm');

            $data_user = $this->user_model->select('*', array('id_user' => $id), null, null, null)->row();

            if ($data_user->password == $data['pass']) {
                if ($data['new_pass'] == $data['new_pass_confirm']) {
                    $data_pass['password'] = $data['new_pass'];
                    $content = $this->user_model->edit($data_pass, array('id_user' => $id));
                    $this->log->add_log('Ubah Data Password', null);
                    if ($content) {
                        $this->session->set_flashdata('message2', $this->message->get_message('success', 'edit-success'));
                    } else {
                        $this->session->set_flashdata('message2', $this->message->get_message('danger', 'failed'));
                    }
                } else {
                    $this->session->set_flashdata('message2', $this->message->get_message('danger', 'failed'));
                }
            } else {
                $this->session->set_flashdata('message2', $this->message->get_message('danger', 'failed'));
            }
        }
        redirect('common/dash/setting_account');
    }

}
