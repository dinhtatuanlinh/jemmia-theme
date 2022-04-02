<a name='gotop'></a>
<div id="closeMobileMenu" onclick='closemenu()'></div>
<div id="mobile-menu">
    <div class="close" onclick='closemenu()'><i class="fa fa-times" aria-hidden="true"></i>
    </div>
    <?php
        if(has_nav_menu('mobile_menu')){
            $args = array(
                'menu'                 => '',
                'container'            => '',
                'container_class'      => '',
                'container_id'         => '',
                'container_aria_label' => '',
                'menu_class'           => '',
                'menu_id'              => '',
                'echo'                 => true,
                'fallback_cb'          => 'wp_page_menu',
                'before'               => '',
                'after'                => '',
                'link_before'          => '',
                'link_after'           => '',
                'items_wrap'           => '<ul>%3$s</ul>',//%3$s tương ứng với giá trị trong cặp thẻ li đưa vào
                'item_spacing'         => 'preserve',
                'depth'                => 3,// cho phép menu hiện 2 cấp nếu bằng 0 thì hiện tất cả các cấp bằng 1 thì chỉ hiện menu cha
                'walker'               => '',
                'theme_location'       => 'mobile_menu',
            );
            wp_nav_menu( $args );
        }
    ?>
    <div class="close2" onclick='closemenu()'><i class="fa fa-times" aria-hidden="true"></i></div>
    <!-- <ul>
            <li><a href="">Trang chủ</a></li>
            <li>
                <a href="">jemmia diamond</a>
                <ul>
                    <li>
                        <a href="">kim cương tự nhiên GIA</a>
                        <ul>
                            <li><a href="">kim cương rời GIA</a></li>
                            <li><a href="">nhẫn kim cương tự nhiên</a></li>
                            <li><a href="">vỏ nhẫn kim cương tự nhiên</a></li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li>
                <a href="">jemmia moissanite</a>
                <ul>
                    <li><a href="">moissanite viên rời</a></li>
                    <li>
                        <a href="">nhẫn moissanite</a>
                        <ul>
                            <li><a href="">nhẫn moissanite nam</a></li>
                            <li><a href="">nhẫn moissanite nữ</a></li>
                            <li><a href="">nhẫn đồng hồ</a></li>
                            <li><a href="">vỏ nhẫn moissanite</a></li>
                        </ul>
                    </li>
                    <li><a href="">bông tai moissanite</a></li>
                    <li><a href="">lắc/vòng tay moissanite</a></li>
                    <li><a href="">mặt dây chuyền moissanite</a></li>
                    <li><a href="">bộ trang sức moissanite</a></li>
                </ul>
            </li>
            <li>
                <a href="">love & wedding</a>
                <ul>
                    <li><a href="">nhẫn cầu hôn moissanite</a></li>
                    <li><a href="">nhẫn cưới moissanite</a></li>
                </ul>
            </li>
            <li><a href="">Cẩm nang</a>
                <ul>
                    <li><a href="">Bảng quy đổi kích thước kim cương</a></li>
                    <li><a href="">Kiến thức kim cương</a></li>
                    <li><a href="">Kim Cương Máu</a></li>
                    <li><a href="">Đá Quý</a>
                        <ul>
                            <li><a href="">Đá Quý tự nhiên</a></li>
                            <li><a href="">Đá bán quý</a></li>
                        </ul>
                    </li>
                    <li><a href="">Tư vấn và giải đáp</a>
                        <ul>
                            <li><a href="">Tư vấn Moissanite</a></li>
                            <li><a href="">Tư vấn kim cương tự nhiên</a></li>
                            <li><a href="">Tư vấn Trang Sức</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="">Bảng giá</a>
                <ul>
                    <li><a href="">Kim cương GIA giá lẻ</a></li>
                    <li><a href="">Kim cương GIA giá sỉ</a></li>
                    <li><a href="">Bảng giá Moissanite</a></li>
                    <li><a href="">Bảng giá kim cương CVD</a></li>
                </ul>
            </li>
        </ul> -->
</div>

