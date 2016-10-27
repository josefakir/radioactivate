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
			<div class="main-content">
				<h1 class="skin-font-color5"><?php echo single_cat_title(); ?></h1>
				<?php 
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); 
						?>
				<div class="news news-wide">
					<?php the_post_thumbnail('thumb') ?>
					<div class="img-hover font">
						<a href="<?php the_permalink(); ?>">
							<span class="skin-font-color3 font-size-120px icon">]</span>
						</a>
					</div>
						<h4 class="bold"><a href="<?php the_permalink(); ?>" class="skin-font-color5 skin-color-hover1"><?php the_title(); ?></a></h4>
						<span class="skin-font-color6 bold"><?php the_date(); ?> </span>
						<?php the_excerpt(); ?>
					
				</div>
						<?php
					} 
				} 
				?>
				
			</div>
			<!-- /news -->
			<div class="clearfix"></div>
			<div id="nav-below"><?php next_posts_link( 'Entradas anteriores »', 0 ); ?></div>

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