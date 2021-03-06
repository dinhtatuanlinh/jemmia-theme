<?php
// tao hằng số lưu đường dẫn
define('JEMMIA_THEME_DIR', get_template_directory());// đường dẫn tới thư mục theme dẫn tới các khu vực chứa file
define('JEMMIA_THEME_URL', get_template_directory_uri());//
define('JEMMIA_THEME_INC_DIR', JEMMIA_THEME_DIR . '/inc');
define('JEMMIA_THEME_ASSETS_DIR', JEMMIA_THEME_DIR . '/assets');
define('JEMMIA_THEME_CUSTOMIZER_DIR', JEMMIA_THEME_INC_DIR . '/customizer');
define('JEMMIA_THEME_URL_IMG', get_template_directory_uri() . '/imgs');
define('JEMMIA_THEME_URL_ICON', get_template_directory_uri() . '/icons');

// 23. thumbnail image link
function linh_setThumbnailOnLink(){
    if(is_home()){
        ?>
            <meta property="og:image" content="<?php echo JEMMIA_THEME_URL_IMG; ?>/webImage.jpg" />
        <?php
    }else if(is_category){
        $id = get_the_ID();
        $catThumb = wp_get_attachment_url( $id );
        ?>
            <meta property="og:image" content="<?php echo $catThumb; ?>" />
        <?php
    }else{
        $id = get_the_ID();
        $postThumb = get_the_post_thumbnail_url($id)
        ?>
        <meta property="og:image" content="<?php echo $postThumb; ?>" />
        <?php
    }

    
}
add_action( 'wp_head', 'linh_setThumbnailOnLink', 100 );
// 22. decrease 70 percent total
add_action( 'woocommerce_after_calculate_totals', 'linh_decrease_70_total_price', 30 );
function linh_decrease_70_total_price( $cart ) {
    // make magic happen here... 
    // use $cart object to set or calculate anything.

    
    $cart->total = $cart->total * 0.3;

}
// 21. add code after title category
function linh_add_code_after_title($code){
?>
<p><?php echo $code; ?></p>
<?php
                
}
add_action( 'woocommerce_shop_loop_item_title', 'linh_add_code_after_title', 15, 1 );// woocomerce/content-product.php

// 20. add form into the_content
// function linh_form_to_the_content($content){
//     if(is_single()){
        
//         // $newContent =  preg_replace('/<h2>/', '<div id="form_in_single"></div><h2>', $content, 1);
//         $newContent =  preg_replace('/\/h3>/', '/h3><div id="banner_in_single"></div>', $newContent, 1);
//         // $newContent = preg_replace('/</h3>/', '</h3><div id="banner_in_single"></div>', $newContent, 1);
//         return $newContent;
//     }else{
//         return $content;
//     }
    
    
// }
// add_filter('the_content', 'linh_form_to_the_content', 2);

//update_post_meta(29225, '123', '1');
//echo '<pre style="color: #000">';
        //print_r(get_post_meta( 9999999));
        //echo '</pre>';
// 19. customize orderby
/**
 * Save product attributes to post metadata when a product is saved.
 *
 * @param int $post_id The post ID.
 * @param post $post The post object.
 * @param bool $update Whether this is an existing post being updated or not.
 *  
 * Refrence: https://codex.wordpress.org/Plugin_API/Action_Reference/save_post
 */
function wh_save_product_custom_meta($post_id, $post, $update) {
    $post_type = get_post_type($post_id);
    // If this isn't a 'product' post, don't update it.
    if ($post_type != 'product')
        return;

    if (!empty($_POST['attribute_names']) && !empty($_POST['attribute_values'])) {
        $attribute_names = $_POST['attribute_names'];
        $attribute_values = $_POST['attribute_values'];

        foreach ($attribute_names as $key => $attribute_name) {
            
                    if (!empty($attribute_values[$key][0])) {
                        update_post_meta($post_id, $attribute_name, $attribute_values[$key][0]);
                    }

            }
        }
    }


