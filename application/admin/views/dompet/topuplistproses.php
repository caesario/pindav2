<!-- page content -->
    <div class="right_col" role="main">

        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Top Up Proses<small>Daftar</small></h3>
                </div>
            </div>

            <div class="clearfix"></div>
            <br>
            <br>
            <br>

            <!-- Notification -->
            <div id="messages"></div>
            <?php if($this->session->flashdata('success')): ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php elseif($this->session->flashdata('error')): ?>
                <div class="alert alert-error alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>
            <!-- End Notification -->

            <!--   Tabel konten         -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Top Up <small>List</small></h2>
                                <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table id="TopUpTable" class="table table-striped table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>ID TOP UP</th>
                                        <th>ID Dompet</th>
                                        <th>Nama User</th>
                                        <th>Bank Account</th>
                                        <th>Tipe Transaksi</th>
                                        <th>Nilai Top Up</th>
                                        <th>Nilai Top Up konf</th>
                                        <th>status</th>
                                        <th>Konfirmasi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--   Tabel konten         -->
        </div>
    </div>
<!-- /page content -->


<!-- Modal Section -->
<!-- Modal Section -->
<div class="modal fade" tabindex="-1" role="dialog" id="editTransModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Proses Transaksi</h4>
            </div>
            <form role="form" action="<?php echo site_url('Dompet/prosestrxtwo') ?>" method="post" id="updateBrandForm">
                <div class="modal-body">
                    <div id="messages"></div>
                    <div class="form-group">
                        <label for="edit_iddompettrx">ID Transaksi</label>
                        <input type="text" class="form-control" id="edit_iddompettrx" name="edit_iddompettrx" autocomplete="off" disabled>
                        <input type="hidden" class="form-control" id="edit_iddompettrxpost" name="edit_iddompettrxpost" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="edit_dompetusername">Username</label>
                        <input type="text" class="form-control" id="edit_iddompetusername" name="edit_iddompettrx" placeholder="Belum Di konfirmasi"  autocomplete="off" disabled>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="edit_dompetusername">Email Konfirmasi</label>
                            <input type="text" class="form-control" id="edit_konfemail" name="edit_konfemail" placeholder="Belum Di konfirmasi"  autocomplete="off" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_dompetusername">Nama Lengkap Konfirmasi</label>
                            <input type="text" class="form-control" id="edit_konfnamalengkap" name="edit_konfnamalengkap" placeholder="Belum Di konfirmasi"  autocomplete="off" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_konftanggal">Tanggal Transfer</label>
                        <input type="text" class="form-control" id="edit_konftanggal" name="edit_konftanggal" placeholder="Belum Di konfirmasi" autocomplete="off" disabled>
                    </div>
                    <div class="form-group">
                        <label for="edit_konfbank">Transfer Ke Bank</label>
                        <input type="text" class="form-control" id="edit_konfbank" name="edit_konfbank" placeholder="Belum Di konfirmasi" autocomplete="off" disabled>
                    </div>
                    <div class="form-group">
                        <label for="edit_konfnoref">No Ref</label>
                        <input type="text" class="form-control" id="edit_konfnoref" name="edit_konfnoref" placeholder="Belum Di konfirmasi" autocomplete="off" disabled>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="edit_konfdaribank">Dari Bank</label>
                            <input type="text" class="form-control" id="edit_konfdaribank" name="edit_konfdaribank" placeholder="Belum Di konfirmasi" autocomplete="off" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_konfdarirekening">No Rekening</label>
                            <input type="text" class="form-control" id="edit_konfdarirekening" name="edit_konfdarirekening" placeholder="Belum Di konfirmasi" autocomplete="off" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_konfdarirekeningnama"">Nama Pemilik Rekening</label>
                            <input type="text" class="form-control" id="edit_konfdarirekeningnama" name="edit_konfdarirekeningnama" placeholder="Belum Di konfirmasi" autocomplete="off" disabled>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="edit_dompettrxamount"">Nominal Transfer</label>
                                <input type="text" class="form-control" id="edit_dompettrxamount" name="edit_dompettrxamount" placeholder="Belum Di konfirmasi" autocomplete="off" disabled>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-success">Proses</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal Section -->
