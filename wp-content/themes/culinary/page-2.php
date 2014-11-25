<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<section class="hero-slider">
		  <div class="slides">
  		  <div class="slide-1">
  		    <div class="slide-content">
      			<?php the_field('slide_1_content'); ?>
  		    </div>
  		    <div class="slide-img">
  		    </div>
  		  </div>
  		  <div class="slide-2">
  		    <div class="slide-content">
      			<?php the_field('slide_2_content'); ?>
  		    </div>
  		    <div class="slide-img">
  		    </div>
  		  </div>
  		  <div class="slide-3">
  		    <div class="slide-content">
      			<?php the_field('slide_3_content'); ?>
  		    </div>
  		    <div class="slide-img">
  		    </div>
  		  </div>
  		  <div class="slide-4">
  		    <div class="slide-content">
      			<?php the_field('slide_4_content'); ?>
  		    </div>
  		    <div class="slide-img">
  		    </div>
  		  </div>
		  </div>
		  <div class="slider-tabs">
		    <a href="#" class="tab-1"><?php the_field('slide_1_tab'); ?></a>
		    <a href="#" class="tab-2"><?php the_field('slide_2_tab'); ?></a>
		    <a href="#" class="tab-3"><?php the_field('slide_3_tab'); ?></a>
		    <a href="#" class="tab-4"><?php the_field('slide_4_tab'); ?></a>
		  </div>
		</section>
		
		
		<section id="story" class="story">
		  <div class="wrapper">
  			<div class="content">
    			<?php the_field(''); ?>
  			</div>
		  </div>
		</section>

		<section id="popcorn" class="popcorn">
		  <div class="wrapper">
  			<?php the_field('the_popcorn'); ?>
		  </div>
		</section>

		<section id="where-to-buy" class="where-to-buy">
		  <div class="wrapper">
  			<div class="content">
    			<?php the_field('where_to_buy'); ?>
  			</div>
  			<div class="grid location-grid">
        <?php
        $args = array( 'post_type' => 'location' );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        	<div class="col-1-3">
        	  <h3><?php the_title(); ?></h3>
        		<p class="address"><?php the_field('address'); ?></p>
        		<p class="city-state"><?php echo get_field('city') . ', ' . get_field('state') . ' ' . get_field('zip'); ?></p>
        		<p><a href="<?php the_field('map_link'); ?>" target="_blank">Map</a></p>
        	</div>
        <?php endforeach; 
        wp_reset_postdata();?>
  			</div>
		  </div>
		</section>

		<section id="contact" class="contact">
		  <div class="wrapper">
  			<?php the_field('contact_us'); ?>
  			<?php // echo do_shortcode( '[contact-form-7 id="16" title="Contact Us"]' ); ?>
		  </div>
		</section>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>