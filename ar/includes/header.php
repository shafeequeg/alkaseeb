<?php 
include 'dbclass.php';
$obj = new database;
?>
<header class="main-header arabic-header">
	<!--Header-Upper-->
	<div class="header-upper">
		<div class="container">
			<div class="clearfix">
				<!-- Logo Box -->
				<div class="pull-left logo-box">
					<div class="logo"><a href="<?= $rootUrl; ?>/ar">
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

								<li><a href="<?= $rootUrl; ?>/en">English</a></li>
<!--								contact-->
								<li <?php echo $PAGE === 'contact-us' ? 'class="current"' : ''; ?>>
									<a class="arabic-font arabic-font-bold" href="<?= $rootUrl; ?>/ar/contact-us.php">اتصل بنا</a>
								</li>
<!--								portfolio-->
								<li <?php echo $PAGE === 'portfolio' ? 'class="current"' : ''; ?>>
									<a class="arabic-font arabic-font-bold" href="<?= $rootUrl; ?>/ar/portfolio.php">أخبار</a>
								</li>
<!--								// services-->
								<li <?php echo $PAGE === 'services' ? 'class="current"' : ''; ?>>
									<a class="arabic-font arabic-font-bold" href="<?= $rootUrl; ?>/ar/services.php">خدمات</a>
								</li>
<!--								about us-->
								<li <?php echo $PAGE === 'about-us' ? 'class="current"' : ''; ?>>
									<a class="arabic-font arabic-font-bold" href="<?= $rootUrl; ?>/ar/about-us.php">معلومات عنا</a>
								</li>

								<li class="current dropdown"><a href="#">معلومات عنا</a>
                                    <ul>
                                        <li <?php echo $PAGE === 'about-us' ? 'class="current"' : ''; ?>><a class="arabic-font arabic-font-bold" href="<?= $rootUrl; ?>/ar/about-us.php">معلومات عنا</a></li>
                                        <li <?php echo $PAGE === 'our-team' ? 'class="current"' : ''; ?>><a class="arabic-font arabic-font-bold" href="<?= $rootUrl; ?>/ar/team.php">فريقنا</a></li>
                                    </ul>
                                </li>

<!--								Home-->
								<li <?php echo $PAGE === 'home' ? 'class="current"' : ''; ?>>
									<a class="arabic-font arabic-font-bold" href="<?= $rootUrl; ?>/ar/">الصفحة الرئيسية</a>
								</li>
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

			<!--Right Col-->
			<div class="right-col pull-left">
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
							<li><a href="<?= $rootUrl; ?>/en">English</a></li>
							<!--								contact-->
							<li <?php echo $PAGE === 'contact-us' ? 'class="current"' : ''; ?>>
								<a class="arabic-font arabic-font-bold" href="<?= $rootUrl; ?>/ar/contact-us.php">اتصل بنا</a>
							</li>
							<!--								portfolio-->
							<li <?php echo $PAGE === 'portfolio' ? 'class="current"' : ''; ?>>
								<a class="arabic-font arabic-font-bold" href="<?= $rootUrl; ?>/ar/portfolio.php">مَلَفّ</a>
							</li>
							<!--								// services-->
							<li <?php echo $PAGE === 'services' ? 'class="current"' : ''; ?>>
								<a class="arabic-font arabic-font-bold" href="<?= $rootUrl; ?>/ar/services.php">خدمات</a>
							</li>
							<!--								about us-->
							<li <?php echo $PAGE === 'about-us' ? 'class="current"' : ''; ?>>
								<a class="arabic-font arabic-font-bold" href="<?= $rootUrl; ?>/ar/about-us.php">معلومات عنا</a>
							</li>
							<!--								Home-->
							<li <?php echo $PAGE === 'home' ? 'class="current"' : ''; ?>>
								<a class="arabic-font arabic-font-bold" href="<?= $rootUrl; ?>/ar/">الصفحة الرئيسية</a>
							</li>

						</ul>
					</div>
				</nav><!-- Main Menu End-->
			</div>

			<div class="logo pull-right">
				<a href="<?= $rootUrl; ?>/ar/" class="img-responsive"><img src="<?= $rootUrl; ?>/common/images/logo/logo.png"
																alt="" title=""></a>
			</div>

		</div>
	</div>
	<!--End Sticky Header-->
</header>
<!--End Main Header -->