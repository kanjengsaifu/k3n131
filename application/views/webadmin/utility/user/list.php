<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#modal-add">Add <i class="fa fa-plus"></i></button>
                </div>
                <h4 class="page-title"><?php echo $title_page; ?></h4>
                <?php $this->load->view('webadmin/utility/user/breadcrumbs'); ?>
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
                                <th>Nama</th>
                                <th>Telp.</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($list_data as $data) {
                                $no++;
                                switch ($data->status) {
                                    case '1':
                                        $lbl_stat = '<span class="label label-default" style="width:90%">Aktif</span>';
                                        break;
                                    default:
                                        $lbl_stat = '<span class="label label-danger" style="width:90%">Tidak Aktif</span>';
                                        break;
                                }
                                ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $data->nama ?></td>
                                    <td><?php echo $data->telp ?></td>
                                    <td><?php echo $data->username ?></td>
                                    <td><?php echo $data->email ?></td>
                                    <td><?php echo $data->type_user ?></td>
                                    <td style="text-align: center;"><?php echo $lbl_stat ?></td>
                                    <td style="text-align: center;">
                                        <?php
                                        if ($data->status == 0) {
                                            ?>
                                            <a href="<?php echo site_url('utility/user/aktivasi_user/active/' . $data->id_user) ?>" onclick="return confirm('active user?');"><button class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white"><i class="fa fa-lock"></i> </button></a>
                                            <?php
                                        } else {
                                            ?>
                                            <a href="<?php echo site_url('utility/user/aktivasi_user/deactive/' . $data->id_user) ?>" onclick="return confirm('deactive user?');"><button class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white"><i class="fa fa-unlock"></i> </button></a>
                                            <?php
                                        }
                                        ?>
                                        <!--<a data-toggle="modal" data-target="#modal-view-<?php echo $data->id_user ?>"><button class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white"><i class="fa fa-folder-open"></i> </button></a>-->
                                        <a data-toggle="modal" data-target="#modal-edit-<?php echo $data->id_user ?>"><button class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white"><i class="fa fa-edit"></i> </button></a>                                        
                                        <?php echo $this->array_custom->delete_modal($modul, site_url('utility/user/delete/' . $data->id_user), $data->id_user); ?>                                        
                                    </td>
                                </tr>
                                <?php
                                $user['data'] = $data;
                                $this->load->view('webadmin/utility/user/modal_edit', $user);
//                                $this->load->view('webadmin/utility/user/modal_view', $user);
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
<?php $this->load->view('webadmin/utility/user/modal_add'); ?>
