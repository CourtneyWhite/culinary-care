<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="main page-fundraiser">
	  <div class="wrapper">

  		<h1 class="page-title">Inaugural Corporate Cook-Off</h1>

      <ul class="fundraiser-cta">
        <li><a href="" class="btn">Purchase Tickets</a></li>
        <li><a href="" class="btn">Sponsor a Team</a></li>
      </ul>

      <div class="body">
    		<?php the_content(); ?>
      </div>

	  </div>
	</section>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
