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
    <div class="banner"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/banner/web-banner_kv_ngaythantai_1920x730.jpg"
            alt="vàng thần tài"></div>
    <div class="wrapper">

        <div id="content">
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/kgnskjMY5pk"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <div class="products">
                <?php
                $args = array(
                    'post_status' => 'publish',
                    'post_type' => 'product',
                    // 'term_id'       => 19 ,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_tag',
                            'field'    => 'name',
                            'terms'    => 'vang-than-tai',
                        ),),
                    'posts_per_page' => 8,
                    'orderby'    => 'rand',
                    'order'      => 'DESC',
                    'hide_empty' => false,
                );
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                    while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
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