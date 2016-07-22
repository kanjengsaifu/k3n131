<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"><?php echo $modul; ?></h4>
                <?php $this->load->view('webadmin/report/rekap_absen_siswa/breadcrumbs'); ?>
            </div>
        </div>

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive font-13">
                    <h4 class="m-t-0 header-title"><b>Filter Search</b></h4>
                    <?php
                    if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
                    endif;
                    ?>
                    <div class="p-20">
                        <form action="<?php echo site_url('report/rekap_absen_siswa/search') ?>" role="form" method="POST" data-parsley-validate novalidate>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Kelas</label>                            
                                            <select class="form-control input-sm select2" name="inp_kelas" required>
                                                <option value="">Pilih Kelas</option>
                                                <?php
                                                foreach ($list_data_kelas as $kelas) {
                                                    echo '<option value="' . $kelas->nama_list . '"' . set_select('inp_kelas', $kelas->nama_list, $kelas->nama_list == $param['kelas']) . '>' . $kelas->nama_list . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label">Bulan / Tahun</label>
                                            <?php
                                            $arr_m = $this->format_date->list_month();
                                            ?>
                                            <select class="form-control input-sm select2" name="inp_bulan" required="">
                                                <option value="">Pilih Bulan </option>  
                                                <?php
                                                for ($i = 0; $i < 12; $i++) {
                                                    $arr_i = $i + 1;
                                                    $lbl_i = $i < 10 ? '0' . $arr_i : $arr_i;
                                                    echo '<option value="' . $lbl_i . '" ' . set_select('inp_bulan', $lbl_i, $lbl_i == date('m')) . '>' . $arr_m[$i] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label">&nbsp;</label>                                            
                                            <select class="form-control input-sm select2" name="inp_tahun" required>
                                                <option value="">Pilih Tahun </option>  
                                                <?php
                                                for ($i = $common->setting['tahun_awal']; $i <= date('Y'); $i++) {
                                                    echo '<option value="' . $i . '" ' . set_select('inp_tahun', $i, $i == date('Y')) . '>' . $i . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>                                                
                                </div>
                            </div>                            
                            <div class="col-sm-3">
                                <div class="button-list pull-right">
                                    <button class="btn btn-primary waves-effect waves-light w-md" type="submit" name="submit" value="search_data">
                                        <i class="icon fa fa-refresh"></i> Reload
                                    </button>
                                    <button class="btn btn-default waves-effect waves-light w-md" type="submit" name="submit" value="print_data">
                                        <i class="icon fa fa-print"></i> Cetak
                                    </button>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>

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
                                <th>#</th>
                                <th>Kode Siswa</th>                                
                                <th>Nama Siswa</th>
                                <?php
                                for ($i = 1; $i <= 10; $i++) {
                                    echo '<th><center>Pert-' . $i . '</center></th>';
                                }
                                ?>      
                                <th>Persentase</th>
                            </tr>
                        </thead>
                        <tbody>                            
                            <?php
                            $no = 1;
                            foreach ($list_data as $data) {
                                ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $data['kode_siswa'] ?></td>
                                    <td><?php echo $data['nama_siswa'] ?></td>
                                    <?php
                                    $ttl_hadir = 0;
                                    for ($i = 1; $i <= 10; $i++) {                                        
                                        echo '<td><center>';
                                        echo $data['ket_'.$i] == 'Hadir' ? '<i class="fa fa-check"></i>' : '';
                                        echo'</center></td>';
                                        $data['ket_'.$i] == 'Hadir' ? $ttl_hadir += 1 : $ttl_hadir;
                                    }
                                    $persen = ($ttl_hadir / 10)*100;
                                    ?> 
                                    <td><?php echo $persen.' %'?></td>
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

        <!-- end row -->
        <!-- Footer -->
        <?php $this->load->view('webadmin/tile/footer'); ?>
        <!-- End Footer -->
    </div>
</div>
