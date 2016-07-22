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


require_once(APPPATH . 'controllers/common/counter.php');

class C_jurnal extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('report/jurnal_model');
    }

    public function add_jurnal($param) {
        $counter = new Counter();
        $cnt = $counter->generate_id_with_zero($param['jenis_transaksi'].'-'.date('my', $param['tgl_jurnal']), 3);
        $kode = $param['jenis_transaksi'].'-'.date('my', strtotime($param['tgl_jurnal'])).'-'.$cnt;
        $data = array(
            'tgl_jurnal' => $param['tgl_jurnal'],
            'kode_jurnal' => $kode,
            'keterangan' => $param['keterangan'],
            'kredit' => $param['kredit'],
            'debit' => $param['debit'],
            'kode_transaksi' => $param['kode_transaksi']
        );
        $this->jurnal_model->add($data);
    }
    
    public function delete_jurnal($kode_transaksi) {
        $this->jurnal_model->delete(array('kode_transaksi'=>$kode_transaksi));
    }

}
