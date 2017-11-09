<?php 
/*
Template Name: Контакты
*/ ?>

<?php get_header(); ?>

	<div class="container">
		<div class="contact-box__wr">

			<ul class="pagination pagination__contact">
				<li><a href="/">Главная /</a></li>							
				<li><span>Контакты</span></li>
			</ul>
			<br>
			<h2>Контакты</h2>

			<div class="contact-box__item contact-box__item_1" id="mape">

			</div>

			<div class="contact-box__item contact-box__item_2">
				<a class="tel-cont" href="tel:<?php the_field('контакты_телефон'); ?>"><?php the_field('контакты_телефон'); ?></a>
				<p class="cp1"><?php the_field('контакты_адрес'); ?></p>
				<p class="cp2"><?php the_field('контакты_режим_работы'); ?></p>
				<p class="cp3"><a href="mailto:<?php the_field('контакты_электронная_почта'); ?>"><?php the_field('контакты_электронная_почта'); ?></a></p>

				<div class="contact-box__item_social">
					<span>Мы в социальных сетях:</span>
					<div class="socials socials_big">
						<?php the_field('контакты_блок_соцсетей'); ?>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>

		</div>
	</div>
</div>

<?php get_footer(); ?>
