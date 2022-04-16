<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>I-MED home</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- LOADER -->
     <!-- <div id="preloader">
		<div class="loader">
			<img src="images/preloader.gif" alt="" />
		</div>
    </div>end loader -->
    <!-- END LOADER -->
	
	<!-- Start top bar -->
		<div class="container">
			<div class="row">
				<!-- <div class="col-lg-6">
					 <div class="left-top">
						<a class="new-btn-d br-2" href="#"><span>Book Appointment</span></a>
						<div class="mail-b"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> demo@gmail.com</a></div>
					</div>
				</div> -->
				
			</div>
		</div>
	<!-- End top bar -->
	
	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<!--<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="image"></a>-->
				<a class="menu-trigger"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                <h1><b>Welcome to I-MED! &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp</b></h1>    
				<ul class="navbar-nav">
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#about">About Us</a></li>
                        <li><a class="nav-link" href="#appointment">Order</a></li>
                        <li><a class="nav-link" href="#contact">Contact</a></li>
                        <li>
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <li>
                                <x-app-layout>
    
                                </x-app-layout>
                                </li>
                        @else
                            <li><a class="nav-link" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">LOG IN</a></li>
                        @if (Route::has('register'))
                            <li><a class="nav-link" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">REGISTER</a></li>
                        @endif
                        @endauth
                        </div>
                        @endif
            </li>

                </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->
	
	<!-- Start Banner -->
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-01.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Welcome to I-MED</h1>
								
								
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-02.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Your one stop solution to order medicines</h1>
								
								
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-03.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Don't step out to buy medicines</h1>
								
							</div>
						</div>
						
					</div>
				</div><!-- .pogoSlider -->
			</div>
		</div>
	</div>
	<!-- End Banner -->
	
	<!-- Start About us -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>About Us</h2>
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<h2> Welcome to I-MED</h2>
								<p>I-Med is an online medicine store. We started our journey amidst COVID and have been successfully delivering medicines ever since. We are your one stop solution for ordering medicines easily online. Our goal is to get you your medications on time. Just click a few buttons and you will get your medicines at your doorstep. Contact us for more details. </p>
								
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="about-m">
									<ul id="banner">
										<li>
											<img src="images/about-img-01.jpg" alt="">
										</li>
										<li>
											<img src="images/about-img-02.jpg" alt="">
										</li>
										<li>
											<img src="images/about-img-03.jpg" alt="">
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About us -->
	
	
	<!-- Start Order Now -->
	<div id="appointment" class="appointment-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Order Now</h2>
						<p>Easy order placing facility </p>
					</div>
				</div>
			</div>
			<div align="center">
				<div class="col-lg-6 col-md-6">
					<div class="well-block">
                        <div class="well-title">
                            <h2>Login To Place an Order</h2>
                        </div>
                        <form action="{{url('/taketologin')}}">
                            @csrf
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="singlebutton" name="singlebutton" class="new-btn-d br-2">Order Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Order Now -->
	
	
				<div id="contact" class="contact-box">
					<div class="contact-block">
						<div class="row">
							<div class="col-lg-12">
								<div class="title-box">
						<h2> Contact Us</h2>
								</div>
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-location-arrow" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Address</h4>
								<p>Dhaka Cantonment</p>
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Email</h4>
								<a href="#">imedofficial_info@gmail.com</a><br>
								<a href="#">imed_info@gmail.com</a>
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Phone Number</h4>
								<a href="#">017-00000000</a><br>
								<a href="#">018-00000000</a>
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
	<!-- End Contact -->
	
	
	
	
	
	<a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/TweenMax.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script src="js/isotope.min.js"></script>	
	<script src="js/images-loded.min.js"></script>	
    <script src="js/custom.js"></script>
</body>
</html>