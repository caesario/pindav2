<?php $this->load->view('layout/header.php')?>
<!-- Style tambahan -->



<!--===============================================================================================-->

<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">

<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/user/css/login.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/mainlogin.css'); ?>">
<!--===============================================================================================-->
</head>


<body>

<!-- -->

<!-- Brand/logo -->
<a href="<?= site_url('/') ?>" class="m-l-11"><i class="fa fa-arrow-left"></i>  Kembali Ke Beranda</a>

<!-- -->






<!-- -->

<!-- Halaman Login -->

<?php if ($this->session->flashdata('daftar_berhasil')) { ?>
    <div class="container ">
        <div class="alert alert-success text-center "> <?= $this->session->flashdata('daftar_berhasil') ?> </div>
    </div>
<?php }  ?>
<?php if ($this->session->flashdata('daftar_gagal')) { ?>
    <div class="container">
        <div class="alert alert-danger text-center"> <?= $this->session->flashdata('daftar_gagal') ?> </div>
    </div>
<?php } ?>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-30 p-b-20">
            <form class="login100-form validate-form" method="post" action="<?= site_url('Auth/daftar')?>">
					<span class="login100-form-title p-b-40">
						DAFTAR
					</span>


                <div class="wrap-input100 validate-input m-b-30" data-validate = "Enter username">
                    <input class="input100" type="text" name="username">
                    <span class="focus-input100" data-placeholder="Nama Akun"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-30" data-validate="Enter password">
                    <input class="input100" type="password" name="pass">
                    <span class="focus-input100" data-placeholder="Kata Sandi"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-30" data-validate="Enter password">
                    <input class="input100" type="password" name="passkonf">
                    <span class="focus-input100" data-placeholder="Konfirmasi Kata Sandi"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-30" data-validate="Enter Full Name">
                    <input class="input100" type="text" name="namalengkap">
                    <span class="focus-input100" data-placeholder="Nama Lengkap"></span>
                </div>



                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        DAFTAR
                    </button>
                </div>

                <ul class="login-more p-t-30">


                    <li>
							<span class="txt1">
								Sudah Punya Akun?
							</span>


                        <a href="<?= site_url('login')?>" class="txt2">
                            Masuk
                        </a>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->

<?php $this->load->view('layout/footer.php')?>
<!--===============================================================================================-->
<script src="<?= base_url('assets/user/js/loginjs.js'); ?>"></script>


<!-- Halaman Login -->



</body>
</html>