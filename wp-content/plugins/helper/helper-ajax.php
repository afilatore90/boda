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
					'post_boda' => ($value["post-boda"] == 'true') ? 1 : 0,
					'email' => $arr['email'],
					'tel' => $arr['tel']
				), 
				array( 
					'%s', 
					'%d', 
					'%d',
					'%s',
					'%s' 
				) 
			);
		}
		return $arr["asistentes"];
	}
	// Get one testigo
	public function get_testigos($id){
		global $wpdb;
		$result = $wpdb->get_results("SELECT ID, post_title, post_content
			FROM wp_posts 
			WHERE post_type = 'post' AND post_status = 'publish' AND ID = $id
			", 
			"ARRAY_A");

		$result = $result[0];
		//Img
		$post_image_id = get_post_thumbnail_id($result['ID']); 
		if ($post_image_id) {
			if(resize::is_tablet()){
				$thumbnail = wp_get_attachment_image_src( $post_image_id, 'large', false);
			} elseif (resize::is_mobile()) {
				$thumbnail = wp_get_attachment_image_src( $post_image_id, 'medium', false);
			}
			else{
				$thumbnail = wp_get_attachment_image_src( $post_image_id, 'full', false);					
			}
			if ($thumbnail) (string)$thumbnail = $thumbnail[0];
		}	
		$result['img'] = $thumbnail;
		//Content
		$content = $result['post_content'];
		$content = apply_filters('the_content', $content);
		$content = str_replace(PHP_EOL, '', $content);
		$result['post_content'] = $content;
		
		return $result;		
		
	}
}

$helperAjax = new HelperAjax();

// Save Asistentes
if (isset($_POST["key"]) && $_POST["key"] == 'pedroysara') {
	$result = HelperAjax::get_data($_POST);
	echo json_encode($result);
}


// Save Asistentes
if (isset($_POST["testigo"]) && $_POST["testigo"] == 'testigo') {
	$result = HelperAjax::get_testigos($_POST['id']);
	echo json_encode($result);
}






?>
