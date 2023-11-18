<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<!-- Basic Page Needs
     ================================================== -->
   <meta charset="utf-8">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>{{ setting('site.title') }}</title>
   <meta name="description" content="{{ setting('site.description') }}">
   <meta name="keywords" content="{{ setting('site.meta_keywords') }}">
   <meta name="author" content="{{ setting('site.meta_author') }}">
	 
   <!-- Mobile Specific Metas
   ================================================== -->
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
   <meta name="format-detection" content="telephone=no">

   <!-- Favicons
   ================================================== -->
   <link rel="icon" type="image/png" href="{{setting('site.icon_favicon')}}">
   
   <!-- Fonts
   ================================================== -->
   <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
   
   <!-- CSS
   ================================================== -->
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<!-- advisor -->
	<link rel="stylesheet" href="{{ asset('css/advisor.css') }}">
	<!-- plugins -->
	<link rel="stylesheet" href="{{ asset('css/plugins.css') }}">	
	<!-- advisor color -->
	<link rel="stylesheet" id="color" href="{{ asset('css/color-default.css') }}">
	<!-- hero slider -->
	<link rel="stylesheet" href="{{ asset('css/hero-slider.css') }}">
	<!-- revolution slider -->
	<link rel="stylesheet" href="{{ asset('css/settings.css') }}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
	
	<!-- HEADER SCRIPTS
   ================================================== -->
	<script src="js/modernizr.js"></script>
	
