<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Description">
        <meta name="author" content="STUDIO IT">
        <link rel="shortcut icon" href="<?php echo base_url() . 'assets/webadmin/' ?>assets/images/it.png">
        <title>Login - KENBI</title>

        <link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/modernizr.min.js"></script>
    </head>
    <body>
        <div class="animationload">
            <div class="loader"></div>
        </div>
        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class=" card-box">
                <div class="panel-heading"> 
                    <h3 class="text-center"><strong><span>Kenari<span style="color: #5FBEAA">Bimbingan</span>Belajar</span></strong></h3>
                    <h3 class="text-center">Login</h3>
                </div> 
                <?php
                if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
                endif;
                ?>
                <div class="panel-body">
                    <form class="form-horizontal m-t-20" method="post" action="<?php echo site_url('common/auth/process_login') ?>">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" name="inpUsername" type="text" required="" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" name="inpPassword" type="password" required="" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-12">
                                <button class="btn btn-default btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>
                    </form> 
                </div>   
            </div>
        </div>
        <script>
            var resizefunc = [];
        </script>
        <!-- jQuery  -->
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
        <script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.app.js"></script>
    </body>
</html>