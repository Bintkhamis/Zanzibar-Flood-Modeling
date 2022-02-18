<?php
if(isset($_POST["sub"])) {
	include("connection.php");
	$sql = "INSERT INTO comments( Email,Comments) VALUES ( :Email,:Comments)";
	
	$pdo_statement = $con->prepare( $sql );	
	$result = $pdo_statement->execute( array( ':Email'=>$_POST['Email'],':Comments'=>$_POST['Comments']) );
	if (!empty($result) ){
	header('location:index.php');
	}
}


?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Bintkhamis</title>
	<meta name="description" content="Flood Simulation Model">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Beifa Technology">
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/loc.png">

	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/head_anim.css">
	
		<!-- Css Founder -->
		<link rel="stylesheet" href="assets/founder/css/founder_owl.carousel.min.css" type="text/css">
		<link rel="stylesheet" href="assets/founder/css/style.css" type="text/css"> 
	
</head>
<body>
	<!--? Preloader Start -->
	<div id="preloader-active">
		<div class="preloader d-flex align-items-center justify-content-center">
			<div class="preloader-inner position-relative">
				<div class="preloader-circle"></div>
				<div class="preloader-img pere-text">
					<img src="assets/img/logo/osf_logo2.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<!-- Preloader Start -->
	<header>
		<!--? Header Start -->
		<div class="header-area">
			<div class="main-header header-sticky">
				<div class="container-fluid">
					<div class="row align-items-center">
						<!-- Logo -->
						<div class="col-xl-2 col-lg-2 col-md-1">
							<div class="logo" id="div_branding">
								<a href="index.php"><img src="assets/img/logo/osf_logo.png" alt=""></a>
							</div>
						</div>
						<div class="col-xl-10 col-lg-10 col-md-10">
							<div class="menu-main d-flex align-items-center justify-content-end">
								<!-- Main-menu -->
								<div class="main-menu f-right d-none d-lg-block">
									<nav> 
										<ul id="navigation">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="drainage.php">Drainage</a></li>
											<li><a href="Proximity/proximity.php">Proximity</a>
                                                <ul class="submenu">
                                                    <li><a href="Proximity/proximity.php">Proximity</a></li>
													<li><a href="flood_event.php">Flood Events</a></li>
                                                </ul>
                                            </li>
											<li><a href="contact.php">Contact</a>
                                                <ul class="submenu">
                                                    <li><a href="https://bintkhamisfloodsimulation.blogspot.com/2021/11/flood-simulation-model-flood-simulation.html"target="_blank">Blog</a></li>
													<li><a href="contact.php">Contacts</a></li>
                                                </ul>
                                            </li>
                                        </ul>
									</nav>
								</div>
								<div class="header-right-btn f-right d-none d-lg-block ml-15">
									<a href="#" class="btn header-btn">Bint Khamis</a>
								</div>
							</div>
						</div>   
						<!-- Mobile Menu -->
						<div class="col-12">
							<div class="mobile_menu d-block d-lg-none"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header End -->
	</header>
<main>
<!--? Slider Area Start-->
<div class="slider-area slider-area2">
	<div class="slider-active dot-style">
		<!-- Slider Single -->
		<div class="single-slider  d-flex align-items-center slider-height2">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-7 col-lg-8 col-md-10 ">
						<div class="hero-wrapper">
							<div class="hero__caption">
								<h1 data-animation="fadeInUp" data-delay=".3s"style="color:#3498db ;">Flood Events</h1>
								<p data-animation="fadeInUp" data-delay=".6s">Some of Flood Events that affected <br> for flood in Zanzibar City.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>    
	</div>
</div>
<!-- Slider Area End -->
<!--? Start Sample Area -->

<!-- End Button -->
<!--? Start Align Area -->
<div class="whole-wrap">
<div class="container box_1170">

	<div class="section-top-border">
		<h3>Flood Images</h3>
		<div class="row gallery-item">
			<div class="col-md-4">
				<a href="assets/img/flood_events/e1.jpg" class="img-pop-up">
					<div class="single-gallery-image" style="background: url(assets/img/flood_events/e1.jpg);"></div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="assets/img/flood_events/e2.jpg" class="img-pop-up">
					<div class="single-gallery-image" style="background: url(assets/img/flood_events/e2.jpg);"></div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="assets/img/flood_events/e3.jpg" class="img-pop-up">
					<div class="single-gallery-image" style="background: url(assets/img/flood_events/e3.jpg);"></div>
				</a>
			</div>
			<div class="col-md-6">
				<a href="assets/img/flood_events/e4.jpeg" class="img-pop-up">
					<div class="single-gallery-image" style="background: url(assets/img/flood_events/e4.jpeg);"></div>
				</a>
			</div>
			<div class="col-md-6">
				<a href="assets/img/flood_events/e5.jpeg" class="img-pop-up">
					<div class="single-gallery-image" style="background: url(assets/img/flood_events/e5.jpeg);"></div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="assets/img/flood_events/e6.jpeg" class="img-pop-up">
					<div class="single-gallery-image" style="background: url(assets/img/flood_events/e6.jpeg);"></div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="assets/img/flood_events/e7.jpeg" class="img-pop-up">
					<div class="single-gallery-image" style="background: url(assets/img/flood_events/e7.jpeg);"></div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="assets/img/flood_events/e8.jpg" class="img-pop-up">
					<div class="single-gallery-image" style="background: url(assets/img/flood_events/e8.jpg);"></div>
				</a>
			</div>
		</div>
	</div>

