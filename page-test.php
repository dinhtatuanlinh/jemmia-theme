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
            <?php
                    
                   
                    $query = get_post(27563);
$key_1_value = get_post_meta( 27563, 'youtube-video', true );
					echo '<pre>';
                    print_r($query);
                    echo '</pre>';
                    echo '<pre>';
                    print_r($key_1_value);
                    echo '</pre>';


                ?>
            <h1></h1>

        </div>
    </div>


</div>

<?php 

get_footer(); 
?>