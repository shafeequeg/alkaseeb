<?php
$PAGE_TITLE = "Contact Us";
$PAGE = "contact-us";
require_once __DIR__ . '/../common/includes/header.php'; ?>

<div class="page-wrapper">

	<!-- Preloader -->
	<!-- <div class="preloader"></div> -->

	<!-- Main Header-->
	<?php include('includes/header.php') ?>
	<!--End Main Header -->

	<!--Form Back Drop-->
	<div class="form-back-drop"></div>

	<!-- Hidden Navigation Bar -->
	<?php include('includes/hidden-nav.php') ?>
	<!-- End / Hidden Bar -->

	<!--Page Title-->
	<section class="page-title" style="background-image:url(<?= $rootUrl; ?>/common/images/background/4.jpg)">
		<div class="container">
			<div class="content">
				<h1>اتصل بنا</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">الصفحة الرئيسية</a></li>
					<li>اتصل بنا</li>
				</ul>
			</div>
		</div>
	</section>
	<!--End Page Title-->

	<!-- Contact Page Section -->
	<section class="contact-page-section">
		<div class="map-section">
			<!--Map Outer-->
			<div class="map-outer">
				<!--Map Canvas-->
				<div class="map-canvas"
					 data-zoom="12"
					 data-lat="-37.817085"
					 data-lng="144.955631"
					 data-type="roadmap"
					 data-hue="#ffc400"
					 data-title="Envato"
					 data-icon-path="images/icons/map-marker.png"
					 data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="inner-container">
				<h2>تصل بموظفي الدعم لدينا أو حدد موعدًا مع مستشارنا</h2>
				<div class="row clearfix">

					<!-- Info Column -->
					<div class="info-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="text">اتصل الاتصال بنا باستخدام المعلومات أدناه. للحصول على معلومات إضافية حول خدمات الاستشارات الإدارية لدينا، يرجى زيارة الصفحة المناسبة على موقعنا.</div>
							<ul class="list-style-six">
							<li><span class="icon fa fa-building"></span>بناية مزون الغانم رقم١٤١ الجرف طابق الخامس مكتب رقم ٥٠٢
 مقابل محكمة عجمان</li>
								<li><span class="icon fa fa-fax"></span>+971 6 744 6412</li>
								<li><span class="icon fa fa-whatsapp"></span>0553579619, 0569522499</li>
								<li><span class="icon fa fa-envelope-o"></span>support@alkaaseblawyers.com</li>
							</ul>
						</div>
					</div>

					<!-- Form Column -->
					<div class="form-column col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column">

							<!--Contact Form-->
							<div class="contact-form">
								<form method="post" action="sendemail.php" id="contact-form">

									<div class="form-group">
										<input type="text" name="firstname" value="" placeholder="الاسم الأول:" required>
									</div>

									<div class="form-group">
										<input type="text" name="email" value="" placeholder="عنوان البريد الإلكتروني:" required>
									</div>

									

									<div class="form-group">
										<textarea name="message" placeholder="الرسالة:"></textarea>
									</div>

									<div class="form-group">
										<button type="submit" class="theme-btn btn-style-one">إرسال:</button>
									</div>

								</form>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Team Page Section -->

	<!-- Contact Info Section -->

	<!-- End Contact Info Section -->

	<!--Main Footer-->
	<?php include('includes/footer.php') ?>

</div>
<!--End pagewrapper-->

<?php require_once __DIR__ . '/../common/includes/footer.php'; ?>
