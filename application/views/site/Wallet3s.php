<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/select2.min.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_sb_hd_sdn.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_t_quang.css">
    <title>Ví 3s</title>
</head>

<body>
    <div class="position_r d_flex back_f7f8fc vi_3s">
        <div class="link_sidebar_quang">
            <? require_once APPPATH.'views/site/includes/sidebar.php'?>
        </div>
        <div class="wapper bg_blue_10 pd_tlr_8_24 flex_1 d_flex flex_column ql_dn">
            <? require_once APPPATH.'views/site/includes/header_sdn.php'?>
            <div class="pd_b_64 mb_pd">
                <div class="personals mt_24">
                    <div class="d_flex mt_16">
                        <div class="result_news flex_1">
                            <div class="max_h_260 pd_32_64 rs_bgIm bg_postionRight bg_sContain" style="background-image: url('<? echo base_url(); ?>assets/images/banner_vi3s.png');background-color: #E3E5E4;">
                                <div class="w_fc">
                                    <h2 class="font_s24 line_h28 font_w500 black_md">Số dư</h2>
                                    <span class="money block cl_blue font_w500 font_s30 w_fc line_h35 br_8 mt_16 pd_10_16 bg_blue_5">40.000 VNĐ</span>
                                    <div class="mt_32 d_flex align_c">
                                        <a href="/nap-tien-vao-vi.html" class="btn btn_bd_blue br_8 cl_blue font_s16 line_h19 font_w500 mn_w153 h_40 d_flex center_center mb_txt">Nạp tiền</a>
                                        <a href="/mua-dich-vu.html"><button class="btn btn_bd_blue br_8 cl_blue font_s16 line_h19 font_w500 mn_w153 h_40 d_flex center_center ml_24 mb_txt">Mua dịch vụ</button></a>
                                    </div>
                                </div>
                            </div>

                            <div class="select_controle d_flex flex_column mt_48">
                                <h2 class="font_s24 line_h28 font_w500 black_md">Danh sách giao dịch</h2>
                                <div class="br_8 d_flex align_c ml_cl24 br_l_0 mt_24">
                                    <div class="mn_w164 h_40">
                                        <select name="" id="" class="select_option">
                                            <option value="">Tất cả</option>
                                            <option value="">Tiền vào</option>
                                            <option value="">Tiền ra</option>
                                        </select>
                                    </div>

                                    <div class="mn_w293 h_40">
                                        <input type="date" placeholder="Từ ngày đăng tin" class="rs_input ipfzdf bd-grayc pd_11_16 w_100 h_100 br_8">
                                    </div>
                                    <div class="mn_w293 h_40">
                                        <input type="date" placeholder="Đến ngày hết hạn" class="rs_input ipfzdf bd-grayc pd_11_16 w_100 h_100 br_8">
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
                                                    <td><span>Nạp 50.000 VNĐ vào </span><span class="cl_blue">Ví 3S</span></td>
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
    <script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<? echo base_url();?>assets/js/select2.min.js"></script>
    <script src="<? echo base_url();?>assets/js/js_t.js"></script>
    <script>
        $(".select_option").select2({
            width: "100%",
        });

        $('#vi3s').addClass('color_click')
    </script>
</body>

</html>