<?php 
/*
Template Name: Портфолио
*/ ?>

<?php get_header(); ?>

<?php 
if (isset($_GET['sort'])) {
	if ($_GET['sort']=='foto') {
		$sort = 'foto';
	}else{
		$sort = 'video';	
	}
	
}else{
	$sort='video';
}
?>
<div class="portfolio">
	<div class="container">
		<div class="col-md-12">
			<ul class="portfolio__tab">
				<li><a href="/?p=26&sort=video" <?php if ($sort=='video') { echo 'class="panorams__acivetab"';} ?>>Видеоролики</a></li>
				<li><a href="/?p=26&sort=foto" <?php if ($sort=='foto') { echo 'class="panorams__acivetab"';} ?>>Фотографии</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<?php if ($sort=='video') { ?>
		
			

			<?php $args = array(
				'post_type' => 'video',
				'order' => 'ASC'
			);?>
			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
			<?php  $wp_query = new WP_Query($args); ?>
			<?php $i=1; ?>
			<?php  while ( $wp_query->have_posts() ) { ?>
			<?php $wp_query->the_post(); ?>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<a href="#video-tube" class="portfolio__box" data-modal="modal">
						<span class="portfolio__playimg"></span>
						<div class="portfolio__video">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="portfolio__txt">
							<span class="portfolio__txtcap"><?php the_title(); ?></span>
							<span class="portfolio__txtbot"><?php the_excerpt(); ?></span>
						</div>	
						<div class="video-bag"><?php the_field('портфолио_ссылка_на_видео'); ?></div>						
					</a>
				</div>
			<?php if($i%3 == 0){ ?>
				<div class="clearfix"></div>
			<?php } ?>
			<?php $i++; ?>
			<?php }?>
			<?php 
			
			if (  $wp_query->max_num_pages > 1 ) : ?>
			<script>
				var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
				var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
				var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
				var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
			</script>
		
			<div class="portfolio__button">
				<a class="button button_1" id="loadmore-video" href="#">Посмотреть еще</a>
			</div>
			
			<?php endif; ?>
			<?php wp_reset_query(); ?>
		
		<?php } else { ?>
		<div class="portfolio__block photoblock">	
			
			<?php $args = array(
				'post_type' => 'foto',
				'order' => 'ASC'
			);?>
			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
			<?php  $wp_query = new WP_Query($args); ?>
			<?php $i=1; ?>
			<?php  while ( $wp_query->have_posts() ) { ?>
			<?php $wp_query->the_post(); ?>
				<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<a href="<?php echo $image_url[0] ?>" class="portfolio__box portfolio__photobox" data-fancybox-group="group">
						<div class="portfolio__video">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="portfolio__txt">
							<span><?php the_title(); ?></span>
						</div>
					</a>
				</div>
			<?php if($i%3 == 0){ ?>
				<div class="clearfix"></div>
			<?php } ?>
			<?php $i++; ?>
			<?php }?>
			<?php if (  $wp_query->max_num_pages > 1 ) : ?>
			<script>
				var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
				var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
				var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
				var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
			</script>
			<div class="portfolio__button">
				<a class="button button_1" id="loadmore-foto" href="#">Посмотреть еще</a>
			</div>
			<?php endif; ?>				
			<?php wp_reset_query(); ?>
		</div>
		<?php } ?>
	</div>
</div>

<?php get_footer(); ?>
