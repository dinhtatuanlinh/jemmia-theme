<?php 
get_header(); 
get_header('top');
get_header('banner');
$upload_dir = wp_upload_dir();


?>


</div>
<div id="second-main">
    <div class="wrapper">
    <div id="content">
        <div class="heading">
            <h1><?php the_title(); ?></h1>
            <div class="date">Đăng vào: <?php the_date() ; ?></div>
            <div class="author">Bởi: <?php the_author(); ?> </div>
        </div>
        <div class="main-content">
        <?php the_content(); ?>
        </div>
        <!-- <?php
            
            echo '<pre style="color: #fff">';
            print_r(the_title());
            print_r(the_content());
            echo '</pre>';
        ?> -->
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