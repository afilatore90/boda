<?php
/**
 * Template Name: boda_testigos
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 
$testigos = Helper::get_testigos(20);
?>

<section id="confirmar-section" class="anima-section-relative">
	<div class="row-container">
		<?
			foreach ( $testigos as $k => $v) {
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
			<article id="testigo-<?= $v['ID']?>">
				<h2><?= $v['post_title']?></h2>
				<div class="content">
					<?
						$content = $v['post_content'];
						$content = apply_filters('the_content', $content);
						$content = str_replace(PHP_EOL, '', $content);
						echo $content;
					?>
				</div>
				<img src="<?= $thumbnail?>">
			</article>
			<?}
		?>			
	</div>
</section>

	
<? get_footer();?>
