<?php global $redux_option; ?>
<div id="service-list" class="text-center">
    <h2><?php echo $redux_option['opt-service-title']; ?></h2>
    <div class="service-content">
        <p><?php echo $redux_option['opt-service-text']; ?></p>
    </div>
	<div class="service-wrap">
		

			<?php
			$args = array(
				'post_type' 		=> 'service',
				'orderby' 			=> 'menu_order',
				'order'				=> 'ASC',
				'posts_per_page' 	=> -1
				);

			$the_query = new WP_Query( $args );

			if ( $the_query->have_posts() ) :

				while ( $the_query->have_posts() ) : $the_query->the_post();

			?>

			<div class="col-sm-3 col-md-3">
				<div class="service">
					

                        <?php $icon = get_field('icon'); $icon_hover = get_field('icon_hover'); ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( 'echo=0' ); ?>" rel="bookmark">
                                <img class="icon" src="<?php echo $icon['url']; ?>" />
                                <img class="icon-hover" src="<?php echo $icon_hover['url']; ?>" />
								
							</a>
						

						
							<h3 class="service-title"><?php the_title(); ?></h3>
							<div class="service-summary">
								<?php the_excerpt(); ?>
							</div>
						

					
				</div>
            </div>
			<?php
			endwhile;
			endif; 
			wp_reset_postdata();
			?>
		

		
	</div>
</div>
