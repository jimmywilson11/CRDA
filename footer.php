<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after
 * @package understrap
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>
<footer>
	<div class="container-fluid">
		<div class="offset-xl-1 footer-content d-flex flex-wrap justify-content-between pb-1">
			<div class="mt-2 mx-auto text-center text-md-left d-block">
				<?php sitelogo() ?>
			</div>
			<div class="address d-flex ml-3 mt-md-3 mb-2 justify-content-center">
				<i class="fas fa-2x fa-map-marker-alt mr-4 mt-3"></i>
				<p class="mt-3 mt-md-3"><?php pll_e('Адреса:'); ?></p>
			</div>
			<div class="contact-wrapper mt-4 mb-3 d-flex m-auto">
				<div class="contacts mt-1">
					<ul class="text-left">
						<li class="contact-item ml-1">
							<i class="fas fa-phone-square"><a class="ml-1" href="tel:<?php the_field('phone', 28); ?>"><?php the_field('phone', 28); ?></a></i>
						</li>
						<li class="contact-item ml-1">
							<i class="far fa-envelope"><a class="ml-1 text-right" href="mailto:<?php the_field('email', 28); ?>">
							<?php the_field('email', 28); ?></a></i>
						</li>
						<li class="contact-item ml-1">
							<i class="fab fa-facebook-square"><a class="ml-1 text-right" href="<?php the_field('social_network', 28); ?>"> fb.com/rda.ck.ua</a></i>
						</li>
					</ul>
				</div>
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'footer',
						'container_id'    => 'languages',
						'container_class' => 'row',
						'menu_class'      => 'col languages ml-5 ml-lg-4 mr-lg-4 mr-xl-0 text-center',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			</div>
		</div>
		<div class="color-wrapper row">
			<div class="offset-xl-1">
				<p class="ml-3 ml-xl-5 text-center text-md-left"><?php pll_e('Створено командою:'); ?> 
					<a class="ml-3" href="http://geekhub.ck.ua">
						<picture>
							<source srcset="<?= get_template_directory_uri() .'/webp/' ?>gh.webp" type="image/webp">
                            <img src="<?= get_template_directory_uri() .'/images/'?>gh.png" alt="GeekHub Logo">
						</picture>
					</a>
				</p>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>