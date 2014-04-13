<?
/*
Plugin Name: Custom Language Translate
Plugin URI: www.miguelbarrenechea.com
Description: Custom Language Translate pra la pagina de la boda
Version: 1.0
Author: Dpto. DISEÑO.
Author URI: http://www.miguelbarrenechea.com
*/

ini_set("display_errors", 1);
error_reporting(E_ERROR);
set_time_limit(0);



class Helper{
	//IDIOMA
	private static $elidioma;
	function __construct() {
		if(isset($_GET['lang'])) {
		    self::$elidioma = $_GET['lang'];
		    if(isset($_COOKIE['lang'])){
		    	unset($_COOKIE['lang']);
			    setcookie('lang',self::$elidioma);
		    }else{
		    	setcookie('lang',self::$elidioma);
		    }
		} else if(isset($_COOKIE['lang'])) {
		    self::$elidioma = $_COOKIE['lang'];
		} else {
		    self::$elidioma = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		    if(!isset($_COOKIE['lang'])){
			    setcookie('lang',self::$elidioma);
		    }
		}
	}

	public function get_lang(){
		return self::$elidioma;
	}
	public function get_lang_js(){
        include("helper-lang.php");
        return json_encode($lang_js);
	}
	public function if_cookie(){
		return isset($_COOKIE['lang']);
	}

	public function tr($slug=null){
        include("helper-lang.php");
		switch (self::$elidioma){
		    case "fr":
		    	self::$elidioma = "fr";
		        break;
		    case "es":
		    	self::$elidioma = "es";
		        break;        
		    default:
		    	self::$elidioma = "es";
		        break;
		}
        return $lang[self::$elidioma][$slug];
	}


	// ASISTENTES
	public function get_asistentes(){
		global $wpdb;		
		$asistentes = $wpdb->get_results("SELECT * FROM wp_confirma","ARRAY_A");
		return $asistentes;
	}

	// TESTIGOS
	public function get_testigos($limit){
		$catIdiomas = array(
			'es' => 9,
			'fr' => 10, 
		);
		$catid = $catIdiomas[self::$elidioma];
		global $wpdb;
		$result = $wpdb->get_results("SELECT *
			FROM wp_posts 
			WHERE post_type = 'post' AND post_status = 'publish'
			AND (SELECT object_id FROM wp_term_relationships WHERE term_taxonomy_id = $catid AND object_id = ID) 
			ORDER BY post_title
			LIMIT ".$limit, 
			"ARRAY_A");
			return $result;
	}

	public function get_testigos_id($limit){
		$catIdiomas = array(
			'es' => 9,
			'fr' => 10, 
		);
		$catid = $catIdiomas[self::$elidioma];
		global $wpdb;
		$result = $wpdb->get_results("SELECT ID, post_name
			FROM wp_posts 
			WHERE post_type = 'post' AND post_status = 'publish'
			AND (SELECT object_id FROM wp_term_relationships WHERE term_taxonomy_id = $catid AND object_id = ID) 
			ORDER BY post_title
			LIMIT ".$limit, 
			"ARRAY_A");
		$result_custom = array();
		foreach ($result as $key => $value) {
			$name = str_replace('-2', '', $value['post_name']);
			$result_custom[$name] = $value['ID'];
		}
		return json_encode($result_custom);
	}


	// SUGERENCIAS
	public function get_brunch(){
		global $wpdb;
		$result = $wpdb->get_results("SELECT *
			FROM sugerencias_brunch_".self::$elidioma, 
			"ARRAY_A");
			return json_encode($result);	
	}
	public function get_cenar(){
		global $wpdb;
		$result = $wpdb->get_results("SELECT *
			FROM sugerencias_cenar_".self::$elidioma, 
			"ARRAY_A");
			return json_encode($result);	
	}
	public function get_comer(){
		global $wpdb;
		$result = $wpdb->get_results("SELECT *
			FROM sugerencias_comer_".self::$elidioma, 
			"ARRAY_A");
			return json_encode($result);	
	}
	public function get_copa(){
		global $wpdb;
		$result = $wpdb->get_results("SELECT *
			FROM sugerencias_copa_".self::$elidioma, 
			"ARRAY_A");
			return json_encode($result);	
	}
	public function get_fiesta(){
		global $wpdb;
		$result = $wpdb->get_results("SELECT *
			FROM sugerencias_fiesta_".self::$elidioma, 
			"ARRAY_A");
			return json_encode($result);	
	}
	public function get_visitas(){
		global $wpdb;
		$result = $wpdb->get_results("SELECT *
			FROM sugerencias_visitas_".self::$elidioma, 
			"ARRAY_A");
			return json_encode($result);	
	}

	// Desarrollo o producción
	public function isDev(){
		echo ($_SERVER["HTTP_HOST"] == 'localhost') ? '/boda' : '';
	}
}
$helper = new Helper();





?>
