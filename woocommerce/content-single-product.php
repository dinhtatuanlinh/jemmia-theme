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
$comments = get_comments( $args );
 
// echo '<pre style="color: #fff">';
// print_r($comments);
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
    <div id="detail">
        <div class="productwrapper">
			
			<div class="maindetail">
                <div class="pictures">
                    <div class="img-container mySwiper2" >
                        <div class="swiper-wrapper">

                            <div class="swiper-slide"><img src="<?php echo wp_get_attachment_url( $post_thumbnail_id); ?>" alt=""></div>
                            <?php 
                                for($i = 0; $i < count($image_ids); $i++){
                                    $image_link = wp_get_attachment_url( $image_ids[$i] );
                            ?>
                                    <div class="swiper-slide"><img id="img-<?php echo $i+1; ?>" class="" src="<?php echo $image_link; ?>" alt=""></div>
                            <?php }  ?>
                        </div>
                    </div>

                    <div thumbsSlider="" class="img-container mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="<?php echo wp_get_attachment_url( $post_thumbnail_id); ?>" alt=""></div>
                            <?php 
                                for($i = 0; $i < count($image_ids); $i++){
                                    $image_link = wp_get_attachment_url( $image_ids[$i] );
                            ?>
                                    <div class="swiper-slide"><img id="img-<?php echo $i+1; ?>" class="" src="<?php echo $image_link; ?>" alt=""></div>
                            <?php }  ?>
                        </div>
                    </div>
                </div>

                <div class="description">
                    <h1><?php the_title(); ?></h1>
                    <div class="review">
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
                    </div>
                    <div class="price">
                        <?php echo $product->get_price_html(); ?>
                    </div>
                    <div class="short-description">
                    <?php echo $product-> get_short_description(); ?>

                    </div>
                    <div class="product-detail-size-guide">
                        <h4 class="size-guide"><i class="fa fa-question-circle" aria-hidden="true"></i> <span class="caption">Không rõ size nhẫn của bạn? <a style="color: #1470cc;" href="https://jemmia.vn/huong-dan-do-ni.html" target="_blank">Hướng dẫn đo ni.</a></span></h4>
                    </div>
                    <div class="area_promotion">
                        <p style="text-align:left;height: 10px;"><b>YÊN TÂM MUA ONLINE</b></p>
                        <ul style="text-align:left;">
                            <li style="list-style-type: circle;">Điều kiện: Mua hàng và thanh toán online.</li>
                            <li style="list-style-type: circle;">Khách hàng đặt cọc 30% giá trị sản phẩm, phần còn lại sẽ thanh toán khi nhận hàng.</li>
                            <li style="list-style-type: circle;">Đổi sản phẩm trong 24 giờ (tính từ ngày trên hóa đơn). Đổi tại cửa hàng.</li>
                        </ul>		
                    </div>
                    <?php do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' ); ?>

                    <p class="hotline">HOTLINE TƯ VẤN: <a href="tel:0775 110 111">0775 110 111</a></p>
                    <div class="prdi-footer">
                        <ul class="list-unstyled list-inline prdi-features">
                            <li>
                                <i class="fa fa-money" aria-hidden="true"></i><span class="caption"> <a href="chinh-sach-doi-tra">Miễn phí đổi 3 ngày</a></span>
                            </li>
                            <li>
                                <i class="fa fa-certificate" aria-hidden="true"></i><span class="caption"> <a href="ve-precita/#7-cam-ket-yeu-thuong">Đủ chứng nhận chất lượng</a></span>
                            </li>
                            <li>
                                <i class="fa fa-credit-card" aria-hidden="true"></i><span class="caption">  <a href="chinh-sach-yeu-thuong-tra-gop-0-lai-suat">Trả góp 0% lãi suất</a></span>
                            </li>
                        </ul>
                    </div>


                    
                    
                </div>
            </div>
            <div class="policy">

                    <h3>JEMMIA cam kết</h3>
                    <ul class="prds-features">
                        <li>
                            <i class="fa fa-certificate" aria-hidden="true"></i> <span class="caption">Đủ chứng nhận chất lượng</span>
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
                            <i class="fa fa-circle" aria-hidden="true"></i> <span class="caption">Kim cương chuẩn Fancy Cut</span>
                        </li>
                        <li>
                            <i class="fa fa-suitcase" aria-hidden="true"></i> <span class="caption">Không gộp giá đá vào vàng</span>
                        </li>
                    </ul>


                    <h3>CAM KẾT CHẤT LƯỢNG</h3>
                    <ul class="clearfix" >
                        <li>Đá chủ Moissanite do Jemmia phân phối cam kết chất lượng và bảo hành 1 đổi 1 trọn đời.</li>
                        <li>Moissanite của Jemmia không chỉ có giác cắt và độ lửa giống kim cương đến 99% mà còn sở hữu độ tán sắc cùng độ cứng lên đến 9,5 Mosh xấp xỉ với độ cứng của kim cương thiên nhiên.</li>
                        <li>Với các tiêu chí này, Jemmia cam kết sẵn sàng thực hiện 1 đổi 1 trọn đời sản phẩm đá chủ Moissanite. Bất kể trường hợp vỡ đá, trầy xước đá hay mờ đá.</li>
                        <li>Đối với đá bị lỗi, khách hàng chỉ cần mang đầy đủ giấy tờ kiểm định đến cửa hàng là hoàn toàn được đổi mới miễn phí viên đá chủ mới cùng kích cỡ.</li>
                    </ul>


            </div>
            <div class="detail-description">
                <h3>Mô tả sản phẩm</h3>
                <?php
                    the_content();
                ?>
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
    </div>



    <div id="comment">

        <div class="commenttitle">
            <h2 class="woocommerce-Reviews-title"><?php echo $product_tabs['reviews']['title']; ?></h2>
        </div>
        <div class="comments">
            <ol>
                <?php
                    $comment_args = array(
                        'style' => 'ol',
                        'echo'              => true
                    );
                    wp_list_comments($comment_args, $comments);
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

            echo comment_form( $comments_args );

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
    <div class="new-products">
        <h3>Sản phẩm mới</h3>
        <?php
            // get hotdeal
            $terms = 'nhan-nam';
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 8,
                'orderby'    => 'id',
                'order'      => 'DESC',
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
                            <a href="<?php the_permalink(); ?>"><img src="<?php  echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
                        </div>
                        <div class="info-products">
                            <a href="<?php the_permalink(); ?>">
                                <strong><?php the_title(); ?></strong>
                                    
                                <div class="price">
                                <?php echo $product->get_price_html(); ?>
                                </div>
                            </a>
                            <?php
                            /**
                             * Hook: linh_addtocart.
                             *
                             * @hooked woocommerce_template_loop_add_to_cart - 5
                             */
                            do_action( 'linh_addtocart');
                        ?>
                            <div class="advice">tư vấn nhanh</div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();// reset lại đối tương wp_query
                    ?>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
    </div>
<?php do_action( 'woocommerce_after_single_product' ); ?>
