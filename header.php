<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php the_title(); ?></title>

	<link href="https://fonts.googleapis.com/css?family=Cabin:400,400i,500,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- main-wrapper -->
	<div class="main-wrapper">

		<!-- header -->
		<div class="header page-row"><!-- sticky-header -->
			<div class="header-inner">
				<div class="row">
					<div class="columns">

						<div class="top-bar">
							<div class="top-bar-title">
								<?php the_custom_logo(); ?>
								<span data-responsive-toggle="responsive-menu" data-hide-for="medium">
									<button class="menu-icon light" type="button" data-toggle></button>
								</span>
							</div>
							<div id="responsive-menu">
								<div class="top-bar-right">
									<?php
									wp_nav_menu(array(
										'container'      => false,
										'menu'           => __( 'Top Bar Menu', 'textdomain' ),
										'menu_class'     => 'menu',
										'theme_location' => 'main-nav',
										'items_wrap'     => '<ul id="%1$s" class="%2$s" data-responsive-menu="drilldown medium-dropdown" data-parent-link="true">%3$s</ul>',
										'walker'         => new Foundation_6_Walker(),
										// 'fallback_cb' => 'f6_topbar_menu_fallback'
									));
									?>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div><!-- /header -->


		<!-- content wrapper -->
		<div class="content-wrapper page-row page-row-expanded">
			<div class="content-wrapper-inner">
