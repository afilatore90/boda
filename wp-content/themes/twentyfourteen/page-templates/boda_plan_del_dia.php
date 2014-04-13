<?php
/**
 * Template Name: boda_plan_del_dia
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 
?>


<section id="plan-section" class="anima-section-relative">
	<div class="row-container">
		<div class="row">
			<article>
				<h2>Plan del día</h2>
				<h3>Tenemos el placer de invitaros a celebrar con nosotros nuestra boda el día 6 de Septiembre del 2014 en Paris.</h3>
				<ul>
					<li>
						<h4>14:00</h4>
						<p>La ceremonia se oficiará en la Iglesia de Saint-Germain des Prés, ubicada en el número 3 de la Place Saint-Germain des Pres, 75006 Paris. (Os rogamos seáis muy puntuales!)</p>
					</li>
					<li>
						<h4>16:30</h4>
						<p>Llegarán los autobuses que os trasladarán de la Iglesia al Pavillon Dauphine, lugar donde se celebrará el banquete. Confirmaremos donde pararán los autobuses, pero será muy cerca de la Iglesia.</p>
					</li>
					<li>
						<h4>17:30</h4>
						<p>Llegada al Pavillon Dauphine ubicado en la Place de Maréchal de Lattre de Tassigny, 75116 Paris…. A divertirse!</p>
					</li>
				</ul>
				<h3>Os agradecemos que confirméis vuestra asistencia antes del 31 de Mayo en el siguiente enlace.</h3>
				<a class="boton amarillo" href="<?= Helper::isDev()?>/confirmar-asistencia">Confirma tu asistencia</a>
			</article>
			<figure>
				<img src="<? bloginfo('template_url')?>/img/plan/iglesia2.jpg">
			</figure>

		</div>
	</div>
</section>

<? get_footer();?>
