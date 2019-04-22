<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pinda - Home</title>
    <link rel="icon" href="<?= base_url('assets/user/img/pindaic.png') ?>" type="image/png">

    <link rel="stylesheet" href="<?= base_url('assets/user/vendors/bootstrap/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/user/vendors/fontawesome/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/user/endors/themify-icons/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/user/vendors/linericon/style.') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/user/vendors/owl-carousel/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/user/vendors/owl-carousel/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/user/vendors/flat-icon/font/flaticon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/user/vendors/nice-select/nice-select.css')?>">

    <link rel="stylesheet" href="<?= base_url('assets/user/css/style.css')?>">
</head>
<body class="bg-shape">

<!--================ Header Menu Area start =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
                <a class="navbar-brand logo_h" href="index.html"><img src="<?= base_url('assets/user/img/logo.png')?>" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-start">
                        <li class="nav-item"><a class="nav-link" href="index.html">Kategori</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">Semua Proyek</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= site_url('FAQ')?>">Tata Cara</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= site_url('About')?>">Tentang Pinda</a>


                    </ul>
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        <li class="nav-item"><a class="nav-link" href="index.html">Masuk</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">Daftar</a></li>
                        <li class="nav-item" style="padding-top: 5%;"><a class="buttonpost p-2 nav-link"  href="package.html">Buat Proyek</a>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->


<!--================Hero Banner Area Start =================-->
<section class="hero-banner">
    <div class="container">

        <div class="row align-items-center text-center text-md-center">
            <div class="col-md-12 col-lg-12 mb-12 mb-md-0 mt-5">
                <h1>KUY! Selesaikan Lebih Banyak Hal Bersama</h1>
                <p>Buat Proyek Konten mu dan Selesaikan bersama-sama</p>
                <a class="button button-hero mt-4" href="#">Mulai!</a>
            </div>

        </div>

        <div class="row align-items-center text-center text-md-center justify-content-center">
            <div class="col-md-12 col-lg-12 mb-12 mb-md-0">
                <img class="img-fluid img-hero mx-auto d-block" src="<?= base_url('assets/user/img/support.png') ?>" alt="">
            </div>
        </div>

    </div>
</section>
<!--================Hero Banner Area End =================-->



<!-- Data Pinda -->
<section class="section-padding pinda-data">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 mb-4 mb-md-0 d-block m-auto">
                <img class="img-fluid mx-auto d-block mb-1" src="<?= base_url('assets/user/img/home/trophy.png')?>" alt="">
                <h3 class="text-center"><?= $total_point[0]->point_reputasi; ?></h3>
                <hr>
                <p class="text-center">Piala</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 mb-4 mb-md-0">
                <img class="img-fluid mx-auto d-block mb-1" src="<?= base_url('assets/user/img/home/user.png')?>" alt="">
                <h3 class="text-center"><?= $total_user;?></h3>
                <hr>
                <p class="text-center">Pengguna</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 mb-4 mb-md-0">
                <img class="img-fluid mx-auto d-block mb-1" src="<?= base_url('assets/user/img/home/submission.png')?>" alt="">
                <h3 class="text-center"><?= $total_submisi?></h3>
                <hr>
                <p class="text-center">Submisi</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 mb-4 mb-md-0">
                <img class="img-fluid mx-auto d-block mb-1" src="<?= base_url('assets/user/img/home/startup.png')?>" alt="">
                <h3 class="text-center"><?= $total_proyek;?></h3>
                <hr>
                <p class="text-center">Proyek Selesai</p>
            </div>
        </div>
    </div>
</section>
<!-- End Data Pinda -->


<!--================About Area Start =================-->
<section class="bg-gray section-padding magic-ball magic-ball-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 mb-4 mb-md-0">
                <div class="about-img">
                    <img class="img-fluid" src="<?= base_url('assets/user/img/home/about-img.png') ?>" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-md-6 align-self-center about-content">
                <h2>Kolaborasi adalah <br class="d-none d-xl-block"> Hal yang Utama <br class="d-none d-xl-block"></h2>
                <p>Tadinya bingung mau nulis apa disini karena kita cuma bertiga dan nggak ada bagian UX writer, Pusing kan? Hasilnya jadi kurang memuaskan, tapi tenang aja sesuai namanya, disini, kami nggak akan biarin kamu kerja sendirian</p>
                <a class="button" href="<?= site_url('About')?>">Boleh Juga!
                </a>
            </div>
        </div>
    </div>
</section>
<!--================About Area End =================-->

