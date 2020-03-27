<?php
/*
 * Template Name: Single Event 
 */
get_header();
?>
<div id="tribe-events-content" class="tribe-events-single">
    <?php the_title('<h1 class="tribe-events-single-event-title">', '</h1>'); ?>
    <?php echo tribe_events_event_schedule_details($event_id, '<h3>', '</h3>'); ?>
    <?php while (have_posts()) :  the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <!-- Event featured image, but exclude link -->
            <?php echo tribe_event_featured_image($event_id, 'small', false); ?>
            <!-- Event content -->
            <?php do_action('tribe_events_single_event_before_the_content') ?>
            <div class="tribe-events-single-event-description tribe-events-content">
                <?php the_content(); ?>
            </div>
            <!-- .tribe-events-single-event-description -->
            <?php do_action('tribe_events_single_event_after_the_content') ?>

            <!-- Event meta -->
            <?php do_action('tribe_events_single_event_before_the_meta') ?>
            <?php tribe_get_template_part('modules/meta'); ?>
            <?php do_action('tribe_events_single_event_after_the_meta') ?>
        </div> <!-- #post-x -->
        <?php if (get_post_type() == Tribe__Events__Main::POSTTYPE && tribe_get_option('showComments', false)) comments_template() ?>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>