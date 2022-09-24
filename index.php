<?php /*

Plugin Name: Api İntegration

Plugin URI: https://www.abdurrahmanekecik.com/api-integration

Description: With api integration, you can include all your APIs in the system.
Version: 1.0

Author: Abdurrahman Ekecik

Author URI: https://www.abdurrahmanekecik.com

License: GNU

*/

if ( ! defined( 'ABSPATH' ) ) exit;

if (current_user_can('upload_files')) { 



}



add_action('admin_menu', 'api_integration');

function api_integration() {

add_menu_page('Api Integration', 'Api Integration', 'manage_options', 'api-integration', 'api_integration_function');}



function api_integration_function() { echo 'Merhabalar. Bu yeni eklentimiz.'; }


wp_enqueue_style( 'api_integration_style', plugins_url( 'css/style.css', __FILE__ ), '', '1.0' );


?>