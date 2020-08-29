<?php
get_header(); ?>

<!-- breadcrumb begin -->
<div class="breadcrumb-bettix standing-page" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/banner-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="breadcrumb-content">
                    <h2><?php the_title(); ?></h2>
                    <ul>
                        <li>
                            Home
                        </li>
                        <li>
                            Teams
                        </li>
                        <li>
                            <?php the_title(); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->

<div class="standing">
    <div class="container ml-5 mr-5">
        <div class="standing-list-cover">
            <div class="standing-team-list">
                <div class="row mb-3">
                    <div class="col-3">
                        <span class="logo"><a target="_blank" href="<?php the_field('imagem'); ?>"><img class="" src="<?php the_field('imagem'); ?>" style="width: auto; height: 200px"></a></span>
                    </div>
                    <div class="col-9 mt-5">
                        <h4 class="result-title"><?php the_title(); ?></h4>
                        <div class="mt-1 mb-2"><?php the_field('descricao'); ?> </div>
                        <dt class="d-inline">Ranked Points</dt>: <span class="diff"><?php the_field('ranked_points'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer(); ?>