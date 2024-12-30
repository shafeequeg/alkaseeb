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
	<section class="banner-section arabic-section">
		<div class="main-slider-carousel owl-carousel owl-theme">
			<!-- Slide -->
			<?php
            $res=$obj->select_slider("");
            while($row=mysqli_fetch_assoc($res)){
            ?>
			<div class="slide" style="background-image:url(../en/alkaaseb_admin/uploads/banner/<?php echo $row['image'] ?>)">
				<div class="container">
					<div class="content">
						<div class="title"><?php echo $row['ar_title'] ?></div>
						<h1><span><?php echo $row['ar_subtitle'] ?></span></h1>
						<a href="contact-us.php" class="theme-btn btn-style-one">اتصل بنا اليوم</a>
					</div>
				</div>
			</div>
			<?php } ?>
			<!-- Slide -->

		</div>
	</section>
	<!--End Banner Section-->

	<!-- Services Section -->
	
	<!-- End Services Section -->

	<section class="form-section arabic-section" style="background-image: url(<?= $rootUrl; ?>/common/images/web-images/2.jpg)">
		<div class="container">
			<!-- Upper Content -->
			<div class="upper-content">
				<div class="row clearfix">

					<!-- Title Column -->
					<div class="title-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title -->
							<div class="section-title light">
								<!-- <div class="title">Contact us</div> -->
								<h3>لا تتردد في طرح شيء ما هنا</h3>
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
								<input type="text" name="firstname" value="" placeholder="الاسم الأول" required>
							</div>

							<div class="form-group col-lg-4 col-md-6 col-sm-12">
								<input type="text" name="email" value="" placeholder="اسم العائلة" required>
							</div>

							<div class="form-group col-lg-4 col-md-12 col-sm-12">
								<input type="text" name="phone" value="" placeholder="عنوان البريد الإلكتروني" required>
							</div>

							<div class="form-group col-lg-12 col-md-12 col-sm-12">
								<textarea name="message" placeholder="الرسالة"></textarea>
							</div>

							<div class="form-group col-lg-12 col-md-12 col-sm-12">
								<button type="submit" class="theme-btn btn-style-one">إرسال</button>
							</div>
						</div>
					</form>
				</div>
				<!--End Default Form-->

			</div>
		</div>
	</section>
	<!-- About Section -->
	<section class="about-section arabic-section">
		<!-- Image Layer -->
		<div class="image-layer" style="background-image:url(<?= $rootUrl; ?>/common/images/banner/about-1.jpg)"></div>
		<div class="container">
			<div class="row clearfix">

				<!-- Image Column -->
				<div class="image-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="<?= $rootUrl; ?>/common/images/banner/ab2.png" alt=""/>
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<h2> <span>سنة</span>۱۵</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Content Column -->
				<div class="content-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">

						<!-- Sec Title -->
						<div class="section-title">
							<div class="title">كاسب محمد الحساني </div>
							<h3>محامون واستشارايون قانونيون</h3>
						</div>

						<div class="text">
							<p>مرحبا بكم في شركة الكاسيب للمحاماة والإستشارات القانونية. المستشار القانوني شريكك الموثوق فيه
								المسائل القانونية. نحن فريق من المدافعين ذوي الخبرة والتفاني و
								يلتزم المستشارون القانونيون بتقديم خدمات شاملة وشخصية
								الحلول القانونية للأفراد والشركات على حد سواء. شركتنا يقودها أ
								شغف بالعدالة وفهم عميق للقانون ، مما يمكننا من تحقيق ذلك
								نتائج استثنائية لعملائنا.</p>
						</div>


					</div>
				</div>




			</div>
		</div>
	</section>
	<!-- End About Section -->

	<section class="testimonial-section arabic-section">
		<div class="container">
			
			<!-- Sec Title -->
			<div class="section-title">
				
				<h3>أحدث الأخبار</h3>
			</div>
			
			<div class="testimonial-carousel owl-carousel owl-theme">
				
				<!-- Testimonial Block Two -->
				<?php
					$res=$obj->select_portfolio(" where delete_status= '0' order by product_id desc");
					while($row=mysqli_fetch_assoc($res)){
					?>
				<div class="testimonial-block-two">
					<div class="inner-box">
                    <div class="text porfolioDesc"><?php echo $row['ar_title'] ?>  </div>
						<div class="author-post">
							<div class="author-inner">
								
                            <a href="details.php?id=<?php echo $row['product_id'] ?>"><div class="text porfolioDesc"><?php echo $row['ar_description'] ?> </div>Read More</a>
								
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				
				
			</div>
		</div>
	</section>


	<section class="services-section-two arabic-section"
			 style="background-image: url(<?= $rootUrl; ?>/common/images/background/1.jpg);">
		<div class="container">
			<!-- Sec Title -->
			<div class="section-title light centered ">
				<!-- <div class="title text-center">Services</div> -->
				<h3 class="text-center">كاسب محمد الحساني (الرئيس التنفيذي)</h3>
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

										<div class="text txtalkaseeb">
										١٥ عام من الخبرة العسكرية ومجال الامن ودرجة بكالوريوس في القانون من أكاديمية شرطة دبي ودرجة الماجستير في القانون الخاص من جامعة عجمان كاتب في مجال القانون وروائي ادبي يتحدث الانجليزي والهندية محامي وممارس مسجل في محاكم الدولة الاتحادية والمحلية															</div>
										<!-- Lower Box -->
									
										<div class="lower-box">
											<div class="box-inner">

												<!-- <h3>Alkaaseb</h3> -->
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

	<section class="feature-section-two arabic-section pt-5">
		<div class="container">
			<div class="section-title dark">
				<h3 class="whychose">لماذا أخترتنا ؟</h3>
			</div>
			<div class="inner-container" style="border: none">

				<div class="row">

					<div class="col-12 col-md-4">
						<div class="d-flex flex-column align-items-center gap-2" style="gap: 2rem">
							<div class="icon-box" style="font-size: 3rem">
								<span class="icon flaticon-portfolio-1"></span>
							</div>
							<div class="text d-flex flex-column align-items-center" style="gap: 1rem">
								<h5 style="color: black">خدمات قانونية شاملة</h5>
								<p style="text-align: center; width: 80%">
								المسائل القانونية اذا كنت بحاجة الى مساعدة قانونية او نزاعات تجارية معقدة ، نحن نقدم خدمات لتلبية مجموعة واسعة من المسائل القانونية ومنها التفاوض ف المسائل المدنية وتمتد خبرتنا الى التحكيم  والدعاوى الجزائية والدعاوى الجنائية وتحصيل الديون وعقود العقارات والشركات والمسائل الاسرية وقانون العمل والاتفاقات القانونية التجارية وعقود الملكية الفكرية والمزيد 
								</p>
							</div>
						</div>

					</div>

					<div class="col-12 col-md-4">
						<div class="d-flex flex-column align-items-center gap-2" style="gap: 2rem">
							<div class="icon-box" style="font-size: 3rem">
								<span class="icon flaticon-talk"></span>
							</div>
							<div class="text d-flex flex-column align-items-center" style="gap: 1rem">
								<h5 style="color: black">نهج يركز على العميل</h5>
								<p style="text-align: center; width: 80%">
								 نحن نأخذ عملائنا على نهج الثقة لازالة مخاوفهم وفهم ظروفكم لازالة القلق وفهم استراتيجياتكم لتلبية احتياجكم وتكييفنا القانوني يضمن ذلك والتزامنا بالتوضيح والمصداقية في اعلامك بالتقدم المحرز دائماً
							</p>
							</div>
						</div>

					</div>

					<div class="col-12 col-md-4">
						<div class="d-flex flex-column align-items-center gap-2" style="gap: 2rem">
							<div class="icon-box" style="font-size: 3rem">
								<span class="icon flaticon-award"></span>
							</div>
							<div class="text d-flex flex-column align-items-center" style="gap: 1rem">
								<h5 style="color: black">الخبرة والخبرة</h5>
								<p style="text-align: center; width: 80%">لدينا فريق من المحامين المتمرسين والقانونيين
									يمتلك الاستشاريون ثروة من المعرفة في مجالات الممارسة المختلفة.
									مع سنوات من الخبرة في تمثيل العملاء في المسائل القانونية المتنوعة، نحن
									مجهزة للتعامل مع الحالات الأكثر تعقيدًا بدقة ودقة
									الكفاءة.</p>
							</div>
						</div>

					</div>


				</div>

			</div>
		</div>
	</section>
	

	<!-- Services Section Two -->

	<!-- End Services Section Two -->

	<!-- Counter Section -->
	

	<!-- Team Section -->
	<?php include __DIR__ . '/includes/team.php';?>
	<!-- End Team Section -->

	<!-- service Section -->

	<section class="portfolio-single-section arabic-section">
		<div class="container">
			<!-- Sec Title -->
			<div class="section-title centered">
				<!-- <div class="title">Projects</div> -->
				<h3>خدماتنا</span></h3>
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
								<h5 class="title-s"><a href="services.php">مفاوضة</a></h5>
								
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
								<h5><a href="services.php">تحصيل ديون</a></h5>
								
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
								<h5><a href="services.php">قانون جنائي</a></h5>
								
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
								<h5><a href="services.php">قانون العمل</a></h5>
								
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
								<h5><a href="services.php">المنازعات والعقود</a></h5>
								
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
								<h5><a href="services.php">قانون الاحوال الشخصية</a></h5>
								
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
								<h5><a href="services.php">الدعاوى (الجنائية والمدنية)</a></h5>
								
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
								<h5><a href="services.php">تحكم</a></h5>
								
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</section>
	
	<!-- End service Section -->

	<section class="counter-section arabic-section">
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
							<div class="row clearfix">

								<div class="col-lg-12 col-md-12 col-sm-12 counter-txt">
									<p>نحن نفخر بتاريخ مكتب المحاماة الغني بالإنجازات، والذي تميز بالانتصارات القانونية الرائدة والاعتراف بالصناعة والعملاء الراضين. بدءًا من تأمين المستوطنات التاريخية وحتى الحصول على الأوسمة لالتزامنا الثابت بالعدالة، فإن سجلنا الحافل يتحدث كثيرًا عن تفانينا في تحقيق النجاح. استكشف معالمنا البارزة وانظر كيف يمكننا الاستفادة من إنجازاتنا لتحقيق أهدافك القانونية."</p>
								</div>

								

							</div>
						</div>
						<div class="column col-lg-6 col-md-12 col-sm-12">
							<h3>نحن نشعر بالفخر الشديد تجاه <br> <span>إنجازنا</span> الرائع</h3>
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
                                <span class="count-text">۹۸.۵</span>%
                                <div class="counter-title">فوز القضية</div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="count-outer count-box">
                                <span class="count-text" >۳۰۰۰</span>+
                                <div class="counter-title">المثول أمام المحكمة</div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="count-outer count-box">
                                <span class="count-text">۵۰۰۰</span>+
                                <div class="counter-title">عملاء سعداء</div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="count-outer count-box">
                                <span class="count-text" >۱۵۰۰</span>+
                                <div class="counter-title">محامون</div>
                            </div>
                        </div>
                    </div>

				</div>
			</div>

		</div>
	</section>

	<!--Main Footer-->
	<?php include('includes/footer.php') ?>

</div>
<!--End pagewrapper-->
<?php require_once __DIR__ . '/../common/includes/footer.php'; ?>
