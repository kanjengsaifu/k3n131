<div id="modal-view-<?php echo $data->id_gaji_guru ?>" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><?php echo $title_content ?></h4>
            </div>
            <div class="modal-body font-13">
                <dl class="dl-horizontal m-b-0">
                    <dt style="text-align: left">Kode Transaksi</dt><dd><?php echo $data->kode_transaksi ?></dd>                   
                    <dt style="text-align: left">Nama Guru</dt><dd><?php echo $data->nama_guru ?></dd>                   
                    <dt style="text-align: left">Mata Pelajaran</dt><dd><?php echo $data->mapel ?></dd>                   
                    <dt style="text-align: left">Tingkat</dt><dd><?php echo $data->tingkat ?></dd>                   
                    <dt style="text-align: left">Tanggal Pengambilan</dt><dd><?php echo $data->tgl_gaji_guru ?></dd>                   
                </dl>
                <hr>
                <ol>
                    <li>
                        <span class="col-lg-5">Mengajar</span>
                        <span class="col-lg-3"><?php echo $data->jml_absen != null ? $data->jml_absen : 0; ?> x Rp. <?php echo number_format($data->honor_mengajar) ?></span>
                        <span class="col-lg-1">=</span>
                        <span class="col-lg-3 pull-right">
                            <?php
                            $sub_absen = $data->jml_absen * $data->honor_mengajar;
                            echo 'Rp. ' . number_format($sub_absen);
                            ?>
                        </span>
                    </li>
                    <li>
                        <span class="col-lg-5">Pembuatan Materi</span>
                        <span class="col-lg-3"><?php echo $data->jml_materi != null ? $data->jml_materi : 0; ?> x Rp. <?php echo number_format($data->honor_materi) ?></span>
                        <span class="col-lg-1">=</span>
                        <span class="col-lg-3 pull-right">
                            <?php
                            $sub_materi = $data->jml_materi * $data->honor_materi;
                            echo 'Rp. ' . number_format($sub_materi);
                            ?>
                        </span>
                    </li>
                    <li>
                        <span class="col-lg-5">Pembuatan Soal</span>
                        <span class="col-lg-3"><?php echo $data->jml_soal != null ? $data->jml_soal : 0; ?> x Rp. <?php echo number_format($data->honor_soal) ?></span>
                        <span class="col-lg-1">=</span>
                        <span class="col-lg-3 pull-right">
                            <?php
                            $sub_soal = $data->jml_soal * $data->honor_soal;
                            echo 'Rp. ' . number_format($sub_soal);
                            ?>
                        </span>
                    </li>

                </ol><hr>
                <ol class="list-unstyled">
                    <li>
                        <span class="col-lg-offset-6 col-lg-3 ">Total</span>
                        <span class="col-lg-3 pull-right">
                            <strong>
                                <?php
                                $total = $sub_absen + $sub_materi + $sub_soal;
                                echo 'Rp. ' . number_format($total);
                                ?>
                            </strong>
                        </span>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>