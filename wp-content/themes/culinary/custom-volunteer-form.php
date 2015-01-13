<?php
/*
Template Name: Volunteer Form
*/
get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="main volunteer-form-page">
	  <div class="wrapper">

  		<h1 class="page-title"><?php the_title(); ?></h1>
  		
  		<div class="body">
    		<?php the_content(); ?>
  		</div>
  
      <div class="volunteer-form">
  			<?php the_field('volunteer_form'); ?>
      </div>

	  </div>
	</section>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
