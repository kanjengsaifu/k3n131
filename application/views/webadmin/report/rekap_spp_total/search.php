<link rel="stylesheet" href="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/morris/morris.css">
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
                        <form action="<?php echo site_url('report/rekap_spp_total/search') ?>" role="form" method="POST" data-parsley-validate novalidate>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label">Bulan</label>
                                            <?php
                                            $arr_m = $this->format_date->list_month();
                                            ?>
                                            <select class="form-control input-sm select2" name="inp_bulan" required="">
                                                <option value="">Pilih Bulan </option>  
                                                <?php
                                                for ($i = 0; $i < 12; $i++) {
                                                    $arr_i = $i + 1;
                                                    $lbl_i = $arr_i < 10 ? '0' . $arr_i : $arr_i;
                                                    echo '<option value="' . $lbl_i . '" ' . set_select('inp_bulan', $lbl_i, $lbl_i == $param['bulan']) . '>' . $arr_m[$i] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label">Tahun</label>                                            
                                            <select class="form-control input-sm select2" name="inp_tahun" required>
                                                <option value="">Pilih Tahun </option>  
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
            <div class="col-sm-5">
                <div class="card-box table-responsive font-13">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tingkat</th>                                
                                <th>Jumlah Siswa</th>
                                <th>Sudah Bayar</th>                                         
                            </tr>
                        </thead>
                        <tbody> 
                            <?php
                            $no = 1;
                            for ($i = 5; $i < 13; $i++) {
                                $tk = $i < 10 ? '0' . $i : $i;
                                $data_bayar = $common->get_jml_bayar($i, $param['bulan'], $param['tahun']);
                                ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $tk ?></td>
                                    <td><?php echo $data_bayar->jml_siswa ?></td>
                                    <td><?php echo $data_bayar->jml_siswa_bayar ?></td>
                                </tr>
                                <?php
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card-box table-responsive font-13">
                    <h4 class="m-t-0 header-title"><b>Jumlah siswa yang sudah bayar</b></h4>
                    <div class="text-center">
                        <!--                        <ul class="list-inline chart-detail-list">
                                                    <li><h5><i class="fa fa-circle m-r-5" style="color: #0B62A4;"></i>L</h5></li>
                                                    <li><h5><i class="fa fa-circle m-r-5" style="color: #7A92A3"></i>P</h5></li>
                                                </ul>-->
                    </div>
                    <div id="donut-example"></div> 

                </div>
            </div>
        </div>

        <!-- end row -->
        <!-- Footer -->
        <?php $this->load->view('webadmin/tile/footer'); ?>
        <!-- End Footer -->
    </div>
</div>

<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/morris/morris.min.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/raphael/raphael-min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        Morris.Bar({
            element: 'donut-example',
            data: [
<?php
for ($i = 5; $i < 13; $i++) {
    $tk = $i < 10 ? '0' . $i : $i;
    $data_bayar = $common->get_jml_bayar($i, $param['bulan'], $param['tahun']);
    $data[] = '{y: \'' . $tk . '\', a: ' . $data_bayar->jml_siswa . ', b: ' . $data_bayar->jml_siswa_bayar . '}';
}
echo implode(',', $data);
?>
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            stacked: true,
            labels: ['Series A', 'Series B'],
            hideHover: 'auto',
            resize: true, //defaulted to true
            gridLineColor: '#eeeeee',
            barColors: ['#5d9cec', '#ebeff2']
        });
    });
</script>
