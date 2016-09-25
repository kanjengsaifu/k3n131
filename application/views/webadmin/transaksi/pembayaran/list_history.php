<table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
        <tr>            
<!--            <th style="width: 7%">NI</th>
            <th style="width: 10%">Nama</th>-->
                <?php
                for ($i = 0; $i < count($list_bulan_tahun); $i++) {
                    echo '<th style="width: 5%">' . $list_bulan_tahun[$i] . '</th>';
                }
                ?>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($data_hist)) {
//        print_r($data_hist);
            ?>
            <tr>
                <!--<td><?php echo $data_hist['kode_siswa']?></td>-->
                <!--<td><?php echo $data_hist['nama_siswa']?></td>-->
                <?php
                for ($i = 0; $i < count($list_bulan_tahun); $i++) {
                    $tgl = str_replace('-', '_', $list_bulan_tahun[$i]);
                    
                    $ck = '<button '
                            . 'class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white" '
                            . 'data-toggle="tooltip" data-placement="top" title="" '
                            . 'data-original-title="' . $data_hist[$tgl] . '">'
                            . '<i class="fa fa-check"></i>'
                            . '</button>';
                    echo '<td style="text-align:center">';
                    echo $data_hist[$tgl] != null ? $ck : '';
                    echo '</td>';
                }
                ?>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>