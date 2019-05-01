



<!--================ Get Started =================-->
<section class="section-padding" style="padding-top: 10em; padding-bottom: 20em;">
    <div class="container ">
        <div class="section-intro text-center pb-5">
            <h2>PROYEK DI PINDA</h2>
            <p> Pilih proyek yang ingin anda memberikan kontribusi</p>
        </div>


        <div class="row">
            <div class="col-md-3">
                <h3 class="mb-3">Search :</h3>
                <div class="form-group">
                    <label for="password" class="inp mb-4">
                        <input type="text" id="password" class="inline" placeholder="&nbsp;">
                        <span class="label">Cari Nama Proyek</span>
                        <span class="border"></span
                    </label>
                </div>
            </div>
            <div class="col-md-12">
              <?php foreach ($proyek as $data => $key ) : ?>
                  <a href="<?= site_url('Project/detail/'.$key['id_proyek'])?>">
                      <div class="card shadow p-3 mb-3">
                          <div class="row">
                              <div class="col-md-2 d-flex align-self-center p-3 ">
                               <?php if ($key['status_proyek'] = 3 || $key['status_proyek'] == 2  || $key['sisa_hari'] == 0 ) :  ?>
                                   <img class="m-auto" src="<?= base_url('assets/user/img/proyekimg/closed.png')?>" alt="">
                                  <?php else  : ?>
                                   <img class="m-auto" src="<?= base_url('assets/user/img/proyekimg/open.png')?>" alt="">
                                  <?php endif; ?>
                              </div>
                              <div class="col-md-7">
                                  <h3><?= $key['nama_proyek']?></h3>
                                  <p class="text-dark small"><?= $key['detail_proyek']?></p>
                                  <div class="">
                                      <span class="btn btn-sm btn-success btn-round"><?= $key['nama_kategori']?></span>
                                  </div>
                              </div>
                              <div class="col-md-3 d-flex align-self-center">
                                  <ul class="text-dark m-auto">
                                      <li class="mb-1 mt-1"><i class="fas fa-money-bill-alt "></i> Rp. <?= $key['nilai_pembayaran']?></li>
                                      <li class="mb-1 mt-1"><i class="fa fa-clock"></i> <?= $key['sisa_hari']?> Hari</li>
                                      <li class="mb-1 mt-1"><i class="fas fa-palette"></i> <?= $key['total_desain'] ?> Desain</li>
                                      <li class="mb-1 mt-1"><i class="fas fa-user-tie"></i> <?= $key['total_lamar']?> Pelamar</li>
                                      <li class="mb-1 mt-1"><i class="fa fa-comment"></i> <?= $key['total_ide']?> Ide</li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </a>
                <?php endforeach; ?>
            </div>
        </div>

        <!--/panel-group-->
    </div>
</section>
<!--================ Get Started End =================-->





