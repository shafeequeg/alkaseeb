<?php
$PAGE_TITLE = "Portfolio";
$PAGE = "portfolio";
require_once __DIR__ . '/../common/includes/header.php'; 



?>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
 	
    <!-- Main Header-->
    <?php include('includes/header.php') ?>
    <!--End Main Header -->
	<?php 

$id = $_REQUEST['id'];

$res1=$obj->select_portfolio(" where product_id=$id");
while($row1=mysqli_fetch_assoc($res1)){
 
    $desc = $row1['ar_description'];
    $title = $row1['ar_title'];
    
    

}
?>
	<!--Form Back Drop-->
    <div class="form-back-drop"></div>
	
    <!-- Hidden Navigation Bar -->
	<?php include('includes/hidden-nav.php') ?>
	<!-- End / Hidden Bar -->
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url(<?= $rootUrl; ?>/common/images/background/4.jpg)">
    	<div class="container">
			<div class="content">
				<h1>تفاصيل</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">بيت</a></li>
					<li></li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Portfolio Section Two -->
	<section class="portfolio-single-section arabic-section">
		<div class="container">
			<!-- Sec Title -->
			
			
			<div class="row clearfix">
			
				<!-- Image Column -->
				
				
				<!-- Content Column -->
				<div class="content-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<h3><?php echo $title ?></h3>
						<div class="text">
							<p><?php echo $desc ?></p>
						</div>
						
					</div>
				</div>
				
			</div>
			
			<!-- Lower Section -->
			
			
		</div>
	</section>
	
	
	
	<!--Main Footer-->
	<?php include('includes/footer.php') ?>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<?php require_once __DIR__ . '/../common/includes/footer.php'; ?>
