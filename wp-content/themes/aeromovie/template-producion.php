<?php 
/*
Template Name: Пост-продакшн
*/ ?>

<?php get_header(); ?>
<div class="shooting">	
	<div class="container">
		<div class="shooting_block">				
			<div class="shooting__leftbox">
				<h2 class="common-title"><?php the_field('постпродакшн_заголоаок'); ?></h2>
				<div class="shooting__txtbox">
					<?php the_field('первый_блок_текст'); ?>
				</div>
				<div class="shooting__button">
					<?php the_field('пост_продакшн_ссылка'); ?>
				</div>
			</div>
			<div class="shooting__rightbox">
				<div class="common-slider">
					<div class="slider-owl-carousel">
						<?php $gal_id = get_field('первый_блок_id_галереи'); ?>
						<?php echo do_shortcode('[nggallery id="'.$gal_id.'" template="more_gallery3"]'); ?>
					</div>
					<div class="common-slider__txtbox">
						<div class="common-slider__numberbox">
							<span class="number-active">1</span>
							<i>/</i>
							<span class="number-all">9</span>
						</div>
						
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="examplesblock">
	<div class="container">
		<h2 class="common-title">Примеры проектов под ключ</h2>
		
		<div class="examplesblock__wrap">	

			<?php $args = array(
				'post_type' => 'video',
				'order' => 'ASC'
				//,
				//'cat'=> 4
			);?>
			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
			<?php  $wp_query = new WP_Query($args); ?>
			<?php  while ( $wp_query->have_posts() ) { ?>
			<?php $wp_query->the_post(); ?>
			<div class="examplesblock__box">
				<div class="examplesblock__left">
					<div class="examplesblock__video">
						<a href="#video-tube" data-modal="modal">
							<?php the_post_thumbnail(); ?>
							<div class="video-bag"><?php the_field('портфолио_ссылка_на_видео'); ?></div>
						</a>
					</div>
				</div>
				<div class="examplesblock__right">
					<h4><?php the_title(); ?></h4>
					<?php the_content(); ?>
					<div class="examplesblock__txtbottom">
						<?php the_field('портфолио_дополнительная_информация'); ?>
					</div>
				</div>
			</div>
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
				<a class="button button_1" id="loadmore-video-pod-kluch" href="#">Посмотреть еще</a>
			</div>
			
			<?php endif; ?>
			<?php wp_reset_query(); ?>

			

	</div>
</div>

<div class="servicetxt">
	<div class="container">
		<?php the_field('пост_продакшн_seo_текст'); ?>
	</div>
</div>

<?php get_footer(); ?>
