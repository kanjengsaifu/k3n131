<?php

function view_list_modul($param, $list_data_kategori, $list_data_modul) {
    foreach ($list_data_kategori as $kategori) {
        echo ' <div class="col-md-3">
                <strong>' . $kategori->nama_list . '</strong>
                <div class="col-sm-12">';
        foreach ($list_data_modul as $modul) {
            if ($modul->kategori == $kategori->kode_list) {
                $ck = $param != null ? (in_array($modul->kode_modul, $param) ? 'checked="checked"' : '') : '';
                echo '<div class="checkbox checkbox-primary">
                        <input id="checkbox2" type="checkbox" name="inpHak[]" id="inpHak[]" value="' . $modul->kode_modul . '" ' . $ck . '/>
                        <label for="checkbox2">' . $modul->kode_modul . '-' . $modul->nama_modul . '</label>
                    </div>';
            }
        }
        echo '</div>'
        . '</div>';
    }
    echo '<div class="row">
                <div class="col-md-12">
                    <a class="select-all" id="select-all">Check All</a>   /   
                    <a class="unselect-all" id="unselect-all">Uncheck All</a>
                </div>
            </div>';
}
?>