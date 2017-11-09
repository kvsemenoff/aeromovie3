<?php get_header(); ?>
<div class="faq-box">
	<div class="container">
		<div class="col-md-12">
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="col-md-12">
			<div class="content-part">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; endif?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
