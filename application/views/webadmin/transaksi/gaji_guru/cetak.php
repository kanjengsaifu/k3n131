<center>Rekap Gaji Guru <?php echo $data->tingkat ?></center>
<center><?php echo $data->tgl_awal .' s/d ' . $data->tgl_akhir ?></center>
<br>
<table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%" border="1">
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
        $tot = 0;
        foreach ($list_data_absen as $absen) {
            $h_ajar = $absen->jml_jam * $common->setting['honor_' . strtolower($data->tingkat)];
            $h_soal = $absen->jml_soal * $common->setting['honor_soal'];
            $h_materi = $absen->jml_materi * $common->setting['honor_materi'];
            ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $absen->nama_guru ?></td>
                <td><?php echo $absen->mapel ?></td>
                <td style="text-align: center"><?php echo $absen->jml_jam ?></td>
                <td style="text-align: right"><?php echo 'Rp. '.number_format($h_ajar); ?></td>
                <td style="text-align: center"><?php echo $absen->jml_soal ?></td>
                <td style="text-align: right"><?php echo 'Rp. '.number_format($h_soal); ?></td>
                <td style="text-align: center"><?php echo $absen->jml_materi ?></td>
                <td style="text-align: right"><?php echo 'Rp. '.number_format($h_materi); ?></td>
                <td style="text-align: right"><?php echo 'Rp. '.number_format($h_materi + $h_ajar + $h_soal); ?></td>
            </tr>
            <?php
            $tot += $h_materi + $h_ajar + $h_soal;
            $no++;
        }
        ?>
            <tr>
                <td colspan="9"><strong>Total Gaji Guru</strong></td>
                <td style="text-align: right"><?php echo 'Rp. '.number_format($tot)?></td>
            </tr>
    </tbody>
</table>