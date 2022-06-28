// Click Show / Hidden - Tin nháp
// Show
$('.tin_nhap_suv').click(function () {
    $('.popup_tinnhap').removeClass('hidden');
});
// Hidden
$('.hidden_popup_tinnhap').click(function () {
    // $('.hidden_popup').addClass('hidden');
    // console.log('duy');
})
// --------------------------------------------
// CLICK THAY ẢNH BÌA
function loadImage(input, output) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(output).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$(".click_anh").click(function () {
    $(".chon_anh").click();
    // alert('duy');
});
$(".chon_anh").change(function () {
    loadImage(this, ".post_anh")
});

$(".click_thay_avatar").click(function () {
    $(".chon_anh_2").click();
    // alert('duy');
});
$(".chon_anh_2").change(function () {
    loadImage(this, ".thay_avatar")
});


$('.click_them_anh').click(function () {
    $(".them_anh").click();
})
$('.them_anh').change(function () {
    $('.popup_themanh').removeClass('hidden');
    loadImage(this, ".them_avatar");
})

// SHOW POPUP THEM ẢNH
// $('.click_popup_themanh').click(function(){
// })

// ĐÓNG POPUP THEM ẢNH
$(".popup_themanh_huy").click(function () {
    $('.popup_themanh').addClass('hidden')
})
$(".popup_themanh_overlay").click(function () {
    $('.popup_themanh').addClass('hidden')
})







// Show / Hidden popup chỉnh sửa thông tin cá nhân
// Show
$('.show_popup_chinhsua').click(function () {
    $('.popup_ttcn').removeClass('hidden');
})
// Hidden
$('.button_huy').click(function () {
    $('.popup_ttcn').addClass('hidden');
})
$('.close_popup').click(function () {
    $('.popup_ttcn').addClass('hidden');
})


// CLick LƯU
$('.click_luu_tq').click(function () {
    $(this).toggleClass('luu_tq1');
    $(this).toggleClass('luu_tq2');
})

// Mua bán / Cho thuê - Tổng quan
$('.tongquan_khoi2_nguoimua_muaban').click(function () {
    $(this).addClass('add_bg');
    $('.tongquan_khoi2_nguoimua_chothue').removeClass('add_bg');
    $('.bds_muaban').removeClass('hidden');
    $('.bds_chothue').addClass('hidden');
})
$('.tongquan_khoi2_nguoimua_chothue').click(function () {
    $(this).addClass('add_bg');
    $('.tongquan_khoi2_nguoimua_muaban').removeClass('add_bg');
    $('.bds_muaban').addClass('hidden');
    $('.bds_chothue').removeClass('hidden');
})


// CLick SHOW DANH SÁCH THEO GIÕI
$('.ds_theodoi').click(function () {
    $('.ng_theogioi').addClass('bg_dstg');
    $('.dg_theogioi').removeClass('bg_dstg');
    $('.ho_so_dangtheodoi').addClass('hidden');
    $('.ho_so_nguoitheogdoi').removeClass('hidden');
})

$('.ng_theogioi').click(function () {
    $(this).addClass('bg_dstg');
    $('.dg_theogioi').removeClass('bg_dstg');
    $('.ho_so_dangtheodoi').addClass('hidden');
    $('.ho_so_nguoitheogdoi').removeClass('hidden');
});
$('.dg_theogioi').click(function () {
    $(this).addClass('bg_dstg');
    $('.ng_theogioi').removeClass('bg_dstg');
    $('.ho_so_dangtheodoi').removeClass('hidden');
    $('.ho_so_nguoitheogdoi').addClass('hidden');
})

// TÌM KIẾM 375
// MỞ TÌM KIẾM
$('.show_timkiem').click(function () {
    $('.popup_timkiem').removeClass('hidden');
})
// ĐÓNG POPUP TÌM KIẾM
$('.dong_timkiem').click(function () {
    $('.popup_timkiem').addClass('hidden');
})
$(".loc_svg").click(function () {
    $(this).toggleClass('loc_svg_fill');
    $('.popup_timkiem_boloc').toggleClass('hidden');
    $('.popup_timkiem_tukhoa').toggleClass('hidden');
})


// HOVER SIDEBAR
// -------------------fill
// $('.color_fill').hover(
//     function () {
//         $(this).addClass('icon_fill');
//     },
//     function () {
//         $(this).removeClass('icon_fill');
//     });

