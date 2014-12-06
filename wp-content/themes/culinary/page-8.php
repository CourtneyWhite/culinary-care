<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="main">
	  <div class="wrapper">

		<h1 class="page-title"><?php the_title(); ?></h1>

    <div class="body">
  		<?php the_content(); ?>
    </div>
    
    <div class="volunteer-grid grid">
      <div class="col-1-3">
        <div class="volunteer-image">
          <img src="/wp-content/themes/culinary/assets/images/pic-volunteer-01.jpg" alt="">
        </div>
        <?php the_field('volunteer_block_1'); ?>
      </div>
      <div class="col-1-3">
        <div class="volunteer-image">
          <img src="/wp-content/themes/culinary/assets/images/pic-volunteer-02.jpg" alt="">
        </div>
        <?php the_field('volunteer_block_2'); ?>
      </div>
      <div class="col-1-3">
        <div class="volunteer-image">
          <img src="/wp-content/themes/culinary/assets/images/pic-volunteer-03.jpg" alt="">
        </div>
        <?php the_field('volunteer_block_3'); ?>
      </div>
    </div>

	  </div>
	</section>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
