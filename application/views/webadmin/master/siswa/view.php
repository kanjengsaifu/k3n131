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

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $title_content ?></h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
                        endif;
                        ?>
                        <ul class="nav nav-pills m-b-30 pull-right">
                            <li class="active">
                                <a href="#navpills-1" data-toggle="tab" aria-expanded="true">Profil Siswa</a>
                            </li>
                            <li class="">
                                <a href="#navpills-2" data-toggle="tab" aria-expanded="false">Pembayaran SPP</a>
                            </li>
                            <li class="">
                                <a href="#navpills-3" data-toggle="tab" aria-expanded="false">Tab Three</a>
                            </li>
                        </ul>
                        <div class="tab-content br-n pn">
                            <div id="navpills-1" class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php
                                        $siswa['data'] = $data_siswa;
                                        $this->load->view('webadmin/master/siswa/view_profil', $siswa);
                                        ?>
                                    </div>                                    
                                </div>
                            </div>
                            <div id="navpills-2" class="tab-pane">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php
                                        $siswa['data'] = $data_siswa;
                                        $this->load->view('webadmin/master/siswa/view_spp', $siswa);
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div id="navpills-3" class="tab-pane">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p>
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="assets/images/small/img3.jpg" class="img-responsive thumbnail mr25">
                                    </div>
                                </div>
                            </div>
                        </div>
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
        top: 410px !important;
    }

    dt{
        text-align: left;
    }
</style>