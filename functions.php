<?php 

/**
 * Enqueue styles.
 */
 function vendorjunctiongroup_styles() {
    wp_enqueue_style( 'vendorjunctiongroup-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/css/bootstrap.min.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/vendors/animate/animate.min.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'custom-animate', get_template_directory_uri() . '/assets/vendors/animate/custom-animate.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'jarallax', get_template_directory_uri() . '/assets/vendors/jarallax/jarallax.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'nouislider', get_template_directory_uri() . '/assets/vendors/nouislider/nouislider.min.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'nouislider-pips', get_template_directory_uri() . '/assets/vendors/nouislider/nouislider.pips.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'odometer', get_template_directory_uri() . '/assets/vendors/odometer/odometer.min.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/vendors/swiper/swiper.min.css', array(), wp_get_theme()->get( 'Version' ) );
   //  wp_enqueue_style( 'VJ-icons', get_template_directory_uri() . '/assets/vendors/VJ-icons/style.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'tiny-slider', get_template_directory_uri() . '/assets/vendors/tiny-slider/tiny-slider.min.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'reey-font', get_template_directory_uri() . '/assets/vendors/reey-font/stylesheet.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/vendors/owl-carousel/owl.carousel.min.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/vendors/owl-carousel/owl.theme.default.min.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'bxslider', get_template_directory_uri() . '/assets/vendors/bxslider/jquery.bxslider.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'bootstrap-select', get_template_directory_uri() . '/assets/vendors/bootstrap-select/css/bootstrap-select.min.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'vegas', get_template_directory_uri() . '/assets/vendors/vegas/vegas.min.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/assets/vendors/jquery-ui/jquery-ui.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'timePicker', get_template_directory_uri() . '/assets/vendors/timepicker/timePicker.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'VJ', get_template_directory_uri() . '/assets/css/VJ.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'VJ-responsive', get_template_directory_uri() . '/assets/css/VJ-responsive.css', array(), wp_get_theme()->get( 'Version' ) );
 }
add_action( 'wp_enqueue_scripts', 'vendorjunctiongroup_styles' );

/**
 * Enqueue Scripts.
 */
function vendorjunctiongroup_scripts() {
   wp_enqueue_script('jquery');
   // wp_register_script( 'jquery', get_template_directory_uri() . '/assets/vendors/jquery/jquery-3.6.0.min.js', wp_get_theme()->get( 'Version' ), true );

   wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/js/bootstrap.bundle.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('bootstrap');

   wp_register_script( 'jarallax', get_template_directory_uri() . '/assets/vendors/jarallax/jarallax.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('jarallax');

   wp_register_script( 'jquery-ajaxchimp', get_template_directory_uri() . '/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('jquery-ajaxchimp');

   wp_register_script( 'jquery-appear', get_template_directory_uri() . '/assets/vendors/jquery-appear/jquery.appear.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('jquery-appear');

   wp_register_script( 'jquery-circle-progress', get_template_directory_uri() . '/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('jquery-circle-progress');

   wp_register_script( 'jquery-magnific-popup', get_template_directory_uri() . '/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('jquery-magnific-popup');

   wp_register_script( 'jquery-validate', get_template_directory_uri() . '/assets/vendors/jquery-validate/jquery.validate.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('jquery-validate');

   wp_register_script( 'nouislider', get_template_directory_uri() . '/assets/vendors/nouislider/nouislider.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('nouislider');

   wp_register_script( 'odometer', get_template_directory_uri() . '/assets/vendors/odometer/odometer.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('odometer');

   wp_register_script( 'swiper', get_template_directory_uri() . '/assets/vendors/swiper/swiper.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('swiper');

   
   wp_register_script( 'tiny-slider', get_template_directory_uri() . '/assets/vendors/tiny-slider/tiny-slider.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('swiper');

   
   wp_register_script( 'wnumb', get_template_directory_uri() . '/assets/vendors/wnumb/wNumb.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('wnumb');

   
   wp_register_script( 'wow', get_template_directory_uri() . '/assets/vendors/wow/wow.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('wow');

   
   wp_register_script( 'isotope', get_template_directory_uri() . '/assets/vendors/isotope/isotope.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('isotope');

   
   wp_register_script( 'countdown', get_template_directory_uri() . '/assets/vendors/countdown/countdown.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('countdown');

   wp_register_script( 'owl-carousel', get_template_directory_uri() . '/assets/vendors/owl-carousel/owl.carousel.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('owl-carousel');

   wp_register_script( 'bxslider', get_template_directory_uri() . '/assets/vendors/bxslider/jquery.bxslider.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('bxslider');


   wp_register_script( 'bootstrap-select', get_template_directory_uri() . '/assets/vendors/bootstrap-select/js/bootstrap-select.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('bootstrap-select');


   wp_register_script( 'vegas', get_template_directory_uri() . '/assets/vendors/vegas/vegas.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('vegas');

   wp_register_script( 'jquery-ui', get_template_directory_uri() . '/assets/vendors/jquery-ui/jquery-ui.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('jquery-ui');

   wp_register_script( 'timepicker', get_template_directory_uri() . '/assets/vendors/timepicker/timePicker.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('timepicker');

   wp_register_script( 'VJ-JS', get_template_directory_uri() . '/assets/js/VJ.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
   wp_enqueue_script('VJ-JS');
}
add_action( 'wp_enqueue_scripts', 'vendorjunctiongroup_scripts' );


/**
 * Theme Options
 */
add_theme_support('menus');


/**
 * Menus
 */
register_nav_menus(
    array(
        'header' => __('Header Menu', 'vendorjunctiongroup'),
        'mobile' => __('Mobile Menu', 'vendorjunctiongroup'),
        'footer' => __('Footer Menu', 'vendorjunctiongroup'),
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




?>