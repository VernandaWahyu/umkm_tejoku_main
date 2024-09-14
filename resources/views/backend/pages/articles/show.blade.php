<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title>UMKM - Ekonomi Pulih, Indonesia Maju</title>
        <meta name="description" content="Consulte is a free Bootstrap HTML Template for Investment Company">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Stylesheets -->
        <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/css/responsive.css') }}" rel="stylesheet">
    
        <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Consulte - Investment Company Bootstrap HTML Template" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:site_name" content="{{ config('app.name') }}" />
        <meta property="og:image" content="{{ asset('asset/images/favicon.png') }}" />
        <meta property="og:description" content="Consulte is a free Bootstrap HTML Template for Investment Company" />
    
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
        <!-- Add site Favicon -->
        <link rel="shortcut icon" href="{{ asset('asset/images/favicon.png') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('asset/images/favicon.png') }}" type="image/x-icon">
        <meta name="msapplication-TileImage" content="{{ asset('asset/images/favicon.png') }}" />
    
        <!-- Structured Data  -->
        <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "WebSite",
          "name": "{{ config('app.name') }}",
          "url": "{{ url('/') }}"
        }
        </script>
    </head>

<body>

<div class="page-wrapper">
 	
    <!-- Main Header-->
    <header class="main-header style-three">
    	
		<!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
					<!-- Top Left -->
					<div class="top-left">
						<!-- Info List -->
						<ul class="info-list">
							<li><a href="mailto:umkmponorogo@gmail.com"><span class="icon icofont-envelope"></span> umkmponorogo@gmail.com</a></li>
							<li><a href="tel:+1212-226-3126"><span class="icon icofont-phone"></span> +1212-226-3126</a></li>

						</ul>
					</div>
					
					<!-- Top Right -->
                    <div class="top-right pull-right">
						<!-- Social Box -->
						<ul class="social-box">
							<li class="share">Our Social</li>
							<li><a href="https://twitter.com/" class="icofont-twitter"></a></li>
							<li><a href="http://facebook.com/" class="icofont-facebook"></a></li>
							<li><a href="https://www.instagram.com/" class="icofont-instagram"></a></li>
							<li><a href="https://rss.com/" class="icofont-rss"></a></li>
							<li><a href="https://www.youtube.com/" class="icofont-play-alt-1"></a></li>
						</ul>
                    </div>
					
                </div>
            </div>
        </div>
		
    	<!-- Header Upper -->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="inner-container clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div class="logo"><a href="index.html"><img src="{{asset('asset/images/logo.png')}}" alt="" title=""></a></div>
                    </div>
					
                   	<div class="nav-outer pull-left clearfix">
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li><a href="{{ route('home') }}">Home</a></li>
									{{-- <li><a href="about.html">About Us</a></li>
									<li class="dropdown"><a href="#">Service</a>
										<ul>
											<li><a href="service.html">Service</a></li>
											<li><a href="service-detail.html">Service Detail</a></li>
										</ul>
									</li>
									<li class="current dropdown"><a href="#">Projects</a>
										<ul>
											<li><a href="project.html">Project</a></li>
											<li><a href="project-details.html">Project Details</a></li>
										</ul>
									</li>
									<li class="current dropdown"><a href="#">Blog</a>
										<ul class="from-right">
											<li><a href="blog.html">Our Blog</a></li>
											<li><a href="blog-detail.html">Blog Detail</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact</a></li> --}}
								</ul>
							</div>
							
						</nav>
						
					</div>
                   <!-- Outer Box -->
					<div class="outer-box">
						<!-- Search Btn -->
						<div class="search-box-btn search-box-outer"><span class="icon icofont-search"></span></div>
						<!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon ti-menu"></span></div>
					</div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon lnr lnr-cross"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
		
    </header>
    <!--End Main Header -->
	
	<!-- Page Title Section -->
    <div class="page-title-section">
    	<div class="auto-container">
			<ul class="post-meta">
				<li><a>Home</a></li>
				<li>{{ $article->title }}</li>
			</ul>
			<h2><span>{{ $article->title }}</h2>
		</div>
	</div>
	<!-- End Page Title Section -->
	
	<!-- Start Project Details -->
	<div class="project-section section-padding">
		<div class="auto-container">
			<div class="row">

				<!-- Portfolio Left -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="work-left work-details">
						<div class="portfolio-main-info">
							<h2 class="title">Tentang<br> Desa</h2>
							<!-- Start Details List -->
							<div class="work-details-list mt-60">

								<div class="details-list">
									<label>Categories</label>
									<span><a href="#">{{ $article->keyword }}</a></span>
								</div>

							</div>
							<!-- End Details List -->
							<!-- Start Work Share -->
							<div class="work-share section-padding-top-70">
								<h6 class="heading heading-h6"></h6>
							</div>
						</div>
					</div>
				</div>

				<!-- Work Right -->
				<div class="col-lg-7 col-md-6 offset-lg-1 col-12">
					<div class="work-left work-details mt-lg-30">
						<div class="work-main-info">
							<div class="work-content">
								<h6 class="title">Tentang Desa {{ $article->title }}</h6>

								<div class="desc mt-40">
									<div class="content mb-25">
										<p>{{ $article->content}}</p>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Start Thumbnail -->
			<div class="row">
				<div class="col-lg-12">
					<div class="custom-column-thumbnail mt-lg-70">
						<img class="w-100" src="{{ asset('storage/' . $article->image1) }}" alt="finance">
					</div>
				</div>
			</div>

			<!-- Start Digital Marketion Area -->
			<div class="row mt-lg-100">
				<div class="col-lg-4 col-md-12 col-12">
					<div class="digital-marketing">
						<h3 class="heading heading-h3">{{ $article->subtitle }}</h3>
					</div>
				</div>
				<div class="col-lg-7 col-md-12 col-12 offset-lg-1">
					<div class="digital-marketing mt-30">
						<div class="inner">
							<p>{{ $article->subcontent }}</p>
						</div>
					</div>
				</div>
			</div>
			<!-- End Digital Marketion Area -->

			<!-- Start Gallery Area -->
			<div class="custom-layout-gallery mt-lg-100">
				<div class="row mb-n30">

					<div class="col-lg-12 mtb-30">
						<div class="thumbnail">
							<img class="w-100" src="{{ asset('storage/' . $article->image2) }}" alt="finance">
						</div>
					</div>
				</div>
			</div>
			<!-- End Gallery Area -->


		</div>
	</div>
	<!-- Start Project Details -->
	
	<!-- Main Footer -->
    <footer class="main-footer style-two">
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-6 col-12">
						<div class="row clearfix">
						
                        	<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
										<a href="index.html"><img src="images/logo.png" alt="" /></a>
									</div>
									<div class="call">
										Ingin Tahu Lebih Lanjut Hubungi
										<a class="phone" href="tel:+1-212-226-3126">+1 212-226-3126</a>
										<a class="email" href="mailto: umkmponorogo@gmail.com"> umkmponorogo@gmail.com</a>
									</div>
								</div>
							</div>
							
							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h5>Company</h5>
									<ul class="list-link">
										<li><a href="#about">About</a></li>
										{{-- <li><a href="">Team</a></li>
										<li><a href="">Careers</a></li>
										<li><a href="">Investors</a></li> --}}
										<li><a href="#contact">Contact</a></li>
										{{-- <li><a href="">Offices</a></li> --}}
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
					<!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-6 col-12">
						<div class="row clearfix">
							
							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h5>Quick Links</h5>
									<ul class="list-link">
										<li><a href="">FAQS</a></li>
										<li><a href="">Support</a></li>
										<li><a href="#maps">Sitemap</a></li>
										<li><a href="">Community</a></li>
									</ul>
								</div>
							</div>
							
							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget newsletter-widget">
									<h5>UMKM</h5>
									<div class="text">Website untuk informasi di 3 desa yakni desa Tegalsar, Josari dan Kutuwetan</div>
									<!-- Newsletter Form -->
									<div class="newsletter-form">
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="auto-container">
					<div class="bottom-inner">
						<div class="row clearfix">
							
							<div class="col-lg-8 col-md-12 col-sm-12">
								<div class="copyright">Copyright ©<script async="" src="https://www.google-analytics.com/analytics.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved</div>
							</div>
							
							<div class="col-lg-4 col-md-12 col-sm-12">
								<ul class="social-nav">
									<li><a href="https://twitter.com/" class="icofont-twitter"></a></li>
									<li><a href="http://facebook.com/" class="icofont-facebook"></a></li>
									<li><a href="https://www.instagram.com/" class="icofont-instagram"></a></li>
									<li><a href="https://rss.com/" class="icofont-rss"></a></li>
									<li><a href="https://www.youtube.com/" class="icofont-play-alt-1"></a></li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>	
			</div>
			
		</div>
	</footer>
	
</div>
<!--End pagewrapper-->

<!-- Search Popup -->
<div class="search-popup">
	<button class="close-search style-two"><span class="icofont-brand-nexus"></span></button>
	<button class="close-search"><span class="icofont-arrow-up"></span></button>
	<form method="post" action="blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

<script src="{{ asset('asset/js/jquery.js') }}"></script>
<script src="{{ asset('asset/js/popper.min.js') }}"></script>
<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('asset/js/appear.js') }}"></script>
<script src="{{ asset('asset/js/owl.js') }}"></script>
<script src="{{ asset('asset/js/wow.js') }}"></script>
<script src="{{ asset('asset/js/parallax.min.js') }}"></script>
<script src="{{ asset('asset/js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery.paroller.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery-ui.js') }}"></script>
<script src="{{ asset('asset/js/script.js') }}"></script>

</body>
</html>