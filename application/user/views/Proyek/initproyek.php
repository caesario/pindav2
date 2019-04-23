



<!--================ Get Started =================-->
<section class="section-padding" style="padding-top: 10em; padding-bottom: 20em;">
    <div class="container ">
        <div class="section-intro text-center pb-90px">
            <h2>Jenis Proyek</h2>
            <p> Sekut jika ada tanya di hati dan pikiranmuuu...</p>
        </div>
        <form action="<?= site_url('Project/add')?>" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
            <div class="form-group row">
                    <div class="col-md-6 col-lg-6 mb-3 mb-lg-0">
                        <label>
                            <input type="radio" name="product" value="" class="card-input-element" />
                            <div class="jenis-card text-center">
                                <div class="category-card-img">
                                    <img class="img-fluid-50" src="<?= base_url('assets/user/img/home/category.png') ?>" alt="">
                                </div>
                                <div class="jenis-card-body">
                                    <h3>Campaign</h3>
                                </div>
                            </div>

                        </label>
                    </div>
                <div class="col-md-6 col-lg-6 mb-3 mb-lg-0">
                    <label>
                        <input type="radio" name="product" value="" class="card-input-element" />
                        <div class="jenis-card text-center">
                            <div class="category-card-img">
                                <img class="img-fluid-50" src="<?= base_url('assets/user/img/home/category.png') ?>" alt="">
                            </div>
                            <div class="jenis-card-body">
                                <h3>Find Partner</h3>
                            </div>
                        </div>

                    </label>
                </div>
            </div>

            <div class="form-group justify-content-center">
                <button type="submit" class="button btn-succes">Lanjut</button>
            </div>
        </form>

        <!--/panel-group-->
    </div>
</section>
<!--================ Get Started End =================-->





