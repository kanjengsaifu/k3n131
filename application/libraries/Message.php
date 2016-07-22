<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of template_model
 *
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Message {

    var $content = array(
        'add-success' => "Data berhasil di input",
        'add-booking' => "Data berhasil di simpan",
        'edit-success' => "Data berhasil di ubah",
        'delete-success' => "Data berhasil di hapus",
        'delete-confirm' => "Apakah anda yakin akan menghapus data {0} ?",
        'error-upload-image' => "File gambar tidak sesuai",
        'wrong-password' => 'Password Anda Salah',
        'failed' => 'Proses Gagal',
    );
    var $label = array(
        'success' =>'Success',
        'danger' =>' Failed',
    );
    public function index() {
        $param = array('aaaa', 'bbbb', 'cccc', 'dddd', 'eeee', 'ffff');
        echo $this->get_message('delete-confirm', $param);
    }

    public function get_message_text($code_msg, $param = null) {
        $msg_txt = $this->content[$code_msg];
        if ($param != null) {
            for ($i = 0; $i < count($param); $i++) {
                $msg_txt = str_replace('{' . $i . '}', $param[$i], $msg_txt);
            }
        }
        return $msg_txt;
    }

    public function get_message($condition, $code_msg, $type = null, $param = null) {
        $msg = '<div class = "alert alert-' . $condition . '">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>' . $this->label[$condition] . '!</strong> ';
        if ($type != null) {
            $msg = $msg . $code_msg;
        } else {
            $msg = $msg . $this->get_message_text($code_msg, $type, $param);
        }
        $msg .= '</div>';
        return $msg;
    }

}
