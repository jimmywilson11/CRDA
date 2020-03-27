<?php
/*
 * Template Name: Donation Page
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
?>
<section id="donation">
    <h2 class="offset-md-1 text-left"><?php the_field('section_donation_title'); ?></h2>
    <div class="container d-flex flex-wrap flex-md-nowrap mt-3 mb-3 w-100">
        <?php $section_donation_image = get_field('section_donation_image'); ?>
        <img class="p-0 col-md-7 img-fluid h-100" src="<?php echo $section_donation_image['url']; ?>" alt="<?php echo $section_donation_image['alt']; ?>">
        <div class="donation-description">
            <h4 class="pt-3"><?php the_field('section_donation_sub_title'); ?></h4>
            <?php if (have_rows('donation_info')) : ?>
                <ul class="credit-info">
                    <?php while (have_rows('donation_info')) : the_row();
                        $donation_company_title = get_sub_field('donation_company_title');
                        $donation_company_personal_number = get_sub_field('donation_company_personal_number');
                        $donation_company_account = get_sub_field('donation_company_account');
                        $donation_company_bank_title = get_sub_field('donation_company_bank_title');
                        $donation_company_mfo = get_sub_field('donation_company_mfo');
                    ?>
                        <li>
                            <p><?php echo $donation_company_title; ?></p>
                        </li>
                        <li>
                            <p><?php pll_e('ЄДРПОУ'); ?> <?php echo $donation_company_personal_number; ?></p>
                        </li>
                        <li>
                            <p class="rnum"><?php pll_e('р/р'); ?> <?php echo $donation_company_account; ?></p>
                        </li>
                        <li><?php echo $donation_company_bank_title; ?></li>
                        <li><?php pll_e('МФО'); ?> <?php echo $donation_company_mfo; ?></li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            <p class="donation-pay-info"><?php pll_e('Призначення платежу:'); ?> <?php the_field('donation_pay_info'); ?></p>
        </div>
    </div>
</section>
<section id="position">
    <h2 class="offset-md-1 text-left"><?php echo the_field('section_our_location_title'); ?></h2>
    <script>
        jQuery(document).ready(function($) {
            var setting = {
                "height": 550,
                "width": 1280,
                "zoom": 17,
                "queryString": "бульвар Шевченка, 185, Черкаси, Черкаська область, Україна, 18000",
                "place_id": "ChIJOWg4gX1L0UARfuAWeyA3jfI",
                "satellite": false,
                "centerCoord": [49.44511511855742, 32.06061759999998],
                "cid": "0xf28d37207b16e07e",
                "lang": "ua",
                "cityUrl": "/ukraine/cherkasy-35348",
                "cityAnchorText": "Карта [CITY1], Черкассы, Украина",
                "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3",
                "embed_id": "160777"
            };
            var d = document;
            var s = d.createElement('script');
            s.src = 'https://1map.com/js/script-for-user.js?embed_id=160777';
            s.async = true;
            s.onload = function(e) {
                window.OneMap.initMap(setting)
            };
            var to = d.getElementsByTagName('script')[0];
            to.parentNode.insertBefore(s, to);
        });
    </script>
    <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3" class="container map mb-3 mt-3">
        <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
    </div>
</section>
<?php get_footer(); ?>