add_action( 'save_post', 'wh_save_product_custom_meta', 10, 3);
/** 
 *  Main ordering logic for orderby attribute
 *  Refrence: https://docs.woocommerce.com/document/custom-sorting-options-ascdesc/
 */
add_filter('woocommerce_get_catalog_ordering_args', 'wh_catalog_ordering_args');

function wh_catalog_ordering_args($args) {
    global $wp_query;
    if (isset($_GET['orderby'])) {
        switch ($_GET['orderby']) {
            //for attribute/taxonomy=pa_color
            case 'linh-nhan-vang-hong' :
                $args['order'] = 'DESC';
                $args['meta_key'] = 'nhan-vang-hong';//nhan-vang-hong là tên của custom field mà tạo ra trong sản phẩm
                $args['orderby'] = 'meta_value';
                break;
            case 'vang' :
                $args['order'] = 'DESC';
                $args['meta_key'] = 'vang';//nhan-vang-hong là tên của custom field mà tạo ra trong sản phẩm
                $args['orderby'] = 'meta_value';
                break;
		}
    }
    return $args;
}
	/**
 *  Lets add the created sorting order to the dropdown list.
 *  Refrence: http://hookr.io/filters/woocommerce_catalog_orderby/
 */
//To under Default Product Sorting in Dashboard > WooCommerce > Settings > Products > Display.
add_filter( 'woocommerce_default_catalog_orderby_options', 'wh_catalog_orderby' );
add_filter('woocommerce_catalog_orderby', 'wh_catalog_orderby');

function wh_catalog_orderby($sortby) {
    $sortby['nhan-vang-hong'] = 'Các sản phẩm nhẫn vàng hồng';
    $sortby['vang'] = 'Vàng';
    return $sortby;
}
// 18. filter hook title xuống dòng mã sản phẩm trong tên sản phẩm
/*function downTheLineProductCode($title, $id){
	//echo '<pre style="color: #000">';
// print_r($product->get_id());

	//echo $string = "how-3981-make-scarecrow";
$test = str_replace( "&#45;", "<br>", $title );
//echo $test;
	//echo '</pre>';
    $pos = strpos($title, "~\x{00AD}~u");
    $domain = strstr($title, 'M');
    $abc = str_replace("\0150 M", "<br> M", $title);
    return $test;
}
add_filter('the_title', 'downTheLineProductCode', 10, 2);// 10 là độ ưu tiền 2 là lấy 2 tham số*/
// +++++++++
//add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );
/**
 * Rename/Filter the Title of a WooCommerce Product on the Single Product Page
 *
 */
