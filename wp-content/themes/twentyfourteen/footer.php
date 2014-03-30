<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

	<footer id="main-footer"></footer>
	<!-- MODAL -->
    <div id="modal-overlay"></div>
	<div id="modal">
		<div id="btn-close" class="icon-remove"></div>
		<div class="modal-content"></div>
	</div>	
	<?php wp_footer(); ?>
</body>
</html>
<script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
