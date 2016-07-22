<div id="modal-view-<?php echo $data->id_siswa ?>" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><?php echo $title_content ?></h4>
            </div>
            <form action="#" method="post" class="form-horizontal" data-parsley-validate novalidate>
                <div class="modal-body font-13">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <div class="form-group">
                                <span style="font-size: 80pt">
                                    <?php
                                        echo $data->jenis_kelamin == 'Laki-laki' ? '<i class="icon-user"></i>' : '<i class="icon-user-female"></i>'
                                    ?>
                                </span>
                                <label for="" class="control-label"><?php echo $data->nama_siswa ?></label><br><?php echo $data->kode_siswa ?>
                            </div>
                        </div>                        
                        <div class="col-md-9">
                            <div class="form-group">
                                <dl class="dl-horizontal m-b-0">
                                    <dt>Tempat / Tangal Lahir</dt><dd><?php echo $data->tempat_lahir ?> / <?php echo $this->format_date->format_date_dfy($data->tgl_lahir) ?></dd>                                    
                                    <dt>Asal Sekolah</dt><dd><?php echo $data->asal_sekolah ?></dd>
                                    <dt>Kelas</dt><dd><?php echo $data->kelas ?></dd>
                                    <dt>Telp. Siswa</dt><dd><?php echo $data->telp_siswa ?></dd>
                                    <dt>Alamat</dt><dd><?php echo $data->alamat ?></dd>
                                    <dt>Nama Ayah</dt><dd><?php echo $data->nama_ayah ?></dd>
                                    <dt>Pekerjaan Ayah</dt><dd><?php echo $data->pkj_ayah ?></dd>
                                    <dt>Nama Ibu</dt><dd><?php echo $data->nama_ibu ?></dd>
                                    <dt>Pekerjaan Ibu</dt><dd><?php echo $data->pkj_ibu ?></dd>
                                    <dt>Telp. Ortu 1</dt><dd><?php echo $data->telp_ortu ?></dd>
                                    <dt>Telp. Ortu 2</dt><dd><?php echo $data->telp_ortu_2 ?></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><?php echo $this->array_custom->get_keterangan('button', 'cancel') ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>