<!--================Tour section Start =================-->
<section class="section-margin pb-xl-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-sm-last">
                <a href="">
                    <div class="tour-card">
                        <img class="card-img rounded-0 p-3" src="<?= base_url('assets/user/img/proyekimg/adidas.jpg')?>" alt="">
                        <div class="tour-card-overlay">
                            <div class="media">
                                <div class="media-body">
                                    <h4>Desain Logo Adidas</h4>
                                    <small>5 hari lagi</small>
                                    <p>Desain logo adidas kuy</p>
                                </div>
                                <div class="media-price">
                                    <h4 class="text-primary">Rp. 100.000</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>

            <div class="col-md-6 order-sm-first order-first order-md-last">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="tour-content">
                            <h2>Proyek Terbaru</h2>
                            <p>Kuylah kalo merasa jago. diem diem bae!</p>
                        </div>
                    </div>
                </div>

                <a href="">
                    <div class="tour-card">
                        <img class="card-img rounded-0" src="<?= base_url('assets/user/img/proyekimg/fanta.jpg')?>" alt="">
                        <div class="tour-card-overlay">
                            <div class="media">
                                <div class="media-body">
                                    <h4>Desain logo Fanta</h4>
                                    <small>5 hari lagi</small>
                                    <p>kuylah</p>
                                </div>
                                <div class="media-price">
                                    <h4 class="text-primary">Rp. 1000.000</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-7">
                <div class="tour-card">
                    <img class="card-img rounded-0" src="<?= base_url('assets/user/img/proyekimg/esport.png') ?>" alt="">
                    <div class="tour-card-overlay">
                        <div class="media">
                            <div class="media-body">
                                <h4>Desain Logo Mukhlis Esport</h4>
                                <small>5 hari lagi</small>
                                <p>Kuylah</p>
                            </div>
                            <div class="media-price">
                                <h4 class="text-primary">Rp. 300.000</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="tour-card">
                    <img class="card-img rounded-0" src="<?= base_url('assets/user/img/proyekimg/pepso.png') ?>" alt="">
                    <div class="tour-card-overlay">
                        <div class="media">
                            <div class="media-body">
                                <h4>Buat Video Iklan Pepsi</h4>
                                <small>5 Hari Lagi</small>
                                <p>kuylah</p>
                            </div>
                            <div class="media-price">
                                <h4 class="text-primary">Rp 500.000</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Tour section End =================-->

<!--================ Kategori Area Start =================-->
<section class="bg-gray section-padding">
    <div class="container">
        <div class="section-intro text-center pb-90px">
            <h2>Kategori</h2>
            <p> Kategori Proyek</p>
        </div>

        <div class="row">
            <?php if ($category != null ) : ?>
            <?php foreach ($category as $cat => $value) : ?>
            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0 justify-content-center">
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
<!--================ Kategori Area End =================-->


<!--================Service Area Start =================-->
<section class="section-margin">
    <div class="container">
        <div class="section-intro text-center pb-90px">
            <img class="section-intro-img" src="<?= base_url('assets/user/img/home/panda.png') ?>" alt="">
            <h2>Kenapa PINDA ?</h2>
            <p> Eh emang kenapa sih harus di PINDA?</p>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                <div class="service-card text-center">
                    <div class="service-card-img">
                        <img class="img-fluid-50" src="<?= base_url('assets/user/img/home/group.png') ?>" alt="">
                    </div>
                    <div class="service-card-body">
                        <h3>Buat Sebuah Tim</h3>
                        <p>keterangan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                <div class="service-card text-center">
                    <div class="service-card-img">
                        <img class="img-fluid-50" src="<?= base_url('assets/user/img/home/money.png')?>" alt="">
                    </div>
                    <div class="service-card-body">
                        <h3>Dapatkan Uang</h3>
                        <p>keterangan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                <div class="service-card text-center">
                    <div class="service-card-img">
                        <img class="img-fluid-50" src="<?= base_url('assets/user/img/home/like.png')?>" alt="">
                    </div>
                    <div class="service-card-body">
                        <h3>Dapatkan Tanggapan</h3>
                        <p>keterangan</p>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                <div class="service-card text-center">
                    <div class="service-card-img">
                        <img class="img-fluid-50" src="<?= base_url('assets/user/img/home/chat-1.png') ?>" alt="">
                    </div>
                    <div class="service-card-body">
                        <h3>Diskusi Bersama</h3>
                        <p>keterangan</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--================Service Area End =================-->



<!--================ Get Started =================-->
<section class="section-padding bg-gray">
    <div class="container">
        <div class="section-intro text-center pb-90px">
            <h2>Ayo Mulai!</h2>
            <p> Jangan Diem aja nanti dilalerin cuy </p>
        </div>
        <div class="row">
            <div class="col-lg-3 6col-md-6 col-sm-6 col-6 mb-4 mb-md-0 d-block m-auto text-center">
                <img class="img-fluid mx-auto d-block mb-1" src="<?= base_url('assets/user/img/home/man.png')?>" alt="">
                <h3 class="text-center">Saya Adalah Pembuat Proyek</h3>
                <p class="text-center small">Selesaikan Proyek anda dengan mudah<</p>
                <a href="" class="button">Daftar</a>
            </div>
            <div class="col-lg-3 6col-md-6 col-sm-6 col-6 mb-4 mb-md-0 d-block m-auto text-center">
                <img class="img-fluid mx-auto d-block mb-1" src="<?= base_url('assets/user/img/home/boy.png')?>" alt="">
                <h3 class="text-center">Saya Adalah Pekerja Lepas</h3>
                <p class="text-center small">Dapatkan Uang dengan menyelesaikan proyek</p>
                <a href="" class="button">Daftar</a>
            </div>
        </div>
    </div>
