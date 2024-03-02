<?php
$notification = $args;

if ( empty( $notification ) ) {
	return;
}
?>

<section class="notification">
	<div class="container notification-content">
		<?php if ( ! empty( $notification['title'] ) ): ?>
			<h3 class="notification-title">
				<?php echo $notification['title']; ?>
			</h3>
		<?php endif; ?>
		<?php if ( ! empty( $notification['new_videos'] ) ): ?>
			<ul class="notification-links">
				<?php foreach ( $notification['new_videos'] as $new_video ): ?>
					<?php setup_postdata( $GLOBALS['post'] =& $new_video ); ?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</li>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			</ul>
		<?php endif; ?>
	</div>
</section>
