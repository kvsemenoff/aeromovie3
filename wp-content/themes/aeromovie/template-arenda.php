<?php 
/*
Template Name: Аренда оборудования
*/ ?>

<?php get_header(); ?>
<div class="shooting aeropanoramabg">	
	<div class="container">
		<div class="shooting_block">				
			<div class="shooting__leftbox">
				<h2 class="common-title"><?php the_field('аренда_первый_блок_заголовок'); ?></h2>
				<div class="shooting__txtbox">
					<?php the_field('аренда_первый_блок_текст'); ?>
					</div>
					<div class="shooting__button">
						<?php the_field('аренда_первый_блок_ссылка'); ?>
					</div>
				</div>
				<div class="shooting__rightbox">
					<div class="common-slider">
						<div class="slider-owl-carousel">						
							<?php $gal_id = get_field('аренда_первый_блок_id_галереи'); ?>
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
	<div class="shooting">	
		<div class="container">
			<div class="col-md-12">
				<h2 class="services-h1"><?php the_field('аренда_второй_блок_заголовок'); ?></h2>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-6">
				<div class="services common-slider">
					<div class="slider-owl-carousel">						
						<?php $gal_id = get_field('аренда_второй_блок_id_галереи'); ?>
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
			<div class="col-md-6">
				<div class="shooting__txtbox services-p">
					<?php the_field('аренда_второй_блок_текст'); ?>
					<div class="shooting__button">
						<?php the_field('аренда_второй_блок_ссылка'); ?>
					</div>
				</div>
				
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="shooting">	
		<div class="container">
			<div class="shooting_block">	
				<div class="col-md-6">
					<div class="services common-slider">
						<div class="slider-owl-carousel">						
							<?php $gal_id = get_field('аренда_третий_блок_id_галереи'); ?>
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
				<div class="col-md-6">
					<div class="shooting__leftbervices.jpg2">
						<h2 class="common-title title2"><?php the_field('аренда_третий_блок_заголовок'); ?></h2>
						<div class="shooting__txtbox services-p2">
							<?php the_field('аренда_третий_блок_текст'); ?>
						</div>
						<div class="shooting__button">
							<?php the_field('аренда_треий_блок_ссылка'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="shooting_block service-block2">
				<div class="col-md-6">
					<div class="shooting__leftbervices.jpg2">
						<h2 class="common-title title2"><?php the_field('аренда_четвертый_блок_заголовок'); ?></h2>
						<div class="shooting__txtbox services-p2">
							<?php the_field('аренда_четвертный_блок_текст'); ?>
						</div>
						<div class="shooting__button button-service">
							<?php the_field('аренда_четвертый_блок_ссылка'); ?>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="services common-slider">
						<div class="slider-owl-carousel">						
							<?php $gal_id = get_field('аренда_четвертый_блок_id_галереи'); ?>
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
<div class="servicetxt">
	<div class="container">
		<?php the_field('аренда_seoтекст'); ?>
	</div>
</div>

<?php get_footer(); ?>
