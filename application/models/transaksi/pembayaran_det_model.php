<?php
/**
 * Description of Siswa_model
 *
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pembayaran_det_model extends CI_Model {

    var $table_name = 't_pembayaran_detail';

    public function __construct() {
        parent::__construct();
    }

    public function select($field, $where = array(), $limit = null, $offset = '', $order = array('field' => null, 'sort' => 'ASC')) {
        $field .= ', (select u.nama_list from u_list_code u where u.kode_list = t_pembayaran_detail.jenis_pembayaran) as jns_pemb';
        $this->db->select($field);
        if (!is_null($order['field'])) {
            $this->db->order_by($order['field'], $order['sort']);
        }
        return $this->db->get_where($this->table_name, $where, $limit, $offset);
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
