<?php
/*
Template Name: archive
*/
?>

<?php load_template(TEMPLATEPATH . '/header-2.php'); ?>



<div class="blog-section">
    <div class="container">
        <h2 class="heading text-center">Blogs</h2>
        <?php
$args = array(/* 配列に複数の引数を追加 */
     'post_type' => 'post', /* 投稿タイプを指定 */
     'posts_per_page' => 6, /* 表示するページ数 */
     'paged' => $paged, /* WP-PageNaviプラグイン用 */
); ?>
<?php query_posts( $args ); ?><!-- 上で指定したクエリ（問い合わせ内容）の指定 -->
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?><!-- お決まりのループ開始処理 -->
         <div class="blog-post-grids">
        <div class="blog-post">
       <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
       <p>日付:<a href="<?php the_permalink(); ?>"><time><?php echo get_the_date('Y年m月d日'); ?></time></a></p>
        <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(356,218) ); ?></a></div>
        <div class="admin-tag">
       <div><p class="erat"><?php echo get_the_excerpt(); ?></p></div>
        <a href="<?php echo home_url(); ?>/single" class="hvr-shutter-in-horizontal more">Readmore</a>
        </div>
  </div>
  </div>
<?php endwhile; // end of the loop. ?><!-- ここまでサブループ。投稿がまだある場合は◯行目に戻る -->
<?php wp_pagenavi(); ?><!-- #WP-PageNaviプラグイン用タグ -->
<?php wp_reset_query(); ?><!-- 忘れずにリセットする必要がある -->
  </div>
  </div>


<?php get_footer(); ?>