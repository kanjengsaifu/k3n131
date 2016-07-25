<header id="topnav">
    <div class="topbar-main">
        <div class="container">
            <!-- Logo container-->
            <div class="logo">
                <a href="<?php echo site_url('common/dash') ?>" class="logo"><span>Kenari<span style="color: #36404a">Bimbingan</span>Belajar</span></a>
            </div>
            <!-- End Logo container-->
            <div class="menu-extras">
                <ul class="nav navbar-nav navbar-right pull-right">                    
                    <!--                    <li>
                                            <a href="#"><strong><?php echo $this->session->userdata('kn_nama') ?></strong></a>
                                        </li>-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true">
                            <i class="icon fa fa-user"></i> <strong><?php echo $this->session->userdata('kn_nama') ?></strong>

                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('common/dash/setting_account') ?>"><i class="ti-settings m-r-5"></i> Settings</a></li>
                            <li><a href="<?php echo site_url('common/auth/process_logout') ?>"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
        </div>
    </div>
    <!-- End topbar -->
    <!-- Navbar Start -->
    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li>
                        <a href="<?php echo site_url('common/dash') ?>"><i class="md md-dashboard"></i> Dashboard</a>
                    </li>
                    <?php
                    $array_icon = array('my-library-books', 'business', 'assessment', 'folder-special');
                    $arx = array('master', 'transaksi', 'report','utilitas');
                    $no = 0;
                    foreach ($common->menu as $menu) {
                        if ($common->countmenu[0][strtolower($menu->nama_list)] > 0) {
                            ?>
                            <li class="has-submenu">
                                <a href="#"><i class="md md-<?php echo $array_icon[$no] ?>"></i> <?php echo $menu->nama_list ?></a>
                                <ul class="submenu">
                                    <li>
                                        <span><?php echo $menu->nama_list ?></span>
                                    </li>
                                    <?php
                                    foreach ($common->submenu as $submenu) {
                                        if ($submenu->kategori == $menu->kode_list && in_array($submenu->kode_modul, $this->session->userdata('hak_akses'))) {
                                            echo '<li><a href="' . site_url($submenu->link) . '">' . $submenu->nama_modul . '</a></li>';
                                        }
                                    }
                                    ?>
                                </ul>
                            </li> 
                            <?php
                           
                        } $no++;
                    }
                    ?>
                </ul>
                <!-- End navigation menu -->
            </div>
        </div>
    </div>
</header>
