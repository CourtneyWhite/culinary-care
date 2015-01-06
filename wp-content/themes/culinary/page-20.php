<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="main">
	  <div class="wrapper">

  		<h1 class="page-title"><?php the_title(); ?></h1>
  
      <div class="body">
    		<?php the_content(); ?>
      </div>
      
      <div class="give-grid grid">
        <div class="col-1-2">
          <div class="give-image">
            <img src="/wp-content/themes/culinary/assets/images/pic-give-01.jpg" alt="">
          </div>
    			<?php the_field('give_block_1'); ?>
        </div>
        <div class="col-1-2">
          <div class="give-image">
            <img src="/wp-content/themes/culinary/assets/images/pic-give-02.jpg" alt="">
          </div>
    			<?php the_field('give_block_2'); ?>
        </div>
        <div class="col-1-2">
          <div class="give-image">
            <img src="/wp-content/themes/culinary/assets/images/pic-give-03.jpg" alt="">
          </div>
    			<?php the_field('give_block_3'); ?>
        </div>
        <div class="col-1-2">
          <div class="give-image">
            <img src="/wp-content/themes/culinary/assets/images/pic-give-04.jpg" alt="">
          </div>
    			<?php the_field('give_block_4'); ?>
        </div>
      </div>

	  </div>
	</section>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
