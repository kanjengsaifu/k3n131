<center>Daftar Hadir <?php echo $param['kelas'] ?></center>
<center><?php echo $param['bulan'] == 'ALL' ? $param['tahun'] : $this->format_date->format_date_custom($param['tahun'] . '-' . $param['bulan'] . '-01', 'F Y') ?></center>
<br>
<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%" border="1">
    <thead>
        <tr>
            <th rowspan="2">#</th>
            <th rowspan="2" style="text-align: center">Kode Siswa</th>                                
            <th rowspan="2" style="text-align: center">Nama Siswa</th>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo '<th style="width:7%"><center>Pert. ' . $i . '</center></th>';
            }
            ?>      
        </tr>
        <tr>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo '<th>&nbsp;</th>';
            }
            ?>      
        </tr>
    </thead>
    <tbody>                            
        <?php
        $no = 1;
        foreach ($list_data as $data) {
            ?>
        <tr style="height: 30px">
                <td><?php echo $no ?></td>
                <td style="text-align: center"><?php echo $data['kode_siswa'] ?></td>
                <td style="text-align: center"><?php echo $data['nama_siswa'] ?></td>
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
            </tr>
            <?php
            $no++;
        }
        ?> 
    </tbody>
</table>