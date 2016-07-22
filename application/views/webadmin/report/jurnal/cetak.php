<center>Rekap Jurnal</center>
<center><?php echo $param['bulan'] == 'ALL' ? $param['tahun'] : $this->format_date->format_date_custom($param['tahun'] . '-' . $param['bulan'] . '-01', 'F Y') ?></center>
<br>
<br>
<table id="datatable-responsive" border="1" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>#</th>
            <th>Tanggal</th>
            <th>Kode Jurnal</th>
            <th>Kode Transaksi</th>
            <th>Keterangan</th>
            <th>Debit</th>
            <th>Kredit</th>
            <th>Sisa</th>                                
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>Sisa Bulan Sebelumnya</td>
            <td><span class="pull-right">0</span></td>
            <td><span class="pull-right">0</span></td>
            <td>
                <span class="pull-right">
                    <?php
                    $ttl = $data_bulan != null ? $data_bulan->sisa_bulan_sebelumnya : 0;
                    echo number_format($ttl);
                    ?>
                </span></td>
        </tr>
        <?php
        $no = 1;
        foreach ($list_data as $data) {
            $no++;
            ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $this->format_date->format_date_dfy($data->tgl_jurnal) ?></td>
                <td><?php echo $data->kode_jurnal ?></td>
                <td><?php echo $data->kode_transaksi ?></td>
                <td><?php echo $data->keterangan ?></td>
                <td><span class="pull-right"><?php echo number_format($data->debit) ?></span></td>
                <td><span class="pull-right"><?php echo number_format($data->kredit) ?></span></td>
                <td>
                    <span class="pull-right">
                        <?php
                        $ttl = $ttl + $data->kredit - $data->debit;
                        echo number_format($ttl);
                        ?>
                    </span>                                        
                </td>
            </tr>
            <?php
        }
        ?> 
    </tbody>
</table>