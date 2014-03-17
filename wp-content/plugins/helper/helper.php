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
	private static $elidioma = 'es';
	function __construct() {
		if(isset($_GET['lang'])) {
		    self::$elidioma = $_GET['lang'];
		    setcookie('lang',self::$elidioma);
		} else if(isset($_COOKIE['lang'])) {
		    self::$elidioma = $_COOKIE['lang'];
		} else {
		    self::$elidioma = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		    setcookie('lang',self::$elidioma);
		}
	}

	public function get_lang(){
		return self::$elidioma;
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
		global $wpdb;
		$result = $wpdb->get_results("SELECT *
			FROM wp_posts 
			WHERE post_type = 'post' AND post_status = 'publish'
			AND (SELECT object_id FROM wp_term_relationships WHERE term_taxonomy_id = 2 AND object_id = ID) 
			ORDER BY post_title
			LIMIT ".$limit, 
			"ARRAY_A");
			return $result;
	}
}
$helper = new Helper();





?>
