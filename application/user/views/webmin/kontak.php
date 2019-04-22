



<!--================ Get Started =================-->
<section class="section-padding" style="padding-top: 10em; padding-bottom: 20em;">
    <div class="container ">
        <div class="section-intro text-center pb-90px">
            <h2>Kontak Kami!</h2>
            <p> Hubungi kami di bawah ini</p>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 mb-4 mb-md-0 d-block m-auto">
                <img class="img-fluid mx-auto d-block mb-1" src="<?= base_url('assets/user/img/kontak/callicon.png')?>" alt="">
                <h3 class="text-center"></h3>
                <hr>
                <p class="text-center"><?= $kontak[0]['telepon'] ?></p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 mb-4 mb-md-0">
                <img class="img-fluid mx-auto d-block mb-1" src="<?= base_url('assets/user/img/kontak/lineicon.png')?>" alt="">
                <h3 class="text-center"></h3>
                <hr>
                <p class="text-center"><?= $kontak[0]['line']?></p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 mb-4 mb-md-0">
                <img class="img-fluid mx-auto d-block mb-1" src="<?= base_url('assets/user/img/kontak/whatsappicon.png')?>" alt="">
                <h3 class="text-center"></h3>
                <hr>
                <p class="text-center"><?= $kontak[0]['whatsapp']?></p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 mb-4 mb-md-0">
                <img class="img-fluid mx-auto d-block mb-1" src="<?= base_url('assets/user/img/kontak/emailicon.png')?>" alt="">
                <h3 class="text-center"></h3>
                <hr>
                <p class="text-center"><?= $kontak[0]['email'] ?></p>
            </div>
        </div>
        <div class="section-intro text-center pb-90px mt-5">
            <p> Masih belum Cukup? ashiaaap....</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h5>Alamat</h5>
                <div class="mapouter"><div class="gmap_canvas"><iframe width="500" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=mercubuana&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Werbung: <a href="https://www.pureblack.de">pureblack.de</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:500px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:500px;}</style></div>
            </div>

            <div class="col-md-6">
                <form action="">
                    <div class="form-group">
                        <h5>Kritik & Saran</h5>
                        <label for="">
                            Nama Anda :
                        </label>
                        <input type="text" class="form-control">
                        <label for="">
                            Nomor Anda :
                        </label>
                        <input type="number" class="form-control">
                        <label for="">
                           Email Anda :
                        </label>
                        <input type="email" class="form-control">
                        <label for="">
                            Pesan Anda :
                        </label>
                        <textarea class="form-control" rows="8" cols="10"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
        <!--/panel-group-->
    </div>
</section>
<!--================ Get Started End =================-->





