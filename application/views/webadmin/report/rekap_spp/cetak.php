<center>Rekap SPP</center>
<center>
    <?php
    if ($param['bulan_aw'] == $param['bulan_ak'] && $param['tahun_aw'] == $param['tahun_ak']) {
        echo $this->format_date->format_date_custom($param['tahun_aw'] . '-' . $param['bulan_aw'] . '-01', 'F Y');
    } else {
        echo $this->format_date->format_date_custom($param['tahun_aw'] . '-' . $param['bulan_aw'] . '-01', 'F Y') . ' - ' . $this->format_date->format_date_custom($param['tahun_ak'] . '-' . $param['bulan_ak'] . '-01', 'F Y');
    }
    ?>
</center>
<br>
<br>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive font-13">
            <table id="datatable-responsive" border="1" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Siswa</th>                                
                        <th>Nama Siswa</th>
                        <?php
                        $array_bulan = $param['array_bulan'];
                        for ($i = 0; $i < count($array_bulan); $i++) {
                            $txt_bln = substr($array_bulan[$i], 0, 2) . '/' . substr($array_bulan[$i], 5, 2);
                            echo '<th><center>' . $txt_bln . '</center></th>';
                        }
                        ?>           
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
                            for ($i = 0; $i < count($array_bulan); $i++) {
                                $tgl = $data['j_' . str_replace('-', '_', $array_bulan[$i])];
                                echo '<td><center>';
                                echo $tgl != null ? $this->format_date->format_date_dfy($tgl) : '';
                                echo'</center></td>';
                            }
                            ?> 
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