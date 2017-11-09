<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title>Страница не найдена</title>
    <link href="favicon.png" rel="shortcut icon">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<?php wp_head(); ?>

</head>

<div class="wrapper">
	<div class="content">

		<div class="container">
			<div class="logo404">
				<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/log404.png" alt="Aero-movie.ru"></a>
			</div>
			<div class="error-box">
				<span>404</span>
				<div class="error-box__img">
					<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/copter.png" alt="">
				</div>
				<p>Что-то пошло не так и страница исчезла</p>
			</div>
		</div>

	</div>
	<div class="footer">
		<div class="footer404">
			<p>Мы вернем вас на главную через несколько секунд. Нажмите <a href="/">сюда</a>, если не хотите ждать.</p>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>