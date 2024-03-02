<?php
$audio       = $args['audio'];
$description = $args['description'];

if ( empty( $audio ) ) {
	return;
}
?>

<div class="audio container-xs">
	<h3 class="audio-title">
		<?php _e( 'האזינו לגרסה מוקלטת של הכתבה', THEME_TEXT_DOMAIN ); ?>
	</h3>
	<div class="audio-content">
		<audio controls>
			<source src="<?php echo $audio['url']; ?>"
			        type="audio/mpeg">
			<?php _e( 'הדפדפן שלך אינו תומך ברכיב האודיו.', THEME_TEXT_DOMAIN ); ?>
		</audio>
		<?php if ( ! empty( $description ) ): ?>
			<p class="audio-description">
				<?php echo $description; ?>
			</p>
		<?php endif; ?>
		<a href=""
		   class="btn btn-empty">
			<?php _e( 'לכל הכתבות המוקלטות', THEME_TEXT_DOMAIN ); ?>
		</a>
	</div>
</div>
