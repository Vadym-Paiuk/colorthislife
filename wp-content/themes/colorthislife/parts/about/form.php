<?php
$fields = $args;
?>

<section class="form">
	<div class="container">
		<?php if ( ! empty( $fields['title'] ) ): ?>
			<h5 class="form-title">
				<?php echo $fields['title']; ?>
			</h5>
		<?php endif; ?>
		<div class="form-content">
			<div class="form-content-start">
				<?php if ( ! empty( $fields['image'] ) ): ?>
					<div class="form-content-start-image">
						<?php echo wp_get_attachment_image( $fields['image'], 'full' ); ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="form-content-end">
				<?php if ( ! empty( $fields['form_shortcode'] ) ): ?>
					<?php echo do_shortcode( $fields['form_shortcode'] ); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
