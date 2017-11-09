<?php 
/*
Template Name: Главная 
*/
?>
<?php get_header(); ?>
<?php 
$bolee_sta_proekov_headline = get_field('блок_более_ста_проектов_заголовок');
$bolee_sta_proekov_text = get_field('блок_более_ста_проектов_text');
$bolee_sta_proekov_if_gal = get_field('блок_более_ста_проектов_id_галереи');

$video_mian_text = get_field('видео_на_главной_текст');
$video_mian_link = get_field('видео_на_главной_ссылка_на_видео');


?>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<div class="second-menu">
	<div class="container">
		<ul class="second-menu__box">
			<li><a href="second-menu__tab1" class="second-menu__acivetab">Видеосъемка</a></li>
			<li><a href="second-menu__tab2">Фотосъемка</a></li>
			<li><a href="second-menu__tab3">Аренда оборудования</a></li>
			<li><a href="second-menu__tab4">Виртуальные туры</a></li>
			<li><a href="second-menu__tab5">Онлайн трансляции</a></li>
			<li><a href="second-menu__tab6">Пост-продакшн</a></li>
		</ul>
	</div>
</div>

<div class="videobgimg">
	<div class="container">
		<div class="main-tab second-menu__tab1">
			<div class="video__leftbox">
				<h2 class="common-title_digital"><?php echo get_field('меню_видеосъемка_заголовок') ?> <span>01</span></h2>
				<div class="video__txt">
					<?php echo get_field('меню_видеосъемка_текст') ?>
				</div>
				<div class="video__buttons">				
					<?php echo get_field('меню_видеосъемка_кнопка') ?>
					<?php echo get_field('меню_видеосъемка_ссылка') ?>
				</div>
			</div>
			<div class="video__rightbox">
				<div class="video__imgbox">
					<?php 
					$image = get_field('меню_видеосъемка_картинка1');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
				<div class="video__imgbox">
					<?php 
					$image = get_field('меню_видеосъемка_картинка2');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="main-tab second-menu__tab2">
			<div class="video__leftbox">
				<h2 class="common-title_digital"><?php echo get_field('меню_фотосъемка_заголовок') ?> <span>02</span></h2>
				<div class="video__txt">
					<?php echo get_field('меню_фотосъемка_текст') ?>
				</div>
				<div class="video__buttons">				
					<?php echo get_field('меню_фотосъемка_кнопка') ?>
					<?php echo get_field('меню_фотосъемка_ссылка') ?>
				</div>
			</div>
			<div class="video__rightbox">
				<div class="video__imgbox">
					<?php 
					$image = get_field('меню_фотосъемка_картинка1');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
				<div class="video__imgbox">
					<?php 
					$image = get_field('меню_фотосъемка_картинка2');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="main-tab second-menu__tab3">
			<div class="video__leftbox">
				<h2 class="common-title_digital"><?php echo get_field('меню_аренда_заголовок') ?> <span>03</span></h2>
				<div class="video__txt">
					<?php echo get_field('меню_аренда_текст') ?>
				</div>
				<div class="video__buttons">				
					<?php echo get_field('меню_аренда_кнопка') ?>
					<?php echo get_field('меню_аренда_ссылка') ?>
				</div>
			</div>
			<div class="video__rightbox">
				<div class="video__imgbox">
					<?php 
					$image = get_field('меню_аренда_картинка1');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
				<div class="video__imgbox">
					<?php 
					$image = get_field('меню_аренда_картинка2');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="main-tab second-menu__tab4">
			<div class="video__leftbox">
				<h2 class="common-title_digital"><?php echo get_field('меню_туры_заголовок') ?> <span>04</span></h2>
				<div class="video__txt">
					<?php echo get_field('меню_туры_текст') ?>
				</div>
				<div class="video__buttons">				
					<?php echo get_field('меню_туры_кнопка') ?>
					<?php echo get_field('меню_туры_ссылка') ?>
				</div>
			</div>
			<div class="video__rightbox">
				<div class="video__imgbox">
					<?php 
					$image = get_field('меню_туры_картинка1');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
				<div class="video__imgbox">
					<?php 
					$image = get_field('меню_туры_картинка2');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="main-tab second-menu__tab5">
			<div class="video__leftbox">
				<h2 class="common-title_digital"><?php echo get_field('меню_трансляции_заголовок') ?> <span>05</span></h2>
				<div class="video__txt">
					<?php echo get_field('меню_трансляции_текст') ?>
				</div>
				<div class="video__buttons">				
					<?php echo get_field('меню_трансляции_кнопка') ?>
					<?php echo get_field('меню_трансляции_ссылка') ?>
				</div>
			</div>
			<div class="video__rightbox">
				<div class="video__imgbox">
					<?php 
					$image = get_field('меню_трансляции_картинка1');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
				<div class="video__imgbox">
					<?php 
					$image = get_field('меню_трансляции_картинка2');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="main-tab second-menu__tab6">
			<div class="video__leftbox">
				<h2 class="common-title_digital"><?php echo get_field('меню_постпродакшн_заголовок') ?> <span>06</span></h2>
				<div class="video__txt">
					<?php echo get_field('меню_постпродакшн_текст') ?>
				</div>
				<div class="video__buttons">				
					<?php echo get_field('меню_постпродакшн_кнопка') ?>
					<?php echo get_field('меню_постпродакшн_ссылка') ?>
				</div>
			</div>
			<div class="video__rightbox">
				<div class="video__imgbox">
					<?php 
					$image = get_field('меню_постпродакшн_картинка1');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
				<div class="video__imgbox">
					<?php 
					$image = get_field('меню_постпродакшн_картинка2');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
			
