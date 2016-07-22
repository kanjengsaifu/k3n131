<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once APPPATH . "/third_party/PHPExcel.php";

class Excel extends PHPExcel {

    public function __construct() {
        parent::__construct();
    }
    
    public function center_style($obj, $cell){
        return $obj->getStyle($cell)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    }
    
    public function auto_width($obj, $column){
        return $obj->getColumnDimension($column)->setAutoSize(TRUE);
    }

}

?>