<!-- .modal view-->
<div id="modal-view-<?php echo $data->id_user ?>" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><?php echo $title_content ?></h4>
            </div>
            <div class="modal-body">
                <input type="hidden" hidden="hidden" value="<?php echo $data->id_user ?>" name="inpId">
                <div class="row">
                    <div class="col-md-6">
                        <address>
                            <strong>Name</strong>
                            <br>
                            <?php echo $data->nama ?>
                        </address>
                    </div>
                    <div class="col-md-6">
                        <address>
                            <strong>Email</strong>
                            <br>
                            <?php echo $data->email ?>
                        </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <address>
                            <strong>Username</strong>
                            <br>
                            <?php echo $data->username ?>
                        </address>
                    </div>
                    <div class="col-md-6">
                        <address>
                            <strong>Password</strong>
                            <br>
                            <?php echo $data->password ?>
                        </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <address>
                            <strong>Type User</strong>
                            <br>
                            <?php echo $data->type_user ?>
                        </address>
                    </div>
                    <div class="col-md-6">
                        <address>
                            <strong>Status</strong>
                            <br>
                            <?php echo $data->status == 1 ? '<span class="label label-default" style="width:90%">Aktif</span>' : '<span class="label label-danger" style="width:90%">Tidak Aktif</span>'; ?>                            
                        </address>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal"><?php echo $this->array_custom->get_keterangan('button', 'close') ?></button>
            </div>
        </div>
    </div>
</div><!-- /.modal changes-->