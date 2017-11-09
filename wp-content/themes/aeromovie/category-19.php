
<?php get_header(); ?>

<div class="lastnews"> 
	<div class="container"> 
		<h1 class="h1">Блог</h1>
		<!-- <ul class="portfolio__tab lastnews__tab">
			<li><a href="#" class="panorams__acivetab">По дате</a></li>
			<li><a href="#">По популярности</a></li>
		</ul>
		<div class="clearboth"></div> -->
		<br>

		<!-- <div class="lastnews__button">
			<a class="button button_2" href="#">Последние новости</a>
		</div> -->

		<div class="lastnews__topnews">
			<div class="lastnews__leftimg">
				
			</div>
			<div class="lastnews__righttxt">

				
				
				<?php $args = array(
						'post_type' => 'post',
						'cat' => '19',
						'posts_per_page' => 2
						
				);?>
				<?php  $wp_query = new WP_Query($args); ?>
				<?php $group_id = 1; ?>
				<?php wp_reset_query(); ?>		
				<?php  while ( $wp_query->have_posts() ) { ?>
				<?php $wp_query->the_post(); ?>

				<div class="lastnews__txtbox">
					<div class="lastnews__txtleftbox">
						<span class="lastnews__daynews">Новость дня</span>
						<span class="lastnews__hashtag">
							<?php 
								$posttags = get_the_tags();
								if ($posttags) {
								  foreach($posttags as $tag) {
									echo $tag->name . ' '; 
								  }
								}
							?>
						</span>
						<a href="<?php the_permalink(); ?>" class="lastnews__link"><?php the_title(); ?></a>
						<span class="lastnews__date"><?php echo get_the_time('d.m.Y'); ?></span>
					</div>
					<div class="lastnews__imgsmoll">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="clearfix"></div>
				</div>

				<?php }?>			
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<?php wp_reset_query(); ?>	
		<?php $i=1; ?>
		<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
		<?php $args = array(
				'post_type' => 'post',
				'cat' => '19',
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
						<span class="blog-box-sp1"><?php echo get_the_time('d.m.Y'); ?></span>
						<span class="blog-box-sp2">
							<?php 
								$posttags = get_the_tags();
								if ($posttags) {
								  foreach($posttags as $tag) {
									echo $tag->name . ' '; 
								  }
								}
							?>
						</span>
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
		<?php wp_reset_query(); ?>		
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
				<span>Поиск по хештегу:</span>
				<?php 
				$tags = get_tags();
					$html = '';
					foreach ( $tags as $tag ) {
						$tag_link = get_tag_link( $tag->term_id );
								
						$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
						$html .= "{$tag->name}</a>";
					}
					
					echo $html;
				?>
					<!-- <a href="#">#лайфстайл</a> <a href="#">#галерея</a> <a href="#">#статьи</a> -->
			</div>

		</div>
		<div class="clearfix"></div>
	</div>
</div>
<?php get_footer(); ?>
