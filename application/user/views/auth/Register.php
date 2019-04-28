<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pinda - <?= $page_title; ?></title>
    <link rel="icon" href="<?= base_url('assets/user/img/pindaic.png') ?>" type="image/png">
    <link rel="stylesheet" href="<?= base_url('assets/user/vendors/bootstrap/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/user/vendors/fontawesome/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/user/vendors/owl-carousel/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/user/vendors/owl-carousel/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/user/vendors/flat-icon/font/flaticon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/user/vendors/nice-select/nice-select.css')?>">

    <link rel="stylesheet" href="<?= base_url('assets/user/css/style.css')?>">


<body style="height: 0% !important;">

<!-- Content    -->
<header class="header_area" style="margin-bottom: 20em">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
                <a class="navbar-brand logo_h" style="font-size: 1em;" href="<?= site_url('Home')?>"><i class="fa fa-arrow-left"></i> Kembali Ke Beranda</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-center">
                        <li class="nav-item title-login" ><a class="nav-link" href="<?= site_url('About')?>">PINDA</a>


                    </ul>
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        <li class="nav-item"><p class="nav-link m-0">Sudah Punya Akun?</p></li>
                        <li class="nav-item" style="padding-top: 5%;"><a class="buttonpost p-2 nav-link "  href="package.html">Masuk Kuy!</a>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<div class="container" style="margin-top: 13em">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form action="">
                <div class="form-group">
                    <label for="inp" class="inp mb-2">
                        <div class="row">
                            <div class="col-1 d-flex align-self-center text-center p-2 pt-3">
                                <i class="fa fa-user mt-2 mr-5"></i>
                            </div>
                            <div class="col-10 p-0">
                                <input type="text" id="inp" class="inline" placeholder="&nbsp;">
                                <span class="label">Username</span>
                                <span class="border"></span>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="form-group">
                    <label for="password" class="inp mb-2">
                        <div class="row">
                            <div class="col-1 d-flex align-self-center text-center p-2 pt-3">
                                <i class="fa fa-lock mt-2 mr-5"></i>
                            </div>
                            <div class="col-10 p-0">
                                <input type="text" id="password" class="inline" placeholder="&nbsp;">
                                <span class="label">Password</span>
                                <span class="border"></span>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="form-group">
                    <label for="passwordkonf" class="inp mb-2">
                        <div class="row">
                            <div class="col-1 d-flex align-self-center text-center p-2 pt-3">
                                <i class="fa fa-lock mt-2 mr-5"></i>
                            </div>
                            <div class="col-10 p-0">
                                <input type="text" id="passwordkonf" class="inline" placeholder="&nbsp;">
                                <span class="label">konfirmasi kata Sandi</span>
                                <span class="border"></span>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="form-group">
                    <label for="fullname" class="inp mb-2">
                        <div class="row">
                            <div class="col-1 d-flex align-self-center text-center p-2 pt-3">
                                <i class="fa fa-signature mt-2 mr-5"></i>
                            </div>
                            <div class="col-10 p-0">
                                <input type="text" id="fullname" class="inline" placeholder="&nbsp;">
                                <span class="label">Nama Lengkap</span>
                                <span class="border"></span>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="form-group">
                    <label for="phone" class="inp mb-2">
                        <div class="row">
                            <div class="col-1 d-flex align-self-center text-center p-2 pt-3">
                                <i class="fa fa-phone-square mt-2 mr-5"></i>
                            </div>
                            <div class="col-10 p-0">
                                <input type="text" id="fullname" class="inline" placeholder="&nbsp;">
                                <span class="label">Nomor Telepon</span>
                                <span class="border"></span>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="form-group float-right mb-5 mr-2">
                    <button type="submit" class="btn btn-sm bg-info text-white pl-3 pr-3 pt-2 pb-2">
                        Daftar
                    </button>
                </div>


            </form>
        </div>

    </div>
</div>







<!-- Footer-->

<script src="<?= base_url('assets/user/vendors/jquery/jquery-3.2.1.min.js') ?>"></script>
<script src="<?= base_url('assets/user/vendors/bootstrap/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/user/vendors/owl-carousel/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('assets/user/vendors/nice-select/jquery.nice-select.min.js')?>"></script>
<script src="<?= base_url('assets/user/js/jquery.ajaxchimp.min.js') ?>"></script>
<script src="<?= base_url('assets/user/js/mail-script.js')?>"></script>
<script src="<?= base_url('assets/user/js/main.js') ?>"></script>


<!-- Datatables -->

<script src="<?= base_url('assets/admin/vendors/datatables.net/js/jquery.dataTables.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js')?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')?>"></script>

<script src="<?= base_url('assets/admin/vendors/jszip/dist/jszip.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/pdfmake/build/pdfmake.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/vendors/pdfmake/build/vfs_fonts.js') ?>"></script>
</body>
</html>