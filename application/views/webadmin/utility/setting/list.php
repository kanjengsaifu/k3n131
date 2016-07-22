<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#modal-add">Add <i class="fa fa-plus"></i></button>
                </div>
                <h4 class="page-title"><?php echo $modul; ?></h4>
                <?php $this->load->view('webadmin/utility/setting/breadcrumbs'); ?>
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
                    <h4 class="m-t-0 header-title"><b><?php echo $title_page; ?></b></h4>  

                    <div class="p-20">
                        <div class="row">
                            <div class="col-md-4">

                                <ul style="list-style-type: none;">
                                    <?php
                                    foreach ($list_data as $data) {
                                        ?>
                                        <li>
                                            <a data-toggle="modal" data-target="#modal-edit-<?php echo $data->id_setting ?>">
                                                <button class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                            </a>
                                            <?php echo $this->array_custom->delete_modal($modul, site_url('utility/setting/delete/' . $data->id_setting), $data->id_setting); ?>
                                            |&nbsp;<?php echo '(' . $data->kode_setting . ') ' . $data->nama_setting . ' = ' . $data->value_setting ?>
                                        </li>
                                        <?php
                                        $setting['data'] = $data;
                                        $this->load->view('webadmin/utility/setting/modal_edit', $setting);
                                        
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- end row -->
        <!-- Footer -->
        <?php $this->load->view('webadmin/tile/footer'); ?>
        <!-- End Footer -->
    </div>
</div>
<?php $this->load->view('webadmin/utility/setting/modal_add')?>
