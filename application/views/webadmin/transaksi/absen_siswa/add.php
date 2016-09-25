<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"><?php echo $modul; ?></h4>
                <?php $this->load->view('webadmin/transaksi/absen_siswa/breadcrumbs'); ?>
            </div>
        </div>        

        <!-- Page-Title -->        
        <div class="row">
            <div class="col-lg-9">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b><?php echo $title_page ?></b></h4>  
                    <form action="<?php echo site_url('transaksi/absen_siswa/process/add') ?>" method="post" data-parsley-validate="" novalidate="">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Tanggal</label>
                                    <input type="text" name="inp_tanggal" value="<?php echo $this->format_date->format_date_dmy(date('Y-m-d')) ?>" class="form-control input-sm datepicker" required="" placeholder="tanggal lahir..">
                                </div>

                                <div class="form-group">
                                    <label for="field-1" class="control-label">Pertemuan Ke</label>
                                    <select class="form-control input-sm select2" name="inp_pertemuan" required="">
                                        <option value="">Pilih</option>
                                        <?php
                                        for ($i = 1; $i <= 10; $i++) {
                                            echo '<option value="' . $i . '">' . $i . '</option>';
                                        }
                                        ?>
                                    </select>  
                                </div>

                                <div class="form-group">
                                    <label for="field-1" class="control-label">Kelas</label>
                                    <select class="form-control input-sm select2" name="inp_kelas" id="inp_kelas" required onchange="refreshListSiswa()">
                                        <option value="">Pilih Kelas</option>
                                        <?php
                                        foreach ($list_data_kelas as $kelas) {
                                            echo '<option value="' . $kelas->nama_list . '">' . $kelas->nama_list . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>                        
                            <div class="col-md-8 col-lg-offset-1">
                                <label for="field-1" class="control-label">Daftar Siswa</label>
                                <div id="table-absen">
                                    <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th style="width: 10%">#</th>
                                                <th>Nama Siswa</th>
                                                <th style="width: 10%">Hadir</th>
                                                <th style="width: 10%">Tidak</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                            <tr><td colspan="4">No data available in table</td></tr>
                                        </tbody>                                    
                                    </table>
                                </div>
                            </div>
                        </div>                       
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-default waves-effect waves-light">Simpan</button>
                        </div>
                    </form>
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
        top: 300px !important;
    }
</style>
<script type="text/javascript">

    function refreshListSiswa() {
        var kelas = $('#inp_kelas option:selected').val();
        $.ajax({
            url: "<?php echo base_url(); ?>master/siswa/pupolate_kelas",
            data: {kelas: kelas},
            type: "POST",
            dataType: "json",
            success: function(data) {
                $("#table-absen").html(data[0]);
            }
        });
    }


</script>