// // -------------------stroke
// $(".collor_stroke").hover(
//     function () {
//         $(this).addClass('icon_stroke');
//     },
//     function () {
//         $(this).removeClass('icon_stroke');
//     });
// // -------------------stroke2
// $(".color_stroke2").hover(
//     function () {
//         $(this).addClass('icon_stroke2');
//     },
//     function () {
//         $(this).removeClass('icon_stroke2');
//     });

// // Hover slibar--------------------------
// $('.slider_bar').hover(
//     function () {
//         $(this).addClass('hidden');
//         $('.slider_bar_2').removeClass('hidden');
//     });
// $('.slider_bar_2_ovlay').hover(
//     function () {
//         $('.slider_bar_2').addClass('hidden');
//         $('.slider_bar').removeClass('hidden');
//     });



// SHOW LIÊN HÊ PAGE TỔNG QUAN
$('.click_lienhe').click(function () {
    $('.popup_lienhe').removeClass('hidden');
})
$('.close_lienhe').click(function () {
    $('.popup_lienhe').addClass('hidden');
})


//SHOW POPUP ẢNH
$('.show_popup_img').click(function () {
    $('.popup_anh').removeClass('hidden');
})
$('.close_popup_img').click(function () {
    $('.popup_anh').addClass('hidden');
})
// ----------------------------------
$('.click_img_show').click(function () {
    $('.popup_khung_img1').addClass('hidden');
    $('.popup_khung_img2').removeClass('hidden');
    // alert('duy');
})

// CLICK BUTTON NHÀ MÔI GIỚI
function nhamg_dsmuab(click_nhamg_dsmuab) {
    $('.nhamg_dsmuab_cl').removeClass('main_bg_cl');
    $(click_nhamg_dsmuab).addClass('main_bg_cl');
}

// CLICK THEO DÕI
//THEO DÕI MÔI GIỚI
// - Người theo dõi
$('.click_theogioi').click(function () {
    $('.chitiet_moigioi_muaban').addClass('hidden');
    $('.block_dang_theodoi').addClass('hidden');
    $('.block_ng_theodoi').removeClass('hidden');
});

// - Đang theo dõi
$('.click_dangtheogioi').click(function () {
    $('.chitiet_moigioi_muaban').addClass('hidden');
    $('.block_dang_theodoi').removeClass('hidden');
    $('.block_ng_theodoi').addClass('hidden');
});
// Quay lại
$('.go_back').click(function () {
    $('.chitiet_moigioi_muaban').removeClass('hidden');
    $('.block_dang_theodoi').addClass('hidden');
    $('.block_ng_theodoi').addClass('hidden');
    $('.block_nguoi_theodoi_dn').addClass('hidden');
    $('.block_dang_theodoi_dn').addClass('hidden');
})
// THEO DÕI DOANH NGHIỆP
// click_theogioi_dn
// click_dangtheogioi_dn
$('.click_ng_theogioi_dn').click(function () {
    $('.chitiet_doanhnghiep_noidung_2').addClass('hidden');
    $('.block_nguoi_theodoi_dn').removeClass('hidden');
    $('.block_dang_theodoi_dn').addClass('hidden');
})
$('.click_dg_theogioi_dn').click(function () {
    $('.chitiet_doanhnghiep_noidung_2').addClass('hidden');
    $('.block_nguoi_theodoi_dn').addClass('hidden');
    $('.block_dang_theodoi_dn').removeClass('hidden');
})
$('.go_back2').click(function () {
    $('.chitiet_doanhnghiep_noidung_2').removeClass('hidden');
    $('.block_nguoi_theodoi_dn').addClass('hidden');
    $('.block_dang_theodoi_dn').addClass('hidden');
})


// SHOW POPUP ẢNH CHI TIẾT DOANH NGHIỆP
$('.click_show_anh').click(function () {
    $('.popup_anh').removeClass('hidden');
})

// SHOW POPUP ĐẦY TIN
$('.click_day_tin').click(function () {
    $('.popup_daytin').removeClass('hidden');
    $('.popup_muaban').addClass('hidden');
})

// HIDDEN
$('.close_pp_daytin').click(function () {
    $('.popup_daytin').addClass('hidden');
})




