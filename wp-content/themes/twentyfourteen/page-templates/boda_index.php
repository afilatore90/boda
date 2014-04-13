<?php
/**
 * Template Name: boda_index
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); 
$testigos = Helper::get_testigos_id(20);
?>

<script type="text/javascript">
	var testigos_json = <?= $testigos?>;
</script>
<div id="blanco" style="position: fixed; top: 0; left: 0; height: 100%; width: 100%; background: #FFF; z-index: 15;"></div>

<div id="modal-testigo">
	<button id="btn-close-testigo" class="icon-remove"></button>
	<div class="modal-content">
		<div class="img-box"></div>
		<div class="text-box"></div>
	</div>
</div>

<nav id="aside-nav">
	<ul id="aside-ul">
		<li><p>París</p><span></span></li>
		<li><p>París</p><span></span></li>
		<li><p>París</p><span></span></li>
		<li><p>París</p><span></span></li>
		<li><p>París</p><span></span></li>
		<li><p>París</p><span></span></li>
		<li><p>París</p><span></span></li>
	</ul>
</nav>
	<!-- SECTION 0 -->
	<section id="anima-section0" class="anima-section" data-name="Intro">
		<article>
			<h2><span class="left">{</span>nosvemosenparis<span class="right">}</span></h2>
			<h3>Sarah&Pedro</h3>
			<h4>06.09.2014</h4>
			<h5><?= Helper::tr('home-intro-title')?></h5>
			<?= Helper::tr('home-intro-parrafo')?>
		</article>
		<div id="btn-scroll" class="btn-scroll-box" data-scroll_to="1"
			data-200="transform: scale(1) translate(-50%,0); opacity:1; transform-origin:0% 0" data-top="transform: scale(0) translate(-50%,0); opacity:0">
			<div class="text" 
				data-100="transform: scale(1) translate(-50%,0%); opacity:1; transform-origin:0% 100%" data-top="transform: scale(0) translate(-50%,150%); opacity:0">
			</div>
			<div class="hole"></div>
			<div class="arrow" 
				data-0="top:-125%;transform: scale(1);" data-100="top:-150%;transform: scale(0.7);" data-200-top="top:0%;transform: scale(0.5)">
			</div>
		</div>
	</section>






	<!-- SECTION 1 -->
	<section id="anima-section1" class="anima-section" data-name="<?=Helper::tr('home-title-short-escena1')?>">
		<div class="farola">
			<img src="<? bloginfo('template_url')?>/img/home/paris/farola.png">
		</div>
		<div class="arbol">
			<img src="<? bloginfo('template_url')?>/img/home/paris/arbol.png">
		</div>
		<div class="escenario escenario1 left" data-bottom-top="transform:translate(-100px,-50%); transform-origin:center;" data-top="transform:translate(0px,-50%);">
			<img src="<? bloginfo('template_url')?>/img/home/paris/escenario1.png">
		</div>
		<ul class="hojas-box">
			<li class="hoja1"
				data-bottom-top="transform:translate(-50px,0); transform-origin:center;" data-100-top="transform:translate(50px,0);" data-top-bottom ="transform:translate(100px,0);">
				<img src="<? bloginfo('template_url')?>/img/home/paris/hojas/hoja1.png">			
			</li>
			<li class="hoja2"
				data-bottom-top="transform:translate(-100px,0); transform-origin:center;" data-100-top="transform:translate(100px,0);" data-top-bottom ="transform:translate(200px,0);">			
				<img src="<? bloginfo('template_url')?>/img/home/paris/hojas/hoja2.png">
			</li>
			<li class="hoja3"
				data-bottom-top="transform:translate(-150px,0); transform-origin:center;" data-100-top="transform:translate(150px,0);" data-top-bottom ="transform:translate(300px,0);">			
				<img src="<? bloginfo('template_url')?>/img/home/paris/hojas/hoja3.png">
			</li>
		</ul>
		<div class="text right">
			<article>
				<?= Helper::tr('home-title-escena1')?>
				<?= Helper::tr('home-text-escena1')?>
			</article>
		</div>
	</section>







	<!-- SECTION 2 -->
	<section id="anima-section2" class="anima-section" data-name="<?=Helper::tr('home-title-short-escena2')?>">
		<div class="avion" data-bottom-top="transform:translate(0px,0px); transform-origin:center;" data--300-top="transform:translate(-1200px,200px);">
			<img src="<? bloginfo('template_url')?>/img/home/colegio/avion_papel.png">
		</div>
		<div class="escenario escenario2 right" data-bottom-top="transform:translate(100px,-50%); transform-origin:center;" data-top="transform:translate(0px,-50%);">
			<img src="<? bloginfo('template_url')?>/img/home/colegio/escenario2.png">		
		</div>
		<div class="text left">
			<article>
				<?= Helper::tr('home-title-escena2')?>
				<?= Helper::tr('home-text-escena2')?>
			</article>
		</div>
	</section>






	<!-- SECTION 3 -->
	<section id="anima-section3" class="anima-section" data-name="<?=Helper::tr('home-title-short-escena3')?>">
		<div class="escenario escenario3 left" data-bottom-top="transform:translate(-100px,-50%); transform-origin:center;" data-top="transform:translate(0px,-50%);">
			<img src="<? bloginfo('template_url')?>/img/home/marruecos/escenario3.png">		
		</div>
		<div class="text right">
			<article>
				<?= Helper::tr('home-title-escena3')?>
				<?= Helper::tr('home-text-escena3')?>
			</article>
		</div>
		<div class="sol" data-bottom-top="left:20%;top:20%;" data-top="left:50%;top:0%;">
			
			<img src="<? bloginfo('template_url')?>/img/home/marruecos/sol.png">		
		</div>
		<ul class="ciudad-box">
			<li class="ciudad1">
				<!-- data-300-bottom="transform:translate(0px,70px); transform-origin:center;" data-top="transform:translate(0,0);"> -->
				<img src="<? bloginfo('template_url')?>/img/home/marruecos/ciudad1.png">			
			</li>
			<li class="ciudad2">
				<!-- data-300-bottom="transform:translate(0px,35px); transform-origin:center;" data-top="transform:translate(0,0);">			 -->
				<img src="<? bloginfo('template_url')?>/img/home/marruecos/ciudad2.png">
			</li>
		</ul>
	</section>	











	<!-- SECTION 4 -->
	<section id="anima-section4" class="anima-section" data-name="<?=Helper::tr('home-title-short-escena4')?>">
		<div class="bota"
			data-300-bottom="transform:rotate(30deg); transform-origin:top left;" data-300-top="transform:rotate(0deg);">
			<img src="<? bloginfo('template_url')?>/img/home/futbol/bota.png">
		</div>
		<div class="balon"
			data-bottom="transform:translate(0px,0px);" data--300-top="transform:translate(500px,-500px);">
			<img src="<? bloginfo('template_url')?>/img/home/futbol/balon.png">
		</div>
		<div class="escenario escenario2 right" data-bottom-top="transform:translate(100px,-50%); transform-origin:center;" data-top="transform:translate(0px,-50%);">
			<img src="<? bloginfo('template_url')?>/img/home/futbol/escenario4.png">		
		</div>
		<div class="text left">
			<article>
				<?= Helper::tr('home-title-escena4')?>
				<?= Helper::tr('home-text-escena4')?>
			</article>
		</div>
	</section>












	<!-- SECTION 5 -->
	<section id="anima-section5" class="anima-section" data-name="<?=Helper::tr('home-title-short-escena5')?>">
		<div class="escenario escenario5 left" data-bottom-top="transform:translate(-100px,-50%); transform-origin:center;" data-top="transform:translate(0px,-50%);">
			<img src="<? bloginfo('template_url')?>/img/home/liceo/escenario5.png">		
		</div>
		<ul class="examenes-box">
			<li class="examenes1"
				data-bottom-top="transform:translate(-50%,0px); transform-origin:center;" data-top-bottom="transform:translate(50%,0px);">
				<img src="<? bloginfo('template_url')?>/img/home/liceo/examenesA.png">			
			</li>
			<li class="examenes2"
				data-bottom-top="transform:translate(-50%,0px); transform-origin:center;" data-top-bottom="transform:translate(50%,0px);">
				<img src="<? bloginfo('template_url')?>/img/home/liceo/examenesB.png">
			</li>
		</ul>		
		<div class="text right">
			<article>
				<?= Helper::tr('home-title-escena5')?>
				<?= Helper::tr('home-text-escena5')?>
			</article>
		</div>
	</section>	





	<!-- SECTION 6 -->
	<section id="anima-section6" class="anima-section" data-name="<?=Helper::tr('home-title-short-escena6')?>">
		<div class="cerveza-box">
			<div class="vaso">
				<img src="<? bloginfo('template_url')?>/img/home/cerveza/vaso.png">
			</div>
			<div class="cerveza" data-bottom-top="transform:translate(0px,0%); transform-origin:top;" data-top-bottom="transform:translate(0px,80%);">
				<img src="<? bloginfo('template_url')?>/img/home/cerveza/cerveza.jpg">
			</div>
			
		</div>
		<div class="escenario escenario6 right" data-bottom-top="transform:translate(100px,-50%); transform-origin:center;" data-top="transform:translate(0px,-50%);">
			<img src="<? bloginfo('template_url')?>/img/home/cerveza/escenario6.png">		
		</div>
		<div class="text left">
			<article>
				<?= Helper::tr('home-title-escena6')?>
				<?= Helper::tr('home-text-escena6')?>
			</article>
		</div>
	</section>








	<!-- SECTION 7 -->
	<section id="anima-section7" class="anima-section" data-name="<?=Helper::tr('home-title-short-escena7')?>">
		<div class="escenario escenario7 left" data-bottom-top="transform:translate(-100px,-50%); transform-origin:center;" data-top="transform:translate(0px,-50%);">
			<img src="<? bloginfo('template_url')?>/img/home/mexico/escenario7.png">		
		</div>
		<div class="cactus">
			<img src="<? bloginfo('template_url')?>/img/home/mexico/cactus.png">
		</div>
		<div class="pelusa"
			data-bottom-top="transform:translate(0px,0px) rotate(0deg); transform-origin:center;" data-top-bottom="transform:translate(1200px,0px) rotate(360deg);">
			<img src="<? bloginfo('template_url')?>/img/home/mexico/pelusa.png">
		</div>
		<div class="text right">
			<article>
				<?= Helper::tr('home-title-escena7')?>
				<?= Helper::tr('home-text-escena7')?>
			</article>
		</div>
	</section>	


	<!-- SECTION 8 -->
	<section id="anima-section8" class="anima-section" data-name="<?=Helper::tr('home-title-short-escena8')?>">
		<div class="escenario escenario8 right" data-bottom-top="transform:translate(100px,-50%); transform-origin:center;" data-top="transform:translate(0px,-50%);">
			<img src="<? bloginfo('template_url')?>/img/home/cam/escenario8.png">		
		</div>
		<div class="paella">
			<img src="<? bloginfo('template_url')?>/img/home/cam/paella.png">
		</div>
		<div class="gamba">
			<img src="<? bloginfo('template_url')?>/img/home/cam/gamba.png">
		</div>
		<div class="text left">
			<article>
				<?= Helper::tr('home-title-escena8')?>
				<?= Helper::tr('home-text-escena8')?>
			</article>
		</div>
	</section>


	<!-- SECTION 9 -->
	<section id="anima-section9" class="anima-section" data-name="<?=Helper::tr('home-title-short-escena9')?>">
		<div class="escenario escenario9 left" data-bottom-top="transform:translate(-100px,-50%); transform-origin:center;" data-top="transform:translate(0px,-50%);">
			<img src="<? bloginfo('template_url')?>/img/home/sorbona/escenario9.png">		
		</div>
		<ul class="sombreros-box">
			<li class="sombreros1"
				data-bottom-top="transform:translate(0px,-300px); transform-origin:center;" data-top-bottom="transform:translate(0px,300px);">
				<img src="<? bloginfo('template_url')?>/img/home/sorbona/sombreros1.png">			
			</li>
			<li class="sombreros2"
				data-bottom-top="transform:translate(0px,-200px); transform-origin:center;" data-top-bottom="transform:translate(0px,200px);">
				<img src="<? bloginfo('template_url')?>/img/home/sorbona/sombreros2.png">
			</li>
		</ul>		
		<div class="text right">
			<article>
				<?= Helper::tr('home-title-escena9')?>
				<?= Helper::tr('home-text-escena9')?>
			</article>
		</div>
	</section>	



	<!-- SECTION 10 -->
	<section id="anima-section10" class="anima-section" data-name="<?=Helper::tr('home-title-short-escena10')?>">
		<ul class="nubes-box">
			<li class="nubes1"
				data-bottom-top="transform:translate(150px,0px); transform-origin:center;" data-top-bottom="transform:translate(-150px,0px);">
				<img src="<? bloginfo('template_url')?>/img/home/avion/nubes1.png">			
			</li>
			<li class="nubes2"
				data-bottom-top="transform:translate(600px,0px); transform-origin:center;" data-top-bottom="transform:translate(-600px,0px);">
				<img src="<? bloginfo('template_url')?>/img/home/avion/nubes2.png">
			</li>
		</ul>		
		<div class="avion"
			data-bottom-top="transform:translate(600px,0px); transform-origin:center;" data-top-bottom="transform:translate(0px,0px);">
			<img src="<? bloginfo('template_url')?>/img/home/avion/avion.png">
		</div>
		
		<div class="escenario escenario10 right" data-bottom-top="transform:translate(100px,-50%); transform-origin:center;" data-top="transform:translate(0px,-50%);">
			<img src="<? bloginfo('template_url')?>/img/home/avion/escenario8.png">		
		</div>
		<div class="text left">
			<article>
				<?= Helper::tr('home-title-escena10')?>
				<?= Helper::tr('home-text-escena10')?>
			</article>
		</div>
	</section>





	<!-- SECTION 11 -->
	<section id="anima-section11" class="anima-section" data-name="<?=Helper::tr('home-title-short-escena11')?>">
		<div class="escenario escenario11 left" data-bottom-top="transform:translate(-100px,-50%); transform-origin:center;" data-top="transform:translate(0px,-50%);">
			<img src="<? bloginfo('template_url')?>/img/home/madrid/escenario11.png">
			<div class="bus" data-bottom-top="transform:translate(0px,0%); transform-origin:center;" data-top-bottom="transform:translate(200px,0%);">
				<img src="<? bloginfo('template_url')?>/img/home/madrid/bus.png">
			</div>		
		</div>
		<div class="text right">
			<article>
				<?= Helper::tr('home-title-escena11')?>
				<?= Helper::tr('home-text-escena11')?>
			</article>
		</div>
	</section>	



	<!-- SECTION 12 -->
	<section id="anima-section12" class="anima-section" data-name="<?=Helper::tr('home-title-short-escena12')?>">
		<div class="escenario escenario12 right" data-bottom-top="transform:translate(100px,-50%); transform-origin:center;" data-top="transform:translate(0px,-50%);">
			<img src="<? bloginfo('template_url')?>/img/home/caravana/escenario12.png">		
			<ul class="humo-box">
				<li class="humo1">
					<img src="<? bloginfo('template_url')?>/img/home/caravana/humo1.png">			
				</li>
				<li class="humo2">
					<img src="<? bloginfo('template_url')?>/img/home/caravana/humo2.png">
				</li>
				<li class="humo3">
					<img src="<? bloginfo('template_url')?>/img/home/caravana/humo3.png">
				</li>
				<li class="humo4">
					<img src="<? bloginfo('template_url')?>/img/home/caravana/humo4.png">
				</li>
			</ul>		
		</div>
		<div class="cartel"
			data-bottom-top="transform: translate(0px,0); transform-origin:center;" data-bottom="transform: translate(10px,0);" data-center-top="transform: translate(0px,0);" data-center-bottom="transform: translate(10px,0);" data-top="transform: translate(0px,0);">
			<img src="<? bloginfo('template_url')?>/img/home/caravana/cartel.png">	
		</div>
		<div class="text left">
			<article>
				<?= Helper::tr('home-title-escena12')?>
				<?= Helper::tr('home-text-escena12')?>
			</article>
		</div>		
	</section>


	<!-- SECTION 13 -->
	<section id="anima-section13" class="anima-section" data-name="<?=Helper::tr('home-title-short-escena13')?>">
		<!-- <div class="text left">
			<article>
				<h2>En el cole <span>santa maría del pilar</span></h2>
				<p>Qué recuerdos con tantas maletas por aquí, bolsas por allá y yo por el otro lado. Todavía me acuerdo de aquellos años de una casa a otra por todo París. ¡Que os cuenten Cecille, Mathilde y Raphi cómo nos peleábamos por conseguir cada una el mejor cuarto!</p>
				<p>¿Qué estaría haciendo Pedro por aquel entonces?</p>
			</article>
		</div> -->		
		<div class="escenario escenario13" data-bottom-top="transform:translate(-50%,-40%); transform-origin:center;" data-top-bottom="transform:translate(-50%,-60%);">
			<img src="<? bloginfo('template_url')?>/img/home/fiesta/escenario13.png">		
		</div>
		<div class="cartel">
			<img src="<? bloginfo('template_url')?>/img/home/fiesta/cartel.png">		
		</div>
	</section>

	<!-- SECTION 14 -->
	<section id="anima-section14" class="anima-section" data-name="Outro">
		
	</section>





	
<? get_footer();?>
