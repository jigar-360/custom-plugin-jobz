<?php
/**
 * Plugin Name: Custom Plugin Jobz
 * Plugin URI: http://www.mywebsite.com/my-first-plugin
 * Slug : custom-plugin-jobz
 * Description: This plugin will echo the shortcode
 * Version: 1.0
 * Author: Jobz
 * Author URI: http://www.mywebsite.com
 */

/**
 * Add new Shortcodes
 *
 * @return void
 */
function prefix_add_plugin_shortcodes() {
	
    add_shortcode( 'loginpage', 'my_account_page' );
    add_shortcode( 'forgot-password', 'forgot_password_page' );
    add_shortcode( 'create-resume', 'create_resume_page' );
    add_shortcode( 'resume-list', 'resume_list_page' );
    add_shortcode( 'manage-jobs-list', 'manage_jobs_page' );
    add_shortcode( 'manage-application-list', 'manage_application_page' );
    add_shortcode( 'job-alert-page', 'job_alert_page' );
	
}
add_action( 'init', 'prefix_add_plugin_shortcodes' );

/**
 * Filter 'upload_mimes' and add xml. 
 *
 * @param     array     $mimes An array of valid upload mime types
 * @return    array
 *
 * @access    public
 * @since     2.0
 */
if ( ! function_exists( 'ot_upload_mimes' ) ) {

  function ot_upload_mimes( $mimes ) {
  
    $mimes['xml'] = 'application/xml';
    
    return $mimes;
    
  }
}

if ( ! function_exists( 'ot_add_xml_to_upload_filetypes' ) ) {

  function ot_add_xml_to_upload_filetypes() {
    
    add_filter( 'upload_mimes', 'ot_upload_mimes' );
  
  }

}
