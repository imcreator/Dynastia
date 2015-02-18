
	<footer>
		
		<div class="fluid-container footer-content">		

				<div class="row">	
					<div class="col-md-6 col-sm-12 col-xs-12 " style="float: right">		
						
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar 1') ) : ?>

								<?php endif; ?>
							
					</div>
					

					<div class="col-md-6 col-sm-12 col-xs-12" style="color:#fff">

						<p style="display:inline">&copy <?php bloginfo( 'name' ); ?> <?=date('Y'); ?>. Wszelkie Prawa zastrzeżone</p>
						
					</div>
				</div>
			
		</div>
			<!-- <div id="google_translate_element"></div> -->
			
	</footer>
	<?php wp_footer(); ?>
</div>

</body>
</html>