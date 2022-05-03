<?php 
get_header(); 
get_header('top');
get_header('banner');
$upload_dir = wp_upload_dir();

// echo '<pre style="color: #fff">';
// print_r($upload_dir['url']);
// echo '</pre>';
?>


</div>
<div id="main" class="main-index">
    <div id="special">
        <div class="wrapper">
            <div><a href="https://jemmia.vn/bang-gia-kim-cuong-tu-nhien"><img
                        src="<?php echo JEMMIA_THEME_URL_IMG; ?>/traiduoi20211217.jpg" alt=""></a></div>
            <div><a href="https://jemmia.vn/trang-suc-kim-cuong-moissanite/nhan-moissanite"><img
                        src="<?php echo JEMMIA_THEME_URL_IMG; ?>/giuaduoi20211217.jpg" alt=""></a></div>
            <div><a href="https://jemmia.vn/trang-suc-vang/nhan-vang/nhan-cau-hon/nhan-cau-hon-kim-cuong "><img
                        src="<?php echo JEMMIA_THEME_URL_IMG; ?>/phaiduoi20211217.jpg" alt=""></a></div>
        </div>
    </div>

    <div id="quick-menu">
        <div class="wrapper">
            <h2>Danh mục ưa chuộng</h2>
            <div class="mySwiper3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <?php
                        $terms = 'mat-day-chuyen';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/day-chuyen.png" alt="">
                            <p>Dây chuyền</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <?php
                        $terms = 'bong-tai';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/hoa-tai.png" alt="">
                            <p>Bông tai</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <?php
                        $terms = 'nhan-nu';
                        $category = get_term_by('slug', $terms, 'product_cat');

                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );

                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/nhan-nu.png" alt="">
                            <p>Nhẫn nữ</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <?php
                        $terms = 'nhan-cuoi';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/nhan-cuoi.png" alt="">
                            <p>Nhẫn cưới</p>
                        </a>
                    </div>
                    <div class="swiper-slide"><?php
                        $terms = 'nhan-nam';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/nhan-nam.png" alt="">
                            <p>Nhẫn nam</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <?php
                        $terms = 'bo-trang-suc';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/bo-trang-suc.png" alt="">
                            <p>Bộ trang sức</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <?php
                        $terms = 'nhan-cau-hon';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/nhan-cau-hon.png" alt="">
                            <p>Nhẫn cầu hôn</p>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <?php
                        $terms = 'lac-vong-tay';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                        <a href="<?php echo get_term_link( $category ); ?>">
                            <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/vong-tay.png" alt="">
                            <p>Lắc vòng tay</p>
                        </a>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </div>

    <div id="hotdeal">
        <div class="wrapper">
            <div class="hd-banner"> <img data-src="<?php echo JEMMIA_THEME_URL_IMG; ?>/banner/hot-deal_50.png"
                    alt="hot deal" class="mobile-hide tablet-hide lazyload">
                <img data-src="<?php echo JEMMIA_THEME_URL_IMG; ?>/banner/hot-deal_50_355x145.png" alt="hot deal"
                    class=" desktop-hide lazyload">
            </div>
            <div class="hd-products">
                <div class="swiper-wrapper">
                    <?php
                        // get hotdeal
                        $args = array(
                            'post_type' => 'product',
                            // 'term_id'       => 19 ,
                            'product_tag' => 'hot-deal',
                            'orderby'    => 'rand',
                            'order'      => 'DESC',
                            'hide_empty' => false,
                            'post_status' => 'publish',
                        );
                        $query = new WP_Query( $args );

                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>
                    <div class="swiper-slide">
                        <div class="img">
                            <?php do_action('woocommerce_sale_flash'); ?>
                            <a href="<?php the_permalink(); ?>">
                                <img class="lazyload" data-src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 400, 400); ?>" alt="<?php the_title(); ?>">
                            </a>
                        </div>
                        <div class="info-products">
                            <a href="<?php the_permalink(); ?>">
                                <strong><?php the_title(); ?></strong>
                                <p><?php echo get_post_meta( $product->get_id(), 'code', true ); ?></p>
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
                            // do_action( 'linh_addtocart');
                            ?>
                            <!-- <div class="advice"><img data-src="<?php //echo JEMMIA_THEME_URL_ICON; ?>/PikPng.com_new-icon-png_2592784.png" alt=""></div> -->
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
    </div>
    <div id="show-product">
    <div class="wrapper">
            <?php
            // get hotdeal
            
            $terms = 'nhan-nu';

                $args = array(
                    'post_status' => 'publish',
                    'post_type' => 'product',
                    
                    // 'term_id'       => 19 ,
                    'tax_query' => array(
                        'relation' => 'AND',
                        array (
                            'taxonomy' => 'product_cat',
                            'field' => 'slug',
                            'terms' => $terms,
                        ),
                        // array (
                        //     'taxonomy' => 'product_tag',
                        //     'field' => 'name',
                        //     'terms' => 'white-bg',
                        // )
                    ),
                    'posts_per_page' => 4,
                    'orderby'    => 'date',
                    'order'      => 'DESC',
                    'hide_empty' => false,
                );
                $query = new WP_Query( $args );

            $category = get_term_by('slug', $terms, 'product_cat');
            // echo get_term_link( $category );
        

            ?>
            <div class="prds-banner">
                <img class="lazyload" data-src="<?php echo JEMMIA_THEME_URL_IMG; ?>/LO1-Nhan-Nu.jpg" alt="">
            </div>
            <a href="<?php echo get_term_link( $category ); ?>">
                <h2>nhẫn nữ</h2>
            </a>

            <div class="cat-products mobile-hide">
                <div class="swiper-wrapper">
                    <?php
                    
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>
                    <div class="swiper-slide">
                        <div class="img">
                            <?php do_action('woocommerce_sale_flash'); ?>
                            <a class="link" href="<?php the_permalink(); ?>">
                                <img class="lazyload" data-src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 400, 400); ?>" alt="<?php the_title(); ?>">
                            </a>
                            <?php
                                /**
                                 * Hook: linh_addtocart.
                                 *
                                 * @hooked woocommerce_template_loop_add_to_cart - 5
                                 */
                                do_action( 'linh_addtocart');
                            ?>
                        </div>
                        <div class="info-products">
                            <a href="<?php the_permalink(); ?>">
                                <strong><?php the_title(); ?></strong>
                                <p><?php echo get_post_meta( $product->get_id(), 'code', true ); ?></p>
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
                            // do_action( 'linh_addtocart');
                            ?>
                            <!-- <div class="advice"><img data-src="<?php //echo JEMMIA_THEME_URL_ICON; ?>/PikPng.com_new-icon-png_2592784.png" alt=""></div> -->
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
            <div class="mobile-products tablet-hide desktop-hide">
                <div class="mobile-products-wrapper">
                    <?php
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>

                    <div class="swiper">
                        <a class="link" href="<?php the_permalink(); ?>">
                            <div class="img">
                                <?php
                                    do_action('woocommerce_sale_flash');
                                    
                                ?>
                                <img class="lazyload"
                                    data-src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 400, 400); ?>"
                                    alt="<?php the_title(); ?>">
                                <?php
                                /**
                                 * Hook: linh_addtocart.
                                 *
                                 * @hooked woocommerce_template_loop_add_to_cart - 5
                                 */
                                    do_action( 'linh_addtocart');
                                ?>
                            </div>
                        </a>
                        <div class="info-products">
                            <a href="<?php the_permalink(); ?>">
                                <strong><?php the_title(); ?></strong>
                                <p><?php echo get_post_meta( $product->get_id(), 'code', true ); ?></p>
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
                            // do_action( 'linh_addtocart');
                        ?>
                            <!-- <div class="advice"><img data-src="<?php //echo JEMMIA_THEME_URL_ICON; ?>/PikPng.com_new-icon-png_2592784.png" alt=""></div> -->
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
            <a href="<?php echo get_term_link( $category ); ?>">
                <div class="more">Xem thêm >></div>
            </a>
        </div>
        <div class="wrapper">
            <?php
            // get hotdeal
            $terms = 'nhan-nam';
            
                $args = array(
                    'post_status' => 'publish',
                    'post_type' => 'product',
                    
                    // 'term_id'       => 19 ,
                    'tax_query' => array(
                        'relation' => 'AND',
                        array (
                            'taxonomy' => 'product_cat',
                            'field' => 'slug',
                            'terms' => $terms,
                        ),
                        // array (
                        //     'taxonomy' => 'product_tag',
                        //     'field' => 'name',
                        //     'terms' => 'white-bg',
                        // )
                    ),
                    'posts_per_page' => 4,
                    'orderby'    => 'date',
                    'order'      => 'DESC',
                    'hide_empty' => false,
                );
                $query = new WP_Query( $args );
            $category = get_term_by('slug', $terms, 'product_cat');
            ?>
            <div class="prds-banner">
                <img class="lazyload" data-src="<?php echo JEMMIA_THEME_URL_IMG; ?>/LO2-Nhan-Nam.jpg" alt="">
            </div>
            <a href="<?php echo get_term_link( $category ); ?>">
                <h2>nhẫn nam</h2>
            </a>
            <div class="cat-products mobile-hide">
                <div class="swiper-wrapper">
                    <?php
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>
                    <div class="swiper-slide">
                        <div class="img">
                            <?php do_action('woocommerce_sale_flash'); ?>
                            <a class="link" href="<?php the_permalink(); ?>">
                                <img class="lazyload" data-src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 400, 400); ?>" alt="<?php the_title(); ?>">
                            </a>
                            <?php
                                /**
                                 * Hook: linh_addtocart.
                                 *
                                 * @hooked woocommerce_template_loop_add_to_cart - 5
                                 */
                                do_action( 'linh_addtocart');
                            ?>
                        </div>
                        <div class="info-products">
                            <a href="<?php the_permalink(); ?>">
                                <strong><?php the_title(); ?></strong>
                                <p><?php echo get_post_meta( $product->get_id(), 'code', true ); ?></p>
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
                            // do_action( 'linh_addtocart');
                            ?>
                            <!-- <div class="advice"><img data-src="<?php //echo JEMMIA_THEME_URL_ICON; ?>/PikPng.com_new-icon-png_2592784.png" alt=""></div> -->
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
            <div class="mobile-products tablet-hide desktop-hide">
                <div class="mobile-products-wrapper">
                    <?php
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>

                    <div class="swiper">
                        <a class="link" href="<?php the_permalink(); ?>">
                            <div class="img">
                                <?php
                                    do_action('woocommerce_sale_flash');
                                    
                                ?>
                                <img class="lazyload"
                                    data-src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 400, 400); ?>"
                                    alt="<?php the_title(); ?>">
                                <?php
                                /**
                                 * Hook: linh_addtocart.
                                 *
                                 * @hooked woocommerce_template_loop_add_to_cart - 5
                                 */
                                    do_action( 'linh_addtocart');
                                ?>
                            </div>
                        </a>
                        <div class="info-products">
                            <a href="<?php the_permalink(); ?>">
                                <strong><?php the_title(); ?></strong>
                                <p><?php echo get_post_meta( $product->get_id(), 'code', true ); ?></p>
                                <div class="price">
                                    <?php echo $product->get_price_html(); ?>

                                </div>
                            </a>
                            
                            <!-- <div class="advice"><img data-src="<?php //echo JEMMIA_THEME_URL_ICON; ?>/PikPng.com_new-icon-png_2592784.png" alt=""></div> -->
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
            <a href="<?php echo get_term_link( $category ); ?>">
                <div class="more">Xem thêm >></div>
            </a>
        </div>



        <div class="wrapper">
            <?php
            // get hotdeal

            $terms = 'bo-trang-suc';

            $args = array(
                'post_status' => 'publish',
                'post_type' => 'product',
                
                // 'term_id'       => 19 ,
                'tax_query' => array(
                    'relation' => 'AND',
                    array (
                        'taxonomy' => 'product_cat',
                        'field' => 'slug',
                        'terms' => $terms,
                    ),
                    // array (
                    //     'taxonomy' => 'product_tag',
                    //     'field' => 'name',
                    //     'terms' => 'white-bg',
                    // )
                ),
                'posts_per_page' => 4,
                'orderby'    => 'date',
                'order'      => 'DESC',
                'hide_empty' => false,
            );
            $query = new WP_Query( $args );

            $category = get_term_by('slug', $terms, 'product_cat');
            // echo get_term_link( $category );
        

            ?>
            <div class="prds-banner">

                <img class="lazyload" data-src="<?php echo JEMMIA_THEME_URL_IMG; ?>/LO6-Bo-Trang-Suc.jpg" alt="">
            </div>
            <a href="<?php echo get_term_link( $category ); ?>">
                <h2>bộ trang sức</h2>
            </a>

            <div class="cat-products mobile-hide">
                <div class="swiper-wrapper">
                    <?php
                        
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>
                    <div class="swiper-slide">
                        <div class="img">
                            <?php do_action('woocommerce_sale_flash'); ?>
                            <a class="link" href="<?php the_permalink(); ?>">
                                <img class="lazyload" data-src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 400, 400); ?>" alt="<?php the_title(); ?>">
                            </a>
                            <?php
                                /**
                                 * Hook: linh_addtocart.
                                 *
                                 * @hooked woocommerce_template_loop_add_to_cart - 5
                                 */
                                do_action( 'linh_addtocart');
                            ?>
                        </div>
                        <div class="info-products">
                            <a href="<?php the_permalink(); ?>">
                                <strong><?php the_title(); ?></strong>
                                <p><?php echo get_post_meta( $product->get_id(), 'code', true ); ?></p>
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
                            // do_action( 'linh_addtocart');
                            ?>
                            <!-- <div class="advice"><img data-src="<?php //echo JEMMIA_THEME_URL_ICON; ?>/PikPng.com_new-icon-png_2592784.png" alt=""></div> -->
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
            <div class="mobile-products tablet-hide desktop-hide">
                <div class="mobile-products-wrapper">
                    <?php
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>

                    <div class="swiper">
                        <a class="link" href="<?php the_permalink(); ?>">
                            <div class="img">
                                <?php
                                    do_action('woocommerce_sale_flash');
                                    
                                ?>
                                <img class="lazyload"
                                    data-src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 400, 400); ?>"
                                    alt="<?php the_title(); ?>">
                                <?php
                                /**
                                 * Hook: linh_addtocart.
                                 *
                                 * @hooked woocommerce_template_loop_add_to_cart - 5
                                 */
                                    do_action( 'linh_addtocart');
                                ?>
                            </div>
                        </a>
                        <div class="info-products">
                            <a href="<?php the_permalink(); ?>">
                                <strong><?php the_title(); ?></strong>
                                <p><?php echo get_post_meta( $product->get_id(), 'code', true ); ?></p>
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
                            // do_action( 'linh_addtocart');
                        ?>
                            <!-- <div class="advice"><img data-src="<?php //echo JEMMIA_THEME_URL_ICON; ?>/PikPng.com_new-icon-png_2592784.png" alt=""></div> -->
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
            <a href="<?php echo get_term_link( $category ); ?>">
                <div class="more">Xem thêm >></div>
            </a>
        </div>
        <div class="wrapper">
            <?php
            // get hotdeal

            $terms = 'bong-tai';

            $args = array(
                'post_status' => 'publish',
                'post_type' => 'product',
                
                // 'term_id'       => 19 ,
                'tax_query' => array(
                    'relation' => 'AND',
                    array (
                        'taxonomy' => 'product_cat',
                        'field' => 'slug',
                        'terms' => $terms,
                    ),
                    // array (
                    //     'taxonomy' => 'product_tag',
                    //     'field' => 'name',
                    //     'terms' => 'white-bg',
                    // )
                ),
                'posts_per_page' => 4,
                'orderby'    => 'date',
                'order'      => 'DESC',
                'hide_empty' => false,
            );
            $query = new WP_Query( $args );

            $category = get_term_by('slug', $terms, 'product_cat');
            // echo get_term_link( $category );
        

            ?>
            <div class="prds-banner">
                <img class="lazyload" data-src="<?php echo JEMMIA_THEME_URL_IMG; ?>/LO4-Bong-tai.jpg" alt="">
            </div>
            <a href="<?php echo get_term_link( $category ); ?>">
                <h2>bông tai</h2>
            </a>

            <div class="cat-products mobile-hide">
                <div class="swiper-wrapper">
                    <?php
                        
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>
                    <div class="swiper-slide">
                        <div class="img">
                            <?php do_action('woocommerce_sale_flash'); ?>
                            <a class="link" href="<?php the_permalink(); ?>">
                                <img class="lazyload" data-src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 400, 400); ?>" alt="<?php the_title(); ?>">
                            </a>
                            <?php
                                /**
                                 * Hook: linh_addtocart.
                                 *
                                 * @hooked woocommerce_template_loop_add_to_cart - 5
                                 */
                                do_action( 'linh_addtocart');
                            ?>
                        </div>
                        <div class="info-products">
                            <a href="<?php the_permalink(); ?>">
                                <strong><?php the_title(); ?></strong>
                                <p><?php echo get_post_meta( $product->get_id(), 'code', true ); ?></p>
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
                            // do_action( 'linh_addtocart');
                            ?>
                            <!-- <div class="advice"><img data-src="<?php //echo JEMMIA_THEME_URL_ICON; ?>/PikPng.com_new-icon-png_2592784.png" alt=""></div> -->
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
            <div class="mobile-products tablet-hide desktop-hide">
                <div class="mobile-products-wrapper">
                    <?php
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>

                    <div class="swiper">
                        <a class="link" href="<?php the_permalink(); ?>">
                            <div class="img">
                                <?php
                                    do_action('woocommerce_sale_flash');
                                    
                                ?>
                                <img class="lazyload"
                                    data-src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 400, 400); ?>"
                                    alt="<?php the_title(); ?>">
                                <?php
                                /**
                                 * Hook: linh_addtocart.
                                 *
                                 * @hooked woocommerce_template_loop_add_to_cart - 5
                                 */
                                    do_action( 'linh_addtocart');
                                ?>
                            </div>
                        </a>
                        <div class="info-products">
                            <a href="<?php the_permalink(); ?>">
                                <strong><?php the_title(); ?></strong>
                                <p><?php echo get_post_meta( $product->get_id(), 'code', true ); ?></p>
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
                            // do_action( 'linh_addtocart');
                        ?>
                            <!-- <div class="advice"><img data-src="<?php //echo JEMMIA_THEME_URL_ICON; ?>/PikPng.com_new-icon-png_2592784.png" alt=""></div> -->
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
            <a href="<?php echo get_term_link( $category ); ?>">
                <div class="more">Xem thêm >></div>
            </a>
        </div>
        <div class="wrapper">
            <?php
            // get hotdeal

            $terms = 'mat-day-chuyen';

                $args = array(
                    'post_status' => 'publish',
                    'post_type' => 'product',
                    
                    // 'term_id'       => 19 ,
                    'tax_query' => array(
                        'relation' => 'AND',
                        array (
                            'taxonomy' => 'product_cat',
                            'field' => 'slug',
                            'terms' => $terms,
                        ),
                        // array (
                        //     'taxonomy' => 'product_tag',
                        //     'field' => 'name',
                        //     'terms' => 'white-bg',
                        // )
                    ),
                    'posts_per_page' => 4,
                    'orderby'    => 'date',
                    'order'      => 'DESC',
                    'hide_empty' => false,
                );
                $query = new WP_Query( $args );

                $category = get_term_by('slug', $terms, 'product_cat');
            // echo get_term_link( $category );
        

            ?>
            <div class="prds-banner">
                <img class="lazyload" data-src="<?php echo JEMMIA_THEME_URL_IMG; ?>/LO3-Day-chuyen.jpg" alt="">
            </div>
            <a href="<?php echo get_term_link( $category ); ?>">
                <h2>mặt dây chuyền</h2>
            </a>

            <div class="cat-products mobile-hide">
                <div class="swiper-wrapper">
                    <?php
                        
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>
                    <div class="swiper-slide">
                        <div class="img">
                            <?php do_action('woocommerce_sale_flash'); ?>
                            <a class="link" href="<?php the_permalink(); ?>">
                                <img class="lazyload" data-src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 400, 400); ?>" alt="<?php the_title(); ?>">
                            </a>
                            <?php
                                /**
                                 * Hook: linh_addtocart.
                                 *
                                 * @hooked woocommerce_template_loop_add_to_cart - 5
                                 */
                                do_action( 'linh_addtocart');
                            ?>
                        </div>
                        <div class="info-products">
                            <a href="<?php the_permalink(); ?>">
                                <strong><?php the_title(); ?></strong>
                                <p><?php echo get_post_meta( $product->get_id(), 'code', true ); ?></p>
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
                            // do_action( 'linh_addtocart');
                            ?>
                            <!-- <div class="advice"><img data-src="<?php //echo JEMMIA_THEME_URL_ICON; ?>/PikPng.com_new-icon-png_2592784.png" alt=""></div> -->
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
            <div class="mobile-products tablet-hide desktop-hide">
                <div class="mobile-products-wrapper">
                    <?php
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>

                    <div class="swiper">
                        <a class="link" href="<?php the_permalink(); ?>">
                            <div class="img">
                                <?php
                                    do_action('woocommerce_sale_flash');
                                    
                                ?>
                                <img class="lazyload"
                                    data-src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 400, 400); ?>"
                                    alt="<?php the_title(); ?>">
                                <?php
                                /**
                                 * Hook: linh_addtocart.
                                 *
                                 * @hooked woocommerce_template_loop_add_to_cart - 5
                                 */
                                    do_action( 'linh_addtocart');
                                ?>
                            </div>
                        </a>
                        <div class="info-products">
                            <a href="<?php the_permalink(); ?>">
                                <strong><?php the_title(); ?></strong>
                                <p><?php echo get_post_meta( $product->get_id(), 'code', true ); ?></p>
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
                            // do_action( 'linh_addtocart');
                        ?>
                            <!-- <div class="advice"><img data-src="<?php //echo JEMMIA_THEME_URL_ICON; ?>/PikPng.com_new-icon-png_2592784.png" alt=""></div> -->
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
            <a href="<?php echo get_term_link( $category ); ?>">
                <div class="more">Xem thêm >></div>
            </a>
        </div>
        <div class="wrapper">
            <?php
            // get hotdeal

            $terms = 'lac-vong-tay';

            $args = array(
                'post_status' => 'publish',
                'post_type' => 'product',
                
                // 'term_id'       => 19 ,
                'tax_query' => array(
                    'relation' => 'AND',
                    array (
                        'taxonomy' => 'product_cat',
                        'field' => 'slug',
                        'terms' => $terms,
                    ),
                    // array (
                    //     'taxonomy' => 'product_tag',
                    //     'field' => 'name',
                    //     'terms' => 'white-bg',
                    // )
                ),
                'posts_per_page' => 4,
                'orderby'    => 'date',
                'order'      => 'DESC',
                'hide_empty' => false,
            );
            $query = new WP_Query( $args );

            $category = get_term_by('slug', $terms, 'product_cat');
            // echo get_term_link( $category );
        

            ?>
            <div class="prds-banner">
                <img class="lazyload" data-src="<?php echo JEMMIA_THEME_URL_IMG; ?>/LO5-Lac-Vong.jpg" alt="">
            </div>
            <a href="<?php echo get_term_link( $category ); ?>">
                <h2>lắc vòng tay</h2>
            </a>

            <div class="cat-products mobile-hide">
                <div class="swiper-wrapper">
                    <?php
                        
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>
                    <div class="swiper-slide">
                        <div class="img">
                            <?php do_action('woocommerce_sale_flash'); ?>
                            <a class="link" href="<?php the_permalink(); ?>">
                                <img class="lazyload" data-src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 400, 400); ?>" alt="<?php the_title(); ?>">
                            </a>
                            <?php
                                /**
                                 * Hook: linh_addtocart.
                                 *
                                 * @hooked woocommerce_template_loop_add_to_cart - 5
                                 */
                                do_action( 'linh_addtocart');
                            ?>
                        </div>
                        <div class="info-products">
                            <a href="<?php the_permalink(); ?>">
                                <strong><?php the_title(); ?></strong>
                                <p><?php echo get_post_meta( $product->get_id(), 'code', true ); ?></p>
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
                            // do_action( 'linh_addtocart');
                            ?>
                            <!-- <div class="advice"><img data-src="<?php //echo JEMMIA_THEME_URL_ICON; ?>/PikPng.com_new-icon-png_2592784.png" alt=""></div> -->
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
            <div class="mobile-products tablet-hide desktop-hide">
                <div class="mobile-products-wrapper">
                    <?php
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>

                    <div class="swiper">
                        <a class="link" href="<?php the_permalink(); ?>">
                            <div class="img">
                                <?php
                                    do_action('woocommerce_sale_flash');
                                    
                                ?>
                                <img class="lazyload"
                                    data-src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 400, 400); ?>"
                                    alt="<?php the_title(); ?>">
                                <?php
                                /**
                                 * Hook: linh_addtocart.
                                 *
                                 * @hooked woocommerce_template_loop_add_to_cart - 5
                                 */
                                    do_action( 'linh_addtocart');
                                ?>
                            </div>
                        </a>
                        <div class="info-products">
                            <a href="<?php the_permalink(); ?>">
                                <strong><?php the_title(); ?></strong>
                                <p><?php echo get_post_meta( $product->get_id(), 'code', true ); ?></p>
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
                            // do_action( 'linh_addtocart');
                        ?>
                            <!-- <div class="advice"><img data-src="<?php //echo JEMMIA_THEME_URL_ICON; ?>/PikPng.com_new-icon-png_2592784.png" alt=""></div> -->
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
            <a href="<?php echo get_term_link( $category ); ?>">
                <div class="more">Xem thêm >></div>
            </a>
        </div>
        <div class="wrapper">
            <?php
            // get hotdeal

            $terms = 'nhan-cuoi';

            $args = array(
                'post_status' => 'publish',
                'post_type' => 'product',
                
                // 'term_id'       => 19 ,
                'tax_query' => array(
                    'relation' => 'AND',
                    array (
                        'taxonomy' => 'product_cat',
                        'field' => 'slug',
                        'terms' => $terms,
                    ),
                    // array (
                    //     'taxonomy' => 'product_tag',
                    //     'field' => 'name',
                    //     'terms' => 'white-bg',
                    // )
                ),
                'posts_per_page' => 4,
                'orderby'    => 'date',
                'order'      => 'DESC',
                'hide_empty' => false,
            );
            $query = new WP_Query( $args );

            $category = get_term_by('slug', $terms, 'product_cat');
            // echo get_term_link( $category );
        

            ?>
            <div class="prds-banner">
                <img class="lazyload" data-src="<?php echo JEMMIA_THEME_URL_IMG; ?>/LO35-Nhan-Cuoi.jpg" alt="">
            </div>
            <a href="<?php echo get_term_link( $category ); ?>">
                <h2>nhẫn cưới</h2>
            </a>

            <div class="cat-products mobile-hide">
                <div class="swiper-wrapper">
                    <?php
                    
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>
                    <div class="swiper-slide">
                        <div class="img">
                            <?php do_action('woocommerce_sale_flash'); ?>
                            <a class="link" href="<?php the_permalink(); ?>">
                                <img class="lazyload" data-src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 400, 400); ?>" alt="<?php the_title(); ?>">
                            </a>
                            <?php
                                /**
                                 * Hook: linh_addtocart.
                                 *
                                 * @hooked woocommerce_template_loop_add_to_cart - 5
                                 */
                                do_action( 'linh_addtocart');
                            ?>
                        </div>
                        <div class="info-products">
                            <a href="<?php the_permalink(); ?>">
                                <strong><?php the_title(); ?></strong>
                                <p><?php echo get_post_meta( $product->get_id(), 'code', true ); ?></p>
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
                            // do_action( 'linh_addtocart');
                            ?>
                            <!-- <div class="advice"><img data-src="<?php //echo JEMMIA_THEME_URL_ICON; ?>/PikPng.com_new-icon-png_2592784.png" alt=""></div> -->
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
            <div class="mobile-products tablet-hide desktop-hide">
                <div class="mobile-products-wrapper">
                    <?php
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>

                    <div class="swiper">
                        <a class="link" href="<?php the_permalink(); ?>">
                            <div class="img">
                                <?php
                                    do_action('woocommerce_sale_flash');
                                    
                                ?>
                                <img class="lazyload"
                                    data-src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 400, 400); ?>"
                                    alt="<?php the_title(); ?>">
                                <?php
                                /**
                                 * Hook: linh_addtocart.
                                 *
                                 * @hooked woocommerce_template_loop_add_to_cart - 5
                                 */
                                    do_action( 'linh_addtocart');
                                ?>
                            </div>
                        </a>
                        <div class="info-products">
                            <a href="<?php the_permalink(); ?>">
                                <strong><?php the_title(); ?></strong>
                                <p><?php echo get_post_meta( $product->get_id(), 'code', true ); ?></p>
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
                            // do_action( 'linh_addtocart');
                        ?>
                            <!-- <div class="advice"><img data-src="<?php //echo JEMMIA_THEME_URL_ICON; ?>/PikPng.com_new-icon-png_2592784.png" alt=""></div> -->
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
            <a href="<?php echo get_term_link( $category ); ?>">
                <div class="more">Xem thêm >></div>
            </a>

            <?php
            // get hotdeal

            $terms = 'nhan-cau-hon';

            $args = array(
                'post_status' => 'publish',
                'post_type' => 'product',
                
                // 'term_id'       => 19 ,
                'tax_query' => array(
                    'relation' => 'AND',
                    array (
                        'taxonomy' => 'product_cat',
                        'field' => 'slug',
                        'terms' => $terms,
                    ),
                    // array (
                    //     'taxonomy' => 'product_tag',
                    //     'field' => 'name',
                    //     'terms' => 'white-bg',
                    // )
                ),
                'posts_per_page' => 4,
                'orderby'    => 'date',
                'order'      => 'DESC',
                'hide_empty' => false,
            );
            $query = new WP_Query( $args );

            $category = get_term_by('slug', $terms, 'product_cat');
            // echo get_term_link( $category );
        

            ?>
            <a href="<?php echo get_term_link( $category ); ?>">
                <h2>nhẫn cầu hôn</h2>
            </a>
            <div class="cat-products mobile-hide">
                <div class="swiper-wrapper">
                    <?php
                    
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>
                    <div class="swiper-slide">
                        <div class="img">
                            <?php do_action('woocommerce_sale_flash'); ?>
                            <a class="link" href="<?php the_permalink(); ?>">
                                <img class="lazyload" data-src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 400, 400); ?>" alt="<?php the_title(); ?>">
                            </a>
                            <?php
                                /**
                                 * Hook: linh_addtocart.
                                 *
                                 * @hooked woocommerce_template_loop_add_to_cart - 5
                                 */
                                do_action( 'linh_addtocart');
                            ?>
                        </div>
                        <div class="info-products">
                            <a href="<?php the_permalink(); ?>">
                                <strong><?php the_title(); ?></strong>
                                <p><?php echo get_post_meta( $product->get_id(), 'code', true ); ?></p>
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
                            // do_action( 'linh_addtocart');
                            ?>
                            <!-- <div class="advice"><img data-src="<?php //echo JEMMIA_THEME_URL_ICON; ?>/PikPng.com_new-icon-png_2592784.png" alt=""></div> -->
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
            <div class="mobile-products tablet-hide desktop-hide">
                <div class="mobile-products-wrapper">
                    <?php
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>

                    <div class="swiper">
                        <a class="link" href="<?php the_permalink(); ?>">
                            <div class="img">
                                <?php
                                    do_action('woocommerce_sale_flash');
                                    
                                ?>
                                <img class="lazyload"
                                    data-src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 400, 400); ?>"
                                    alt="<?php the_title(); ?>">
                                <?php
                                /**
                                 * Hook: linh_addtocart.
                                 *
                                 * @hooked woocommerce_template_loop_add_to_cart - 5
                                 */
                                    do_action( 'linh_addtocart');
                                ?>
                            </div>
                        </a>
                        <div class="info-products">
                            <a href="<?php the_permalink(); ?>">
                                <strong><?php the_title(); ?></strong>
                                <p><?php echo get_post_meta( $product->get_id(), 'code', true ); ?></p>
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
                            // do_action( 'linh_addtocart');
                        ?>
                            <!-- <div class="advice"><img data-src="<?php //echo JEMMIA_THEME_URL_ICON; ?>/PikPng.com_new-icon-png_2592784.png" alt=""></div> -->
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
            <a href="<?php echo get_term_link( $category ); ?>">
                <div class="more">Xem thêm >></div>
            </a>
        </div>
    </div>
    <div id="policyWrapper">
        <div class="wrapper">
            <h2>CHỌN JEMMIA BẠN ĐƯỢC GÌ?</h2>
            <div class="policy_items_box">
                <div class="policy-items">
                    <img class="lazyload" data-src="<?php echo JEMMIA_THEME_URL_ICON; ?>/diamond_80x80.png" alt="">
                    <strong>Chất lượng đạt chuẩn</strong>
                    <p>Cam kết đúng trọng lượng và hàm lượng. Kim cương và đá quý đều được nhập khẩu chính ngạch 100%,
                        được kiểm định quốc tế và có giá trị toàn cầu.</p>
                    <a class="button" href="https://jemmia.vn/cau-hoi-thuong-gap.html">Tìm hiểu</a>
                </div>
                <div class="policy-items">
                    <img class="lazyload" data-src="<?php echo JEMMIA_THEME_URL_ICON; ?>/serve_80x80.png" alt="">
                    <strong>Phục vụ tận tâm</strong>
                    <p>Đội ngũ chuyên gia chăm sóc khách hàng dày dặn kinh nghiệm luôn có mặt để giúp đỡ và tư vấn chọn
                        món trang sức phù hợp nhất cho quý khách.</p>
                    <a class="button" href="">Nhận tư vấn</a>
                </div>
                <div class="policy-items">
                    <img class="lazyload" data-src="<?php echo JEMMIA_THEME_URL_ICON; ?>/guarantee_80x80.png" alt="">
                    <strong>Bảo hành trọn đời</strong>
                    <p>Miễn phí làm mới sản phẩm trọn đời. Chế độ 1 đổi 1 và hỗ trợ các chính sách thu mua thu đổi có
                        lợi nhất cho quý khách.</p>
                    <a class="button" href="">Đọc thêm</a>
                </div>
                <div class="policy-items">
                    <img class="lazyload" data-src="<?php echo JEMMIA_THEME_URL_ICON; ?>/gift_80x80.png" alt="">
                    <strong>Ưu đãi hấp dẫn</strong>
                    <p>Các chương trình ưu đãi đặc biệt giúp các khách hàng của Jemmia có thêm nhiều cơ hội để trải
                        nghiệm những sản phẩm tuyệt vời</p>
                    <a class="button" href="https://jemmia.vn/uu-dai-trang-suc-vang">Khám phá</a>
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="about">
        <div class="wrapper">
            <img data-src="<?php echo JEMMIA_THEME_URL_IMG; ?>/bg-aboutus.png" alt="about">
            <div class="text">
                <strong>về chúng tôi</strong>
                <label>câu chuyện jemmia</label>
                <p>JEMMIA tin rằng trong mỗi viên kim cương đều chứa đựng những ý nghĩa vô cùng to lớn về phong thủy vì
                    kim cương là loại đá cứng nhất đồng nghĩa mang năng lượng nhiều nhất trong tự nhiên. Trang sức kim
                    cương tại JEMMIA được thiết kế
                    dựa theo phong cách tinh tế và hiện đại từ đất nước luôn đi đầu về phong cách thời trang là Hàn Quốc
                    …</p>
            </div>

        </div>
    </div> -->
    <div id="blog">
        <div class="wrapper">
            <h2>tin tức</h2>
            <div class="blog-wrapper">

                <div class="swiper-wrapper">
                    <?php
                        $args = array(
                            'post_status' => 'publish',
                            'post_type' => 'post',
                            // 'number' => '8',
                            'numberposts'      =>8 ,
                            'category'         => 0,
                            'orderby'          => 'rand',
                            'order' => 'DESC',
                        );
                        $blogs = get_posts($args);
                        $query = new WP_Query( $args );
                        // echo count($blogs);
                        // echo '<pre style="color: #fff">';
                        // print_r($blogs[0]);
                        // echo '</pre>';
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $except = get_the_excerpt();
                                ?>
                    <div class="swiper-slide">

                        <a href="<?php the_permalink(); ?>">
                            <img class="lazyload"
                                data-src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 400, 400); ?>"
                                alt="<?php the_title(); ?>">
                            <div class="blog-title"><?php the_title(); ?></div>
                            <!-- <div class="date">Đăng vào: <?php //echo explode(' ', $blog->post_date)[0] ; ?></div>
                                        <div class="author">Bởi: <?php //the_author_meta( 'user_nicename' , $author_id ); ?> </div> -->
                            <p class="short"><?php echo explode("\n", wordwrap($except, 150))[0]; ?>...</p>

                        </a>
                        <a href="<?php the_permalink(); ?>">
                            <div class="more">Xem thêm</div>
                        </a>


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
    </div>
</div>
<?php 

get_footer(); 
?>