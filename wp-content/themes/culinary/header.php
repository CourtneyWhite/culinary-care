<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<link rel="icon" type="image/png" href="/favicon.png">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
	<link rel="stylesheet" type="text/css" href="//cloud.typography.com/6049932/784486/css/fonts.css" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container">

		<header id="header" class="header">
		  <div class="wrapper">
  			<div class="logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Culinary Care"></a></div>
  			<div class="top">
  			  <ul class="social-links">
  			    <li><a href="https://twitter.com/culinarycare" target="_blank" class="icon-twitter-grey"></a></li>
  			    <li><a href="https://www.facebook.com/CulinaryCare/" target="_blank" class="icon-facebook-grey"></a></li>
  			  </ul>  			  
          <form action="//culinarycare.us3.list-manage.com/subscribe/post?u=15b99d5d95daff6914d18c0e0&amp;id=67184f55fc" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-newsletter" target="_blank" novalidate>
            <div class="form-item">
            	<label for="mce-EMAIL">Get Email Updates</label>
            	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" required>
            </div>
            <div style="position: absolute; left: -5000px;"><input type="text" name="b_15b99d5d95daff6914d18c0e0_67184f55fc" tabindex="-1" value=""></div>
            <input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="btn button">
          </form>
  			</div>
    		<nav id="nav" class="nav">
          <a href="" class="btn btn-mobile">
            <span class="icon-menu">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </span>
            Menu
          </a>
    			<?php wp_nav_menu( array('menu' => '2') ); ?>
    			<a href="/donate" class="btn btn-donate">Donate</a>
    		</nav>
		  </div>
		</header>