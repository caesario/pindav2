



<!--================ Get Started =================-->
<section class="section-padding" style="padding-top: 10em; padding-bottom: 20em;">
    <div class="container ">
        <ul class="progressbar">
            <li class="active">Pilih Kategori</li>
            <li class="">Informasi Umum</li>
            <li class="">Estimasi Waktu & Tim</li>
            <li>Informasi Tambahan & Pembayaran</li>
        </ul>
        <div class="section-intro text-center pb-90px">
            <h2>Konten Apakah Yang Kamu Butuhkan</h2>
            <p> Pilih kategori Konten</p>
        </div>
        <form action="<?= site_url('Project/add')?>" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
            <div class="form-group row selectcategory">
                <?php if ($category != null ) : ?>
                    <?php foreach ($category as $cat => $value) : ?>

                        <div class="col-md-6 col-lg-3 mb-3 mb-lg-0 justify-content-center">
                            <label>
                                <input type="radio" name="product" value="<?= $value->id_kategori;?>" class="card-input-element" />
                                <div class="category-card-project text-center">
                                    <div class="category-card-img-project">
                                        <img class="img-fluid-50" src="<?= base_url().$value->icon ?>" alt="">
                                    </div>
                                    <div class="category-card-body-project">
                                        <h3><?= $value->nama_kategori?></h3>
                                    </div>
                                </div>
                            </label>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                <?php endif; ?>
            </div>
            <div class="form-group row justify-content-center">
                <button type="submit" class="button btn-succes">Lanjut</button>
            </div>
        </form>

        <!--/panel-group-->
    </div>
</section>
<!--================ Get Started End =================-->





