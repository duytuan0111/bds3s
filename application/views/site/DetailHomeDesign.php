<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_t.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_header_d.css">
    <title>Thiết kế nhà đẹp</title>
</head>

<body>
    <div id="popup_report" class="popup hidden">
        <div class="main_popup mn_w519 bg_white pd_24_16">
            <div class="sroll_popup">
                <div class="header_popup d_flex align_c space_b">
                    <h2 class="font_s24 line_h24 font_w500 cl_red">Báo cáo vi phạm</h2>
                    <div class="wh_24 cursor_p" onclick="showHiddenPopup('#popup_report', 'hidden')">
                        <img src="<? echo base_url(); ?>assets/images/close_gray.png" alt="">
                    </div>
                </div>
                <div class="content_poup mt_16">
                    <form action="" method="post">
                        <span class="font_s16 line_h24 font_w400 black_md">Tại sao bài viết có vấn đề?</span>
                        <div>
                            <div class="mt_16 d_flex align_c">
                                <input type="radio" name="report" class="cursor_p mr_16 wh_20">
                                <label class="font_s16 line_h24 font_w400 black_md">Spam</label>
                            </div>

                            <div class="mt_16 d_flex align_c">
                                <input type="radio" name="report" class="cursor_p mr_16 wh_20">
                                <label class="font_s16 line_h24 font_w400 black_md">Lừa đảo</label>
                            </div>

                            <div class="mt_16 d_flex align_c">
                                <input type="radio" name="report" class="cursor_p mr_16 wh_20">
                                <label class="font_s16 line_h24 font_w400 black_md">Nội dung chính trị</label>
                            </div>

                            <div class="mt_16 d_flex align_c">
                                <input type="radio" name="report" class="cursor_p mr_16 wh_20">
                                <label class="font_s16 line_h24 font_w400 black_md">Ngôn từ xúc phạm</label>
                            </div>
                        </div>
                        <div class="bd_b_gr mt_24">
                            <textarea placeholder="Mô tả chi tiết về vấn đề bạn gặp phải?" class="resize w_100 h52 txt_area" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="d_flex align_c mt_21">
                            <div class="h_40 w_ip_50_gp12 bd_b_gr">
                                <input type="text" placeholder="Nhập mã bảo vệ" class="rs_input w_100 h_100 br_8 ipfzdf txtels input_ pd_b_16">
                            </div>
                            <div class="w_ip_50_gp12 d_flex align_c captcha ml_24">
                                <span class="block bg_white">Bb74K0</span>
                            </div>
                        </div>

                        <div class="mt_40 d_flex center_center">
                            <button type="button" class="btn font_s16 line_h19 font_w500 btn_blue cl_white mn_w187 br_8 h_40 disableBtn" onclick="showHiddenPopup('#popup_add_sussess','hidden')">Gửi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="popup_personal" class="popup hidden">
        <div class="main_popup mn_w446 bg_white pd_24">
            <div class="sroll_popup">
                <form action="" method="post">
                    <div class="header_popup d_flex align_c space_b">
                        <div class="d_flex align_c pd_t_8">
                            <div class="d_flex align_c">
                                <input type="radio" name="genre" class="wh_20 mr_9" checked>
                                <span>Anh</span>
                            </div>

                            <div class="d_flex align_c ml_33">
                                <input type="radio" name="genre" class="wh_20 mr_9">
                                <span>Chị</span>
                            </div>

                            <div class="d_flex align_c ml_33">
                                <input type="radio" name="genre" class="wh_20 mr_9">
                                <span>Khác</span>
                            </div>
                        </div>
                        <div class="cursor_p" onclick="showHiddenPopup('#popup_personal', 'hidden')">
                            <span class="font_s14 line_h16 font_w500">Đóng</span>
                        </div>
                    </div>
                    <div class="content_poup">
                        <div class="h_40 br_8 bd-gray1 mt_16">
                            <input type="text" class="rs_input input_ w_100 h_100 br_8 pd_12_16" placeholder="Họ và tên *">
                        </div>

                        <div class="h_40 br_8 bd-gray1 mt_16">
                            <input type="text" class="rs_input input_ w_100 h_100 br_8 pd_12_16" placeholder="Số điện thoại *">
                        </div>

                        <div class="h_40 br_8 bd-gray1 mt_16">
                            <input type="text" class="rs_input input_ w_100 h_100 br_8 pd_12_16" placeholder="Email *">
                        </div>
                        <div class="mt_40 d_flex center_center">
                            <button type="button" class="btn font_s16 line_h19 font_w500 btn_blue cl_white w_100 br_8 h_40 disableBtn">Cập nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="link_header">
        <? require_once APPPATH.'views/site/includes/da_header.php' ?>
    </div>
    <div class="wapper wapper_duy_them">
        <div class="directional d_flex pd_lr_80 pd_tb_24 duy_fig_bug3">
            <div>
                <a href="/" class="font_s14 line_h17 font_w400">Trang chủ</a>
            </div>
            <span class="arrow duy_them_class_whimg"><img src="<? echo base_url(); ?>assets/images/arrow_small_black.png" alt=""></span>
            <div>
                <a href="" class="font_s14 line_h17 font_w400">Thiết kế nhà đẹp</a>
            </div>
            <span class="arrow duy_them_class_whimg"><img src="<? echo base_url(); ?>assets/images/arrow_small_black.png" alt=""></span>
            <div class="directional_acitve">
                <a href="" class="font_s14 line_h17 font_w400">Chi tiết mẫu nhà đẹp</a>
            </div>
        </div>
        <div class="container duy_fig_block bg_blue_10">
            <div class="layout_beautiful bg_x pd_lr_80 pd_tb_32_28 duy_fig_bug1">
                <div class="d_grid grid_col_6_185 grid_row_3_113 gd_gp_24 h_565">
                    <div>
                        <img src="<? echo base_url(); ?>assets/images/layout_bf.png" alt="" />
                    </div>
                    <div>
                        <img src="<? echo base_url(); ?>assets/images/layout_bf.png" alt="" />
                    </div>
                    <div>
                        <img src="<? echo base_url(); ?>assets/images/layout_bf.png" alt="" />
                    </div>
                    <div>
                        <img src="<? echo base_url(); ?>assets/images/layout_bf.png" alt="" />
                    </div>
                    <div>
                        <img src="<? echo base_url(); ?>assets/images/layout_bf.png" alt="" />
                    </div>
                    <div>
                        <img src="<? echo base_url(); ?>assets/images/layout_bf.png" alt="" />
                    </div>
                </div>
            </div>

            <div class="control_infor bg_white duy_fig_bug_1024_1">
                <div class="pd_lr_80 pd_tb_11 d_flex align_c duy_fig_bug4_1">
                    <span class="active">Thông tin cơ bản</span>
                    <span>Thông tin chi tiết</span>
                    <span>Liên hệ tư vấn</span>
                    <span>Đánh giá</span>
                    <span>Bình luận</span>
                </div>
            </div>

            <div class="apartment_details pd_t_24 pd_lr_80 duy_fig_bug_1024_2">
                <div class="basic_infor">
                    <div class="villa_heading">
                        <h2 class="font_s24 line_h36 font_w500 black_md duy_fig_bug_1024_3">Căn hộ chung cư 2 phòng ngủ có không gian làm việc tại nhà</h2>
                        <span class="block mt_8 font_s16 line_h24 font_w400 gray_2 duy_fig_bug_1024_2_font14">01/10/2022 . 10:03</span>
                    </div>
                    <h2 class="mt_30 font_s30 font_w500 blue_title line_h35 duy_fig_bug_1024_2_font">Thông tin cơ bản</h2>
                    <div class="infor_details mt_30 d_flex row flex_w home_dg align_s duy_fig_bug_1024_4">
                        <div class="col_4 d_flex align_c flex_w">
                            <span>Loại công trình:</span>
                            <span class="dynamic block ml_8">Chung cư</span>
                        </div>
                        <div class="col_4 d_flex align_c flex_w">
                            <span class="flex flex_w">Màu sắc:</span>
                            <span class="flex align_c flex_w ml_8">
                                <div class="picker d_flex align_c">
                                    <span class="color" style="background-color: #000000"></span>
                                    <span>Đen</span>
                                </div>
                                <div class="picker d_flex align_c">
                                    <span class="color" style="background-color: #FFFFFF; border: 1px solid #CCCCCC;"></span>
                                    <span>Trắng</span>
                                </div>
                            </span>
                        </div>
                        <div class="col_4 d_flex align_c flex_w">
                            <span>Thời gian thực hiện:</span>
                            <span class="block ml_8">Dưới 1 tháng</span>
                        </div>
                        <div class="col_4 d_flex align_c flex_w">
                            <span>Tỉnh thành:</span>
                            <span class="dynamic block ml_8">Hà Nội</span>
                        </div>
                        <div class="col_4 d_flex align_c flex_w">
                            <span>Diện tích:</span>
                            <span class="dynamic block ml_8">50 m2</span>
                        </div>
                        <div class="col_4 d_flex align_c flex_w">
                            <span>Thực hiện bởi:</span>
                            <span class="block ml_8">Tự làm</span>
                        </div>
                        <div class="col_4 d_flex align_c flex_w">
                            <span>Số phòng ngủ:</span>
                            <span class="block ml_8">2 phòng ngủ</span>
                        </div>
                        <div class="col_4 d_flex align_c flex_w">
                            <span>Quận huyện:</span>
                            <span class="dynamic block ml_8">Thanh Xuân</span>
                        </div>
                        <div class="col_4 d_flex align_c flex_w">
                            <span>Phong cách:</span>
                            <span class="dynamic block ml_8">Vintage</span>
                        </div>
                        <div class="col_4 d_flex align_c flex_w">
                            <span>Ngân sách:</span>
                            <span class="block ml_8">200 triệu</span>
                        </div>
                        <div class="col_4 d_flex align_c flex_w">
                            <span>Loại ảnh:</span>
                            <span class="block ml_8">Ảnh thật</span>
                        </div>
                    

                        <div class="col_4 d_flex align_c flex_w">
                            <span>Dự án:</span>
                            <span class="dynamic block ml_8">Two Piece</span>
                        </div>
                        
                        <!-- <div class="col_4 d_flex flex_column align_s flex_center">
                            <span>Loại công trình:<span class="dynamic">Chung cư</span></span>
                            <span>Diện tích:<span class="dynamic">50 m2</span></span>
                            <span>Phong cách:<span class="dynamic">Vintage</span></span>
                        </div>

                        <div class="col_4 d_flex flex_column align_s flex_center">
                            <span class="flex flex_w">Màu sắc:
                                <span class="flex align_c flex_w">
                                    <div class="picker d_flex align_c">
                                        <span class="color" style="background-color: #000000"></span>
                                        <span>Đen</span>
                                    </div>
                                    <div class="picker d_flex align_c">
                                        <span class="color" style="background-color: #FFFFFF; border: 1px solid #CCCCCC;"></span>
                                        <span>Trắng</span>
                                    </div>
                                </span>
                            </span>
                            <span>Thực hiện bởi:<span>Tự làm</span></span>
                            <span>Ngân sách:<span>200 triệu</span></span>
                        </div>

                        <div class="col_4 d_flex flex_column align_s flex_center">
                            <span>Thời gian thực hiện:<span>Dưới 1 tháng</span></span>
                            <span>Số phòng ngủ:<span>2 phòng ngủ</span></span>
                            <span>Loại ảnh:<span>Ảnh thật</span></span>
                        </div>

                        <div class="col_4 d_flex flex_column align_s flex_center">
                            <span>Tỉnh thành:<span class="dynamic">Chung cư</span></span>
                            <span>Quận huyện:<span class="dynamic">Thanh Xuân</span></span>
                            <span>Dự án:<span class="dynamic">Two Piece</span></span>
                        </div> -->
                    </div>
                    <div class="keywork hidden">
                        <div class="d_flex flex_w align_c mt_24">
                            <div class="br_8 pd_8_16 bg_blue_5 ">
                                <span class="font_s16 line_h19 font_w400 blue_title">Nhà phố mặt đường</span>
                            </div>
                        </div>
                    </div>
                    <div class="shares d_flex align_c mt_40 duy_fig_fl_w">
                        <button class="btn br_8 bd-gray1 d_flex align_c pd_12_27 w_181_h40 mr_24 duy_fig_fig1">
                            <div class="mr_11 d_flex align_c wh_20">
                                <img src="<? echo base_url(); ?>assets/images/save_gray.png" alt="">
                            </div>
                            <span class="font_s16 line_h30 font_w400 duy_fig_fontz_14">Lưu</span>
                        </button>

                        <button class="btn br_8 bd-gray1 d_flex align_c pd_12_27 w_181_h40 duy_fig_fig1" onclick="viewAndClosePopup ('#popup_report','#popup_report .main_popup')">
                            <div class="mr_11 d_flex align_c wh_20">
                                <img src="<? echo base_url(); ?>assets/images/frown_gray.png" alt="">
                            </div>
                            <span class="font_s16 line_h30 font_w400 duy_fig_fontz_14">Báo xấu</span>
                        </button>
                        <div class="share_to d_flex align_c ml_34 duy_fig_fig2">
                            <span class="font_s16 line_h19 font_w400 duy_fig_fontz_14">Chia sẻ tin này đến</span>
                            <div class="detail_home_left-btn-click d_flex align_c ml_18">
                                <div class="item-btn-lick-icon m_r_24  cursor_p">
                                    <span class="item-btn-title" data-title="Sao chép liên kết">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="30" height="30" rx="15" fill="black" />
                                            <path d="M21.4436 8.48592C20.1291 7.17136 17.9694 7.17136 16.6549 8.48592L12.5234 12.5235C11.2088 13.932 11.2088 15.9977 12.5234 17.4061C12.6173 17.5 12.8051 17.5939 12.899 17.6878L14.3074 16.2794C14.2135 16.1855 14.0258 16.0916 13.9319 15.9977C13.3685 15.4343 13.3685 14.4953 13.9319 13.932L18.0633 9.80048C18.6267 9.2371 19.5657 9.2371 20.1291 9.80048C20.6924 10.3639 20.6924 11.3028 20.1291 11.8662L18.9084 13.0869C19.284 13.8381 19.3779 14.6831 19.284 15.4343L21.4436 13.2747C22.8521 11.9601 22.8521 9.80048 21.4436 8.48592Z" fill="white" />
                                            <path d="M17.0306 12.2402L15.6221 13.6487C15.6221 13.6487 15.9038 13.8365 15.9977 13.9304C16.5611 14.4938 16.5611 15.4327 15.9977 15.9961L11.8662 20.1276C11.3028 20.691 10.3639 20.691 9.80048 20.1276C9.2371 19.5642 9.2371 18.6252 9.80048 18.0619L11.0211 16.8412C10.6456 16.09 10.9272 15.6205 10.6456 14.4938L8.48592 16.6534C7.17136 17.968 7.17136 20.1276 8.48592 21.4422C9.80048 22.7567 11.9601 22.7567 13.2747 21.4422L17.4061 17.3107C18.7207 15.9961 18.7207 13.8365 17.4061 12.5219C17.2184 12.428 17.0306 12.2402 17.0306 12.2402Z" fill="white" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="item-btn-lick-icon m_r_24 cursor_p">
                                    <span class="item-btn-title" data-title="Twitter">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_656_101035)">
                                                <path d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71574 23.2843 0 15 0C6.71574 0 0 6.71574 0 15C0 23.2843 6.71574 30 15 30Z" fill="black" />
                                                <path d="M24.6177 9.03303C23.9102 9.34699 23.1502 9.55922 22.3512 9.65462C23.1667 9.16632 23.7914 8.39255 24.0863 7.47162C23.3117 7.93169 22.464 8.25558 21.5799 8.42922C20.8605 7.66237 19.8346 7.18359 18.6996 7.18359C16.521 7.18359 14.7542 8.94971 14.7542 11.1295C14.7542 11.4384 14.789 11.7397 14.8558 12.029C11.5763 11.8642 8.66874 10.2933 6.72257 7.90624C6.38274 8.48922 6.18823 9.16704 6.18823 9.89024C6.18823 11.2591 6.88495 12.4668 7.9436 13.1743C7.31689 13.1548 6.70394 12.9857 6.15599 12.6809V12.7308C6.15599 14.6428 7.51596 16.2371 9.32125 16.5997C8.98962 16.6906 8.64159 16.7381 8.28155 16.7381C8.02698 16.7381 7.78 16.714 7.53873 16.6686C8.04088 18.2358 9.4982 19.3765 11.2244 19.4088C9.87393 20.4674 8.17224 21.0985 6.32401 21.0985C6.00568 21.0985 5.69106 21.0795 5.3822 21.0422C7.12877 22.1622 9.20253 22.8159 11.431 22.8159C18.6889 22.8159 22.6582 16.8032 22.6582 11.5888C22.6582 11.4176 22.6544 11.2477 22.6462 11.0784C23.4195 10.519 24.0871 9.82644 24.6177 9.03303Z" fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_656_101035">
                                                    <rect width="30" height="30" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                </div>
                                <div class="item-btn-lick-icon m_r_24 icon_facebook  cursor_p">
                                    <span class="item-btn-title" data-title="Facebook">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 22.4869 5.48528 28.6925 12.6562 29.8177V19.3359H8.84766V15H12.6562V11.6953C12.6562 7.93593 14.8957 5.85938 18.3219 5.85938C19.9631 5.85938 21.6797 6.15234 21.6797 6.15234V9.84375H19.7882C17.9249 9.84375 17.3438 11 17.3438 12.1862V15H21.5039L20.8389 19.3359H17.3438V29.8177C24.5147 28.6925 30 22.4869 30 15Z" fill="black" />
                                            <path d="M20.8389 19.3359L21.5039 15H17.3438V12.1862C17.3438 11 17.9249 9.84375 19.7882 9.84375H21.6797V6.15234C21.6797 6.15234 19.9631 5.85938 18.3219 5.85938C14.8957 5.85938 12.6562 7.93593 12.6562 11.6953V15H8.84766V19.3359H12.6562V29.8177C14.2093 30.0608 15.7907 30.0608 17.3438 29.8177V19.3359H20.8389Z" fill="white" />
                                        </svg>
                                    </span>

                                </div>
                                <div class="item-btn-lick-icon m_r_24 icon_mess  cursor_p">
                                    <span class="item-btn-title" data-title="messenger">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15 1.25C7.25421 1.25 1.25 6.9238 1.25 14.5875C1.25 18.5961 2.89285 22.06 5.56827 24.4526C5.79286 24.6536 5.92844 24.9352 5.93765 25.2366L6.01253 27.6824C6.03646 28.4626 6.84232 28.9703 7.55622 28.6551L10.2854 27.4503C10.5168 27.3483 10.776 27.3293 11.0198 27.3964C12.2739 27.7413 13.6087 27.925 15 27.925C22.7458 27.925 28.75 22.2512 28.75 14.5875C28.75 6.9238 22.7458 1.25 15 1.25Z" fill="url(#paint0_radial_656_101042)" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.74324 18.4889L10.7823 12.0808C11.4248 11.0614 12.8006 10.8076 13.7646 11.5305L16.9771 13.9399C17.2718 14.161 17.6774 14.1598 17.9709 13.9371L22.3095 10.6444C22.8886 10.2049 23.6445 10.8979 23.2569 11.5129L19.2179 17.921C18.5753 18.9404 17.1995 19.1942 16.2355 18.4712L13.023 16.0618C12.7283 15.8408 12.3227 15.8419 12.0292 16.0647L7.69061 19.3574C7.11154 19.7968 6.35562 19.1038 6.74324 18.4889Z" fill="white" />
                                            <defs>
                                                <radialGradient id="paint0_radial_656_101042" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(6.54292 28.6028) scale(29.964)">
                                                    <stop stop-color="#000000" />
                                                    <stop offset="0.60975" stop-color="#000000" />
                                                    <stop offset="0.93482" stop-color="#000000" />
                                                    <stop offset="1" stop-color="#000000" />
                                                </radialGradient>
                                            </defs>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="details mt_48 duy_fig_fig3">
                    <h2 class="font_s30 font_w500 blue_title line_h35 duy_fig_bug_1024_2_font duy_fig_fig_fz16">Thông tin chi tiết</h2>
                    <div class="content_detail mt_24">
                        <!-- dữ liệu động -->
                        <div style="display: flex; flex-direction: column; align-items: center;" class="duy_fig_bug2">
                            <img src="<? echo base_url(); ?>assets/images/layout_bf.png" alt="" width="800" height="500">
                            <span style="display: block;margin-top: 8px ;font-style: italic;font-weight: 400; font-size:16px; line-height: 24px;" class="duy_fig_fontz_14">Tiêu đề ảnh</span>
                            <div class="duy_them_tag_div_1">Phòng khách</div>
                        </div>
                        <p style="margin-top: 24px; text-align: justify; font-size: 16px; line-height: 26px; font-weight: 400" class="duy_fig_bug3_1">Trong các thiết kế chung cư hiện đại năm 2021, việc ưu tiên công năng để mở rộng không gian căn hộ được đưa lên hàng đầu so với các yêu cầu thiết kế khác. Thêm vào đó, trong tình hình dịch bệnh COVID-19 vẫn tiếp tục diễn biến phức tạp, các khách hàng gia đình cũng như cá nhân đều chú trọng đến việc thiết lập một khu vực thuận tiện để làm việc tại nhà. Thiết kế lần này NADA được thử thách tạo ra một không gian cho gia đình trẻ, trong đó chú trọng tạo ra khu vực làm việc riêng biệt và toàn bộ thiết kế thể hiện được dấu ấn phong cách của chủ nhân căn hộ tại dự án Lavita Charm - Thủ Đức.</p>
                    </div>
                </div>
            </div>

            <div class="form_contact pd_b_98 mt_48 duy_fig_bug4" style="background-image: url('../images/bg_form.png')">
                <div class="wapper pd_lr_80 d_flex space_b duy_fig_bug_1024_5">
                    <div class="contact_left pd_t_67 duy_fig_bug_1024_5_1">
                        <h3 class="font_s30 line_h35 font_w500 duy_fig_bug_1024_2_font">Liên hệ tư vấn</h3>
                        <div class="contact_people d_flex mt_45 pd_l_90 duy_fig_bug_1024_5_2">
                            <div class="mr_32 duy_fig_mr1">
                                <img src="<? echo base_url(); ?>assets/images/avatar_ts.png" alt="">
                            </div>
                            <div class="d_flex flex_column align_s pd_t_10">
                                <div class="d_flex flex_column align_s">
                                    <span class="font_s20 line_h23 font_w500 duy_font_16_375">Cameron Williamson</span>
                                    <span class="follower font_s14 line_h16 font_w400 block mt_8 duy_font_14_375">123 người theo dõi</span>
                                    <div class="evaluate mt_9 d_flex align_c">
                                        <!-- Mã màu đổi start: #FFA317; -->
                                        <?php for ($j = 0; $j < 5; $j++) : ?>
                                            <div class="evaluate_item">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.24295 11.2498C9.14966 11.2502 9.05764 11.2282 8.97462 11.1856L5.99962 9.62813L3.02462 11.1856C2.92801 11.2364 2.8191 11.2591 2.71025 11.2511C2.6014 11.2431 2.49698 11.2047 2.40887 11.1402C2.32076 11.0758 2.25248 10.988 2.21181 10.8867C2.17114 10.7854 2.15969 10.6748 2.17878 10.5673L2.76212 7.28313L0.358784 4.94979C0.283801 4.87497 0.230609 4.78113 0.204917 4.67836C0.179225 4.5756 0.182002 4.46777 0.212951 4.36646C0.246761 4.26279 0.308954 4.17067 0.392472 4.10055C0.47599 4.03044 0.577489 3.98514 0.685451 3.96979L4.01045 3.48563L5.47462 0.493127C5.52238 0.394502 5.59696 0.311326 5.68982 0.253128C5.78267 0.19493 5.89003 0.164062 5.99962 0.164062C6.1092 0.164062 6.21657 0.19493 6.30942 0.253128C6.40227 0.311326 6.47685 0.394502 6.52462 0.493127L8.00628 3.47979L11.3313 3.96396C11.4392 3.97931 11.5407 4.0246 11.6243 4.09472C11.7078 4.16483 11.77 4.25695 11.8038 4.36063C11.8347 4.46194 11.8375 4.56976 11.8118 4.67253C11.7861 4.7753 11.7329 4.86913 11.658 4.94396L9.25462 7.27729L9.83795 10.5615C9.85878 10.6708 9.84787 10.7839 9.80653 10.8872C9.76518 10.9906 9.69512 11.08 9.60462 11.1448C9.49899 11.2188 9.3718 11.2557 9.24295 11.2498Z" fill="#CCCCCC" />
                                                </svg>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                    <button class="btn br_4 mt_16 btn_blue pd_4_10 wh_75_24">
                                        <span class="font_s14 line_h16 font_w400">theo dõi</span>
                                    </button>
                                </div>
                                <div class="mt_40 duy_fig_mr_2">
                                    <button class="btn btn_blue pd_11_26 w_167_h40">
                                        <div class="wh_24 phone mr_8">
                                            <img src="<? echo base_url(); ?>assets/images/phone-call_white.png" alt="">
                                        </div>
                                        <span class="font_s16 line_h19 font_w400 duy_fig_fontz_14">
                                            0333777***
                                        </span>
                                    </button>
                                    <button class="btn btn_bd_blue pd_11_26 d_flex align_c br_8 w_167_h40 mt_16 duy_fig_mr_3">
                                        <div class="wh_24 inbox mr_8">
                                            <img src="<? echo base_url(); ?>assets/images/inbox_blue.png" alt="">
                                        </div>
                                        <span class="font_s16 line_h19 font_w400 duy_fig_fontz_14">Chat ngay</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact_right pd_t_54 w_50_gp50 duy_fig_bug_1024_5_3">
                        <h3 class="font_s24 line_h28 font_w500">Yêu cầu liên hệ lại</h3>
                        <div class="mt_27">
                            <form action="" method="post">
                                <div class="form-group d_flex align_c space_b">
                                    <input type="text" placeholder="Họ và tên *" class="w_ip_50_gp12">
                                    <input type="text" placeholder="Số điện thoại *" class="w_ip_50_gp12">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Email *">
                                </div>
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="10" placeholder="Lời nhắn *"></textarea>
                                </div>

                                <div class="form-group d_flex space_b">
                                    <input type="text" placeholder="Nhập captcha *" class="w_ip_50_gp12" />
                                    <div class="w_ip_50_gp12 d_flex align_c captcha">
                                        <span class="block bg_white">Bb74K0</span>
                                        <div>
                                            <img src="<? echo base_url(); ?>assets/images/load_capcha_blue.png" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-submit mt_40 d_flex align_c flex_center">
                                    <button type="submit" class="btn btn_bd_white w421_46 br_8 font_s16 line_h19 font_w400 cl_white send_require duy_fig_fontz_14">Gửi yêu cầu</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rate_and_comment bg_white pd_lr_285 pd_tb_48 duy_fig_bug5">
                <div class="Articles">
                    <div class="Articles_top Articles_top_duy d_flex align_c duy_fig_fl_w2">
                        <div class="w_75 pd_r_104 duy_fig_fl_w3">
                            <h2>
                                <span class="font_s22 font_w500 black_md line_h24 fig_fz18">Đánh giá bài viết</span>
                                <span class="font_s18 font_w400 black_md line_h24 fig_fz16">4N đánh giá</span>
                            </h2>
                            <div class="mt_16 d_flex align_c duy_fig_fl_w5">
                                <span class="font_s20 line_h24 font_w400 black_md">4,5/<span class="font_s14">5</span></span>
                                <div class="ml_29 d_flex flex_1">
                                    <div class="mr_10 st">
                                        <?php for ($i = 5; $i > 0; $i--) : ?>
                                            <div class="start d_flex align_c flex_end">
                                                <?php for ($j = 0; $j < $i; $j++) : ?>
                                                    <div>
                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9.24295 11.2498C9.14966 11.2502 9.05764 11.2282 8.97462 11.1856L5.99962 9.62813L3.02462 11.1856C2.92801 11.2364 2.8191 11.2591 2.71025 11.2511C2.6014 11.2431 2.49698 11.2047 2.40887 11.1402C2.32076 11.0758 2.25248 10.988 2.21181 10.8867C2.17114 10.7854 2.15969 10.6748 2.17878 10.5673L2.76212 7.28313L0.358784 4.94979C0.283801 4.87497 0.230609 4.78113 0.204917 4.67836C0.179225 4.5756 0.182002 4.46777 0.212951 4.36646C0.246761 4.26279 0.308954 4.17067 0.392472 4.10055C0.47599 4.03044 0.577489 3.98514 0.685451 3.96979L4.01045 3.48563L5.47462 0.493127C5.52238 0.394502 5.59696 0.311326 5.68982 0.253128C5.78267 0.19493 5.89003 0.164062 5.99962 0.164062C6.1092 0.164062 6.21657 0.19493 6.30942 0.253128C6.40227 0.311326 6.47685 0.394502 6.52462 0.493127L8.00628 3.47979L11.3313 3.96396C11.4392 3.97931 11.5407 4.0246 11.6243 4.09472C11.7078 4.16483 11.77 4.25695 11.8038 4.36063C11.8347 4.46194 11.8375 4.56976 11.8118 4.67253C11.7861 4.7753 11.7329 4.86913 11.658 4.94396L9.25462 7.27729L9.83795 10.5615C9.85878 10.6708 9.84787 10.7839 9.80653 10.8872C9.76518 10.9906 9.69512 11.08 9.60462 11.1448C9.49899 11.2188 9.3718 11.2557 9.24295 11.2498Z" fill="#FFA317" />
                                                        </svg>
                                                    </div>
                                                <?php endfor; ?>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                    <div class="flex_1 prosses_w">
                                        <div class="d_flex align_e pd_b_6">
                                            <div class="prosses">
                                                <div style="width: 50%"></div>
                                            </div>
                                        </div>
                                        <div class="d_flex align_e pd_b_6">
                                            <div class="prosses">
                                                <div style="width: 40%"></div>
                                            </div>
                                        </div>

                                        <div class="d_flex align_e pd_b_6">
                                            <div class="prosses">
                                                <div style="width: 30%"></div>
                                            </div>
                                        </div>

                                        <div class="d_flex align_e pd_b_6">
                                            <div class="prosses">
                                                <div style="width: 0%"></div>
                                            </div>
                                        </div>

                                        <div class="d_flex align_e pd_b_6">
                                            <div class="prosses">
                                                <div style="width: 0%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w_25 duy_fig_fl_w4">
                            <h2 class="font_s18 line_h24 font_w500 black_md">Đánh giá của bạn</h2>
                            <div class="start d_flex align_c mt_8">
                                <?php for ($j = 0; $j < 5; $j++) : ?>
                                    <div>
                                        <svg width="20" height="19" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.24295 11.2498C9.14966 11.2502 9.05764 11.2282 8.97462 11.1856L5.99962 9.62813L3.02462 11.1856C2.92801 11.2364 2.8191 11.2591 2.71025 11.2511C2.6014 11.2431 2.49698 11.2047 2.40887 11.1402C2.32076 11.0758 2.25248 10.988 2.21181 10.8867C2.17114 10.7854 2.15969 10.6748 2.17878 10.5673L2.76212 7.28313L0.358784 4.94979C0.283801 4.87497 0.230609 4.78113 0.204917 4.67836C0.179225 4.5756 0.182002 4.46777 0.212951 4.36646C0.246761 4.26279 0.308954 4.17067 0.392472 4.10055C0.47599 4.03044 0.577489 3.98514 0.685451 3.96979L4.01045 3.48563L5.47462 0.493127C5.52238 0.394502 5.59696 0.311326 5.68982 0.253128C5.78267 0.19493 5.89003 0.164062 5.99962 0.164062C6.1092 0.164062 6.21657 0.19493 6.30942 0.253128C6.40227 0.311326 6.47685 0.394502 6.52462 0.493127L8.00628 3.47979L11.3313 3.96396C11.4392 3.97931 11.5407 4.0246 11.6243 4.09472C11.7078 4.16483 11.77 4.25695 11.8038 4.36063C11.8347 4.46194 11.8375 4.56976 11.8118 4.67253C11.7861 4.7753 11.7329 4.86913 11.658 4.94396L9.25462 7.27729L9.83795 10.5615C9.85878 10.6708 9.84787 10.7839 9.80653 10.8872C9.76518 10.9906 9.69512 11.08 9.60462 11.1448C9.49899 11.2188 9.3718 11.2557 9.24295 11.2498Z" fill="#FFA317" />
                                        </svg>
                                    </div>
                                <?php endfor; ?>
                            </div>
                            <div class="mt_16">
                                <button class="btn btn_blue br_8 pd_8_25">
                                    <span class="font_s16 line_h19 font_w500 cl_white">Đã đánh giá</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="Articles_bottom Articles_bottom_duy mt_32 d_flex space_b align_c">
                        <div class="d_flex align_c">
                            <div class="st_like d_flex align_c mr_12" onclick="handelLike(this,'like_active', '#EB5155','#666666')">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.8382 4.60987C20.3274 4.09888 19.721 3.69352 19.0535 3.41696C18.3861 3.14039 17.6707 2.99805 16.9482 2.99805C16.2257 2.99805 15.5103 3.14039 14.8428 3.41696C14.1754 3.69352 13.5689 4.09888 13.0582 4.60987L11.9982 5.66987L10.9382 4.60987C9.90647 3.57818 8.5072 2.99858 7.04817 2.99858C5.58913 2.99858 4.18986 3.57818 3.15817 4.60987C2.12647 5.64156 1.54688 7.04084 1.54688 8.49987C1.54687 9.95891 2.12647 11.3582 3.15817 12.3899L4.21817 13.4499L11.9982 21.2299L19.7782 13.4499L20.8382 12.3899C21.3492 11.8791 21.7545 11.2727 22.0311 10.6052C22.3076 9.93777 22.45 9.22236 22.45 8.49987C22.45 7.77738 22.3076 7.06198 22.0311 6.39452C21.7545 5.72706 21.3492 5.12063 20.8382 4.60987V4.60987Z" stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="font_s16 line_h24 font_w400 black_md duy_fig_fontz_14">123 Lượt thích</span>
                        </div>

                        <div class="d_flex align_c">
                            <span class="font_s16 line_h22 font_w400 black_md duy_fig_fontz_14">123 Lượt xem</span>
                        </div>
                    </div>
                </div>
                <div class="comment pd_t_16 Articles_bottom_duy2">
                    <div>
                        <span class="font_s18 line_h21 font_w400 black duy_fig_bug_1024_5_4">123 Bình luận</span>
                    </div>
                    <div class="d_flex mt_24 space_b align_c">
                        <div class="avatar">
                            <img src="<? echo base_url(); ?>assets/images/avatar_cm.png" alt="">
                        </div>
                        <div class="ml_16 write_coment mr_8 duy_fig_input_1024">
                            <input type="text" placeholder="Viết bình luận">
                            <div class="position_a d_flex align_c group_icon">
                                <div class="smile">
                                    <img src="<? echo base_url(); ?>assets/images/smile_v.png" alt="">
                                </div>
                                <div class="import_img d_flex align_c">
                                    <label for="import_file">
                                        <img src="<? echo base_url(); ?>assets/images/image_save.png" alt="">
                                    </label>
                                    <input type="file" id="import_file">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn_blue pd_11_14 br_20 h_40" onclick="viewAndClosePopup('#popup_personal','#popup_personal .main_popup')">
                                <span class="font_s16 line_h19 font_w400 cl_white">Bình luận</span>
                            </button>
                        </div>
                    </div>
                    <div class="list_comment mt_23">
                        <div class="scroll">
                            <div class="comment_item">
                                <div class="d_flex align_s position_r">
                                    <div class="avatar">
                                        <img src="<? echo base_url(); ?>assets/images/avatar_cm.png" alt="">
                                    </div>
                                    <div class="comment_content pd_l_8">
                                        <div class="pd_r_30">
                                            <span class="font_s16 line_h22 font_w500 black_md">Nguyễn Ngọc Tuyết Phương</span>
                                        </div>
                                        <div class="mt_12 pd_8 text_comment duy_fig_cmt duy_font_14_375_2">
                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus...</span>
                                        </div>
                                        <div class="mt_8 function">
                                            <span class="like_comment like">Thích</span>
                                            <span>Phản hồi</span>
                                            <span class="time_comment">2 ngày trước</span>
                                        </div>
                                    </div>
                                    <div class="edit position_a">
                                        <div class="cursor_p" onclick="showHiddenPopup('.show_lr','show_popup_cm')">
                                            <img src="<? echo base_url(); ?>assets/images/more-horizontal.png" alt="">
                                        </div>
                                        <div class="position_a show_lr">
                                            <div class="d_flex align_c">
                                                <div class="mr_10">
                                                    <img src="<? echo base_url(); ?>assets/images/edit-3_gray.png" alt="">
                                                </div>
                                                <span class="w_spance_nrap font_s14 line_h16 font_w400 gray_1">Chỉnh sửa</span>
                                            </div>
                                            <div class="d_flex align_c">
                                                <div class="mr_10">
                                                    <img src="<? echo base_url(); ?>assets/images/trash-2_gray.png" alt="">
                                                </div>
                                                <span class="w_spance_nrap font_s14 line_h16 font_w400 gray_1">Xóa</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_item duy_fig_cmt2">
                                    <div class="d_flex align_s position_r">
                                        <div class="avatar">
                                            <img src="<? echo base_url(); ?>assets/images/avatar_cm.png" alt="">
                                        </div>
                                        <div class="comment_content pd_l_8">
                                            <div class="pd_r_30">
                                                <span class="font_s16 line_h22 font_w500 black_md">Nguyễn Ngọc Tuyết Phương</span>
                                            </div>
                                            <div class="mt_12 pd_8 text_comment duy_font_14_375_2">
                                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus...</span>
                                            </div>
                                            <div class="mt_8 function">
                                                <span class="like_comment like">Thích</span>
                                                <span class="time_comment">2 ngày trước</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_item">
                                <div class="d_flex align_s position_r">
                                    <div class="avatar">
                                        <img src="<? echo base_url(); ?>assets/images/avatar_cm.png" alt="">
                                    </div>
                                    <div class="comment_content pd_l_8">
                                        <div class="pd_r_30">
                                            <span class="font_s16 line_h22 font_w500 black_md">Nguyễn Ngọc Tuyết Phương</span>
                                        </div>
                                        <div class="mt_12 pd_8 text_comment">
                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus...</span>
                                        </div>
                                        <div class="mt_8 function">
                                            <span class="like_comment like">Thích</span>
                                            <span>Phản hồi</span>
                                            <span class="time_comment">2 ngày trước</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_item">
                                <div class="d_flex align_s position_r">
                                    <div class="avatar">
                                        <img src="<? echo base_url(); ?>assets/images/avatar_cm.png" alt="">
                                    </div>
                                    <div class="comment_content pd_l_8">
                                        <div class="pd_r_30">
                                            <span class="font_s16 line_h22 font_w500 black_md">Nguyễn Ngọc Tuyết Phương</span>
                                        </div>
                                        <div class="mt_12 pd_8 text_comment">
                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus...</span>
                                        </div>
                                        <div class="mt_8 function">
                                            <span class="like_comment like">Thích</span>
                                            <span>Phản hồi</span>
                                            <span class="time_comment">2 ngày trước</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_item">
                                <div class="d_flex align_s position_r">
                                    <div class="avatar">
                                        <img src="<? echo base_url(); ?>assets/images/avatar_cm.png" alt="">
                                    </div>
                                    <div class="comment_content pd_l_8">
                                        <div class="pd_r_30">
                                            <span class="font_s16 line_h22 font_w500 black_md">Nguyễn Ngọc Tuyết Phương</span>
                                        </div>
                                        <div class="mt_12 pd_8 text_comment">
                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus...</span>
                                        </div>
                                        <div class="mt_8 function">
                                            <span class="like_comment like">Thích</span>
                                            <span>Phản hồi</span>
                                            <span class="time_comment">2 ngày trước</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="Related_posts bg_bl pd_tb_32 duy_fig_bug_1024_6">
                <div class="pd_lr_80 duy_fig_bug_1024_6_1">
                    <h2 class="font_s22 line_h26 font_w500 duy_fig_bug_1024_6_2">Bài viết liên quan</h2>
                    <div class="row d_flex flex_w mt_24 duy_fig_bug_1024_6_3">
                        <?php for ($i = 0; $i < 9; $i++) : ?>
                            <div class="col_3 bg_white br_8 drop_sh duy_fig_bug_1024_6_4">
                                <a href="/chi-tiet-mau-nha-dep.html" class="villa_img position_r block">
                                    <img src="<? echo base_url(); ?>assets/images/house_demo.png" alt="" class="img_full">
                                    <div class="save">
                                        <img src="<? echo base_url(); ?>assets/images/fi-rr-bookmark.png" alt="">
                                    </div>
                                    <div class="view d_flex center_center">
                                        <img src="<? echo base_url(); ?>assets/images/eye_1.png" alt="">
                                        <span class="font_s14 line_h22 font_w500 cl_white block ml_9">200</span>
                                    </div>
                                </a>
                                <div class="villa_ct pd_8_16 duy_fig_bug_1024_6_5">
                                    <p class="villa_ct-desc font_s16 line_h24 font_w400 ellipsis_3 wb_br duy_fig_fontz_14">Không gian làm việc tại nhà được bố trí hợp lý, sử dụng vật liệu tự nhiên và bảng màu liền mạch của toàn thiết kế, tạo cảm giác riêng biệt và tập tru...</p>
                                    <div class="evaluate d_flex align_c mt_8">
                                        <!-- Mã màu đổi start: #FFA317; -->
                                        <?php for ($j = 0; $j < 5; $j++) : ?>
                                            <div class="evaluate_item">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.24295 11.2498C9.14966 11.2502 9.05764 11.2282 8.97462 11.1856L5.99962 9.62813L3.02462 11.1856C2.92801 11.2364 2.8191 11.2591 2.71025 11.2511C2.6014 11.2431 2.49698 11.2047 2.40887 11.1402C2.32076 11.0758 2.25248 10.988 2.21181 10.8867C2.17114 10.7854 2.15969 10.6748 2.17878 10.5673L2.76212 7.28313L0.358784 4.94979C0.283801 4.87497 0.230609 4.78113 0.204917 4.67836C0.179225 4.5756 0.182002 4.46777 0.212951 4.36646C0.246761 4.26279 0.308954 4.17067 0.392472 4.10055C0.47599 4.03044 0.577489 3.98514 0.685451 3.96979L4.01045 3.48563L5.47462 0.493127C5.52238 0.394502 5.59696 0.311326 5.68982 0.253128C5.78267 0.19493 5.89003 0.164062 5.99962 0.164062C6.1092 0.164062 6.21657 0.19493 6.30942 0.253128C6.40227 0.311326 6.47685 0.394502 6.52462 0.493127L8.00628 3.47979L11.3313 3.96396C11.4392 3.97931 11.5407 4.0246 11.6243 4.09472C11.7078 4.16483 11.77 4.25695 11.8038 4.36063C11.8347 4.46194 11.8375 4.56976 11.8118 4.67253C11.7861 4.7753 11.7329 4.86913 11.658 4.94396L9.25462 7.27729L9.83795 10.5615C9.85878 10.6708 9.84787 10.7839 9.80653 10.8872C9.76518 10.9906 9.69512 11.08 9.60462 11.1448C9.49899 11.2188 9.3718 11.2557 9.24295 11.2498Z" fill="#CCCCCC" />
                                                </svg>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                    <div class="people mt_8 pd_t_8 d_flex align_c space_b">
                                        <div class="infor d_flex align_c mx_w80">
                                            <div class="avatar">
                                                <img src="<? echo base_url(); ?>assets/images/Ellipse 89.png" alt="">
                                            </div>
                                            <span class="font_s16 font_400 line_h24 black_md ellipsis_1">Nguyễn Ngọc Tuyết Phương</span>
                                        </div>
                                        <div class="status d_flex align_c">
                                            <div class="st_share d_flex align_c">
                                                <img src="<? echo base_url(); ?>assets/images/share_gray.png" alt="">
                                            </div>
                                            <div class="st_like d_flex align_c" onclick="handelLike(this,'like_active', '#EB5155','#666666')">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20.8382 4.60987C20.3274 4.09888 19.721 3.69352 19.0535 3.41696C18.3861 3.14039 17.6707 2.99805 16.9482 2.99805C16.2257 2.99805 15.5103 3.14039 14.8428 3.41696C14.1754 3.69352 13.5689 4.09888 13.0582 4.60987L11.9982 5.66987L10.9382 4.60987C9.90647 3.57818 8.5072 2.99858 7.04817 2.99858C5.58913 2.99858 4.18986 3.57818 3.15817 4.60987C2.12647 5.64156 1.54688 7.04084 1.54688 8.49987C1.54687 9.95891 2.12647 11.3582 3.15817 12.3899L4.21817 13.4499L11.9982 21.2299L19.7782 13.4499L20.8382 12.3899C21.3492 11.8791 21.7545 11.2727 22.0311 10.6052C22.3076 9.93777 22.45 9.22236 22.45 8.49987C22.45 7.77738 22.3076 7.06198 22.0311 6.39452C21.7545 5.72706 21.3492 5.12063 20.8382 4.60987V4.60987Z" stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                    <div class="d_flex flex_end mt_16">
                        <div class="d_flex center-center cursor_p duy_fig_xemthem">
                            <a href="" class="blue_title font_s16 line_h19 font_w400">Xem thêm</a>
                            <div class="arrow_icon d_flex align_c ml_2">
                                <img src="<? echo base_url(); ?>assets/images/chevron-right_blue.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? require_once APPPATH.'views/site/includes/da_footer.php' ?>
    <script src="<? echo base_url();?>assets/js/js_t.js"></script>
    <script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
    <script>
        hiddenHeader('.header3');

        active_single_header('thiet_ke_dep');

        viewScreen('.keywork', 'hidden',345, 768);


        let elemetsLike = document.querySelectorAll('.function .like');
        if (elemetsLike) {
            elemetsLike.forEach(e => {
                e.onclick = function(e) {
                    toogleLike(e.target, 'like_comment');
                }
            })
        }
    </script>
</body>

</html>