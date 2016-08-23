<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="button-list">
                    <a href="<?php echo site_url('transaksi/gaji_guru/cetak/' .$data->id_gaji_guru) ?>">
                        <button class="btn btn-default waves-effect waves-light pull-right">Cetak <i class="fa fa-print"></i></button>
                    </a>
                    <a href="<?php echo site_url('transaksi/gaji_guru/cetak_detil/'.$data->id_gaji_guru) ?>">
                        <button class="btn btn-primary waves-effect waves-light pull-right">Cetak Detil <i class="fa fa-print"></i></button>
                    </a>
                </div>
                <h4 class="page-title"><?php echo $modul.' ( ' . $data->tingkat . ' | ' . $data->tgl_awal .' s/d ' . $data->tgl_akhir . ' )' ?></h4>
                <?php $this->load->view('webadmin/transaksi/gaji_guru/breadcrumbs'); ?>
            </div>
        </div>        

        <!-- Page-Title -->        

        <div class="row">
            <div class="col-sm-12">               
                <div class="card-box table-responsive font-13">  
                    <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th rowspan="2">#</th>
                                <th rowspan="2">Nama Guru</th>
                                <th rowspan="2">Mata Pejalaran</th>
                                <th colspan="2">Honor Mengajar</th>
                                <th colspan="2">Honor Soal</th>
                                <th colspan="2">Honor Materi</th>
                                <th rowspan="2">Total</th>   
                            </tr>
                            <tr>
                                <th>Jml</th>
                                <th>Subtotal</th>
                                <th>Jml</th>
                                <th>Subtotal</th>
                                <th>Jml</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($list_data_absen as $absen) {
                                $h_ajar = $absen->jml_jam * $common->setting['honor_' . strtolower($data->tingkat)];
                                $h_soal = $absen->jml_soal * $common->setting['honor_soal'];
                                $h_materi = $absen->jml_materi * $common->setting['honor_materi'];
                                ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $absen->nama_guru ?></td>
                                    <td><?php echo $absen->mapel ?></td>
                                    <td class="text-center"><?php echo $absen->jml_jam ?></td>
                                    <td class="text-right"><?php echo number_format($h_ajar); ?></td>
                                    <td class="text-center"><?php echo $absen->jml_soal ?></td>
                                    <td class="text-right"><?php echo number_format($h_soal); ?></td>
                                    <td class="text-center"><?php echo $absen->jml_materi ?></td>
                                    <td class="text-right"><?php echo number_format($h_materi); ?></td>
                                    <td class="text-right"><?php echo number_format($h_materi + $h_ajar + $h_soal); ?></td>
                                </tr>
                                <?php
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end row -->
        <!-- Footer -->
        <?php $this->load->view('webadmin/tile/footer'); ?>
        <!-- End Footer -->
    </div>
</div>