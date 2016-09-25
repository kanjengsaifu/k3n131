<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#modal-add">Add <i class="fa fa-plus"></i></button>
                </div>
                <h4 class="page-title"><?php echo $modul; ?></h4>
                <?php $this->load->view('webadmin/transaksi/pembuatan_dokumen/breadcrumbs'); ?>
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
                                <th>Tanggal</th>
                                <th>Nama Guru</th>
                                <th>Tipe Dokumen</th>
                                <th>Tingkat</th>
                                <th>Keterangan</th>
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
                                    <td><?php echo $data->tgl_pembuatan_dok ?></td>
                                    <td><?php echo $data->nama_guru ?></td>
                                    <td><?php echo $data->tipe_dok ?></td>
                                    <td><?php echo $data->tingkat ?></td>
                                    <td><?php echo $data->keterangan ?></td>
                                    <td style="text-align: center;">                                        
                                        <a data-toggle="modal" data-target="#modal-edit-<?php echo $data->id_pembuatan_dok ?>"><button class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white"><i class="fa fa-edit"></i> </button></a>
                                        <?php echo $this->array_custom->delete_modal($modul, site_url('transaksi/pembuatan_dokumen/delete/' . $data->id_pembuatan_dok), $data->id_pembuatan_dok); ?>
                                    </td>
                                </tr>
                                <?php
                                $absen['data'] = $data;
                                $this->load->view('webadmin/transaksi/pembuatan_dokumen/modal_edit', $absen);
                                ?>
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
<?php $this->load->view('webadmin/transaksi/pembuatan_dokumen/modal_add'); ?>
<style>
    .datepicker.dropdown-menu {
        top: 170px !important;
    }

    dt{
        text-align: left;
    }
</style>