<div id="top">
    <div id="upper" name="upper">
        <div class="background_upper"></div>
        <div class="wrapper">
            <div class="slogan">jemmia kim cương siêu đỉnh - giá siêu sỉ</div>
            <div class="phone"><img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/phone.png" alt="">
                <label>
                    <a class="hotline" href="tel:0775 110 111">0838353333</a>
                </label>
            </div>
        </div>
    </div>

    <div id="navi">
        <div class="wrapper">
            <div id="mobile-icon-menu" class="desktop-hide" onclick="openmenu()">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div id="logo">
                <!-- <img id="shinning" src="<?php //echo JEMMIA_THEME_URL_IMG; ?>/04.png" alt=""> -->
                <a href="<?php echo get_home_url(); ?>"><img
                        src="<?php echo JEMMIA_THEME_URL_IMG; ?>/LOGO.png" alt="jemmia"></a>
            </div>
            <div id="mobileCart">
                <a href="<?php echo WC()->cart->get_cart_url(); ?>">
                    <div class="desktop-hide">
                        <?php // my_wc_cart_count fucntion

                            do_action('linh_mobile_cart_icon');

                        ?>
                        <!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->

                    </div>
                </a>
            </div>

            <?php
                        if(has_nav_menu('main_menu')){
                            $args = array(
                                'menu'                 => '',
                                'container'            => 'nav',
                                'container_class'      => 'tablet-hide mobile-hide',
                                'container_id'         => '',
                                'container_aria_label' => '',
                                'menu_class'           => '',
                                'menu_id'              => '',
                                'echo'                 => true,
                                'fallback_cb'          => 'wp_page_menu',
                                'before'               => '',
                                'after'                => '',
                                'link_before'          => '',
                                'link_after'           => '',
                                'items_wrap'           => '<ul>%3$s<hr/></ul>',//%3$s tương ứng với giá trị trong cặp thẻ li đưa vào
                                'item_spacing'         => 'preserve',
                                'depth'                => 3,// cho phép menu hiện 2 cấp nếu bằng 0 thì hiện tất cả các cấp bằng 1 thì chỉ hiện menu cha
                                'walker'               => '',
                                'theme_location'       => 'main_menu',
                            );
                            wp_nav_menu( $args );
                        }
                    ?>
            <!-- <nav class="tablet-hide mobile-hide">
                    <ul>
                        <li><a href="<?php echo get_home_url(); ?>">Trang chủ</a></li>
                        <li>
                            <a href="">jemmia diamond</a>
                            <ul>
                                <li>
                                    <a href="">kim cương tự nhiên GIA</a>
                                    <ul>
                                        <li><a href="">kim cương rời GIA</a></li>
                                        <li><a href="">nhẫn kim cương tự nhiên</a></li>
                                        <li><a href="">vỏ nhẫn kim cương tự nhiên</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="">jemmia moissanite</a>
                            <ul>
                                <li><a href="">moissanite viên rời</a></li>
                                <li>
                                    <a href="">nhẫn moissanite</a>
                                    <ul>
                                        <li><a href="">nhẫn moissanite nam</a></li>
                                        <li><a href="">nhẫn moissanite nữ</a></li>
                                        <li><a href="">nhẫn đồng hồ</a></li>
                                        <li><a href="">vỏ nhẫn moissanite</a></li>

                                    </ul>
                                </li>
                                <li><a href="">bông tai moissanite</a></li>
                                <li><a href="">lắc/vòng tay moissanite</a></li>
                                <li><a href="">mặt dây chuyền moissanite</a></li>
                                <li><a href="">bộ trang sức moissanite</a></li>
                            </ul>

                        </li>

                        <li>
                            <a href="">love & wedding</a>
                            <ul>
                                <li><a href="">nhẫn cầu hôn moissanite</a></li>
                                <li><a href="">nhẫn cưới moissanite</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">Cẩm nang</a>
                            <ul>
                                <li><a href="">Bảng quy đổi kích thước kim cương</a></li>
                                <li><a href="">Kiến thức kim cương</a></li>
                                <li><a href="">Kim Cương Máu</a></li>
                                <li>
                                    <a href="">Đá Quý</a>
                                    <ul>
                                        <li><a href="">Đá Quý tự nhiên</a></li>
                                        <li><a href="">Đá bán quý</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">Tư vấn và giải đáp</a>
                                    <ul>
                                        <li><a href="">Tư vấn Moissanite</a></li>
                                        <li><a href="">Tư vấn kim cương tự nhiên</a></li>
                                        <li><a href="">Tư vấn Trang Sức</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="">Bảng giá</a>
                            <ul>
                                <li><a href="">Kim cương GIA giá lẻ</a></li>
                                <li><a href="">Kim cương GIA giá sỉ</a></li>
                                <li><a href="">Bảng giá Moissanite</a></li>
                                <li><a href="">Bảng giá kim cương CVD</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav> -->
                <div id="searchform" class="mobile-hide tablet-hide">
                    <?php get_search_form();//kéo searchform vào ?>
                </div>    
        </div>
    </div>