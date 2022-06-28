<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mua gói ghim tin đăng</title>
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/select2.min.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_sb_hd_sdn.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/share_t.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/team_management_t.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/css_q.css">

</head>

<body>
    <div class="body_lienhe">
        <div class="ds_lienhe flex">
            <div class="lienhe_khoi1 back_f7f8fc">
                <? require_once APPPATH.'views/site/includes/sidebar.php' ?>
            </div>
            <div class="lienhe_khoi2 back_f7f8fc pb_0 lienhe_khoi2_muadv-1520">
                <div class="lienhe_khoi2_header ">
                    <? require_once APPPATH.'views/site/includes/header_sdn.php' ?>
                </div>
                <div class="contact_again_container">
                    <div class="mr_t_24">
                        <p class="font_w500 font_s20 line_h23 color_grey">Mua gói ghim tin đăng</p>
                    </div>
                    <div class="mr_t_15">
                        <p class=" font_s14 line_h20 color_grey">Bạn đang lựa chọn mua gói tin <span class="color_green">ABC 4 tuần </span> .
                            Chọn tin đăng bạn muốn sử dụng gói tin bên dưới hoặc <span class="color_green">Đăng tin mới</span> </p>
                    </div>
                    <div class="buy_packets d_flex w_100 space_b">
                        <div class="buy_packets_item khung_select">
                            <select name="" id="" class="size-14 select_option">
                                <option selected disabled value="" class="">Tất cả</option>
                                <option value="">Mua bán</option>
                                <option value="">Cho thuê</option>

                            </select>
                        </div>
                        <div class="buy_packets_item khung_select">
                            <select name="" id="" class="size-14 select_option">
                                <option selected disabled value="" class="">Toàn quốc</option>
                                <option value="">Mua bán</option>
                                <option value="">Cho thuê</option>

                            </select>
                        </div>
                        <div class="buy_packets_item khung_select">
                            <select name="" id="" class="size-14 select_option">
                                <option selected disabled value="" class="">Quận huyện </option>
                                <option value="">Mua bán</option>
                                <option value="">Cho thuê</option>

                            </select>
                        </div>
                        <div class="buy_packets_item khung_select">
                            <select name="" id="" class="size-14 select_option">
                                <option selected disabled value="" class="">Trạng thái</option>
                                <option value="">Mua bán</option>
                                <option value="">Cho thuê</option>

                            </select>
                        </div>
                    </div>
                    <div class="information_buy back_w mr_t_24">
                        <div class="information_buy_item d_flex position_r">
                            <div class="d_flex w_100">
                                <div class="information_buy_item__img">
                                    <div class="information_buy_item-cot-avt">
                                        <img src="<? echo base_url(); ?>assets/images/hotel_1.png" alt="">
                                        <span class="information_buy_item-Notification mr_t_8 text_c">
                                            <p class="color_white font_s12 line_h22">Đã đăng</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="d_flex flex_rows information_buy_item_content">
                                    <div class="information_buy_item-cot-trai d_flex">
                                        <div class="information_buy_item-cot mr_t_8 flex_1">
                                            <p class="font_w500 color_green font_s17 line_h22">Legacy Central Quảng Ninh</p>
                                            <p class="font_s16 line_h22 color_green mr_t_9">ID: 0123456</p>
                                            <div class="information_buy_item-cot_cot2 d_flex mr_t_8">
                                                <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/vitri.png" alt=""></div>
                                                <p class="font_s16 line_h22 color_grey">Phương Đông, Uông Bí, Quảng Ninh</p>
                                            </div>
                                            <div class="information_buy_item-cot_cot2 d_flex mr_t_8 space_b w_100 pa_r_26 flex_w ">
                                                <div class="d_flex">
                                                    <div class="mr_r_6">
                                                        <img src="<? echo base_url(); ?>assets/images/icon_ul_li/congty.png" alt="">
                                                    </div>
                                                    <p class="font_s16 line_h22 color_grey">Công ty CP Xây dựng WHAT</p>
                                                </div>
                                                <div class="d_flex">
                                                    <div class="mr_r_6">
                                                        <img src="<? echo base_url(); ?>assets/images/icon_ul_li/dang_xd.png" alt="">
                                                    </div>
                                                    <p class="font_s14 line_h22 color_grey">Đang xây dựng</p>
                                                </div>
                                            </div>
                                            <div class="information_buy_item-cot_cot2 d_flex mr_t_8 space_b flex_w ">
                                                <div class="d_flex">
                                                    <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/m2.png" alt=""></div>
                                                    <p class="font_s16 line_h22 color_grey">2.000 m2</p>
                                                </div>
                                                <div class="d_flex ">
                                                    <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/dollar.png" alt=""></div>
                                                    <p class="font_s16 line_h22 color_grey">100 - 150 tỷ</p>
                                                </div>
                                                <div class="d_flex">
                                                    <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/trieu_m2.png" alt=""></div>
                                                    <p class="font_s16 line_h22 color_grey">1.2 - 20 triệu/m2</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="information_buy_item-cot-giua d_flex">
                                        <span class="information_buy_item-cot d_flex flex_column mr_t_24">
                                            <span class="font_s16 line_h22 color_grey mr_t_11 d_inline_flex">Ngày tạo: 20/12/2022</span>
                                            <span class="font_s16 line_h22 color_grey mr_t_11 d_inline_flex">Ngày đăng: 20/12/2022</span>
                                        </span>
                                    </div>
                                    <div class="information_buy_item-cot-phai ">
                                        <div class="information_buy_item-cot mr_t_39">
                                            <div class="d_flex information_buy_item-cot3">
                                                <div class="mr_r_10">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/luu.png" alt="">
                                                </div>
                                                <p class="font_s16 line_h22 color_grey">1235</p>
                                            </div>
                                            <div class="d_flex information_buy_item-cot3 mr_t_8">
                                                <div class="mr_r_10">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/eye2.png" alt="">
                                                </div>
                                                <p class="font_s16 line_h22 color_grey">1235</p>
                                            </div>
                                            <div class="d_flex information_buy_item-cot3 mr_t_8">
                                                <div class="mr_r_10">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/icon_chat.png" alt="">
                                                </div>
                                                <p class="font_s16 line_h22 color_grey">1235</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="information_buy_item__375">
                                <div class="information_buy_item__375--modif">
                                    <div class="d_flex align_c">
                                        <div class="mr_r_6">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/dang_xd.png" alt="">
                                        </div>
                                        <p class="font_s13 line_h15 color_grey buy_item__375--modif-text ">Đang xây dựng</p>
                                    </div>
                                    <div class="d_flex align_c mr_t_10">
                                        <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/trieu_m2.png" alt=""></div>
                                        <p class="font_s13 line_h15 color_grey buy_item__375--modif-text">1.2 - 20 triệu/m2</p>
                                    </div>
                                </div>
                                <div class="information_buy_item__375--modif d_flex flex_column">
                                    <span class="font_s13 line_h20 color_grey buy_item__375--modif-text">Ngày tạo: 20/12/2022</span>
                                    <span class="font_s13 line_h20 color_grey mr_t_10  buy_item__375--modif-text">Ngày đăng: 20/12/2022</span>
                                </div>
                            </div>
                            <div class="information_buy_item__375_experience">
                                <div class="d_flex w_100 space_b buy_item__375_experience-modif">
                                    <div class="d_flex align_c ">
                                        <div class="mr_r_10">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/luu.png" alt="">
                                        </div>
                                        <p class="font_s14 line_h22 color_grey ">1235</p>
                                    </div>
                                    <div class="d_flex align_c">
                                        <div class="mr_r_10">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/eye2.png" alt="">
                                        </div>
                                        <p class="font_s14 line_h22 color_grey ">1235</p>
                                    </div>
                                    <div class="d_flex align_c">
                                        <div class="mr_r_10">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/icon_chat.png" alt="">
                                        </div>
                                        <p class="font_s14 line_h22 color_grey ">1235</p>
                                    </div>
                                </div>
                            </div>
                            <div class="information_buy_item-cot-check">
                                <div class="information_buy_item-check cursor_p">
                                </div>
                            </div>
                        </div>
                        <div class="information_buy_item d_flex position_r">
                            <div class="d_flex w_100">
                                <div class="information_buy_item__img">
                                    <div class="information_buy_item-cot-avt">
                                        <img src="<? echo base_url(); ?>assets/images/hotel_1.png" alt="">
                                        <span class="information_buy_item-Notification mr_t_8 text_c">
                                            <p class="color_white font_s12 line_h22">Đã đăng</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="d_flex flex_rows information_buy_item_content">
                                    <div class="information_buy_item-cot-trai d_flex">
                                        <div class="information_buy_item-cot mr_t_8 flex_1">
                                            <p class="font_w500 color_green font_s17 line_h22">Legacy Central Quảng Ninh</p>
                                            <p class="font_s16 line_h22 color_green mr_t_9">ID: 0123456</p>
                                            <div class="information_buy_item-cot_cot2 d_flex mr_t_8">
                                                <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/vitri.png" alt=""></div>
                                                <p class="font_s16 line_h22 color_grey">Phương Đông, Uông Bí, Quảng Ninh</p>
                                            </div>
                                            <div class="information_buy_item-cot_cot2 d_flex mr_t_8 space_b w_100 pa_r_26 flex_w ">
                                                <div class="d_flex">
                                                    <div class="mr_r_6">
                                                        <img src="<? echo base_url(); ?>assets/images/icon_ul_li/congty.png" alt="">
                                                    </div>
                                                    <p class="font_s16 line_h22 color_grey">Công ty CP Xây dựng WHAT</p>
                                                </div>
                                                <div class="d_flex">
                                                    <div class="mr_r_6">
                                                        <img src="<? echo base_url(); ?>assets/images/icon_ul_li/dang_xd.png" alt="">
                                                    </div>
                                                    <p class="font_s14 line_h22 color_grey">Đang xây dựng</p>
                                                </div>
                                            </div>
                                            <div class="information_buy_item-cot_cot2 d_flex mr_t_8 space_b flex_w ">
                                                <div class="d_flex">
                                                    <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/m2.png" alt=""></div>
                                                    <p class="font_s16 line_h22 color_grey">2.000 m2</p>
                                                </div>
                                                <div class="d_flex ">
                                                    <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/dollar.png" alt=""></div>
                                                    <p class="font_s16 line_h22 color_grey">100 - 150 tỷ</p>
                                                </div>
                                                <div class="d_flex">
                                                    <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/trieu_m2.png" alt=""></div>
                                                    <p class="font_s16 line_h22 color_grey">1.2 - 20 triệu/m2</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="information_buy_item-cot-giua d_flex">
                                        <span class="information_buy_item-cot d_flex flex_column mr_t_24">
                                            <span class="font_s16 line_h22 color_grey mr_t_11 d_inline_flex">Ngày tạo: 20/12/2022</span>
                                            <span class="font_s16 line_h22 color_grey mr_t_11 d_inline_flex">Ngày đăng: 20/12/2022</span>
                                        </span>
                                    </div>
                                    <div class="information_buy_item-cot-phai ">
                                        <div class="information_buy_item-cot mr_t_39">
                                            <div class="d_flex information_buy_item-cot3">
                                                <div class="mr_r_10">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/luu.png" alt="">
                                                </div>
                                                <p class="font_s16 line_h22 color_grey">1235</p>
                                            </div>
                                            <div class="d_flex information_buy_item-cot3 mr_t_8">
                                                <div class="mr_r_10">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/eye2.png" alt="">
                                                </div>
                                                <p class="font_s16 line_h22 color_grey">1235</p>
                                            </div>
                                            <div class="d_flex information_buy_item-cot3 mr_t_8">
                                                <div class="mr_r_10">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/icon_chat.png" alt="">
                                                </div>
                                                <p class="font_s16 line_h22 color_grey">1235</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="information_buy_item__375">
                                <div class="information_buy_item__375--modif">
                                    <div class="d_flex align_c">
                                        <div class="mr_r_6">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/dang_xd.png" alt="">
                                        </div>
                                        <p class="font_s13 line_h15 color_grey buy_item__375--modif-text ">Đang xây dựng</p>
                                    </div>
                                    <div class="d_flex align_c mr_t_10">
                                        <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/trieu_m2.png" alt=""></div>
                                        <p class="font_s13 line_h15 color_grey buy_item__375--modif-text">1.2 - 20 triệu/m2</p>
                                    </div>
                                </div>
                                <div class="information_buy_item__375--modif d_flex flex_column">
                                    <span class="font_s13 line_h20 color_grey buy_item__375--modif-text">Ngày tạo: 20/12/2022</span>
                                    <span class="font_s13 line_h20 color_grey mr_t_10  buy_item__375--modif-text">Ngày đăng: 20/12/2022</span>
                                </div>
                            </div>
                            <div class="information_buy_item__375_experience">
                                <div class="d_flex w_100 space_b buy_item__375_experience-modif">
                                    <div class="d_flex align_c ">
                                        <div class="mr_r_10">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/luu.png" alt="">
                                        </div>
                                        <p class="font_s14 line_h22 color_grey ">1235</p>
                                    </div>
                                    <div class="d_flex align_c">
                                        <div class="mr_r_10">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/eye2.png" alt="">
                                        </div>
                                        <p class="font_s14 line_h22 color_grey ">1235</p>
                                    </div>
                                    <div class="d_flex align_c">
                                        <div class="mr_r_10">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/icon_chat.png" alt="">
                                        </div>
                                        <p class="font_s14 line_h22 color_grey ">1235</p>
                                    </div>
                                </div>
                            </div>
                            <div class="information_buy_item-cot-check">
                                <div class="information_buy_item-check cursor_p">
                                </div>
                            </div>
                        </div>

                        <div class="information_buy_item d_flex position_r">
                            <div class="d_flex w_100">
                                <div class="information_buy_item__img">
                                    <div class="information_buy_item-cot-avt">
                                        <img src="<? echo base_url(); ?>assets/images/hotel_1.png" alt="">
                                        <span class="information_buy_item-Notification mr_t_8 text_c">
                                            <p class="color_white font_s12 line_h22">Đã đăng</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="d_flex flex_rows information_buy_item_content">
                                    <div class="information_buy_item-cot-trai d_flex">
                                        <div class="information_buy_item-cot mr_t_8 flex_1">
                                            <p class="font_w500 color_green font_s17 line_h22">Legacy Central Quảng Ninh</p>
                                            <p class="font_s16 line_h22 color_green mr_t_9">ID: 0123456</p>
                                            <div class="information_buy_item-cot_cot2 d_flex mr_t_8">
                                                <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/vitri.png" alt=""></div>
                                                <p class="font_s16 line_h22 color_grey">Phương Đông, Uông Bí, Quảng Ninh</p>
                                            </div>
                                            <div class="information_buy_item-cot_cot2 d_flex mr_t_8 space_b w_100 pa_r_26 flex_w ">
                                                <div class="d_flex">
                                                    <div class="mr_r_6">
                                                        <img src="<? echo base_url(); ?>assets/images/icon_ul_li/congty.png" alt="">
                                                    </div>
                                                    <p class="font_s16 line_h22 color_grey">Công ty CP Xây dựng WHAT</p>
                                                </div>
                                                <div class="d_flex">
                                                    <div class="mr_r_6">
                                                        <img src="<? echo base_url(); ?>assets/images/icon_ul_li/dang_xd.png" alt="">
                                                    </div>
                                                    <p class="font_s14 line_h22 color_grey">Đang xây dựng</p>
                                                </div>
                                            </div>
                                            <div class="information_buy_item-cot_cot2 d_flex mr_t_8 space_b flex_w ">
                                                <div class="d_flex">
                                                    <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/m2.png" alt=""></div>
                                                    <p class="font_s16 line_h22 color_grey">2.000 m2</p>
                                                </div>
                                                <div class="d_flex ">
                                                    <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/dollar.png" alt=""></div>
                                                    <p class="font_s16 line_h22 color_grey">100 - 150 tỷ</p>
                                                </div>
                                                <div class="d_flex">
                                                    <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/trieu_m2.png" alt=""></div>
                                                    <p class="font_s16 line_h22 color_grey">1.2 - 20 triệu/m2</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="information_buy_item-cot-giua d_flex">
                                        <span class="information_buy_item-cot d_flex flex_column mr_t_24">
                                            <span class="font_s16 line_h22 color_grey mr_t_11 d_inline_flex">Ngày tạo: 20/12/2022</span>
                                            <span class="font_s16 line_h22 color_grey mr_t_11 d_inline_flex">Ngày đăng: 20/12/2022</span>
                                        </span>
                                    </div>
                                    <div class="information_buy_item-cot-phai ">
                                        <div class="information_buy_item-cot mr_t_39">
                                            <div class="d_flex information_buy_item-cot3">
                                                <div class="mr_r_10">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/luu.png" alt="">
                                                </div>
                                                <p class="font_s16 line_h22 color_grey">1235</p>
                                            </div>
                                            <div class="d_flex information_buy_item-cot3 mr_t_8">
                                                <div class="mr_r_10">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/eye2.png" alt="">
                                                </div>
                                                <p class="font_s16 line_h22 color_grey">1235</p>
                                            </div>
                                            <div class="d_flex information_buy_item-cot3 mr_t_8">
                                                <div class="mr_r_10">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/icon_chat.png" alt="">
                                                </div>
                                                <p class="font_s16 line_h22 color_grey">1235</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="information_buy_item__375">
                                <div class="information_buy_item__375--modif">
                                    <div class="d_flex align_c">
                                        <div class="mr_r_6">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/dang_xd.png" alt="">
                                        </div>
                                        <p class="font_s13 line_h15 color_grey buy_item__375--modif-text ">Đang xây dựng</p>
                                    </div>
                                    <div class="d_flex align_c mr_t_10">
                                        <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/trieu_m2.png" alt=""></div>
                                        <p class="font_s13 line_h15 color_grey buy_item__375--modif-text">1.2 - 20 triệu/m2</p>
                                    </div>
                                </div>
                                <div class="information_buy_item__375--modif d_flex flex_column">
                                    <span class="font_s13 line_h20 color_grey buy_item__375--modif-text">Ngày tạo: 20/12/2022</span>
                                    <span class="font_s13 line_h20 color_grey mr_t_10  buy_item__375--modif-text">Ngày đăng: 20/12/2022</span>
                                </div>
                            </div>
                            <div class="information_buy_item__375_experience">
                                <div class="d_flex w_100 space_b buy_item__375_experience-modif">
                                    <div class="d_flex align_c ">
                                        <div class="mr_r_10">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/luu.png" alt="">
                                        </div>
                                        <p class="font_s14 line_h22 color_grey ">1235</p>
                                    </div>
                                    <div class="d_flex align_c">
                                        <div class="mr_r_10">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/eye2.png" alt="">
                                        </div>
                                        <p class="font_s14 line_h22 color_grey ">1235</p>
                                    </div>
                                    <div class="d_flex align_c">
                                        <div class="mr_r_10">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/icon_chat.png" alt="">
                                        </div>
                                        <p class="font_s14 line_h22 color_grey ">1235</p>
                                    </div>
                                </div>
                            </div>
                            <div class="information_buy_item-cot-check">
                                <div class="information_buy_item-check cursor_p">
                                </div>
                            </div>
                        </div>
                        <div class="information_buy_item d_flex position_r">
                            <div class="d_flex w_100">
                                <div class="information_buy_item__img">
                                    <div class="information_buy_item-cot-avt">
                                        <img src="<? echo base_url(); ?>assets/images/hotel_1.png" alt="">
                                        <span class="information_buy_item-Notification mr_t_8 text_c">
                                            <p class="color_white font_s12 line_h22">Đã đăng</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="d_flex flex_rows information_buy_item_content">
                                    <div class="information_buy_item-cot-trai d_flex">
                                        <div class="information_buy_item-cot mr_t_8 flex_1">
                                            <p class="font_w500 color_green font_s17 line_h22">Legacy Central Quảng Ninh</p>
                                            <p class="font_s16 line_h22 color_green mr_t_9">ID: 0123456</p>
                                            <div class="information_buy_item-cot_cot2 d_flex mr_t_8">
                                                <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/vitri.png" alt=""></div>
                                                <p class="font_s16 line_h22 color_grey">Phương Đông, Uông Bí, Quảng Ninh</p>
                                            </div>
                                            <div class="information_buy_item-cot_cot2 d_flex mr_t_8 space_b w_100 pa_r_26 flex_w ">
                                                <div class="d_flex">
                                                    <div class="mr_r_6">
                                                        <img src="<? echo base_url(); ?>assets/images/icon_ul_li/congty.png" alt="">
                                                    </div>
                                                    <p class="font_s16 line_h22 color_grey">Công ty CP Xây dựng WHAT</p>
                                                </div>
                                                <div class="d_flex">
                                                    <div class="mr_r_6">
                                                        <img src="<? echo base_url(); ?>assets/images/icon_ul_li/dang_xd.png" alt="">
                                                    </div>
                                                    <p class="font_s14 line_h22 color_grey">Đang xây dựng</p>
                                                </div>
                                            </div>
                                            <div class="information_buy_item-cot_cot2 d_flex mr_t_8 space_b flex_w ">
                                                <div class="d_flex">
                                                    <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/m2.png" alt=""></div>
                                                    <p class="font_s16 line_h22 color_grey">2.000 m2</p>
                                                </div>
                                                <div class="d_flex ">
                                                    <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/dollar.png" alt=""></div>
                                                    <p class="font_s16 line_h22 color_grey">100 - 150 tỷ</p>
                                                </div>
                                                <div class="d_flex">
                                                    <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/trieu_m2.png" alt=""></div>
                                                    <p class="font_s16 line_h22 color_grey">1.2 - 20 triệu/m2</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="information_buy_item-cot-giua d_flex">
                                        <span class="information_buy_item-cot d_flex flex_column mr_t_24">
                                            <span class="font_s16 line_h22 color_grey mr_t_11 d_inline_flex">Ngày tạo: 20/12/2022</span>
                                            <span class="font_s16 line_h22 color_grey mr_t_11 d_inline_flex">Ngày đăng: 20/12/2022</span>
                                        </span>
                                    </div>
                                    <div class="information_buy_item-cot-phai ">
                                        <div class="information_buy_item-cot mr_t_39">
                                            <div class="d_flex information_buy_item-cot3">
                                                <div class="mr_r_10">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/luu.png" alt="">
                                                </div>
                                                <p class="font_s16 line_h22 color_grey">1235</p>
                                            </div>
                                            <div class="d_flex information_buy_item-cot3 mr_t_8">
                                                <div class="mr_r_10">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/eye2.png" alt="">
                                                </div>
                                                <p class="font_s16 line_h22 color_grey">1235</p>
                                            </div>
                                            <div class="d_flex information_buy_item-cot3 mr_t_8">
                                                <div class="mr_r_10">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/icon_chat.png" alt="">
                                                </div>
                                                <p class="font_s16 line_h22 color_grey">1235</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="information_buy_item__375">
                                <div class="information_buy_item__375--modif">
                                    <div class="d_flex align_c">
                                        <div class="mr_r_6">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/dang_xd.png" alt="">
                                        </div>
                                        <p class="font_s13 line_h15 color_grey buy_item__375--modif-text ">Đang xây dựng</p>
                                    </div>
                                    <div class="d_flex align_c mr_t_10">
                                        <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/trieu_m2.png" alt=""></div>
                                        <p class="font_s13 line_h15 color_grey buy_item__375--modif-text">1.2 - 20 triệu/m2</p>
                                    </div>
                                </div>
                                <div class="information_buy_item__375--modif d_flex flex_column">
                                    <span class="font_s13 line_h20 color_grey buy_item__375--modif-text">Ngày tạo: 20/12/2022</span>
                                    <span class="font_s13 line_h20 color_grey mr_t_10  buy_item__375--modif-text">Ngày đăng: 20/12/2022</span>
                                </div>
                            </div>
                            <div class="information_buy_item__375_experience">
                                <div class="d_flex w_100 space_b buy_item__375_experience-modif">
                                    <div class="d_flex align_c ">
                                        <div class="mr_r_10">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/luu.png" alt="">
                                        </div>
                                        <p class="font_s14 line_h22 color_grey ">1235</p>
                                    </div>
                                    <div class="d_flex align_c">
                                        <div class="mr_r_10">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/eye2.png" alt="">
                                        </div>
                                        <p class="font_s14 line_h22 color_grey ">1235</p>
                                    </div>
                                    <div class="d_flex align_c">
                                        <div class="mr_r_10">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/icon_chat.png" alt="">
                                        </div>
                                        <p class="font_s14 line_h22 color_grey ">1235</p>
                                    </div>
                                </div>
                            </div>
                            <div class="information_buy_item-cot-check">
                                <div class="information_buy_item-check cursor_p">
                                </div>
                            </div>
                        </div>
                        <div class="information_buy_item d_flex position_r">
                            <div class="d_flex w_100">
                                <div class="information_buy_item__img">
                                    <div class="information_buy_item-cot-avt">
                                        <img src="<? echo base_url(); ?>assets/images/hotel_1.png" alt="">
                                        <span class="information_buy_item-Notification mr_t_8 text_c">
                                            <p class="color_white font_s12 line_h22">Đã đăng</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="d_flex flex_rows information_buy_item_content">
                                    <div class="information_buy_item-cot-trai d_flex">
                                        <div class="information_buy_item-cot mr_t_8 flex_1">
                                            <p class="font_w500 color_green font_s17 line_h22">Legacy Central Quảng Ninh</p>
                                            <p class="font_s16 line_h22 color_green mr_t_9">ID: 0123456</p>
                                            <div class="information_buy_item-cot_cot2 d_flex mr_t_8">
                                                <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/vitri.png" alt=""></div>
                                                <p class="font_s16 line_h22 color_grey">Phương Đông, Uông Bí, Quảng Ninh</p>
                                            </div>
                                            <div class="information_buy_item-cot_cot2 d_flex mr_t_8 space_b w_100 pa_r_26 flex_w ">
                                                <div class="d_flex">
                                                    <div class="mr_r_6">
                                                        <img src="<? echo base_url(); ?>assets/images/icon_ul_li/congty.png" alt="">
                                                    </div>
                                                    <p class="font_s16 line_h22 color_grey">Công ty CP Xây dựng WHAT</p>
                                                </div>
                                                <div class="d_flex">
                                                    <div class="mr_r_6">
                                                        <img src="<? echo base_url(); ?>assets/images/icon_ul_li/dang_xd.png" alt="">
                                                    </div>
                                                    <p class="font_s14 line_h22 color_grey">Đang xây dựng</p>
                                                </div>
                                            </div>
                                            <div class="information_buy_item-cot_cot2 d_flex mr_t_8 space_b flex_w ">
                                                <div class="d_flex">
                                                    <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/m2.png" alt=""></div>
                                                    <p class="font_s16 line_h22 color_grey">2.000 m2</p>
                                                </div>
                                                <div class="d_flex ">
                                                    <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/dollar.png" alt=""></div>
                                                    <p class="font_s16 line_h22 color_grey">100 - 150 tỷ</p>
                                                </div>
                                                <div class="d_flex">
                                                    <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/trieu_m2.png" alt=""></div>
                                                    <p class="font_s16 line_h22 color_grey">1.2 - 20 triệu/m2</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="information_buy_item-cot-giua d_flex">
                                        <span class="information_buy_item-cot d_flex flex_column mr_t_24">
                                            <span class="font_s16 line_h22 color_grey mr_t_11 d_inline_flex">Ngày tạo: 20/12/2022</span>
                                            <span class="font_s16 line_h22 color_grey mr_t_11 d_inline_flex">Ngày đăng: 20/12/2022</span>
                                        </span>
                                    </div>
                                    <div class="information_buy_item-cot-phai ">
                                        <div class="information_buy_item-cot mr_t_39">
                                            <div class="d_flex information_buy_item-cot3">
                                                <div class="mr_r_10">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/luu.png" alt="">
                                                </div>
                                                <p class="font_s16 line_h22 color_grey">1235</p>
                                            </div>
                                            <div class="d_flex information_buy_item-cot3 mr_t_8">
                                                <div class="mr_r_10">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/eye2.png" alt="">
                                                </div>
                                                <p class="font_s16 line_h22 color_grey">1235</p>
                                            </div>
                                            <div class="d_flex information_buy_item-cot3 mr_t_8">
                                                <div class="mr_r_10">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/icon_chat.png" alt="">
                                                </div>
                                                <p class="font_s16 line_h22 color_grey">1235</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="information_buy_item__375">
                                <div class="information_buy_item__375--modif">
                                    <div class="d_flex align_c">
                                        <div class="mr_r_6">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/dang_xd.png" alt="">
                                        </div>
                                        <p class="font_s13 line_h15 color_grey buy_item__375--modif-text ">Đang xây dựng</p>
                                    </div>
                                    <div class="d_flex align_c mr_t_10">
                                        <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/trieu_m2.png" alt=""></div>
                                        <p class="font_s13 line_h15 color_grey buy_item__375--modif-text">1.2 - 20 triệu/m2</p>
                                    </div>
                                </div>
                                <div class="information_buy_item__375--modif d_flex flex_column">
                                    <span class="font_s13 line_h20 color_grey buy_item__375--modif-text">Ngày tạo: 20/12/2022</span>
                                    <span class="font_s13 line_h20 color_grey mr_t_10  buy_item__375--modif-text">Ngày đăng: 20/12/2022</span>
                                </div>
                            </div>
                            <div class="information_buy_item__375_experience">
                                <div class="d_flex w_100 space_b buy_item__375_experience-modif">
                                    <div class="d_flex align_c ">
                                        <div class="mr_r_10">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/luu.png" alt="">
                                        </div>
                                        <p class="font_s14 line_h22 color_grey ">1235</p>
                                    </div>
                                    <div class="d_flex align_c">
                                        <div class="mr_r_10">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/eye2.png" alt="">
                                        </div>
                                        <p class="font_s14 line_h22 color_grey ">1235</p>
                                    </div>
                                    <div class="d_flex align_c">
                                        <div class="mr_r_10">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/icon_chat.png" alt="">
                                        </div>
                                        <p class="font_s14 line_h22 color_grey ">1235</p>
                                    </div>
                                </div>
                            </div>
                            <div class="information_buy_item-cot-check">
                                <div class="information_buy_item-check cursor_p">
                                </div>
                            </div>
                        </div>
                        <div class="information_buy_item d_flex position_r">
                            <div class="d_flex w_100">
                                <div class="information_buy_item__img">
                                    <div class="information_buy_item-cot-avt">
                                        <img src="<? echo base_url(); ?>assets/images/hotel_1.png" alt="">
                                        <span class="information_buy_item-Notification mr_t_8 text_c">
                                            <p class="color_white font_s12 line_h22">Đã đăng</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="d_flex flex_rows information_buy_item_content">
                                    <div class="information_buy_item-cot-trai d_flex">
                                        <div class="information_buy_item-cot mr_t_8 flex_1">
                                            <p class="font_w500 color_green font_s17 line_h22">Legacy Central Quảng Ninh</p>
                                            <p class="font_s16 line_h22 color_green mr_t_9">ID: 0123456</p>
                                            <div class="information_buy_item-cot_cot2 d_flex mr_t_8">
                                                <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/vitri.png" alt=""></div>
                                                <p class="font_s16 line_h22 color_grey">Phương Đông, Uông Bí, Quảng Ninh</p>
                                            </div>
                                            <div class="information_buy_item-cot_cot2 d_flex mr_t_8 space_b w_100 pa_r_26 flex_w ">
                                                <div class="d_flex">
                                                    <div class="mr_r_6">
                                                        <img src="<? echo base_url(); ?>assets/images/icon_ul_li/congty.png" alt="">
                                                    </div>
                                                    <p class="font_s16 line_h22 color_grey">Công ty CP Xây dựng WHAT</p>
                                                </div>
                                                <div class="d_flex">
                                                    <div class="mr_r_6">
                                                        <img src="<? echo base_url(); ?>assets/images/icon_ul_li/dang_xd.png" alt="">
                                                    </div>
                                                    <p class="font_s14 line_h22 color_grey">Đang xây dựng</p>
                                                </div>
                                            </div>
                                            <div class="information_buy_item-cot_cot2 d_flex mr_t_8 space_b flex_w ">
                                                <div class="d_flex">
                                                    <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/m2.png" alt=""></div>
                                                    <p class="font_s16 line_h22 color_grey">2.000 m2</p>
                                                </div>
                                                <div class="d_flex ">
                                                    <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/dollar.png" alt=""></div>
                                                    <p class="font_s16 line_h22 color_grey">100 - 150 tỷ</p>
                                                </div>
                                                <div class="d_flex">
                                                    <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/trieu_m2.png" alt=""></div>
                                                    <p class="font_s16 line_h22 color_grey">1.2 - 20 triệu/m2</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="information_buy_item-cot-giua d_flex">
                                        <span class="information_buy_item-cot d_flex flex_column mr_t_24">
                                            <span class="font_s16 line_h22 color_grey mr_t_11 d_inline_flex">Ngày tạo: 20/12/2022</span>
                                            <span class="font_s16 line_h22 color_grey mr_t_11 d_inline_flex">Ngày đăng: 20/12/2022</span>
                                        </span>
                                    </div>
                                    <div class="information_buy_item-cot-phai ">
                                        <div class="information_buy_item-cot mr_t_39">
                                            <div class="d_flex information_buy_item-cot3">
                                                <div class="mr_r_10">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/luu.png" alt="">
                                                </div>
                                                <p class="font_s16 line_h22 color_grey">1235</p>
                                            </div>
                                            <div class="d_flex information_buy_item-cot3 mr_t_8">
                                                <div class="mr_r_10">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/eye2.png" alt="">
                                                </div>
                                                <p class="font_s16 line_h22 color_grey">1235</p>
                                            </div>
                                            <div class="d_flex information_buy_item-cot3 mr_t_8">
                                                <div class="mr_r_10">
                                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/icon_chat.png" alt="">
                                                </div>
                                                <p class="font_s16 line_h22 color_grey">1235</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="information_buy_item__375">
                                <div class="information_buy_item__375--modif">
                                    <div class="d_flex align_c">
                                        <div class="mr_r_6">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/dang_xd.png" alt="">
                                        </div>
                                        <p class="font_s13 line_h15 color_grey buy_item__375--modif-text ">Đang xây dựng</p>
                                    </div>
                                    <div class="d_flex align_c mr_t_10">
                                        <div class="mr_r_6"><img src="<? echo base_url(); ?>assets/images/icon_ul_li/trieu_m2.png" alt=""></div>
                                        <p class="font_s13 line_h15 color_grey buy_item__375--modif-text">1.2 - 20 triệu/m2</p>
                                    </div>
                                </div>
                                <div class="information_buy_item__375--modif d_flex flex_column">
                                    <span class="font_s13 line_h20 color_grey buy_item__375--modif-text">Ngày tạo: 20/12/2022</span>
                                    <span class="font_s13 line_h20 color_grey mr_t_10  buy_item__375--modif-text">Ngày đăng: 20/12/2022</span>
                                </div>
                            </div>
                            <div class="information_buy_item__375_experience">
                                <div class="d_flex w_100 space_b buy_item__375_experience-modif">
                                    <div class="d_flex align_c ">
                                        <div class="mr_r_10">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/luu.png" alt="">
                                        </div>
                                        <p class="font_s14 line_h22 color_grey ">1235</p>
                                    </div>
                                    <div class="d_flex align_c">
                                        <div class="mr_r_10">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/eye2.png" alt="">
                                        </div>
                                        <p class="font_s14 line_h22 color_grey ">1235</p>
                                    </div>
                                    <div class="d_flex align_c">
                                        <div class="mr_r_10">
                                            <img src="<? echo base_url(); ?>assets/images/icon_ul_li/icon_chat.png" alt="">
                                        </div>
                                        <p class="font_s14 line_h22 color_grey ">1235</p>
                                    </div>
                                </div>
                            </div>
                            <div class="information_buy_item-cot-check">
                                <div class="information_buy_item-check cursor_p">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buy_packs_btn d_flex flex_center">
                        <div class="buy_packs_btn-box d_flex flex_center align_c m_r_24 mr_t_32" id="click_vi3s">
                            <p class="font_w500 font_s14 color_grey">Ví 3S</p>
                        </div>
                        <div class="buy_packs_btn-box d_flex flex_center align_c mr_t_32" id="click_buy_packs">
                            <p class="font_w500 font_s14 color_grey">Chuyển khoản</p>
                        </div>
                    </div>
                    <!-- icon chat -->
                    <div class="">
                        <div class="mua_dv-last d_flex  space_b">
                            <div class="mua_dv-last-right position_r">
                                <div class="mua_dv-last-right-call position_a">
                                    <img src="<? echo base_url(); ?>assets/images/call.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="d_flex flex_end position_r" id="onclick_chat_ngay">
                            <div class="mua_dv-last-chat-ad d_flex back_00AC57  position_a">
                                <div class="mua_dv-last-chat-ad-img">
                                    <img src="<? echo base_url(); ?>assets/images/chat_trang.png" alt="">
                                </div>
                                <p class="font_w500 font_s16 line_h19 color_white ml_10">Chat với chúng tôi</p>
                            </div>
                            <img src="<? echo base_url(); ?>assets/images/chat_xanh_375.png" alt="" class="icon_chat_375  position_a" id="icon_chat_375 ">
                        </div>
                    </div>
                    <div class="popup_chat_ad hidden">
                        <div class="popup_chat_ad_first">
                            <div class="popup_chat_ad_first-img d_flex flex_end">
                                <div class="mr_r_15 cursor_p ">
                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/menu.png" alt="">
                                </div>
                                <div class="cursor_p" id="popup_chat_ad_close">
                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/delete_chat.png" alt="">
                                </div>
                            </div>
                            <div class="popup_chat_ad_first-hedding mr_t_16">
                                <p class=" color_white font_s16 line_h24 text_c">Chào bạn, Batdongsan3S có thể hỗ trợ được gì cho bạn!</p>
                            </div>
                        </div>
                        <div class="popup_chat_ad-text back_w"></div>
                        <div class="popup_chat_ad-write d_flex space_b">
                            <div class="popup_chat_ad-input">
                                <input type="text" placeholder="Viết phản hồi">
                            </div>
                            <div class="popup_chat_ad-write-icon d_flex mr_r_18">
                                <div class="popup_chat_ad-write-icon-img mr_r_10 cursor_p position_r">
                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/like.png" alt="" id="click_like">
                                    <div class="popup_chat_ad-write-icon-img_nho position_a d_flex">
                                        <img src="<? echo base_url(); ?>assets/images/icon_ul_li/like.png" alt="" class="mr_r_10">
                                        <img src="<? echo base_url(); ?>assets/images/icon_ul_li/no_like.png" alt="">
                                    </div>
                                </div>
                                <div class="popup_chat_ad-write-icon-img mr_r_10 cursor_p ">
                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/camxuc.png" alt="">
                                </div>
                                <div class="popup_chat_ad-write-icon-img cursor_p ">
                                    <img src="<? echo base_url(); ?>assets/images/icon_ul_li/upload.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lienhe_khoi3">
            <? require_once APPPATH.'views/site/includes/da_footer.php' ?>
        </div>

        <div class="popup_transfer hidden">
            <div class="overlay" id="overlay"></div>
            <div class="popup_transfer_tong back_w br_8">
                <div class="popup_transfer_first d_flex space_b">
                    <div class="font_w500 font_s24 line_h28 color_grey">Thanh toán</div>
                    <p class="font_w500 font_s18 line_h21 color_grey cursor_p" id="transfer_close">Đóng</p>
                </div>
                <div class="bg_white over_hd mn_h296 border_b_r8">
                    <div class="clause_transfer">
                        <span class="header_top-money d_flex center_center btn_infor cl_white pd_8 font_s18 line_h20 font_w500">Bước 1: Chuyển tiền qua internet banking</span>
                        <div class="d_flex flex_column w_100 popup_transfer_box">
                            <div class="infor_bank d_flex w_100">
                                <div class="infor flex_1">
                                    <h3 class="font_s16 line_h20 font_w500">Thông tin tài khoản <span class="name_bank">BIDV</span></h3>
                                    <div class="mt_24">
                                        <div class="d_flex align_c">
                                            <span class="block mn_w125 font_s16 line_h20 font_w400 mr_14">Số tài khoản</span>
                                            <div class="d_flex align_c position_r">
                                                <!-- <input type="text" value="21610000775434" readonly disabled class="rs_input bg_none font_s16 line_h20 font_w500 cl_blue mr_19 copy"> -->
                                                <span class="block mn_w125 font_s16 line_h20 font_w500 cl_blue mr_19 copy">21610000775434</span>
                                                <div class="wh_20 cursor_p copyied position_r">
                                                    <img src="<? echo base_url(); ?>assets/images/fi-rr-copy.png" alt="">
                                                    <!-- <span class="message_copytied">Copy thành công</span> -->
                                                </div>

                                                <div class="img_bank">
                                                    <img src="<? echo base_url(); ?>assets/images/bidv.png" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d_flex align_c">
                                            <span class="block mn_w125 font_s16 line_h20 font_w400 mr_14">Chủ tài khoản</span>
                                            <span class="block mn_w125 font_s16 line_h20 font_w500 cl_blue mr_19">TRƯƠNG VĂN TRẮC</span>
                                        </div>

                                        <div class="d_flex align_c">
                                            <span class="block mn_w125 font_s16 line_h20 font_w400 mr_14">Chi nhánh</span>
                                            <span class="block mn_w125 font_s16 line_h20 font_w500 cl_blue mr_19">Hoàng Mai, Hà Nội</span>
                                        </div>

                                        <div class="d_flex align_c">
                                            <span class="block mn_w125 font_s16 line_h20 font_w400 mr_14">ND chuyển khoản</span>
                                            <span class="block mn_w125 font_s16 line_h20 font_w500 cl_blue mr_19">[tên cá nhân hoặc công ty] su dung dich vu 3S</span>
                                        </div>

                                        <div class="d_flex align_c">
                                            <span class="block mn_w125 font_s16 line_h20 font_w400 mr_14">Ví dụ:</span>
                                            <span class="block mn_w125 font_s16 line_h20 font_w500 cl_blue mr_19">Tuan Anh Nguyeen su dung dich vu 3S</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="qrcode pd_r_76">
                                    <div class="wh_152">
                                        <img src="<? echo base_url(); ?>assets/images/qrcode _1.png" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="w_100 mr_t_32">
                                <div class="row d_flex flex_w list_back">
                                    <?php
                                    $link = base_url();
                                    $listBank = [
                                        [
                                            'src' => ''.$link.'assets/images/bidv.png',
                                        ],
                                        [
                                            'src' => ''.$link.'assets/images/Techcombank_1.png',
                                        ],
                                        [
                                            'src' => ''.$link.'assets/images/sacom_01.png',
                                        ],
                                        [
                                            'src' => ''.$link.'assets/images/Vietcombank_1.png',
                                        ],
                                        [
                                            'src' => ''.$link.'assets/images/ACB-Bank_1.png',
                                        ],
                                        [
                                            'src' => ''.$link.'assets/images/VIB-Bank_1.png',
                                        ],

                                        [
                                            'src' => ''.$link.'assets/images/VIB-Bank_1.png',
                                        ],

                                        [
                                            'src' => ''.$link.'assets/images/VIB-Bank_1.png',
                                        ],

                                        [
                                            'src' => ''.$link.'assets/images/VIB-Bank_1.png',
                                        ],
                                        [
                                            'src' => ''.$link.'assets/images/VIB-Bank_1.png',
                                        ]
                                    ];
                                    foreach ($listBank as $key => $bank) :
                                    ?>
                                        <div class="col_5 bd-grayc br_8 d_flex center_center pd_5_16 cursor_p <?= $key == 0 ? 'this_bank' : '' ?>">
                                            <div class="">
                                                <img src="<?= $bank['src'] ?>" alt="">
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <sapn class="header_top-money d_flex center_center btn_infor cl_white pd_8 font_s18 line_h20 font_w500">Bước 2: Thông báo cho chuyên viên hỗ trợ hoặc HOTLINE 1900633682 nhấn phím 1</sapn>
                        <div class="popup_transfer_box-btn d_flex center_center">
                            <div class="d_flex align_c mn_w250 bg_green_5 br_8 pd_11_24 drop_sh_5 cursor_p height_40">
                                <div class="wh_20 mr_10">
                                    <img src="<? echo base_url(); ?>assets/images/inbox_green_fill.png" alt="">
                                </div>
                                <span class="cl_green font_s16 line_h19 font_w500">thông báo trên Chatbox</span>
                            </div>

                            <div class="d_flex align_c mn_w250 bg_red_5 br_8 pd_11_24 drop_sh_5 ml_64 cursor_p height_40">
                                <div class="wh_20 mr_10">
                                    <img src="<? echo base_url(); ?>assets/images/call_red_fill.png" alt="">
                                </div>
                                <span class="cl_red font_s16 line_h19 font_w500">Thông báo trên Hotline</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup_canhbao popup_hien popup_hien_con d_flex hidden">
            <div class="overlay" id="close_overlay_canhbao"> </div>
            <div class="popup_canhbao_3s d_flex flex_column flex_center align_c back_w border_r_8 box_shadow_10 z_index_1">
                <div class="popup_warning_post-img">
                    <img src="<? echo base_url(); ?>assets/images/canhbao_xanh.png" alt="">
                </div>
                <div class="popup_warning_post-text text_c mr_t_24  ">
                    <p class="font_s14 line_h24 color_grey font_w500">Bạn có muốn sử dụng 100.000 VNĐ trong <br>
                        <span class="main_color">Ví 3S </span>không?
                    </p>
                </div>
                <div class="popup_warning_post-btn_tong d_flex space_b mr_t_24 w_100">
                    <a href="#" class="popup_warning_post-btn chutrang_nenxanh chutrang_nenxanh cursor_p">
                        <p class="font_s16 font_w500 line_h19">Tiếp tục</p>
                    </a>
                    <div class="popup_warning_post-btn chuden_nentrang cursor_p" id="onclick_huy_canhbao">
                        <p class="font_s16 font_w500 line_h19 color_grey">Quay lại</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/select2.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_quang.js"></script>
