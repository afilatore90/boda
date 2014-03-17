<?
/*
Plugin Name: Resize
Plugin URI: www.miguelbarrenechea.com
Description: Resize
Version: 1.0
Author: Dpto. DISEÑO.
Author URI: http://www.hollandperformnace.com
*/


// $detect = new Mobile_Detect;
include 'Mobile_Detect.php';
global $detect;
$detect = new Mobile_Detect;

/**
* Productos
*/
class Resize
{
	
	function __construct()
	{
		
	}
	public static function is_mobile(){
		global $detect;
		$return_value = ($detect->isMobile()) ? 1 : 0;
    	return $return_value;
	}
	public static function is_tablet(){
		global $detect;
		$return_value = ($detect->isTablet()) ? 1 : 0;
    	return $return_value;
	}
}
$resize = new Resize();


