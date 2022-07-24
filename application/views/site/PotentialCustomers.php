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
                                        <div class="filter_item <?= (isset($_GET['follow']) && $_GET['follow'] == 0) ? 'acive_mnc1' : "" ?>" onclick="location.href='/quan-ly-ho-so.html'">
                                            <div class="d_flex br_8 align_c space_b pd_9_8">
                                                <span class="font_s16 line_h22 font_w400 black_md w_spance_nrap">Người theo dõi (<?= $CountFollower ?>)</span>
                                            </div>
                                        </div>

                                        <div class="filter_item <?= (isset($_GET['follow']) && $_GET['follow'] == 1) ? 'acive_mnc1' : "" ?>" onclick="location.href='/quan-ly-ho-so.html?key=&follow=1'"">
                                            <div class="d_flex br_8 align_c space_b pd_9_8">
                                                <span class="font_s16 line_h22 font_w400 black_md w_spance_nrap">Đang theo dõi (<?= $CountFollowUsers ?>)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="filter_item">
                                    <div class="d_flex br_8 align_c space_b pd_9_8 filter_name acive_mnc1">
                                        <span class="font_s16 line_h22 font_w400 black_md w_spance_nrap">Khách hàng tiềm năng</span>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="filter_item" onclick="location.href='khach-hang-tu-diem.html'">
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
                                    <div class="h_40 w_214 click_acive">
                                        <select onchange='search()' name="" id="select_chon_kh" class="select_option menu_child">
                                            <option disabled selected>Danh sách theo dõi</option>
                                            <option value="0">Người theo dõi</option>
                                            <option value="1">Người đang theo dõi</option>
                                        </select>
                                    </div>
                                    <div class="h_40 bg_gray click_kh cursor_p acive_mnc1_mb" onclick="location.href='khach-hang-tiem-nang.html'">
                                        <span>Khách hàng tiềm năng (<?= $countAllPotential ?>)</span>
                                    </div>
                                    <div class="h_40 bg_gray click_kh cursor_p click_kh_diem " onclick="location.href='khach-hang-tu-diem.html'">
                                        <span>Khách hàng từ điểm (<?= $countAllCustomerPoints ?>)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="select_controles d_flex align_c bg_white br_8 records">
                                <div class=" select_controles_search  h_40 position_r">
                                    <input type="text" value="<?= isset($_GET['key']) ? $_GET['key'] : "" ?>" placeholder="Tìm kiếm theo tên, số điện thoại" class="rs_input input_search ipfzdf bd-grayc pd_11_16 w_100 h_100 br_8" />
                                    <div class="position_a abs_search sr_btn wh_20">
                                        <img src="<? echo base_url(); ?>assets/images/search_blue.png" alt="">
                                    </div>
                                </div>
                                <div class="w_188_40">
                                    <select name="" id="select_city" class="select_option">
                                        <option value="0">Toàn quốc</option>
                                        <? foreach($list_city as $opt): ?>
                                        <option <?= ((isset($_GET['id_cit'])) && $_GET['id_cit'] == $opt['cit_id']) ?  " selected" : "" ?> value="<?= $opt['cit_id'] ?>"><?= $opt['cit_name'] ?></option>
                                        <? endforeach ?>
                                    </select>
                                </div>
                                <div class="w_188_40">
                                    <select name="" id="select_districs" class="select_option">
                                        <option selected disabled >Chọn quận huyện</option>
                                        <? 
                                            if(isset($_GET['id_cit']) && $_GET['id_cit'] != 0): 
                                            foreach($listDistricts as $opt):
                                        ?>
                                        <option <?= ((isset($_GET['district'])) && $_GET['district'] == $opt['cit_id']) ?  " selected" : "" ?> value="<?= $opt['cit_id'] ?>"><?= $opt['cit_name'] ?></option>
                                        <? endforeach;endif ?>
                                    </select>
                                </div>
                                <div class="w_188_40">
                                    <select name="" id="select_type_news" class="select_option">
                                        <option disabled selected>Loại hình</option>
                                        <option <?= ((isset($_GET['type_news'])) && $_GET['type_news'] == 1) ?  " selected" : "" ?> value="1">Mua bán</option>
                                        <option <?= ((isset($_GET['type_news'])) && $_GET['type_news'] == 2) ?  " selected" : "" ?> value="2">Cho thuê</option>
                                    </select>
                                </div>
                            </div>
                            <div class="content_ft mt_24">
                                <div class="content_list potential viewsActivePeople">
                                    <?
                                        $arr_customer_points =[];
                                        foreach($CustomerFromPoints as $a) {
                                            $arr_customer_points[] = $a['customer_id_customer'];
                                        }
                                    ?>
                                    <?php
                                        foreach ($PotentialCustomers as $rows) : 
                                        $d = date('d',$rows['avtDate']);
                                        $m = date('m',$rows['avtDate']);
                                        $y = date('Y',$rows['avtDate']);
                                    ?>
                                        <div class="item_ct d_flex br_8 center_center">
                                            <div class="left d_flex flex_1">
                                                <div class="wh_80 position_r over_hd fshrink br_50p">
                                                    <? if($rows['user_avt'] != '' && file_exists('upload/"'.$y.'"/"'.$m.'"/"'.$d.'"/"'.$rows['user_avt'].'"')): ?>
                                                        <img src="<? echo base_url(); ?>'upload/<? $y ?>/<? $m ?>/<? $d ?>/<? $rows['user_avt']?>'" alt="" class="br_50p">    
                                                    <? else: ?>
                                                        <img src="<? echo base_url(); ?>assets/images/avatar_ts.png" alt="" class="br_50p">
                                                    <? endif ?>
                                                </div>
                                                <div class="ml_16 flex_1 pd_t_4 bd_b_gray pd_b_9 w_90pt">
                                                    <a <? if(in_array($rows['id'],$arr_customer_points)): ?> href='/thong-tin-nguoi-mua-thue-<?= $rows['id'] ?>.html'<? else: ?> onclick="showPopupNoti('<?= $rows['name'] ?>','<?= $rows['id'] ?>')" <? endif ?> class="font_s18 btn_detail_kh cursor_p line_h21 font_w500 black_md ellipsis_1"><?= $rows['name'] ?></a>
                                                    <span class="font_s16 line_h19 font_w400 black_md block mt_8"><?= $newType[$rows['newType']] ?></span>
                                                    <?php
                                                        $CI = &get_instance();
                                                        $CI->load->model('M_City');
                                                        $district   = $this->M_City->GetDistricts($rows['cityID'])['cit_name'];  
                                                        $ward       = $this->M_City->GetWard($rows['districtID'])['ward_name'];
                                                    ?>
                                                    <span class="font_s16 line_h24 font_w500 black_md block mt_8">Địa chỉ: <span class="font_w400"><?= $rows['cit_name'].','.$district.','.$ward ?></span></span>
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
                                                    <span class="font_s16 line_h19 font_w500 cl_red"><?= substr($rows['phone'],0,4) ?> *** ***</span>
                                                </button>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination mt_32 d_flex flex_end">
                    <? print_r($pagination) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- POPUP XÓA -->
    <div class="popup_xoa hidden">
        <div class="popup_xoa_overlay cursor_p back"></div>
        <div class="popup_xoa_padding">
            <div class="img_delete">
                <img src="<? echo base_url(); ?>assets/images/error_icon.png" alt="">
            </div>
            <div class="popup_xoa_tex">
            Bạn có muốn dùng 1 điểm để xem thông tin của <span class="customer_name">Nguyễn Ngọc Tuyết Phương</span>
            </div>
            <div class="popup_xoa_btn">
                <div class="popup_xoa_btn1 btn_show_profile_kh cursor_p">Đồng ý</div>
                <div class="popup_xoa_btn2 currsor_p back">Quay lại</div>
            </div>
        </div>
    </div>
    <!----------------------------------->
    <? require_once APPPATH.'views/site/includes/da_footer.php'?>
    <script type="text/javascript" src="<? echo base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
    <script src="<? echo base_url(); ?>assets/js/js_t.js"></script>
    <script type="text/javascript" src="<? echo base_url(); ?>assets/js/select2.min.js"></script>
    <script type="text/javascript" src="<? echo base_url(); ?>assets/js/slick.min.js"></script>
    <script>
        var base_url = '<?= base_url() ?>';
        $(".select_option").select2({
            width: "100%",
        });

        // $('.click_acive').change(()=>{
        // })
        function showPopupNoti(s1,s2)
        {
            $('.customer_name').text(s1);
            $('.btn_show_profile_kh').attr('data-id',s2);
            $('.popup_xoa').removeClass('hidden');
        }
        $('.back').click(function(){
            $('.popup_xoa').addClass('hidden');
        })
        $('.btn_show_profile_kh').click(function(){
            var id_customer = $(this).attr('data-id')
            $.ajax({
                url: "Account/CustomerFromPoints",
                type:"POST",
                data:{
                    id_customer:id_customer
                },
                success:function(response){
                    location.href='/thong-tin-nguoi-mua-thue-'+ id_customer +'.html';
                },
                error: function(xhr) {
                    alert('Error');
                }
            })
        })
        let clientWidth = window.innerWidth;
        if (clientWidth <= 768) {
            handle_show_popup([{
                className: '.table_transaction thead tr th:last-child',
                arr: '',
                noidung: 'Thời gian'
            }])
        }
        $('#quanlyhoso').addClass('color_click')

        //---------------------search

