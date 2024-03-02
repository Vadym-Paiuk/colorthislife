<?php
$footnote = $args;

if ( empty( $footnote['description'] ) ) {
	return;
}
?>

<div class="footnote container-sm">
	<?php if ( ! empty( $footnote['title'] ) ): ?>
		<h3 class="footnote-title">
			<?php echo $footnote['title']; ?>
		</h3>
	<?php endif; ?>
	<?php if ( ! empty( $footnote['description'] ) ): ?>
		<div class="footnote-description">
			<?php echo $footnote['description']; ?>
		</div>
	<?php endif; ?>
</div>
