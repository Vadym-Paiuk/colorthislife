<?php
$photo = $args;

if ( empty( $photo['image'] ) ) {
	return;
}
?>

<div class="photo container-xs">
	<?php echo wp_get_attachment_image( $photo['image'], 'full' ); ?>
	<div class="photo-info">
		<?php if ( ! empty( $photo['description'] ) ): ?>
			<div class="photo-description">
				<?php echo $photo['description']; ?>
			</div>
		<?php endif; ?>
		<?php if ( ! empty( $photo['source'] ) ): ?>
			<span class="photo-source">
			<?php echo $photo['source']; ?>
		</span>
		<?php endif; ?>
	</div>
</div>
