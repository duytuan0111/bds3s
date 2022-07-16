
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Đăng tin sau đăng nhập</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/frontend/css/css_q.css">
</head>

<body>
    <div class="wrapper_all">
        <header class="position_r">
            <? require_once APPPATH.'views/site/includes/da_header.php' ?>
        </header>
        <div class="dangtin_container w_100 back_f7f8fc responsive_fixed">
            <div class="dangtin_hedding">
                <div class="lease_link d_flex align_c">
                    <a href="" class="lease_link-trangchu cursor_p">
                        <p class="font_s14 color_grey3">Trang chủ</p>
                    </a>
                    <span class="lease_link-img">
                        <img src="<? echo base_url() ?>assets/images/arrow_r_back.png" alt="">
                    </span>
                    <a href="" class="lease_link-chothue cursor_p">
                        <p class="font_s14 color_grey3">Loại đăng tin</p>
                    </a>
                    <span class="lease_link-img">
                        <img src="<? echo base_url() ?>assets/images/arrow_r_back.png" alt="">
                    </span>
                    <a href="" class="lease_link-chothue cursor_p">
                        <p class="font_s14 color_green">Soạn tin đăng</p>
                    </a>
                </div>
                <div class="lease_title mr_t_26">
                    <div class="lease_title-time font_s26 color_grey line_h30 font_w_600">Soạn tin đăng
                    </div>
                </div>
            </div>

            <div class="dangtin_input_thongtin mr_t_24">
                <form action="" method="" onsubmit="return false" id="postNews">
                    <div class="dangtin_input_item pa_24_32 back_w border_r_8">
                        <div class="">
                            <p class="color_green font_w500 line_h24 font_s16">Thông tin cơ bản</p>
                        </div>
                        <div class="thongtin_input_map d_flex mr_t_29 pl_pr_22">
                            <div class="input_map-left w_50 ">
                                <div class="the-input mr_r_54 box_input_infor">
                                    <p class="line_h20 font_s16 font_w500 color_grey">Tên dự án <span class="chudo">*</span>
                                    </p>
                                    <div class="khung_input mr_t_8 input_infor_tag">
                                        <input name="project_name" class="project_name " type="text" placeholder="Nhập tên dự án">
                                    </div>
                                </div>
                                <div class="mr_t_17 flex_w box_input_infor">
                                    <div class="d_flex align_c">
                                        <span class="mr_r_17 font_s14 line_h16 font_w500 color_grey">Loại hình <span class="chudo">*</span></span>
                                        <span class="dangtin-left-radio d_flex align_c mr_r_17">
                                            <input type="radio" value="1" name="type_news" id="check_mua">
                                            <span class="mr_l_9 font_s14 line_h16 font_w500 color_grey">Mua bán</span>
                                        </span>
                                        <span class="dangtin-left-radio d_flex align_c">
                                            <input type="radio" value="2" name="type_news" id="check_thue">
                                            <span class="mr_l_9 font_s14 line_h16 font_w500 color_grey">Cho thuê</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="the-input d_flex mr_r_54 the-input_xuong_res ">
                                    <div class="dangtin_khunginput_chonloai  mr_t_17 w_100 box_input_infor">
                                        <p class="line_h20 font_s16 font_w500 color_grey">Loại bất động sản<span class="chudo">*</span></p>
                                        <div class="khung_input mr_t_8">
                                            <select name="type_bds" id="onclick_chonloai_after" class="size-14 type_bds select_option">
                                                <option selected disabled>Chọn loại bất động sản</option>
                                                <option value="1">Căn hộ</option>
                                                <option value="2">Nhà riêng</option>
                                                <option value="3">Nhà mặt phố</option>
                                                <option value="4">Shophouse, Nhà phố thương mại</option>
                                                <option value="5">Biệt thự liền kề</option>
                                                <option value="6">Đất</option>
                                                <option value="7">Đất nền dự án</option>
                                                <option value="8">Bất động sản khác</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=" mr_t_17 w_50 mr_l_12 dangtin_khunginput_chonloai-hien hidden box_input_infor">
                                        <p class="line_h20 font_s16 font_w500 color_grey">Bất động sản chi tiết <span class="chudo">*</span></p>
                                        <div class="khung_input mr_t_8">
                                            <select name="" id="onclick_chonloai_bds" class="size-14 select_option">
                                                <option selected disabled value="" class="">Bất động sản chi tiết</option>
                                                <option value="1">Bất động sản chi tiết</option>
                                                <option value="2">Căn hộ mini</option>
                                                <option value="3">Căn hộ trung cấp</option>
                                                <option value="4">Căn hộ cao cấp</option>
                                                <option value="5">Căn hộ Penthouse</option>
                                                <option value="6">Căn hộ Duplex</option>
                                                <option value="7">Căn hộ Skyvilla</option>
                                                <option value="8">Căn hộ loft house</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="the-input mr_r_54 mr_t_21 box_input_infor">
                                    <p class="line_h20 font_s16 font_w500 color_grey">Tỉnh/ thành phố <span class="chudo">*</span></p>
                                    <div class="khung_input mr_t_8">
                                        <select onchange="address(this,'districts','ajaxGetListDistricts','Chọn quận huyện','1')" name="city" id="select_city" class="select_option js-states form-control">
                                            <option selected disabled>Chọn tỉnh thành phố</option>
                                            <? foreach($city as $cit): ?>
                                            <option value="<?= $cit['cit_id'] ?>"><?= $cit['cit_name'] ?></option>
                                            <? endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div id="the-input_quan" class="the-input mr_r_54 mr_t_21 box_input_infor">
                                    <p class="line_h20 font_s16 font_w500 color_grey">Quận huyện <span class="chudo">*</span></p>
                                    <div class="khung_input mr_t_8">
                                        <select onchange="address(this,'wards','ajaxGetListWards','Chọn phường xã','2')" name="districts" class="districts select_option js-states form-control">
                                            <option disabled selected>Chọn quận huyện</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="the-input--res-mot" class="the-input mr_r_54 mr_t_21 box_input_infor">
                                    <p class="line_h20 font_s16 font_w500 color_grey">Phường, xã</span></p>
                                    <div class="khung_input mr_t_8">
                                        <select  onchange="address(this,'street','getStreetBy','Chọn Đường/ phố','3')" name="wards" class="select_option wards js-states form-control">
                                            <option disabled selected>Chọn phường xã</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="the-input the-input--res mr_r_54 mr_t_21 box_input_infor">
                                    <p class="line_h20 font_s16 font_w500 color_grey">Đường phố</span></p>
                                    <div class="khung_input mr_t_8">
                                        <select name="street" class="select_option street js-states form-control">
                                            <option disabled selected>Chọn Đường/ phố</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="the-input the-input--res mr_r_54 mr_t_21">
                                    <p class="line_h20 font_s16 font_w500 color_grey">Địa chỉ chi tiết </span></p>
                                    <div class="khung_input mr_t_8">
                                        <input type="text" class="desc_addr" placeholder="Nhập địa chỉ chi tiết">
                                    </div>
                                </div>
                                <div class="the-input the-input--res mr_r_54 mr_t_21 box_input_infor">
                                    <p class="line_h20 font_s16 font_w500 color_grey">Ngày hết hạn<span class="chudo">*</span></p>
                                    <div class="khung_input mr_t_8 input_infor_tag">
                                        <input type="date" name="time_expired" class="time_expired" placeholder="Nhập địa chỉ chi tiết">
                                    </div>
                                </div>
                            </div>
                            <div class="input_map-right w_50 mr_t_20">
                                <div>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d251637.95196238213!2d105.6189045!3d9.779349!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1653901105958!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dangtin_input_item back_w border_r_8 mr_t_24">
                        <div class="dangtin_input-title pa_24_32_0">
                            <p class="color_green font_w500 line_h24 font_s16">Thông tin mô tả</p>
                        </div>
                        <div class="dangtin_mota pa_0_54_24 mr_t_29">
                            <div class="dangtin_mota-dong1 d_flex w_100">
                                <div class="dangtin_mota-dong1-left w_50 mr_r_12">
                                    <div class="dangtin_mota-cot1-gia d_flex">
                                        <div class="dangtin_mota-dong1-gia-input w_100">
                                            <p class="line_h20 font_s16 font_w500 color_grey">Giá tiền (VNĐ)<span class="chudo">*</span></p>
                                            <div class="d_flex">
                                                <div class=" mr_t_8 w_60 m_r_16">
                                                    <div class="box_input_infor">
                                                        <div class="khung_input input_infor_tag  mr_t_0 btn_opacity btn_tat btn_nhap_gia position_r">
                                                            <input type="number" id="number" class="" name="giamin" placeholder="Nhập giá cố định">
                                                            <div class="dangtin_mota-thue-thang position_a font_s14 color_grey3 hidden"><span class="position_r z_index_1">Tháng</span> </div>
                                                        </div>
                                                        <div class="btn_opacity mr_t_6 font_s12 line_h14 color_grey">
                                                            <p class="ren_number">0 triệu</p>
                                                        </div>
                                                    </div>
                                                    <div class="d_flex z_index_100 space_b flex_column_re">
                                                        <div class="dangtin_mota-thoathuan d_flex mr_t_12 align_c">
                                                            <div class="" id="radio_click">
                                                                <input value = "1" type="checkbox" id="radio_button">
                                                            </div>
                                                            <div class="color_grey font_s14 line_h16 font_w500 mr_l_9">Giá thỏa thuận</div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="dangtin_mota-dong1-khoanggia w_40 mr_t_8">
                                                    <div class="dangtin_btn-khoanggia btn_tat_khoanggia chuxanh_nentrang pa_10_0 btn_opacity cursor_p" id="gia_open_khoanggia">
                                                        <p class="font_s16 line_h19 font_w500">Khoảng giá</p>
                                                    </div>
                                                    <div>
                                                    <div class="btn_gia_max hidden mr_t_0 khung_input pos_re box_input_infor input_infor_tag">
                                                        <input type="number" name="" class="" placeholder="Giá max" id="number_max">
                                                        <span class="img_delete_mo cursor_p"><img src="<? echo base_url() ?>assets/images/delete.png" alt=""></span>
                                                        <div class="btn_opacity mr_t_6 font_s12 line_h14 color_grey">
                                                            <p class="ren_number_max">0 triệu</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dangtin_mota-dong3 mr_t_22">
                                        <p class="font_w500 font_s16 line_h20 color_grey">Diện tích (m2) <span class="chudo">*</span></p>
                                        <div class="dangtin_mota-dong3-left d_flex">
                                            <div class="dangtin_mota-dong3_m2 w_60 m_r_16 mr_t_8 box_input_infor">
                                                <div class="btn_dt_nhap khung_input mr_t_0 input_infor_tag">
                                                    <input type="text" name="area_min" placeholder="Nhập diện tích" id="number_dt_1">
                                                </div>
                                                <!-- <div class="btn_dt_mo hidden khung_input mr_t_0">
                                                    <input type="text" placeholder="Nhập diện tích từ" id="number_dt_2">
                                                </div> -->
                                                <p class="font_s12 line_h14 color_grey mr_t_8 ren_number_dt_2">Quy đổi: <span>00,00 triệu/m2</span></p>
                                            </div>
                                            <div class=" dangtin_mota-dong3_khoangm2 w_40 mr_t_8 box_input_infor">
                                                <div class="dangtin_btn_khoangm2 chuxanh_nentrang pa_10_0 btn_dt cursor_p" id="btn_dt_dong">
                                                    <p class="font_s16 line_h19 font_w500">Khoảng diện tích</p>
                                                </div>
                                                <div class="btn_dt_mo hidden mr_t_0 khung_input pos_re input_infor_tag">
                                                    <input type="text" placeholder="Đến" id="number_dt_2">
                                                    <span class="img_dt_delete cursor_p"><img src="<? echo base_url() ?>assets/images/delete.png" alt=""></span>
                                                    <div class="btn_opacity mr_t_6 font_s12 line_h14 color_grey">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dangtin_mota-dong1-right w_50 mr_l_12 mr_t_3">
                                    <xdiv class="">
                                        <p class="color_grey font_w500 line_h20 font_s14">Hướng nhà</p>
                                        <div class="khung_input mr_t_8">
                                            <select name="direction" id="" class="size-14 direction select_option">
                                                <option selected disabled>Chọn hướng nhà</option>
                                                <option value="Đông">Đông</option>
                                                <option value="Tây">Tây</option>
                                                <option value="Nam">Nam</option>
                                                <option value="Bắc">Bắc</option>
                                                <option value="Đông bắc">Đông bắc</option>
                                                <option value="Tây bắc">Tây bắc</option>
                                                <option value="Đông nam">Đông nam</option>
                                                <option value="Tây nam">Tây nam</option>
                                            </select>
                                        </div>
                                    </xdiv>
                                    <div class="mr_t_21">
                                        <div class="dangtin_mota-dong2 ">
                                            <p class="color_grey font_s14 font_w500 line_h20">Tình trạng pháp lý</p>
                                            <div class="khung_select mr_t_8">
                                                <select name="Legal_stt" id="" class="size-14 Legal_stt select_option">
                                                    <option selected disabled >Chọn tình trạng pháp lý</option>
                                                    <option value="Sổ đỏ">Sổ đỏ</option>
                                                    <option value="Sổ hồng">Sổ hồng</option>
                                                    <option value="Sổ trắng">Sổ trắng</option>
                                                    <option value="Giấy chứng nhận quyền sở hữu">Giấy chứng nhận quyền sở hữu</option>
                                                    <option value="Giấy tờ hợp lệ">Giấy tờ hợp lệ</option>
                                                    <option value="Giấy phép xây dựng">Giấy phép xây dựng</option>
                                                    <option value="Giấy phép kinh doanh">Giấy phép kinh doanh</option>
                                                    <option value="Giấy viết tay">Giấy viết tay</option>
                                                    <option value=">Đang hợp thức hóa">Đang hợp thức hóa</option>
                                                    <option value="Chưa xác định">Chưa xác định</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="dangtin_mota-dong4 mr_t_21 box_input_infor">
                                <p class="font_w500 font_s16 line_h20 color_grey">Tên tiêu đề <span class="chudo">*</span>
                                </p>
                                <div class="khung_input input_infor_tag">
                                    <input type="text" name="title_news" class="title_news" placeholder="Nhập diện tích">
                                </div>

                            </div>
                            <div class="dangtin_mota-dong5 mr_t_21 box_input_infor">
                                <p class="font_w500 font_s16 line_h20 color_grey">Mô tả <span class="chudo">*</span></p>
                                <div class="mr_t_8 dangtin_mota_textarea">
                                    <textarea name="tdn_mota" class="tdn_mota" id="" cols="30" rows="5" placeholder="Nhập nội dung"></textarea>
                                </div>
                            </div>
                            <div class="dangtin_mota-gachchan mr_t_16 position_r"></div>
                            <div class="dangtin_mo_ta_dong7 d_flex space_b mr_t_45 w_100">
                                <div class="dangtin_mo_ta_dong7-trai dangtin_mo_ta_dong_chung">
                                    <div class="dangtin_mo_ta_dong7-tang">
                                        <p class="font_w500 font_s16 line_h20 color_grey">Tầng căn hộ</p>
                                        <div class="khung_input mr_t_8">
                                            <input type="text" placeholder="Nhập số tầng căn hộ">
                                        </div>
                                    </div>
                                    <div class="dangtin_mo_ta_dong7-balcony mr_t_21">
                                        <p class="font_w500 font_s16 line_h20 color_grey">Hướng ban công</p>
                                        <div class="khung_input mr_t_8">
                                            <input type="text" class="Balcony_direction" placeholder="Nhập hướng ban công">
                                        </div>
                                    </div>
                                    <div class="dangtin_mo_ta_dong7-corner d_flex mr_t_26 align_c">
                                        <div class="font_w500 font_s14 line_h16 color_grey mr_r_55">Căn góc</div>
                                        <div class="dong7-corner-true d_flex align_c mr-50 ">
                                            <div><input type="radio" class="corner" value="1" name="corner"></div>
                                            <div class="font_w500 font_s14 line_h16 color_grey mr_l_9">có</div>
                                        </div>
                                        <div class="dong7-corner-false d_flex align_c">
                                            <div><input type="radio" value="2" class="corner" name="corner"></div>
                                            <div class="font_w500 font_s14 line_h16 color_grey mr_l_9">không</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dangtin_mo_ta_dong7-right dangtin_mo_ta_dong_chung">
                                    <div class="dangtin_mo_ta_dong7-numbers-rom d_flex space_b">
                                        <div class="dong7-numbers-rom_left">
                                            <p class="font_w500 font_s16 line_h20 color_grey">Số phòng tắm</p>
                                            <div class="dong7-numbers-rom_left-value d_flex mr_t_8">
                                                <div data-id="1" class="dong-numbers-rom-value-item radio_bathroom cursor_p">1</div>
                                                <div data-id="2" class="dong-numbers-rom-value-item radio_bathroom cursor_p">2</div>
                                                <div data-id="3" class="dong-numbers-rom-value-item radio_bathroom cursor_p">3</div>
                                                <div data-id="4+" class="dong-numbers-rom-value-item radio_bathroom cursor_p">4+</div>
                                            </div>
                                        </div>
                                        <div class="dong7-numbers-rom_right">
                                            <p class="font_w500 font_s16 line_h20 color_grey">Số phòng ngủ</p>
                                            <div class="dong7-numbers-rom_right-value d_flex mr_t_8">
                                                <div data-id="1" class="dong-numbers-rom-value-item radio_bedroom cursor_p">1</div>
                                                <div data-id="2" class="dong-numbers-rom-value-item radio_bedroom cursor_p">2</div>
                                                <div data-id="3" class="dong-numbers-rom-value-item radio_bedroom cursor_p">3</div>
                                                <div data-id="4+" class="dong-numbers-rom-value-item radio_bedroom cursor_p">4+</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dong7-numbers-rom_right_furniture mr_t_21">
                                        <p class="font_w500 font_s16 line_h20 color_grey">Nội thất</p>
                                        <div class="khung_input mr_t_8">
                                            <input type="text" placeholder="Nhập">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dangtin_mota-dong8 d_flex space_b  mr_t_45 w_100 hidden">
                                <div class="dangtin_mota-dong8-left dangtin_mo_ta_dong_chung">
                                    <div class="dangtin_mota-dong8-facade">
                                        <p class="font_w500 font_s16 line_h20 color_grey">Mặt tiền (m)</p>
                                        <div class="khung_input mr_t_8">
                                            <input type="text" class="mattien8" placeholder="Nhập">
                                        </div>
                                    </div>
                                    <div class="dangtin_mota-dong8-facade mr_t_21">
                                        <p class="font_w500 font_s16 line_h20 color_grey">Đường vào (m)</p>
                                        <div class="khung_input mr_t_8">
                                            <input type="text" class="duongvao8" placeholder="Nhập">
                                        </div>
                                    </div>
                                    <div class="dangtin_mota-dong8-facade mr_t_21">
                                        <p class="font_w500 font_s16 line_h20 color_grey">Số tầng</p>
                                        <div class="khung_input mr_t_8">
                                            <input type="text" class="floor" placeholder="Nhập">
                                        </div>
                                    </div>
                                </div>
                                <div class="dangtin_mota-dong8-right dangtin_mo_ta_dong_chung">
                                    <div class="dong-numbers-rom_left">
                                        <p class="font_w500 font_s16 line_h20 color_grey">Số phòng tắm</p>
                                        <div class="dong8-numbers-rom_left-value d_flex mr_t_8">
                                            <div  data-id="1" class="dong-numbers-rom-value-item radio_bathroom cursor_p">1</div>
                                            <div  data-id="2" class="dong-numbers-rom-value-item radio_bathroom cursor_p">2</div>
                                            <div  data-id="3" class="dong-numbers-rom-value-item radio_bathroom cursor_p">3</div>
                                            <div  data-id="4+" class="dong-numbers-rom-value-item radio_bathroom cursor_p">4+</div>
                                        </div>
                                    </div>
                                    <div class="dong-numbers-rom_right mr_t_21">
                                        <p class="font_w500 font_s16 line_h20 color_grey">Số phòng ngủ</p>
                                        <div class="dong8-numbers-rom_right-value d_flex mr_t_8">
                                            <div  data-id="1" class="dong-numbers-rom-value-item radio_bedroom cursor_p">1</div>
                                            <div  data-id="2" class="dong-numbers-rom-value-item radio_bedroom cursor_p">2</div>
                                            <div  data-id="3" class="dong-numbers-rom-value-item radio_bedroom cursor_p">3</div>
                                            <div  data-id="4+" class="dong-numbers-rom-value-item radio_bedroom cursor_p">4+</div>
                                        </div>
                                    </div>
                                    <div class="dong7-numbers-rom_right_furniture mr_t_21">
                                        <p class="font_w500 font_s16 line_h20 color_grey">Nội thất</p>
                                        <div class="khung_input mr_t_8">
                                            <input type="text" class="Interior" placeholder="Nhập">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dangtin_mota-dong9 d_flex space_b  mr_t_45 w_100 hidden">
                                <div class="dangtin_mota-dong8-left dangtin_mo_ta_dong_chung">
                                    <div class="dangtin_mota-dong8-facade">
                                        <p class="font_w500 font_s16 line_h20 color_grey">Mặt tiền (m)</p>
                                        <div class="khung_input mr_t_8">
                                            <input type="number" class="mattien9" placeholder="Nhập">
                                        </div>
                                    </div>
                                    <div class="dangtin_mota-dong8-facade mr_t_21">
                                        <p class="font_w500 font_s16 line_h20 color_grey">Đường vào (m)</p>
                                        <div class="khung_input mr_t_8">
                                            <input type="number" class="duongvao9" placeholder="Nhập">
                                        </div>
                                    </div>
                                </div>
                                <div class="dangtin_mota-dong8-right dangtin_mo_ta_dong_chung">
                                    <div class="dong7-numbers-rom_right_furniture">
                                        <p class="font_w500 font_s16 line_h20 color_grey">Chiều sâu</p>
                                        <div class="khung_input mr_t_8">
                                            <input type="number" class="chieusau" placeholder="Nhập">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dangtin_mota-dong6 mr_t_24 khung_input">
                                <select name="" id="" class="size-14 select_option">
                                    <option selected disabled value="" class="">Chọn tag</option>
                                    <option value="">Dữ liệu cập nhật sau</option>
                                </select>
                                <img src="<? echo base_url() ?>assets/images/tag.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="dangtin_input_item back_w border_r_8 mr_t_24">
                        <div class="dangtin_img pa_24_32">
                            <div class="dangtin_img-title">
                                <p class="font_w500 font_s16 line_h24 color_green">Thông tin hình ảnh</p>
                                <p class="font_s14 line_h16 color_grey mr_t_8">Thêm ít nhất 3 ảnh cho bài đăng để đạt hiệu
                                    quả tốt hơn.</p>
                            </div>
                            <div class="dangtin_img_input border_r_8 d_flex align_c flex_center pa_t_b_16 mr_t_24">
                                <div class="dangtin_img_input-text text_a_c">
                                    <p class="font_s14 line_h16 color_grey">Tin đăng có hình ảnh thường hiệu quả hơn tới 59%
                                        so với tin đăng không có hình ảnh.<br>
                                        (Tối đã 10 ảnh)
                                    </p>
                                    <!-- div thêm ảnh  -->
                                    <div class="test">
                                        <div class="dangtin-upload-img d_flex flex_center" id="images">
                                            <!-- <div class="dangtin-upload-img-hover">
                                            <div class="d_flex space_B">
                                                <div class="dangtin-upload-img-hover-trai">
                                                    <img src="<? echo base_url() ?>assets/images/xoay_trai.png" alt="">
                                                    <img src="<? echo base_url() ?>assets/images/xoay_phai.png" alt="">
                                                </div>
                                                <div class="dangtin-upload-img-hover-trai">
                                                    <img src="<? echo base_url() ?>assets/images/xoa.png" alt="">
                                                </div>
                                            </div>
                                            <div class="dangtin-upload-img-hover-text">
                                                <p class="font_s14 line_h16 color_white">Đặt ảnh đại diện</p>
                                            </div>
                                        </div> -->
                                        </div>
                                    </div>
                                    <input type="file" onchange="preview()" id="file_input" accept="image/png,image/jpeg" multiple class="input_an">
                                    <div class="flex butt_add_pic" id="dangtin_butt_add_pic">
                                        <img src="<? echo base_url() ?>assets/images/camera.png" class="wh_22_18 right-8" alt="">
                                        <p class="color_green">Thêm Ảnh</p>
                                    </div>
                                    <!-- <label for="upload_file" id="" class="d_flex flex_center align_c mr_t_16">
                                        <div class="dangtin_img-nhap chuxanh_nentrang pa_11_0">
                                            <img src="<? echo base_url() ?>assets/images/camera.png" alt="">
                                            <input type="file" id="upload_file">
                                            <div class="font_w500 font_s16 line_h22 color_green mr_l_9 ">Thêm ảnh</div>
                                        </div>
                                    </label> -->
                                    <p class="text_a_c mr_t_51 font_s14 line_h16 color_reb_2 ">Lưu ý: Hình ảnh không được là
                                        ảnh sao chép trên Internet, không chứa logo, thông tin của website khác, kích thước
                                        tối thiểu 300 X 300 Px</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="dangtin_form dangtin_form-after back_w border_r_8 mr_t_24 pa_24_32 box_shadow_10 hidden">
                        <p class="font_w500 font_s16 line_h24 color_green">Thông tin bổ sung</p>
                        <div class="font_s16 line_h24 color_grey mr_t_8">Bài đăng thông tim bổ sung thường có hiệu quả hơn 40% sơ với bài đăng thường</div>
                        <div class="dangtin_after_bosung d_flex flex_w">
                            <div class="dangtin_after_bosung-item_dong d_flex">
                                <div class="post_additional_total--left">
                                    <p class="font_w500 font_s18 line_h24 color_grey">Phòng khách</p>
                                    <div class="detail__post_additional_total additional_hidden ">
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_19 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Tủ trang trí</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Tivi</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Bàn ghế P.khách </p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Toilet chung</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post_additional_total--right">
                                    <img src="<? echo base_url() ?>assets/images/arrow_updown.png" alt="">
                                </div>
                            </div>
                            <div class="dangtin_after_bosung-item_dong d_flex">
                                <div class="post_additional_total--left">
                                    <p class="font_w500 font_s18 line_h24 color_grey">Phòng ngủ</p>
                                    <div class="detail__post_additional_total additional_hidden ">
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_19 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Giường</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Bàn phấn</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Tủ quần áo</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Tủ trang trí</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post_additional_total--right">
                                    <img src="<? echo base_url() ?>assets/images/arrow_updown.png" alt="">
                                </div>
                            </div>
                            <div class="dangtin_after_bosung-item_dong d_flex">
                                <div class="post_additional_total--left">
                                    <p class="font_w500 font_s18 line_h24 color_grey">Phòng bếp</p>
                                    <div class="detail__post_additional_total additional_hidden ">
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_19 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Bàn ăn</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Máy hút mùi</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Tủ bếp</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Tủ lạnh</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post_additional_total--right">
                                    <img src="<? echo base_url() ?>assets/images/arrow_updown.png" alt="">
                                </div>
                            </div>
                            <div class="dangtin_after_bosung-item_dong d_flex">
                                <div class="post_additional_total--left">
                                    <p class="font_w500 font_s18 line_h24 color_grey">Phòng tắm</p>
                                    <div class="detail__post_additional_total additional_hidden ">
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_19 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Tủ trang trí</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Bồn rửa mặt</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Vòi hoa sen</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Bồn tắm</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Bình nóng lạnh</p>
                                        </div>
                                    </div>
                                    <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                        <div class="checkbox-container mr_r_9">
                                            <label class="checkbox-label-phanquyen">
                                                <input type="checkbox">
                                                <span class="checkbox-custom"></span>
                                            </label>
                                        </div>
                                        <p class="font_s16 line_h24 color_grey">Bồn cầu</p>
                                    </div>
                                </div>
                                <div class="post_additional_total--right">
                                    <img src="<? echo base_url() ?>assets/images/arrow_updown.png" alt="">
                                </div>
                            </div>
                            <div class="dangtin_after_bosung-item_dong d_flex">
                                <div class="post_additional_total--left">
                                    <p class="font_w500 font_s18 line_h24 color_grey">An toàn nhà ỏ</p>
                                    <div class="detail__post_additional_total additional_hidden ">
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_19 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Máy báo khói</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Bình chữa cháy</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Camera an ninh</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Máy báo khí CO</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post_additional_total--right">
                                    <img src="<? echo base_url() ?>assets/images/arrow_updown.png" alt="">
                                </div>
                            </div>
                            <div class="dangtin_after_bosung-item_dong d_flex">
                                <div class="post_additional_total--left">
                                    <p class="font_w500 font_s18 line_h24 color_grey">Tiêu dùng, ẩm thực</p>
                                    <div class="detail__post_additional_total additional_hidden ">
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_19 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Quán bar</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Nhà hàng</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Trung tâm thương mai</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Cây ATM</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Ngân hàng</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Coffee shop</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post_additional_total--right">
                                    <img src="<? echo base_url() ?>assets/images/arrow_updown.png" alt="">
                                </div>
                            </div>
                            <div class="dangtin_after_bosung-item_dong d_flex">
                                <div class="post_additional_total--left">
                                    <p class="font_w500 font_s18 line_h24 color_grey">Thể thao</p>
                                    <div class="detail__post_additional_total additional_hidden ">
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_19 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Bể bơi</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Bóng rổ</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Bóng đá</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Cầu lông</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Sân golf</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post_additional_total--right">
                                    <img src="<? echo base_url() ?>assets/images/arrow_updown.png" alt="">
                                </div>
                            </div>
                            <div class="dangtin_after_bosung-item_dong d_flex">
                                <div class="post_additional_total--left">
                                    <p class="font_w500 font_s18 line_h24 color_grey">Tiện nghi khác</p>
                                    <div class="detail__post_additional_total additional_hidden ">
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_19 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Ban công</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Thang máy</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Lối đi cho người khuyết tật</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Chỗ để xe miễn phí</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Để xe công cộng miễn phí</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post_additional_total--right">
                                    <img src="<? echo base_url() ?>assets/images/arrow_updown.png" alt="">
                                </div>
                            </div>
                            <div class="dangtin_after_bosung-item_dong d_flex">
                                <div class="post_additional_total--left">
                                    <p class="font_w500 font_s18 line_h24 color_grey">Giải trí</p>
                                    <div class="detail__post_additional_total additional_hidden ">
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_19 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Rạp chiếu phim</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Spa làm đẹp</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Khu vui chơi trẻ em</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Khu thư giãn người già</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Công viên nước</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post_additional_total--right">
                                    <img src="<? echo base_url() ?>assets/images/arrow_updown.png" alt="">
                                </div>
                            </div>
                            <div class="dangtin_after_bosung-item_dong d_flex">
                                <div class="post_additional_total--left">
                                    <p class="font_w500 font_s18 line_h24 color_grey">Văn phòng</p>
                                    <div class="detail__post_additional_total additional_hidden ">
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_19 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Điều hòa</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Máy phát điện</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Rèm cửa</p>
                                        </div>
                                        <div class="dangtin_after_bosung-item_dong-name d_flex mr_t_22 align_c">
                                            <div class="checkbox-container mr_r_9">
                                                <label class="checkbox-label-phanquyen">
                                                    <input type="checkbox">
                                                    <span class="checkbox-custom"></span>
                                                </label>
                                            </div>
                                            <p class="font_s16 line_h24 color_grey">Trần thả</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post_additional_total--right">
                                    <img src="<? echo base_url() ?>assets/images/arrow_updown.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dangtin_btn-dang-hen">
                        <div class="dangtin_btn-luu-dang d_flex align_c flex_center mr_t_32">
                            <button type="submit" class="dangtin_btn-dang chutrang_nenxanh pa_11_0 d_flex cursor_p">
                                <p class="font_s16 line_h19 font_w500 mr_r_8">Đăng ngay</p>
                                <div class="d_flex">
                                    <img src="<? echo base_url() ?>assets/images/mui_ten_xanh.png" alt="">
                                </div>
                            </button>
                            <div class="dangtin_btn_chon mr_t_0 mr_l_16 position_r">
                                <div onclick="anhien(this)" class="dangtin_btn_chon-cha d_flex back_w border_r_8 flex_center align_c mr_r_8  cursor_p">
                                    <p class="color_grey3 font_s14 line_h16">Chọn</p>
                                    <span><img src="<? echo base_url() ?>assets/images/mui_ten_xuong.png" alt=""></span>
                                </div>
                                <div class="dangtin_btn_chon-con dangtin_btn_chon-con-after back_w border_r_8 cursor_p position_a hidden pa_0">
                                    <button type="submit" class="pa_12_8 btn_draft font_s14 color_grey3 line_h16">Lưu nháp</button>
                                    <p onclick="henlichdt(this)" class="pa_12_8 d_flex align_c font_s14 color_grey3 line_h16">Hẹn lịch đăng tin</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box_shadow_10 back_w border_r_8 mr_t_32 pa_32"></div>
                    <div class="popup_dangtin_lenlich d_flex align_c flex_center hidden">
                    <div class="popup_dangtin_lenlich-ovelay" id="btn_dangtin_lenlich"></div>
                        <div class="popup_dangtin_lenlich-wrapper border_r_8 back_w z_index_1 box_shadow_10">
                            <div class="popup_dangtin_lenlich-title">
                                <p class="font_w600 font_s24 line_h28 color_grey">Lên lịch đăng tin</p>
                            </div>
                            <div class="popup_dangtin_lenlich-text mr_t_24">
                                <p class="font_s16 line_h24 color_grey">Lên lịch đăng tin vào thời gian phù hợp nhất để tương
                                    tác với nhiều khách hàng hơn hoặc tự chọn ngày giờ đăng tin trong tương lai.</p>
                            </div>
                            <div class="popup_dangtin_input d_flex mr_t_32">
                                <div class="popup_dangtin_input_left khung_input pos_re mr_r_12 mr_t_0">
                                    <input class ="date_post_news" type="date">
                                </div>
                                <div class="popup_dangtin_input_right khung_input pos_re mr_l_12 mr_t_0">
                                    <input type="time" class="time_post_news" value="<?= date('H:i',time()) ?>">
                                </div>
                            </div>
                            <div class="popup_dangtin-lenlich-btn d_flex w_100 flex_center mr_t_32">
                                <div class="dangtin-lenlich-btn chuxanh_nentrang pa_11_0 mr_r_12 cursor_p" id="huy_lenlich">
                                    <p>Hủy</p>
                                </div>
                                <button type="submit" class="dangtin-lenlich-btn btn_appointment chutrang_nenxanh pa_11_0 mr_l_12 cursor_p">
                                    <p>Lưu</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="popup_dangtin_lenlich_doi-time d_flex align_c flex_center hidden">
                <div class="popup_dangtin_lenlich-ovelay" id="btn_dangtin_capnhat"></div>
                <div class="popup_dangtin_lenlich-wrapper border_r_8 back_w z_index_1 box_shadow_10">
                    <div class="popup_dangtin_lenlich-title">
                        <p class="font_w600 font_s24 line_h28 color_grey">Lên lịch đăng tin</p>
                    </div>
                    <div class="popup_dangtin_lenlich-text mr_t_24">
                        <p class="font_s16 line_h24 color_grey">Lên lịch đăng tin vào thời gian phù hợp nhất để tương
                            tác với nhiều khách hàng hơn hoặc tự chọn ngày giờ đăng tin trong tương lai.</p>
                    </div>
                    <div class="popup_dangtin_input d_flex mr_t_32">
                        <div class="popup_dangtin_input_left khung_input pos_re mr_r_12 mr_t_0">
                            <input type="date">
                        </div>
                        <div class="popup_dangtin_input_right khung_input pos_re mr_l_12 mr_t_0">
                            <input type="time" value="16:21">
                        </div>
                    </div>
                    <div class="popup_dangtin-lenlich-btn d_flex w_100 flex_center mr_t_32">
                        <div class="dangtin-lenlich-btn chuxanh_nentrang pa_11_0 mr_r_12 cursor_p" id="huy_lenlich_time">
                            <p>Hủy</p>
                        </div>
                        <div class="dangtin-lenlich-btn chutrang_nenxanh pa_11_0 mr_l_12 cursor_p" id="luu_lenlich_sau">
                            <p>Cập nhật</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup_canhbao popup_hien popup_hien_con hidden ">
                <div class="overlay" id="close_overlay_canhbao"> </div>
                <div class="popup_warning_post d_flex flex_column flex_center align_c back_w border_r_8 box_shadow_10 z_index_1">
                    <div class="popup_warning_post-img">
                        <img src="<? echo base_url() ?>assets/images/canhbao.png" alt="">
                    </div>
                    <div class="popup_warning_post-text text_c mr_t_24  ">
                        <p class="font_s14 line_h24 color_grey font_w500">Bạn đã hết số lần đăng tin miễn phí trong ngày.<br>
                            Bạn có muốn sử dụng <span class="chudo">1 điểm </span> để đăng tin không
                        </p>
                    </div>
                    <div class="popup_warning_post-btn_tong d_flex space_b mr_t_24 w_100">
                        <div class="popup_warning_post-btn chuden_nentrang cursor_p" id="onclick_huy_canhbao">
                            <p class="font_s16 font_w500 line_h19 color_grey">Hủy</p>
                        </div>
                        <a href="#" class="popup_warning_post-btn chutrang_nenxanh chutrang_nenxanh cursor_p">
                            <p class="font_s16 font_w500 line_h19">Đồng ý</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="popup_canhbao popup_hien popup_hien_het hidden">
                <div class="overlay" id="close_overlay_canhbao"> </div>
                <div class="popup_warning_post d_flex flex_column flex_center align_c back_w border_r_8 box_shadow_10 z_index_1">
                    <div class="popup_warning_post-img">
                        <img src="<? echo base_url() ?>assets/images/canhbao.png" alt="">
                    </div>
                    <div class="popup_warning_post-text text_c mr_t_24  ">
                        <p class="font_s14 line_h24 color_grey font_w500">Số điểm hiện tại của bạn là 0. Vui lòng mua gói điểm để tiếp tục thao tác
                        </p>
                    </div>
                    <div class="popup_warning_post-btn_tong d_flex space_b mr_t_24 w_100">
                        <div class="popup_warning_post-btn chuden_nentrang cursor_p" id="onclick_huy_canhbao">
                            <p class="font_s16 font_w500 line_h19 color_grey">Hủy</p>
                        </div>
                        <a href="#" class="popup_warning_post-btn chutrang_nenxanh chutrang_nenxanh cursor_p">
                            <p class="font_s16 font_w500 line_h19">Mua ngay</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? require_once APPPATH.'views/site/includes/da_footer.php' ?>
    </div>
