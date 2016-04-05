<?php
/*
Plugin Name: IDIES external links formatter
Plugin URI: http://www.gluseen.org
Description: Causes all external links to open in a new window
Version: 1.0
Author: Jordan Raddick
Author URI: http://idies.jhu.edu
License: GPLv2
*/
?>
<?php 
function iel_enqueue_script() {

   wp_enqueue_script( 'idies_external_links' , plugins_url() . '/idies-external-links/js/idies-external-links.js' , array('jquery-core') , null , true );
   wp_enqueue_style( 'idies_external_links' , plugins_url() . '/idies-external-links/css/idies-external-links.css' );

}

add_action( 'wp_enqueue_scripts' , 'iel_enqueue_script');
