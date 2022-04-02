<?php 
global $post;
get_header(); 
get_header('top');

$upload_dir = wp_upload_dir();
echo "abce";

?>


</div>
<div id="more">
    <div id="quick-menu">
        <div class="wrapper">
            <ul>
                <li>
                    <?php
                        $terms = 'nhan-nu';
                        $category = get_term_by('slug', $terms, 'product_cat');

                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );

                    ?>
                    <a href="<?php echo get_term_link( $category ); ?>">
                        <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/circle_nen-xanh_130x130_nhan-nu.png" alt="">
                        <p>Nhẫn nữ</p>
                    </a>
                </li>
                <li>
                    <?php
                        $terms = 'nhan-nam';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                    <a href="<?php echo get_term_link( $category ); ?>">
                        <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/circle_nen-xanh_130x130_nhan-nam.png" alt="">
                        <p>Nhẫn nam</p>
                    </a>
                </li>

                <li>
                    <?php
                        $terms = 'bong-tai';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                    <a href="<?php echo get_term_link( $category ); ?>">
                        <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/circle_nen-xanh_130x130_hoa-tai.png" alt="">
                        <p>bông tai</p>
                    </a>
                </li>
                <li>
                    <?php
                        $terms = 'mat-day-chuyen';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                    <a href="<?php echo get_term_link( $category ); ?>">
                        <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/circle_nen-xanh_130x130_day-chuyen.png" alt="">
                        <p>mặt dây chuyền</p>
                    </a>
                </li>
                <li>

                    <?php
                        $terms = 'lac-vong-tay';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                    <a href="<?php echo get_term_link( $category ); ?>">
                        <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/circle_nen-xanh_130x130_vong-tay.png" alt="">
                        <p>lắc vòng tay</p>
                    </a>
                </li>
                <li>
                    <?php
                        $terms = 'bo-trang-suc';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                    <a href="<?php echo get_term_link( $category ); ?>">
                        <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/circle_nen-xanh_130x130_bo-trang-suc.png" alt="">
                        <p>bộ trang sức</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div id="more-info">
        <div class="wrapper">
            <div class="post">
                <div class="wrap-title">Bạn hãy xem thêm</div>
                <div>
                    
                    <a class="view-more-item d-flex mb-3" target="_parent"
                        href="https://jemmia.vn/bang-gia-kim-cuong-tu-nhien">

                        <div class="title">Bảng giá kim cương lẻ</div>
                    </a>
                    <a class="view-more-item d-flex mb-0" target="_parent"
                        href="https://jemmia.vn/bang-gia-si-kim-cuong-gia">

                        <div class="title">Bảng giá kim cương sỉ</div>
                    </a>
                    <a class="view-more-item d-flex mb-3" target="_parent"
                        href="https://jemmia.vn/trum-kim-cuong-si">

                        <div class="title">Vì sao nên chọn mua kim cương sỉ tại Jemmia?</div>
                    </a>
                    <a class="view-more-item d-flex mb-0" target="_parent"
                        href="https://jemmia.vn/ke-mao-danh-kim-cuong">

                        <div class="title">Moissanite kẻ mạo danh kim cương</div>
                    </a>

                </div>
            </div>
            <div class="products">

                <div class="wrap-title">Có thể bạn quan tâm</div>
                <div class="wrap-item">
                    <a style="border-bottom: 1px solid #E3E4E5" target="_blank"
                        href="https://jemmia.vn/trang-suc-vang/nhan-vang/nhan-cau-hon/">
                        <div class="interest-image">
                            <img class="picture-style"
                                src="https://cdn.autoads.asia/maxlead/CustomWebsite/jemmia/imgs/category/interest-ring.png">
                        </div>
                        <div class="interest-content">
                            <div class="title-child">Xem nhẫn cầu hôn 2021</div>
                            <div class="title">XEM NGAY</div>

                        </div>
                    </a>
                    <a target="_blank" href="https://jemmia.vn/jemmia-diamond/kim-cuong-tu-nhien/trang-suc-kim-cuong-tu-nhien/nhan-kim-cuong/vo-nhan-kim-cuong-tu-nhien">
                        <div class="interest-image">
                            <img class="picture-style"
                                src="https://cdn.autoads.asia/maxlead/CustomWebsite/jemmia/imgs/category/interest-diamond.png">
                        </div>
                        <div class="interest-content">
                            <div class="title-child">Xem giá vỏ nhẫn</div>

                            <div class="title">XEM NGAY</div>
                        </div>

                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
<div id="second-main">
    <div class="wrapper">
        <div id="contentBlog">
            <div class="heading">
                <h1><?php the_title(); ?></h1>
                <!-- <div class="date">Đăng vào: <?php echo get_the_date() ; ?></div> -->
            </div>
            <div class="main-content">
                <?php the_content(); ?>

            </div>

        </div>
        <?php
            get_sidebar();
        ?>
    </div>
    <?php
            $category_detail=wp_get_post_categories( $post->ID );
                // echo '<pre style="color: #000">';
                // print_r($category_detail); // lấy id của các cat chưa sản phẩm này
                // echo '</pre>';
            ?>
    <div id="blog">
        <div class="wrapper">
            <h2>Bài viết liên quan</h2>
            <div class="blog-wrapper">

                <div class="swiper-wrapper">
                    <?php
                        $args = array(
                            'post_status' => 'publish',
                            'type' => 'post',
                            'tax_query'             => array(
                                array(
                                    'taxonomy'      => 'category',
                                    'field' => 'term_id', //This is optional, as it defaults to 'term_id'
                                    'terms'         => 'truoc-khi-mua-moissanite',// lấy id của các cat chưa sản phẩm này
                                    'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                                ),
                            ),
                            'numberposts'      =>8 ,
                            'category'         => 0,
                            'orderby'          => 'rand',
                            'order' => 'DESC',
                        );
                        $blogs = get_posts($args);
                        // echo count($blogs);
                        // echo '<pre style="color: #fff">';
                        // print_r($blogs[0]);
                        // echo '</pre>';
                        if($blogs){
                            foreach($blogs as $blog){
                                setup_postdata( $blog );
                                $author_id = $blog->post_author;
                                ?>
                    <div class="swiper-slide">

                        <a href="<?php echo get_permalink( $blog->ID); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url($blog->ID,'full'); ?>"
                                alt="<?php echo $blog->post_title; ?>">
                            <div class="blog-title"><?php echo $blog->post_title; ?></div>
                            <!-- <div class="date">Đăng vào: <?php //echo explode(' ', $blog->post_date)[0] ; ?></div>
                                        <div class="author">Bởi: <?php //the_author_meta( 'user_nicename' , $author_id ); ?> </div> -->
                            <p class="short"><?php echo explode("\n", wordwrap(get_the_excerpt($blog->ID), 150))[0]; ?>...</p>
                        </a>

                    </div>
                    <?php
                            }
                            wp_reset_postdata();
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php setPostViews(get_the_ID());//đếm số lượt xem bài post ?>


<?php 

get_footer(); 
?>