<div id="modal-edit-<?php echo $data->id_siswa ?>" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><?php echo $title_content ?></h4>
            </div>
            <form action="<?php echo site_url('master/siswa/process/edit/' . $data->kode_siswa); ?>" method="post" data-parsley-validate novalidate>
                <div class="modal-body font-13">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="control-label">Nama Siswa</label>
                                <input type="text" name="inp_nama_siswa" value="<?php echo $data->nama_siswa ?>" class="form-control input-sm" required  placeholder="nama siswa..">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="" class="control-label">Jenis Kelamin</label>
                                <select class="form-control input-sm select2" name="inp_jenis_kelamin" required>
                                    <option value="">Select..</option>
                                    <?php
                                    foreach ($list_data_jk as $jk) {
                                        echo '<option value="' . $jk->nama_list . '" ' . set_select('inp_jenis_kelamin', $jk->nama_list, $jk->nama_list == $data->jenis_kelamin) . '>' . $jk->nama_list . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="" class="control-label">Tempat Lahir</label>
                                <input type="text" name="inp_tempat_lahir" value="<?php echo $data->tempat_lahir ?>" class="form-control input-sm" required  placeholder="tempat lahir..">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="" class="control-label">Tanggal Lahir</label>
                                <input type="text" name="inp_tgl_lahir" value="<?php echo $this->format_date->format_date_dmy($data->tgl_lahir) ?>" class="form-control input-sm datepicker" placeholder="tanggal lahir..">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="" class="control-label">Anak Ke-</label>
                                <input type="text" name="inp_anak_ke" value="<?php echo $data->anak_ke ?>" class="form-control input-sm" required  placeholder="tempat lahir..">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="control-label">Asal Sekolah</label>
                                <input type="text" name="inp_asal_sekolah" value="<?php echo $data->asal_sekolah ?>" class="form-control input-sm" required  placeholder="nama ayah..">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="" class="control-label">Kelas</label>
                                <!--<input type="text" name="inp_kelas" value="<?php echo $data->kelas ?>" class="form-control input-sm" required  placeholder="nama ayah..">-->
                                <select class="form-control input-sm select2" name="inp_kelas" required>
                                    <option value="">Select..</option>
                                    <?php
                                    foreach ($list_data_kelas as $kelas) {
                                        echo '<option value="' . $kelas->nama_list . '" ' . set_select('inp_jenis_kelamin', $kelas->nama_list, $kelas->nama_list == $data->kelas) . '>' . $kelas->nama_list . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="" class="control-label">Telp. Siswa</label>
                                <input type="text" name="inp_telp_siswa" value="<?php echo $data->telp_siswa ?>" class="form-control input-sm" required  placeholder="nama ayah..">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="" class="control-label">Alamat</label>
                                <input type="text" name="inp_alamat" value="<?php echo $data->alamat ?>" class="form-control input-sm" required  placeholder="nama ayah..">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="control-label">Nama Ayah</label>
                                <input type="text" name="inp_nama_ayah" value="<?php echo $data->nama_ayah ?>" class="form-control input-sm" required  placeholder="nama ayah..">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="control-label">Pekerjaan Ayah</label>
                                <input type="text" name="inp_pkj_ayah" value="<?php echo $data->pkj_ayah ?>" class="form-control input-sm" required  placeholder="pekerjaan ayah..">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="control-label">Nama Ibu</label>
                                <input type="text" name="inp_nama_ibu" value="<?php echo $data->nama_ibu ?>" class="form-control input-sm" required  placeholder="nama ibu..">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="control-label">Pekerjaan Ibu</label>
                                <input type="text" name="inp_pkj_ibu" value="<?php echo $data->pkj_ibu ?>" class="form-control input-sm" required  placeholder="pekerjaan ibu..">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="control-label">Telp. Ortu 1</label>
                                <input type="text" name="inp_telp_ortu" value="<?php echo $data->telp_ortu ?>" class="form-control input-sm" required  placeholder="telp orangtua..">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="control-label">Telp. Ortu 2</label>
                                <input type="text" name="inp_telp_ortu_2" value="<?php echo $data->telp_ortu_2 ?>" class="form-control input-sm" required  placeholder="telp orangtua 2..">
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