$("#select_city").change(function(){
    search();
})
$("#select_type_news,#select_districs").change(function(){
    search();
})
$(".input_search").keypress(function(e){
    if(e.which == 13) {
        search();
    }
})
$(".abs_search").click(function(){
    search();
})


function search()
{
    var link = "/khach-hang-tiem-nang.html";
    var id_cit = $("#select_city").val();
    var district = $("#select_districs").val();
    var keyword= $(".input_search").val();
    link += "?key=" + keyword;
    if(id_cit != null)
    {
        link += "&id_cit=" + id_cit;
    }
    if(district != null)
    {
        link += "&district=" + district;
    }
    var type_news = $("#select_type_news").val();
    if(type_news != null)
    {
        link += "&type_news=" + type_news;
    }
    location.href= link;
}

//-------------------------
$(".page-link").each(function() {
    var district = $("#select_districs").val();
    var type_news = $("#select_type_news").val();
    var id_cit = $("#select_city").val();
    var keyword = $('.input_search').val();
    var link = $(this).find('a').attr("href");
    var type_news = $("#select_type_news").val();
    link    += "?key=" + keyword;
    if(id_cit != null)
    {
        link += "&id_cit=" + id_cit;
    }
    if(district != null)
    {
        link += "&district=" + district;
    }
    if(type_news != null)
    {
        link += "&type_news=" + type_news;
    }
        if (keyword != '' || id_cit != null || type_news != null) {
            $(this).find('a').attr("href",link);
        }
    });

    function sliderBarScroll() {
    let slide_bar_item = document.querySelectorAll('.filter_item');
    if (slide_bar_item) {

        slide_bar_item.forEach(e => {
        $(e).children('.children_menu').css('display', 'none');
        $(e).children('.filter_name').click((event) => {
            event.preventDefault();
            let element = $(e).children('.filter_name');
            let menu = $(element).siblings('.children_menu');

            if (menu.length <= 0) {
            $(slide_bar_item).not($(e)).each((i, elem) => {
                let child = $(elem).children('.acive_mnc1');
                $(child).removeClass('acive_mnc1');
            })
            $(element).addClass('acive_mnc1');
            return;
            } else {
            $(slide_bar_item).not($(e)).each((i, elem) => {
                let child = $(elem).children('.acive_mnc1');
                $(child).removeClass('acive_mnc1');
                let childDrop = $(elem).children('.children_menu');
                if (childDrop) {
                $(childDrop).slideUp(300);
                }
            })
            $(element).siblings('.children_menu').slideToggle(300)
            }
            $(element).addClass('acive_mnc1');
        })
        })
    }
    }
    sliderBarScroll()
    </script>
</body>

</html>