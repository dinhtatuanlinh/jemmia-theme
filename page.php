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
<?php
        echo 'page';
    ?>
</div>

<?php 

get_footer(); 
?>