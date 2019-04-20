<!-- page content -->
    <div class="right_col" role="main">

        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Detail Proyek <small>Artikel</small></h3>
                </div>
            </div>

            <div class="clearfix"></div>

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
          <div class="container-fluid">
              <div class="row">


                  <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="x_panel tile">
                          <div class="x_title">
                              <h2><i class="fa fa-clock-o text-success"></i> Waktu Proyek</h2>
                              <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                              <form action="">
                                  <div class="form-group">
                                      <label for="">Tanggal Mulai</label>
                                      <input type="date" name="" id="" class="form-control" value="<?= $detailproyek['DateAwal']?>">
                                  </div>
                                  <div class="form-group">
                                      <label for="">Tanggal Berakhir</label>
                                      <input type="date" name="" id="" class="form-control" value="<?= $detailproyek['DateAkhir']?>">
                                  </div>
                                  <div class="form-group" style="float:  right !important;">
                                      <button type="submit" class="btn btn-success">Ubah</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="x_panel tile">
                          <div class="x_title">
                              <h2><i class="fa fa-money-bill-alt text-success"></i> Pembayaran dan Nilai Proyek</h2>
                              <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                              <form action="">
                                  <div class="form-group">
                                      <label for="nominal_Proyek">Nominal</label>
                                      <input type="number" name="nominal_Proyek" id="nominal_Proyek" class="form-control" value="<?= $detailproyek['nilai_pembayaran']?>">
                                  </div>
                                  <div class="form-group" style="float:  right !important;">
                                      <button type="submit" class="btn btn-success">Ubah</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>


              </div>


              <div class="row">
                  <div class="x_panel">
                      <div class="x_title">
                          <h2>Detail<small>Umum</small></h2>
                          <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                          <div class="col-md-12 col-sm-12 col-xs-12">

                              <form role="form" action="<?php base_url('Article/add') ?>" method="post" enctype="multipart/form-data">

                                  <div class="box-body">
                                      <?php echo validation_errors(); ?>
                                      <br>
                                      <div class="form-group row">
                                          <div class="col-md-6 col-12 col-xs-12">
                                              <label for="id_proyek">ID Proyek</label>
                                              <input type="text" class="form-control" id="id_proyek" name="id_artikel" value="<?= $detailproyek['id_proyek']?>" autocomplete="off" disabled/>
                                              <input type="hidden" class="form-control" id="id_proyekpost" name="id_proyekpost" value="<?= $detailproyek['id_proyek']?>" autocomplete="off" disabled/>
                                          </div>
                                          <div class="col-md-6 col-12 col-xs-12">
                                              <label for="nama_proyek">Nama Proyek</label>
                                              <input type="text" class="form-control" id="nama_proyek" name="nama_proyek" value="<?= $detailproyek['nama_proyek']?>" autocomplete="off"/>
                                          </div>
                                      </div>
                                      <br>
                                      <div class="form-group row">
                                          <div class="col-md-6 col-12 col-x-12">
                                              <label for="id_kategori">Kategori</label>
                                              <select class="form-control" id="id_admin" name="id_kategori">
                                                  <option value="<?= $datakategori['id_kategori']?>"><?= $datakategori['nama_kategori']?></option>
                                                  <?php foreach ($list_kategori as $k => $v): ?>
                                                      <?php if($v['id_kategori'] == $datakategori['id_kategori'] ) : ?>

                                                      <?php else  : ?>
                                                          <option value="<?php echo $v['id_kategori'] ?>"><?php echo $v['nama_kategori'] ?></option>
                                                      <?php endif; ?>
                                                  <?php endforeach ?>
                                              </select>
                                          </div>
                                          <div class="col-md-6 col-12 col-xs-12">
                                              <label for="nama_proyek">Jenis Proyek</label>
                                              <select name="jenis_proyek" class="form-control" id="jenis_proyek">
                                                  <?php if($detailproyek['jenis'] == 1 ) : ?>
                                                      <option value="1" selected>Campaign</option>
                                                      <option value="2">Partner / Hiring</option>
                                                  <?php elseif ($detailproyek['jenis'] == 2 ) : ?>
                                                      <option value="1" >Campaign</option>
                                                      <option value="2" selected>Partner / Hiring</option>
                                                  <?php else : ?>

                                                  <?php endif; ?>
                                              </select>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label for="tagline">Tagline</label>
                                          <textarea name="tagline" id="tagline" cols="10" rows="3" class="form-control"><?= $detailproyek['tagline'] ?></textarea>
                                      </div>
                                      <div class="form-group">
                                          <label for="detail_proyek">Detail proyek</label>
                                          <textarea type="text" class="form-control" id="detail_proyek" name="detail_proyek" autocomplete="off" rows="13" cols="20"><?= $detailproyek['detail_proyek']?></textarea>
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
                  </div>
              </div>
          </div>



            <div class="row">


                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="x_panel tile fixed_height_320">
                        <div class="x_title">
                            <h2>Foto Proyek</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <h4>App Usage across versions</h4>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="x_panel tile fixed_height_320">
                        <div class="x_title">
                            <h2>File Proyek</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <h4>App Usage across versions</h4>

                        </div>
                    </div>
                </div>


            </div>


           <div class="">
               <div class="row">
                   <div class="x_panel">
                       <div class="x_title">
                           <h2>Proyek <small>List</small></h2>
                           <div class="clearfix"></div>
                       </div>
                       <div class="x_content">
                           <table id="ProyekTable" class="table table-striped table-bordered table-responsive">
                               <thead>
                               <tr>
                                   <th>ID Proyek</th>
                                   <th>Nama Proyek</th>
                                   <th>Pembuat</th>
                                   <th>Tipe Proyek</th>
                                   <th>Kategori</th>
                                   <th>Tanggal Mulai</th>
                                   <th>Tanggal Berakhir</th>
                                   <th>Status</th>
                                   <th>Action</th>
                               </tr>
                               </thead>
                           </table>
                       </div>
                   </div>
               </div>
           </div>

            <div class="">
                <div class="row">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Proyek <small>List</small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table id="ProyekTable" class="table table-striped table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th>ID Proyek</th>
                                    <th>Nama Proyek</th>
                                    <th>Pembuat</th>
                                    <th>Tipe Proyek</th>
                                    <th>Kategori</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Berakhir</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="row">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Proyek <small>List</small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table id="ProyekTable" class="table table-striped table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th>ID Proyek</th>
                                    <th>Nama Proyek</th>
                                    <th>Pembuat</th>
                                    <th>Tipe Proyek</th>
                                    <th>Kategori</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Berakhir</th>
                                    <th>Status</th>
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

<script>

    $("#description").wysihtml5();

    var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' +

        'onclick="alert(\'Call your custom code here.\')">' +

        '<i class="glyphicon glyphicon-tag"></i>' +

        '</button>';
    $("#artikel_gambar").fileinput({

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

    $('#dateTime').datetimepicker();

</script>


</body>
</html>
