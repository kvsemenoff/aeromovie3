<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?></title>
    <link href="favicon.png" rel="shortcut icon">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="image_src" href="<?php echo get_template_directory_uri(); ?>/img/swf/thumbnail.jpg" />

	<?php wp_head(); ?>


</head>
<body>


<?php //$image = get_field('фоновая_картинка'); ?>
<?php //print_r($image) ?>
<div class="header-top">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-12 col-xs-12">
				<div class="logo-box">
					<a href="/">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="AeroMovie" class="logo hidden-sm hidden-xs hidden-md">
						<img src="<?php echo get_template_directory_uri(); ?>/img/mobile_logo.png" alt="AeroMovie" class="mobile_logo hidden-lg">
					</a>
				</div>
			</div>
			<div class="col-md-6 hidden-sm hidden-xs">
				<?php 
				wp_nav_menu( array(
					'theme_location'  => 'Main menu',
					'menu'            => 'Главное меню', 
					'container'       => 'div', 
					'container_class' => '', 
					'container_id'    => '',
					'menu_class'      => 'main-menu', 
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => '',
					) );	
				?>
			</div>
			<div class="col-md-4 hidden-sm hidden-xs ">
				<div class="header-contact-box">
					<span class="header-phone">+7 921 562-05-00</span>
					<a href="#order" data-modal="modal" class="button call-back call-back-header">Обратный звонок</a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<a href="#mobile" data-modal="mobile" class="burg"></a>
	</div>
</div>
	
<div class="wrapper">
	<div class="content">

		<?php if (is_front_page()) { ?>
		<div class="header_bottom">
			<div class="container">
				<div class="header-bottom__box">
					<h1 class="main-title">Аэросъемка на заказ</h1>
					<span>Фото и видеосъемка с квадрокоптера в Санкт-Петербурге и регионах</span>
					<p>
						Участвуем в съемках видеороликов и кинопроектах, снимаем земельные участки<br/>
						и объекты надвижимости, выполняем пост-продакшн
					</p>
					<a class="button button_2 order-spec-header" href="#order" data-modal="modal">Заказать звонок специалиста</a>
				</div>
			</div>
		</div>	

		<?php } else if (get_queried_object_id() !=19) { ?>
			
		<?php 

			$image = get_field('фоновая_картинка');

			if( !empty($image) ){ ?>
				<div class="header_bottom header_bottom2" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('<?php echo $image['url']; ?>') no-repeat top center;">
					

				<?php } else { ?>
				<div class="header_bottom header_bottom2" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),  url('<?php echo get_template_directory_uri(); ?>/img/bg2.jpg') no-repeat top center;">
			<?php } ?>
					<div class="header-bottom__box2">
						<div class="container">
							<h1><?php the_title(); ?></h1>
							<?php $post_id = get_the_ID(); ?>
							<?php if( has_excerpt( $post_id ) ){ ?>
								<span><?php the_excerpt(); ?></span>
							<?php } ?>
							
							

							<div class="breadcrumbs">
								<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' / '); ?>
							</div>
						</div>
					</div>
				</div>	
		<?php } ?>

		