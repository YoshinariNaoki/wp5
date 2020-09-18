<?php
/*
Template Name: single
*/
?>
<?php load_template(TEMPLATEPATH . '/header-2.php'); ?>

<div class="blog-section">
    <div class="container">
        <h2 class="heading text-center">Blog</h2>
        <!--single-page-->
        <div class="banner-bdy sig">
            <div class="single">
                <div class="sing-img-text">
                    <?php while(have_posts()): the_post(); ?>
                    <h3><a href="<?php the_permalink(); ?>"
                            title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                    <h4><span>Posted:<a href="<?php the_permalink(); ?>">
                                <time datetime="<?php the_time('y-m-d'); ?>"></time>
                                <?php the_time( get_option('date_format') ); ?></a></span>
                    </h4>
                    <?php the_content(); ?>
                    <?php endwhile; ?>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <?php get_sidebar( $name ); ?>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- /single -->
<div class="clearfix"> </div>
<?php get_footer(); ?>