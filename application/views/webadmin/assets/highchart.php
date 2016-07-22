
<script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/assets/' ?>js/highchart/highcharts.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/assets/' ?>js/highchart/modules/data.js"></script>
<script src="<?php echo base_url() . 'assets/webadmin/assets/' ?>js/highchart/modules/exporting.js"></script>

<?php

function draw_grf_pie($data = null, $id, $title) {
    ?>

        $('<?php echo $id ?>').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: '<?php echo $title ?>'
            },
            colors: [
                '#0187f9', '#53c905', '#e90505', '#ffea00'
            ],
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:,.2f}%</b>',
                percentageDecimals: 1
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                    type: 'pie',
                    name: 'Browser share',
                    data: [
    <?php
    foreach ($data as $data1) {
        echo '[\''.$data1['label_dept'].'\', '.$data1['jml_'.strtolower($title)].'],';
    }
    ?>
                    ]
                }]

        });
<?php } ?>
<?php

function draw_grf_line($id, $id_table, $title) {
    ?>
        $('<?php echo $id ?>').highcharts({
            data: {
                table: document.getElementById('<?php echo $id_table ?>')
            },
            chart: {
                type: 'line'
            },
            title: {
                text: '<?php echo $title ?>'
            },
            colors: [
                '#0187f9', '#53c905', '#e90505', '#ffea00'
            ],
            pane: {
                size: '100%'
            },
            xAxis: {
                tickmarkPlacement: 'on',
                lineWidth: 0
            },
            yAxis: {
                title: {
                    text: 'Jumlah'
                },
                tickInterval: 20,
                gridLineInterpolation: 'polygon',
                lineWidth: 0,
                min: 0
            },
            tooltip: {
                shared: true,
                pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.2f}</b><br/>'
            }
        });
<?php } ?>