
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
<html >
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
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
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
	
	
		<style>
			<!-- #RainyBackground{
				
			} -->
		</style>
</head>
<body>
    <!-- ? Preloader Start -->
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
                                <a href="https://openskiesfellows.org/" target="_blank"><img src="assets/img/logo/osf_logo.png" alt=""></a>
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
        <div class="slider-area" id="RainyBackground">
						<!-- Rainy Start -->
							<!-- <script src="assets/js/rainy/particles.js"></script>
							<script src="assets/js/rainy/CustomRainy.js"></script> -->
						<!-- Rainy End -->
            <div class="slider-active dot-style">
						
                <!-- Slider Single -->
                <div class="single-slider d-flex align-items-center slider-height">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10 ">
                             <div class="hero-wrapper">
                                <!-- Video icon -->
                                <div class="video-icon">
                                    <a class="popup-video btn-icon" href="assets/videos/try_one.mp4" data-animation="bounceIn" data-delay=".4s">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".3s" style="color:#3498db ">Flood Simulation</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">The Simulation Model, at<br> Zanzibar City.</p>
                                    <a href="Proximity/proximity.php" class="btn" data-animation="fadeInLeft" data-delay=".3s">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
			
            <!-- Slider Single -->
            <div class="single-slider d-flex align-items-center slider-height">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-8 col-md-10 ">
                         <div class="hero-wrapper">
                            <!-- Video icon -->
                            <div class="video-icon">
                                <a class="popup-video btn-icon" href="assets/videos/try_one.mp4" data-animation="bounceIn" data-delay=".4s">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".3s">Flood Simulation</h1>
                                <p data-animation="fadeInUp" data-delay=".6s">The Simulation Model, at <br>Zanzibar City.</p>
                                <a href="#" class="btn" data-animation="fadeInLeft" data-delay=".3s">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
<!-- Slider Area End -->
			
<!--? About-2 Area Start -->
<div class="about-area2 section-padding40">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <!-- about-img -->
                 <div class="about-img ">
					<img src="assets/img/gallery/v1.gif" height="400px" width="800px" alt=""/>
					<!--<div id="rotator"> <img src="assets/img/gallery/kwe02.jpg" alt=""/> <img src="assets/img/gallery/mwa01.jpg" alt=""/> <img src="assets/img/gallery/mwa02.jpg" alt=""/>  </div> ---> 
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-caption">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-35">
                        <h2 style="color: #3498db ">Zanzibar Drainage</h2>
						<h2 style="color:  #3498db ">System</h2>
                    </div>
                    <p class="pera-top mb-40"style="color:#3498db ">Urban West</p>
                    <p class="pera-bottom mb-30">The failure of control of the drainage impediments results major threats    
                        toward urban development and affect infrastructure 
                    in Zanzibar Island (Unguja).</p>
                    <div class="icon-about">
						 <img src="assets/img/icon/about1.svg" alt="" class=" mr-20">
						 <img src="assets/img/icon/about2.svg" alt="" class=" mr-20">
						 <img src="assets/img/icon/about2.svg" alt="" class=" mr-20">
						 <img src="assets/img/icon/about2.svg" alt="">
					</div>
				</div>
			</div>
     </div>
 </div>
</div>
<!-- About-2 Area End -->
<section class="wantToWork-area section-bg3" data-background="assets/img/gallery/section_bg01.png">
    <div class="container">
        <div class="wants-wrapper w-padding2">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-7 col-lg-9 col-md-8">
                    <div class="wantToWork-caption wantToWork-caption2">
                        <h2 style="color: #3498db ">Flood Simulation <br>Model</h2>
                        <p>Making A Flood Simulation Model <br> Open-Source Tools In Zanzibar.</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <a href="Proximity/proximity.php" class="btn f-right sm-left">View Model</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--? Services Area Start -->
