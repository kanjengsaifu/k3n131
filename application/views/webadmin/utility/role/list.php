<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#modal-add">Add <i class="fa fa-plus"></i></button>
                </div>
                <h4 class="page-title"><?php echo $title_page; ?></h4>
                <?php $this->load->view('webadmin/utility/role/breadcrumbs'); ?>
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
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" style="width: 100%">
                        <thead>
                            <tr>
                                <th style="width: 5%">#</th>
                                <th style="width: 20%">Nama Role</th>
                                <th style="width: 60%">Hak Akses</th>
                                <th style="width: 15%">Tools</th>
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
                                    <td><?php echo $data->nama_role ?></td>
                                    <td><?php echo $data->hak_akses ?></td>
                                    <td style="text-align: center;">                                                                                
                                        <a href="<?php echo site_url('utility/role/edit/' . $data->id_role)?>">
                                            <button class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white"><i class="fa fa-edit"></i> </button>
                                        </a>                                        
                                        <?php echo $this->array_custom->delete_modal($modul, site_url('utility/role/delete/' . $data->id_role), $data->id_role); ?>
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
<!-- Add -->
<?php $this->load->view('webadmin/utility/role/modal_add'); ?>