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
        <div class="banner-bdy sig">
            <div class="single">
                 <?php get_sidebar( $name ); ?>
                <div class="shop"> <!--shop start-->
                    <h3 class="single-shoptitle">Shop</h3>
                    <div class="shop-box">
                        <div class="shop-content">
                           <?php echo post_custom('Shopテキスト'); ?>
                        </div>
                    </div>
                </div>
            </div><!--shop end-->
            
                    <div class="staff"> <!--staff start-->
                    <h3 class="single-shoptitle">Staff</h3>
                    <div class="staff-box">
                        <div class="gallery-staff">
                            <?php echo post_custom('Staff_1'); ?>
                            <?php echo post_custom('Staff_2'); ?>
                            <?php echo post_custom('Staff_3'); ?>
                            <?php echo post_custom('Staff_4'); ?>
                        </div>
                        </div>
            </div><!--staff end-->
            
                    <div class="price"> <!--price start-->
                    <h3 class="single-shoptitle">Price</h3>
                    <div class="price-box">
                        <div class="price-list">
                         <table>
                            <tr>
                              <th>会員種別</th>
                              <th>会費</th>
                            </tr>
                            <tr>
                              <td><?php echo post_custom('会員種別_1'); ?></td>
                              <td><?php echo post_custom('会費_1'); ?>円</td>
                            </tr>
                            <tr>
                              <td><?php echo post_custom('会員種別_2'); ?></td>
                              <td><?php echo post_custom('会費_2'); ?>円</td>
                            </tr>
                            <tr>
                              <td><?php echo post_custom('会員種別_3'); ?></td>
                              <td><?php echo post_custom('会費_3'); ?>円</td>
                            </tr>
                            <tr>
                              <td><?php echo post_custom('会員種別_4'); ?></td>
                              <td><?php echo post_custom('会費_4'); ?>円</td>
                            </tr>
                            <tr>
                              <td><?php echo post_custom('会員種別_5'); ?></td>
                              <td><?php echo post_custom('会費_5'); ?>円</td>
                            </tr>
                          </table>
                        </div>
                        </div>
            </div><!--price end-->
            
                    <div class="address"> <!--Address start-->
                    <h3 class="single-shoptitle">Address</h3>
                    <div class="address-box">
                        <div class="custmfield">
                            <div class="custm-jusho"><h4 class="custmfield-title"><span class="address-title">住所</span><?php echo post_custom('住所'); ?></div></h4>
                            <h4 class="custmfield-title"><span class="address-title">アクセス</span><?php echo post_custom('アクセス'); ?></h4>
                            <h4 class="custmfield-title"><span class="address-title">電話番号</span><?php echo post_custom('電話番号'); ?></h4>
                        </div>
                        <div class="googlemap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1755.56395052868!2d139.68505570703442!3d35.695683380190935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f3ede8c993bd%3A0x7dc6cd814c9aaa14!2z6KW_5paw5a6_44OR44Os44K544OT44Or!5e0!3m2!1sja!2sjp!4v1601221651000!5m2!1sja!2sjp" width="741" height="280" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="shop-btn">
                        <div class="link-btn"><a href="" class="btn btn--orange">ご予約はこちら</a></div>
                        </div>
            </div><!--Address end-->

        </div>
    </div>
    <div class="clearfix"> </div>
</div>
</div>
<!-- /single -->
<div class="clearfix"> </div>
<?php get_footer(); ?>