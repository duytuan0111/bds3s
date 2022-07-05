<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đóng góp ý kiến</title>
    <link rel="stylesheet" href="<? echo base_url()?>assets/frontend/css/style.css">
    <link rel="stylesheet" href="<? echo base_url()?>assets/frontend/css/style_sb_hd_sdn.css">
    <link rel="stylesheet" href="<? echo base_url()?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" href="<? echo base_url()?>assets/frontend/css/css_q.css">

</head>

<body>
    <div class="body_lienhe">
        <div class="ds_lienhe flex">
            <div class="lienhe_khoi1 back_f7f8fc">
                <? require_once APPPATH.'views/site/includes/sidebar.php' ?>
            </div>
            <div class="lienhe_khoi2 back_f7f8fc pa_b_77 comments_sdn">
                <div class="lienhe_khoi2_header">
                    <? require_once APPPATH.'views/site/includes/header_sdn.php' ?>
                </div>
                <div class="contact_again_container">
                    <div class="dong_gop_y_kien d_flex mr_t_24">
                        <div class="dong_gop_y_kien-wrapper">
                            <div class="lienhe_tuvan_left dong_gop_y_kien-left">
                                <div class="dong_gop_y_kien-title">
                                    <p class="font_w500 font_s30 line_h35 color_white">Góp ý</p>
                                </div>
                                <div class="dong_gop_y_kien-text mr_t_68">
                                    <p class="font_s16 line_h26 color_white"><span class=" font_w500  main_color"> Batdongsan3S.vn</span> rất mong được sự đóng góp, phản hồi cũng như thông báo của quý khách để hoàn thiện website hơn nữa</p>
                                </div>
                            </div>
                            <div class="request_contact_right dong_gop_y_kien-right">
                                <div class="dangtin_mota_textarea textarea">
                                    <textarea name="tdn_mota" id="" cols="30" rows="5" placeholder="Nhập nội dung"></textarea>
                                </div>
                                <div class="d_flex align_c mr_t_32">
                                    <div class="khung_input_yeucau d_flex align_c w_50 m_r_24">
                                        <input type="text" placeholder="Nhập captcha *">
                                    </div>
                                    <div class="account_nhap-capcha mr_20">
                                        <p class="font_s20 line_h25 text_c color_grey">Bb74K0</p>
                                    </div>
                                    <div class="account_nhap-capcha-img request_contact_capcha d_flex">
                                        <img src="<? echo base_url(); ?>assets/images/load_capcha_xanh.png" alt="">
                                    </div>
                                </div>
                                <div class="request_contact_right-btn dongop__request_contact_right-btn border_r_8 d_flex align_c flex_center cursor_p  color_white mr_t_40" onclick="guigopy(this)">Gửi góp ý</div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="lienhe_khoi3">
            <? require_once APPPATH.'views/site/includes/da_footer.php' ?>
        </div>
        <div class="popup_canhbao popup_hien popup_hien_het hidden">
            <div class="overlay" id="close_overlay_canhbao"> </div>
            <div class="popup_warning_post-ykien d_flex flex_column flex_center align_c back_w border_r_8 box_shadow_10 z_index_1">
                <div class="popup_warning_post-img">
                    <img src="<? echo base_url(); ?>assets/images/hinhtron_tichxanh.png" alt="">
                </div>
                <div class="popup_warning_post-text text_c mr_t_24  ">
                    <p class="font_s14 line_h24 color_grey font_w500">Chúng tôi rất vui khi được nhận đóng góp ý kiến từ quý khách
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
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_quang.js"></script>
<script>
    $('#dong_gop_y_kien').addClass('color_click')
</script>
</html>