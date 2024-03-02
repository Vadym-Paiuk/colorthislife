<section class="hero">
	<div class="container hero-content">
		<div class="hero-start">
			<?php
			if ( function_exists( 'yoast_breadcrumb' ) ) {
				yoast_breadcrumb( '<div class="breadcrumbs">', '</div>' );
			}
			?>
			<?php if ( ! empty( $args['title'] ) ): ?>
				<h1 class="hero-title">
					<?php echo $args['title']; ?>
				</h1>
			<?php endif; ?>
		</div>
		<div class="hero-end">
			<div class="hero-image-container">
				<?php if ( ! empty( $args['image'] ) ): ?>
					<div class="hero-image">
						<?php echo wp_get_attachment_image( $args['image'], 'full' ); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
