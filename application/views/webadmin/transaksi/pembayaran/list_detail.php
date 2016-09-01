<table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th style="width: 5%">#</th>
            <th style="width: 75%">Keterangan </th>
            <th style="width: 10%">Subtotal</th>
            <th style="width: 10%">Tools</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($list_data_det as $detail) {
            ?>
            <tr>
                <td><?php echo $no ?></td>
                <td>
                    <?php
                    echo $detail->jns_pemb == 'SPP' ? 'SPP Bulan ' . $this->format_date->format_date_custom($detail->tahun . '-' . $detail->bulan . '-01', 'F Y') : 'Pendaftaran (' . $detail->keterangan . ')';
                    ?>
                </td>
                <td style="text-align: right"><?php echo number_format($detail->jumlah) ?></td>
                <td style="text-align: center">

                    <button onclick="delete_detail(<?php echo $detail->id_pembayaran_detail ?>)" class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white">
                        <i class="fa fa-remove"></i> 
                    </button>

                </td>
            </tr>
            <?php
            $no++;
        }
        ?>
    </tbody>
</table>