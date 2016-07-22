<div id="modal-add" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><?php echo $title_content ?></h4>
            </div>
            <form action="<?php echo site_url('transaksi/pembuatan_dokumen/process/add'); ?>" method="post" data-parsley-validate novalidate>
                <div class="modal-body font-13">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="control-label">Tanggal </label>
                                <input type="text" name="inp_tgl_pembuatan_dok" value="<?php echo date('d-m-Y') ?>" class="form-control input-sm datepicker" placeholder="tanggal..">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="" class="control-label">Nama Guru</label>
                                <select class="form-control input-sm select2" name="inp_kode_guru" required>
                                    <option value="">Select..</option>
                                    <?php
                                    foreach ($list_data_guru as $guru) {
                                        echo '<option value="' . $guru->kode_guru . '" >' . $guru->nama_guru . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="control-label">Tipe</label>
                                <select class="form-control input-sm select2" name="inp_tipe_dok" required>
                                    <option value="">Pilih Tipe..</option>
                                    <?php
                                    foreach ($list_data_tipe as $tipe) {
                                        echo '<option value="' . $tipe->nama_list . '" >' . $tipe->nama_list . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="control-label">Tingkat</label>
                                <select class="form-control input-sm select2" name="inp_tingkat" required>
                                    <option value="">Pilih Tingkat..</option>
                                    <?php
                                    foreach ($list_data_tingkat as $tingkat) {
                                        echo '<option value="' . $tingkat->kode_list . '" >' . $tingkat->nama_list . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="" class="control-label">Keterangan</label>
                                <input type="text" name="inp_keterangan" class="form-control input-sm " placeholder="keterangan..">
                            </div>
                        </div>                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><?php echo $this->array_custom->get_keterangan('button', 'cancel') ?></button>
                        <button type="submit" value="modal" name="submit" class="btn btn-default waves-effect waves-light"><?php echo $this->array_custom->get_keterangan('button', 'save') ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>