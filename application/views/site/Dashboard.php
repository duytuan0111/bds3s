<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tổng Quan</title>
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_sb_hd_sdn.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_d_sdn.css">
    <script type="text/javascript" src="<? echo base_url();?>assets/js/circliful.js"></script>
    <script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
    <script src="https://www.chartjs.org/samples/latest/utils.js"></script>


</head>

<body>

    <div id="body_tong">
        <div class="khoi_tong flex">
            <div class="khoi1">
                <? require_once APPPATH.'views/site/includes/sidebar.php' ?>
            </div>
            <div class="khoi2">
                <div class=" mr_b24px">
                    <? require_once APPPATH.'views/site/includes/header_sdn.php' ?>
                </div>
                <div class="khoi_noidung">
                    <div class="khoi_noidung_div flex">
                        <div class="khoi_noidung_left mr_r24px">
                            <div class="khoi_noidung_block1 flex mr_b24px">
                                <div class="khoi_noidung_box mr_r24px">
                                    <div class="khoi_noidung_box_div1 flex align_item_c mr_b30px">
                                        <div class="khoi_noidung_box_img mr_r8px">
                                            <img src="<? echo base_url(); ?>assets/images/img_sdn/tintuc.svg" alt="">
                                        </div>
                                        <div class="khoi_noidung_box_tex fz18_5">
                                            Tin dự án
                                        </div>
                                    </div>
                                    <div class="khoi_noidung_box_div2 flex jus_sb align_item_c">
                                        <div class="khoi_noidung_box_div2_sub">
                                            <div class="khoi_noidung_box_div2_sub1 flex mr_b10px">
                                                <div class="box_div2_sub_tex">Còn hạn</div>
                                                <div class="box_div2_sub_num main_clolor">10</div>
                                            </div>
                                            <div class="khoi_noidung_box_div2_sub1 flex mr_b8px">
                                                <div class="box_div2_sub_tex">Tin nháp</div>
                                                <div class="box_div2_sub_num color_money">2</div>
                                            </div>
                                            <div class="khoi_noidung_box_div2_sub1 flex">
                                                <div class="box_div2_sub_tex">Tin chờ</div>
                                                <div class="box_div2_sub_num color_success">0</div>
                                            </div>
                                        </div>
                                        <div class="khoi_noidung_box_div2_chart">
                                            <li class="it_jb_bt chart col_3 d_flex flex_column align_c">
                                                <div id="circle_sale">
                                                    <div class="text_chart" id="data_sale" data-tb="0">1.230</div>
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                                <div class="khoi_noidung_box mr_r24px">
                                    <div class="khoi_noidung_box_div1 flex align_item_c mr_b30px">
                                        <div class="khoi_noidung_box_img mr_r8px">
                                            <img src="<? echo base_url(); ?>assets/images/img_sdn/tinmua.svg" alt="">
                                        </div>
                                        <div class="khoi_noidung_box_tex fz18_5">
                                          Tin mua bán
                                        </div>
                                    </div>
                                    <div class="khoi_noidung_box_div2 flex jus_sb align_item_c">
                                        <div class="khoi_noidung_box_div2_sub">
                                            <div class="khoi_noidung_box_div2_sub1 flex mr_b10px">
                                                <div class="box_div2_sub_tex">Còn hạn</div>
                                                <div class="box_div2_sub_num main_clolor">10</div>
                                            </div>
                                            <div class="khoi_noidung_box_div2_sub1 flex mr_b8px">
                                                <div class="box_div2_sub_tex">Hết hạn</div>
                                                <div class="box_div2_sub_num color_money color_errror">1</div>
                                            </div>
                                            <div class="khoi_noidung_box_div2_sub1 flex mr_b8px">
                                                <div class="box_div2_sub_tex">Tin nháp</div>
                                                <div class="box_div2_sub_num color_money">1</div>
                                            </div>
                                            <div class="khoi_noidung_box_div2_sub1 flex">
                                                <div class="box_div2_sub_tex">Tin chờ</div>
                                                <div class="box_div2_sub_num color_success">1</div>
                                            </div>
                                        </div>
                                        <div class="khoi_noidung_box_div2_chart">
                                            <li class="it_jb_bt chart col_3 d_flex flex_column align_c">
                                                <div id="circle_rent">
                                                    <div class="text_chart" id="data_sale" data-tb="0">1.230</div>
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                                <div class="khoi_noidung_box">
                                    <div class="khoi_noidung_box_div1 flex align_item_c mr_b30px">
                                        <div class="khoi_noidung_box_img mr_r8px">
                                            <img src="<? echo base_url(); ?>assets/images/img_sdn/tinthue.svg" alt="">
                                        </div>
                                        <div class="khoi_noidung_box_tex fz18_5">
                                          Tin cho thuê
                                        </div>
                                    </div>
                                    <div class="khoi_noidung_box_div2 flex jus_sb align_item_c">
                                        <div class="khoi_noidung_box_div2_sub">
                                            <div class="khoi_noidung_box_div2_sub1 flex mr_b10px">
                                                <div class="box_div2_sub_tex">Còn hạn</div>
                                                <div class="box_div2_sub_num main_clolor">10</div>
                                            </div>
                                            <div class="khoi_noidung_box_div2_sub1 flex mr_b8px">
                                                <div class="box_div2_sub_tex">Hết hạn</div>
                                                <div class="box_div2_sub_num color_errror">2</div>
                                            </div>
                                            <div class="khoi_noidung_box_div2_sub1 flex mr_b8px">
                                                <div class="box_div2_sub_tex">Tin nháp</div>
                                                <div class="box_div2_sub_num color_money">2</div>
                                            </div>
                                            <div class="khoi_noidung_box_div2_sub1 flex">
                                                <div class="box_div2_sub_tex">Tin chờ</div>
                                                <div class="box_div2_sub_num color_success">0</div>
                                            </div>
                                        </div>
                                        <div class="khoi_noidung_box_div2_chart">
                                            <li class="it_jb_bt chart col_3 d_flex flex_column align_c">
                                                <div id="circle_project">
                                                    <div class="text_chart" id="data_sale" data-tb="0">1.230</div>
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="khoi_noidung_block2 mr_b24px">
                              <div class="khoi_noidung_block2_padding flex">
                                <div class="khoi_noidung_block2_padding_tex">
                                  <div class="khoi_noidung_block2_padding_tex_hd fz18_5 mr_b40px">Biến động số dư Ví 3S trong tuần </div>
                                  <div class="khoi_noidung_block2_padding_tex_sub flex">
                                    <div class="khoi_noidung_block2_padding_tex_sub1 mr_r31px">
                                      <div class="khoi_noidung_block2_padding_tex_sub1_tex mr_b8px">Tiền vào</div>
                                      <div class="khoi_noidung_block2_padding_tex_sub1_img flex">
                                        <div class="khoi_noidung_block2_padding_vi3s fz16_5">20.000.000</div>
                                        <div class="khoi_noidung_block2_padding_vi3s_img">
                                          <img src="<? echo base_url(); ?>assets/images/img_sdn/tienvao.svg" alt="">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="khoi_noidung_block2_padding_tex_sub1">
                                      <div class="khoi_noidung_block2_padding_tex_sub1_tex mr_b8px">Tiền ra</div>
                                      <div class="khoi_noidung_block2_padding_tex_sub1_img flex">
                                        <div class="khoi_noidung_block2_padding_vi3s fz16_5">20.000</div>
                                        <div class="khoi_noidung_block2_padding_vi3s_img">
                                          <img src="<? echo base_url(); ?>assets/images/img_sdn/tienra.svg" alt="">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="khoi_noidung_block2_padding_chart">
                                  <canvas id="canvas"></canvas>
                                </div>
                              </div>
                            </div>


                            <div class="khoi_noidung_block3">
                              <div class="khoi_noidung_block3_padding">
                                <div class="khoi_noidung_block3_padding_div1 flex jus_sb align_item_c">
                                  <div class="khoi_noidung_block3_padding_hd fz18_5">Danh sách giao dịch</div>
                                  <a href="#" class="khoi_noidung_block3_padding_xemthem fz_14_4 main_clolor text_dc">Xem thêm</a>
                                </div>
                                <div class="khoi_noidung_block3_padding_div2">
                                  <table>
                                    <tr>
                                      <th>STT</th>
                                      <th>Thời gian</th>
                                      <th>Loại giao dịch</th>
                                      <th>Giá trị (VNĐ)</th>
                                      <th>Số dư (VNĐ)</th>
                                    </tr>
                                    <tr>
                                      <td>1</td>
                                      <td>20:00 CH  03/04/2021</td>
                                      <td>Nạp tiền</td>
                                      <td class="color_success">+ 50.000</td>
                                      <td>100.001</td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td>20:00 CH  03/04/2021</td>
                                      <td>Mua điểm</td>
                                      <td class="color_errror">- 50.000</td>
                                      <td>100.001</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>20:00 CH  03/04/2021</td>
                                      <td>Mua gói ghim tin</td>
                                      <td class="color_errror">- 50.000</td>
                                      <td>100.001</td>
                                    </tr>
                                    <tr>
                                      <td>4</td>
                                      <td>20:00 CH  03/04/2021</td>
                                      <td>Giao dịch đội nhóm</td>
                                      <td class="color_success">+ 50.000</td>
                                      <td>100.001</td>
                                    </tr>
                                    <tr>
                                      <td>5</td>
                                      <td>20:00 CH  03/04/2021</td>
                                      <td>Giao dịch đội nhóm</td>
                                      <td class="color_errror">- 50.000</td>
                                      <td>100.001</td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>

                        </div>

                        <div class="khoi_noidung_right">
                          <div class="khoi_noidung_right_block1 mr_b24px">
                            <div class="khoi_noidung_right_block1_padding">
                              <div class="khoi_noidung_right_block1_padding_sub mr_b16px">
                                <div class="khoi_noidung_right_block1_hd fz18_5 mr_b16px">Lần đăng tin</div>
                                <div class="border_vang"></div>
                                <div class="khoi_noidung_right_block1_hd_sub_tex flex jus_sb align_item_c">
                                  <div class="khoi_noidung_right_block1_hd_sub_tex1 mr_b8px">Số tin miễn phí trong ngày</div>
                                  <div class="khoi_noidung_right_block1_hd_sub_tex1 fz18_5">03</div>
                                </div>
                                <div class="khoi_noidung_right_block1_hd_sub_tex flex jus_sb align_item_c">
                                  <div class="khoi_noidung_right_block1_hd_sub_tex1">Số tin đã đăng trong ngày</div>
                                  <div class="khoi_noidung_right_block1_hd_sub_tex1 fz18_5">0</div>
                                </div>
                              </div>
                              <div class="border_b_right mr_b16px"></div>
                              <div class="khoi_noidung_right_block1_padding_sub">
                                <div class="khoi_noidung_right_block1_hd fz18_5 mr_b16px">Điểm</div>
                                <div class="border_vang"></div>
                                <div class="khoi_noidung_right_block1_hd_sub_tex flex jus_sb align_item_c">
                                  <div class="khoi_noidung_right_block1_hd_sub_tex1 mr_b8px">Tổng số điểm</div>
                                  <div class="khoi_noidung_right_block1_hd_sub_tex1 fz18_5">40</div>
                                </div>
                                <div class="khoi_noidung_right_block1_hd_sub_tex flex jus_sb align_item_c">
                                  <div class="khoi_noidung_right_block1_hd_sub_tex1">Số điểm đã dùng trong ngày</div>
                                  <div class="khoi_noidung_right_block1_hd_sub_tex1 fz18_5">0</div>
                                </div>
                              </div>

                            </div>
                          </div>


                          <div class="khoi_noidung_right_block2">
                            <div class="khoi_noidung_right_block2_padding">
                              <div class="khoi_noidung_right_block2_sub_hd flex align_item_c jus_sb mr_b24px">
                                <div class="khoi_noidung_right_block2_hd fz18_5">Yêu cầu liên hệ lại</div>
                                <div class="border_vang2"></div>
                                <a href="#" class="khoi_noidung_right_block2_xemthem fz_14_4 text_dc main_clolor">Xem thêm</a>
                              </div>
                              <div class="div_img_all">
                                <div class="khoi_noidung_right_block2_img">
                                  <div class="khoi_noidung_right_block2_img1 flex mr_b24px">
                                    <div class="right_block2_img mr_r8px">
                                      <img src="<? echo base_url(); ?>assets/images/img_sdn/user_40.png" alt="">
                                      <div class="img_on">
                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/on.png" alt="">
                                      </div>
                                    </div>
                                    <div class="right_block2_tex">
                                      <div class="right_block2_tex_name">Darlene Robertson</div>
                                      <div class="right_block2_tex_name_tt flex jus_sb">
                                        <div class="right_block2_tex_name_id">ID tin: <span class="main_color">01234564</span></div>
                                        <div class="right_block2_tex_name_lienhe click_lienhe color_errror currsor_p">Liên hệ</div>
                                      </div>
                                    </div>
                                  </div>
  
                                </div>
                                <div class="khoi_noidung_right_block2_img">
                                  <div class="khoi_noidung_right_block2_img1 flex mr_b24px">
                                    <div class="right_block2_img mr_r8px">
                                      <img src="<? echo base_url(); ?>assets/images/img_sdn/user_40.png" alt="">
                                      <div class="img_on">
                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/on.png" alt="">
                                      </div>
                                    </div>
                                    <div class="right_block2_tex">
                                      <div class="right_block2_tex_name">Darlene Robertson</div>
                                      <div class="right_block2_tex_name_tt flex jus_sb">
                                        <div class="right_block2_tex_name_id">ID tin: <span class="main_color">01234564</span></div>
                                        <div class="right_block2_tex_name_lienhe click_lienhe color_errror currsor_p">Liên hệ</div>
                                      </div>
                                    </div>
                                  </div>
  
                                </div>
                                <div class="khoi_noidung_right_block2_img">
                                  <div class="khoi_noidung_right_block2_img1 flex mr_b24px">
                                    <div class="right_block2_img mr_r8px">
                                      <img src="<? echo base_url(); ?>assets/images/img_sdn/user_40.png" alt="">
                                      <div class="img_on">
                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/on.png" alt="">
                                      </div>
                                    </div>
                                    <div class="right_block2_tex">
                                      <div class="right_block2_tex_name">Darlene Robertson</div>
                                      <div class="right_block2_tex_name_tt flex jus_sb">
                                        <div class="right_block2_tex_name_id">ID tin: <span class="main_color">01234564</span></div>
                                        <div class="right_block2_tex_name_lienhe click_lienhe color_errror currsor_p">Liên hệ</div>
                                      </div>
                                    </div>
                                  </div>
  
                                </div>
                                <div class="khoi_noidung_right_block2_img">
                                  <div class="khoi_noidung_right_block2_img1 flex mr_b24px">
                                    <div class="right_block2_img mr_r8px">
                                      <img src="<? echo base_url(); ?>assets/images/img_sdn/user_40.png" alt="">
                                      <div class="img_on">
                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/on.png" alt="">
                                      </div>
                                    </div>
                                    <div class="right_block2_tex">
                                      <div class="right_block2_tex_name">Darlene Robertson</div>
                                      <div class="right_block2_tex_name_tt flex jus_sb">
                                        <div class="right_block2_tex_name_id">ID tin: <span class="main_color">01234564</span></div>
                                        <div class="right_block2_tex_name_lienhe click_lienhe color_errror currsor_p">Liên hệ</div>
                                      </div>
                                    </div>
                                  </div>
  
                                </div>
                                <div class="khoi_noidung_right_block2_img">
                                  <div class="khoi_noidung_right_block2_img1 flex mr_b24px">
                                    <div class="right_block2_img mr_r8px">
                                      <img src="<? echo base_url(); ?>assets/images/img_sdn/user_40.png" alt="">
                                      <div class="img_on">
                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/on.png" alt="">
                                      </div>
                                    </div>
                                    <div class="right_block2_tex">
                                      <div class="right_block2_tex_name">Darlene Robertson</div>
                                      <div class="right_block2_tex_name_tt flex jus_sb">
                                        <div class="right_block2_tex_name_id">ID tin: <span class="main_color">01234564</span></div>
                                        <div class="right_block2_tex_name_lienhe click_lienhe color_errror currsor_p">Liên hệ</div>
                                      </div>
                                    </div>
                                  </div>
  
                                </div>
                                <div class="khoi_noidung_right_block2_img">
                                  <div class="khoi_noidung_right_block2_img1 flex mr_b24px">
                                    <div class="right_block2_img mr_r8px">
                                      <img src="<? echo base_url(); ?>assets/images/img_sdn/user_40.png" alt="">
                                      <div class="img_on">
                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/on.png" alt="">
                                      </div>
                                    </div>
                                    <div class="right_block2_tex">
                                      <div class="right_block2_tex_name">Darlene Robertson</div>
                                      <div class="right_block2_tex_name_tt flex jus_sb">
                                        <div class="right_block2_tex_name_id">ID tin: <span class="main_color">01234564</span></div>
                                        <div class="right_block2_tex_name_lienhe click_lienhe color_errror currsor_p">Liên hệ</div>
                                      </div>
                                    </div>
                                  </div>
  
                                </div>
                                <div class="khoi_noidung_right_block2_img">
                                  <div class="khoi_noidung_right_block2_img1 flex mr_b24px">
                                    <div class="right_block2_img mr_r8px">
                                      <img src="<? echo base_url(); ?>assets/images/img_sdn/user_40.png" alt="">
                                      <div class="img_on">
                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/on.png" alt="">
                                      </div>
                                    </div>
                                    <div class="right_block2_tex">
                                      <div class="right_block2_tex_name">Darlene Robertson</div>
                                      <div class="right_block2_tex_name_tt flex jus_sb">
                                        <div class="right_block2_tex_name_id">ID tin: <span class="main_color">01234564</span></div>
                                        <div class="right_block2_tex_name_lienhe click_lienhe color_errror currsor_p">Liên hệ</div>
                                      </div>
                                    </div>
                                  </div>
  
                                </div>
                                <div class="khoi_noidung_right_block2_img">
                                  <div class="khoi_noidung_right_block2_img1 flex mr_b24px">
                                    <div class="right_block2_img mr_r8px">
                                      <img src="<? echo base_url(); ?>assets/images/img_sdn/user_40.png" alt="">
                                      <div class="img_on">
                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/on.png" alt="">
                                      </div>
                                    </div>
                                    <div class="right_block2_tex">
                                      <div class="right_block2_tex_name">Darlene Robertson</div>
                                      <div class="right_block2_tex_name_tt flex jus_sb">
                                        <div class="right_block2_tex_name_id">ID tin: <span class="main_color">01234564</span></div>
                                        <div class="right_block2_tex_name_lienhe click_lienhe color_errror currsor_p">Liên hệ</div>
                                      </div>
                                    </div>
                                  </div>
  
                                </div>
                                <div class="khoi_noidung_right_block2_img">
                                  <div class="khoi_noidung_right_block2_img1 flex mr_b24px">
                                    <div class="right_block2_img mr_r8px">
                                      <img src="<? echo base_url(); ?>assets/images/img_sdn/user_40.png" alt="">
                                      <div class="img_on">
                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/on.png" alt="">
                                      </div>
                                    </div>
                                    <div class="right_block2_tex">
                                      <div class="right_block2_tex_name">Darlene Robertson</div>
                                      <div class="right_block2_tex_name_tt flex jus_sb">
                                        <div class="right_block2_tex_name_id">ID tin: <span class="main_color">01234564</span></div>
                                        <div class="right_block2_tex_name_lienhe click_lienhe color_errror currsor_p">Liên hệ</div>
                                      </div>
                                    </div>
                                  </div>
  
                                </div>
                                <div class="khoi_noidung_right_block2_img">
                                  <div class="khoi_noidung_right_block2_img1 flex mr_b24px">
                                    <div class="right_block2_img mr_r8px">
                                      <img src="<? echo base_url(); ?>assets/images/img_sdn/user_40.png" alt="">
                                      <div class="img_on">
                                        <img src="<? echo base_url(); ?>assets/images/img_sdn/on.png" alt="">
                                      </div>
                                    </div>
                                    <div class="right_block2_tex">
                                      <div class="right_block2_tex_name">Darlene Robertson</div>
                                      <div class="right_block2_tex_name_tt flex jus_sb">
                                        <div class="right_block2_tex_name_id">ID tin: <span class="main_color">01234564</span></div>
                                        <div class="right_block2_tex_name_lienhe click_lienhe color_errror currsor_p">Liên hệ</div>
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
            </div>
        </div>
        <div class="khoi3">
          <? require_once APPPATH.'views/site/includes/da_footer.php' ?>
        </div>
    </div>



  <!-- POPUP LIÊN HỆ -->
    <div class="popup_lienhe hidden">
      <div class="popup_lienhe_overlay close_lienhe"></div>
      <div class="popup_lienhe_padding">
        <div class="popup_lienhe_padding_sub">
          <div class="popup_lienhe_padding_img">
            <img src="<? echo base_url(); ?>assets/images/img_du_an/bacsila.jpg" alt="">
          </div>
          <div class="popup_lienhe_padding_text fz18_5 mr_b16px">Darlene Robertson</div>
          <div class="popup_lienhe_padding_text mr_b16px">Số điện thoại: <span class="color_errror">0123456789</span></div>
          <div class="popup_lienhe_padding_btn main_color currsor_p">Chat</div>
        </div>
      </div>
    </div>

</body>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_duy.js"></script>  

</html>
<script>
$('#tongquan').addClass('color_click');
(function() {
    circliful.newCircle({
        id: 'circle_sale',
        type: 'simple',
        foregroundCircleWidth: 10,
        startAngle: 0,
        backgroundCircleWidth: 10,
        percent:0,
        strokeLinecap: "round"
    });

    circliful.newCircle({
        id: 'circle_rent',
        type: 'simple',
        foregroundCircleWidth: 10,
        startAngle: 0,
        backgroundCircleWidth: 10,
        percent: 0,
        strokeLinecap: "round"
    });

    circliful.newCircle({
        id: 'circle_project',
        type: 'simple',
        foregroundCircleWidth: 10,
        startAngle: 0,
        backgroundCircleWidth: 10,
        percent: 0,
        strokeLinecap: "round"
    });

})();
</script>

