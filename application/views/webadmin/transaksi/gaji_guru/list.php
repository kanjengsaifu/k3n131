<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#modal-add">Add <i class="fa fa-plus"></i></button>
                </div>
                <h4 class="page-title"><?php echo $modul; ?></h4>
                <?php $this->load->view('webadmin/transaksi/gaji_guru/breadcrumbs'); ?>
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
                                <th>Kode Transaksi</th>
                                <th>Tingkat</th>
                                <th>Tgl. Awal</th>
                                <th>Tgl. Akhir</th>
                                <th>Jml. Guru</th>
                                <th>Jml. Jam</th>
                                <th>Total Gaji</th>
                                <th>Status</th>
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
                                    <td class="text-center"><?php echo $no ?></td>
                                    <td class="text-center"><?php echo $data->kode_transaksi ?></td>                                    
                                    <td class="text-center"><?php echo $data->tingkat ?></td>
                                    <td class="text-center"><?php echo $data->tgl_awal ?></td>
                                    <td class="text-center"><?php echo $data->tgl_akhir ?></td>
                                    <td class="text-center"><?php echo $data->jml_guru ?></td>                                    
                                    <td class="text-center"><?php echo $data->tot_jam ?></td>   
                                    <td class="text-right">
                                        <?php
                                        $gaji = $common->get_gaji_tingkat($data->tingkat);
                                        echo number_format($data->tot_jam * $gaji->value_setting);
                                        ?>
                                    </td>
                                    <td class="text-center"><?php echo $data->status == 1 ? 'CEK' : '-' ?></td>                                    
                                    <td class="text-center"> 
                                        <a href="<?php echo site_url('transaksi/gaji_guru/process/update_status/'.$data->id_gaji_guru) ?>" title="Update Status" >
                                            <button class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white <?php echo $data->status == 1 ? 'disabled': '';?>"><i class="fa fa-refresh"></i> </button>
                                        </a>
                                        <a href="<?php echo site_url('transaksi/gaji_guru/view/'.$data->id_gaji_guru) ?>" title="View">
                                            <button class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white"><i class="fa fa-folder-open"></i> </button>
                                        </a>
                                        <?php echo $this->array_custom->delete_modal($modul, site_url('transaksi/gaji_guru/delete/' . $data->kode_transaksi), $data->kode_transaksi); ?>
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
<?php $this->load->view('webadmin/transaksi/gaji_guru/modal_add');?>
<style>
    .dropdown-menu {
        top: 170px !important;
    }

    dt{
        text-align: left;
    }
</style>