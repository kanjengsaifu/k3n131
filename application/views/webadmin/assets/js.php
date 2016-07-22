<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/detect.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/fastclick.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/waves.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/wow.min.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/peity/jquery.peity.min.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/pages/jquery.dashboard_3.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.core.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.app.js"></script>

<!-- Datatable js -->
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/datatables/dataTables.responsive.min.js"></script>

<!-- bootstrap-datepicker -->
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<!-- multiselect  -->
<script type="text/javascript" src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
<!-- select2  -->
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/select2/select2.min.js" type="text/javascript"></script>

<!-- Data table init -->
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/pages/datatables.init.js"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/parsleyjs/dist/parsley.min.js"></script>
<script type="text/javascript">

    $(document).ready(function() {
        $('form').parsley();
    });
    $('#datatable-responsive').DataTable();

    TableManageButtons.init();
    jQuery('.datepicker').datepicker({
        format: "dd-mm-yyyy",
        autoclose: true,
        todayHighlight: true,
        clearBtn: true
    });
    $(".select2").select2();
    jQuery('.date-range').datepicker({
        toggleActive: true,
        format: "dd-mm-yyyy",
        autoclose: true,
        todayHighlight: true,
        clearBtn: true
    });

    $('#select-all').click(function(event) {
        $(':checkbox').each(function() {
            this.checked = true;
        });
    });

    $('#unselect-all').click(function(event) {
        $(':checkbox').each(function() {
            this.checked = false;
        });
    });
</script>
<!--highchart-->