<?php
$related_video = $args['related_video'];

if ( empty( $related_video ) ) {
	return;
}
?>

<section class="related-video">
	<div class="container related-video-container">
		<h3 class="related-video-title">
			<?php _e( 'תכנים נוספים שעשויים לעניין אותך', THEME_TEXT_DOMAIN ); ?>
		</h3>
		
		<div class="related-video-list">
			<?php
			foreach ( $related_video as $video ) {
				setup_postdata( $GLOBALS['post'] =& $video );
				get_template_part( 'parts/vod/post-video-preview' );
			}
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>
