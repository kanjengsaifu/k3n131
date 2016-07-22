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

class Role_model extends CI_Model {

    var $table_name = 'u_role';

    public function __construct() {
        parent::__construct();
    }

    public function select($field, $where = array(), $limit = null, $offset = '', $order = array('field' => null, 'sort' => 'ASC')) {
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
