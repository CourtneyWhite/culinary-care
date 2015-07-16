<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="main main-fundraiser">
	  <div class="wrapper">

  		<h1 class="page-title">Inaugural Corporate Cook-Off</h1>

      <div class="fundraiser-header">
        <div class="cook-off">
          <img src="/wp-content/themes/culinary/assets/images/logo-cook-off.svg" class="logo-cook-off" alt="Corporate Cook-Off">
        </div>
        <div class="host">
          <img src="/wp-content/themes/culinary/assets/images/host-fpo.jpg" class="host-headshot" alt="Kendrick Lamar">
          <h3>Kendrick Lamar</h3>
          <p>Host and Emcee</p>
        </div>
      </div>

      <div class="fundraiser-info">
        <div class="col-1-3">
          <img src="/wp-content/themes/culinary/assets/images/icon-calendar.svg" class="icon-calendar" alt="">
          <p>Friday, October 17</p>
        </div>
        <div class="col-1-3">
          <img src="/wp-content/themes/culinary/assets/images/icon-chefs-hat.svg" class="icon-chefs-hat" alt="">
          <p>Kendall College</p>
        </div>
        <div class="col-1-3">
          <img src="/wp-content/themes/culinary/assets/images/icon-watch.svg" class="icon-watch" alt="">
          <p>7:00PM &ndash; 10:00PM</p>
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
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
      </ul>
    </div>
  </section>

  <section class="fundraiser-panel section">
    <div class="wrapper">
      <div class="icon-fork"><div class="icon-fork-yellow"></div></div>
      <h2 class="section-title">Tasting Panel</h2>
      <ul class="fundraiser-grid">
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
      </ul>
    </div>
  </section>

  <section class="fundraiser-teams section">
    <div class="wrapper">
      <div class="icon-fork"><div class="icon-fork-yellow"></div></div>
      <h2 class="section-title">Participating Teams</h2>
      <ul class="fundraiser-grid">
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
        <li><img src="/wp-content/uploads/2014/12/Sunda_Logo-117x144.jpg"></li>
      </ul>
    </div>
  </section>

  <section class="fundraiser-committee section">
    <div class="wrapper">
      <!-- <div class="icon-fork"><div class="icon-fork-yellow"></div></div> -->
      <h2 class="section-title">Host Committee</h2>
      <ul class="fundraiser-grid">
        <li>Bob Plant</li>
        <li>Katy Perry</li>
        <li>Snoop Dogg</li>
        <li>Willie Nelson</li>
        <li>James Page</li>
        <li>Lykke Li</li>
        <li>Sara Johansson</li>
        <li>Bob Plant</li>
        <li>Katy Perry</li>
        <li>Snoop Dogg</li>
        <li>Willie Nelson</li>
        <li>James Page</li>
        <li>Lykke Li</li>
        <li>Sara Johansson</li>
        <li>Bob Plant</li>
        <li>Katy Perry</li>
        <li>Snoop Dogg</li>
        <li>Willie Nelson</li>
        <li>James Page</li>
        <li>Lykke Li</li>
        <li>Sara Johansson</li>
      </ul>
    </div>
  </section>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
