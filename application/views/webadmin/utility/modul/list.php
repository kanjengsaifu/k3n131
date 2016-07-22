<div class="wrapper">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#modal-add">Add <i class="fa fa-plus"></i></button>
                </div>
                <h4 class="page-title"><?php echo $title_page; ?></h4>
                <?php $this->load->view('webadmin/utility/modul/breadcrumbs') ?>
            </div>
        </div>
        <!-- Page-Title -->

        <div class="row">
            <div class="col-sm-12">
                <?php
                if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
                endif;
                ?>
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b><?php echo $title_page; ?></b></h4>

                    <div class="p-20">
                        <div class="row">
                            <?php
                            foreach ($list_data_kategori as $kategori) {
                                ?>
                                <div class="col-sm-3">
                                    <h3><?php echo $kategori->nama_list ?></h3>
                                    <ul class="list-unstyled">
                                        <?php
                                        foreach ($list_data as $data) {
                                            if ($data->kategori == $kategori->kode_list) {
                                                ?>
                                                <li>
                                                    <span>
                                                        <a data-toggle="modal" data-target="#modal-edit-<?php echo $data->id_modul ?>"><button class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white"><i class="fa fa-pencil"></i> </button></a>
                                                        <?php echo $this->array_custom->delete_modal($modul, site_url('utility/modul/delete/' . $data->id_modul), $data->id_modul); ?>
                                                    </span>&nbsp;|&nbsp;<strong><?php echo $data->kode_modul . '-' . $data->nama_modul ?></strong>
                                                </li>
                                                <!--Modal Edit-->
                                                <div id="modal-edit-<?php echo $data->id_modul ?>" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                <h4 class="modal-title">Edit <?php echo $modul ?></h4>
                                                            </div>
                                                            <form action="<?php echo site_url('utility/modul/process/edit/' . $data->id_modul); ?>" method="post" data-parsley-validate novalidate>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="field-2" class="control-label">Kategori Modul</label>
                                                                                <select class="form-control" name="inpKategori" required>
                                                                                    <option value="">-- head list --</option>
                                                                                    <?php
                                                                                    foreach ($list_data_kategori as $kategori1) {
                                                                                        echo '<option value="' . $kategori1->kode_list . '" ' . set_select('inpKategori', $kategori1->kode_list, $kategori1->kode_list == $data->kategori) . '>' . $kategori1->nama_list . '</option>';
                                                                                    }
                                                                                    ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="field-2" class="control-label">Kode Modul</label>
                                                                                <input type="text" name="inpKode" class="form-control" id="field-2" placeholder="kode modul.." value="<?php echo $data->kode_modul ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="field-1" class="control-label">Nama Modul</label>
                                                                                <input type="text" name="inpNama" class="form-control" required id="field-1" placeholder="nama modul.." value="<?php echo $data->nama_modul ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="field-1" class="control-label">Link Modul</label>
                                                                                <input type="text" name="inpLink" class="form-control" required id="field-1" placeholder="nama modul.." value="<?php echo $data->link ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><?php echo $this->array_custom->get_keterangan('button', 'cancel') ?></button>
                                                                    <button type="submit" class="btn btn-default waves-effect waves-light"><?php echo $this->array_custom->get_keterangan('button', 'save') ?></button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <?php
                            }
                            ?>
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
<?php $this->load->view('webadmin/utility/modul/modal_add')?>