<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1597370340476676";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php 
	if(is_home()){
		?>
	<!-- HEADER -->
	<div class="top-wrapper big-wrapper skin-background-color2">
		<div class="top-wrapper-mask">
			<div class="center-wrapper">
				<div class="top-content-position">
					<div class="top-content skin-font-color3">
						<?php get_template_part('menu') ?>
					</div>
				</div>
			</div>
			<!-- Slider  -->
			<div class="slider-wrapp">
				<div class="slider">
					<?php 
						$args = array(
							'post_type' => 'bannershome',
							'posts_per_page' => 28,
							'orderby' => 'date',
							'order' => 'ASC'
						);
						$the_query = new WP_Query( $args );
						if ( $the_query->have_posts() ) {
							while($the_query->have_posts()){
							$the_query->the_post();
							?>
					<div data-src="<?php the_post_thumbnail_url('full'); ?>">
						<div class="top-wrapper-mask">
							<!--<div class="center-wrapper fadeFromBottom">
								<a href="" style="background-color: #df5647" class="button-small skin-font-color3 skin-background-hover3">PREMIERE</a>
								<h1><a href="" class="skin-font-color3 skin-color-hover1">Enjoy the world&#039;s <span class="bold">sounds</span></a></h1>
								<p class="skin-font-color3 font-size-16px">Mauris dapibus orci a dignissim congue. Morbi lacus ante, vestibulum et lectus vitae, semper laoreet lectus. Donec at dictum ipsum, eu venenatis nulla. Vivamus viverra nunc vitae neque euismod, eget pretium erat varius. Nullam eget diam tortor.</p>
							</div>-->
						</div>
					</div>
							<?php
							}
						}
					?>
				</div>
			</div>
			<!-- /Slider  -->
		</div>
		<!-- /bottom background - absolute -->
		<div class="bottom-background-position">
				<div class="bottom-background skin-background-color3"></div>
			</div>
			<!-- /bottom background - absolute -->
		</div>
	<!-- /HEADER -->
		<?php
	}
	if(is_single() or is_page()){
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			$titulo = get_the_title();
			$fecha = get_the_date();
			$id = get_the_ID();
			$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), "header" );
			$thumbnail_src = $thumbnail_src[0];
		} // end while
	} // end if
		?>
	<!-- HEADER -->
	<style>.header-background-219 { background: url(<?php echo $thumbnail_src ?>) no-repeat; background-size: cover }</style>
	<div class="top-wrapper big-wrapper skin-background-color2 header-background-219">
		<div class="top-wrapper-mask">
			<div class="center-wrapper">
				<div class="top-content-position">
					<div class="top-content skin-font-color3">
						<?php get_template_part('menu') ?>							
					</div>
				</div>
				<!-- Top content only posts type  -->
				<div class="top-content">
					<div class="three-fourth main-content-responsive">
						<h1 class="skin-font-color3 bold"><?php echo $titulo ?></h1>
						<?php if(!is_page()){ ?>
						<span class="skin-font-color1 bold font-size-24px"><?php echo $fecha ?> </span>
						<?php } ?>
					</div>
					<div class="one-fourth last"></div>
				</div>
				<!-- /Top content  -->
			</div>
		</div>
		<!-- /bottom background - absolute -->
		<div class="bottom-background-position">
			<div class="bottom-background skin-background-color3"></div>
		</div>
		<!-- /bottom background - absolute -->
	</div>
	<!-- /HEADER -->
		<?php
	}
	if(is_archive()){
		?>
	<!-- HEADER -->
	<style>.header-background-40 { background: url(http://musicflow.gozawi.com/wp-content/uploads/2015/08/23.jpg) no-repeat; }</style>
	<div class="top-wrapper small-wrapper skin-background-color2 header-background-40">
		<div class="top-wrapper-mask">
			<div class="center-wrapper">
				<div class="top-content-position">
					<div class="top-content skin-font-color3">
						<?php get_template_part('menu') ?>
					</div>
				</div>
			</div>
		</div>
		<!-- /bottom background - absolute -->
		<div class="bottom-background-position">
			<div class="bottom-background skin-background-color3"></div>
		</div>
		<!-- /bottom background - absolute -->
	</div>
	<!-- /HEADER -->
		<?php
	}
?>
