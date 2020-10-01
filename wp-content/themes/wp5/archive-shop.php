<?php load_template(TEMPLATEPATH . '/header-3.php'); ?>

<div class="shop-single-section">
    <div class="container">
        <h2 class="heading text-center">店舗一覧</h2>
                    <div class="single"></div>
            <div class="shop-single">
                <div class="sing-img-text">
                      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?><!-- お決まりのループ開始処理 -->
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="shop-container">
                    <div class="shop-img">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(250,150) ); ?></a>
                    </div>
                    <div class="shop-text">
                        <div class="custm-title"><span class="field-1">住所</span><span class="field-title"><?php remove_filter ('acf_the_content', 'wpautop'); ?>
                        <?php the_field('jusho',$post->ID); ?></span></div>
                        <div class="custm-title"><span class="field-2">アクセス</span><span class="field-title"><?php the_field('access',$post->ID); ?></span></div>
                        <div class="custm-title"><span class="field-2">電話番号</span><span class="field-title"><a href="tel:<?php
                        $tel = get_field('tel');
                        $tel = str_replace(array('-', 'ー', '−', '―', '‐','(',')','（','）',' ','　'), '', $tel);
                        echo $tel; ?>"><?php echo post_custom('tel'); ?></a></span></div>
                        <div class="service-div"><span class="field-2">サービス</span><span class="field-title"><?php echo '<ul class="custom-styles">';
								echo get_the_term_list( $post->ID, 'service', '<li>', ' &ensp;</li><li>', ' &ensp;</li>' ); ?></span></div>
                    </div>
                </div>
            <?php endwhile; // end of the loop. ?><!-- ここまでサブループ。投稿がまだある場合は◯行目に戻る -->
            </div>
            <?php get_sidebar( $name ); ?>
            </div>
        <?php wp_reset_query(); ?><!-- 忘れずにリセットする必要がある -->
        <div class="clearfix"> </div>
    </div>
</div>
<!-- /single -->
<div class="clearfix"> </div>
<?php get_footer(); ?>