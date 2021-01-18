<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Mukta+Vaani:300,400,500,600,700|Open+Sans:300,400,600,700,800,900" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('demos/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('demos/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('demos/css/dark.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('demos/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('demos/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('demos/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('demos/css/responsive.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{asset('assets/css/colors.php?color=c85e51')}}" type="text/css" />

	<link rel="stylesheet" type="text/css" href="{{asset('demos/include/rs-plugin/css/settings.css')}}" media="screen" />
	<link rel="stylesheet" type="text/css" href="{{asset('demos/include/rs-plugin/css/layers.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('demos/include/rs-plugin/css/navigation.css')}}">
	<!-- car Specific Stylesheet -->




	<link rel="stylesheet" href="{{asset('one-page/css/et-line.css')}}" type="text/css" />



	<!-- Hosting Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('demos/course/css/fonts.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('demos/course/course.css')}}" type="text/css" />
	<!-- / -->

	<!-- Document Title
	============================================= -->
	<title>Tutorybd Demo | Marinoft</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar" class="bgcolor dark">

			<div class="container clearfix">

				<div class="row justify-content-between">
					<div class="col-md-2">

						<!-- Top Links
						============================================= -->
						<!-- .top-links end -->

					</div>

					<div class="col-md-10 d-flex justify-content-center justify-content-md-end">

						<!-- Top Links
						============================================= -->
						<div class="top-links">
							<ul>
								<li><a href="#">Courses</a></li>
								<li class="d-none d-sm-inline-block"><a href="#"><i class="icon-download-alt"></i> Download App</a></li>
							</ul>
						</div><!-- .top-links end -->

						<div id="top-social">
							<ul>
								<li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
								<li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
								<li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
								<li><a href="tel:+91.11.85412542" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+91.11.85412542</span></a></li>
								<li><a href="mailto:info@canvas.com" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text">info@canvas.com</span></a></li>
							</ul>
						</div><!-- #top-social end -->

					</div>
				</div>

			</div>

		</div>

		<!-- Header
		============================================= -->
		<header id="header" class="sticky-style-2">

			<div class="container clearfix">

				<nav class="navbar navbar-expand-lg p-0 m-0">
					<div id="logo">
						<a href="index.html" class="standard-logo"><img src="demos/customImg/logo.png" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo"><img src="demos/course/images/logo@2x.png" alt="Canvas Logo"></a>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-line-menu"></span>
					</button>
					<div class="collapse navbar-collapse align-items-end" id="navbarNav">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="/">Home</a>
							</li>

							<li class="nav-item">
								<a href="#instructor" class="nav-link">Instructors</a>
							</li>
							<li class="nav-item">
								<a href="/" class="nav-link">Courses</a>
							</li>
							<li class="nav-item">
								<a href="{{url('about/show')}}" class="nav-link">About Us</a>
							</li>
							<li class="nav-item">
								<a href="{{url('/login')}}" class="nav-link">Contact Us</a>
							</li>
						</ul>
					</div>
				</nav>

			</div>

			<div id="header-wrap" class="bg-light">

				<!-- Primary Navigation
				============================================= -->
				<nav id="primary-menu" class="with-arrows style-2">

					<div class="container clearfix">

						<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>





						{{--<!-- Top Search--}}
						{{--============================================= -->--}}
						{{--<div id="top-search" class="ml-3">--}}
							{{--<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>--}}
							{{--<form action="search.html" method="get">--}}
								{{--<input type="text" name="q" class="form-control" value="" placeholder="Find Your Courses Here..">--}}
							{{--</form>--}}
						{{--</div><!-- #top-search end -->--}}

						<div class="header-buttons">
							<a href="{{url('/register')}}" class="button button-rounded button-border button-small">Log In</a>
							<a href="{{url('/login')}}" class="button button-rounded button-small ml-2">Sign Up</a>
						</div>

					</div>

				</nav><!-- #primary-menu end -->

			</div>

		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element slider-parallax clearfix" style="height: 550px;">

			<!-- HTML5 Video Wrap
			============================================= -->
			<div class="video-wrap">
				<video id="slide-video" poster="demos/course/images/video/poster.jpg" preload="auto" loop autoplay muted>
					<source src='demos/course/images/video/1.mp4' type='video/mp4' />
				</video>
				<div class="video-overlay" style="background: rgba(0,0,0,0.5); z-index: 1"></div>
			</div>

			<div class="vertical-middle center">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-7">
							<div class="slider-title mb-5 dark clearfix">
								<h2 class="text-white text-rotater mb-2" data-separator="," data-rotate="fadeIn" data-speed="3500">Learn More About <span class="t-rotate text-white">Development,Photography,Teacher Training,Business,Lifestyle,Language,Health,Fitness,Music</span>.</h2>
								<p class="lead mb-0 uppercase ls2" style="color: #CCC; font-size: 110%">What Do You Want To Learn?</p>
							</div>
							<div class="clear"></div>
							<div class="input-group input-group-lg mt-1">
								<input class="form-control rounded noborder" type="search" placeholder="Search Your Courses.." aria-label="Search">
								<div class="input-group-append">
									<button class="btn" type="submit"><i class="icon-line-search t700"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>


				<div class="section topmargin-lg parallax" style="padding: 80px 0 60px; background-image: url('demos/course/images/icon-pattern.jpg'); background-size: auto; background-repeat: repeat"  data-bottom-top="background-position:0px 100px;" data-top-bottom="background-position:0px -500px;">

					<!-- Wave Shape Divider
					============================================= -->
					<div class="wave-top" style="position: absolute; top: 0; left: 0; width: 100%; background-image: url('images/shape-dividers/wave-3.svg'); height: 12px; z-index: 2; background-repeat: repeat-x;"></div>

					<div class="container">

						<div class="heading-block nobottomborder mb-5 center">
							<h3>Our Services</h3>
							<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla natus mollitia ipsum. Voluptatibus, perspiciatis placeat.</span>
						</div>

						<div class="clear"></div>

						<div class="row mt-2">

							<!-- Course 1
							============================================= -->
							<div class="col-md-4 mb-5">
								<div class="card course-card hover-effect noborder">
									<a href="/"><img class="card-img-top" src="{{asset('demos/course/images/courses/1.jpg')}}" alt="Card image cap"></a>
									<div class="card-body">
										<h4 class="card-title t700 mb-2"><a href="#">Home Tutor</a></h4>
										<p class="mb-2 card-title-sub uppercase t400 ls1"><a href="#" class="text-black-50">Language</a></p>
										<div class="rating-stars mb-2"><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-half-full"></i> <span>4.7</span></div>
										<p class="card-text text-black-50 mb-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
									<div class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted">
										<div class="badge alert-primary">View More</div>
										<a href="/" class="text-dark position-relative"><i class="icon-line2-user"></i> <span class="author-number">1</span></a>
									</div>
								</div>
							</div>

							<!-- Course 2
							============================================= -->
							<div class="col-md-4 mb-5">
								<div class="card course-card hover-effect noborder">
									<a href="/"><img class="card-img-top" src="{{asset('demos/course/images/courses/2.jpg')}}" alt="Card image cap"></a>
									<div class="card-body">
										<h4 class="card-title t700 mb-2"><a href="#">Video Courses</a></h4>
										<p class="mb-2 card-title-sub uppercase t400 ls1"><a href="#" class="text-black-50">Music</a></p>
										<div class="rating-stars mb-2"><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i> <span>4.9</span></div>
										<p class="card-text text-black-50 mb-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
									<div class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted">
										<div class="badge alert-warning">View more</div>
										<a href="/" class="text-dark position-relative"><i class="icon-line2-user"></i> <span class="author-number">1</span></a>
									</div>
								</div>
							</div>

							<!-- Course 3
							============================================= -->
							<div class="col-md-4 mb-5">
								<div class="card course-card hover-effect noborder">
									<a href="/"><img class="card-img-top" src="{{asset('demos/course/images/courses/3.jpg')}}" alt="Card image cap"></a>
									<div class="card-body">
										<h4 class="card-title t700 mb-2"><a href="#">Online live Classes</a></h4>
										<p class="mb-2 card-title-sub uppercase t400 ls1"><a href="#" class="text-black-50">Design Tools</a></p>
										<div class="rating-stars mb-2"><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-half"></i> <span>4.4</span></div>
										<p class="card-text text-black-50 mb-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
									<div class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted">
										<div class="badge alert-warning">View More</div>
										<a href="/" class="text-dark position-relative"><i class="icon-line2-user"></i> <span class="author-number">1</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Wave Shape Divider - Bottom
					============================================= -->
					<div class="wave-bottom" style="position: absolute; top: auto; bottom: 0; left: 0; width: 100%; background-image: url('images/shape-dividers/wave-3.svg'); height: 12px; z-index: 2; background-repeat: repeat-x; transform: rotate(180deg);"></div>
				</div>

				<!-- Instructors Section
				============================================= -->
				<div class="section nobg" id="instructor" style="padding: 60px 0 40px;">
					<div class="container">

						<div class="heading-block nobottomborder mb-5 center">
							<h3>Most Popular Instructors</h3>
							<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla natus mollitia ipsum. Voluptatibus, perspiciatis placeat.</span>
						</div>

						<div class="clear"></div>

						<div class="row">
                        @foreach($tests as $list)
							<!-- Instructors 1
							============================================= -->
							<div class="col-lg-3 col-sm-6 mb-4">
								<div class="feature-box hover-effect shadow-sm fbox-center fbox-bg fbox-light fbox-effect">
									<div class="fbox-icon">


												<i><img src="{{ asset('demos\course\images\instructor\1.jpg')}}" class="img-responsive" alt="User Image"></i>

									</div>
									<h3 class="mb-4 nott ls0"><a href="#" class="text-dark">{{$list->fname}} {{$list->fname}}</a><br><small class="subtitle nott color">Digital Marketing</small></h3>
									<p class="text-dark"><strong>2342</strong> Students</p>

									<p class="text-dark mt-0"><strong>{{$list->count}}</strong> Courses</p>
								</div>
							</div>
							@endforeach






						</div>
					</div>
				</div>

				<!-- Featues Section
				============================================= -->
				<div class="section mt-5 mb-0" style="padding: 120px 0; background-image: url('demos/course/images/icon-pattern-bg.jpg'); background-size: auto; background-repeat: repeat">

					<!-- Wave Shape
					============================================= -->
					<div class="wave-top" style="position: absolute; top: 0; left: 0; width: 100%; background-image: url('images/shape-dividers/wave-3.svg'); height: 12px; z-index: 2; background-repeat: repeat-x;"></div>

					<div class="container">
						<div class="row">

							<div class="col-lg-8">
								<div class="row dark clearfix">

									<!-- Feature - 1
									============================================= -->
									<div class="col-md-6">
										<div class="feature-box media-box bottommargin">
											<div class="fbox-icon">
												<a href="#">
													<i class="icon-line2-book-open noradius nobg tleft"></i>
												</a>
											</div>
											<div class="fbox-desc">
												<h3 class="text-white">21,000 Online Courses</h3>
												<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
											</div>
										</div>
									</div>

									<!-- Feature - 2
									============================================= -->
									<div class="col-md-6">
										<div class="feature-box media-box bottommargin">
											<div class="fbox-icon">
												<a href="#">
													<i class="icon-line2-note noradius nobg tleft"></i>
												</a>
											</div>
											<div class="fbox-desc">
												<h3 class="text-white">Lifetime Access</h3>
												<p class="text-white">Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore totam. Accusamus perspiciatis asperiores labore esse.</p>
											</div>
										</div>
									</div>

									<!-- Feature - 3
									============================================= -->
									<div class="col-md-6">
										<div class="feature-box media-box bottommargin">
											<div class="fbox-icon">
												<a href="#">
													<i class="icon-line2-user noradius nobg tleft"></i>
												</a>
											</div>
											<div class="fbox-desc">
												<h3 class="text-white">Expert Instructors</h3>
												<p class="text-white">Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum quo.</p>
											</div>
										</div>
									</div>

									<!-- Feature - 4
									============================================= -->
									<div class="col-md-6">
										<div class="feature-box media-box bottommargin">
											<div class="fbox-icon">
												<a href="#">
													<i class="icon-line2-globe noradius nobg tleft"></i>
												</a>
											</div>
											<div class="fbox-desc">
												<h3 class="text-white">Different Languages</h3>
												<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
											</div>
										</div>
									</div>

								</div>
							</div>

							<!-- Registration Foem
							============================================= -->
							<div class="col-lg-4">

								<div class="card shadow" data-animate="shake" style="opacity: 1 !important">
									<div class="card-body">

										<div class="badge registration-badge shadow-sm alert-primary">FREE</div>
										<h4 class="card-title ls-1 mt-4 t700 h5">Get Your Free Online Courses!</h4>
										<h6 class="card-subtitle mb-4 t400 uppercase ls2 text-black-50">Free Registration here.</h6>

										<div class="form-widget">
											<div class="form-result"></div>

											<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

												<div class="form-process"></div>

												<div class="col_full">
													<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control border-form-control required" placeholder="Your Full Name:" />
												</div>
												<div class="col_full">
													<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control border-form-control" placeholder="Your Email Address:" />
												</div>

												<div class="col_full">
													<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control border-form-control required" placeholder="Your Phone Number:" />
												</div>

												<div class="col_full">
													<button class="button button-rounded btn-block button-large bgcolor text-white nott ls0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Apply It Now</button>
													<br>
													<small style="display: block; font-size: 12px; margin-top: 15px; color: #AAA;"><em>We'll do our best to get back to you within 6-8 working hours.</em></small>
												</div>

												<div class="clear"></div>

												<div class="col_full hidden">
													<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
												</div>

												<input type="hidden" name="prefix" value="template-contactform-">

											</form>
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>

					<!-- Wave Shape
					============================================= -->
					<div class="wave-bottom" style="position: absolute; top: auto; bottom: 0; left: 0; width: 100%; background-image: url('images/shape-dividers/wave-3.svg'); height: 12px; z-index: 2; background-repeat: repeat-x; transform: rotate(180deg);"></div>

				</div>

				<!-- Promo Section
				============================================= -->
				<div class="section m-0" style="padding: 120px 0; background: #FFF url('demos/course/images/instructor.jpg') no-repeat left top / cover">
					<div class="container">
						<div class="row">

							<div class="col-md-7"></div>

							<div class="col-md-5">
								<div class="heading-block nobottomborder mb-4 mt-5">
									<h3>Become an Instructor!</h3>
									<span>Teach What You Love.</span>
								</div>
								<p class="mb-2">Monotonectally conceptualize covalent strategic theme areas and cross-unit deliverables.</p>
								<p>Consectetur adipisicing elit. Voluptate incidunt dolorum perferendis accusamus nesciunt et est consequuntur placeat, dolor quia.</p>
								<a href="{{url('/register')}}" class="button button-rounded button-xlarge ls0 ls0 nott t400 nomargin">Start Teaching</a>
							</div>

						</div>
					</div>
				</div>

				<div class="promo promo-light promo-full footer-stick" style="padding: 60px 0 !important;">
					<div class="container clearfix">
						<h3 class="ls-1">Call us today at <span>01711000000</span> or Email us at <span>tutoryBD.com</span></h3>
						<span class="text-black-50">We strive to provide Our Customers with Top Notch Support to make their Theme Experience Wonderful.</span>
						<a href="{{url('/register')}}" class="button button-xlarge button-rounded nott ls0 t400">Start Now</a>
					</div>
				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="row">
						<div class="col-6 col-md"  style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
							<img class="mb-3" src="demos/CustomImg/logo.png" alt="" width="160">
							<small class="d-block mb-4 text-muted">&copy; 2017-2018</small>
							<p class="text-white-50" style="font-size: 16px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, impedit quam nemo doloremque sed, dolores.</p>
							<a href="#" class="mb-2 d-block"><i class="icon-line2-call-in mr-2"></i>+91-111-222-333</a>
							<a href="#"><i class="icon-line2-envelope mr-2"></i>info@canvas.com</a>
						</div>
						<div class="col-6 col-md">
							<h4 class="uppercase ls2 t400">Best Courses</h4>
							<ul class="list-unstyled nobottommargin">
								<li><h5 class="mb-0"><a href="#" class="text-white">Cooking Classes</a></h5><p>Dylan Meringue</p></li>
								<li><h5 class="mb-0"><a href="#" class="text-white">Learning Spanish</a></h5><p>Gunther Beard</p></li>
								<li><h5 class="mb-0"><a href="#" class="text-white">Website Development</a></h5><p>Desmond Eagle</p></li>
							</ul>
						</div>
						<div class="col-6 col-md col-sm mt-4 mt-md-0 mt-lg-0 mt-xl-0">
							<h4 class="uppercase ls2 t400">Support</h4>
							<ul class="list-unstyled nobottommargin">
								<li><h5 class="mb-2 t400"><a href="#">My Account</a></h5></li>
								<li><h5 class="mb-2 t400"><a href="#">Become an Instructor</a></h5></li>
								<li><h5 class="mb-2 t400"><a href="#">Free Courses</a></h5></li>
								<li><h5 class="mb-2 t400"><a href="#">Mobile Apps</a></h5></li>
								<li><h5 class="mb-2 t400"><a href="#">Contact Us</a></h5></li>
							</ul>
						</div>
						<div class="col-6 col-md mt-4 mt-md-0 mt-lg-0 mt-xl-0">
							<h4 class="uppercase ls2 t400">Worldwide</h4>
							<a href="#"><img src="demos/course/images/map.png" alt=""></a>
						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>
			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="row align-items-center justify-content-between">
						<div class="col-md-6">
							Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
							<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
						</div>

						<div class="col-md-6 d-flex justify-content-md-end mt-4 mt-md-0">
							<div class="copyrights-menu copyright-links mb-0 clearfix">
								<a href="#">Home</a>/<a href="#">About Us</a>/<a href="#">Price</a>/<a href="#">Contact</a>
							</div>
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{asset('demos/js/jquery.js')}}"></script>
	<script src="{{asset('demos/js/plugins.js')}}"></script>

	<!-- Footer Scripts
    ============================================= -->
	<script src="{{asset('demos/js/functions.js')}}"></script>

</body>
</html>