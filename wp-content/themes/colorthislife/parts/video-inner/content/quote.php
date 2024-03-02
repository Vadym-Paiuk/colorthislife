<?php
$quote = $args['quote'];

if ( empty( $quote ) ) {
	exit;
}
?>

<div class="quote container-xs">
	<?php echo $quote; ?>
</div>
