<div class="wrapper">
    <div class="container">
        <?php $this->load->view('webadmin/utility/listcode/breadcrumbs'); ?>
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-6">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title"><?php echo $modul ?></h4>
                    <form action="<?php echo site_url('utility/listcode/process/edit/' . $data->id_list_code); ?>" method="post" data-parsley-validate novalidate>
                        <input type="hidden" hidden="hidden" value="<?php echo $data->id_list_code ?>" name="inpId">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Head List</label>
                                    <select class="form-control" name="inpHeadList">
                                        <option value="">-- head list --</option>
                                        <?php
                                        foreach ($list_data_head as $data_head) {
                                            echo '<option value="' . $data_head->kode_list . '" ' . set_select('inpHeadList', $data_head->nama_list, $data_head->kode_list == $data->head_list) . '>' . $data_head->nama_list . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Kode</label>
                                    <input type="text" name="inpKodeList" readonly="" value="<?php echo $data->kode_list ?>" class="form-control" id="field-2" placeholder="kode list..">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Nama</label>
                                    <input type="text" name="inpNamaList" class="form-control" value="<?php echo $data->nama_list ?>" required id="field-1" placeholder="nama list..">
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-right m-b-0">
                            <a href="<?php echo site_url('listcode') ?>"><button type="button" class="btn btn-danger waves-effect"><?php echo $this->array_custom->get_keterangan('button', 'cancel') ?></button></a>
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