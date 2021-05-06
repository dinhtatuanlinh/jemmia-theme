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
            <h1>
                <?php
                the_title();
            ?>
            </h1>
            <div class="gia">
                <img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/gia-report.png" alt="">
            </div>
            <p>Giá bán kim cương tự nhiên sỉ có giấy kiểm định quốc tế GIA, IGI uy tín thế giới, giá trị toàn cầu.</p>

            <div id="bgkc-classify" class="bgkc-container has-block tooltipstered">
                <div class="bgkc-row">
                    <div class="bgkc-col bgkc-head">Kích cỡ (ly)</div>
                    <div class="bgkc-col bgkc-head">Màu, độ tinh khiết, giác cắt</div>
                    <div class="bgkc-col bgkc-head">Giá</div>
                </div>
                <div class="bgkc-row">
                    <div class="bgkc-col">4 Ly 5</div>
                    <div class="bgkc-col">F/VS1/Excellent/Kiểm định GIA</div>
                    <div class="bgkc-col">14,754,960</div>
                </div>
                <div class="bgkc-row">
                    <div class="bgkc-col">5 Ly 4</div>
                    <div class="bgkc-col">F/VS1/Excellent/Kiểm định GIA</div>
                    <div class="bgkc-col">48,545,640</div>
                </div>
                <div class="bgkc-row">
                    <div class="bgkc-col">6 Ly 3</div>
                    <div class="bgkc-col">F/VS1/Excellent/Kiểm định GIA</div>
                    <div class="bgkc-col">159,298,920</div>
                </div>
                <div class="bgkc-row">
                    <div class="bgkc-col">7 Ly 2</div>
                    <div class="bgkc-col">F/VS1/Excellent/Kiểm định GIA</div>
                    <div class="bgkc-col">354,240,480</div>
                </div>
                <div class="bgkc-row">
                    <div class="bgkc-col">8 Ly 1</div>
                    <div class="bgkc-col">F/VS1/Excellent/Kiểm định GIA</div>
                    <div class="bgkc-col">613,393,440</div>
                </div>
                <div class="bgkc-row">
                    <div class="bgkc-col">9 Ly</div>
                    <div class="bgkc-col">G/VVS1/Excellent/Kiểm định GIA</div>
                    <div class="bgkc-col">1,077,810,360</div>
                </div>
                <div class="bgkc-row">
                    <div class="bgkc-col">10 Ly</div>
                    <div class="bgkc-col">F/VVS1/Excellent/Kiểm định GIA</div>
                    <div class="bgkc-col">2,657,471,520</div>
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
                <div class="bgkc-tab-content all 4ly5" style="display: none;">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 4 LY 5</div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Giác cắt</div>
                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)</div>
                        <div class="bgkc-col bgkc-head">Carat</div>
                        <div class="bgkc-col bgkc-head">Nước màu</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>
                        <div class="bgkc-col bgkc-head">Cắt, Bóng, Đối xứng</div>
                        <div class="bgkc-col bgkc-head">Phản quang</div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.5x2.81</div>
                        <div class="bgkc-col">0.34</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium, Blue</div>
                        <div class="bgkc-col">15,969,360</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=2368386415" target="_blank" rel="nofollow noopener">2368386415</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.5x2.8</div>
                        <div class="bgkc-col">0.35</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">16,667,640</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=2376678675" target="_blank" rel="nofollow noopener">2376678675</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.51x2.83</div>
                        <div class="bgkc-col">0.35</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Very Strong</div>
                        <div class="bgkc-col">19,703,640</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=6362707371" target="_blank" rel="nofollow noopener">6362707371</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.5x2.71</div>
                        <div class="bgkc-col">0.33</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">15,271,080</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=6371478895" target="_blank" rel="nofollow noopener">6371478895</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.5x2.64</div>
                        <div class="bgkc-col">0.32</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">16,667,640</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=6371363852" target="_blank" rel="nofollow noopener">6371363852</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.52x2.68</div>
                        <div class="bgkc-col">0.33</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">19,612,560</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=2367291328" target="_blank" rel="nofollow noopener">2367291328</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.5x2.68</div>
                        <div class="bgkc-col">0.33</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">14,754,960</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=2376766016" target="_blank" rel="nofollow noopener">2376766016</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.51x2.77</div>
                        <div class="bgkc-col">0.34</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">15,999,720</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=6351503746" target="_blank" rel="nofollow noopener">6351503746</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.51x2.79</div>
                        <div class="bgkc-col">0.35</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong, Blue</div>
                        <div class="bgkc-col">17,487,360</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=5353657454" target="_blank" rel="nofollow noopener">5353657454</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.5x2.73</div>
                        <div class="bgkc-col">0.33</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">14,694,240</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=6365532991" target="_blank" rel="nofollow noopener">6365532991</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.52x2.79</div>
                        <div class="bgkc-col">0.35</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">14,876,400</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=7361489230" target="_blank" rel="nofollow noopener">7361489230</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.51x2.69</div>
                        <div class="bgkc-col">0.32</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">15,696,120</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=2364603693" target="_blank" rel="nofollow noopener">2364603693</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.5x2.7</div>
                        <div class="bgkc-col">0.33</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium, Blue</div>
                        <div class="bgkc-col">13,479,840</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=6362061594" target="_blank" rel="nofollow noopener">6362061594</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.51x2.81</div>
                        <div class="bgkc-col">0.35</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong, Blue</div>
                        <div class="bgkc-col">13,995,960</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=7362888275" target="_blank" rel="nofollow noopener">7362888275</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.53x2.69</div>
                        <div class="bgkc-col">0.33</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">15,180,000</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=3375043411" target="_blank" rel="nofollow noopener">3375043411</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.52x2.79</div>
                        <div class="bgkc-col">0.34</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">11,506,440</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=2377478255" target="_blank" rel="nofollow noopener">2377478255</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.49x2.8</div>
                        <div class="bgkc-col">0.34</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">11,870,760</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=2326190101" target="_blank" rel="nofollow noopener">2326190101</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.5x2.69</div>
                        <div class="bgkc-col">0.33</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">12,629,760</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=5296748402" target="_blank" rel="nofollow noopener">5296748402</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.52x2.76</div>
                        <div class="bgkc-col">0.35</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">10,383,120</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=2357045876" target="_blank" rel="nofollow noopener">2357045876</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.5x2.77</div>
                        <div class="bgkc-col">0.34</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium, Blue</div>
                        <div class="bgkc-col">10,868,880</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=6302808662" target="_blank" rel="nofollow noopener">6302808662</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.51x2.84</div>
                        <div class="bgkc-col">0.35</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium, Blue</div>
                        <div class="bgkc-col">11,445,720</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=1329620310" target="_blank" rel="nofollow noopener">1329620310</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.52x2.72</div>
                        <div class="bgkc-col">0.33</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">5,616,600</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=3375118383" target="_blank" rel="nofollow noopener">3375118383</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.5x2.77</div>
                        <div class="bgkc-col">0.34</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">6,982,800</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=6341451698" target="_blank" rel="nofollow noopener">6341451698</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.5x2.81</div>
                        <div class="bgkc-col">0.35</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">8,622,240</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=2296765098" target="_blank" rel="nofollow noopener">2296765098</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.53x2.83</div>
                        <div class="bgkc-col">0.35</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong, Blue</div>
                        <div class="bgkc-col">8,713,320</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=" target="_blank" rel="nofollow noopener">2296191737</a></div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>
                <div class="bgkc-tab-content all 4ly5" style="display: none;">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 4 LY 5</div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Giác cắt</div>
                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)</div>
                        <div class="bgkc-col bgkc-head">Carat</div>
                        <div class="bgkc-col bgkc-head">Nước màu</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>
                        <div class="bgkc-col bgkc-head">Cắt, Bóng, Đối xứng</div>
                        <div class="bgkc-col bgkc-head">Phản quang</div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.5x2.81</div>
                        <div class="bgkc-col">0.34</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium, Blue</div>
                        <div class="bgkc-col">15,969,360</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=2368386415" target="_blank" rel="nofollow noopener">2368386415</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.5x2.8</div>
                        <div class="bgkc-col">0.35</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">16,667,640</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=2376678675" target="_blank" rel="nofollow noopener">2376678675</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.51x2.83</div>
                        <div class="bgkc-col">0.35</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Very Strong</div>
                        <div class="bgkc-col">19,703,640</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=6362707371" target="_blank" rel="nofollow noopener">6362707371</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.5x2.71</div>
                        <div class="bgkc-col">0.33</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">15,271,080</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=6371478895" target="_blank" rel="nofollow noopener">6371478895</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.5x2.64</div>
                        <div class="bgkc-col">0.32</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">16,667,640</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=6371363852" target="_blank" rel="nofollow noopener">6371363852</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.52x2.68</div>
                        <div class="bgkc-col">0.33</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">19,612,560</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=2367291328" target="_blank" rel="nofollow noopener">2367291328</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.5x2.68</div>
                        <div class="bgkc-col">0.33</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">14,754,960</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=2376766016" target="_blank" rel="nofollow noopener">2376766016</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.51x2.77</div>
                        <div class="bgkc-col">0.34</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">15,999,720</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=6351503746" target="_blank" rel="nofollow noopener">6351503746</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.51x2.79</div>
                        <div class="bgkc-col">0.35</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong, Blue</div>
                        <div class="bgkc-col">17,487,360</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=5353657454" target="_blank" rel="nofollow noopener">5353657454</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.5x2.73</div>
                        <div class="bgkc-col">0.33</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">14,694,240</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=6365532991" target="_blank" rel="nofollow noopener">6365532991</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.52x2.79</div>
                        <div class="bgkc-col">0.35</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">14,876,400</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=7361489230" target="_blank" rel="nofollow noopener">7361489230</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.51x2.69</div>
                        <div class="bgkc-col">0.32</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">15,696,120</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=2364603693" target="_blank" rel="nofollow noopener">2364603693</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.5x2.7</div>
                        <div class="bgkc-col">0.33</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium, Blue</div>
                        <div class="bgkc-col">13,479,840</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=6362061594" target="_blank" rel="nofollow noopener">6362061594</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.51x2.81</div>
                        <div class="bgkc-col">0.35</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong, Blue</div>
                        <div class="bgkc-col">13,995,960</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=7362888275" target="_blank" rel="nofollow noopener">7362888275</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.53x2.69</div>
                        <div class="bgkc-col">0.33</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">15,180,000</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=3375043411" target="_blank" rel="nofollow noopener">3375043411</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.52x2.79</div>
                        <div class="bgkc-col">0.34</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">11,506,440</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=2377478255" target="_blank" rel="nofollow noopener">2377478255</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.49x2.8</div>
                        <div class="bgkc-col">0.34</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">11,870,760</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=2326190101" target="_blank" rel="nofollow noopener">2326190101</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.5x2.69</div>
                        <div class="bgkc-col">0.33</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">12,629,760</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=5296748402" target="_blank" rel="nofollow noopener">5296748402</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.52x2.76</div>
                        <div class="bgkc-col">0.35</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">10,383,120</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=2357045876" target="_blank" rel="nofollow noopener">2357045876</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.5x2.77</div>
                        <div class="bgkc-col">0.34</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium, Blue</div>
                        <div class="bgkc-col">10,868,880</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=6302808662" target="_blank" rel="nofollow noopener">6302808662</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.51x2.84</div>
                        <div class="bgkc-col">0.35</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium, Blue</div>
                        <div class="bgkc-col">11,445,720</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=1329620310" target="_blank" rel="nofollow noopener">1329620310</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.52x2.72</div>
                        <div class="bgkc-col">0.33</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">5,616,600</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=3375118383" target="_blank" rel="nofollow noopener">3375118383</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.48-4.5x2.77</div>
                        <div class="bgkc-col">0.34</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">6,982,800</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=6341451698" target="_blank" rel="nofollow noopener">6341451698</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.5x2.81</div>
                        <div class="bgkc-col">0.35</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">8,622,240</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=2296765098" target="_blank" rel="nofollow noopener">2296765098</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.49-4.53x2.83</div>
                        <div class="bgkc-col">0.35</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong, Blue</div>
                        <div class="bgkc-col">8,713,320</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=" target="_blank" rel="nofollow noopener">2296191737</a></div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>
                <div class="bgkc-tab-content all 5ly" style="display: none;">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 5 LY</div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Giác cắt</div>
                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)</div>
                        <div class="bgkc-col bgkc-head">Carat</div>
                        <div class="bgkc-col bgkc-head">Nước màu</div>
                        <div class="bgkc-col bgkc-head">Độ sạch</div>
                        <div class="bgkc-col bgkc-head">Cắt, Bóng, Đối xứng</div>
                        <div class="bgkc-col bgkc-head">Phản quang</div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ</div>
                        <div class="bgkc-col bgkc-head">Mã số GIA</div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.98-5.01x3.01</div>
                        <div class="bgkc-col">0.46</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">33,881,760</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=6362962098" target="_blank" rel="nofollow noopener">6362962098</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.01-5.03x3.01</div>
                        <div class="bgkc-col">0.46</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Very strong</div>
                        <div class="bgkc-col">38,253,600</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=1379358582" target="_blank" rel="nofollow noopener">1379358582</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.98-5x2.95</div>
                        <div class="bgkc-col">0.44</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">40,227,000</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=5353643377" target="_blank" rel="nofollow noopener">5353643377</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.99-5.03x2.99</div>
                        <div class="bgkc-col">0.45</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">32,697,720</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=3375320165" target="_blank" rel="nofollow noopener">3375320165</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.02-5.03x3.01</div>
                        <div class="bgkc-col">0.45</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">36,432,000</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=6214416935" target="_blank" rel="nofollow noopener">6214416935</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.99-5.02x3.03</div>
                        <div class="bgkc-col">0.46</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">38,132,160</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=2356188694" target="_blank" rel="nofollow noopener">2356188694</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5-5.02x2.95</div>
                        <div class="bgkc-col">0.45</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">31,756,560</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=1377456981" target="_blank" rel="nofollow noopener">1377456981</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.02-5.05x3</div>
                        <div class="bgkc-col">0.46</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">34,033,560</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=3355535703" target="_blank" rel="nofollow noopener">3355535703</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5-5.04x3.07</div>
                        <div class="bgkc-col">0.47</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">39,801,960</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=2326728957" target="_blank" rel="nofollow noopener">2326728957</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.02-5.04x3.01</div>
                        <div class="bgkc-col">0.46</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">30,542,160</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=5363707725" target="_blank" rel="nofollow noopener">5363707725</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.99-5.02x3.08</div>
                        <div class="bgkc-col">0.47</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">31,908,360</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=6371094075" target="_blank" rel="nofollow noopener">6371094075</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.01-5.04x3.04</div>
                        <div class="bgkc-col">0.46</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">32,667,360</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=7342833707" target="_blank" rel="nofollow noopener">7342833707</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5-5.02x2.98</div>
                        <div class="bgkc-col">0.45</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">24,318,360</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=1318633884" target="_blank" rel="nofollow noopener">1318633884</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.02-5.06x3.18</div>
                        <div class="bgkc-col">0.5</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">26,291,760</div>
                        <div class="bgkc-col"><a href="https://www.gia.edu/report-check?reportno=2377129403" target="_blank" rel="nofollow noopener">2377129403</a></div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.99-5.02x2.95</div>
                        <div class="bgkc-col">0.44</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">27,809,760</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7323608780" target="_blank" rel="nofollow noopener">7323608780</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.02-5.05x2.98</div>
                        <div class="bgkc-col">0.46</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">21,252,000</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7356233470" target="_blank" rel="nofollow noopener">7356233470</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.99-5.01x3.07</div>
                        <div class="bgkc-col">0.47</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">22,193,160</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5363819214" target="_blank" rel="nofollow noopener">5363819214</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.01-5.05x3.2</div>
                        <div class="bgkc-col">0.5</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">27,475,800</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6375250469" target="_blank" rel="nofollow noopener">6375250469</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5-5.02x2.98</div>
                        <div class="bgkc-col">0.45</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">20,766,240</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5373359430" target="_blank" rel="nofollow noopener">5373359430</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.02-5.06x3.14</div>
                        <div class="bgkc-col">0.5</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">22,041,360</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7378720689" target="_blank" rel="nofollow noopener">7378720689</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">4.98-4.99x2.97</div>
                        <div class="bgkc-col">0.45</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">22,952,160</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1368512576" target="_blank" rel="nofollow noopener">1368512576</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.01-5.05x3.18</div>
                        <div class="bgkc-col">0.5</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">19,126,800</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7371428067" target="_blank" rel="nofollow noopener">7371428067</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.01-5.05x3.14</div>
                        <div class="bgkc-col">0.5</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">19,582,200</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6371734837" target="_blank" rel="nofollow noopener">6371734837</a>
                        </div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>
                <div class="bgkc-tab-content all 5ly4" style="display: block; transform: translate(0px);">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 5 LY 4
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Giác cắt
                        </div>
                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)
                        </div>
                        <div class="bgkc-col bgkc-head">Carat</div>
                        <div class="bgkc-col bgkc-head">Nước màu
                        </div>
                        <div class="bgkc-col bgkc-head">Độ sạch
                        </div>
                        <div class="bgkc-col bgkc-head">Cắt, Bóng, Đối xứng
                        </div>
                        <div class="bgkc-col bgkc-head">Phản quang
                        </div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ
                        </div>
                        <div class="bgkc-col bgkc-head">Mã số GIA
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5,4-5,42x3,43</div>
                        <div class="bgkc-col">0.62</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">52,826,400</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1369937921" target="_blank" rel="nofollow noopener">1369937921</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.39-5.42x3.42</div>
                        <div class="bgkc-col">0.61</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">57,107,160</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2376102900" target="_blank" rel="nofollow noopener">2376102900</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.39-5.42x3.35</div>
                        <div class="bgkc-col">0.6</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong, Blue
                        </div>
                        <div class="bgkc-col">69,251,160</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6371516028" target="_blank" rel="nofollow noopener">6371516028</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.4-5.45x3.42</div>
                        <div class="bgkc-col">0.62</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">48,576,000</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6365585507" target="_blank" rel="nofollow noopener">6365585507</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.38-5.41x3.34</div>
                        <div class="bgkc-col">0.6</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">53,403,240</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2378377372" target="_blank" rel="nofollow noopener">2378377372</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.38-5.39x3.39</div>
                        <div class="bgkc-col">0.6</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">65,395,440</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7373095837" target="_blank" rel="nofollow noopener">7373095837</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.38-5.43x3.32</div>
                        <div class="bgkc-col">0.6</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">48,545,640</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1373406411" target="_blank" rel="nofollow noopener">1373406411</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.38-5.39x3.35</div>
                        <div class="bgkc-col">0.58</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">51,490,560</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1148234475" target="_blank" rel="nofollow noopener">1148234475</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.39-5.41x3.35</div>
                        <div class="bgkc-col">0.6</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">61,752,240</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7371736363" target="_blank" rel="nofollow noopener">7371736363</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.42-5.45x3.34</div>
                        <div class="bgkc-col">0.6</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong, Blue
                        </div>
                        <div class="bgkc-col">45,813,240</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2374557209" target="_blank" rel="nofollow noopener">2374557209</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.39-5.43x3.23</div>
                        <div class="bgkc-col">0.57</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">47,270,520</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2131858639" target="_blank" rel="nofollow noopener">2131858639</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.38-5.4x3.29</div>
                        <div class="bgkc-col">0.57</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">50,883,360</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1368969252" target="_blank" rel="nofollow noopener">1368969252</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.41-5.46x3.42</div>
                        <div class="bgkc-col">0.63</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">41,319,960</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7371460543" target="_blank" rel="nofollow noopener">7371460543</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.39-5.43x3.39</div>
                        <div class="bgkc-col">0.61</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">43,839,840</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1367956379" target="_blank" rel="nofollow noopener">1367956379</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.38-5.42x3.37</div>
                        <div class="bgkc-col">0.6</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">46,390,080</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7366889469" target="_blank" rel="nofollow noopener">7366889469</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.39-5.43x3.38</div>
                        <div class="bgkc-col">0.61</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">35,005,080</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2376518588" target="_blank" rel="nofollow noopener">2376518588</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.38-5.41x3.36</div>
                        <div class="bgkc-col">0.6</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">36,462,360</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7308050731" target="_blank" rel="nofollow noopener">7308050731</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.38-5.41x3.33</div>
                        <div class="bgkc-col">0.6</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">38,405,400</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2297886778" target="_blank" rel="nofollow noopener">2297886778</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.39-5.4x3.34</div>
                        <div class="bgkc-col">0.6</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">31,452,960</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7366307077" target="_blank" rel="nofollow noopener">7366307077</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.39-5.42x3.3</div>
                        <div class="bgkc-col">0.59</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">33,062,040</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1379354739" target="_blank" rel="nofollow noopener">1379354739</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.38-5.4x3.33</div>
                        <div class="bgkc-col">0.59</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium, Blue
                        </div>
                        <div class="bgkc-col">25,380,960</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1373362497" target="_blank" rel="nofollow noopener">1373362497</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.38-5.41x3.4</div>
                        <div class="bgkc-col">0.61</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">27,141,840</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6375290638" target="_blank" rel="nofollow noopener">6375290638</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.41-5.43x3.29</div>
                        <div class="bgkc-col">0.59</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">28,386,600</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2346401800" target="_blank" rel="nofollow noopener">2346401800</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.39-5.41x3.39</div>
                        <div class="bgkc-col">0.6</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">18,944,640</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2296999927" target="_blank" rel="nofollow noopener">2296999927</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.4-5.42x3.41</div>
                        <div class="bgkc-col">0.61</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">21,616,320</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5363319390" target="_blank" rel="nofollow noopener">5363319390</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.39-5.42x3.36</div>
                        <div class="bgkc-col">0.6</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong, Blue
                        </div>
                        <div class="bgkc-col">22,557,480</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=" target="_blank" rel="nofollow noopener">2376055294</a>
                        </div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>
                <div class="bgkc-tab-content all 6ly" style="display: none;">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 6 LY
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Giác cắt
                        </div>
                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)
                        </div>
                        <div class="bgkc-col bgkc-head">Carat</div>
                        <div class="bgkc-col bgkc-head">Nước màu
                        </div>
                        <div class="bgkc-col bgkc-head">Độ sạch
                        </div>
                        <div class="bgkc-col bgkc-head">Cắt, Bóng, Đối xứng
                        </div>
                        <div class="bgkc-col bgkc-head">Phản quang
                        </div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ
                        </div>
                        <div class="bgkc-col bgkc-head">Mã số GIA
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6,01-6,05x3,78</div>
                        <div class="bgkc-col">0.86</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">104,742,000</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6365690518" target="_blank" rel="nofollow noopener">6365690518</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6-6,02x3,55</div>
                        <div class="bgkc-col">0.77</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">119,284,440</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2377312857" target="_blank" rel="nofollow noopener">2377312857</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6,02-6,05x3,8</div>
                        <div class="bgkc-col">0.85</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Very Strong
                        </div>
                        <div class="bgkc-col">137,105,760</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6362677690" target="_blank" rel="nofollow noopener">6362677690</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6,01-6,06x3,68</div>
                        <div class="bgkc-col">0.81</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">101,918,520</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2374080692" target="_blank" rel="nofollow noopener">2374080692</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6,02-6,04x3,49</div>
                        <div class="bgkc-col">0.76</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">113,850,000</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6375536390" target="_blank" rel="nofollow noopener">6375536390</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6,01-6,04x3,74</div>
                        <div class="bgkc-col">0.83</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">148,885,440</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1216461040" target="_blank" rel="nofollow noopener">1216461040</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6-6,04x3,64</div>
                        <div class="bgkc-col">0.8</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">100,279,080</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6371009061" target="_blank" rel="nofollow noopener">6371009061</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6,01-6,03x3,76</div>
                        <div class="bgkc-col">0.82</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong, Blue
                        </div>
                        <div class="bgkc-col">103,527,600</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1353106469" target="_blank" rel="nofollow noopener">1353106469</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6-6,04x3,8</div>
                        <div class="bgkc-col">0.85</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong, Blue
                        </div>
                        <div class="bgkc-col">118,495,080</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6355032305" target="_blank" rel="nofollow noopener">6355032305</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.01-6.02x3.79</div>
                        <div class="bgkc-col">0.84</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong, Blue
                        </div>
                        <div class="bgkc-col">88,711,920</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1206765416" target="_blank" rel="nofollow noopener">1206765416</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.01-6.03x3.66</div>
                        <div class="bgkc-col">0.8</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">93,448,080</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2151159804" target="_blank" rel="nofollow noopener">2151159804</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.01-6.03x3.64</div>
                        <div class="bgkc-col">0.8</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">99,489,720</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7336669668" target="_blank" rel="nofollow noopener">7336669668</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.99-6.02x3.66</div>
                        <div class="bgkc-col">0.8</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong, Blue
                        </div>
                        <div class="bgkc-col">69,949,440</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7362337691" target="_blank" rel="nofollow noopener">7362337691</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.01-6.04x3.64</div>
                        <div class="bgkc-col">0.8</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">83,338,200</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1365840547" target="_blank" rel="nofollow noopener">1365840547</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.02-6.05x3.78</div>
                        <div class="bgkc-col">0.84</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">87,467,160</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5212325920" target="_blank" rel="nofollow noopener">5212325920</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6-6.04x3.79</div>
                        <div class="bgkc-col">0.85</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">67,217,040</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7363876477" target="_blank" rel="nofollow noopener">7363876477</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.02-6.04x3.61</div>
                        <div class="bgkc-col">0.79</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">78,966,360</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1367270278" target="_blank" rel="nofollow noopener">1367270278</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.01-6.03x3.61</div>
                        <div class="bgkc-col">0.8</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">82,579,200</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5363618048" target="_blank" rel="nofollow noopener">5363618048</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.98-6.02x3.77</div>
                        <div class="bgkc-col">0.84</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">64,272,120</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7376704016" target="_blank" rel="nofollow noopener">7376704016</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.02-6.05x3.62</div>
                        <div class="bgkc-col">0.8</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">76,051,800</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2213253487" target="_blank" rel="nofollow noopener">2213253487</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.01-6.04x3.58</div>
                        <div class="bgkc-col">0.8</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">78,450,240</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7361663295" target="_blank" rel="nofollow noopener">7361663295</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.02-6.04x3.8</div>
                        <div class="bgkc-col">0.85</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">53,676,480</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7361432498" target="_blank" rel="nofollow noopener">7361432498</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.01-6.05x3.74</div>
                        <div class="bgkc-col">0.83</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium, Blue
                        </div>
                        <div class="bgkc-col">57,076,800</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5366609532" target="_blank" rel="nofollow noopener">5366609532</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.01-6.04x3.62</div>
                        <div class="bgkc-col">0.8</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">40,530,600</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6365743741" target="_blank" rel="nofollow noopener">6365743741</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">5.98-5.99x3.75</div>
                        <div class="bgkc-col">0.82</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">50,792,280</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1139146043" target="_blank" rel="nofollow noopener">1139146043</a>
                        </div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>
                <div class="bgkc-tab-content all 6ly3" style="display: none;">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 6 LY 3
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Giác cắt
                        </div>
                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)
                        </div>
                        <div class="bgkc-col bgkc-head">Carat</div>
                        <div class="bgkc-col bgkc-head">Nước màu
                        </div>
                        <div class="bgkc-col bgkc-head">Độ sạch
                        </div>
                        <div class="bgkc-col bgkc-head">Cắt, Bóng, Đối xứng
                        </div>
                        <div class="bgkc-col bgkc-head">Phản quang
                        </div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ
                        </div>
                        <div class="bgkc-col bgkc-head">Mã số GIA
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.32-6.36x3.94</div>
                        <div class="bgkc-col">1</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong blue
                        </div>
                        <div class="bgkc-col">172,141,200</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1375625594" target="_blank" rel="nofollow noopener">1375625594</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.3-6.35x4.01</div>
                        <div class="bgkc-col">1</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong blue
                        </div>
                        <div class="bgkc-col">187,473,000</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7366954066" target="_blank" rel="nofollow noopener">7366954066</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.3-6.33x3.9</div>
                        <div class="bgkc-col">0.96</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">244,064,040</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1378429085" target="_blank" rel="nofollow noopener">1378429085</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.32-6.37x3.98</div>
                        <div class="bgkc-col">1</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">156,080,760</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1375140817" target="_blank" rel="nofollow noopener">1375140817</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.32-6.36x4.03</div>
                        <div class="bgkc-col">1</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">183,313,680</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2374437365" target="_blank" rel="nofollow noopener">2374437365</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6,3-6,36x3,88</div>
                        <div class="bgkc-col">0.94</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong blue
                        </div>
                        <div class="bgkc-col">205,476,480</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6214264590" target="_blank" rel="nofollow noopener">6214264590</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6,3-6,36x4,03</div>
                        <div class="bgkc-col">1</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">159,298,920</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5363604774" target="_blank" rel="nofollow noopener">5363604774</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6,31-6,37x3,97</div>
                        <div class="bgkc-col">1</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">173,719,920</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6362960285" target="_blank" rel="nofollow noopener">6362960285</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6,28-6,34x4,03</div>
                        <div class="bgkc-col">1</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">205,992,600</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2215359072" target="_blank" rel="nofollow noopener">2215359072</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.31-6.36x3.93</div>
                        <div class="bgkc-col">0.98</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">129,121,080</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5356475276" target="_blank" rel="nofollow noopener">5356475276</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.3-6.35x4.01</div>
                        <div class="bgkc-col">1</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">168,376,560</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6372207862" target="_blank" rel="nofollow noopener">6372207862</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.3-6.35x4.02</div>
                        <div class="bgkc-col">1</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">178,152,480</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2366909341" target="_blank" rel="nofollow noopener">2366909341</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.31-6.36x4.02</div>
                        <div class="bgkc-col">1</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium, Blue
                        </div>
                        <div class="bgkc-col">150,615,960</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2377401019" target="_blank" rel="nofollow noopener">2377401019</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.32-6.38x3.97</div>
                        <div class="bgkc-col">1</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">155,564,640</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6372002029" target="_blank" rel="nofollow noopener">6372002029</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.32-6.38x3.99</div>
                        <div class="bgkc-col">1</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">110,935,440</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2277176920" target="_blank" rel="nofollow noopener">2277176920</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.32-6.35x3.86</div>
                        <div class="bgkc-col">0.96</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">115,094,760</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6342510286" target="_blank" rel="nofollow noopener">6342510286</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.31-6.35x3.73</div>
                        <div class="bgkc-col">0.9</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">118,404,000</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6342370406" target="_blank" rel="nofollow noopener">6342370406</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.3-6.36x4.03</div>
                        <div class="bgkc-col">1.01</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">98,670,000</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1378363958" target="_blank" rel="nofollow noopener">1378363958</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.32-6.35x3.93</div>
                        <div class="bgkc-col">0.97</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">105,895,680</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6351672811" target="_blank" rel="nofollow noopener">6351672811</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.31-6.35x3.8</div>
                        <div class="bgkc-col">0.91</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">113,121,360</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2215460839" target="_blank" rel="nofollow noopener">2215460839</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.31-6.36x4.01</div>
                        <div class="bgkc-col">1</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">88,469,040</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2377002240" target="_blank" rel="nofollow noopener">2377002240</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.31-6.36x3.97</div>
                        <div class="bgkc-col">1</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium, Blue
                        </div>
                        <div class="bgkc-col">94,116,000</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2367661000" target="_blank" rel="nofollow noopener">2367661000</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.32-6.35x4</div>
                        <div class="bgkc-col">1</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">78,936,000</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2215382012" target="_blank" rel="nofollow noopener">2215382012</a>
                        </div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>
                <div class="bgkc-tab-content all 7ly" style="display: none;">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 7 LY
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Giác cắt
                        </div>
                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)
                        </div>
                        <div class="bgkc-col bgkc-head">Carat</div>
                        <div class="bgkc-col bgkc-head">Nước màu
                        </div>
                        <div class="bgkc-col bgkc-head">Độ sạch
                        </div>
                        <div class="bgkc-col bgkc-head">Cắt, Bóng, Đối xứng
                        </div>
                        <div class="bgkc-col bgkc-head">Phản quang
                        </div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ
                        </div>
                        <div class="bgkc-col bgkc-head">Mã số GIA
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.98-7.02x4.39</div>
                        <div class="bgkc-col">1.31</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">317,383,440</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1369815318" target="_blank" rel="nofollow noopener">1369815318</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.99-7.04x4.41</div>
                        <div class="bgkc-col">1.35</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">330,347,160</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6365852924" target="_blank" rel="nofollow noopener">6365852924</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.98-7.02x4.38</div>
                        <div class="bgkc-col">1.34</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">373,306,560</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5192513006" target="_blank" rel="nofollow noopener">5192513006</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.99-7.03x4.26</div>
                        <div class="bgkc-col">1.3</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium Blue
                        </div>
                        <div class="bgkc-col">255,206,160</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6214247038" target="_blank" rel="nofollow noopener">6214247038</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7-7.03x4.17</div>
                        <div class="bgkc-col">1.23</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">274,849,080</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2211426865" target="_blank" rel="nofollow noopener">2211426865</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.01-7.07x4.24</div>
                        <div class="bgkc-col">1.28</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium Blue
                        </div>
                        <div class="bgkc-col">325,853,880</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5212410082" target="_blank" rel="nofollow noopener">5212410082</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.02-7.07x4.25</div>
                        <div class="bgkc-col">1.3</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">293,065,080</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6351233926" target="_blank" rel="nofollow noopener">6351233926</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.98-7x4.37</div>
                        <div class="bgkc-col">1.31</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium Blue
                        </div>
                        <div class="bgkc-col">306,393,120</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2116960517" target="_blank" rel="nofollow noopener">2116960517</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.01-7.05x4.3</div>
                        <div class="bgkc-col">1.31</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">259,517,280</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=3365551955" target="_blank" rel="nofollow noopener">3365551955</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.02-7.05x4.42</div>
                        <div class="bgkc-col">1.35</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">276,609,960</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7362221726" target="_blank" rel="nofollow noopener">7362221726</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.02-7.06x4.32</div>
                        <div class="bgkc-col">1.32</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">304,571,520</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6322631845" target="_blank" rel="nofollow noopener">6322631845</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7-7.04x4.28</div>
                        <div class="bgkc-col">1.29</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">208,360,680</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6362905668" target="_blank" rel="nofollow noopener">6362905668</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.02-7.05x4.31</div>
                        <div class="bgkc-col">1.3</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">236,565,120</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2211392604" target="_blank" rel="nofollow noopener">2211392604</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.99-7.01x4.26</div>
                        <div class="bgkc-col">1.26</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">244,215,840</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1369481399" target="_blank" rel="nofollow noopener">1369481399</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7-7.04x4.4</div>
                        <div class="bgkc-col">1.33</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">181,218,840</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5376391110" target="_blank" rel="nofollow noopener">5376391110</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.01-7.05x4.4</div>
                        <div class="bgkc-col">1.35</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">206,205,120</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2327078704" target="_blank" rel="nofollow noopener">2327078704</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.99-7.04x4.32</div>
                        <div class="bgkc-col">1.3</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">210,273,360</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2337590264" target="_blank" rel="nofollow noopener">2337590264</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">6.99-7.02x4.37</div>
                        <div class="bgkc-col">1.31</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">155,109,240</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2376277975" target="_blank" rel="nofollow noopener">2376277975</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7-7.04x4.38</div>
                        <div class="bgkc-col">1.31</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">160,452,600</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2378388923" target="_blank" rel="nofollow noopener">2378388923</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.01-7.04x4.33</div>
                        <div class="bgkc-col">1.3</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">174,661,080</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6375300487" target="_blank" rel="nofollow noopener">6375300487</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7-7.03x4.36</div>
                        <div class="bgkc-col">1.3</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">131,064,120</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2366735084" target="_blank" rel="nofollow noopener">2366735084</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.01-7.05x4.31</div>
                        <div class="bgkc-col">1.3</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">146,031,600</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6321472287" target="_blank" rel="nofollow noopener">6321472287</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.02-7.07x4.32</div>
                        <div class="bgkc-col">1.31</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">110,965,800</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=3375119785" target="_blank" rel="nofollow noopener">3375119785</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.02-7.05x4.32</div>
                        <div class="bgkc-col">1.3</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">130,942,680</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7338196146" target="_blank" rel="nofollow noopener">7338196146</a>
                        </div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>
                <div class="bgkc-tab-content all 7ly2" style="display: none;">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 7 LY 2
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Giác cắt
                        </div>
                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)
                        </div>
                        <div class="bgkc-col bgkc-head">Carat</div>
                        <div class="bgkc-col bgkc-head">Nước màu
                        </div>
                        <div class="bgkc-col bgkc-head">Độ sạch
                        </div>
                        <div class="bgkc-col bgkc-head">Cắt, Bóng, Đối xứng
                        </div>
                        <div class="bgkc-col bgkc-head">Phản quang
                        </div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ
                        </div>
                        <div class="bgkc-col bgkc-head">Mã số GIA
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.2-7.27x4.59</div>
                        <div class="bgkc-col">1.5</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Very strong
                        </div>
                        <div class="bgkc-col">320,146,200</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6371686022" target="_blank" rel="nofollow noopener">6371686022</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.21-7.26x4.5</div>
                        <div class="bgkc-col">1.46</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">403,362,960</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2215479008" target="_blank" rel="nofollow noopener">2215479008</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.2-7.26x4.59</div>
                        <div class="bgkc-col">1.5</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">477,077,040</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2366875040" target="_blank" rel="nofollow noopener">2366875040</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.19-7.23x4.43</div>
                        <div class="bgkc-col">1.41</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">388,911,600</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7331779994" target="_blank" rel="nofollow noopener">7331779994</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.2-7.23x4.51</div>
                        <div class="bgkc-col">1.47</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">460,348,680</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1192633772" target="_blank" rel="nofollow noopener">1192633772</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.18-7.21x4.45</div>
                        <div class="bgkc-col">1.42</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">354,240,480</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2377498561" target="_blank" rel="nofollow noopener">2377498561</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.19-7.23x4.51</div>
                        <div class="bgkc-col">1.46</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">409,556,400</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6372605639" target="_blank" rel="nofollow noopener">6372605639</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.21-7.26x4.37</div>
                        <div class="bgkc-col">1.41</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">305,816,280</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2376674760" target="_blank" rel="nofollow noopener">2376674760</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.21-7.26x4.34</div>
                        <div class="bgkc-col">1.4</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">343,068,000</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2368832982" target="_blank" rel="nofollow noopener">2368832982</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.2-7.24x4.34</div>
                        <div class="bgkc-col">1.4</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">320,176,560</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6372456331" target="_blank" rel="nofollow noopener">6372456331</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.19-7.25x4.4</div>
                        <div class="bgkc-col">1.41</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">228,580,440</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6372651315" target="_blank" rel="nofollow noopener">6372651315</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.21-7.27x4.58</div>
                        <div class="bgkc-col">1.5</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">290,332,680</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6375464439" target="_blank" rel="nofollow noopener">6375464439</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.2-7.23x4.35</div>
                        <div class="bgkc-col">1.4</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">277,794,000</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6217471363" target="_blank" rel="nofollow noopener">6217471363</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.2-7.27x4.61</div>
                        <div class="bgkc-col">1.5</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">245,733,840</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2215426599" target="_blank" rel="nofollow noopener">2215426599</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.18-7.22x4.35</div>
                        <div class="bgkc-col">1.4</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">166,129,920</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5363711156" target="_blank" rel="nofollow noopener">5363711156</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.21-7.24x4.37</div>
                        <div class="bgkc-col">1.37</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">166,980,000</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1359969518" target="_blank" rel="nofollow noopener">1359969518</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.21-7.27x4.54</div>
                        <div class="bgkc-col">1.5</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">200,831,400</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2356672583" target="_blank" rel="nofollow noopener">2356672583</a>
                        </div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>
                <div class="bgkc-tab-content all 8ly" style="display: none;">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 8 LY
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Giác cắt
                        </div>
                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)
                        </div>
                        <div class="bgkc-col bgkc-head">Carat</div>
                        <div class="bgkc-col bgkc-head">Nước màu
                        </div>
                        <div class="bgkc-col bgkc-head">Độ sạch
                        </div>
                        <div class="bgkc-col bgkc-head">Cắt, Bóng, Đối xứng
                        </div>
                        <div class="bgkc-col bgkc-head">Phản quang
                        </div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ
                        </div>
                        <div class="bgkc-col bgkc-head">Mã số GIA
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.01-8.05x5.04</div>
                        <div class="bgkc-col">2</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">774,180,000</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6365539834" target="_blank" rel="nofollow noopener">6365539834</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.01-8.06x4.99</div>
                        <div class="bgkc-col">2</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">851,901,600</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2213375231" target="_blank" rel="nofollow noopener">2213375231</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.02-8.07x5.07</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">633,309,600</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6361946288" target="_blank" rel="nofollow noopener">6361946288</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.01-8.06x5</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">808,881,480</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1333991829" target="_blank" rel="nofollow noopener">1333991829</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.02-8.07x5.02</div>
                        <div class="bgkc-col">2</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">595,784,640</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7326431032" target="_blank" rel="nofollow noopener">7326431032</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.99-8.05x5.02</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium Blue
                        </div>
                        <div class="bgkc-col">698,401,440</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2367765395" target="_blank" rel="nofollow noopener">2367765395</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.01-8.08x4.89</div>
                        <div class="bgkc-col">1.93</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">565,849,680</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5346085573" target="_blank" rel="nofollow noopener">5346085573</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.99-8.03x5.01</div>
                        <div class="bgkc-col">2.02</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong blue
                        </div>
                        <div class="bgkc-col">617,552,760</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5373387442" target="_blank" rel="nofollow noopener">5373387442</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8-8.06x5.06</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong blue
                        </div>
                        <div class="bgkc-col">494,291,160</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1377605592" target="_blank" rel="nofollow noopener">1377605592</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8-8.04x5.02</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">574,350,480</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2205204514" target="_blank" rel="nofollow noopener">2205204514</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.01-8.05x5.01</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium Blue
                        </div>
                        <div class="bgkc-col">597,484,800</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5212195651" target="_blank" rel="nofollow noopener">5212195651</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8-8.04x5.02</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">457,616,280</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6214381895" target="_blank" rel="nofollow noopener">6214381895</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8-8.06x5.03</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">478,473,600</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1369833938" target="_blank" rel="nofollow noopener">1369833938</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8-8.06x4.98</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">510,048,000</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2366539893" target="_blank" rel="nofollow noopener">2366539893</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.01-8.07x4.99</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium Blue
                        </div>
                        <div class="bgkc-col">374,551,320</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6213314851" target="_blank" rel="nofollow noopener">6213314851</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8-8.04x4.99</div>
                        <div class="bgkc-col">2</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">412,592,400</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6302256218" target="_blank" rel="nofollow noopener">6302256218</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.02-8.07x5.01</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong blue
                        </div>
                        <div class="bgkc-col">432,933,600</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1368946510" target="_blank" rel="nofollow noopener">1368946510</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">7.99-8.04x5.03</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">290,636,280</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1363797435" target="_blank" rel="nofollow noopener">1363797435</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8-8.05x5.01</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong blue
                        </div>
                        <div class="bgkc-col">311,402,520</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1358456303" target="_blank" rel="nofollow noopener">1358456303</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8-8.05x5.02</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong blue
                        </div>
                        <div class="bgkc-col">336,722,760</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2203042733" target="_blank" rel="nofollow noopener">2203042733</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.01-8.06x5.04</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">278,036,880</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2368294524" target="_blank" rel="nofollow noopener">2368294524</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.02-8.07x4.98</div>
                        <div class="bgkc-col">2</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">297,285,120</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6345631677" target="_blank" rel="nofollow noopener">6345631677</a>
                        </div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>
                <div class="bgkc-tab-content all 8ly1" style="display: none;">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 8 LY 1
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Giác cắt
                        </div>
                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)
                        </div>
                        <div class="bgkc-col bgkc-head">Carat</div>
                        <div class="bgkc-col bgkc-head">Nước màu
                        </div>
                        <div class="bgkc-col bgkc-head">Độ sạch
                        </div>
                        <div class="bgkc-col bgkc-head">Cắt, Bóng, Đối xứng
                        </div>
                        <div class="bgkc-col bgkc-head">Phản quang
                        </div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ
                        </div>
                        <div class="bgkc-col bgkc-head">Mã số GIA
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.1x8.16x4.98</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">686,561,040</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7371155084" target="_blank" rel="nofollow noopener">7371155084</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.1x8.13x4.91</div>
                        <div class="bgkc-col">2</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">774,180,000</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1275074995" target="_blank" rel="nofollow noopener">1275074995</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.11x8.16x4.94</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">948,780,360</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1358409155" target="_blank" rel="nofollow noopener">1358409155</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.12-8.17-5.12</div>
                        <div class="bgkc-col">2.1</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">796,555,320</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2211218811" target="_blank" rel="nofollow noopener">2211218811</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.1-8.16x5.08</div>
                        <div class="bgkc-col">2.06</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">926,374,680</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1377030918" target="_blank" rel="nofollow noopener">1377030918</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.12x8x16x4.8</div>
                        <div class="bgkc-col">1.9</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">960,043,920</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1373378174" target="_blank" rel="nofollow noopener">1373378174</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.08x8.13x5.04</div>
                        <div class="bgkc-col">2.06</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">613,393,440</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1367800140" target="_blank" rel="nofollow noopener">1367800140</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.1x8.14x4.9</div>
                        <div class="bgkc-col">1.92</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">740,055,360</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2357882100" target="_blank" rel="nofollow noopener">2357882100</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.1x8.17x5.07</div>
                        <div class="bgkc-col">2.05</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">NOne</div>
                        <div class="bgkc-col">862,193,640</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1363903309" target="_blank" rel="nofollow noopener">1363903309</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.09-8.13x5.07</div>
                        <div class="bgkc-col">2.06</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">586,524,840</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6361894559" target="_blank" rel="nofollow noopener">6361894559</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.08-8.12x4.99</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">678,849,600</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7366538617" target="_blank" rel="nofollow noopener">7366538617</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.09-8.1x4.82</div>
                        <div class="bgkc-col">1.89</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">485,426,040</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7346946741" target="_blank" rel="nofollow noopener">7346946741</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.09-8.14x4.97</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">530,055,240</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2211372176" target="_blank" rel="nofollow noopener">2211372176</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.1-8.12x5</div>
                        <div class="bgkc-col">2.02</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">710,302,560</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1156093270" target="_blank" rel="nofollow noopener">1156093270</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.09-8.12x4.98</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">468,242,280</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6375586408" target="_blank" rel="nofollow noopener">6375586408</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.12-8.15x4.96</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">501,577,560</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6361946495" target="_blank" rel="nofollow noopener">6361946495</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.1-8.14x5.08</div>
                        <div class="bgkc-col">2.07</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">527,049,600</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2364936427" target="_blank" rel="nofollow noopener">2364936427</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.1-8.14x4.98</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">385,905,960</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7361553474" target="_blank" rel="nofollow noopener">7361553474</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.11-8.16x4.93</div>
                        <div class="bgkc-col">2</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">416,660,640</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6302853264" target="_blank" rel="nofollow noopener">6302853264</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.11-8.15x4.95</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">J</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">443,256,000</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5212314731" target="_blank" rel="nofollow noopener">5212314731</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.1-8.17x4.99</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">306,453,840</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6352921556" target="_blank" rel="nofollow noopener">6352921556</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.12-8.17x4.99</div>
                        <div class="bgkc-col">2.03</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium, Blue
                        </div>
                        <div class="bgkc-col">377,192,640</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6352214872" target="_blank" rel="nofollow noopener">6352214872</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.09-8.14x4.94</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">253,506,000</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1375661916" target="_blank" rel="nofollow noopener">1375661916</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.12-8.14x4.99</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">269,839,680</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2378004891" target="_blank" rel="nofollow noopener">2378004891</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.09-8.14x4.94</div>
                        <div class="bgkc-col">2.01</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium, Blue
                        </div>
                        <div class="bgkc-col">277,794,000</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6193588934" target="_blank" rel="nofollow noopener">6193588934</a>
                        </div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>
                <div class="bgkc-tab-content all 9ly" style="display: none;">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 9 LY
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Giác cắt
                        </div>
                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)
                        </div>
                        <div class="bgkc-col bgkc-head">Carat</div>
                        <div class="bgkc-col bgkc-head">Nước màu
                        </div>
                        <div class="bgkc-col bgkc-head">Độ sạch
                        </div>
                        <div class="bgkc-col bgkc-head">Cắt, Bóng, Đối xứng
                        </div>
                        <div class="bgkc-col bgkc-head">Phản quang
                        </div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ
                        </div>
                        <div class="bgkc-col bgkc-head">Mã số GIA
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">9.01- 9.05x5.49
                        </div>
                        <div class="bgkc-col">2.72</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">1,837,630,080</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2195943136" target="_blank" rel="nofollow noopener">2195943136</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">9.01- 9.08x5.64
                        </div>
                        <div class="bgkc-col">2.91</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">1,519,578,720</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1248206546" target="_blank" rel="nofollow noopener">1248206546</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">9.01- 9.06x5.65
                        </div>
                        <div class="bgkc-col">2.88</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">1,809,941,760</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=7282534295" target="_blank" rel="nofollow noopener">7282534295</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">8.98- 9.06x5.58
                        </div>
                        <div class="bgkc-col">2.84</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">2,393,096,640</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5211370173" target="_blank" rel="nofollow noopener">5211370173</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">9.02- 9.09x5.72
                        </div>
                        <div class="bgkc-col">2.91</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">2,159,203,200</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2366971431" target="_blank" rel="nofollow noopener">2366971431</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">9.02-9.06x5.67</div>
                        <div class="bgkc-col">2.9</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">550,882,200</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5366862228" target="_blank" rel="nofollow noopener">5366862228</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">9.02-9.06x5.67</div>
                        <div class="bgkc-col">2.9</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">552,521,640</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1365934608" target="_blank" rel="nofollow noopener">1365934608</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">9.02-9.08x5.65</div>
                        <div class="bgkc-col">2.85</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">945,288,960</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6194955645" target="_blank" rel="nofollow noopener">6194955645</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">9.02-9.08x5.68</div>
                        <div class="bgkc-col">2.9</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">1,077,810,360</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6213248386" target="_blank" rel="nofollow noopener">6213248386</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">9.02-9.07x5.69</div>
                        <div class="bgkc-col">2.86</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">1,120,101,840</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6335845662" target="_blank" rel="nofollow noopener">6335845662</a>
                        </div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>
                <div class="bgkc-tab-content all 10ly" style="display: none;">
                    <div class="bgkc-title">GIÁ SỈ KIM CƯƠNG GIA 10 LY
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col bgkc-head">Giác cắt
                        </div>
                        <div class="bgkc-col bgkc-head">Kích cỡ (ly)
                        </div>
                        <div class="bgkc-col bgkc-head">Carat</div>
                        <div class="bgkc-col bgkc-head">Nước màu
                        </div>
                        <div class="bgkc-col bgkc-head">Độ sạch
                        </div>
                        <div class="bgkc-col bgkc-head">Cắt, Bóng, Đối xứng
                        </div>
                        <div class="bgkc-col bgkc-head">Phản quang
                        </div>
                        <div class="bgkc-col bgkc-head">Giá VNĐ
                        </div>
                        <div class="bgkc-col bgkc-head">Mã số GIA
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">10.06- 10.13x6.33
                        </div>
                        <div class="bgkc-col">4.03</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">2,657,471,520</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5212336254" target="_blank" rel="nofollow noopener">5212336254</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">10.13- 10.17x6.36
                        </div>
                        <div class="bgkc-col">4.08</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">2,674,958,880</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1357305157" target="_blank" rel="nofollow noopener">1357305157</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">10.04- 10.11x6.34
                        </div>
                        <div class="bgkc-col">4.01</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">2,732,582,160</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2366798798" target="_blank" rel="nofollow noopener">2366798798</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">10.11- 10.18x6.26
                        </div>
                        <div class="bgkc-col">4.01</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong</div>
                        <div class="bgkc-col">2,754,562,800</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1365785131" target="_blank" rel="nofollow noopener">1365785131</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">10.04- 10.06x5.97
                        </div>
                        <div class="bgkc-col">3.62</div>
                        <div class="bgkc-col">F</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">2,821,779,840</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6371599238" target="_blank" rel="nofollow noopener">6371599238</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">10.04- 10.09x6.28
                        </div>
                        <div class="bgkc-col">3.87</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">3,071,855,160</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5192968014" target="_blank" rel="nofollow noopener">5192968014</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">10.2- 10.27x6.2
                        </div>
                        <div class="bgkc-col">4.01</div>
                        <div class="bgkc-col">E</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">3,601,788,960</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=1353487580" target="_blank" rel="nofollow noopener">1353487580</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">10.09- 10.15x6.31
                        </div>
                        <div class="bgkc-col">4.01</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">4,223,045,640</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2211328761" target="_blank" rel="nofollow noopener">2211328761</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">10.13- 10.19x6.35
                        </div>
                        <div class="bgkc-col">4.06</div>
                        <div class="bgkc-col">D</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">5,238,618,000</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5212246616" target="_blank" rel="nofollow noopener">5212246616</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">10.04-10.1x6.3</div>
                        <div class="bgkc-col">4.01</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Medium</div>
                        <div class="bgkc-col">1,962,500,760</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5202570608" target="_blank" rel="nofollow noopener">5202570608</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">10-10.04x6.3</div>
                        <div class="bgkc-col">3.91</div>
                        <div class="bgkc-col">G</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Faint</div>
                        <div class="bgkc-col">2,281,554,000</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5201803700" target="_blank" rel="nofollow noopener">5201803700</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">10.06-10.12x6.3</div>
                        <div class="bgkc-col">3.94</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">1,986,272,640</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2135082065" target="_blank" rel="nofollow noopener">2135082065</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">10.07-10.14x6.33</div>
                        <div class="bgkc-col">4.01</div>
                        <div class="bgkc-col">H</div>
                        <div class="bgkc-col">VVS2</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">2,188,956,000</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6362152672" target="_blank" rel="nofollow noopener">6362152672</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">10.09-10.15x6.31</div>
                        <div class="bgkc-col">4.02</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">1,726,967,880</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2366380433" target="_blank" rel="nofollow noopener">2366380433</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">10.06-10.14x6.34</div>
                        <div class="bgkc-col">4.02</div>
                        <div class="bgkc-col">I</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">2,007,676,440</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2215455946" target="_blank" rel="nofollow noopener">2215455946</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">10.08-10.13x6.34</div>
                        <div class="bgkc-col">4.01</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">1,055,981,520</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=5212270503" target="_blank" rel="nofollow noopener">5212270503</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">10.06-10.13x6.37</div>
                        <div class="bgkc-col">4</div>
                        <div class="bgkc-col">K</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">Strong blue
                        </div>
                        <div class="bgkc-col">1,074,136,800</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=2327557384" target="_blank" rel="nofollow noopener">2327557384</a>
                        </div>
                    </div>
                    <div class="bgkc-row">
                        <div class="bgkc-col">Round</div>
                        <div class="bgkc-col">10.1-10.11x5.91</div>
                        <div class="bgkc-col">3.62</div>
                        <div class="bgkc-col">L</div>
                        <div class="bgkc-col">VVS1</div>
                        <div class="bgkc-col">Excellent</div>
                        <div class="bgkc-col">None</div>
                        <div class="bgkc-col">846,254,640</div>
                        <div class="bgkc-col">
                            <a href="https://www.gia.edu/report-check?reportno=6342690013" target="_blank" rel="nofollow noopener">6342690013</a>
                        </div>
                    </div>
                    <div class="bgkc-footer"><img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/vien-bang-gia-01-1.jpg" alt=""></div>
                </div>
            </div>

        </div>
    </div>


