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

                    <h1 class="woocommerce-products-header__title page-title cattitle">sản phẩm mới</h1>

                </header>
                <?php
                    $args = array(
                        'post_type' => 'product',
                        // 'term_id'       => 19 ,
                        'posts_per_page' => 16,
                        'orderby'    => 'date',
                        'order'      => 'DESC',
                        'hide_empty' => false,
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
                            <span class='onsale'></span>
                            <img src="<?php  echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            <div class="info-products">
                                <h2><?php the_title(); ?></h2>
                                <span class="price"><?php echo $product->get_price_html(); ?></span>
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