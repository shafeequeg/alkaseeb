<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" >
<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title> Alkaaseb | Admin</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <link href="<?php echo base_url()?>template/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url()?>template/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="<?php echo base_url()?>template/assets/demo/demo2/media/img/logo/logo.png" width="200px"/>
</head>
<!-- end::Head -->
<!-- end::Body -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--singin m-login--2 m-login-2--skin-1" id="m_login" style="background-image: url();">
        <div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
            <div class="m-login__container">
                <div class="m-login__logo">
                    <a href="#">
                        <img  src="<?php echo base_url()?>template/assets/demo/demo2/media/img/logo/logo.png" width="200px">
                    </a>
                </div>
                <div class="m-login__signin">
                    
                    <form class="m-login__form m-form" action="<?php echo base_url()?>admin_login/process" method="post">
                        <?php if ($this->session->flashdata('flashdata_msg') != "")
                        {?>
                            <div class="alert alert-<?php echo $this->session->flashdata('alert_type')?> alert-dismissible fade show   m-alert m-alert--air m-alert--outline m-alert--outline-2x" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                <strong>
                                    <?php echo $this->session->flashdata('flashdata_title')?>
                                </strong>
                                <?php echo $this->session->flashdata('flashdata_msg')?>
                            </div>
                        <?php } ?>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" style="color: #0d0e0d;" type="text" placeholder="Email" name="email" autocomplete="off" required="required">
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password" required="required">
                        </div>
                        <input type="hidden" name="panel" value="1">
                        
                        <div class="m-login__form-action">
                            <button class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
                                Sign In
                            </button>
                        </div>
                    </form>
                </div>
                <div class="m-login__forget-password">
                    <div class="m-login__head">
                        <h3 class="m-login__title">
                            Forgotten Password ?
                        </h3>
                        <div class="m-login__desc">
                            Enter your email to reset your password:
                        </div>
                    </div>
                    <form class="m-login__form m-form" action="">
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
                        </div>
                        <div class="m-login__form-action">
                            <button id="m_login_forget_password_submit" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
                                Request
                            </button>
                            &nbsp;&nbsp;
                            <button id="m_login_forget_password_cancel" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
                <!-- <div class="m-login__account">
							<span class="m-login__account-msg">
								Powered By
							</span>
                    &nbsp;&nbsp;
                    <a href="http://willowy.in" target="_blank" class="m-link m-link--light ">
                       Willowy Solutions
                    </a>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- end:: Page -->
<!--begin::Base Scripts -->
<script src="<?php echo base_url()?>template/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>template/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<!--end::Base Scripts -->
<!--begin::Page Snippets -->
<?php $this->view("custom_scripts/login");?>
<!--end::Page Snippets -->
</body>
<!-- end::Body -->
</html>

