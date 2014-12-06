<?php
/*
Template Name: Volunteer Form
*/
get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="main">
	  <div class="wrapper">

		<h1 class="page-title"><?php the_title(); ?></h1>

    <div class="volunteer-form-grid grid">
      <div class="col-1-2 body">
    		<?php the_content(); ?>
      </div>
      <div class="col-1-2 volunteer-form">
  			<?php the_field('volunteer_form'); ?>
      </div>
    </div>

	  </div>
	</section>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
