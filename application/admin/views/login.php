
<div>
    <?php echo validation_errors(); ?>

    <?php if(!empty($errors)) {
        echo $errors;
    } ?>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="<?php echo base_url('Auth/login') ?>" method="post">
                    <h1>Login</h1>
                    <div>
                        <input type="email" name="email" class="form-control" placeholder="email" required="" autocomplete="off" />
                    </div>
                    <div>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-default btn-block btn-flat">Sign In</button>

                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <!--                        <p class="change_link">New to site?-->
                        <!--                            <a href="#signup" class="to_register"> Create Account </a>-->
                        <!--                        </p>-->

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-cube"></i> Pinda</h1>
                            <p>©2019 All Rights Reserved by Orateges. Pinda is a Platform for freelancer. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>

        <div id="register" class="animate form registration_form">
            <section class="login_content">
                <form>
                    <h1>Create Account</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Username" required="" />
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="Email" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <a class="btn btn-default submit" href="index.html">Submit</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">Already a member ?
                            <a href="#signin" class="to_register"> Log in </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>

