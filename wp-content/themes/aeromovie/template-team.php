<?php 
/*
Template Name: Команда
*/ ?>

<?php get_header(); ?>
<div class="comand-box">
	<div class="comand">
		<div class="container">
			<div class="comand-block">
				<div class="col-md-12">
					<h2>Аэросъемка. Основной состав</h2>
				</div>	
				<div class="clearfix"></div>	
				<?php wp_reset_query(); ?>
				<?php $args = array(
					'post_type' => 'team',
					'cat' => 7,
					'posts_per_page' => 8
					
				);?>
				<?php  $wp_query = new WP_Query($args); ?>
				<?php  while ( $wp_query->have_posts() ) { ?>
				<?php $wp_query->the_post(); ?>
					<div class="col-md-3">
						<div class="comand1">
							<?php the_post_thumbnail(); ?>
						</div>
						<p>
							<?php the_title(); ?><br>
							<span><?php the_excerpt(); ?></span>
						</p>
					</div>
				<?php }?>									
				
				<div class="clearfix"></div>
			</div>		
		</div>
	</div>
	<div class="comand">
		<div class="container">
			<div class="comand-block">
				<div class="col-md-12">
					<h2>Постпродакшн. Операторская группа</h2>
				</div>	
				<div class="clearfix"></div>						
				<?php wp_reset_query(); ?>
				<?php $args = array(
					'post_type' => 'team',
					'cat' => 6,
					'posts_per_page' => 8
					
				);?>
				<?php  $wp_query = new WP_Query($args); ?>
				<?php  while ( $wp_query->have_posts() ) { ?>
				<?php $wp_query->the_post(); ?>
					<div class="col-md-3">
						<div class="comand1">
							<?php the_post_thumbnail(); ?>
						</div>
						<p>
							<?php the_title(); ?><br>
							<span><?php the_excerpt(); ?></span>
						</p>
					</div>
				<?php }?>					
				<div class="clearfix"></div>
			</div>		
		</div>
	</div>
	<div class="comand">
		<div class="container">
			<div class="comand-block">
				<div class="col-md-12">
					<h2>Постпродакшн. Администраторы</h2>
				</div>	
				<div class="clearfix"></div>						
				<?php wp_reset_query(); ?>
				<?php $args = array(
					'post_type' => 'team',
					'cat' => 5,
					'posts_per_page' => 8
					
				);?>
				<?php  $wp_query = new WP_Query($args); ?>
				<?php  while ( $wp_query->have_posts() ) { ?>
				<?php $wp_query->the_post(); ?>
					<div class="col-md-3">
						<div class="comand1">
							<?php the_post_thumbnail(); ?>
						</div>
						<p>
							<?php the_title(); ?><br>
							<span><?php the_excerpt(); ?></span>
						</p>
					</div>
				<?php }?>					
				<div class="clearfix"></div>
			</div>		
		</div>
	</div>
</div>

<?php get_footer(); ?>