<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"><?php echo $title_page; ?></h4>
                <?php $this->load->view('webadmin/utility/role/breadcrumbs'); ?>
            </div>
        </div>
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title"><?php echo $modul ?></h4>
                    <form action="<?php echo site_url('utility/role/process/edit/' . $data->id_role); ?>" method="POST" enctype="multipart/form-data" data-parsley-validate novalidate>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Nama Role</label>
                                        <input type="text" name="inpNama" class="form-control" required id="field-1" placeholder="Name.." value="<?php echo $data->nama_role ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Kode Role</label>
                                        <input type="text" name="inpKode" class="form-control" required id="field-1" placeholder="Kode.." value="<?php echo $data->kode_role ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Hak Akses</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?php
                                        $this->load->view('webadmin/utility/role/view_list_modul');
                                        view_list_modul(explode(',', $data->hak_akses), $list_data_kategori, $list_data_modul)
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="<?php echo site_url('utility/role')?>" class="btn btn-danger waves-effect" data-dismiss="modal"><?php echo $this->array_custom->get_keterangan('button', 'cancel') ?></a>
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
