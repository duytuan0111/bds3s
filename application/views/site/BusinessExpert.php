<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/slick-theme.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/css/select2.min.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_d.css">
    <title>Chuyên gia doanh nghiệp</title>
</head>
<style>
</style>

<body>
    <div class="link_header">
        <? require_once APPPATH.'views/site/includes/da_header.php' ?>
    </div>
    <div id="duy_chuyengia_doanhnghiep">
        <div class="khungloc">
            <div class="div_boc div_boc_cgdn">
                <div class="khungloc_padding khungloc_padding_sc_768 flex ">
                    <div class="khungloc_select1 khungloc_select1_fig khungloc_select1_doanhnghiep">
                        <select name="" id="" class="select_option js-states form-control">
                            <option value="1">Toàn quốc</option>
                            <option value="2">Toàn quốc 1</option>
                            <option value="3">Toàn quốc 2</option>
                        </select>
                    </div>
                    <div class="khungloc_select1 khungloc_select1_fig khungloc_select1_doanhnghiep">
                        <select name="" id="" class="select_option js-states form-control">
                            <option value="">Quận huyện</option>
                            <option value="">Quận huyện</option>
                            <option value="">Quận huyện</option>
                        </select>
                    </div>
                    <div class="khungloc_select1 khungloc_select1_fig khungloc_select1_doanhnghiep">
                        <select name="" id="" class="select_option js-states form-control">
                            <option value="">Loại hình</option>
                            <option value="">Loại hình</option>
                            <option value="">Loại hình</option>
                        </select>
                    </div>
                    <div class="khungloc_select1 khungloc_select1_fig khungloc_select1_doanhnghiep">
                        <select name="" id="" class="select_option js-states form-control">
                            <option value="">Loại bất động sản</option>
                            <option value="">Loại bất động sản</option>
                            <option value="">Loại bất động sản</option>
                        </select>
                    </div>
                    <div class="khungloc_select1 khungloc_select1_fig khungloc_select1_doanhnghiep">
                        <select name="" id="" class="select_option js-states form-control">
                            <option value="">Lĩnh vực doanh nghiệp</option>
                            <option value="">Chủ đầu tư</option>
                            <option value="">Thi công xây dựng</option>
                            <option value="">Tư vấn thiết kế</option>
                            <option value="">Sàn giao dịch bất động sản</option>
                            <option value="">Trang trí nội thất</option>
                            <option value="">Vật liệu xây dựng</option>
                            <option value="">Các lĩnh vực khác</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="body_moigioi">
            <div class="body_moigioi_padding body_dn_padding_768">
                <div class="body_moigioi_padding_header mr_b24px">
                    <div class="body_moigioi_padding_header_tex body_moigioi_padding_header_tex_768 flex align_items mr_b24px">
                        <div class="body_moigioi_padding_header_tex_tt font_size_14">Trang chủ</div>
                        <div class="text_sub1_fig_icon mr_l_r2">
                            <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_right.png" alt="">
                        </div>
                        <div class="body_moigioi_padding_header_tex_moigioi font_size_14 main_color">Doanh nghiệp</div>
                    </div>
                    <div class="them_div_480_suv">
                        <div class="loc_480 flex align_items">
                            <div class="loc_480_1 flex align_items mr_r8px">
                                <div class="loc_480_1_img">
                                    <img src="<? echo base_url(); ?>assets/images/img_du_an/loc_20.png" alt="">
                                </div>
                                <div class="loc_480_1_text">Lọc +</div>
                            </div>
                            <div class="loc_480_2">
                                <select class="select_option js-states form-control">
                                    <option value="">Toàn quốc</option>
                                    <option value="">Hà Nội</option>
                                    <option value="">Đà Nẵng</option>
                                    <option value="">TP. Hồ Chí Minh</option>
                                    <option value="">Hải Phòng</option>
                                    <option value="">Bà Rịa Vũng Tàu</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="body_moigioi_padding_tex_to body_moigioi_padding_tex_to_dn text_color mr_b8px">
                        Danh sách doanh nghiệp uy tín
                    </div>
                    <div class="body_moigioi_padding_tex_con">
                        Có <span>1234</span> doanh nghiệp hoạt động bất động sản
                    </div>
                </div>

                <div class="body_moigioi_padding_duy flex ">
                    <div class="body_moigioi_padding_info body_moigioi_padding_info_dn mr_r24px">
                        <div class="body_moigioi_fig_padding body_moigioi_fig_padding_768">
                            <div class="body_moigioi_khung_one_noidung">
                                <?php for($i = 0; $i<10; $i++):?>
                                    <div class="body_moigioi_khung_one mr_b40px">
                                        <div class="div_border flex justify_content_sb">
                                            <div class="them1divsieuto flex">
                                                <a href="chi-tiet-doanh-nghiep.html">
                                                    <div class="body_moigioi_khung_one_img mr_r16px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/doanhnghiep1.png" alt="">
                                                    </div>
                                                </a>
                                                <div class="body_moigioi_khung_one_tex">
                                                    <a href="chi-tiet-doanh-nghiep.html">
                                                        <div class="body_moigioi_tex_name mr_b8px">Công ty CP Xây dựng WHAT
                                                    </a>
                                                    </div>
                                                    <div class="body_moigioi_tex_tindang mr_b8px">Thi công xây dựng:<span
                                                            class="main_color mr_l40px">52 </span>dự án
                                                    </div>
                                                    <div class="body_moigioi_tex_khuvuc font_size_16a color_text mr_b8px">
                                                        Khu vực
                                                        hoạt
                                                        động:<span class="font_size_16b mr_l8px">Hà Nội</span> </div>
                                                    <div class="body_moigioi_tex_loaihinh flex align_items mr_b8px">
                                                        <div
                                                            class="body_moigioi_tex_loaihinh_tex font_size_16a color_text mr_r7px">
                                                            Loại hình BĐS:
                                                        </div>
                                                        <div class="them_div_cho_man_357_1">
                                                            <div class="body_moigioi_loaihinh font_size_14 flex">
                                                                <div class="body_moigioi_loaihinh1 mr_r8px">Bán căn hộ</div>
                                                                <div class="body_moigioi_loaihinh1 mr_r8px">Bán đất</div>
                                                                <div class="body_moigioi_loaihinh1">Cho thuê căn hộ</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="body_moigioi_tex_xemchitiet flex align_items">
                                                        <div
                                                            class="body_moigioi_tex_xemchitiet_text font_size_16a main_color">
                                                            <a class="font_size_16a main_color"
                                                                href="chi-tiet-doanh-nghiep.html">Xem chi tiết</a>
                                                        </div>
                                                        <div class="img_fig_20">
                                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/tindang_xemthem.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="body_moigioi_khung_one_but">
                                                <div class="body_moigioi_khung_one_but_chat flex align_items mr_b16px">
                                                    <div class="img_fig_24 mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/chat_moigioi.png" alt="">
                                                    </div>
                                                    <div
                                                        class="body_moigioi_khung_one_but_chat_text font_size_16a main_color">
                                                        Chat
                                                        ngay</div>
                                                </div>
                                                <div class="body_moigioi_khung_one_but_theogioi flex align_items">
                                                    <div class="img_fig_24 mr_r8px">
                                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/flow_moigioi.png" alt="">
                                                    </div>
                                                    <div
                                                        class="body_moigioi_khung_one_but_flow_text font_size_16a while_color">
                                                        Theo
                                                        giõi</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border_b"></div>
                                    </div>
                                <?php endfor;?>
                                
                                
                            </div>

                            <div class="body_phantrang padding_unset mr_t32px">
                                <div class="body_phantrang_img body_phantrang_img_moigioi flex justify_fl_end">
                                    <div class="body_phantrang_img_left mr_r16px">
                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/phantrang_left.png" alt="">
                                    </div>
                                    <div class="body_phantrang_number flex">
                                        <div class="phantrang_number mr_r8px main_background while_color">1</div>
                                        <div class="phantrang_number mr_r8px">2</div>
                                        <div class="phantrang_number mr_r8px">3</div>
                                        <div class="phantrang_number">4</div>
                                    </div>
                                    <div class="body_phantrang_img_left mr_l16px">
                                        <img src="<? echo base_url(); ?>assets/images/img_du_an/phantrang_right.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="body_moigioi_padding_tintuc">
                        <div class="body_moigioi_tintuc mr_b27px">
                            <div class="body_moigioi_tintuc_text flex justify_content_sb mr_b16px">
                                <div class="body_moigioi_tintuc_text1">
                                    Dự án nổi bật
                                </div>
                                <div class="body_moigioi_tintuc_text_xemthem">
                                    <a href="" class="tintuc_text_xemthem flex">
                                        <p class="tt_xemthem font_size_16a main_color">Xem thêm</p>
                                        <div class="img_fig_20">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/tindang_xemthem.png" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="them_div_cho_man_375">
                                <div class="fig_678_flex mr_b62_768">
                                    <div class="body_moigioi_tintuc_img h345px mr_b16px">
                                        <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                        <div class="moigioi_view flex align_items">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/view2.png" alt="">
                                            <div class="moigioi_view_tex while_color mr_l8px">
                                                123
                                            </div>
                                        </div>
                                        <div class="moigioi_like">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/like.png" alt="">
                                        </div>
                                        <div class="mota_tt_moigioi">
                                            Đô Thị Sinh Thái Cafe Suối Xanh
                                        </div>
                                    </div>
                                    <div class="body_moigioi_tintuc_img h345px mr_b16px">
                                        <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/tintuc_moigioi.png" alt="">
                                        <div class="moigioi_view flex align_items">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/view2.png" alt="">
                                            <div class="moigioi_view_tex while_color mr_l8px">
                                                123
                                            </div>
                                        </div>
                                        <div class="moigioi_like">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/like.png" alt="">
                                        </div>
                                        <div class="mota_tt_moigioi">
                                            Đô Thị Sinh Thái Cafe Suối Xanh
                                        </div>
                                    </div>
                                    <div class="body_moigioi_tintuc_img h345px mr_b16px">
                                        <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/tintuc_moigioi.png" alt="">
                                        <div class="moigioi_view flex align_items">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/view2.png" alt="">
                                            <div class="moigioi_view_tex while_color mr_l8px">
                                                123
                                            </div>
                                        </div>
                                        <div class="moigioi_like">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/like.png" alt="">
                                        </div>
                                        <div class="mota_tt_moigioi">
                                            Đô Thị Sinh Thái Cafe Suối Xanh
                                        </div>
                                    </div>
                                    <div class="body_moigioi_tintuc_img h345px mr_b16px">
                                        <img class="" src="<? echo base_url(); ?>assets/images/img_du_an/tintuc_moigioi.png" alt="">
                                        <div class="moigioi_view flex align_items">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/view2.png" alt="">
                                            <div class="moigioi_view_tex while_color mr_l8px">
                                                123
                                            </div>
                                        </div>
                                        <div class="moigioi_like">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/like.png" alt="">
                                        </div>
                                        <div class="mota_tt_moigioi">
                                            Đô Thị Sinh Thái Cafe Suối Xanh
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="body_moigioi_tintuc body_moigioi_tintuc_dn">
                            <div class="body_moigioi_tintuc_text flex justify_content_sb mr_b16px">
                                <div class="body_moigioi_tintuc_text1">
                                    Dự án đăng gần đây
                                </div>
                                <div class="body_moigioi_tintuc_text_xemthem">
                                    <a href="" class="tintuc_text_xemthem flex">
                                        <p class="tt_xemthem font_size_16a main_color">Xem thêm</p>
                                        <div class="img_fig_20">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/tindang_xemthem.png" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="them_div_cho_man_375">
                                <div class="fig_678_flex mr_b84_768">
                                    <div class="body_moigioi_tintuc_img h345px mr_b16px">
                                        <img class="img_tt_moigioi" src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                        <div class="moigioi_view flex align_items">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/view2.png" alt="">
                                            <div class="moigioi_view_tex while_color mr_l8px">
                                                123
                                            </div>
                                        </div>
                                        <div class="moigioi_like">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/like.png" alt="">
                                        </div>
                                        <div class="mota_tt_moigioi">
                                            Đô Thị Sinh Thái Cafe Suối Xanh
                                        </div>
                                    </div>
                                    <div class="body_moigioi_tintuc_img h345px mr_b16px">
                                        <img class="img_tt_moigioi" src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                        <div class="moigioi_view flex align_items">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/view2.png" alt="">
                                            <div class="moigioi_view_tex while_color mr_l8px">
                                                123
                                            </div>
                                        </div>
                                        <div class="moigioi_like">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/like.png" alt="">
                                        </div>
                                        <div class="mota_tt_moigioi">
                                            Đô Thị Sinh Thái Cafe Suối Xanh
                                        </div>
                                    </div>
                                    <div class="body_moigioi_tintuc_img h345px mr_b16px">
                                        <img class="img_tt_moigioi" src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                        <div class="moigioi_view flex align_items">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/view2.png" alt="">
                                            <div class="moigioi_view_tex while_color mr_l8px">
                                                123
                                            </div>
                                        </div>
                                        <div class="moigioi_like">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/like.png" alt="">
                                        </div>
                                        <div class="mota_tt_moigioi">
                                            Đô Thị Sinh Thái Cafe Suối Xanh
                                        </div>
                                    </div>
                                    <div class="body_moigioi_tintuc_img h345px mr_b16px">
                                        <img class="img_tt_moigioi" src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
                                        <div class="moigioi_view flex align_items">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/view2.png" alt="">
                                            <div class="moigioi_view_tex while_color mr_l8px">
                                                123
                                            </div>
                                        </div>
                                        <div class="moigioi_like">
                                            <img src="<? echo base_url(); ?>assets/images/img_du_an/like.png" alt="">
                                        </div>
                                        <div class="mota_tt_moigioi">
                                            Đô Thị Sinh Thái Cafe Suối Xanh
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <? require_once APPPATH.'views/site/includes/da_footer.php'?>


    <!-- POPUP LỌC KẾT QUẢ MÀN 375 -->
