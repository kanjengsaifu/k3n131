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
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <?php
                if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
                endif;
                ?>
                <div class="card-box table-responsive font-13">
                    <table id="test" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
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
                        <script type="text/javascript">
                            $(document).ready(function () {

                                $.fn.dataTableExt.oApi.fnPagingInfo = function (oSettings)
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

                                var t = $('#test').DataTable({
                                    "processing": true,
                                    "serverSide": true,
                                    "ajax": '<?php echo site_url('master/siswa/ajax_table'); ?>',
                                    "columns": [
                                        {
                                            "data": null,
                                            "class": "text_center",
                                            "orderable": false
                                        },
                                        {"data": "kode_siswa"},
                                        {"data": "nama_siswa"},
                                        {"data": "telp_siswa"},
                                        {"data": "kelas"},
                                        {"data": "aksi", "class": "text_center"}
                                    ],
                                    "order": [[2, 'DESC']],
                                    "rowCallback": function (row, data, iDisplayIndex) {
                                        var info = this.fnPagingInfo();
                                        var page = info.iPage;
                                        var length = info.iLength;
                                        var index = page * length + (iDisplayIndex + 1);
                                        $('td:eq(0)', row).html(index);
                                    }
                                });
                            });
                        </script>
                        </tbody>
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
    .datepicker.dropdown-menu {
        top: 170px !important;
    }

    dt{
        text-align: left;
    }
</style>