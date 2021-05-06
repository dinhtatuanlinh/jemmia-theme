

<?php
get_header();
get_header('top');


?>
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