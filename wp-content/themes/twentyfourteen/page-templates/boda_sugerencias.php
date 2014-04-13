<?php
/**
 * Template Name: boda_sugerencias
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 
?>

<script type="text/javascript">
	var json_brunch = <?= Helper::get_brunch()?>;
	var json_cenar = <?= Helper::get_cenar()?>;
	var json_comer = <?= Helper::get_comer()?>;
	var json_copa = <?= Helper::get_copa()?>;
	var json_fiesta = <?= Helper::get_fiesta()?>;
	var json_visitas = <?= Helper::get_visitas()?>;
</script>

<section id="sugerencias-section" class="anima-section-relative">
	<div class="row-container">
		<div class="row">	
			<aside>
				<h3>Donde...</h3>
				<ul id="sugerencias-ul">
					<li data-id="brunch" class="activo"><span class="icon-brunch"></span>Tomar un brunch</li>
					<li data-id="copa"><span class="icon-copa"></span>Tomar una copa</li>
					<li data-id="comer"><span class="icon-comer"></span>Ir a comer</li>
					<li data-id="cenar"><span class="icon-cenar"></span>Ir a cenar</li>
					<li data-id="fiesta"><span class="icon-fiesta"></span>Salir de fiesta</li>
					<li data-id="visitas"><span class="icon-visitar"></span>Visitar sitios curiosos</li>
				</ul>
			</aside>
			<div class="content">
				<table class="table">
					<thead>
						<tr>
							<th class="min-width180">Nombre</th>
							<th class="min-width180">Tipo</th>
							<th class="min-width180">Barrio</th>
							<th>Precio</th>
							<th>Comentario</th>
							<th>Dirección</th>
						</tr>
					</thead>
					<tbody id="tbody"></tbody>
				</table>

			</div>
		</div>
	</div>
</section>

<? get_footer();?>
