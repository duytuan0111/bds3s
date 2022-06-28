
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Nhập email</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/frontend/css/css_q.css">
</head>

<body>
    <div class="link__header_register">
        <header class="position_r back_w">
            <? require_once APPPATH.'views/site/includes/header_q.php' ?>
        </header>
    </div>
    <div class="wrapper_all qmk_nhan_email trang_dang_nhap">
        <div class="main_tt">
            <div class="account insert_email d_flex flex_column gachduoi">
                <div class="account_back d_flex" onclick="back_page()">
                    <div class="back_page"><img src="<? echo base_url(); ?>assets/images/back.png" alt=""></div>
                    <p class="font-medium size-14">Quay lại</p>
                </div>
                <div class="account_log-in account_otp-beside insert_email_wrapper w_100">
                    <div class="account_title font_s24 text_c color_green font_w_600">Nhập Email</div>
                    <div class="font_s16 m_t_b_24 text_l font_w500 color_grey line_h19 mr_t_32">Vui lòng nhập Email <span class="color_red">*</span></div>
                    <div class="khung_input khung_input-email d_flex align_c">
                        <input type="text" placeholder="Nhập email">
                        <div class="account_log_in-input-img icon_email">
                            <img src="<? echo base_url(); ?>assets/images/email.png" alt="" class="m_r_18">
                        </div>
                    </div>
                    <a href="quen-mat-khau-nhan-otp.html" class="account_otp-btn btn_blue bg_green border_none account_log-in_btn line_h19 mr_t_32">Tiếp theo </a>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_quang.js"></script>

</html>