<!-- page content -->
    <div class="right_col" role="main">

        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Artikel <small>Daftar</small></h3>
                </div>
            </div>

            <div class="clearfix"></div>
            <br>
            <a href="<?= site_url('Article/add') ?>" class="btn btn-success">Tambah Artikel</a>
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
                            <table id="ArtikelTable" class="table table-striped table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>ID Artikel</th>
                                        <th>Judul Artikel</th>
                                        <th>Nama Artikel</th>
                                        <th>tanggal Artikel</th>
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
<!-- remove brand modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="removeArtikelModal">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title">Remove Category</h4>

            </div>



            <form role="form" action="<?php echo site_url('Article/remove') ?>" method="post" id="removeBrandForm">

                <div class="modal-body">

                    <p>Do you really want to remove?</p>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    <button type="submit" class="btn btn-primary">Save changes</button>

                </div>

            </form>





        </div><!-- /.modal-content -->

    </div><!-- /.modal-dialog -->

</div><!-- /.modal -->

<!-- End Modal Section -->

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
        manageTable = $('#ArtikelTable').DataTable({

            'ajax': 'Article/fetchArtikelData',

            'order': []

        });

        // file upload lib
        var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' +
            'onclick="alert(\'Call your custom code here.\')">' +
            '<i class="glyphicon glyphicon-tag"></i>' +
            '</button>';
        $("#iconcat").fileinput({
            overwriteInitial: true,
            maxFileSize: 1500,
            showClose: false,
            showCaption: false,
            browseLabel: '',
            removeLabel: '',
            browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
            removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors-1',
            msgErrorClass: 'alert alert-block alert-danger',
            // defaultPreviewContent: '<img src="/uploads/default_avatar_male.jpg" alt="Your Avatar">',
            layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
            allowedFileExtensions: ["jpg", "png", "gif"]
        });
        // End File Upload


        // submit the create from

        $("#createForm").unbind('submit').on('submit', function() {

            var form = $(this);
            // remove the text-danger

            $(".text-danger").remove();


            $.ajax({

                url: form.attr('action'),
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
                        $("#createForm")[0].reset();
                        $("#createForm .form-group").removeClass('has-error').removeClass('has-success');
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

                        }

                    }

                }

            });



            return false;

        });




    });

    // edit function

    function editCategory(id)

    {

        $.ajax({

            url: 'Category/fetchCategoryDataById/'+id,

            type: 'post',

            dataType: 'json',

            success:function(response) {



                $("#edit_category_name").val(response[0].nama_kategori);

                $("#edit_status").val(response[0].status);

                $("#edit_icon").val(response[0].id_icon);

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

                                $("#editModal").modal('hide');

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
    function removeFunc(id)

    {

        if(id) {

            $("#removeBrandForm").on('submit', function() {



                var form = $(this);



                // remove the text-danger

                $(".text-danger").remove();



                $.ajax({

                    url: form.attr('action'),

                    type: form.attr('method'),

                    data: { artikel_id:id },

                    dataType: 'json',

                    success:function(response) {



                        manageTable.ajax.reload(null, false);



                        if(response.success === true) {

                            $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+

                                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+

                                '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+

                                '</div>');



                            // hide the modal

                            $("#removeArtikelModal").modal('hide');

                            $('.modal-backdrop').remove();



                        } else {



                            $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+

                                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+

                                '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+

                                '</div>');

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
