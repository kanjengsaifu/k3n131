
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
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card-box table-responsive font-13">
                    <h4 class="m-t-0 header-title"><b>Grafik Agregasi L/P</b></h4>
                    <div class="text-center">
                        <!--                        <ul class="list-inline chart-detail-list">
                                                    <li><h5><i class="fa fa-circle m-r-5" style="color: #0B62A4;"></i>L</h5></li>
                                                    <li><h5><i class="fa fa-circle m-r-5" style="color: #7A92A3"></i>P</h5></li>
                                                </ul>-->
                    </div>
                    <canvas id="donut" style="height: 200px;"></canvas>                        
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
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/Chart.js/Chart.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        var barData = {
            labels: ['Italy', 'UK', 'USA', 'Germany', 'France', 'Japan'],
            datasets: [
                {
                    label: '2010 customers #',
                    fillColor: '#382765',
                    data: [2500, 1902, 1041, 610, 1245, 952]
                },
                {
                    label: '2014 customers #',
                    fillColor: '#7BC225',
                    data: [3104, 1689, 1318, 589, 1199, 1436]
                }
            ]
        };
        var context = document.getElementById('donut').getContext('2d');
        var clientsChart = new Chart(context).Bar(barData);

    });
</script>