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

require_once(APPPATH . 'controllers/rst_a007.php');

class Cronjob extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function execute_daily() {
       
    }

    public function execute_hour() {
        
    }
}
