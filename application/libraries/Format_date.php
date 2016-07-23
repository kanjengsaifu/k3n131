<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Format_date {

    function indonesian_date($timestamp = '', $date_format = 'Y-m-d', $suffix = null) {
        if (trim($timestamp) == '') {
            $timestamp = time();
        } elseif (!ctype_digit($timestamp)) {
            $timestamp = date($timestamp);
        }
        # remove S (st,nd,rd,th) there are no such things in indonesia :p
        $date_format = preg_replace("/S/", "", $date_format);
        $pattern = array(
            '/Mon[^day]/', '/Tue[^sday]/', '/Wed[^nesday]/', '/Thu[^rsday]/',
            '/Fri[^day]/', '/Sat[^urday]/', '/Sun[^day]/', '/Monday/', '/Tuesday/',
            '/Wednesday/', '/Thursday/', '/Friday/', '/Saturday/', '/Sunday/',
            '/Jan[^uary]/', '/Feb[^ruary]/', '/Mar[^ch]/', '/Apr[^il]/', '/May/',
            '/Jun[^e]/', '/Jul[^y]/', '/Aug[^ust]/', '/Sep[^tember]/', '/Oct[^ober]/',
            '/Nov[^ember]/', '/Dec[^ember]/', '/January/', '/February/', '/March/',
            '/April/', '/May/', '/June/', '/July/', '/August/', '/September/', '/October/',
            '/November/', '/December/',
        );
        $replace = array(
            'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min',
            'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu',
            'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des',
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'Sepember',
            'Oktober', 'November', 'Desember',
        );
        $date = date($date_format, $timestamp);
        $date = preg_replace($pattern, $replace, $date);
        $date = "{$date} {$suffix}";
        return $date;
    }
    
    public function list_month(){
        $arr = array( 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'Sepember',
            'Oktober', 'November', 'Desember');
        return $arr;
    }
    
    public function list_day(){
        $arr = array( 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu');
        return $arr;
    }

    public function format_date_custom($string, $format) {
        $date_time = strtotime($string);
        return $this->indonesian_date($date_time, $format);
    }

    public function format_date_dfy($string) {
        if ($string != null || $string != '') {
            $date_time = strtotime($string);
            return $this->indonesian_date($date_time, 'j F Y');
        } else {
            return '-';
        }
    }

    public function format_date_ldfy($string) {
        if ($string != null || $string != '') {
            $date_time = strtotime($string);
            return $this->indonesian_date($date_time, 'l, j F Y');
        } else {
            return '-';
        }
    }

    public function format_date_dmy($string) {
        if ($string != null || $string != '') {
            $date_time = strtotime($string);
            return date('d-m-Y', $date_time);
        } else {
            return '-';
        }
    }

    public function format_date_dmytime($string) {
        if ($string != null || $string != '') {
            $date_time = strtotime($string);
            return date('d-m-Y H:i:s', $date_time);
        } else {
            return '-';
        }
    }

    public function format_date_sql($string) {
        $date_time = strtotime($string);
        return date('Y-m-d', $date_time);
    }

    public function format_datetime($string) {
        if ($string != null || $string != '') {
            $date_time = strtotime($string);
            return date('j F Y H:i:s', $date_time);
        } else {
            return '-';
        }
    }

    public function format_datereport($string) {
        if ($string != null || $string != '') {
            $date_time = strtotime($string);
            return date('F Y', $date_time);
        } else {
            return '-';
        }
    }
    
    public function format_date_age($string) {
        $date_time = strtotime($string);
        return date('d/m/Y', $date_time);
    }
    public function format_date_dash($string) {
        $date_time = strtotime($string);
        return date('j F Y H:i', $date_time);
    }
    public function format_date_dash2($string) {
        $date_time = strtotime($string);
        return date('j F', $date_time);
    }
}
