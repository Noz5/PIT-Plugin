<?php
/**
 * Plugin Name: PIT Designs Plugin
 * Plugin URI: https://pitdesigns.com
 * Description: Custom functions plugin.
 * Author: PIT Designs
 * Author URI: https://pitdesigns.com
 * Version: 1.0
 */

/** ADMIN FOOTER BRANDING **/

function remove_footer_admin()
{
    echo 'Developed by: <a href="https://pitdesigns.com" target="_blank">PIT Designs</a></p>';
}

add_filter('admin_footer_text', 'remove_footer_admin');



/**  DASHBORD WIDGET **/

add_action('wp_dashboard_setup', 'pit_widget');

function pit_widget()
{
    global $wp_meta_boxes;
    wp_add_dashboard_widget('custom_help_widget', 'Need Help?', 'message');
}

function message()
{
    echo '<span>Contact PIT Designs support team <a href="mailto:info@pitdesigns.com">here</a>.</span>
</br>
<span>Or visit <a href="https://pitdesigns.com" target="_blank">out website</a></span>';
}


/** STYLE ADMIN PANEL **/

add_action('admin_head', 'my_style');

function my_style()
{
    echo '<style>
body {
    font-family: "Calibri";
} 
 .notice.elementor-message {
     display: none;
 }
 </style>';
}
