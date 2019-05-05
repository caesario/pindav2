



<!--================ Get Started =================-->
<section class="section-padding" style="padding-top: 10em; padding-bottom: 20em;">
    <div class="container ">
        <div class="section-intro text-center pb-90px">
            <h2>Detail Proyek</h2>
            <p> <?php if ($detailproyek['jenis'] == 1) : ?> <?= 'Campaign' ?> <?php elseif ($detailproyek['jenis']== 2 ) : ?> <?= 'Find Partner' ?> <?php endif;?> - <?= $detailproyek['nama_proyek']?></p>
        </div>
        <div class="card">
             <div class="row">
                <div class="col-md-3">
                    <div class="row p-3">
                        <div class="col-md-5">
                            <img class="img-fluid mx-auto d-block mb-1" src="<?= base_url('assets/user/img/home/check.png')?>" alt="">
                        </div>
                        <div class="col-md-7 pt-2">
                            <h5 >Status Proyek</h5>
                            <?php if ( $detailproyek['status_proyek'] == 2 || $detailproyek['status_proyek'] == 3 || $detailproyek['sisa_hari'] == 0 ) :?>
                            <p>Closed</p>
                            <?php else : ?>
                            <p>Open</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row p-3">
                        <div class="col-md-5">
                            <img class="img-fluid mx-auto d-block mb-1" src="<?= base_url('assets/user/img/home/history.png')?>" alt="">
                        </div>
                        <div class="col-md-7 pt-2">
                            <h5 >Batas Waktu</h5>
                            <p><?= $detailproyek['sisa_hari']?> Hari Lagi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row p-3">
                        <div class="col-md-5">
                            <img class="img-fluid mx-auto d-block mb-1" src="<?= base_url('assets/user/img/home/cardmoney.png')?>" alt="">
                        </div>
                        <div class="col-md-7 pt-2">
                            <h5 >Nilai Pembayaran</h5>
                            <p>Rp <?= $detailproyek['nilai_pembayaran']?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row p-3">
                        <div class="col-md-5">
                            <img class="img-fluid mx-auto d-block mb-1" src="<?= base_url('assets/user/img/home/usermember.png')?>" alt="">
                        </div>
                        <div class="col-md-7 pt-2">
                            <h5 >Anggota</h5>
                            <p> <?= $detailproyek['total_terima']?> / <?= $detailproyek['butuh_anggota']?> orang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-8">
                <div class="card p-4 mb-2">
                    <div class="table-responsive">
                        <h3>Apply List</h3>
                        <table id="SubmitTable" class="table table-striped table-bordered ">
                            <thead>
                            <tr>
                                <th>ID Submit</th>
                                <th>Nama User</th>
                                <th>File Desain</th>
                                <th>Keterangan Submit</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="card p-4 mb-2">
                    <div class="table-responsive">
                        <h3>Submit List</h3>
                        <table id="ApplyTable" class="table table-striped table-bordered ">
                            <thead>
                            <tr>
                                <th>ID Detail Apply</th>
                                <th>Nama User</th>
                                <th>Alasan Bergabung</th>
                                <th>File CV</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>

                <div class="card p-4 mb-2">
                    <div class="table-responsive">
                        <h3>Ide List</h3>
                        <table id="IdeTable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>ID Detail Ide</th>
                                <th>Nama User</th>
                                <th>Ide Saran</th>
                                <th>Point Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <h3 class="">Pembuat Proyek</h3>
                    <?php if($detailproyek['foto_user'] != '<p>You did not select a file to upload.</p>') : ?>
                        <img class="img-fluid mx-auto d-block mb-3 mt-3" src="<?= base_url().$detailproyek['foto_user'] ;?>" alt="">
                    <?php else : ?>
                        <img class="img-fluid mx-auto d-block mb-3 mt-3" src="<?= base_url('assets/user/img/home/pictureprojectdetail.png')?>" alt="">
                    <?php endif; ?>
                    <h3>Nama</h3>
                    <p><?= $detailproyek['nama_user']?></p>
                    <h3>Tanggal Bergabung</h3>
                    <p><?= $detailproyek['date_gabung']?></p>
                </div>
                <a href="<?= site_url('Project/detail/'.$detailproyek['id_proyek']) ?>" class="btn btn-info w-100 p-3 mt-3" > Kembali Ke Detail</a>
            </div>
        </div>
    <br>


        <!--/panel-group-->
    </div>
</section>
<!--================ Get Started End =================-->





