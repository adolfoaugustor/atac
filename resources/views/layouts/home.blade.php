@section('title', 'ATAC | Home')

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
		@isset($banners)
			<!-- MAIN BANNER -->
			<section class="main-banner">
				<div class="tp-banner-container">
					<div class="tp-banner" >
						<ul>
							@foreach($banners as $banner)
							
								@if($banner->align == 'left')
									{{-- se o align left --}}
									<li data-transition="fade" data-slotamount="5" data-masterspeed="300" data-thumb="{{ Voyager::image( $banner->image ) }}"  data-saveperformance="on"  data-title="">
											
										<!-- IMAGE -->
										<img src="{{ Voyager::image( $banner->image ) }}"  alt="" data-lazyload="{{ Voyager::image( $banner->image ) }}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
							
										<!-- title -->
										<div class="tp-caption banner-heading lft rs-parallaxlevel-0"
											data-x="0"
											data-y="210" 
											data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
											data-speed="300"
											data-start="500"
											data-easing="Power3.easeInOut"
											data-elementdelay="0.1"
											data-endelementdelay="0.1"
											style="z-index: 2;"><span class="color-default">{{ $banner->title }}</span>
										</div>
							
										<!-- description -->
										@if( isset($banner->description) )
											<div class="tp-caption lft banner-text rs-parallaxlevel-0"
												data-x="0"
												data-y="300" 
												data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
												data-speed="300"
												data-start="1000"
												data-easing="Power3.easeInOut"
												data-elementdelay="0.1"
												data-endelementdelay="0.1"
												style="z-index: 3;">{!! $banner->description !!}
											</div>
										@endif
							
										@if( isset($banner->button1) )
											<!-- botao 1 -->
											<div class="tp-caption banner-btn colored lft banner-btn rs-parallaxlevel-0"
												data-x="0"
												data-y="350" 
												data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
												data-speed="300"
												data-start="1500"
												data-easing="Power3.easeInOut"
												data-elementdelay="0.1"
												data-endelementdelay="0.1"
												style="z-index: 4;"><a href="{{ $banner->link_btn1 }}">{{ $banner->button1 }}</a>
											</div>
										@endif
							
										@if( isset($banner->button2) )
											<!-- botão 2 -->
											<div class="tp-caption banner-btn lft banner-btn rs-parallaxlevel-0"
												data-x="180"
												data-y="350" 
												data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
												data-speed="300"
												data-start="1500"
												data-easing="Power3.easeInOut"
												data-elementdelay="0.1"
												data-endelementdelay="0.1"
												style="z-index: 4;"><a href="{{ $banner->link_btn2 }}">{{ $banner->button2 }}</a>
											</div>
										@endif

									</li>
								@endif
								@if($banner->align == 'center')
									{{-- se o align center --}}
									<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-thumb="{{ Voyager::image( $banner->image ) }}"  data-saveperformance="on"  data-title="">
											
										<!-- IMAGE -->
										<img src="{{ Voyager::image( $banner->image ) }}"  alt="" data-lazyload="{{ Voyager::image( $banner->image ) }}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
				
										<!-- title -->
										<div class="tp-caption banner-heading color-white center rs-parallaxlevel-0"
											data-x="center"
											data-y="210" 
											data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
											data-speed="300"
											data-start="500"
											data-easing="Power3.easeInOut"
											data-elementdelay="0.1"
											data-endelementdelay="0.1"
											style="z-index: 2;">{{ $banner->title }}
										</div>
							
										<!-- description -->
										@if( isset($banner->description) )
											<div class="tp-caption center banner-text color-white rs-parallaxlevel-0"
												data-x="center"
												data-y="288" 
												data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
												data-speed="300"
												data-start="1000"
												data-easing="Power3.easeInOut"
												data-elementdelay="0.1"
												data-endelementdelay="0.1"
												style="z-index: 3;">{!! $banner->description !!}
											</div>
										@endif
								
										@if( isset($banner->button1) )
											<!-- botão 1-->
											<div class="tp-caption banner-btn colored center banner-btn rs-parallaxlevel-0"
												data-x="400"
												data-y="370" 
												data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
												data-speed="300"
												data-start="1500"
												data-easing="Power3.easeInOut"
												data-elementdelay="0.1"
												data-endelementdelay="0.1"
												style="z-index: 4;"><a href="{{ $banner->link_btn1 }}">{{ $banner->button1 }}</a>
											</div>
										@endif

										@if( isset($banner->button2) )
											<!-- botão 2 -->
											<div class="tp-caption banner-btn center banner-btn rs-parallaxlevel-0"
												data-x="580"
												data-y="370" 
												data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
												data-speed="300"
												data-start="1500"
												data-easing="Power3.easeInOut"
												data-elementdelay="0.1"
												data-endelementdelay="0.1"
												style="z-index: 4;"><a href="{{ $banner->link_btn2 }}">{{ $banner->button2 }}</a>
											</div>
										@endif
									</li>
								@endif
								@if($banner->align == 'right')
									{{-- se o align right --}}
									<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-thumb="{{ Voyager::image( $banner->image ) }}"  data-saveperformance="on"  data-title="">
											
										<!-- IMAGE -->
										<img src="{{ Voyager::image( $banner->image ) }}"  alt="" data-lazyload="{{ Voyager::image( $banner->image ) }}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
							
										<!-- title -->
										<div class="tp-caption banner-heading right rs-parallaxlevel-0"
											data-x="right"
											data-y="210" 
											data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
											data-speed="300"
											data-start="500"
											data-easing="Power3.easeInOut"
											data-elementdelay="0.1"
											data-endelementdelay="0.1"
											style="z-index: 2;"><span class="color-default">{{ $banner->title }}</span>
										</div>
							
										<!-- description -->
										@if( isset($banner->description) )
											<div class="tp-caption right banner-text rs-parallaxlevel-0"
												data-x="right"
												data-y="288" 
												data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
												data-speed="300"
												data-start="1000"
												data-easing="Power3.easeInOut"
												data-elementdelay="0.1"
												data-endelementdelay="0.1"
												style="z-index: 3;">{!! $banner->description !!}
											</div>
										@endif
							
										@if( isset($banner->button1) )
											<!-- botao 1 -->
											<div class="tp-caption banner-btn colored right banner-btn rs-parallaxlevel-0"
												data-x="right"
												data-y="370" 
												data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
												data-speed="300"
												data-start="1500"
												data-easing="Power3.easeInOut"
												data-elementdelay="0.1"
												data-endelementdelay="0.1"
												style="z-index: 4;"><a href="{{ $banner->link_btn1 }}">{{ $banner->button1 }}</a>
											</div>
										@endif
									</li>
								@endif

							@endforeach
						</ul>
					</div>
				</div>
			</section><!-- / MAIN BANNER -->
		@endisset
	@show

	@section('conteudo')
		@isset($servicos)
			<!-- WELCOME -->
			<section class="servicos">
				<div class="container">
					<div class="heading text-center animate bounceIn">
						<h2>NOSSOS SERVIÇOS</h2>
					</div>
					<div class="height-50"></div>
					
					<div class="row text-center">
						@if($servicos)
							@foreach ($servicos as $key => $servico)
							<div class="col-md-3">
								<div class="text-box text-center fadeInUp 
									@if ($key === 0)
										animate
									@elseif ($key === 1)
										animate
									@else
										animate-it
									@endif">
									<div class="bordered-thumb">
										<img src="{{ Voyager::image( $servico->image_servico ) }}" alt="">
									</div>
									<h4>{{ $servico->title }}</h4>
								</div>
							</div>
							@endforeach
						@endif
					</div>
				</div>
			</section><!-- / WELCOME -->	
		@endisset

		@isset($clients)
			<section>
				<div class="container clients">
					<div class="heading margin-bottom-50 animate-it bounceIn">
						<h2>Nossos Clintes</h2>
						<p>Nosso Portifólio de clientes que atuamos para facilitar sua contabilidade.</p>
						<div class="line"></div>
					</div>
					<div class="two-items-carousel2 owl-carousel">
						@foreach($clients as $client)
							<div class="partner">
								<img src="{{ Voyager::image( $client->thumbnail('cropped', 'image_client') ) }}" alt="">
							</div>
						@endforeach
					</div>
				</div>
			</section>
		@endisset

		<div class="contact-us-bar">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h4 class=" animate fadeInLeft">Precisa de ajuda com sua contabilidade... Estamos à disposição!</h4>
					</div>
					<div class="col-md-3">
						<div class="text-right">
							<a href="tel:+853292-2586" class="btn btn-primary get-in-touch animate fadeInRight" data-text="Fale conosco">
								<i class="fa fa-whatsapp"></i>Fale conosco
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	@show
		
@include('layouts.footer')