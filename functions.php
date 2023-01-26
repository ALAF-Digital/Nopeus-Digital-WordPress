<?php 

/**
 * Enqueue styles.
 */
 function nopeus_styles() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'all', get_template_directory_uri() . '/assets/css/all.min.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'progressbar', get_template_directory_uri() . '/assets/css/progressbar.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.min.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'master', get_template_directory_uri() . '/assets/css/master.css', array(), wp_get_theme()->get( 'Version' ) );

   
 }
add_action( 'wp_enqueue_scripts', 'nopeus_styles' );

/**
 * Enqueue Scripts.
 */
function nopeus_scripts() {
   wp_enqueue_script('jquery');

   wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('bootstrap');

   wp_register_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('swiper');
   
   wp_register_script( 'counter', get_template_directory_uri() . '/assets/js/counter.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('counter');
   
   wp_register_script( 'gsap', get_template_directory_uri() . '/assets/js/gsap.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('gsap');
   
   wp_register_script( 'ScrollTrigger', get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('ScrollTrigger');
   
   wp_register_script( 'ScrollToPlugin', get_template_directory_uri() . '/assets/js/ScrollToPlugin.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('ScrollToPlugin');

   wp_register_script( 'ScrollSmoother', get_template_directory_uri() . '/assets/js/ScrollSmoother.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('ScrollSmoother');

   wp_register_script( 'SplitText', get_template_directory_uri() . '/assets/js/SplitText.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('SplitText');

   wp_register_script( 'chroma', get_template_directory_uri() . '/assets/js/chroma.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('chroma');

   wp_register_script( 'mixitup', get_template_directory_uri() . '/assets/js/mixitup.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('mixitup');

   wp_register_script( 'vanilla-tilt', get_template_directory_uri() . '/assets/js/vanilla-tilt.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('vanilla-tilt');

   wp_register_script( 'meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('meanmenu');

   wp_register_script( 'mainjs', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('mainjs');
}
add_action( 'wp_enqueue_scripts', 'nopeus_scripts' );


/**
 * Theme Options
 */
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


/**
 * Menus
 */
register_nav_menus(
    array(
        'header' => __('Header Menu', 'vendorjunctiongroup'),
        'mobile' => __('Mobile Menu', 'vendorjunctiongroup'),
        'footer' => __('Footer Menu', 'vendorjunctiongroup'),
        'footer-services' => __('Footer Services', 'vendorjunctiongroup'),
    )
);

/**
 * Add Current to Active Menu Item
 */
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'current ';
     }
     return $classes;
}

/**
 * Add 'dropdown' to dropdown Menu Links
 */
function wpdocs_add_menu_parent_class( $items ) {
	$parents = array();

	// Collect menu items with parents.
	foreach ( $items as $item ) {
		if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
			$parents[] = $item->menu_item_parent;
		}
	}

	// Add class.
	foreach ( $items as $item ) {
		if ( in_array( $item->ID, $parents ) ) {
			$item->classes[] = 'dropdown';
		}
	}
	return $items;
}
add_filter( 'wp_nav_menu_objects', 'wpdocs_add_menu_parent_class' );


/**
 * Add hotlinked image
 */
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
  
    if(empty($first_img)){ //Defines a default image
      $first_img = "/images/default.jpg";
    }
    return $first_img;
  }

/**
 * Sidebars
 */

 function my_sidebars(){
    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );

 }
add_action('widgets_init', 'my_sidebars');


?>