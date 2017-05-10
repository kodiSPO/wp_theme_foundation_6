<?php
/* Template name: Flexible content */
get_header();


if (have_rows('flexible_content')) :

	while (have_rows('flexible_content')) : the_row();


		/* --------------------------------------------
			slider
		-------------------------------------------- */
		if (get_row_layout() == 'flex_slider') : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				

			<?php endif;


		/* --------------------------------------------
			simple content
		-------------------------------------------- */
		elseif (get_row_layout() == 'flex_simple_content') : ?>


			<?php if (!get_sub_field('hide_widget')) : ?>

				

			<?php endif;


		endif;

	endwhile;

else : ?>

	<div class="row">
		<div class="columns text-center">
			<br><br><br><br>No widgets were added.<br><br><br><br><br>
		</div>
	</div>

<?php endif;


get_footer(); ?>