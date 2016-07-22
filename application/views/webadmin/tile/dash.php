<div class="wrapper">
    <div class="container">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"><span>Key<span style="color: #5FBEAA">Performance</span>Index</span></h4>
                <p class="text-muted page-title-alt">Welcome <?php echo $this->session->userdata('kn_nama') ?>!</p>
            </div>
        </div>        
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="widget-panel widget-style-2 bg-white">
                    <i class="md md-done-all text-primary"></i>
                    <h2 class="m-0 text-dark counter font-600"><?php // echo $common->count_data('plan_complete') ?></h2>
                    <div class="text-muted m-t-5">Plan Completed</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="widget-panel widget-style-2 bg-white">
                    <i class="fa fa-spinner text-pink"></i>
                    <h2 class="m-0 text-dark counter font-600"><?php // echo $common->count_data('plan_progress') ?></h2>
                    <div class="text-muted m-t-5">Plan InProgress</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="widget-panel widget-style-2 bg-white">
                    <i class="md md-folder-shared text-info"></i>
                    <h2 class="m-0 text-dark counter font-600"><?php // echo $common->count_data('plan_open') ?></h2>
                    <div class="text-muted m-t-5">Plan Open</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="widget-panel widget-style-2 bg-white">
                    <i class="fa fa-repeat text-custom"></i>
                    <h2 class="m-0 text-dark counter font-600"><?php // echo $common->count_data('plan_pending') ?></h2>
                    <div class="text-muted m-t-5">Plan Pending</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box table-responsive font-13">
                    <h4 class="m-t-0 header-title"><a href="<?php echo site_url('master/planning') ?>" style="color:#5FBEAA"><b>latest Plan</b></a></h4>
                    <p class="text-muted font-13 m-b-30">
                        This is the latest plan added..
                    </p>
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Plan ID</th>
                                <th>WO</th>
                                <th>Type</th>
                                <th>Dept</th>
                                <th>Plan Start</th>
                                <th>Plan Finish</th>
                                <th>Status</th>
                                <th>Desc</th>
                                <th>Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
//                            $no = 0;
//                            foreach ($list_plan as $data) {
//                                $no++;
//                                switch ($data->status_job) {
//                                    case 'CP':
//                                        $lbl_stat = '<span class="label label-default" >' . $data->status_plan . '</span>';
//                                        break;
//                                    case 'P':
//                                        $lbl_stat = '<span class="label label-warning" >' . $data->status_plan . '</span>';
//                                        break;
//                                    case 'IP':
//                                        $lbl_stat = '<span class="label label-info" >' . $data->status_plan . '</span>';
//                                        break;
//                                    case 'O':
//                                        $lbl_stat = '<span class="label label-primary" >' . $data->status_plan . '</span>';
//                                        break;
//                                    default:
//                                        $lbl_stat = '<span class="label label-danger" >' . $data->status_plan . '</span>';
//                                        break;
//                                }
                                ?>
                                <tr>
                                    <td><?php // echo $no ?></td>
                                    <td><?php // echo $data->planning_no ?></td>
                                    <td><?php // echo $data->wo ?></td>
                                    <td><?php // echo $data->type_work ?></td>
                                    <td><?php // echo $data->departments ?></td>
                                    <td><?php // echo $this->format_date->format_date_dmy($data->date_start) ?></td>
                                    <td><?php // echo $this->format_date->format_date_dmy($data->date_end) ?></td>
                                    <td style="text-align: center;"><?php // echo $lbl_stat ?></td>
                                    <td><?php // echo character_limiter($data->keterangan, 30) ?></td>
                                    <td style="text-align: center;">
                                        <a data-toggle="modal" data-target="#modal-view-<?php // echo $data->id_planning ?>"><button class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white"><i class="fa fa-folder-open"></i> </button></a>
                                    </td>
                                </tr>
                                <!-- .modal view-->
                           
                            <?php
//                        }
                        ?> 
                        </tbody>
                    </table>
                </div> <!-- end col -->
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
    jQuery(document).ready(function ($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });

        $(".knob").knob();
    });
</script>