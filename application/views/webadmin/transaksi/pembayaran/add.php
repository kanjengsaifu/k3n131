<div class="wrapper">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"><?php echo $modul; ?></h4>
                <?php $this->load->view('webadmin/transaksi/pembayaran/breadcrumbs'); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <?php
                if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
                endif;
                ?>
                <div class="card-box table-responsive font-13">
                    <h4 class="m-t-0 header-title"><b>No. <i>#<?php echo $data_header->kode_pembayaran ?></i></b></h4>
                    <p>&nbsp;</p>
                    <form id="form_pembayaran" action="<?php echo site_url('transaksi/pembayaran/process/' . $data_header->kode_pembayaran) ?>" role="form" method="POST">                        
                        <input type="hidden" name="inp_kode" value="<?php echo $data_header->kode_pembayaran ?>" />

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="inp_tgl_pembayaran" value="<?php echo $this->format_date->format_date_dmy($data_header->tgl_pembayaran) ?>" class="form-control input-sm datepicker" placeholder="tanggal lahir..">
                                </div>  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select class="form-control input-sm select2" name="inp_kode_siswa" id="inp_kode_siswa" onchange="getListHistory()" required>
                                        <option value="">Pilih Siswa</option>
                                        <?php
                                        foreach ($list_data_siswa as $siswa) {
                                            echo '<option value="' . $siswa->kode_siswa . '" ' . set_select('inp_kode_siswa', $siswa->kode_siswa, $siswa->kode_siswa == $data_header->kode_siswa) . '>' . $siswa->nama_siswa . ' (' . $siswa->kelas . ')</option>';
                                        }
                                        ?>
                                    </select>
                                </div>       
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input id="inp_jml" type="text" name="inp_jumlah" class="form-control input-sm"  placeholder="jumlah bayar..">
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select class="form-control input-sm select2" name="inp_jenis_pembayaran" id="inp_pembayaran" onchange="hideBulanTahun()">
                                        <option value="">Pilih Jenis Pembayaran</option>
                                        <?php
                                        foreach ($list_data_kat as $kat) {
                                            echo '<option value="' . $kat->kode_list . '" >' . $kat->nama_list . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group" id="div-bulan" style="display: none">
                                    <?php $arr_m = $this->format_date->list_month(); ?>
                                    <select class="form-control input-sm select2" name="inp_bulan" >
                                        <option value="">Pilih Bulan</option>  
                                        <?php
                                        for ($i = 0; $i < 12; $i++) {
                                            $arr_i = $i + 1;
                                            $lbl_i = ($arr_i < 10) ? '0' . $arr_i : $arr_i;
                                            echo '<option value="' . $lbl_i . '" ' . set_select('inp_bulan', $lbl_i, $lbl_i == date('m')) . '>' . $arr_m[$i] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>                                    
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group" id="div-tahun" style="display: none">
                                    <select class="form-control input-sm select2" name="inp_tahun" >
                                        <option value="" selected="">Pilih Tahun</option>  
                                        <?php
                                        for ($i = $common->setting['tahun_awal']; $i <= date('Y'); $i++) {
                                            echo '<option value="' . $i . '" ' . set_select('inp_tahun', $i, $i == date('Y')) . '>' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="inp_ket" type="text" name="inp_ket" class="form-control input-sm"   placeholder="keterangan...">
                                </div>   
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">           
                                <div class="button-list">
                                    <button class="btn btn-primary waves-effect waves-light w-md pull-right" type="submit" name="submit" value="save_header">
                                        <i class="icon fa fa-save"></i> Simpan 
                                    </button>
                                    <button onclick="add_detail()" class="btn btn-default waves-effect waves-light w-md pull-right" type="button">
                                        <i class="icon fa fa-plus"></i> Pembayaran 
                                    </button>
                                </div>
                            </div>
                        </div>


                    </form> 
                </div>
            </div>

            <div class="col-sm-9">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>History Pembayaran</b></h4>
                    <div id="history_data">
                        <?php
                            $this->load->view('webadmin/transaksi/pembayaran/list_history');
                        ?>
                    </div>
                </div>
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Detil Pembayaran</b></h4>
                    <p>&nbsp;</p>
                    <div id="detail_data">
                        <?php
                        echo $common->get_table_detail($data_header->kode_pembayaran);
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <?php $this->load->view('webadmin/tile/footer'); ?>
        <!-- End Footer -->
    </div>    
</div>
<style>
    .datepicker.dropdown-menu {
        top: 310px !important;
    }
</style>

<script type="text/javascript">

    function add_detail() {
        var formData = $("#form_pembayaran").serializeArray();
        formData.push({name: "submit", value: "save_detail"});
        $.ajax({
            url: "<?php echo site_url('transaksi/pembayaran/save_detail'); ?>",
            data: formData,
            type: "POST",
            dataType: "json",
            success: function(data) {
                $("#detail_data").html(data[0]);
                $("#inp_jml").val('');
                $("#inp_ket").val('');
            },
            error: function(xhr, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    }

    function delete_detail(id) {
        $.ajax({
            url: "<?php echo site_url('transaksi/pembayaran/delete_detail'); ?>",
            data: {inp_id_detail: id, inp_kode: '<?php echo $data_header->kode_pembayaran ?>'},
            type: "POST",
            dataType: "json",
            success: function(data) {
                $("#detail_data").html(data[0]);
            },
            error: function(xhr, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    }

    function hideBulanTahun() {
        var pembayaran = $('#inp_pembayaran option:selected').text();

        if (pembayaran == 'SPP') {
            $("#div-bulan").show();
            $("#div-tahun").show();
        } else {
            $("#div-bulan").hide();
            $("#div-tahun").hide();
        }
    }

    function getListHistory() {
        var kode_siswa = $('#inp_kode_siswa option:selected').val();
        $.ajax({
            url: "<?php echo site_url('transaksi/pembayaran/get_history'); ?>",
            data: {kode_siswa: kode_siswa},
            type: "POST",
            dataType: "json",
            success: function(data) {
                $("#history_data").html(data[0]);
            },
            error: function(xhr, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    }



</script>