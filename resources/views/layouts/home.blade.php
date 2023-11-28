@include('layouts.header')

	@section('menu')
		<div class="clr"></div>

		<!-- HERDER -->
		<header id="header" class="h-two-h"> 
			<!-- TOP BAR -->
			{{ menu('menu-top-site', 'menu-top-home')}}
			<!-- / TOP BAR -->
		
			<div class="container">	
				<!-- HEADER INNER -->
				<div class="header clearfix">
					
					<a href="/" class="logo"><img src="{{ asset('storage/'.setting('site.logo')) }}" alt=""></a>
					
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-nav" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
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
					{{ menu('menu-site', 'menu-home')}}
					
				</div><!-- / HEADER INNER -->
				
			</div><!-- / CONTAINER -->
		</header><!-- / HERDER -->
	@show	

	@section('slide-show')
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
	@show

	@section('conteudo')
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
		
		<!-- DIFFERENT SERVICES -->
		<section class="different-services text-center parallax">
			<div class="container">
				<div class="heading animate bounceIn">
					<h1 class="color-white">Amamos O Que Fazemos</h1>
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
			</div>
		</section><!-- / WHO IS BEHIND -->
		
		<div class="contact-us-bar">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h4 class=" animate fadeInLeft">Precisa de ajuda com sua contabilidade... Estamos à disposição!</h4>
					</div>
					<div class="col-md-3">
						<div class="text-right">
							<a href="contact-us.html" class="btn btn-primary get-in-touch animate fadeInRight" data-text="Fale conosco"><i class="icon-telephone114"></i>Fale conosco</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Clientes -->
		<section>
			<div class="container">
				<div class="heading margin-bottom-50 animate bounceIn">
					<h2>Nossos Clintes</h2>
					<p>Nosso Portifólio de clientes que atuamos para facilitar sua contabilidade.</p>
				</div>
				<div class="two-items-carousel owl-carousel">
					<div class="partner animate fadeInLeft">
						<img src="images/partners/1.jpg" alt="">
						<div class="partner-content">
							<h4>Adup Media LLC<span>Athletic Performance</span></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
					<div class="partner animate fadeInRight">
						<img src="images/partners/2.jpg" alt="">
						<div class="partner-content">
							<h4>Primo Software<span>Software Development</span></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
					<div class="partner">
						<img src="images/partners/1.jpg" alt="">
						<div class="partner-content">
							<h4>Adup Media LLC<span>Athletic Performance</span></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
					<div class="partner">
						<img src="images/partners/2.jpg" alt="">
						<div class="partner-content">
							<h4>Primo Software<span>Software Development</span></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
					<div class="partner">
						<img src="images/partners/1.jpg" alt="">
						<div class="partner-content">
							<h4>Adup Media LLC<span>Athletic Performance</span></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
					<div class="partner">
						<img src="images/partners/2.jpg" alt="">
						<div class="partner-content">
							<h4>Primo Software<span>Software Development</span></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- / OUR PARTNERS -->
	@show
		
@include('layouts.footer')