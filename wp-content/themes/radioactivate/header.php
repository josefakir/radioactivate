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
							<div class="center-wrapper fadeFromBottom">
								<a href="" style="background-color: #df5647" class="button-small skin-font-color3 skin-background-hover3">PREMIERE</a>
								<h1><a href="" class="skin-font-color3 skin-color-hover1">Enjoy the world&#039;s <span class="bold">sounds</span></a></h1>
								<p class="skin-font-color3 font-size-16px">Mauris dapibus orci a dignissim congue. Morbi lacus ante, vestibulum et lectus vitae, semper laoreet lectus. Donec at dictum ipsum, eu venenatis nulla. Vivamus viverra nunc vitae neque euismod, eget pretium erat varius. Nullam eget diam tortor.</p>
							</div>
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
		?>
	<!-- HEADER -->
	<style>.header-background-219 { background: url(http://musicflow.gozawi.com/wp-content/uploads/2015/07/75.jpg) no-repeat; }</style>
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
						<h1 class="skin-font-color3 bold">Club review</h1>
						<span class="skin-font-color1 bold font-size-24px">August 1, 2015 </span>
						<span class="font-size-24px skin-font-color1 bold">/ </span>
						<span class="font-size-24px skin-font-color1 bold">No Comments </span>
						<span class="font-size-24px skin-font-color1 bold">/ </span><span class="font-size-24px skin-font-color1 bold">Tags: </span><a href="http://musicflow.gozawi.com/tag/news/" class="font-size-24px skin-font-color1 skin-color-hover3 bold">news</a>      <p class="skin-font-color3 font-size-16px">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam tincidunt porta luctus. Integer tellus odio, dapibus in efficitur quis, sollicitudin et erat. Fusce tempor lacinia neque sed cursus. Phasellus sed nunc laoreet, placerat quam ut, cursus tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. [&hellip;]</p>
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
