<?php get_header();?>


                                <?php  query_posts('post_type=Teams&meta_key=ranked_points&orderby=meta_value&order=DESC&post_per_page=-1'); $counter=1; ?>
                                      
                                <?php echo "eita doidera";; if(have_posts()):

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

        <!-- standing end -->
        
<?php get_footer(); ?>