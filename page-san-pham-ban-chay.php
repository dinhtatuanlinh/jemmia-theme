<?php 
get_header(); 
get_header('top');
$upload_dir = wp_upload_dir();

// echo '<pre style="color: #fff">';
// print_r($upload_dir['url']);
// echo '</pre>';
?>


</div>
<div id="second-main">

        <div class="wrapper">
            <div id="content">
                <header class="woocommerce-products-header">

                    <h1 class="woocommerce-products-header__title page-title cattitle">sản phẩm bán chạy</h1>

                </header>
                <?php
                    // lấy sản phẩm theo số lượng bán được trên web
                    // $args = array(
                    //     'post_type' => 'product',
                    //     'meta_key' => 'total_sales',// cai dat lay san pham ban
                    //     'posts_per_page' => get_option("posts_per_page"),//get_option("posts_per_page) là lấy giá trị số bài viết trên trang được cài đặt trong setting
                    //     'orderby' => 'meta_value_num',// cai dat lay san pham ban
                    //     'order'      => 'DESC',
                    //     'hide_empty' => false,
                    // );
                    $args = array(
                        'post_type' => 'product',
                        // 'term_id'       => 19 ,
                        'product_tag' => 'ban-chay',
                        'posts_per_page' => 30,
                        'orderby'    => 'id',
                        'order'      => 'DESC',
                        'hide_empty' => false,
                        'post_status' => 'publish',
                    );
                    $query = new WP_Query( $args );
                    // echo '<pre>';
                    // print_r($query);
                    // echo '</pre>';
                ?>
                <div class="products">
                    <?php
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */
                    ?>
                    <div class="cat-items">
                        <a href="<?php the_permalink(); ?>">
                        <?php
                            do_action('woocommerce_sale_flash');
                            
                        ?>
                            <div class="imgWrapper">
                        <img src="<?php  echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </div>
                            <div class="info-products">
                                <!--<h2><?php the_title(); ?></h2>
                                <span class="price"><?php echo $product->get_price_html(); ?></span>
                            </div>-->
                            </div>
                        </a>
                    </div>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();// reset lại đối tương wp_query
                    ?>
                </div>
            </div>
        </div>



</div>

<?php 

get_footer(); 
?>