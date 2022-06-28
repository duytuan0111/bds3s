<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Tin đăng dự án</title>
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="<? echo base_url()?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url()?>assets/css/slick-theme.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<? echo base_url()?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" href="<? echo base_url()?>assets/frontend/css/style_tan.css">
    <link rel="stylesheet" href="<? echo base_url()?>assets/frontend/css/style.css">
</head>

<body>
    <? require_once APPPATH.'views/site/includes/da_header.php' ?>
    <div class="backgroung_chinh">
        <div class="link_trang">
            <div class="bot-24">
                <div class="body_moigioi_padding_header_tex flex mr_b24px">
                    <div class="body_moigioi_padding_header_tex_tt font_size_14">Trang chủ</div>
                    <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_right.png" class="checked" alt="">
                    <div class="body_moigioi_padding_header_tex_moigioi font_size_14">Loại đăng tin</div>
                    <img src="<? echo base_url(); ?>assets/images/img_du_an/icon_right.png" class="checked" alt="">
                    <div class="chuxanh">Soạn tin đăng
                    </div>
                </div>
            </div>

            <!-- khoi noi dung -->
            <h1 class="chuden">Soạn tin đăng</h1>

            <!-- thong tin chung -->
            <div class="khung_thongtin top-24">
                <p class="chuxanh font-medium thongtin_tieude">Thông tin cơ bản</p>
                <div class="thongtin_noidung top-8">
                    <div class="khoitren flex space">
                        <div class="khoitrai">
                            <div class="khoicon top-21">
                                <p class="font-medium height-20">Tên dự án <span class="chudo">*</span></p>
                                <div class="khunginput top-8">
                                    <input type="text" placeholder="Nhập tên dự án">
                                </div>
                            </div>
                            <div class="khoicon top-21">
                                <p class="font-medium height-20">Giới thiệu <span class="chudo">*</span></p>
                                <div class="khungtext top-8">
                                    <textarea name="" id="" cols="30" rows="10"
                                        placeholder="Nhập nội dung giới thiệu ngắn"></textarea>
                                </div>
                            </div>
                            <div class="khoicon top-21">
                                <p class="font-medium height-20">Loại bất động sản <span class="chudo">*</span></p>
                                <div class="top-8">
                                    <select class="select_option js-states form-control">
                                        <option value="0">Đất, nhà xưởng, kho bãi</option>
                                        <option value="1">hehe</option>
                                        <option value="2">haha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="khoicon top-21">
                                <div class="font-medium height-20">Tỉnh/ thành phố <span class="chudo">*</span></div>
                                <div class="top-8">
                                    <select class="select_option js-states form-control">
                                        <option value="0">Chọn tỉnh thành phố</option>
                                        <option value="1">hehe</option>
                                        <option value="2">haha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="khoicon top-21">
                                <div class="font-medium height-20">Quận huyện <span class="chudo">*</span></div>
                                <div class="top-8">
                                    <select class="select_option js-states form-control">
                                        <option value="0">Chọn quận huyện</option>
                                        <option value="1">hehe</option>
                                        <option value="2">haha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="khoicon top-21">
                                <div class="font-medium height-20">Phường xã</div>
                                <div class="top-8">
                                    <select class="select_option js-states form-control">
                                        <option value="0">Chọn phường xã</option>
                                        <option value="1">hehe</option>
                                        <option value="2">haha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="khoicon top-21">
                                <div class="font-medium height-20">Ngày đăng</div>
                                <div class="khunginput top-8">
                                    <input type="date">
                                </div>
                            </div>
                        </div>
                        <div class="khoiphai">
                            <div class="khoicon top-44 khoi-map">

                            </div>
                            <div class="khoicon top-21">
                                <div class="font-medium height-20">Đường phố</div>
                                <div class="top-8">
                                    <select class="select_option js-states form-control">
                                        <option value="0">Chọn Đường/ phố</option>
                                        <option value="1">hehe</option>
                                        <option value="2">haha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="khoicon top-21">
                                <div class="font-medium height-20">Địa chỉ chi tiết</div>
                                <div class="khunginput top-8">
                                    <input type="text" placeholder="Nhập địa chỉ chi tiết">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end thong tin chung -->

            <!-- them anh (fix) -->
            <div class="add_anhbia top-24">
                <img src="<? echo base_url(); ?>assets/images/anh_rong.png" alt="" class="post_anh">
                <div class="butt_themanh flex center-center c-pointer">
                    <img src="<? echo base_url(); ?>assets/images/tan_camera.svg" alt="" class="right-8 wh-24">
                    <p class="font-medium chuxanh">Thêm ảnh bìa</p>
                </div>
                <input type="file" class="click_anh hidden">
            </div>
            <!-- end them anh -->
            <div class="border-375"></div>
            <!-- chu dau tu -->
            <div class="chudautu top-24">
                <p class="font-medium chuxanh">Chủ đầu tư</p>
                <div class="chudautu_noidung flex space top-8">
                    <div class="khoitrai">
                        <div class="khoicon top-21">
                            <p class="font-medium height-20">Tên công ty <span class="chudo">*</span></p>
                            <div class="khunginput top-8">
                                <input type="text" placeholder="Nhập tên công ty">
                            </div>
                        </div>
                        <div class="khoicon top-21">
                            <p class="font-medium height-20">Số điện thoại</p>
                            <div class="khunginput top-8">
                                <input type="text" placeholder="Nhập số điện thoại">
                            </div>
                        </div>
                        <div class="khoicon top-21">
                            <p class="font-medium height-20">Số dự án</p>
                            <div class="khunginput top-8">
                                <input type="text" placeholder="Nhập số dự án">
                            </div>
                        </div>
                    </div>
                    <div class="khoiphai">
                        <div class="khoicon top-21">
                            <p class="font-medium height-20">Ngày thành lập công ty</p>
                            <div class="khunginput top-8">
                                <input type="date">
                            </div>
                        </div>
                        <div class="khoicon top-21">
                            <p class="font-medium height-20">Địa chỉ trụ sở chính</p>
                            <div class="khunginput top-8">
                                <input type="text" placeholder="Nhập địa chỉ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end chu dau tu -->
            <div class="border-375"></div>
            <!-- thong tin chi tiet du an -->
            <div class="thongtinchitietduan top-24">
                <p class="font-medium chuxanh">Thông tin chi tiết dự án</p>
                <div class="thongtinchitietduan_noidung flex space top-8">
                    <div class="khoitrai">
                        <div class="khoicon top-21">
                            <p class="font-medium height-20">Thời gian khởi công</p>
                            <div class="khunginput top-8">
                                <input type="date">
                            </div>
                        </div>
                        <div class="khoicon top-21">
                            <p class="font-medium height-20">Các loại diện tích</p>
                            <div class="khunginput top-8">
                                <input type="text" placeholder="Nhập các loại diện tích">
                            </div>
                        </div>
                        <div class="khoicon top-21">
                            <p class="font-medium height-20">Số tòa nhà</p>
                            <div class="khunginput top-8">
                                <input type="text" placeholder="Nhập số tòa nhà">
                            </div>
                        </div>
                        <div class="khoicon top-21">
                            <p class="font-medium height-20">Số sản phẩm</p>
                            <div class="khunginput top-8">
                                <input type="text" placeholder="Nhập số sản phẩm">
                            </div>
                        </div>
                        <div class="khoicon top-21">
                            <p class="font-medium height-20">Quy mô</p>
                            <div class="khunginput top-8">
                                <input type="text" placeholder="Nhập quy mô dự án (m2)">
                            </div>
                        </div>
                        <div class="khoicon top-21">
                            <p class="font-medium height-20">Diện tích xây dựng</p>
                            <div class="khunginput top-8">
                                <input type="text" placeholder="Nhập diện tích xây dựng">
                            </div>
                        </div>
                    </div>
                    <div class="khoiphai">
                        <div class="khoicon top-21">
                            <p class="font-medium height-20">Thời gian hoàn thành</p>
                            <div class="khunginput top-8">
                                <input type="date">
                            </div>
                        </div>
                        <div class="khoicon top-21">
                            <p class="font-medium height-20">Ngày bàn giao <span class="chudo">*</span></p>
                            <div class="khunginput top-8">
                                <input type="date">
                            </div>
                        </div>
                        <div class="khoicon top-21 relative">
                            <p class="font-medium height-20">Khoảng giá <span class="chudo">*</span></p>
                            <div class="khoinho flex space top-8">
                                <div class="khunginput khoibe">
                                    <input type="text" class="nhapmin" placeholder="Giá min">
                                </div>
                                <div class="khunginput khoibe">
                                    <input type="text" class="nhapmax" placeholder="Giá max">
                                </div>
                            </div>
                            <div class="khoigia absolute right-position-0">
                                <p>
                                    <span class="tienmin">0</span> <span class="dvmin">triệu</span>
                                    <span>-</span>
                                    <span class="tienmax">0</span> <span class="dvmax">triệu</span>
                                    <span>VNĐ</span>
                                </p>
                            </div>
                        </div>
                        <div class="khoicon top-21 relative">
                            <p class="font-medium height-20">Tổng vốn đầu tư</p>
                            <div class="khunginput top-8">
                                <input type="text" class="tonggia" placeholder="Nhập số vốn đầu tư">
                            </div>
                            <div class="khoigia absolute right-position-0">
                                <p>
                                    <span class="tien_tonggia">0</span> <span class="dvtonggia">triệu</span>
                                    <span>VNĐ</span>
                                </p>
                            </div>
                        </div>
                        <div class="khoicon top-21">
                            <p class="font-medium height-20">Tiến độ</p>
                            <div class="top-8">
                                <select class="select_option js-states form-control">
                                    <option value="0">Chọn tiến độ</option>
                                    <option value="1">hehe</option>
                                    <option value="2">haha</option>
                                </select>
                            </div>
                        </div>
                        <div class="khoicon top-21">
                            <p class="font-medium">Trạng thái</p>
                            <div class="top-8">
                                <select class="select_option js-states form-control">
                                    <option value="0">Chọn Đường/ phố</option>
                                    <option value="1">hehe</option>
                                    <option value="2">haha</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="khoiduoi top-32 relative">
                    <div class="type_mota absolute">
                        <div class="des_text active_mota c-pointer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
                                    stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M18.5 2.50023C18.8978 2.1024 19.4374 1.87891 20 1.87891C20.5626 1.87891 21.1022 2.1024 21.5 2.50023C21.8978 2.89805 22.1213 3.43762 22.1213 4.00023C22.1213 4.56284 21.8978 5.1024 21.5 5.50023L12 15.0002L8 16.0002L9 12.0002L18.5 2.50023Z"
                                    stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="des_img c-pointer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23 19C23 19.5304 22.7893 20.0391 22.4142 20.4142C22.0391 20.7893 21.5304 21 21 21H3C2.46957 21 1.96086 20.7893 1.58579 20.4142C1.21071 20.0391 1 19.5304 1 19V8C1 7.46957 1.21071 6.96086 1.58579 6.58579C1.96086 6.21071 2.46957 6 3 6H7L9 3H15L17 6H21C21.5304 6 22.0391 6.21071 22.4142 6.58579C22.7893 6.96086 23 7.46957 23 8V19Z"
                                    stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M12 17C14.2091 17 16 15.2091 16 13C16 10.7909 14.2091 9 12 9C9.79086 9 8 10.7909 8 13C8 15.2091 9.79086 17 12 17Z"
                                    stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <input type="file" class="hidden click_img_mota">

                    <div class="khoi_mota">
                        <textarea name="" id="" cols="30" rows="10" class="mota_text"></textarea>
                        <div class="thongtinctda_khoianh relative hidden">
                            <img src="<? echo base_url(); ?>assets/images/anh_rong.png" alt="" class="mota_img anh_mota">
                            <div class="thongtinctda_khoibutton flex center-center absolute">
                                <button class="thongtinctda_tieude_anh">Thêm tiêu đề ảnh</button>
                                <img src="<? echo base_url(); ?>assets/images/rotate-left.png" alt="" class="wh-24 ttctda_img_left right-10">
                                <img src="<? echo base_url(); ?>assets/images/rotate-right.png" alt="" class="wh-24 ttctda_img_right right-35">
                                <img src="<? echo base_url(); ?>assets/images/remove_img.png" alt="" class="wh-24 thongtinctda_remove">
                            </div>
                        </div>
                    </div>
                    <div class="khoi_mota_img top-8 relative hidden">
                        <input type="text" placeholder="Nhập tiêu đề ảnh">
                        <img src="<? echo base_url(); ?>assets/images/remove_img.png" alt="" class="absolute thongtinctda_remove_tieudeanh wh-20">
                    </div>
                </div>
            </div>
            <!-- end chi tiet du an -->
            <div class="border-375"></div>
            <!-- vi tri du an -->
            <div class="vitriduan top-24">
                <p class="font-medium chuxanh">Vị trí dự án</p>
                <div class="vitriduan_noidung">
                    <p class="vtda_ghichu chuden right-22">(Giới thiệu và mô tả vị trí dự án)</p>
                    <div class="vitriduan_khoimota top-15 relative">
                        <div class="type_mota absolute">
                            <div class="vtda_destext c-pointer active_mota">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
                                        stroke="#666666" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M18.5 2.50023C18.8978 2.1024 19.4374 1.87891 20 1.87891C20.5626 1.87891 21.1022 2.1024 21.5 2.50023C21.8978 2.89805 22.1213 3.43762 22.1213 4.00023C22.1213 4.56284 21.8978 5.1024 21.5 5.50023L12 15.0002L8 16.0002L9 12.0002L18.5 2.50023Z"
                                        stroke="#666666" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="vtda_desimg c-pointer">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23 19C23 19.5304 22.7893 20.0391 22.4142 20.4142C22.0391 20.7893 21.5304 21 21 21H3C2.46957 21 1.96086 20.7893 1.58579 20.4142C1.21071 20.0391 1 19.5304 1 19V8C1 7.46957 1.21071 6.96086 1.58579 6.58579C1.96086 6.21071 2.46957 6 3 6H7L9 3H15L17 6H21C21.5304 6 22.0391 6.21071 22.4142 6.58579C22.7893 6.96086 23 7.46957 23 8V19Z"
                                        stroke="#666666" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M12 17C14.2091 17 16 15.2091 16 13C16 10.7909 14.2091 9 12 9C9.79086 9 8 10.7909 8 13C8 15.2091 9.79086 17 12 17Z"
                                        stroke="#666666" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <input type="file" class="hidden vtda_click_anh">

                        <div class="vitriduan_mota">
                            <div class="khoi_mota">
                                <textarea name="" id="" cols="30" rows="10" class="vtda_text"></textarea>
                                <div class="vitriduan_khoianh relative hidden">
                                    <img src="<? echo base_url(); ?>assets/images/anh_rong.png" alt="" class="vtda_post_anh">
                                    <div class="vitriduan_khoibutton flex center-center absolute">
                                        <button class="vitriduan_tieude_anh c-pointer">Thêm tiêu đề ảnh</button>
                                        <img src="<? echo base_url(); ?>assets/images/rotate-left.png" alt=""
                                            class="wh-24 vitriduan_img_left right-10 c-pointer">
                                        <img src="<? echo base_url(); ?>assets/images/rotate-right.png" alt=""
                                            class="wh-24 vitriduan_img_right right-35 c-pointer">
                                        <img src="<? echo base_url(); ?>assets/images/remove_img.png" alt=""
                                            class="wh-24 vitriduan_remove c-pointer">
                                    </div>
                                </div>
                            </div>
                            <div class="khoi_mota_img top-8 relative hidden">
                                <input type="text" placeholder="Nhập tiêu đề ảnh">
                                <img src="<? echo base_url(); ?>assets/images/remove_img.png" alt=""
                                    class="absolute vtda_remove_tieudeanh wh-20 c-pointer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end vi tri du an -->
            <div class="border-375"></div>
            <!-- mat bang du an -->
            <div class="matbangduan top-24">
                <p class="font-medium chuxanh">Mặt bằng dự án</p>
                <div class="mbda_noidung">
                    <div class="khoi_tieude_mbda">
                        <p class="font-medium chuden height-20 top-29">Tiêu đề mặt bằng dự án <span
                                class="chudo">*</span></p>
                        <div class="khunginput top-8">
                            <input type="text" placeholder="Nhập tiêu đề mặt bằng dự án">
                        </div>
                        <input onchange="mbda_tieude_click_anh(this)" type="file" class="hidden mbda_tieude_click_anh">
                        <div class="mbda_khoi_anh top-24 relative">
                            <img src="<? echo base_url(); ?>assets/images/anh_rong.png" alt="" class="mbda_post_anh">
                            <div onclick="mbda_add_anh(this)" class="mbda_add_anh flex center-center absolute">
                                <img src="<? echo base_url(); ?>assets/images/tan_camera.svg" alt="" class="right-8 wh-24">
                                <p class="chuxanh">Thêm ảnh</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="khoi_add_mbda left-22 flex top-8">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 5V19" stroke="#3691D9" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M5 12H19" stroke="#3691D9" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <p class="chuxanh">Thêm tiêu đề mặt bằng dự án</p>
                </div>
                <div class="mbda_khoi_mota top-32 relative">
                    <div class="type_mota absolute">
                        <div class="mbda_destext c-pointer active_mota">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
                                    stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M18.5 2.50023C18.8978 2.1024 19.4374 1.87891 20 1.87891C20.5626 1.87891 21.1022 2.1024 21.5 2.50023C21.8978 2.89805 22.1213 3.43762 22.1213 4.00023C22.1213 4.56284 21.8978 5.1024 21.5 5.50023L12 15.0002L8 16.0002L9 12.0002L18.5 2.50023Z"
                                    stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="mbda_desimg c-pointer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23 19C23 19.5304 22.7893 20.0391 22.4142 20.4142C22.0391 20.7893 21.5304 21 21 21H3C2.46957 21 1.96086 20.7893 1.58579 20.4142C1.21071 20.0391 1 19.5304 1 19V8C1 7.46957 1.21071 6.96086 1.58579 6.58579C1.96086 6.21071 2.46957 6 3 6H7L9 3H15L17 6H21C21.5304 6 22.0391 6.21071 22.4142 6.58579C22.7893 6.96086 23 7.46957 23 8V19Z"
                                    stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M12 17C14.2091 17 16 15.2091 16 13C16 10.7909 14.2091 9 12 9C9.79086 9 8 10.7909 8 13C8 15.2091 9.79086 17 12 17Z"
                                    stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <input type="file" class="mbda_click_anh hidden">
                    <div class="mbda_text-or-img">
                        <textarea name="" id="" cols="30" rows="10" class="mbda_text"></textarea>
                        <div class="mbda_khoianh relative hidden">
                            <img src="<? echo base_url(); ?>assets/images/anh_rong.png" alt="" class="mbda_post_anh_mota">
                            <div class="mbda_khoibutton flex center-center absolute">
                                <button class="mbda_tieude_anh c-pointer">Thêm tiêu đề ảnh</button>
                                <img src="<? echo base_url(); ?>assets/images/rotate-left.png" alt=""
                                    class="wh-24 mbda_img_left right-10 c-pointer">
                                <img src="<? echo base_url(); ?>assets/images/rotate-right.png" alt=""
                                    class="wh-24 mbda_img_right right-35 c-pointer">
                                <img src="<? echo base_url(); ?>assets/images/remove_img.png" alt="" class="wh-24 mbda_remove c-pointer">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mbda_khoi_tieude relative hidden">
                    <input type="text" placeholder="Nhập tiêu đề ảnh">
                    <img src="<? echo base_url(); ?>assets/images/remove_img.png" alt="" class="absolute mbda_tieude_remove wh-20 c-pointer">
                </div>
            </div>
            <!-- end mat bang du an -->
            <div class="border-375"></div>
            <!-- tien ich du an -->
            <div class="tienichduan top-24">
                <p class="font-medium chuxanh">Tiện ích dự án</p>
                <p class="tida_title chuden top-8">Bài đăng thông tin bổ sung thường có hiệu quả hơn 40% so với bài đăng
                    thường</p>
                <div class="tida_khoi_thongtin flex">
                    <div class="tida_khoito">
                        <div class="tida_thongtin_khoicon top-24">
                            <div class="tida_click flex space center-center">
                                <p class="font-medium chuden">Cơ sở vật chất</p>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.588 6.8392C15.4318 6.68298 15.2198 6.59521 14.9989 6.59521C14.7779 6.59521 14.566 6.68298 14.4097 6.8392L10.588 10.6609C10.4296 10.8129 10.2185 10.8979 9.99887 10.8979C9.77926 10.8979 9.56815 10.8129 9.40971 10.6609L5.58804 6.8392C5.43087 6.6874 5.22037 6.60341 5.00187 6.60531C4.78338 6.60721 4.57437 6.69485 4.41986 6.84935C4.26535 7.00386 4.17771 7.21287 4.17581 7.43137C4.17391 7.64987 4.25791 7.86037 4.40971 8.01754L8.23054 11.8392C8.46269 12.0714 8.73831 12.2556 9.04165 12.3812C9.34499 12.5069 9.67012 12.5716 9.99846 12.5716C10.3268 12.5716 10.6519 12.5069 10.9553 12.3812C11.2586 12.2556 11.5342 12.0714 11.7664 11.8392L15.588 8.01754C15.7443 7.86126 15.832 7.64934 15.832 7.42837C15.832 7.2074 15.7443 6.99548 15.588 6.8392Z"
                                        fill="#474747" />
                                </svg>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Công viên</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Hộp thư dân cư</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Đài phun nước</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Ghế công cộng</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Chỗ để xe miễn phí</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Chỗ để xe công cộng miễn phí</p>
                            </div>
                        </div>
                        <div class="tida_thongtin_khoicon top-24">
                            <div class="tida_click flex space center-center">
                                <p class="font-medium chuden">Cơ sử vật chất</p>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.588 6.8392C15.4318 6.68298 15.2198 6.59521 14.9989 6.59521C14.7779 6.59521 14.566 6.68298 14.4097 6.8392L10.588 10.6609C10.4296 10.8129 10.2185 10.8979 9.99887 10.8979C9.77926 10.8979 9.56815 10.8129 9.40971 10.6609L5.58804 6.8392C5.43087 6.6874 5.22037 6.60341 5.00187 6.60531C4.78338 6.60721 4.57437 6.69485 4.41986 6.84935C4.26535 7.00386 4.17771 7.21287 4.17581 7.43137C4.17391 7.64987 4.25791 7.86037 4.40971 8.01754L8.23054 11.8392C8.46269 12.0714 8.73831 12.2556 9.04165 12.3812C9.34499 12.5069 9.67012 12.5716 9.99846 12.5716C10.3268 12.5716 10.6519 12.5069 10.9553 12.3812C11.2586 12.2556 11.5342 12.0714 11.7664 11.8392L15.588 8.01754C15.7443 7.86126 15.832 7.64934 15.832 7.42837C15.832 7.2074 15.7443 6.99548 15.588 6.8392Z"
                                        fill="#474747" />
                                </svg>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Rap chiếu phim</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Spa làm đẹp</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Khu vui chơi trẻ em</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Khu thư giãn người già</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Công viên nước</p>
                            </div>
                        </div>
                    </div>

                    <div class="tida_khoito">
                        <div class="tida_thongtin_khoicon top-24">
                            <div class="tida_click flex space center-center">
                                <p class="font-medium chuden">Y tế giáo dục</p>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.588 6.8392C15.4318 6.68298 15.2198 6.59521 14.9989 6.59521C14.7779 6.59521 14.566 6.68298 14.4097 6.8392L10.588 10.6609C10.4296 10.8129 10.2185 10.8979 9.99887 10.8979C9.77926 10.8979 9.56815 10.8129 9.40971 10.6609L5.58804 6.8392C5.43087 6.6874 5.22037 6.60341 5.00187 6.60531C4.78338 6.60721 4.57437 6.69485 4.41986 6.84935C4.26535 7.00386 4.17771 7.21287 4.17581 7.43137C4.17391 7.64987 4.25791 7.86037 4.40971 8.01754L8.23054 11.8392C8.46269 12.0714 8.73831 12.2556 9.04165 12.3812C9.34499 12.5069 9.67012 12.5716 9.99846 12.5716C10.3268 12.5716 10.6519 12.5069 10.9553 12.3812C11.2586 12.2556 11.5342 12.0714 11.7664 11.8392L15.588 8.01754C15.7443 7.86126 15.832 7.64934 15.832 7.42837C15.832 7.2074 15.7443 6.99548 15.588 6.8392Z"
                                        fill="#474747" />
                                </svg>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Nhà thuốc</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Bệnh viện</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Trường cấp 1,2,3</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Trường mần non</p>
                            </div>
                        </div>
                        <div class="tida_thongtin_khoicon top-24">
                            <div class="tida_click flex space center-center">
                                <p class="font-medium chuden">Tiêu dùng, ẩm thực</p>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.588 6.8392C15.4318 6.68298 15.2198 6.59521 14.9989 6.59521C14.7779 6.59521 14.566 6.68298 14.4097 6.8392L10.588 10.6609C10.4296 10.8129 10.2185 10.8979 9.99887 10.8979C9.77926 10.8979 9.56815 10.8129 9.40971 10.6609L5.58804 6.8392C5.43087 6.6874 5.22037 6.60341 5.00187 6.60531C4.78338 6.60721 4.57437 6.69485 4.41986 6.84935C4.26535 7.00386 4.17771 7.21287 4.17581 7.43137C4.17391 7.64987 4.25791 7.86037 4.40971 8.01754L8.23054 11.8392C8.46269 12.0714 8.73831 12.2556 9.04165 12.3812C9.34499 12.5069 9.67012 12.5716 9.99846 12.5716C10.3268 12.5716 10.6519 12.5069 10.9553 12.3812C11.2586 12.2556 11.5342 12.0714 11.7664 11.8392L15.588 8.01754C15.7443 7.86126 15.832 7.64934 15.832 7.42837C15.832 7.2074 15.7443 6.99548 15.588 6.8392Z"
                                        fill="#474747" />
                                </svg>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Quán bar</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Nhà hàng</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Trung tâm thương mại</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Cây ATM</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Ngân hàng</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Coffee shop</p>
                            </div>
                        </div>
                    </div>

                    <div class="tida_khoito">
                        <div class="tida_thongtin_khoicon top-24">
                            <div class="tida_click flex space center-center">
                                <p class="font-medium chuden">An toàn, vệ sinh</p>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.588 6.8392C15.4318 6.68298 15.2198 6.59521 14.9989 6.59521C14.7779 6.59521 14.566 6.68298 14.4097 6.8392L10.588 10.6609C10.4296 10.8129 10.2185 10.8979 9.99887 10.8979C9.77926 10.8979 9.56815 10.8129 9.40971 10.6609L5.58804 6.8392C5.43087 6.6874 5.22037 6.60341 5.00187 6.60531C4.78338 6.60721 4.57437 6.69485 4.41986 6.84935C4.26535 7.00386 4.17771 7.21287 4.17581 7.43137C4.17391 7.64987 4.25791 7.86037 4.40971 8.01754L8.23054 11.8392C8.46269 12.0714 8.73831 12.2556 9.04165 12.3812C9.34499 12.5069 9.67012 12.5716 9.99846 12.5716C10.3268 12.5716 10.6519 12.5069 10.9553 12.3812C11.2586 12.2556 11.5342 12.0714 11.7664 11.8392L15.588 8.01754C15.7443 7.86126 15.832 7.64934 15.832 7.42837C15.832 7.2074 15.7443 6.99548 15.588 6.8392Z"
                                        fill="#474747" />
                                </svg>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Máy báo khói</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Bình chữa cháy</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Camera an ninh</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Máy báo khí CO</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Bảo vệ an ninh</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Dọn vệ sinh</p>
                            </div>
                        </div>
                        <div class="tida_thongtin_khoicon top-24 khoi-768">
                            <div class="tida_click flex space center-center">
                                <p class="font-medium chuden">Thể thao</p>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.588 6.8392C15.4318 6.68298 15.2198 6.59521 14.9989 6.59521C14.7779 6.59521 14.566 6.68298 14.4097 6.8392L10.588 10.6609C10.4296 10.8129 10.2185 10.8979 9.99887 10.8979C9.77926 10.8979 9.56815 10.8129 9.40971 10.6609L5.58804 6.8392C5.43087 6.6874 5.22037 6.60341 5.00187 6.60531C4.78338 6.60721 4.57437 6.69485 4.41986 6.84935C4.26535 7.00386 4.17771 7.21287 4.17581 7.43137C4.17391 7.64987 4.25791 7.86037 4.40971 8.01754L8.23054 11.8392C8.46269 12.0714 8.73831 12.2556 9.04165 12.3812C9.34499 12.5069 9.67012 12.5716 9.99846 12.5716C10.3268 12.5716 10.6519 12.5069 10.9553 12.3812C11.2586 12.2556 11.5342 12.0714 11.7664 11.8392L15.588 8.01754C15.7443 7.86126 15.832 7.64934 15.832 7.42837C15.832 7.2074 15.7443 6.99548 15.588 6.8392Z"
                                        fill="#474747" />
                                </svg>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Bể bơi</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Bóng rổ</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Bóng đá</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Cầu lông</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Sân golf</p>
                            </div>
                        </div>
                    </div>

                    <div class="tida_khoito not-768">
                        <div class="tida_thongtin_khoicon top-24">
                            <div class="tida_click flex space center-center">
                                <p class="font-medium chuden">Thể thao</p>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.588 6.8392C15.4318 6.68298 15.2198 6.59521 14.9989 6.59521C14.7779 6.59521 14.566 6.68298 14.4097 6.8392L10.588 10.6609C10.4296 10.8129 10.2185 10.8979 9.99887 10.8979C9.77926 10.8979 9.56815 10.8129 9.40971 10.6609L5.58804 6.8392C5.43087 6.6874 5.22037 6.60341 5.00187 6.60531C4.78338 6.60721 4.57437 6.69485 4.41986 6.84935C4.26535 7.00386 4.17771 7.21287 4.17581 7.43137C4.17391 7.64987 4.25791 7.86037 4.40971 8.01754L8.23054 11.8392C8.46269 12.0714 8.73831 12.2556 9.04165 12.3812C9.34499 12.5069 9.67012 12.5716 9.99846 12.5716C10.3268 12.5716 10.6519 12.5069 10.9553 12.3812C11.2586 12.2556 11.5342 12.0714 11.7664 11.8392L15.588 8.01754C15.7443 7.86126 15.832 7.64934 15.832 7.42837C15.832 7.2074 15.7443 6.99548 15.588 6.8392Z"
                                        fill="#474747" />
                                </svg>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Bể bơi</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Bóng rổ</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Bóng đá</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Cầu lông</p>
                            </div>
                            <div class="noidung_con hidden_375 flex bot-5 top-21 center-height">
                                <input type="checkbox" class="right-9">
                                <p>Sân golf</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tida_khoimota relative top-29">
                    <div class="tida_button_mota absolute">
                        <div class="type_mota absolute">
                            <div class="tida_destext c-pointer active_mota">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
                                        stroke="#666666" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M18.5 2.50023C18.8978 2.1024 19.4374 1.87891 20 1.87891C20.5626 1.87891 21.1022 2.1024 21.5 2.50023C21.8978 2.89805 22.1213 3.43762 22.1213 4.00023C22.1213 4.56284 21.8978 5.1024 21.5 5.50023L12 15.0002L8 16.0002L9 12.0002L18.5 2.50023Z"
                                        stroke="#666666" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="tida_desimg c-pointer">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23 19C23 19.5304 22.7893 20.0391 22.4142 20.4142C22.0391 20.7893 21.5304 21 21 21H3C2.46957 21 1.96086 20.7893 1.58579 20.4142C1.21071 20.0391 1 19.5304 1 19V8C1 7.46957 1.21071 6.96086 1.58579 6.58579C1.96086 6.21071 2.46957 6 3 6H7L9 3H15L17 6H21C21.5304 6 22.0391 6.21071 22.4142 6.58579C22.7893 6.96086 23 7.46957 23 8V19Z"
                                        stroke="#666666" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M12 17C14.2091 17 16 15.2091 16 13C16 10.7909 14.2091 9 12 9C9.79086 9 8 10.7909 8 13C8 15.2091 9.79086 17 12 17Z"
                                        stroke="#666666" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <input type="file" class="hidden tida_click_anh">
                    <div class="tida_text_or_img">
                        <textarea name="" id="" cols="30" rows="10" class="tida_text"></textarea>
                        <div class="tida_khoianh relative hidden">
                            <img src="<? echo base_url(); ?>assets/images/anh_rong.png" alt="" class="tida_post_anh">
                            <div class="tida_khoibutton flex center-center absolute">
                                <button class="tida_tieude_anh c-pointer">Thêm tiêu đề ảnh</button>
                                <img src="<? echo base_url(); ?>assets/images/rotate-left.png" alt=""
                                    class="wh-24 tida_img_left right-10 c-pointer">
                                <img src="<? echo base_url(); ?>assets/images/rotate-right.png" alt=""
                                    class="wh-24 tida_img_right right-10 c-pointer">
                                <img src="<? echo base_url(); ?>assets/images/remove_img.png" alt="" class="wh-24 tida_remove c-pointer">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tida_khoi_tieude relative hidden">
                    <input type="text" placeholder="Nhập tiêu đề ảnh">
                    <img src="<? echo base_url(); ?>assets/images/remove_img.png" alt="" class="absolute tida_tieude_remove wh-20 c-pointer">
                </div>
            </div>
            <!-- end tien ich du an -->

            <!-- gioi thieu du an -->
            <div class="khoi_gioithieuduan">
                <div class="gioithieuduan top-24">
                    <p class="font-medium chuden">Tên đầu mục <span class="chudo">*</span></p>
                    <div class="khunginput top-8">
                        <input type="text" placeholder="Nhập tên đầu mục">
                    </div>
                    <div class="gtda_khoimota relative top-24">
                        <div class="gtda_button_mota absolute">
                            <div class="type_mota absolute">
                                <div onclick="gtda_destext(this)" class="gtda_destext c-pointer active_mota">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M18.5 2.50023C18.8978 2.1024 19.4374 1.87891 20 1.87891C20.5626 1.87891 21.1022 2.1024 21.5 2.50023C21.8978 2.89805 22.1213 3.43762 22.1213 4.00023C22.1213 4.56284 21.8978 5.1024 21.5 5.50023L12 15.0002L8 16.0002L9 12.0002L18.5 2.50023Z"
                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div onclick="gtda_desimg(this)" class="gtda_desimg c-pointer">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23 19C23 19.5304 22.7893 20.0391 22.4142 20.4142C22.0391 20.7893 21.5304 21 21 21H3C2.46957 21 1.96086 20.7893 1.58579 20.4142C1.21071 20.0391 1 19.5304 1 19V8C1 7.46957 1.21071 6.96086 1.58579 6.58579C1.96086 6.21071 2.46957 6 3 6H7L9 3H15L17 6H21C21.5304 6 22.0391 6.21071 22.4142 6.58579C22.7893 6.96086 23 7.46957 23 8V19Z"
                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M12 17C14.2091 17 16 15.2091 16 13C16 10.7909 14.2091 9 12 9C9.79086 9 8 10.7909 8 13C8 15.2091 9.79086 17 12 17Z"
                                            stroke="#666666" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <input onchange="gtda_click_anh(this)" type="file" class="hidden gtda_click_anh">
                        <div class="gtda_text_or_img">
                            <textarea name="" id="" cols="30" rows="10" class="gtda_text"></textarea>
                            <div class="gtda_khoianh relative hidden">
                                <img src="<? echo base_url(); ?>assets/images/anh_rong.png" alt="" class="gtda_post_anh">
                                <div class="gtda_khoibutton flex center-center absolute">
                                    <button class="gtda_tieude_anh c-pointer">Thêm tiêu đề ảnh</button>
                                    <img src="<? echo base_url(); ?>assets/images/rotate-left.png" alt=""
                                        class="wh-24 gtda_img_left right-10 c-pointer">
                                    <img src="<? echo base_url(); ?>assets/images/rotate-right.png" alt=""
                                        class="wh-24 gtda_img_right right-10 c-pointer">
                                    <img src="<? echo base_url(); ?>assets/images/remove_img.png" alt="" class="wh-24 gtda_remove c-pointer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end gioi thieu du an -->
            <div class="border-375"></div>
            <!-- add muc gioi thieu du an -->
            <div class="add_gioithieuduan top-24">
                <div class="click_gioithieuduan flex center-height c-pointer">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 5V19" stroke="#3691D9" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M5 12H19" stroke="#3691D9" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <p class="chuxanh">Thêm mục giới thiệu dự án</p>
                </div>
            </div>
            <!-- end add muc gioi thieu du an -->

            <!-- butt dang tin -->
            <div class="flex space butt_dangtin relative">
                <button onclick="hienpopup('popup_thongtin')" class="butt_xanh flex center-center c-pointer">
                    <p class="font-medium size-16 right-8">Đăng ngay</p>
                    <img src="<? echo base_url(); ?>assets/images/butt_dangngay.svg" alt="" class="wh-20">
                </button>
                <div class="chon flex center-center c-pointer">
                    <p class="right-3">Chọn</p>
                    <img src="<? echo base_url(); ?>assets/images/arrow_chon.png" alt="" class="wh-24">
                </div>
                <div onclick="hienpopup('popup_lenlich')"
                    class="popup_con chuden size-14 flex center-height absolute c-pointer hidden">Hẹn lịch đăng tin
                </div>
            </div>
            <!-- end butt dang tin -->

            <!-- butt hen lich dang tin -->
            <div class="flex space butt_henlich relative hidden">
                <button class="butt_xanh flex center-center c-pointer">
                    <p class="font-medium size-16 right-8">Hẹn lịch đăng tin</p>
                    <img src="<? echo base_url(); ?>assets/images/clock_henlich.png" alt="" class="wh-20">
                </button>
                <div class="chon_henlich flex center-center c-pointer">
                    <p class="right-3">Chọn</p>
                    <img src="<? echo base_url(); ?>assets/images/arrow_chon.png" alt="" class="wh-24">
                </div>
                <div class="henlich_popup_con chuden size-14 absolute c-pointer hidden">
                    <div onclick="hienpopup('popup_lenlich')" class="doithoigian flex center-height">Đổi thời gian</div>
                    <div class="dangngay flex center-height">Đăng ngay</div>
                </div>
            </div>
            <!-- end butt hen lich dang tin -->

            <div class="gioithieu_tindang top-32 size-14">
                <p>Bạn đang truy cập trang đăng tin BĐS miễn phí <span class="chuxanh">Batdongsan3S</span>. Cùng khám
                    phá những thông tin hữu ích dành cho môi giới, hoặc người đang có nhu cầu đăng tin bán nhà đất.</p>
                <p class="top-16 size-18 font-medium">Các Loại hình bất động sản được đăng tin nhiều nhất hiện nay</p>
                <p class="top-16">Dạo quanh một vòng các web đăng tin BĐS miễn phí, có thể thấy rất nhiều mẫu tin đăng
                    thuộc các loại hình bất động sản khác nhau. Tuy nhiên, theo thống kê của Homedy, hiện nay có 3 loại
                    hình nhà đất đang được đăng tin rao nhiều nhất, bao gồm: bán nhà đất, bán căn hộ chung cư và <span
                        class="chuxanh">cho thuê nhà</span>. Điều này cho thấy nguồn cung cũng như nhu cầu của thị
                    trường cho những sản phẩm bất động sản này là rất lớn.</p>
                blah blah blah...
            </div>

            <!-- popup len lich -->
            <div id="popup_lenlich" class="popup chuden size-16 hidden">
                <div class="table overflow-hidden">
                    <div class="lenlich_noidung">
                        <p class="lenlich_tieude font-medium size-24">Lên lịch đăng tin</p>
                        <div class="top-24 chuden">Lên lịch đăng tin vào thời gian phù hợp nhất để tương tác với nhiều
                            khách hàng hơn hoặc tự chọn ngày giờ đăng tin trong tương lại.</div>
                        <div class="lenlich_input top-32 flex space">
                            <div class="khunginput">
                                <input type="date">
                            </div>
                            <div class="khunginput">
                                <input type="time">
                            </div>
                        </div>
                        <div class="khoi_butt top-32 flex center-center">
                            <button class="butt_huy font-medium size-16 close c-pointer right-24">Hủy</button>
                            <button class="butt_luu font-medium size-16 close c-pointer">Lưu</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end popup len lich -->

            <!-- popup hoan tat thong tin -->
            <div id="popup_thongtin" class="popup chuden size-16 hidden">
                <div class="table overflow-hidden">
                    <div class="hoantatthongtin_noidung">
                        <div class="back_butt flex absolute center-height c-pointer close">
                            <img src="<? echo base_url(); ?>assets/images/back-arrow.png" alt="" class="wh-24 right-8">
                            <p class="size-14 font-medium chuden">Quay lại</p>
                        </div>
                        <div class="chuxanh size-24 top-16 bot-16 font-medium text-center">Hoàn tất thông tin</div>
                        <div class="khoithongtin">
                            <div class="khunginput top-16">
                                <input type="text" placeholder="Email *">
                            </div>
                            <div class="khunginput top-16">
                                <input type="text" placeholder="Mật khẩu *">
                            </div>
                            <div class="khunginput top-16">
                                <input type="text" placeholder="Nhập lại mật khẩu *">
                            </div>
                            <div class="khunginput top-16">
                                <input type="text" placeholder="Số điện thoại *">
                            </div>
                            <div class="khunginput top-16">
                                <input type="text" placeholder="Họ và tên *">
                            </div>
                            <div class="top-16">
                                <select name="" id="thongtin_loaitk" class="select_option js-states form-control">
                                    <option value="0">Loại tài khoản *</option>
                                    <option value="1">Người môi giới</option>
                                    <option value="2">Người cho thuê, bán</option>
                                    <option value="3">Doanh nghiệp</option>
                                </select>
                            </div>
                            <div class="thongtin_linhvuc top-16 hidden">
                                <select name="" id="" class="select_option js-states form-control">
                                    <option value="">Lĩnh vực *</option>
                                    <option value="">Người môi giới</option>
                                    <option value="">Người cho thuê, bán</option>
                                    <option value="">Doanh nghiệp</option>
                                </select>
                            </div>
                            <div class="thongtin_msthue khunginput top-16 hidden">
                                <input type="text" placeholder="Mã số thuế">
                            </div>
                            <button class="butt_hoantat c-pointer font-medium size-16">Hoàn tất</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end popup hoan tat thong tin -->

            <!-- popup otp -->
            <div id="popup_otp" class="popup chuden size-16 hidden">
                <div class="table overflow-hidden">
                    <div class="otp_noidung">
                        <div class="back_butt flex absolute center-height c-pointer close">
                            <img src="<? echo base_url(); ?>assets/images/back-arrow.png" alt="" class="wh-24 right-8">
                            <p class="size-14 font-medium chuden">Quay lại</p>
                        </div>
                        <div class="chuxanh size-24 top-16 bot-16 font-medium text-center">Nhập mã OTP</div>
                        <div class="top-16 font-medium chuden">Mã xác thực gửi về Email "<span
                                class="email">ABC@gmail.com</span>"</div>
                        <div class="nhap_otp flex space top-24">
                            <input type="text" id="digit-1" name="digit-1" data-next="digit-2" maxlength="1">
                            <input type="text" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1"
                                maxlength="1">
                            <input type="text" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2"
                                maxlength="1">
                            <input type="text" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3"
                                maxlength="1">
                            <input type="text" id="digit-5" name="digit-5" data-next="digit-6" data-previous="digit-4"
                                maxlength="1">
                            <input type="text" id="digit-6" name="digit-6" data-previous="digit-5" maxlength="1">
                        </div>
                        <div class="top-19 flex-end center-height">
                            <p class="chuden right-8 c-default">Gửi lại mã xác thực</p>
                            <img src="<? echo base_url(); ?>assets/images/reload.png" alt="" class="wh-30 c-pointer">
                        </div>
                        <button class="butt_xacthuc_otp c-pointer font-medium size-16">Xác thực</button>
                        <div class="top-24 flex center-width chuvang c-pointer">Nhập lại Email</div>
                    </div>
                </div>
            </div>
            <!-- end popup otp -->

            <!-- popup thanh cong -->
            <div id="popup_thanhcong" class="popup chuden size-16 hidden">
                <div class="table overflow-hidden">
                    <div class="thanhcong_noidung">
                        <p class="text-center size-14 font-medium">Đăng tin thành công</p>
                        <p class="top-8 size-12 text-center">Bạn còn <span>2</span> lượt đăng tin miễn phí trong này</p>
                        <div class="img_successful">
                            <img src="<? echo base_url(); ?>assets/images/successful.png" alt="">
                        </div>
                        <div class="top-16 font-medium size-14 text-center">Chúc mừng bạn đã trợ thành thành viên của
                            Batdongsan3S</div>
                        <button class="butt_thanhcong top-24 size-16 font-medium c-pointer">Quản lý tin đăng</button>
                    </div>
                </div>
            </div>
            <!-- end popup thanh cong -->

            <!-- popup error -->
            <div id="popup_error" class="popup chuden size-16 hidden">
                <div class="table overflow-hidden">
                    <div class="error_noidung">
                        <div class="img_error flex center-width">
                            <img src="<? echo base_url(); ?>assets/images/error_icon.png" alt="">
                        </div>
                        <div class="error_thongbao text-center top-24 size-14 font-medium">Bạn cần đăng nhập để thực
                            hiện thông báo này</div>
                        <div class="error_butt top-24 flex space">
                            <button class="error_huy size-16 font-medium c-pointer close">Hủy</button>
                            <button class="error_dangnhap size-16 font-medium c-pointer">Đăng nhập</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end popup error -->
        </div>
    </div>


    <? require_once APPPATH.'views/site/includes/da_footer.php' ?>
</body>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/slick.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/select2.min.js"></script>
<script type="text/javascript" src="<? echo base_url();?>assets/js/js_tan.js"></script>
<script>
$(".select_option").select2({
    width: "100%",
});

$('#thongtin_loaitk').change(function() {
    var value = $(this).val();
    if (value != 0) {
        $('.thongtin_linhvuc').removeClass('hidden');
        $('.thongtin_msthue').removeClass('hidden');
    } else {
        $('.thongtin_linhvuc').addClass('hidden');
        $('.thongtin_msthue').addClass('hidden');
    }
});
</script>

</html>