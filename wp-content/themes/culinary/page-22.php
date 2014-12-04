<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="main">
    <div class="wrapper">
  
  		<h1 class="page-title"><?php the_title(); ?></h1>
  		<?php the_content(); ?>
  		
  		<div class="donate-form-block">
  		
  		  <div class="donate-image"></div>
  		
  		  <form class="donate-form">
  		    <h3>Donate where it's needed most</h3>
  		    <div class="amount">
  		      <span class="dollar-sign">$</span>
  		      <span class="currency">USD</span>
  		      <input type="text" placeholder="25">
  		    </div>
  		    <div class="recurring form-checkbox">
  		      <input type="checkbox" checked="checked" id="recurring" name="recurring" value="recurring">
  		      <label for="recurring">Make this a recurring monthly donation</label>
  		    </div>
  		    <button class="btn">Donate</button>
  		    <div class="by-check">
  		      <a href="">Donate by Check</a>
  		    </div>
  		  </form>
  		  
  		</div>

    </div>
  </section>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
