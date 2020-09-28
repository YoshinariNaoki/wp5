<?php load_template(TEMPLATEPATH . '/header-3.php'); ?>

<div class="shop-single-section">
    <div class="container">
        <h2 class="heading text-center">店舗一覧</h2>
                    <div class="single"></div>
                        <?php get_sidebar( $name ); ?>
        <!--single-page-->
                <?php
     $args = array(/* 配列に複数の引数を追加 */
     'post_type' => 'post', /* 投稿タイプを指定 */
     'posts_per_page' => 6, /* 表示するページ数 */
     'paged' => $paged, /* WP-PageNaviプラグイン用 */
     ); ?>
    <?php query_posts( $args ); ?><!-- 上で指定したクエリ（問い合わせ内容）の指定 -->
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?><!-- お決まりのループ開始処理 -->
            <div class="shop-single">
                <div class="sing-img-text">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="shop-container">
                    <div class="shop-img">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(250,150) ); ?></a>
                    </div>
                    <div class="shop-text">
                        <p class="shop-text-excerpt"><?php echo get_the_excerpt(); ?></p>
                    </div>
                    </div>
                </div>
            </div>
        <?php endwhile; // end of the loop. ?><!-- ここまでサブループ。投稿がまだある場合は◯行目に戻る -->
        <?php wp_reset_query(); ?><!-- 忘れずにリセットする必要がある -->
        <div class="clearfix"> </div>
    </div>
</div>
<!-- /single -->
<div class="clearfix"> </div>
<?php get_footer(); ?>