<div class="container">
	<div class="bigpark">
		<h2 class="common-title_digital bigpark__caption">Самый большой парк оборудования <br> в Санкт-Петербурге    <span>02</span></h2>

		<div class="bigpark__leftbox">
				<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
				<?php $args = array(
					'post_type' => 'equipment',
					'equipment_category'    => 'na-glavnoj-stranitse',
					'meta_key'			=> 'оборудование_порядок_вывода',
					'orderby'			=> 'meta_value',
					'order' => 'ASC'
				);?>
				<?php  $wp_query = new WP_Query($args); ?>
				<?php $i=1; ?>
				<?php  while ( $wp_query->have_posts() ) { ?>
				<?php $wp_query->the_post(); ?>
					<div class="bigpark__tab bigparktab<?php echo $i; ?> ">
						<div class="bigpark__img">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="bigpark__txtbox">
							<h4>Квадрокоптер <b><?php the_title(); ?></b></h4>
							<span><?php the_field('оборудование_уровень'); ?></span>
							<p>
								<?php echo get_the_content(); ?>
							</p>
						</div>				
					</div>
				<?php $i++; ?>
				<?php }?>
				
				<?php wp_reset_query(); ?>
				
				<div class="bigpark__button">
					<a class="button button_1 order-video-main" href="#order" data-modal="modal">Заказать видеосъемку</a>
				</div>
			</div>

			<!-- <div class="bigpark__button">
				<a class="button button_1" href="#">Заказать видеосъемку</a>
			</div> 
		</div>-->

		<div class="bigpark__rightbox">
			<h4>Список оборудования и стоимость:</h4>
			<div class="bigpark__accordeon">
				<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
				<?php $args = array(
					'post_type' => 'equipment',
					'equipment_category'    => 'na-glavnoj-stranitse',
					'meta_key'			=> 'оборудование_порядок_вывода',
					'orderby'			=> 'meta_value',
					'order'				=> 'ASC'
				);?>
				<?php  $wp_query = new WP_Query($args); ?>
				<?php $i=1; ?>
				<?php  while ( $wp_query->have_posts() ) { ?>
				<?php $wp_query->the_post(); ?>
					<div class="bigpark__accordeon-item" data-tab="bigparktab<?php echo $i; ?>">
						<div class="accordeon__visiblebox">
							<div class="bigpark__accordeon-img">
								<?php the_post_thumbnail(); ?>
							</div>
							<span class="bigpark__accordeon-nameproduct"><?php the_title(); ?></span>
							<div class="bigpark__accordeon-pricebox">
								<span>от <b><?php the_field('оборудование_цена'); ?></b> <i class="fa fa-rub" aria-hidden="true"></i></span>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="bigpark__accordeon-hiddenbox">
							<div class="bigpark__accordeon-characteristics">
								<div class="bigpark__accordeon-hourprice">
									<em>Стоимость:</em>
									<?php the_field('оборудование_стоимость_часа'); ?>
								</div>
								<div class="bigpark__accordeon-tech">
									<em>Тех. характеристики:</em>
									<?php the_field('оборудование_технические_характеристики'); ?>
								</div>
							</div>
							<div class="bigpark__accordeon-video">
								<a href="#video-tube" data-modal="modal">
									<?php 

									$image = get_field('оборудование_обложка_для_видео');

									if( !empty($image) ): ?>

										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

									<?php endif; ?>

									<div class="video-bag"><?php the_field('оборудование_ссылка_на_видео'); ?></div>
								</a>
							</div>													
						</div>
						<div class="clearfix"></div>
					</div>
				<?php $i++; ?>
				<?php }?>
				
				<?php wp_reset_query(); ?>
			</div>
			<p class="bigpark__textbottom">Цена на проведение съемки может меняться в зависимости от требований и параметров съемки. Окончательную цену уточняйте у менеджера.</p>	
			<br><br>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>

<div class="container">
	<div class="video-box">
		<div class="video-box__item">
			<a href="#video-tube" data-modal="modal" class="main-page-video">
				<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="">
				<div class="video-bag"><?php echo $video_mian_link;  ?></div>
			</a>
			<p><?php echo $video_mian_text; ?></p>
		</div>
	</div>
</div>

<div class="project-more">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="project-more__box">
					<div class="common-slider">
						<div class="slider-owl-carousel">
							<?php echo do_shortcode('[nggallery id="1" template="more_gallery3"]'); ?>
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
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="project-more__box project-more__box_2">

					<h2 class="common-title_digital"><?php echo $bolee_sta_proekov_headline; ?> <span>03</span></h2>
					<?php echo $bolee_sta_proekov_text ; ?>

					<a class="button button_3" href="/?p=59">Посмотреть все кейсы</a>

				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<div class="our-wrap">
	<div class="container">
	
		<div class="our-wrap__title">
			<h2 class="common-title_digital">Наши заказчики <span>04</span></h2>
		</div>
		
		<div class="slider-wrap">
			<div id="our-slider">
				
				<?php $args = array(
					'page_id' => 11
				);  ?>
				<?php $query = new WP_Query($args); ?>
				<?php  while ( $query->have_posts() ) { ?>
				<?php  $query->the_post(); ?>
					<?php if( class_exists('Dynamic_Featured_Image') ) { ?>
						<?php global $dynamic_featured_image; ?>
						<?php $featured_images = $dynamic_featured_image->get_featured_images( get_the_ID() ); ?>
						<?php foreach( $featured_images as $image ) { ?>				
						<div class="item">
							<div class="item__box">
								<img class="img-responsive" src="<?php echo $image['full'] ?>" alt="">
							</div>
						</div>
						<?php } ?>
					<?php } ?>
				<?php }?>
				<?php wp_reset_query(); ?>

			</div>
		</div>
	</div>
</div>		

<?php get_footer(); ?>


