<?php load_template(TEMPLATEPATH . '/header-2.php'); ?>

<div class="blog-section">
    <div class="container">
        <h2 class="heading text-center"><?php the_title(); ?></h2>
        <p>
            <?php while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
        </p>
    </div>
</div>
<div class="clearfix"> </div>

<?php get_footer(); ?>