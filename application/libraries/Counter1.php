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

class Counter1 {

    public function __construct() {
        $this->CI = & get_instance();
        $this->CI->load->model('common/counter_model');

        $this->counter_model = & $this->CI->counter_model;
    }

    public function view() {
        $pattern = 'asdf12';
        echo $this->generate_id($pattern) . '<br>';
        echo $this->generate_id_with_zero($pattern, 4);
    }

    public function generate_id($pattern) {
        $crt = '';
        $check = $this->counter_model->select_by_field(array('pattern' => $pattern))->num_rows();

        if ($check == 0) {
            $data['pattern'] = $pattern;
            $data['counter'] = 1;
            $this->counter_model->add($data);
        } else {
            $counter = $this->counter_model->select_by_field(array('pattern' => $pattern))->row();
            $id = $counter->id;
            $data['pattern'] = $pattern;
            $data['counter'] = $counter->counter + 1;
            $this->counter_model->edit($data, array('id' => $id));
        }

        $counter = $this->counter_model->select_by_field(array('pattern' => $pattern))->row();
        $ctr = $counter->counter;

        return $ctr;
    }

    public function generate_id_with_zero($pattern, $length) {
        $ctr = $this->generate_id($pattern);
        while (strlen($ctr) < $length) {
            $ctr = '0' . $ctr;
        }
        return $ctr;
    }
    
    public function test() {
        echo 'test from counter';
    }

}
