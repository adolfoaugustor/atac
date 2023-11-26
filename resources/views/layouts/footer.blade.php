		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="footer-top clearfix">
						<div class="col-md-4">
							<div class="usefull-links-widget clearfix">
								<h2>Links Úteis</h2>
								{{ menu('menu-footer') }}
							</div>
						</div>
						<div class="col-md-4 col-md-offset-4">
							<div class="twitter-widget clearfix">
								<h2>Contatos</h2>
								<div class="contact-info-widget">
									<p><strong>Phone:</strong> 1.800.555.6789<br>
									<strong>Email:</strong> <a href="mailto:support@advisor.com">support@advisor.com</a><br>
									<strong>Address:</strong> 12345 North Main Street, New York, NY 555555
									</p>
								</div>
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
