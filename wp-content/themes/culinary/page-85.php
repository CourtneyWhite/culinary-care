<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="main">
	  <div class="wrapper">

		<h1 class="page-title"><?php the_title(); ?></h1>

    <?php if ($post->post_content != ""): ?>
    <div class="body">
  		<?php the_content(); ?>
    </div>
    <?php endif; ?>

    <div class="events-grid grid">
    <?php
    $args = array(
      'post_type' => 'events',
      'posts_per_page' => -1,
      'meta_key' => 'event_date',
    	'orderby' => 'meta_value_num',
    	'order' => 'ASC'
    );
    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
    	<div class="col-1-2 event">
    		<div class="event-image">
    		  <?php
  		    $image = get_field('event_image');
          if( $image ) {
          	echo '<img src="' . $image['sizes']['event-thumb'] . '">';
          } else {
            echo '<img src="/wp-content/themes/culinary/assets/images/thumb-events.png">';
          }
          ?>
    		</div>
    		<div class="event-info">
      		<div class="event-date">
      		  <?php
      		  $date = DateTime::createFromFormat('Ymd', get_field('event_date'));
            echo $date->format('F j, Y');
            ?>
      		</div>
      		<div class="event-location"><?php the_field('event_location'); ?></div>
      		<div class="event-time"><?php the_field('event_time'); ?></div>
      		<div class="event-register">
      		  <a href="<?php the_field('event_registration_link'); ?>" target="_blank" class="btn">Register</a>
      		</div>
    		</div>
    	</div>
    <?php endforeach; 
    wp_reset_postdata();?>
    </div>

	  </div>
	</section>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
