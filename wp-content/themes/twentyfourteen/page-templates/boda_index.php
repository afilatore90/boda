<?php
/**
 * Template Name: boda_index
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 
?>
<script type="text/javascript">
	var lista_productos = [<?
		foreach ( Helper::get_testigos(5) as $k => $v) {
			$post_image_id = get_post_thumbnail_id($v['ID']); 
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
		?>	
			{
				"post_title" : "<?= $v['post_title']?>",
				"ID" : "<?= $v['ID']?>",
				"thumbnail" : "<?= $thumbnail?>",
				"post_content" : "<?= $v['post_content']?>"
			},		
		<?}
	?>];	
</script>

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
	<section id="anima-section0" class="anima-section">
		<article>
			<h2><span class="left">{</span>nosvemosenparis<span class="right">}</span></h2>
			<h3>Sarah&Pedro</h3>
			<h4>06.09.2014</h4>
			<h5>¡Hola y Bienvenidos a nuestra página web!</h5>
			<p>Queremos daros las gracias por estar aquí. Muchos de vosotros ya conoceréis todos los detalles de nuestra historia ya que vosotros formáis parte de ella., pero creemos que os gustará recordarlos. Sólo tenéis que ir bajando y os iremos contando paso a paso como sucedió todo... </p>
			<p>y por cierto, ya sabéis que nos hace muchísima ilusión quevengáis con nosotros a París a celebrarlo, así que no te olvides de confirmar asistencia y ¡a preparar las maletas! </p>
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
	<section id="anima-section1" class="anima-section">
		<div class="farola">
			<img src="<? bloginfo('template_url')?>/img/home/paris/farola.png">
		</div>
		<div class="arbol">
			<img src="<? bloginfo('template_url')?>/img/home/paris/arbol.png">
		</div>
		<div class="escenario escenario1 left" data-bottom-top="transform:translate(-100px,0); transform-origin:center;" data-top="transform:translate(0px,0);">
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
				<h2>De mudanzas <span>por París</span></h2>
				<p>Qué recuerdos con tantas maletas por aquí, bolsas por allá y yo por el otro lado. Todavía me acuerdo de aquellos años de una casa a otra por todo París. ¡Que os cuenten Cecille, Mathilde y Raphi cómo nos peleábamos por conseguir cada una el mejor cuarto!</p>
				<p>¿Qué estaría haciendo Pedro por aquel entonces?</p>
			</article>
		</div>
	</section>







	<!-- SECTION 2 -->
	<section id="anima-section2" class="anima-section">
		<div class="text left">
			<article>
				<h2>En el cole <span>santa maría del pilar</span></h2>
				<p>Qué recuerdos con tantas maletas por aquí, bolsas por allá y yo por el otro lado. Todavía me acuerdo de aquellos años de una casa a otra por todo París. ¡Que os cuenten Cecille, Mathilde y Raphi cómo nos peleábamos por conseguir cada una el mejor cuarto!</p>
				<p>¿Qué estaría haciendo Pedro por aquel entonces?</p>
			</article>
		</div>
		<div class="avion" data-bottom-top="transform:translate(0px,0px); transform-origin:center;" data--300-top="transform:translate(-1200px,200px);">
			<img src="<? bloginfo('template_url')?>/img/home/colegio/avion_papel.png">
		</div>
		<div class="escenario escenario2 right" data-bottom-top="transform:translate(100px,0); transform-origin:center;" data-top="transform:translate(0px,0);">
			<img src="<? bloginfo('template_url')?>/img/home/colegio/escenario2.png">		
		</div>
	</section>






	<!-- SECTION 3 -->
	<section id="anima-section3" class="anima-section">
		<div class="escenario escenario3 left" data-bottom-top="transform:translate(-100px,0); transform-origin:center;" data-top="transform:translate(0px,0);">
			<img src="<? bloginfo('template_url')?>/img/home/marruecos/escenario3.png">		
		</div>
		<div class="text right">
			<article>
				<h2>Marruecos<span>por París</span></h2>
				<p>Qué recuerdos con tantas maletas por aquí, bolsas por allá y yo por el otro lado. Todavía me acuerdo de aquellos años de una casa a otra por todo París. ¡Que os cuenten Cecille, Mathilde y Raphi cómo nos peleábamos por conseguir cada una el mejor cuarto!</p>
				<p>¿Qué estaría haciendo Pedro por aquel entonces?</p>
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
	<section id="anima-section4" class="anima-section">
		<div class="text left">
			<article>
				<h2>En el cole <span>santa maría del pilar</span></h2>
				<p>Qué recuerdos con tantas maletas por aquí, bolsas por allá y yo por el otro lado. Todavía me acuerdo de aquellos años de una casa a otra por todo París. ¡Que os cuenten Cecille, Mathilde y Raphi cómo nos peleábamos por conseguir cada una el mejor cuarto!</p>
				<p>¿Qué estaría haciendo Pedro por aquel entonces?</p>
			</article>
		</div>
		<div class="avion" data-bottom-top="transform:translate(0px,0px); transform-origin:center;" data--300-top="transform:translate(-1200px,200px);">
			<img src="<? bloginfo('template_url')?>/img/home/colegio/avion_papel.png">
		</div>
		<div class="escenario escenario2 right" data-bottom-top="transform:translate(100px,0); transform-origin:center;" data-top="transform:translate(0px,0);">
			<img src="<? bloginfo('template_url')?>/img/home/colegio/escenario2.png">		
		</div>
	</section>


	
<? get_footer();?>
