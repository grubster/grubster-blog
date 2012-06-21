	<div id="extended-footer">
	
		<div class="col-full">
	
			<div class="block one">
				
				<?php dynamic_sidebar('footer-1'); ?>
				
			</div><!-- /.block -->
			
			<div class="block two">
			
				<?php dynamic_sidebar('footer-2'); ?>
			
			</div><!-- /.block -->
			
			<div class="block three">
				
				<?php dynamic_sidebar('footer-3'); ?>
			
			</div><!-- /.block -->
			
		</div><!-- /.col-full -->
		
	</div><!-- /#extended-footer -->
	
</div><!-- /#container -->
<?php wp_footer(); ?>
<?php if ( get_option('woo_google_analytics') <> "" ) { echo stripslashes(get_option('woo_google_analytics')); } ?>
</body>
</html>