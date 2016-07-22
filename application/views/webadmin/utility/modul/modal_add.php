<!-- Add -->
<div id="modal-add" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add <?php echo $modul ?></h4>
            </div>
            <form action="<?php echo site_url('utility/modul/process/add'); ?>" method="post" data-parsley-validate novalidate>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Kategori Modul</label>
                                <select class="form-control" name="inpKategori" required>
                                    <option value="">-- head list --</option>
                                    <?php
                                    foreach ($list_data_kategori as $kategori) {
                                        echo '<option value="' . $kategori->kode_list . '">' . $kategori->nama_list . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Kode Modul</label>
                                <input type="text" name="inpKode" class="form-control" id="field-2" placeholder="kode modul..">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Nama Modul</label>
                                <input type="text" name="inpNama" class="form-control" required id="field-1" placeholder="nama modul..">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Nama Modul</label>
                                <input type="text" name="inpLink" class="form-control" required id="field-1" placeholder="link modul..">
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
<!-- /.modal changes-->