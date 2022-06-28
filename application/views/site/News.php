<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/css/slick-theme.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style_t.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style_header_d.css">
    <title>Tin tức</title>
</head>

<body>
    <? require_once APPPATH.'views/site/includes/da_header.php'?>
    <div class="tan_news">
        <div class="container bg_blue_10">
            <div class="directional d_flex pd_tb_24 pd_lr_80">
                <div>
                    <a href="/" class="font_s14 line_h17 font_w400">Trang chủ</a>
                </div>
                <span class="arrow"><img src="<? echo base_url(); ?>assets/images/arrow_small_black.png" alt="" class="checked"></span>
                <div class="directional_acitve">
                    <a href="" class="font_s14 line_h17 font_w400">Tin tức</a>
                </div>
            </div>

            <div class="featured_news d_flex h_386" style="background-image: url(<? echo base_url(); ?>assets/images/news_hot1.png);">
                <div class="featured_news-left w_43pt pd_l_80">
                    <h2 class="discover_top-title pd_t_12">
                        <span class="br_t_70 font_s50 line_h59 font_w500 black_md">
                            Tin tức nổi bật
                        </span>
                    </h2>

                    <div class="d_flex flex_w row mt_48">
                        <?php for ($i = 0; $i < 2; $i++) : ?>
                        <div class="col_2 br_8">
                            <div class="item_img position_r mx_156">
                                <img src="<? echo base_url(); ?>assets/images/football_gray.png" alt="">
                            </div>
                            <div class="pd_tb_16_10">
                                <h2 class="font_s16 line_h22 font_w500 ellipsis_3 wb_wr black_md">Bất động sản khách sạn
                                    sẽ là tâm điểm trong cảnh lạm phát tăng cao</h2>
                                <span class="gray_2 font_s12 line_h14 font_w400 block mt_5">20:00 . 11/11/2023</span>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="featured_news-right w_57pt pd_l_24 pd_r_80">
                    <div class="tintucnoibat_tieude_375">
                        <h2 class="discover_top-title">
                            <span class="br_t_70 font_s50 line_h59 font_w500 black_md">
                                Tin tức nổi bật
                            </span>
                        </h2>
                    </div>
                    <div class="flex_1 h_100">
                        <div class="slider_news h_100">
                            <?php for ($i = 0; $i < 5; $i++) : ?>
                            <div class="project_item hover_img_15 h_100">
                                <img src="<? echo base_url(); ?>assets/images/skyscrapers-sunset 1.png" alt="">
                                <div class="project_item_heading pd_r_16">
                                    <span class="font_s18 line_h21 font_w400 cl_white">20:00 . 11/11/2023</span>
                                    <span
                                        class="project_item_heading-name mt_8 font_s22 line_h25 font_w500 w100 ellipsis_1 cl_white">Cuộc
                                        sống tĩnh lặng trong khu compound The Aqua - Waterpoint</span>
                                    <span class="ellipsis_3 font_s16 line_24 font_w400 mt_16 ct_show cl_white">Tế bào
                                        noãn thực vật hiện đang trở thành xu hướng được nhiều tín đồ làm đẹp theo đuổi
                                        vì nó được mệnh danh là sản phẩm làm đẹp hiệu quả hoàn toàn đến từ thiên nhiên.
                                        Để kiểm chứng về độ chính xác, hôm nay timviec365.vn sẽ giúp bạn tìm hiểu rõ hơn
                                        về tế bào noãn thực vật là gì và nó có công dụng ra sao trong bài viết bổ ích
                                        sau đây.</span>
                                </div>
                            </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- màn 768  -->
            <div class="item_mb pd_lr_80 mt_60">
                <div class="d_flex tan_item_mv_row flex_w row">
                    <?php for ($i = 0; $i < 5; $i++) : ?>
                    <div class="col_3 tan_item_mb_col3 br_8">
                        <div class="item_img position_r mx_156">
                            <img src="<? echo base_url(); ?>assets/images/football_gray.png" alt="">
                        </div>
                        <div class="pd_tb_16_10">
                            <h2 class="font_s16 line_h22 font_w500 ellipsis_3 wb_wr black_md">Bất động sản khách sạn sẽ
                                là tâm điểm trong cảnh lạm phát tăng cao</h2>
                            <span class="gray_2 font_s12 line_h14 font_w400 block mt_5">20:00 . 11/11/2023</span>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>

            <div class="content_news tan_content_news pd_lr_80 mt_48 d_flex pd_b_26 mb_t_33">
                <div class="content_news-left flex_1 mr_25">
                    <div class="market d_flex mb_wrap_768 mb_left">
                        <div class="market_left flex_1">
                            <h2 class="discover_top-title pd_t_12">
                                <span class="br_t_70 pd_t_6 font_s50 line_h59 wb_br font_w500 black_md">
                                    Thị trường
                                </span>
                            </h2>

                            <div class="market_left-list mt_48">
                                <?php
                                for ($i = 0; $i < 4; $i++) :
                                ?>
                                <div class="news_right-item col_1 d_flex">
                                    <a href="/chi-tiet-tin-tuc.html" class="im_thumbnail tan_tt_img">
                                        <img src="<? echo base_url(); ?>assets/images/test_2.png" alt="">
                                    </a>
                                    <div class="im_content pd_l_16 pd_tb_8 pd_r_8">
                                        <a href="/chi-tiet-tin-tuc.html"
                                            class="title font_s16 black_md line_h22 font_w500 ellipsis_2">
                                            Bất động sản khách sạn sẽ là tâm điểm trong cảnh lạm phát tăng cao
                                        </a>
                                        <div class="font_s14 mt_8 gray_1 ellipsis_3 line_h22">
                                            <p class="font_s14 line_h22 font_s400">Nếu có kiến thức về xây dựng, hoàn
                                                toàn có thể tự thiết kế ngôi nhà cho hoặc tham khảo những mẫu sẵn có rồi
                                                chỉnh sửa cho phù hợp với đặc điểm căn nhà và nhu cầu của gia đình để
                                                tiết kiệm chi phí thiết kế.</p>
                                        </div>
                                        <span class="news_time font_s12 gray_2 line_h14 mt_5 d_block ellipsis_1">20:00 .
                                            11/11/2023</span>
                                    </div>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                        <div class="market_right tan_nd_market_right wh_385 pd_l_24">
                            <div class="mt_76 tan_mt_76">
                                <?php for ($i = 0; $i < 3; $i++) : ?>
                                <div class="col_1 br_8 d_flex flex_column">
                                    <div class="item_img position_r mx_h250">
                                        <img src="<? echo base_url(); ?>assets/images/house_demo.png" alt="">
                                    </div>
                                    <div class="pd_t_16">
                                        <h2 class="font_s16 line_h24 font_w500 ellipsis_3 wb_wr black_md">Bất động sản
                                            khách sạn sẽ là tâm điểm trong cảnh lạm phát tăng cao</h2>
                                        <span class="gray_2 font_s12 line_h14 font_w400 block mt_5">20:00 .
                                            11/11/2023</span>
                                    </div>
                                </div>
                                <?php endfor; ?>
                            </div>

                            <div class="d_flex flex_end mt_4">
                                <a href="/xem-them-tin-tuc.html" class="d_flex cursor_p">
                                    <span class="blue_title read_more font_s16 line_h19 font_w400 w_spance_nrap">Xem
                                        thêm</span>
                                    <div class="arrow_icon d_flex align_c ml_6">
                                        <img src="<? echo base_url(); ?>assets/images/arrow-right-circle-blue.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d_flex tan_nhadep mt_67 mb_wrap_768">
                        <div class="market_left tan_nd_market_left wh_385 d_flex flex_column">
                            <h2 class="discover_top-title pd_t_12">
                                <span class="br_t_70 pd_t_6 font_s50 line_h59 wb_br black_md font_w500">
                                    Nhà đẹp
                                </span>
                            </h2>

                            <div class="market_left-list mt_48 flex_1 d_flex align_c">
                                <?php
                                for ($i = 0; $i < 1; $i++) :
                                ?>
                                <div class="col_1 d_flex flex_column">
                                    <div class="im_thumbnail max_h_388">
                                        <img src="<? echo base_url(); ?>assets/images/new_ts.png" alt="" class="img_full br_8">
                                    </div>
                                    <div class="im_content pd_t_16">
                                        <h3 class="title font_s16 black_md line_h22 font_w500 wb_wr ellipsis_2">
                                            Bất động sản khách sạn sẽ là tâm điểm trong cảnh lạm phát tăng cao
                                        </h3>
                                        <div class="font_s14 mt_8 gray_1 ellipsis_3 line_h22 black_md font_w400">
                                            <p>Quỹ đất rộng, giá cả hấp dẫn, hạ tầng giao thông được đầu tư mạnh mẽ… là
                                                yếu tố thu hút hàng loạt “ông lớn” từ địa ốc đến công nghiệp đổ bộ về
                                                Bình Phước phát triển nhiều dự án quy mô, tầm cỡ.</p>
                                        </div>
                                        <span class="news_time font_s12 gray_2 line_h14 mt_5 d_block ellipsis_1">20:00 .
                                            11/11/2023</span>
                                    </div>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                        <div class="market_right tan_nd_khoidau flex_1 pd_l_24">
                            <div class="mt_55">
                                <?php for ($i = 0; $i < 4; $i++) : ?>
                                <div class="news_right-item col_1 d_flex">
                                    <div class="im_thumbnail sz150">
                                        <img src="<? echo base_url(); ?>assets/images/Rectangle 3464285.png" alt="">
                                    </div>
                                    <div class="im_content pd_l_16 pd_tb_8 pd_r_8">
                                        <h3 class="title font_s16 black_md line_h22 font_w500 ellipsis_2">
                                            Thị trường bất động sản thương mại TP.HCM đang phục hồi
                                        </h3>
                                        <div class="font_s14 mt_8 gray_1 ellipsis_3 line_h22">
                                            <p>Nếu có kiến thức về xây dựng, hoàn toàn có thể tự thiết kế ngôi nhà cho
                                                hoặc tham khảo những mẫu sẵn có rồi chỉnh sửa cho phù hợp với đặc điểm
                                                căn nhà và nhu cầu của gia đình để tiết kiệm chi phí thiết kế.</p>
                                        </div>
                                        <span class="news_time font_s12 gray_2 line_h14 mt_5 d_block ellipsis_1">20:00 .
                                            11/11/2023</span>
                                    </div>
                                </div>
                                <?php endfor; ?>
                            </div>

                            <div class="d_flex flex_end mt_4">
                                <a href="/xem-them-tin-tuc.html" class="d_flex cursor_p">
                                    <span class="blue_title read_more font_s16 line_h19 font_w400 w_spance_nrap">Xem
                                        thêm</span>
                                    <div class="arrow_icon d_flex align_c ml_6">
                                        <img src="<? echo base_url(); ?>assets/images/arrow-right-circle-blue.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="d_flex mt_67 flex_column">
                        <div class="market_left d_flex flex_column">
                            <h2 class="discover_top-title pd_t_12">
                                <span class="br_t_70 pd_t_6 font_s50 line_h59 wb_br black_md font_w500">
                                    Phong thủy
                                </span>
                            </h2>

                            <div class="d_flex flex_w row tan_pt">
                                <?php for ($i = 0; $i < 2; $i++) : ?>
                                <div class="col_2 br_8">
                                    <div class="item_img position_r tan_pt_img szh295 <?= $i < 1 ? 'pd_t_48' : '' ?>">
                                        <img src="<? echo base_url(); ?>assets/images/house_demo.png" alt="">
                                    </div>
                                    <div class="pd_tb_16_10">
                                        <h2 class="font_s16 line_h24 font_w500 ellipsis_3 wb_wr black_md">Bất động sản
                                            khách sạn sẽ là tâm điểm trong cảnh lạm phát tăng cao</h2>
                                        <span class="gray_2 font_s12 line_h14 font_w400 block mt_5">20:00 .
                                            11/11/2023</span>
                                    </div>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                        <div class="market_right tan_pt_khoiduoi d_flex">
                            <div class="flex flex_w row pd_cl">
                                <?php for ($i = 0; $i < 8; $i++) : ?>
                                <span class="dots_index_ps col_2 wb_br font_s16 line_h24 font_w400 black_md">Thông tin
                                    giới thiệu dự án Vinhomes Ocean Pack 2 - The Empire </span>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>

                    <div class="d_flex tan_tv mt_67">
                        <div class="market_left tan_market_left wh_385 d_flex flex_column">
                            <h2 class="discover_top-title pd_t_12">
                                <span class="br_t_70 pd_t_6 font_s50 line_h59 wb_br black_md font_w500">
                                    Tư vấn
                                </span>
                            </h2>

                            <div class="market_left-list tan_market_left-list mt_48 flex_1 d_flex align_c">
                                <?php
                                for ($i = 0; $i < 1; $i++) :
                                ?>
                                <div class="col_1 d_flex flex_column">
                                    <div class="im_thumbnail tan_im_thumbnail max_h_388">
                                        <img src="<? echo base_url(); ?>assets/images/new_ts.png" alt="" class="img_full br_8">
                                    </div>
                                    <div class="im_content pd_t_16">
                                        <h3 class="title font_s16 black_md line_h22 font_w500 ellipsis_2 wb_wr">
                                            Bất động sản khách sạn sẽ là tâm điểm trong cảnh lạm phát tăng cao
                                        </h3>
                                        <div class="font_w400 font_s14 mt_8 gray_1 ellipsis_3 line_h22">
                                            <p>Quỹ đất rộng, giá cả hấp dẫn, hạ tầng giao thông được đầu tư mạnh mẽ… là
                                                yếu tố thu hút hàng loạt “ông lớn” từ địa ốc đến công nghiệp đổ bộ về
                                                Bình Phước phát triển nhiều dự án quy mô, tầm cỡ.</p>
                                        </div>
                                        <span class="news_time font_s12 gray_2 line_h14 mt_5 d_block ellipsis_1">20:00 .
                                            11/11/2023</span>
                                    </div>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                        <div class="market_right tan_market_right flex_1 pd_l_24">
                            <div class="mt_55">
                                <?php for ($i = 0; $i < 4; $i++) : ?>
                                <div class="news_right-item col_1 d_flex">
                                    <div class="im_thumbnail sz150">
                                        <img src="<? echo base_url(); ?>assets/images/Rectangle 3464285.png" alt="">
                                    </div>
                                    <div class="im_content pd_l_16 pd_tb_8 pd_r_8">
                                        <h3 class="title font_s16 black_md line_h22 font_w500 ellipsis_2">
                                            Thị trường bất động sản thương mại TP.HCM đang phục hồi
                                        </h3>
                                        <div class="font_s14 mt_8 gray_1 ellipsis_3 line_h22">
                                            <p>Nếu có kiến thức về xây dựng, hoàn toàn có thể tự thiết kế ngôi nhà cho
                                                hoặc tham khảo những mẫu sẵn có rồi chỉnh sửa cho phù hợp với đặc điểm
                                                căn nhà và nhu cầu của gia đình để tiết kiệm chi phí thiết kế.</p>
                                        </div>
                                        <span class="news_time font_s12 gray_2 line_h14 mt_5 d_block ellipsis_1">20:00 .
                                            11/11/2023</span>
                                    </div>
                                </div>
                                <?php endfor; ?>
                            </div>

                            <div class="d_flex flex_end mt_4">
                                <a href="/xem-them-tin-tuc.html" class="d_flex cursor_p">
                                    <span class="blue_title read_more font_s16 line_h19 font_w400 w_spance_nrap">Xem
                                        thêm</span>
                                    <div class="arrow_icon d_flex align_c ml_6">
                                        <img src="<? echo base_url(); ?>assets/images/arrow-right-circle-blue.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="d_flex tan_nmg mt_29 mb_wrap_768">
                        <div class="market_left wh_385 d_flex flex_column">
                            <h2 class="discover_top-title pd_t_12">
                                <span class="br_t_70 pd_t_6 font_s50 line_h59 wb_br black_md font_w500">
                                    Nhà môi giới
                                </span>
                            </h2>

                            <div class="market_left-list mt_48 flex_1 d_flex align_c">
                                <?php
                                for ($i = 0; $i < 1; $i++) :
                                ?>
                                <div class="col_1 d_flex flex_column">
                                    <div class="im_thumbnail max_h_388">
                                        <img src="<? echo base_url(); ?>assets/images/new_ts.png" alt="" class="img_full br_8">
                                    </div>
                                    <div class="im_content pd_t_16">
                                        <h3 class="title font_s16 black_md line_h22 font_w500 wb_wr ellipsis_2">
                                            Bất động sản khách sạn sẽ là tâm điểm trong cảnh lạm phát tăng cao
                                        </h3>
                                        <div class="font_s14 mt_8 gray_1 ellipsis_3 line_h22 black_md font_w400">
                                            <p>Quỹ đất rộng, giá cả hấp dẫn, hạ tầng giao thông được đầu tư mạnh mẽ… là
                                                yếu tố thu hút hàng loạt “ông lớn” từ địa ốc đến công nghiệp đổ bộ về
                                                Bình Phước phát triển nhiều dự án quy mô, tầm cỡ.</p>
                                        </div>
                                        <span class="news_time font_s12 gray_2 line_h14 mt_5 d_block ellipsis_1">20:00 .
                                            11/11/2023</span>
                                    </div>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                        <div class="market_right flex_1 pd_l_24">
                            <div class="mt_55">
                                <?php for ($i = 0; $i < 4; $i++) : ?>
                                <div class="news_right-item col_1 d_flex">
                                    <div class="im_thumbnail sz150">
                                        <img src="<? echo base_url(); ?>assets/images/Rectangle 3464285.png" alt="">
                                    </div>
                                    <div class="im_content pd_l_16 pd_tb_8 pd_r_8">
                                        <h3 class="title font_s16 black_md line_h22 font_w500 ellipsis_2">
                                            Thị trường bất động sản thương mại TP.HCM đang phục hồi
                                        </h3>
                                        <div class="font_s14 mt_8 gray_1 ellipsis_3 line_h22">
                                            <p>Nếu có kiến thức về xây dựng, hoàn toàn có thể tự thiết kế ngôi nhà cho
                                                hoặc tham khảo những mẫu sẵn có rồi chỉnh sửa cho phù hợp với đặc điểm
                                                căn nhà và nhu cầu của gia đình để tiết kiệm chi phí thiết kế.</p>
                                        </div>
                                        <span class="news_time font_s12 gray_2 line_h14 mt_5 d_block ellipsis_1">20:00 .
                                            11/11/2023</span>
                                    </div>
                                </div>
                                <?php endfor; ?>
                            </div>

                            <div class="d_flex flex_end mt_4">
                                <a href="/xem-them-tin-tuc.html" class="d_flex cursor_p">
                                    <span class="blue_title read_more font_s16 line_h19 font_w400 w_spance_nrap">Xem
                                        thêm</span>
                                    <div class="arrow_icon d_flex align_c ml_6">
                                        <img src="<? echo base_url(); ?>assets/images/arrow-right-circle-blue.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="market tan_dt d_flex mt_77 mb_768">
                        <div class="market_left flex_1">
                            <h2 class="discover_top-title pd_t_12">
                                <span class="br_t_70 font_s50 line_h59 wb_br font_w500 black_md">
                                    Đầu tư
                                </span>
                            </h2>

                            <div class="market_left-list tan_nd_market_left-list mt_34">
                                <div class="row tan_dt_khoilon d_flex flex_w">
                                    <?php for ($i = 0; $i < 6; $i++) : ?>
                                    <div class="col_3 tan_dt_khoicon br_8 d_flex flex_column">
                                        <div class="item_img position_r mx_h180">
                                            <img src="<? echo base_url(); ?>assets/images/house_demo.png" alt="">
                                        </div>
                                        <div class="pd_t_16">
                                            <h2 class="font_s16 line_h22 font_w500 ellipsis_3 wb_wr black_md">Bất động
                                                sản khách sạn sẽ là tâm điểm trong cảnh lạm phát tăng cao</h2>
                                            <span class="gray_2 font_s12 line_h14 font_w400 block mt_5">20:00 .
                                                11/11/2023</span>
                                        </div>
                                    </div>
                                    <?php endfor; ?>
                                </div>

                                <div class="d_flex flex_end mt_4">
                                    <a href="/xem-them-tin-tuc.html" class="d_flex cursor_p">
                                        <span class="blue_title read_more font_s16 line_h19 font_w400 w_spance_nrap">Xem
                                            thêm</span>
                                        <div class="arrow_icon d_flex align_c ml_6">
                                            <img src="<? echo base_url(); ?>assets/images/arrow-right-circle-blue.png" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tan_db_khoiduoi375">
                    <div class="content_news-right w_24">
                        <div class="box_txt_index bg_white pd_tb_24">
                            <h3 class="font_s18 line_h24 font_w500 blue_title pd_lr_16">Text mục đầu đề</h3>
                            <div class="box_list mt_24 h_100 pd_lr_16">
                                <div class="scoll">
                                    <?php for ($i = 0; $i < 20; $i++) : ?>
                                    <div class="dots_index">
                                        <span class="font_s16 line_h19 font_w400 black_md block ml_8">Text nội dung
                                            <? $i ?>
                                        </span>
                                    </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                        <div class="box_txt_index bg_white pd_tb_24">
                            <h3 class="font_s18 line_h24 font_w500 blue_title pd_lr_16">Text mục đầu đề</h3>
                            <div class="box_list mt_24 h_100 pd_lr_16">
                                <div class="scoll">
                                    <?php for ($i = 0; $i < 20; $i++) : ?>
                                    <div class="dots_index">
                                        <span class="font_s16 line_h19 font_w400 black_md block ml_8">Text nội dung
                                            <? $i ?>
                                        </span>
                                    </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                        <div class="box_txt_index bg_white pd_tb_24">
                            <h3 class="font_s18 line_h24 font_w500 blue_title pd_lr_16">Text mục đầu đề</h3>
                            <div class="box_list mt_24 h_100 pd_lr_16">
                                <div class="scoll">
                                    <?php for ($i = 0; $i < 20; $i++) : ?>
                                    <div class="dots_index">
                                        <span class="font_s16 line_h19 font_w400 black_md block ml_8">Text nội dung
                                            <? $i ?>
                                        </span>
                                    </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="architecture tan_xdkt bg_white pd_tb_51_69">
                <div class="arc_header d_flex align_e pd_lr_80">
                    <h2 class="discover_top-title pd_t_12">
                        <span class="br_t_70 font_s50 line_h59 font_w500 black_md">
                            Xây dựng kiến trúc
                        </span>
                    </h2>
                    <div class="tan_hd_ml_375">
                        <div class="d_flex tan_hd_ml hd_ml pd_b_10">
                            <a href="" class="font_s22 line_h22 font_w500 blue_title hv_cl br_lf_ps">Kiến trúc</a>
                            <a href="" class="font_s22 line_h22 font_w500 blue_title hv_cl br_lf_ps">Tư vấn thiết kế</a>
                            <a href="" class="font_s22 line_h22 font_w500 blue_title hv_cl br_lf_ps">Kiến trúc xưa và
                                nay</a>
                            <a href="" class="font_s22 line_h22 font_w500 blue_title hv_cl br_lf_ps">Thế giới kiến
                                trúc</a>
                        </div>
                    </div>
                </div>
                <div class="list_cnt pd_lr_80 mt_48">
                    <div class="row d_flex flex_w">
                        <div class="col_3 tan_xdkt_col_3 cl_t_8">
                            <div class="im_content pd_b_8 bd_b_gray">
                                <h3 class="title font_s16 black_md line_h22 font_w500 ellipsis_2">
                                    Thị trường bất động sản thương mại TP.HCM đang phục hồi
                                </h3>
                                <div class="font_s14 mt_8 gray_1 ellipsis_3 line_h24">
                                    <p>Nếu có kiến thức về xây dựng, hoàn toàn có thể tự thiết kế ngôi nhà cho hoặc tham
                                        khảo những mẫu sẵn có rồi chỉnh sửa cho phù hợp với đặc điểm căn nhà và nhu cầu
                                        của gia đình để tiết kiệm chi phí thiết kế.</p>
                                </div>
                                <span class="news_time font_s12 gray_2 line_h14 mt_5 d_block ellipsis_1">20:00 .
                                    11/11/2023</span>
                            </div>

                            <div class="im_content pd_b_8 bd_b_gray">
                                <h3 class="title font_s16 black_md line_h22 font_w500 ellipsis_2">
                                    Thị trường bất động sản thương mại TP.HCM đang phục hồi
                                </h3>
                                <div class="font_s14 mt_8 gray_1 ellipsis_3 line_h24">
                                    <p>Nếu có kiến thức về xây dựng, hoàn toàn có thể tự thiết kế ngôi nhà cho hoặc tham
                                        khảo những mẫu sẵn có rồi chỉnh sửa cho phù hợp với đặc điểm căn nhà và nhu cầu
                                        của gia đình để tiết kiệm chi phí thiết kế.</p>
                                </div>
                                <span class="news_time font_s12 gray_2 line_h14 mt_5 d_block ellipsis_1">20:00 .
                                    11/11/2023</span>
                            </div>

                            <div class="im_content pd_b_8 bd_b_gray">
                                <h3 class="title font_s16 black_md line_h22 font_w500 ellipsis_2">
                                    Thị trường bất động sản thương mại TP.HCM đang phục hồi
                                </h3>
                                <div class="font_s14 mt_8 gray_1 ellipsis_3 line_h24">
                                    <p>Nếu có kiến thức về xây dựng, hoàn toàn có thể tự thiết kế ngôi nhà cho hoặc tham
                                        khảo những mẫu sẵn có rồi chỉnh sửa cho phù hợp với đặc điểm căn nhà và nhu cầu
                                        của gia đình để tiết kiệm chi phí thiết kế.</p>
                                </div>
                                <span class="news_time font_s12 gray_2 line_h14 mt_5 d_block ellipsis_1">20:00 .
                                    11/11/2023</span>
                            </div>
                        </div>
                        <div class="col_3 tan_xdkt_col_3">
                            <div class="d_flex flex_column">
                                <div class="im_thumbnail max_h_388">
                                    <img src="<? echo base_url(); ?>assets/images/new_ts.png" alt="" class="img_full br_8">
                                </div>
                                <div class="im_content pd_t_16">
                                    <h3 class="title font_s16 black_md line_h22 font_w500 ellipsis_2">
                                        Bất động sản khách sạn sẽ là tâm điểm trong cảnh lạm phát tăng cao
                                    </h3>
                                    <span class="news_time font_s12 gray_2 line_h14 mt_5 d_block ellipsis_1">20:00 .
                                        11/11/2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="col_3 tan_xdkt_col_3 cl_t_8">
                            <div class="im_content pd_b_8 bd_b_gray">
                                <h3 class="title font_s16 black_md line_h22 font_w500 ellipsis_2">
                                    Thị trường bất động sản thương mại TP.HCM đang phục hồi
                                </h3>
                                <div class="font_s14 mt_8 gray_1 ellipsis_3 line_h24">
                                    <p>Nếu có kiến thức về xây dựng, hoàn toàn có thể tự thiết kế ngôi nhà cho hoặc tham
                                        khảo những mẫu sẵn có rồi chỉnh sửa cho phù hợp với đặc điểm căn nhà và nhu cầu
                                        của gia đình để tiết kiệm chi phí thiết kế.</p>
                                    <p>Tuy nhiên, nếu không có chuyên môn, Homedy khuyên bạn nên tìm đến các đơn vị
                                        thiết kế có uy tín và kinh nghiệm lâu năm thiết kế ngôi nhà cho hợp lý và đảm
                                        bảo tính thẩm mỹ.</p>
                                    <p>Gia chủ cũng bàn bạc kỹ lưỡng và thống nhất phong cách kiến trúc với kiến trúc
                                        sư. Hạn chế tình trạng trong quá trình thi công thay đổi kiến trúc căn nhà, dẫn
                                        đến phát...</p>
                                </div>
                                <span class="news_time font_s12 gray_2 line_h14 mt_5 d_block ellipsis_1">20:00 .
                                    11/11/2023</span>
                            </div>

                            <div class="im_content pd_b_8 bd_b_gray">
                                <h3 class="title font_s16 black_md line_h22 font_w500 ellipsis_2">
                                    Thị trường bất động sản thương mại TP.HCM đang phục hồi
                                </h3>
                                <div class="font_s14 mt_8 gray_1 ellipsis_3 line_h24">
                                    <p>Nếu có kiến thức về xây dựng, hoàn toàn có thể tự thiết kế ngôi nhà cho hoặc tham
                                        khảo những mẫu sẵn có rồi chỉnh sửa cho phù hợp với đặc điểm căn nhà và nhu cầu
                                        của gia đình để tiết kiệm chi phí thiết kế.</p>
                                    <p>Tuy nhiên, nếu không có chuyên môn, Homedy khuyên bạn nên tìm đến các đơn vị
                                        thiết kế có uy tín và kinh nghiệm lâu năm thiết kế ngôi nhà cho hợp lý và đảm
                                        bảo tính thẩm mỹ.</p>
                                    <p>Gia chủ cũng bàn bạc kỹ lưỡng và thống nhất phong cách kiến trúc với kiến trúc
                                        sư. Hạn chế tình trạng trong quá trình thi công thay đổi kiến trúc căn nhà, dẫn
                                        đến phát...</p>
                                </div>
                                <span class="news_time font_s12 gray_2 line_h14 mt_5 d_block ellipsis_1">20:00 .
                                    11/11/2023</span>
                            </div>

                            <div class="im_content pd_b_8 bd_b_gray">
                                <h3 class="title font_s16 black_md line_h22 font_w500 ellipsis_2">
                                    Thị trường bất động sản thương mại TP.HCM đang phục hồi
                                </h3>
                                <div class="font_s14 mt_8 gray_1 ellipsis_3 line_h24">
                                    <p>Nếu có kiến thức về xây dựng, hoàn toàn có thể tự thiết kế ngôi nhà cho hoặc tham
                                        khảo những mẫu sẵn có rồi chỉnh sửa cho phù hợp với đặc điểm căn nhà và nhu cầu
                                        của gia đình để tiết kiệm chi phí thiết kế.</p>
                                    <p>Tuy nhiên, nếu không có chuyên môn, Homedy khuyên bạn nên tìm đến các đơn vị
                                        thiết kế có uy tín và kinh nghiệm lâu năm thiết kế ngôi nhà cho hợp lý và đảm
                                        bảo tính thẩm mỹ.</p>
                                    <p>Gia chủ cũng bàn bạc kỹ lưỡng và thống nhất phong cách kiến trúc với kiến trúc
                                        sư. Hạn chế tình trạng trong quá trình thi công thay đổi kiến trúc căn nhà, dẫn
                                        đến phát...</p>
                                </div>
                                <span class="news_time font_s12 gray_2 line_h14 mt_5 d_block ellipsis_1">20:00 .
                                    11/11/2023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <? require_once APPPATH.'views/site/includes/da_footer.php' ?>
        <script src="<? echo base_url();?>assets/js/js_t.js"></script>
        <script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="<? echo base_url();?>assets/js/slick.min.js"></script>
        <script>
        hiddenHeader('.header3');

        active_single_header('tintuc');

        let project_items = document.querySelectorAll('.slider_news .project_item')

        if (project_items) {
            for (let i = 0; i < project_items.length; i++) {
                project_items[i].addEventListener('mouseover', hoverHidden);
                project_items[i].addEventListener('mouseout', hoverHidden);
            }

            function hoverHidden() {
                let element = document.querySelector('.slider_news');

                if (element) {
                    element.classList.toggle('disabledBtn');
                }
            }
        }

        $('.slider_news').slick({
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrow: true,
            // autoplay: true,
            autoplaySpeed: 4000,
            prevArrow: '<button class="slick-prev prev-arrow"><img src="<? echo base_url(); ?>assets/images/arrow_l_back.png" alt="" class="checked"></button>',
            nextArrow: '<button class="slick-next next-arrow"><img src="<? echo base_url(); ?>assets/images/arrow_r_back.png" alt="" class="checked"></button>'
        });
        </script>
</body>

</html>