</head>
   <body class="fixed-header">
	    
			<!-- LOADER -->
			<div id="loader" class="loader">
				<div class="spinner">
				  <div class="double-bounce1"></div>
				  <div class="double-bounce2"></div>
				</div>
			</div>  
         	  
         <div class="clr"></div>
            
         <!-- HERDER -->
         <header id="header" class="h-one-h"> 
            <div class="container">
               <!-- TOP BAR -->
               <div class="top-bar clearfix">
                  <p>We have over 15 years of experience.</p>
                  <ul>
                     <li><i class="icon-telephone114"></i> +1 900 234 567</li>
                     <li><i class="icon-icons74"></i> 786 South Park Avenue</li>
                     <li><i class="icon-icons20"></i> Mon to Sat 08:00 - 16:30</li>
                  </ul>
               </div>
               <!-- / TOP BAR -->
               
               <!-- HEADER INNER -->
               <div class="header clearfix">
                  
                  <a href="index-2.html" class="logo"><img src="images/logo.png" alt=""></a>
                  
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-nav" aria-expanded="false">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                  </button>
                  
                  <div class="search-btn">
                     <a href="javascript:void(0);" class="search-trigger"><i class="icon-icons185"></i></a>
                  </div>
                  
                  <div class="search-container">
                     <i class="fa fa-times header-search-close"></i>
                     <div class="search-overlay"></div>
                     <div class="search">
                        <form>
                           <label>Search:</label>
                           <input type="text" placeholder="">
                           <button><i class="fa fa-search"></i></button>
                        </form>
                     </div>
                  </div>
                  
                  <nav class="main-nav navbar-collapse collapse" id="primary-nav">
                     <ul class="nav nav-pills">
                        <li class="dropdown active"><a href="#.">Home <i class="fa fa-caret-down"></i></a>
                           <ul class="dropdown-menu">
                              <li class="active"><a href="index-2.html">Home One</a></li>
                              <li><a href="index2.html">Home Two</a></li>
                           </ul>
                        </li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li class="dropdown"><a href="#.">Services <i class="fa fa-caret-down"></i></a>
                           <ul class="dropdown-menu">
                              <li><a href="services.html">Financial Planning</a></li>
                              <li><a href="services.html">Bonds</a></li>
                              <li><a href="services.html">Commodities</a></li>
                              <li><a href="services.html">Investment Trusts</a></li>
                              <li class="dropdown-submenu"><a href="#.">Mutual Funds <i class="fa fa-caret-right"></i></a>
                                 <ul class="dropdown-menu">
                                    <li><a href="services.html">Financial Planning</a></li>
                                    <li><a href="services.html">Bonds</a></li>
                                    <li><a href="services.html">Commodities</a></li>
                                 </ul>
                              </li>
                              <li><a href="services.html">Retirement</a></li>
                              <li><a href="services.html">Trades</a></li>
                           </ul>
                        </li>
                        <li><a href="cases.html">Cases</a></li>
                        <li class="dropdown"><a href="#.">News <i class="fa fa-caret-down"></i></a>
                           <ul class="dropdown-menu">
                              <li><a href="news.html">News One</a></li>
                              <li><a href="news2.html">News Two</a></li>
                           </ul>
                        </li>
                        <li><a href="shop.html">Shop</a></li>
                        <li class="dropdown"><a href="#.">Contact Us <i class="fa fa-caret-down"></i></a>
                           <ul class="dropdown-menu">
                              <li><a href="contact-us.html">Contact Us One</a></li>
                              <li><a href="contact-us2.html">Contact Us Two</a></li>
                           </ul>
                        </li>
                     </ul>
                  </nav>
                  
               </div><!-- / HEADER INNER -->
               
            </div><!-- / CONTAINER -->
         </header><!-- / HERDER -->
         
			<!-- MAIN BANNER -->
			<section class="main-banner">
				<div class="tp-banner-container">
					<div class="tp-banner" >
						<ul>
							<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-thumb="images/main-banner/2/1.jpg"  data-saveperformance="on"  data-title="">
									
								<!-- MAIN IMAGE -->
								<img src="images/main-banner/2/1.jpg"  alt="" data-lazyload="images/main-banner/2/1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
					
								<!-- LAYER NR. 1 -->
								<div class="tp-caption banner-heading lft rs-parallaxlevel-0"
									data-x="0"
									data-y="210" 
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="700"
									data-start="700"
									data-easing="Power3.easeInOut"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									style="z-index: 2;">Money Doesn’t
								</div>
					
								<!-- LAYER NR. 2 -->
								<div class="tp-caption banner-heading lft rs-parallaxlevel-0"
									data-x="0"
									data-y="270" 
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="700"
									data-start="500"
									data-easing="Power3.easeInOut"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									style="z-index: 2;">Come <span class="color-default">Without Care</span>
								</div>
					
								<!-- LAYER NR. 3 -->
								<div class="tp-caption lft banner-text rs-parallaxlevel-0"
									data-x="0"
									data-y="340" 
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="700"
									data-start="1000"
									data-easing="Power3.easeInOut"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									style="z-index: 3;">Finding your next Financial Advisor is as easy as counting from one to five.
								</div>
					
								<!-- LAYER NR. 4 -->
								<div class="tp-caption banner-btn colored lft banner-btn rs-parallaxlevel-0"
									data-x="0"
									data-y="390" 
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="700"
									data-start="1500"
									data-easing="Power3.easeInOut"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									style="z-index: 4;"><a href="#.">read more</a>
								</div>
					
								<!-- LAYER NR. 5 -->
								<div class="tp-caption banner-btn lft banner-btn rs-parallaxlevel-0"
									data-x="180"
									data-y="390" 
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="700"
									data-start="1500"
									data-easing="Power3.easeInOut"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									style="z-index: 4;"><a href="#.">Contact Us</a>
								</div>
									
							</li>
					
							<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-thumb="images/main-banner/2/2.jpg"  data-saveperformance="on"  data-title="">
									
								<!-- MAIN IMAGE -->
								<img src="images/main-banner/2/2.jpg"  alt="" data-lazyload="images/main-banner/2/2.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
						
									
								<!-- LAYER NR. 1 -->
								<div class="tp-caption banner-heading color-white lft rs-parallaxlevel-0"
									data-x="center"
									data-y="210" 
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="700"
									data-start="700"
									data-easing="Power3.easeInOut"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									style="z-index: 2;">Clients <span class="color-default">Investment</span> Guidance
								</div>
					
								<!-- LAYER NR. 2 -->
								<div class="tp-caption lft banner-text color-white rs-parallaxlevel-0"
									data-x="center"
									data-y="288" 
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="700"
									data-start="1000"
									data-easing="Power3.easeInOut"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									style="z-index: 3;">With over 15 years of experience we’ll ensure you always get the best guidance
								</div>
						
								<!-- LAYER NR. 3 -->
								<div class="tp-caption lft banner-text color-white rs-parallaxlevel-0"
									data-x="center"
									data-y="315" 
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="700"
									data-start="1000"
									data-easing="Power3.easeInOut"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									style="z-index: 3;">we’re with you every step of the way
								</div>
					
								<!-- LAYER NR. 3 -->
								<div class="tp-caption banner-btn colored lft banner-btn rs-parallaxlevel-0"
									data-x="400"
									data-y="370" 
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="700"
									data-start="1500"
									data-easing="Power3.easeInOut"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									style="z-index: 4;"><a href="#.">read more</a>
								</div>
						
								<!-- LAYER NR. 5 -->
								<div class="tp-caption banner-btn lft banner-btn rs-parallaxlevel-0"
										data-x="580"
										data-y="370" 
										data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
										data-speed="700"
										data-start="1500"
										data-easing="Power3.easeInOut"
										data-elementdelay="0.1"
										data-endelementdelay="0.1"
										style="z-index: 4;"><a href="#.">Contact Us</a>
									</div>
							</li>
					
							<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-thumb="images/main-banner/2/3.jpg"  data-saveperformance="on"  data-title="">
									
								<!-- MAIN IMAGE -->
								<img src="images/main-banner/2/3.jpg"  alt="" data-lazyload="images/main-banner/2/3.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
					
								<!-- LAYER NR. 1 -->
								<div class="tp-caption banner-heading lft rs-parallaxlevel-0"
									data-x="right"
									data-y="210" 
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="700"
									data-start="700"
									data-easing="Power3.easeInOut"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									style="z-index: 2;">Friendly <span class="color-default">Assistance</span>
								</div>
					
								<!-- LAYER NR. 2 -->
								<div class="tp-caption lft banner-text rs-parallaxlevel-0"
									data-x="right"
									data-y="288" 
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="700"
									data-start="1000"
									data-easing="Power3.easeInOut"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									style="z-index: 3;">With over 15 years of experience we’ll ensure you always get the best
								</div>
					
								<!-- LAYER NR. 3 -->
								<div class="tp-caption lft banner-text rs-parallaxlevel-0"
									data-x="right"
									data-y="315" 
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="700"
									data-start="1000"
									data-easing="Power3.easeInOut"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									style="z-index: 3;">guidance. we’re with you every step of the way
								</div>
					
								<!-- LAYER NR. 3 -->
								<div class="tp-caption banner-btn colored lft banner-btn rs-parallaxlevel-0"
									data-x="right"
									data-y="370" 
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="700"
									data-start="1500"
									data-easing="Power3.easeInOut"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									style="z-index: 4;"><a href="#.">Contact Us today</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</section><!-- / MAIN BANNER -->

			<!-- WELCOME -->
         <section class="bg-blue">
				<div class="container">
					<div class="row">
						<div class="col-md-6 animate fadeInLeft">
							<h2>Welcome to Advisor</h2>
							<div class="height-10"></div>
							<p>We have over 15 years of experience Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</p>
							<div class="height-10"></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum nec risus et suscipit Curabitur metus ipsum.</p>
							<div class="height-20"></div>
							<a href="about-us.html" class="btn btn-bordered-dark" data-text="read more">read more</a>
							<div class="height-40"></div>
						</div>
						<div class="col-md-6 animate fadeInRight">
							<div class="video-widget">
								<img src="images/video-thumb.jpg" class="img-shadow" alt="">
								<a href="http://vimeo.com/36031564" class="fancybox-media"><i class="fa fa-play"></i></a>
							</div>
						</div>
					</div>
				</div>
			</section><!-- / WELCOME -->
			
			
			
			<!-- BENIFITS -->
         <section class="text-center">
				<div class="container">
					<div class="two-items-carousel owl-carousel">
						<div class="image-and-text-box animate fadeInLeft">
							<div class="bordered-thumb"><a href="services.html"><img src="images/img1.jpg" alt=""></a></div>
							<h3><a href="services.html">Why Our Consulting</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.</p>
						</div>
						<div class="image-and-text-box animate fadeInRight">
							<h3><a href="services.html">Investment Planning</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.</p>
							<div class="bordered-thumb"><a href="services.html"><img src="images/img2.jpg" alt=""></a></div>
						</div>
						<div class="image-and-text-box">
							<div class="bordered-thumb"><a href="services.html"><img src="images/img3.jpg" alt=""></a></div>
							<h3><a href="services.html">Retirement</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.</p>
						</div>
						<div class="image-and-text-box">
							<h3><a href="services.html">Wealth Management</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.</p>
							<div class="bordered-thumb"><a href="services.html"><img src="images/img4.jpg" alt=""></a></div>
						</div>
						<div class="image-and-text-box">
							<div class="bordered-thumb"><a href="services.html"><img src="images/img5.jpg" alt=""></a></div>
							<h3><a href="services.html">Lawyers Consulting</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.</p>
						</div>
						<div class="image-and-text-box">
							<h3><a href="services.html">Online Consulting</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.</p>
							<div class="bordered-thumb"><a href="services.html"><img src="images/img6.jpg" alt=""></a></div>
						</div>
					</div>
				</div>
			</section><!-- / BENIFITS -->
			
			<!-- FUNFACTS -->
			<div class="container">
				<div class="funfacts text-center">
					<div class="advisor-overlay"></div>
					<div class="funfacts-inner">
						<h2>Helping Small Businesses</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</p>
						<div class="row text-center" id="counters">
							<div class="col-md-3 col-xs-6">
								<div class="counter">
								   <span class="quantity-counter1 highlight">0</span>
								   <h6 class="counter-details">Employees</h6>
								 </div>
							</div>
							<div class="col-md-3 col-xs-6">
								<div class="counter">
								   <span class="quantity-counter2 highlight">0</span>
								   <h6 class="counter-details">Location</h6>
								 </div>
							</div>
							<div class="col-md-3 col-xs-6">
								<div class="counter">
								   <span class="quantity-counter3 highlight">0</span>
								   <h6 class="counter-details">% Satisfaction</h6>
								 </div>
							</div>
							<div class="col-md-3 col-xs-6">
								<div class="counter">
								   <span class="quantity-counter4 highlight">0</span>
								   <h6 class="counter-details">Happy Customers</h6>
								 </div>
							</div>
						</div>
					</div>
				</div><!-- / CONTAINER -->
			</div><!-- / FUNFACTS -->
          
			<!-- DIFFERENT SERVICES -->
         <section class="different-services text-center parallax">
				<div class="container">
					<div class="heading animate bounceIn">
						<h1 class="color-white">We Love What We Do</h1>
						<p class="color-white">Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</p>
					</div>
				</div>
			</section><!-- / DIFFERENT SERVICES -->
			
			<!-- WHO IS BEHIND -->
         <section class="bg-blue">
				<div class="container">
					<div class="services text-center">
						<div class="three-items-carousel owl-carousel">
							<div class="service-box">
								<i class="icon-img-1"></i>
								<h4>Advisor</h4>
								<p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
							</div>
							<div class="service-box">
								<i class="icon-img-6"></i>
								<h4>Business Consulting</h4>
								<p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
							</div>
							<div class="service-box">
								<i class="icon-img-7"></i>
								<h4>Travel and Aviation</h4>
								<p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
							</div>
							
							<div class="service-box animate fadeInUp">
								<i class="icon-img-8"></i>
								<h4>Consumer Consulting</h4>
								<p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
							</div>
							<div class="service-box animate fadeInUp" data-delay="100">
								<i class="icon-img-2"></i>
								<h4>Save Money</h4>
								<p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
							</div>
							<div class="service-box animate fadeInUp" data-delay="200">
								<i class="icon-img-3"></i>
								<h4>Secure Future</h4>
								<p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
							</div>
							<div class="service-box">
								<i class="icon-img-4"></i>
								<h4>Private Consulting</h4>
								<p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
							</div>
							<div class="service-box">
								<i class="icon-img-5"></i>
								<h4>Financial Planning</h4>
								<p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
							</div>
							
							<div class="service-box">
								<i class="icon-img-9"></i>
								<h4>Online Consulting</h4>
								<p>Lorem ipsum dolor sit amet, Let it it floats back to you.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 animate fadeInLeft">
							<ul class="image-list-classic ">
								<li><img src="images/who-is-behind-img1.jpg" alt=""></li>
								<li><img src="images/who-is-behind-img2.jpg" alt=""></li>
							</ul>
						</div>
						<div class="col-md-6 animate fadeInRight">
							<h3>Who is behind the best brok</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. </p>
	
							<div id="accordion" role="tablist" aria-multiselectable="true">
								<div class="toggle">
									<div class="toggle-heading" role="tab">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										  <i class="fa fa-plus"></i> What is do i have to tell you a few lorem?
										</a>
									</div>
									<div id="collapseOne" class="panel-collapse collapse" role="tabpanel">
										<div class="toggle-body">
											<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.</p>
										</div>
									</div>
								</div>
								<div class="toggle">
									<div class="toggle-heading" role="tab">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
										  <i class="fa fa-minus"></i> Insight and fun facts every time
										</a>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel">
										<div class="toggle-body">
											<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.</p>
										</div>
									</div>
								</div>
								<div class="toggle" >
									<div class="toggle-heading" role="tab">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
										  <i class="fa fa-plus"></i> What is do i have to tell you a few lorem?
										</a>
									</div>
									<div id="collapseThree" class="panel-collapse collapse" role="tabpanel">
										<div class="toggle-body">
											<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.</p>
										</div>
									</div>
								</div>
								<div class="toggle" >
									<div class="toggle-heading" role="tab">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
										  <i class="fa fa-plus"></i> What is do i have to tell you a few lorem?
										</a>
									</div>
									<div id="collapseFour" class="panel-collapse collapse" role="tabpanel">
										<div class="toggle-body">
											<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section><!-- / WHO IS BEHIND -->
			
			<div class="contact-us-bar">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<h4 class=" animate fadeInLeft">If you have any querry for related investment... We are available</h4>
						</div>
						<div class="col-md-3">
							<div class="text-right">
								<a href="contact-us.html" class="btn btn-primary get-in-touch animate fadeInRight" data-text="Contact us"><i class="icon-telephone114"></i>Contact us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- MEET OUR ADVISORS -->
         <section class="meet-our-advisors">
				<div class="container">
					<div class="heading text-center animate bounceIn">
						<h2>Meet Our Advisors</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</p>
					</div>
					
					<div class="single-item-carousel owl-carousel classic-arrows">
						<div class="row">
							<div class="col-md-5 animate fadeInLeft"><img src="images/meet-our-advisors-img1.jpg" alt=""></div>
							<div class="col-md-7 animate fadeInRight">
								<div class="meet-advisors-content">
									<h3>David Fernando<span>Founder & CEO</span></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you. Lorem ipsum dolor sit amet. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</p>
									<ul class="social-text">
										<li><a href="#." class="facebook">facebook</a></li>
										<li><a href="#." class="twitter">twitter</a></li>
										<li><a href="#." class="youtube">youtube</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5"><img src="images/meet-our-advisors-img2.jpg" alt=""></div>
							<div class="col-md-7">
								<div class="meet-advisors-content">
									<h3>Ashley Hardy<span>Chief Marketing Officer</span></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you. Lorem ipsum dolor sit amet. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</p>
									<ul class="social-text">
										<li><a href="#." class="facebook">facebook</a></li>
										<li><a href="#." class="twitter">twitter</a></li>
										<li><a href="#." class="youtube">youtube</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5"><img src="images/meet-our-advisors-img3.jpg" alt=""></div>
							<div class="col-md-7">
								<div class="meet-advisors-content">
									<h3>Fernando Torres<span>Administrator</span></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you. Lorem ipsum dolor sit amet. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</p>
									<ul class="social-text">
										<li><a href="#." class="facebook">facebook</a></li>
										<li><a href="#." class="twitter">twitter</a></li>
										<li><a href="#." class="youtube">youtube</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section><!-- / MEET OUR ADVISORS -->
			
			<!-- TESTIMONIALS -->
         <section class="bg-blue">
				<div class="container">
					<div class="heading text-center animate bounceIn">
						<h2>Happy Customers</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</p>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="testimonial animate fadeInUp">
								<div class="testimonial-content">
									<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="testimonials-author">
											<img class="img-circle" src="images/review-author-img.png" alt="">
											<p>Boris Hunt<span>(Sales Agent)</span></p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="text-right">
											<ul class="rating">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="testimonial animate fadeInUp" data-delay="100">
								<div class="testimonial-content">
									<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="testimonials-author">
											<img class="img-circle" src="images/review-author-img.png" alt="">
											<p>Boris Hunt<span>(Sales Agent)</span></p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="text-right">
											<ul class="rating">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center">
						<a class="btn btn-bordered-dark cd-see-all iconic animate fadeInUp" data-delay="200" href="javascript:void(0);" data-text="View All"><i class="icon-img-grid"></i>View All</a>
					</div>
				</div>
				
				<div class="cd-testimonials-all">
					<div class="cd-testimonials-all-wrapper">
						<ul>
							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="cd-testimonials-item">
								<div class="testimonial">
									<div class="testimonial-content">
										<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="testimonials-author">
												<img class="img-circle" src="images/review-author-img.png" alt="">
												<p>Boris Hunt<span>(Sales Agent)</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<ul class="rating">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>

					<a href="javascript:void(0);" class="close-btn">Close</a>
					
				</div>
				
			</section><!-- / BENIFITS -->
			
			<!-- REQUEST A CALLBACK -->
         <section>
            <div class="container">
               <div class="request-a-callback clearfix animate fadeInUp">
                  <div class="request-a-callback-content">
                     <h3>Request a Call Back</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut.</p>
                     <p><strong>For Investment:</strong> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem or phone +11 987 654 3210 ipsum quia dolor sit amet, consectetur.</p>
                  </div>
                  <div class="request-a-callback-form">
                     <form>
                        <input type="text" placeholder="Your Name">
                        <input type="text" placeholder="Email Address">
                        <input type="text" placeholder="Phone Number">
                        <div class="styled-select">
                           <select>
                              <option>I would like to discuss:</option>
                              <option>Personal Finance</option>
                              <option>Stock trading</option>
                              <option>Retirement</option>
                              <option>Other</option>
                           </select>
                        </div>
                        <button data-text="submit" class="btn btn-primary">Submit</button>
                     </form>
                  </div>
               </div>
            </div>
			</section>
			<!-- / REQUEST A CALLBACK -->
			      		
		<footer id="footer">
			<div class="container">
				<div class="footer-top clearfix">
					
					<div class="row">
						<div class="col-md-3 col-sm-3">
							<div class="footer-logo animate fadeInLeft"><a href="index-2.html"><img src="images/footer-logo.png" alt=""></a></div>
						</div>
						<div class="col-md-9 col-sm-9">
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem or phone +11 987 654 3210 ipsum quia dolor sit amet, consectetur.</p>
						</div>
					</div>
				
					<div class="height-50"></div>
					
					<div class="footer-left">
						<div class="footer-address-widget clearfix">
							<ul>
								<li><i class="icon-telephone114"></i>+1 900 234 567<a href="mailto:support@advisor.com">supprt@advisor.com</a></li>
								<li><i class="icon-icons74"></i>Manhattan Hall,<span>Advisor Ltd 1258, Melbourne, australia</span></li>
							</ul>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="usefull-links-widget clearfix">
									<h4>Usefull Links</h4>
									<ul>
										<li><a href="index-2.html">Home</a></li>
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="services.html">Services</a></li>
										<li><a href="#.">Projects</a></li>
										<li><a href="news.html">News</a></li>
										<li><a href="contact-us.html">Contact Us</a></li>
									</ul>
									<ul>
										<li><a href="services.html">Bonds</a></li>
										<li><a href="services.html">Commodities</a></li>
										<li><a href="services.html">Investments</a></li>
										<li><a href="services.html">Retirement</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<div class="twitter-widget clearfix">
									<h4>Twitter Feeds</h4>
									<div class="tweet">
										<i class="icon-twitter-1"></i>
										<p><a href="#">@Rotography</a> Please kindly use our Support Forum: <a href="#.">pixelatic.co.uk.</a>
										<span>about a month ago</span>
										</p>
									</div>
									<div class="tweet">
										<i class="icon-twitter-1"></i>
										<p><a href="#">@Rotography</a> Please kindly use our Support Forum: <a href="#.">pixelatic.co.uk.</a>
										<span>about a month ago</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-right">
						<div class="newsletter-widget">
							<h4>Our Newsletter</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod.</p>
							<div class="form">
								<p class="subscribe_success" id="subscribe_success" style="display:none;"></p>
								<p class="subscribe_error" id="subscribe_error" style="display:none;"></p>
							
								<form name="subscribe_form" id="subscribe_form" method="post" action="#" onSubmit="return false">
									<input type="text" data-delay="300" placeholder="Your Name" name="subscribe_name" id="subscribe_name" onKeyPress="removeChecks();" class="input" >
									<input type="text" data-delay="300" placeholder="Email Address" name="subscribe_email" id="subscribe_email" onKeyPress="removeChecks();" class="input" >
									<button class="btn btn-primary" name="Subscribe" type="submit" data-text="Subscribe" onClick="validateSubscription();">Subscribe</button>
								</form>
							
							</div>
							<ul class="social">
								<li class="animate bounceIn"><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
								<li class="animate bounceIn" data-delay="100"><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
								<li class="animate bounceIn" data-delay="200"><a href="#." class="google-plus"><i class="icon-google"></i></a></li>
								<li class="animate bounceIn" data-delay="300"><a href="#." class="linkedin"><i class="icon-linkedin3"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6"><p>Coyright © 2016 Advisor. All rights reserved.</p></div>
						<div class="col-md-6 col-sm-6"><p class="text-right">Designed by <a href="#.">Brighthemes</a></p></div>
					</div>
				</div>
			</div>
			
		</footer>
			
		<!-- FOOTER SCRIPTS
		================================================== -->
		<script src="js/jquery-2.2.0.js"></script>
		<script src="js/smooth-scroll.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/counter.js"></script>
		<script src="js/common.js"></script>
		<script src="js/jquery.themepunch.plugins.min.js"></script>
		<script src="js/jquery.themepunch.revolution.min.js"></script>
		<script src="js/scripts.js"></script>
		<script src="js/hero-slider.js"></script>
		
		
		<!-- DEMO -->
		<script src="demo-files/js/jquery.cookie.js"></script>
		<script src="demo-files/js/switcher.js"></script>
		
		<script>
			
			jQuery(document).ready(function() {
			
				/* ------------------------------------------------------------------------ 
				   REVOLUTION SLIDER
				------------------------------------------------------------------------ */
				// Revolution slider
				var revapi;
				revapi = jQuery('.tp-banner').revolution(
				{
					delay:9000,
					startwidth:1140,
					startheight:650,
					hideThumbs:200,
					fullWidth:"on",
					forceFullWidth:"on"
				});
			
			});
			
		</script>
   </body>
</html>