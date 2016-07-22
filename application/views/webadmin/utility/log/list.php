<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <button class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#modal-clean">
                        <i class="fa fa-trash"></i> Clean Log 
                    </button>
                </div>
                <h4 class="page-title"><?php echo $title_page; ?></h4>
                <?php $this->load->view('webadmin/utility/log/breadcrumbs'); ?>
            </div>
        </div>

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <?php
                if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
                endif;
                ?>
                <div class="card-box table-responsive">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Pegawai</th>
                                <th>Aksi</th>
                                <th>Keterangan</th>
                                <th>Tanggal</th>
                                <th>Tipe User</th>
                                <th>Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            echo $this->session->userdata('kn_id_user');
                            foreach ($list_data as $data) {
                                $no++;
                                ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $data->pegawai ?></td>
                                    <td><?php echo $data->aksi ?></td>
                                    <td><?php echo $data->keterangan ?></td>
                                    <td><?php echo $this->format_date->format_date_dfy($data->date) ?></td>
                                    <td><?php echo $data->type_user ?></td>
                                    <td style="text-align: center;">                                                                               
                                        <?php echo $this->array_custom->delete_modal($modul, site_url('utility/log/delete/' . $data->id_log), $data->id_log); ?>
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
<div id="modal-clean" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;text-align:left" >
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Delete All <?php echo $modul?></h4>
            </div>
            <form action="<?php echo site_url('utility/log/delete_all')?>" method="post" data-parsley-validate novalidate>
                <div class="modal-body">
                    Are You Sure to Delete All Data ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><?php echo $this->array_custom->get_keterangan('button', 'cancel') ?></button>
                    <button type="submit" class="btn btn-default waves-effect waves-light"><?php echo $this->array_custom->get_keterangan('button', 'delete') ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

