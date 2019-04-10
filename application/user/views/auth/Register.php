<?php $this->load->view('layout/header.php'); ?>
<link rel="stylesheet" href="<?= base_url('assets/user/auth/css/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<link rel="stylesheet" href="<?= base_url('assets/user/auth/css/iconic/css/material-design-iconic-font.min.css')?>">
<link rel="stylesheet" href="<?= base_url('assets/user/auth/css/main.css')?>">
<link rel="stylesheet" href="<?= base_url('assets/user/auth/css/util.css')?>">

</head>
<body>
<!--================ Header Menu Area start =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">

                <a href="<?= site_url('/') ?>" class="navbar-brand text-small" style="font-size: 15px"><i class="fa fa-arrow-left"></i>  Kembali Ke Beranda</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-center">
                    </ul>
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        <li class="nav-item"><a class="nav-link" href="about.html" disabled="">Punya Akun? </a></li>
                        <li class="nav-item" style="padding-top: 5%;"><a class="buttonpost pt-2 pb-2 pr-4 pl-4 nav-link"  href="package.html">Login</a>

                    </ul>
                </div>
            </div>
        </nav>

    </div>
</header>
<!--================Header Menu Area =================-->

<!--================ Header Menu Area start =================-->
<!-- Data Pinda -->
<section class="pt-5">
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-5">
              <div class="limiter">
                  <div class="container-login100">
                      <div class="wrap-login100">
                          <form class="login100-form validate-form">

                              <span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

                              <div class="wrap-input100 validate-input" data-validate = "Enter username">
                                  <input class="input100" type="text" name="username" placeholder="Username">
                                  <span class="focus-input100" data-placeholder="&#xf207;"></span>
                              </div>

                              <div class="wrap-input100 validate-input" data-validate="Enter password">
                                  <input class="input100" type="password" name="pass" placeholder="Password">
                                  <span class="focus-input100" data-placeholder="&#xf191;"></span>
                              </div>

                              <div class="contact100-form-checkbox">
                                  <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                  <label class="label-checkbox100" for="ckb1">
                                      Remember me
                                  </label>
                              </div>

                              <div class="container-login100-form-btn">
                                  <button class="login100-form-btn">
                                      Login
                                  </button>
                              </div>

                              <div class="text-center p-t-90">
                                  <a class="txt1" href="#">
                                      Forgot Password?
                                  </a>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
</section>
<!-- End Data Pinda -->
<!--================Header Menu Area =================-->
<?php $this->load->view('layout/footer.php'); ?>
<link rel="stylesheet" href="<?= base_url('assets/user/auth/js/jquery/jquery-3.2.1.min.js')?>">
<link rel="stylesheet" href="<?= base_url('assets/user/auth/js/main.js')?>">
</body>
</html>

