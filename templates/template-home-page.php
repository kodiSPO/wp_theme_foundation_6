<?php
/* Template name: Home page */
get_header();
?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<div class="row">
			<div class="columns">
				<br><br>
				<h1 class="text-center" style="text-transform: uppercase;">
					<?php the_title(); ?>
				</h1>
				<?php if (has_post_thumbnail()) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
						<?php the_post_thumbnail(); ?>
					</a>
				<?php endif; ?>
				<?php the_content(); ?> 
			</div>
		</div>

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>