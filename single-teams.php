<?php get_header();?>



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
            

        <!-- standing end -->
        
<?php get_footer(); ?>