</div>
<script>
    var all = document.getElementsByClassName('all');
    var bgkc_tab = document.getElementsByClassName('bgkc-tab');

    function showbgkc(tab) {
        if (tab === 'all') {
            for (i = 0; i < bgkc_tab.length; i++) {
                bgkc_tab[i].classList.remove("active");
            }
            document.getElementById('all').classList.add("active");

            for (i = 0; i < all.length; i++) {
                all[i].style.display = "block";
            }
            gsap.fromTo('.all', {
                scale: 0.2
            }, {
                scale: 1,
                duration: 1,

            })
        } else {
            for (i = 0; i < bgkc_tab.length; i++) {
                bgkc_tab[i].classList.remove("active");
            }
            document.getElementById(tab).classList.add("active");
            var display = document.getElementsByClassName(tab)[0];
            for (i = 0; i < all.length; i++) {
                all[i].style.display = "none"
            }
            display.style.display = "block";
            var cl = document.getElementsByClassName(tab);
            gsap.fromTo(cl, {
                scale: 0.2
            }, {
                scale: 1,
                duration: 1,

            })
        }
    }
    var bgkcUrl = window.location.href;

    if (bgkcUrl === 'https://jemmia.vn/bang-gia-si-kim-cuong-gia') {
        // || bgkcUrl === 'https://jemmia.vn/bang-gia-kim-cuong-tu-nhien'
        showbgkc('5ly4');
    }
</script>
<!-- linh bảng giá kim cương -->
<?php 

get_footer(); 
?>
<!-- linh bảng giá kim cương -->