<div class="modal fade" tabindex="-1" role="dialog" id="GagalTransModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Gagal Transaksi</h4>
            </div>
            <form role="form" action="<?php echo site_url('Dompet/prosestrxgagal') ?>" method="post" id="GagalTransForm">
                <div class="modal-body">
                    <div id="messages"></div>
                    <div class="form-group">
                        <label for="edit_iddompettrx">ID Transaksi</label>
                        <input type="text" class="form-control" id="edit_iddompettrxgagal" name="edit_iddompettrxgagal" autocomplete="off" disabled>
                        <input type="hidden" class="form-control" id="edit_iddompettrxgagalpost" name="edit_iddompettrxgagalpost" autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-danger">Gagal</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Modal Section -->


<!-- footer content -->
    <footer>
        <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
    </footer>
<!-- /footer content -->


    </div>
</div>

<!-- jQuery -->
<script src="<?= base_url('assets/admin/vendors/jquery/dist/jquery.min.js') ?>"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<!-- FastClick -->
<script src="<?= base_url('assets/admin/vendors/fastclick/lib/fastclick.js')?>"></script>
<!-- NProgress -->
<script src="<?= base_url('assets/admin/vendors/nprogress/nprogress.js') ?>"></script>
<!-- Chart.js -->
<script src="<?= base_url('assets/admin/vendors/Chart.js/dist/Chart.min.js') ?>"></script>
<!-- gauge.js -->
<script src="<?= base_url('assets/admin/vendors/gauge.js/dist/gauge.min.js') ?>"></script>
<!-- bootstrap-progressbar -->
<script src="<?= base_url('assets/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')?>"></script>
<!-- iCheck -->
<script src="<?= base_url('assets/admin/vendors/iCheck/icheck.min.js') ?>"></script>
<!-- Skycons -->
<script src="<?= base_url('assets/admin/vendors/skycons/skycons.js') ?>"></script>
<!-- Flot -->
<script src="<?= base_url('assets/admin/vendors/Flot/jquery.flot.js') ?>"></script>
<script src="<?= base_url('assets/admin/vendors/Flot/jquery.flot.pie.js') ?>"></script>
<script src="<?= base_url('assets/admin/vendors/Flot/jquery.flot.time.js') ?>"></script>
<script src="<?= base_url('assets/admin/vendors/Flot/jquery.flot.stack.js') ?>"></script>
<script src="<?= base_url('assets/admin/vendors/Flot/jquery.flot.resize.js') ?>"></script>
<!-- Flot plugins -->
<script src="<?= base_url('assets/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js')?>"></script>
<script src="<?= base_url('assets/admin/vendors/flot-spline/js/jquery.flot.spline.min.js') ?>"></script>
<script src="<?= base_url('assets/admin/vendors/flot.curvedlines/curvedLines.js')?>"></script>
<!-- DateJS -->
<script src="<?= base_url('assets/admin/vendors/DateJS/build/date.js')?>"></script>
<!-- JQVMap -->
<script src="<?= base_url('assets/admin/vendors/jqvmap/dist/jquery.vmap.js') ?>"></script>
<script src="<?= base_url('assets/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js') ?>"></script>
<script src="<?= base_url('assets/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') ?>"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?= base_url('assets/admin/vendors/moment/min/moment.min.js') ?>"></script>
<script src="<?= base_url('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>

<!-- Custom Theme Scripts -->
<script src="<?= base_url('assets/admin/build/js/custom.min.js') ?>"></script>
<script src="<?php echo base_url('assets/admin/vendors/fileinput/fileinput.min.js') ?>"></script>

<!-- Datatables -->

<script src="<?= base_url('assets/admin/vendors/datatables.net/js/jquery.dataTables.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js')?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')?>"></script>

