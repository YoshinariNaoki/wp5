<?php
/*
Template Name: single
*/
?>
<?php load_template(TEMPLATEPATH . '/header-3.php'); ?>

<div class="shop-section">
    <div class="container">
        <h2 class="shop-header-title heading"><?php the_title(); ?></h3>
        <!--single-page-->
        <div class="singl-box">
        <div class="banner-bdy sig">
            <div class="single">
                <div class="shop"> <!--shop start-->
                    <h3 class="single-shoptitle">Shop</h3>
                    <div class="shop-box">
                        <div class="shop-photo">
                        <?php the_content(); ?>
                        </div>
                        <div class="shop-textbox">
                           <p class="shop-text"><?php echo post_custom('shop'); ?></div>
                        </div>
                    </div>
                </div>
            </div><!--shop end-->
            
                    <div class="staff"> <!--staff start-->
                    <h3 class="single-shoptitle">Staff</h3>
                    <div class="staff-box">
                        <div class="gallery-staff">
                            <?php
                            $image = wp_get_attachment_image_src(get_field('staff_1'), 'full');
                            ?>
                            <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('staff_1')) ?>" />
                            
                            <?php
                            $image = wp_get_attachment_image_src(get_field('staff_2'), 'full');
                            ?>
                            <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('staff_2')) ?>" />
                            
                            <?php
                            $image = wp_get_attachment_image_src(get_field('staff_3'), 'full');
                            ?>
                            <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('staff_3')) ?>" />
                            
                            <?php
                            $image = wp_get_attachment_image_src(get_field('staff_4'), 'full');
                            ?>
                            <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('staff_4')) ?>" />
                        </div>
                        </div>
            </div><!--staff end-->
            
                    <div class="price"> <!--price start-->
                    <h3 class="single-shoptitle">Price</h3>
                    <div class="price-box">
                        <div class="price-list">
                           <?php echo apply_filters('the_content', get_post_meta($post->ID, 'price', true)); ?>
                        </div>
                        </div>
            </div><!--price end-->
            
                    <div class="address"> <!--Address start-->
                    <h3 class="single-shoptitle">Address</h3>
                    <div class="address-box">
                        <div class="custmfield">
                            <div class="custm-jusho"><h4 class="custmfield-title"><span class="address-title">住所</span><?php echo post_custom('jusho'); ?></div>
                            <h4 class="custmfield-title"><span class="address-title">アクセス</span><?php echo post_custom('access'); ?></h4>
                            <h4 class="custmfield-title"><span class="address-title">電話番号</span><?php echo post_custom('tel'); ?></h4>
                        </div>
                        <div class="googlemap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1755.56395052868!2d139.68505570703442!3d35.695683380190935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f3ede8c993bd%3A0x7dc6cd814c9aaa14!2z6KW_5paw5a6_44OR44Os44K544OT44Or!5e0!3m2!1sja!2sjp!4v1601221651000!5m2!1sja!2sjp" width="100%" height="280" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="shop-btn">
                        <div class="link-btn"><a href="" class="btn btn--orange">ご予約はこちら</a></div>
                        </div>
            </div><!--Address end-->
        </div>
    </div>
    <?php get_sidebar( $name ); ?>
</div>
</div>
<!-- /single -->
<div class="clearfix"> </div>
<?php get_footer(); ?>