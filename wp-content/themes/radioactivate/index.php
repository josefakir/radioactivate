<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="format-detection" content="telephone=no">
	<?php get_template_part('title') ?>
</head>
<!-- BODY -->
<body id="body" class="home page page-id-2 page-template page-template-page-sidebar_second page-template-page-sidebar_second-php has-slider wpb-js-composer js-comp-ver-4.4.2 vc_responsive">
	<?php 
		get_header();
	?>
	<div class="center-wrapper main-content-wrapper">
		<!-- MAIN CONTENT -->
		<div class="three-fourth main-content-responsive">
			<div id="post-2" class="main-content post-2 page type-page status-publish hentry">
				<div class="normal-page">
					<h2 class="skin-font-color5">Noticias <span class="bold"></span></h2>
					<div class="one-one">
						<div class="vc_row wpb_row vc_row-fluid"  >
							<div class="vc_col-sm-12 wpb_column vc_column_container ">
								<div class="wpb_wrapper">
									<div class="main-content ">
										<?php 
											$cont = 0;
											$args = array(
												'posts_per_page' => 9
											);
											$the_query = new WP_Query( $args );
											if ( $the_query->have_posts() ) {
											while ( $the_query->have_posts() ) {
												$the_query->the_post();
												?>
										<div class="one-third news <?php if($cont==2){echo " last ";} ?>">
											<?php the_post_thumbnail('thumb') ?>
											<div class="img-hover font">
												<a href="<?php the_permalink(); ?>">
													<span class="skin-font-color3 font-size-120px icon">]</span>
												</a>
											</div>
											<h4 class="bold"><a href="<?php the_permalink(); ?>" class="skin-font-color5 skin-color-hover1"><?php the_title(); ?></a></h4>
											<span class="skin-font-color6 bold"><?php the_date(); ?></span>
											<?php the_excerpt(); ?>
										</div>
											<?php if($cont==2){echo '<div class="clearfix"></div>';} ?>
												<?php
												$cont++;
												if($cont>2){$cont = 0;} 
											}
											/* Restore original Post Data */
											wp_reset_postdata();
										}
										?>
										<div class="clearfix"></div>
									</div>
								</div> 
							</div> 
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /MAIN CONTENT -->
		<?php get_sidebar(); ?>
	</div>
	<?php get_footer(); ?>