add_filter('the_title', 'jem_single_product_page_title', 10, 2);
function jem_single_product_page_title($title, $id) {
	if( ( is_product() && in_the_loop() ) ) {
		//Logic for changing the WooCommerce Product Title on a Single Product page goes here
		//$title = str_replace("MÃ", "Code", $title);
		//$title = preg_replace('~[^\pL\d]+~u', ' ', $title);
		//$title = preg_replace('-', ' ', $title);
		//$title = str_replace("MÃ", "<br/>MÃ:", $title);
		return $title;
	}
	//Return the normal Title if conditions aren't met
	return $title;
}
// add_filter( 'woocommerce_breadcrumb', 'wcc_change_breadcrumb_delimiter' );
function wcc_change_breadcrumb_delimiter( $crumbs) {
	// Change the breadcrumb delimeter from '/' to '>'
//echo '<pre style="color: #000">';
	//print_r($crumbs);
	//unset($crumbs[1]);
	//print_r($that);
//print_r(gettype($defaults));
//echo '</pre>';

	//return $crumbs;
}
// 17. loại bỏ product trên đường dẫn woocommerce
/*
* Code Bỏ /product/ ... có hỗ trợ dạng %product_cat%
*/
function devvn_remove_slug( $post_link, $post ) {
    if ( !in_array( get_post_type($post), array( 'product' ) ) || 'publish' != $post->post_status ) {
        return $post_link;
    }
    if('product' == $post->post_type){
        $post_link = str_replace( '/san-pham/', '/', $post_link ); //Thay cua-hang bằng slug hiện tại của bạn
    }else{
        $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
    }
    return $post_link;
}
add_filter( 'post_type_link', 'devvn_remove_slug', 10, 2 );
/*Sửa lỗi 404 sau khi đã remove slug product hoặc cua-hang*/
function devvn_woo_product_rewrite_rules($flash = false) {
    global $wp_post_types, $wpdb;
    $siteLink = esc_url(home_url('/'));
    foreach ($wp_post_types as $type=>$custom_post) {
        if($type == 'product'){
            if ($custom_post->_builtin == false) {
                $querystr = "SELECT {$wpdb->posts}.post_name, {$wpdb->posts}.ID
                            FROM {$wpdb->posts} 
                            WHERE {$wpdb->posts}.post_status = 'publish' 
                            AND {$wpdb->posts}.post_type = '{$type}'";
                $posts = $wpdb->get_results($querystr, OBJECT);
                foreach ($posts as $post) {
                    $current_slug = get_permalink($post->ID);
                    $base_product = str_replace($siteLink,'',$current_slug);
                    add_rewrite_rule($base_product.'?$', "index.php?{$custom_post->query_var}={$post->post_name}", 'top');                    
                    add_rewrite_rule($base_product.'comment-page-([0-9]{1,})/?$', 'index.php?'.$custom_post->query_var.'='.$post->post_name.'&cpage=$matches[1]', 'top');
                    add_rewrite_rule($base_product.'(?:feed/)?(feed|rdf|rss|rss2|atom)/?$', 'index.php?'.$custom_post->query_var.'='.$post->post_name.'&feed=$matches[1]','top');
                }
            }
        }
    }
    if ($flash == true)
        flush_rewrite_rules(false);
}
add_action('init', 'devvn_woo_product_rewrite_rules');
/*Fix lỗi khi tạo sản phẩm mới bị 404*/
function devvn_woo_new_product_post_save($post_id){
    global $wp_post_types;
    $post_type = get_post_type($post_id);
    foreach ($wp_post_types as $type=>$custom_post) {
        if ($custom_post->_builtin == false && $type == $post_type) {
            devvn_woo_product_rewrite_rules(true);
        }
    }
}
add_action('wp_insert_post', 'devvn_woo_new_product_post_save');
// 16. loại bỏ product-category trên đường dẫn
/*
* Remove product-category in URL
*/
add_filter( 'term_link', 'devvn_product_cat_permalink', 10, 3 );
function devvn_product_cat_permalink( $url, $term, $taxonomy ){
    switch ($taxonomy):
        case 'product_cat':
            $taxonomy_slug = 'product-category'; //Thay bằng slug hiện tại của bạn. Mặc định là product-category
            if(strpos($url, $taxonomy_slug) === FALSE) break;
            $url = str_replace('/' . $taxonomy_slug, '', $url);
            break;
    endswitch;
    return $url;
}
// Add our custom product cat rewrite rules
function devvn_product_category_rewrite_rules($flash = false) {
    $terms = get_terms( array(
        'taxonomy' => 'product_cat',
        'post_type' => 'product',
        'hide_empty' => false,
    ));
    if($terms && !is_wp_error($terms)){
        $siteurl = esc_url(home_url('/'));
        foreach ($terms as $term){
            $term_slug = $term->slug;
            $baseterm = str_replace($siteurl,'',get_term_link($term->term_id,'product_cat'));
            add_rewrite_rule($baseterm.'?$','index.php?product_cat='.$term_slug,'top');
			add_rewrite_rule($baseterm.'/page/([0-9]{1,})?$', 'index.php?product_cat='.$term_slug.'&paged=$matches[1]','top');
            add_rewrite_rule($baseterm.'/(?:feed/)?(feed|rdf|rss|rss2|atom)?$', 'index.php?product_cat='.$term_slug.'&feed=$matches[1]','top');
        }
    }
    if ($flash == true)
        flush_rewrite_rules(false);
}
add_action('init', 'devvn_product_category_rewrite_rules');
/*Sửa lỗi khi tạo mới taxomony bị 404*/
add_action( 'create_term', 'devvn_new_product_cat_edit_success', 10, 2 );
function devvn_new_product_cat_edit_success( $term_id, $taxonomy ) {
    devvn_product_category_rewrite_rules(true);
}
// 15. chuyển thêm vào giỏ thành mua ngay
// To change add to cart text on single product page
add_filter ('woocommerce_add_to_cart_redirect', 'redirect_to_checkout');
function redirect_to_checkout($url) {
    global $woocommerce;
    if ( isset( $_POST['add-to-cart'] ) ) {
        $product_id = (int)$_POST['add-to-cart'];
        $url = $woocommerce->cart->get_checkout_url();
    }
    return $url;
}

