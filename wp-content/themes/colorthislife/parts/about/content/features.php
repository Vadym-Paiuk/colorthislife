<?php
$fields = $args;
?>

<div class="about-features">
	<?php if ( ! empty( $fields['title'] ) ): ?>
		<h3 class="about-features-title">
			<?php echo $fields['title']; ?>
		</h3>
	<?php endif; ?>
	<?php if ( ! empty( $fields['features'] ) ): ?>
		<div class="about-features-list">
			<?php foreach ( $fields['features'] as $feature ): ?>
				<div class="about-features-item text-<?php echo $feature['text_color']; ?> <?php echo $feature['color']; ?>">
					<?php if ( ! empty( $fields['title'] ) ): ?>
						<h5>
							<?php echo $fields['title']; ?>
						</h5>
					<?php endif; ?>
					<?php if ( ! empty( $feature['features_list'] ) ): ?>
						<ul>
							<?php foreach ( $feature['features_list'] as $feature_text ): ?>
								<li>
									<?php echo $feature_text['title']; ?>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
</div>
