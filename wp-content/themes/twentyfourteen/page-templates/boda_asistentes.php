<?php
/**
 * Template Name: boda_asistentes
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 
?>

<section id="confirmar-section" class="anima-section-relative">
	<div class="row-container">
		<table id="asistentes" class="table">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Pre-boda</th>
					<th>Post-boda</th>
					<th>Autobús</th>
					<th>Email</th>
					<th>Teléfono</th>
					<th>Canción</th>
				</tr>
			</thead>
			<tbody>
				<?
					$asistentes = Helper::get_asistentes();
					foreach ($asistentes as $key => $value) {?>
						<tr>
							<td><?= $value["name"]?></td>	
							<td><?= $value["pre_boda"]?></td>	
							<td><?= $value["post_boda"]?></td>	
							<td><?= $value["autobus"]?></td>	
							<td><?= $value["email"]?></td>	
							<td><?= $value["tel"]?></td>	
							<td><?= $value["cancion"]?></td>	
						</tr>	
					<?}	
				?>			
			</tbody>
		</table>
	</div>
</section>

	
<? get_footer();?>
