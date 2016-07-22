<center>Rekap Gaji Guru <?php echo $param['tingkat'] ?></center>
<center><?php echo $param['bulan'] == 'ALL' ? $param['tahun'] : $this->format_date->format_date_custom($param['tahun'] . '-' . $param['bulan'] . '-01', 'F Y') ?></center>
<br>
<br>
<table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%" border="1">
    <thead>
        <tr>
            <th rowspan="2">#</th>
            <th rowspan="2">Nama Guru</th>
            <th rowspan="2">Mata Pejalaran</th>
            <th colspan="2">Honor Mengajar</th>
            <th colspan="2">Horor Materi</th>
            <th colspan="2">Horor Soal</th>
            <th rowspan="2">Total</th>     
            <th rowspan="2">Tanda Tangan</th>   
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
        if ($list_data != null) {
            $no = 1;
            foreach ($list_data as $data) {
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data->nama_guru ?></td>
                    <td><?php echo $data->mapel ?></td>
                    <td><span class="pull-right"><?php echo $data->jml_absen != null ? $data->jml_absen : '0' ?></span></td>
                    <td>
                        <span class="pull-right">
                            <?php
                            $sub_absen = $data->jml_absen * $data->honor_mengajar;
                            echo number_format($sub_absen);
                            ?>
                        </span>
                    </td>
                    <td><span class="pull-right"><?php echo $data->jml_materi != null ? $data->jml_materi : '0' ?></span></td>
                    <td>
                        <span class="pull-right">
                            <?php
                            $sub_materi = $data->jml_materi * $data->honor_materi;
                            echo number_format($sub_materi);
                            ?>
                        </span>
                    </td>
                    <td><span class="pull-right"><?php echo $data->jml_soal != null ? $data->jml_soal : '0' ?></span></td>
                    <td>
                        <span class="pull-right">
                            <?php
                            $sub_soal = $data->jml_soal * $data->honor_soal;
                            echo number_format($sub_soal);
                            ?>
                        </span>
                    </td>
                    <td>
                        <span class="pull-right">
                            <?php
                            $total = $sub_absen + $sub_materi + $sub_soal;
                            echo number_format($total);
                            ?>
                        </span>
                    </td>
                    <td style="text-align: center">
                        
                    </td>
                </tr>
                <?php
                $no++;
            }
        } else {
            echo '<tr><td colspan="11">No data available in table</td></tr>';
        }
        ?>
    </tbody>
</table>