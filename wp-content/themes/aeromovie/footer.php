<div class="want">
	<div class="container">
		<div class="our-wrap__title margin">
			<span class="common-title_digital white header2">Хотите работать с нами? <span>05</span></span>
		</div>
		<p>Заполните форму заказа или закажите обратный звонок. Мы свяжемся с вами в течение 5 минут.</p>
		<img src="<?php echo get_template_directory_uri(); ?>/img/dron.png" alt="img" class="img-responsive">
		<form action="#" method="post" class="want-form form-popup">
			<h3 class="want-form__title">Оставьте свой номер и специалист вас проконсультирует</h3>
			<div class="wants-first">
				<label class="want-form__label">Имя</label><br>
				<input type="text" name="uname">
			</div>
			<div class="wants-two">
				<label class="want-form__label">Телефон</label><br>
				<input  type="text" name="phone"><br>
			</div>
			<div class="clearfix"></div>
			<div class="wants-three">
				<label class="want-form__label">Комментарий</label><br>
				<textarea name="comment"></textarea>
			</div>
			<input type="hidden" name="forma" value="Форма в футере">
			<div class="wants-four">
				<label class="checkbox">
					<input class="checkbox__hidden" type="checkbox" name="checkbox-test" checked="checked">
					<span class="checkbox__custom"></span>
					<span class="checkbox__label">Я согласен(на) с политикой конфиденциальности</span>
				</label>
				<span class="want-form__text">Обработка персональных данных осуществляется согласно ФЗ-РФ от 27 июля 2006 г. №152 ФЗ.</span><br>
				<input type="submit" name="submit" value="Оставить заявку" class="want-form__submit">
			</div>
		</form>
	</div>
</div>
</div>

<div class="footer">

<div class="footer-main">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12 one">
					<span>Основной</span>
					<?php 
					wp_nav_menu( array(
						'theme_location'  => 'Main menu',
						'menu'            => 'Футер 1', 
						'container'       => 'div', 
						'container_class' => '', 
						'container_id'    => '',
						'menu_class'      => '', 
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul>%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
						) );	
					?>
					<!-- <ul>
						<li><a href="#">Портфолио</a></li>
						<li><a href="#">За кадром</a></li>
						<li><a href="#">Блог</a></li>
						<li><a href="#">F.A.Q</a></li>
						<li><a href="#">Команда</a></li>

					</ul> -->
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 two">
					<span>Дополнительно</span>
					<?php 
					wp_nav_menu( array(
						'theme_location'  => 'Main menu',
						'menu'            => 'Футер 2', 
						'container'       => 'div', 
						'container_class' => '', 
						'container_id'    => '',
						'menu_class'      => '', 
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul>%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
						) );	
					?>	
				</div>
				<div class="clear"></div>
				<div class="col-md-3 col-sm-6 col-xs-12 three">
					<div class="contact">
						<span>Контакты</span><br>
						+7 (921) 562-05-00 <br>	
						contact@aero-movie.ru
						<div class="icon">
							<div class="socials socials_small">
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 four">
					<div class="contact">
						<span>Адрес офиса</span><br>
						ул. Малая Морская 11 оф. 431
						с 10:00 до 19:00 (лучше звонить заранее)
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="copyright">AERO-MOVIE.RU / летаем с 2013 года. Копирование контента запрещено.</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	
</div>

<div class="modal-window" id="thanks">
	<span class="modal-close">Закрыть</span>
	<br>
	<span class="popup-title">Спасибо за вашу заявку!</span>
	<p>
		В ближайшее время наш менеджер <br> свяжется с Вами.
	</p>
	<img src="<?php echo get_template_directory_uri(); ?>/img/copter_thanks.png" alt="">
</div>

<div class="modal-window" id="order">
	<span class="modal-close">Закрыть</span>
	<!-- Здесь форма -->
	<form action="#" method="post" class="want-form2 form-popup">
			<h3 class="want-form__title">Оставьте свой номер и специалист вас проконсультирует</h3>
			<div class="wants-first">
				<label class="want-form__label">Имя</label><br>
				<input type="text" name="uname">
			</div>
			<div class="wants-two">
				<label class="want-form__label">Телефон</label><br>
				<input  type="text" name="phone"><br>
			</div>
			<div class="clearfix"></div>
			<div class="wants-three">
				<label class="want-form__label">Комментарий</label><br>
				<textarea name="comment"></textarea>
			</div>
			<input type="hidden" id="kindform" name="forma" value="Всплывающая форма">
			<div class="wants-four">
				<label class="checkbox">
					<input class="checkbox__hidden" type="checkbox" name="checkbox-test" checked="checked">
					<span class="checkbox__custom"></span>
					<span class="checkbox__label">Я согласен(на) с политикой конфиденциальности</span>
				</label>
				<span class="want-form__text">Обработка персональных данных осуществляется согласно ФЗ-РФ от 27 июля 2006 г. №152 ФЗ.</span><br>
				<input type="submit" name="submit" value="Оставить заявку" class="want-form__submit">
			</div>
		</form>
</div>


<div  class="modal-window modal-window-video" id="video-tube">
	<span class="modal-close stop" >Закрыть</span>
	<div id="player"></div>
</div>


<div class="mobile-window" id="mobile">
	<span class="modal-close"></span>
	<div class="mobile-line"></div>
	<div class="mobile-logo">
		<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/mobile_logo.png" alt=""></a>
	</div>
	<ul class="mobile-main-menu">
		<li>
			<a href="http://yandex.ru">Услуги</a>
			<ul>
				<li><a href="#">Аэровидеосъемка</a></li>
				<li><a href="#">Аэрофотосъемка</a></li>
				<li><a href="#">Аренда оборудования</a></li>
				<li><a href="#">Виртуальные туры</a></li>
				<li><a href="#">Онлайн-трансляции</a></li>
				<li><a href="#">Пост-продакшн</a></li>
			</ul>
		</li>
		<li><a href="#">Портфолио</a></li>
		<li><a href="#">За кадром</a></li>
		<li><a href="#">Блог</a></li>
		<li><a href="#">Контакты</a></li>
	</ul>
</div>

<a href="#thanks" data-modal="modal"></a>

<script src="https://api-maps.yandex.ru/2.1/?lang=tr_TR" type="text/javascript"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/libs.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

<?php wp_footer(); ?>
		</div>
	</div>
</body>
</html>