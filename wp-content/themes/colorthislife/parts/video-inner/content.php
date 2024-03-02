<?php
$content = $args['content'];

if ( empty( $content ) ) {
	return;
}
?>

<section class="content">
	<?php
	if ( ! empty( $content ) ) {
		foreach ( $content as $section ) {
			get_template_part( 'parts/video-inner/content/' . $section['acf_fc_layout'], null, $section );
		}
	}
	?>
</section>
