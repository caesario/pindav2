



<!--================ Get Started =================-->
<section class="bg-gray section-padding" style="padding-top: 13em; padding-bottom: 20em;">
    <div class="container">
        <div class="section-intro text-center pb-90px">
            <h2>Kategori</h2>
            <p> Kategori Proyek</p>
        </div>
        <div class="form-group">
            <input type="text" name="searchbox" id="searchbox" class="filterinput form-control col-md-4" placeholder="Cari Kategori">
        </div>
        <div class="row" id="searchcard">
            <?php if ($category != null ) : ?>
                <?php foreach ($category as $cat => $value) : ?>
                    <div class="col-md-6 col-lg-3 mb-3 mb-lg-0 justify-content-center" id="card" data-role="kategori">
                        <a href="<?= site_url('Category/search/'.$value->nama_kategori)?>">
                            <div class="category-card  text-center">
                                <div class="category-card-img">
                                    <img class="img-fluid-50" src="<?= base_url().$value->icon ?>" alt="">
                                </div>
                                <div class="category-card-body">
                                    <h3><?= $value->nama_kategori?></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!--================ Get Started End =================-->





