<?php get_header();?>

        <!-- about begin -->
               <!-- breadcrumb begin -->
        <div class="breadcrumb-bettix error-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="breadcrumb-content">
                            <h2>Error 404</h2>
                            <ul>
                                <li>
                                    Home
                                </li>
                                <li>
                                    Pages
                                </li>
                                <li>
                                    Error 404
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- error begin -->
        <div class="error">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="part-img">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/error.png" alt="">
                        </div>
                        <div class="part-text">
                            <h4>Sorry, This page was not found!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- error end -->

        
<?php get_footer(); ?>