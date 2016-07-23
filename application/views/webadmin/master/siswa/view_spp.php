<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th style="width: 5%">#</th>
            <th>Tanggal</th>
            <th>Kode Transaksi</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 0;
        foreach ($list_hist_spp as $spp) {
            $no++;
            ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $spp->tgl_pembayaran ?></td>
                <td><a href="<?php echo site_url('transaksi/pembayaran/view/' . $spp->kode_pembayaran) ?>" target="_blank"><?php echo $spp->kode_pembayaran ?></a></td>
                <td><?php echo $this->format_date->format_date_custom($spp->tahun . '-' . $spp->bulan . '-01', 'F Y') ?></td>                
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
