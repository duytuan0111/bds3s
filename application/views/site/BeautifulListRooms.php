<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/slick-theme.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/share_t.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_header_d.css">
    <title>Danh sách phòng đẹp</title>
</head>

<body>
    <div class="link_header">
        <? require_once APPPATH.'views/site/includes/da_header.php' ?>
    </div>
    <div class="wapper">
        <div class="select_header duy_scroll_select">
            <div class="select_header-list pd_20_80 bg_white d_flex duy_pd_select">
                <div class="w181_h40">
                    <select name="" id="" class="select_option">
                        <option value="">Sắp xếp</option>
                    </select>
                </div>

                <div class="w181_h40">
                    <select name="" id="" class="select_option">
                        <option value="">Loại công trình</option>
                    </select>
                </div>

                <div class="w181_h40">
                    <select name="" id="" class="select_option">
                        <option value="">Không gian</option>
                    </select>
                </div>

                <div class="w181_h40">
                    <select name="" id="" class="select_option">
                        <option value="">Thực hiên bởi</option>
                    </select>
                </div>

                <div class="w181_h40">
                    <select name="" id="" class="select_option">
                        <option value="">Phong cách</option>
                    </select>
                </div>

                <div class="w143_h40">
                    <select name="" id="" class="select_option">
                        <option value="">Màu sắc</option>
                    </select>
                </div>

                <div class="w110_h40">
                    <button class="btn btn_bd_red w_100 br_8 h_100">
                        <span class="red_title font_s16 line_h19 font_w400">Xóa tất cả</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="duy_container">
            <div class="directional duy_mb24px d_flex">
                <div class="directional_link_trangchu">
                    <a href="./" class=" duy_fonz14">Trang chủ</a>
                </div>
                <span class="arrow duy_them_class_whimg"><img src="<? echo base_url() ?>assets/images/arrow_small_black.png" alt=""></span>
                <div class="directional_acitve">
                    <a href="" class=" duy_fonz14">Thiết kế phòng đẹp</a>
                </div>
            </div>
            <div class="them_div_480_suv">
                <div class="loc_480 flex align_items">
                    <div class="loc_480_1 flex">
                        <div class="loc_480_1_img">
                            <img src="<? echo base_url() ?>assets/images/img_du_an/loc_20.png" alt="">
                        </div>
                        <div class="loc_480_1_text">Lọc +</div>
                    </div>
                    <div class="loc_480_2">
                        <select class="select_option js-states form-control">
                            <option value="">Sắp xếp</option>
                            <option value="">Xem nhiều nhất</option>
                            <option value="">Mới nhất</option>
                            <option value="">Cũ nhất</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="apartment_details">
                <div class="basic_infor">
                    <div class="villa_heading duy_mb24px">
                        <h2 class="villa_heading_h2 duy_mb8px">Danh sách mẫu phòng đẹp mới nhất 03/2022</h2>
                        <span class="villa_heading_span">Có 123 mẫu phòng đẹp</span>
                    </div>
                    <div class="duy_content_images">
                        <div class="duy_images_sub">
                            <?php for($i = 0; $i < 10 ; $i++):?>
                            <div class="duy_images_sub-div">
                                <img src="<? echo base_url() ?>assets/images/img_du_an/nhadep.png" alt="">
                                <div class="duy_images_sub_abs">
                                    <div class="duy_images_sub_abs_bg_overlay"></div>
                                    <!-- view -->
                                    <div class="duy_images_sub_abs_view">
                                        <div class="duy_images_sub_abs_view_img"><img
                                                src="<? echo base_url() ?>assets/images/img_du_an/view2.png" alt=""></div>
                                        <div class="duy_images_sub_abs_view_text">123</div>
                                    </div>
                                    <!-- chức năng lưu - chia sẻ - tim -->
                                    <div class="icon_chuc_nang">
                                        <div class="icon_chuc_nang_img duy_click_luu_2022">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_b_430_71443)">
                                                    <path
                                                        d="M17.9177 20.9974C17.6487 20.9966 17.3825 20.9409 17.1344 20.8334C16.8864 20.726 16.6615 20.5689 16.4727 20.3712L12 15.7864L7.52732 20.3742C7.24007 20.6747 6.87168 20.879 6.47018 20.9605C6.06868 21.042 5.65269 20.9968 5.27644 20.8309C4.89645 20.6733 4.57139 20.4012 4.34369 20.0502C4.11599 19.6992 3.99625 19.2855 4.00009 18.8632V6.74946C4.00009 5.75504 4.3832 4.80135 5.06514 4.09819C5.74709 3.39503 6.672 3 7.63641 3L16.3636 3C16.8411 3 17.314 3.09698 17.7551 3.28541C18.1963 3.47384 18.5972 3.75002 18.9348 4.09819C19.2725 4.44636 19.5404 4.8597 19.7231 5.3146C19.9058 5.76951 19.9999 6.25707 19.9999 6.74946V18.8632C20.004 19.2851 19.8847 19.6986 19.6575 20.0496C19.4303 20.4006 19.1059 20.6728 18.7265 20.8309C18.4703 20.9414 18.1954 20.998 17.9177 20.9974ZM7.63641 4.49978C7.05776 4.49978 6.50282 4.7368 6.09365 5.1587C5.68448 5.58059 5.45462 6.15281 5.45462 6.74946V18.8632C5.45436 18.9882 5.49001 19.1104 5.55709 19.2145C5.62417 19.3185 5.71965 19.3998 5.83148 19.4479C5.94331 19.4961 6.06647 19.509 6.1854 19.485C6.30434 19.461 6.4137 19.4012 6.4997 19.3131L11.4909 14.1981C11.6272 14.0585 11.8115 13.9801 12.0036 13.9801C12.1958 13.9801 12.3801 14.0585 12.5164 14.1981L17.5017 19.3116C17.5877 19.3997 17.6971 19.4595 17.816 19.4835C17.935 19.5075 18.0581 19.4946 18.17 19.4464C18.2818 19.3983 18.3773 19.317 18.4444 19.213C18.5114 19.1089 18.5471 18.9867 18.5468 18.8617V6.74946C18.5468 6.15281 18.317 5.58059 17.9078 5.1587C17.4986 4.7368 16.9437 4.49978 16.365 4.49978H7.63641Z"
                                                        fill="white" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_b_430_71443" x="-10" y="-10" width="44"
                                                        height="44" filterUnits="userSpaceOnUse"
                                                        color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feGaussianBlur in="BackgroundImage" stdDeviation="5" />
                                                        <feComposite in2="SourceAlpha" operator="in"
                                                            result="effect1_backgroundBlur_430_71443" />
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                            in2="effect1_backgroundBlur_430_71443" result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="icon_chuc_nang_img"><img
                                                src="<? echo base_url() ?>assets/images/img_du_an/chiase_while_24.png" alt=""></div>

                                        <div class="icon_chuc_nang_img duy_click_tim_2022">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M20.8382 4.60987C20.3274 4.09888 19.721 3.69352 19.0535 3.41696C18.3861 3.14039 17.6707 2.99805 16.9482 2.99805C16.2257 2.99805 15.5103 3.14039 14.8428 3.41696C14.1754 3.69352 13.5689 4.09888 13.0582 4.60987L11.9982 5.66987L10.9382 4.60987C9.90647 3.57818 8.5072 2.99858 7.04817 2.99858C5.58913 2.99858 4.18986 3.57818 3.15817 4.60987C2.12647 5.64156 1.54688 7.04084 1.54688 8.49987C1.54687 9.95891 2.12647 11.3582 3.15817 12.3899L4.21817 13.4499L11.9982 21.2299L19.7782 13.4499L20.8382 12.3899C21.3492 11.8791 21.7545 11.2727 22.0311 10.6052C22.3076 9.93777 22.45 9.22236 22.45 8.49987C22.45 7.77738 22.3076 7.06198 22.0311 6.39452C21.7545 5.72706 21.3492 5.12063 20.8382 4.60987V4.60987Z"
                                                    stroke="white" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>

                                    <!-- info and star -->
                                    <div class="abs_info_and_star">
                                        <div class="abs_info_and_star_info">
                                            <div class="abs_info_and_star_info_img"><img src="<? echo base_url() ?>assets/images/img_du_an/bacsila.jpg" alt=""></div>
                                            <div class="abs_info_and_star_info_text">Nguyễn Quang Duy</div>
                                        </div>
                                    </div>
                                    <div class="abs_info_and_star_sao">
                                        <div class="abs_info_and_star_sao_img"><img
                                                src="<? echo base_url() ?>assets/images/img_du_an/sao14.png" alt=""></div>
                                        <div class="abs_info_and_star_sao_img"><img
                                                src="<? echo base_url() ?>assets/images/img_du_an/sao14.png" alt=""></div>
                                        <div class="abs_info_and_star_sao_img"><img
                                                src="<? echo base_url() ?>assets/images/img_du_an/sao14.png" alt=""></div>
                                        <div class="abs_info_and_star_sao_img"><img
                                                src="<? echo base_url() ?>assets/images/img_du_an/sao14.png" alt=""></div>
                                        <div class="abs_info_and_star_sao_img"><img
                                                src="<? echo base_url() ?>assets/images/img_du_an/sao14.png" alt=""></div>
                                        <!-- <div class="abs_info_and_star_sao_img"><img src="<? echo base_url() ?>assets/images/img_du_an/saoden14.png" alt=""></div>
                                            <div class="abs_info_and_star_sao_img"><img src="<? echo base_url() ?>assets/images/img_du_an/saoden14.png" alt=""></div>
                                            <div class="abs_info_and_star_sao_img"><img src="<? echo base_url() ?>assets/images/img_du_an/saoden14.png" alt=""></div>
                                            <div class="abs_info_and_star_sao_img"><img src="<? echo base_url() ?>assets/images/img_du_an/saoden14.png" alt=""></div>
                                            <div class="abs_info_and_star_sao_img"><img src="<? echo base_url() ?>assets/images/img_du_an/saoden14.png" alt=""></div> -->
                                    </div>
                                </div>
                            </div>
                            <?php endfor;?>
                        </div>
                    </div>
                    <div class="pagination mt_32 d_flex flex_center duy_fig_mr_3">
                        <span href="#" class="active"><img src="/images/arrow_l_back_white.png" alt=""></span>
                        <span class="active" href="#">1</span>
                        <span href="#">2</span>
                        <span href="#">3</span>
                        <span href="#">4</span>
                        <span href="#" class="active"><img src="/images/arrow_r_back_white.png" alt=""></span>
                    </div>

                    <div class="index_infor mt_64 d_flex align_s duy_fig_mr_2">
                        <div class="index_flex flex_1 mr_27 duy_fig_mr_1">
                            <div>
                                <div class="content pd_ltr40_b32 bg_bl br_8 duy_fig_pd_1">
                                    <div class="index_right-heading d_flex align_c duy_them_class1_file_new duy_them_class1_file_new_click">
                                        <div>
                                            <img src="<? echo base_url() ?>assets/images/book_orange.png" alt="">
                                        </div>
                                        <span class="font_s18 line_h21 font_w500 duy_them_class12">Mục Lục</span>
                                    </div>
                                    <p class="black_md duy_them_class7">
                                        Chung cư đang được coi là phân khúc bất động sản cực HOT đi cùng sự phát triển
                                        của xã
                                        hội được khá nhiều người quan tâm trong thời điểm hiện tại. Sản phẩm bất động
                                        sản tuyệt
                                        vời này giúp xã hội giải được bài toàn về nhà ở đặc biệt là các thành phố lớn
                                        Chung cư cũng được đánh giá cao với cơ sở hạ tầng hiện đại đầy đủ, với thiết kế
                                        hiện
                                        đại, tiện ích, tiện nghi hoàn chỉnh và không gian sống của mình. Vì vậy nó luôn
                                        luôn trở
                                        thành một trong những mục tiêu săn lùng của rất nhiều người giúp họ có được một
                                        nơi an
                                        cư lý tưởng hay là kênh đầu tư lợi nhuận sinh lời
                                    </p>

                                    <p class="mt_6 mb_6 blue_title duy_them_class7" style="font-weight: 500;">1 .Đánh
                                        giá tình
                                        hình chung cư việt nam hiện nay</p>
                                    <p class="black_md duy_them_class7">Không phải ngẫu nhiên mà thị trường mua bán
                                        chung cư
                                        đang trở nên sôi động và nhộn nhịp bởi chung cư Việt Nam có những ưu điểm vượt
                                        trội đáp
                                        ứng được những nhu cầu chính đáng của con người trong xã hội hiện đại đặc biệt
                                        phải kể
                                        đến</p>
                                </div>
                            </div>
                            <div class="d_flex center_center mt_8">
                                <a class="btn bd-gray br_8 pd_5_16 font_s16 line_h26 font_w500 cl_btn_gray">Xem thêm</a>
                            </div>
                        </div>
                        <div class="index_right br_8 drop_sh bg_white w_386 duy_them_class10_1">
                            <div class="index_right-heading d_flex align_c duy_them_class1_file_new_click">
                                <div>
                                    <img src="<? echo base_url() ?>assets/images/book_orange.png" alt="">
                                </div>
                                <span class="font_s18 line_h21 font_w500">Mục Lục</span>
                            </div>
                            <div class="list_index mt_16">
                                <div class="item_index duy_them_class13">
                                    <ul>
                                        <li class="active">1. Đánh giá tình hình chung cư Việt Nam hiện nay</li>
                                        <ul>
                                            <li>1.1 Cơ sỏ hạ tầng đồng bộ</li>
                                            <ul>
                                                <li>1.2 An ninh tốt</li>
                                            </ul>
                                        </ul>
                                    </ul>

                                    <ul>
                                        <li>1.Thiết kế hiện đại</li>
                                    </ul>

                                    <ul>
                                        <li>1.Thiết kế hiện đại</li>
                                    </ul>

                                    <ul>
                                        <li>1.Thiết kế hiện đại</li>
                                    </ul>

                                    <ul>
                                        <li>1.Thiết kế hiện đại</li>
                                    </ul>

                                    <ul>
                                        <li>1.Thiết kế hiện đại</li>
                                    </ul>

                                    <ul>
                                        <li>1.Thiết kế hiện đại</li>
                                    </ul>

                                    <ul>
                                        <li>1.Thiết kế hiện đại</li>
                                    </ul>

                                    <ul>
                                        <li>1.Thiết kế hiện đại</li>
                                    </ul>

                                    <ul>
                                        <li>1.Thiết kế hiện đại</li>
                                    </ul>

                                    <ul>
                                        <li>1.Thiết kế hiện đại</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- POPUP LỌC KẾT QUẢ MÀN 480 -->
        <div class="popup_locketqua hidden">
            <div class="popup_locketqua_padding">
                <div class="popup_locketqua_heading flex align_items justify_content_sb">
                    <div class="popup_locketqua_heading1">Lọc kết quả</div>
                    <div class="popup_locketqua_heading2 close_popup_locketqua">Đóng</div>
                </div>
                <div class="popup_locketqua_content">
                    <div class="popup_locketqua_content_select">
                        <select class="select_option js-states form-control">
                            <option value="">Loại công trình</option>
                            <option value="">Biệt thự</option>
                            <option value="">Chung cư</option>
                            <option value="">Phòng trọ</option>
                            <option value="">Nhà riêng</option>
                            <option value="">Cửa hàng, quán cafe, khách sạn</option>
                            <option value="">Công trình khác</option>
                        </select>
                    </div>
                    <div class="popup_locketqua_content_select">
                        <select class="select_option js-states form-control">
                            <option value="">Diện tích</option>
                            <option value="">Dưới 50 m2</option>
                            <option value="">50 m2 - 100 m2</option>
                            <option value="">100 m2 - 150 m2</option>
                            <option value="">150 m2 - 300 m2</option>
                            <option value="">300 m2 trở lên</option>
                        </select>
                    </div>
                    <div class="popup_locketqua_content_select">
                        <select class="select_option js-states form-control">
                            <option value="">Thực hiên bởi</option>
                            <option value="">Tất cả</option>
                            <option value="">Tự làm</option>
                            <option value="">Chuyên gia</option>
                        </select>
                    </div>
                    <div class="popup_locketqua_content_select">
                        <select class="select_option js-states form-control">
                            <option value="">Phong cách</option>
                            <option value="">Đương đại</option>
                            <option value="">Hiện đại</option>
                            <option value="">Tối giản</option>
                            <option value="">Truyền thống</option>
                            <option value="">Cổ điển</option>
                            <option value="">Tân cổ điển</option>
                            <option value="">Scanvindinavian</option>
                            <option value="">Vintage</option>
                            <option value="">Retro</option>
                            <option value="">Bohemia</option>
                            <option value="">Indochine</option>
                            <option value="">Khác</option>
                        </select>
                    </div>
                    <div class="popup_locketqua_content_select">
                        <select class="select_option js-states form-control">
                            <option value="">Màu sắc</option>
                            <option value="">
                                <div class="img_option">
                                    <div class="img_option_sub"><img src="" alt=""></div>
                                </div>
                            </option>
                        </select>
                    </div>

                    <div class="popup_locketqua_content_btn">Áp dụng</div>
                </div>
            </div>
        </div>

        <? require_once APPPATH.'views/site/includes/da_footer.php' ?>

        <script src="<? echo base_url(); ?>assets/js/js_t.js"></script>
        <script type="text/javascript" src="<? echo base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="<? echo base_url(); ?>assets/js/select2.min.js"></script>
        <script type="text/javascript" src="<? echo base_url(); ?>assets/js/slick.min.js"></script>
        <script type="text/javascript" src="<? echo base_url(); ?>assets/js/circliful.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script>
        hiddenHeader('.header3');

        active_single_header('thiet_ke_dep');

        $(".select_option").select2({
            width: "100%",
        });

        $('.duy_click_luu_2022').click(function() {
            $(this).toggleClass('duy_luu');
        })
        $('.duy_click_tim_2022').click(function() {
            $(this).toggleClass('duy_tim');
        })
        </script>
        <script>
            $('.loc_480_1').click(function() {
                $('.popup_locketqua').removeClass('hidden');
            })
            $('.close_popup_locketqua').click(function() {
                $('.popup_locketqua').addClass('hidden');
            })
            // SHOW MỤC LỤC
            $('.duy_them_class1_file_new_click').click(function() {
                // $(this).parents('duy_fig_mr_1').find('duy_them_class10_1').addClass('duy_block');
                $('.duy_them_class10_1').toggleClass('duy_block');
            })
            
            // $('.duy_them_class1_file_new').click(function() {
            //     $('.duy_them_class10_1').removeClass('duy_block')
            // })
        </script>
</body>

</html>