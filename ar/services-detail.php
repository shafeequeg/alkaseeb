<?php
$PAGE_TITLE = "Services";
$PAGE = "services";
require_once __DIR__ . '/../common/includes/header.php'; ?>


<div class="page-wrapper">

	<!-- Preloader -->
	<div class="preloader"></div>

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
				<h1>Services</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Services Detail</li>
				</ul>
			</div>
		</div>
	</section>
	<!--End Page Title-->

	<!--Sidebar Page Container-->
	<div class="sidebar-page-container">
		<div class="container">
			<div class="row clearfix">

				<!--Sidebar Side-->
				<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
					<aside class="sidebar padding-right">

						<!--Blog Category Widget-->
						<div class="sidebar-widget sidebar-blog-category">
							<ul class="blog-cat">
								<li class="active"><a href="services-detail.html">Arbitration</a></li>
								<li><a href="services-detail.html">Negotiation</a></li>
								<li><a href="services-detail.html">Litigation (criminal & civil )</a></li>
								<li><a href="services-detail.html">Debt collection</a></li>
								<li><a href="services-detail.html">Trade Law</a></li>
							</ul>
						</div>

						<!-- Contact Widget-->
						<div class="sidebar-widget contact-widget">
							<div class="sidebar-title">
								<h4>Contact</h4>
							</div>
							<ul>
								<li><span class="icon flaticon-map-1"></span> 3111 West Allegheny Avenue <br> Pennsylvania 19132</li>
								<li><span class="icon flaticon-call-answer"></span> 1-982-782-5297 <br> 1-982-125-6378</li>
								<li><span class="icon flaticon-comment"></span> support@lawsight.com</li>
							</ul>
						</div>

						<!-- Brochures Widget-->
						<div class="sidebar-widget brochures-widget">
							<div class="sidebar-title">
								<h4>Brochures</h4>
							</div>
							<div class="text">View our 2019 financial prospectus brochure for an easy to read guide on all of the services offer.</div>
							<ul class="files">
								<li><a href="#"><span class="flaticon-download-arrow"></span> Download Brochure</a></li>
								<li><a href="#"><span class="flaticon-pdf"></span> Characteristics</a></li>
							</ul>
						</div>


					</aside>
				</div>

				<!--Content Side-->
				<div class="content-side col-lg-8 col-md-12 col-sm-12">
					<div class="services-single">
						<h4>Business Law</h4>
						<div class="text">
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered altera tion in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden.</p>
							<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
						</div>
						<ul class="list-style-five">
							<li>Sed do eiusmod tempor incididunt ut</li>
							<li>Labore et dolore magna aliqua</li>
							<li>Ut enim ad minim veniam quis nostrud</li>
							<li>Andomised words which don't look</li>
						</ul>
						<!-- Services Gallery -->
						<div class="services-gallery">
							<div class="services-carousel owl-carousel owl-theme">
								<div class="slide">
									<div class="image">
										<img src="<?= $rootUrl; ?>/common/images/resource/service-2.jpg" alt="">
									</div>
								</div>
								<div class="slide">
									<div class="image">
										<img src="<?= $rootUrl; ?>/common/images/resource/service-3.jpg" alt="">
									</div>
								</div>
								<div class="slide">
									<div class="image">
										<img src="<?= $rootUrl; ?>/common/images/resource/service-2.jpg" alt="">
									</div>
								</div>
								<div class="slide">
									<div class="image">
										<img src="<?= $rootUrl; ?>/common/images/resource/service-3.jpg" alt="">
									</div>
								</div>
								<div class="slide">
									<div class="image">
										<img src="<?= $rootUrl; ?>/common/images/resource/service-2.jpg" alt="">
									</div>
								</div>
								<div class="slide">
									<div class="image">
										<img src="<?= $rootUrl; ?>/common/images/resource/service-3.jpg" alt="">
									</div>
								</div>
							</div>
						</div>

						<!--Services Info Tabs-->
						<div class="Services-info-tabs">
							<!--Service Tabs-->
							<div class="service-tabs tabs-box">

								<!--Tab Btns-->
								<ul class="tab-btns tab-buttons clearfix">
									<li data-tab="#prod-audit" class="tab-btn active-btn"><i>Audit</i></li>
									<li data-tab="#prod-strategy" class="tab-btn"><i>Strategy</i></li>
									<li data-tab="#prod-sustainability" class="tab-btn"><i>Sustainability</i></li>
								</ul>

								<!--Tabs Container-->
								<div class="tabs-content">

									<!--Tab / Active Tab-->
									<div class="tab active-tab" id="prod-audit">
										<div class="content">
											<div class="text">
												<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
												<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequun tur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
											</div>
										</div>
									</div>

									<!--Tab-->
									<div class="tab" id="prod-strategy">
										<div class="content">
											<div class="text">
												<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
												<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequun tur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
											</div>
										</div>
									</div>

									<!--Tab-->
									<div class="tab" id="prod-sustainability">
										<div class="content">
											<div class="text">
												<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
												<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequun tur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="row clearfix">

							<!-- Services Block Two -->
							<div class="services-block-two style-two col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-internet"></span>
									</div>
									<h3>Business Law</h3>
									<div class="text">It is a long established fact that areader will be distracted by the readable content of a page when looking.</div>
									<div class="overlay-box" style="background-image: url(<?= $rootUrl; ?>/common/images/resource/service-1.jpg);">
										<div class="overlay-inner">
											<div class="content">
												<span class="icon flaticon-internet"></span>
												<h4><a href="#">Business Law</a></h4>
												<a href="#" class="theme-btn btn-style-one">consult now</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Services Block Two -->
							<div class="services-block-two style-two col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-museum"></span>
									</div>
									<h3>Civil Law</h3>
									<div class="text">It is a long established fact that areader will be distracted by the readable content of a page when looking.</div>
									<div class="overlay-box" style="background-image: url(<?= $rootUrl; ?>/common/images/resource/service-1.jpg);">
										<div class="overlay-inner">
											<div class="content">
												<span class="icon flaticon-museum"></span>
												<h4><a href="#">Civil Law</a></h4>
												<a href="#" class="theme-btn btn-style-one">consult now</a>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>

						<!-- More Services -->
						<div class="more-services">
							<div class="clearfix">
								<div class="pull-left">
									<a href="#"><span class="fa fa-angle-double-left"></span> Previous Service</a>
								</div>
								<div class="pull-right">
									<a href="#">Newer Service <span class="fa fa-angle-double-right"></span></a>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Subscribe Section -->
	<section class="subscribe-section">
		<div class="container">
			<div class="inner-container" style="background-image: url(<?= $rootUrl; ?>/common/images/background/3.jpg)">
				<h2>Subscribe Your Email for Newsletter <br> & Promotion</h2>
				<!-- Subscribe Form -->
				<div class="subscribe-form">
					<form method="post" action="contact.html">
						<div class="form-group">
							<input type="email" name="email" value="" placeholder="Email address.." required>
							<button type="submit" class="theme-btn subscribe-btn">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- End Subscribe Section -->

	<!--Main Footer-->
	<?php include('includes/footer.php') ?>


</div>
<!--End pagewrapper-->

<?php require_once __DIR__ . '/../common/includes/footer.php'; ?>
