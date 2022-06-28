<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/slick-theme.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/utilities_t.css">
    <title>Tiện ích lãi suất vay</title>
</head>

<body>
    <div class="link_header">
        <? require_once APPPATH.'views/site/includes/da_header.php'?>
    </div>
    <section class="container_utilities">
        <div class="utilities_banner">
            <div class="utilities_banner-img">
                <img src="<? echo base_url() ?>assets/images/banner_tc.png" alt="">
            </div>
            <div class="utilities_banner-ct">
                <h2 class="ct_title font_s40 font_w600 line-h47 cl_gray bd_b_70">Tính lãi suất vay</h2>
                <span class="font_s20 line_h26 cl_gray mt_8">Công cụ tính lãi suất ngân hàng cho vay</span>
            </div>
        </div>
        <div class="utilities_wapper utilities_wapper_duy2 mt_64">
            <div class="utilities_box utilities_box_duy1 pd_lr_80">
                <div class="utilities_box-list d_flex flex_w space_b duy_fig_768_1">
                    <div class="us_box-interest us_box-interest_duy3 duy_fig_768_2 w_50_g12 pd_32">
                        <div class="interest_top interest_top_duy5 d_flex">
                            <div class="d_flex align_c duy4_them_class mr_25">
                                <input type="radio" name="money" class="wh_20 mr_9" checked>
                                <span class="font_s14 line_h17">Số tiền trả đều hàng tháng</span>
                            </div>
                            <div class="d_flex align_c duy4_them_class">
                                <input type="radio" name="money" class="wh_20 mr_9">
                                <span class="font_s14 line_h17">Số tiền trả theo dư nợ giảm dần</span>
                            </div>
                        </div>
                        <div class="interest_bottom duy12_mt24px  mt_32">
                            <div class="interest_bt-list">
                                <div class="interest_bt-item ">
                                    <div class="interest_bt-infor">
                                        <span class="font_s16 font_w500 line-h19">Số tiền vay</span>
                                        <span class="bd_das_b font_w500 font_s20 line_h17 cl_blue text_a_c w288 inline_bl duy7_width">10.000.000</span>
                                        <span class="font_s16 line-h19">VNĐ</span>
                                    </div>
                                    <div class="interest_bt-range interest_bt-range_duy8 pd_l_12 mt_16 d_flex align_c">
                                        <span class="range_to font_s14 line_h17 duy9_w16pt">1 triệu</span>
                                        <input type="range" name="deadlines" class="range w350 m_lr_8_16 range_duy6">
                                        <span class="range_for font_s14 line_h17 duy10_w13pt">10 tỷ</span>
                                    </div>
                                </div>

                                <div class="interest_bt-item duy12_mt24px duy12_mt32px mt_48">
                                    <div class="interest_bt-infor">
                                        <span class="font_s16 font_w500 line-h19">Thời gian vay</span>
                                        <span class="bd_das_b font_w500 font_s20 line_h17 cl_blue text_a_c w270 inline_bl duy7_width">12 tháng</span>
                                        <span class="font_s16 line-h19">Tháng</span>
                                    </div>
                                    <div class="interest_bt-range pd_l_6 mt_16 d_flex align_c">
                                        <span class="range_to font_s14 line_h17 duy9_w16pt">1 tháng</span>
                                        <input type="range" name="deadlines" class="range w350 m_lr_8_16 range_duy6">
                                        <span class="range_for font_s14 line_h17 duy10_w13pt">500 tháng</span>
                                    </div>
                                </div>

                                <div class="interest_bt-item duy12_mt24px duy12_mt32px mt_48">
                                    <div class="interest_bt-infor">
                                        <span class="font_s16 font_w500 line-h19">Số tiền vay</span>
                                        <span class="bd_das_b font_w500 font_s20 line_h17 cl_blue text_a_c w280 inline_bl duy7_width">2.2</span>
                                        <span class="font_s16 line-h19">%</span>
                                    </div>
                                    <div class="interest_bt-range pd_l_31 mt_16 interest_bt-range_duy8 d_flex align_c">
                                        <span class="range_to font_s14 line_h17 duy9_w16pt">1%</span>
                                        <input type="range" name="deadlines" class="range w350 m_lr_8_16 range_duy6">
                                        <span class="range_for font_s14 line_h17 duy10_w13pt">20%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="us_box-interest us_box-interest_duy11 duy_fig_768_2 w_50_g12 pd_63_94">
                        <div class="must_ct">
                            <div class="d_flex flex_column align_s duy_w100pt">
                                <span class="must_title font_s16 line_h22">Số tiền hàng tháng phải trả (gốc + lãi)</span>
                                <span class="must_money font_s24 line_h30 font_w500 mt_8 cl_blue">0.000.000.000 VNĐ</span>
                            </div>

                            <div class="d_flex flex_column align_s duy_w100pt">
                                <span class="must_title font_s16 line_h22">Số tiền lãi hàng tháng phải trả</span>
                                <span class="must_money font_s24 line_h30 font_w500 mt_8 cl_red">0.000.000.000 VNĐ</span>
                            </div>

                            <div class="d_flex flex_column align_s duy_w100pt">
                                <span class="must_title font_s16 line_h22">Tổng số tiền phải trả</span>
                                <span class="must_money font_s24 line_h30 font_w500 mt_8 cl_black">0.000.000.000 VNĐ</span>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="font_s14 font_w400 mt_10 block cl_black">Công cụ tính toán trên website chỉ mang tính chất tham khảo</span>
            </div>

            <div class="details_utilities details_utilities_duy12 mt_36 pd_lr_80">
                <h2 class="font_s16 line_h20 font_w500">Chi tiết nợ phải trả</h2>
                <div class="main_table_list_all position_r mt_16">
                    <div class="box_main_table_list duy_fig1_1366_box_main_table_list position_r">
                        <table class="table bd_tb duy_fig2_1366_box_main_table_list" id="scroll_tb">
                            <thead class="">
                                <tr class="bg_tb cl_ch_blue">
                                    <th>Số kỳ</th>
                                    <th>Dư nợ đầu kỳ</th>
                                    <th>Gốc phải trả (VNĐ)</th>
                                    <th>Lãi phải trả (VNĐ)</th>
                                    <th>Gốc + lãi (VNĐ)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < 30; $i++) : ?>
                                    <tr class="<?= ($i + 1) % 2 == 0 ? 'odd_bg' : '' ?>">
                                        <td><?= $i + 1 ?></td>
                                        <td>500.000.000</td>
                                        <td>41.666.667</td>
                                        <td>3.333.333</td>
                                        <td>45.000.000</td>
                                    </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                        <div class="result_table d_flex align_c flex_end bg_tb">
                            <span>Tổng</span>
                            <span>21.000.000</span>
                            <span>521.000.000</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="line_chart line_chart_duy16 mt_32 pd_b_55 mb_99 bg_white shadow pd_t_32">
                <div class="chart_top chart_top_duy14 d_flex space_b pd_lr_80">
                    <div>
                        <span class="font_s20 font_w500 line_h24">Biểu đồ thống kê số tiền phải trả trong các kỳ</span>
                    </div>
                    <div class="w165 h_40 d_flex flex_center">
                        <div class="slider_js-year w_80">
                            <?php for ($i = 1; $i <= 12; $i++) : ?>
                                <div class="d_flex center_center" data-year=<?= $i ?>>Năm <?= $i ?></div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
                <div class="line_chart-bottom line_chart-bottom_duy13 pd_lr_80 mt_32">
                    <canvas id="chart"></canvas>
                </div>
            </div>
        </div>
    </section>
    <? require_once APPPATH.'views/site/includes/da_footer.php' ?>
    <script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<? echo base_url();?>assets/js/slick.min.js"></script>
    <script type="text/javascript" src="<? echo base_url();?>assets/js/jquery.validate.min.js"></script>
    <script src="<? echo base_url();?>assets/js/chart.min.js"></script>
    <script type="text/javascript" src="<? echo base_url();?>assets/js/select2.min.js"></script>
    <script src="<? echo base_url();?>assets/js/js_t.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script> -->
    <script>
        active_single_header('tienich');
        hiddenHeader('.header3');

        $('.slider_js-year').slick({
            infinite: false,
            dots: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrow: true,
            fade: true,
            cssEase: 'linear',
            // autoplay: true,
            // autoplaySpeed: 2000,
            prevArrow: '<button class="slick-prev prev-arrow"><img src="<? echo base_url() ?>assets/images/back_blue.png" alt="" /></button>',
            nextArrow: '<button class="slick-next next-arrow"><img src="<? echo base_url() ?>assets/images/next_blue.png" alt="" /></button>'
        });

        function chart() {
            var chart = document.getElementById('chart').getContext('2d'),
                gradient = chart.createLinearGradient(0, 0, 0, 450);

            // gradient.addColorStop(0, 'rgba(255, 0,0, 0.5)');
            // gradient.addColorStop(0.5, 'rgba(255, 0, 0, 0.25)');
            // gradient.addColorStop(1, 'rgba(255, 0, 0, 0)');
            // background: linear-gradient(180deg, , ;

            gradient.addColorStop(0, 'rgba(255, 163, 23, 0.49)');
            gradient.addColorStop(0.5, 'rgba(255, 163, 23, 0.49)');
            gradient.addColorStop(1, 'rgba(255, 255, 255, 0)');


            var data = {
                labels: ['Kỳ 1', 'Kỳ 2', 'Kỳ 3', 'Kỳ 4', 'Kỳ 5', 'Kỳ 6'],
                datasets: [{
                    label: 'Custom Label Name',
                    backgroundColor: gradient,
                    pointBackgroundColor: 'white',
                    borderWidth: 1,
                    borderColor: '#FFA317',
                    data: [65, 65, 65, 65, 65, 65]
                }]
            };


            var options = {
                responsive: true,
                maintainAspectRatio: true,
                animation: {
                    easing: 'easeInOutQuad',
                    duration: 520
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            color: 'rgba(200, 200, 200, 0.05)',
                            lineWidth: 1
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            color: 'rgba(200, 200, 200, 0.08)',
                            lineWidth: 1
                        }
                    }]
                },
                elements: {
                    line: {
                        tension: 0.4
                    }
                },
                legend: {
                    display: false
                },
                point: {
                    backgroundColor: 'white'
                },
                tooltips: {
                    titleFontFamily: 'Roboto',
                    backgroundColor: 'rgba(0,0,0,0.3)',
                    titleFontColor: 'red',
                    caretSize: 5,
                    cornerRadius: 2,
                    xPadding: 40,
                    yPadding: 10
                }
            };


            var chartInstance = new Chart(chart, {
                type: 'line',
                data: data,
                options: options
            });
        }

        chart();



        sizeTB('#scroll_tb tbody tr', '.result_table span', 3);
        sizeTB('#scroll_tb tbody tr', '#scroll_tb thead tr th', 5);

        window.onresize = function() {
            sizeTB('#scroll_tb tbody tr', '.result_table span', 3);
            sizeTB('#scroll_tb tbody tr', '#scroll_tb thead tr th', 5);
            sizeTB('#scroll_tb', '.result_table', 1, false);
            sizeTB('#scroll_tb', '#scroll_tb thead', 1, false);
        }
    </script>
</body>

</html>