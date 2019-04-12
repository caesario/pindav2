<!-- page content -->
    <div class="right_col" role="main">

        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Tambah <small>Artikel</small></h3>
                </div>
            </div>

            <div class="clearfix"></div>

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

                    <form role="form" action="<?php base_url('Article/add') ?>" method="post" enctype="multipart/form-data">

                        <div class="box-body">
                            <?php echo validation_errors(); ?>
                            <div class="form-group">
                                <label for="product_image">Gambar / Foto</label>
                                <div class="kv-avatar">
                                    <div class="file-loading">
                                        <input id="artikel_gambar" name="artikel_gambar" type="file">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <div class="col-md-6 col-12 col-xs-12">
                                    <label for="id_artikel">ID Artikel</label>
                                    <input type="text" class="form-control" id="id_artikel" name="id_artikel" placeholder="ID ARTIKEL" autocomplete="off" disabled/>

                                </div>
                                <div class="col-md-6 col-12 col-x-12">
                                    <label for="id_admin">Nama Admin</label>
                                    <select class="form-control" id="id_admin" name="id_admin">
                                    <?php foreach ($admin as $k => $v): ?>

                                        <option value="<?php echo $v['id_admin'] ?>"><?php echo $v['nama_admin'] ?></option>

                                    <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="judul_artikel">Judul Artikel</label>
                                <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" placeholder="Masukkan judul Artikel" autocomplete="off"/>
                            </div>
                            <div class="form-group">
                                    <label for="isi_artikel">Description</label>
                                    <textarea type="text" class="form-control" id="isi_artikel" name="isi_artikel" placeholder="Enter
                                    description" autocomplete="off" rows="13" cols="20">
                                    </textarea>
                            </div>
                            <div class="input-group date">
                                <input type="text" class="form-control" name="tanggal" id="dateTime" value="12-02-2012">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="box-footer" style="float: right !important;">
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <a href="<?= site_url('Article') ?>" class="btn btn-danger">Back</a>
                            </div>
                    </form>
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
                <h4 class="modal-title">Tambah Kategori</h4>
            </div>
            <form role="form" action="<?php echo site_url('Category/tambah') ?>" method="post" id="createForm" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_kategori">Nama Kategori</label>
                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Masukkan Kategori Proyek" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="1">Aktif</option>
                            <option value="2">Tidak Aktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <select class="form-control" id="icon" name="icon">
                            <?php foreach ($icon as $k => $v): ?>

                                <option value="<?php echo $v['id_icon'] ?>"><?php echo $v['nama_icon'] ?></option>

                            <?php endforeach ?>
                        </select>
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


<!-- create icon -->
<div class="modal fade" tabindex="-1" role="dialog" id="addIcon">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah icon</h4>
            </div>
            <form role="form" action="<?php echo site_url('Category/tambahicon') ?>" method="post" id="createForm" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="product_image">Gambar / Foto</label>
                        <div class="kv-avatar">
                            <div class="file-loading">
                                <input id="iconcat" name="iconcat" type="file">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_icon">Nama Icon</label>
                        <input type="text" class="form-control" id="nama_icon" name="nama_icon" placeholder="Masukkan Nama Icon" autocomplete="off">
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
<!---->
<!-- edit brand modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="editModal">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title">Ubah Merk</h4>

            </div>



            <form role="form" action="<?php echo site_url('Category/update') ?>" method="post" id="updateBrandForm">



                <div class="modal-body">

                    <div id="messages"></div>



                    <div class="form-group">

                        <label for="edit_brand_name">Nama Merk</label>

                        <input type="text" class="form-control" id="edit_category_name" name="edit_category_name" placeholder="Masukkan Nama Merk" autocomplete="off">

                    </div>

                    <div class="form-group">

                        <label for="edit_active">Status</label>

                        <select class="form-control" id="edit_status" name="edit_status">

                            <option value="1">Aktif</option>

                            <option value="2">Tidak Aktif</option>

                        </select>

                    </div>

                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <select class="form-control" id="edit_icon" name="edit_icon">
                            <?php foreach ($icon as $k => $v): ?>

                                <option value="<?php echo $v['id_icon'] ?>"><?php echo $v['nama_icon'] ?></option>

                            <?php endforeach ?>
                        </select>
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

<div class="modal fade" tabindex="-1" role="dialog" id="removeModal">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title">Remove Category</h4>

            </div>



            <form role="form" action="<?php echo site_url('Category/remove') ?>" method="post" id="removeBrandForm">

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
<script src="<?= base_url('assets/admin/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') ?>"></script>
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
<script src="<?php echo base_url('assets/admin/vendors/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>"></script>

<script src="<?php echo base_url('assets/admin/vendors/fileinput/fileinput.min.js') ?>"></script>



</body>
</html>
