<?php

/**
 * Description of Siswa_model
 *
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gaji_guru_model extends CI_Model {

    var $table_name = 't_gaji_guru';
    var $view_name = 'view_t_gaji_guru';

    public function __construct() {
        parent::__construct();
    }

    public function select($field, $where = array(), $limit = null, $offset = '', $order = array('field' => null, 'sort' => 'ASC')) {
        $field .= ',(select count(DISTINCT ag.kode_guru) from t_absen_guru ag where ag.tgl_absen >= t_gaji_guru.tgl_awal and ag.tgl_absen <= t_gaji_guru.tgl_akhir and ag.tingkat = t_gaji_guru.tingkat) as jml_guru '
                . ',(select sum(ag.jumlah_jam) from t_absen_guru ag where ag.tgl_absen >= t_gaji_guru.tgl_awal and ag.tgl_absen <= t_gaji_guru.tgl_akhir and ag.tingkat = t_gaji_guru.tingkat) as tot_jam '; 
        $this->db->select($field);
        if (!is_null($order['field'])) {
            $this->db->order_by($order['field'], $order['sort']);
        }
        return $this->db->get_where($this->table_name, $where, $limit, $offset);
    }

    public function select_view($field, $where = array(), $limit = null, $offset = '', $order = array('field' => null, 'sort' => 'ASC')) {
        $this->db->select($field);
        if (!is_null($order['field'])) {
            $this->db->order_by($order['field'], $order['sort']);
        }
        return $this->db->get_where($this->view_name, $where, $limit, $offset);
    }

    public function add($data) {
        return $this->db->insert($this->table_name, $data);
    }

    public function edit($data, $param = array()) {
        return $this->db->update($this->table_name, $data, $param);
    }

    public function delete($param = array()) {
        return $this->db->delete($this->table_name, $param);
    }

}
