<?php get_header();?>

        <!-- breadcrumb begin -->
        <div class="breadcrumb-bettix standing-page" style="background-position: 10% 1%;background-image: url(<?php bloginfo('template_url'); ?>/assets/img/blog-2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="breadcrumb-content">
                            <h2>Team Standing</h2>
                            <ul>
                                <li>
                                    Home
                                </li>
                                <li>
                                    Teams
                                </li>
                                <li>
                                     Standing
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- standing begin -->
        <div class="standing">
            <div class="container">
                <div class="standing-list-cover">
                    <div class="standing-team-list">
                        <h4 class="result-title">Standing</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Pos</th>
                                    <th scope="col">Team</th>
                                    <th scope="col">Ranked Points</th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php  query_posts('post_type=Teams&meta_key=ranked_points&orderby=meta_value&order=DESC&post_per_page=-1'); $counter=1; ?>
                                      
                                <?php if(have_posts()):

                                    while(have_posts()): the_post(); ?>
                             
                                   <tr>
                                        <th scope="row"><?php echo $counter++; ?></th>
                                        <td>
                                            <span class="single-team">
                                                <span class="logo">
                                                    <img src="<?php the_field('imagem'); ?>" alt="">
                                                </span>
                                                <span class="text">
                                                    <?php the_title(); ?>
                                                </span>
                                            </span>
                                        </td>
                                        <td><?php the_field('ranked_points'); ?></td>
                                    </tr>
                                    
                                <?php endwhile; ?>

                                <?php else: ?> No team.

                                <?php wp_reset_query(); ?>

                                <?php endif; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- standing end -->
        
<?php get_footer(); ?>