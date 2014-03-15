<?
//Si no NO puedo usar wordpres
require_once( $_SERVER['DOCUMENT_ROOT'] . '/boda/wp-config.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/boda/wp-includes/wp-db.php' );



class HelperAjax{
	function __construct(){
		
	}
	public function get_data($arr){

		global $wpdb;
		$asistentes = array();
		foreach ($arr["asistentes"] as $key => $value) {
			$wpdb->insert( 
				'wp_confirma', 
				array( 
					'name' => $value["name"], 
					'pre_boda' => ($value["pre-boda"] == 'true') ? 1 : 0, 
					'post_boda' => ($value["post-boda"] == 'true') ? 1 : 0
				), 
				array( 
					'%s', 
					'%d', 
					'%d' 
				) 
			);
		}
		return $arr["asistentes"];
	}
}

$helperAjax = new HelperAjax();

if (isset($_POST["key"]) && $_POST["key"] == 'pedroysara') {
	$result = HelperAjax::get_data($_POST);
	echo json_encode($result);
} else {
	echo json_encode('error');
}




?>
