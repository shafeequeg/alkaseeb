<?php
$PAGE_TITLE = "Welcome";
$PAGE = "home";
require_once __DIR__ . '/../common/includes/header.php'; ?>
<style>
    .custom-nav-arrow {
    font-size: 24px;
    color: #333; /* Customize arrow color */
    background-color: #fff; /* Customize background color if needed */
    border-radius: 50%; /* Make it round */
    width: 40px; /* Adjust the arrow width as needed */
    height: 40px; /* Adjust the arrow height as needed */
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}
.owl-next .flaticon-right-arrow {
    position: absolute;

    top: 50%;

    right: 0;

    font-size: 40px;

    color: white;
}

.owl-prev .flaticon-left-arrow {
    position: absolute;

    top: 50%;

    left: 0;

    font-size: 40px;

    color: white;
}
.custom-nav-arrow-left::before {
    content: "\2190"; /* Unicode arrow character for left arrow */
}

.custom-nav-arrow-right::before {
    content: "\2190"; /* Unicode arrow character for right arrow */
}

</style>
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

        <?php
            $res=$obj->select_slider("");
            while($row=mysqli_fetch_assoc($res)){
            ?>
            <!-- Slide -->
            <div class="slide slide-1" style="background-image:url(alkaaseb_admin/uploads/banner/<?php echo $row['image'] ?>)">
                <div class="container">
                    <div class="content">
                        <div class="title"><?php echo $row['title'] ?></div>
                        <h1><?php echo $row['subtitle'] ?></h1>
                        <a href="contact-us.php" class="theme-btn btn-style-one">Contact us today</a>
                    </div>
                </div>
            </div>
            <?php } ?>
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
								<h3>Feel free to ask something <br> we are <span>here</span></h3>
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
								<input type="text" name="name" value="" placeholder=" Name.." required>
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
                            <div class="title">About us</div>
                            <h3>Kaaseb Mohamed <span class="mobile-line-break"></span>Al Hassani</br> Advocates and Legal Consultancy</h3>
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
                            <img src="<?= $rootUrl; ?>/common/images/banner/ab2.png" alt=""/>
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h2>15 <span>years of experience</span></h2>
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

    <section class="testimonial-section">
		<div class="container">
			
			<!-- Sec Title -->
			<div class="section-title">
				
				<h3>Latest News</h3>
			</div>
			
			<div class="testimonial-carousel owl-carousel owl-theme">
            <?php
					$res=$obj->select_portfolio(" where delete_status= '0' order by product_id desc");
					while($row=mysqli_fetch_assoc($res)){
					?>
				<!-- Testimonial Block Two -->
				<div class="testimonial-block-two">
					<div class="inner-box">
                    <div class="text porfolioDesc"><?php echo $row['title'] ?>  </div>
						<div class="author-post">
							<div class="author-inner">
								
                            <a href="details.php?id=<?php echo $row['product_id'] ?>"><div class="text porfolioDesc"><?php echo $row['en_description'] ?> </div>Read More</a>
								
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				
				
			</div>
		</div>
	</section>

    <!-- Services Section Two -->
    <section class="services-section-two"
             style="background-image: url(<?= $rootUrl; ?>/common/images/background/1.jpg);">
        <div class="container">
            <!-- Sec Title -->
            <div class="section-title light centered">
                <!-- <div class="title">Services</div> -->
                <h3>Kaaseb Mohamed Al Hassani (CEO)</span></h3>
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
                                            the field of laws and a literary novelist. </br>  4 - A practicing lawyer and registered with the federal courts
                                            in the state and Dubai courts.
                                        </div>
                                        <!-- Lower Box -->
                                        <!-- <div class="lower-box">
                                            <div class="box-inner">

                                                <h3>Alkaaseb</h3>
                                              
                                            </div>
                                        </div> -->

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

    <!-- why chose us -->

    <section class="feature-section-two pt-5">
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
                                    Negotiation, Civil &amp; Criminal litigation, Debt Collection, family law, Labour Law
                                    ,Real estate, Corporate &amp; Commercial law, intellectual property contracts and
                                    Agreements and more.</p>
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
   

    <section class="portfolio-single-section">
		<div class="container">
			<!-- Sec Title -->
			<div class="section-title centered">
				<!-- <div class="title">Projects</div> -->
				<h3>Our Services</span></h3>
			</div>
			
			
			
			<!-- Lower Section -->
			<div class="lower-section">
				<div class="row clearfix">
						
					<!-- Project Block Two -->
					<div class="portfolio-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="<?= $rootUrl; ?>/common/images/services/negotiation.png" alt="" />
								<div class="overlay-box">
									<a href="<?= $rootUrl; ?>/common/images/services/negotiation.png" data-fancybox="gallery-2" data-caption="" class="plus flaticon-plus"></a>
								</div>
							</div>
							<div class="lower-content">
								<h5><a href="services.php">Negotiation</a></h5>
								
							</div>
						</div>
					</div>
					
					<!-- Project Block Two -->
					<div class="portfolio-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="<?= $rootUrl; ?>/common/images/services/debt.png" alt="" />
								<div class="overlay-box">
									<a href="<?= $rootUrl; ?>/common/images/services/debt.png" data-fancybox="gallery-2" data-caption="" class="plus flaticon-plus"></a>
								</div>
							</div>
							<div class="lower-content">
								<h5><a href="services.php">Debt Collection</a></h5>
								
							</div>
						</div>
					</div>
					
					<!-- Project Block Two -->
					<div class="portfolio-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="<?= $rootUrl; ?>/common/images/services/3.jpg" alt="" />
								<div class="overlay-box">
									<a href="<?= $rootUrl; ?>/common/images/services/3.jpg" data-fancybox="gallery-2" data-caption="" class="plus flaticon-plus"></a>
								</div>
							</div>
							<div class="lower-content">
								<h5><a href="services.php">Corporate & Commercial Law</a></h5>
								
							</div>
						</div>
					</div>
                    <div class="portfolio-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="<?= $rootUrl; ?>/common/images/services/1.jpg" alt="" />
								<div class="overlay-box">
									<a href="<?= $rootUrl; ?>/common/images/services/1.jpg" data-fancybox="gallery-2" data-caption="" class="plus flaticon-plus"></a>
								</div>
							</div>
							<div class="lower-content">
								<h5><a href="services.php">Labour Law</a></h5>
								
							</div>
						</div>
					</div>
                    <div class="portfolio-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="<?= $rootUrl; ?>/common/images/services/4.jpg" alt="" />
								<div class="overlay-box">
									<a href="<?= $rootUrl; ?>/common/images/services/4.jpg" data-fancybox="gallery-2" data-caption="" class="plus flaticon-plus"></a>
								</div>
							</div>
							<div class="lower-content">
								<h5><a href="services.php">Contracts & Agreements</a></h5>
								
							</div>
						</div>
					</div>
                    <div class="portfolio-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="<?= $rootUrl; ?>/common/images/services/2.jpg" alt="" />
								<div class="overlay-box">
									<a href="<?= $rootUrl; ?>/common/images/services/2.jpg" data-fancybox="gallery-2" data-caption="" class="plus flaticon-plus"></a>
								</div>
							</div>
							<div class="lower-content">
								<h5><a href="services.php">Family Law</a></h5>
								
							</div>
						</div>
					</div>
                    <div class="portfolio-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="<?= $rootUrl; ?>/common/images/services/criminal-civil.png" alt="" />
								<div class="overlay-box">
									<a href="<?= $rootUrl; ?>/common/images/services/criminal-civil.png" data-fancybox="gallery-2" data-caption="" class="plus flaticon-plus"></a>
								</div>
							</div>
							<div class="lower-content">
								<h5><a href="services.php">Litigation(Criminal & Civil)</a></h5>
								
							</div>
						</div>
					</div>
                    <div class="portfolio-block-two col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="<?= $rootUrl; ?>/common/images/services/Arbitration.png" alt="" />
								<div class="overlay-box">
									<a href="<?= $rootUrl; ?>/common/images/services/Arbitration.png" data-fancybox="gallery-2" data-caption="" class="plus flaticon-plus"></a>
								</div>
							</div>
							<div class="lower-content">
								<h5><a href="services.php">Arbitration</a></h5>
								
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</section>



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

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <p>We take pride in our law firm's rich history of achievements, marked by groundbreaking legal victories, industry recognition, and satisfied clients. From securing landmark settlements to earning accolades for our unwavering commitment to justice, our track record speaks volumes about our dedication to success. Explore our notable milestones and see how we can leverage our accomplishments to advance your legal goals."</p>
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
                                <span class="count-text" data-speed="3000ms" data-stop="98.5">0</span>%
                                <div class="counter-title">Case Wins</div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="2000" data-stop="5000">0</span>+
                                <div class="counter-title">Court Appearances</div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="5000" data-stop="3000">0</span>+
                                <div class="counter-title">Happy Clients</div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="100">0</span>+
                                <div class="counter-title">Attorneys</div>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>

        </div>
    </section>

   
    <!-- Portfolio Section -->
    
    <!-- End Portfolio Section -->

    <!-- Form Section -->
    
    <!-- End Form Section -->


    <!--Main Footer-->
    <a href="https://wa.link/bdm9y7" class="wts" target="_blank">
<i class="fa fa-whatsapp wts-float"></i>
</a>
    <?php include('includes/footer.php') ?>

</div>
<script>
    $(document).ready(function(){
    $(".portfolio-carousel").owlCarousel({
        items: 3, // Change the number of items per slide as needed
        nav: true, // Enable navigation
        navText: [
            '<div class="custom-nav-arrow custom-nav-arrow-left">&#x2190;</div>', // Custom left arrow
            '<div class="custom-nav-arrow custom-nav-arrow-right">&#x2192;</div>' // Custom right arrow
        ],
        // Other options...
    });
});
</script>
<!--End pagewrapper-->
<?php require_once __DIR__ . '/../common/includes/footer.php'; ?>
