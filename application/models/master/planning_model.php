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
 * STUDIOIT
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Planning_model extends CI_Model {

    var $table_name = 'm_planning';

    public function __construct() {
        parent::__construct();
    }

    public function select($field, $where = array(), $limit = null, $offset = '', $order = array('field' => null, 'sort' => 'ASC')) {
        $field .= ',(select p.keterangan from m_wo p where p.no_wo = wo) as keterangan'
                .',(select l.nama_list from u_list_code l where l.kode_list = (select t.type from m_wo t where t.no_wo = wo)) as type_work'
                .',(select l.nama_list from u_list_code l where l.kode_list = (select d.dept from m_wo d where d.no_wo = wo)) as departments'
                .',(select u.nama from u_user u where u.id_user = status_user) as nama_user'
                .',(select l.nama_list from u_list_code l where l.kode_list = status_job) as status_plan';
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
