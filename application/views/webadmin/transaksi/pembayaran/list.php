<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <a href="<?php echo site_url('transaksi/pembayaran/add')?>"><button class="btn btn-default waves-effect waves-light">Add <i class="fa fa-plus"></i></button></a>
                </div>
                <h4 class="page-title"><?php echo $modul; ?></h4>
                <?php $this->load->view('webadmin/transaksi/pembayaran/breadcrumbs'); ?>
            </div>
        </div>

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <?php
                if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
                endif;
                ?>
                <div class="card-box table-responsive font-13">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tgl. Pembayaran</th>
                                <th>Kode Pembayaran</th>
                                <th>Nama Siswa</th>
                                <th>Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($list_data as $data) {
                                $no++;
                                ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $data->tgl_pembayaran ?></td>
                                    <td><?php echo $data->kode_pembayaran ?></td>
                                    <td><a href="<?php echo site_url('master/siswa/view/' . $data->kode_siswa) ?>" target="_blank"><?php echo $data->nama_siswa ?></a></td>
                                    <td style="text-align: center;">
                                        <a href="<?php echo site_url('transaksi/pembayaran/view/' . $data->kode_pembayaran) ?>"><button class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white"><i class="fa fa-folder-open"></i> </button></a>
                                        <?php echo $this->array_custom->delete_modal($modul, site_url('transaksi/pembayaran/delete/'.$data->kode_pembayaran), $data->kode_pembayaran); ?>
                                    </td>
                                </tr>

                                <?php
                            }
                            ?> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end row -->
        <!-- Footer -->
        <?php $this->load->view('webadmin/tile/footer'); ?>
        <!-- End Footer -->
    </div>
</div>