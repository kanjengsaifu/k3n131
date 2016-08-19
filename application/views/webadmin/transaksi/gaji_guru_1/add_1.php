<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"><?php echo $modul; ?></h4>
                <?php $this->load->view('webadmin/transaksi/gaji_guru/breadcrumbs'); ?>
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
                        <form action="<?php echo site_url('transaksi/gaji_guru/add') ?>" role="form" method="POST" data-parsley-validate novalidate>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group"> 
                                            <label class="control-label">Tingkat</label>
                                            <select class="form-control input-sm select2" name="inp_tingkat" required="">
                                                <option value="" selected="">Pilih Tingkat..</option>  
                                                <?php
                                                foreach ($list_data_tingkat as $tingkat) {
                                                    echo '<option value="' . $tingkat->kode_list . '"' . set_select('inp_tingkat', $tingkat->kode_list, $tingkat->kode_list == $param['tingkat']) . ' >' . $tingkat->nama_list . '</option>';
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
                                            <select class="form-control input-sm select2" name="inp_bulan" required="">
                                                <option value="">Pilih Bulan</option>  
                                                <?php
                                                for ($i = 0; $i < 12; $i++) {
                                                    $arr_i = $i + 1;
                                                    if ($i < 10) {
                                                        $lbl_i = '0' . $arr_i;
                                                    } else {
                                                        $lbl_i = $arr_i;
                                                    }
                                                    echo '<option value="' . $lbl_i . '" ' . set_select('inp_bulan', $lbl_i, $lbl_i == $param['bulan']) . '>' . $arr_m[$i] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">Bulan / Tahun</label>
                                            <select class="form-control input-sm select2" name="inp_tahun" required>
                                                <option value="">Pilih Tahun</option>  
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
                            <div class="col-sm-5">
                                <div class="button-list pull-right">
                                    <button class="btn btn-primary waves-effect waves-light w-md" type="submit" name="submit" value="search_data">
                                        <i class="icon fa fa-refresh"></i> Reload
                                    </button>
                                    <button class="btn btn-default waves-effect waves-light w-md" type="submit" name="submit" value="print_data">
                                        <i class="icon fa fa-list"></i> Cetak
                                    </button>
                                    <button class="btn btn-default waves-effect waves-light w-md" type="submit" name="submit" value="print_data_detil">
                                        <i class="icon fa fa-list-alt"></i> Cetak Detil
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
                    <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th rowspan="2">#</th>
                                <th rowspan="2">Nama Guru</th>
                                <th rowspan="2">Mata Pejalaran</th>
                                <th colspan="2">Honor Mengajar</th>
                                <th colspan="2">Horor Materi</th>
                                <th colspan="2">Horor Soal</th>
                                <th rowspan="2">Total</th>     
                                <th rowspan="2">Tools</th>   
                            </tr>
                            <tr>
                                <th>Jml</th>
                                <th>Subtotal</th>
                                <th>Jml</th>
                                <th>Subtotal</th>
                                <th>Jml</th>
                                <th>Subtotal</th>
                            </tr>

                        </thead>
                        <tbody>
                            <?php
                            $total_all = 0;
                            if ($list_data != null) {
                                $no = 1;
                                foreach ($list_data as $data) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $data->nama_guru ?></td>
                                        <td><?php echo $data->mapel ?></td>
                                        <td><span class="pull-right"><?php echo $data->jml_absen != null ? $data->jml_absen : '0' ?></span></td>
                                        <td>
                                            <span class="pull-right">
                                                <?php
                                                $sub_absen = $data->jml_absen * $data->honor_mengajar;
                                                echo number_format($sub_absen);
                                                ?>
                                            </span>
                                        </td>
                                        <td><span class="pull-right"><?php echo $data->jml_materi != null ? $data->jml_materi : '0' ?></span></td>
                                        <td>
                                            <span class="pull-right">
                                                <?php
                                                $sub_materi = $data->jml_materi * $data->honor_materi;
                                                echo number_format($sub_materi);
                                                ?>
                                            </span>
                                        </td>
                                        <td><span class="pull-right"><?php echo $data->jml_soal != null ? $data->jml_soal : '0' ?></span></td>
                                        <td>
                                            <span class="pull-right">
                                                <?php
                                                $sub_soal = $data->jml_soal * $data->honor_soal;
                                                echo number_format($sub_soal);
                                                ?>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="pull-right">
                                                <?php
                                                $total = $sub_absen + $sub_materi + $sub_soal;
                                                echo number_format($total);
                                                ?>
                                            </span>
                                        </td>
                                        <td style="text-align: center">
                                            <a href="<?php echo site_url('transaksi/gaji_guru/process_add/' . $data->bulan_tahun . '/' . $data->tingkat . '/' . $data->kode_guru) ?>" >
                                                <button class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white" <?php echo $data->status == 1 ? 'disabled=""' : '' ?>>
                                                    <i class="fa fa-money"></i> Ambil
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                    $no++;
                                    $total_all += $total;
                                }
                                ?>
                                    <tr>
                                        <td colspan="9">Total Pembayaran Gaji Guru</td>
                                        <td><?php echo $total_all?></td>
                                        <td></td>
                                    </tr>
                                    <?php
                            } else {
                                echo '<tr><td colspan="11">No data available in table</td></tr>';
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