<?php
/* Template name: Home */
get_header();
?>


<img class="lazy home-blue-wave" 
	 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" 
	 data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-blue-wave.png" 
	 width="285" 
	 height="868">

<img class="lazy home-red-wave" 
	 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" 
	 data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-red-wave.png" 
	 width="255" 
	 height="849">

<img class="lazy home-head" 
	 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" 
	 data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-hero-head-3.png" 
	 width="577" 
	 height="893">


<div class="home-hero row">
	<div class="columns">
		<h1><?php the_field('hero_headline'); ?></h1>
		<p class="home-hero-subheadline"><?php the_field('hero_subheadline'); ?></p>
		<p class="home-hero-text text-style-18"><?php the_field('hero_text'); ?></p>
		<a href="<?php the_field('hero_button_url'); ?>" class="button"><?php the_field('hero_button_text'); ?></a>
	</div>

	<!-- <div class="home-hero-head">
		<img class="lazy" 
			 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" 
			 data-src="<?php //echo get_stylesheet_directory_uri(); ?>/images/home-hero-head-2.png" 
			 width="758" 
			 height="1195">
	</div> -->
</div>


<!-- <?php //if (have_rows('hero_blocks')) : ?>
	<div class="home-hero-blocks row">
		<div class="columns">
			<?php //while ( have_rows('hero_blocks') ) : the_row(); ?>
				<div class="home-hero-block">
					<p class="home-hero-block-headline"><?php //the_sub_field('headline'); ?></p>
					<p class="home-hero-block-text text-style-18"><?php //the_sub_field('text'); ?></p>
				</div>
			<?php //endwhile; ?>
		</div>
	</div>
<?php //endif; ?> -->





<h2 class="home-services-headline"><?php the_field('services_headline'); ?></h2>

<div class="home-scroll-down">
	<img class="lazy" 
		 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" 
		 data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADsAAAAlCAYAAAD8+ZFYAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkZFMEJCM0EyNEIzNTExRTk4NzQxOENBNTAyNDVDQ0YxIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkZFMEJCM0EzNEIzNTExRTk4NzQxOENBNTAyNDVDQ0YxIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RkUwQkIzQTA0QjM1MTFFOTg3NDE4Q0E1MDI0NUNDRjEiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RkUwQkIzQTE0QjM1MTFFOTg3NDE4Q0E1MDI0NUNDRjEiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4W53/mAAAFgUlEQVR42tSaW4gcRRSGa3p6splsdlYRTRQFLxgVb2ggvmkEHxQfgi8KoiZoVFRE8EHwwSsoIohIBBEvoCIEjCjiFaOIeEFQJCrRuIhvIj6Im53N3HqmPEf+Wv49VvfMZHtW0/DTPT071eerc+rUqeqtHLhoqzvCj4o5e3NeOtIxG4g28h/AsZy59kZ6DCxsUtCYjzS01MgqHglUiVw7sinI46zfD1JqpFLQmKcfciOrCRzsqUYUHKO29EnBtn7Ms7GGEgPaN1oN4ACq9tbMuUqeVXsyUY/OgxChqQndWINVCuEs0pijXvUTBl0DTeEc7EzIvg7Bc0hXUgNajTRao1AOgF00Gn7bo8Z9yaAhwtSetVAd5zWwN3R2h/IMR2HUswyrDa4DcGggI9CUxnT4rkzgGKjaM41zHbapHceKHhYtiG6ADRmNZ5c3ZmvU+Kto/EHR7wTbphC3mbsMYI6yGoHOQNOAVTs3iO4XHSf6Hvc65IgorB234UdniJ4QPS76xcAmOXNen8ZKGaAKt17UgKZx/wTRPaJjRHOih0y0LasLEnPTG/gHRPtEs6L7RFtwrToKasCQMI5qlCGTFYCGocSgszird08T3Uugj4iaJikNmCshUJ5awvUh0WOiLwFyl+gSPKxB4MGAOmXKdExgC8qha59zquhudPYcIm+BZovMzLX/AKemKgqwPZKG7LOiRdFlou148IcFxQiHUTbCXFwE2iAF0Dtw/bNoF0A7pC5s58Ji2Zi1oB2ATkG7ESbbRFeJjhbtMYCVnHKzqPiIgcZCVz+fLrod3x8QPSM6iAhs4Rxgg3eXwjg147UfybhcqbyHXrxWtBW9+3LEwxa+Gyk+YtMdg86SR/XzJoCqx39EtM0j4ppQgA6wPG6XwQ4ItmPmOQb4HA+4UbQZxj0/xMPOFB8+kvnrOaGroGeKbsPf/CB6Dh5doPMC7GrD/p71bPXOE0/m7OuHrHLC8SemofOQ/s9Cb2emY1xkCrDV2lQENCQk/Xw2gX6HjmXQeVw3KYx7semPYX3OenCQA6wP2C86R7QR4HPo2SRnmVgUujbrridQ7ZBvRS+SF+cBexAeLQS1sC7iidjSjqFbCCsdT8eLLhT9iocnOWHNi426mV44dM8X3YoO+Vr0EnmT1YQdhaDDYJ1ZpHtTBnpKPlp4nAJgHce/if4y47ioBGxQ+M6g03bi774SvUIetaE7EugosK4gpL0pD/chnE8CsML+QUkuNXX3OlMCzuCzgt6Ev/0C9XnThO7YoEV7UI6mIj8EnEP8BdHVootF1wPgI0pEbURC2Cqp0ZKtjk7ajs75jOZ2G7qLBjQzuydjwzpTCPgcDcz1bhh0JYoPLeneAmwoWMIQ4LXzZszfCvoJCpZY6IZk1CXQkVZZo8AycDZiEnsHBl4juhRhuoe2SbwZxxcgIvTzx6LXRwjdbBzQcWAtsB+SrVWfwrgd8JoCv2aqKYcpaxtAtd5+MwIaC93+uOvmcWBjtW1eKAd9g5C7GXXtDni4jd+fK7oc4B8g3HmMcuiuCNQdxnrTmbIyLBhaZOQ8eUTv/SR6GtlZq63rsIjQ0L0CoO+L3o60URro4XjWmVraFSQv9rYWGk+hSNiITL0Wv30XsJyIeIy2ywBdCawrSPWxzfQQDU+KbsEug373hmjvkNDtlgG6UlgLnDc18bKxhb2snViP7sW9RZpmmpMALQN2lOKDl42H4L1H8V2P7i/SHNouG7Qs2GHFh4UNG3LebBS0aHx2aKehtI33MmFjxYenDeuOeV3haBuoS+pNAnQSsLHiY0AejL0s65sdwX9tp/yfYW1I80ZeElnQD3LeqZb+kmxSsI5eFXp6uVT0LwETf8E9SViXs51j97tW7fhbgAEAuHPJFgO0qa4AAAAASUVORK5CYII=" 
		 width="59" 
		 height="37">
