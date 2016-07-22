<div class="wrapper">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"><?php echo $modul; ?></h4>
                <?php $this->load->view('webadmin/transaksi/pembayaran/breadcrumbs'); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <?php
                if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
                endif;
                ?>
                <div class="card-box table-responsive font-13">
                    <h4 class="m-t-0 header-title"><b>Pembayaran No. <i>#<?php echo $data_header->kode_pembayaran ?></i></b></h4>
                    <p>&nbsp;</p>
                    <form action="<?php echo site_url('transaksi/pembayaran/process/' . $data_header->kode_pembayaran) ?>" role="form" method="POST">                        

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tanggal Pembayaran</label>
                                        <input type="text" name="inp_tgl_pembayaran" value="<?php echo $this->format_date->format_date_dmy($data_header->tgl_pembayaran) ?>" class="form-control input-sm datepicker" placeholder="tanggal lahir..">
                                    </div>  
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Jenis Pembayaran</label>
                                        <select class="form-control input-sm select2" name="inp_jenis_pembayaran" id="inp_pembayaran">
                                            <option value="">Pilih Jenis Pembayaran</option>
                                            <?php
                                            foreach ($list_data_kat as $kat) {
                                                echo '<option value="' . $kat->kode_list . '" >' . $kat->nama_list . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group" id="div-bulan" style="display: none">
                                        <label for="" class="control-label">Bulan</label>
                                        <?php $arr_m = $this->format_date->list_month(); ?>
                                        <select class="form-control input-sm select2" name="inp_bulan" >
                                            <option value="">Pilih Bulan</option>  
                                            <?php
                                            for ($i = 0; $i < 12; $i++) {
                                                $arr_i = $i + 1;
                                                $lbl_i = ($i < 10) ? '0' . $arr_i : $arr_i;
                                                echo '<option value="' . $lbl_i . '" ' . set_select('inp_bulan', $lbl_i, $lbl_i == $param['bulan']) . '>' . $arr_m[$i] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>                                    
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group" id="div-tahun" style="display: none">
                                        <label for="" class="control-label">Tahun</label>
                                        <select class="form-control input-sm select2" name="inp_tahun" >
                                            <option value="" selected="">Pilih Tahun</option>  
                                            <?php
                                            for ($i = $common->setting['tahun_awal']; $i <= date('Y'); $i++) {
                                                echo '<option value="' . $i . '" ' . set_select('inp_tahun', $i, $i == $param['tahun']) . '>' . $i . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama Siswa</label>          
                                        <select class="form-control input-sm select2" name="inp_kode_siswa" id="inp_kode_siswa" required>
                                            <option value="">Pilih Siswa</option>
                                            <?php
                                            foreach ($list_data_siswa as $siswa) {
                                                echo '<option value="' . $siswa->kode_siswa . '" ' . set_select('inp_kode_siswa', $siswa->kode_siswa, $siswa->kode_siswa == $data_header->kode_siswa) . '>' . $siswa->nama_siswa . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>       
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="control-label">Jumlah Bayar </label>
                                        <input type="text" name="inp_jumlah" class="form-control input-sm"  placeholder="jumlah bayar..">
                                    </div> 
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Keterangan </label>
                                        <input type="text" name="inp_ket" class="form-control input-sm"   placeholder="keterangan...">
                                    </div>   
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"><?php for ($i = 0; $i < 20; $i++) {echo '&nbsp;';}?></label>
                                        <button class="btn btn-default waves-effect waves-light w-md pull-right" type="submit" name="submit" value="save_detail">
                                            <i class="icon fa fa-plus"></i> Pembayaran 
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"><?php for ($i = 0; $i < 20; $i++) {echo '&nbsp;';}?></label>
                                        <button class="btn btn-primary waves-effect waves-light w-md" type="submit" name="submit" value="save_header">
                                            <i class="icon fa fa-save"></i> Simpan 
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>                       
                    </form> 
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th style="width: 5%">#</th>
                                <th style="width: 75%">Keterangan </th>
                                <th style="width: 10%">Subtotal</th>
                                <th style="width: 10%">Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($list_data_det as $detail) {
                                ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td>
                                        <?php
                                        echo $detail->jns_pemb == 'SPP' ? 'SPP Bulan ' . $this->format_date->format_date_custom($detail->tahun . '-' . $detail->bulan . '-01', 'F Y') : 'Pendaftaran (' . $detail->keterangan . ')';
                                        ?>
                                    </td>
                                    <td style="text-align: right"><?php echo number_format($detail->jumlah) ?></td>
                                    <td style="text-align: center">
                                        <?php echo $this->array_custom->delete_modal('detil pembayaran', site_url('transaksi/pembayaran/delete_detil/' . $detail->kode_pembayaran . '/' . $detail->id_pembayaran_detail), $detail->id_pembayaran_detail); ?>
                                    </td>
                                </tr>
                                <?php
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <?php $this->load->view('webadmin/tile/footer'); ?>
        <!-- End Footer -->
    </div>    
</div>
<style>
    .dropdown-menu {
        top: 330px !important;
    }

    dt{
        text-align: left;
    }
</style>