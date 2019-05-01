



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
                <div class="card p-4">
                    <h3>Kategori Proyek</h3>
                    <p><?= $detailproyek['nama_kategori'] ?></p>
                    <h3>Tagline Proyek</h3>
                    <p><?= $detailproyek['tagline'] ?></p>
                    <h3>Deskripsi Proyek</h3>
                    <p><?= $detailproyek['detail_proyek'] ?></p>
                    <h3>Teks desain</h3>
                    <p><?= $detailproyek['teks_desain']?></p>
                    <h3>Syarat Desain</h3>
                    <p>
                        1. syarat satu <br>
                        2. syarat dua <br>
                    </p>
                    <h3>File Gambar</h3>
                    <a href="" class="btn btn-info col-md-1"><i class="fa fa-download"></i></a>
                    <br>
                    <h3>File Dokumen</h3>
                    <a href="" class="btn btn-info col-md-1"><i class="fa fa-download"></i></a>
                <br>
                <br> <br> <br> <br>

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
                <a href="<?= site_url('Project/bergabung/'.$detailproyek['id_proyek']) ?>" class="btn btn-info w-100 p-3 mt-3" ><i class="fa fa-user-plus"></i> Bergabung Dengan Proyek</a>
                <a href="<?= site_url('Project/submitdesain/'.$detailproyek['id_proyek'])?>" class="btn btn-info w-100 p-3 mt-3" ><i class="far fa-images"></i> Submit Desain</a>
                <a href="<?= site_url('Project/submitide/'.$detailproyek['id_proyek'])?>" class="btn btn-info w-100 p-3 mt-3" ><i class="fa fa-user-tag"></i> Berikan Ide Dan Saran</a>
            </div>
        </div>
    <br>
    <div class="row">
        <div class="col-md-12 text-center ">
            <nav class="nav-justified ">
                <div class="nav nav-tabs " id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="pop1-tab" data-toggle="tab" href="#pop1" role="tab" aria-controls="pop1" aria-selected="true">Submit Desain</a>
                    <a class="nav-item nav-link" id="pop2-tab" data-toggle="tab" href="#pop2" role="tab" aria-controls="pop2" aria-selected="false">User Bergabung</a>
                    <a class="nav-item nav-link" id="pop3-tab" data-toggle="tab" href="#pop3" role="tab" aria-controls="pop3" aria-selected="false"> Ide / Saran</a>

                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active p-3" id="pop1" role="tabpanel" aria-labelledby="pop1-tab">
                    <div class="row">
                        <div class="col-md-6 text-left">
                        </div>
                        <div class="col-md-6 text-right">
                            <p>Total Submit : 3 Desain</p>
                        </div>
                    </div>
                  <div class="card mb-2">
                      <div class="row justify-content-start">
                          <div class="col-md-2">
                              <img class="img-fluid mx-auto d-block mb-3 mt-3" width="70%" src="<?= base_url('assets/user/img/home/pictureprojectdetail.png')?>" alt="">
                          </div>
                          <div class="col-md-8 p-2 text-left">
                               <p class="font-weight-bold m-0">Nama Pengguna</p>
                               <p class="m-0 small">Muklish Ibadurahman</p>
                              <p class="font-weight-bold m-0">deskripsi</p>
                              <p class="m-0 small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur culpa debitis id laudantium provident? Ex quaerat soluta tempore? Blanditiis cupiditate doloremque eos iusto minus modi nesciunt nulla, officia repudiandae sint.</p>
                          </div>
                          <div class="col-md-2 p-2 align-self-center">
                              <p class="font-weight-bold m-0">Status</p>
                              <p>Review</p>
                          </div>
                      </div>
                  </div>
                    <div class="card mb-2">
                        <div class="row justify-content-start">
                            <div class="col-md-2">
                                <img class="img-fluid mx-auto d-block mb-3 mt-3" width="70%" src="<?= base_url('assets/user/img/home/pictureprojectdetail.png')?>" alt="">
                            </div>
                            <div class="col-md-8 p-2 text-left">
                                <p class="font-weight-bold m-0">Nama Pengguna</p>
                                <p class="m-0 small">Muklish Ibadurahman</p>
                                <p class="font-weight-bold m-0">deskripsi</p>
                                <p class="m-0 small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur culpa debitis id laudantium provident? Ex quaerat soluta tempore? Blanditiis cupiditate doloremque eos iusto minus modi nesciunt nulla, officia repudiandae sint.</p>
                            </div>
                            <div class="col-md-2 p-2 align-self-center">
                                <p class="font-weight-bold m-0">Status</p>
                                <p>Review</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row justify-content-start">
                            <div class="col-md-2">
                                <img class="img-fluid mx-auto d-block mb-3 mt-3" width="70%" src="<?= base_url('assets/user/img/home/pictureprojectdetail.png')?>" alt="">
                            </div>
                            <div class="col-md-8 p-2 text-left">
                                <p class="font-weight-bold m-0">Nama Pengguna</p>
                                <p class="m-0 small">Muklish Ibadurahman</p>
                                <p class="font-weight-bold m-0">deskripsi</p>
                                <p class="m-0 small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur culpa debitis id laudantium provident? Ex quaerat soluta tempore? Blanditiis cupiditate doloremque eos iusto minus modi nesciunt nulla, officia repudiandae sint.</p>
                            </div>
                            <div class="col-md-2 p-2 align-self-center">
                                <p class="font-weight-bold m-0">Status</p>
                                <p>Review</p>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane fade p-3" id="pop2" role="tabpanel" aria-labelledby="pop2-tab">
                    <div class="row">
                        <div class="col-md-6 text-left">
                        </div>
                        <div class="col-md-6 text-right">
                            <p>Total Apply : 3 User</p>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row justify-content-start">
                            <div class="col-md-2">
                                <img class="img-fluid mx-auto d-block mb-3 mt-3" width="70%" src="<?= base_url('assets/user/img/home/pictureprojectdetail.png')?>" alt="">
                            </div>
                            <div class="col-md-8 p-2 text-left">
                                <p class="font-weight-bold m-0">Nama Pengguna</p>
                                <p class="m-0 small">Muklish Ibadurahman</p>
                                <p class="font-weight-bold m-0">Alasan Bergabung</p>
                                <p class="m-0 small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur culpa debitis id laudantium provident? Ex quaerat soluta tempore? Blanditiis cupiditate doloremque eos iusto minus modi nesciunt nulla, officia repudiandae sint.</p>
                            </div>
                            <div class="col-md-2 p-2 align-self-center">
                                <p class="font-weight-bold m-0">Status</p>
                                <p>Belum Diterima</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row justify-content-start">
                            <div class="col-md-2">
                                <img class="img-fluid mx-auto d-block mb-3 mt-3" width="70%" src="<?= base_url('assets/user/img/home/pictureprojectdetail.png')?>" alt="">
                            </div>
                            <div class="col-md-8 p-2 text-left">
                                <p class="font-weight-bold m-0">Nama Pengguna</p>
                                <p class="m-0 small">Muklish Ibadurahman</p>
                                <p class="font-weight-bold m-0">Alasan Bergabung</p>
                                <p class="m-0 small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur culpa debitis id laudantium provident? Ex quaerat soluta tempore? Blanditiis cupiditate doloremque eos iusto minus modi nesciunt nulla, officia repudiandae sint.</p>
                            </div>
                            <div class="col-md-2 p-2 align-self-center">
                                <p class="font-weight-bold m-0">Status</p>
                                <p>Belum Diterima</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row justify-content-start">
                            <div class="col-md-2">
                                <img class="img-fluid mx-auto d-block mb-3 mt-3" width="70%" src="<?= base_url('assets/user/img/home/pictureprojectdetail.png')?>" alt="">
                            </div>
                            <div class="col-md-8 p-2 text-left">
                                <p class="font-weight-bold m-0">Nama Pengguna</p>
                                <p class="m-0 small">Muklish Ibadurahman</p>
                                <p class="font-weight-bold m-0">Alasan Bergabung</p>
                                <p class="m-0 small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur culpa debitis id laudantium provident? Ex quaerat soluta tempore? Blanditiis cupiditate doloremque eos iusto minus modi nesciunt nulla, officia repudiandae sint.</p>
                            </div>
                            <div class="col-md-2 p-2 align-self-center">
                                <p class="font-weight-bold m-0">Status</p>
                                <p>Belum Diterima</p>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane fade p-3" id="pop3" role="tabpanel" aria-labelledby="pop3-tab">
                    <div class="row">
                        <div class="col-md-6 text-left">
                        </div>
                        <div class="col-md-6 text-right">
                            <p>Total Ide / Saran : 3 User</p>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row justify-content-start">
                            <div class="col-md-2">
                                <img class="img-fluid mx-auto d-block mb-3 mt-3" width="70%" src="<?= base_url('assets/user/img/home/pictureprojectdetail.png')?>" alt="">
                            </div>
                            <div class="col-md-8 p-2 text-left">
                                <p class="font-weight-bold m-0">Nama Pengguna</p>
                                <p class="m-0 small">Muklish Ibadurahman</p>
                                <p class="font-weight-bold m-0">Ide Saran</p>
                                <p class="m-0 small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur culpa debitis id laudantium provident? Ex quaerat soluta tempore? Blanditiis cupiditate doloremque eos iusto minus modi nesciunt nulla, officia repudiandae sint.</p>
                            </div>
                            <div class="col-md-2 p-2 align-self-center">
                                <p class="font-weight-bold m-0">Respon</p>
                                <p>Sangat Membantu</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row justify-content-start">
                            <div class="col-md-2">
                                <img class="img-fluid mx-auto d-block mb-3 mt-3" width="70%" src="<?= base_url('assets/user/img/home/pictureprojectdetail.png')?>" alt="">
                            </div>
                            <div class="col-md-8 p-2 text-left">
                                <p class="font-weight-bold m-0">Nama Pengguna</p>
                                <p class="m-0 small">Muklish Ibadurahman</p>
                                <p class="font-weight-bold m-0">Ide Saran</p>
                                <p class="m-0 small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur culpa debitis id laudantium provident? Ex quaerat soluta tempore? Blanditiis cupiditate doloremque eos iusto minus modi nesciunt nulla, officia repudiandae sint.</p>
                            </div>
                            <div class="col-md-2 p-2 align-self-center">
                                <p class="font-weight-bold m-0">Respon</p>
                                <p>Belum Ada Respon</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="row justify-content-start">
                            <div class="col-md-2">
                                <img class="img-fluid mx-auto d-block mb-3 mt-3" width="70%" src="<?= base_url('assets/user/img/home/pictureprojectdetail.png')?>" alt="">
                            </div>
                            <div class="col-md-8 p-2 text-left">
                                <p class="font-weight-bold m-0">Nama Pengguna</p>
                                <p class="m-0 small">Muklish Ibadurahman</p>
                                <p class="font-weight-bold m-0">Ide Saran</p>
                                <p class="m-0 small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur culpa debitis id laudantium provident? Ex quaerat soluta tempore? Blanditiis cupiditate doloremque eos iusto minus modi nesciunt nulla, officia repudiandae sint.</p>
                            </div>
                            <div class="col-md-2 p-2 align-self-center">
                                <p class="font-weight-bold m-0">Respon</p>
                                <p>Belum Ada Respon</p>
                            </div>
                        </div>
                    </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                </div>

            </div>
        </div>
    </div>

        <!--/panel-group-->
    </div>
</section>
<!--================ Get Started End =================-->





