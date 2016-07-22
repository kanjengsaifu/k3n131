<style>
    th {
        text-align: center;
        vertical-align: : top;
    }
</style>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <a href="<?php echo site_url('transaksi/absen_siswa/add') ?>"><button class="btn btn-default waves-effect waves-light">Add <i class="fa fa-plus"></i></button></a>
                </div>
                <h4 class="page-title"><?php echo $modul; ?></h4>
                <?php $this->load->view('webadmin/transaksi/absen_siswa/breadcrumbs'); ?>
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
                        <form action="<?php echo site_url('transaksi/absen_siswa/search') ?>" role="form" method="POST" data-parsley-validate novalidate>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label">Kelas</label>
                                            <select class="form-control input-sm select2" name="inp_kelas" required>
                                                <option value="">Pilih Kelas</option>
                                                <?php
                                                foreach ($list_data_kelas as $kelas) {
                                                    echo '<option value="' . $kelas->nama_list . '" ' . set_select('inp_kelas', $kelas->nama_list, $kelas->nama_list == $param['kelas']) . '>' . $kelas->nama_list . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">Bulan / Tahun</label>
                                            <?php
                                            $arr_m = $this->format_date->list_month();
                                            ?>
                                            <select class="form-control input-sm select2" name="inp_bulan" required>
                                                <option value="ALL" selected="">ALL..</option>  
                                                <?php
                                                for ($i = 0; $i < 12; $i++) {
                                                    $arr_i = $i + 1;
                                                    $lbl_i = ($i < 10) ? '0' . $arr_i : $arr_i;
                                                    echo '<option value="' . $lbl_i . '" ' . set_select('inp_bulan', $lbl_i, $lbl_i == $param['bulan']) . '>' . $arr_m[$i] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">&nbsp</label>
                                            <select class="form-control input-sm select2" name="inp_tahun" required>
                                                <option value="ALL" selected="">ALL..</option>  
                                                <?php
                                                for ($i = $common->setting['tahun_awal']; $i <= date('Y'); $i++) {
                                                    echo '<option value="' . $i . '" ' . set_select('inp_tahun', $i, $i == $param['tahun']) . '>' . $i . '</option>';
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
                                <th>Bulan</th>
                                <th>Kelas</th>
                                <?php
                                for ($i = 1; $i <= 10; $i++) {
                                    echo '<th>Pert. ' . $i . '</th>';
                                }
                                ?>
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
                                    <td><?php echo $this->format_date->format_date_custom($data['bulan'], 'F') . ' ' . $data['tahun'] ?></td>
                                    <td><?php echo $data['kelas'] ?></td>
                                    <?php
                                    for ($i = 1; $i <= 10; $i++) {
                                        $h = $data['jml_hadir_p' . $i];
                                        $a = $data['jml_alfa_p' . $i];
                                        $ttl = $h + $a;
                                        echo '<td>';
                                        echo $data['jml_hadir_p' . $i] . ' : ' . $ttl;
                                        echo '<span class="pull-right">';
                                        if ($ttl != 0) {
                                            echo '<a href="' . site_url('transaksi/absen_siswa/view/' . $data['kelas'] . '/' . $data['bulan'] . '/' . $data['tahun'] . '/' . $i) . '">'
                                            . '<button class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white"><i class="fa fa-folder-open"></i> </button>'
                                            . '</a>';
                                        }
                                        echo '</span>';
                                        echo '</td>';
                                    }
                                    ?>
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