<div class="service-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <img src="assets/img/icon/services1.svg" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5><a>Latifa Khamis<br>Developer of Flood Simulation<br>+255 774 154 179</a></h5>
                        
						<p></p>
                        <a><i></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <img src="assets/img/icon/services1.svg" alt="">
                    </div>
                     <div class="cat-cap">
                        <h5><a>Ms Khadija Abdulla<br>GIS Expert & Drone<br>+255 773 379 598</a></h5>
                        
						<p></p>
                        <a><i></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <img src="assets/img/icon/services1.svg" alt="">
                    </div>
                     <div class="cat-cap">
                        <h5><a>William Evans<br>Project Director<br>+(434)242 3842</a></h5>
						<p></p>
                        <a><i></i></a>
                    </div>
                </div>
            </div>
			
			 <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <img src="assets/img/icon/services1.svg" target="_blank" alt="">
                    </div>
                     <div class="cat-cap">
                         <h5><a>Digna Mushi<br>Innovation Officer<br>+255 714 574 245</a></h5>
						<p></p>
                        <a><i></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Area End -->
<!--? Testimonial Area Start -->
<section class="testimonial-area testimonial-padding fix">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class=" col-lg-9">
                <div class="about-caption">
                    <!-- Testimonial Start -->
                  <div class="h1-testimonial-active dot-style">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial position-relative">
                            <div class="testimonial-caption">
                                <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                <p>"I Latifa Khamis Hemed,I'm Tanzanian ,Graduate at The State University of Zanzibar (SUZA) in Information Technology Application and Management. I'm working with Graphic Designer, Website Designer & Map Developer, GIS and Data input. I had participated in different project like UNDP(Tourist attraction project), School Mapping project(SUZA Youthmappers), FAWE (Student Dropout School project ) ,Resilience Academy Tanzania(Internship Zanzibar Mapping) and OpenStreetMap-Uganda (Mapping Internship)". </div>
                            <!-- founder -->
                            <div class="testimonial-founder d-flex align-items-center">
                                <div class="founder-img">
                                    <img src="assets/img/icon/le.png"height="100px"width="100px" alt="">
                                </div>
                                <div class="founder-text">
                                    <span>Bintkhamis</span>
                                    <p>Developer of Flood Simulation Model</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial position-relative">
                            <div class="testimonial-caption">
                                <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                <p>"Is a fellowship program led by Open Map Development Tanzania in collaboration with Uhuru labs and the Humanitarian OpenStreetMap Team, designed to develop youth in urban settings, giving them power and responsibility to gain technical and social skills"</p>
							</div>
                            <!-- founder -->
                            <div class="testimonial-founder d-flex align-items-center">
                                <div class="founder-img">
                                    <img src="assets/img/icon/la.png" alt=""height="100px"width="100px">
                                </div>
                                <div class="founder-text">
                                    <span>OpenSkiesFellows </span>
                                    <p>Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial End -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--? Testimonial Area End -->
<!--? video_start -->
<div class="container">
    <div class="video-area section-bg2 d-flex align-items-center"  data-background="assets/img/gallery/d3.png">
        <div class="video-wrap position-relative">
            <div class="video-icon" >
                <a class="popup-video btn-icon" href="assets/videos/try_one.mp4"><i class="fas fa-play"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- video_end -->      
<!--? Blog Area Start -->

<!-- Blog Area End -->
<!--? About Law Start-->
<section class="about-low-area mt-30">
    <div class="container">
        <!--<div class="about-cap-wrapper">
            <div class="row">
                <div class="col-xl-5  col-lg-6 col-md-10 offset-xl-1">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle --
                        <div class="section-tittle mb-35">
                            <h2>Flood Simulation Model.</h2>
                        </div>
                        <p>Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, Maelezo, Maelezo.</p>
                        <a href="drainage.html" class="border-btn">View Simulation</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img --
                    <div class="about-img">
                        <div class="about-font-img">
                            <img src="assets/img/gallery/.jpg" alt="">
                        </div>
                    </div>
                </div> 
            </div> 
        </div> -->
    </div>
</section>
<!-- About Law End-->
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
                                                    <li><a href="https://bintkhamisfloodsimulation.blogspot.com/2021/11/flood-simulation-model-flood-simulation.html"target="_blank">Blog</a></li>
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

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

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