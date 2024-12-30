<?php
$PAGE_TITLE = "Welcome";
$PAGE = "home";
require_once __DIR__ . '/../common/includes/header.php'; ?>

<div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Main Header-->
    <?php include('includes/header.php') ?>

    <!--Form Back Drop-->
    <div class="form-back-drop"></div>

    <!-- Hidden Navigation Bar -->
    <?php include('includes/hidden-nav.php') ?>
    <!-- End / Hidden Bar -->

    <!--Banner Section-->
    <section class="banner-section">
        <div class="main-slider-carousel owl-carousel owl-theme">
            <!-- Slide -->
            <div class="slide" style="background-image:url(<?= $rootUrl; ?>/common/images/main-slider/1.jpg)">
                <div class="container">
                    <div class="content">
                        <div class="title">Expert legal service </div>
                        <h1>Eimplify Legal Processes with<br> <span>Expert Formse</span></h1>
                        <a href="contact-us.php" class="theme-btn btn-style-one">Contact us today</a>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url(<?= $rootUrl; ?>/common/images/main-slider/1.jpg)">
                <div class="container">
                    <div class="content">
                        <div class="title">Slide2</div>
                        <h1>Eimplify Legal Processes with<br> <span>Expert Formse</span></h1>
                        <a href="contact-us.php" class="theme-btn btn-style-one">Contact us today</a>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url(<?= $rootUrl; ?>/common/images/main-slider/1.jpg)">
                <div class="container">
                    <div class="content">
                        <div class="title">Slide2</div>
                        <h1>Eimplify Legal Processes with<br> <span>Expert Formse</span></h1>
                        <a href="contact-us.php" class="theme-btn btn-style-one">Contact us today</a>
                    </div>
                </div>
            </div>
            <!-- Slide -->

        </div>
    </section>
    <!--End Banner Section-->


    <section class="form-section" style="background-image: url(<?= $rootUrl; ?>/common/images/banner/bannerask.jpeg)">
		<div class="container">
			<!-- Upper Content -->
			<div class="upper-content">
				<div class="row clearfix">
					
					<!-- Title Column -->
					<div class="title-column col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title -->
							<div class="section-title light">
								<!-- <div class="title">Contact us</div> -->
								<h3>Feel free to ask somthing <br> we are <span>here</span></h3>
							</div>
						</div>
					</div>
					
					<!-- Info Column -->
					
					
				</div>
			</div>
			<!-- Lower Content -->
			<div class="lower-content">
				
				<!-- Default Form -->
				<div class="default-form">
					<form method="post" action="blog.html">
						<div class="row clearfix">
							<div class="form-group col-lg-4 col-md-6 col-sm-12">
								<input type="text" name="name" value="" placeholder=" name.." required>
							</div>
							
							<div class="form-group col-lg-4 col-md-6 col-sm-12">
								<input type="text" name="email" value="" placeholder=" Email.." required>
							</div>
							
							<div class="form-group col-lg-4 col-md-12 col-sm-12">
								<input type="text" name="phone" value="" placeholder="Contact.." required>
							</div>
							
							<div class="form-group col-lg-12 col-md-12 col-sm-12">
								<textarea name="message" placeholder="Write..."></textarea>
							</div>
							
							<div class="form-group col-lg-12 col-md-12 col-sm-12">
								<button type="submit" class="theme-btn btn-style-one">Submit</button>
							</div>                                        
						</div>
					</form>
				</div>
				<!--End Default Form-->
				
			</div>
		</div>
	</section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="icon-one wow zoomIn" data-wow-delay="250ms" data-wow-duration="1500ms"
             style="background-image:url(<?= $rootUrl; ?>/common/images/icons/icon-1.png)"></div>
        <div class="icon-two wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms"
             style="background-image:url(<?= $rootUrl; ?>/common/images/icons/icon-2.png)"></div>
        <div class="container">
            <div class="row clearfix">

                <!-- Services Block -->
                <div class="services-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="border-one"></div>
                        <div class="border-two"></div>
                        <div class="content">
                            <div class="icon-box">
                                <span class="icon flaticon-family"></span>
                            </div>
                            <h6>99% winning guarantee</h6>
                            <div class="text">Lorem ipsum dolor sit amet, con sectetu adipiscing elit, sed do eius mod
                                tempor.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Services Block -->
                <div class="services-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="border-one"></div>
                        <div class="border-two"></div>
                        <div class="content">
                            <div class="icon-box">
                                <span class="icon flaticon-fingerprint-1"></span>
                            </div>
                            <h6>Business Planning</h6>
                            <div class="text">Lorem ipsum dolor sit amet, con sectetu adipiscing elit, sed do eius mod
                                tempor.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Services Block -->
                <div class="services-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="border-one"></div>
                        <div class="border-two"></div>
                        <div class="content">
                            <div class="icon-box">
                                <span class="icon flaticon-non-stop-call"></span>
                            </div>
                            <h6>Investment Trade</h6>
                            <div class="text">Lorem ipsum dolor sit amet, con sectetu adipiscing elit, sed do eius mod
                                tempor.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- About Section -->
    <section class="about-section">
        <!-- Image Layer -->
        <div class="image-layer" style="background-image:url(<?= $rootUrl; ?>/common/images/banner/about-1.jpg)"></div>
        <div class="container">
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!-- Sec Title -->
                        <div class="section-title">
                            <div class="title">about us</div>
                            <h3>Kaaseb Mohamed Al Hassani</br> Advocates and Legal consultancy</h3>
                        </div>

                        <div class="text">
                            <p style="font-size: 18px;"><b>Welcome to Al Kaaseb Advocate &amp; Legal Consultant your trusted partner in
                                legal matters. We are a team of experienced and dedicated advocates and
                                legal consultants committed to providing comprehensive and personalized
                                legal solutions to individuals and businesses alike. Our firm is driven by a
                                passion for justice and a deep understanding of the law, enabling us to deliver
                                exceptional results for our clients.</b></p>
                        </div>


                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="<?= $rootUrl; ?>/common/images/banner/about-2.jpg" alt=""/>
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h2>35 <span>years of experience</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End About Section -->

    <section class="feature-section-two">
        <div class="container">
            <div class="section-title dark">
                <h3 class="whychose">Why Choose Us ?</h3>
            </div>
            <div class="inner-container" style="border: none">

                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="d-flex flex-column align-items-center gap-2" style="gap: 2rem">
                            <div class="icon-box" style="font-size: 3rem">
                                <span class="icon flaticon-award"></span>
                            </div>
                            <div class="text d-flex flex-column align-items-center" style="gap: 1rem">
                                <h5 style="color: black">Expertise and Experience</h5>
                                <p style="text-align: center; width: 80%">Our team of seasoned advocates and legal
                                    consultants possess a wealth of knowledge across various practice areas.
                                    With years of experience in representing clients in diverse legal matters, we
                                    are equipped to handle even the most complex cases with precision and
                                    proficiency.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-4">
                        <div class="d-flex flex-column align-items-center gap-2" style="gap: 2rem">
                            <div class="icon-box" style="font-size: 3rem">
                                <span class="icon flaticon-talk"></span>
                            </div>
                            <div class="text d-flex flex-column align-items-center" style="gap: 1rem">
                                <h5 style="color: black">Client-Centric Approach</h5>
                                <p style="text-align: center; width: 80%">At Al Kaaseb Advocate &amp; Legal Consultant our
                                    clients
                                    are at the heart of everything we do. We take the time to listen to your
                                    concerns, understand your unique circumstances, and tailor our legal
                                    strategies to meet your specific needs. Our commitment to clear
                                    communication ensures that you are always informed about the progress of
                                    your case.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-4">
                        <div class="d-flex flex-column align-items-center gap-2" style="gap: 2rem">
                            <div class="icon-box" style="font-size: 3rem">
                                <span class="icon flaticon-portfolio-1"></span>
                            </div>
                            <div class="text d-flex flex-column align-items-center" style="gap: 1rem">
                                <h5 style="color: black">Comprehensive Legal Services</h5>
                                <p style="text-align: center; width: 80%">Whether you require assistance with personal
                                    legal matters or complex business disputes, we offer a wide range of legal
                                    services to cater to your requirements. Our expertise extends to Arbitration,
                                    Negotiation. Civil &amp; Criminal litigation, Debt Collection, family law, Labour Law
                                    ,Real estate, Corporate &amp; Commercial law, intellectual property contracts and
                                    Agreements and more.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Services Section Two -->
    <section class="services-section-two"
             style="background-image: url(<?= $rootUrl; ?>/common/images/background/1.jpg);">
        <div class="container">
            <!-- Sec Title -->
            <div class="section-title light centered">
                <div class="title">Services</div>
                <h3>We are here to fight against any <br> case with <span>experience</span></h3>
            </div>
            <div class="row clearfix">

                <!-- Services Block Two -->
                <div class="services-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-internet"></span>
                        </div>
                        <h3>Arbitration</h3>
                        <div class="text">Streamlined Conflict Resolution: Our Arbitration Services provide
                            a fair, efficient, and cost-effective alternative to traditional legal processes.
                            Trust our expert arbitrators to help you resolve disputes swiftly and ...
                        </div>
                        <div class="overlay-box"
                             style="background-image: url(<?= $rootUrl; ?>/common/images/resource/service-1.jpg);">
                            <div class="overlay-inner">
                                <div class="content">
                                    <span class="icon flaticon-internet"></span>
                                    <h4><a href="services.php">Arbitration</a></h4>
                                    <a href="services.php" class="theme-btn btn-style-one">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Services Block Two -->
                <div class="services-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-museum"></span>
                        </div>
                        <h3>Negotiation</h3>
                        <div class="text">Empower Your Negotiations: Unlock the art of successful
                            negotiations with our expert guidance. Our comprehensive negotiation
                            services equip you with the skills and strategies to achieve win-win ...
                        </div>
                        <div class="overlay-box"
                             style="background-image: url(<?= $rootUrl; ?>/common/images/resource/service-1.jpg);">
                            <div class="overlay-inner">
                                <div class="content">
                                    <span class="icon flaticon-museum"></span>
                                    <h4><a href="services.php">Negotiation</a></h4>
                                    <a href="services.php" class="theme-btn btn-style-one">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Services Block Two -->
                <div class="services-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-suitcase"></span>
                        </div>
                        <h3>Debt collection</h3>
                        <div class="text">Efficient Debt Recovery Solutions: Our Debt Collection
                            Services are tailored to help businesses and individuals recover outstanding
                            debts promptly and professionally. Trust our experienced ...
                        </div>
                        <div class="overlay-box"
                             style="background-image: url(<?= $rootUrl; ?>/common/images/resource/service-1.jpg);">
                            <div class="overlay-inner">
                                <div class="content">
                                    <span class="icon flaticon-suitcase"></span>
                                    <h4><a href="services.php">Debt collection</a></h4>
                                    <a href="services.php" class="theme-btn btn-style-one">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Services Block Two -->
                <div class="services-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-book"></span>
                        </div>
                        <h3>Labour law</h3>
                        <div class="text">Empowering Fair Workplace Practices: Our Labour Law
                            Services are designed to protect both employees&#39; rights and employers&#39;
                            interests. With in-depth knowledge of labour regulations and employment
                            laws, our skilled team ensures compliance and resolves workplace disputes
                            with precision and care. From ...
                        </div>
                        <div class="overlay-box"
                             style="background-image: url(<?= $rootUrl; ?>/common/images/resource/service-1.jpg);">
                            <div class="overlay-inner">
                                <div class="content">
                                    <span class="icon "></span>
                                    <h4><a href="services.php">Labour law</a></h4>
                                    <a href="services.php" class="theme-btn btn-style-one">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Services Block Two -->
                <div class="services-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-house-outline"></span>
                        </div>
                        <h3>Family law</h3>
                        <div class="text">We provide compassionate and effective legal counsel in
                            matters of divorce, child custody, adoption, and more, prioritizing the best
                            interests of our clients and their families. &quot;Compassionate Family Law
                            Advocates: Our Family Law Services are dedicated to guiding families through
                            challenging times with empathy and ...
                        </div>
                        <div class="overlay-box"
                             style="background-image: url(<?= $rootUrl; ?>/common/images/resource/service-1.jpg);">
                            <div class="overlay-inner">
                                <div class="content">
                                    <span class="icon flaticon-house-outline"></span>
                                    <h4><a href="services.php">Family law</a></h4>
                                    <a href="services.php" class="theme-btn btn-style-one">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Services Block Two -->
                <div class="services-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-plan"></span>
                        </div>
                        <h3>Contracts & agreements</h3>
                        <div class="text">Real Estate Contracts &amp; Agreements: From property transactions to
                            landlord-
                            tenant issues, our team navigates the complexities of real estate law to
                            protect your interests. &quot;Solidify Your Relationships with Robust Contracts &amp;
                            Agreements: Our comprehensive Contracts and Agreements services ensure
                            that your...
                        </div>
                        <div class="overlay-box"
                             style="background-image: url(<?= $rootUrl; ?>/common/images/resource/service-1.jpg);">
                            <div class="overlay-inner">
                                <div class="content">
                                    <span class="icon flaticon-plan"></span>
                                    <h4><a href="services.php">Contracts & agreements</a></h4>
                                    <a href="services.php" class="theme-btn btn-style-one">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Lower Section -->
            <div class="lower-section">
                <div class="carousel-box">
                    <div class="content">
                        <div class="single-item-carousel owl-carousel owl-theme">

                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="testimonial-content">

                                        <div class="text">1 - 16 years of military experience in the security
                                            field.</br> 2 - Bachelor's degree in Law from the Dubai Police Academy, and
                                            a Master's degree in Private Law from Ajman University.</br> 3 - A writer in
                                            the field of laws and a literary novelist. </br> 4 - Speaking English and
                                            Hindi.</br> 5 - A practicing lawyer and registered with the federal courts
                                            in the state and Dubai courts.
                                        </div>
                                        <!-- Lower Box -->
                                        <div class="lower-box">
                                            <div class="box-inner">

                                                <h3>Alkaaseb</h3>
                                                <!-- <div class="designation">PP</div> -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block -->


                        </div>
                    </div>
                </div>

                <div class="image">
                    <img src="<?= $rootUrl; ?>/common/images/web-images/img1.png" alt=""/>
                </div>

            </div>

        </div>
    </section>
    <!-- End Services Section Two -->

    <!-- Counter Section -->
    <section class="counter-section">
        <div class="icon-one wow zoomIn" data-wow-delay="250ms" data-wow-duration="1500ms"
             style="background-image:url(<?= $rootUrl; ?>/common/images/icons/icon-3.png)"></div>
        <div class="icon-two wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms"
             style="background-image:url(<?= $rootUrl; ?>/common/images/icons/icon-4.png)"></div>
        <div class="container">
            <!-- Title Box -->
            <div class="title-box">
                <div class="section-title">
                    <div class="row clearfix">
                        <div class="column col-lg-6 col-md-12 col-sm-12">

                            <h3>We feel very proud for our <br> great <span>achievement</span></h3>
                        </div>
                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <p>Aenean tincidunt id mauris idology auctor. Donec at ligula lacus. Nulla
                                        dignissimmi quis neque interdum.</p>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <p>Aenean tincidunt id mauris idology auctor. Donec at ligula lacus. Nulla
                                        dignissimmi quis neque interdum.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fact Counter -->
            <div class="fact-counter">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000ms" data-stop="1825">0</span>+
                                <div class="counter-title">Completed works</div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="2000" data-stop="532">0</span>+
                                <div class="counter-title">Satisfied clients</div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="2000" data-stop="69">0</span>+
                                <div class="counter-title">Winning awards</div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="32">0</span>+
                                <div class="counter-title">Team members</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- Team Section -->
    <?php include __DIR__ . '/includes/team.php';?>
    <!-- End Team Section -->

    <!-- Portfolio Section -->
    <section class="portfolio-section">
        <div class="container">
            <!-- Sec Title -->
            <div class="section-title centered">
                <div class="title">Portfolio</div>
                <h3>Check our portfolio which is built <br> with our <span>experience</span></h3>
            </div>
        </div>

        <!-- Outer Container -->
        <div class="outer-container">
            <div class="portfolio-carousel owl-carousel owl-theme">

                <!-- Portfolio Block -->
                <div class="portfolio-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="<?= $rootUrl; ?>/common/images/gallery/1.jpg" alt=""/>
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <div class="title">Labour Law</div>

                                    </div>
                                </div>
                            </div>
                            <div class="overlay-link">
                                <a href="<?= $rootUrl; ?>/common/images/gallery/1.jpg" data-fancybox="gallery-1"
                                   data-caption="" class="plus flaticon-plus"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Block -->
                <div class="portfolio-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="<?= $rootUrl; ?>/common/images/gallery/2.jpg" alt=""/>
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <div class="title">Family Law</div>

                                    </div>
                                </div>
                            </div>
                            <div class="overlay-link">
                                <a href="<?= $rootUrl; ?>/common/images/gallery/2.jpg" data-fancybox="gallery-1"
                                   data-caption="" class="plus flaticon-plus"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Block -->
                <div class="portfolio-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="<?= $rootUrl; ?>/common/images/gallery/3.jpg" alt=""/>
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <div class="title">Corparate & Commertial Law</div>

                                    </div>
                                </div>
                            </div>
                            <div class="overlay-link">
                                <a href="<?= $rootUrl; ?>/common/images/gallery/3.jpg" data-fancybox="gallery-1"
                                   data-caption="" class="plus flaticon-plus"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Block -->
                <div class="portfolio-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="<?= $rootUrl; ?>/common/images/gallery/4.jpg" alt=""/>
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <div class="title">Contracts & Agreement Law</div>

                                    </div>
                                </div>
                            </div>
                            <div class="overlay-link">
                                <a href="<?= $rootUrl; ?>/common/images/gallery/4.jpg" data-fancybox="gallery-1"
                                   data-caption="" class="plus flaticon-plus"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Block -->


            </div>
        </div>

    </section>
    <!-- End Portfolio Section -->

    <!-- Form Section -->
    <section class="form-section" style="background-image: url(<?= $rootUrl; ?>/common/images/web-images/2.jpg)">
        <div class="container">
            <!-- Upper Content -->
            <div class="upper-content">
                <div class="row clearfix">

                    <!-- Title Column -->
                    <div class="title-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="section-title light">
                                <div class="title">Contact us</div>
                                <h3>Feel free to ask somthing <br> we are <span>here</span></h3>
                            </div>
                        </div>
                    </div>

                    <!-- Info Column -->
                    <div class="info-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="row clearfix">
                                <!-- Column -->
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <ul class="list-style-two">
                                        <li><span class="icon flaticon-placeholder-1"></span>41 Mezoon Alghanim Building
                                            Suit No. 502, Al Jurf, Ajman
                                        </li>
                                    </ul>
                                </div>
                                <!-- Column -->
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <ul class="list-style-two">
                                        <li><span class="icon flaticon-phone-call"></span>+971 6 744 6412</li>
                                        <li><span class="icon flaticon-chat"></span>alkaaseb.2.advocates@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Lower Content -->
            <div class="lower-content">

                <!-- Default Form -->
                <div class="default-form">
                    <form method="post" action="blog.html">
                        <div class="row clearfix">
                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                <input type="text" name="firstname" value="" placeholder="First name.." required>
                            </div>

                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                <input type="text" name="email" value="" placeholder="Last name.." required>
                            </div>

                            <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                <input type="text" name="phone" value="" placeholder="Email Address.." required>
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <textarea name="message" placeholder="Write..."></textarea>
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="theme-btn btn-style-one">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--End Default Form-->

            </div>
        </div>
    </section>
    <!-- End Form Section -->


    <!--Main Footer-->
    <?php include('includes/footer.php') ?>

</div>
<!--End pagewrapper-->
<?php require_once __DIR__ . '/../common/includes/footer.php'; ?>
