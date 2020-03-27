<?php
/*
 * Template Name: Front Page
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
?>
<section id="project-description">
    <div class="offset-xl-1 row d-flex flex-wrap description-wrapper">
        <div class="col ml-2 description-info">
            <?php $logo = get_field('logo'); ?>
            <img class="img-fluid text-left text-md-center text-lg-left" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
            <h1 class="section-title mt-4 pt-3"><?php the_field('title'); ?></h1>
            <p class="w-lg-75 text-justify text-md-left pt-3 pb-3"><?php the_field('description'); ?></p>
            <h5><?php the_field('founders_description'); ?></h5>
            <?php if (have_rows('founders')) : ?>
                <ul class="ml-4 pb-2">
                    <?php while (have_rows('founders')) : the_row();
                        $founder = get_sub_field('founder');
                    ?>
                        <li class="founder-item">
                            <?php echo $founder; ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            <p class="text-justify pb-3"><?php the_field('aim'); ?></p>
        </div>
        <div class="col-12 col-lg-5 mt-lg-5 mt-xl-0 mb-3">
            <picture>
                <?php
                $first_image = get_field('first_image');
                if (!empty($first_image)) : ?>
                    <img class="img-fluid ml-2 mt-md-5 mt-xl-0" src="<?php echo $first_image['url']; ?>" alt="<?php echo $first_image['alt']; ?>" />
                <?php endif; ?>
            </picture>
        </div>
    </div>
</section>
<section id="our-mission">
    <h2 class="offset-md-1 text-left"><?php the_field('section_mission_title'); ?></h2>
    <div class="container mission d-flex">
        <div class="col-md">
            <h3 class="mt-4 ml-md-3"><?php the_field('mission_sub_title'); ?></h3>
            <p class="text-justify m-3 pb-3"><?php the_field('section_mission_description'); ?></p>
        </div>
    </div>
</section>
<section id="our-team">
    <h2 class="offset-md-1 text-left"><?php the_field('section_our_team_title'); ?></h2>
    <div class="container">
        <?php if (have_rows('team_mate')) : ?>
            <ul class="row team justify-content-center flex-wrap mt-4 mb-4 ml-md-4">
                <?php while (have_rows('team_mate')) : the_row();
                    $mate_title = get_sub_field('mate_title');
                    $mate_description = get_sub_field('mate_description');
                    $mate_pic = get_sub_field('mate_pic');
                ?>
                    <li class="team-item col-12 col-lg-6 mt-2 mb-2 text-center d-md-flex align-items-center">
                        <?php if (!empty($mate_pic)) : ?>
                            <img src="<?php echo $mate_pic['url']; ?>" alt="<?php echo $mate_pic['alt']; ?>" />
                        <?php endif; ?>
                        <div class="title-wrapper col pt-2">
                            <h3><?php echo $mate_title; ?></h3>
                            <p class="text-justify"><?php echo $mate_description; ?></p>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>
<section id="our-direction">
    <h2 class="offset-md-1 text-left"><?php the_field('section_direction_title'); ?></h2>
    <div class="container">
        <?php if (have_rows('direction_list')) : ?>
            <ul class="card-deck ml-lg-5 flex-wrap">
                <?php while (have_rows('direction_list')) : the_row();
                    $direction_image = get_sub_field('direction_image'); ?>
                    <li class="card">
                        <div class="card-header">
                            <?php if (!empty($direction_image)) : ?>
                                <img class="card-img-top" src="<?php echo $direction_image['url']; ?>" alt="<?php echo $direction_image['alt']; ?>" />
                            <?php endif; ?>
                        </div>
                        <?php if (have_rows('direction_item')) : ?>
                            <ul class="card-body mt-2">
                                <?php while (have_rows('direction_item')) : the_row();
                                    $direction_title = get_sub_field('direction_title'); ?>
                                    <li class="card-title mb-3">
                                        <h5><?php echo $direction_title; ?></h5>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>
<section id="linguee">
    <h2 class="offset-md-1 text-left"><?php the_field('section_linguee_title'); ?></h2>
    <div class="container-fluid">
        <div class="linguee-description mt-5">
            <div class="offset-xl-1 gray-color-wrapper row d-flex justify-between flex-wrap">
                <div class="linguee-wrapper col-12 col-lg">
                    <?php if (have_rows('linguee_list')) : ?>
                        <ul class="linguee-list ml-md-3 ml-xl-0 pt-4 pl-3">
                            <?php while (have_rows('linguee_list')) : the_row();
                                $linguee_item = get_sub_field('linguee_item');
                            ?>
                                <li class="linguee-item">
                                    <?php echo $linguee_item; ?>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <?php $section_linguee_image = get_field('section_linguee_image'); ?>
                <img class="img-fluid col-lg-7 col-xl-7 pr-0 h-100" src="<?php echo $section_linguee_image['url']; ?>" alt="<?php echo $section_linguee_image['alt']; ?>">
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>