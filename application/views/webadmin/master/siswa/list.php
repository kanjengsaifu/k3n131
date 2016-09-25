<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#modal-add">Add <i class="fa fa-plus"></i></button>
                </div>
                <h4 class="page-title"><?php echo $modul; ?></h4>
                <?php $this->load->view('webadmin/master/siswa/breadcrumbs'); ?>
            </div>
        </div>

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive font-13">
                    <h4 class="m-t-0 header-title"><b>Filter Search</b></h4>
                    <?php
                    if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
                    endif;
                    ?>
                    <div class="p-20">
                        <form action="<?php echo site_url('master/siswa/search') ?>" role="form" method="POST" data-parsley-validate novalidate>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">                         
                                            <select class="form-control input-sm select2" name="inp_kelas" required>
                                                <option value="">Pilih Kelas</option>
                                                <option value="ALL">ALL</option>
                                                <?php
                                                foreach ($list_data_kelas as $kelas) {
                                                    echo '<option value="' . $kelas->nama_list . '"' . set_select('inp_kelas', $kelas->nama_list, $kelas->nama_list == $param['kelas']) . '>' . $kelas->nama_list . '</option>';
                                                }
                                                ?>
                                                <option value="-">-</option>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="col-md-3">   
                                        <div class="form-group">   
                                            <input type="text" name="inp_nama_siswa" class="form-control input-sm" required  placeholder="nama siswa.." value="*">
                                            <span class="help-block"><small><strong>*</strong> untuk semua siswa.</small></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <button class="btn btn-primary btn-block waves-effect waves-light w-md" type="submit" name="submit" value="search_data">
                                            <i class="icon fa fa-refresh"></i> Reload
                                        </button>
                                    </div>
                                </div>
                            </div>                            

                        </form> 
                    </div>
                </div>

            </div>
        </div>
        <!-- end row -->
        <!-- Footer -->
        <?php $this->load->view('webadmin/tile/footer'); ?>
        <!-- End Footer -->
    </div>
</div>
<?php $this->load->view('webadmin/master/siswa/modal_add'); ?>
<style>
    .datepicker.dropdown-menu {
        top: 170px !important;
    }

    dt{
        text-align: left;
    }
</style>