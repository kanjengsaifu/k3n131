<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#modal-add">Add <i class="fa fa-plus"></i></button>
                </div>
                <h4 class="page-title"><?php echo $modul; ?></h4>
                <?php $this->load->view('webadmin/master/siswa/breadcrumbs'); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive font-13">
                    <h4 class="m-t-0 header-title"><b>Filter Search</b></h4>
                    <?php
                    if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
                    endif;
                    ?>
                    <div class="p-20">
                        <form action="<?php echo site_url('master/siswa/search') ?>" role="form" method="POST" data-parsley-validate novalidate>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">                         
                                            <select class="form-control input-sm select2" name="inp_kelas" required>
                                                <option value="">Pilih Kelas</option>
                                                <option value="ALL" <?php echo $param['kelas'] == 'ALL' ? 'selected' : '' ?>>ALL</option>
                                                <?php
                                                foreach ($list_data_kelas as $kelas) {
                                                    echo '<option value="' . $kelas->nama_list . '"' . set_select('inp_kelas', $kelas->nama_list, $kelas->nama_list == $param['kelas']) . '>' . $kelas->nama_list . '</option>';
                                                }
                                                ?>
                                                <option value="-">-</option>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="col-md-3">   
                                        <div class="form-group">   
                                            <input type="text" name="inp_nama_siswa" class="form-control input-sm" required  placeholder="nama siswa.." value="<?php echo $param['nama'] != null ? $param['nama'] : '*' ?>">
                                            <span class="help-block"><small><strong>*</strong> untuk semua siswa.</small></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <button class="btn btn-primary btn-block waves-effect waves-light w-md" type="submit" name="submit" value="search_data">
                                            <i class="icon fa fa-refresh"></i> Reload
                                        </button>
                                    </div>
                                </div>
                            </div>                            

                        </form> 
                    </div>
                </div>

            </div>
        </div>

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <?php
                if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
                endif;
                ?>
                <div class="card-box table-responsive font-13">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th style="width: 5%">#</th>
                                <th>Kode</th>                                
                                <th>Nama</th>
                                <th>Telp.</th>
                                <th>Kelas</th>
                                <th>Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($list_data as $data) {
                                $no++;
                                ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $data->kode_siswa ?></td>                                    
                                    <td><?php echo $data->nama_siswa ?></td>
                                    <td><?php echo $data->telp_siswa ?></td>
                                    <td><?php echo $data->kelas ?></td>
                                    <td style="text-align: center;">
                                        <a href="<?php echo site_url('master/siswa/view/' . $data->kode_siswa) ?>"><button class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white"><i class="fa fa-folder-open"></i> </button></a>
                                        <a data-toggle="modal" data-target="#modal-edit-<?php echo $data->id_siswa ?>"><button class="btn btn-icon waves-effect waves-effect waves-light btn-xs btn-white"><i class="fa fa-edit"></i> </button></a>
                                        <?php echo $this->array_custom->delete_modal($modul, site_url('master/siswa/delete/' . $data->id_siswa), $data->id_siswa); ?>
                                    </td>
                                </tr>
                                <?php
                                $siswa['data'] = $data;
                                $this->load->view('webadmin/master/siswa/modal_edit', $siswa);
                                ?>
                                <?php
                            }
                            ?> 
                        </tbody>
<!--                        <script type="text/javascript">
                            $(document).ready(function() {

                                $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                                {
                                    return {
                                        "iStart": oSettings._iDisplayStart,
                                        "iEnd": oSettings.fnDisplayEnd(),
                                        "iLength": oSettings._iDisplayLength,
                                        "iTotal": oSettings.fnRecordsTotal(),
                                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                                    };
                                };

                                var t = $('#data1').DataTable({
                                    "processing": true,
                                    "serverSide": true,
                                    "ajax": '<?php echo site_url('master/siswa/ajax_tabel'); ?>',
                                    "columns": [
                                        {
                                            "data": null,
                                            "class": "text_center",
                                            "orderable": false
                                        },
                                        {"data": "kode_siswa"},
                                        {"data": "nama_siswa"},
                                        {"data": "telp_siswa", "class": "text_center"},
                                        {"data": "kelas", "class": "text_center"},
                                        {"data": "aksi"}
                                    ],
                                    "order": [[1, 'DESC']],
                                    "rowCallback": function(row, data, iDisplayIndex) {
                                        var info = this.fnPagingInfo();
                                        var page = info.iPage;
                                        var length = info.iLength;
                                        var index = page * length + (iDisplayIndex + 1);
                                        $('td:eq(0)', row).html(index);
                                    }
                                });
                            });
                        </script>-->
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
<?php $this->load->view('webadmin/master/siswa/modal_add'); ?>
<style>
    .dropdown-menu {
        top: 170px !important;
    }

    dt{
        text-align: left;
    }
</style>