<div id="modal-view-<?php echo $data->id_guru ?>" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
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
//                                        echo $data->jenis_kelamin == 'Laki-laki' ? '<i class="icon-user"></i>' : '<i class="icon-user-female"></i>'
                                    echo '<i class="icon-user"></i>';
                                    ?>
                                </span>
                                <label for="" class="control-label"><?php echo $data->nama_guru ?></label><br><?php echo $data->kode_guru ?>
                            </div>
                        </div>                        
                        <div class="col-md-9">
                            <div class="form-group">
                                <dl class="dl-horizontal m-b-0">
                                    <dt>Mata Pelajaran</dt><dd><?php echo $data->mata_pelajaran ?></dd>
                                    <dt>Telp. Guru</dt><dd><?php echo $data->no_telp ?></dd>
                                    <dt>Alamat</dt><dd><?php echo $data->alamat ?></dd>
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