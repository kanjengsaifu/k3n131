<center>Rekap Absensi <?php echo $param['kelas'] ?></center>
<center><?php echo $param['bulan'] == 'ALL' ? $param['tahun'] : $this->format_date->format_date_custom($param['tahun'] . '-' . $param['bulan'] . '-01', 'F Y') ?></center>
<br>
<br>
<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%" border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>Kode Siswa</th>                                
            <th>Nama Siswa</th>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo '<th><center>Pert-' . $i . '</center></th>';
            }
            ?>      
            <th>Persentase</th>
        </tr>
    </thead>
    <tbody>                            
        <?php
        $no = 1;
        foreach ($list_data as $data) {
            ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $data['kode_siswa'] ?></td>
                <td><?php echo $data['nama_siswa'] ?></td>
                <?php
                $ttl_hadir = 0;
                for ($i = 1; $i <= 10; $i++) {
                    echo '<td><center>';
                    echo $data['ket_' . $i] == 'Hadir' ? 'Hadir' : '-';
                    echo'</center></td>';
                    $data['ket_' . $i] == 'Hadir' ? $ttl_hadir += 1 : $ttl_hadir;
                }
                $persen = ($ttl_hadir / 10) * 100;
                ?> 
                <td><?php echo $persen . ' %' ?></td>
            </tr>
            <?php
            $no++;
        }
        ?> 
    </tbody>
</table>