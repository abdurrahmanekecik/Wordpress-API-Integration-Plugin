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

wp_enqueue_style( 'api_integration_style', plugins_url( 'css/style.css', __FILE__ ), '', '1.0' );



add_action('admin_menu', 'api_integration');

function api_integration() {

add_menu_page('Api Integration', 'Api Integration', 'manage_options', 'api-integration', 'api_integration_function');}



function api_integration_function() { 





?>
<h1>Wordpress Apı Integration Plugin</h1>
<br><br><br><br>
<form method="POST">
Google:<input type="text" name="google"><br>
Yandex:<input type="text" name="yandex"><br>
Live Support:<input type="text" name="live_support">
<button type="submit">Submit</button>
</form>


<?php }





function table_create() {


$google=$_POST['google'];
$yandex=$_POST['yandex'];
$live_support=$_POST['live_support'];


	global  $wpdb;
	$charset =$wpdb -> get_charset_collate();
	$table_name = $wpdb->prefix."api_integration";


	$sql = "CREATE TABLE $table_name(
		id int(11) NOT NULL AUTO_INCREMENT,
		google VARCHAR(255) NOT NULL,
		yandex VARCHAR(255) NOT NULL,
		live_support VARCHAR(255) NOT NULL,
		UNIQUE KEY id(id)) $charset;";


	require_once(ABSPATH. "wp-admin/includes/upgrade.php");
	dbDelta($sql);


register_activation_hook(__FILE__, 'creating_plugin_table');

$wpdb->insert($table_name, array(

"google"		=> $_POST['google'],
"yandex"		=> $_POST['yandex'],
"live_support"  => $_POST['live_support'],

));





}
table_create();

 ?>