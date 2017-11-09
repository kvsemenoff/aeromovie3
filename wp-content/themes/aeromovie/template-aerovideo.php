<?php 
/*
Template Name: Аэровидеосъемка
*/ ?>

<?php get_header(); ?>
<?php 
$seo_text = get_field('аэровидесъемка_seo_текст');
$compare1 = get_field('сравнение_текст_блока');
$compare2 = get_field('сравнеие_кнопка');
$compare3 = get_field('заголовк_первой_вкладки');
$compare4 = get_field('описаение_первой_вкладки');
$compare5 = get_field('фоновая_картинка_для_первой_вкладки');
$compare6 = get_field('видео_для_первой_вкладки');
$compare7 = get_field('заголовок_второй_вкладки');
$compare8 = get_field('описание_второй_вкладки');
$compare9 = get_field('фоновая_картинка_второй_вкладки');
$compare10 = get_field('видео_второй_вкладки');
$compare11 = get_field('заголовок_третьей_вкладки');
$compare12 = get_field('описание_третьей_вкладки');
$compare13 = get_field('фоновая_картинка_третьей_вкладки');
$compare14 = get_field('видео_третьей_вкладки');


?>

<div class="shooting aerophoto">	
	<div class="container">
		<div class="shooting_block">				
			<div class="shooting__leftbox">
				<h2 class="common-title">Проведение видеосъемки</h2>
				<div class="shooting__txtbox">
					<?php the_field('первый_блок_текст'); ?>				
				</div>
				<div class="shooting__button">
					<a class="button button_1" href="#">Заказать видеосъемку</a>
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
<?php 
$category_video = 4;
if (isset($_GET['sort'])) {
	if ($_GET['sort']=='podkluch') {
		$sort = 'podkluch';
		$category_video = 4;
	}elseif ($_GET['sort']=='uchastie') {
		$sort = 'uchastie';	
		$category_video = 3;
	}else{
		$sort='kino';	
		$category_video = 2;
	}
	
}else{
	$sort='kino';
	$category_video = 2;
}
?>
<a name="view"></a>
<div class="viewshooting">	
	<div class="container">		
		<div class="col-md-12">
			<h2 class="common-title panorams__caption">Виды съемки</h2>
			<ul class="portfolio__tab">
				<li><a href="/?p=55&sort=kino&#view" <?php if ($sort=='kino') { echo 'class="panorams__acivetab"';} ?>>Съемка для кино и телевидения</a></li>
				<li><a href="/?p=55&sort=uchastie&#view" <?php if ($sort=='uchastie') { echo 'class="panorams__acivetab"';} ?>>Участие в съемках роликов</a></li>
				<li><a href="/?p=55&sort=podkluch&#view" <?php if ($sort=='podkluch') { echo 'class="panorams__acivetab"';} ?>>Ролики “под ключ”</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
		
		
			

		
		<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
		<?php $args = array(
			'post_type' => 'video',
			'order' => 'ASC',
			'cat' => $category_video
		);?>
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
		
		<?php wp_reset_query(); ?>

		<div class="clearfix"></div>

		
		<div class="shooting__button whatweshot__button">
			<a class="button button_1" href="/?p=26">Перейти в портфолио</a>
		</div>
	</div>
</div>


<div class="costtheshooting aerovideo-osttheshooting">
	<div class="container">
		<div class="bigpark">
			<h2 class="common-title">Стоимость проведения съемки и оборудования</h2>

			<div class="bigpark__leftbox">
				<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
				<?php $args = array(
					'post_type' => 'equipment',
					'equipment_category'    => 'na-stranitse-aerovideosemka',
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

			<div class="bigpark__rightbox">
				<h4>Список оборудования и стоимость:</h4>
				<div class="bigpark__accordeon">
					<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
					<?php $args = array(
						'post_type' => 'equipment',
						'equipment_category'    => 'na-stranitse-aerovideosemka',
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
									<a href="#video-tube" data-modal="modal" class="equpment-link">
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
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>	

<div class="compare aerovideo__compare">
	<div class="container">
		<h2 class="common-title">Сравнение видео с разных камер</h2>
		<div class="compare__block">

			<div class="compare__leftbox">
				<a href="#video-tube" data-modal="modal" class="compare__imgbox comparetab1">			
					<img src="<?php echo $compare5['url']; ?>" alt="">			
					<div class="video-bag"><?php echo $compare6; ?></div>
				</a>
				<a href="#video-tube" data-modal="modal" class="compare__imgbox comparetab2">
					<img src="<?php echo $compare9['url']; ?>" alt="">
					<div class="video-bag"><?php echo $compare10; ?></div>
				</a>
				<a href="#video-tube" data-modal="modal" class="compare__imgbox comparetab3">
					<img src="<?php echo $compare13['url']; ?>" alt="">
					<div class="video-bag"><?php echo $compare14; ?></div>
				</a>					

				<div class="compare__tabs aerovideo__tabs">
					<a href="comparetab1" class="compare__tabs-activelink">
						<b><?php echo $compare3; ?></b>
						<span><?php echo $compare4; ?></span>
					</a>
					<a href="comparetab2">
						<b><?php echo $compare7; ?></b>
						<span><?php echo $compare8; ?></span>
					</a>
					<a href="comparetab3">
						<b><?php echo $compare11; ?></b>
						<span><?php echo $compare12; ?></span>
					</a>
				</div>
			</div>

			<div class="compare__rightbox">
				<?php echo $compare1; ?>
				<div class="compare__button">
					<?php echo $compare2; ?>
				</div>	
			</div>
		</div>
	</div>
</div>	

<div class="howwework">
	<div class="container">
		<h2 class="common-title">Как мы работаем</h2>
	</div>
	<div class="howwework__slider">
		<?php $gal_id = get_field('аэровидесъемка_id_галереи_как_мы_работаем'); ?>
		<?php echo do_shortcode('[nggallery id="'.$gal_id.'" template="how_work"]'); ?>
	</div>				
</div>

<div class="servicetxt">
	<div class="container">
		<?php echo $seo_text; ?>
	</div>
</div>



<?php get_footer(); ?>