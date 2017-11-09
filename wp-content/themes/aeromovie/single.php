<?php get_header(); ?>
<div class="faq-box">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<div class="content-part post-page">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; endif?>
					<br><br>
					<script type="text/javascript">(function() {
					  if (window.pluso)if (typeof window.pluso.start == "function") return;
					  if (window.ifpluso==undefined) { window.ifpluso = 1;
					    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
					    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
					    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
					    var h=d[g]('body')[0];
					    h.appendChild(s);
					  }})();</script>
					<div class="pluso" data-background="none;" data-options="medium,square,line,horizontal,nocounter,sepcounter=1,theme=14" data-services="odnoklassniki,vkontakte,facebook,twitter,moimir"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="related-box">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h4>Похожие материалы</h4>
					<?php related_posts(); ?>
				</div>
				 
			</div>
		</div>
		
		
	</div>
</div>
<?php get_footer(); ?>
