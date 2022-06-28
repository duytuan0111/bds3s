<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mua dịch vụ</title>
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
                <div class="lienhe_khoi2_header">
                    <? require_once APPPATH.'views/site/includes/header_sdn.php' ?>
                </div>
                <div class="contact_again_container mr_t_55 mua_dv_hedding">
                    <div class="mua_dv_title">
                        <p class="mua_dv_title-text font_w_600 font_s24 line_h28 color_grey position_r">01</p>
                        <p class="font_w_600 font_s40 line_h46 color_grey">Gói <span class="color_green">Ghim tin đăng</span> </p>
                        <p class="mr_t_16 font_s16 line_h19 color_grey">Giải pháp đẩy tin đăng lên đầu trang chủ, nâng cao khả năng tiếp cận khách hàng</p>
                    </div>
                    <div class="mua_dv-item-tong mr_t_32 d_flex flex_w space_b">
                        <?php
                        for ($i = 0; $i < 6; $i++) { ?>
                            <div class="mua_dv-item">
                                <div class="mua_dv-item-head d_flex space_b back_00AC57 align_c">
                                    <div class="mua_dv-item-head-text">
                                        <p class="font_w500 font_s18 line_h21 color_white">Gói ghim tin 3 ngày</p>
                                    </div>
                                    <div class="mua_dv-item-head-right">
                                        <div class="mua_dv-item-head-discount d_flex flex_end">
                                            <p class="font_s14 line_h24 color_white"> <span class=" text_decoration_white "> 0 VNĐ </span><span class="back_E58A00 pa_t_b_5_6 color_E58A00 back_EFEFEF border_r_50 ml_8 font_s12">-0%</span></p>
                                        </div>
                                        <div class="mua_dv-item-head-real-price mr_t_4">
                                            <p class="font_w500 font_s16 line_h24 color_white">Giá: <span class="font_s20 mr_l_16 ">0 VNĐ</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mua_dv-item-container">
                                    <div class="mua_dv-item-khoi1 d_flex">
                                        <div class="mua_dv-item-khoi1-check">
                                            <label class="checkbox-label-phanquyen">
                                                <input type="checkbox">
                                                <span class="checkbox-custom"></span>
                                            </label>
                                        </div>
                                        <div class="mua_dv-item-khoi1-text">
                                            <p class="font_s16 line_h24 color_grey mr_l_12">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna</p>
                                        </div>
                                    </div>
                                    <div class="mua_dv-item-khoi1 d_flex mr_t_24">
                                        <div class="mua_dv-item-khoi1-check">
                                            <label class="checkbox-label-phanquyen">
                                                <input type="checkbox">
                                                <span class="checkbox-custom"></span>
                                            </label>
                                        </div>
                                        <div class="mua_dv-item-khoi1-text">
                                            <p class="font_s16 line_h24 color_grey mr_l_12">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna</p>
                                        </div>
                                    </div>
                                    <div class="mua_dv-item-khoi1 d_flex mr_t_24">
                                        <div class="mua_dv-item-khoi1-check">
                                            <label class="checkbox-label-phanquyen">
                                                <input type="checkbox">
                                                <span class="checkbox-custom"></span>
                                            </label>
                                        </div>
                                        <div class="mua_dv-item-khoi1-text">
                                            <p class="font_s16 line_h24 color_grey mr_l_12">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna</p>
                                        </div>
                                    </div>
                                    <a href="mua-goi-ghim-tin-dang.html">
                                        <div class="d_flex flex_center mr_t_42 position_r">
                                            <div class="mua_dv-item-btn d_flex flex_center align_c cursor_p">
                                                <p class=" font_w500 font_s16 line_h19 color_E58A00">Mua</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        <?php };
                        ?>

                    </div>
                    <div class="mua_dv_title mr_t_70">
                        <p class="mua_dv_title-text font_w_600 font_s24 line_h28 color_grey position_r">02</p>
                        <p class="font_w_600 font_s40 line_h46 color_grey">Gói <span class="color_green">Đẩy tin</span> </p>
                        <p class="mr_t_16 font_s16 line_h19 color_grey">Giải pháp đẩy tin đăng lên đầu danh sách tin, nâng cao khả năng tiếp cận khách hàng</p>
                    </div>
                    <div class="mua_dv-item2-tong mr_t_32 d_flex space_b">
                        <div class="mua_dv-item2-left mr_t_12 ">
                            <p class="color_green font_w500 font_s18 line_h20">Tên Gói</p>
                            <div class="mr_t_15">
                                <div class="mua_dv-item2-left-total border_r_8 d_flex space_b cursor_p" onclick="chongoi1(this)">
                                    <p class="font_w500 font_s16 line_h20 color_grey">Gói 1</p>
                                    <div class="mua_dv-item2-left-radio">
                                        <input type="radio" id="radio_mua_dv" name="radio_mua_dv_check" checked class="radio_check1">
                                        <label for="radio_mua_dv"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="mr_t_8">
                                <div class="mua_dv-item2-left-total border_r_8 d_flex space_b cursor_p" onclick="chongoi2(this)">
                                    <p class="font_w500 font_s16 line_h20 color_grey">Gói 1</p>
                                    <div class="mua_dv-item2-left-radio">
                                        <input type="radio" id="radio_mua_dv" name="radio_mua_dv_check" class="radio_check2">
                                        <label for="radio_mua_dv"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="mr_t_8">
                                <div class="mua_dv-item2-left-total border_r_8 d_flex space_b cursor_p" onclick="chongoi3(this)">
                                    <p class="font_w500 font_s16 line_h20 color_grey">Gói 1</p>
                                    <div class="mua_dv-item2-left-radio">
                                        <input type="radio" id="radio_mua_dv" name="radio_mua_dv_check" class="radio_check3">
                                        <label for="radio_mua_dv"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="mr_t_8">
                                <div class="mua_dv-item2-left-total border_r_8 d_flex space_b cursor_p" onclick="chongoi4(this)">
                                    <p class="font_w500 font_s16 line_h20 color_grey">Gói 1</p>
                                    <div class="mua_dv-item2-left-radio">
                                        <input type="radio" id="radio_mua_dv" name="radio_mua_dv_check" class="radio_check4">
                                        <label for="radio_mua_dv"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mua_dv-item2-right ">
                            <div class="mua_dv-item2-right-head">
                                <div class="d_flex">
                                    <p class="text_decoration_white font_s14 line_h24 color_white">0 VNĐ</p>
                                    <p class="back_E58A00 pa_t_b_5_6 back_EFEFEF border_r_50 ml_8 font_s12 main_color">-0%</p>
                                </div>
                                <div class="d_flex space_b mr_t_4">
                                    <div class="mua_dv-item2-right-head-left d_flex">
                                        <p class="font_w500 font_s16 line_h24 color_white">Giá:</p>
                                        <p class="font_w500 font_s20 line_h24 color_white mr_l_16">0 VNĐ</p>
                                    </div>
                                    <div class="mua_dv-item2-right-head-right d_flex">
                                        <p class="font_w500 font_s16 line_h24 color_white">Tặng:</p>
                                        <p class="font_w500 font_s20 line_h24 color_white mr_l_13">0 điểm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mua_dv-item2-right-container back_w">
                                <p class="font_s16 line_h26 color_grey">
                                    - Tin tuyển dụng được ghim trong box “Việc Làm Hấp Dẫn” nằm ngay đầu trang chủ trong 2 tuần. <br>

                                    - Chuyên viên hỗ trợ gửi các hồ sơ phù hợp mới nhất hàng ngày trong suốt thời gian ghim tin.<br>

                                    - NTD được xem 100 hồ sơ ứng viên trong thời gian 6 tuần.<br>

                                    - Hoàn điểm ngay trong 24h nếu ứng viên đã có việc hoặc sai số điện thoại.<br>

                                    - Đăng tin miễn phí tại group facebook tìm việc 365 tiếp cận +100k người:<br>

                                    https://www.facebook.com/groups/Timviec365.vn/.<br>

                                    - Tin tuyển dụng được Biên tập viên viết bài quảng bá và có quay review công ty (thí điểm tại Hà Nội) đăng kèm theo tin tuyển dụng, tham khảo tại ĐÂY.
                                    - Tin tuyển dụng được ghim trong box “Việc Làm Hấp Dẫn” nằm ngay đầu trang chủ trong 2 tuần. <br>

                                    - Chuyên viên hỗ trợ gửi các hồ sơ phù hợp mới nhất hàng ngày trong suốt thời gian ghim tin.<br>

                                    - NTD được xem 100 hồ sơ ứng viên trong thời gian 6 tuần.<br>

                                    - Hoàn điểm ngay trong 24h nếu ứng viên đã có việc hoặc sai số điện thoại.<br>

                                    - Đăng tin miễn phí tại group facebook tìm việc 365 tiếp cận +100k người:<br>

                                    https://www.facebook.com/groups/Timviec365.vn/.<br>

                                    - Tin tuyển dụng được Biên tập viên viết bài quảng bá và có quay review công ty (thí điểm tại Hà Nội) đăng kèm theo tin tuyển dụng, tham khảo tại ĐÂY.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mua_dv-last mua_dv-last d_flex mr_t_24 space_b">
                        <div class="mua_dv-last-left d_flex align_c">
                            <p class="font_w500 font_s18 line_h21 main_color">Thanh toán qua</p>
                            <div class="mua_dv-last-left-btn__tong d_flex">
                                <div class="mua_dv-last-left-btn d_flex align_c flex_center border_r_8 back_w mr_l_16 cursor_p" id="click_vi3s">
                                    <p class="font_w500 font_s16 line_h19 color_grey">Ví 3S</p>
                                </div>
                                <div class="mua_dv-last-left-btn d_flex align_c flex_center border_r_8 back_w mr_l_24 cursor_p" id="click_chuyen_khoan">
                                    <p class="font_w500 font_s16 line_h19 color_grey cursor_p">Chuyển khoản</p>
                                </div>
                            </div>
                        </div>
                        <div class="mua_dv-last-right position_r">
                            <div class="mua_dv-last-right-call position_a">
                                <img src="<? echo base_url(); ?>assets/images/call.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="d_flex flex_end mr_t_76 position_r">
                        <div class="mua_dv-last-chat-ad d_flex back_00AC57  position_a" id="onclick_chat_ngay">
                            <div class="mua_dv-last-chat-ad-img">
                                <img src="<? echo base_url(); ?>assets/images/chat_trang.png" alt="">
                            </div>
                            <p class="font_w500 font_s16 line_h19 color_white ml_10">Chat với chúng tôi</p>
                        </div>
                        <img src="<? echo base_url(); ?>assets/images/chat_xanh_375.png" alt="" class="icon_chat_375_2 position_a">
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
                                    <div class="d_flex space_b align_c">
                                        <h3 class="font_s16 line_h20 font_w500">Thông tin tài khoản <span class="name_bank">BIDV</span></h3>
                                        <div class="img_bank_375">
                                            <img src="<? echo base_url(); ?>assets/images/bidv.png" alt="">
                                        </div>
                                    </div>
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
                                            'src' => ''.$link.'assets/images/msb_1.png',
                                        ],
                                        [
                                            'src' => ''.$link.'assets/images/Agribank _1.png',
                                        ],
                                        [
                                            'src' => ''.$link.'assets/images/Vietinbank_1.png',
                                        ],
                                        [
                                            'src' => ''.$link.'assets/images/mbbank_1.png',
                                        ],
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
</body>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_quang.js"></script>
<script src="<? echo base_url();?>assets/js/js_t.js"></script>
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

        $('.icon_chat_375_2').click(function () {
    // console.log($('.popup_chat_ad'))
    $('.popup_chat_ad').toggleClass('hidden');
    })
    $('#muadichvu').addClass('color_click')
</script>

</html>