<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Trang đăng ký khách hàng cá nhân</title>
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
            <? require_once APPPATH.'views/site/includes/header_q.php'?>
        </header>
    </div>
    <div class="wrapper_all dangy_dangnhap">
        <div class="main_tt">
            <div class="account account_nhap d_flex flex_column">
                <div class="account_back d_flex" onclick="back_page()">
                    <div class="back_page cursor_p"><img src="<? echo base_url(); ?>assets/images/back.png" alt=""></div>
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
                                <input type="text" placeholder="Họ và tên *">
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
                            <div class="khung_input khung_input-right d_flex align_c">
                                <select name="" id="" class="size-14 select_option">
                                    <option selected disabled value="" class="">Địa chỉ chi tiết</option>
                                    <option value="">HTSKDDL</option>
                                </select>
                            </div>
                            <div class="aleftt_gender d_flex  space_b mr_t_16">
                                <div class="account_gender-text d_flex align_c font_s14">Giới tính:</div>
                                <div class=" d_flex align_c">
                                    <label><input name="radio" type="radio" checked class="color_yelow cursor_p "></input></label>
                                    <div class="account_log-in-Memorize-text font_s14 ml_10">Nam</div>
                                </div>
                                <div class=" d_flex align_c">
                                    <label><input name="radio" type="radio" checked class="color_yelow cursor_p "></input></label>
                                    <div class="account_log-in-Memorize-text font_s14 ml_10">Nữ</div>
                                </div>
                                <div class="d_flex align_c">
                                    <label><input name="radio" type="radio" checked class="color_yelow cursor_p"></input></label>
                                    <div class=" font_s14 ml_10">Khác</div>
                                </div>
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
                                        <img src="<? echo base_url(); ?>assets/images/load_capcha.png" alt="">
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