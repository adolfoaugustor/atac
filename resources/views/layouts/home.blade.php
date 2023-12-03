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
					
					{{ menu('menu-site', 'menu-home')}}
					
				</div><!-- / HEADER INNER -->
				
			</div><!-- / CONTAINER -->
		</header><!-- / HERDER -->
	@show	

	@section('slide-show')
		<!-- MAIN BANNER -->
		<section class="main-banner">
			<div class="tp-banner-container">
				<div class="col-md-12 tp-banner" >
					<ul>
						{{-- left --}}
						<li data-transition="fade" data-slotamount="5" data-masterspeed="300" data-thumb="images/main-banner/2/1.jpg"  data-saveperformance="on"  data-title="">
								
							<!-- MAIN IMAGE -->
							<img src="images/main-banner/2/1.jpg"  alt="" data-lazyload="images/main-banner/2/1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
				
							<!-- LAYER NR. 1 -->
							<div class="tp-caption banner-heading lft rs-parallaxlevel-0"
								data-x="0"
								data-y="210" 
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="300"
								data-start="500"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 2;"><span class="color-default">Money Doesn't Come Without Care</span>
							</div>
				
							<!-- LAYER NR. 2 -->
							<div class="tp-caption lft banner-text rs-parallaxlevel-0"
								data-x="0"
								data-y="300" 
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="300"
								data-start="1000"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 3;">Finding your next Financial Advisor is as easy as counting from one to five.
							</div>
				
							<!-- LAYER NR. 4 -->
							<div class="tp-caption banner-btn colored lft banner-btn rs-parallaxlevel-0"
								data-x="0"
								data-y="350" 
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="300"
								data-start="1500"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 4;"><a href="#.">Leia Mais</a>
							</div>
				
							<!-- LAYER NR. 5 -->
							<div class="tp-caption banner-btn lft banner-btn rs-parallaxlevel-0"
								data-x="180"
								data-y="350" 
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="300"
								data-start="1500"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 4;"><a href="#.">Contact Us</a>
							</div>
								
						</li>
						{{-- center --}}
						<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-thumb="images/main-banner/2/2.jpg"  data-saveperformance="on"  data-title="">
								
							<!-- MAIN IMAGE -->
							<img src="images/main-banner/2/2.jpg"  alt="" data-lazyload="images/main-banner/2/2.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

							<!-- LAYER NR. 1 -->
							<div class="tp-caption banner-heading color-white center rs-parallaxlevel-0"
								data-x="center"
								data-y="210" 
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="300"
								data-start="500"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 2;">Clients Investment Guidance
							</div>
				
							<!-- LAYER NR. 2 -->
							<div class="tp-caption center banner-text color-white rs-parallaxlevel-0"
								data-x="center"
								data-y="288" 
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="300"
								data-start="1000"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 3;">With over 15 years of experience we’ll ensure you always get the best guidance we’re with you every step of the way
							</div>
					
							<!-- LAYER NR. 3 -->
							<div class="tp-caption banner-btn colored center banner-btn rs-parallaxlevel-0"
								data-x="400"
								data-y="370" 
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="300"
								data-start="1500"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 4;"><a href="#.">leia mais</a>
							</div>
					
							<!-- LAYER NR. 5 -->
							<div class="tp-caption banner-btn center banner-btn rs-parallaxlevel-0"
									data-x="580"
									data-y="370" 
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="300"
									data-start="1500"
									data-easing="Power3.easeInOut"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									style="z-index: 4;"><a href="#.">Fale Conosco</a>
								</div>
						</li>
						{{-- right --}}
						<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-thumb="images/main-banner/2/3.jpg"  data-saveperformance="on"  data-title="">
								
							<!-- MAIN IMAGE -->
							<img src="images/main-banner/2/3.jpg"  alt="" data-lazyload="images/main-banner/2/3.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
				
							<!-- LAYER NR. 1 -->
							<div class="tp-caption banner-heading right rs-parallaxlevel-0"
								data-x="right"
								data-y="210" 
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="300"
								data-start="500"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 2;"><span class="color-default">Friendly Assistance</span>
							</div>
				
							<!-- LAYER NR. 2 -->
							<div class="tp-caption right banner-text rs-parallaxlevel-0"
								data-x="right"
								data-y="288" 
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="300"
								data-start="1000"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 3;">With over 15 years of experience we'll ensure you always get the best guidance. we're with you every step of the way
							</div>
				
							<!-- LAYER NR. 3 -->
							<div class="tp-caption banner-btn colored right banner-btn rs-parallaxlevel-0"
								data-x="right"
								data-y="370" 
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="300"
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
		<!-- WELCOME -->
		<section class="servicos">
			<div class="container">
				<div class="heading text-center animate-it bounceIn">
					<h2>NOSSOS SERVIÇOS</h2>
				</div>
				
				<div class="height-50"></div>
				
				<div class="row text-center">
					<div class="col-md-3">
						<div class="text-box text-center animate-it fadeInUp">
							<div class="bordered-thumb"><img src="images/icones-servicos/tombamento.png" alt=""></div>
							<h4>Tombamento de Imobilizado</h4>
						</div>
					</div>
					<div class="col-md-3 animate-it fadeInUp" data-delay="100">
						<div class="text-box text-center">
							<div class="bordered-thumb"><img src="images/icones-servicos/pareceres.png" alt=""></div>
							<h4>Emissão de Pareceres</h4>
						</div>
					</div>
					<div class="col-md-3 animate-it fadeInUp" data-delay="200">
						<div class="text-box text-center">
							<div class="bordered-thumb"><img src="images/icones-servicos/siscomex.png" alt=""></div>
							<h4>Habilitação SISCOMEX</h4>
						</div>
					</div>
					<div class="col-md-3 animate-it fadeInUp" data-delay="200">
						<div class="text-box text-center">
							<div class="bordered-thumb"><img src="images/icones-servicos/auditoria-contabil.png" alt=""></div>
							<h4>Consultoria e Auditoria</h4>
						</div>
					</div>

					<div class="col-md-3 animate-it fadeInLeft" data-delay="200">
						<div class="text-box text-center">
							<div class="bordered-thumb"><img src="images/icones-servicos/avaliacao-empresa.png" alt=""></div>
							<h4>Avaliação de empresas</h4>
						</div>
					</div>
					<div class="col-md-3 animate-it fadeInLeft" data-delay="200">
						<div class="text-box text-center">
							<div class="bordered-thumb"><img src="images/icones-servicos/paralegal.png" alt=""></div>
							<h4>Serviços Societários e Paralalegais</h4>
						</div>
					</div>
					<div class="col-md-3 animate-it fadeInLeft" data-delay="200">
						<div class="text-box text-center">
							<div class="bordered-thumb"><img src="images/icones-servicos/planejamento-tributario.png" alt=""></div>
							<h4>Planejamento Tributário e Gestão Fiscal</h4>
						</div>
					</div>
					<div class="col-md-3 animate-it fadeInLeft" data-delay="200">
						<div class="text-box text-center">
							<div class="bordered-thumb"><img src="images/icones-servicos/assessoria-controladoria.png" alt=""></div>
							<h4>Assessoria e Controladoria Contábil</h4>
						</div>
					</div>
					<div class="col-md-3 animate-it fadeInRight" data-delay="200">
						<div class="text-box text-center">
							<div class="bordered-thumb"><img src="images/icones-servicos/contabil-dep-fiscal-pessoal.png" alt=""></div>
							<h4>Contabilidade, Departamento Fiscal e Pessoal</h4>
						</div>
					</div>
				</div>
			</div>
		</section><!-- / WELCOME -->

		<!-- Clientes -->
		<section>
			<div class="container clients">
				<div class="heading margin-bottom-50 animate-it bounceIn">
					<h2>Nossos Clintes</h2>
					<p>Nosso Portifólio de clientes que atuamos para facilitar sua contabilidade.</p>
					<div class="line"></div>
				</div>
				<div class="two-items-carousel2 owl-carousel">
					<div class="partner">
						<img src="images/partners/1.jpg" alt="">
					</div>
					<div class="partner">
						<img src="images/partners/2.jpg" alt="">
					</div>
					<div class="partner">
						<img src="images/partners/1.jpg" alt="">
					</div>
					<div class="partner">
						<img src="images/partners/2.jpg" alt="">
					</div>
					<div class="partner">
						<img src="images/partners/1.jpg" alt="">
					</div>
					<div class="partner">
						<img src="images/partners/2.jpg" alt="">
					</div>
				</div>
			</div>
		</section>
		<!-- / OUR PARTNERS -->

		<div class="contact-us-bar">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h4 class=" animate fadeInLeft">Precisa de ajuda com sua contabilidade... Estamos à disposição!</h4>
					</div>
					<div class="col-md-3">
						<div class="text-right">
							<a href="contact-us.html" class="btn btn-primary get-in-touch animate fadeInRight" data-text="Fale conosco">
								<i class="fa fa-whatsapp"></i>Fale conosco
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	@show
		
@include('layouts.footer')