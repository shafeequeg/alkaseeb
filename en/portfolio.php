<?php
$PAGE_TITLE = "Portfolio";
$PAGE = "portfolio";
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
				<h1>Portfolio</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Portfolio</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Portfolio Section Two -->
	<section class="portfolio-section-two">
		<div class="container">
			<!-- Sec Title -->
			<div class="section-title centered">
				<div class="title">Our Portfolio</div>
				<!-- <h3>We are here to fight against any <br> violance with Project <span>experience</span></h3> -->
			</div>
			
			<!--MixitUp Galery-->
            <div class="mixitup-gallery">
                
                <!--Filter-->
                <div class="filters clearfix">
                	
                	<ul class="filter-tabs filter-btns text-center clearfix">
                        <li class="active filter" data-role="button" data-filter="all">All</li>
						<?php
										$res1=$obj->select_category(" where delete_status= 0");
										while($row1=mysqli_fetch_assoc($res1)){
										?>
                        <li class="filter" data-role="button" data-filter=".<?php echo $row1['cat_id'] ?>"><?php echo $row1['cat_name'] ?></li>
						<?php } ?>
                        <!-- <li class="filter" data-role="button" data-filter=".criminal">Criminal</li>
                        <li class="filter" data-role="button" data-filter=".civil">Civil</li>
                        <li class="filter" data-role="button" data-filter=".personal">Personal</li>
						<li class="filter" data-role="button" data-filter=".others">Others</li> -->
                    </ul>
                    
                </div>
                
                <div class="filter-list row clearfix">
					<?php
					$res=$obj->select_portfolio(" where delete_status= 0");
					while($row=mysqli_fetch_assoc($res)){
					?>
					<!-- Portfolio Block Two -->
					<div class="portfolio-block-two mix <?php echo $row['product_category'] ?> col-lg-4 col-md-4 col-sm-6">
						<div class="inner-box">
							<div class="image">
								<img src="alkaaseb_admin/uploads/products/<?php echo $row['photo'] ?>" alt="" />
								<div class="overlay-box">
									<a href="alkaaseb_admin/uploads/products/<?php echo $row['photo'] ?>" data-fancybox="gallery-1" data-caption="" class="plus flaticon-plus"></a>
								</div>
							</div>
							<div class="lower-content">
								<h5><a href="details.php?id=<?php echo $row['product_id'] ?>"><?php echo $row['title'] ?> </a></h5>
								<!-- <div class="designation"></div> -->
							</div>
						</div>
					</div>
					<?php } ?>
					<!-- Portfolio Block Two -->
					
					
				</div>
			</div>
		
			<!-- Button Box -->
			<!-- <div class="button-box text-center">
				<a href="#" class="theme-btn btn-style-one">Load More</a>
			</div> -->
		
		</div>
	</section>
	
	
	
	<!--Main Footer-->
	<?php include('includes/footer.php') ?>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<?php require_once __DIR__ . '/../common/includes/footer.php'; ?>
