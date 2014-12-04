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
		
		
		<section id="how-it-works" class="how-it-works section">
		  <div class="wrapper">
		    <h2 class="section-title">How It Works</h2>
		    <div class="grid">
  			  <div class="col-1-4">
  			    <h3><span><?php the_field('how_it_works_block_1_title'); ?><span></h3>
  			    <?php the_field('how_it_works_block_1'); ?>
  			  </div>
  			  <div class="col-1-4">
  			    <h3><span><?php the_field('how_it_works_block_2_title'); ?></span></h3>
  			    <?php the_field('how_it_works_block_2'); ?>
  			  </div>
  			  <div class="col-1-4">
  			    <h3><span><?php the_field('how_it_works_block_3_title'); ?></span></h3>
  			    <?php the_field('how_it_works_block_3'); ?>
  			  </div>
  			  <div class="col-1-4">
  			    <h3><span><?php the_field('how_it_works_block_4_title'); ?></span></h3>
  			    <?php the_field('how_it_works_block_4'); ?>
  			  </div>
		    </div>
		  </div>
		</section>

		<section id="our-partners" class="our-partners section">
		  <div class="wrapper">
		    <h2 class="section-title">Our Partners</h2>
		    
		  </div>
		</section>

		<section id="meal-tracker" class="meal-tracker section">
		  <div class="wrapper">
		    <h2>Meal Tracker</h2>
		    <?php the_field('meal_tracker'); ?>
		  </div>
		</section>

		<section id="testimonials" class="testimonials section">
		  <div class="wrapper">
		    <h2 class="section-title">Testimonials</h2>
		    <div class="testimonials-slider">
        <?php
        $args = array( 'post_type' => 'testimonials' );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        	<div class="testimonial">
        		<div class="quote"><?php the_content(); ?></div>
        		<div class="quote-info">
          		<div class="thumb">
          		  <?php
          		    $image = get_field('testimonial_image');
                  $size = 'thumb';
                  if( $image ) {
                  	echo '<img src="' . $image['url'] . '">';
                  }
                  ?>
          		</div>
          		<div class="name"><?php the_field('testimonial_name'); ?></div>
        		</div>
        	</div>
        <?php endforeach; 
        wp_reset_postdata();?>
		    </div>
		  </div>
		</section>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>