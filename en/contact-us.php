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
				<h1>Contact</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Contact</li>
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
				<h2>Contact our support guys or make appointment <br> with <span>our consultant</span></h2>
				<div class="row clearfix">
					
					<!-- Info Column -->
					<div class="info-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="text">Please contact us using the information below. For additional information on our management consulting services, please visit the appropriate page on our site.</div>
							<ul class="list-style-six">
								<li><span class="icon fa fa-building"></span>141 Mezoon Alghanim Building</br>Suit No. 502, Al Jurf, Ajman</li>
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
								<form action="mail.php" method="post" id="contact-form">
									
									<div class="form-group">
										<input type="text" name="name" placeholder="Full name" required>
									</div>
									
									<div class="form-group">
										<input type="text" name="email" value="" placeholder="Email" required>
									</div>
									
									<div class="form-group">
										<input type="text" name="mobile" value="" placeholder="Eg : +971 6 744 6412" required>
										<span>Enter Mobile Number With County Code</span>
									</div>
									
									
									<div class="form-group">
										<textarea name="msg" placeholder="write.."></textarea>
									</div>
									
									<div class="form-group">
										<button type="submit" name="submit" class="theme-btn btn-style-one">Submit</button>
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
