
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Nhập email</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/css/style_header_d.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/css/css_q.css">
</head>

<body>
    <div class="link__header_register">
        <header class="position_r back_w">
            <? require_once APPPATH.'views/site/includes/header_q.php' ?>
        </header>
    </div>
    <div class="wrapper_all trang_dang_nhap">
        <div class="main_tt">
            <div class="account qmk_update_password d_flex flex_column gachduoi">
                <div class="account_back d_flex" onclick="back_page()">
                    <div class="back_page"><img src="<? echo base_url(); ?>assets/images/back.png" alt=""></div>
                    <p class="font-medium size-14">Quay lại</p>
                </div>
                <div class="account_log-in account_otp-beside insert_email_wrapper quen_mk_update w_100">
                    <div class="account_title font_s24 text_c color_green font_w_600">Đặt lại mật khẩu</div>
                    <div class="khung_input khung_input-email d_flex align_c mr_t_35 qmk_update_nhap">
                        <input type="password" placeholder="Nhập mật khẩu mới" id="pass_log_id" name="pass">
                        <div class="account_log_in-input-img icon_email toggle-password" toggle="#password-field">
                            <img src="<? echo base_url(); ?>assets/images/eye.png" alt="" class="m_r_18 toggle-password_dong">
                            <img src="<? echo base_url(); ?>assets/images/eye_gray.png" alt="" class="m_r_18 toggle-password_mo hidden">
                        </div>
                    </div>
                    <div class="khung_input khung_input-email d_flex align_c  qmk_update_nhap">
                        <input type="password" placeholder="Nhập lại mật khẩu mới" id="pass_log_id" name="pass">
                        <div class="account_log_in-input-img icon_password toggle-password" toggle="#password-field">
                            <img src="<? echo base_url(); ?>assets/images/eye.png" alt="" class="m_r_18 toggle-password_dong">
                            <img src="<? echo base_url(); ?>assets/images/eye_gray.png" alt="" class="m_r_18 toggle-password_mo hidden">
                        </div>
                    </div>
                    <div class="account_otp-btn btn_blue bg_green border_none account_log-in_btn line_h19 mr_t_32">Đổi mật khẩu </div>
                </div>
            </div>
            <div class="popup_password hidden">
                <div class="popup_password-close" id="close_update-mk"></div>
                <div class="account_wish qmk_update_prosper d_flex flex_column border_r_8">
                    <div class="account_wish-wrapper qmk_update_prosper-wrapper border_r_8">
                        <div class="account_wish-img qmk_update_prosper-img d_flex w_100 flex_center">
                            <img src="<? echo base_url(); ?>assets/images/hinhtron_tichxanh.png" alt="">
                        </div>
                        <div class="account_wish-title mr_t_21">
                            <p class="text_c font_w_500 color_grey font_s14">Cập nhật mật khẩu thành công!</p>
                        </div>
                        <div class="account_wish-btn d_flex flex_center mr_t_24">
                            <div class="account_wish-btn-a qmk_wish-btn-a bg_green d_flex flex_center align_c">
                                <a href="trang-dang-nhap.html" class="color_white font_s16 text_c"> Đăng nhập ngay </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_quang.js"></script>
<script>
</script>

</html>
<style>
</style>