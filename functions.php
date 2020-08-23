<?php

/* enqueue menu */
function load_menu()
{
	register_nav_menus(array('nav-menu' => __('Header Menu')));
}

add_action('init','load_menu');


/* enqueue styles and scripts */        
function load_stylesheets() {

    wp_register_style( 'bootstrap' , get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 'all' );
    wp_enqueue_style( 'bootstrap' );
    
    wp_register_style( 'fontawesome' , get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), 'all'  );
    wp_enqueue_style( 'fontawesome' );

    wp_register_style( 'flaticon' , get_template_directory_uri() . '/assets/fonts/flaticon.css', array(), 'all'  );
    wp_enqueue_style( 'flaticon' );

    wp_register_style( 'animate' , get_template_directory_uri() . '/assets/css/animate.css', array(), 'all'  );
    wp_enqueue_style( 'animate' );

    wp_register_style( 'owl.carousel' , get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), 'all'  );
    wp_enqueue_style( 'owl.carousel' );
   
    wp_register_style( 'magnific-popup' , get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), 'all'  );
    wp_enqueue_style( 'magnific-popup' );
  
    wp_register_style( 'odometer' , get_template_directory_uri() . '/assets/css/odometer.min.css', array(), 'all'  );
    wp_enqueue_style( 'odometer' );  
    
    wp_register_style( 'style' , get_stylesheet_uri() . '', array(), 'all'  );
    wp_enqueue_style( 'style' );

    wp_register_style( 'responsive' , get_template_directory_uri() . '/assets/css/responsive.css', array(), 'all'  );
    wp_enqueue_style( 'responsive' );

   /* wp_register_style( 'custom' , get_stylesheet_uri() . '/custom.css', array(), 1, 'all'  );
    wp_enqueue_style( 'custom' ); */
}
       

add_action( 'wp_enqueue_scripts' , 'load_stylesheets' );

function load_scripts() {

    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array());
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array());
    wp_enqueue_script('bootstrap');

    wp_register_script( 'owl.carousel' , get_template_directory_uri() . '/assets/js/owl.carousel.js', array());
    wp_enqueue_script('owl.carousel');

    wp_register_script( 'magnific-popup' , get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array());
    wp_enqueue_script('magnific-popup');

    wp_register_script( 'filterizr' , get_template_directory_uri() . '/assets/js/jquery.filterizr.min.js', array());
    wp_enqueue_script('filterizr');

    wp_register_script( 'clock' , get_template_directory_uri() . '/assets/js/clock.min.js', array());
    wp_enqueue_script('clock');

    wp_register_script( 'appear' , get_template_directory_uri() . '/assets/js/jquery.appear.min.js', array());
    wp_enqueue_script('appear');

    wp_register_script( 'odometer' , get_template_directory_uri() . '/assets/js/odometer.min.js', array());
    wp_enqueue_script('odometer');

    wp_register_script( 'oddometer-active' , get_template_directory_uri() . '/assets/js/oddometer-active.js', array());
    wp_enqueue_script('oddometer-active');

    wp_register_script( 'main' , get_template_directory_uri() . '/assets/js/main.js', array(), 1, 1, 1);
    wp_enqueue_script('main');
}

add_action( 'wp_enqueue_scripts' , 'load_scripts' );

?>
