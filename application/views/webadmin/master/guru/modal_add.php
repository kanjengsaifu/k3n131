<div id="modal-add" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><?php echo $title_content ?></h4>
            </div>
            <form action="<?php echo site_url('master/guru/process/add/'); ?>" method="post" data-parsley-validate novalidate>
                <div class="modal-body font-13">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="control-label">Nama Guru</label>
                                <input type="text" name="inp_nama_guru" class="form-control input-sm" required  placeholder="nama guru..">
                            </div>
                        </div>                    
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="control-label">Mata Pelajaran</label>
                                <input type="text" name="inp_mata_pelajaran" class="form-control input-sm" required  placeholder="mata pelajaran..">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="control-label">Telp. Guru</label>
                                <input type="text" name="inp_telp_guru" class="form-control input-sm" required  placeholder="no. telp..">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Alamat</label>
                                <input type="text" name="inp_alamat" class="form-control input-sm" required  placeholder="alamat..">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><?php echo $this->array_custom->get_keterangan('button', 'cancel') ?></button>
                        <button type="submit" class="btn btn-default waves-effect waves-light"><?php echo $this->array_custom->get_keterangan('button', 'save') ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>