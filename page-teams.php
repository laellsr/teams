<?php
get_header(); ?>

<div class="standing">

    <?php query_posts('post_type=Teams&post_per_page=-1'); ?>
          
    <?php if(have_posts()):

        while(have_posts()): the_post(); ?>
            <div class="container">
                <div class="standing-list-cover col-3">
                    <div class="standing-team-list">
                        <div class="mb-3">
                            <span class="logo"><img class="mb-4"> src="<?php the_field('imagem'); ?>"></span>
                            <h4 class="result-title"><?php the_title(); ?></h4>
                            <div class="mt-1 mb-2"><?php the_field('descricao'); ?> </div>
                            <dt class="d-inline">Ranked Points</dt>: <span class="diff"><?php the_field('ranked_points'); ?></span>
                            
                        </div>
                    </div>
                </div>
            </div>

    <?php endwhile; ?>

    <?php else: ?> No team.

    <?php wp_reset_query(); ?>

    <?php endif; ?>


</div>

<?php
get_footer(); ?>