<div id="modal-edit-<?php echo $data->id_user ?>" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><?php echo $title_content ?></h4>
            </div>
            <form action="<?php echo site_url('utility/user/process/edit/' . $data->id_user); ?>" method="POST" enctype="multipart/form-data" data-parsley-validate novalidate>
                <div class="modal-body">
                    <input type="hidden" hidden="hidden" value="<?php echo $data->id_user ?>" name="inpId">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Name</label>
                                <input type="text" name="inp_nama" value="<?php echo $data->nama ?>" class="form-control" required id="field-1" placeholder="Name..">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Email</label>
                                <input type="text" name="inp_email" value="<?php echo $data->email ?>" class="form-control" id="field-2" placeholder="@mail.com..">
                            </div>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Type User</label>
                                <select class="form-control" name="inp_type_user" required>
                                    <option>Select..</option>
                                    <?php
                                    foreach ($list_role as $role) {
                                        echo '<option value="' . $role->nama_role . '" ' . set_select('inp_type_user', $role->nama_role, $role->nama_role == $data->type_user) . '>' . $role->nama_role . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Telp</label>
                                <input type="text" name="inp_telp" value="<?php echo $data->telp?>" class="form-control" id="field-2" placeholder="telp..">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Username</label>
                                <input type="text" name="inp_username" value="<?php echo $data->username ?>" class="form-control" required id="field-1" placeholder="John..">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Password</label>
                                <input type="text" name="inp_password" value="<?php echo $data->password ?>" class="form-control" required id="field-2" placeholder="Password..">
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
</div>