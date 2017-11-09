<?php 
/*
YARPP Template: Мойшаблон
Author: mitcho (Michael Yoshitaka Erlewine)
Description: A simple example YARPP template.
*/
?>
<?php if (have_posts()):?>
	<div class="row">
		
		
		<?php while (have_posts()) : the_post(); ?>
		<div class="col-md-3">
			<div class="news-item">
				<div class="news-item_img-box">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>	
				<div class="news-item_tags">

					<?php 
						$posttags = get_the_tags();
						if ($posttags) {
						  foreach($posttags as $tag) {
						  		echo $tag->name . ' '; 
						  }
						}
					?>
				</div>
			  	<a href="<?php the_permalink(); ?>" class="news-item_title"><?php the_title(); ?></a>
			</div>
		</div>
		
		<?php endwhile; ?>
		<div class="clearfix"></div>
	</div>
<?php else: ?>
<p>Похожих материалов не найдено</p>
<?php endif; ?>
