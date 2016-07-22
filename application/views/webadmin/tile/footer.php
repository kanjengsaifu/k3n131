<footer class="footer text-right">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <?php echo date('Y') ?> © STUDIO IT.
            </div>
            <div class="col-xs-6">
                <ul class="pull-right list-inline m-b-0">
                    <li>
                        <a href="<?php echo site_url('common/dash/about') ?>">About</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('common/dash/tour') ?>">Help</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('common/dash') ?>">Dashboard</a>
                    </li>
                    <li class="render">
                        <?php echo $this->benchmark->elapsed_time(); ?><?php echo '<i> seconds </i>' ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>