// SHOW POPUP LỊCH TRẢ NỢ
// MỞ
$('.lich_tra_no').click(function () {
    $('.popup_lichtrano').removeClass('hidden');
})

// ĐÓNG
$('.close_popup_lichtrano').click(function () {
    $('.popup_lichtrano').addClass('hidden');
})


// Phòng đẹp - nhà đẹp: Luồng chi tiết nhà môi giới
function click_pd_nd(show_bg_pd_nd_cl) {
    $('.show_bg_pd_nd').removeClass('main_bg_cl');
    $(show_bg_pd_nd_cl).addClass('main_bg_cl');
}


// POPUP CHIA SẺ
// CLICK SHOW/
$('.moigioi_ds_nhadep_chiase').click(function () {
    $('.popup_chiase').removeClass('hidden');
});
// CLOSE
$('.close_popup_chiase').click(function () {
    $('.popup_chiase').addClass('hidden');
});
$('.popup_chiase_overlay').click(function () {
    $('.popup_chiase').addClass('hidden');
})

// HEADER 768
// CLICK TÌM KIẾM
// $('.timkiem_768').click(function () {
//     $(this).addClass('hidden');
//     $('.header_content_logo').addClass('hidden');
//     $('.header_content_khung_timkiem').addClass('mora');
//     $('.header_content_DTDN_dangnhap_thanhcong').addClass('hidden');
// })
// CLICK ĐÓNG
// $('.text_them_768').click(function () {
//     $('.timkiem_768').removeClass('hidden');
//     $('.header_content_khung_timkiem').removeClass('mora');
//     $('.header_content_logo').removeClass('hidden');
//     // $('.header_content_DTDN_dangnhap_thanhcong').removeClass('hidden');

// })
// SHOW MENU
// $('.icon_menu').click(function () {
//     $('.popup_menu').removeClass('hidden');
// })
// $('.icon_menu2  ').click(function () {
//     $('.popup_menu').addClass('hidden');
// })
// // HIDDEN MENU
// $('.dong').click(function () {
//     $('.popup_menu').addClass('hidden');
// })
// $('.popup_menu_overlay').click(function () {
//     $('.popup_menu').addClass('hidden');
// })
// CLICK BG MENU

// DỰ ÁN
$('.click_mn_da').click(function () {
    $(this).toggleClass('rotata_menu');
    $('.menu_c2_768_da').toggleClass('hidden');
    $(this).parents('.li_menu_da').toggleClass('bg_menu');
    $(this).parents('.li_menu_da').toggleClass('color_menu');
    $('.li_trangchu').toggleClass('color_menu')
    $('.li_trangchu').toggleClass('bg_menu')
})
// MUA BÁN
$('.click_mn_muaban').click(function () {
    $(this).toggleClass('rotata_menu')
    $('.menu_c2_768_mb').toggleClass('hidden');
    $(this).parents('.li_mn_mb').toggleClass('bg_menu');
    $(this).parents('.li_mn_mb').toggleClass('color_menu');
    $('.li_trangchu').toggleClass('color_menu')
    $('.li_trangchu').toggleClass('bg_menu')
})
// CHO THUE
$('.click_mn_chothue').click(function () {
    $(this).toggleClass('rotata_menu')
    $('.menu_c2_768_ct').toggleClass('hidden');
    $(this).parents('.li_mn_ct').toggleClass('bg_menu');
    $(this).parents('.li_mn_ct').toggleClass('color_menu');
    $('.li_trangchu').toggleClass('color_menu')
    $('.li_trangchu').toggleClass('bg_menu')
})
// CHUYÊN GIA
$('.click_mn_chuyengia').click(function () {
    $(this).toggleClass('rotata_menu')
    $('.menu_c2_768_cg').toggleClass('hidden');
    $(this).parents('.li_mn_cg').toggleClass('bg_menu');
    $(this).parents('.li_mn_cg').toggleClass('color_menu');
    $('.li_trangchu').toggleClass('color_menu')
    $('.li_trangchu').toggleClass('bg_menu')
})
// THIẾT KẾ ĐẸP
$('.click_mn_tk').click(function () {
    $(this).toggleClass('rotata_menu')
    $('.menu_c2_768_tk').toggleClass('hidden');
    $(this).parents('.li_mn_tk').toggleClass('bg_menu');
    $(this).parents('.li_mn_tk').toggleClass('color_menu');
    $('.li_trangchu').toggleClass('color_menu')
    $('.li_trangchu').toggleClass('bg_menu')
})

