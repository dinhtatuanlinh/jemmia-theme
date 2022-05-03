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
        <div class="wrapper bgkc">
            <div class="price_table">
                <a class="items" href="https://jemmia.vn/bang-gia-kim-cuong-tu-nhien">
                    <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/1.png" alt="">
                    <div>Bảng giá kim cương Round</div>
                </a>
                <a class="items" href="https://jemmia.vn/bang-gia-moissanite">
                    <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/2.png" alt="">
                    <div>bảng giá moissanite</div>
                </a>
                <a class="items" href="https://jemmia.vn/bang-gia-kim-cuong-vang">
                    <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/1.png" alt="">
                    <div>bảng giá kim cương vàng</div>
                </a>
                <a class="items" href="https://jemmia.vn/bang-gia-kim-cuong-fancy-cut">
                    <img src="<?php echo JEMMIA_THEME_URL_ICON; ?>/2.png" alt="">
                    <div>Bảng giá kim cương Fancy cut GIA</div>
                </a>
            </div>
            <h1 class="bgkc-title">
                <?php
                the_title();
            ?>
            </h1>
            <div class="gia">
                <img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/gia-report.png" alt="">
            </div>
            <p>Flash Sale kim cương giá sỉ kiểm định GIA</p>
            <p>Cơ hội sở hữu kim cương giá tốt, kim cương giá rẻ chưa từng có</p>
            <p>(Giảm đến 35% so với trước khi Covid)</p>
            <!-- <div id="bgkc-classify" class="bgkc-container">
                <div class="bgkc-row">
                    <div class="bgkc-col bgkc-head">Ly</div>
                    <div class="bgkc-col bgkc-head">Màu, độ sạch</div>
                    <div class="bgkc-col bgkc-head">Giá</div>
                </div>
                <div class="bgkc-row">
                    <div class="bgkc-col">4 Ly 5</div>
                    <div class="bgkc-col">D/VVS1</div>
                    <div class="bgkc-col">
                        <p class="linh-goc">24,182,323</p>
                        <p class="linh-sale">17,912,832</p>
                    </div>
                </div>
                <div class="bgkc-row">
                    <div class="bgkc-col">5 Ly 4</div>
                    <div class="bgkc-col">D/VVS1</div>
                    <div class="bgkc-col">
                        <p class="linh-goc">89,964,000</p>
                        <p class="linh-sale">66,640,000</p>
                    </div>
                </div>
                <div class="bgkc-row">
                    <div class="bgkc-col">6 Ly 3</div>
                    <div class="bgkc-col">D/VVS1</div>
                    <div class="bgkc-col">
                        <p class="linh-goc">240,311,837</p>
                        <p class="linh-sale">178,008,768</p>
                    </div>
                </div>
                <div class="bgkc-row">
                    <div class="bgkc-col">7 Ly 2</div>
                    <div class="bgkc-col">D/VVS1</div>
                    <div class="bgkc-col">
                        <p class="linh-goc">549,248,213</p>
                        <p class="linh-sale">406,850,528</p>
                    </div>
                </div>
                <div class="bgkc-row">
                    <div class="bgkc-col">8 Ly 1</div>
                    <div class="bgkc-col">D/VVS1</div>
                    <div class="bgkc-col">
                        <p class="linh-goc">1,000,363,694</p>
                        <p class="linh-sale">741,010,144</p>
                    </div>
                </div>
                <div class="bgkc-row">
                    <div class="bgkc-col">9 Ly</div>
                    <div class="bgkc-col">D/VVS1</div>
                    <div class="bgkc-col">
                        <p class="linh-goc">2,814,181,877</p>
                        <p class="linh-sale">2,084,579,168</p>
                    </div>
                </div>
            </div> -->
            <div class="bgkc-tab-container has-block tooltipstered">
                <div class="bgkc-tab" id="3ly6" onclick="showbgkc('3ly6')">3 ly 6</div>
                <div class="bgkc-tab" id="4ly" onclick="showbgkc('4ly')">4 ly</div>
                <div class="bgkc-tab" id="4ly5" onclick="showbgkc('4ly5')">4 ly 5</div>
                <!-- <div class="bgkc-tab" id="5ly" onclick="showbgkc('5ly')">5 ly</div> -->
                <div class="bgkc-tab active" id="5ly4" onclick="showbgkc('5ly4')">5 ly 4</div>
                <div class="bgkc-tab" id="6ly" onclick="showbgkc('6ly')">6 ly</div>
                <div class="bgkc-tab" id="6ly3" onclick="showbgkc('6ly3')">6 ly 3</div>
                <div class="bgkc-tab" id="6ly8" onclick="showbgkc('6ly8')">6 ly 8</div>
                <div class="bgkc-tab" id="7ly" onclick="showbgkc('7ly')">7 ly</div>
                <div class="bgkc-tab" id="7ly2" onclick="showbgkc('7ly2')">7 ly 2</div>
                <div class="bgkc-tab" id="8ly" onclick="showbgkc('8ly')">8 ly</div>
                <div class="bgkc-tab" id="8ly1" onclick="showbgkc('8ly1')">8 ly 1</div>
                <div class="bgkc-tab" id="8ly6" onclick="showbgkc('8ly6')">8 ly 6</div>
                <div class="bgkc-tab" id="9ly" onclick="showbgkc('9ly')">9 ly</div>
                <div class="bgkc-tab" id="10ly" onclick="showbgkc('10ly')">10 ly</div>
            </div>

            <div class="bgkc-container has-block tooltipstered">

                <!-- #################################################### -->





                <div class="bgkc-tab-content all 3ly6">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA
                        3 LY 6
                    </div>
                    <div class="bgkc-row">

                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)</div>

                        <div class="bgkc-col bgkc-head">Nước màu</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>

                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            3.6
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            4.410.754
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6193132529">
                                6193132529
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            3.6
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            4.872.010
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5383589153">
                                5383589153
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            3.6
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            5.044.981
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7382503036">
                                7382503036
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            3.6
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            5.390.922
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6382499700">
                                6382499700
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            3.6
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            5.592.722
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6382751348">
                                6382751348
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            3.6
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            5.592.722
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7376355419">
                                7376355419
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            3.6
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            5.765.692
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2387672727">
                                2387672727
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            3.6
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            6.053.977
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6382499710">
                                6382499710
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            3.6
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            6.342.262
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1389578388">
                                1389578388
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            3.6
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            6.745.860
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7386750391">
                                7386750391
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            3.6
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            7.553.057
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1387713355">
                                1387713355
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            3.6
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            7.639.542
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7346380635">
                                7346380635
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-footer"><img
                            src="https://jemmia.vn/wp-content/uploads/2021/04/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>

                <div class="bgkc-tab-content all 4ly">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA
                        4 LY
                    </div>
                    <div class="bgkc-row">

                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)</div>

                        <div class="bgkc-col bgkc-head">Nước màu</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>

                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            6.082.805
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6362881733">
                                6362881733
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            7.062.973
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5336039263">
                                5336039263
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            7.091.802
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6372026163">
                                6372026163
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            7.091.802
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1388577558">
                                1388577558
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            7.149.459
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6381577280">
                                6381577280
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            7.322.429
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7351783555">
                                7351783555
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            8.360.254
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7381804660">
                                7381804660
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            8.389.083
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5306705606">
                                5306705606
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            8.735.024
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7381743008">
                                7381743008
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            8.850.338
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5383755774">
                                5383755774
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            8.907.995
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1389683764">
                                1389683764
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            8.907.995
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6382674574">
                                6382674574
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            9.080.966
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2384148141">
                                2384148141
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            9.340.422
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5386762438">
                                5386762438
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            10.435.903
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7373964595">
                                7373964595
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            10.580.046
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1385674507">
                                1385674507
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-footer"><img
                            src="https://jemmia.vn/wp-content/uploads/2021/04/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>

                <div class="bgkc-tab-content all 4ly5">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA
                        4 LY 5
                    </div>
                    <div class="bgkc-row">

                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)</div>

                        <div class="bgkc-col bgkc-head">Nước màu</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>

                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            23.144.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7398662198">
                                7398662198
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            18.061.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6382884585">
                                6382884585
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            16.871.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6391047585">
                                6391047585
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            16.438.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2387487124">
                                2387487124
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            21.954.450
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6395319703">
                                6395319703
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            17.520.300
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1379679784">
                                1379679784
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            16.330.650
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5396162648">
                                5396162648
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            15.789.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6395500614">
                                6395500614
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            21.630.000
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6391339339">
                                6391339339
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            16.763.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6351078604">
                                6351078604
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            16.330.650
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5383859718">
                                5383859718
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            14.600.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7398379728">
                                7398379728
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            16.006.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6385969695">
                                6385969695
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            16.222.500
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1389591452">
                                1389591452
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            14.708.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6345120413">
                                6345120413
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            14.059.500
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2394382669">
                                2394382669
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            15.249.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7372599063">
                                7372599063
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            14.816.550
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5383901841">
                                5383901841
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            14.275.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6371967670">
                                6371967670
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            14.600.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2384217430">
                                2384217430
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            14.924.700
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1353930910">
                                1353930910
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            14.167.650
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2397132718">
                                2397132718
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            14.708.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5373722184">
                                5373722184
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            12.653.550
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7391202895">
                                7391202895
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            12.545.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5353958413">
                                5353958413
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            13.410.600
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2384469532">
                                2384469532
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            13.086.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1348922091">
                                1348922091
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            10.166.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2386901850">
                                2386901850
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            14.059.500
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2337582037">
                                2337582037
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            12.112.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7388957583">
                                7388957583
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            10.923.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5393616629">
                                5393616629
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            9.517.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1389652966">
                                1389652966
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            10.598.700
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2344658618">
                                2344658618
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            8.652.000
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1369112306">
                                1369112306
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            9.733.500
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6341156957">
                                6341156957
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            4.5
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            8.327.550
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7391484436">
                                7391484436
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-footer"><img
                            src="https://jemmia.vn/wp-content/uploads/2021/04/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>

                <div class="bgkc-tab-content all 5ly">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA
                        5 LY
                    </div>
                    <div class="bgkc-row">

                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)</div>

                        <div class="bgkc-col bgkc-head">Nước màu</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>

                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            44.341.500
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7383263078">
                                7383263078
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            37.528.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5376588866">
                                5376588866
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            36.662.850
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7386970929">
                                7386970929
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            36.338.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2386407230">
                                2386407230
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            42.070.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6382695117">
                                6382695117
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            39.042.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6375333642">
                                6375333642
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            30.065.700
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1379395372">
                                1379395372
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            27.253.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2386959092">
                                2386959092
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            40.988.850
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6382592254">
                                6382592254
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            35.365.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6381481994">
                                6381481994
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            38.068.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6395513990">
                                6395513990
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            28.010.850
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1348922199">
                                1348922199
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            35.473.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5386370486">
                                5386370486
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            31.796.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5396655199">
                                5396655199
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            29.416.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1387937594">
                                1387937594
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            35.148.750
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6385966556">
                                6385966556
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            31.904.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7342833707">
                                7342833707
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            31.363.500
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=3345926343">
                                3345926343
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            37.852.500
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2397298861">
                                2397298861
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            33.634.650
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6375675295">
                                6375675295
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            34.391.700
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7336663240">
                                7336663240
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            33.850.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5396080931">
                                5396080931
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            30.498.300
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6371799525">
                                6371799525
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            31.687.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1216803627">
                                1216803627
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            28.767.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7396048184">
                                7396048184
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            24.550.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7386937164">
                                7386937164
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            27.145.650
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6371502830">
                                6371502830
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            22.927.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2215447528">
                                2215447528
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            22.495.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6372691138">
                                6372691138
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            21.305.550
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5393212171">
                                5393212171
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            22.387.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1385547659">
                                1385547659
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            16.330.650
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2344806742">
                                2344806742
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            16.222.500
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6361110929">
                                6361110929
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            17.952.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2344883589">
                                2344883589
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            18.493.650
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6372761901">
                                6372761901
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            17.195.850
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2394131102">
                                2394131102
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-footer"><img
                            src="https://jemmia.vn/wp-content/uploads/2021/04/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>

                <div class="bgkc-tab-content all 5ly4">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA
                        5 LY 4
                    </div>
                    <div class="bgkc-row">

                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)</div>

                        <div class="bgkc-col bgkc-head">Nước màu</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>

                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            79.382.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5212644529">
                                5212644529
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            62.294.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6382265804">
                                6382265804
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            54.183.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6395570515">
                                6395570515
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            48.883.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6361950977">
                                6361950977
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            71.270.850
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6391556193">
                                6391556193
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            70.081.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=3385083624">
                                3385083624
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            48.451.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1395588455">
                                1395588455
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            46.720.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1369745456">
                                1369745456
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            68.567.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2215865170">
                                2215865170
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            49.640.850
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2367426659">
                                2367426659
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            46.288.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7378643656">
                                7378643656
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            45.963.750
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6382027488">
                                6382027488
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            51.154.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2386419295">
                                2386419295
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            49.857.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5396345507">
                                5396345507
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            49.424.550
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5211798848">
                                5211798848
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            45.531.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2376995294">
                                2376995294
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            48.991.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6351901089">
                                6351901089
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            47.910.450
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2215480091">
                                2215480091
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            46.720.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2386183426">
                                2386183426
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            47.153.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6391391663">
                                6391391663
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            41.854.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1399469733">
                                1399469733
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            41.097.000
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=3375645441">
                                3375645441
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            39.907.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7388090984">
                                7388090984
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            38.934.000
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6213771537">
                                6213771537
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            35.473.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2384941436">
                                2384941436
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            36.771.000
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5396217074">
                                5396217074
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            33.742.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6217833659">
                                6217833659
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            32.120.550
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6392257703">
                                6392257703
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            40.448.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6282144290">
                                6282144290
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            32.769.450
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6395390884">
                                6395390884
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            27.037.500
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5376300102">
                                5376300102
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            26.713.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=3385945942">
                                3385945942
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            25.090.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7361745246">
                                7361745246
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            20.872.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=3345925951">
                                3345925951
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            5.4
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            20.764.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7358984454">
                                7358984454
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-footer"><img
                            src="https://jemmia.vn/wp-content/uploads/2021/04/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>

                <div class="bgkc-tab-content all 6ly">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA
                        6 LY
                    </div>
                    <div class="bgkc-row">

                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)</div>

                        <div class="bgkc-col bgkc-head">Nước màu</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>

                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            150.652.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=3385198278">
                                3385198278
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            147.192.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6371667159">
                                6371667159
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            107.501.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=3355390413">
                                3355390413
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            94.414.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1393588313">
                                1393588313
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            144.163.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5211517161">
                                5211517161
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            103.824.000
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6392410276">
                                6392410276
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            96.794.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6385011447">
                                6385011447
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            90.737.850
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7388970962">
                                7388970962
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            140.162.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5393692121">
                                5393692121
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            101.444.700
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1359079798">
                                1359079798
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            87.925.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6362469249">
                                6362469249
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            87.060.750
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7383360798">
                                7383360798
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            101.877.300
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2374637555">
                                2374637555
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            94.306.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6381277541">
                                6381277541
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            88.142.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1369096549">
                                1369096549
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            81.869.550
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7386391758">
                                7386391758
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            89.223.750
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6381469006">
                                6381469006
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            90.305.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6361030400">
                                6361030400
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            82.302.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6371977056">
                                6371977056
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            79.706.550
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7373349425">
                                7373349425
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            86.195.550
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2213588303">
                                2213588303
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            78.084.300
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1385569807">
                                1385569807
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            70.730.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7391501865">
                                7391501865
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            70.405.650
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1388261505">
                                1388261505
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            73.542.000
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5212673460">
                                5212673460
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            72.027.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7343929254">
                                7343929254
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            57.968.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5211696106">
                                5211696106
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            65.863.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1389695574">
                                1389695574
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            54.832.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6385527664">
                                6385527664
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            66.836.700
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2388817405">
                                2388817405
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            54.723.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1363745399">
                                1363745399
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            54.832.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1388937435">
                                1388937435
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            53.426.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1388971008">
                                1388971008
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            37.203.600
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5386235371">
                                5386235371
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            37.744.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6375261844">
                                6375261844
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-footer"><img
                            src="https://jemmia.vn/wp-content/uploads/2021/04/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>

                <div class="bgkc-tab-content all 6ly3">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA
                        6 LY 3
                    </div>
                    <div class="bgkc-row">

                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)</div>

                        <div class="bgkc-col bgkc-head">Nước màu</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>

                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            278.269.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2397120483">
                                2397120483
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            269.726.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7382668660">
                                7382668660
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            234.252.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7386257017">
                                7386257017
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            212.622.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2367519390">
                                2367519390
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            277.188.450
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6391321816">
                                6391321816
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            245.608.650
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2384778789">
                                2384778789
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            218.679.300
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6385461631">
                                6385461631
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            213.379.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6381918788">
                                6381918788
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            257.613.300
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7378129204">
                                7378129204
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            233.063.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1383506968">
                                1383506968
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            219.328.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6365784450">
                                6365784450
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            197.265.600
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2366730958">
                                2366730958
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            189.154.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1385401276">
                                1385401276
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            186.883.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6385615847">
                                6385615847
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            204.727.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2386362371">
                                2386362371
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            190.992.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6391296291">
                                6391296291
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            176.500.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1367911335">
                                1367911335
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            194.994.450
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2386252765">
                                2386252765
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            183.206.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2397332882">
                                2397332882
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            177.366.000
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6382478330">
                                6382478330
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            150.977.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2211475401">
                                2211475401
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            143.731.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5212635863">
                                5212635863
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            139.189.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6342182850">
                                6342182850
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            133.132.650
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2397068296">
                                2397068296
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            133.240.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6213642346">
                                6213642346
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            117.775.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2384985717">
                                2384985717
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            111.935.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5383342509">
                                5383342509
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            113.449.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2213724840">
                                2213724840
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            105.229.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2397363440">
                                2397363440
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            83.059.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1383115737">
                                1383115737
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            101.228.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1389794422">
                                1389794422
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            100.471.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7393197188">
                                7393197188
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            93.549.750
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6395294750">
                                6395294750
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            84.465.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6385524800">
                                6385524800
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            78.084.300
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2354851671">
                                2354851671
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.3
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            86.628.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5376897264">
                                5376897264
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-footer"><img
                            src="https://jemmia.vn/wp-content/uploads/2021/04/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>

                <div class="bgkc-tab-content all 6ly8">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA
                        6 LY 8
                    </div>
                    <div class="bgkc-row">

                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)</div>

                        <div class="bgkc-col bgkc-head">Nước màu</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>

                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            383.175.450
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6375978155">
                                6375978155
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            341.754.000
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5393586907">
                                5393586907
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            332.561.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7393707444">
                                7393707444
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            273.078.750
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7382600931">
                                7382600931
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            346.404.450
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6381474342">
                                6381474342
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            328.235.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6213819691">
                                6213819691
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            302.711.850
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5383958442">
                                5383958442
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            256.748.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6382534266">
                                6382534266
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            336.562.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2376924049">
                                2376924049
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            303.252.600
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6391521012">
                                6391521012
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            291.896.850
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6385381242">
                                6385381242
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            302.171.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6395354336">
                                6395354336
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            280.324.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7396131572">
                                7396131572
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            265.940.850
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1385959824">
                                1385959824
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            249.502.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7386332046">
                                7386332046
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            226.141.650
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2384580707">
                                2384580707
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            247.339.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6381959620">
                                6381959620
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            225.168.300
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2213774689">
                                2213774689
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            219.111.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1388751243">
                                1388751243
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            236.415.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6395533321">
                                6395533321
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            194.237.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2387959486">
                                2387959486
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            175.960.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7381327863">
                                7381327863
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            245.067.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6381506665">
                                6381506665
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            176.933.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2386242469">
                                2386242469
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            158.331.600
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6381037154">
                                6381037154
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            150.544.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2366259163">
                                2366259163
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            143.190.600
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7366846163">
                                7366846163
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            127.400.700
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7383423234">
                                7383423234
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            111.718.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6381715910">
                                6381715910
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            117.991.650
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1393213716">
                                1393213716
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            118.099.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6371141411">
                                6371141411
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            108.366.300
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2376709268">
                                2376709268
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            92.684.550
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1363858566">
                                1363858566
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            6.8
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            109.555.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6385315069">
                                6385315069
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-footer"><img
                            src="https://jemmia.vn/wp-content/uploads/2021/04/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>

                <div class="bgkc-tab-content all 7ly">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA
                        7 LY
                    </div>
                    <div class="bgkc-row">

                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)</div>

                        <div class="bgkc-col bgkc-head">Nước màu</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>

                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            498.679.650
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6385092050">
                                6385092050
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            404.264.700
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7391250188">
                                7391250188
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            360.788.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2386182475">
                                2386182475
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            419.513.850
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5211516412">
                                5211516412
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            444.604.650
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5211419586">
                                5211419586
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            386.960.700
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6392518260">
                                6392518260
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            435.952.650
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2215622023">
                                2215622023
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            343.159.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2377302666">
                                2377302666
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            428.274.000
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7381362284">
                                7381362284
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            377.227.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6213464396">
                                6213464396
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            312.986.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5386382120">
                                5386382120
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            325.964.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1353424832">
                                1353424832
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            393.557.850
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1389962851">
                                1389962851
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            307.362.300
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6381561325">
                                6381561325
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            335.697.600
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6382409449">
                                6382409449
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            297.953.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7338662997">
                                7338662997
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            334.075.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6395328804">
                                6395328804
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            284.975.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2374882281">
                                2374882281
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            241.607.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6381217789">
                                6381217789
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            233.604.000
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7386376224">
                                7386376224
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            247.987.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1357980427">
                                1357980427
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            209.162.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6385959810">
                                6385959810
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            253.071.000
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6382258067">
                                6382258067
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            196.400.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2388590461">
                                2388590461
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            185.260.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1369387842">
                                1369387842
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            165.577.650
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5356388367">
                                5356388367
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            160.602.750
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7341067882">
                                7341067882
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            183.206.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6382606972">
                                6382606972
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            146.218.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6204997919">
                                6204997919
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            132.483.750
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6214597167">
                                6214597167
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            123.831.750
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2384196935">
                                2384196935
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            130.212.600
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6372941064">
                                6372941064
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            119.073.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1383589686">
                                1383589686
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            137.026.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2201291081">
                                2201291081
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            120.479.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1393216512">
                                1393216512
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-footer"><img
                            src="https://jemmia.vn/wp-content/uploads/2021/04/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>

                <div class="bgkc-tab-content all 7ly2">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA
                        7 LY 2
                    </div>
                    <div class="bgkc-row">

                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)</div>

                        <div class="bgkc-col bgkc-head">Nước màu</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>

                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            587.687.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2397330991">
                                2397330991
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            555.025.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1389673012">
                                1389673012
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            507.764.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2368550833">
                                2368550833
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            375.388.650
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=3335324231">
                                3335324231
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            531.881.700
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6371867702">
                                6371867702
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            513.496.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2384433989">
                                2384433989
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            460.178.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6214700508">
                                6214700508
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            398.965.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2364199541">
                                2364199541
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            492.947.700
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2377995345">
                                2377995345
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            427.949.550
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7383261350">
                                7383261350
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            426.759.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2387883573">
                                2387883573
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            385.987.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2215585555">
                                2215585555
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            442.117.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2215667365">
                                2215667365
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            328.992.300
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5396131587">
                                5396131587
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            390.962.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=3395489372">
                                3395489372
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            355.272.750
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6385923682">
                                6385923682
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            362.302.500
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7383240732">
                                7383240732
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            347.161.500
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2386496971">
                                2386496971
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            351.811.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7391581489">
                                7391581489
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            318.609.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2386646149">
                                2386646149
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            310.931.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2374232480">
                                2374232480
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            294.708.750
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6322348066">
                                6322348066
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            288.003.450
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7383666855">
                                7383666855
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            246.690.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6382982517">
                                6382982517
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            242.256.000
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7383759926">
                                7383759926
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            242.147.850
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6372498872">
                                6372498872
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            232.089.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7371739140">
                                7371739140
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            208.945.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2387812194">
                                2387812194
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            204.727.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6213466588">
                                6213466588
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            190.776.600
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7376779509">
                                7376779509
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            211.000.650
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2387535399">
                                2387535399
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            172.607.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1389202301">
                                1389202301
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            157.141.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6332438477">
                                6332438477
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            145.678.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6372816581">
                                6372816581
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            7.2
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            120.479.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1393216512">
                                1393216512
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-footer"><img
                            src="https://jemmia.vn/wp-content/uploads/2021/04/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>

                <div class="bgkc-tab-content all 8ly">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA
                        8 LY
                    </div>
                    <div class="bgkc-row">

                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)</div>

                        <div class="bgkc-col bgkc-head">Nước màu</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>

                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            1.301.368.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7388319422">
                                7388319422
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            1.033.589.550
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6375726952">
                                6375726952
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            968.915.850
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2215647079">
                                2215647079
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            847.463.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2211615493">
                                2211615493
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            1.184.458.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6371851037">
                                6371851037
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            828.537.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6213668025">
                                6213668025
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            818.371.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6385402965">
                                6385402965
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            757.698.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5211278799">
                                5211278799
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            1.033.373.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7376758566">
                                7376758566
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            949.557.000
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7398439422">
                                7398439422
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            799.444.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2396398433">
                                2396398433
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            754.995.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1389739472">
                                1389739472
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            752.183.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6381026290">
                                6381026290
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            812.530.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5212750670">
                                5212750670
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            733.905.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5393348756">
                                5393348756
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            634.516.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6392087835">
                                6392087835
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            725.362.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1343220533">
                                1343220533
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            634.732.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2205204514">
                                2205204514
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            660.580.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2211363916">
                                2211363916
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            589.417.500
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2387521084">
                                2387521084
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            556.864.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2378708771">
                                2378708771
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            543.994.500
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6213505658">
                                6213505658
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            512.522.850
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6213794315">
                                6213794315
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            483.214.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6217760251">
                                6217760251
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            460.502.700
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6392036685">
                                6392036685
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            456.825.600
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2215672942">
                                2215672942
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            435.628.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6213733227">
                                6213733227
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            389.556.300
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6372988443">
                                6372988443
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            405.346.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6362119833">
                                6362119833
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            344.025.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2386512211">
                                2386512211
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            308.984.550
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2386983398">
                                2386983398
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            299.575.500
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6345155330">
                                6345155330
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            270.266.850
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5376006761">
                                5376006761
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-footer"><img
                            src="https://jemmia.vn/wp-content/uploads/2021/04/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>

                <div class="bgkc-tab-content all 8ly1">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA
                        8 LY 1
                    </div>
                    <div class="bgkc-row">

                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)</div>

                        <div class="bgkc-col bgkc-head">Nước màu</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>

                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            1.262.002.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1385248693">
                                1385248693
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            1.024.721.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7388668305">
                                7388668305
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            856.007.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2211783323">
                                2211783323
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            787.440.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6214621481">
                                6214621481
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            1.065.169.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6382670524">
                                6382670524
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            925.439.550
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1375880615">
                                1375880615
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            851.897.550
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=3395837056">
                                3395837056
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            769.054.650
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6385655280">
                                6385655280
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            951.503.700
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=3385483853">
                                3385483853
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            956.154.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1375761016">
                                1375761016
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            787.223.850
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6392136731">
                                6392136731
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            778.247.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7331805302">
                                7331805302
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            877.529.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2211755377">
                                2211755377
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            819.236.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5383496634">
                                5383496634
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            760.078.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1385629341">
                                1385629341
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            646.737.000
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6375826013">
                                6375826013
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            990.005.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6381169993">
                                6381169993
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            680.263.500
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2347370912">
                                2347370912
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            895.157.550
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7383621156">
                                7383621156
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            588.552.300
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6382142268">
                                6382142268
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            585.307.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1216503490">
                                1216503490
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            541.398.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2211609908">
                                2211609908
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            511.116.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6375875050">
                                6375875050
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            480.618.600
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7376203582">
                                7376203582
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            484.295.700
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5211755557">
                                5211755557
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            433.032.600
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5211443551">
                                5211443551
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            413.241.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5211576922">
                                5211576922
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            393.666.000
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2356486716">
                                2356486716
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            383.283.600
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1385026175">
                                1385026175
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            357.435.750
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1216609975">
                                1216609975
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            281.947.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6217388692">
                                6217388692
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.1
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            297.412.500
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6381615057">
                                6381615057
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-footer"><img
                            src="https://jemmia.vn/wp-content/uploads/2021/04/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>

                <div class="bgkc-tab-content all 8ly6">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA
                        8 LY 6
                    </div>
                    <div class="bgkc-row">

                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)</div>

                        <div class="bgkc-col bgkc-head">Nước màu</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>

                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            1.460.998.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2386051553">
                                2386051553
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            1.674.378.300
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1387444331">
                                1387444331
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            1.236.046.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6392597983">
                                6392597983
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            1.185.432.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5393334661">
                                5393334661
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            1.735.915.650
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2364574774">
                                2364574774
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            1.194.084.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2211863750">
                                2211863750
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            1.171.913.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1385267343">
                                1385267343
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            1.107.888.600
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5396257876">
                                5396257876
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            1.371.882.750
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2215817128">
                                2215817128
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            1.236.803.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7323908455">
                                7323908455
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            1.106.807.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6372583463">
                                6372583463
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            1.020.936.000
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7393139833">
                                7393139833
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            1.124.868.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6395027555">
                                6395027555
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            1.019.638.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2384713919">
                                2384713919
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            1.230.206.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2211268106">
                                2211268106
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            927.278.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1387779458">
                                1387779458
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            910.298.550
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2211217933">
                                2211217933
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            1.153.203.450
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1388621677">
                                1388621677
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            947.826.600
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5212858543">
                                5212858543
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            797.930.700
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2191100748">
                                2191100748
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            829.402.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6332168316">
                                6332168316
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            802.581.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1393827844">
                                1393827844
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            707.517.300
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5211691159">
                                5211691159
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            758.131.500
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2215872648">
                                2215872648
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            646.088.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7361048400">
                                7361048400
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            587.038.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2377855432">
                                2377855432
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            596.555.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6395136366">
                                6395136366
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            547.779.750
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6355355094">
                                6355355094
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            577.521.000
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6217794308">
                                6217794308
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            475.211.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2396828946">
                                2396828946
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            476.617.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5212609952">
                                5212609952
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            471.209.550
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5393152081">
                                5393152081
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            384.473.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1323163493">
                                1323163493
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            429.031.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6392557511">
                                6392557511
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            8.6
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            395.829.000
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1216792467">
                                1216792467
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-footer"><img
                            src="https://jemmia.vn/wp-content/uploads/2021/04/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>

                <div class="bgkc-tab-content all 9ly">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA
                        9 LY
                    </div>
                    <div class="bgkc-row">

                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)</div>

                        <div class="bgkc-col bgkc-head">Nước màu</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>

                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            3.167.280.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1395782267">
                                1395782267
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            2.102.544.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1389843191">
                                1389843191
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            2.199.987.300
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6392411450">
                                6392411450
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            1.448.128.500
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2396837077">
                                2396837077
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            1.941.725.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1387397207">
                                1387397207
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            2.350.748.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6382528885">
                                6382528885
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            1.340.735.550
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6352221703">
                                6352221703
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            1.380.426.600
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2215384839">
                                2215384839
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            1.971.898.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5192958512">
                                5192958512
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            1.909.929.000
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2398604666">
                                2398604666
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            1.780.689.750
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6381870087">
                                6381870087
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            1.239.507.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6217791340">
                                6217791340
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            1.614.030.600
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6382835263">
                                6382835263
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            1.807.510.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7392916905">
                                7392916905
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            1.180.457.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7376569113">
                                7376569113
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            1.279.090.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2211537515">
                                2211537515
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            1.549.789.500
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7398858721">
                                7398858721
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            1.414.602.000
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6382411083">
                                6382411083
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            1.182.944.700
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2314416831">
                                2314416831
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            1.155.907.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6395551078">
                                6395551078
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            1.121.191.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2347529692">
                                2347529692
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            1.092.531.300
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7386180387">
                                7386180387
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            970.213.650
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7391108389">
                                7391108389
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            968.483.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5373725868">
                                5373725868
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            1.107.023.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2211169001">
                                2211169001
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            891.588.600
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6213817551">
                                6213817551
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            831.997.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2394612524">
                                2394612524
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            823.562.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2398071392">
                                2398071392
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            823.562.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2348444988">
                                2348444988
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            701.677.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2364570039">
                                2364570039
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            721.252.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1389654919">
                                1389654919
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            809.610.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6395258842">
                                6395258842
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            619.375.050
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1398074275">
                                1398074275
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            9
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            526.798.650
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6382865032">
                                6382865032
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-footer"><img
                            src="https://jemmia.vn/wp-content/uploads/2021/04/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>

                <div class="bgkc-tab-content all 10ly">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA
                        10 LY
                    </div>
                    <div class="bgkc-row">

                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)</div>

                        <div class="bgkc-col bgkc-head">Nước màu</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>

                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            5.616.662.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5212862496">
                                5212862496
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            4.381.048.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7371006631">
                                7371006631
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            3.875.447.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2215706075">
                                2215706075
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            D
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            2.983.101.450
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6217688824">
                                6217688824
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            4.234.505.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6375449130">
                                6375449130
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            3.785.898.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6217840986">
                                6217840986
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            3.262.344.750
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5211756239">
                                5211756239
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            E
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            3.038.041.650
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6177751151">
                                6177751151
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            3.606.802.500
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6382745357">
                                6382745357
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            3.421.000.800
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=7388397025">
                                7388397025
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            F
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            2.859.594.150
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6214671900">
                                6214671900
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            3.508.602.300
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5211546701">
                                5211546701
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            2.777.940.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2215555514">
                                2215555514
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            2.587.813.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6214821656">
                                6214821656
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            G
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            2.259.145.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=6213735877">
                                6213735877
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            3.661.418.250
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2398196689">
                                2398196689
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            2.514.379.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5212735883">
                                5212735883
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            1.911.443.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2215750129">
                                2215750129
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            H
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            2.053.119.600
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2211562778">
                                2211562778
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            2.063.393.850
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2201434426">
                                2201434426
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            1.960.543.200
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1399548499">
                                1399548499
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            I
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            1.968.005.550
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=1385279701">
                                1385279701
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            1.519.399.350
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5212542739">
                                5212542739
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            2.002.829.850
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2205164773">
                                2205164773
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            J
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            1.295.204.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2211731011">
                                2211731011
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            1.331.759.100
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2211287676">
                                2211287676
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            1.251.619.950
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2185204533">
                                2185204533
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            1.261.677.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5212928768">
                                5212928768
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            K
                        </div>
                        <div class="bgkc-col">
                            VS2
                        </div>


                        <div class="bgkc-col">
                            1.162.179.900
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2193424611">
                                2193424611
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VVS1
                        </div>


                        <div class="bgkc-col">
                            1.273.574.400
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=2378417360">
                                2378417360
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VVS2
                        </div>


                        <div class="bgkc-col">
                            925.547.700
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5212542647">
                                5212542647
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-row">

                        <div class="bgkc-col">
                            10
                        </div>

                        <div class="bgkc-col">
                            L
                        </div>
                        <div class="bgkc-col">
                            VS1
                        </div>


                        <div class="bgkc-col">
                            986.328.000
                        </div>
                        <div class="bgkc-col">
                            <a target="_blank" rel="nofollow noopener"
                                href="https://www.gia.edu/report-check?reportno=5212855028">
                                5212855028
                            </a>
                        </div>
                    </div>

                    <div class="bgkc-footer"><img
                            src="https://jemmia.vn/wp-content/uploads/2021/04/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>










                <!-- ################################################# -->






            </div>
            <div class="blog-wrapper">
                <div class="swiper-wrapper">
                    <?php
                        // get hotdeal
  
                        $args = array(
                            'post_type' => 'post',
                            // 'term_id'       => 19 ,
                            'tax_query' => array(
                                array (
                                    'taxonomy' => 'post_tag',
                                    'field' => 'name',
                                    'terms' => array('dau-tu-kim-cuong'),
                                )
                            ),
                            'posts_per_page' => 8,
                            'orderby'    => 'id',
                            'order'      => 'DESC',
                            'hide_empty' => false,
                        );
                        $query = new WP_Query( $args );
                        if ( $query->have_posts() ) :
                            while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                            ?>
                    <div class="swiper-slide">

                        <a href="<?php the_permalink(); ?>">
                            <div class="img"><img src="<?php  echo get_the_post_thumbnail_url(); ?>"
                                    alt="<?php the_title(); ?>"></div>

                            <div class="blog-title"><?php the_title(); ?></div>
                            <!-- <div class="date">Đăng vào: <?php //echo explode(' ', $blog->post_date)[0] ; ?></div>
                                    <div class="author">Bởi: <?php //the_author_meta( 'user_nicename' , $author_id ); ?> </div> -->
                            <p class="short"><?php echo get_the_excerpt(); ?></p>
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


</div>
<script type="text/javascript" src="https://4cs.gia.edu/interactive-4cs/js/embed.js" charset="UTF-8"></script>
<!-- linh bảng giá kim cương -->
<?php 

get_footer(); 
?>
<!-- linh bảng giá kim cương -->