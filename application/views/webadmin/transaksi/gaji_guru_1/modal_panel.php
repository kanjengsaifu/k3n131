<div id="panel-modal-<?php echo $data->id_gaji_guru ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content p-0 b-0">
            <div class="panel panel-color panel-primary">
                <div class="panel-heading">
                    <button type="button" class="close m-t-5" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 class="panel-title">Panel Primary</h3>
                </div>
                <div class="panel-body">
                    <p><?php echo $data->id_gaji_guru ?>ut aliquip ex ea commodo consequat.</p>
                    <table><table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th style="width: 5%">#</th>
                                    <th>Keterangan</th>
                                    <th>Jumlah</th>
                                    <th>Honor</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>                        
                            <tbody>
                                <?php
                                $total = 0;
                                ?>
                                <tr>
                                    <td>1</td>
                                    <td>Mengajar</td>
                                    <td><?php echo $data->jml_absen ?></td>
                                    <td><?php echo $data->honor_mengajar ?></td>
                                    <td>
                                        <?php
                                        $sub_absen = $data->jml_absen * $data->honor_mengajar;
                                        $total += $sub_absen;
                                        echo number_format($sub_absen);
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Pembuatan Materi</td>
                                    <td><?php echo $data->jml_materi ?></td>
                                    <td><?php echo $data->honor_materi ?></td>
                                    <td>
                                        <?php
                                        $sub_materi = $data->jml_materi * $data->honor_materi;
                                        $total += $sub_materi;
                                        echo number_format($sub_materi);
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Pembuatan Soal</td>
                                    <td><?php echo $data->jml_soal ?></td>
                                    <td><?php echo $data->honor_soal ?></td>
                                    <td>
                                        <?php
                                        $sub_soal = $data->jml_soal * $data->honor_soal;
                                        $total += $sub_soal;
                                        echo number_format($sub_soal);
                                        ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->