$('.show_toggle_TY_375_1').click(function () {
    $(this).toggleClass('rotate_duy');
    $('.hidden_toggle_TY_375_1').toggleClass('hidden');
})
$('.show_toggle_TY_375_2').click(function () {
    $(this).toggleClass('rotate_duy');
    $('.hidden_toggle_TY_375_2').toggleClass('hidden');
})
$('.show_toggle_TY_375_3').click(function () {
    $(this).toggleClass('rotate_duy');
    $('.hidden_toggle_TY_375_3').toggleClass('hidden');
})
$('.show_toggle_TY_375_4').click(function () {
    $(this).toggleClass('rotate_duy');
    $('.hidden_toggle_TY_375_4').toggleClass('hidden');
})
$('.show_toggle_TY_375_5').click(function () {
    $(this).toggleClass('rotate_duy');
    $('.hidden_toggle_TY_375_5').toggleClass('hidden');
})
$('.show_toggle_TY_375_6').click(function () {
    $(this).toggleClass('rotate_duy');
    $('.hidden_toggle_TY_375_6').toggleClass('hidden');
})

// CLOSE/SHOW POPUP LỌC KẾT QUẢ MÀN 375
//CLOSE
$('.close_popup_locketqua').click(function () {
    $('.popup_locketqua').addClass('hidden');
})
//SHOW
$('.loc_480_1').click(function () {
    $('.popup_locketqua').removeClass('hidden');
})
// $('.loc_480_2').click(function () {
//     $('.popup_locketqua').removeClass('hidden');
// })

// ĐÓNG MỞ MỤC LỤC
// MỞ
$('.them1class').click(function () {
    $('.body_ketthuc_khung2').addClass('block');
})
// ĐÓNG
$('.dong_mucluc').click(function () {
    $('.body_ketthuc_khung2').removeClass('block');
})
//--------------------------------------------------

// SHOW SIDEBAR SAU ĐĂNG NHẬP
// $('.img_menu_3_gach').click(function () {
//     $('.slider_bar_2').removeClass('hidden');
//     $('.slider_bar_2').addClass('block');
// })
// CLOSE SIDEBAR
// $('.close_sidebar').click(function () {
//     $('.slider_bar_2').addClass('hidden');
// })

// POPUP XÓA / PAGE QUẢN LÝ TIN ĐĂNG
// MỞ
$('.show_popup_xoa').click(function(){
    $('.popup_xoa').removeClass('hidden');
    $('.popup_muaban').addClass('hidden');
})
// ĐÓNG
$('.back').click(function(){
    $('.popup_xoa').addClass('hidden');
})

// POPUP ĐẨY TIN CON / PAGE QUẢN LÝ TIN ĐĂNG
// MỞ
$('.show_popup_daytincon').click(function(){
    $('.popup_daytin_con').removeClass('hidden');
    // $('.popup_daytin').addClass('hidden');

})
// ĐÓNG
$('.back_daytin_con').click(function(){
    $('.popup_daytin_con').addClass('hidden');
})

// POPUP GIM TIN / PAGE QUẢN LÝ TIN ĐĂNG
// MỞ
$('.show_popup_gimtin').click(function(){
    $('.popup_gimtin').removeClass('hidden');
    $('.popup_muaban').addClass('hidden');
})
// ĐÓNG
$('.dong_gimtin').click(function(){
    $('.popup_gimtin').addClass('hidden');
})

$('.slider_bar_img_sub').click(function(){
    $(this).addClass('color_click')
})
































































// CHART PAGE TỔNG QUAN
const labels = ['CN', 'Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'thứ 7'];

const data = {
    labels: labels,
    datasets: [
        {
            label: [""],
            backgroundColor: '#3691D9',
            borderColor: '#3691D9',
            data: [130000, 120000, 40000, 150000, 120000, 180000, 210000],
            tension: .4, //Độ cong
        },

    ],
}

const config = {
    type: 'line',
    data: data,
    options: {
        scales: {
            x: {
                grid: {
                    display: false,
                }
            }, y: {
                grid: {
                    display: false,
                },
            }
        },
        legend: {
            display: false //This will do the task
        }
    },

}
const canvas = document.getElementById('canvas');
const chart = new Chart(canvas, config);