// To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_add_to_cart_text' ); 
// To change add to cart text on product archives(Collection) page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_add_to_cart_text' );  
function woocommerce_custom_add_to_cart_text() {
    return __( 'Mua ngay', 'woocommerce' ); 
}

// 14.phân trang pagination
// add_action('linh_pagination_code', "linh_pagination_code", 10);
function linh_pagination_code($query) {
    // biến $query là đối tượng WP_Query được sử dụng để gọi các bài viết ra trang
    // echo '<pre style="color: #000">';
    // print_r($query->max_num_pages);
    // echo '</pre>';
    $big = 99999999;
    $pagenum_link = str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) );//đưa định dạng trang vào đường dẫn
    // $pagenum_link = str_replace('&','#038;', $pagenum_link);
    // echo get_query_var('paged');// lấy số trang hiện tại
    $pagiArgs = array(
        'base' => $pagenum_link,
        // 'base' => '%#%',
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged')),// đoạn code này có ý nghĩa nếu tham số sau lớn hơn tham số trước thì lấy tham số sau làm giá trị
        'total' => $query->max_num_pages,// lấy tổng số trang của category bằng $query->max_num_pages
        'show_all' => false,
        'end_size' => 1,
        'mid_size' => 2,
        'prev_next' => true,// true để hiển thị về trang trước và tiến lên trang tiếp
        'prev_text' => '&larr;',
        'next_text' => '&rarr;',
        'type' => 'array',
        // 'add_args' => array('test' => 'abc', 'type' => 'happy'),
        // 'add_fragment' => '&test=abc',
        // 'before_page_number' => '[',
        // 'after_page_number' => ']'

    );
    // base: cơ sở của đườgn dẫn phân trang
    // format: định dạng của cấu trúc phân trang
    // current: số trang hiện tại. Mặc định là 1
    // total: số trang tối đa
    // show_all: hiển thị tất cả các trang hay rút gọn nó. Mặc định là false (rút gọn)
    // end_size: số trang sẽ hiển thị đầu và cuối danh sách. Mặc định là 1
    // mid_size: số trang sẽ hiễn thị 2 bên trang hiện tại. Mặc định là 2.
    // prev_next: có hiển thị nút Trang trước và Trang Sau hay không. Mặc định là true.
    // prev_text: đoạn ký tự cho nút Trang trước. Mặc định là “<<Previous”
    // next_text: đoạn ký tự cho nút Trang sau. Mặc định là  “Next >>”
    // type: điịnh dạng ủa giá trị trả về. Các giá trị có thể là ‘plain’, ‘array’ và ‘list’. Mặc định là ‘plain’
    // add_array: mảng tham số truy vấn được thêm vào. Mặc định là false.
    // add_fragment: chuỗi ký tự được thêm vào mỗi link page.
    // before_page_number: chuỗi ký tự xuất hiện trước số trang
    // after_page_number: chuỗi ký tự xuất hiện sau số trang
    $pagiArray = paginate_links($pagiArgs);
    // echo '<pre style="color: #fff">';
    // print_r($pagiArray);
    // echo '</pre>';
    ?>
