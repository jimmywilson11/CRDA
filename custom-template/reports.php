<?php
/*
 * Template Name: Reports Page
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
?>

<section id="reports">
    <h2 class="offset-md-1 text-left"><?php echo the_field('section_reports_title'); ?></h2>
    <div class="container">
        <div class="offset-md-1 mt-3">
            <?php if (have_rows('add_new_report')) : ?>
                <div class="report mb-3">
                    <ul class="d-flex flex-wrap row ">
                        <?php while (have_rows('add_new_report')) : the_row(); ?>
                            <li class="col-md-10 col-lg-6">
                                <?php $report_title = get_sub_field('report_title');?>
                                <h3 class="report-title-head"><?php echo $report_title; ?></h3>
                                <?php if (have_rows('report_list')) : ?>
                                    <ul class="report-list mt-1 mb-3 card">
                                        <li>
                                            <h5><?php pll_e('За цей період було зроблено:'); ?></h5>
                                        </li>
                                        <?php while (have_rows('report_list')) : the_row();
                                            $report_item = get_sub_field('report_item'); ?>
                                            <li class="report-item">
                                                <p><?php echo $report_item; ?></p>
                                            </li>
                                        <?php endwhile; ?>
                                        <li class="bnt text-center">
                                        <?php $report_file = get_sub_field('report_file'); 
                                            if( $report_file ): ?>
                                            <a class="download-btn" href="<?php echo $report_file['url']; ?>" download data-toggle="tooltip" data-placement="right" title="<?php pll_e('Завантажити'); ?>">
                                                <picture>
                                                    <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>pdf.webp" type="image/webp">
                                                    <img src="<?= get_stylesheet_directory_uri() . '/images/' ?>pdf.png" alt="Download PDF Icon">
                                                </picture>
                                            </a>
                                         <?php endif; ?>
                                        </li>
                                    </ul>
                                <?php endif; ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>