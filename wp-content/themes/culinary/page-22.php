<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="main">
    <div class="wrapper">
  
      <div class="page-header">
    		<h1 class="page-title"><?php the_title(); ?></h1>
    		<?php the_content(); ?>
      </div>
  		
  		<div class="donate-form-block">
  		
  		  <div class="donate-image"></div>

        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" id="donate-form" class="donate-form">
          <input type="hidden" name="cmd" value="_donations">
          <input type="hidden" name="business" value="courtney@culinarycare.org">
          <input type="hidden" name="currency_code" value="USD">
          <input type="hidden" name="item_name" value="Culinary Care Donation">
    
  		    <h3>Donate where it's needed most</h3>
  		    <div class="amount">
  		      <span class="dollar-sign">$</span>
  		      <span class="currency">USD</span>
  		      <input type="text" name="amount" id="amount" value="35">
  		    </div>
  		    <div class="recurring form-checkbox">
  		      <input type="checkbox" checked="checked" id="recurring" name="recurring" value="recurring">
  		      <label for="recurring">Make this a recurring monthly donation</label>
  		    </div>
  		    <button type="submit" class="btn">Donate</button>
          <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
  		    <div class="by-check">
  		      <p>Donate by Check</p>
  		      <p>Mail your donation to Culinary Care, 1920 Birchwood, Wilmette, IL, 60091</p>
  		    </div>
        </form>  
  		  
  		</div>

    </div>
  </section>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
