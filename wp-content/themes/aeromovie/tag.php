<?php get_header(); ?>

<div class="lastnews">
	<div class="container">
		<div class="row">
			<?php $i=1; ?>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
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
			<?php endwhile; endif?>

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
</div>
<?php get_footer(); ?>


<?php get_footer(); ?>
