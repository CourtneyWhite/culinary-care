<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="main">
	  <div class="wrapper">

		<h1 class="page-title"><?php the_title(); ?></h1>

    <div class="body">
  		<?php the_content(); ?>
    </div>

	  </div>
	</section>
	
	<section class="team">
	  <div class="wrapper">

	    <div class="icon-fork"><div class="icon-fork-yellow"></div></div>
	  
	    <h2 class="section-title">Board of Directors</h2>
      <?php
      $args = array( 'post_type' => 'team_members', 'posts_per_page' => -1 );
      $myposts = get_posts( $args );
      foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
      	<div class="member">
      	  <div class="member-image">
    		  <?php
    		    $image = get_field('member_image');
            if( $image ) {
            	echo '<img src="' . $image['sizes']['team-thumb'] . '">';
            } else {
              echo '<img src="/wp-content/themes/culinary/assets/images/thumb-events.png">';
            }
          ?>
      	  </div>
      	  <div class="member-info">
        	  <h3><?php the_title(); ?></h3>
        		<div class="bio"><?php the_content(); ?></div>
      	  </div>
      	</div>
      <?php endforeach; 
      wp_reset_postdata();?>
	  
	  </div>
	</section>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
