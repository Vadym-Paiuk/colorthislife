<?php
$slider = $args['slider'];

if ( empty( $slider ) ) {
	return;
}
?>

<div class="video-content-slider container-sm">
	<div class="swiper video-slider">
		<div class="swiper-wrapper">
			<?php foreach ( $slider as $slide ): ?>
				<div class="swiper-slide">
					<?php echo wp_get_attachment_image( $slide['image'], 'full' ); ?>
					<div class="photo-info">
						<?php if ( ! empty( $slide['description'] ) ): ?>
							<div class="photo-description">
								<?php echo $slide['description']; ?>
							</div>
						<?php endif; ?>
						<?php if ( ! empty( $slide['source'] ) ): ?>
							<span class="photo-source">
							<?php echo $slide['source']; ?>
						</span>
						<?php endif; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="slider-navigations">
		<div class="slider-button slider-button-prev"></div>
		<div class="slider-button slider-button-next"></div>
	</div>
</div>
