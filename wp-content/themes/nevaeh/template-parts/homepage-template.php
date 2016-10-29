<?php /* Template Name: Home Page */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header homepage-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<p class="site-description">This is my new website.</p>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'nevaeh' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

		<section id="quote-section" class="quote-section">
			<?php if( have_rows('c') ): ?>
				<div class="quote-wrap">
					<?php while( have_rows('c') ): the_row();
						$citat = get_sub_field('ct');
						$author = get_sub_field('ca');
						$image = get_sub_field('cs');
					?>
						<div class="qt-slide" <?php echo 'style="background: url(' . $image . ') no-repeat center;"'; ?>  >
							<?php if( $citat ): ?>
								<span>"<?php echo $citat; ?>"</span><br />
							<?php endif; ?>

							<?php if( $author ): ?>
								<p>-<?php echo $author ?></p>
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</section>




<?php
get_footer();
