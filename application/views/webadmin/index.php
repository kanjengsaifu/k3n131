<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Description">
        <meta name="author" content="STUDIO IT">
        <link rel="shortcut icon" href="<?php echo base_url() . 'assets/webadmin/' ?>assets/images/it.png">
        <title><?php echo $modul; ?> - KENBI</title>
        <?php $this->load->view('webadmin/assets/css'); ?>
    </head>
    <body>
        <!-- Navigation Bar-->
        <?php $this->load->view('webadmin/tile/menu'); ?>
        <?php $this->load->view($page); ?>
        <?php $this->load->view('webadmin/assets/js'); ?>
        <?php // $this->load->view('webadmin/assets/highchart'); ?>
        <?php // $this->load->view('webadmin/assets/additional'); ?>
        <?php // $this->load->view('webadmin/assets/onchange'); ?>
    </body>
</html>