<?php
get_header(); ?>

<div class="standing">
    <div class="row ml-5 mr-5">
        <?php query_posts('post_type=Teams&post_per_page=-1'); ?>
              
        <?php if(have_posts()):

            while(have_posts()): the_post(); ?>
                    <div class="standing-list-cover col-6">
                        <div class="standing-team-list">
                            <div class="row mb-3">
                                <div class="col-3">
                                    <span class="logo"><a target="_blank" href="<?php the_field('imagem'); ?>"><img class="" src="<?php the_field('imagem'); ?>" style="width: 100px"></a></span>
                                </div>
                                <div class="col-9 mt-2">
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
</div>

<?php
get_footer(); ?>