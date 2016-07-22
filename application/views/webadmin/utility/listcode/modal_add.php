<div id="modal-add" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><?php echo $modul ?></h4>
            </div>
            <form action="<?php echo site_url('utility/listcode/process/add'); ?>" method="post" data-parsley-validate novalidate>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Head List</label>
                                <select class="form-control" name="inpHeadList">
                                    <option value="">-- head list --</option>
                                    <?php
                                    foreach ($list_data_head as $data_head) {
                                        echo '<option value="' . $data_head->kode_list . '">' . $data_head->nama_list . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Kode</label>
                                <input type="text" name="inpKodeList" class="form-control" id="field-2" placeholder="kode list..">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Nama</label>
                                <input type="text" name="inpNamaList" class="form-control" required id="field-1" placeholder="nama list..">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><?php echo $this->array_custom->get_keterangan('button', 'cancel') ?></button>
                    <button type="submit" class="btn btn-default waves-effect waves-light"><?php echo $this->array_custom->get_keterangan('button', 'save') ?></button>
                </div>
            </form>
        </div>
    </div>
</div><!-- /.modal changes-->