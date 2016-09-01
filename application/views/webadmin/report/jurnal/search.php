<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"><?php echo $modul; ?></h4>
                <?php $this->load->view('webadmin/report/jurnal/breadcrumbs'); ?>
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
                        <form action="<?php echo site_url('report/jurnal/search') ?>" role="form" method="POST" data-parsley-validate novalidate>
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group"> 
                                            <label class="control-label">Kategori Jurnal</label>
                                            <select class="form-control input-sm select2" name="inp_kat">
                                                <option value="ALL" selected="">ALL..</option>  
                                                <?php
                                                foreach ($list_data_jl as $kat_jurnal) {
                                                    echo '<option value="' . $kat_jurnal->kode_list . '" >' . $kat_jurnal->nama_list . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">   
                                        <div class="form-group"> 
                                            <label class="control-label">Bulan</label>   
                                            <?php
                                            $arr_m = $this->format_date->list_month();
                                            ?>
                                            <select class="form-control input-sm select2" name="inp_bulan">
                                                <option value="ALL">ALL</option>  
                                                <?php
                                                for ($i = 0; $i < 12; $i++) {
                                                    $arr_i = $i + 1;
                                                    if ($i < 10) {
                                                        $lbl_i = '0' . $arr_i;
                                                    } else {
                                                        $lbl_i = $arr_i;
                                                    }
                                                    echo '<option value="' . $lbl_i . '"' . set_select('inp_bulan', $lbl_i, $lbl_i == $param['bulan']) . ' >' . $arr_m[$i] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group"> 
                                            <label class="control-label">Tahun</label> 
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
                            <div class="col-sm-4">
                                <div class="button-list pull-right">
                                    <button class="btn btn-primary waves-effect waves-light w-md" type="submit" name="submit" value="search_data">
                                        <i class="icon fa fa-refresh"></i> Reload
                                    </button>
                                    <button class="btn btn-default waves-effect waves-light w-md" type="submit" name="submit" value="print_data">
                                        <i class="icon fa fa-refresh"></i> Cetak
                                    </button>
                                    <button class="btn btn-warning waves-effect waves-light w-md" type="submit" name="submit" value="grafik_data">
                                        <i class="icon fa fa-signal"></i> Grafik
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
                                <th>Tanggal</th>
                                <th>Kode Jurnal</th>
                                <th>Kode Transaksi</th>
                                <th>Keterangan</th>
                                <th>(<i class="fa fa-minus"></i>) Debit</th>
                                <th>(<i class="fa fa-plus"></i>) Kredit</th>
                                <th>Sisa</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Sisa Bulan Sebelumnya</td>
                                <td><span class="pull-right">0</span></td>
                                <td><span class="pull-right">0</span></td>
                                <td>
                                    <span class="pull-right">
                                        <?php
                                        $ttl = $data_bulan != null ? $data_bulan->sisa_bulan_sebelumnya : 0;
                                        echo number_format($ttl);
                                        ?>
                                    </span></td>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($list_data as $data) {
                                $no++;
                                ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $this->format_date->format_date_dfy($data->tgl_jurnal) ?></td>
                                    <td><?php echo $data->kode_jurnal ?></td>
                                    <td><?php echo $data->kode_transaksi ?></td>
                                    <td><?php echo $data->keterangan ?></td>
                                    <td><span class="pull-right"><?php echo number_format($data->debit) ?></span></td>
                                    <td><span class="pull-right"><?php echo number_format($data->kredit) ?></span></td>
                                    <td>
                                        <span class="pull-right">
                                            <?php
                                            $ttl = $ttl + $data->kredit - $data->debit;
                                            echo number_format($ttl);
                                            ?>
                                        </span>                                        
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
