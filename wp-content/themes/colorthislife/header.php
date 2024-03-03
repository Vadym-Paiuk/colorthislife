<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
	<meta http-equiv="Content-Type"
	      content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta http-equiv="X-UA-Compatible"
	      content="IE=edge">
	<meta name="viewport"
	      content="width=device-width, initial-scale=1.0">
	
	<link rel="alternate"
	      type="application/rdf+xml"
	      title="RDF mapping"
	      href="<?php bloginfo( 'rdf_url' ); ?>"/>
	<link rel="alternate"
	      type="application/rss+xml"
	      title="RSS"
	      href="<?php bloginfo( 'rss_url' ); ?>"/>
	<link rel="alternate"
	      type="application/rss+xml"
	      title="Comments RSS"
	      href="<?php bloginfo( 'comments_rss2_url' ); ?>"/>
	<link rel="pingback"
	      href="<?php bloginfo( 'pingback_url' ); ?>"/>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header container">
	<div class="start">
		<?php the_custom_logo(); ?>
	</div>
	<div class="end">
		<?php if ( has_nav_menu( 'header-menu' ) ): ?>
			<nav class="header-nav">
				<?php
				if ( has_nav_menu( 'header-menu' ) ) {
					wp_nav_menu( [
							'theme_location' => 'header-menu',
							'container'      => false,
						]
					);
				}
				?>
			</nav>
		<?php endif; ?>
		<?php get_search_form(); ?>
		<div class="mega-menu">
			<div class="mega-menu-title toggle-dropdown">
				<span>5462</span>
				<p>
					<?php _e( 'coloring pages', THEME_TEXT_DOMAIN ); ?>
				</p>
			</div>
			<div class="mega-menu-dropdown dropdown">
				<div class="mega-menu-dropdown-container">
				<span class="mega-menu-close toggle-dropdown">
					<?php _e( 'Close', THEME_TEXT_DOMAIN ); ?>
				</span>
					<?php if ( has_nav_menu( 'mega-menu-categorise' ) ): ?>
						<div class="mega-menu-row mega-menu-row-categorise">
							<?php
							wp_nav_menu( [
								'theme_location' => 'mega-menu-categorise',
								'container'      => false,
								'menu_class'     => 'menu',
							] );
							?>
						</div>
					<?php endif; ?>
					<?php if ( has_nav_menu( 'mega-menu-collections' ) ): ?>
						<div class="mega-menu-row mega-menu-row-collections">
							<div class="mega-menu-collection-title">
								<?php _e( 'Popular collections', THEME_TEXT_DOMAIN ); ?>
							</div>
							<?php
							wp_nav_menu( [
								'theme_location' => 'mega-menu-collections',
								'container'      => false,
								'menu_class'     => 'menu',
							] );
							?>
							<a href=""
							   class="btn">
								<?php _e( 'All collections', THEME_TEXT_DOMAIN ); ?>
							</a>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</header>

<main>