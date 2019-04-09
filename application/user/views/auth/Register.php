<?php $this->load->view('layout/header.php'); ?>

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
          <div class="col-md-6">
              <!-- Default form register -->
              <form class="text-center p-5">

                  <p class="h4 mb-4">LOGIN PINDA</p>
                  <input type="text" id="defaultRegisterFormLastName" class="form-control mb-4" placeholder="Last name">
                  <!-- E-mail -->
                  <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

                  <!-- Password -->
                  <input type="password" id="defaultRegisterFormPassword" class="form-control mb-4" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">


                  <!-- Phone number -->
                  <input type="text" id="defaultRegisterPhonePassword" class="form-control mb-4" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">

                  <!-- Sign up button -->
                  <button class="btn float-right w-50 btn-info my-4 btn-block" type="submit">Sign in</button>
                  <br>
                  <!-- Terms of service -->
                  <p>By clicking
                      <em>Sign up</em> you agree to our
                      <a href="" target="_blank">terms of service</a>

              </form>
              <!-- Default form register -->
          </div>
      </div>
    </div>
</section>
<!-- End Data Pinda -->
<!--================Header Menu Area =================-->
<?php $this->load->view('layout/footer.php'); ?>
</body>
</html>

