<?php get_header(); ?>
       
    <div id="content" class="col-full">
		<div id="main" class="col-left">
		
			<?php //if ( get_option( 'woo_breadcrumbs' ) == 'true') { yoast_breadcrumb('<div id="breadcrumb"><p>','</p></div>'); } ?>
            
            <?php if (have_posts()) : $count = 0; ?>
            <?php while (have_posts()) : the_post(); $count++; ?>
            
                <div class="post">

                    <div class="titulo">
	                    <h2 class="title">
	                    	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	                    </h2>
	                    <div>
		                    <span class="txt_por"><?php _e('por', 'woothemes') ?></span>
		                    <span class="nome_autor"><?php the_author_posts_link(); ?></span>
	                    </div>
                    </div>
                    
                    <p class="date">
                    	<span class="day"><?php the_time('j'); ?></span>
                    	<span class="month"><?php the_time('M'); ?></span>
                    </p>
                    
                    <div class="entry">
                    	<?php the_content(); ?>
                    </div>
                    
                    <div class="post-meta">
                    
                    	<ul>
                    		<li class="comments">
                    			<span class="head"><?php _e('Comentários', 'woothemes') ?></span>
                    			<span class="body"><?php comments_popup_link(__('0 Comentários', 'woothemes'), __('1 Comentário', 'woothemes'), __('% Comentários', 'woothemes')); ?></span>
                    			<a class="bt_comente" href="<?php the_permalink() ?>#comments" title="">Comente este post</a>
                    		</li>
                    		<li class="categories">
                    			<span class="head"><?php _e('Categories', 'woothemes') ?></span>
                    			<span class="body"><?php the_category(', ') ?></span>
                    		</li>
                    	</ul>
                    	
                    	<div class="fix"></div>
                    
                    </div><!-- /.post-meta -->

                </div><!-- /.post -->
                
				<?php comments_template('', true); ?>
                                                    
			<?php endwhile; else: ?>
				<div class="post">
                	<p><?php _e('Sorry, no posts matched your criteria.', 'woothemes') ?></p>
  				</div><!-- /.post -->             
           	<?php endif; ?>  
        
		</div><!-- /#main -->

        <?php get_sidebar(); ?>

    </div><!-- /#content -->
		
<?php get_footer(); ?>