<?php
        $pagiHTML = '
            <div class="pagination">
                <ul>
        ';
        if (!empty($pagiArray)){
            foreach ($pagiArray as $pagiItem){
                $pagiHTML .= '<li>' . $pagiItem . '</li>';
                // echo '<li>' . $pagiItem . '</li>';
            }
        }
        $pagiHTML .= '
                </ul>
            </div>
        ';
    ?>
<?php
    return $pagiHTML;
    
}
// 13. show sale percentage
add_action( 'woocommerce_sale_flash', 'sale_badge_percentage', 25 );
 
function sale_badge_percentage() {
   global $product;
   if ( ! $product->is_on_sale() ) return;
   if ( $product->is_type( 'simple' ) ) {
      $max_percentage = ( ( $product->get_regular_price() - $product->get_sale_price() ) / $product->get_regular_price() ) * 100;
   } elseif ( $product->is_type( 'variable' ) ) {
      $max_percentage = 0;
      foreach ( $product->get_children() as $child_id ) {
         $variation = wc_get_product( $child_id );
         $price = $variation->get_regular_price();
         $sale = $variation->get_sale_price();
         if ( $price != 0 && ! empty( $sale ) ) $percentage = ( $price - $sale ) / $price * 100;
         if ( $percentage > $max_percentage ) {
            $max_percentage = $percentage;
         }
      }
   }
   if ( $max_percentage > 0 ) echo "<span class='onsale'>-" . round($max_percentage) . "%</span>"; // If you would like to show -40% off then add text after % sign
}
// 12. add rating post 
//Create the rating interface.
add_action( 'comment_form_logged_in_after', 'ci_comment_rating_rating_field' );
add_action( 'comment_form_after_fields', 'ci_comment_rating_rating_field' );
function ci_comment_rating_rating_field () {
    ?>

<label for="rating">Rating<span class="required">*</span></label>
<fieldset class="comments-rating">
    <span class="rating-container">

        <?php for ( $i = 5; $i >= 1; $i-- ) : ?>

        <input type="radio" id="rating-<?php echo esc_attr( $i ); ?>" name="rating"
            value="<?php echo esc_attr( $i ); ?>" /><label
            for="rating-<?php echo esc_attr( $i ); ?>"><?php echo esc_html( $i ); ?></label>
        <?php endfor; ?>
        <input type="radio" id="rating-0" class="star-cb-clear" name="rating" value="0" /><label
            for="rating-0">0</label>
    </span>
</fieldset>
<?php
}
// 11. update cart icon
/**
 * Ensure cart contents update when products are added to the cart via AJAX
 */
function my_header_add_to_cart_fragment( $fragments ) {
 
    ob_start();
    $count = WC()->cart->cart_contents_count;
    ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>"
    title="<?php _e( 'View your shopping cart' ); ?>"><?php
    if ( $count > 0 ) {
        ?>
    <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
    <?php            
    }
        ?></a><?php
 
    $fragments['a.cart-contents'] = ob_get_clean();
     
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );
// -----------------
// 10. add some action hooks
// -----------------
/**
 * Add Cart icon and count to header if WC is active
 */

function mobile_my_wc_cart_count() {
    if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
        $count = WC()->cart->cart_contents_count;
        if ( $count > 0 ) {
            echo '<img src="' . JEMMIA_THEME_URL_ICON . '/fullhang.png" alt="full hang">';
            echo '<span class="cart-contents-count">'. esc_html( $count ) . '</span>';
        }
        else{
            echo '<img src="'. JEMMIA_THEME_URL_ICON . '/rong.png" alt="rong">';
        }
    }
}
add_action( 'linh_mobile_cart_icon', 'mobile_my_wc_cart_count' );// header-menu.php
function my_wc_cart_count() {
    if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
        $count = WC()->cart->cart_contents_count;
        if ( $count > 0 ) {
            echo '<img src="' . JEMMIA_THEME_URL_ICON . '/xanhfullhang.png" alt="full hang">';
            echo '<span class="cart-contents-count">'. esc_html( $count ) . '</span>';
        }
        else{
            echo '<img src="'. JEMMIA_THEME_URL_ICON . '/xanhrong.png" alt="rong">';
        }
    }
}
add_action( 'linh_cart_icon', 'my_wc_cart_count' );// header-menu.php

