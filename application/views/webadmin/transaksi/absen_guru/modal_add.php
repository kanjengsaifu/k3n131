
<div class="card-box table-responsive font-13">
    <h4 class="m-t-0 header-title"><b>Tambah Data</b></h4>
    <form action="<?php echo site_url('transaksi/absen_guru/process/add'); ?>" method="post" data-parsley-validate novalidate>
        <div class="modal-body font-13">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="control-label">Tanggal Absen</label>
                        <input type="text" name="inp_tgl_absen" value="<?php echo $this->format_date->format_date_dmy(date('Y-m-d')) ?>" class="form-control input-sm datepicker" placeholder="tanggal lahir..">
                    </div>
                </div>                           
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="" class="control-label">Nama Guru</label>
                        <select class="form-control input-sm select2" name="inp_kode_guru" required>
                            <option value="">Pilih Nama Guru..</option>
                            <?php
                            foreach ($list_data_guru as $guru) {
                                echo '<option value="' . $guru->kode_guru . '" >' . $guru->nama_guru . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="" class="control-label">Jumlah Jam</label>
                        <div class="table-detail">
                            <?php
                            for ($j = 1; $j < 8; $j++) {
                                ?>
                                <div class="radio radio-inline">
                                    <input type="radio" value="<?php echo $j ?>" id="id<?php echo $j ?>" name="inp_jumlah_jam" <?php echo $j == 2 ? 'checked=""' : '' ?>>
                                    <label for="id<?php echo $j ?>"><?php echo $j ?></label>
                                </div>
                                <?php
                            }
                            ?>                                            
                        </div>
                    <!--<input type="text" name="inp_jumlah_jam" class="form-control input-sm " placeholder="jumlah jam..">-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="" class="control-label">Tingkat</label>
                        <div class="table-detail">
                            <div class="radio radio-inline">
                                <input type="radio" value="SD" id="idsd" name="inp_tingkat" >
                                <label for="idsd">SD</label>
                            </div>
                            <div class="radio radio-inline">
                                <input type="radio" value="SMP" id="idsmp" name="inp_tingkat" checked="" >
                                <label for="idsd">SMP</label>
                            </div>
                            <div class="radio radio-inline">
                                <input type="radio" value="SMA" id="idsd" name="inp_tingkat" >
                                <label for="idsd">SMA</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><?php echo $this->array_custom->get_keterangan('button', 'cancel') ?></button>-->
                <button type="submit" value="modal" name="submit" class="btn btn-default waves-effect waves-light"><?php echo $this->array_custom->get_keterangan('button', 'save') ?></button>
            </div>
        </div>
    </form>
</div>
