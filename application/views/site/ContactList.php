<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style_sb_hd_sdn.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style_d_sdn.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style_header_d.css">
</head>

<body>
    <div class="body_lienhe">
        <div class="ds_lienhe flex">
            <div class="lienhe_khoi1">
                <? require_once APPPATH.'views/site/includes/sidebar.php' ?>
            </div>
            <div class="lienhe_khoi2">
                <div class="lienhe_khoi2_header">
                    <? require_once APPPATH.'views/site/includes/header_sdn.php' ?>
                </div>
                <div class="lienhe_khoi2_noidung">
                    <div class="lienhe_khoi2_noidung_heading fz18_5">Danh sách yêu cầu liên hệ lại</div>
                    <div class="lienhe_khoi2_noidung_content">
                        <div class="lienhe_khoi2_noidung_content_table">
                            <table>
                                <tr>
                                    <th class="th_lienhe1">STT</th>
                                    <th class="th_lienhe2">Tên người đăng</th>
                                    <th class="th_lienhe3">Tin đăng</th>
                                    <th class="th_lienhe4">Lời nhắn</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="div_lienhe_khung_img flex align_item_c">
                                            <div class="div_lienhe_img mr_r10px">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/user_lienhe.png" alt="">
                                            </div>
                                            <a href="thong-tin-ca-nhan.html" class="div_lienhe_text mr_r16px">Wade Warren</a>
                                            <div class="div_lienhe_chat currsor_p">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/chat_30.png" alt="">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="div_id_lienhe mr_b10px">ID: <span
                                                class="main_color">0123456789</span></div>
                                        <div class="div_diachi_lienhe">Hoàng Mai, Hà Nội</div>
                                    </td>
                                    <td>Anh bạn à! nhà đắt quá</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="div_lienhe_khung_img flex align_item_c">
                                            <div class="div_lienhe_img mr_r10px">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/user_lienhe.png" alt="">
                                            </div>
                                            <a href="thong-tin-ca-nhan.html" class="div_lienhe_text mr_r16px">Wade Warren</a>
                                            <div class="div_lienhe_chat currsor_p">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/chat_30.png" alt="">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="div_id_lienhe mr_b10px">ID: <span
                                                class="main_color">0123456789</span></div>
                                        <div class="div_diachi_lienhe">Hoàng Mai, Hà Nội</div>
                                    </td>
                                    <td>Anh bạn à! nhà đắt quá</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <div class="div_lienhe_khung_img flex align_item_c">
                                            <div class="div_lienhe_img mr_r10px">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/user_lienhe.png" alt="">
                                            </div>
                                            <a href="thong-tin-ca-nhan.html" class="div_lienhe_text mr_r16px">Wade Warren</a>
                                            <div class="div_lienhe_chat currsor_p">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/chat_30.png" alt="">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="div_id_lienhe mr_b10px">ID: <span
                                                class="main_color">0123456789</span></div>
                                        <div class="div_diachi_lienhe">Hoàng Mai, Hà Nội</div>
                                    </td>
                                    <td>Anh bạn à! nhà đắt quá</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <div class="div_lienhe_khung_img flex align_item_c">
                                            <div class="div_lienhe_img mr_r10px">
                                                <img src="<? echo base_url(); ?>assets/images/img_sdn/user_lienhe.png" alt="">
                                            </div>
                                            <a href="thong-tin-ca-nhan.html" class="div_lienhe_text mr_r16px">Wade Warren</a>
                                            <div class="div_lienhe_chat currsor_p">
                                                <img src="<? echo base_url(); ?>assets/images/img_du_an/chat_30.png" alt="">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="div_id_lienhe mr_b10px">ID: <span
                                                class="main_color">0123456789</span></div>
                                        <div class="div_diachi_lienhe">Hoàng Mai, Hà Nội</div>
                                    </td>
                                    <td>Anh bạn à! nhà đắt quá</td>
                                </tr>
                            </table>
                        </div>
                        <div class="body_phantrang padding_unset">
                            <div class="body_phantrang_img flex juss_tify_end">
                                <div class="body_phantrang_img_left mr_r16px">
                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/phantrang_left.png" alt="">
                                </div>
                                <div class="body_phantrang_number flex">
                                    <div class="phantrang_number mr_r8px main_bg while_color">1</div>
                                    <div class="phantrang_number mr_r8px">2</div>
                                    <div class="phantrang_number mr_r8px">3</div>
                                    <div class="phantrang_number mr_r8px">4</div>
                                </div>
                                <div class="body_phantrang_img_left mr_l16px">
                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/phantrang_right.png" alt="">
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
    </div>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_duy.js"></script>
</body>
</html>