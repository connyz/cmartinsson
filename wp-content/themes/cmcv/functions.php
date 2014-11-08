<?php
	/**
	 * CMCV functions and definitions
	 *
	 * @package CMCV
	 */

	/**
	 * Set the content width based on the theme's design and stylesheet.
	 */
	if ( ! isset( $content_width ) ) {
		$content_width = 980; /* pixels */
	}

	  /**
   *
   * toolbox_title_tag()
   *
   * A function to generate decent page titles. Based
   * on the one in twentyeleven.
   *
   **/

  function toolbox_title_tag() {
    global $page, $paged;
    $output = wp_title('|', false, 'right');
    $output .= get_bloginfo('name');

    $site_description = get_bloginfo( 'description', 'display' );
    if($site_description && (is_home() || is_front_page())) {
      $output .= ' | ' . $site_description;
    }

    echo $output;
  }

	if ( ! function_exists( 'cmcv_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cmcv_setup() {

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on CMCV, use a find and replace
		 * to change 'cmcv' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'cmcv', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'cmcv' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		) );

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside', 'image', 'video', 'quote', 'link',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'cmcv_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
	}
	endif; // cmcv_setup
	add_action( 'after_setup_theme', 'cmcv_setup' );

	/**
	 * Register widget area.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
	 */

	function cmcv_widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Sidebar', 'cmcv' ),
			'id'            => 'sidebar-1',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		// Add a widget for header text
		if (function_exists('register_sidebar')) {
			register_sidebar(array(
			'name' => 'Header widget',
			'id' => 'extra-widget',
			'description' => 'Widget area for header',
			'before_widget' => '<div class="widget header_widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h1>',
			'after_title' => '</h1>'
			));
		}
	}
	add_action( 'widgets_init', 'cmcv_widgets_init' );

	// Place the widget before the header
	//add_filter ('__before_header', 'add_my_widget');
	function custom_top_widget() {
		if (function_exists('dynamic_sidebar')) {
			dynamic_sidebar('Header widget');
		}
	}

	/**
	 * Enqueue scripts and styles.
	 */
	function cmcv_scripts() {
		wp_enqueue_style( 'cmcv-style', get_stylesheet_uri() );
		wp_enqueue_style('base', get_bloginfo('template_directory') . '/css/base.css', false, 1, 'screen');
		wp_enqueue_style('responsive', get_bloginfo('template_directory') . '/css/responsive.css', false, 1, 'screen');
		wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,800italic,400,600,700,800');
		wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Raleway:400,500,700,600,800,900');

		// Check usefulness later of these 2 scripts
		wp_enqueue_script( 'cmcv-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
		wp_enqueue_script( 'cmcv-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'cmcv_scripts' );
	require_once('inc/custom-post-types.php');


	/**
	 *
	 * Display page sidebar content
	 *
	 * All single pages should display the sidebar pushes, if there's any active.
	 * If there's no active pushes for the page, the fallback is the general widget area.
	 *
	 **/

	function cmcv_display_page_sidebar() {

	  // Set up the markup for the sidebar wrapper.
	  // This way it will always be the same markup that wraps around the different sidebar areas.
	  $start = '<div class="right_widget_area">';
	  $end = '</div>';
	  $isCustom = is_page_template("templates/custom-cv.php");

	  if (is_singular()){
	  	if ($isCustom){
		    echo $start;
		      cmcv_custom_push_loop();
		    echo $end;
	  	}elseif(is_single()){
	  		//If single project page, display nothing
	   	}else{
	   		// Display widget sidebar if standard page
	   		if (is_active_sidebar('sidebar-1')) {
	        echo $start;
	          dynamic_sidebar('sidebar-1');
	        echo $end;
	      }
	  	}
	  }else{
	  	if (is_active_sidebar('sidebar-1')) {
        echo $start;
          dynamic_sidebar('sidebar-1');
        echo $end;
      }
	  }
	};

	/**
	 *
	 * Loop for custom sidebar pushs
	 *
	 **/

	function cmcv_custom_push_loop(){
	  if (have_rows('sidebar_push')){
	    echo ('<div class="right_sidebar_push">');
	    while (have_rows('sidebar_push')): the_row();
	      $title = get_sub_field('title');
	      $content = get_sub_field('text_area');
	      echo ('<div class="sidebar_push">');
	      echo ('<h3>' . $title . '</h3>');
	      echo ($content);
	      echo ('</div>');
	    endwhile;
	    echo ('</div>');
	  }else{
	  	if (is_active_sidebar('sidebar-1')) {
        echo $start;
          dynamic_sidebar('sidebar-1');
        echo $end;
      }
	  }
	};