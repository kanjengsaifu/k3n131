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
                        <th>Kelas</th>
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
                            <td style="text-align: center"><?php echo $no ?></td>
                            <td style="text-align: center"><?php echo $data['kode_siswa'] ?></td>
                            <td style="padding-left: 10px"><?php echo $data['nama_siswa'] ?></td>
                            <td style="text-align: center">
                                <?php
                                $kls = $data['kelas'];
                                $kls = str_replace('A', '', $kls);
                                $kls = str_replace('B', '', $kls);
                                $kls = str_replace('C', '', $kls);
                                $kls = str_replace('D', '', $kls);
                                $kls = str_replace('E', '', $kls);
                                $kls = str_replace('F', '', $kls);
                                echo $kls;
                                ?>
                            </td>
                            <?php
                            for ($i = 0; $i < count($array_bulan); $i++) {
                                $tgl = $data['j_' . str_replace('-', '_', $array_bulan[$i])];
                                echo '<td><center';
                                echo $tgl != null ? date('m/d', strtotime($tgl)) : '';
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