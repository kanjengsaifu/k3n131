<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <a href="<?php echo site_url('transaksi/pembayaran/add') ?>"><button class="btn btn-default waves-effect waves-light">Add <i class="fa fa-plus"></i></button></a>
                </div>
                <h4 class="page-title"><?php echo $modul; ?></h4>
                <?php $this->load->view('webadmin/transaksi/pembayaran/breadcrumbs'); ?>
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
                        <form action="<?php echo site_url('transaksi/pembayaran/search') ?>" role="form" method="POST" data-parsley-validate novalidate>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">                         
                                            <input type="text" name="inp_tgl_transaksi" class="form-control input-sm datepicker" placeholder="tanggal transaksi.." required="">
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
<style>
    .dropdown-menu {
        top: 300px !important;
    }
</style>