<script src="<? echo base_url();?>assets/js/js_t.js"></script>
<script>
    $(".select_option").select2({
        width: "100%",
    });
</script>
<script>
    function activeMoney(element, listBnt, classActive, classRemoveClick) {
        let elements = document.querySelector(listBnt);

        if (elements) {
            let children = [...elements.children];
            children.forEach(e => {
                if (e.classList.contains(classActive)) {
                    e.classList.remove(classActive);
                }
            })
            element.classList.add(classActive);
        }

    }

    function Copyied(element, classCopyied) {
        let ElementCopy = document.querySelector(classCopyied);

        if (ElementCopy) {
            var r = document.createRange();
            r.selectNode(ElementCopy)
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(r);
            document.execCommand('copy');
            window.getSelection().removeAllRanges();

            ElementCopy.oncopy = function() {
                let child = [...element.children];
                child.forEach((e) => {
                    if (e.classList.contains('message_copytied')) {
                        e.remove();
                        clearTimeout();
                    }
                })
                let span = document.createElement('span');
                span.className = "message_copytied";

                span.innerText = 'Copy thành công';
                element.appendChild(span);

                let stTimeOut = setTimeout(() => {
                    span.style.transition = 'all .4s ease';
                    span.style.opacity = '0';
                    span.style.overflow = 'hidden';
                }, 2000)

                let removeSpan = setTimeout(() => {
                    span.remove();
                }, 2500)
            }
        }
    }

    document.querySelector('.copyied').onclick = function() {
        Copyied(document.querySelector('.copyied'), '.copy')
    }
</script>

</html>