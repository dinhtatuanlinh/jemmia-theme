<?php 
get_header(); 
get_header('top');
$upload_dir = wp_upload_dir();

// echo '<pre style="color: #fff">';
// print_r($upload_dir['url']);
// echo '</pre>';
?>


</div>
<div id="main">
    <div id="page">
        <div class="wrapper">
            <header class="woocommerce-products-header">

                <h1 class="woocommerce-products-header__title page-title cattitle">sản phẩm mới</h1>

            </header>
            <?php
                $args = array(
                    'post_type' => 'product',
                    // 'term_id'       => 19 ,

                    'orderby'    => 'date',
                    'order'      => 'DESC',
                    'hide_empty' => false,
                );
                $query = new WP_Query( $args );
            ?>
            <div class="products">
                <div class="cat-items">
                    <a href="">
                        <span class='onsale'></span>
                        <img src="" alt="">
                        <div class="info-products">
                            <h2></h2>
                            <span class="price"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


</div>

<?php 

get_footer(); 
?>