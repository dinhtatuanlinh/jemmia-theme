<?php 
get_header(); 
get_header('top');

$upload_dir = wp_upload_dir();


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
                        <p>mặt dây</p>
                    </a>
                </li>
                <li>
                    <?php
                        $terms = 'Không có sẵn	vo-nhan-kim-cuong-tu-nhien';
                        $category = get_term_by('slug', $terms, 'product_cat');
                        $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                    <a href="<?php echo get_term_link( $category ); ?>">
                        <img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/kim-cuong-gia-1-scaled-247x296.jpg" alt="">
                        <p>vỏ nhẫn</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div id="more-info">
        <div class="wrapper">
            <div class="post">
                <div class="wrap-title">Bạn hãy xem thêm</div>
                <div >
                    <a class="view-more-item d-flex mb-3" target="_parent" href="https://jemmia.vn/bang-gia-kim-cuong-moissanite/">

                        <div class="title">Bảng giá Moissanite hiện nay</div>
                    </a>
                    <a class="view-more-item d-flex mb-3" target="_parent" href="https://jemmia.vn/bang-gia-kim-cuong-tu-nhien">

                        <div class="title">Bảng giá kim cương lẻ</div>
                    </a>
                    <a class="view-more-item d-flex mb-0" target="_parent" href="https://jemmia.vn/bang-gia-si-kim-cuong-gia">

                        <div class="title">Bảng giá kim cương sỉ</div>
                    </a>

                </div>
            </div>
            <div class="products">
                
                <div class="wrap-title">Có thể bạn quan tâm</div>
                <div class="wrap-item">
                    <a style="border-bottom: 1px solid #E3E4E5" target="_blank" href="https://jemmia.vn/trang-suc-vang/nhan-vang/nhan-cau-hon/">
                        <div class="interest-image">
                            <img class="picture-style" src="https://cdn.autoads.asia/maxlead/CustomWebsite/jemmia/imgs/category/interest-ring.png">
                        </div>
                        <div class="interest-content">
                            <div class="title-child">Xem nhẫn cầu hôn 2020</div>
                                <div class="title">XEM NGAY</div>

                        </div>
                    </a>
                    <a target="_blank" href="https://jemmia.vn/bang-gia-kim-cuong-tu-nhien/">
                        <div class="interest-image">
                            <img class="picture-style" src="https://cdn.autoads.asia/maxlead/CustomWebsite/jemmia/imgs/category/interest-diamond.png">
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
    <div id="content">
        <div class="heading">
            <h1><?php the_title(); ?></h1>
            <div class="date">Đăng vào: <?php echo get_the_date() ; ?></div>
        </div>
        <div class="main-content">
        <?php the_content(); ?>

        </div>
    </div>
    <?php
            get_sidebar();
        ?>
    </div>
    
</div>
<?php setPostViews(get_the_ID());//đếm số lượt xem bài post ?>


<?php 

get_footer(); 
?>