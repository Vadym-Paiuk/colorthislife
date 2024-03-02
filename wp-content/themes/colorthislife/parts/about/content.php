<?php
$sections = $args['content_type'];
?>

<section class="content">
	<div class="container">
		<?php
		if ( ! empty( $sections ) ) {
			foreach ( $sections as $section ) {
				get_template_part( 'parts/about/content/' . $section['acf_fc_layout'], null, $section );
			}
		}
		?>
	</div>
</section>