</body>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/slick.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/select2.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_c.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_quang.js"></script>
<script src="<? echo base_url();?>ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('tdn_mota');
</script>
<script>
    $(".select_option").select2({
        width: "100%",
    });
    $('.lease_btn-xemthem').click(function() {
        $('.lease_show-xemthem').toggleClass('hidden');
        $('.lease_show-thugon').toggleClass('hidden');
        $('.lease-xemthem').toggleClass('hidden');
    })
    var file_input = document.getElementById("file_input");
    var imagecontainer = document.getElementById("images");
    var num_of_file = document.getElementById("num_of_file");

    function preview() {
        function createImg(tagName, src = '', className, appParent, text = '') {
            let element = document.createElement(tagName);

            if (src != '') {
                element.setAttribute("src", src);
            } else {
                element.innerText = text;
            }

            element.setAttribute("class", className);

            appParent.appendChild(element);
        }
        file = `${file_input.files.length}`;
        if (file > 10) {
            alert("Bạn chỉ có thể tải tối đa 10 file ảnh");
        } else {
            let stt = 0;
            for (i of file_input.files) {
                let reader = new FileReader();
                let figure = document.createElement("figure");
                let figcap = document.createElement("figcaption");
                figure.appendChild(figcap);
                reader.onload = () => {
                    let img = document.createElement("img");
                    img.setAttribute("src", reader.result);
                    figure.insertBefore(img, figcap);
                    let div = document.createElement('div');
                    figcap.appendChild(div);
                    createImg('img', '<? echo base_url() ?>assets/images/xoay_trai.png', 'dangtin_icon_upload_trai', div);
                    createImg('img', '<? echo base_url() ?>assets/images/xoay_phai.png', 'dangtin_icon_upload_phai', div);
                    let div2 = document.createElement('div');
                    figcap.appendChild(div2);
                    createImg('img', '<?= base_url(); ?>assets/images/xoa.png', 'dangtin_icon_upload_xoa', div2);
                    createImg('p', '', 'dangtin_icon_upload_nutbam', figcap, 'Đặt ảnh đại diện');

                    // --xoay
                    var degreen = 0;

                    function rotate(degree, a) {
                        // For webkit browsers: e.g. Chrome
                        a.css({
                            WebkitTransform: 'rotate(' + degree + 'deg)'
                        });
                        // For Mozilla browser: e.g. Firefox
                        a.css({
                            '-moz-transform': 'rotate(' + degree + 'deg)'
                        });

                        // Animate rotation with a recursive call
                        setTimeout(function() {
                            rotate(++degree);
                        }, 65);
                    }
                    $('.dangtin_icon_upload_trai').click(function() {
                        degreen -= 90;
                        var a = $(this).parents("figure").find("img");
                        rotate(degreen, a);
                    });
                    $('.dangtin_icon_upload_phai').click(function() {
                        var b = $(this).parents("figure").find("img");
                        degreen += 90;
                        rotate(degreen, b);
                    });
                    // --xoa
                    $('.dangtin_icon_upload_xoa').click(function() {
                        $(this).parents("figure").remove();
                    });
                    // hover
                    $('figure').click(function() {
                        $('figure').addClass('');
                    })
                    // avt

                    $(".dangtin_icon_upload_nutbam").click(function() {
                        $(".dangtin_icon_upload_nutbam").each(function() {
                            $(this).text("Đặt làm ảnh đại diện");
                            // $(this).text(".dangtin_icon_upload_nutbam");
                        })
                        $(this).text("Ảnh đại diện");
                        $("figure").first().removeClass("avt");
                        $(this).parents("figure").attr("id", "123");
                        var file_input = document.getElementById("123");
                        $("#images").prepend(file_input);
                        $(this).parents("figure").attr("id", "");
                        $("figure").first().addClass("avt");

                        // $(".avt").find(".dangtin_icon_upload_nutbam").text("Ảnh đại diện");
                    })
                    // $('.dangtin_icon_upload_nutbam').click(function() {

                    //     $(this).parents(".dangtin-upload-img").append($(this).parents('figure').html);
                    //     $(this).parents("figure").remove();
                    // });
                }
                imagecontainer.appendChild(figure);
                reader.readAsDataURL(i)
            }
        }

    }

    $('#number').on('keyup', function() {
        number = $(this).val();
        if (number < 1000) {
            numbers = number / 1000;
            var dv = "Nghìn"
        } else if (number < 1000000000) {
            numbers = number / 1000000;
            var dv = "Triệu"
        } else {
            numbers = number / 1000000000;
            var dv = "Tỷ"
        }
        $(".ren_number").text(numbers + dv)
    });
    $('#number_max').on('keyup', function() {
        number = $(this).val();

        if (number < 1000) {
            numbers = number / 1000;
            var dv = "Nghìn"
        } else if (number < 1000000000) {
            numbers = number / 1000000;
            var dv = "Triệu"
        } else {
            numbers = number / 1000000000;
            var dv = "Tỷ"
        }
        $(".ren_number_max").text(numbers + dv)
    });
    // -----------------
    $('#check_thue').click(function() {
        if ($('#check_thue').is(':checked')) {
            $('#number').on('keyup', function() {
                number = $(this).val();
                if (number < 1000) {
                    numbers = number / 1000;
                    var dv = "Nghìn/tháng"
                } else if (number < 1000000000) {
                    numbers = number / 1000000;
                    var dv = "Triệu/tháng"
                } else {
                    numbers = number / 1000000000;
                    var dv = "Tỷ/tháng"
                }
                $(".ren_number").text(numbers + dv)
            });
            $('#number_max').on('keyup', function() {
                number_max = $(this).val();

                if (number < 1000) {
                    numbers_max_thue = number_max / 1000;
                    var dv = "Nghìn/tháng"
                } else if (number_max < 1000000000) {
                    numbers_max_thue = number_max / 1000000;
                    var dv = "Triệu/tháng"
                } else {
                    numbers_max_thue = number_max / 1000000000;
                    var dv = "Tỷ/tháng"
                }
                $(".ren_number_max").text(numbers_max_thue + dv)
            });

            $('#number ,#number_dt_1,#number_max,#number_dt_2').on('keyup', function() {
                var giacodinh = Number($('#number').val());
                var dientich1 = Number($('#number_dt_1').val());
                if (dientich1 != 0 || dientich1 != '') {
                    var tieude = "Quy đổi: ";
                    var dv = " triệu/m2/tháng";
                    var ketqua = 0;
                    ketqua = giacodinh / dientich1;
                    $('.ren_number_dt_2 span').html(ketqua + dv);
                    if (ketqua < 1000000000) {
                        kq1 = ketqua / 1000000;
                    } else if (ketqua < 1000000000) {
                        kq1 = ketqua / 10000000;
                    }
                    $('.ren_number_dt_2 span').html(kq1 + dv);
                }
                var number_max = Number($('#number_max').val());
                if (number_max != 0 || number_max != '') {
                    var tieude = "Quy đổi: ";
                    var dv = " triệu/m2/tháng";
                    var ketqua1 = 0;
                    var ketqua2 = 0;
                    ketqua1 = giacodinh / dientich1;
                    ketqua2 = number_max / dientich1;
                    if (ketqua1 < 1000000000 && ketqua2 < 1000000000) {
                        kq1 = ketqua1 / 1000000;
                        kq2 = ketqua2 / 1000000;
                    };

                    if (kq1 < kq2) {
                        $('.ren_number_dt_2 span').html(kq1 + ' - ' + kq2 + dv);
                    } else {
                        $('.ren_number_dt_2 span').html(kq2 + ' - ' + kq1 + dv);
                    }
                }
                var dientich2 = Number($('#number_dt_2').val());
                if (dientich2 != 0 || dientich2 != '') {
                    var tieude = "Quy đổi: ";
                    var dv = " triệu/m2/tháng";
                    var ketqua1 = 0;
                    var ketqua2 = 0;
                    ketqua1 = giacodinh / dientich1;
                    ketqua2 = number_max / dientich2;
                    if (ketqua1 < 1000000000 && ketqua2 < 1000000000) {
                        kq1 = ketqua1 / 1000000;
                        kq2 = ketqua2 / 1000000;
                    }
                    if (kq1 < kq2) {
                        $('.ren_number_dt_2 span').html(kq1 + ' - ' + kq2 + dv);
                    } else {
                        $('.ren_number_dt_2 span').html(kq2 + ' - ' + kq1 + dv);
                    }
                }
            });
        }
    });

    $('#number ,#number_dt_1,#number_max,#number_dt_2').on('keyup', function() {
        var giacodinh = Number($('#number').val());
        var dientich1 = Number($('#number_dt_1').val());
        if (dientich1 != 0 || dientich1 != '') {
            var tieude = "Quy đổi: ";
            var dv = " triệu/m2";
            var ketqua = 0;
            ketqua = giacodinh / dientich1;
            $('.ren_number_dt_2 span').html(ketqua + dv);
            if (ketqua < 1000000000) {
                kq1 = ketqua / 1000000;
            } else if (ketqua < 1000000000) {
                kq1 = ketqua / 10000000;
            }
            $('.ren_number_dt_2 span').html(kq1 + dv);
        }
        var number_max = Number($('#number_max').val());
        if (number_max != 0 || number_max != '') {
            var tieude = "Quy đổi: ";
            var dv = " triệu/m2";
            var ketqua1 = 0;
            var ketqua2 = 0;
            ketqua1 = giacodinh / dientich1;
            ketqua2 = number_max / dientich1;
            var kq1 = 0;
            var kq2 = 0;
            if (ketqua1 < 1000000000 && ketqua2 < 1000000000) {
                kq1 = ketqua1 / 1000000;
                kq2 = ketqua2 / 1000000;
            };
            if (kq1 < kq2) {
                $('.ren_number_dt_2 span').html(kq1 + ' - ' + kq2 + dv);
            } else {
                $('.ren_number_dt_2 span').html(kq2 + ' - ' + kq1 + dv);
            }
        }
        var dientich2 = Number($('#number_dt_2').val());
        if (dientich2 != 0 || dientich2 != '') {
            var tieude = "Quy đổi: ";
            var dv = " triệu/m2";
            var ketqua1 = 0;
            var ketqua2 = 0;
            ketqua1 = giacodinh / dientich1;
            ketqua2 = number_max / dientich2;
            if (ketqua1 < 1000000000 && ketqua2 < 1000000000) {
                kq1 = ketqua1 / 1000000;
                kq2 = ketqua2 / 1000000;
            }
            if (kq1 <= kq2) {
                $('.ren_number_dt_2 span').html(kq1 + ' - ' + kq2 + dv);
            } else {
                $('.ren_number_dt_2 span').html(kq2 + ' - ' + kq1 + dv);
            }
        }
    });
    var base_url = "<? echo base_url()?>";
    //-------------------
    function address(value1,value2,value3,value4,value5)
    {
        var city_id = $(value1).val();
        if (city_id > 0) {
            $.ajax({
                url: base_url+'PostNews/'+value3,
                type: 'POST',
                dataType: 'json',
                data: {city: city_id},
                success: function (response) {
                    $html 	   = '<option value="">'+value4+'</option>';
                    $.each(response, function(index, val) {
                        if(value5 == 1)
                        {
                            $html += '<option value="'+val.cit_id+'">'+val.cit_name+'</option>'
                        }
                        else if(value5 == 2)
                        {
                            $html += '<option value="'+val.ward_id+'">'+val.ward_name+'</option>'
                        }
                        else if(value5 == 3)
                        {
                            $html += '<option value="'+val.street_id+'">'+val.street_name+'</option>'
                        }
                    });
                    $("."+value2).html($html);
                },
            });
        }  
    }
    //--------------------validate
    jQuery.validator.addMethod("comparison", function (value, element) {
        var number = $("#number").val();
        return this.optional(element) || value > number;
    });
    jQuery.validator.addMethod("comparisons", function (value, element) {
        var number_dt_1 = $("#number_dt_1").val();
        return this.optional(element) || value > number_dt_1;
    });

    var stt_news = 0;
    var time_post_news = 0;
    var date_post_news = 0;

    $('.dangtin_btn-dang').click(function(){
        stt_news = 2;
        time_post_news = 0;
        date_post_news = 0;
    })
    $('.btn_draft').click(function() {
        stt_news = 1;
        time_post_news = 0;
        date_post_news = 0;
    })
    $('.btn_appointment').click(function() {
        stt_news = 3;
        date_post_news = $(".date_post_news").val();
        time_post_news = $(".time_post_news").val();
    })
    $("#postNews").validate({
        errorPlacement: function (error, element) {
        error.appendTo(element.parents(".box_input_infor"));
        error.wrap("<span class='errors'>");
        element.parents('.box_input_infor').addClass('validate_input');
        },
        ignore: [],
        debug: false,
        rules: {
            project_name:       "required",
            type_news:          "required",
            type_bds:           "required",
            city:               "required",
            districts:          "required",
            price_min:          "required",
            title_news:         "required",
            time_expired:           "required",
            giamax:             {
                                    required: true,
                                    number: true,
                                    comparison: true
                                },
            giamin:             "required",
            tdn_mota:           {
                                    required: function() 
                                    {
                                    CKEDITOR.instances.tdn_mota.updateElement();
                                    },

                                    minlength:10
                                },
            area_min:           "required",
            area_max:           {
                                    required: true,
                                    number: true,
                                    comparisons: true
                                },
        },
        messages: {
            project_name:       "Vui lòng nhập tên dự án",
            type_news:          "Vui lòng chọn loại hình dự án",
            type_bds:           "Vui lòng chọn loại hình bất động sản",
            city:               "Vui lòng chọn tỉnh / thành phố",
            districts:          "Vui lòng chọn quận / huyện",
            price_min:          "Vui lòng nhập giá min",
            price_min:           "Vui lòng chọn loại ảnh",
            title_news:         "Vui lòng nhập tiêu đề bài viết",
            time_expired:       "Vui lòng chọn ngày hết hạn",
            giamax:              {
                                    required: "Vui lòng nhập giá tiền",
                                    comparison: 'Giá trị max phải lớn hơn giá trị min'
                                },
            giamin:             "Vui lòng nhập giá tiền",
            tdn_mota:           {
                                    required :"Vui lòng nhập thông tin dự án",
                                    minlength:"Mô tả tối thiểu 10 kí tự"
                                },
            area_min:           "Vui lòng nhập diện tích mong muốn",
            area_max:           {
                                    required: "Vui lòng nhập diện tích mong muốn",
                                    comparisons: 'Giá trị diện tích phải lớn hơn giá trị diện tích ban đầu'
                                },

        },
        submitHandler: function() {
            var project_name  = $(".project_name").val();
            var type_news     = $("input[name='type_news']:checked").val();
            var type_bds      = $(".type_bds").val();
            var city          = $("#select_city").val();
            var districts     = $(".districts").val();
            var wards         = $(".wards").val();
            var street        = $(".street").val();
            var desc_addr     = $(".desc_addr").val();
            var giamin        = $("input[name='giamin']").val();
            var giamax        = $("input[name='giamax']").val();
            var radio_button  = $("#radio_button:checked").val();
            var direction     = $(".direction").val();
            var Legal_stt     = $(".Legal_stt").val();
            var area_min      = $("input[name='area_min']").val();
            var area_max      = $("input[name='area_max']").val();
            var title_news    = $(".title_news").val();
            var desc_project  = CKEDITOR.instances['tdn_mota'].getData();
            var floor         = $(".floor").val();
            var Balcony_direction = $(".Balcony_direction").val();
            var corner        = $(".corner").val();
            var bathroom      = $(".radio_bathroom.chutrang_nenxanh").attr('data-id');
            var bedroom       = $(".radio_bedroom.chutrang_nenxanh").attr('data-id');
            var Interior      = $(".Interior").val();
            var arr_img_desc  = $("#file_input").prop('files');

            if(type_bds == 2 || type_bds == 3 || type_bds == 4 || type_bds == 5)
            {
                var mattien       = $(".mattien8").val();
                var duongvao      = $(".duongvao8").val();
            }
            else
            {
                var mattien       = $(".mattien9").val();
                var duongvao      = $(".duongvao9").val();
            }


            var chieusau      = $(".chieusau").val();
            var area_convert  = $(".ren_number_dt_2 span").text();
            var time_expired  = $(".time_expired").val();
            var detail_bds      = $("#onclick_chonloai_bds").val(); 

            var data = new FormData();
            data.append('project_name', project_name);
            data.append('type_news', type_news);
            data.append('type_bds', type_bds);
            data.append('detail_bds', detail_bds);
            data.append('city', city);
            data.append('districts', districts);
            data.append('wards', wards);
            data.append('street', street);
            data.append('desc_addr', desc_addr);
            data.append('giamin', giamin);
            data.append('giamax', giamax);
            data.append('radio_button', radio_button);
            data.append('Legal_stt', Legal_stt);
            data.append('area_min', area_min);
            data.append('area_max', area_max);
            data.append('title_news', title_news);
            data.append('desc_project', desc_project);
            data.append('floor', floor);
            data.append('Balcony_direction', Balcony_direction);
            data.append('direction', direction);
            data.append('corner', corner);
            data.append('time_expired',time_expired);
            data.append('bathroom', bathroom);
            data.append('bedroom', bedroom);
            data.append('Interior', Interior);
            data.append('stt_news', stt_news);
            data.append('date_post_news', date_post_news);
            data.append('time_post_news', time_post_news);
            data.append('area_convert', area_convert);
            $.each(arr_img_desc, function( index, value ) {
                data.append('arr_img_desc[]' ,value);
            });
            data.append('mattien' ,mattien);
            data.append('chieusau',chieusau);
            data.append('duongvao',duongvao);

            $.ajax({
			 	url: base_url+'PostNews/addNewsAfterLogin',
			 	type: 'post',
			 	cache: false,
			 	contentType: false,
			 	processData: false,
			 	dataType: 'json',
			 	data:data,
			 	enctype: 'multipart/form-data',
			 	success: function(response) {
                    if (response.status == 1) {
                        alert(response.msg);
                        if(type_news == 1)
                        {
                            window.location.href = 'quan-ly-tin-dang-mua-ban.html';
                        }
                        else
                        {
                            window.location.href = 'quan-ly-tin-dang-cho-thue.html'; 
                        }
                        
                    }
			 	},
			 	error: function(xhr) {
			 		alert('Error');
			 	}
			});
		}
    });

</script>

</html>
<style>
    .select2-container--default .select2-selection--single {
        border: none !important;
    }

    .select2-search .select2-search--dropdown {
        display: none !important;
    }

    .select2-selection__rendered {
        background: #FAFAFA;
    }
</style>