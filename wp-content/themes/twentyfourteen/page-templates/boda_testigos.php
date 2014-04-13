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
<div id="modal-lightbox">
	<button id="btn-close-lightbox" class="icon-remove"></button>
	<div class="modal-content">
		<div class="row">
			<div class="img-box">
				<img id="img-lightbox" src="">
			</div>
			<div class="text-box">
				<h2 id="title-lightbox"></h2>
				<div id="content-lightbox"></div>
			</div>			
		</div>
	</div>
</div>
<section id="testigos-section" class="anima-section-relative">
	<div class="row-container">
		<ul class="row">			
			<?
				$aux = 0;
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
					$content = $v['post_content'];
					$content = apply_filters('the_content', $content);
					$content = str_replace(PHP_EOL, '', $content);
				?>	
				<li>
					<article class="testigo-item" id="testigo-<?= $v['ID']?>" data-title="<?= $v['post_title']?>" data-content='<?= $content?>' data-img="<?= $thumbnail?>">
						<img src="<?= $thumbnail?>">
					</article>				
				</li>
				<?
				$aux++;
				}
			?>
		</ul>			
	</div>
</section>

	
<? get_footer();?>