<script src="<?= base_url('assets/admin/vendors/jszip/dist/jszip.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/pdfmake/build/pdfmake.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/pdfmake/build/vfs_fonts.js') ?>"></script>

    <script type="text/javascript">

        var manageTable;

        $(document).ready(function() {
            manageTable = $('#TopUpTable').DataTable({

                'ajax': 'fetchTopUpTransData/2',

                'order': []
            });

        });

        // edit function

        function prosestransaksi(id)
        {
            $.ajax({
                url: 'fetchDompetTrxKonfDataById/'+id,
                type: 'post',
                dataType: 'json',
                success:function(response) {
                    $("#edit_iddompettrx").val(response.id_dompet_trx);
                    $("#edit_iddompettrxpost").val(response.id_dompet_trx);
                    $("#edit_iddompetusername").val(response.username);
                    $("#edit_dompettrxamount").val(response.amount_konf);
                    $("#edit_konftanggal").val(response.Tgl_transfer);
                    $("#edit_konfbank").val(response.Bank);
                    $("#edit_konfdaribank").val(response.from_acc);
                    $("#edit_konfdarirekening").val(response.from_accnumb);
                    $("#edit_konfdarirekeningnama").val(response.from_nameacc);
                    $("#edit_konfnamalengkap").val(response.nama_lengkap);
                    $("#edit_konfemail").val(response.email);
                    $("#edit_konfnoref").val(response.no_ref);
                    // submit the edit from
                    $("#updateBrandForm").unbind('submit').bind('submit', function() {
                        var form = $(this);
                        // remove the text-danger
                        $(".text-danger").remove();
                        $.ajax({
                            url: form.attr('action') + '/' + id,
                            type: form.attr('method'),
                            data: form.serialize(), // /converting the form data into array and sending it to server
                            dataType: 'json',
                            success:function(response) {
                                manageTable.ajax.reload(null, false);
                                if(response.success === true) {
                                    $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                        '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
                                        '</div>');
                                    // hide the modal
                                    $("#editTransModal").modal('hide');
                                    $('.modal-backdrop').remove();
                                    // reset the form
                                    $("#updateBrandForm .form-group").removeClass('has-error').removeClass('has-success');
                                } else {
                                    if(response.messages instanceof Object) {
                                        $.each(response.messages, function(index, value) {
                                            var id = $("#"+index);
                                            id.closest('.form-group')
                                                .removeClass('has-error')
                                                .removeClass('has-success')
                                                .addClass(value.length > 0 ? 'has-error' : 'has-success');
                                            id.after(value);
                                        });
                                    } else {
                                        $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                            '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
                                            '</div>');
                                        $("#editTransModal").modal('hide');
                                        $('.modal-backdrop').remove();
                                        // reset the form
                                        $("#updateBrandForm .form-group").removeClass('has-error').removeClass('has-success');
                                    }
                                }
                            }
                        });

                        return false;
                    });
                }
            });
        }


        function prosesgagal(id)
        {
            $.ajax({
                url: 'fetchDompetTrxKonfDataById/'+id,
                type: 'post',
                dataType: 'json',
                success:function(response) {
                    $("#edit_iddompettrxgagal").val(response.id_dompet_trx);
                    $("#edit_iddompettrxgagalpost").val(response.id_dompet_trx);
                    // submit the edit from
                    $("#updateBrandForm").unbind('submit').bind('submit', function() {
                        var form = $(this);
                        // remove the text-danger
                        $(".text-danger").remove();
                        $.ajax({
                            url: form.attr('action') + '/' + id,
                            type: form.attr('method'),
                            data: form.serialize(), // /converting the form data into array and sending it to server
                            dataType: 'json',
                            success:function(response) {
                                manageTable.ajax.reload(null, false);
                                if(response.success === true) {
                                    $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                        '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
                                        '</div>');
                                    // hide the modal
                                    $("#editTransModal").modal('hide');
                                    $('.modal-backdrop').remove();
                                    // reset the form
                                    $("#updateBrandForm .form-group").removeClass('has-error').removeClass('has-success');
                                } else {
                                    if(response.messages instanceof Object) {
                                        $.each(response.messages, function(index, value) {
                                            var id = $("#"+index);
                                            id.closest('.form-group')
                                                .removeClass('has-error')
                                                .removeClass('has-success')
                                                .addClass(value.length > 0 ? 'has-error' : 'has-success');
                                            id.after(value);
                                        });
                                    } else {
                                        $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                            '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
                                            '</div>');
                                        $("#editTransModal").modal('hide');
                                        $('.modal-backdrop').remove();
                                        // reset the form
                                        $("#updateBrandForm .form-group").removeClass('has-error').removeClass('has-success');
                                    }
                                }
                            }
                        });

                        return false;
                    });
                }
            });
        }



</script>


</body>
</html>
