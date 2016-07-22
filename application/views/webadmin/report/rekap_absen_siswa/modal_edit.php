<div id="modal-edit-<?php echo $data->id_absen_siswa ?>" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm" style="text-align: left">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><?php echo $title_content ?></h4>
            </div>
            <form action="<?php echo site_url('transaksi/absen_siswa/process/edit/' . $data->id_absen_siswa); ?>" method="post" data-parsley-validate novalidate>
                <div class="modal-body font-13">
                    <div class="row">
                        <input type="hidden" name="inp_kode_siswa" value="<?php echo $data->kode_siswa?>" />
                        <input type="hidden" name="inp_kelas" value="<?php echo $data->kelas?>" />
                        <input type="hidden" name="inp_bulan" value="<?php echo substr($data->tanggal, 5, 2)?>" />
                        <input type="hidden" name="inp_tahun" value="<?php echo substr($data->tanggal, 0, 4)?>" />
                        <input type="hidden" name="inp_pertemuan" value="<?php echo $data->pertemuan?>" />
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Nama Siswa</label>
                                <input type="text" name="inp_nama_siswa" value="<?php echo $data->nama_siswa ?>" class="form-control input-sm" required  placeholder="nama siswa..">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Hadir</label>
                                <select class="form-control input-sm select2" name="inp_hadir" required>
                                    <option value="">Select..</option>
                                    <option value="Hadir" <?php echo $data->keterangan == 'Hadir' ? 'selected' : '' ?>>Ya</option>
                                    <option value="Alfa" <?php echo $data->keterangan != 'Hadir' ? 'selected' : '' ?>>Tidak</option>                                    
                                </select>
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