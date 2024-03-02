<?php
$fields = $args;
?>

<div class="about-image">
	<?php
	if ( ! empty( $fields['image'] ) ) {
		echo wp_get_attachment_image( $fields['image'], 'full' );
	}
	?>
	<?php if ( ! empty( $fields['description'] ) ): ?>
		<p>
			<?php echo $fields['description']; ?>
		</p>
	<?php endif; ?>
</div>
