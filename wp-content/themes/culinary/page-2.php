<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<section class="hero-slider">
		  <div class="slides">
  		  <div class="slide slide-1" data-hash="slide-1">
  		    <div class="slide-content">
      			<?php the_field('slide_1_content'); ?>
  		    </div>
  		    <div class="slide-img"></div>
  		  </div>
  		  <div class="slide slide-2" data-hash="slide-2">
  		    <div class="slide-content">
      			<?php the_field('slide_2_content'); ?>
  		    </div>
  		    <div class="slide-img"></div>
  		  </div>
  		  <div class="slide slide-3" data-hash="slide-3">
  		    <div class="slide-content">
      			<?php the_field('slide_3_content'); ?>
  		    </div>
  		    <div class="slide-img"></div>
  		  </div>
  		  <div class="slide slide-4" data-hash="slide-4">
  		    <div class="slide-content">
      			<?php the_field('slide_4_content'); ?>
  		    </div>
  		    <div class="slide-img"></div>
  		  </div>
		  </div>
		  <div class="slider-tabs">
		    <a href="" class="tab-1 active" data-slide-index="0">
		      <span class="tab-label"><?php the_field('slide_1_tab'); ?></span>
		    </a>
		    <a href="" class="tab-2" data-slide-index="1">
		       <span class="tab-label"><?php the_field('slide_2_tab'); ?></span>
		    </a>
		    <a href="" class="tab-3" data-slide-index="2">
		       <span class="tab-label"><?php the_field('slide_3_tab'); ?></span>
		    </a>
		    <a href="" class="tab-4" data-slide-index="3">
  		     <span class="tab-label"><?php the_field('slide_4_tab'); ?></span>
  		  </a>
		  </div>
		</section>
		
		<section id="how-it-works" class="how-it-works section">
		  <div class="wrapper">
		    <h2 class="section-title">How It Works</h2>
		    <div class="grid">
  			  <div class="col-1-4">
  			    <div class="how-image">
  			      <div class="overlay"></div>
  			      <h3><?php the_field('how_it_works_block_1_title'); ?></h3>
  			     </div>
  			    <?php the_field('how_it_works_block_1'); ?>
  			  </div>
  			  <div class="col-1-4">
  			    <div class="how-image">
  			      <div class="overlay"></div>
  			      <h3><?php the_field('how_it_works_block_2_title'); ?></h3>
  			     </div>
  			    <?php the_field('how_it_works_block_2'); ?>
  			  </div>
  			  <div class="col-1-4">
  			    <div class="how-image">
  			      <div class="overlay"></div>
  			      <h3><?php the_field('how_it_works_block_3_title'); ?></h3>
  			     </div>
  			    <?php the_field('how_it_works_block_3'); ?>
  			  </div>
  			  <div class="col-1-4">
  			    <div class="how-image">
  			      <div class="overlay"></div>
  			      <h3><?php the_field('how_it_works_block_4_title'); ?></h3>
  			     </div>
  			    <?php the_field('how_it_works_block_4'); ?>
  			  </div>
		    </div>
		  </div>
		</section>

		<section id="our-partners" class="our-partners section">
		  <div class="wrapper">
		    <h2 class="section-title">Our Partners</h2>
		    <div class="icon-fork"><div class="icon-fork-yellow"></div></div>
		    <div class="partners-slider">
        <?php
        $args = array( 'post_type' => 'partners', 'posts_per_page' => -1 );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        	<div class="partner">
    		  <?php
    		    $image = get_field('partner_logo');
            if( $image ) {
            	echo '<span class="logo"><img src="' . $image['sizes']['partner-thumb'] . '"></span>';
            }
          ?>
        	</div>
        <?php endforeach; 
        wp_reset_postdata();?>
		    </div>
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
		    <h2 class="section-title">Our Impact</h2>
		    <div class="testimonials-slider">
        <?php
        $args = array( 'post_type' => 'testimonials', 'posts_per_page' => -1 );
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
                  } else {
                    echo '<img src="/wp-content/themes/culinary/assets/images/icon-testimonial.png">';
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