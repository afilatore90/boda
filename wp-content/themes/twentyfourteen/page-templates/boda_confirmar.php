<?php
/**
 * Template Name: boda_confirmar
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 
// print_r(Helper::get_lang());
?>
<script type="text/javascript">
	var lang_js = <?= Helper::get_lang_js()?>;
</script>
<section id="confirmar-section" class="anima-section-relative">
	<div class="row-container">
		<form method="post" id="confirmar-form" action="/confirmar">
			<fieldset>
				<h3 class="center"><?= Helper::tr("confirm-gracias")?></h3>
			</fieldset>
			<fieldset>
				<h3><?= Helper::tr("confirm-elige-asistentes")?></h3>
				<label class="s-input">
					<span><?= Helper::tr("confirm-num-asistentes")?></span>
					<select id="asistentes-select">
					</select>
				</label>				
				<ul id="asistentes-ul"></ul>
			</fieldset>

			<fieldset>
				<h3><?= Helper::tr("confirm-datos")?></h3>
			    <label class="n-input max">
			        <span><?= Helper::tr("confirm-email")?> *</span>
			        <input id="email-confirmar" class="required email" type="email" name="email-confirmar" placeholder="example@gmail.com">
			    </label>
			    <label class="n-input max">
			        <span><?= Helper::tr("confirm-tel")?> *</span>
			        <input id="phone-confirmar" type="tel" name="phone-confirmar" placeholder="633333366">
			    </label>			    
			    <label class="n-input max">
			        <span><?= Helper::tr("confirm-cancion")?></span>
			        <input id="cancion" type="text" name="cancion" value="">
			    </label>
			    <label class="n-input max">
			        <span><?= Helper::tr("confirm-codigo")?> *</span>
			        <input id="key" type="text" name="key" value="pedroysara">
			    </label>
			</fieldset>
			<fieldset>
			    <button id="form-submit" type="submit" class="boton blanco cienxcien"><?= Helper::tr("confirm-confirmar")?></button>								
			</fieldset>
		</form>                             
	</div>
</section>

	
<? get_footer();?>
