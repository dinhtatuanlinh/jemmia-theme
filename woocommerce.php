

<?php
get_header();
get_header('top');


?>
</div>
<div id="cat_banner">
    <?php 
        $term = get_queried_object();
        // echo $term->slug; // lấy slug của category
        // $terms = 'nhan-nu';
        $category = get_term_by('slug', $term->slug, 'product_cat');

        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
        $image = wp_get_attachment_url( $thumbnail_id );
    ?>

    <img src="<?php echo $image; ?>" alt="">
</div>
<div id="second-main">
    <div class="wrapper">
        <div id="content">
            <?php
                if ( is_singular( 'product' ) ) {
                    
                    woocommerce_content();
                }else{
                //For ANY product archive.
                //Product taxonomy, product search or /shop landing
                    woocommerce_get_template( 'archive-product.php' );// woocommerce có lỗi khi gọi tệp tin archive-product.php nên phải thêm dòng này để fix
                }
            ?>
            
        </div>
    </div>
</div>



<?php 

get_footer(); 
?>