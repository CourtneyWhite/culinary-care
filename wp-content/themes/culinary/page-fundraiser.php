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
          <div class="info-icon">
            <img src="/wp-content/themes/culinary/assets/images/icon-calendar.svg" class="icon-calendar" alt="">
          </div>
          <p><?php the_field('fundraiser_date'); ?></p>
        </div>
        <div class="col-1-3">
          <div class="info-icon">
            <img src="/wp-content/themes/culinary/assets/images/icon-chefs-hat.svg" class="icon-chefs-hat" alt="">
          </div>
          <p><?php the_field('fundraiser_location'); ?></p>
        </div>
        <div class="col-1-3">
          <div class="info-icon">
            <img src="/wp-content/themes/culinary/assets/images/icon-watch.svg" class="icon-watch" alt="">
          </div>
          <p><?php the_field('fundraiser_time'); ?></p>
        </div>
        <ul class="fundraiser-cta">
          <li><a href="<?php the_field('purchase_tickets_link'); ?>" class="btn red">Purchase Tickets</a></li>
          <li><a href="<?php the_field('sponsor_a_team_link'); ?>" class="btn turq">Sponsor a Team</a></li>
        </ul>
      </div>

	  </div>
	</section>

  <section class="fundraiser-details">
    <div class="wrapper">
      <div class="fundraiser-body">
        <?php the_content(); ?>
      </div>
      <aside class="fundraiser-ticket-info">
        <div class="ticket-option">
          <div class="ticket-price"><?php the_field('ticket_option_1_price'); ?></div>
          <h4><?php the_field('ticket_option_1_title'); ?></h4>
          <?php the_field('ticket_option_1_details'); ?>
        </div>
        <div class="ticket-option">
          <div class="ticket-price"><?php the_field('ticket_option_2_price'); ?></div>
          <h4><?php the_field('ticket_option_2_title'); ?></h4>
          <?php the_field('ticket_option_2_details'); ?>
        </div>
      </aside>
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
            $caption = get_sub_field('fundraiser_chefs_caption');
            echo '<div class="fundraiser-thumb"><img src="' . $image['sizes']['partner-thumb'] . '"></div>';
            echo '<div class="fundraiser-thumb-caption">' . $caption . '</div>';
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
            $caption = get_sub_field('fundraiser_panel_caption');
            echo '<div class="fundraiser-thumb"><img src="' . $image['sizes']['partner-thumb'] . '"></div>';
            echo '<div class="fundraiser-thumb-caption">' . $caption . '</div>';
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
            $caption = get_sub_field('fundraiser_teams_caption');
            echo '<div class="fundraiser-thumb"><img src="' . $image['sizes']['partner-thumb'] . '"></div>';
            echo '<div class="fundraiser-thumb-caption">' . $caption . '</div>';          ?></li>
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
