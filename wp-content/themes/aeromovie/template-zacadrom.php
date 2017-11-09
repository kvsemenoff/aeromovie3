<?php 
/*
Template Name: За кадром
*/ ?>

<?php get_header(); ?>


<?php 
if (isset($_GET['sort'])) {
	if ($_GET['sort']=='top') {
		$sort = 'top';
	}else{
		$sort = 'date';	
	}
	
}else{
	$sort='date';
}
?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="cadr-tab">
				<ul class="portfolio__tab">
					<li><a href="/?p=59&sort=date" <?php if ($sort=='date') { echo 'class="panorams__acivetab"';} ?>>По дате</a></li>
					<li><a href="/?p=59&sort=top" <?php if ($sort=='top') { echo 'class="panorams__acivetab"';} ?>>По популярности</a></li>
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
		<?php if ($sort=='top') { ?>
		<?php $args = array(
				'post_type' => 'zacadrom',
				'paged' => $paged,
				'meta_query' => array(
    			    array(
				    	'key'	 	=> 'за_кадром_в_топ',
						'value'	  	=> 'Да'
				       
				    )
				),
		);?>
		<?php } else {?>
		<?php $args = array(
				'post_type' => 'zacadrom',
				'paged' => $paged
		);?>
		<?php } ?>
		<div class="portfolio__block videoblock">
			<?php $i=1; ?>
			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
			<?php  $wp_query = new WP_Query($args); ?>
			<?php $group_id = 1; ?>
			<?php  while ( $wp_query->have_posts() ) { ?>
			<?php $wp_query->the_post(); ?>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
					<a href="<?php echo $image_url[0]; ?>" data-fancybox-group="group<?php echo $group_id ?>" 
					data-caption="<?php
						echo "<div class='zac-header-row'><div class='zac-header-row_cell'><h5>".get_the_title()."</h5></div>"."<div class='zac-header-row_cell'><span class='zac-header-date'>".get_the_time('d F Y').'</span></div></div>'."<div class='facny-content'>".get_the_content().'</div>';
						?>">
						<div class="cadr-box">
							<div class="cadr-box__img">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="cadr-box__txt">
							<span><?php the_time('d F Y'); ?></span>
							
								<p><?php the_title(); ?></p>
								<span class="vision">Смотреть</span>
							</div>
						</div>
					</a>
					<?php if( class_exists('Dynamic_Featured_Image') ) { ?>
						<?php global $dynamic_featured_image; ?>
						<?php $featured_images = $dynamic_featured_image->get_featured_images( get_the_ID() ); ?>
						<?php foreach( $featured_images as $image ) { ?>	
							<a href="<?php echo $image['full'] ?>" data-fancybox-group="group<?php echo $group_id ?>"
							data-caption="<?php
						echo "<div class='zac-header-row'><div class='zac-header-row_cell'><h5>".get_the_title()."</h5></div>"."<div class='zac-header-row_cell'><span class='zac-header-date'>".get_the_time('d F Y').'</span></div></div>'."<div class='facny-content'>".get_the_content().'</div>';
						?>"
							></a>			
						<?php } ?>
					<?php } ?>

				</div>
			<?php $group_id++; ?>
			<?php if($i%3 == 0){ ?>
				<div class="clearfix"></div>
			<?php } ?>
			<?php $i++; ?>

			<?php }?>				
			<div class="clearfix"></div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="pag-nav">
					
					<?php 
					$nav = get_the_posts_pagination();
					$nav = preg_replace('~<h2.*?h2>~', '', $nav);
					echo $nav;	
					?>	
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>