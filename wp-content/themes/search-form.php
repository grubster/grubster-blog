<div id="search_main" class="widget">

	<?php /*
	<h3><?php _e('Search', 'woothemes'); ?></h3>
	*/?>
	
	<div class="social">
		<a class="twitter" href="http://twitter.com/grubsterdining" target="_blank">Twitter</a>
		<a class="facebook" href="http://www.facebook.com/grubsterdining" target="_blank">Facebook</a>
	</div>

    <form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
    	<label class="txt_pesquisar" for="s">Pesquisar por</label>
        <input type="text" class="field" name="s" id="s"  value="<?php _e('PROCURAR...', 'woothemes') ?>" onfocus="if (this.value == '<?php _e('PROCURAR...', 'woothemes') ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e('PROCURAR...', 'woothemes') ?>';}" />
        <?php /*
        <input type="submit" class="submit" name="submit" value="<?php _e('Search', 'woothemes'); ?>" />
        */?>
    </form>
    
    <div class="fix"></div>
    
</div>
