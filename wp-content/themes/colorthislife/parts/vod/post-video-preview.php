<?php

use Theme\inc\classes\video\Video_Post_Views;

$video_post_views = Video_Post_Views::get_instance();
?>

<div class="results-list-item">
	<div class="badge">
		2 פעילויות
	</div>
	<div class="preview">
		<?php the_post_thumbnail(); ?>
	</div>
	<div class="views">
		<?php $video_post_views->display_post_views(); ?>
	</div>
	<h3 class="title">
		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	</h3>
	<div class="description">
		<?php the_excerpt(); ?>
	</div>
</div>