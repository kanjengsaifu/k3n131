<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"><?php echo $modul; ?></h4>
                <?php $this->load->view('webadmin/transaksi/absen_siswa/breadcrumbs'); ?>
            </div>
        </div>        

        <!-- Page-Title -->        
        <div class="row">
            <div class="col-lg-9">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b><?php echo $title_page ?></b></h4>  
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Tanggal</label><br><?php echo $this->format_date->format_date_dfy($data->tanggal) ?>
                            </div>

                            <div class="form-group">
                                <label for="field-1" class="control-label">Pertemuan Ke</label><br><?php echo $data->pertemuan ?>
                            </div>

                            <div class="form-group">
                                <label for="field-1" class="control-label">Kelas</label><br><?php echo $data->kelas ?>
                            </div>
                        </div>                        
                        <div class="col-md-8 col-lg-offset-1">
                            <label for="field-1" class="control-label">Daftar Siswa</label>
                            <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">#</th>
                                        <th>Nama Siswa</th>
                                        <th style="width: 10%">Hadir</th>
                                        <th style="width: 10%">Tidak</th>
                                        <th style="width: 10%">Tools</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php
                                    $no = 1;
                                    foreach ($list_data as $data_absen) {
                                        ?>
                                        <tr>
                                            <td style="text-align: center"><?php echo $no ?></td>
                                            <td><?php echo $data_absen->nama_siswa ?></td>
                                            <td style="text-align: center"><?php echo $data_absen->keterangan == 'Hadir' ? '<i class="fa fa-check"></i>' : '<i class="fa fa-minus"></i>' ?></td>
                                            <td style="text-align: center"><?php echo $data_absen->keterangan != 'Hadir' ? '<i class="fa fa-check"></i>' : '<i class="fa fa-minus"></i>' ?></td>
                                            <td style="text-align: center">
                                                <a data-toggle="modal" data-target="#modal-edit-<?php echo $data_absen->id_absen_siswa ?>">
                                                    <button class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white"><i class="fa fa-edit"></i> </button>
                                                </a>
                                                <?php
                                                $absen['data'] = $data_absen;
                                                $this->load->view('webadmin/transaksi/absen_siswa/modal_edit', $absen);
                                                ?>
                                            </td>
                                        </tr>
                                        <?php
                                        $no++;
                                    }
                                    ?>

                                </tbody>                                    
                            </table>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- Footer -->
        <?php $this->load->view('webadmin/tile/footer'); ?>
        <!-- End Footer -->
    </div>    
</div>
<style>
    .dropdown-menu {
        top: 300px !important;
    }
</style>