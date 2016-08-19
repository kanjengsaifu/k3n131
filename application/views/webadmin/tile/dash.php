<div class="wrapper">
    <div class="container">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"><span>Kenari<span style="color: #5FBEAA">Bimbingan</span>Belajar</span></h4>
                <p class="text-muted page-title-alt">Welcome <?php echo $this->session->userdata('kn_nama') ?>!</p>
            </div>
        </div>        
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive font-13">
                    <h4 class="m-t-0 header-title"><b>Jadwal Hari Ini</b></h4>
                    <table class="table table-striped table-bordered dt-responsive nowrap focus-on" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th rowspan="2">Hari</th>
                                <th rowspan="2">Jam</th>
                                <th colspan="<?php echo count($list_data_kelas) ?>">Kelas</th>
                            </tr>
                            <tr style="width: 5%">
                                <?php
                                foreach ($list_data_kelas as $kelas) {
                                    echo '<th>' . $kelas->nama_list . '</th>';
                                }
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $list_day = $this->format_date->list_day();
                            for ($day = 0; $day < 6; $day++) {
                                $d1 = $list_day[$day];
                                for ($hour = 1; $hour < 3; $hour++) {
                                    $today = $this->format_date->format_date_custom(date('l'), 'l');
                                    $d = $list_day[$day];

                                    if (trim($today) == trim($d1)) {
                                        ?>
                                        <tr <?php echo trim($d1) == $today ? 'class="unfocused focused"' : '' ?>>
                                            <td><?php echo $hour == 1 ? $d1 : ''; ?></td>
                                            <td><?php echo $hour ?></td>
                                            <?php
                                            foreach ($list_data_kelas as $kelas) {
                                                $mapel = $common->get_jadwal($day, $hour, $kelas->nama_list);
                                                echo '<td style="text-align:center">';
                                                if ($mapel != null) {
                                                    echo '<a data-toggle="modal" data-target="#modal-edit-' . $mapel->id_jadwal . '" title="' . $mapel->nama_mapel . '">'. $mapel->mapel. '</a>';
                                                } else {
                                                    '-';
                                                }
                                                echo '</td>';
                                            }
                                            ?>
                                        </tr>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive font-13">
                    <h4 class="m-t-0 header-title"><b>Jumlah siswa</b></h4>
                    <table class="table table-striped table-bordered dt-responsive nowrap focus-on" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th rowspan="2">Jml Siswa Total</th>
                                <th colspan="<?php echo count($list_data_kelas) ?>">Kelas</th>
                            </tr>
                            <tr style="width: 5%">
                                <?php
                                foreach ($list_data_kelas as $kelas) {
                                    echo '<th>' . $kelas->nama_list . '</th>';
                                }
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                //total
                                $jml_tot = $common->get_jml_siswa();
                                echo '<td>' . $jml_tot->jml . '</td>';

                                //per kelas
                                foreach ($list_data_kelas as $kelas) {
                                    $jml = $common->get_jml_siswa($kelas->nama_list);
                                    echo '<td>' . $jml->jml . '</td>';
                                }
                                ?>
                            </tr>

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
<!-- Knob -->
<!-- Counterup js  -->
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/counterup/jquery.counterup.min.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/jquery-knob/jquery.knob.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });

        $(".knob").knob();
    });
</script>