</div>

<?php if (have_rows('services')) : ?>
	<div class="home-services row">
		<?php while ( have_rows('services') ) : the_row(); ?>
			<div class="columns large-4 medium-12 small-12">
				<a href="<?php the_sub_field('url'); ?>" class="home-service">
					<div class="home-service-bg lazy" data-src="<?php the_sub_field('bg'); ?>"></div>
					<div class="home-service-bg-hover lazy" data-src="<?php the_sub_field('bg_hover'); ?>"></div>
					<div class="home-service-text">
						<h3><?php the_sub_field('headline'); ?></h3>
						<p><?php the_sub_field('text'); ?></p>
					</div>
				</a>
			</div>
		<?php endwhile; ?>
	</div>
<?php endif; ?>


<p class="home-section-headline"><?php the_field('case_headline'); ?></p>


<?php 
$posts = get_field('case_studies');
if( $posts ): ?>
	<div class="row home-cases-row">
		<div class="columns">
			<div class="home-cases">
				<?php foreach( $posts as $post) : // variable must be called $post (IMPORTANT) ?>
					<?php setup_postdata($post); ?>

					<div class="home-case-wrapper">
						<?php get_template_part('parts/case_study_loop_item'); ?>
					</div>

				<?php endforeach; ?>
			</div>
		</div>
	</div>

	<div class="home-cases-nav"></div>
	<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>


<a href="<?php the_field('case_button_url'); ?>" class="button home-view-more"><?php the_field('case_button_text'); ?></a>


<p class="home-section-headline"><?php the_field('approach_headline'); ?></p>


<?php if (have_rows('approach_cols')) : ?>
	<div class="row home-approach-row align-justify">
		<?php 
		$count = 1;
		while ( have_rows('approach_cols') ) : the_row(); ?>

			<div class="columns large-4 medium-12 small-12 home-approach-col">
				<?php if ($count != 1) : ?>
					<img class="lazy" 
						 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" 
						 data-src="data:image/png;base64,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" 
						 width="37" 
						 height="59">
				<?php endif; ?>
				<div class="home-approach-count"><?php echo $count; ?></div>
				<div class="home-approach-content">
					<p class="home-approach-headline"><?php the_sub_field('headline'); ?></p>
					<p class="home-approach-text text-style-18"><?php the_sub_field('text'); ?></p>
				</div>
			</div>

		<?php $count++; endwhile; ?>
	</div>
<?php endif; ?>


<p class="home-section-headline"><?php the_field('news_headline'); ?></p>


<?php 
$arg = array(
	'post_type'      => 'post',
	'order'          => 'DESC',
	'posts_per_page' => 3,
);

$the_query = new WP_Query( $arg );
if ( $the_query->have_posts() ) : ?>
	<div class="row home-insights">
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class="columns large-4 medium-6 small-12">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<div class="home-insight-hover"></div>
					<img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" data-src="<?php echo get_the_post_thumbnail_url(get_the_id(), 'post-preview-387-220'); ?>" width="387" height="220">
					<div class="post-preview-content">
						<p class="post-preview-headline"><?php the_title(); ?></p>
						<div class="post-preview-text"><?php the_excerpt(); ?></div>
					</div>
				</a>
			</div>

		<?php endwhile; ?>
	</div>
<?php endif; wp_reset_query(); ?>


<a href="<?php the_field('news_button_url'); ?>" class="button home-view-more home-insights-view-more"><?php the_field('news_button_text'); ?></a>


<?php get_footer(); ?>