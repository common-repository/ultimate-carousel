<?php
/*
Plugin Name: Ultimate Carousel
Plugin URI:  http://themebon.com/
Description: Ultimate Corusel  is very simple and free to create slider in your WordPress website. You can add pictures in (PNG, JPG and GIF Even Video) posts, pages and in template files.More then 100 styles for free will be added so be updated alwayse!
Author: themescup
Author URI:http://applecidervinegarforhair.com/
TextDomain: ucw
Version: 1.0.7
*/


if ( ! defined( 'ABSPATH' ) ) { die;}


# Load plugin Translations
function ucw_load_textdomain(){

    load_plugin_textdomain('ucw', false, dirname( plugin_basename( __FILE__ ) ) .'/languages/' );

}

//Loading CSS
function ucw_ultimate_carousel_scripts() {

    // CSS
    wp_enqueue_style('ucw_custom', plugins_url( '/assets/css/allcss.css' , __FILE__ ) );

    // JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('ucw_bootstrap_js', plugins_url( '/assets/js/bootstrap.min.js' , __FILE__ ), array(), '', true);
    wp_enqueue_script('ucw_touchSwipe', plugins_url( '/assets/js/jquery.touchSwipe.min.js' , __FILE__ ), array(), '', true );
    wp_enqueue_script('ucw_haritage_slider_js', plugins_url( '/assets/js/haritage_slider_min.js' , __FILE__ ), array(), '', true );

    wp_enqueue_script('ucw_responsive_js', plugins_url( '/assets/js/responsive_bootstrap_carousel.js' , __FILE__ ), array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'ucw_ultimate_carousel_scripts' );


// Registering Custom Post
add_action( 'init', 'ultimate_carousel_custom_post' );
function ultimate_carousel_custom_post() {
    register_post_type( 'ultimate-carousel',
        array(
            'labels' => array(
                'name' => __( 'Ultimate Carousels' ),
                'singular_name' => __( 'Ultimate Carousel' ),
                'add_new_item' => __( 'Add New Carousels' )
            ),
            'public' => true,
            'supports' => array('title'),
            'has_archive' => true,
            'rewrite' => array('slug' => 'ultimate-carousel-wp'),
            'menu_icon' => 'dashicons-image-filter',
            'menu_position' => 20,
        )
    );
    
}



//Load Framework
require_once ('inc/framework/cs-framework.php');



//Calling Shortcodes
require_once ('shortcodes/index.php');


//widget shortcode support
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');




// Shortcode Generator
add_filter( 'manage_ultimate-carousel_posts_columns', 'ucw_revealid_add_id_column', 10 );
add_action( 'manage_ultimate-carousel_posts_custom_column', 'ucw_revealid_id_column_content', 10, 2 );


function ucw_revealid_add_id_column( $columns ) {
   $columns['ultimate-carousel'] = 'Carousel Shortcode';
   return $columns;
}

function ucw_revealid_id_column_content( $column, $id ) {
  if( 'ultimate-carousel' == $column ) {
      
  
     $shortcode_render ='[ultimate-carousel id="'.$id.'"]';
     
    echo '<input style="min-width:210px" type=\'text\' onClick=\'this.setSelectionRange(0, this.value.length)\' value=\''.$shortcode_render.'\' />';
    
  }
}

// Gallery custom messages
add_filter( 'post_updated_messages', 'ucw_updated_messages' );
function ucw_updated_messages( $messages ){
        
    global $post;
    
    $post_ID = get_the_ID();
    
 $messages['ultimate-carousel'] = array(
            0 => '', 
            1 => sprintf( __('Carousel published. Shortcode is: %s'), '[ultimate-carousel id="'.$post_ID.'"]' ),
            6 => sprintf( __('Carousel published. Shortcode is: %s'), '[ultimate-carousel id="'.$post_ID.'"]' ),
        );

    return $messages;
        
}