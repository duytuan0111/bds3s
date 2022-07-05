<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_sb_hd_sdn.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/select2.min.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_t_quang.css">
    <title>Quản lý đội nhóm nhân viên</title>
</head>

<body>
    <div class="position_r d_flex back_f7f8fc">
        <div class="link_sidebar_quang" >
            <? require_once APPPATH.'views/site/includes/sidebar.php' ?>
        </div>
        <div class="wapper bg_blue_10 pd_tlr_8_24 flex_1 d_flex flex_column ql_gd">
            <? require_once APPPATH.'views/site/includes/header_sdn.php' ?>
            <div class="pd_b_96">
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

                <div class="personals mt_24">
                    <h2 class="font_s22 line_h26 font_w400 black_md">Danh sách tin đăng của <span class="font_w500">Floyd Miles</span></h2>
                    <div class="d_flex mt_16">
                        <div class="result_news flex_1">
                            <div class="select_controle d_flex flex_column">
                                <div class="d_flex align_c flex_start btnActive">
                                    <span class="bg_white pd_10_37 font_s16 line_h19 active_mn  cursor_p" onclick="activeChangeTable(this,'.btnActive','active_mn','.table_transaction','wallet','activeTableView')">Ví 3s</span>
                                    <span class="bg_white pd_10_37 font_s16 line_h19 font_w400  cursor_p" onclick="activeChangeTable(this,'.btnActive','active_mn','.table_transaction','point','activeTableView')">Điểm</span>
                                </div>
                                <div class="history_transaction_menu">
                                    <div class="bg_white br_8 d_flex align_c pd_16_24 ml_cl24 br_l_0 sl history_transaction_menu_1024">
                                        <div class="mn_w164 h_40">
                                            <select name="" id="" class="select_option">
                                                <option value="">Tất cả</option>
                                                <option value="">Tiền vào</option>
                                                <option value="">Tiền ra</option>
                                            </select>
                                        </div>

                                        <div class="mn_w294 h_40">
                                            <select name="" id="" class="select_option">
                                                <option value="">Loại giao dịch</option>
                                                <option value="">Nạp tiền</option>
                                                <option value="">Mua điểm</option>
                                                <option value="">Mua gói ghim tin</option>
                                                <option value="">Giao dịch đội nhóm</option>
                                            </select>
                                        </div>
                                        <!-- màn 768 -->
                                        <div class="hidden w_275 date_to h_40">
                                            <input type="date" class="rs_input ipfzdf bd-grayc pd_11_16 w_100 h_100 br_8">
                                        </div>
                                        <!--  -->

                                        <div class="mn_w293 h_40">
                                            <input type="date" placeholder="Từ ngày đăng tin" class="rs_input ipfzdf bd-grayc pd_11_16 w_100 h_100 br_8">
                                        </div>
                                        <div class="mn_w293 h_40">
                                            <input type="date" placeholder="Đến ngày hết hạn" class="rs_input ipfzdf bd-grayc pd_11_16 w_100 h_100 br_8">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="main_table_list_all position_r mt_24 table_person table_transaction fz15">
                                <!-- Ví 3s -->
                                <div class="box_main_table_list position_r wallet activeTableView">
                                    <table class="table" id="scroll_tb">
                                        <thead class="">
                                            <tr class="bg_blue_5 cl_ch_blue">
                                                <th class="stt">STT</th>
                                                <th>Thời gian</th>
                                                <th>Loại giao dịch</th>
                                                <th>Nội dung</th>
                                                <th>Biến động (VNĐ)</th>
                                                <th>Số dư (VNĐ)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 0; $i < 10; $i++) :
                                                $index = rand(0, 1) ?>
                                                <tr>
                                                    <td class="stt"><?= $i + 1 ?></td>
                                                    <td>
                                                        <span class="block">20:00 CH</span>
                                                        <span class="block mt_8">03/04/2021</span>
                                                    </td>
                                                    <td>Nạp tiền</td>
                                                    <td><span>Nạp 50.000 VNĐ vào <span class="cl_blue">Ví 3S</span></span></td>
                                                    <td class="<?= $index === 0 ? 'cl_green' : 'red_title' ?> "><?= $index === 0 ? '+ 50.000' : '- 50.000' ?></td>
                                                    <td>100.001</td>
                                                </tr>
                                            <?php endfor; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- // Ví 3s -->

                                <!-- Điểm -->
                                <div class="box_main_table_list position_r point">
                                    <table class="table" id="scroll_tb">
                                        <thead class="">
                                            <tr class="bg_blue_5 cl_ch_blue">
                                                <th class="stt">STT</th>
                                                <th>Thời gian</th>
                                                <th>Loại giao dịch</th>
                                                <th>Nội dung</th>
                                                <th>Biến động (Điểm)</th>
                                                <th>Số dư (Điểm)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 0; $i < 10; $i++) :
                                                $index = rand(0, 1) ?>
                                                <tr>
                                                    <td class="stt"><?= $i + 1 ?></td>
                                                    <td>
                                                        <span class="block">20:00 CH</span>
                                                        <span class="block mt_8">03/04/2021</span>
                                                    </td>
                                                    <td>Đẩy tin</td>
                                                    <td><span>Bạn đã hẹn lịch đẩy tin </span><span class="cl_blue">Nhà trọ giá rẻ</span> 6 lượt </td>
                                                    <td class="<?= $index === 0 ? 'cl_green' : 'red_title' ?> "><?= $index === 0 ? '+' . ' ' . ($i + 1 + rand(4, 20)) : '-' . ' ' . ($i + 1 + rand(4, 20)) ?></td>
                                                    <td>100</td>
                                                </tr>
                                            <?php endfor; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Điểm -->


                                <div class="no_members hidden" style="background-image: url('<? echo base_url(); ?>assets/images/white-empty-room 1.png');">
                                    <div class="d_flex align_c flex_end flex_column position_r h_100">
                                        <span class="font_s20 line_h23 font_w400 black_md">Bạn chưa có nhân viên, hãy tìm kiếm và thêm vào đội nhóm của mình họ.</span>
                                        <button class="mt_24 mn_w187 btn bd-gray br_8 bg_white font_s16 line_h19 font_w500 black_md bt_add">Thêm nhân viên</button>
                                    </div>
                                </div>
                                <!--// dành cho quản lý nhóm -->
                            </div>
                        </div>
                    </div>
                    <div class="pagination mt_32 d_flex flex_end">
                        <span class="active"><img src="/images/arrow_l_back_white.png" alt=""></span>
                        <span class="active">1</span>
                        <span>2</span>
                        <span>3</span>
                        <span>4</span>
                        <span class="active"><img src="/images/arrow_r_back_white.png" alt=""></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? require_once APPPATH.'views/site/includes/da_footer.php' ?>
    <script src="<? echo base_url()?>assets/js/js_t.js"></script>
    <script type="text/javascript" src="<? echo base_url()?>assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<? echo base_url()?>assets/js/select2.min.js"></script>
    <script>
        $(".select_option").select2({
            width: "100%",
        });
    </script>
</body>

</html>