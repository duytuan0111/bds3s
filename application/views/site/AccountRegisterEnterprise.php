
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Trang đăng ký doanh nghiệp</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/frontend/css/css_q.css">
</head>

<body>
<div class="link__header_register">
        <header class="position_r back_w">
            <div class="header_all position_r">
                <div class="menu-header nav_bar d_flex space_b align_c position_r ">
                    <div class="nav-hd-menu d_flex">
                        <div class="nav_bar_logo d_flex align_c">
                            <div class="icon_menu_total">
                                <img src="<? echo base_url(); ?>assets/images/icon_ul_li/menu _icon.png" alt="" class="logoxanhan">
                                <img src="<? echo base_url(); ?>assets/images/menu_white.png" alt="" class="logotrang">
                            </div>
                            <picture class="logoxanh">
                                <img src="<? echo base_url(); ?>assets/images/logo_xanh.png" class="logoxanhan">
                                <img src="<? echo base_url(); ?>assets/images/logobds.png" class="logotrang">
                            </picture>
                        </div>
                        <ul class="ul_menu d_flex align_c">
                            <li class="li_menu"><a class="font_s16" href="">Cộng đồng</a></li>
                            <li class="li_menu"><a class="font_s16" href="danh-sach-du-an-noi-bat.html">Dự án</a></li>
                            <li class="li_menu"><a class="font_s16" href="mua-ban-truoc-dang-nhap.html">Mua bán</a></li>
                            <li class="li_menu"><a class="font_s16" href="cho-thue-truoc-dang-nhap.html">Cho thuê</a></li>
                            <li class="li_menu"><a class="font_s16" href="chuyen-gia-moi-gioi.html">Chuyên gia</a></li>
                            <li class="li_menu"><a class="font_s16" href="thiet-ke-nha-dep.html">Thiết kế đẹp</a></li>
                            <li class="li_menu"><a class="font_s16" href="tin-tuc.html">Tin tức</a></li>
                            <li class="li_menu"><a class="font_s16" href="tien-ich.html">Tiện ích</a></li>
                        </ul>
                    </div>
                    <div class="register d_flex">
                        <a href="dang-tin-truoc-dang-nhap.html">
                            <div class="btn_upnews chuxanh_nentrang">
                                <img src="<? echo base_url(); ?>assets/images/icon_upnews.png">
                                <span>Đăng tin</span>
                            </div>
                        </a>
                        <a href="trang-tai-khoan-dang-nhap.html">
                            <div class="btn_login chutrang_nenxanh">
                                Đăng nhập
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div class="wrapper_all dangy_dangnhap">
        <div class="main_tt">
            <div class="account account_nhap account_nhap-enterprise d_flex flex_column">
                <div class="account_back d_flex" onclick="back_page()">
                    <div class="back_page"><img src="<? echo base_url();?>assets/images/back.png" alt=""></div>
                    <p class="font-medium size-14">Quay lại</p>
                </div>
                <div class="account_log-in w_100">
                    <div class="account_title font_s24 text_c color_green font_w_600">Đăng Ký</div>
                    <div class="font_s16 m_t_b_24 text_l font_w500 color_grey mr_b_0 line_h19 account_title_text1 ">Thông tin đăng ký</div>
                    <div class="d_flex account_log-in__import space_b">
                        <div class="khung_input-left_tong w_50">
                            <div class="khung_input khung_input-left d_flex align_c">
                                <input type="text" placeholder="Email *">
                            </div>
                            <div class="khung_input khung_input-left d_flex align_c">
                                <input type="password" placeholder="Mật khẩu *">
                            </div>
                            <div class="khung_input khung_input-left d_flex align_c">
                                <input type="password" placeholder="Nhập lại mật khẩu *">
                            </div>
                            <div class="khung_input khung_input-left d_flex align_c">
                                <input type="text" placeholder="Nhập số điện thoại *">
                            </div>
                            <div class="khung_input khung_input-left d_flex align_c mr_t_16">
                                <input type="text" placeholder="Tên công ty *">
                            </div>
                            <div class="khung_input khung_input-right d_flex align_c">
                                <select name="" id="" class="size-14 select_option">
                                    <option selected disabled value="" class="">Lĩnh vực *</option>
                                    <option value="">HTSKDDL</option>
                                </select>
                            </div>
                        </div>
                        <div class="khung_input-right_tong w_50">
                            <div class="khung_input khung_input-right d_flex align_c">
                                <select name="" id="" class="size-14 select_option">
                                    <option selected disabled value="" class="">Tỉnh thành *</option>
                                    <option value="">HTSKDDL</option>
                                </select>
                            </div>
                            <div class="khung_input khung_input-right d_flex align_c">
                                <select name="" id="" class="size-14 select_option">
                                    <option selected disabled value="" class="">Quận huyện *</option>
                                    <option value="">HTSKDDL</option>
                                </select>
                            </div>
                            <div class="khung_input khung_input-right d_flex align_c">
                                <select name="" id="" class="size-14 select_option">
                                    <option selected disabled value="" class="">Phường xã *</option>
                                    <option value="">HTSKDDL</option>
                                </select>
                            </div>
                            <div class="khung_input khung_input-right d_flex align_c mr_t_16">
                                <input type="text" placeholder="Mã số thuế">
                            </div>
                            <div class="khung_input khung_input-right d_flex align_c">
                                <select name="" id="" class="size-14 select_option">
                                    <option selected disabled value="" class="">Địa chỉ chi tiết</option>
                                    <option value="">HTSKDDL</option>
                                </select>
                            </div>
                            <div class="d_flex w_100 ">
                                <div class="d_flex align_c account_import_capcha">
                                    <div class="account_nhap-capcha-input khung_input float_r align_r ">
                                        <input type="text" placeholder="Nhập captcha *">
                                    </div>
                                    <div class="account_nhap-capcha font_s30 text_c color_green font_w_600 mt_15">
                                        Bb74K0
                                    </div>
                                    <div class="account_nhap-capcha-img mt_15 d_flex cursor_p">
                                        <img src="<? echo base_url();?>assets/images/load_capcha.png" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <a href="trang-nhan-ma-otp.html">
                        <div class=" mr_t_40 btn_blue bg_green border_none account_log-in_btn"> Đăng ký </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div class="popup_menu hidden">
        <div class="popup_menu_overlay"></div>
        <div class="popup_menu_padding">
            <div class="popup_menu_padding_icon_menu">
                <div class="popup_menu_padding_icon_menu_img icon_menu2">
                    <img src="<? echo base_url(); ?>assets/images/img_du_an/menu2.png" alt="">
                </div>
                <div class="popup_menu_padding_icon_menu_text dong">Đóng</div>
            </div>
            <div class="popup_menu_padding_ul_li">
                <ul class="popup_menu_padding_ul">
                    <li class="li_menu bg_menu color_menu li_trangchu"><a class="" href="/">Trang chủ</a></li>
                    <li class="li_menu"><a href="">Cộng đồng</a></li>

                    <li class="li_menu li_menu_da">
                        <a href="danh-sach-du-an-noi-bat.html">Dự án</a>
                        <div class="img_right_20 click_mn_da">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/right_20.png" alt="">
                        </div>
                    </li>
                    <ul class="menu_c2_768 menu_c2_768_da hidden">
                        <li><a href="">Căn hộ</a></li>
                        <li><a href="">Nhà phố thương mại</a></li>
                        <li><a href="">Nhà biệt thự liền kề</a></li>
                        <li><a href="">Đất nền dự án</a></li>
                        <li><a href="">Mặt bằng văn phòng</a></li>
                        <li><a href="">Mặt bằng bán lẻ</a></li>
                        <li><a href="">Dự án khách sạn</a></li>
                    </ul>

                    <li class="li_menu li_mn_mb">
                        <a href="mua-ban-truoc-dang-nhap.html">Mua bán</a>
                        <div class="img_right_20 click_mn_muaban">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/right_20.png" alt="">
                        </div>
                    </li>
                    <ul class="menu_c2_768 menu_c2_768_mb hidden">
                        <li><a href="">Căn hộ</a></li>
                        <li><a href="">Nhà riêng</a></li>
                        <li><a href="">Nhà mặt phố</a></li>
                        <li><a href="">Nhà phố thương mại Shopause</a></li>
                        <li><a href="">Nhà biệt thự liền kề</a></li>
                        <li><a href="">Đất</a></li>
                        <li><a href="">Đất nền dự án</a></li>
                        <li><a href="">Bất động sản khác</a></li>
                    </ul>

                    <li class="li_menu li_mn_ct">
                        <a href="cho-thue-truoc-dang-nhap.html">Cho thuê</a>
                        <div class="img_right_20 click_mn_chothue">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/right_20.png" alt="">
                        </div>
                    </li>
                    <ul class="menu_c2_768 menu_c2_768_ct hidden">
                        <li><a href="">Căn hộ</a></li>
                        <li><a href="">Căn hộ dịch vụ</a></li>
                        <li><a href="">Nhà riêng</a></li>
                        <li><a href="">Nhà mặt phố</a></li>
                        <li><a href="">Nhà phố thương mại Shopause</a></li>
                        <li><a href="">Nhà biệt thự liền kề</a></li>
                        <li><a href="">Nhà trọ, phòng trọ</a></li>
                        <li><a href="">Văn phòng</a></li>
                        <li><a href="">Cửa hàng, mặt bằng bán lẻ</a></li>
                        <li><a href="">Đất, nhà xưởng, bãi kho</a></li>
                        <li><a href="">Đất bất động sản</a></li>
                    </ul>

                    <li class="li_menu li_mn_cg">
                        <a href="chuyen-gia-moi-gioi.html">Chuyên gia</a>
                        <div class="img_right_20 click_mn_chuyengia">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/right_20.png" alt="">
                        </div>
                    </li>
                    <ul class="menu_c2_768 menu_c2_768_cg hidden">
                        <li class="cl_tk"><a href="chuyen-gia-moi-gioi.html">Môi giới</a></li>
                        <li class="cl_tk"><a href="chuyen-gia-doanh-nghiep.html">Doanh nghiệp</a></li>
                    </ul>

                    <li class="li_menu li_mn_tk">
                        <a href="thiet-ke-nha-dep.html">Thiết kế đẹp</a>
                        <div class="img_right_20 click_mn_tk">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/right_20.png" alt="">
                        </div>
                    </li>
                    <ul class="menu_c2_768 menu_c2_768_tk hidden">
                        <li class="cl_tk"><a href="">Nhà đẹp</a></li>
                        <li class="cl_tk"><a href="">Phòng đẹp</a></li>
                    </ul>
                    <li class="li_menu"><a href="">Tin tức</a></li>
                    <li class="li_menu"><a href="">Tiện ích</a></li>
                    <li class="li_menu"><a href="">Hướng dẫn</a></li>
                </ul>
            </div>
            <div class="popup_menu_padding_button flex">
                <a href="trang-tai-khoan-dang-nhap.html">
                    <div class="popup_menu_padding_button_dn">Đăng nhập</div>
                </a>
                <a href="trang-tai-khoan-dang-ky.html">
                    <div class="popup_menu_padding_button_dk">Đăng ký</div>
                </a>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/select2.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_quang.js"></script>
<script>
    $(".select_option").select2({
        width: "100%",
    });
</script>

</html>
<style>
    .select2-container--default .select2-selection--single {
        border: none !important;
    }

    .select2-search .select2-search--dropdown {
        display: none !important;
    }

    .select2-selection__rendered {
        background: #FAFAFA;
    }

    /* active_single_header('logoxanh'); */
</style>