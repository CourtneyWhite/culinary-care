<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="main main-fundraiser">
	  <div class="wrapper">

  		<h1 class="page-title"><?php the_field('fundraiser_hero_title'); ?></h1>

      <div class="fundraiser-header">
        <div class="cook-off">
          <img src="/wp-content/themes/culinary/assets/images/logo-cook-off.svg" class="logo-cook-off" alt="Corporate Cook-Off">
        </div>
        <div class="host">
          <img src="/wp-content/themes/culinary/assets/images/host-fpo.jpg" class="host-headshot" alt="Kendrick Lamar">
          <h3><?php the_field('fundraiser_emcee_name'); ?></h3>
          <p>Host and Emcee</p>
        </div>
      </div>

      <div class="fundraiser-info">
        <div class="col-1-3">
          <img src="/wp-content/themes/culinary/assets/images/icon-calendar.svg" class="icon-calendar" alt="">
          <p><?php the_field('fundraiser_date'); ?></p>
        </div>
        <div class="col-1-3">
          <img src="/wp-content/themes/culinary/assets/images/icon-chefs-hat.svg" class="icon-chefs-hat" alt="">
          <p><?php the_field('fundraiser_location'); ?></p>
        </div>
        <div class="col-1-3">
          <img src="/wp-content/themes/culinary/assets/images/icon-watch.svg" class="icon-watch" alt="">
          <p><?php the_field('fundraiser_time'); ?></p>
        </div>
      </div>

      <ul class="fundraiser-cta">
        <li><a href="" class="btn red">Purchase Tickets</a></li>
        <li><a href="" class="btn turq">Sponsor a Team</a></li>
      </ul>

      <div class="fundraiser-body body">
    		<?php the_content(); ?>
      </div>

	  </div>
	</section>

  <section class="fundraiser-chefs section">
    <div class="wrapper">
      <div class="icon-fork"><div class="icon-fork-yellow"></div></div>
      <h2 class="section-title">Participating Chefs</h2>
      <ul class="fundraiser-grid">
        <?php
        if( have_rows('fundraiser_chefs') ):
          while ( have_rows('fundraiser_chefs') ) : the_row();
        ?>
          <li><?php
            $image = get_sub_field('fundraiser_chefs_image');
            echo '<img src="' . $image['sizes']['partner-thumb'] . '">';
          ?></li>
        <?php
          endwhile;
        endif;
        ?>
      </ul>
    </div>
  </section>

  <section class="fundraiser-panel section">
    <div class="wrapper">
      <div class="icon-fork"><div class="icon-fork-yellow"></div></div>
      <h2 class="section-title">Tasting Panel</h2>
      <ul class="fundraiser-grid">
        <?php
        if( have_rows('fundraiser_panel') ):
          while ( have_rows('fundraiser_panel') ) : the_row();
        ?>
          <li><?php
            $image = get_sub_field('fundraiser_panel_image');
            echo '<img src="' . $image['sizes']['partner-thumb'] . '">';
          ?></li>
        <?php
          endwhile;
        endif;
        ?>
      </ul>
    </div>
  </section>

  <section class="fundraiser-teams section">
    <div class="wrapper">
      <div class="icon-fork"><div class="icon-fork-yellow"></div></div>
      <h2 class="section-title">Participating Teams</h2>
      <ul class="fundraiser-grid">
        <?php
        if( have_rows('fundraiser_teams') ):
          while ( have_rows('fundraiser_teams') ) : the_row();
        ?>
          <li><?php
            $image = get_sub_field('fundraiser_teams_image');
            echo '<img src="' . $image['sizes']['partner-thumb'] . '">';
          ?></li>
        <?php
          endwhile;
        endif;
        ?>
      </ul>
    </div>
  </section>

  <section class="fundraiser-committee section">
    <div class="wrapper">
      <h2 class="section-title">Host Committee</h2>
      <ul class="fundraiser-grid">
        <?php
        if( have_rows('fundraiser_host_committee') ):
          while ( have_rows('fundraiser_host_committee') ) : the_row();
        ?>
          <li><?php the_sub_field('fundraiser_host_committee_name'); ?></li>
        <?php
          endwhile;
        endif;
        ?>
      </ul>
    </div>
  </section>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
