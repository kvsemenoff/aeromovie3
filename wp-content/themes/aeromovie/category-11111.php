<?php 
/*
Template Name: Блог
*/ ?>

<?php get_header(); ?>

<div class="lastnews"> 
	<div class="container"> 
		<ul class="portfolio__tab lastnews__tab">
			<li><a href="#" class="panorams__acivetab">По дате</a></li>
			<li><a href="#">По популярности</a></li>
		</ul>
		<div class="clearboth"></div>

		<div class="lastnews__button">
			<a class="button button_2" href="#">Последние новости</a>
		</div>

		<div class="lastnews__topnews">
			<div class="lastnews__leftimg">
				<img src="<?php echo get_template_directory_uri(); ?>/img/blog1.jpg" alt="">
			</div>
			<div class="lastnews__righttxt">
				<div class="lastnews__txtbox">
					<div class="lastnews__txtleftbox">
						<span class="lastnews__daynews">Новость дня</span>
						<span class="lastnews__hashtag">#лайфстайл  #статьи</span>
						<a href="#" class="lastnews__link">Сегодня у нас новая победа!</a>
						<span class="lastnews__date">02.05.2017</span>
					</div>
					<div class="lastnews__imgsmoll">
						<img src="<?php echo get_template_directory_uri(); ?>/img/blognews1.jpg" alt="">
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="lastnews__txtbox">
					<div class="lastnews__txtleftbox">
						<span class="lastnews__daynews">Новость дня</span>
						<span class="lastnews__hashtag">#лайфстайл  #статьи</span>
						<a href="#" class="lastnews__link">Сегодня у нас новая победа!</a>
						<span class="lastnews__date">02.05.2017</span>
					</div>
					<div class="lastnews__imgsmoll">
						<img src="<?php echo get_template_directory_uri(); ?>/img/blognews1.jpg" alt="">
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">

		<?php $i=1; ?>
		<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
		<?php $args = array(
				'post_type' => 'post',
				'cat' => '11',
				'paged' => $paged
		);?>
		<?php  $wp_query = new WP_Query($args); ?>
		<?php $group_id = 1; ?>
		<?php  while ( $wp_query->have_posts() ) { ?>
		<?php $wp_query->the_post(); ?>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<a href="<?php the_permalink(); ?>">
				<div class="cadr-box blog-box">

					<div class="cadr-box__img">
						
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="cadr-box__txt">
						<span class="blog-box-sp1"><?php echo get_the_time('d.m.Y'); ?></span><span class="blog-box-sp2">#лайфстайл</span>
						<div class="clearfix"></div>
						<p class="blog-box-title"><?php the_title(); ?></p>
						<p class="blog-box__txt">
							<?php echo get_the_excerpt(); ?>
						</p>
					</div>

				</div>
			</a>

		</div>
		<?php if($i%3 == 0){ ?>
			<div class="clearfix"></div>
		<?php } ?>
		<?php $i++; ?>

		<?php }?>				
		<div class="clearfix"></div>


		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="pag-nav pag-nav-blog">
				
				<?php 
				$nav = get_the_posts_pagination();
				$nav = preg_replace('~<h2.*?h2>~', '', $nav);
				echo $nav;	
				?>	
			</div>

			<div class="hashteg">
			<span>Поиск по хештегу:</span> <a href="#">#лайфстайл</a> <a href="#">#галерея</a> <a href="#">#статьи</a>
			</div>

		</div>
		<div class="clearfix"></div>
	</div>
</div>
<?php get_footer(); ?>
