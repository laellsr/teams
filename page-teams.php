<?php
get_header(); ?>

<div class="standing">
    <div class="container">
        <div class="standing-list-cover">

            <?php query_posts('post_type=Teams&post_per_page=-1'); ?>
                  
            <?php if(have_posts()):

                while(have_posts()): the_post(); ?>

                <?php the_title(); ?>

            <?php endwhile; ?>

            <?php else: ?> No team.

            <?php wp_reset_query(); ?>

            <?php endif; ?>

        </div>
    </div>
</div>

<?php
get_footer(); ?>