<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#modal-add">Add <i class="fa fa-plus"></i></button>
                </div>
                <h4 class="page-title"><?php echo $modul; ?></h4>
                <?php $this->load->view('webadmin/transaksi/absen_guru/breadcrumbs'); ?>
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
                                <th>Jml Jam</th>
                                <th>Tingkat</th>
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
                                    <td><?php echo $data->tgl_absen ?></td>
                                    <td><?php echo $data->nama_guru ?></td>
                                    <td><?php echo $data->jumlah_jam ?></td>
                                    <td><?php echo $data->tingkat ?></td>
                                    <td style="text-align: center;">                                        
                                        <a data-toggle="modal" data-target="#modal-edit-<?php echo $data->id_absen_guru ?>"><button class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white"><i class="fa fa-edit"></i> </button></a>
                                        <?php echo $this->array_custom->delete_modal($modul, site_url('transaksi/absen_guru/delete/'.$data->id_absen_guru), $data->id_absen_guru); ?>
                                    </td>
                                </tr>
                                <?php
                                    $absen['data'] = $data;
                                    $this->load->view('webadmin/transaksi/absen_guru/modal_edit', $absen);
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
<?php $this->load->view('webadmin/transaksi/absen_guru/modal_add');?>
<style>
    .dropdown-menu {
        top: 170px !important;
    }
    
    dt{
        text-align: left;
    }
</style>