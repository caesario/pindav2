



<!--================ Get Started =================-->
<section class="section-padding" style="padding-top: 10em; padding-bottom: 20em;">
    <div class="container ">
            <ul class="progressbar">
                <li class="active">Pilih Kategori</li>
                <li class="active">Informasi Umum</li>
                <li class="">Estimasi Waktu & Tim</li>
                <li>Informasi Tambahan & Pembayaran</li>
            </ul>
        <div class="section-intro text-center pb-90px">
            <h2>Deskripsikan Apa Yang Kamu Butuhkan</h2>
            <p> Jelaskan Proyek Kamu</p>
        </div>
        <form action="<?= site_url('Project/add')?>" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
           <div class="card col-md-8 container p-4">
               <div class="form-group">
                   <div class="row">
                       <div class="col-md-4">
                           <label for="">Nama Proyek</label>
                       </div>
                       <div class="col-md-8">
                           <input type="text" class="form-control" placeholder="Masukkan Nama Proyek Anda">
                       </div>
                   </div>
                   <br>
                   <div class="row">
                       <div class="col-md-4">
                           <label for="">Deskripsikan Proyek Anda</label>
                       </div>
                       <div class="col-md-8">
                          <textarea class="form-control" rows="5" placeholder="Deskripsikan Proyek Anda"></textarea>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-md-4">
                           <label for="">Upload File</label>
                       </div>
                       <div class="col-md-8">
                           <div class="example">
                               <div id="drop_zone">Drop files here</div>
                               <output id="file_list2"></output>
                           </div>

                       </div>
                       <output id="list"></output>
                       <br>
                       <br>
                       <br>

                   </div>
               </div>

           </div>
            <div class="form-group row justify-content-center mt-5">
                <button type="submit" class="button btn-succes">Lanjut</button>
            </div>
        </form>

        <!--/panel-group-->
    </div>
</section>
<!--================ Get Started End =================-->





