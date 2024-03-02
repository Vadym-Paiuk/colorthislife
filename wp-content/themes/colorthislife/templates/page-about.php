<?php
#Template Name: About
get_header();

$sections = get_field( 'sections' );

if ( ! empty( $sections ) ) {
	foreach ( $sections as $section ) {
		get_template_part( 'parts/about/' . $section['acf_fc_layout'], null, $section );
	}
}

get_footer();