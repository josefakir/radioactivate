<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="format-detection" content="telephone=no">
	<?php get_template_part('title') ?>
	<?php wp_head(); ?>
</head>
<!-- BODY -->
<body id="body" class="home page page-id-2 page-template page-template-page-sidebar_second page-template-page-sidebar_second-php has-slider wpb-js-composer js-comp-ver-4.4.2 vc_responsive">
	<?php 
		get_header();
	?>
	<div class="center-wrapper main-content-wrapper">
		<!-- MAIN CONTENT -->
		<div class="three-fourth main-content-responsive">
			<!-- news -->
			<div id="post-219" class="main-content post-219 post type-post status-publish format-standard has-post-thumbnail hentry category-concerts category-news tag-news">
				<div class="news-open">				
					<?php 
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post(); 
							the_content();
							?>
				<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5" width="100%"></div>
							<?php
							//
							// Post Content here
							//
						} // end while
					} // end if
					?>
				</div>
			</div>
			<!-- /news -->
			<div class="clearfix"></div>
		</div>
		<!-- /MAIN CONTENT -->
		<?php get_sidebar(); ?>
	</div>
	<div class="clearfix"></div>
	<!-- FOOTER -->
	<div class="footer skin-background-color11">
		<div class="center-wrapper skin-font-color12 regular">
		</div>
	</div>
	<!-- /FOOTER -->
	<?php wp_footer(); ?>
</body>
<!-- /BODY -->
</html>