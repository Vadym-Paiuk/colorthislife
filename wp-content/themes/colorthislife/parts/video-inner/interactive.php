<?php
$interactive = $args['interactive'];

if ( empty( $interactive ) ) {
	return;
}
?>

<section class="interactives container">
	<?php
	if ( ! empty( $interactive ) ) {
		foreach ( $interactive as $item ) {
			get_template_part( 'parts/video-inner/interactive', 'item', $item );
		}
	}
	?>
</section>
