<html>
    <body>
        <table id="datatable-responsive" cellspacing="0" width="100%">                
            <tbody>                            
                <tr>
                    <?php
                    $ct1 = 1;
                    $g_ajar = $common->setting['honor_' . strtolower($data->tingkat)];
                    $g_soal = $common->setting['honor_soal'];
                    $g_materi = $common->setting['honor_materi'];
                    foreach ($list_data_absen as $absen) {
                        if ($ct1 > 4) {
                            echo '</tr><tr>';
                            $ct1 = 1;
                        }
                        ?>
                        <td style="padding: 20px; width: 25%; font-size: xx-small" valign="top">

                            <table width="100%">
                                <tr><td style="text-align: left" colspan="2"><strong>Nama Guru</strong></td><td colspan="2">: <?php echo $absen->nama_guru ?></td></tr>
                                <tr><td style="text-align: left" colspan="2"><strong>Mata Pelajaran</strong></td><td colspan="2">: <?php echo $absen->mapel ?></td></tr>
                                <tr><td style="text-align: left" colspan="2"><strong>Tingkat</strong></td><td colspan="2">: <?php echo $data->tingkat ?></td></tr>
                            </table>
                            <hr>
                            <table width="100%" border="1" cellspacing="0">
                                <tr>
                                    <td style="width:10px; text-align: center">#</td>
                                    <td style="width:60px; text-align: center" colspan="2">Tanggal</td>
                                    <td style="width:30px; text-align: center">Jml Jam</td>
                                </tr>
                                <?php
                                $param_absen = array_merge($param, array('kode_guru' => $absen->kode_guru));
                                $list_absen_guru = $common->get_list_absen($param_absen);
                                $no_absen = 1;
                                foreach ($list_absen_guru as $ag) {
                                    ?>
                                    <tr>
                                        <td style="text-align: center"><?php echo $no_absen ?></td>
                                        <td style="text-align: center" colspan="2"><?php echo $ag->tgl_absen ?></td>
                                        <td style="text-align: center"><?php echo $ag->jumlah_jam ?></td>
                                    </tr>
                                    <?php
                                    $no_absen++;
                                }
                                ?>
                            </table>
                            <hr>
                            <table width="100%">
                                <tr>
                                    <td style="text-align: left" colspan="2"><strong>Mengajar</strong></td>
                                    <td style="text-align: right"><?php echo $absen->jml_jam != null ? $absen->jml_jam : 0;   ?> x <?php echo number_format($g_ajar)   ?> =</td>
                                    <td style="text-align: right">
                                        <?php
                                        $sub_absen = $absen->jml_jam * $g_ajar;
                                        echo '' . number_format($sub_absen);
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: left" colspan="2"><strong>Materi</strong></td>
                                    <td style="text-align: right"><?php echo $absen->jml_materi != null ? $absen->jml_materi : 0;   ?> x <?php echo number_format($g_materi)   ?> =</td>
                                    <td style="text-align: right">
                                        <?php
                                        $sub_materi = $absen->jml_materi * $g_materi;
                                        echo '' . number_format($sub_materi);
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: left" colspan="2"><strong>Soal</strong></td>
                                    <td style="text-align: right"><?php echo $absen->jml_soal != null ? $absen->jml_soal : 0;   ?> x <?php echo number_format($g_soal)   ?> =</td>
                                    <td style="text-align: right">
                                        <?php
                                        $sub_soal = $absen->jml_soal * $g_soal;
                                        echo '' . number_format($sub_soal);
                                        ?>
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <table width="100%">
                                <tr>
                                    <td style="text-align: left"><strong>Total</strong></td>
                                    <td style="text-align: right" colspan="3">
                                        <strong>
                                            <?php
                                            $total = $sub_absen + $sub_materi + $sub_soal;
                                            echo 'Rp. ' . number_format($total);
                                            ?>
                                        </strong>
                                    </td>
                                </tr>
                            </table>
                            <hr>

                        </td>
                        <td width="30px">&nbsp;</td>
                        <?php
                        $ct1++;
                    }
                    ?>
                </tr>
            </tbody>
        </table>

    </body>
</html>