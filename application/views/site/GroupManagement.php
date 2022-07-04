<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/select2.min.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_sb_hd_sdn.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_t_quang.css">
    <title>Quản lý đội nhóm nhân viên</title>
</head>

<body>
    <div id="popup_xoa_staff" class="popup hidden">
        <div class="main_popup w_343 bg_white pd_32_16">
            <div class="sroll_popup">
                <div class="content_poup flex_column d_flex align_c flex_center">
                    <div class="popup_img wh_70">
                        <img src="<? echo base_url(); ?>assets/images/delete _red.png" alt="">
                    </div>
                    <span class="font_s14 line_h16 font_w500 black_md mt_21 txt_center">Bạn chắc chắn muốn xóa nhân viên <span class="font_w500 block">Brooklyn Simmons?</span></span>
                    <div class="mt_24 d_flex align_c flex_center">
                        <button type="button" class="btn font_s16 line_h19 font_w500 btn_error cl_white mn_w120 br_8 h_40 mr_24">Đồng ý</button>
                        <button type="button" class="btn font_s16 line_h19 font_w500 btn_bd_blue blue_title mn_w120 br_8 h_40" onclick="showHiddenPopup('#popup_xoa_staff','hidden')">Quay lại</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- thêm nhân viên -->
    <div id="popup_add_staff" class="popup hidden">
        <div class="main_popup mn_w502 bg_white pd_lrb40_t24 popup_insent_staff">
            <div class="sroll_popup">
                <div class="header_popup d_flex align_c space_b">
                    <h2 class="font_s16 line_h19 font_w600 black_md">Thêm nhân viên</h2>
                    <span class="font_s14 line_h16 font_w500 black_md cursor_p" onclick="showHiddenPopup('#popup_add_staff','hidden')">Đóng</span>
                </div>
                <div class="content_poup mt_32">
                    <form action="" method="post">
                        <div class="d_flex align_c mt_21 bd_b_gr">
                            <div class="h_40 w_100">
                                <input type="text" placeholder="Nhập gmail hoặc số điện thoại" class="rs_input w_100 h_100 br_8 ipfzdf txtels" oninput="onInput(this,'.add_staff','disableBtn')">
                            </div>
                            <div class="cursor_p">
                                <button type="button" class="btn wh_34">
                                    <img src="<? echo base_url(); ?>assets/images/searching_blue.png" alt="" class="">
                                </button>
                            </div>
                        </div>

                        <span class="error font_s14 line_h16 font_w400 font_sitalic block mt_7">Tài khoản không tồn tại</span>

                        <div class="staff_result">
                            <div class="d_flex align_c">
                                <div class="staff_result_img wh_80 br_50p">
                                    <img src="<? echo base_url(); ?>assets/images/avatar_ts.png" alt="" class="br_50p">
                                </div>
                                <div class="staff_result_content pd_l_16 d_flex flex_column align_s">
                                    <span class="font_s16 line_h19 font_w400 black_md">Marvin McKinney</span>
                                    <span class="font_s16 line_h19 font_w400 black_md">Nguoila.seo0123@gmail.com</span>
                                    <span class="font_s16 line_h19 font_w400 black_md">0123456789</span>
                                </div>
                            </div>
                        </div>


                        <div class="mt_40 d_flex align_c ">
                            <button type="button" class="ql_group_btn-insert btn font_s16 line_h19 font_w500 btn_br_blue blue_title mn_w187 br_8 h_40 mr_24" onclick="showHiddenPopup('#popup_add_staff','hidden')">Hủy</button>
                            <button type="button" class="ql_group_btn-insert btn font_s16 line_h19 font_w500 btn_blue cl_white mn_w187 br_8 h_40 disableBtn add_staff" onclick="showHiddenPopup('#popup_add_sussess','hidden')">Thêm thành viên</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- tạo nhóm thành công, chuyển tiền thành công -->
    <div id="popup_add_sussess" class="popup hidden">
        <div class="main_popup w_343 bg_white pd_32_16">
            <div class="sroll_popup">
                <div class="content_poup flex_column d_flex align_c flex_center">
                    <div class="popup_img wh_70">
                        <img src="<? echo base_url(); ?>assets/images/hinhtron_tichxanh.png" alt="">
                    </div>
                    <span class="font_s14 line_h16 font_w500 black_md mt_21">Bạn đăng ký đội nhóm thành công</span>
                    <div class="mt_24 d_flex align_c flex_center">
                        <button type="button" class="btn font_s16 line_h19 font_w500 btn_blue cl_white mn_w150 br_8 h_40" onclick="showHiddenPopup('#popup_add_sussess','hidden'); location.reload();">Dùng ngay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tạo form tạo nhóm -->
    <div id="popup_add_group" class="popup hidden">
        <div class="main_popup mn_w650 bg_white pd_lrb40_t24">
            <div class="sroll_popup">
                <div class="header_popup">
                    <h2 class="font_s24 line_h28 font_w600 black_md">Đăng ký đội nhóm</h2>
                </div>
                <div class="content_poup mt_32">
                    <div>
                        <span class="font_s16 line_h24 font_w500 black_md">Giải pháp giúp bạn quản lý công ty, đội nhóm một cách hiệu quả</span>
                        <div class="d_flex align_s mt_18">
                            <div class="popup_img wh_20 mr_10">
                                <img src="<? echo base_url(); ?>assets/images/check-square_blue.png" alt="">
                            </div>
                            <span class="font_s16 line_h24 font_w400 black_md">Bạn có thể thêm, xóa nhân viên khỏi đội nhóm của mình</span>
                        </div>

                        <div class="d_flex align_s mt_16">
                            <div class="popup_img wh_20 mr_10">
                                <img src="<? echo base_url(); ?>assets/images/check-square_blue.png" alt="">
                            </div>
                            <span class="font_s16 line_h24 font_w400 black_md">Phân chia điểm, quản lý giao dịch và hiệu quả đăng tin của nhân viên cùng nhiều tính năng khác</span>
                        </div>
                    </div>

                    <div class="mt_37">
                        <form action="" method="post">
                            <div class="d_flex flex_column align_s">
                                <span class="font_s16 line_h20 font_w500 black_md">Tên đội nhóm <span class="cl_red">*</span></span>
                                <div class="h_40 w_100 mt_8">
                                    <input type="text" placeholder="Nhập tên hội nhóm" class="rs_input bd-gray1 w_100 h_100 br_8 pd_l_16">
                                </div>
                            </div>

                            <div class="mt_24">
                                <span class="font_s16 line_h19 font_w400 blue_title">Sử dụng thông tin đăng ký tài khoản</span>
                                <div class="d_flex flex_column align_s mt_13">
                                    <span class="font_s16 line_h20 font_w500 black_md">Số điện thoại<span class="cl_red">*</span></span>
                                    <div class="h_40 w_100 mt_8 ">
                                        <input type="text" placeholder="Nhập số điện thoại" class="rs_input bd-gray1 w_100 h_100 br_8 pd_l_16">
                                    </div>
                                </div>
                                <div class="d_flex flex_column align_s mt_21">
                                    <span class="font_s16 line_h20 font_w500 black_md">Gmail <span class="cl_red">*</span></span>
                                    <div class="h_40 w_100 mt_8">
                                        <input type="text" placeholder="Nhập gmail" class="rs_input bd-gray1 w_100 h_100 br_8 pd_l_16">
                                    </div>
                                </div>
                            </div>

                            <div class="mt_48 d_flex align_c flex_center">
                                <button type="button" class="btn font_s16 line_h19 font_w500 btn_br_blue blue_title mn_w187 br_8 h_40 mr_24" onclick="showHiddenPopup('#popup_add_group','hidden')">Hủy</button>
                                <button type="button" class="btn font_s16 line_h19 font_w500 btn_blue cl_white mn_w187 br_8 h_40" onclick="showHiddenPopup('#popup_add_sussess','hidden')">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- form quản lý tiền nhân viên -->
    <div id="popup_money_management" class="popup hidden">
        <div class="main_popup mn_w650 bg_white pd_lrb40_t24">
            <div class="sroll_popup">
                <div class="header_popup">
                    <h2 class="font_s24 line_h28 font_w600 black_md">Quản lý tiền nhân viên</h2>
                </div>
                <div class="content_poup mt_35">
                    <div>
                        <span class="font_s18 line_h21 font_w600 black_md">Thông tin tài khoản nhân viên</span>
                        <div class="information bg_white br_8 d_flex pd_24 mt_14 drop_context">
                            <div class="information_img wh_80">
                                <img src="<? echo base_url(); ?>assets/images/avatar_md.png" alt="">
                            </div>
                            <div class="information_personal pd_l_16">
                                <span class="font_s20 line_h23 font_w500 black_md block">Marvin McKinney</span>
                                <span class="font_s16 line_h19 font_w400 black_md block mt_8">ABC123@gmail.com</span>
                                <span class="font_s16 line_h19 font_w400 black_md block mt_8">0123456789</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt_34">
                        <span class="font_s18 line_h21 font_w600 black_md">Thông tin</span>
                        <div class="list_btn mt_16 d_flex align_c">
                            <button type="button" class="btn font_s16 line_h19 font_w500 bd-gray1 btn_blue cl_white mn_w123 br_8 h_40 mr_16">Chuyển tiền</button>
                            <button type="button" class="btn font_s16 line_h19 font_w500 bd-gray1 color_gray mn_w123 br_8 h_40">Thu hồi tiền</button>
                        </div>
                    </div>

                    <div class="mt_24">
                        <span class="font_s16 line_h19 font_w400 black_md">Nhập số tiền bạn muốn chuyển sang tài khoản nhân viên</span>
                        <form action="" method="post">
                            <div class="mt_32 d_flex align_s">
                                <div class="d_flex flex_column flex_1">
                                    <span class="font_s16 line_h19 font_w500 black_md">Số dư tài khoản hiện tại</span>
                                    <span class="block font_s16 line_h19 font_w400 black_md mt_16">15.600 VNĐ</span>
                                </div>
                                <div class="d_flex flex_column align_s w_338">
                                    <span class="font_s16 line_h19 font_w500 black_md">Số tiền muốn chuyển</span>
                                    <div class="d_flex align_c w_100 bd_b_gr">
                                        <div class="h_40 w_100 mt_8 flex_1 pd_r_5 money_ip">
                                            <input type="text" placeholder="Nhập số điện thoại" class="rs_input w_100 h_100 br_8">
                                        </div>
                                        <span class="font_s16 line_h19 font_w400 black_md">VNĐ</span>
                                    </div>
                                </div>
                            </div>
                            <span class="error font_s14 line_h16 font_w400 font_sitalic block mt_7">Giá trị nhập vào không hợp lệ</span>

                            <div class="mt_48 d_flex align_c flex_center">
                                <button type="button" class="btn font_s16 line_h19 font_w500 btn_br_blue blue_title mn_w187 br_8 h_40 mr_24" onclick="showHiddenPopup('#popup_money_management','hidden')">Hủy</button>
                                <button type="button" class="btn font_s16 line_h19 font_w500 btn_blue cl_white mn_w187 br_8 h_40" onclick="showHiddenPopup('#popup_add_sussess','hidden')">Thực hiện</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="position_r d_flex back_f7f8fc ql_tien_nv">
        <div class="link_sidebar_quang">
            <? require_once APPPATH.'views/site/includes/sidebar.php' ?>
        </div>
        <div class="wapper bg_blue_10 pd_tlr_8_24 flex_1 d_flex flex_column ql_dn">
            <? require_once APPPATH.'views/site/includes/header_sdn.php' ?>
            <div class="no_members mt_23 flex_1 hidden" style="background-image: url('<? echo base_url(); ?>assets/images/white-empty-room 1.png');">
                <div class="d_flex align_c flex_end flex_column position_r h_100">
                    <span class="font_s20 line_h23 font_w400 black_md">Bạn chưa có nhân viên, hãy tìm kiếm và thêm vào đội nhóm của mình họ.</span>
                    <button class="mt_24 mn_w187 btn bd-gray br_8 bg_white font_s16 line_h19 font_w500 black_md bt_add" onclick="viewAndClosePopup('#popup_add_group', '#popup_add_group .main_popup')">Đăng ký</button>
                </div>
            </div>
            <div class="pd_b_96 ql_nhom_nv_tong">
                <div class="information bg_white br_8 d_flex pd_40 mt_24">
                    <div class="information_img">
                        <img src="<? echo base_url(); ?>assets/images/avatar_md.png" alt="">
                    </div>
                    <div class="information_personal pd_l_24">
                        <h2 class="font_s36 line_h50 font_w500 black_md">Công ty TNHH ABC</h2>
                        <div class="mt_8">
                            <div>
                                <span>Quản lý:</span>
                                <span>Jacob Jones</span>
                            </div>
                            <div>
                                <span>Số lượng thành viên:</span>
                                <span>45</span>
                            </div>
                            <div>
                                <span>Email:</span>
                                <span>ABC123@gmail.com</span>
                            </div>
                            <div>
                                <span>Số điện thoại:</span>
                                <span>0123456789</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="personals mt_40">
                    <div class="d_flex align_c personals_search space_b">
                        <div class="d_flex align_c personals_searching">
                            <div class="bd-grayc br_8 d_flex align_c mn_w506 space_b search_ip">
                                <input type="text" name="search" placeholder="Tìm kiếm tên, số điện thoại, email nhân viên">
                                <button class="btn">
                                    <img src="<? echo base_url(); ?>assets/images/search_blue.png" alt="">
                                </button>
                            </div>
                            <div class="w_188_h40 ql_nhom_status_select">
                                <select name="" id="" class="select_option">
                                    <option value="">Trạng thái</option>
                                    <option value="">Hoạt động</option>
                                    <option value="">Chưa xác nhận</option>
                                </select>
                            </div>
                        </div>
                        <!-- dành cho quản lý nhóm -->
                        <div class="h_40 ql_nhom_status_menu">
                            <div class="ql_nhom_status_select_375">
                                <select name="" id="" class="select_option">
                                    <option value="">Trạng thái</option>
                                    <option value="">Hoạt động</option>
                                    <option value="">Chưa xác nhận</option>
                                </select>
                            </div>
                            <button class="btn br_8 d_flex align_c btn_blue mn_w180 pd_lr_19 h_40" onclick="viewAndClosePopup('#popup_add_staff', '#popup_add_staff .main_popup')">
                                <div class="mr_8 d_flex align_c">
                                    <img src="<? echo base_url(); ?>assets/images/plus_white.png" alt="">
                                </div>
                                <span class="cl_white">Thêm nhân viên</span>
                            </button>
                        </div>
                    </div>

                    <div class="main_table_list_all position_r mt_24 table_person">
                        <!-- Bảng dành cho nhân viên -->
                        <div class="box_main_table_list position_r staff hidden">
                            <table class="table" id="scroll_tb">
                                <thead class="">
                                    <tr class="bg_blue_5 cl_ch_blue">
                                        <th class="stt">STT</th>
                                        <th>Nhân viên</th>
                                        <th>Thông tin</th>
                                        <th>Số điểm</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
                                        <tr>
                                            <td class="stt"><?= $i + 1 ?></td>
                                            <td>Brooklyn Simmons</td>
                                            <td class="d_flex align_s flex_column cl_t_8">
                                                <span>michael.mitc@example.com</span>
                                                <span>0123456789</span>
                                            </td>
                                            <td>05</td>
                                            <td>
                                                <span class="<?= $i % 2 == 0 ? 'cl_green' : 'cl_oran' ?>"><?= $i % 2 == 0 ? 'Hoạt động' : 'Chưa xác nhận' ?></span>
                                            </td>
                                        </tr>
                                    <?php endfor; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- // bảng dành cho nhân viên -->

                        <!-- dành cho quản lý nhóm -->
                        <div class="box_main_table_list position_r manage ">
                            <table class="table" id="scroll_tb">
                                <thead class="">
                                    <tr class="bg_blue_5 cl_ch_blue">
                                        <th class="stt">STT</th>
                                        <th>Nhân viên</th>
                                        <th>Số tiền (VNĐ)</th>
                                        <th>Thông tin</th>
                                        <th>Quản lý</th>
                                        <th>Số điểm</th>
                                        <th>Trạng thái</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
                                        <tr>
                                            <td class="stt"><?= $i + 1 ?></td>
                                            <td>Brooklyn Simmons</td>
                                            <td>
                                                <span class="block">50000</span>
                                                <div class="d_flex align_c mt_10 cursor_p" onclick="viewAndClosePopup ('#popup_money_management','#popup_money_management > .main_popup')">
                                                    <div class="d_flex align_c wh_20 mr_8">
                                                        <img src="<? echo base_url(); ?>assets/images/repeat_blue.png" alt="">
                                                    </div>
                                                    <span class="font_s16 line_h20 font_w400 cl_blue">Chuyển</span>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="block">michael.mitc@example.com</span>
                                                <span class="block mt_8">0123456789</span>
                                            </td>
                                            <td>
                                                <div class="d_flex align_c cursor_p">
                                                    <a href="/quan-ly-danh-sach-dang.html" class="d_flex align_c cursor_p">
                                                        <div class="d_flex align_c wh_20 mr_8">
                                                            <img src="<? echo base_url(); ?>assets/images/monitor_blue.png" alt="">
                                                        </div>
                                                        <span class="font_s16 line_h20 font_w400 cl_blue">Quản lý tin đăng</span>
                                                    </a>
                                                </div>
                                                <div class="d_flex align_c mt_16 cursor_p">
                                                    <a href="/quan-ly-lich-su-giao-dich.html" class="d_flex align_c cursor_p">
                                                        <div class="d_flex align_c wh_20 mr_8">
                                                            <img src="<? echo base_url(); ?>assets/images/external-link_blue.png" alt="">
                                                        </div>
                                                        <span class="font_s16 line_h20 font_w400 cl_blue">Quản lý giao dịch</span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>05</td>
                                            <td>
                                                <span class="<?= $i % 2 == 0 ? 'cl_green' : 'cl_oran' ?>"><?= $i % 2 == 0 ? 'Hoạt động' : 'Chưa xác nhận' ?></span>
                                            </td>
                                            <td>
                                                <div class="wh_20 d_flex align_c cursor_p" onclick="showHiddenPopup('#popup_xoa_staff', 'hidden')">
                                                    <img src="<? echo base_url(); ?>assets/images/trash_red.png" alt="">
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endfor; ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="no_members hidden" style="background-image: url('<? echo base_url(); ?>assets/images/white-empty-room 1.png');">
                            <div class="d_flex align_c flex_end flex_column position_r h_100">
                                <span class="font_s20 line_h23 font_w400 black_md">Bạn chưa có nhân viên, hãy tìm kiếm và thêm vào đội nhóm của mình họ.</span>
                                <button class="mt_24 mn_w187 btn bd-gray br_8 bg_white font_s16 line_h19 font_w500 black_md bt_add">Thêm nhân viên</button>
                            </div>
                        </div>
                        <!--// dành cho quản lý nhóm -->
                    </div>

                    <div class="pagination mt_32 d_flex flex_end">
                        <span class="active"><img src="<? echo base_url(); ?>assets/images/arrow_l_back_white.png" alt=""></span>
                        <span class="active">1</span>
                        <span>2</span>
                        <span>3</span>
                        <span>4</span>
                        <span class="active"><img src="<? echo base_url(); ?>assets/images/arrow_r_back_white.png" alt=""></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? require_once APPPATH.'views/site/includes/da_footer.php' ?>
    <script src="<? echo base_url();?>assets/js/js_t.js"></script>
    <script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<? echo base_url();?>assets/js/select2.min.js"></script>
    <script type="text/javascript" src="<? echo base_url();?>assets/js/slick.min.js"></script>
    <script>
        $(".select_option").select2({
            width: "100%"
        });
        $('#qldoinhom').addClass('color_click')
        //     $('[data-toggle="select2"]').each(function(){
        //   var placeholder = $(this).attr('data-placeholder')
        //   placeholder = (placeholder === undefined) ? '' : placeholder;

        //   $(this).select2({
        //     theme: "bootstrap4",
        //     placeholder: placeholder,
        //     width: 'auto',
        //     inheritClass: true
        //   });
        // });

        // sizeTB('#scroll_tb tbody tr', '.result_table span', 3);
        // sizeTB('#scroll_tb tbody tr', '#scroll_tb thead tr th', 5);

        // window.onresize = function() {
        //     sizeTB('#scroll_tb tbody tr', '.result_table span', 3);
        //     sizeTB('#scroll_tb tbody tr', '#scroll_tb thead tr th', 5);
        //     sizeTB('#scroll_tb', '.result_table', 1, false);
        //     sizeTB('#scroll_tb', '#scroll_tb thead', 1, false);
        // }
    </script>
</body>

</html>