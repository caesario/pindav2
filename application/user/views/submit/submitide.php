



<!--================ Get Started =================-->
<section class="section-padding" style="padding-top: 10em; padding-bottom: 20em;">
    <div class="container ">
        <div class="section-intro text-center pb-90px">
            <h2>Submit Ide / Saran</h2>
            <p> <?php if ($proyek->jenis == 1) : ?> <?= 'Campaign' ?> <?php elseif ($proyek->jenis == 2 ) : ?> <?= 'Find Partner' ?> <?php endif;?> - <?= $proyek->nama_proyek?></p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card  ">
                    <h3 class="bg-gray p-3 text-center">Ringkasan Proyek</h3>
                   <div class="p-3">
                       <h3>Nama Proyek</h3>
                       <p class="small"><?php if ($proyek->jenis == 1) : ?> <?= 'Campaign' ?> <?php elseif ($proyek->jenis == 2 ) : ?> <?= 'Find Partner' ?> <?php endif;?> - <?= $proyek->nama_proyek?></p>
                       <h3>Deskripsi</h3>
                       <p class="small">
                           <?= $proyek->detail_proyek ?>
                       </p>
                       <h3>Batas Waktu</h3>
                       <p class="small"><?= $sisawaktu?> Hari Lagi</p>
                       <h3>Nilai Pembayaran</h3>
                       <p class="small">Rp <?= $proyek->nilai_pembayaran?></p>
                   </div>
                </div>
                <br>
            </div>
            <div class="col-md-8">
                <div class="card p-4">
                    <form action="">
                        <div class="form-group">
                            <h3>ID User</h3>
                            <input type="text" class="form-control w-50" disabled>
                        </div>
                        <div class="form-group">
                            <h3>Nama User</h3>
                            <input type="text" class="form-control w-50" disabled>
                        </div>
                        <div class="form-group">
                            <h3>Ide / Saran</h3>
                            <textarea class="form-control" rows="10" placeholder="Deskripsikan Ide dan Saran Anda"></textarea>
                        </div>
                        <div class="form-group float-right">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>

                </div>
        </div>
        </div>
    <br>

        <!--/panel-group-->
    </div>
</section>
<!--================ Get Started End =================-->





