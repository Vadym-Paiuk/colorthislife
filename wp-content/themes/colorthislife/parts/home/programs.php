<?php
$programs = $args;

if ( empty( $programs ) ) {
	return;
}
?>

<section class="programs">
	<div class="container">
		<div class="programs-by-type">
			<?php if ( ! empty( $programs['programs_by_type']['title'] ) ): ?>
				<h5 class="title">
					<?php echo $programs['programs_by_type']['title']; ?>
				</h5>
			<?php endif; ?>
			<?php if ( ! empty( $programs['programs_by_type']['programs'] ) ): ?>
				<div class="list">
					<?php foreach ( $programs['programs_by_type']['programs'] as $program ): ?>
						<div class="item figure-<?php echo $program['figure']; ?> color-<?php echo $program['color']; ?>">
							<span class="text text--<?php echo $program['text_color']; ?>">
								<?php echo $program['title']; ?>
							</span>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
		<div class="line"></div>
		<div class="programs-by-target-audiences">
			<?php if ( ! empty( $programs['programs_by_audiences']['title'] ) ): ?>
				<h5 class="title">
					<?php echo $programs['programs_by_audiences']['title']; ?>
				</h5>
			<?php endif; ?>
			<?php if ( ! empty( $programs['programs_by_audiences']['programs'] ) ): ?>
				<div class="list">
					<?php foreach ( $programs['programs_by_audiences']['programs'] as $program ): ?>
						<div class="item figure-<?php echo $program['figure']; ?> color-<?php echo $program['color']; ?>">
							<span class="text text--<?php echo $program['text_color']; ?>">
								<?php echo $program['title']; ?>
							</span>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>