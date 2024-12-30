<?php 
include 'dbclass.php';
$obj = new database;
?>
<header class="main-header">
    <!--Header-Upper-->
    <div class="header-upper">
        <div class="container">
            <div class="clearfix">
                <!-- Logo Box -->
                <div class="pull-left logo-box">
                    <div class="logo"><a href="<?= $rootUrl; ?>/en/">
							<img src="<?= $rootUrl; ?>/common/images/logo/logo.png" alt="" title=""></a>
					</div>
                </div>
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation"><span
                                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li <?php echo $PAGE === 'home' ? 'class="current"' : ''; ?>>
                                    <a href="<?= $rootUrl; ?>/en/index.php">Home</a>
                                </li>
                                
                                <li class="current dropdown"><a href="#">About Us</a>
                                    <ul>
                                        <li <?php echo $PAGE === 'about-us' ? 'class="current"' : ''; ?>><a href="<?= $rootUrl; ?>/en/about-us.php">About Us</a></li>
                                        <li <?php echo $PAGE === 'our-team' ? 'class="current"' : ''; ?>><a href="<?= $rootUrl; ?>/en/team.php">Our Team</a></li>
                                    </ul>
                                </li>
                                <li <?php echo $PAGE === 'services' ? 'class="current"' : ''; ?>>
                                    <a href="<?= $rootUrl; ?>/en/services.php">Services</a>
                                </li>
                                <li <?php echo $PAGE === 'portfolio' ? 'class="current"' : ''; ?>>
                                    <a href="<?= $rootUrl; ?>/en/portfolio.php">News</a>
                                </li>
                                <li <?php echo $PAGE === 'contact-us' ? 'class="current"' : ''; ?>>
                                    <a href="<?= $rootUrl; ?>/en/contact-us.php">Contact us</a>
                                </li>
                                <li><a class="arabic-font arabic-font-bold" href="<?= $rootUrl; ?>/ar">عربي</a></li>
                            </ul>
                        </div>
                        
                    </nav>
                    

                    <div class="outer-box">

                        <div class="nav-toggler">
                            <div class="nav-btn hidden-bar-opener"><span class="flaticon-menu"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->
    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="<?= $rootUrl; ?>/en/" class="img-responsive"><img src="<?= $rootUrl; ?>/common/images/logo/logo.png"
                                                                alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="right-col pull-right">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                        <ul class="navigation clearfix">
                            <li <?php echo $PAGE === 'home' ? 'class="current"' : ''; ?>>
                                <a href="<?= $rootUrl; ?>/en/index.php">Home</a>
                            </li>
                            <li <?php echo $PAGE === 'about-us' ? 'class="current"' : ''; ?>>
                                <a href="<?= $rootUrl; ?>/en/about-us.php">About Us</a>
                            </li>
                            <li <?php echo $PAGE === 'services' ? 'class="current"' : ''; ?>>
                                <a href="<?= $rootUrl; ?>/en/services.php">Services</a>
                            </li>
                            <li <?php echo $PAGE === 'portfolio' ? 'class="current"' : ''; ?>>
                                <a href="<?= $rootUrl; ?>/en/portfolio.php">Portfolio</a>
                            </li>
                            <li <?php echo $PAGE === 'contact-us' ? 'class="current"' : ''; ?>>
                                <a href="<?= $rootUrl; ?>/en/contact-us.php">Contact us</a>
                            </li>

                            <li><a class="arabic-font arabic-font-bold" href="<?= $rootUrl; ?>/ar">عربي</a></li>

                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>

        </div>
    </div>
    <!--End Sticky Header-->
</header>
<!--End Main Header -->