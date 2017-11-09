<?php 
/*
Template Name: FAQ
*/ ?>

<?php get_header(); ?>
<div class="faq-box">
	<div class="container">
		<?php wp_reset_query(); ?>	
		<?php $args = array(
			'post_type' => 'faq',
			'order' => 'ASC'
		);?>
		<?php $wp_query = new WP_Query($args); ?>
		
		
		<?php while ( $wp_query->have_posts() ) { ?>
		<?php $wp_query->the_post(); ?>
		<div class="faq">
			<h2><?php the_title(); ?></h2>
			<div class="faq-item">
				<?php the_content(); ?>
			</div>
		</div>
		<?php } ?>
	</div>
</div>

<?php get_footer(); ?>

