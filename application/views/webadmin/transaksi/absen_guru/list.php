<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"><?php echo $modul; ?></h4>
                <?php $this->load->view('webadmin/transaksi/absen_guru/breadcrumbs'); ?>
            </div>
        </div>

        <!-- Page-Title -->
        <div class="row">            
            <div class="col-sm-4">
                <div class="card-box table-responsive font-13">
                    <h4 class="m-t-0 header-title"><b>Filter Search</b></h4>
                    <div class="p-20">
                        <form action="<?php echo site_url('transaksi/absen_guru/list_data') ?>" role="form" method="POST" data-parsley-validate novalidate>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">                         
                                            <input type="text" name="inp_tgl_absen" value="<?php echo $param['tgl_absen'] != null ? date('d-m-Y', strtotime($param['tgl_absen'])) : $this->format_date->format_date_dmy(date('Y-m-d')) ?>" class="form-control input-sm datepicker" placeholder="tanggal transaksi.." required="">
                                        </div>
                                    </div> 
                                    <div class="col-sm-1">
                                        <button class="btn btn-primary btn-block waves-effect waves-light w-md" type="submit" name="submit" value="search_data">
                                            <i class="icon fa fa-refresh"></i> Reload
                                        </button>
                                    </div>
                                </div>
                            </div>                            

                        </form> 
                    </div>
                </div>
                <?php
                if ($data_edit == null) {
                    $this->load->view('webadmin/transaksi/absen_guru/modal_add');
                } else {
                    $this->load->view('webadmin/transaksi/absen_guru/modal_edit');
                }
                ?>
            </div>
            <div class="col-sm-8">                
                <div class="card-box table-responsive font-13">
                    
                    <?php
                    if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
                    endif;
                    ?>
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
                                        <a href="<?php echo site_url('transaksi/absen_guru/list_data/' . $data->id_absen_guru) ?>"><button class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white"><i class="fa fa-edit"></i> </button></a>
                                        <?php echo $this->array_custom->delete_modal($modul, site_url('transaksi/absen_guru/delete/' . $data->id_absen_guru), $data->id_absen_guru); ?>
                                    </td>
                                </tr>
                                <?php
//                                $absen['data'] = $data;
//                                $this->load->view('webadmin/transaksi/absen_guru/modal_edit', $absen);
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
<style>
    .datepicker.dropdown-menu {
        top: 150px !important;
    }

    dt{
        text-align: left;
    }
</style>