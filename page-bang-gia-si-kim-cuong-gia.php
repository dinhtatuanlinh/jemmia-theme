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
            <h1 class="bgkc-title">
                <?php
                the_title();
            ?>
            </h1>
            <div class="gia">
                <img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/gia-report.png" alt="">
            </div>
            <p>Flash Sale kim cương kiểm định GIA</p>
            <p>Cơ hội sở hữu kim cương giá tốt chưa từng có</p>
            <p>(Giảm đến 35% so với trước khi Covid)</p>
            <div id="bgkc-classify" class="bgkc-container">
                <div class="bgkc-row">
                    <div class="bgkc-col bgkc-head">Kích cỡ (ly)</div>
                    <div class="bgkc-col bgkc-head">Màu, độ sạch</div>
                    <div class="bgkc-col bgkc-head">Giá</div>
                </div>
                <div class="bgkc-row">
                    <div class="bgkc-col">4 Ly 5</div>
                    <div class="bgkc-col">D/VVS1</div>
                    <div class="bgkc-col">
                        <p class="linh-goc">27,072,000</p>
                        <p class="linh-sale">19,703,640</p>
                    </div>
                </div>
                <div class="bgkc-row">
                    <div class="bgkc-col">5 Ly 4</div>
                    <div class="bgkc-col">D/VVS1</div>
                    <div class="bgkc-col">
                        <p class="linh-goc">84,377,700</p>
                        <p class="linh-sale">69,251,160</p>
                    </div>
                </div>
                <div class="bgkc-row">
                    <div class="bgkc-col">6 Ly 3</div>
                    <div class="bgkc-col">D/VVS1</div>
                    <div class="bgkc-col">
                        <p class="linh-goc">266,429,700</p>
                        <p class="linh-sale">244,064,040</p>
                    </div>
                </div>
                <div class="bgkc-row">
                    <div class="bgkc-col">7 Ly 2</div>
                    <div class="bgkc-col">D/VVS1</div>
                    <div class="bgkc-col">
                        <p class="linh-goc">615,046,500</p>
                        <p class="linh-sale">477,077,040</p>
                    </div>
                </div>
                <div class="bgkc-row">
                    <div class="bgkc-col">8 Ly 1</div>
                    <div class="bgkc-col">D/VVS1</div>
                    <div class="bgkc-col">
                        <p class="linh-goc">1,345,246,200</p>
                        <p class="linh-sale">948,780,360</p>
                    </div>
                </div>
                <div class="bgkc-row">
                    <div class="bgkc-col">9 Ly</div>
                    <div class="bgkc-col">D/VVS1</div>
                    <div class="bgkc-col">
                        <p class="linh-goc">2,397,338,100</p>
                        <p class="linh-sale">1,837,630,080</p>
                    </div>
                </div>
            </div>
            <div class="bgkc-tab-container has-block tooltipstered">
                <div class="bgkc-tab" id="4ly5" onclick="showbgkc('4ly5')">4 ly 5</div>
                <div class="bgkc-tab" id="5ly" onclick="showbgkc('5ly')">5 ly</div>
                <div class="bgkc-tab active" id="5ly4" onclick="showbgkc('5ly4')">5 ly 4</div>
                <div class="bgkc-tab" id="6ly" onclick="showbgkc('6ly')">6 ly</div>
                <div class="bgkc-tab" id="6ly3" onclick="showbgkc('6ly3')">6 ly 3</div>
                <div class="bgkc-tab" id="7ly" onclick="showbgkc('7ly')">7 ly</div>
                <div class="bgkc-tab" id="7ly2" onclick="showbgkc('7ly2')">7 ly 2</div>
                <div class="bgkc-tab" id="8ly" onclick="showbgkc('8ly')">8 ly</div>
                <div class="bgkc-tab" id="8ly1" onclick="showbgkc('8ly1')">8 ly1</div>
                <div class="bgkc-tab" id="9ly" onclick="showbgkc('9ly')">9 ly</div>
                <div class="bgkc-tab" id="10ly" onclick="showbgkc('10ly')">10 ly</div>
            </div>

            <div class="bgkc-container has-block tooltipstered">
                <div class="bgkc-tab-content all 5ly4" style="display: none;">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 5 LY 4</div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Cỡ (ly)</div>
                        <div class="bgkc-col bgkc-head">Nước</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5,4</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">52.826.400</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1369937921">
    1369937921
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.39</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">57.107.160</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2376102900">
    2376102900
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.39</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">69.251.160</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6371516028">
    6371516028
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.4</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">48.576.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6365585507">
    6365585507
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.38</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">53.403.240</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2378377372">
    2378377372
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.38</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">65.395.440</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7373095837">
    7373095837
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.38</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">48.545.640</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1373406411">
    1373406411
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.38</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">51.490.560</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1148234475">
    1148234475
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.39</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">61.752.240</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7371736363">
    7371736363
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.42</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">45.813.240</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2374557209">
    2374557209
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.39</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">47.270.520</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2131858639">
    2131858639
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.38</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">50.883.360</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1368969252">
    1368969252
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.41</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">41.319.960</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7371460543">
    7371460543
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.39</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">43.839.840</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1367956379">
    1367956379
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.38</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">46.390.080</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7366889469">
    7366889469
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.39</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">35.005.080</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2376518588">
    2376518588
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.38</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">36.462.360</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7308050731">
    7308050731
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.38</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">38.405.400</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2297886778">
    2297886778
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.39</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">31.452.960</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7366307077">
    7366307077
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.39</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">33.062.040</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1379354739">
    1379354739
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.38</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">25.380.960</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1373362497">
    1373362497
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.38</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">27.141.840</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6375290638">
    6375290638
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.41</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">28.386.600</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2346401800">
    2346401800
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.39</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">18.944.640</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2296999927">
    2296999927
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.4</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">21.616.320</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5363319390">
    5363319390
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.39</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">22.557.480</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2376055294">
    2376055294
    </a></div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt="" /></div>
                </div>
                <div class="bgkc-tab-content all 4ly5">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 4 LY 5</div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Cỡ (ly)</div>
                        <div class="bgkc-col bgkc-head">Nước</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.48</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">15.969.360</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2368386415">
    2368386415
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.48</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">16.667.640</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2376678675">
    2376678675
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.48</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">19.703.640</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6362707371">
    6362707371
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.48</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">15.271.080</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6371478895">
    6371478895
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.48</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">16.667.640</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6371363852">
    6371363852
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.49</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">19.612.560</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2367291328">
    2367291328
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.49</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">14.754.960</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2376766016">
    2376766016
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.49</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">15.999.720</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6351503746">
    6351503746
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.49</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">17.487.360</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5353657454">
    5353657454
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.49</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">14.694.240</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6365532991">
    6365532991
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.48</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">14.876.400</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7361489230">
    7361489230
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.49</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">15.696.120</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2364603693">
    2364603693
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.48</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">13.479.840</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6362061594">
    6362061594
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.49</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">13.995.960</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7362888275">
    7362888275
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.49</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">15.180.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=3375043411">
    3375043411
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.48</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">11.506.440</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2377478255">
    2377478255
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.48</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">11.870.760</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2326190101">
    2326190101
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.48</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">12.629.760</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5296748402">
    5296748402
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.49</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">10.383.120</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2357045876">
    2357045876
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.48</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">10.868.880</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6302808662">
    6302808662
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.48</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">11.445.720</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1329620310">
    1329620310
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.49</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">5.616.600</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=3375118383">
    3375118383
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.49</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">7.984.680</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1267017588">
    1267017588
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.48</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">6.982.800</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6341451698">
    6341451698
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.49</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">8.622.240</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2296765098">
    2296765098
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.49</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">8.713.320</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2296191737">
    2296191737
    </a></div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt="" /></div>
                </div>
                <div class="bgkc-tab-content all 5ly" style="display: none;">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 5 LY</div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Cỡ (ly)</div>
                        <div class="bgkc-col bgkc-head">Nước</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.98</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">33.881.760</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6362962098">
    6362962098
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.01</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">38.253.600</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1379358582">
    1379358582
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.98</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">40.227.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5353643377">
    5353643377
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.99</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">32.697.720</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=3375320165">
    3375320165
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.02</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">36.432.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6214416935">
    6214416935
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.99</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">38.132.160</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2356188694">
    2356188694
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">31.756.560</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1377456981">
    1377456981
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.02</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">34.033.560</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=3355535703">
    3355535703
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">39.801.960</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2326728957">
    2326728957
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.02</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">30.542.160</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5363707725">
    5363707725
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.99</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">31.908.360</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6371094075">
    6371094075
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.01</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">32.667.360</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7342833707">
    7342833707
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">24.318.360</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1318633884">
    1318633884
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.02</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">26.291.760</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2377129403">
    2377129403
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.99</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">27.809.760</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7323608780">
    7323608780
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.02</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">21.252.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7356233470">
    7356233470
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.99</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">22.193.160</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5363819214">
    5363819214
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.01</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS</div>
                        <div class="bgkc-col">27.475.800</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6375250469">
    6375250469
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">20.766.240</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5373359430">
    5373359430
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.02</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">22.041.360</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7378720689">
    7378720689
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">4.98</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">22.952.160</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1368512576">
    1368512576
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.01</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">19.126.800</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7371428067">
    7371428067
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.01</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">19.582.200</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6371734837">
    6371734837
    </a></div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt="" /></div>
                </div>
                <div class="bgkc-tab-content all 5ly4" style="display: none;">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 5 LY 4</div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Cỡ (ly)</div>
                        <div class="bgkc-col bgkc-head">Nước</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5,4</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">52.826.400</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1369937921">
    1369937921
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.39</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">57.107.160</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2376102900">
    2376102900
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.39</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">69.251.160</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6371516028">
    6371516028
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.4</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">48.576.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6365585507">
    6365585507
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.38</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">53.403.240</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2378377372">
    2378377372
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.38</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">65.395.440</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7373095837">
    7373095837
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.38</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">48.545.640</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1373406411">
    1373406411
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.38</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">51.490.560</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1148234475">
    1148234475
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.39</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">61.752.240</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7371736363">
    7371736363
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.42</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">45.813.240</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2374557209">
    2374557209
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.39</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">47.270.520</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2131858639">
    2131858639
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.38</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">50.883.360</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1368969252">
    1368969252
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.41</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">41.319.960</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7371460543">
    7371460543
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.39</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">43.839.840</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1367956379">
    1367956379
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.38</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">46.390.080</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7366889469">
    7366889469
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.39</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">35.005.080</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2376518588">
    2376518588
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.38</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">36.462.360</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7308050731">
    7308050731
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.38</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">38.405.400</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2297886778">
    2297886778
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.39</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">31.452.960</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7366307077">
    7366307077
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.39</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">33.062.040</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1379354739">
    1379354739
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.38</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">25.380.960</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1373362497">
    1373362497
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.38</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">27.141.840</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6375290638">
    6375290638
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.41</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">28.386.600</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2346401800">
    2346401800
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.39</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">18.944.640</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2296999927">
    2296999927
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.4</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">21.616.320</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5363319390">
    5363319390
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.39</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">22.557.480</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2376055294">
    2376055294
    </a></div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt="" /></div>
                </div>
                <div class="bgkc-tab-content all 6ly" style="display: none;">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 6 Ly</div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Cỡ (ly)</div>
                        <div class="bgkc-col bgkc-head">Nước</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6,01</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">104.742.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6365690518">
    6365690518
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">119.284.440</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2377312857">
    2377312857
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6,02</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">137.105.760</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6362677690">
    6362677690
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6,01</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">101.918.520</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2374080692">
    2374080692
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6,02</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">113.850.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6375536390">
    6375536390
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6,01</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">148.885.440</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1216461040">
    1216461040
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">100.279.080</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6371009061">
    6371009061
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6,01</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">103.527.600</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1353106469">
    1353106469
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">118.495.080</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6355032305">
    6355032305
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.01</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">88.711.920</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1206765416">
    1206765416
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.01</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">93.448.080</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2151159804">
    2151159804
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.01</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">99.489.720</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7336669668">
    7336669668
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.99</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">69.949.440</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7362337691">
    7362337691
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.01</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">83.338.200</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1365840547">
    1365840547
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.02</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">87.467.160</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5212325920">
    5212325920
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">67.217.040</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7363876477">
    7363876477
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.02</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">78.966.360</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1367270278">
    1367270278
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.01</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">82.579.200</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5363618048">
    5363618048
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.98</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">64.272.120</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7376704016">
    7376704016
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.02</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">76.051.800</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2213253487">
    2213253487
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.01</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">78.450.240</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7361663295">
    7361663295
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.02</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">53.676.480</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7361432498">
    7361432498
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.01</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">57.076.800</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5366609532">
    5366609532
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.01</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">40.530.600</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6365743741">
    6365743741
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">5.98</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">50.792.280</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1139146043">
    1139146043
    </a></div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt="" /></div>
                </div>
                <div class="bgkc-tab-content all 6ly3" style="display: none;">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 6 Ly 3</div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Cỡ (ly)</div>
                        <div class="bgkc-col bgkc-head">Nước</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.32</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">172.141.200</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1375625594">
    1375625594
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.3</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">187.473.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7366954066">
    7366954066
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.3</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">244.064.040</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1378429085">
    1378429085
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.32</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">156.080.760</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1375140817">
    1375140817
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.32</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">183.313.680</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2374437365">
    2374437365
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6,3</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">205.476.480</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6214264590">
    6214264590
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6,3</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">159.298.920</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5363604774">
    5363604774
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6,31</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">173.719.920</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6362960285">
    6362960285
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6,28</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">205.992.600</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2215359072">
    2215359072
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.31</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">129.121.080</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5356475276">
    5356475276
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.3</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">168.376.560</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6372207862">
    6372207862
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.3</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">178.152.480</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2366909341">
    2366909341
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.31</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">150.615.960</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2377401019">
    2377401019
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.32</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">155.564.640</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6372002029">
    6372002029
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.32</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">110.935.440</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2277176920">
    2277176920
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.32</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">115.094.760</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6342510286">
    6342510286
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.31</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">118.404.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6342370406">
    6342370406
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.3</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">98.670.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1378363958">
    1378363958
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.32</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">105.895.680</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6351672811">
    6351672811
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.31</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">113.121.360</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2215460839">
    2215460839
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.31</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">88.469.040</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2377002240">
    2377002240
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.31</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">94.116.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2367661000">
    2367661000
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.32</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">78.936.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2215382012">
    2215382012
    </a></div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt="" /></div>
                </div>
                <div class="bgkc-tab-content all 7ly" style="display: none;">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 7 Ly</div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Cỡ (ly)</div>
                        <div class="bgkc-col bgkc-head">Nước</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.98</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">317.383.440</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1369815318">
    1369815318
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.99</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">330.347.160</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6365852924">
    6365852924
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.98</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">373.306.560</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5192513006">
    5192513006
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.99</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">255.206.160</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6214247038">
    6214247038
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">274.849.080</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2211426865">
    2211426865
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.01</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">325.853.880</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5212410082">
    5212410082
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.02</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">293.065.080</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6351233926">
    6351233926
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.98</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">306.393.120</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2116960517">
    2116960517
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.01</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">259.517.280</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=3365551955">
    3365551955
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.02</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">276.609.960</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7362221726">
    7362221726
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.02</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">304.571.520</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6322631845">
    6322631845
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">208.360.680</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6362905668">
    6362905668
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.02</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">236.565.120</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2211392604">
    2211392604
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.99</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">244.215.840</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1369481399">
    1369481399
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">181.218.840</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5376391110">
    5376391110
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.01</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">206.205.120</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2327078704">
    2327078704
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.99</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">210.273.360</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2337590264">
    2337590264
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">6.99</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">155.109.240</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2376277975">
    2376277975
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">160.452.600</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2378388923">
    2378388923
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.01</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">174.661.080</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6375300487">
    6375300487
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">131.064.120</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2366735084">
    2366735084
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.01</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">146.031.600</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6321472287">
    6321472287
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.02</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">110.965.800</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=3375119785">
    3375119785
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.02</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">130.942.680</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7338196146">
    7338196146
    </a></div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt="" /></div>
                </div>
                <div class="bgkc-tab-content all 7ly2" style="display: none;">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 7 Ly 2</div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Cỡ (ly)</div>
                        <div class="bgkc-col bgkc-head">Nước</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.2</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">320.146.200</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6371686022">
    6371686022
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.21</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">403.362.960</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2215479008">
    2215479008
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.2</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">477.077.040</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2366875040">
    2366875040
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.19</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">388.911.600</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7331779994">
    7331779994
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.2</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">460.348.680</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1192633772">
    1192633772
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.18</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">354.240.480</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2377498561">
    2377498561
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.19</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">409.556.400</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6372605639">
    6372605639
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.21</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">305.816.280</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2376674760">
    2376674760
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.21</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">343.068.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2368832982">
    2368832982
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.2</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">320.176.560</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6372456331">
    6372456331
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.19</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">228.580.440</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6372651315">
    6372651315
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.21</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">290.332.680</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6375464439">
    6375464439
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.2</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">277.794.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6217471363">
    6217471363
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.2</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">245.733.840</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2215426599">
    2215426599
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.18</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">166.129.920</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5363711156">
    5363711156
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.21</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">166.980.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1359969518">
    1359969518
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.21</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">200.831.400</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2356672583">
    2356672583
    </a></div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt="" /></div>
                </div>
                <div class="bgkc-tab-content all 8ly" style="display: none;">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 8 Ly</div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Cỡ (ly)</div>
                        <div class="bgkc-col bgkc-head">Nước</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.01</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">774.180.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6365539834">
    6365539834
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.01</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">851.901.600</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2213375231">
    2213375231
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.02</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">633.309.600</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6361946288">
    6361946288
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.01</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">808.881.480</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1333991829">
    1333991829
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.02</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">595.784.640</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7326431032">
    7326431032
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.99</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">698.401.440</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2367765395">
    2367765395
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.01</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">565.849.680</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5346085573">
    5346085573
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.99</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">617.552.760</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5373387442">
    5373387442
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">494.291.160</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1377605592">
    1377605592
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">574.350.480</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2205204514">
    2205204514
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.01</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">597.484.800</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5212195651">
    5212195651
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">457.616.280</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6214381895">
    6214381895
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">478.473.600</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1369833938">
    1369833938
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">510.048.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2366539893">
    2366539893
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.01</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">374.551.320</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6213314851">
    6213314851
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">412.592.400</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6302256218">
    6302256218
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.02</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">432.933.600</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1368946510">
    1368946510
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">7.99</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">290.636.280</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1363797435">
    1363797435
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">311.402.520</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1358456303">
    1358456303
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">336.722.760</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2203042733">
    2203042733
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.01</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">278.036.880</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2368294524">
    2368294524
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.02</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">297.285.120</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6345631677">
    6345631677
    </a></div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt="" /></div>
                </div>
                <div class="bgkc-tab-content all 8ly1" style="display: none;">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 8 Ly 1</div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Cỡ (ly)</div>
                        <div class="bgkc-col bgkc-head">Nước</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.1</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">686.561.040</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7371155084">
    7371155084
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.1</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">774.180.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1275074995">
    1275074995
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.11</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">948.780.360</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1358409155">
    1358409155
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.12</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">796.555.320</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2211218811">
    2211218811
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.1</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">926.374.680</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1377030918">
    1377030918
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.12</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">960.043.920</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1373378174">
    1373378174
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.08</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">613.393.440</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1367800140">
    1367800140
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.1</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">740.055.360</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2357882100">
    2357882100
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.1</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">862.193.640</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1363903309">
    1363903309
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.09</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">586.524.840</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6361894559">
    6361894559
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.08</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">678.849.600</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7366538617">
    7366538617
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.09</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">485.426.040</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7346946741">
    7346946741
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.09</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">530.055.240</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2211372176">
    2211372176
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.1</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">710.302.560</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1156093270">
    1156093270
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.09</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">468.242.280</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6375586408">
    6375586408
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.12</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">501.577.560</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6361946495">
    6361946495
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.1</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">527.049.600</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2364936427">
    2364936427
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.1</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">385.905.960</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7361553474">
    7361553474
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.11</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">416.660.640</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6302853264">
    6302853264
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.11</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">443.256.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5212314731">
    5212314731
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.1</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">306.453.840</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6352921556">
    6352921556
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.12</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">377.192.640</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6352214872">
    6352214872
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.09</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">253.506.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1375661916">
    1375661916
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.12</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">269.839.680</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2378004891">
    2378004891
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.09</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">277.794.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6193588934">
    6193588934
    </a></div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt="" /></div>
                </div>
                <div class="bgkc-tab-content all 9ly" style="display: none;">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 9 Ly</div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Cỡ (ly)</div>
                        <div class="bgkc-col bgkc-head">Nước</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">9.01</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">1.837.630.080</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2195943136">
    2195943136
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">9.01</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">1.519.578.720</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1248206546">
    1248206546
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">9.01</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">1.809.941.760</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=7282534295">
    7282534295
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">8.98</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">2.393.096.640</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5211370173">
    5211370173
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">9.02</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">2.159.203.200</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2366971431">
    2366971431
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">9.02</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">550.882.200</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5366862228">
    5366862228
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">9.02</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">552.521.640</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1365934608">
    1365934608
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">9.02</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">945.288.960</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6194955645">
    6194955645
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">9.02</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">1.077.810.360</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6213248386">
    6213248386
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">9.02</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">1.120.101.840</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6335845662">
    6335845662
    </a></div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt="" /></div>
                </div>
                <div class="bgkc-tab-content all 10ly" style="display: none;">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 10 Ly</div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Cỡ (ly)</div>
                        <div class="bgkc-col bgkc-head">Nước</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">10.06</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">2.657.471.520</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5212336254">
    5212336254
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">10.13</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">2.674.958.880</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1357305157">
    1357305157
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">10.04</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">2.732.582.160</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2366798798">
    2366798798
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">10.11</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">2.754.562.800</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1365785131">
    1365785131
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">10.04</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">2.821.779.840</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6371599238">
    6371599238
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">10.04</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">3.071.855.160</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5192968014">
    5192968014
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">10.2</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">3.601.788.960</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=1353487580">
    1353487580
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">10.09</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">4.223.045.640</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2211328761">
    2211328761
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">10.13</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">5.238.618.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5212246616">
    5212246616
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">10.04</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">1.962.500.760</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5202570608">
    5202570608
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">10</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">2.281.554.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5201803700">
    5201803700
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">10.06</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">1.986.272.640</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2135082065">
    2135082065
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">10.07</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">2.188.956.000</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6362152672">
    6362152672
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">10.09</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">1.726.967.880</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2366380433">
    2366380433
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">10.06</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">2.007.676.440</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2215455946">
    2215455946
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">10.08</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">1.055.981.520</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=5212270503">
    5212270503
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">10.06</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">1.074.136.800</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=2327557384">
    2327557384
    </a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">10.1</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">846.254.640</div>
                        <div class="bgkc-col"><a target="_blank" rel="nofollow noopener" href="https://www.gia.edu/report-check?reportno=6342690013">
    6342690013
    </a></div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt="" /></div>
                </div>
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
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => array('truoc-khi-mua-kim-cuong', 'truoc-khi-mua-moissanite'),
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
                                    <div class="img"><img src="<?php  echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></div>
                                
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

<!-- linh bảng giá kim cương -->
<?php 

get_footer(); 
?>
<!-- linh bảng giá kim cương -->