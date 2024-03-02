<?php
$hero = $args;

if ( empty( $hero ) ) {
	return;
}
?>

<section class="hero">
	<div class="container hero-content">
		<?php if ( ! empty( $hero['title'] ) ): ?>
			<h1 class="hero-title">
				<?php echo $hero['title']; ?>
			</h1>
		<?php endif; ?>
		<?php if ( ! empty( $hero['description'] ) ): ?>
			<p class="hero-description">
				<?php echo $hero['description']; ?>
			</p>
		<?php endif; ?>
	</div>
</section>
