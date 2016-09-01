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
            <div class="col-lg-6">
                <div class="card-box table-responsive font-13">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode</th>
                                <th>Nama Kategori</th>
                                <th>Debit</th>
                                <th>Kredit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($list_data as $data) {
                                ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $data->kode ?></td>
                                    <td><?php echo $data->nama_kategori ?></td>
                                    <td style="text-align: right"><?php echo number_format($data->debit) ?></td>
                                    <td style="text-align: right"><?php echo number_format($data->kredit) ?></td>
                                </tr>
                                <?php
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card-box table-responsive font-13">
                    <h4 class="m-t-0 header-title"><b>Grafik Agregasi L/P</b></h4>
                    <div class="text-center">
                        <!--                        <ul class="list-inline chart-detail-list">
                                                    <li><h5><i class="fa fa-circle m-r-5" style="color: #0B62A4;"></i>L</h5></li>
                                                    <li><h5><i class="fa fa-circle m-r-5" style="color: #7A92A3"></i>P</h5></li>
                                                </ul>-->
                    </div>
                    <div id="donut-example"></div> 

                </div>
            </div>
            
            <div class="col-lg-3">
                <div class="card-box table-responsive font-13">
                    <h4 class="m-t-0 header-title"><b>Grafik Agregasi L/P</b></h4>
                    <div class="text-center">
                        <!--                        <ul class="list-inline chart-detail-list">
                                                    <li><h5><i class="fa fa-circle m-r-5" style="color: #0B62A4;"></i>L</h5></li>
                                                    <li><h5><i class="fa fa-circle m-r-5" style="color: #7A92A3"></i>P</h5></li>
                                                </ul>-->
                    </div>
                    <div id="donut-example1"></div> 

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
        Morris.Donut({
            element: 'donut-example',
            data: [
                <?php
                    $str = '';
                    foreach ($list_data as $data) {
                        $str.= $data->debit != 0 ?  ',{label: "'.$data->nama_kategori.'", value: '.$data->debit.'}': '';
                    }
                    echo substr($str, 1);
                ?>
            ]
        });
        Morris.Donut({
            element: 'donut-example1',
            data: [
                <?php
                    $str = '';
                    foreach ($list_data as $data) {
                        $str.= $data->kredit != 0 ? ',{label: "'.$data->nama_kategori.'", value: '.$data->kredit.'}' : '';
                    }
                    echo substr($str, 1);
                ?>
            ]
        });
    });
</script>