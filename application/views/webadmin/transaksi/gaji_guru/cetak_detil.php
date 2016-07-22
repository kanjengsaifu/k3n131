<html>
    <body>
        <table id="datatable-responsive" cellspacing="0" width="100%">                
            <tbody>                            
                <tr>
                    <?php
                    foreach ($list_data as $data) {
                        ?>
                        <td style="padding: 20px; width: 25%; font-size: xx-small" valign="top">

                            <table width="100%">
                                <tr><td style="text-align: left"><strong>Nama Guru</strong></td><td>: <?php echo $data->nama_guru ?></td></tr>
                                <tr><td style="text-align: left"><strong>Mata Pelajaran</strong></td><td>: <?php echo $data->mapel ?></td></tr>
                                <tr><td style="text-align: left"><strong>Tingkat</strong></td><td>: <?php echo $data->tingkat ?></td></tr>
                            </table>
                            <hr>
                            <table width="100%" border="1" cellspacing="0">
                                <tr>
                                    <td>#</td>
                                    <td>Tanggal</td>
                                    <td>Jml Jam</td>
                                    <td>Honor</td>
                                </tr>
                                <?php
                                $no = 1;
                                $ttl_gj = 0;
                                foreach ($list_data_absen_guru as $data_absen) {
                                    if ($data_absen->kode_guru == $data->kode_guru) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td style="text-align: center"><?php echo date('d-m-Y', strtotime($data_absen->tgl_absen)) ?></td>
                                            <td style="text-align: center"><?php echo $data_absen->jumlah_jam ?></td>
                                            <td style="text-align: right">
                                                <?php
                                                $sub_t = $data_absen->jumlah_jam * $data->honor_mengajar;
                                                $ttl_gj += $sub_t;
                                                echo number_format($sub_t);
                                                ?>
                                            </td>
                                        </tr>
                                        <?php
                                        $no++;
                                    }
                                }
                                ?>
                                <tr>
                                    <td colspan="3">Total</td>
                                    <td style="text-align: right"><?php echo number_format($ttl_gj) ?></td>
                                </tr>
                            </table>
                            <hr>
                            <table width="100%">
                                <tr>
                                    <td style="text-align: left"><strong>Mengajar</strong></td>
                                    <td style="text-align: right"><?php echo $data->jml_absen != null ? $data->jml_absen : 0; ?> x <?php echo number_format($data->honor_mengajar) ?> =</td>
                                    <td style="text-align: right">
                                        <?php
                                        $sub_absen = $data->jml_absen * $data->honor_mengajar;
                                        echo '' . number_format($sub_absen);
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: left"><strong>Materi</strong></td>
                                    <td style="text-align: right"><?php echo $data->jml_materi != null ? $data->jml_materi : 0; ?> x <?php echo number_format($data->honor_materi) ?> =</td>
                                    <td style="text-align: right">
                                        <?php
                                        $sub_materi = $data->jml_materi * $data->honor_materi;
                                        echo '' . number_format($sub_materi);
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: left"><strong>Soal</strong></td>
                                    <td style="text-align: right"><?php echo $data->jml_soal != null ? $data->jml_soal : 0; ?> x <?php echo number_format($data->honor_soal) ?> =</td>
                                    <td style="text-align: right">
                                        <?php
                                        $sub_soal = $data->jml_soal * $data->honor_soal;
                                        echo '' . number_format($sub_soal);
                                        ?>
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <table width="100%">
                                <tr>
                                    <td style="text-align: left"><strong>Total</strong></td>
                                    <td style="text-align: right">
                                        <strong>
                                            <?php
                                            $total = $sub_absen + $sub_materi + $sub_soal;
                                            echo '' . number_format($total);
                                            ?>
                                        </strong>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <?php
                    }
                    ?>
                </tr>
            </tbody>
        </table>

    </body>
</html>