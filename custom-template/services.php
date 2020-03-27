<?php
/*
 * Template Name: Services
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
?>
<section id="services">
    <h2 class="offset-md-1 text-left"><?php the_field('section_services_title'); ?></h2>
    <div class="container">
        <button id="toggler_1" class="toogler mt-2"><?php the_field('show_all_btn'); ?></button>
        <button id="toggler_2" class="toogler mt-2"><?php the_field('show_all_btn'); ?></button>
        <div class="business row flex-wrap pb-2">
            <div class="col-12 col-md-6 col-lg-4 business-contact">
                <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <h3 class="modal-head-block text-center"><?php the_field('connect_us_btn'); ?></h3>
                            <?php $current_language = get_locale();
                                if( $current_language == 'uk' ) {
                                    echo do_shortcode('[contact-form-7 id="292" title="Form-1 UA"]');
                                    }
                                if( $current_language == 'ru_RU' ) {
                                    echo do_shortcode('[contact-form-7 id="298" title="Form-1 RU"]');
                                    }
                                if( $current_language == 'en_US' ) {
                                    echo do_shortcode('[contact-form-7 id="299" title="Form-1 EN"]');
                                    }
                            ?> 
                            <button type="button" class="close-btn fas fa-times" data-dismiss="modal"></button>        
                        </div>
                    </div>
                </div>
                <?php if( have_rows('for_business') ): ?>
                    <?php while( have_rows('for_business') ): the_row(); ?>
                        <h4 class="business-head-block text-center text-md-left mt-4"><?php the_sub_field('business_sub_title'); ?></h4>
                        <?php if( have_rows('business_service_list') ): ?>
                            <ul class="list mt-2 ml-3 mb-3 mr-4 mr-md-0">
                                <?php while( have_rows('business_service_list') ): the_row(); ?>
                                    <li><p class="service-item p-0"><?php the_sub_field('business_service_item'); ?></p></li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>                    	
                    <?php endwhile; ?>         
                <?php endif; ?>
                <a data-toggle="modal" data-target="#modal1" class="modal-btn text-center mb-4"><?php the_field('connect_us_btn'); ?></a>
            </div>                 
            <div class="service-description col-12 col-lg-4 col-xl-5">
                <p class="warning-msg pb-1 mt-2 mt-lg-0"><?php the_field('warning_msg'); ?></p>
                <?php if( have_rows('for_business') ): ?>
                    <?php while( have_rows('for_business') ): the_row(); ?>
                        <?php if( have_rows('business_service_description_list') ): ?>
                            <ul class="description pr-2 pl-2">
                                <?php while( have_rows('business_service_description_list') ): the_row(); ?>
                                    <li><?php the_sub_field('business_service_item_description'); ?></li>
                                <?php endwhile; ?>     
                            </ul>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="service-picture col-lg-4 col-xl-3 text-center text-xl-left pr-0 mt-2 mt-lg-0">
                <?php if( have_rows('for_business') ): ?>
                    <?php while( have_rows('for_business') ): the_row(); 
                        $business_service_image = get_sub_field('business_service_image'); ?>
                        <?php if (!empty($business_service_image)) : ?>
                            <img src="<?php echo $business_service_image['url']; ?>" alt="<?php echo $business_service_image['alt']; ?>">
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="activists row d-flex no-wrap pb-2">
            <div class="col-lg-4 col-md-6 business-contact">
                <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <h3 class="modal-head-block text-center"><?php the_field('connect_us_btn'); ?></h3>
                            <?php $current_language = get_locale();
                                if( $current_language == 'uk' ) {
                                    echo do_shortcode('[contact-form-7 id="293" title="Form-2 UA"]');
                                    }
                                if( $current_language == 'ru_RU' ) {
                                    echo do_shortcode('[contact-form-7 id="301" title="Form-2 RU"]');
                                    }
                                if( $current_language == 'en_US' ) {
                                    echo do_shortcode('[contact-form-7 id="302" title="Form-2 EN"]');
                                    }
                            ?>
                            <button type="button" class="close-btn fas fa-times" data-dismiss="modal"></button>
                        </div>
                    </div>
                </div>
                <?php if( have_rows('for_activists') ): ?>
                    <?php while( have_rows('for_activists') ): the_row(); ?>
                        <h4 class="business-head-block text-center text-md-left mt-4"><?php the_sub_field('activists_sub_title'); ?></h4>
                        <?php if( have_rows('activists_service_list') ): ?>
                            <ul class="list mt-2 ml-3 mb-3 mr-4 mr-md-0">
                                <?php while( have_rows('activists_service_list') ): the_row(); ?>
                                    <li class="item"><p class="service-item p-0"><?php the_sub_field('activists_service_item'); ?></p></li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>                    	
                    <?php endwhile; ?>         
                <?php endif; ?>
                <a data-toggle="modal" data-target="#modal3" class="modal-btn text-center mb-4"><?php the_field('connect_us_btn'); ?></a>
            </div>
            <div class="service-description col-12 col-lg-4 col-xl-5">
                <p class="warning-msg pb-1 mt-2 mt-lg-0"><?php the_field('warning_msg'); ?></p>
                <?php if( have_rows('for_activists') ): ?>
                    <?php while( have_rows('for_activists') ): the_row(); ?>
                        <?php if( have_rows('activists_service_description_list') ): ?>
                            <ul class="description-activists pr-2 pl-2">
                                <?php while( have_rows('activists_service_description_list') ): the_row(); ?>
                                    <li><p><?php the_sub_field('activists_service_item_description'); ?></p></li>
                                <?php endwhile; ?>     
                            </ul>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="service-picture col-lg-4 col-xl-3 text-center text-xl-left pr-0 mt-2 mt-lg-0">
                <?php if( have_rows('for_activists') ): ?>
                    <?php while( have_rows('for_activists') ): the_row(); 
                        $activists_service_image = get_sub_field('activists_service_image'); ?>
                        <?php if (!empty($activists_service_image)) : ?>
                            <img src="<?php echo $activists_service_image['url']; ?>" alt="<?php echo $activists_service_image['alt']; ?>">
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="goverment row pb-2">
            <div class="col-lg-4 col-md-6 business-contact">
                <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <h3 class="modal-head-block text-center"><?php the_field('connect_us_btn'); ?></h3>
                            <?php $current_language = get_locale();
                                if( $current_language == 'uk' ) {
                                    echo do_shortcode('[contact-form-7 id="294" title="Form-3 UA"]');
                                    }
                                if( $current_language == 'ru_RU' ) {
                                    echo do_shortcode('[contact-form-7 id="303" title="Form-3 RU"]');
                                    }
                                if( $current_language == 'en_US' ) {
                                    echo do_shortcode('[contact-form-7 id="304" title="Form-3 EN"]');
                                    }
                            ?>
                            <button type="button" class="close-btn fas fa-times" data-dismiss="modal"></button>
                        </div>
                    </div>
                </div>
                <?php if( have_rows('for_goverment') ): ?>
                    <?php while( have_rows('for_goverment') ): the_row(); ?>
                        <h4 class="business-head-block text-center text-md-left mt-4"><?php the_sub_field('goverment_sub_title'); ?></h4>
                        <?php if( have_rows('goverment_service_list') ): ?>
                            <ul class="list mt-2 ml-3 mb-3 mr-4 mr-md-0">
                                <?php while( have_rows('goverment_service_list') ): the_row(); ?>
                                    <li class="item"><p class="service-item p-0"><?php the_sub_field('goverment_service_item'); ?></p></li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>                    	
                    <?php endwhile; ?>         
                <?php endif; ?>
                <a data-toggle="modal" data-target="#modal2" class="modal-btn text-center mb-4"><?php the_field('connect_us_btn'); ?></a>
            </div>
            <div class="service-description col-12 col-lg-4 col-xl-5">
                <p class="warning-msg pb-1 mt-2 mt-lg-0"><?php the_field('warning_msg'); ?></p>
                <?php if( have_rows('for_goverment') ): ?>
                    <?php while( have_rows('for_goverment') ): the_row(); ?>
                        <?php if( have_rows('goverment_service_description_list') ): ?>
                            <ul class="description-goverment pr-2 pl-2">
                                <?php while( have_rows('goverment_service_description_list') ): the_row(); ?>
                                    <li><?php the_sub_field('goverment_service_item_description'); ?></li>
                                <?php endwhile; ?>     
                            </ul>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="service-picture col-lg-4 col-xl-3 text-center text-xl-left pr-0 mt-2 mt-lg-0">
                <?php if( have_rows('for_goverment') ): ?>
                    <?php while( have_rows('for_goverment') ): the_row(); 
                        $goverment_service_image = get_sub_field('goverment_service_image'); ?>
                        <?php if (!empty($goverment_service_image)) : ?>
                            <img src="<?php echo $goverment_service_image['url']; ?>" alt="<?php echo $goverment_service_image['alt']; ?>">
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?> 
            </div>
        </div>
    </div>
</section>
<script>
jQuery(document).ready(function ($) {
    var text = document.getElementById('comment'),
        count = document.getElementById('current');
    text.onkeyup = function () {
        var max = this.maxLength;
        count.innerHTML = max - this.value.length;
    };
});

jQuery(document).ready(function ($) {
    var text = document.getElementById('comment-2'),
        count = document.getElementById('current-2');
    text.onkeyup = function () {
        var max = this.maxLength;
        count.innerHTML = max - this.value.length;
    };
});

jQuery(document).ready(function ($) {
    var text = document.getElementById('comment-3'),
        count = document.getElementById('current-3');
    text.onkeyup = function () {
        var max = this.maxLength;
        count.innerHTML = max - this.value.length;
    };
});

jQuery(document).ready(function ($) {
  $('.description-activists')
    .find('li:gt(8)')
    .hide()
    .end()
    .append(
      $('#toggler_1').click(function () {
        $(this).siblings(':hidden').show().end().remove();
      })
    );
  $('.description-goverment')
    .find('li:gt(6)')
    .hide()
    .end()
    .append(
      $('#toggler_2').click(function () {
        $(this).siblings(':hidden').show().end().remove();
      })
    );
});
</script>
<?php get_footer(); ?>