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
    <link rel="stylesheet" href="<?= base_url('assets/user/css/smart_wizard.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/user/css/smart_wizard_theme_circles.css')?>">
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
                        <li class="nav-item"><a class="nav-link" href="package.html">Tata Cara</a></li>
                        <li class="nav-item"><a class="nav-link" href="package.html">Tentang Pinda</a>


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
<!-- Data Pinda -->
<section class="section-padding">
    <div class="container">
        <div class="row"><br>
            <div class="col-md-12">
                <div class="progress">
                    <div class="bar-step" style="left: 40%">
                        <div class="label-txt">Nice long text for test</div>
                        <div class="label-percent">75%</div>
                        <div class="label-line"></div>

                    </div>
                    <div class="bar-step" style="left: 20%">
                        <div class="label-txt">Adam Bray Mark</div>
                        <div class="label-percent">10%</div>
                        <div class="label-line"></div>
                    </div>
                    <div class="bar-step" style="left: 60%">
                        <div class="label-txt">Testing 123</div>
                        <div class="label-percent">55%</div>
                        <div class="label-line"></div>
                    </div>
                    <div class="bar-step" style="left: 80%">
                        <div class="label-txt">Testing 123</div>
                        <div class="label-percent">55%</div>
                        <div class="label-line"></div>
                    </div>
                    <div class="progress-bar progress-bar-success" style="width: 25%;">46%</div>
                </div>
            </div>
        </div>

        <div class="section-intro text-center pb-5">
            <h2>Konten Apakah Yang Kamu Butuhkan?</h2>
            <p> Pilih kategori Konten</p>
        </div>
        <form action="#" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-3 mb-lg-0 justify-content-center">
                    <label>
                        <input type="radio" name="product" value="" class="card-input-element" />
                        <div class="category-card  text-center">
                            <div class="category-card-img">
                                <img class="img-fluid-50" src="<?= base_url('assets/user/img/home/category.png') ?>" alt="">
                            </div>
                            <div class="category-card-body">
                                <h3>Logo</h3>
                            </div>
                        </div>

                    </label>
                </div>
            </div>
        </form>
    </div>
</section>






<script src="<?= base_url('assets/user/vendors/jquery/jquery-3.2.1.min.js') ?>"></script>
<script src="<?= base_url('assets/user/vendors/bootstrap/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/user/vendors/owl-carousel/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('assets/user/vendors/nice-select/jquery.nice-select.min.js')?>"></script>
<script src="<?= base_url('assets/user/js/jquery.ajaxchimp.min.js') ?>"></script>
<script src="<?= base_url('assets/user/js/mail-script.js')?>"></script>
<script src="<?= base_url('assets/user/js/main.js') ?>"></script>
<script src="<?= base_url('assets/user/js/jquery.smartWizard.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>


<script>
</script>
</body>
</html>