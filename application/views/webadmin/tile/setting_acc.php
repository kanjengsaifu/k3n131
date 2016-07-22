<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">                
                <h4 class="page-title"><?php echo $modul; ?></h4>
                <?php $this->load->view('webadmin/report/jurnal/breadcrumbs'); ?>
            </div>
        </div>

        <!-- Page-Title -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Edit Basic Info</b></h4>
                    <p class="text-muted font-13 m-b-30">
                        Your awesome text goes here.
                    </p>
                    <?php
                    if ($this->session->flashdata('message1') != ''):echo $this->session->flashdata('message1');
                    endif;
                    ?>
                    <form action="<?php echo site_url('common/dash/process_setting/edit_info/' . $this->session->userdata('kn_id_user')) ?>" data-parsley-validate="" novalidate="" method="POST">
                        <div class="form-group">
                            <label for="userName">User Name*</label>
                            <input data-parsley-id="4" name="inp_username" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName" type="text" value="<?php echo $data->username ?>">
                        </div>
                        <div class="form-group">
                            <label for="userName">Nama*</label>
                            <input data-parsley-id="4" name="inp_nama" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName" type="text" value="<?php echo $data->nama ?>">
                        </div>
                        <div class="form-group">
                            <label for="emailAddress">Email*</label>
                            <input data-parsley-id="6" name="inp_email" parsley-trigger="change" required="" placeholder="Enter email" class="form-control" id="emailAddress" type="email" value="<?php echo $data->email ?>">
                        </div>
                        <div class="form-group text-right m-b-0">
                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><?php echo $this->array_custom->get_keterangan('button', 'cancel') ?></button>
                            <button type="submit" class="btn btn-default waves-effect waves-light"><?php echo $this->array_custom->get_keterangan('button', 'save') ?></button>
                        </div>

                    </form>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Edit Password</b></h4>
                    <p class="text-muted font-13 m-b-30">
                        Ganti Password anda dengan Password baru
                    </p>
                    <?php
                    if ($this->session->flashdata('message2') != ''):echo $this->session->flashdata('message2');
                    endif;
                    ?>
                    <form class="form-horizontal" role="form" data-parsley-validate="" novalidate="" action="<?php echo site_url('common/dash/process_setting/edit_password/' . $this->session->userdata('kn_id_user')) ?>" method="post">
                        <div class="form-group">
                            <label for="hori-pass1" class="col-sm-4 control-label">Password Lama</label>
                            <div class="col-sm-7">
                                <input data-parsley-id="19" name="inp_pass" placeholder="Password" required="" class="form-control" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hori-pass2" class="col-sm-4 control-label">Password Baru</label>
                            <div class="col-sm-7">
                                <input data-parsley-id="21" name="inp_new_pass" id="hori-pass1" required="" placeholder="Password" class="form-control" type="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="webSite" class="col-sm-4 control-label">Konfirmasi Password</label>
                            <div class="col-sm-7">
                                <input data-parsley-id="23" name="inp_new_pass_confirm" required=""  data-parsley-equalto="#hori-pass1" class="form-control" placeholder="Password" type="password">
                            </div>
                        </div>
                        <div class="form-group text-right m-b-0">
                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><?php echo $this->array_custom->get_keterangan('button', 'cancel') ?></button>
                            <button type="submit" class="btn btn-default waves-effect waves-light"><?php echo $this->array_custom->get_keterangan('button', 'save') ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end row -->
        <!-- Footer -->
        <?php $this->load->view('webadmin/tile/footer'); ?>
        <!-- End Footer -->
    </div>
</div>