</div>
</div>
<!-- End Align Area -->
<!--? video_start -->
<section class="about-low-area mt-100">
<div class="container">
		<div class="video-area section-bg2 d-flex align-items-center"  data-background="assets/img/gallery/d3.png">
			<div class="video-wrap position-relative">
				<div class="video-icon" >
					<a class="popup-video btn-icon" href="assets/videos/try_one.mp4"><i class="fas fa-play"></i></a>
				</div>
				
				<!-- <video width="400" controls>
					<source src="assets/videos/try_one.mp4" type="video/mp4">
					<source src="assets/videos/try_one.ogg" type="video/ogg ">  
				</video> -->
			</div>
		</div>
</div>
</section> 
<!-- video_end -->

</main>
<footer>
    <div class="footer-wrappr section-bg3" data-background="assets/img/gallery/footer-bg.png">
        <div class="footer-area footer-padding ">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo mb-25">
                                <a href="index.php"><img src="assets/img/logo/osf_logo.png" alt=""></a>
                            </div>
                            <d iv class="header-area">
                                <div class="main-header main-header2">
                                    <div class="menu-main d-flex align-items-center justify-content-start">
                                        <!-- Main-menu -->
                                        <div class="main-menu main-menu2">
                                            <nav> 
                                                <ul>
                                                    <li><a href="index.php">Home</a></li>
                                                    <li><a href="drainage.php">Drainage</a></li>
                                                    <li><a href="Proximity/proximity.php">Proximity</a></li>
                                                    <li><a href="https://bintkhamisfloodsimulation.blogspot.com/2021/11/flood-simulation-model-flood-simulation.html">Blog</a></li>
													<li><a href="contact.php">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>  
                                </div>
                            </d>
                            <!-- social -->
                            <div class="footer-social mt-50">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-google-drive"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="footer-tittle mb-50">
                                <center><h4><strong>Subscribe Simulation Model</strong></h4></center>
                            </div>
                            <!-- Form -->
                            <div class="footer-form">
                                    <form  action="" method="POST" >
                                        <input type="email" name="Email" id="Email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email'"><br><br><br>
										<input type="text" name="Comments" id="comment" placeholder=" Suggestion Please !!!!! " class="placeholder hide-on-focus">
									   <div class="form-icon">
                                            <button type="submit"  name="sub" id="sub">
                                            Subscribe
											</button>  
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>Flood Simulation Model, Present Some areas in Zanzibar, that are experienced with flood.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
						<!-- Logo Founder -->
						    	<div class="container">
									<div class="row">
										<div class="col-lg-12">
												<marquee><b><p style="color:#3498db ;">FLOOD SIMULATION MODEL IN UBRAN WEST ZANZIBAR AT SEBLENI,NYERERE,MTUMWAJENI & MWANTENGA .<p></b></marquee>		
										</div>
									</div>
								</div>
						<!-- Logo Founder -->

        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row">
                        <div class="col-xl-10 ">
                            <div class="footer-copy-right">
									<p>
										Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Bintkhamis <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://beifatechnology.com" target="_blank">Beifa Technology</a>
									</p>
							</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</footer>
								<!-- Scroll Up -->
								<div id="back-top" >
									<a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
								</div>

<!-- JS here -->
								
<!-- Js Founder -->
<script src="./assets/founder/js/founder_jquery-3.3.1.min.js"></script>
<script src="./assets/founder/js/founder_beifa.pkgd.min.js"></script>
<script src="./assets/founder/js/founder_jquery.slicknav.js"></script>
<script src="./assets/founder/js/founder_owl.carousel.min.js"></script>
<script src="./assets/founder/js/founder_main.js"></script>

	<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
	<!-- Jquery, Popper, Bootstrap -->
	<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
	<script src="./assets/js/popper.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
	<!-- Jquery Mobile Menu -->
	<script src="./assets/js/jquery.slicknav.min.js"></script>

	<!-- Jquery Slick , Owl-Carousel Plugins -->
	<script src="./assets/js/owl.carousel.min.js"></script>
	<script src="./assets/js/slick.min.js"></script>
	<!-- One Page, Animated-HeadLin -->
	<script src="./assets/js/wow.min.js"></script>
	<script src="./assets/js/animated.headline.js"></script>
	<script src="./assets/js/jquery.magnific-popup.js"></script>
	
	<!-- Nice-select, sticky -->
	<script src="./assets/js/jquery.nice-select.min.js"></script>
	<script src="./assets/js/jquery.sticky.js"></script>
	
	<!-- contact js -->
	<script src="./assets/js/contact.js"></script>
	<script src="./assets/js/jquery.form.js"></script>
	<script src="./assets/js/jquery.validate.min.js"></script>
	<script src="./assets/js/mail-script.js"></script>
	<script src="./assets/js/jquery.ajaxchimp.min.js"></script>
	
	<!-- Jquery Plugins, main Jquery -->	
	<script src="./assets/js/plugins.js"></script>
	<script src="./assets/js/main.js"></script>
	
</body>
</html>