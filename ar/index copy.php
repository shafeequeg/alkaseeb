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
			<div class="slide" style="background-image:url(<?= $rootUrl; ?>/common/images/main-slider/01-ar1.jpg)">
				<div class="container">
					<div class="content">
						<div class="title">أعرض مع آل كاسب</div>
						<h1>قم بتبسيط العمليات القانونية مع محامين خبراء</span></h1>
						<a href="contact-us.php" class="theme-btn btn-style-one">اتصل بنا اليوم</a>
					</div>
				</div>
			</div>
			<!-- Slide -->

		</div>
	</section>
	<!--End Banner Section-->

	<!-- Services Section -->
	
	<!-- End Services Section -->

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
								<!-- <div class="title">Contact us</div> -->
								<h3>لا تتردد في طرح شيء ما
نحن هنا</h3>
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
							<img src="<?= $rootUrl; ?>/common/images/banner/about-2.jpg" alt=""/>
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<h2>15 <span>سنوات من الخبرة</span></h2>
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
							<div class="title">معلومات عنا</div>
							<h3>محامون ومستشارون قانونيون</h3>
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

	<section class="feature-section-two arabic-section">
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
								<p style="text-align: center; width: 80%">ما إذا كنت بحاجة إلى مساعدة شخصية
									المسائل القانونية أو النزاعات التجارية المعقدة، نحن نقدم مجموعة واسعة من المسائل القانونية
									خدمات لتلبية متطلباتك. تمتد خبرتنا إلى التحكيم ،
									تفاوض. المدنية وأمبير. الدعاوى الجنائية، تحصيل الديون، قانون الأسرة، قانون العمل
									والعقارات والشركات وأمبير. القانون التجاري وعقود الملكية الفكرية
									اتفاقيات والمزيد.</p>
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
								<p style="text-align: center; width: 80%">في Al Kaaseb Advocate & amp؛ مستشار قانوني لدينا
									عملاء
									في صميم كل ما نقوم به. نحن نأخذ الوقت للاستماع إلى الخاص بك
									مخاوفك ، وفهم ظروفك الفريدة ، وتكييفنا القانوني
									استراتيجيات لتلبية احتياجاتك الخاصة. التزامنا بالتوضيح
									يضمن الاتصال أن يتم إعلامك دائمًا بالتقدم المحرز في
									حالتك.</p>
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
	<section class="services-section-two arabic-section"
			 style="background-image: url(<?= $rootUrl; ?>/common/images/background/1.jpg);">
		<div class="container">
			<!-- Sec Title -->
			<div class="section-title light centered ">
				<div class="title text-center">Services</div>
				<h3 class="text-center">نحن هنا لمحاربة أي <br> قضية ذات <span>خبرة</span></h3>
			</div>
			<div class="row clearfix">

				<!-- Services Block Two -->
				<div class="services-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box h-100">
						<div class="icon-box">
							<span class="icon flaticon-internet"></span>
						</div>
						<h3>Arbitration</h3>
						<div class="text">لتحكيم: حل النزاع المبسط: توفر خدمات التحكيم لدينا بديلاً عادلاً وفعالاً وفعالاً من حيث التكلفة للعمليات القانونية التقليدية. ثق بالمحكمين الخبراء لدينا لمساعدتك على حل النزاعات بسرعة وحيادية ، مما يوفر لك الوقت والمال. تبسيط تعارضاتك اليوم من خلال حلول التحكيم الموثوقة ".
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
					<div class="inner-box h-100">
						<div class="icon-box">
							<span class="icon flaticon-museum"></span>
						</div>
						<h3>التفاوض</h3>
						<div class="text">"قم بتمكين مفاوضاتك: أطلق العنان لفن المفاوضات الناجحة من خلال إرشادات الخبراء لدينا. تزودك خدمات التفاوض الشاملة بالمهارات والاستراتيجيات لتحقيق نتائج مربحة للجانبين. سواء في السياقات التجارية أو القانونية أو الشخصية ، سنقوم تساعدك على تجاوز التعقيدات وبناء علاقات قوية وتأمين النتائج المثلى. ارفع براعتك في التفاوض وحقق أهدافك بثقة. "
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
					<div class="inner-box h-100">
						<div class="icon-box">
							<span class="icon flaticon-suitcase"></span>
						</div>
						<h3> تحصيل الديون</h3>
						<div class="text">"حلول فعالة لاسترداد الديون: تم تصميم خدمات تحصيل الديون لدينا لمساعدة الشركات والأفراد على استرداد الديون المستحقة على الفور وبشكل احترافي. ثق بفريقنا المتمرس للتعامل مع تعقيدات استرداد الديون ، وضمان الامتثال لجميع المتطلبات القانونية والممارسات الأخلاقية. استعد السيطرة على أموالك وركز على أولوياتك الأساسية بينما نعمل بجد لاسترداد ما هو حق لك. فلنكن شريكك الموثوق به في تسوية الديون. "
							...</div>
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
					<div class="inner-box h-100">
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
					<div class="inner-box h-100">
						<div class="icon-box">
							<span class="icon flaticon-house-outline"></span>
						</div>
						<h3>Family law</h3>
						<div class="text">قانون الأسرة: نحن نقدم المشورة القانونية الرحيمة والفعالة في مسائل الطلاق وحضانة الأطفال والتبني وغير ذلك ، مع إعطاء الأولوية لمصالح عملائنا وعائلاتهم. "المدافعون عن قانون الأسرة المتعاطفون: خدمات قانون الأسرة لدينا مكرسة لتوجيه العائلات خلال الأوقات الصعبة بالتعاطف والخبرة. بدءًا من مسائل الطلاق وحضانة الأطفال وحتى اتفاقيات ما قبل الزواج والتبني ، يقدم محامونا المتمرسون دعمًا حساسًا وشخصيًا لحماية حقوقك وصحتك. - أن تكون من أحبائك. نحن ملتزمون بإيجاد حلول ودية ، ولكن أيضًا على استعداد للتقاضي عند الضرورة ، مما يضمن مستقبلًا أكثر إشراقًا لك ولعائلتك. ثق بنا للتعامل مع المسائل القانونية لعائلتك بعناية والتزام ".</div>
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
					<div class="inner-box h-100">
						<div class="icon-box">
							<span class="icon flaticon-plan"></span>
						</div>
						<h3>Contracts & agreements</h3>
						<div class="text">العقود والاتفاقيات العقارية: من معاملات الملكية إلى قضايا المؤجر والمستأجر ، يتعامل فريقنا مع تعقيدات قانون العقارات لحماية مصالحك. "توطيد علاقاتك من خلال العقود والاتفاقيات القوية: تضمن خدمات العقود والاتفاقيات الشاملة لدينا أن صفقاتك التجارية وترتيباتك الشخصية ترتكز بقوة على مستندات ملزمة قانونًا. يقوم فريقنا من الخبراء القانونيين من ذوي الخبرة بصياغة مسودات ومراجعات وتفاوض بشأن العقود المصممة خصيصًا لك بدقة احتياجاتك وتخفيف المخاطر وحماية مصالحك. سواء كانت عقودًا تجارية أو اتفاقيات إيجار أو عقود عمل ، فإننا نقدم الوضوح والدقة اللازمتين لبناء علاقات ثقة وتعزيز النتائج الناجحة. قم بتأمين مستقبلك من خلال حلول العقود الموثوقة لدينا. "</div>
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
	
	<!-- End Form Section -->


	<!--Main Footer-->
	<?php include('includes/footer.php') ?>

</div>
<!--End pagewrapper-->
<?php require_once __DIR__ . '/../common/includes/footer.php'; ?>
