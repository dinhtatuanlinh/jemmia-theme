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
    <div id="page" class="diamondSizeChart">
        <div class="wrapper">
            <h1>Bảng quy đổi kích thước kim cương</h1>
            <p>
                Bạn muốn biết kích thước thực của một viên kim cương 1 carat trên tay? Sử dụng bảng quy đổi kích thước
                kim cương của chúng tôi để biết kích thước milimet (mm) của mỗi hình dạng kim cương.
            </p>
            <img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/banner/revised_diamond_size_chart_FINAL.jpg"
                alt="Bảng quy đổi kích thước kim cương">
            <div id="tabs">
                <div class="tab selected" onclick="sizeChart(this, 'Round')">
                    <i class="icon icon-diamond-round"></i>
                    <span class="material-icons">check_circle
                    </span>
                    <p>Round</p>
                </div>
                <div class="tab" onclick="sizeChart(this, 'Princess')">
                    <i class="icon icon-diamond-princess"></i>
                    <span class="material-icons">
                        check_circle
                    </span>
                    <p>Princess</p>
                </div>
                <div class="tab" onclick="sizeChart(this, 'Cushion')">
                    <i class="icon icon-diamond-cushion"></i>
                    <span class="material-icons">check_circle
                    </span>
                    <p>Cushion</p>
                </div>

                <div class="tab" onclick="sizeChart(this, 'Oval')">
                    <i class="icon icon-diamond-oval"></i>
                    <span class="material-icons">check_circle
                    </span>
                    <p>Oval</p>
                </div>
                <div class="tab" onclick="sizeChart(this, 'Emerald')">
                    <i class="icon icon-diamond-emerald"></i>
                    <span class="material-icons">check_circle
                    </span>
                    <p>Emerald</p>
                </div>
                <div class="tab" onclick="sizeChart(this, 'Heart')">
                    <i class="icon icon-diamond-heart"></i>
                    <span class="material-icons">check_circle
                    </span>
                    <p>Heart</p>
                </div>
                <div class="tab" onclick="sizeChart(this, 'Pear')">
                    <i class="icon icon-diamond-pear"></i>
                    <span class="material-icons">check_circle
                    </span>
                    <p>Pear</p>
                </div>
                <div class="tab" onclick="sizeChart(this, 'Marquise')">
                    <i class="icon icon-diamond-marquise"></i>
                    <span class="material-icons">check_circle
                    </span>
                    <p>Marquise</p>
                </div>
                <div class="tab" onclick="sizeChart(this, 'Asscher')">
                    <i class="icon icon-diamond-asscher"></i>
                    <span class="material-icons">check_circle
                    </span>
                    <p>Asscher</p>
                </div>
                <div class="tab" onclick="sizeChart(this, 'Radiant')">
                    <i class="icon icon-diamond-radiant"></i>
                    <span class="material-icons">check_circle
                    </span>
                    <p>Radiant</p>
                </div>
            </div>
            <div id="tabsContent">
                <div class="content" id="Round" style="display: block">
                    <h2><i class="icon icon-diamond-round"></i>Round Diamond Sizes</h2>

                    <div class="box">
                        <table>
                            <thead>
                                <tr>
                                    <th><strong>Kích thước Round (MM)</strong></th>
                                    <th><strong>Cân nặng Round (Carat)</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>0.8 mm.</td>
                                    <td>0.0025 ct.</td>
                                </tr>
                                <tr>
                                    <td>1 mm.</td>
                                    <td>0.005 ct.</td>
                                </tr>
                                <tr>
                                    <td>1.1 mm.</td>
                                    <td>0.0067 ct.</td>
                                </tr>
                                <tr>
                                    <td>1.2 mm.</td>
                                    <td>0.009 ct.</td>
                                </tr>
                                <tr>
                                    <td>1.25 mm.</td>
                                    <td>0.01 ct.</td>
                                </tr>
                                <tr>
                                    <td>1.3 mm.</td>
                                    <td>0.01 ct.</td>
                                </tr>
                                <tr>
                                    <td>1.5 mm.</td>
                                    <td>0.015 ct.</td>
                                </tr>
                                <tr>
                                    <td>1.75 mm.</td>
                                    <td>0.02 ct.</td>
                                </tr>
                                <tr>
                                    <td>1.8 mm.</td>
                                    <td>0.025 ct.</td>
                                </tr>
                                <tr>
                                    <td>2 mm.</td>
                                    <td>0.03 ct.</td>
                                </tr>
                                <tr>
                                    <td>2.2 mm.</td>
                                    <td>0.04 ct.</td>
                                </tr>
                                <tr>
                                    <td>2.5 mm.</td>
                                    <td>0.06 ct.</td>
                                </tr>
                                <tr>
                                    <td>2.75 mm.</td>
                                    <td>0.08 ct.</td>
                                </tr>
                                <tr>
                                    <td>3 mm.</td>
                                    <td>0.10 ct.</td>
                                </tr>
                                <tr>
                                    <td>3.25 mm.</td>
                                    <td>0.14 ct.</td>
                                </tr>
                                <tr>
                                    <td>3.5 mm.</td>
                                    <td>0.17 ct.</td>
                                </tr>
                                <tr>
                                    <td>3.75 mm.</td>
                                    <td>0.21 ct.</td>
                                </tr>
                                <tr>
                                    <td>4 mm.</td>
                                    <td>0.25 ct.</td>
                                </tr>
                                <tr>
                                    <td>4.25 mm.</td>
                                    <td>0.28 ct.</td>
                                </tr>
                                <tr>
                                    <td>4.5 mm.</td>
                                    <td>0.36 ct.</td>
                                </tr>
                                <tr>
                                    <td>4.75 mm.</td>
                                    <td>0.44 ct.</td>
                                </tr>
                                <tr>
                                    <td>5.0 mm.</td>
                                    <td>0.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>5.25 mm.</td>
                                    <td>0.56 ct.</td>
                                </tr>
                                <tr>
                                    <td>5.5 mm.</td>
                                    <td>0.66 ct.</td>
                                </tr>
                                <tr>
                                    <td>5.75 mm.</td>
                                    <td>0.75 ct.</td>
                                </tr>
                                <tr>
                                    <td>6 mm.</td>
                                    <td>0.84 ct.</td>
                                </tr>
                                <tr>
                                    <td>6.25 mm.</td>
                                    <td>0.93 ct.</td>
                                </tr>
                                <tr>
                                    <td>6.5 mm.</td>
                                    <td>1.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>6.8 mm.</td>
                                    <td>1.25 ct.</td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <th><strong>Kích thước Round (MM)</strong></th>
                                    <th><strong>Cân nặng Round (Carat)</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>7 mm.</td>
                                    <td>1.30 ct.</td>
                                </tr>
                                <tr>
                                    <td>7.3 mm.</td>
                                    <td>1.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>7.5 mm.</td>
                                    <td>1.67 ct.</td>
                                </tr>
                                <tr>
                                    <td>7.75 mm.</td>
                                    <td>1.75 ct.</td>
                                </tr>
                                <tr>
                                    <td>8 mm.</td>
                                    <td>2.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>8.25 mm.</td>
                                    <td>2.11 ct.</td>
                                </tr>
                                <tr>
                                    <td>8.5 mm.</td>
                                    <td>2.43 ct.</td>
                                </tr>
                                <tr>
                                    <td>8.7 mm.</td>
                                    <td>2.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>9 mm.</td>
                                    <td>2.75 ct.</td>
                                </tr>
                                <tr>
                                    <td>9.1 mm.</td>
                                    <td>3.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>9.5 mm.</td>
                                    <td>3.35 ct.</td>
                                </tr>
                                <tr>
                                    <td>9.75 mm.</td>
                                    <td>3.61 ct.</td>
                                </tr>
                                <tr>
                                    <td>10 mm.</td>
                                    <td>3.87 ct.</td>
                                </tr>
                                <tr>
                                    <td>10.25 mm.</td>
                                    <td>4.16 ct.</td>
                                </tr>
                                <tr>
                                    <td>10.5 mm.</td>
                                    <td>4.41 ct.</td>
                                </tr>
                                <tr>
                                    <td>10.75 mm.</td>
                                    <td>4.57 ct.</td>
                                </tr>
                                <tr>
                                    <td>11 mm.</td>
                                    <td>4.91 ct.</td>
                                </tr>
                                <tr>
                                    <td>11.25 mm.</td>
                                    <td>5.49 ct.</td>
                                </tr>
                                <tr>
                                    <td>11.5 mm.</td>
                                    <td>5.85 ct.</td>
                                </tr>
                                <tr>
                                    <td>12 mm.</td>
                                    <td>6.84 ct.</td>
                                </tr>
                                <tr>
                                    <td>12.25 mm.</td>
                                    <td>7.26 ct.</td>
                                </tr>
                                <tr>
                                    <td>12.5 mm.</td>
                                    <td>7.36 ct.</td>
                                </tr>
                                <tr>
                                    <td>12.75 mm.</td>
                                    <td>7.52 ct.</td>
                                </tr>
                                <tr>
                                    <td>13 mm.</td>
                                    <td>8.51 ct.</td>
                                </tr>
                                <tr>
                                    <td>13.5 mm.</td>
                                    <td>9.53 ct.</td>
                                </tr>
                                <tr>
                                    <td>14 mm.</td>
                                    <td>10.49 ct.</td>
                                </tr>
                                <tr>
                                    <td>15 mm.</td>
                                    <td>12.89 ct.</td>
                                </tr>
                                <tr>
                                    <td>16 mm.</td>
                                    <td>16.06 ct.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="content" id="Princess">
                    <h2><i class="icon icon-diamond-princess"></i>Princess Diamond Sizes</h2>
                    <div class="box">
                        <table>
                            <thead>
                                <tr>
                                    <th><strong>Kích thước Princess (MM)</strong></th>
                                    <th><strong>Cân nặng Princess (Carat)</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.5 mm.</td>
                                    <td>0.015 ct.</td>
                                </tr>
                                <tr>
                                    <td>1.75 mm.</td>
                                    <td>0.03 ct.</td>
                                </tr>
                                <tr>
                                    <td>2 mm.</td>
                                    <td>0.06 ct.</td>
                                </tr>
                                <tr>
                                    <td>2.25 mm.</td>
                                    <td>0.08 ct.</td>
                                </tr>
                                <tr>
                                    <td>2.5 mm.</td>
                                    <td>0.10 ct.</td>
                                </tr>
                                <tr>
                                    <td>2.75 mm.</td>
                                    <td>0.13 ct.</td>
                                </tr>
                                <tr>
                                    <td>3 mm.</td>
                                    <td>0.18 ct.</td>
                                </tr>
                                <tr>
                                    <td>3.25 mm.</td>
                                    <td>0.26 ct.</td>
                                </tr>
                                <tr>
                                    <td>3.5 mm.</td>
                                    <td>0.29 ct.</td>
                                </tr>
                                <tr>
                                    <td>3.75 mm.</td>
                                    <td>0.31 ct.</td>
                                </tr>
                                <tr>
                                    <td>4 mm.</td>
                                    <td>0.39 ct.</td>
                                </tr>
                                <tr>
                                    <td>4.25 mm.</td>
                                    <td>0.44 ct.</td>
                                </tr>
                                <tr>
                                    <td>4.5 mm.</td>
                                    <td>0.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>4.75 mm.</td>
                                    <td>0.64 ct.</td>
                                </tr>
                                <tr>
                                    <td>5 mm.</td>
                                    <td>0.75 ct.</td>
                                </tr>
                                <tr>
                                    <td>5.25 mm.</td>
                                    <td>0.90 ct.</td>
                                </tr>
                                <tr>
                                    <td>5.5 mm.</td>
                                    <td>1.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>5.75 mm.</td>
                                    <td>1.11 ct.</td>
                                </tr>
                                <tr>
                                    <td>6 mm.</td>
                                    <td>1.25 ct.</td>
                                </tr>
                                <tr>
                                    <td>6.25 mm.</td>
                                    <td>1.39 ct.</td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <th><strong>Kích thước Princess (MM)</strong></th>
                                    <th><strong>Cân nặng Princess (Carat)</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>6.5 mm.</td>
                                    <td>1.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>6.75 mm.</td>
                                    <td>1.75 ct.</td>
                                </tr>
                                <tr>
                                    <td>7 mm.</td>
                                    <td>2.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>7.25 mm.</td>
                                    <td>2.01 ct.</td>
                                </tr>
                                <tr>
                                    <td>7.5 mm.</td>
                                    <td>2.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>7.75 mm.</td>
                                    <td>2.74 ct.</td>
                                </tr>
                                <tr>
                                    <td>8 mm.</td>
                                    <td>3.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>8.25 mm.</td>
                                    <td>3.24 ct.</td>
                                </tr>
                                <tr>
                                    <td>8.5 mm.</td>
                                    <td>3.67 ct.</td>
                                </tr>
                                <tr>
                                    <td>8.75 mm.</td>
                                    <td>4.10 ct.</td>
                                </tr>
                                <tr>
                                    <td>9 mm.</td>
                                    <td>4.12 ct.</td>
                                </tr>
                                <tr>
                                    <td>9.5 mm.</td>
                                    <td>5.09 ct.</td>
                                </tr>
                                <tr>
                                    <td>9.75 mm.</td>
                                    <td>5.36 ct.</td>
                                </tr>
                                <tr>
                                    <td>10 mm.</td>
                                    <td>5.62 ct.</td>
                                </tr>
                                <tr>
                                    <td>10.25 mm.</td>
                                    <td>5.76 ct.</td>
                                </tr>
                                <tr>
                                    <td>10.5 mm.</td>
                                    <td>5.99 ct.</td>
                                </tr>
                                <tr>
                                    <td>11 mm.</td>
                                    <td>7.44 ct.</td>
                                </tr>
                                <tr>
                                    <td>11.5 mm.</td>
                                    <td>9.44 ct.</td>
                                </tr>
                                <tr>
                                    <td>12 mm.</td>
                                    <td>9.52 ct.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="content" id="Cushion">
                    <h2><i class="icon icon-diamond-cushion"></i>Cushion Diamond Sizes</h2>
                    <div class="box">
                        <table>
                            <thead>
                                <tr>
                                    <th><strong>Kích thước Cushion (MM)</strong></th>
                                    <th><strong>Cân nặng Cushion (Carat)</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>4.2 mm.</td>
                                    <td>0.40 ct.</td>
                                </tr>
                                <tr>
                                    <td>4.9 mm.</td>
                                    <td>0.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>5.25 mm.</td>
                                    <td>0.75 ct.</td>
                                </tr>
                                <tr>
                                    <td>5.5 mm.</td>
                                    <td>1.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>6 mm.</td>
                                    <td>1.25 ct.</td>
                                </tr>
                                <tr>
                                    <td>6.5 mm.</td>
                                    <td>1.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>7 mm.</td>
                                    <td>2.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>7.5 mm.</td>
                                    <td>2.50 ct.</td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <th><strong>Kích thước Cushion (MM)</strong></th>
                                    <th><strong>Cân nặng Cushion (Carat)</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>8 mm.</td>
                                    <td>3.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>8.5 mm.</td>
                                    <td>3.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>9 mm.</td>
                                    <td>4.12 ct.</td>
                                </tr>
                                <tr>
                                    <td>9.5 mm.</td>
                                    <td>5.09 ct.</td>
                                </tr>
                                <tr>
                                    <td>10 mm.</td>
                                    <td>5.62 ct.</td>
                                </tr>
                                <tr>
                                    <td>11 mm.</td>
                                    <td>7.44 ct.</td>
                                </tr>
                                <tr>
                                    <td>12 mm.</td>
                                    <td>9.52 ct.</td>
                                </tr>
                                <tr>
                                    <td>13 mm.</td>
                                    <td>12.66 ct.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="content" id="Oval">
                    <h2><i class="icon icon-diamond-oval"></i>Oval Diamond Sizes</h2>
                    <div class="box">
                        <table>
                            <thead>
                                <tr>
                                    <th><strong>Kích thước Oval (MM)</strong></th>
                                    <th><strong>Cân nặng Oval (Carat)</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>4.5×3.5 mm.</td>
                                    <td>0.21 ct.</td>
                                </tr>
                                <tr>
                                    <td>5×3 mm.</td>
                                    <td>0.21 ct.</td>
                                </tr>
                                <tr>
                                    <td>5.5×3.5 mm.</td>
                                    <td>0.33 ct.</td>
                                </tr>
                                <tr>
                                    <td>5×4 mm.</td>
                                    <td>0.35 ct.</td>
                                </tr>
                                <tr>
                                    <td>6×4 mm.</td>
                                    <td>0.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>6×5 mm.</td>
                                    <td>0.61 ct.</td>
                                </tr>
                                <tr>
                                    <td>6.5×4.5 mm.</td>
                                    <td>0.65 ct.</td>
                                </tr>
                                <tr>
                                    <td>7×5 mm.</td>
                                    <td>0.75 ct.</td>
                                </tr>
                                <tr>
                                    <td>7.7×5.7 mm.</td>
                                    <td>1.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>8×6 mm.</td>
                                    <td>1.25 ct.</td>
                                </tr>
                                <tr>
                                    <td>9×6 mm.</td>
                                    <td>1.41 ct.</td>
                                </tr>
                                <tr>
                                    <td>8.5×6.5 mm.</td>
                                    <td>1.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>9×7 mm.</td>
                                    <td>2.00 ct.</td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <th><strong>Kích thước Oval (MM)</strong></th>
                                    <th><strong>Cân nặng Oval (Carat)</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10×8 mm.</td>
                                    <td>2.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>10.5×8.5 mm.</td>
                                    <td>2.88 ct.</td>
                                </tr>
                                <tr>
                                    <td>12×8 mm.</td>
                                    <td>3.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>11×9 mm.</td>
                                    <td>3.85 ct.</td>
                                </tr>
                                <tr>
                                    <td>12×10 mm.</td>
                                    <td>5.05 ct.</td>
                                </tr>
                                <tr>
                                    <td>14×10 mm.</td>
                                    <td>5.81 ct.</td>
                                </tr>
                                <tr>
                                    <td>13×11 mm.</td>
                                    <td>6.05 ct.</td>
                                </tr>
                                <tr>
                                    <td>14×12 mm.</td>
                                    <td>8.21 ct.</td>
                                </tr>
                                <tr>
                                    <td>15×12 mm.</td>
                                    <td>8.76 ct.</td>
                                </tr>
                                <tr>
                                    <td>16×12 mm.</td>
                                    <td>9.32 ct.</td>
                                </tr>
                                <tr>
                                    <td>16×14 mm.</td>
                                    <td>11.88 ct.</td>
                                </tr>
                                <tr>
                                    <td>18×13 mm.</td>
                                    <td>12.86 ct.</td>
                                </tr>
                                <tr>
                                    <td>20×15 mm.</td>
                                    <td>14.96 ct.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="content" id="Emerald">
                    <h2><i class="icon icon-diamond-emerald"></i>Emerald Diamond Sizes</h2>
                    <div class="box">
                        <table>
                            <thead>
                                <tr>
                                    <th><strong>Kích thước Emerald (MM)</strong></th>
                                    <th><strong>Cân nặng Emerald (Carat)</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3×2 mm.</td>
                                    <td>0.10 ct.</td>
                                </tr>
                                <tr>
                                    <td>3.5×2 mm.</td>
                                    <td>0.12 ct.</td>
                                </tr>
                                <tr>
                                    <td>4×2 mm.</td>
                                    <td>0.15 ct.</td>
                                </tr>
                                <tr>
                                    <td>4×3 mm.</td>
                                    <td>0.20 ct.</td>
                                </tr>
                                <tr>
                                    <td>5×3 mm.</td>
                                    <td>0.29 ct.</td>
                                </tr>
                                <tr>
                                    <td>5.5×3.5 mm.</td>
                                    <td>0.46 ct.</td>
                                </tr>
                                <tr>
                                    <td>6×4 mm.</td>
                                    <td>0.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>6.5×4.5 mm.</td>
                                    <td>0.75 ct.</td>
                                </tr>
                                <tr>
                                    <td>6.7×4.5 mm.</td>
                                    <td>0.88 ct.</td>
                                </tr>
                                <tr>
                                    <td>7×5 mm.</td>
                                    <td>1.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>7.3×5.3 mm.</td>
                                    <td>1.25 ct.</td>
                                </tr>
                                <tr>
                                    <td>7.5×5.5 mm.</td>
                                    <td>1.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>8×6 mm.</td>
                                    <td>1.75 ct.</td>
                                </tr>
                                <tr>
                                    <td>8.5×6.5 mm.</td>
                                    <td>2.00 ct.</td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <th><strong>Kích thước Emerald (MM)</strong></th>
                                    <th><strong>Cân nặng Emerald (Carat)</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>9×7 mm.</td>
                                    <td>2.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>10×7.5 mm.</td>
                                    <td>3.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>9.5×7.5 mm.</td>
                                    <td>3.21 ct.</td>
                                </tr>
                                <tr>
                                    <td>10×8 mm.</td>
                                    <td>3.79 ct.</td>
                                </tr>
                                <tr>
                                    <td>11×9 mm.</td>
                                    <td>5.21 ct.</td>
                                </tr>
                                <tr>
                                    <td>12×8 mm.</td>
                                    <td>5.34 ct.</td>
                                </tr>
                                <tr>
                                    <td>12×10 mm.</td>
                                    <td>6.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>14×8 mm.</td>
                                    <td>6.25 ct.</td>
                                </tr>
                                <tr>
                                    <td>13×9 mm.</td>
                                    <td>6.38 ct.</td>
                                </tr>
                                <tr>
                                    <td>14×10 mm.</td>
                                    <td>8.48 ct.</td>
                                </tr>
                                <tr>
                                    <td>13×11 mm.</td>
                                    <td>9.13 ct.</td>
                                </tr>
                                <tr>
                                    <td>14×12 mm.</td>
                                    <td>11.26 ct.</td>
                                </tr>
                                <tr>
                                    <td>16×12 mm.</td>
                                    <td>14.22 ct.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="content" id="Heart">
                    <h2><i class="icon icon-diamond-heart"></i>Heart Diamond Sizes</h2>
                    <div class="box">
                        <table>
                            <thead>
                                <tr>
                                    <th><strong>Kích thước Heart (MM)</strong></th>
                                    <th><strong>Cân nặng Heart (Carat)</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3.5 mm.</td>
                                    <td>0.18 ct.</td>
                                </tr>
                                <tr>
                                    <td>4 mm.</td>
                                    <td>0.25 ct.</td>
                                </tr>
                                <tr>
                                    <td>4.25 mm.</td>
                                    <td>0.28 ct.</td>
                                </tr>
                                <tr>
                                    <td>4.5 mm.</td>
                                    <td>0.34 ct.</td>
                                </tr>
                                <tr>
                                    <td>4.75 mm.</td>
                                    <td>0.38 ct.</td>
                                </tr>
                                <tr>
                                    <td>5 mm.</td>
                                    <td>0.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>5.5 mm.</td>
                                    <td>0.61 ct.</td>
                                </tr>
                                <tr>
                                    <td>6 mm.</td>
                                    <td>0.75 ct.</td>
                                </tr>
                                <tr>
                                    <td>6.25 mm.</td>
                                    <td>0.83 ct.</td>
                                </tr>
                                <tr>
                                    <td>6.5 mm.</td>
                                    <td>1.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>7 mm.</td>
                                    <td>1.25 ct.</td>
                                </tr>
                                <tr>
                                    <td>7.5 mm.</td>
                                    <td>1.50 ct.</td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <th><strong>Kích thước Heart (MM)</strong></th>
                                    <th><strong>Cân nặng Heart (Carat)</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>8 mm.</td>
                                    <td>2.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>8.5 mm.</td>
                                    <td>2.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>9 mm.</td>
                                    <td>3.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>10 mm.</td>
                                    <td>3.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>11 mm.</td>
                                    <td>4.41 ct.</td>
                                </tr>
                                <tr>
                                    <td>12 mm.</td>
                                    <td>5.66 ct.</td>
                                </tr>
                                <tr>
                                    <td>13 mm.</td>
                                    <td>7.88 ct.</td>
                                </tr>
                                <tr>
                                    <td>14 mm.</td>
                                    <td>9.38 ct.</td>
                                </tr>
                                <tr>
                                    <td>15 mm.</td>
                                    <td>10.79 ct.</td>
                                </tr>
                                <tr>
                                    <td>16 mm.</td>
                                    <td>13.27 ct.</td>
                                </tr>
                                <tr>
                                    <td>18 mm.</td>
                                    <td>15.33 ct.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="content" id="Pear">
                    <h2><i class="icon icon-diamond-pear"></i>Pear Diamond Sizes</h2>
                    <div class="box">
                        <table>
                            <thead>
                                <tr>
                                    <th><strong>Kích thước Pear (MM)</strong></th>
                                    <th><strong>Cân nặng Pear (Carat)</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3×2 mm.</td>
                                    <td>0.13 ct.</td>
                                </tr>
                                <tr>
                                    <td>4×2.5 mm.</td>
                                    <td>0.18 ct.</td>
                                </tr>
                                <tr>
                                    <td>4×3 mm.</td>
                                    <td>0.21 ct.</td>
                                </tr>
                                <tr>
                                    <td>5×3 mm.</td>
                                    <td>0.25 ct.</td>
                                </tr>
                                <tr>
                                    <td>5×4 mm.</td>
                                    <td>0.35 ct.</td>
                                </tr>
                                <tr>
                                    <td>6×4 mm.</td>
                                    <td>0.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>6.5×4.5 mm.</td>
                                    <td>0.60 ct.</td>
                                </tr>
                                <tr>
                                    <td>7×5 mm.</td>
                                    <td>0.75 ct.</td>
                                </tr>
                                <tr>
                                    <td>7.5×5.5 mm.</td>
                                    <td>0.85 ct.</td>
                                </tr>
                                <tr>
                                    <td>7.7×5.7 mm.</td>
                                    <td>1.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>8×6 mm.</td>
                                    <td>1.25 ct.</td>
                                </tr>
                                <tr>
                                    <td>8.5×6.5 mm.</td>
                                    <td>1.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>10×6 mm.</td>
                                    <td>1.71 ct.</td>
                                </tr>
                                <tr>
                                    <td>8.7×6.7 mm.</td>
                                    <td>1.80 ct.</td>
                                </tr>
                                <tr>
                                    <td>9×7 mm.</td>
                                    <td>2.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>10×8 mm.</td>
                                    <td>2.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>11×7.50 mm.</td>
                                    <td>2.61 ct.</td>
                                </tr>
                                <tr>
                                    <td>13×8 mm.</td>
                                    <td>2.98 ct.</td>
                                </tr>
                                <tr>
                                    <td>11×8 mm.</td>
                                    <td>3.00 ct.</td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <th><strong>Kích thước Pear (MM)</strong></th>
                                    <th><strong>Cân nặng Pear (Carat)</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>12×8 mm.</td>
                                    <td>3.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>12×7 mm.</td>
                                    <td>3.12 ct.</td>
                                </tr>
                                <tr>
                                    <td>12×9 mm.</td>
                                    <td>3.44 ct.</td>
                                </tr>
                                <tr>
                                    <td>14×8 mm.</td>
                                    <td>3.47 ct.</td>
                                </tr>
                                <tr>
                                    <td>13×9 mm.</td>
                                    <td>4.11 ct.</td>
                                </tr>
                                <tr>
                                    <td>14×9 mm.</td>
                                    <td>4.25 ct.</td>
                                </tr>
                                <tr>
                                    <td>15×9 mm.</td>
                                    <td>5.06 ct.</td>
                                </tr>
                                <tr>
                                    <td>14×10 mm.</td>
                                    <td>5.41 ct.</td>
                                </tr>
                                <tr>
                                    <td>13×11 mm.</td>
                                    <td>5.65 ct.</td>
                                </tr>
                                <tr>
                                    <td>15×10 mm.</td>
                                    <td>5.75 ct.</td>
                                </tr>
                                <tr>
                                    <td>16×9 mm.</td>
                                    <td>5.86 ct.</td>
                                </tr>
                                <tr>
                                    <td>16×10 mm.</td>
                                    <td>6.27 ct.</td>
                                </tr>
                                <tr>
                                    <td>17×10 mm.</td>
                                    <td>6.46 ct.</td>
                                </tr>
                                <tr>
                                    <td>15×11 mm.</td>
                                    <td>7.36 ct.</td>
                                </tr>
                                <tr>
                                    <td>18×11 mm.</td>
                                    <td>8.14 ct.</td>
                                </tr>
                                <tr>
                                    <td>16×12 mm.</td>
                                    <td>8.99 ct.</td>
                                </tr>
                                <tr>
                                    <td>18×12 mm.</td>
                                    <td>9.35 ct.</td>
                                </tr>
                                <tr>
                                    <td>18×13 mm.</td>
                                    <td>10.21 ct.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="content" id="Marquise">
                    <h2><i class="icon icon-diamond-marquise"></i>Marquise Diamond Sizes</h2>
                    <div class="box">
                        <table>
                            <thead>
                                <tr>
                                    <th><strong>Kích thước Marquise (MM)</strong></th>
                                    <th><strong>Cân nặng Marquise (Carat)</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3×1.5 mm.</td>
                                    <td>0.025 ct.</td>
                                </tr>
                                <tr>
                                    <td>3.5×1.75 mm.</td>
                                    <td>0.065 ct.</td>
                                </tr>
                                <tr>
                                    <td>3.5×2 mm.</td>
                                    <td>0.07 ct.</td>
                                </tr>
                                <tr>
                                    <td>4×2 mm.</td>
                                    <td>0.10 ct.</td>
                                </tr>
                                <tr>
                                    <td>3.75×1.75 mm.</td>
                                    <td>0.11 ct.</td>
                                </tr>
                                <tr>
                                    <td>4.25×2.25 mm.</td>
                                    <td>0.12 ct.</td>
                                </tr>
                                <tr>
                                    <td>5×2.5 mm.</td>
                                    <td>0.14 ct.</td>
                                </tr>
                                <tr>
                                    <td>5.5×2.75 mm.</td>
                                    <td>0.16 ct.</td>
                                </tr>
                                <tr>
                                    <td>5.5×3 mm.</td>
                                    <td>0.18 ct.</td>
                                </tr>
                                <tr>
                                    <td>5×3 mm.</td>
                                    <td>0.20 ct.</td>
                                </tr>
                                <tr>
                                    <td>6.5×3 mm.</td>
                                    <td>0.23 ct.</td>
                                </tr>
                                <tr>
                                    <td>6×3 mm.</td>
                                    <td>0.25 ct.</td>
                                </tr>
                                <tr>
                                    <td>7×3 mm.</td>
                                    <td>0.30 ct.</td>
                                </tr>
                                <tr>
                                    <td>7.5×3.5 mm.</td>
                                    <td>0.33 ct.</td>
                                </tr>
                                <tr>
                                    <td>7×4 mm.</td>
                                    <td>0.34 ct.</td>
                                </tr>
                                <tr>
                                    <td>8×4 mm.</td>
                                    <td>0.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>8.75×4.25 mm.</td>
                                    <td>0.70 ct.</td>
                                </tr>
                                <tr>
                                    <td>9×4.5 mm.</td>
                                    <td>0.75 ct.</td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <th><strong>Kích thước Marquise (MM)</strong></th>
                                    <th><strong>Cân nặng Marquise (Carat)</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>9.5×4.7 mm.</td>
                                    <td>0.85 ct.</td>
                                </tr>
                                <tr>
                                    <td>10×5 mm.</td>
                                    <td>1.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>11×5.5 mm.</td>
                                    <td>1.25 ct.</td>
                                </tr>
                                <tr>
                                    <td>11.5×6 mm.</td>
                                    <td>1.33 ct.</td>
                                </tr>
                                <tr>
                                    <td>12×6 mm.</td>
                                    <td>1.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>13×6.5 mm.</td>
                                    <td>2.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>14×7 mm.</td>
                                    <td>2.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>15×7 mm.</td>
                                    <td>3.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>14×8 mm.</td>
                                    <td>3.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>15×7.5 mm.</td>
                                    <td>3.25 ct.</td>
                                </tr>
                                <tr>
                                    <td>15×8 mm.</td>
                                    <td>3.44 ct.</td>
                                </tr>
                                <tr>
                                    <td>16×8 mm.</td>
                                    <td>3.86 ct.</td>
                                </tr>
                                <tr>
                                    <td>16.5×8.25 mm.</td>
                                    <td>4.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>17×8.5 mm.</td>
                                    <td>4.88 ct.</td>
                                </tr>
                                <tr>
                                    <td>17.5×10 mm.</td>
                                    <td>5.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>20×8 mm.</td>
                                    <td>7.08 ct.</td>
                                </tr>
                                <tr>
                                    <td>20×10 mm.</td>
                                    <td>7.94 ct.</td>
                                </tr>
                                <tr>
                                    <td>20×11 mm.</td>
                                    <td>9.50 ct.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="content" id="Asscher">
                    <h2><i class="icon icon-diamond-asscher"></i>Asscher Diamond Sizes</h2>
                    <div class="box">
                        <table>
                            <thead>
                                <tr>
                                    <th><strong>Kích thước Asscher (MM)</strong></th>
                                    <th><strong>Cân nặng Asscher (Carat)</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>4 mm.</td>
                                    <td>0.39 ct.</td>
                                </tr>
                                <tr>
                                    <td>4.5 mm.</td>
                                    <td>0.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>5 mm.</td>
                                    <td>0.75 ct.</td>
                                </tr>
                                <tr>
                                    <td>5.5 mm.</td>
                                    <td>1.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>6 mm.</td>
                                    <td>1.25 ct.</td>
                                </tr>
                                <tr>
                                    <td>6.5 mm.</td>
                                    <td>1.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>7 mm.</td>
                                    <td>2.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>7.5 mm.</td>
                                    <td>2.50 ct.</td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <th><strong>Kích thước Asscher (MM)</strong></th>
                                    <th><strong>Cân nặng Asscher (Carat)</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>8 mm.</td>
                                    <td>3.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>8.5 mm.</td>
                                    <td>3.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>9 mm.</td>
                                    <td>4.12 ct.</td>
                                </tr>
                                <tr>
                                    <td>9.5 mm.</td>
                                    <td>5.09 ct.</td>
                                </tr>
                                <tr>
                                    <td>10 mm.</td>
                                    <td>5.62 ct.</td>
                                </tr>
                                <tr>
                                    <td>11 mm.</td>
                                    <td>7.44 ct.</td>
                                </tr>
                                <tr>
                                    <td>12 mm.</td>
                                    <td>9.52 ct.</td>
                                </tr>
                                <tr>
                                    <td>13 mm.</td>
                                    <td>12.66 ct.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="content" id="Radiant">
                    <h2><i class="icon icon-diamond-radiant"></i>Radiant Diamond Sizes</h2>
                    <div class="box">
                        <table>
                            <thead>
                                <tr>
                                    <th><strong>Kích thước Radiant (MM)</strong></th>
                                    <th><strong>Cân nặng Radiant (Carat)</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>5×3 mm.</td>
                                    <td>0.31 ct.</td>
                                </tr>
                                <tr>
                                    <td>4.5×3.5 mm.</td>
                                    <td>0.34 ct.</td>
                                </tr>
                                <tr>
                                    <td>6×3 mm.</td>
                                    <td>0.41 ct.</td>
                                </tr>
                                <tr>
                                    <td>6×4 mm.</td>
                                    <td>0.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>6.5×4.5 mm.</td>
                                    <td>0.75 ct.</td>
                                </tr>
                                <tr>
                                    <td>7×5 mm.</td>
                                    <td>1.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>7.3×5.5 mm.</td>
                                    <td>1.25 ct.</td>
                                </tr>
                                <tr>
                                    <td>7.5×5.8 mm.</td>
                                    <td>1.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>8×6 mm.</td>
                                    <td>2.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>8.5×6.5 mm.</td>
                                    <td>2.25 ct.</td>
                                </tr>
                                <tr>
                                    <td>9×7 mm.</td>
                                    <td>2.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>9.5×7.5 mm.</td>
                                    <td>3.00 ct.</td>
                                </tr>
                                <tr>
                                    <td>10×7 mm.</td>
                                    <td>3.31 ct.</td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <th><strong>Kích thước Radiant (MM)</strong></th>
                                    <th><strong>Cân nặng Radiant (Carat)</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10×8 mm.</td>
                                    <td>3.50 ct.</td>
                                </tr>
                                <tr>
                                    <td>11×9 mm.</td>
                                    <td>5.05 ct.</td>
                                </tr>
                                <tr>
                                    <td>12×9 mm.</td>
                                    <td>6.06 ct.</td>
                                </tr>
                                <tr>
                                    <td>11.5×10 mm.</td>
                                    <td>6.45 ct.</td>
                                </tr>
                                <tr>
                                    <td>13×9 mm.</td>
                                    <td>6.54 ct.</td>
                                </tr>
                                <tr>
                                    <td>12×10 mm.</td>
                                    <td>6.79 ct.</td>
                                </tr>
                                <tr>
                                    <td>14×10 mm.</td>
                                    <td>8.47 ct.</td>
                                </tr>
                                <tr>
                                    <td>13×11 mm.</td>
                                    <td>9.33 ct.</td>
                                </tr>
                                <tr>
                                    <td>13.5×11.5 mm.</td>
                                    <td>10.19 ct.</td>
                                </tr>
                                <tr>
                                    <td>15×11 mm.</td>
                                    <td>11.48 ct.</td>
                                </tr>
                                <tr>
                                    <td>14×12 mm.</td>
                                    <td>12.14 ct.</td>
                                </tr>
                                <tr>
                                    <td>16×12 mm.</td>
                                    <td>14.22 ct.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="pageFooter">
        <div class="wrapper">
            <img src="<?php echo JEMMIA_THEME_URL_IMG; ?>/banner/BANNER.jpg"
                alt="diamond_education_brilliance">
            <div class="box">
                <h2>Kiến thức kim cương</h2>
                <p>Hiểu được tiêu chuẩn 4C của một viên kim cương (màu sắc, đường cắt, carat, độ trong) và các yếu tố
                    ảnh hưởng đến chất lượng, giá cả và giá trị của nó. </p>
                <a href="<?php home_url(); ?>/diamond-education">Xem thêm</a>
            </div>
        </div>
    </div>
</div>

<!-- linh bảng giá kim cương -->
<?php 

get_footer(); 
?>
<!-- linh bảng giá kim cương -->
Bảng quy đổi kích thước kim cương