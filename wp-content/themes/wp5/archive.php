<?php
/*
Template Name: archive
*/
?>

<?php load_template(TEMPLATEPATH . '/header-2.php'); ?>

<div class="blog-section">
    <div class="container">
        <h2 class="heading text-center">Blogs</h2>
        <div class="blog-post-grids">
            <?php if ( have_posts() ): ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="blog-post">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title_attribute(); ?><?php the_title(); ?></a></h3>
                <p><span>日付：<a href="<?php the_permalink(); ?>">
                    <time datetime="<?php the_time('y-m-d'); ?>"></time><?php the_time( get_option('date_format') ); ?></a></span></p>
                    <?php if(has_post_thumbnail()) : ?>
<p><?php the_post_thumbnail('thumbnail'); ?></p> 
<?php endif; ?>
<?php the_excerpt(); ?>
                <a href="<?php echo home_url(); ?>/single" class="hvr-shutter-in-horizontal more">Readmore</a>
                            </div>
                        </div>
                    </div>
                </div>    
            <?php endwhile; ?>
            <?php else: ?>
<?php endif; ?>
<?php get_footer(); ?>