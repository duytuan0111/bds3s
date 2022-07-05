<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách liên hệ lại</title>
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style_sb_hd_sdn.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/css_q.css">

</head>

<body>
    <div class="body_lienhe">
        <div class="ds_lienhe flex">
            <div class="lienhe_khoi1 back_f7f8fc">
                <? require_once APPPATH.'views/site/includes/sidebar.php' ?>
            </div>
            <div class="lienhe_khoi2 lienhe_khoi2_danh_sach back_f7f8fc">
                <div class="lienhe_khoi2_header">
                    <? require_once APPPATH.'views/site/includes/header_sdn.php' ?>
                </div>
                <div class="contact_again_container">
                    <div class="contact_again-title mr_t_29">
                        <p class="color_grey font_w500 font_s18 line_h21">Danh sách yêu cầu liên hệ lại</p>
                    </div>
                    <div class="main-table position_r mr_t_24">
                        <table class="table_box">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên khách hàng</th>
                                    <th>Thông tin khách hàng</th>
                                    <th>Lời nhắn</th>
                                    <th>Tin đăng</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < 10; $i++) { ?>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="d_flex align_c">
                                                <a href="thong-tin-ca-nhan.html" class=" d_flex align_c cursor_p ">
                                                    <span class="ten_img">
                                                        <img src="<? echo base_url(); ?>assets/images/avt_lienhe.png" alt="">
                                                    </span>
                                                    <span class="lienhe_table_name font_s15 line_h24 color_grey ml_10 mr_r_22">Wade Warren</span>
                                                </a>
                                                <span class="lienhe_table-chat">
                                                    <img src="<? echo base_url(); ?>assets/images/chat_xanh.png" alt="">
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="lienhe_table-thongtin">
                                                <div class="lienhe_table-sdt font_s15 line_h24 color_grey">0123456789</div>
                                                <div class="lienhe_table-sdt font_s15 line_h24 color_grey mr_t_8">ABC123@gmail.com</div>
                                            </div>
                                        </td>
                                        <td> <span class="font_s15 line_h18 color_grey line_h24"> Anh bạn à! nhà đắt quá</td></span>
                                        <td>
                                            <div class="font_s15 line_h18 color_grey line_h24">ID: <a href="quan-ly-tin-dang-du-an.html" class="main_color cursor_p">0123456789</a></div>
                                            <div class="font_s15 line_h24 color_grey line_h24 mr_t_8">Hoàng Mai, Hà Nội</div>
                                        </td>
                                        <td>
                                            <div class="lienhe_table-trangthai d_flex">
                                                <span>
                                                    <div class="lienhe_table-trangthai-radio">
                                                        <input id="yes" type="radio" name="s"><label for="yes" class=""></label></br>
                                                    </div>
                                                </span>
                                                <span class="font_s15 line_h18 color_grey ml_10 line_h24">Chưa liên hệ</span>
                                            </div>
                                            <div class="lienhe_table-trangthai d_flex mr_t_8">
                                                <span>
                                                    <div class="lienhe_table-trangthai-radio">
                                                        <input id="no" type="radio" name="s"><label for="no" class=""></label>
                                                    </div>
                                                </span>
                                                <span class="font_s15 line_h18 color_grey ml_10 line_h24">Đã liên hệ</span>
                                            </div>
                                        </td>
                                    </tr>
                                <?php };
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="lease_phantrang mr_t_32 d_flex flex_end ">
                        <div class="pagination">
                            <a href="#" class="active"><img src="/images/arrow_l_back_white.png" alt=""></a>
                            <a class="active" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#" class="active"><img src="/images/arrow_r_back_white.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lienhe_khoi3">
            <? require_once APPPATH.'views/site/includes/da_footer.php' ?>
        </div>
    </div>
</body>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/js_duy.js"></script>
<script type="text/javascript" src="../js/js_quang.js"></script>
<script>
    $('#lienhelai').addClass('color_click')
</script>
</html>