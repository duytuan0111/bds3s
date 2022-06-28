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
    <title>Nạp tiền vào ví</title>
</head>

<body>
    <div class="position_r d_flex back_f7f8fc naptien_3s">
        <div class="link_sidebar_quang">
            <? require_once APPPATH.'views/site/includes/sidebar.php' ?>
        </div>
        <div class="wapper bg_blue_10 pd_tlr_8_24 flex_1 d_flex flex_column">
            <? require_once APPPATH.'views/site/includes/header_sdn.php' ?>
            <div class="pd_b_64 naptien_3s_container">
                <div class="recharge_money mt_24">
                    <h2 class="font_s24 line_h28 font_w500 black_md">Chọn số tiền thanh toán</h2>
                    <div class="row d_flex flex_w list_money">
                        <div class="bd_cl47 bg_white pd_20_46 br_8 col_t6 d_flex center_center hover_blue" onclick="activeMoney(this,'.list_money','active_money','others')">
                            <span class="font_s16 line_h19 font_w500 black_md w_spance_nrap">50.000 VNĐ</span>
                        </div>
                        <div class="bd_cl47 bg_white pd_20_46 br_8 col_t6 d_flex center_center hover_blue " onclick="activeMoney(this,'.list_money','active_money','others')">
                            <span class="font_s16 line_h19 font_w500 black_md w_spance_nrap">100.000 VNĐ</span>
                        </div>
                        <div class="bd_cl47 bg_white pd_20_46 br_8 col_t6 d_flex center_center hover_blue " onclick="activeMoney(this,'.list_money','active_money','others')">
                            <span class="font_s16 line_h19 font_w500 black_md w_spance_nrap">200.000 VNĐ</span>
                        </div>
                        <div class="bd_cl47 bg_white pd_20_46 br_8 col_t6 d_flex center_center hover_blue " onclick="activeMoney(this,'.list_money','active_money','others')">
                            <span class="font_s16 line_h19 font_w500 black_md w_spance_nrap">300.000 VNĐ</span>
                        </div>
                        <div class="bd_cl47 bg_white pd_20_46 br_8 col_t6 d_flex center_center hover_blue " onclick="activeMoney(this,'.list_money','active_money','others')">
                            <span class="font_s16 line_h19 font_w500 black_md w_spance_nrap">400.00VNĐ</span>
                        </div>
                        <div class="bd_cl47 bg_white pd_20_46 br_8 col_t6 d_flex center_center hover_blue " onclick="activeMoney(this,'.list_money','active_money','others')">
                            <span class="font_s16 line_h19 font_w500 black_md w_spance_nrap">500.000 VNĐ</span>
                        </div>
                        <div class="bd_cl47 bg_white pd_20_46 br_8 col_t6 d_flex center_center hover_blue " onclick="activeMoney(this,'.list_money','active_money','others')">
                            <span class="font_s16 line_h19 font_w500 black_md w_spance_nrap">1.000.000 VNĐ</span>
                        </div>
                        <div class="bd_cl47 bg_white pd_20_46 br_8 col_t6 d_flex center_center hover_blue " onclick="activeMoney(this,'.list_money','active_money','others')">
                            <span class="font_s16 line_h19 font_w500 black_md w_spance_nrap">2.000.000 VNĐ</span>
                        </div>
                        <div class="bd_cl47 bg_white pd_20_46 br_8 col_t6 d_flex center_center hover_blue " onclick="activeMoney(this,'.list_money','active_money','others')">
                            <span class="font_s16 line_h19 font_w500 black_md w_spance_nrap">5.000.000 VNĐ</span>
                        </div>

                        <div class="bd_cl47 bg_white pd_20_46 br_8 col_t6 d_flex center_center hover_blue others" onclick="activeMoney(this,'.list_money','active_money','others')">
                            <span class="font_s16 line_h19 font_w500 black_md w_spance_nrap">Số khác</span>
                        </div>

                        <div class="col_t6  bg_white bd_cl47 br_8 mn_w354 input_numbers">
                            <div class="d_flex align_c w_100 h_100 pd_lr_8">
                                <input type="text" name="" placeholder="Nhập số khác" class="rs_input flex_1 pd_l_8 font_s16 line_h19 black_md font_w400 h_50">
                                <div class="wh_24 cursor_p" onclick="showHiddenPopup('.hover_blue.others', 'active_money'); resertValue(this)">
                                    <img src="<? echo base_url(); ?>assets/images/x-circle_gray.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="payments mt_48">
                    <h2 class="font_s24 line_h28 font_w500 black_md">Chọn hình thức thanh toán</h2>
                    <div class="list_btn-money mt_24">
                        <button class="btn bd_cl47 btn_gray br_8 font_s16 line_h19 font_w500 black_md mn_w212 h_60 pd_8" onclick="activeChangeTable(this,'.list_btn-money','active_money','.transaction','clause_transfer','activeViewTransaction')">Chuyển khoản</button>
                        <button class="btn bd_cl47 btn_gray br_8 font_s16 line_h19 font_w500 black_md mn_w212 h_60 pd_8 ml_24" onclick="activeChangeTable(this,'.list_btn-money','active_money','.transaction','direct','activeViewTransaction')">Thanh toán tại văn phòng</button>
                    </div>
                    <div class="transaction bg_white br_8 mt_24 over_hd mn_h296">
                        <div class="clause_transfer">
                            <span class="header_top-money d_flex center_center btn_infor cl_white pd_8 font_s18 line_h20 font_w500">Bước 1: Chuyển tiền qua internet banking</span>
                            <div class="d_flex flex_column w_100 conten_bank">
                                <div class="infor_bank d_flex w_100">
                                    <div class="infor flex_1">
                                        <div class="d_flex space_b align_c">
                                            <h3 class="font_s16 line_h20 font_w500 payments_infor_stk">Thông tin tài khoản <span class="name_bank">BIDV</span></h3>
                                            <div class="img_bank">
                                                <img src="<? echo base_url(); ?>assets/images/bidv.png" alt="">
                                            </div>
                                        </div>
                                        <div class="mt_24">
                                            <div class="d_flex align_c">
                                                <span class="block mn_w125 font_s16 line_h20 font_w400 mr_14">Số tài khoản</span>
                                                <div class="d_flex align_c position_r">
                                                    <!-- <input type="text" value="21610000775434" readonly disabled class="rs_input bg_none font_s16 line_h20 font_w500 cl_blue mr_19 copy"> -->
                                                    <span class="block mn_w125 font_s16 line_h20 font_w500 cl_blue mr_19 copy">21610000775434</span>
                                                    <div class="wh_20 cursor_p copyied position_r">
                                                        <img src="<? echo base_url(); ?>assets/images/fi-rr-copy.png" alt="">
                                                        <!-- <span class="message_copytied">Copy thành công</span> -->
                                                    </div>

                                                    <div class="img_bank">
                                                        <img src="<? echo base_url(); ?>assets/images/bidv.png" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d_flex align_c">
                                                <span class="block mn_w125 font_s16 line_h20 font_w400 mr_14">Chủ tài khoản</span>
                                                <span class="block mn_w125 font_s16 line_h20 font_w500 cl_blue mr_19">TRƯƠNG VĂN TRẮC</span>
                                            </div>

                                            <div class="d_flex align_c">
                                                <span class="block mn_w125 font_s16 line_h20 font_w400 mr_14">Chi nhánh</span>
                                                <span class="block mn_w125 font_s16 line_h20 font_w500 cl_blue mr_19">Hoàng Mai, Hà Nội</span>
                                            </div>

                                            <div class="d_flex align_c">
                                                <span class="block mn_w125 font_s16 line_h20 font_w400 mr_14">ND chuyển khoản</span>
                                                <span class="block mn_w125 font_s16 line_h20 font_w500 cl_blue mr_19">[tên cá nhân hoặc công ty] su dung dich vu 3S</span>
                                            </div>

                                            <div class="d_flex align_c">
                                                <span class="block mn_w125 font_s16 line_h20 font_w400 mr_14">Ví dụ:</span>
                                                <span class="block mn_w125 font_s16 line_h20 font_w500 cl_blue mr_19">Tuan Anh Nguyeen su dung dich vu 3S</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="qrcode pd_r_76">
                                        <div class="wh_152">
                                            <img src="<? echo base_url(); ?>assets/images/qrcode _1.png" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="w_100 mt_48">
                                    <div class="row d_flex flex_w list_back">
                                        <?php
                                        $listBank = [
                                            [
                                                'src' => '<? echo base_url(); ?>assets/images/bidv.png',
                                            ],
                                            [
                                                'src' => '<? echo base_url(); ?>assets/images/Techcombank_1.png',
                                            ],
                                            [
                                                'src' => '<? echo base_url(); ?>assets/images/sacom_01.png',
                                            ],
                                            [
                                                'src' => '<? echo base_url(); ?>assets/images/Vietcombank_1.png',
                                            ],
                                            [
                                                'src' => '<? echo base_url(); ?>assets/images/ACB-Bank_1.png',
                                            ],
                                            [
                                                'src' => '<? echo base_url(); ?>assets/images/VIB-Bank_1.png',
                                            ],
                                            [
                                                'src' => '<? echo base_url(); ?>assets/images/sacom_01.png',
                                            ],
                                            [
                                                'src' => '<? echo base_url(); ?>assets/images/Vietcombank_1.png',
                                            ],
                                            [
                                                'src' => '<? echo base_url(); ?>assets/images/ACB-Bank_1.png',
                                            ],
                                            [
                                                'src' => '<? echo base_url(); ?>assets/images/VIB-Bank_1.png',
                                            ]
                                        ];
                                        foreach ($listBank as $key => $bank) :
                                        ?>
                                            <div class="col_5 bd-grayc br_8 d_flex center_center pd_5_16 cursor_p <?= $key == 0 ? 'this_bank' : '' ?>">
                                                <div class="">
                                                    <img src="<?= $bank['src'] ?>" alt="">
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            <sapn class="header_top-money d_flex center_center btn_infor cl_white pd_8 font_s18 line_h20 font_w500">Bước 2: Thông báo cho chuyên viên hỗ trợ hoặc HOTLINE 1900633682 nhấn phím 1</sapn>
                            <div class="pd_tb_48 d_flex center_center">
                                <div class="d_flex align_c mn_w250 bg_green_5 br_8 pd_11_24 drop_sh_5 cursor_p">
                                    <div class="wh_20 mr_10">
                                        <img src="<? echo base_url(); ?>assets/images/inbox_green_fill.png" alt="">
                                    </div>
                                    <span class="cl_green font_s16 line_h19 font_w500">thông báo trên Chatbox</span>
                                </div>

                                <div class="d_flex align_c mn_w250 bg_red_5 br_8 pd_11_24 drop_sh_5 ml_64 cursor_p">
                                    <div class="wh_20 mr_10">
                                        <img src="<? echo base_url(); ?>assets/images/call_red_fill.png" alt="">
                                    </div>
                                    <span class="cl_red font_s16 line_h19 font_w500">Thông báo trên Hotline</span>
                                </div>
                            </div>
                        </div>
                        <div class="direct">
                            <h2 class="font_s16 line_h19 font_w500 black_md">Địa điểm thực hiện giao dịch:</h2>
                            <span class="font_s14 font_w400 black_md line_h22 block mt_16 pd_b_24 bd-b-grayc4">Tầng 2, Số 1 đường Trần Nguyên Đán, KĐT Định Công, Hoàng Mai, Hà Nội</span>
                            <span class="font_s14 font_w400 black_md line_h22 block pd_t_24">Thời gian làm việc: 8h - 18h, từ thứ 2 đến thứ 7</span>
                            <div class="mt_32 d_flex center_center">
                                <div class="d_flex center_center mn_w250 bg_red_5 br_8 pd_11_24 drop_sh_5 cursor_p">
                                    <div class="wh_20 mr_10">
                                        <img src="<? echo base_url(); ?>assets/images/call_red_fill.png" alt="">
                                    </div>
                                    <span class="cl_red font_s16 line_h19 font_w500">Hotline</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? require_once APPPATH.'views/site/includes/da_footer.php' ?>
    <script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
    <script src="<? echo base_url();?>assets/js/js_t.js"></script>
    <script>
        function activeMoney(element, listBnt, classActive, classRemoveClick) {
            let elements = document.querySelector(listBnt);

            if (elements) {
                let children = [...elements.children];
                children.forEach(e => {
                    if (e.classList.contains(classActive)) {
                        e.classList.remove(classActive);
                    }
                })
                element.classList.add(classActive);
            }

        }
        document.querySelector('.copyied').onclick = function() {
            Copyied(document.querySelector('.copyied'), '.copy')
        }

        function resertValue(element) {
            if (element) {
                let inputElement = element.parentElement.querySelector('input');
                inputElement.value = null;
            }
        }
    </script>
</body>

</html>