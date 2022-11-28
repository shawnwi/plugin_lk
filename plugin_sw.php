<?php
/**
 * Plugin Name: Plugin SW
 * Plugin URI:  https://developer.wordpress.org/plugins/the-basics/
 * Description: WordPress plugin that uses webpack.
 * Version:     1.0.0
 * Author:      Web Immersion
 * Author URI:  https://www.webimmersion.com
 * Text Domain: wds-wwe
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Our custom post type function
function create_posttype() {
  
  register_post_type( 'calendar_menu',
  // CPT Options
      array(
          'labels' => array(
              'name' => __( 'Calendar Menu' ),
              'singular_name' => __( 'Menu' )
          ),
          //'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
          'supports' => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'menus'),
          'taxonomies' => array( 'category' ),
          //'show_in_rest' => true,

      )
  );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

include_once "sw_header.php";
include_once "sw_calendar.php";
include_once "sw_delivery.php";

class Plugin_SW {
  /**
   * A reference to an instance of this class.
   */
  private static $instance;

  /**
   * Returns an instance of this class.
   */
  public static function get_instance() {
    if ( null == self::$instance ) {
      self::$instance = new Plugin_SW();
    }
    return self::$instance;
	}//end get_instance

  /*******************************************************************************************
   * Constructor  --  Initializes the plugin by setting filters and administration functions.*
   *******************************************************************************************/
	private function __construct() {
    add_action( 'wp_enqueue_scripts', array($this, 'plugin_default_scripts') ); 
    //add_action( 'plugins_loaded', array($this,'initFront') );
    $this->initFront();
	}//end __construct

  function initFront(){
  }

  /*
   * shortcodes
   */
  function add_sean_shortcodes($config, $shortcodes){
    
    $type_keys = array_keys($config['types']);
    foreach($type_keys as $type_key){
      if(!empty($config['types'][$type_key]['shortcode'])){
        add_shortcode(
          $config['types'][$type_key]['shortcode'], 
          array( $shortcodes, 'make_shortcode')
        );
      }//end if
    }//end for
  }	

  /*
   * Register JS and CSS from node
   */
  function plugin_default_scripts() {
    $current_lang = apply_filters( 'wpml_current_language', NULL );
    $plugin_name = "front_core";
    wp_register_script($plugin_name.'-js', plugins_url( 'dist/main.js', __FILE__ ),[],4,true);
    wp_register_style( $plugin_name.'-css', plugins_url( 'dist/main.css', __FILE__ ),[], 2);
    wp_enqueue_style( $plugin_name.'-css' );
    $localized = wp_localize_script($plugin_name.'-js', $plugin_name.'_var', array(
      'ajaxurl' => admin_url( 'admin-ajax.php' ),
      'plugin_name' => $plugin_name,
      'rest_api' => get_rest_url() .'wp/v2/',
      'plugin_url' => plugin_dir_url(__FILE__),
      'site_url' => get_site_url(),
      'current_lang' => $current_lang,
      //'vid_regexp' => get_shortcode_regex(array("vid"))
    ));

    wp_enqueue_script($plugin_name.'-js');
  }


}

add_action( 'plugins_loaded', array( 'Plugin_SW', 'get_instance' ) );


//add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');
function shapeSpace_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', '/wp-content/plugins/plugin_sw/src/multidatepicker/jquery-ui.multidatespicker.js', array(), null, true);

}


//add_action( 'wp_enqueue_scripts', 'add_css' );

function add_css() {
  
  wp_enqueue_style( 'jquery-ui-style', 'https://code.jquery.com/ui/1.12.1/themes/pepper-grinder/jquery-ui.css' );
  wp_enqueue_style( 'datepicker-style', plugin_dir_url( __FILE__ ).'/src/multidatepicker/jquery-ui.multidatespicker.css' );
}

