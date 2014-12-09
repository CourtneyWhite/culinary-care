<?php

	// Options Framework (https://github.com/devinsays/options-framework-plugin)
	if ( !function_exists( 'optionsframework_init' ) ) {
		define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/_/inc/' );
		require_once dirname( __FILE__ ) . '/_/inc/options-framework.php';
	}

	// Theme Setup (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function culinary_setup() {
		load_theme_textdomain( 'culinary', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'structured-post-formats', array( 'link', 'video' ) );
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'quote', 'status' ) );
		register_nav_menu( 'primary', __( 'Navigation Menu', 'culinary' ) );
		add_theme_support( 'post-thumbnails' );
	}
	add_action( 'after_setup_theme', 'culinary_setup' );

	// Scripts & Styles (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function culinary_scripts_styles() {
		global $wp_styles;

		// Load Comments
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

		// Load Stylesheets
//		wp_enqueue_style( 'culinary-reset', get_template_directory_uri() . '/reset.css' );
//		wp_enqueue_style( 'culinary-style', get_stylesheet_uri() );

		// Load IE Stylesheet.
//		wp_enqueue_style( 'culinary-ie', get_template_directory_uri() . '/css/ie.css', array( 'culinary-style' ), '20130213' );
//		$wp_styles->add_data( 'culinary-ie', 'conditional', 'lt IE 9' );

		// Modernizr
		// This is an un-minified, complete version of Modernizr. Before you move to production, you should generate a custom build that only has the detects you need.
		// wp_enqueue_script( 'culinary-modernizr', get_template_directory_uri() . '/_/js/modernizr-2.6.2.dev.js' );

	}
	add_action( 'wp_enqueue_scripts', 'culinary_scripts_styles' );
	
	// Partners Post Type
	add_action('init', 'partners_register');
  function partners_register() {
  	$labels = array(
  		'name' => _x('Partners', 'post type general name'),
  		'singular_name' => _x('Partners Item', 'post type singular name'),
  		'add_new' => _x('Add New', 'partners item'),
  		'add_new_item' => __('Add New Partners Item'),
  		'edit_item' => __('Edit Partners Item'),
  		'new_item' => __('New Partners Item'),
  		'view_item' => __('View Partners Item'),
  		'search_items' => __('Search Partners'),
  		'not_found' =>  __('Nothing found'),
  		'not_found_in_trash' => __('Nothing found in Trash'),
  		'parent_item_colon' => ''
  	);
  	$args = array(
  		'labels' => $labels,
  		'public' => true,
  		'publicly_queryable' => true,
  		'show_ui' => true,
  		'query_var' => true,
  		'menu_icon' => 'dashicons-groups',
  		'rewrite' => true,
  		'capability_type' => 'post',
  		'hierarchical' => false,
  		'menu_position' => null,
  		'supports' => array('title','editor','thumbnail')
  	  ); 
  	register_post_type( 'partners' , $args );
  }

	// Testimonials Post Type
	add_action('init', 'testimonials_register');
  function testimonials_register() {
  	$labels = array(
  		'name' => _x('Testimonials', 'post type general name'),
  		'singular_name' => _x('Testimonials Item', 'post type singular name'),
  		'add_new' => _x('Add New', 'testimonials item'),
  		'add_new_item' => __('Add New Testimonials Item'),
  		'edit_item' => __('Edit Testimonials Item'),
  		'new_item' => __('New Testimonials Item'),
  		'view_item' => __('View Testimonials Item'),
  		'search_items' => __('Search Testimonials'),
  		'not_found' =>  __('Nothing found'),
  		'not_found_in_trash' => __('Nothing found in Trash'),
  		'parent_item_colon' => ''
  	);
  	$args = array(
  		'labels' => $labels,
  		'public' => true,
  		'publicly_queryable' => true,
  		'show_ui' => true,
  		'query_var' => true,
  		'menu_icon' => 'dashicons-format-quote',
  		'rewrite' => true,
  		'capability_type' => 'post',
  		'hierarchical' => false,
  		'menu_position' => null,
  		'supports' => array('title','editor','thumbnail')
  	  ); 
  	register_post_type( 'testimonials' , $args );
  }

	// WP Title (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function culinary_wp_title( $title, $sep ) {
		global $paged, $page;

		if ( is_feed() )
			return $title;

//		 Add the site name.
		$title .= get_bloginfo( 'name' );

//		 Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";

//		 Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( __( 'Page %s', 'culinary' ), max( $paged, $page ) );

		return $title;
	}
	add_filter( 'wp_title', 'culinary_wp_title', 10, 2 );


//OLD STUFF BELOW

	// Load jQuery
	if ( !function_exists( 'core_mods' ) ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script( 'jquery' );
				wp_register_script( 'jquery', ( "http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ), false);
				wp_enqueue_script( 'jquery' );
			}
		}
		add_action( 'wp_enqueue_scripts', 'core_mods' );
	}

	// Clean up the <head>, if you so desire.
	function removeHeadJunk() {
	  remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'start_post_rel_link', 10, 0);
    remove_action('wp_head', 'parent_post_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
	}
	add_action('init', 'removeHeadJunk');

	// Custom Menu
	register_nav_menu( 'primary', __( 'Navigation Menu', 'culinary' ) );

	// Widgets
	if ( function_exists('register_sidebar')) {
		function culinary_widgets_init() {
			register_sidebar( array(
				'name'          => __( 'Sidebar Widgets', 'culinary' ),
				'id'            => 'sidebar-primary',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			) );
		}
		add_action( 'widgets_init', 'culinary_widgets_init' );
	}

	// Navigation - update coming from twentythirteen
	function post_navigation() {
		echo '<div class="navigation">';
		echo '	<div class="next-posts">'.get_next_posts_link('&laquo; Older Entries').'</div>';
		echo '	<div class="prev-posts">'.get_previous_posts_link('Newer Entries &raquo;').'</div>';
		echo '</div>';
	}

	// Posted On
	function posted_on() {
		printf( __( '<span class="sep">Posted </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a> by <span class="byline author vcard">%5$s</span>', '' ),
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_author() )
		);
	}
	
	// Image Sizes
	add_image_size( 'partner-thumb', 160, 144 );
	add_image_size( 'testimonial-thumb', 96, 96, true );

?>
