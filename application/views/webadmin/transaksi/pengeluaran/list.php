<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#modal-add">Add <i class="fa fa-plus"></i></button>
                </div>
                <h4 class="page-title"><?php echo $modul; ?></h4>
                <?php $this->load->view('webadmin/transaksi/pengeluaran/breadcrumbs'); ?>
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
                                <th style="width: 5%">#</th>
                                <th>Kode Pengeluaran</th>
                                <th>Tanggal</th>
                                <th>Jenis Pengeluaran</th>
                                <th>Keterangan</th>
                                <th>Jumlah</th>
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
                                    <td><?php echo $data->kode_pengeluaran ?></td>
                                    <td><?php echo $data->tgl_pengeluaran ?></td>
                                    <td><?php echo $data->jns_peng ?></td>
                                    <td><?php echo $data->keterangan ?></td>
                                    <td><span class="pull-right"><?php echo number_format($data->jumlah) ?></span></td>
                                    <td style="text-align: center;">                                                                               
                                        <?php echo $this->array_custom->delete_modal($modul, site_url('transaksi/pengeluaran/delete/'.$data->kode_pengeluaran), $data->id_pengeluaran); ?>
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
<?php $this->load->view('webadmin/transaksi/pengeluaran/modal_add');?>
<style>
    .dropdown-menu {
        top: 170px !important;
    }
    
    dt{
        text-align: left;
    }
</style>