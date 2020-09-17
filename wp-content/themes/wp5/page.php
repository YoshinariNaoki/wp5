<?php load_template(TEMPLATEPATH . '/header-2.php'); ?>

<div class="container">
    <h2 class="heading text-center"><?php the_title(); ?></h2>
    <div class="blog">
        <div class="col-md-6">
            <div class="blog_left single_left">
                <p>
                    <?php while(have_posts()): the_post(); ?>
                      <?php the_content(); ?>
                    <?php endwhile; ?>
                  </p>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>