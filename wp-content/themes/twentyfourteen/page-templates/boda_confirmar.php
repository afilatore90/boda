<?php
/**
 * Template Name: boda_confirmar
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 
// Helper::get_lang()
?>

<section id="confirmar-section" class="anima-section-relative">
	<div class="row-container">
		<form method="post" id="confirmar-form" action="/confirmar">
			<fieldset>
				<h3>1. Elige el número de asistentes</h3>
				<label class="s-input">
					<span>Número de asistentes</span>
					<select id="asistentes-select">
					</select>
				</label>				
				<ul id="asistentes-ul"></ul>
			</fieldset>

			<fieldset>
				<h3>2. Déjanos unos datos de contacto por si necesitamos preguntarte algo</h3>
			    <label class="n-input max">
			        <span>Email *</span>
			        <input id="email-confirmar" class="required email" type="email" name="email-confirmar" placeholder="example@gmail.com">
			    </label>
			    <label class="n-input max">
			        <span>Teléfono *</span>
			        <input id="phone-confirmar" type="tel" name="phone-confirmar" placeholder="633333366">
			    </label>			    
			    <label class="n-input max">
			        <span>Código (se encuentra en email que os hemos enviado) *</span>
			        <input id="key" type="text" name="key" value="pedroysara">
			    </label>
			</fieldset>
			<fieldset>
			    <button id="form-submit" type="submit" class="boton blanco cienxcien">CONFIRMAR</button>								
			</fieldset>
		</form>                             
	</div>
</section>

	
<? get_footer();?>