</section>
<!--================ Get Started End =================-->

<!--================ Testimoni =================-->
<section class="section-padding">
    <div class="container">
        <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-4 mb-md-0 d-block m-auto text-center">
                    <div class="section-intro text-center pb-90px">
                        <h2>Testimoni</h2>
                        <p> Jangan Diem aja nanti dilalerin cuy</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-4 mb-md-0 d-block m-auto text-center">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial">
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit dui non.
                            </p>
                            <div class="pic">
                                <img src="<?= base_url('assets/user/img/home/panda.png')?>" alt="">
                            </div>
                            <h3 class="title">WILLIAMSON</h3>
                            <span class="post">Web Developer</span>
                        </div>
                        <div class="testimonial">
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit dui non.
                            </p>
                            <div class="pic">
                                <img src="<?= base_url('assets/user/img/home/panda.png')?>" alt="">
                            </div>
                            <h3 class="title">kristina</h3>
                            <span class="post">Web Designer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Testimoni End =================-->




<!--================Blog section Start =================-->
<section class="section-padding bg-gray">
    <div class="container">
        <div class="section-intro text-center pb-90px">
            <img class="section-intro-img" src="<?= base_url('assets/user/img/home/panda.png')?>" alt="">
            <h2>Pinda Artikel</h2>
            <p>Membaca jendela dunia (katanya)</p>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card-blog">
                    <img class="card-img rounded-0" src="<?= base_url('assets/user/img/blog/blog-1.png') ?>" alt="">
                    <div class="card-blog-body">
                        <a href="#">
                            <h4>Forest responds to consultation smoking in al fresco.</h4>
                        </a>
                        <ul class="card-blog-info">
                            <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a></li>
                            <li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>03 Comments</a></li>
                        </ul>
                        <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent vehicula parturient </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card-blog">
                    <img class="card-img rounded-0" src="<?= base_url('assets/user/img/blog/blog-2.png')?>" alt="">
                    <div class="card-blog-body">
                        <a href="#">
                            <h4>Forest responds to consultation smoking in al fresco.</h4>
                        </a>
                        <ul class="card-blog-info">
                            <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a></li>
                            <li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>03 Comments</a></li>
                        </ul>
                        <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent vehicula parturient </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card-blog">
                    <img class="card-img rounded-0" src="<?= base_url('assets/user/img/blog/blog-3.png') ?>" alt="">
                    <div class="card-blog-body">
                        <a href="#">
                            <h4>Forest responds to consultation smoking in al fresco.</h4>
                        </a>
                        <ul class="card-blog-info">
                            <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a></li>
                            <li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>03 Comments</a></li>
                        </ul>
                        <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent vehicula parturient </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog section End =================-->


<!-- ================ start footer Area ================= -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Tentang Pinda</h6>
                    <p>
                        Pinda Adalah
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Menu</h6>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li><a href="<?= site_url('Home')?>">Beranda</a></li>
                                <li><a href="#">Semua Proyek</a></li>
                                <li><a href="<?= site_url('FAQ')?>">Tata Cara</a></li>
                                <li><a href="<?= site_url('About')?>">Tentang</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="#">Tim</a></li>
                                <li><a href="#">Artikel</a></li>
                                <li><a href="<?= site_url('Contact')?>">Kontak</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Kategori Proyek</h6>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li><a href="#">Logo Desain</a></li>
                                <li><a href="#">Video</a></li>
                                <li><a href="#">Web Desain</a></li>
                                <li><a href="#">Portfolio</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="#">Photo</a></li>
                                <li><a href="#">Icon</a></li>
                                <li><a href="#">Poster</a></li>
                                <li><a href="#">Flyer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Mau Jadi Apa kamu di PINDA?</h6>
                    <a href="" class="buttonjoin">
                        Pembuat Proyek
                    </a>
                    <br>
                    <a href="" class="buttonjoin">
                        Pencari Proyek
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="row align-items-center">
                <p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Dibuat Dengan <i class="fa fa-heart" aria-hidden="true"></i> dari Meruya Selatan
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                <div class="col-lg-4 col-sm-12 footer-social text-center text-lg-right">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                    <a href="#"><i class="fab fa-behance"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ================ End footer Area ================= -->




<script src="<?= base_url('assets/user/vendors/jquery/jquery-3.2.1.min.js') ?>"></script>
<script src="<?= base_url('assets/user/vendors/bootstrap/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/user/vendors/owl-carousel/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('assets/user/vendors/nice-select/jquery.nice-select.min.js')?>"></script>
<script src="<?= base_url('assets/user/js/jquery.ajaxchimp.min.js') ?>"></script>
<script src="<?= base_url('assets/user/js/mail-script.js')?>"></script>
<script src="<?= base_url('assets/user/js/main.js') ?>"></script>


<script>
    $(document).ready(function(){
        $("#testimonial-slider").owlCarousel({
            items:1,
            itemsDesktop:[1000,1],
            itemsDesktopSmall:[990,1],
            itemsTablet:[768,1],
            itemsMobile:[650,1],
            pagination:true,
            navigation:false,
            autoPlay:true
        });
    });
</script>
</body>
</html>