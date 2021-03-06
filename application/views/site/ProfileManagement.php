<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/css/select2.min.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style_sb_hd_sdn.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style_header_d.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/frontend/css/style_t_quang.css">
    <title>Quản lý hồ sơ</title>
</head>

<body>
    <div class="position_r d_flex back_f7f8fc ql_hoso">
        <div class="link_sidebar_quang">
            <? require_once APPPATH.'views/site/includes/sidebar.php'?>
        </div>
        <div class="wapper bg_blue_10 pd_tlr_8_24 flex_1 d_flex flex_column">
            <? require_once APPPATH.'views/site/includes/header_sdn.php'?>
            <div class="pd_b_64">
                <div class="personals mt_24">
                    <div class=" personals_tong d_flex mt_16">
                        <div class="filter_news bg_white pd_tb24_lr8 w_188 br_8 mn_h768">
                            <h2 class="font_s18 line_h24 font_w500 black_md pd_l_8">Hồ sơ</h2>
                            <div class="filter_menu mt_24">
                                <div class="filter_item">
                                    <div class="d_flex br_8 align_c space_b pd_9_8 pd_r_0 filter_name " id="ds_theodoi">
                                        <span class="font_s16 line_h22 font_w400 black_md w_spance_nrap">Danh sách theo dõi</span>
                                        <div class="d_flex align_c records_375_img">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6 9L12 15L18 9" stroke="#474747" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="children_menu">
                                        <div class="filter_item" onclick="activeChangeTable(this,'.children_menu','acive_mnc2','.content_ft','follower','viewsActivePeople')">
                                            <div class="d_flex br_8 align_c space_b pd_9_8">
                                                <span class="font_s16 line_h22 font_w400 black_md w_spance_nrap">Người theo dõi (22)</span>
                                            </div>
                                        </div>

                                        <div class="filter_item" onclick="activeChangeTable(this,'.children_menu','acive_mnc2','.content_ft','watching','viewsActivePeople')">
                                            <div class="d_flex br_8 align_c space_b pd_9_8">
                                                <span class="font_s16 line_h22 font_w400 black_md w_spance_nrap">Đang theo dõi (22)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="filter_item" onclick="change('.content_ft', 'potential', 'viewsActivePeople')">
                                    <div class="d_flex br_8 align_c space_b pd_9_8 filter_name">
                                        <span class="font_s16 line_h22 font_w400 black_md w_spance_nrap">Khách hàng tiềm năng</span>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="filter_item" onclick="change('.content_ft', 'table_transaction', 'viewsActivePeople')">
                                    <div class="d_flex br_8 align_c space_b pd_9_8 filter_name">
                                        <span class="font_s16 line_h22 font_w400 black_md w_spance_nrap">Khách hàng từ điểm</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="result_news flex_1 pd_l_24">
                            <div class="managent_menu bg_white pd_16 hidden">
                                <h4 class="font_s16 line_h24">Hồ sơ</h4>
                                <div class="d_flex align_c mt_16 managent_menu_list">
                                    <div class="h_40 w_214 click_acive acive_mnc1_mb" onclick="clickToggleClass(this,'.managent_menu_list','acive_mnc1_mb')">
                                        <select name="" id="select_chon_kh" class="select_option menu_child">
                                            <option value="1">Danh sách theo dõi (20)</option>
                                            <option value="1">Người theo dõi</option>
                                            <option value="2">Người đang theo dõi</option>
                                        </select>
                                    </div>
                                    <div class="h_40 bg_gray click_kh" onclick="activeChangeTable(this,'.managent_menu_list','acive_mnc1_mb','.content_ft','potential','viewsActivePeople')">
                                        <span>Khách hàng tiềm năng (20)</span>
                                    </div>
                                    <div class="h_40 bg_gray click_kh click_kh_diem" onclick="activeChangeTable(this,'.managent_menu_list','acive_mnc1_mb','.content_ft','table_transaction','viewsActivePeople')">
                                        <span>Khách hàng từ điểm (20)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="select_controles d_flex align_c bg_white br_8 records">
                                <div class=" select_controles_search  h_40 position_r">
                                    <input type="text" placeholder="Tìm kiếm theo tên, số điện thoại" class="rs_input ipfzdf bd-grayc pd_11_16 w_100 h_100 br_8" />
                                    <div class="position_a sr_btn wh_20">
                                        <img src="<? echo base_url(); ?>assets/images/search_blue.png" alt="">
                                    </div>
                                </div>
                                <div class="w_188_40">
                                    <select name="" id="" class="select_option">
                                        <option value="">Toàn quốc</option>
                                    </select>
                                </div>
                                <div class="w_188_40">
                                    <select name="" id="" class="select_option">
                                        <option value="">Quận huyện</option>
                                    </select>
                                </div>
                                <div class="w_188_40">
                                    <select name="" id="" class="select_option">
                                        <option value="">Loại hình</option>
                                    </select>
                                </div>
                            </div>
                            <div class="content_ft mt_24">
                                <!-- Người theo dõi -->
                                <div class="content_list follower viewsActivePeople">
                                    <?php
                                    for ($i = 0; $i < 10; $i++) :
                                    ?>
                                        <div class="item_ct d_flex br_8 center_center">
                                            <div class="left d_flex flex_1">
                                                <div class="wh_120 position_r fshrink br_50p">
                                                    <img src="<? echo base_url(); ?>assets/images/avatar_ts.png" alt="" class="br_50p">
                                                    <div class="records_management-star d_flex mr_t_9 center_center">
                                                        <div class="star-img">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.7085 13.9975C11.6018 13.998 11.4967 13.9728 11.4018 13.9242L8.00179 12.1442L4.60179 13.9242C4.49139 13.9823 4.36691 14.0082 4.24251 13.999C4.11811 13.9898 3.99878 13.9459 3.89808 13.8723C3.79738 13.7987 3.71935 13.6983 3.67287 13.5826C3.62639 13.4668 3.61331 13.3403 3.63513 13.2175L4.30179 9.4642L1.55513 6.79753C1.46943 6.71201 1.40864 6.60478 1.37928 6.48733C1.34992 6.36988 1.35309 6.24665 1.38846 6.13086C1.4271 6.01238 1.49818 5.9071 1.59363 5.82697C1.68908 5.74684 1.80508 5.69507 1.92846 5.67753L5.72846 5.1242L7.40179 1.7042C7.45638 1.59148 7.54162 1.49643 7.64774 1.42991C7.75385 1.3634 7.87656 1.32812 8.00179 1.32812C8.12703 1.32812 8.24974 1.3634 8.35585 1.42991C8.46197 1.49643 8.5472 1.59148 8.60179 1.7042L10.2951 5.11753L14.0951 5.67086C14.2185 5.6884 14.3345 5.74017 14.43 5.8203C14.5254 5.90043 14.5965 6.00571 14.6351 6.1242C14.6705 6.23998 14.6737 6.36321 14.6443 6.48066C14.6149 6.59811 14.5542 6.70535 14.4685 6.79086L11.7218 9.45753L12.3885 13.2109C12.4123 13.3358 12.3998 13.465 12.3525 13.5832C12.3053 13.7013 12.2252 13.8034 12.1218 13.8775C12.0011 13.9621 11.8557 14.0043 11.7085 13.9975Z" fill="#FFA317" />
                                                            </svg>

                                                        </div>
                                                        <div class="star-img">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.7085 13.9975C11.6018 13.998 11.4967 13.9728 11.4018 13.9242L8.00179 12.1442L4.60179 13.9242C4.49139 13.9823 4.36691 14.0082 4.24251 13.999C4.11811 13.9898 3.99878 13.9459 3.89808 13.8723C3.79738 13.7987 3.71935 13.6983 3.67287 13.5826C3.62639 13.4668 3.61331 13.3403 3.63513 13.2175L4.30179 9.4642L1.55513 6.79753C1.46943 6.71201 1.40864 6.60478 1.37928 6.48733C1.34992 6.36988 1.35309 6.24665 1.38846 6.13086C1.4271 6.01238 1.49818 5.9071 1.59363 5.82697C1.68908 5.74684 1.80508 5.69507 1.92846 5.67753L5.72846 5.1242L7.40179 1.7042C7.45638 1.59148 7.54162 1.49643 7.64774 1.42991C7.75385 1.3634 7.87656 1.32812 8.00179 1.32812C8.12703 1.32812 8.24974 1.3634 8.35585 1.42991C8.46197 1.49643 8.5472 1.59148 8.60179 1.7042L10.2951 5.11753L14.0951 5.67086C14.2185 5.6884 14.3345 5.74017 14.43 5.8203C14.5254 5.90043 14.5965 6.00571 14.6351 6.1242C14.6705 6.23998 14.6737 6.36321 14.6443 6.48066C14.6149 6.59811 14.5542 6.70535 14.4685 6.79086L11.7218 9.45753L12.3885 13.2109C12.4123 13.3358 12.3998 13.465 12.3525 13.5832C12.3053 13.7013 12.2252 13.8034 12.1218 13.8775C12.0011 13.9621 11.8557 14.0043 11.7085 13.9975Z" fill="#FFA317" />
                                                            </svg>

                                                        </div>
                                                        <div class="star-img">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.7085 13.9975C11.6018 13.998 11.4967 13.9728 11.4018 13.9242L8.00179 12.1442L4.60179 13.9242C4.49139 13.9823 4.36691 14.0082 4.24251 13.999C4.11811 13.9898 3.99878 13.9459 3.89808 13.8723C3.79738 13.7987 3.71935 13.6983 3.67287 13.5826C3.62639 13.4668 3.61331 13.3403 3.63513 13.2175L4.30179 9.4642L1.55513 6.79753C1.46943 6.71201 1.40864 6.60478 1.37928 6.48733C1.34992 6.36988 1.35309 6.24665 1.38846 6.13086C1.4271 6.01238 1.49818 5.9071 1.59363 5.82697C1.68908 5.74684 1.80508 5.69507 1.92846 5.67753L5.72846 5.1242L7.40179 1.7042C7.45638 1.59148 7.54162 1.49643 7.64774 1.42991C7.75385 1.3634 7.87656 1.32812 8.00179 1.32812C8.12703 1.32812 8.24974 1.3634 8.35585 1.42991C8.46197 1.49643 8.5472 1.59148 8.60179 1.7042L10.2951 5.11753L14.0951 5.67086C14.2185 5.6884 14.3345 5.74017 14.43 5.8203C14.5254 5.90043 14.5965 6.00571 14.6351 6.1242C14.6705 6.23998 14.6737 6.36321 14.6443 6.48066C14.6149 6.59811 14.5542 6.70535 14.4685 6.79086L11.7218 9.45753L12.3885 13.2109C12.4123 13.3358 12.3998 13.465 12.3525 13.5832C12.3053 13.7013 12.2252 13.8034 12.1218 13.8775C12.0011 13.9621 11.8557 14.0043 11.7085 13.9975Z" fill="#FFA317" />
                                                            </svg>

                                                        </div>
                                                        <div class="star-img">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.7085 13.9975C11.6018 13.998 11.4967 13.9728 11.4018 13.9242L8.00179 12.1442L4.60179 13.9242C4.49139 13.9823 4.36691 14.0082 4.24251 13.999C4.11811 13.9898 3.99878 13.9459 3.89808 13.8723C3.79738 13.7987 3.71935 13.6983 3.67287 13.5826C3.62639 13.4668 3.61331 13.3403 3.63513 13.2175L4.30179 9.4642L1.55513 6.79753C1.46943 6.71201 1.40864 6.60478 1.37928 6.48733C1.34992 6.36988 1.35309 6.24665 1.38846 6.13086C1.4271 6.01238 1.49818 5.9071 1.59363 5.82697C1.68908 5.74684 1.80508 5.69507 1.92846 5.67753L5.72846 5.1242L7.40179 1.7042C7.45638 1.59148 7.54162 1.49643 7.64774 1.42991C7.75385 1.3634 7.87656 1.32812 8.00179 1.32812C8.12703 1.32812 8.24974 1.3634 8.35585 1.42991C8.46197 1.49643 8.5472 1.59148 8.60179 1.7042L10.2951 5.11753L14.0951 5.67086C14.2185 5.6884 14.3345 5.74017 14.43 5.8203C14.5254 5.90043 14.5965 6.00571 14.6351 6.1242C14.6705 6.23998 14.6737 6.36321 14.6443 6.48066C14.6149 6.59811 14.5542 6.70535 14.4685 6.79086L11.7218 9.45753L12.3885 13.2109C12.4123 13.3358 12.3998 13.465 12.3525 13.5832C12.3053 13.7013 12.2252 13.8034 12.1218 13.8775C12.0011 13.9621 11.8557 14.0043 11.7085 13.9975Z" fill="#FFA317" />
                                                            </svg>

                                                        </div>
                                                        <div class="star-img">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.7085 13.9975C11.6018 13.998 11.4967 13.9728 11.4018 13.9242L8.00179 12.1442L4.60179 13.9242C4.49139 13.9823 4.36691 14.0082 4.24251 13.999C4.11811 13.9898 3.99878 13.9459 3.89808 13.8723C3.79738 13.7987 3.71935 13.6983 3.67287 13.5826C3.62639 13.4668 3.61331 13.3403 3.63513 13.2175L4.30179 9.4642L1.55513 6.79753C1.46943 6.71201 1.40864 6.60478 1.37928 6.48733C1.34992 6.36988 1.35309 6.24665 1.38846 6.13086C1.4271 6.01238 1.49818 5.9071 1.59363 5.82697C1.68908 5.74684 1.80508 5.69507 1.92846 5.67753L5.72846 5.1242L7.40179 1.7042C7.45638 1.59148 7.54162 1.49643 7.64774 1.42991C7.75385 1.3634 7.87656 1.32812 8.00179 1.32812C8.12703 1.32812 8.24974 1.3634 8.35585 1.42991C8.46197 1.49643 8.5472 1.59148 8.60179 1.7042L10.2951 5.11753L14.0951 5.67086C14.2185 5.6884 14.3345 5.74017 14.43 5.8203C14.5254 5.90043 14.5965 6.00571 14.6351 6.1242C14.6705 6.23998 14.6737 6.36321 14.6443 6.48066C14.6149 6.59811 14.5542 6.70535 14.4685 6.79086L11.7218 9.45753L12.3885 13.2109C12.4123 13.3358 12.3998 13.465 12.3525 13.5832C12.3053 13.7013 12.2252 13.8034 12.1218 13.8775C12.0011 13.9621 11.8557 14.0043 11.7085 13.9975Z" fill="#FFA317" />
                                                            </svg>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml_16 flex_1 pd_t_4 bd_b_gray pd_b_9 w_90pt">
                                                    <h3 class="font_s18 line_h21 font_w500 black_md ellipsis_1">Nguyễn Ngọc Tuyết Phương</h3>
                                                    <p class="font_s16 line_h19 font_w400 black_md block mt_8"><span class="cl_blue">52</span> tin đăng</p>
                                                    <span class="font_s16 line_h24 font_w500 black_md block mt_8">Khu vực hoạt động: <span class="font_w400">Hà Nội</span></span>
                                                    <span class="font_s16 line_h19 font_w500 black_md block mt_8">Loại hình bđs: <span class="font_w400">Bán căn hộ</span> <span class="font_w400">Bán đất</span> <span class="font_w400">Cho thuê căn hộ</span></span>
                                                    <div class="d_flex align_c flex_start mt_13">
                                                        <a href="/thong-tin-nguoi-mua-thue.html" class="d_flex align_c">
                                                            <span class="font_s16 line_h19 font_w500 cl_blue block mr_2">Xem chi tiết</span>
                                                            <div class="d_flex align_c wh_19">
                                                                <img src="<? echo base_url(); ?>assets/images/chevron-right_blue.png" alt="">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right position_r">
                                                <button class="btn br_8 d_flex align_c flex_center cl_blue btn_bd_blue w_157_40">
                                                    <div class="wh_24 mr_8">
                                                        <img src="<? echo base_url(); ?>assets/images/inbox_blue.svg" alt="">
                                                    </div>
                                                    <span class="font_s16 line_h19 font_w500 cl_blue">Chat ngay</span>
                                                </button>

                                                <button class="btn br_8 d_flex align_c flex_center cl_white btn_infor w_157_40 mt_8">
                                                    <div class="wh_24 mr_8">
                                                        <img src="<? echo base_url(); ?>assets/images/fi-rr-user-add_white.svg" alt="">
                                                    </div>
                                                    <span class="font_s16 line_h19 font_w500 cl_white">Theo dõi</span>
                                                </button>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                                <!-- //Người theo dõi -->

                                <!-- Người đang theo dõi -->
                                <div class="content_list watching ">
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
                                        <div class="item_ct d_flex br_8 center_center">
                                            <div class="left d_flex flex_1">
                                                <div class="wh_120 position_r fshrink br_50p">
                                                    <img src="<? echo base_url(); ?>assets/images/avatar_ts.png" alt="" class="br_50p">
                                                    <div class="records_management-star d_flex mr_t_9 center_center">
                                                        <div class="star-img">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.7085 13.9975C11.6018 13.998 11.4967 13.9728 11.4018 13.9242L8.00179 12.1442L4.60179 13.9242C4.49139 13.9823 4.36691 14.0082 4.24251 13.999C4.11811 13.9898 3.99878 13.9459 3.89808 13.8723C3.79738 13.7987 3.71935 13.6983 3.67287 13.5826C3.62639 13.4668 3.61331 13.3403 3.63513 13.2175L4.30179 9.4642L1.55513 6.79753C1.46943 6.71201 1.40864 6.60478 1.37928 6.48733C1.34992 6.36988 1.35309 6.24665 1.38846 6.13086C1.4271 6.01238 1.49818 5.9071 1.59363 5.82697C1.68908 5.74684 1.80508 5.69507 1.92846 5.67753L5.72846 5.1242L7.40179 1.7042C7.45638 1.59148 7.54162 1.49643 7.64774 1.42991C7.75385 1.3634 7.87656 1.32812 8.00179 1.32812C8.12703 1.32812 8.24974 1.3634 8.35585 1.42991C8.46197 1.49643 8.5472 1.59148 8.60179 1.7042L10.2951 5.11753L14.0951 5.67086C14.2185 5.6884 14.3345 5.74017 14.43 5.8203C14.5254 5.90043 14.5965 6.00571 14.6351 6.1242C14.6705 6.23998 14.6737 6.36321 14.6443 6.48066C14.6149 6.59811 14.5542 6.70535 14.4685 6.79086L11.7218 9.45753L12.3885 13.2109C12.4123 13.3358 12.3998 13.465 12.3525 13.5832C12.3053 13.7013 12.2252 13.8034 12.1218 13.8775C12.0011 13.9621 11.8557 14.0043 11.7085 13.9975Z" fill="#FFA317" />
                                                            </svg>

                                                        </div>
                                                        <div class="star-img">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.7085 13.9975C11.6018 13.998 11.4967 13.9728 11.4018 13.9242L8.00179 12.1442L4.60179 13.9242C4.49139 13.9823 4.36691 14.0082 4.24251 13.999C4.11811 13.9898 3.99878 13.9459 3.89808 13.8723C3.79738 13.7987 3.71935 13.6983 3.67287 13.5826C3.62639 13.4668 3.61331 13.3403 3.63513 13.2175L4.30179 9.4642L1.55513 6.79753C1.46943 6.71201 1.40864 6.60478 1.37928 6.48733C1.34992 6.36988 1.35309 6.24665 1.38846 6.13086C1.4271 6.01238 1.49818 5.9071 1.59363 5.82697C1.68908 5.74684 1.80508 5.69507 1.92846 5.67753L5.72846 5.1242L7.40179 1.7042C7.45638 1.59148 7.54162 1.49643 7.64774 1.42991C7.75385 1.3634 7.87656 1.32812 8.00179 1.32812C8.12703 1.32812 8.24974 1.3634 8.35585 1.42991C8.46197 1.49643 8.5472 1.59148 8.60179 1.7042L10.2951 5.11753L14.0951 5.67086C14.2185 5.6884 14.3345 5.74017 14.43 5.8203C14.5254 5.90043 14.5965 6.00571 14.6351 6.1242C14.6705 6.23998 14.6737 6.36321 14.6443 6.48066C14.6149 6.59811 14.5542 6.70535 14.4685 6.79086L11.7218 9.45753L12.3885 13.2109C12.4123 13.3358 12.3998 13.465 12.3525 13.5832C12.3053 13.7013 12.2252 13.8034 12.1218 13.8775C12.0011 13.9621 11.8557 14.0043 11.7085 13.9975Z" fill="#FFA317" />
                                                            </svg>

                                                        </div>
                                                        <div class="star-img">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.7085 13.9975C11.6018 13.998 11.4967 13.9728 11.4018 13.9242L8.00179 12.1442L4.60179 13.9242C4.49139 13.9823 4.36691 14.0082 4.24251 13.999C4.11811 13.9898 3.99878 13.9459 3.89808 13.8723C3.79738 13.7987 3.71935 13.6983 3.67287 13.5826C3.62639 13.4668 3.61331 13.3403 3.63513 13.2175L4.30179 9.4642L1.55513 6.79753C1.46943 6.71201 1.40864 6.60478 1.37928 6.48733C1.34992 6.36988 1.35309 6.24665 1.38846 6.13086C1.4271 6.01238 1.49818 5.9071 1.59363 5.82697C1.68908 5.74684 1.80508 5.69507 1.92846 5.67753L5.72846 5.1242L7.40179 1.7042C7.45638 1.59148 7.54162 1.49643 7.64774 1.42991C7.75385 1.3634 7.87656 1.32812 8.00179 1.32812C8.12703 1.32812 8.24974 1.3634 8.35585 1.42991C8.46197 1.49643 8.5472 1.59148 8.60179 1.7042L10.2951 5.11753L14.0951 5.67086C14.2185 5.6884 14.3345 5.74017 14.43 5.8203C14.5254 5.90043 14.5965 6.00571 14.6351 6.1242C14.6705 6.23998 14.6737 6.36321 14.6443 6.48066C14.6149 6.59811 14.5542 6.70535 14.4685 6.79086L11.7218 9.45753L12.3885 13.2109C12.4123 13.3358 12.3998 13.465 12.3525 13.5832C12.3053 13.7013 12.2252 13.8034 12.1218 13.8775C12.0011 13.9621 11.8557 14.0043 11.7085 13.9975Z" fill="#FFA317" />
                                                            </svg>

                                                        </div>
                                                        <div class="star-img">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.7085 13.9975C11.6018 13.998 11.4967 13.9728 11.4018 13.9242L8.00179 12.1442L4.60179 13.9242C4.49139 13.9823 4.36691 14.0082 4.24251 13.999C4.11811 13.9898 3.99878 13.9459 3.89808 13.8723C3.79738 13.7987 3.71935 13.6983 3.67287 13.5826C3.62639 13.4668 3.61331 13.3403 3.63513 13.2175L4.30179 9.4642L1.55513 6.79753C1.46943 6.71201 1.40864 6.60478 1.37928 6.48733C1.34992 6.36988 1.35309 6.24665 1.38846 6.13086C1.4271 6.01238 1.49818 5.9071 1.59363 5.82697C1.68908 5.74684 1.80508 5.69507 1.92846 5.67753L5.72846 5.1242L7.40179 1.7042C7.45638 1.59148 7.54162 1.49643 7.64774 1.42991C7.75385 1.3634 7.87656 1.32812 8.00179 1.32812C8.12703 1.32812 8.24974 1.3634 8.35585 1.42991C8.46197 1.49643 8.5472 1.59148 8.60179 1.7042L10.2951 5.11753L14.0951 5.67086C14.2185 5.6884 14.3345 5.74017 14.43 5.8203C14.5254 5.90043 14.5965 6.00571 14.6351 6.1242C14.6705 6.23998 14.6737 6.36321 14.6443 6.48066C14.6149 6.59811 14.5542 6.70535 14.4685 6.79086L11.7218 9.45753L12.3885 13.2109C12.4123 13.3358 12.3998 13.465 12.3525 13.5832C12.3053 13.7013 12.2252 13.8034 12.1218 13.8775C12.0011 13.9621 11.8557 14.0043 11.7085 13.9975Z" fill="#FFA317" />
                                                            </svg>

                                                        </div>
                                                        <div class="star-img">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.7085 13.9975C11.6018 13.998 11.4967 13.9728 11.4018 13.9242L8.00179 12.1442L4.60179 13.9242C4.49139 13.9823 4.36691 14.0082 4.24251 13.999C4.11811 13.9898 3.99878 13.9459 3.89808 13.8723C3.79738 13.7987 3.71935 13.6983 3.67287 13.5826C3.62639 13.4668 3.61331 13.3403 3.63513 13.2175L4.30179 9.4642L1.55513 6.79753C1.46943 6.71201 1.40864 6.60478 1.37928 6.48733C1.34992 6.36988 1.35309 6.24665 1.38846 6.13086C1.4271 6.01238 1.49818 5.9071 1.59363 5.82697C1.68908 5.74684 1.80508 5.69507 1.92846 5.67753L5.72846 5.1242L7.40179 1.7042C7.45638 1.59148 7.54162 1.49643 7.64774 1.42991C7.75385 1.3634 7.87656 1.32812 8.00179 1.32812C8.12703 1.32812 8.24974 1.3634 8.35585 1.42991C8.46197 1.49643 8.5472 1.59148 8.60179 1.7042L10.2951 5.11753L14.0951 5.67086C14.2185 5.6884 14.3345 5.74017 14.43 5.8203C14.5254 5.90043 14.5965 6.00571 14.6351 6.1242C14.6705 6.23998 14.6737 6.36321 14.6443 6.48066C14.6149 6.59811 14.5542 6.70535 14.4685 6.79086L11.7218 9.45753L12.3885 13.2109C12.4123 13.3358 12.3998 13.465 12.3525 13.5832C12.3053 13.7013 12.2252 13.8034 12.1218 13.8775C12.0011 13.9621 11.8557 14.0043 11.7085 13.9975Z" fill="#FFA317" />
                                                            </svg>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml_16 flex_1 pd_t_4 bd_b_gray pd_b_9 w_90pt">
                                                    <h3 class="font_s18 line_h21 font_w500 black_md ellipsis_1">Nguyễn Ngọc Tuyết Phương</h3>
                                                    <span class="font_s16 line_h19 font_w400 black_md block mt_8">Nhà môi giới</span>
                                                    <span class="font_s16 line_h24 font_w500 black_md block mt_8">Địa chỉ: <span class="font_w400">Định Công, Hoàng Mai, Hà Nội</span></span>
                                                    <div class="d_flex align_c flex_start mt_13">
                                                        <a href="/thong-tin-nguoi-mua-thue.html" class="d_flex align_c">
                                                            <span class="font_s16 line_h19 font_w500 cl_blue block mr_2">Xem thêm</span>
                                                            <div class="d_flex align_c wh_19">
                                                                <img src="<? echo base_url(); ?>assets/images/chevron-right_blue.png" alt="">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right position_r">
                                                <button class="btn br_8 d_flex align_c flex_center cl_blue btn_bd_blue w_157_40">
                                                    <div class="wh_24 mr_8">
                                                        <img src="<? echo base_url(); ?>assets/images/inbox_blue.svg" alt="">
                                                    </div>
                                                    <span class="font_s16 line_h19 font_w500 cl_blue">Chat ngay</span>
                                                </button>

                                                <button class="btn br_8 d_flex align_c flex_center cl_white btn_infor w_157_40 mt_8">
                                                    <div class="wh_24 mr_8">
                                                        <img src="<? echo base_url(); ?>assets/images/fi-rr-user-add_white.png" alt="">
                                                    </div>
                                                    <span class="font_s16 line_h19 font_w500 cl_white">Đang theo dõi</span>
                                                </button>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                                <!-- //Người đang theo dõi -->

                                <!-- Khách hàng tiềm năng -->
                                <div class="content_list potential">
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
                                        <div class="item_ct d_flex br_8 center_center">
                                            <div class="left d_flex flex_1">
                                                <div class="wh_80 position_r over_hd fshrink br_50p">
                                                    <img src="<? echo base_url(); ?>assets/images/avatar_ts.png" alt="" class="br_50p">
                                                </div>
                                                <div class="ml_16 flex_1 pd_t_4 bd_b_gray pd_b_9 w_90pt">
                                                    <a href="thong-tin-nguoi-mua-thue.html" class="font_s18 line_h21 font_w500 black_md ellipsis_1">Nguyễn Ngọc Tuyết Phương</a>
                                                    <span class="font_s16 line_h19 font_w400 black_md block mt_8">Thuê căn hộ</span>
                                                    <span class="font_s16 line_h24 font_w500 black_md block mt_8">Địa chỉ: <span class="font_w400">Định Công, Hoàng Mai, Hà Nội</span></span>
                                                </div>
                                            </div>
                                            <div class="right position_r">
                                                <button class="btn br_8 d_flex align_c flex_center cl_blue btn_bd_blue w_157_40">
                                                    <div class="wh_24 mr_8">
                                                        <img src="<? echo base_url(); ?>assets/images/inbox_blue.svg" alt="">
                                                    </div>
                                                    <span class="font_s16 line_h19 font_w500 cl_blue">Chat ngay</span>
                                                </button>

                                                <button class="btn br_8 d_flex align_c flex_center cl_red btn_bd_red w_157_40 mt_8">
                                                    <div class="wh_24 mr_8">
                                                        <img src="<? echo base_url(); ?>assets/images/phone-call_red.png" alt="">
                                                    </div>
                                                    <span class="font_s16 line_h19 font_w500 cl_red">0333 *** ***</span>
                                                </button>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                                <!-- // khách hàng từ điểm -->
                                <div class="main_table_list_all position_r mt_24 table_person table_transaction fz15 ">
                                    <!-- Ví 3s -->
                                    <div class="box_main_table_list position_r wallet activeTableView">
                                        <table class="table" id="scroll_tb">
                                            <thead class="">
                                                <tr class="bg_blue_5 cl_ch_blue">
                                                    <th class="stt">STT</th>
                                                    <th>Tên khách hàng</th>
                                                    <th>Thông tin khách hàng</th>
                                                    <th>Bất động sản quan tâm</th>
                                                    <th>Thời gian dùng điểm</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for ($i = 0; $i < 10; $i++) :
                                                    $index = rand(0, 1) ?>
                                                    <tr>
                                                        <td class="stt"><?= $i + 1 ?></td>
                                                        <td>
                                                            <div class="d_flex align_c">
                                                                <div class="wh_26 br_50p  over_hd mr_10">
                                                                    <img src="<? echo base_url(); ?>assets/images/avatar_ts.png" alt="">
                                                                </div>
                                                                <span class="font_s15 line_h24 font_w400 black_md">Wade Warren</span>
                                                                <div class="ml_16 wh_20 d_flex align_c">
                                                                    <img src="<? echo base_url(); ?>assets/images/inbox_blue.svg" alt="">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="block">0123456789</span>
                                                            <span class="block mt_8">ABC123@gmail.com</span>
                                                        </td>
                                                        <td>Mua nhà riêng</td>
                                                        <td>
                                                            <span class="block">20:00 CH</span>
                                                            <span class="block mt_8">20/10/2022</span>
                                                        </td>
                                                    </tr>
                                                <?php endfor; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <? require_once APPPATH.'views/site/includes/da_footer.php'?>
    <script type="text/javascript" src="<? echo base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
    <script src="<? echo base_url(); ?>assets/js/js_t.js"></script>
    <script type="text/javascript" src="<? echo base_url(); ?>assets/js/select2.min.js"></script>
    <script type="text/javascript" src="<? echo base_url(); ?>assets/js/slick.min.js"></script>
    <script>
        $(".select_option").select2({
            width: "100%",
        });

        // $('.click_acive').change(()=>{
        // })

        let clientWidth = window.innerWidth;
        if (clientWidth <= 768) {
            handle_show_popup([{
                className: '.table_transaction thead tr th:last-child',
                arr: '',
                noidung: 'Thời gian'
            }])
        }
        $('#quanlyhoso').addClass('color_click')
    </script>
</body>

</html>