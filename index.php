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
<div id="main">
    <div id="special">
        <div class="wrapper">
            <div><a href="https://jemmia.vn/san-pham-ban-chay"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/banner/sp-ban-chay.jpg" alt=""></a></div>
            <div><a href="https://jemmia.vn/san-pham-moi"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/banner/sp-moi.jpg" alt=""></a></div>
            <div><a href="https://jemmia.vn/uu-dai-trang-suc-vang"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/banner/flash-sale.jpg" alt=""></a></div>
        </div>
    </div>
    <div id="quick-menu" class="desktop-hide">
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
                        <img src="<?php echo $image; ?>" alt="">
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
                        <img src="<?php echo $image; ?>" alt="">
                        <p>Nhẫn nam</p>
                    </a>
                </li>
                <li>
                    <?php
                        $terms = 'nhan-cuoi';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                    <a href="<?php echo get_term_link( $category ); ?>">
                        <img src="<?php echo $image; ?>" alt="">
                        <p>nhẫn cưới</p>
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
                        <img src="<?php echo $image; ?>" alt="">
                        <p>bông tai</p>
                    </a>
                </li>
                <li>
                    <?php
                        $terms = 'kim-cuong';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                    <a href="<?php echo get_term_link( $category ); ?>">
                        <img src="<?php echo $image; ?>" alt="">
                        <p>kim cương</p>
                    </a>
                </li>
                <li>

                    <a href="https://jemmiasilver.vn">
                        <img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/kim-cuong-gia-1-scaled-247x296.jpg" alt="">
                        <p>jemmia silver</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div id="hotdeal">
        <div class="wrapper">
            <div class="hd-banner">
                <img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/banner/HD 320x415.jpg" alt="hot deal" class="mobile-hide tablet-hide">
                <img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/banner/HD 410x170.jpg" alt="hot deal" class=" desktop-hide">
            </div>
            <div class="hd-products">

                <div class="swiper-wrapper">
                    <?php
                        // get hotdeal
                        $args = array(
                            'post_type' => 'product',
                            // 'term_id'       => 19 ,
                            'product_tag' => 'hot-deal',
                            'orderby'    => 'id',
                            'order'      => 'DESC',
                            'hide_empty' => false,
                        );
                        $query = new WP_Query( $args );
                        // echo count($blogs);
                        // echo '<pre style="color: #000">';
                        // print_r($query);
                        // echo '</pre>';
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>
                    <div class="swiper-slide">
                        <?php
                            if (woocommerce_show_product_loop_sale_flash()){
                                    echo woocommerce_show_product_loop_sale_flash();
                            }
                            
                        ?>
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
    </div>
    <div id="show-product">
        
        <div class="wrapper">
        <?php
            // get hotdeal
            $terms = 'nhan-nam';
            $args = array(
                'post_type' => 'product',
                // 'term_id'       => 19 ,
                'tax_query' => array(
                    array (
                        'taxonomy' => 'product_cat',
                        'field' => 'slug',
                        'terms' => $terms,
                    )
                ),
                'orderby'    => 'id',
                'order'      => 'DESC',
                'hide_empty' => false,
            );
            $query = new WP_Query( $args );
            
            $category = get_term_by('slug', $terms, 'product_cat');
            // echo get_term_link( $category );
        

        ?>
            <div class="prds-banner">
                <img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/product-banner_1200x500_nhan-doi.jpg" alt="">
            </div>
            <a href="<?php echo get_term_link( $category ); ?>"><h2>nhẫn nam</h2></a>
            <div class="cat-products">
                <div class="swiper-wrapper">
                    <?php
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>

                    <div class="swiper-slide">
                        <?php
                            if (woocommerce_show_product_loop_sale_flash()){
                                    echo woocommerce_show_product_loop_sale_flash();
                            }
                            
                        ?>
                        
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
        <div class="wrapper">
        <?php
            // get hotdeal
            $terms = 'nhan-nu';
            $args = array(
                'post_type' => 'product',
                // 'term_id'       => 19 ,
                'tax_query' => array(
                    array (
                        'taxonomy' => 'product_cat',
                        'field' => 'slug',
                        'terms' => $terms,
                    )
                ),
                'orderby'    => 'id',
                'order'      => 'DESC',
                'hide_empty' => false,
            );
            $query = new WP_Query( $args );
            
            $category = get_term_by('slug', $terms, 'product_cat');
            // echo get_term_link( $category );
        

        ?>
            <div class="prds-banner">
                <img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/product-banner_1200x500_nhan-nam.jpg" alt="">
            </div>
            <a href="<?php echo get_term_link( $category ); ?>"><h2>nhẫn nữ</h2></a>
            <div class="cat-products">
                <div class="swiper-wrapper">
                    <?php
                    
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>
                    <div class="swiper-slide">
                    <?php
                            if (woocommerce_show_product_loop_sale_flash()){
                                    echo woocommerce_show_product_loop_sale_flash();
                            }
                            
                        ?>
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
        <div class="wrapper">
        <?php
            // get hotdeal
            $terms = 'nhan-cuoi';
            $args = array(
                'post_type' => 'product',
                // 'term_id'       => 19 ,
                'tax_query' => array(
                    array (
                        'taxonomy' => 'product_cat',
                        'field' => 'slug',
                        'terms' => $terms,
                    )
                ),
                'orderby'    => 'id',
                'order'      => 'DESC',
                'hide_empty' => false,
            );
            $query = new WP_Query( $args );
            
            $category = get_term_by('slug', $terms, 'product_cat');
            // echo get_term_link( $category );
        

        ?>
            <div class="prds-banner">
                <img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/product-banner_1200x500_nhan-nu.jpg" alt="">
            </div>
            <a href="<?php echo get_term_link( $category ); ?>"><h2>nhẫn cưới</h2></a>
            <div class="cat-products">
                <div class="swiper-wrapper">
                    <?php
                        
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>
                    <div class="swiper-slide">
                    <?php
                            if (woocommerce_show_product_loop_sale_flash()){
                                    echo woocommerce_show_product_loop_sale_flash();
                            }
                            
                        ?>
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
        <div class="wrapper">
        <?php
            // get hotdeal
            $terms = 'bong-tai';
            $args = array(
                'post_type' => 'product',
                // 'term_id'       => 19 ,
                'tax_query' => array(
                    array (
                        'taxonomy' => 'product_cat',
                        'field' => 'slug',
                        'terms' => $terms,
                    )
                ),
                'orderby'    => 'id',
                'order'      => 'DESC',
                'hide_empty' => false,
            );
            $query = new WP_Query( $args );
            
            $category = get_term_by('slug', $terms, 'product_cat');
            // echo get_term_link( $category );
        

        ?>
            <div class="prds-banner">
                <img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/product-banner_1200x500_hoa-tai.jpg" alt="">
            </div>
            <a href="<?php echo get_term_link( $category ); ?>"><h2>bông tai</h2></a>
            <div class="cat-products">
                <div class="swiper-wrapper">
                    <?php
                        
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>
                    <div class="swiper-slide">
                    <?php
                            if (woocommerce_show_product_loop_sale_flash()){
                                    echo woocommerce_show_product_loop_sale_flash();
                            }
                            
                        ?>
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
        <div class="wrapper">
        <?php
            // get hotdeal
            $terms = 'kim-cuong';
            $args = array(
                'post_type' => 'product',
                // 'term_id'       => 19 ,
                'tax_query' => array(
                    array (
                        'taxonomy' => 'product_cat',
                        'field' => 'slug',
                        'terms' => $terms,
                    )
                ),
                'orderby'    => 'id',
                'order'      => 'DESC',
                'hide_empty' => false,
            );
            $query = new WP_Query( $args );
            
            $category = get_term_by('slug', $terms, 'product_cat');
            // echo get_term_link( $category );
        

        ?>
            <div class="prds-banner">
                <img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/product-banner_1200x500_kim-cuong.jpg" alt="">
            </div>
            <a href="<?php echo get_term_link( $category ); ?>"><h2>kim cương</h2></a>
            <div class="cat-products">
                <div class="swiper-wrapper">
                    <?php
                        
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>
                    <div class="swiper-slide">
                        
                            
                    <?php
                            if (woocommerce_show_product_loop_sale_flash()){
                                    echo woocommerce_show_product_loop_sale_flash();
                            }
                            
                        ?>
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
    </div>
    <div id="policy">
        <div class="wrapper">
            <div class="policy-items">
                <img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/icon-datchuan.png" alt="">
                <strong>đạt chuẩn</strong>
                <p>có chứng nhận chất lượng</p>
            </div>
            <div class="policy-items">
                <img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/icon-chatluong.png" alt="">
                <strong>chất lượng</strong>
                <p>đúng trọng lượng & hàm lượng</p>
            </div>
            <div class="policy-items">
                <img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/icon-camket.png" alt="">
                <strong>cam kết</strong>
                <p>cho phép thu mua đổi trọn đời</p>
            </div>
            <div class="policy-items">
                <img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/icon-chatluong.png" alt="">
                <strong>miễn phí</strong>
                <p>chúng tôi cũng làm sạch trọn đời</p>
            </div>
        </div>
    </div>
    <div id="about">
        <div class="wrapper">
            <img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/bg-aboutus.png" alt="about">
            <div class="text">
                <strong>về chúng tôi</strong>
                <label>câu chuyện jemmia</label>
                <p>JEMMIA tin rằng trong mỗi viên kim cương đều chứa đựng những ý nghĩa vô cùng to lớn về phong thủy vì kim cương là loại đá cứng nhất đồng nghĩa mang năng lượng nhiều nhất trong tự nhiên. Trang sức kim cương tại JEMMIA được thiết kế
                    dựa theo phong cách tinh tế và hiện đại từ đất nước luôn đi đầu về phong cách thời trang là Hàn Quốc …</p>
            </div>

        </div>
    </div>
    <div id="blog">
        <div class="wrapper">
            <h2>blog trang sức</h2>
            <div class="blog-wrapper">

                <div class="swiper-wrapper">
                    <?php
                        $args = array(
                            'type' => 'post',
                            // 'number' => '8',
                            'numberposts'      =>8 ,
                            'category'         => 0,
                            'orderby'          => 'date',
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
                                        <img src="<?php echo get_the_post_thumbnail_url($blog->ID,'full'); ?>" alt="<?php echo $blog->post_title; ?>">
                                        <div class="blog-title"><?php echo $blog->post_title; ?></div>
                                        <div class="date">Đăng vào: <?php echo explode(' ', $blog->post_date)[0] ; ?></div>
                                        <div class="author">Bởi: <?php the_author_meta( 'user_nicename' , $author_id ); ?> </div>
                                        <p class="short"><?php echo get_the_excerpt($blog->ID); ?></p>
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
<?php 

get_footer(); 
?>
    
