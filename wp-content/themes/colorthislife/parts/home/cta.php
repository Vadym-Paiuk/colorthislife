<?php
$cta = $args;

if ( empty( $cta ) ) {
	return;
}
?>

<section class="cta">
	<div class="container cta-content">
		<div class="cta-info">
			<?php if ( ! empty( $cta['title'] ) ): ?>
				<h2 class="cta-title">
					<?php echo $cta['title']; ?>
				</h2>
			<?php endif; ?>
			<?php if ( ! empty( $cta['description'] ) ): ?>
				<p class="cta-description">
					<?php echo $cta['description']; ?>
				</p>
			<?php endif; ?>
			<?php if ( ! empty( $cta['link'] ) ): ?>
				<a href="<?php echo $cta['link']['url']; ?>"
				   target="<?php echo $cta['link']['target']; ?>"
				   class="cta-link">
					<?php echo $cta['link']['title']; ?>
				</a>
			<?php endif; ?>
		</div>
		<div class="cta-end">
			<?php if ( ! empty( $cta['image'] ) ): ?>
				<div class="cta-image">
					<?php echo wp_get_attachment_image( $cta['image'], 'full' ) ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>