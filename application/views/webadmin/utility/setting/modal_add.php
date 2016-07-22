<div id="modal-add" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><?php echo $modul ?></h4>
            </div>
            <form action="<?php echo site_url('utility/setting/process/add'); ?>" method="post" data-parsley-validate novalidate>
                <div class="modal-body">
                    <div class="row">
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Kode</label>
                                <input type="text" name="inp_kode_setting" class="form-control" id="field-2" placeholder="kode setting..">
                            </div>
                        </div>                        
                    </div>
                    <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Nama Setting</label>
                                <input type="text" name="inp_nama_setting" class="form-control" id="field-2" placeholder="nama setting..">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Value</label>
                                <input type="text" name="inp_value_setting" class="form-control" required id="field-1" placeholder="value setting..">
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