<div class="popup_locketqua hidden">
    <div class="popup_locketqua_padding">
        <div class="popup_locketqua_heading flex align_items justify_content_sb">
            <div class="popup_locketqua_heading1">Lọc kết quả</div>
            <div class="popup_locketqua_heading2 close_popup_locketqua">Đóng</div>
        </div>
        <div class="popup_locketqua_content">
            <div class="popup_locketqua_content_select">
                <select class="select_option js-states form-control">
                    <option value="">Toàn quốc</option>
                    <option value="">Hà Nội</option>
                    <option value="">Đà Nẵng</option>
                    <option value="">TP. Hồ Chí Minh</option>
                    <option value="">Hải Phòng</option>
                    <option value="">Bà Rịa Vũng Tàu</option>
                </select>
            </div>
            <div class="popup_locketqua_content_select">
                <select class="select_option js-states form-control">
                    <option value="">Quận huyện</option>
                    <option value="">Tất cả</option>
                    <option value="">Quận Ba Đình</option>
                    <option value="">Quận Cầu Giấy</option>
                    <option value="">Quận Hoàng Mai</option>
                    <option value="">Quận Thanh Xuân</option>
                    <option value="">Quận Gia Lâm</option>
                </select>
            </div>
            <div class="popup_locketqua_content_select">
                <select class="select_option js-states form-control">
                    <option value="">Loại hình</option>
                    <option value="">Mua bán</option>
                    <option value="">Cho thuê</option>
                </select>
            </div>
            <div class="popup_locketqua_content_select">
                <select class="select_option js-states form-control">
                    <option value="">Loại bất động sản</option>
                    <option value="">Căn hộ</option>
                    <option value="">Nhà riêng</option>
                    <option value="">Nhà mặt phố</option>
                    <option value="">Nhà thương mại, shophouse</option>
                    <option value="">Nhà biệt thự, liền kề</option>
                    <option value="">Đất</option>
                    <option value="">Đất nền dự án</option>
                    <option value="">Bất đống sản khác</option>
                </select>
            </div>
            <div class="popup_locketqua_content_select">
                <select class="select_option js-states form-control">
                    <option value="">Lĩnh vực doanh nghiệp</option>
                    <option value="">Chủ đầu tư</option>
                    <option value="">Thi công xây dựng</option>
                    <option value="">Tư vấn thiết kế</option>
                    <option value="">Sàn giao dịch bất động sản</option>
                    <option value="">Trang trí nội thất</option>
                    <option value="">Vật liệu xây dựng</option>
                    <option value="">Các lĩnh vực khác</option>
                </select>
            </div>
            <button class="popup_locketqua_content_btn">Áp dụng</button>
        </div>
    </div>
</div>



</body>



<script>
active_single_header('chuyengia');
</script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/select2.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_duy.js"></script>
<script>
$(".select_option").select2({
    width: "100%",
});
</script>

</html>