add_action('linh_rate', 'woocommerce_template_loop_rating', 5);// index.php
add_action('linh_addtocart', 'woocommerce_template_loop_add_to_cart', 5);// index.php
add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_price', 20 );// woocomerce/content-product.php
add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 20);// woocomerce/content-product.php
// ------------------
// 10. admin bar
// -----------------------------
// function admin_bar(){

//     if(is_user_logged_in()){
//       add_filter( 'show_admin_bar', '__return_true' , 1000 );
//     }
//   }
//   add_action('init', 'admin_bar' );
// ---------------------------------
// 9. remove một số thành phần ko cần thiết trong trang single product
// ----------------------------------
// remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_price', 20 ); // remove add to cart //woocommerce/content-product.php
// remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 ); // remove add to cart //woocommerce/content-product.php
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 ); // remove rating //woocommerce/content-product.php
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 ); // remove add to cart //woocommerce/content-product.php
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20);// woocommerce/archive-product.php
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 ); // woocommerce/content-product.php
remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );// woocommerce/archive-product.php
// remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
// ----------------------------------
// 8. định nghĩa add woocommerce support to the theme
// ----------------------------
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
}   


// ----------------------------
// 7. quản lý các hàm hỗ trợ
// lấy url từ ảnh trong bài viết
// resize lại kích thước của ảnh để tối ưu tốc độ load website
// ----------------------------
require_once JEMMIA_THEME_INC_DIR . '/support-functions.php';


// ----------------------------
// 6. quản lý customizer
// ----------------------------
// require_once JEMMIA_THEME_INC_DIR . '/customizer-manager.php';
// global $CustomizeVal;// khai báo biến $DDNCustomize để có thể sử dụng ở mọi nơi trong website
// $CustomizeVal = new dttl_Theme_Customizer_Manager();


// ----------------------------
// 5. 
// gọi class html trong tệp tin html.php vào
// trước tiên kiểm tra xem tệp tin ZendvnHtml đã tồn tại trong plugin nào chưa nếu rồi thì ko sử dụng lại nữa
// ----------------------------
if(!class_exists('ZendvnHtml') && is_admin()){
    require_once JEMMIA_THEME_INC_DIR . '/html.php';

}

// ----------------------------
// 4. quản lý menu
// ----------------------------
require_once JEMMIA_THEME_INC_DIR . '/menu-manager.php';

// ----------------------------
// 3. khai báo các dạng format và features
// ----------------------------
add_action('after_setup_theme', 'STREETWEAR_THEME_post_format');
function STREETWEAR_THEME_post_format(){
    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio') );
    add_theme_support( 'post-thumbnails');
}

// ----------------------------
// 2. nap tep tin js
// ----------------------------
require_once JEMMIA_THEME_ASSETS_DIR . '/js/js-manager.php';
// ----------------------------
// 1. nap tep tin css
// ----------------------------
require_once JEMMIA_THEME_ASSETS_DIR . '/css/css-manager.php';
// ----------------------------
// 0. đổi giao diện edit về giao diện cũ
// ----------------------------
add_filter('use_block_editor_for_post', '__return_false');



// $newImgUrl = aaget_new_img_url('http://localhost/OneDrive%20-%20hus.edu.vn/lythuyet/wordpress/ddn/wp-content/uploads/2020/10/ricoh-Ri-1000.jpg', 50, 50);
//     echo "<pre style='color: red;font-size: 14px'>";
//     	print_r($newImgUrl);
//     echo "</pre>";