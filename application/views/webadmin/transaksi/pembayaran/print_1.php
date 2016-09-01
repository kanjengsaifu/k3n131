<html>
    <style>
        .rot{
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            transform: rotate(90deg);
            float: left;
            margin-top: 30px;
            margin-left: -15px;
            border-left: 1px solid black; 
        }
        td.kwi{
            font-size: 1.5em;
            padding-left: 20px;
        }
    </style>

    <?php
    $total = 0;
    $txt = '';
    foreach ($list_data_det as $detail) {
        $total += $detail->jumlah;
        $txt .= $detail->jns_pemb == 'SPP' ? 'SPP Bulan ' . $this->format_date->format_date_custom($detail->tahun . '-' . $detail->bulan . '-01', 'F Y') : 'Pendaftaran (' . $detail->keterangan . ')';
    }
    ?>
    <body>
        <table style="width: 100%">
            <tr>
                <td rowspan="8" style="width: 15%; border-right: 2px solid black " >
                    <div>
                        <h4 class="text-right" style="margin-bottom: 0; margin-top: 0"><img src="<?php echo base_url() . 'assets/webadmin/' ?>assets/images/logo_gray.png" alt="KENBI" width="100px"></h4>
                    </div>
                    <div class="rot" >
                        <strong>Kenari Bimbel</strong><br>
                        Jalan Kenari No.1-F1<br>
                        Baleendah, Bandung<br>
                        <abbr title="Phone">P:</abbr> 08123456789
                    </div>
                </td>
                <td class="kwi" colspan="2">No. #<strong><?php echo $data_header->kode_pembayaran ?></strong></td>
            </tr>
            <tr><td class="kwi" colspan="2" style="width: 85%">Telah terima dari <strong><?php echo $data_header->nama_siswa . ' (' . $data_header->kelas . ')' ?></strong></td></tr>
            <tr><td class="kwi" colspan="2">Uang sejumlah <strong><?php echo $this->ntwind->convertCurrencyToWords($total) ?></strong></td></tr>
            <tr><td class="kwi" colspan="2">Uang pembayaran <?php echo $txt ?></td></tr>
            <tr><td></td><td class="kwi" style="text-align: right">Bandung, <?php echo date('d - m - Y') ?></td></tr>
            <tr><td class="kwi" style="width: 40%; text-align: center" ><h1 style="background: #C0C9B4">Rp. <?php echo number_format($total).',-'?></h1></td></tr>
        </table>

    </body>
</html>