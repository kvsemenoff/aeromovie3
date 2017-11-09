<?php $paged_foto = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
			<?php $args_foto = array(
				'post_type' => 'foto',
				'paged' => $paged_foto,
				'order' => 'DESC'
			);?>
			<?php  $wp_query_foto = new WP_Query($args_foto); ?>

			<?php  while ( $wp_query_foto->have_posts() ) { ?>
			<?php $wp_query_foto->the_post(); ?>
				<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
				<a href="<?php echo $image_url[0] ?>" class="portfolio__box portfolio__photobox" data-fancybox-group="group">
					<div class="portfolio__video">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="portfolio__txt">
						<span><?php the_title(); ?></span>
					</div>
				</a>
			<?php }?>
			<?php if (  $wp_query_foto->max_num_pages > 1 ) : ?>
			<script>
				var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
				var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
				var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
				var max_pages = '<?php echo $query->max_num_pages; ?>';
			</script>
			<div class="portfolio__button">
				<a class="button button_1" id="loadmore-foto" href="#">Посмотреть еще</a>
			</div>
			<?php endif; ?>				
			<?php wp_reset_query(); ?>