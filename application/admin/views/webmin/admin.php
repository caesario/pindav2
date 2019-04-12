<!-- page content -->
    <div class="right_col" role="main">

        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Admin <small>Daftar</small></h3>
                </div>
            </div>

            <div class="clearfix"></div>
            <br>
            <button class="btn btn-success" data-toggle="modal" data-target="#addModal">Tambah Admin</button>
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
                            <h2>Kategori <small>List</small></h2>
                                <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table id="AdminTable" class="table table-striped table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>ID Admin</th>
                                        <th>Nama Admin</th>
                                        <th>username</th>
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
<!-- create kategori modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Admin</h4>
            </div>
            <div id="messages"></div>
            <form role="form" action="<?php echo site_url('Settings/adduseradmin') ?>" method="post" id="addAdminForm">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_admin">Nama Admin</label>
                        <input type="text" class="form-control" id="nama_admin" name="nama_admin" placeholder="Masukkan Nama Admin" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="user_admin" name="user_admin" placeholder="Masukkan User Admin" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input type="password" class="form-control" id="password_admin" name="password_admin" placeholder="Masukkan Password" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="passwordkonf_admin">Konfirmasi Kata Sandi</label>
                        <input type="password" class="form-control" id="passwordkonf_admin" name="passwordkonf_admin" placeholder="Masukkan Konfirmasi Password" autocomplete="off">
                    </div>
                    <br>
                    <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Data Admin</h4>
            </div>
            <form role="form" action="<?php echo site_url('Settings/updateadmin') ?>" method="post" id="updateAdminForm">
                <div class="modal-body">
                    <div id="messages"></div>
                    <div class="form-group">
                        <label for="edit_idadmin">ID Admin</label>
                        <input type="text" class="form-control" id="edit_idadmin" name="edit_idadmin"  autocomplete="off" disabled>
                        <input type="hidden" class="form-control" id="edit_idadminpost" name="edit_idadminpost"  autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="edit_namaadmin">Nama Admin</label>
                        <input type="text" class="form-control" id="edit_namaadmin" name="edit_namaadmin"  autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="edit_usernameadmin">Username</label>
                        <input type="text" class="form-control" id="edit_usernameadmin" name="edit_usernameadmin" autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="editPassModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Password Admin</h4>
            </div>
            <div id="messages"></div>
            <form role="form" action="<?php echo site_url('Settings/updatepassadmin') ?>" method="post" id="updatePassForm">
                <div class="modal-body">
                    <div id="messages"></div>
                    <div class="form-group">
                        <label for="edit_idadminpass">ID Admin</label>
                        <input type="text" class="form-control" id="edit_idadminpass" name="edit_idadminpass"  autocomplete="off" disabled>
                        <input type="hidden" class="form-control" id="edit_idadminpasspost" name="edit_idadminpasspost"  autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="edit_passwordlama">Kata Sandi Lama</label>
                        <input type="password" class="form-control" id="edit_passwordlama" name="edit_passwordlama"  autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="edit_password">Kata Sandi Baru</label>
                        <input type="password" class="form-control" id="edit_password" name="edit_password"  autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="edit_passwordkonf">Konfirmasi Kata Sandi Baru</label>
                        <input type="password" class="form-control" id="edit_passwordkonf" name="edit_passwordkonf" autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- remove brand modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="removeAdmModal">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title">Hapus Admin User</h4>

            </div>



            <form role="form" action="<?php echo site_url('Settings/removeadmin') ?>" method="post" id="removeAdminForm">

                <div class="modal-body">

                    <p>Apakah Anda Yakin Ingin Menghapus?</p>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    <button type="submit" class="btn btn-primary">Hapus</button>

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
            manageTable = $('#AdminTable').DataTable({

                'ajax': 'fetchAdminData',

                'order': []

            });

            // submit the create from

            $("#addAdminForm").unbind('submit').on('submit', function() {

                var form = $(this);
                // remove the text-danger

                $(".text-danger").remove();


                $.ajax({

                    url: '<?= site_url('Settings/adduseradmin')?>',
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
                            $("#addModal").modal('hide');
                            // reset the form
                            $("#addAdminForm")[0].reset();
                            $("#addAdminForm .form-group").removeClass('has-error').removeClass('has-success');
                        } else {
                            if(response.messages instanceof Object) {
                                $.each(response.messages, function(index, value) {
                                    var id = $("#"+index);

                                    // hide the modal
                                    $("#addModal").modal('hide');

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
                                // hide the modal
                                $("#addModal").modal('hide');

                            }

                        }

                    }

                });



                return false;

            });




        });

        // edit Admin

        function editAdmin(id)

        {

            $.ajax({

                url: 'fetchAdminDataById/'+id,

                type: 'post',

                dataType: 'json',

                success:function(response) {



                    $("#edit_idadmin").val(response.id_admin);
                    $("#edit_idadminpost").val(response.id_admin);

                    $("#edit_namaadmin").val(response.nama_admin);

                    $("#edit_usernameadmin").val(response.username);

                    // submit the edit from

                    $("#updateAdminForm").unbind('submit').bind('submit', function() {

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

                                    $("#editModal").modal('hide');

                                    $('.modal-backdrop').remove();

                                    // reset the form

                                    $("#updateAdminForm .form-group").removeClass('has-error').removeClass('has-success');



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

                                        $("#editModal").modal('hide');

                                        $('.modal-backdrop').remove();

                                        // reset the form
                                        $("#updateAdminForm")[0].reset();
                                        $("#updateAdminForm .form-group").removeClass('has-error').removeClass('has-success');

                                    }

                                }

                            }

                        });



                        return false;

                    });



                }

            });

        }

        // edit function

        function editPass(id)

        {

            $.ajax({

                url: 'fetchAdminDataById/'+id,

                type: 'post',

                dataType: 'json',

                success:function(response) {



                    $("#edit_idadminpass").val(response.id_admin);
                    $("#edit_idadminpasspost").val(response.id_admin);


                    // submit the edit from

                    $("#updatePassForm").unbind('submit').bind('submit', function() {

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

                                    $("#editPassModal").modal('hide');

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
                                            // hide the modal




                                        });

                                    } else {

                                        $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+

                                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+

                                            '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+

                                            '</div>');
                                        $("#editPassModal").modal('hide');

                                        $('.modal-backdrop').remove();

                                        // reset the form
                                        $("#updatePassForm")[0].reset();
                                        $("#updatePassForm .form-group").removeClass('has-error').removeClass('has-success');
                                    }

                                }

                            }

                        });



                        return false;

                    });



                }

            });

        }


        // remove functions
        function removeAdmin(id)

        {

            if(id) {

                $("#removeAdminForm").on('submit', function() {



                    var form = $(this);



                    // remove the text-danger

                    $(".text-danger").remove();



                    $.ajax({

                        url: form.attr('action'),

                        type: form.attr('method'),

                        data: { id_admin:id },

                        dataType: 'json',

                        success:function(response) {



                            manageTable.ajax.reload(null, false);



                            if(response.success === true) {

                                $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+

                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+

                                    '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+

                                    '</div>');



                                // hide the modal

                                $("#removeAdmModal").modal('hide');

                                $('.modal-backdrop').remove();



                            } else {



                                $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+

                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+

                                    '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+

                                    '</div>');
                                $("#removeAdmModal").modal('hide');

                                $('.modal-backdrop').remove();

                            }

                        }

                    });



                    return false;

                });

            }

        }

</script>


</body>
</html>
