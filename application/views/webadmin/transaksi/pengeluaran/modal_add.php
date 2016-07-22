<div id="modal-add" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><?php echo $title_content ?></h4>
            </div>
            <form action="<?php echo site_url('transaksi/pengeluaran/process/add/'); ?>" method="post" data-parsley-validate novalidate>
                <div class="modal-body font-13">
                    <div class="row">  
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="" class="control-label">Tanggal</label>
                                <input type="text" name="inp_tgl" value="<?php echo date('d-m-Y')?>" class="form-control input-sm datepicker" placeholder="tanggal pengeluaran..">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="control-label">Jenis Pengeluaran</label>
                                <select class="form-control input-sm select2" name="inp_jenis_pengeluaran" id="inp_pembayaran" required="">
                                    <option value="">Pilih Jenis Pengeluaran</option>
                                    <?php
                                    foreach ($list_data_kat as $kat) {
                                        echo '<option value="' . $kat->kode_list . '" >' . $kat->nama_list . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="" class="control-label">Jumlah</label>
                                <input type="text" name="inp_jumlah" class="form-control input-sm" required  placeholder="jumlah..">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="" class="control-label">Keterangan</label>
                                <input type="text" name="inp_ket" class="form-control input-sm" placeholder="keterangan..">
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