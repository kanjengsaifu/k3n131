<html>

    <body>
        <table style="width: 100%">
            <tr>
                <td>
                    <div style="float: left; vertical-align: top">
                        <h4 class="text-right" style="margin-bottom: 0; margin-top: 0"><img src="<?php echo base_url() . 'assets/webadmin/' ?>assets/images/logo_gray.png" alt="KENBI" width="100px"></h4>
                    </div>
                    <div style="float: left">
                        <strong>Kenari Bimbel</strong><br>
                        Jalan Kenari No.1-F1<br>
                        Baleendah, Bandung<br>
                        <abbr title="Phone">P:</abbr> 08123456789
                    </div>
                </td>
                <td style="text-align: right">
                    <strong>Kode Pembayaran : </strong> #<strong><?php echo $data_header->kode_pembayaran ?></strong><br>
                    <?php echo $data_header->nama_siswa . ' (' . $data_header->kelas . ')' ?><br>
                    <strong>Tanggal : </strong> <?php echo $this->format_date->format_date_custom($data_header->tgl_pembayaran, 'F d, Y') ?><br>
                    <strong>Status: </strong> <span class="label label-pink"><?php echo $data_header->status ?></span>                    
                </td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>        
            </tr>
            <tr>
                <td colspan="2">
                    <table border="1" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th style="width: 5%">#</th>
                                <th style="width: 75%">Keterangan </th>
                                <th style="width: 10%">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $total = 0;
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
                                </tr>
                                <?php
                                $total += $detail->jumlah;
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </td>        
            </tr>
            <tr>
                <td style="vertical-align: bottom">                     
                    Terbilang : <i><strong><?php echo $this->ntwind->convertCurrencyToWords($total) ?></strong></i>
                </td>
                <td style="text-align: right">
                    <b>Total:</b> <?php echo number_format($total) ?><br><br>
                    <!--                    <br><hr>
                                        <h3>Rp. <?php echo number_format($total) ?></h3><br>-->
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right">
                    <br><br><br><br><br><span style="margin-right: 50px">(Admin Kenari Bimbel)</span>
                </td>
            </tr>
        </table>

    </body>
</html>