<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php
$pagename = get_page(get_the_ID(), "ARRAY_A");
$pagename = $pagename["post_name"];

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1">
	<meta name="author" content="Miguel Barrenechea Sánchez"/>

	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Muli:300,400|Amatic+SC:700' rel='stylesheet' type='text/css'>
	<script src="<?php bloginfo('template_url'); ?>/js/libs/conditionizr.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
	<script type="text/javascript">
	conditionizr({
			debug      : false,
			scriptSrc  : 'js/conditionizr/',
			styleSrc   : 'css/conditionizr/',
			ieLessThan : { active: false, version: '9', scripts: false, styles: false, classes: true, customScript: false},
			chrome     : { scripts: false, styles: false, classes: true, customScript: false },
			safari     : { scripts: false, styles: false, classes: true, customScript: false },
			opera      : { scripts: false, styles: false, classes: true, customScript: false },
			firefox    : { scripts: false, styles: false, classes: true, customScript: false },
			ie10       : { scripts: false, styles: false, classes: true, customScript: false },
			ie9        : { scripts: false, styles: false, classes: true, customScript: false },
			ie8        : { scripts: false, styles: false, classes: true, customScript: false },
			ie7        : { scripts: false, styles: false, classes: true, customScript: false },
			ie6        : { scripts: false, styles: false, classes: true, customScript: false },
			retina     : { scripts: false, styles: false, classes: true, customScript: false },
			mac        : true,
			win        : true,
			x11        : true,
			linux      : true
		});

	</script>
	<?php wp_head(); ?>
	<script type="text/javascript">
		var is_single = <?= (is_single()) ? 1 : 0 ?>;
		var lang = '<?= Helper::get_lang();?>';
	</script>
</head>
<body id="<?php echo $pagename; ?>" <?php body_class(); ?>>
	<section id="idiomas-section" style="display:<?= (Helper::if_cookie()) ? 'none' : 'block';   ?>">
		<div class="bg-hero"></div>
		<div class="content-hero">
			<div class="matrimonio">
				<div class="ella">
					<img src="<?php bloginfo('template_url'); ?>/img/idioma/sara.png">
				</div>
				<div class="el">
					<img src="<?php bloginfo('template_url'); ?>/img/idioma/pedro.png">					
				</div>
			</div>
			<div class="logo"></div>
			<div class="botonera">
				<a href="/boda/?lang=es" id="lang-es" class="btn-idioma es" data-lang="es"><button><?= Helper::tr("castellano") ?></button></a>
				<a href="/boda/?lang=fr" id="lang-fr" class="btn-idioma fr" data-lang="fr"><button><?= Helper::tr("frances") ?></button></a>				
			</div>
		</div>
	</section>
	<header id="main-header">
		<button id="btn-menu"></button>
		<nav>
			<h1><a href="/boda"><?= Helper::tr("logo") ?></a></h1>
			<ul class="left">
				<li><a href="/boda/confirmar-asistencia"><span></span><?= Helper::tr("confirma-asistencia") ?></a></li>
				<li><a href="/boda"><span></span><?= Helper::tr("plan-del-dia") ?></a></li>
				<li><a href="/boda"><span></span><?= Helper::tr("testigos") ?></a></li>
			</ul>
			<ul class="right">
				<li><a href="/boda"><span></span><?= Helper::tr("regalo-de-boda") ?></a></li>
				<li><a href="/boda"><span></span><?= Helper::tr("sugerencias-en-paris") ?></a></li>
				<li><a href="/boda"><span></span><?= Helper::tr("galeria-de-fotos") ?></a></li>				
			</ul>
		</nav>
	</header>
