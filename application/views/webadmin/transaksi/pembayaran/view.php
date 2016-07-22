<div class="wrapper">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <a href="<?php echo site_url('transaksi/pembayaran/cetak/' . $data_header->kode_pembayaran) ?>" target="_blank">
                        <button class="btn btn-default waves-effect waves-light">Cetak <i class="fa fa-print"></i></button>
                    </a>
                </div>
                <h4 class="page-title"><?php echo $modul; ?></h4>
                <?php $this->load->view('webadmin/transaksi/pembayaran/breadcrumbs'); ?>
            </div>
        </div>
        <!-- Page-Title -->

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left">
                                    <h4 class="text-right"><img src="<?php echo base_url() . 'assets/webadmin/' ?>assets/images/logo.png" alt="KENBI" width="100px"></h4>
                                </div>
                                <div class="pull-left">
                                    <address>
                                        <strong>Kenari Bimbel</strong><br>
                                        Jalan Kenari No.1-F1<br>
                                        Baleendah, Bandung<br>
                                        <abbr title="Phone">P:</abbr> 08123456789
                                    </address>
                                </div>
                                <div class="pull-right">
                                    <p style="text-align: right">
                                        <strong>Kode Pembayaran : </strong> #<strong><?php echo $data_header->kode_pembayaran ?></strong><br>
                                        <?php echo $data_header->nama_siswa . ' (' . $data_header->kelas . ')' ?><br>
                                        <strong>Tanggal : </strong> <?php echo $this->format_date->format_date_custom($data_header->tgl_pembayaran, 'F d, Y') ?><br>
                                        <span class="label label-pink"><?php echo $data_header->status ?></span>
                                    </p>
                                </div>
                            </div>
                        </div>                        
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
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
                                </div>
                            </div>
                        </div>
                        <div class="row" style="border-radius: 0px;">
                            <div class="col-md-3 col-md-offset-9">
                                <p class="text-right"><b>Total:</b> <?php echo number_format($total) ?></p>
                                <hr>
                                <h3 class="text-right">Rp. <?php echo number_format($total) ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <?php $this->load->view('webadmin/tile/footer'); ?>
        <!-- End Footer -->
    </div>    
</div>