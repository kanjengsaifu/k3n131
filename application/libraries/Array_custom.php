<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Array_custom
 *
 * @author TIAbdilah
 */
class Array_custom {

    //put your code here

    var $array_custom = array(
        'button' => array(
            'view' => '<i class="icon-folder-open"></i> Lihat',
            'add' => '<i class="icon-plus"></i> Tambah Data',
            'save' => 'Simpan',
            'cancel' => 'Batal',
            'close' => 'Keluar',
            'delete' => 'Hapus',
            'print' => '<i class="icon-print"></i> Cetak',
            'booking' => '<i class="icon-check"></i> Waiting List',
            'semua' => '<i class="icon-list"></i> Semua Data',
            'today' => '<i class="icon-check"></i> Perawatan',
            'today2' => '<i class="icon-check"></i> Hari Ini',
        ),
        'title_page' => array(
            'list' => 'Daftar Data',
            'view' => 'Detil Data',
            'add' => 'Tambah Data',
            'edit' => 'Ubah Data'
        ),
        'question' => array(
            'delete' => 'Are You Sure to Delete This Data ?'
        )
    );

    public function get_keterangan($array, $param) {
        if (array_key_exists($param, $this->array_custom[$array])) {
            return $this->array_custom[$array][$param];
        } else {
            return 'keterangan tidak terdaftar';
        }
    }

    public function delete_modal($modul, $link, $id) {
        $rtn = '<a data-toggle="modal" data-target="#modal-delete-' . $id . '"><button class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white"><i class="fa fa-remove"></i> </button></a>
                <div id="modal-delete-' . $id . '" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;text-align:left" >
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Delete ' . $modul . '</h4>
                            </div>
                            <form action="' . $link . '" method="post" data-parsley-validate novalidate>
                                <div class="modal-body">'
                . $this->get_keterangan('question', 'delete') .
                '               </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">' . $this->get_keterangan('button', 'cancel') . '</button>
                                    <button type="submit" class="btn btn-default waves-effect waves-light">' . $this->get_keterangan('button', 'delete') . '</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>';
        return $rtn;
    }

}
