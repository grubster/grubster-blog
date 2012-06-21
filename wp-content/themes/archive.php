<?php get_header(); ?>
       
    <div id="content" class="col-full">
		<div id="main" class="col-left">
            
            
            <?php if (have_posts()) : $count = 0; ?>
            
				<?php if (is_category()) { ?>
            
            
                <?php } elseif (is_day()) { ?>
    
    			
                <?php } elseif (is_month()) { ?>
    
    
                <?php } elseif (is_year()) { ?>
    
    			
                <?php } elseif (is_author()) { ?>
    
    
                <?php } elseif (is_tag()) { ?>
    
                
                <?php } ?>
				
				
            
            <?php while (have_posts()) : the_post(); $count++; ?>
                                                                        
                <!-- Post Starts -->
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
                    
                    <?php woo_get_image('image',490,200); ?>
                    
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
                                                    
			<?php endwhile; else: ?>
				<div class="post">
                	<p><?php _e('Sorry, no posts matched your criteria.', 'woothemes') ?></p>
                </div><!-- /.post -->
            <?php endif; ?>  
        
                <div class="more_entries">
                    <?php if (function_exists('wp_pagenavi')) wp_pagenavi(); else { ?>
                    <div class="fl"><?php next_posts_link(__('&larr; Previous Entries', 'woothemes')) ?></div>
                    <div class="fr"><?php previous_posts_link(__('Next Entries &rarr;', 'woothemes')) ?></div>
                    <br class="fix" />
                    <?php } ?> 
                </div>		
                
		</div><!-- /#main -->

        <?php get_sidebar(); ?>

    </div><!-- /#content -->
		
<?php get_footer(); ?>