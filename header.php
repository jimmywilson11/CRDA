<?php

/**
 * The header for our theme.
 * Displays all of the <head> section and everything up till <div id="content">
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="Author" content="Шкребтий А.В., email: jimmy.wilson11@gmail.com, github: https://github.com/jimmywilson11"> 
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KJLH7VB');
    </script>
    <!-- End Google Tag Manager -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action('wp_body_open'); ?>
	<!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KJLH7VB"
    height="0" width="0" style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
	<div class="site" id="page">
		<header class="header">
			<div class="container-fluid">
				<nav class="offset-xl-1 navbar navbar-expand-lg justify-content-center justify-content-md-around navbar-dark navbar-fixed-top flex-wrap pt-2 pb-2">
					<?php if (is_front_page() && is_home()) : ?>
						<h1 class="site-title">
							<?php sitelogo() ?>
						</h1>
					<?php else :
						sitelogo();
					endif; ?>
					<p class="site-title-head text-md-center pt-2 pb-2 ml-md-2 mr-md-4">Regional Development
						Agency</p>
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_id'    => 'menuburger',
							'container_class' => 'collapse navbar-collapse',
							'menu_class'      => 'navbar-list navbar-nav ml-auto text-center',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>
					<button class="navbar-toggler ml-3 mr-3 ml-md-0" type="button" data-toggle="collapse" data-target="#menuburger" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="contacts">
						<ul class="text-left">
							<li class="contact-item">
								<a href="tel:<?php the_field('phone', 28); ?>" aria-label="<?php the_field('phone', 28); ?>">
									<i class="fas fa-phone-square"> <?php the_field('phone', 28); ?></i>
								</a>
							</li>
							<li class="contact-item">
								<a href="mailto:<?php the_field('email', 28); ?>" aria-label="<?php the_field('email', 28); ?>">
									<i class="fas fa-envelope"> <?php the_field('email', 28); ?></i>
								</a>
							</li>
							<li class="contact-item">
								<a href="<?php the_field('social_network', 28); ?>" aria-label="<?php the_field('social_network', 28); ?>">
									<i class="fab fa-facebook-square"> fb.com/rda.ck.ua</i>
								</a>
							</li>
						</ul>
					</div>
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'header',
							'container_id'    => 'languages',
							'container_class' => 'row',
							'menu_class'      => 'col languages ml-3 ml-md-1 text-center',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>
				</nav>
			</div>
	</div>
	</header>
	</div>