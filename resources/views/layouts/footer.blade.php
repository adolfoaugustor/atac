		<footer id="footer">
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12"><p class="text-center">Coyright © 2023 ATAC.</p></div>

						<div class="col-md-6 col-sm-12">
							<p class="text-center contact-footer">
                                Telefone: <a href="tel:+5585991696754">(85) 9 9169-6754</a> | E-mail: <a href="mailto:atac-assessoria@uol.com.br">atac-assessoria@uol.com.br</a>
                                <br>Endereço: <a href="https://maps.app.goo.gl/zNYC7Y1wJoD2YWnK8" target="_blank">R. Magnólia, 43, Serrinha, Fortaleza - CE, 60741-010 </a>
                            </p>
						</div>

                        <div class="col-md-3 col-sm-12">
                            <ul class="social text-center">
								{{ menu('social-footer', 'menu-footer-social')}}
							</ul>
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
