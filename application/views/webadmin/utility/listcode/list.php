<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#modal-add">Add <i class="fa fa-plus"></i></button>
                </div>
                <h4 class="page-title"><?php echo $modul; ?></h4>
                <?php $this->load->view('webadmin/utility/listcode/breadcrumbs'); ?>
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
                            <?php
                            $idx = 0;
                            foreach ($list_data_head as $data_head) {
                                if ($idx >= 3) {
                                    echo '</div><div class="row">';
                                    $idx = 0;
                                }
                                ?>
                                <div class="col-md-4">
                                    <a href="<?php echo site_url('utility/listcode/edit/' . $data_head->id_list_code) ?>"><button class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white"><i class="fa fa-pencil"></i></button> </a>
                                    <?php echo $this->array_custom->delete_modal($modul, site_url('utility/listcode/delete/' . $data_head->id_list_code), $data_head->id_list_code); ?>
                                    |&nbsp;
                                    <span><strong><?php echo '('.$data_head->kode_list.') '.$data_head->nama_list ?></strong></span>
                                    <ul style="list-style-type: none;">
                                        <?php
                                        foreach ($list_data as $data) {
                                            if ($data_head->kode_list == $data->head_list) {
                                                ?>
                                                <li>
                                                    <a href="<?php echo site_url('utility/listcode/edit/' . $data->id_list_code) ?>"><button class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white"><i class="fa fa-pencil"></i></button> </a>
                                                    <?php echo $this->array_custom->delete_modal($modul, site_url('utility/listcode/delete/' . $data->id_list_code), $data->id_list_code); ?>
                                                    |&nbsp;<?php echo '('.$data->kode_list.') '.$data->nama_list ?>
                                                </li>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <?php
                                $idx+=1;
                            }
                            ?>
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
    <!-- Add -->
    <?php
        $this->load->view('webadmin/utility/listcode/modal_add')
    ?>
