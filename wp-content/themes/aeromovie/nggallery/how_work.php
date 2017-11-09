<?php 
/**
Template Page for the gallery overview

Follow variables are useable :

	$gallery     : Contain all about the gallery
	$images      : Contain all images, path, title
	$pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>


	<!-- Thumbnails -->
    <?php $i = 0; ?>
	<?php foreach ( $images as $image ) : ?>
		<div class="item">
			<div class="howwework__img">
				<img src="<?php echo nextgen_esc_url($image->imageURL) ?>" title="<?php echo esc_attr($image->alttext) ?>" alt="<?php echo esc_attr($image->alttext) ?>">
			</div>
			<p class="howwework__txtbottom"><?php echo esc_attr($image->alttext) ?></p>
		</div>
    <?php $i++; ?>

 	<?php endforeach; ?>
 	
	
<?php endif; ?>
