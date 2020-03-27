<?php
/*
 * Template Name: Event Calendar
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
?>
<section id="calendar">
    <h2 class="offset-md-1 text-left"><?php the_field('section_event_calendar_title'); ?></h2>
    <div class="container-fluid w-100">
        <div class="row d-flex">
            <div class="col-md-8 m-auto">
                <?php echo do_shortcode('[tribe_events view="month"]'); ?>
            </div>
        </div>
        <script>
            jQuery(document).ready(function() {
                jQuery(".tribe-events-calendar-month__calendar-event-title-link").click(function(event) {
                    event.preventDefault();
                });
            })
            jQuery(document).ready(function() {
                jQuery(".tribe-events-calendar-month__multiday-event-hidden-link").click(function(event) {
                    event.preventDefault();
                });
            })
            jQuery(document).ready(function() {
                jQuery(".tribe-events-calendar-month__calendar-event-tooltip-title-link").click(function(event) {
                    event.preventDefault();
                });
            });
        </script>
    </div>
</section>
<?php get_footer(); ?>