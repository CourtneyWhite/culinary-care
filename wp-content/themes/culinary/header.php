<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
	<link rel="stylesheet" type="text/css" href="//cloud.typography.com/6049932/687046/css/fonts.css" />
	<script src="<?php echo get_template_directory_uri(); ?>/_/js/modernizr-2.8.0.dev.js"></script>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="page">

		<header id="header" class="header">
		  <div class="wrapper">
  			<div class="logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Culinary Care"></a></div>
  			<div class="top">
  			  <ul class="social-links">
  			    <li><a href="" class="icon-twitter-grey"></a></li>
  			    <li><a href="" class="icon-facebook-grey"></a></li>
  			  </ul>
  			  <form class="form-newsletter">
  			    <div class="form-item">
  			      <label for="email">Get Email Updates</label>
  			      <input type="email" id="email">
  			    </div>
  			    <button class="btn">Sign Up</button>
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
    			<a href="" class="btn btn-donate">Donate</a>
    		</nav>
		  </div>
		</header>