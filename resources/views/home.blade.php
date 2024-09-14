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
    <header class="main-header">
    	
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
									<li><a href="#index">Home</a></li>
									<li><a href="#about">Tentang</a></li>
                                    <li><a href="#contact">Kontak</a></li>
                                    <li><a href="#gallery">Galeri</a></li>
                                    <li><a href="#desa">Desa</a></li>
                                    <li><a href="#maps">Lokasi</a></li>
									{{-- <li class="dropdown"><a href="#">Service</a>
										<ul>
											<li><a href="service.html">Service</a></li>
											<li><a href="service-detail.html">Service Detail</a></li>
										</ul>
									</li> --}}
									{{-- <li class="dropdown"><a href="#">Projects</a>
										<ul>
											<li><a href="project.html">Project</a></li>
											<li><a href="project-details.html">Project Details</a></li>
										</ul>
									</li> --}}
									{{-- <li class="dropdown"><a href="#">Blog</a>
										<ul class="from-right">
											<li><a href="blog.html">Our Blog</a></li>
											<li><a href="blog-detail.html">Blog Detail</a></li>
										</ul>
									</li> --}}
									<li><a href="{{ route('admin.login') }}">Log In</a></li>

								</ul>
							</div>
							
						</nav>
						
					</div>
					
					<!-- Outer Box -->
					
                   
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon lnr lnr-cross"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="{{asset('asset/images/logo.png')}}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
		
    </header>
    <!--End Main Header -->
	
	<!-- Banner Section -->
    <div class="banner-section" id="index">
        <div class="main-slider-carousel owl-carousel owl-theme">
            @foreach($sliders as $slider)
                <div class="slide" data-bg-image="{{ asset('storage/' . $slider->image) }}">
                    <div class="auto-container w-100">
                        <div class="row clearfix">
                            
                            <!-- Content Column -->
                            <div class="content-column col-lg-7 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="title">{{ $slider->title }}</div>
                                    <h1>{{ $slider->subtitle }}</h1>
                                    <div class="text">
                                        {{ Str::limit($slider->description, 40, '...') }}
                                    </div>                                    
                                    <div class="btn-box" id="contact">
                                        <a href="{{ $slider->button_link }}" class="theme-btn btn-style-one">
                                            <span class="txt">{{ $slider->button_text }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
	<!-- End Banner Section -->

	<!-- CTA Section Start -->
    @foreach($contacts as $contact)
	<div class="cta-section" data-bg-image="{{asset('asset/images/background/cta-bg.jpg')}}">
		<div class="auto-container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<!-- CTA Content Start -->
					<div class="cta-content">
						<h3 class="title">{{ $contact->text1 }}<span class="text-bold">{{ $contact->text2 }}</span></h3>
						<!-- <p>We prodive a dedicated support 24/7 for any your question</p> -->
					</div>
					<!-- CTA Content End -->
				</div>
				<div class="col-lg-5">
					<!-- CTA Phone Number Start -->
					<div class="cta-phone text-lg-end text-strat">
						<h2 class="title">{{ $contact->number }}</h2>
					</div>
					<!-- CTA Phone Number Start -->
				</div>
			</div>
		</div>
	</div>
    @endforeach
	<!-- CTA Section End -->
	
    @foreach($abouts as $about)
    <!-- About Section -->
    <div class="about-section" id="about">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row align-items-center clearfix">
                    <!-- Image Column -->
                    <div class="image-column col-lg-6">
                        <div class="about-image">
                            <div class="about-inner-image">
                                <img src="{{ asset('storage/' . $about->image) }}" alt="about">
                            </div>
                        </div>
                    </div>
    
                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12 mb-0">
                        <div class="about-column">
                            <div class="sec-title">
                                <div class="title">Tentang Website</div>
                                <h2>{{ $about->title }}</h2>
                            </div>
                            <div class="text">
                                <p>{{ $about->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    
	<!-- End About Section -->


	<!-- Project Section -->
	<div class="project-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title" id="gallery">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title">Gallery</div>
						<h2>Jenis-Jenis <span>UMKM</span></h2>
					</div>
				</div>
			</div>
		</div>
	
		<div class="outer-container">
			<div class="row">
				@foreach($galleries as $gallery)
				<!-- Column -->
				<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
					<div class="gallery-block">
						<div class="inner-box">
							<div class="image">
								<img src="{{ asset('storage/' . $gallery->image) }}" alt="gallery" class="img-fluid" />
								<div class="overlay-box">
									<div class="overlay-inner text-center">
										<h3><a>{{ $gallery->title }}</a></h3>
										<div class="designation">{{ $gallery->keyword }}</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	
    
	<!-- End Project Section -->

	<!-- Sponsors Section -->
	<div class="sponsors-section">
		<div class="auto-container">
			
			<div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
					@foreach($sponsors as $sponsor)
                    <li><div class="image-box"><a href="#"><img src="{{ asset('storage/' . $sponsor->image) }}" alt=""></a></div></li>
					@endforeach
                </ul>
            </div>
			
		</div>
	</div>
	<!--End Sponsors Section-->


	<!-- Experts Section -->
	<div class="experts-section" id="desa">
		<div class="auto-container">
		
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title">Desa UMKM</div>
						<h2>Desa UMKM <span>Ponorogo</span></h2>
					</div>
					<!-- <div class="pull-right">
						<a href="service.html" class="experts">all experts <span class="arrow ti-angle-right"></span></a>
					</div> -->
				</div>
			</div>
			<div class="row clearfix">
				
				<!-- Team Block -->
                @foreach($socials as $social)
				<div class="team-block col-lg-4 col-md-6 col-sm-6 col-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a ><img src="{{ asset('storage/' . $social->image) }}" alt="" /></a>
							<!-- Social Box -->
							<ul class="social-box">
								<li><a href="{{ $social->facebook }}" class="icofont-facebook"></a></li>
								<li><a href="{{ $social->instagram }}" class="icofont-instagram"></a></li>
								<li><a href="{{ $social->youtube }}" class="icofont-youtube"></a></li>
							</ul>
						</div>
						<div class="lower-box mt-0">
							<h4><a href="#">{{ $social->title }}</a></h4>
							<div class="designation">{{ $social->keyword }}</div>
						</div>
					</div>
				</div>
                @endforeach
			</div>
            
		</div>
	</div>
	<!-- End Experts Section -->


	<!-- Map Section -->
    @foreach($maps as $map)
	<div class="map-section" id="maps">
    <div class="contact-map-area">
        <iframe class="contact-map" 
                src="{{ $map->url_map }}" 
                allowfullscreen="" 
                aria-hidden="false" 
                tabindex="0">
        </iframe>
    </div>
</div>
@endforeach

	<!-- End Map Section -->
	
	<!-- Main Footer -->
    <footer class="main-footer">
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
										<a href="index.html"><img src="{{asset('asset/images/logo.png')}}" alt="" /></a>
									</div>
									<div class="call">
										Bisa Hubungi
										<a class="phone" href="tel:+6285755843011">+6285755843011</a>
										<a class="email" href="mailto:umkmponorogo@gmail.com">umkmponorogo@gmail.com</a>
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
								<div class="copyright">Copyright ©<script async="" src="https://www.google-analytics.com/analytics.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved </div>
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