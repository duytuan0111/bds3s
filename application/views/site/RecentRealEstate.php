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
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/recent_t.css">
    <link rel="stylesheet" href="<? echo base_url();?>assets/frontend/css/style_header_d.css">
    <title>Bất động sản gần đây</title>
</head>

<body>
    <div class="link_header">
        <? require_once APPPATH.'views/site/includes/da_header.php' ?>
    </div>
    <div class="container duy_them_00 d_flex">
        <div class="recent_left w_70 duy_them_0a d_flex position_r">
            <!-- <div class="duy_them_scroll1"> -->
            <div class="list_select duy_them_1a position_a">
                <div class="h_40 mx_w181">
                    <select name="" id="" class="select_option pd_11_16">
                        <option value="">Mua bán</option>
                        <option value="">Cho thuê</option>
                    </select>
                </div>
                <div class="h_40 mx_w181">
                    <select name="" id="" class="select_option pd_11_16">
                        <option>Bà rịa vũng tàu</option>
                    </select>
                </div>
                <div class="h_40 mx_w181">
                    <select name="" id="" class="select_option pd_11_16">
                        <option>Quận huyện</option>
                    </select>
                </div>
                <div class="h_40 mx_w181">
                    <select name="" id="" class="select_option pd_11_16">
                        <option>Phường xã</option>
                    </select>
                </div>
                <div class="h_40 mx_w181">
                    <select name="" id="" class="select_option pd_11_16">
                        <option>Đường</option>
                    </select>
                </div>
                <div class="h_40 mx_w181">
                    <select name="" id="" class="select_option pd_11_16">
                        <option>Nhà phố thương...</option>
                    </select>
                </div>
                <div class="h_40 mx_w181">
                    <select name="" id="" class="select_option pd_11_16">
                        <option>Bán kính</option>
                    </select>
                </div>
                <div class="h_40 mx_w181">
                    <select name="" id="" class="select_option pd_11_16">
                        <option>Khác </option>
                    </select>
                </div>
            </div>
            <!-- </div> -->
            <div class="map_import flex_1">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d251637.95196238213!2d105.6189045!3d9.779349!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1651799109803!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="recent_right w_30 bg_blue_10 position_r duy_them_1b">
            <div class="recent_right-top bg_white d_flex align_c">
                <div class="d_flex align_c">
                    <input type="checkbox" value="0" id="postings" checked>
                    <label for="postings" class="font_s16 line_h19 font_w400">Tin đăng</label>
                </div>

                <div class="d_flex align_c">
                    <input type="checkbox" value="1" id="project">
                    <label for="project" class="font_s16 line_h19 font_w400">Dự án</label>
                </div>
            </div>
            <div class="recent_right-bottom pd_l_8">
                <div class="recent_list duy_them_2a">
                    <?php
                    for ($i = 0; $i < 10; $i++) :
                    ?>
                        <div class="recent_item d_flex align_c bg_white duy_them_2b">
                            <div class="r_item-img duy_them_1c">
                                <!-- <img src="<? echo base_url(); ?>assets/images/ho-guom-quan-hoan-kiem-ha-noi-1 1.png" alt=""> -->
                            </div>
                            <div class="content duy_them_2c">
                                <h2 class="font_s14 line_h19 font_w400 black_md elipsis1 wb_br">Chính chủ bán nhà 2 mặt tiền hẻm xe hơi sát Aeon Tân Phú</h2>
                                <div class="infor_group mt_8 duy_them_1d">
                                    <span class="font_s12 font_w400 line_h14 orange ellipsis_1">100 triệu</span>
                                    <div class="duy_them_div1">
                                        <span class="font_s12 font_w400 line_h14">20 - 30 m2</span>
                                        <span class="font_s12 font_w400 line_h14">40 - 50 triệu/m2</span>
                                    </div>
                                </div>
                                <span class="home font_s12 font_w400 line_h14 ellipsis_1 mt_8 block wb_br">Đường Kim Mã, Phường Kim Mã, Quận Ba Đình, Hà Nội</span>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>

            <button class="btn position_a show_right">
                <span class="font_s16 font_w400 line_h19 black_md">ẩn</span>
                <div>
                    <img src="<? echo base_url(); ?>assets/images/arrow-right_black.png" alt="">
                </div>
            </button>
        </div>
    </div>

    <div class="duy_link_footer">
        <? require_once APPPATH.'views/site/includes/da_footer.php' ?>
    </div>

    <script type="text/javascript" src="<? echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
    <script src="<? echo base_url();?>assets/js/js_t.js"></script>
    <script type="text/javascript" src="<? echo base_url();?>assets/js/select2.min.js"></script>
    <script type="text/javascript" src="<? echo base_url();?>assets/js/slick.min.js"></script>
    <script>
        hiddenHeader('.header3');


        $(".select_option").select2({
            width: "100%",
        });

        let clientWidth = window.innerWidth;
        let slidesToShowNumber = 6;

        if (clientWidth >= 1025 && clientWidth <= 1366) {
            slidesToShowNumber = 6;
        } else if (clientWidth >= 769 && clientWidth <= 1024) {
            slidesToShowNumber = 5;
        } else if (clientWidth >= 481 && clientWidth <= 768) {
            slidesToShowNumber = 4.5;
        } else if (clientWidth <= 480) {
            slidesToShowNumber = 2.5;
        }
        $('.list_select').slick({
            dots: false,
            slidesToShow: slidesToShowNumber,
            slidesToScroll: 1,
            arrow: true,
            infinite: false,
            autoplay: false,
            prevArrow: '<button class="slick-prev prev-arrow"><img src="<? echo base_url(); ?>assets/images/img_du_an/icon_DATKV_left.png" alt=""/></button>',
            nextArrow: '<button class="slick-next next-arrow"><img src="<? echo base_url(); ?>assets/images/img_du_an/icon_DATKV_right.png" alt=""/></button>',
        });
        let btn = document.querySelector('.show_right');


        if (btn) {

            btn.onclick = () => {
                showHidden('.container', btn, '.recent_right', 'cl_show_right', 'ẩn', 'hiện', '<? echo base_url(); ?>assets/images/arrow-right_black.png', '<? echo base_url(); ?>assets/images/back.png')
            }
        }
    </script>
</body>

</html>