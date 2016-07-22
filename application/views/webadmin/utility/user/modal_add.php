<!-- Add -->
<div id="modal-add" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><?php echo $title_content ?></h4>
            </div>
            <form action="<?php echo site_url('utility/user/process/add'); ?>" method="post" data-parsley-validate novalidate>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Name</label>
                                <input type="text" name="inp_nama" class="form-control" required id="field-1" placeholder="name..">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Email</label>
                                <input type="text" name="inp_email" class="form-control" id="field-2" placeholder="@mail.com..">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Type User</label>
                                <select class="form-control" name="inp_type_user" required>
                                    <option value="">Select..</option>
                                    <?php
                                    foreach ($list_role as $role) {
                                        echo '<option value="' . $role->nama_role . '">' . $role->nama_role . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Telp</label>
                                <input type="text" name="inp_telp" class="form-control" id="field-2" placeholder="telp..">
                            </div>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Username</label>
                                <input type="text" name="inp_username" class="form-control" required id="field-1" placeholder="username..">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Password</label>
                                <input type="password" name="inp_password" class="form-control" required id="field-2" placeholder="password..">
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