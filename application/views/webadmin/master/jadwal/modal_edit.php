<div id="modal-edit-<?php echo $data->id_jadwal ?>" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="text-align: left">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><?php echo $title_content ?></h4>
            </div>
            <form action="<?php echo site_url('master/jadwal/process/edit/' . $data->id_jadwal); ?>" method="post" data-parsley-validate novalidate>
                <div class="modal-body font-13">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Hari</label>
                                <select class="form-control input-sm select2" name="inp_hari" required>
                                    <option value="">Select..</option>
                                    <?php
                                    $list_day = $this->format_date->list_day();
                                    for ($day = 0; $day < 6; $day++) {
                                        echo '<option value="'.$day.'"'.  set_select('inp_hari', $day, $day == $data->hari).'>'.$list_day[$day].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Jam</label>
                                <select class="form-control input-sm select2" name="inp_jam" required>
                                    <option value="">Select..</option>
                                    <?php
                                    for ($jam = 1; $jam < 3; $jam++) {
                                        echo '<option value="'.$jam.'"'.  set_select('inp_jam', $jam, $jam == $data->jam).'>'.$jam.'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Kelas</label>
                                <select class="form-control input-sm select2" name="inp_kelas" required>
                                    <option value="">Select..</option>
                                    <?php
                                    foreach ($list_data_kelas as $kelas) {
                                        echo '<option value="' . $kelas->nama_list . '" ' . set_select('inp_kelas', $kelas->nama_list, $kelas->nama_list == $data->kelas) . '>' . $kelas->nama_list . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Mata Pelajaran</label>
                                <select class="form-control input-sm select2" name="inp_mapel" required>
                                    <option value="">Select..</option>
                                    <?php
                                    foreach ($list_data_mapel as $mapel) {
                                        echo '<option value="' . $mapel->kode_list . '" ' . set_select('inp_mapel', $mapel->kode_list, $mapel->kode_list == $data->mapel) . '>' . $mapel->nama_list . '</option>';
                                    }
                                    ?>
                                </select>
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