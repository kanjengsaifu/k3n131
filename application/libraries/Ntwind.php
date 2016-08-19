<?php

//Created By    : Taufik Ismail A, S.Kom
//Updated By    : Taufik Ismail A, S.Kom
//Created Date  : 9 Apr 2015
//Updated Date  : 9 Apr 2015
//Projet        : E-SATKER

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Ntwind
class Ntwind {
//
//    public function index() {
//        $number = 1650345;
//        echo $this->convertCurrencyToWords($number);
//        echo '<br>';
//        echo $this->convertIntegerToWords($number);
//    }

    function convertIntegerToWords($x) {
        $nwords = array(
            'Nol', 
            'Satu', 
            'Dua', 
            'Tiga', 
            'Empat', 
            'Lima', 
            'Enam', 
            'Tujuh', 
            'Delapan', 
            'Sembilan', 
            'Sepuluh',
            'SeBelas', 
            'Dua Belas', 
            'Tiga Belas', 
            'Empat Belas',          
            'Lima Belas', 
            'Enam Belas',   
            'Tujuh Belas',      
            'Delapan Belas',        
            'Sembilan Belas', 
            'Dua Puluh',    
            30 => 'Tiga Puluh', 
            40 => 'Empat Puluh',    
            50 => 'Lima Puluh', 
            60 => 'Enam Puluh', 
            70 => 'Tujuh Puluh', 
            80 => 'Delapan Puluh',
            90 => 'Sembilan Puluh');

        if (!is_numeric($x)) {
            $w = '#';
        } else if (fmod($x, 1) != 0) {
            $w = '#';
        } else {
            if ($x < 0) {
                $w = 'kurang ';
                $x = -$x;
            } else {
                $w = '';
            }
            if ($x < 21) {
                $w .= $nwords[$x];
            } else if ($x < 100) {
                $w .= $nwords[10 * floor($x / 10)];
                $r = fmod($x, 10);
                if ($r > 0) {
                    $w .= '-' . $nwords[$r];
                }
            } else if ($x < 1000) {
                $w .= $nwords[floor($x / 100)] . ' Ratus';
                $r = fmod($x, 100);
                if ($r > 0) {
                    $w .= ' ' . $this->convertIntegerToWords($r);
                }
            } else if ($x < 1000000) {
                $w .= $this->convertIntegerToWords(floor($x / 1000)) . ' Ribu';
                $r = fmod($x, 1000);
                if ($r > 0) {
                    $w .= ' ';
                    // if($r < 100) 
                    // { 
                    // $w .= 'and'; 
                    // } 
                    $w .= $this->convertIntegerToWords($r);
                }
            } else {
                $w .= $this->convertIntegerToWords(floor($x / 1000000)) . ' Juta';
                $r = fmod($x, 1000000);
                if ($r > 0) {
                    $w .= ' ';
                    // if($r < 100) 
                    // { 
                    // $word .= 'and '; 
                    // } 
                    $w .= $this->convertIntegerToWords($r);
                }
            }
        }
        return $w;
    }

    function convertCurrencyToWords($number) {
        $currencylabelsarray = array('Rupiah' => 'Rupiah', 'Sen' => 'Sen');
        if (!is_numeric($number))
            return false;
        $nums = explode('.', $number);
        $out = $this->convertIntegerToWords($nums[0]) . ' Rupiah';
        if (isset($nums[1])) {
            $out .= ' Dan ' . $this->convertIntegerToWords($nums[1]) . ' Sen';
        }
        return $out;
    }

}
