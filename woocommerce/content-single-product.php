<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$image_ids = $product->get_gallery_image_ids();

$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();
$average      = $product->get_average_rating();
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

$args = array(
    'post_id' => $product->get_id(),
    'status' => 'approve',
);
$comments = get_comments( $args );// trả về một mảng các comment nếu có biến count = true trong args truyền vào thì sẽ trả về số lượng các phần tử của mảng
 
// echo '<pre style="color: #000">';
// print_r($product->get_regular_price());
// echo '<br>';
// print_r($product->get_sale_price());
// echo '<br>';
// print_r($product->get_price());

// echo '</pre>';

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

?>
<?php woocommerce_breadcrumb(); ?>
<div id="detail">
    <div class="productwrapper">

        <div class="maindetail">
            <h1 id="product_name" class="desktop-hide tablet-hide">
                <?php woocommerce_show_product_sale_flash(); ?><?php the_title(); ?></h1>
            <p class="code desktop-hide tablet-hide"><?php echo get_post_meta( $product->get_id(), 'code', true ); ?>
            </p>
            <div class="product-quickview">
                <div class="pictures" id="productSlider">


                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                        class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper-slide-container zoom" onmousemove="zoom(event)"
                                    style="background:url(<?php  echo wp_get_attachment_url( $post_thumbnail_id); ?>)">
                                    <img src="<?php  echo wp_get_attachment_url( $post_thumbnail_id); ?>" alt="">
                                    <!-- <img src="<?php  // echo get_new_img_url(wp_get_attachment_url( $post_thumbnail_id), 1000, 1000); ?>" alt=""> -->
                                </div>
                            </div>
                            
                            <?php 
                            
                            for($i = 0; $i < count($image_ids); $i++){
                                $image_link = wp_get_attachment_url( $image_ids[$i] );
                                // $image_link = get_new_img_url(wp_get_attachment_url( $image_ids[$i] ), 1000, 1000);
                            ?>
                            <div class="swiper-slide">
                                <div class="swiper-slide-container zoom" onmousemove="zoom(event)"
                                    style="background:url(<?php echo $image_link; ?>)">
                                    <img id="img-<?php echo $i+1; ?>" class="" src="<?php echo $image_link; ?>" alt="">
                                </div>
                            </div>
                            <?php }  ?>
                            <?php if(!empty(get_post_meta( $product->get_id(), 'youtube-video', true ))){ ?>
                            <div class="swiper-slide">
                                <div class="swiper-slide-container">
                                    <?php echo get_post_meta( $product->get_id(), 'youtube-video', true ); ?>
                                    <!-- <img src="<?php  // echo get_new_img_url(wp_get_attachment_url( $post_thumbnail_id), 1000, 1000); ?>" alt=""> -->
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper-slide-container">
                                    <!-- <img src="<?php //echo wp_get_attachment_url( $post_thumbnail_id); ?>" alt=""> -->
                                    <img src="<?php  echo get_new_img_url(wp_get_attachment_url( $post_thumbnail_id), 120, 120); ?>"
                                        alt="">
                                </div>
                            </div>
                            <?php 
                                for($i = 0; $i < count($image_ids); $i++){
                                    // $image_link = wp_get_attachment_url( $image_ids[$i] );
                                    $image_link = get_new_img_url(wp_get_attachment_url( $image_ids[$i] ), 120, 120);
                            ?>
                            <div class="swiper-slide">
                                <div class="swiper-slide-container">
                                    <img id="img-<?php echo $i+1; ?>" class="" src="<?php echo $image_link; ?>" alt="">
                                </div>
                            </div>
                            <?php }  ?>
                            <?php if(!empty(get_post_meta( $product->get_id(), 'youtube-video-img', true ))){ ?>
                            <div class="swiper-slide">
                                <div class="swiper-slide-container">
                                    <img src="<?php  echo get_post_meta( $product->get_id(), 'youtube-video-img', true ); ?>"
                                        alt="">
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>




                </div>

                <div class="description">
                    <h1 id="product_name" class="mobile-hide">
                        <?php woocommerce_show_product_sale_flash(); ?><?php the_title(); ?></h1>
                    <p class="code mobile-hide"><?php echo get_post_meta( $product->get_id(), 'code', true ); ?></p>
                    <!-- <div class="review">
                    <?php
                            for($i = 0; $i < floor($average); $i++){
                                ?>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <?php
                                
                            }
                            if($average - floor($average) !== 0){
                                ?>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    <?php
                            }
                            if(5 - ceil($average) !== 0){
                                for($i = 0; $i < (5 - ceil($average)); $i++){ 
                                    ?>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <?php
                                }
                            }
                        ?>
                    <span><?php echo $review_count; ?> reviews</span>
                    </div> -->
                    <div class="price">
                        <div class="price-detail">
                            <?php echo $product->get_price_html(); ?>
                        </div>
                        <div class="save">
                            <?php                  
                                
                                if($product->get_sale_price()){
                                    $reduce = $product->get_regular_price() - $product->get_sale_price();
                                    echo 'Tiết kiệm: ' . number_format( $reduce, 0, ".", "," ) . 'đ | ';
                                }
                                echo 'Freeship';
                            ?>

                        </div>
                    </div>
                    <?php woocommerce_template_single_add_to_cart(); // template của nut thêm vào giỏ đặt tại 2 nơi là single-product/add-to-cart/simple.php và single-product/add-to-cart/variation-add-to-cart-button.php dòng 49
                 ?>
                    <div class="product-detail-size-guide">
                        <h4 class="size-guide"><i class="fa fa-question-circle" aria-hidden="true"></i><span
                                class="caption">Không rõ size nhẫn của bạn? <a style="color: #1470cc;"
                                    href="https://jemmia.vn/huong-dan-do-ni.html" target="_blank">Hướng dẫn đo
                                    ni.</a></span></h4>
                        <h4 class="size-guide"><i class="icon icon-diamond-round"></i><span class="caption">Cam kết về
                                kim cương Jemmia <a style="color: #1470cc;"
                                    href="https://jemmia.vn/cam-ket-ve-kim-cuong-jemmia" target="_blank">Xem
                                    ngay!</a></span>
                        </h4>
                    </div>
                    <div class="shipping">
                        <p>Phí <strong>bảo hiểm</strong> vận chuyển: <span>miễn phí</span> <del>1,000,000đ</del></p>
                        <p>Hình thức: <span>Giao hàng đảm bảo</span></p>
                    </div>
                    <p class="hotline">
                        <span>HOTLINE TƯ VẤN: <a href="tel:0775 110 111">0775 110 111</a></span>
                        <br>
                        Một <strong>chuyên gia diamond</strong> sẽ gặp bạn trong 05p!
                    </p>

                    <?php //woocommerce_template_single_excerpt(); ?>
                </div>
            </div>
            <div class="detail-description">
                <div class="short-description">
                    <h3>Thông số sản phẩm</h3>
                    <p class="code mobile-hide"><?php echo get_post_meta( $product->get_id(), 'warning', true ); ?></p>
                <?php
                    $pos = strpos($product->get_short_description(), '{');
                        if($pos === false){
                            echo $product-> get_short_description();
                            ?>
                </div>
                <div class='left'>
                    <h3>Mô tả sản phẩm</h3>
                    
                    <?php
                        }else{
                        $end = strpos($product->get_short_description(), '}');
                        $spec = substr($product->get_short_description(), $pos + 1, $end -1);
                        $specArr = explode("@", $spec);
                    ?>
                    <table class='spec'>
                        <tr>
                            <td class="spec_name">Thương Hiệu</td>
                            <td>Jemmia</td>
                        </tr>
                        <tr>
                            <td class="spec_name">Loại vàng</td>
                            <td><?php echo $specArr[0]; ?></td>
                        </tr>
                        <tr>
                            <td class="spec_name">Tuổi vàng</td>
                            <td><?php echo $specArr[1]; ?></td>
                        </tr>
                        <tr>
                            <td class="spec_name">Trọng lượng vàng</td>
                            <td><?php echo $specArr[2]; ?></td>
                        </tr>
                        <tr>
                            <td class="spec_name">Loại đá tấm</td>
                            <td><?php echo $specArr[3]; ?></td>
                        </tr>
                        <tr>
                            <td class="spec_name">Loại đá chủ</td>
                            <td><?php echo $specArr[4]; ?></td>
                        </tr>
                        <tr>
                            <td class="spec_name">Số lượng đá tấm</td>
                            <td><?php echo $specArr[5]; ?></td>
                        </tr>
                        <tr>
                            <td class="spec_name">Trọng lượng đá tấm(ct)</td>
                            <td><?php echo $specArr[6]; ?></td>
                        </tr>
                    </table>
                    <?php
                            }
                    ?>


                    <?php
                        the_content();
                    ?>
                </div>
                <!-- <div class="right mobile-hide">
                    <div class="description">
                        <h2><?php the_title(); ?></h2>

                    </div>
                    <div class="price">
                        <?php echo $product->get_price_html(); ?>
                    </div>

                    <div class="product-detail-size-guide">
                        <h4 class="size-guide"><i class="fa fa-question-circle" aria-hidden="true"></i> <span
                                class="caption">Không rõ size nhẫn của bạn? <a style="color: #1470cc;"
                                    href="https://jemmia.vn/huong-dan-do-ni.html" target="_blank">Hướng dẫn đo
                                    ni.</a></span></h4>
                    </div>
                    <?php woocommerce_template_single_add_to_cart(); // template của nut thêm vào giỏ đặt tại single-product/add-to-cart/simple.php dòng 49
                    ?>

                    <p class="hotline">HOTLINE TƯ VẤN: <a href="tel:0775 110 111">0775 110 111</a></p>
                </div> -->
            </div>
        </div>
        <div class="policy">
            <div class="box">
                <div class="trum-kim-cuong">
                    <img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/change-color-04.png" alt="">
                    <h2>Kim Cương Siêu Đỉnh</h2>
                </div>
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <p>Chât lượng/dịch vụ</p>
                </div>
                <p class="trust"><i class="fa fa-certificate" aria-hidden="true"></i> 100% an tâm mua sắm</p>
                <div class="prdi-footer">
                    <ul class="list-unstyled list-inline prdi-features">
                        <li>
                            <i class="fa fa-money" aria-hidden="true"></i> <span class="caption">Miễn phí bảo hành 3
                                tháng</span>
                        </li>
                        <li>
                            <i class="fa fa-certificate" aria-hidden="true"></i> <span class="caption">Đủ chứng nhận
                                chất lượng</span>
                        </li>
                        <li>
                            <i class="fa fa-credit-card" aria-hidden="true"></i> <span class="caption">Trả góp 0% lãi
                                suất</span>
                        </li>
                    </ul>
                </div>
                <div class="area_promotion">
                    <p style="text-align:left"><b>YÊN TÂM MUA ONLINE</b></p>
                    <ul style="text-align:left;">
                        <li style="list-style-type: circle;">Điều kiện: Mua hàng và thanh toán online.</li>
                        <li style="list-style-type: circle;">Khách hàng đặt cọc 30% giá trị sản phẩm, phần còn lại
                            sẽ
                            thanh toán khi nhận hàng.</li>
                        <li style="list-style-type: circle;">Đổi sản phẩm trong 24 giờ (tính từ ngày trên hóa đơn).
                            Đổi
                            tại cửa hàng.</li>
                    </ul>
                </div>
                <h3>CAM KẾT CHẤT LƯỢNG</h3>
                <ul class="clearfix">
                    <li><a href="https://jemmia.vn/cam-ket-ve-chat-luong-vo-nhan-jemmia.html">Cam kết vỏ nhẫn</a></li>
                    <li><a href="https://jemmia.vn/cam-ket-ve-kim-cuong-jemmia">Cam kết về kim cương</a></li>
                    <li><a href="https://jemmia.vn/kim-cuong-moissanite-bao-hanh-1-doi-1-tron-doi.html">Cam kết đá chủ
                            Moissanite</a></li>
                </ul>
                <div class="price">
                    <div class="price-detail">
                        <?php echo $product->get_price_html(); ?>
                    </div>
                    <div class="save">
                        <?php                  
                                
                                if($product->get_sale_price()){
                                    $reduce = $product->get_regular_price() - $product->get_sale_price();
                                    echo 'Tiết kiệm: ' . number_format( $reduce, 0, ".", "," ) . 'đ | ';
                                }
                                echo 'Freeship';
                            ?>

                    </div>
                </div>
                <div class="quickContact">
                    <div class="zalo"
                        onclick="autoAdsMaxLeadOpenPopupByChannelName('zalo', true, false);autoAdsMaxLeadSaveAction('zalo','action');">
                        <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/zalo-1-logo-svg-vector.svg" alt="">
                        <p>Chat ngay</p>
                    </div>
                    <div class="messenger"
                        onclick="autoAdsMaxLeadOpenPopupByChannelName('facebook', true, false);autoAdsMaxLeadSaveAction('facebook','action');">
                        <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/PikPng.com_new-icon-png_2592784.png" alt="">
                        <p>Chat ngay</p>
                    </div>
                </div>
                <?php woocommerce_template_single_add_to_cart(); // template của nut thêm vào giỏ đặt tại 2 nơi là single-product/add-to-cart/simple.php và single-product/add-to-cart/variation-add-to-cart-button.php dòng 49
                 ?>
                <div class="product-detail-size-guide">
                    <h4 class="size-guide"><i class="fa fa-question-circle" aria-hidden="true"></i><span
                            class="caption">Không rõ size nhẫn của bạn? <a style="color: #1470cc;"
                                href="https://jemmia.vn/huong-dan-do-ni.html" target="_blank">Hướng dẫn đo
                                ni.</a></span></h4>
                    <h4 class="size-guide"><i class="icon icon-diamond-round"></i><span class="caption">Cam kết về kim
                            cương Jemmia <a style="color: #1470cc;" href="https://jemmia.vn/cam-ket-ve-kim-cuong-jemmia"
                                target="_blank">Xem ngay!</a></span>
                    </h4>
                </div>
                <div class="shipping">
                    <p>Phí <strong>bảo hiểm</strong> vận chuyển: <span>miễn phí</span> <del>1,000,000đ</del></p>
                    <p>Hình thức: <span>Giao hàng đảm bảo</span></p>
                </div>
                <p class="hotline">
                    <span>HOTLINE TƯ VẤN: <a href="tel:0775 110 111">0775 110 111</a></span>
                    <br>
                    Một <strong>chuyên gia diamond</strong> sẽ gặp bạn trong 05p!
                </p>
            </div>
            <!-- <h3>JEMMIA cam kết</h3>
            <ul class="prds-features">
                <li>
                    <i class="fa fa-certificate" aria-hidden="true"></i> <span class="caption">Đủ chứng nhận chất
                        lượng</span>
                </li>
                <li>
                    <i class="fa fa-tint" aria-hidden="true"></i> <span class="caption">Đúng hàm lượng</span>
                </li>
                <li>
                    <i class="fa fa-eye" aria-hidden="true"></i> <span class="caption">Đúng trọng lượng</span>
                </li>
                <li>
                    <i class="fa fa-usd" aria-hidden="true"></i> <span class="caption">Đúng chất lượng kim cương</span>
                </li>
                <li>
                    <i class="fa fa-circle" aria-hidden="true"></i> <span class="caption">Kim cương chuẩn Fancy
                        Cut</span>
                </li>
                <li>
                    <i class="fa fa-suitcase" aria-hidden="true"></i> <span class="caption">Không gộp giá đá vào
                        vàng</span>
                </li>
            </ul> -->


        </div>

    </div>

    <?php
            /**
             * Hook: woocommerce_before_single_product_summary.
             *
             * @hooked woocommerce_show_product_sale_flash - 10
             * @hooked woocommerce_show_product_images - 20
             */
            // do_action( 'woocommerce_before_single_product_summary' );
            ?>

    <div class="summary entry-summary">
        <?php
                /**
                 * Hook: woocommerce_single_product_summary.
                 *
                 * @hooked woocommerce_template_single_title - 5
                 * @hooked woocommerce_template_single_rating - 10
                 * @hooked woocommerce_template_single_price - 10
                 * @hooked woocommerce_template_single_excerpt - 20
                 * @hooked woocommerce_template_single_add_to_cart - 30
                 * @hooked woocommerce_template_single_meta - 40
                 * @hooked woocommerce_template_single_sharing - 50
                 * @hooked WC_Structured_Data::generate_product_data() - 60
                 */
                // do_action( 'woocommerce_single_product_summary' );
                ?>
    </div>

    <?php
            /**
             * Hook: woocommerce_after_single_product_summary.
             *
             * @hooked woocommerce_output_product_data_tabs - 10
             * @hooked woocommerce_upsell_display - 15
             * @hooked woocommerce_output_related_products - 20
             */
            // do_action( 'woocommerce_after_single_product_summary' );
            ?>
</div>



<?php if(isset($product_tabs['reviews'])){; ?>
<div id="comment">

    <div class="commenttitle">
        <h2 class="woocommerce-Reviews-title">
            <?php 
            // kiểm tra bài viết có bật tính năng comment không
            
                echo $product_tabs['reviews']['title']; 
            
            
            ?>
        </h2>
    </div>
    <div class="comments">
        <ol>
            <?php
                    $comment_args = array(
                        'style' => 'ol',
                        'echo'              => true
                    );
                    wp_list_comments($comment_args, $comments); // hàm wp_list_comments() định dạng cho kiểu hiển thị các comment trong mảng $comments
                ?>
        </ol>
        <?php
            //Array
            $comment_send = 'Send';
            $comment_reply = 'Leave a Message';
            $comment_reply_to = 'Reply';
            
            $comment_author = 'Name';
            $comment_email = 'E-Mail';
            $comment_body = 'Comment';

            $comment_cookies_1 = ' By commenting you accept the';
            $comment_cookies_2 = ' Privacy Policy';

            
            $comment_cancel = 'Cancel Reply';
            $comments_args = array(
                //Define Fields
                'fields' => array(
                    //Author field
                    'author' => '<p class="comment-form-author"><br /><input id="author" name="author" aria-required="true" placeholder="' . $comment_author .'"></input></p>',
                    //Email Field
                    'email' => '<p class="comment-form-email"><br /><input id="email" name="email" placeholder="' . $comment_email .'"></input></p>',

                ),
                // Change the title of send button
                'label_submit' => __('Gửi đi' ),
                // Change the title of the reply section
                'title_reply' => __( $comment_reply ),
                // Change the title of the reply section
                'title_reply_to' => __( $comment_reply_to ),
                //Cancel Reply Text
                'cancel_reply_link' => __( $comment_cancel ),
                // Redefine your own textarea (the comment body).
                'comment_field' => '<p class="comment-form-comment"><br /><textarea id="comment" name="comment" aria-required="true" placeholder="' . $comment_body .'"></textarea></p>',

                // Remove "Text or HTML to be displayed after the set of comment fields".
                'comment_notes_after' => '',
                //Submit Button ID
                'id_submit' => __( 'comment-submit' ),
            );
            // comment_form( $comments_args );

            comment_form( $comments_args );

            ?>

    </div>

    <!-- <ul class="pagination">
            <li><span class="button disabled">Prev</span></li>
            <li><a href="#" class="page active">1</a></li>
            <li><a href="#" class="page">2</a></li>
            <li><a href="#" class="page">3</a></li>
            <li><span>&hellip;</span></li>
            <li><a href="#" class="page">8</a></li>
            <li><a href="#" class="page">9</a></li>
            <li><a href="#" class="page">10</a></li>
            <li><a href="#" class="button">Next</a></li>
        </ul> -->
</div>
<?php }; ?>
<!--<div class="new-products">
    <h3>Sản phẩm liên quan</h3>
    <?php
        // echo '<pre style="color: #000">';
        // print_r($product->get_category_ids()); // lấy id của các cat chưa sản phẩm này
        // echo '</pre>';

            $args = array(

                'post_type' => 'product',
                'posts_per_page' => 8,
                'orderby'    => 'rand',
                'order'      => 'DESC',
                'tax_query'             => array(
                    array(
                        'taxonomy'      => 'product_cat',
                        'field' => 'term_id', //This is optional, as it defaults to 'term_id'
                        'terms'         => $product->get_category_ids(),// lấy id của các cat chưa sản phẩm này
                        'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                    ),
                ),
                'hide_empty' => false,
                'has_password' => false,
            );
            $query = new WP_Query( $args );
        ?>
    <div class="cat-products">
        <div class="swiper-wrapper">
            <?php
                if ( $query->have_posts() ) :
                    while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                    $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
            ?>

            <div class="swiper-slide">
                <div class="img">
                    <a href="<?php the_permalink(); ?>"><img src="<?php  echo get_the_post_thumbnail_url(); ?>"
                            alt="<?php the_title(); ?>"></a>
                </div>
                <div class="info-products">
                    <a href="<?php the_permalink(); ?>">
                        <strong><?php the_title(); ?></strong>

                        <div class="price">
                            <?php echo $product->get_price_html(); ?>
                        </div>
                    </a>

                </div>
            </div>
            <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();// reset lại đối tương wp_query
                    ?>

        </div>

    </div>
</div>-->
<?php do_action( 'woocommerce_after_single_product' ); ?>
<script>
function zoom(e) {

    var zoomer = e.currentTarget;

    e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
    e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
    x = (offsetX / zoomer.offsetWidth) * 100
    y = (offsetY / zoomer.offsetHeight) * 100
    zoomer.style.backgroundPosition = x + "% " + y + "%";
}
</script>