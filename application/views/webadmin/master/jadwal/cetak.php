<center>Jadwal Kenari Bimbel (KENBI)</center><br><br>
<table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%" border="1">
    <thead>
        <tr>
            <th style="width: 5%" rowspan="2">Hari</th>
            <th rowspan="2">Jam</th>
            <th colspan="<?php echo count($list_data_kelas) ?>">Kelas</th>
        </tr>
        <tr>
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
                $d = $list_day[$day]
                ?>
                <tr>
                    <td><?php echo $hour == 1 ? $d1 : '' ?></td>
                    <td><?php echo $hour ?></td>
                    <?php
                    foreach ($list_data_kelas as $kelas) {
                        $mapel = $common->get_jadwal($day, $hour, $kelas->nama_list);
                        echo '<td style="width:7%; text-align:center">';
                        if ($mapel != null) {
                            echo '<a data-toggle="modal" data-target="#modal-edit-' . $mapel->id_jadwal . '" title="' . $mapel->nama_mapel . '">'
                            . $mapel->mapel
                            . '</a>';
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
        ?>
    </tbody>
</table>