		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="footer-top clearfix">
						<div class="col-md-4">
							<div class="usefull-links-widget clearfix">
								<h2>Páginas</h2>
								{{ menu('links-uteis') }}
							</div>
						</div>
						<div class="col-md-4 col-md-offset-4">
							<div class="twitter-widget clearfix">
								<h2>Contatos</h2>
								{{ menu('contatos', 'menu-contato-footer')}}
							</div>

							<ul class="social">
								{{ menu('social-footer', 'menu-footer-social')}}
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6"><p>Coyright © 2023 ATAC. Todos os direitos reservados.</p></div>
						<div class="col-md-6 col-sm-6">
							<p class="text-right">Desenvolvido por <a href="https://aerowebsites.com.br" target="_blank">AeroWebSites</a></p>
						</div>
					</div>
				</div>
			</div>

		</footer>
		<!-- FOOTER SCRIPTS ======================= -->
		<script src="{{ asset('js/jquery-2.2.0.js') }}"></script>
		<script src="{{ asset('js/smooth-scroll.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/counter.js') }}"></script>
		<script src="{{ asset('js/common.js') }}"></script>
		<script src="{{ asset('js/jquery.themepunch.plugins.min.js') }}"></script>
		<script src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>
		<script src="{{ asset('js/scripts.js') }}"></script>
		<script src="{{ asset('js/hero-slider.js') }}"></script>
		@yield('scripts-extras')

		<script>
			jQuery(document).ready(function() {
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
