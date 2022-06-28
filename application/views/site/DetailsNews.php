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
    <title>Chi tiết tin tức</title>
</head>

<body>
    <<? require_once APPPATH.'views/site/includes/da_header.php' ?>
    <div class="tan-cttt">
        <div class="container bg_blue_10 pd_b_64">
            <div class="directional d_flex pd_tb_24_27 pd_lr_80">
                <div>
                    <a href="/" class="font_s14 line_h17 font_w400">Trang chủ</a>
                </div>
                <span class="arrow"><img src="<? echo base_url(); ?>assets/images/arrow_small_black.png" class="checked" alt=""></span>
                <div>
                    <a href="/tin-tuc.html" class="font_s14 line_h17 font_w400">Tin tức</a>
                </div>
                <span class="arrow"><img src="<? echo base_url(); ?>assets/images/arrow_small_black.png" class="checked" alt=""></span>
                <div class="directional_acitve">
                    <a href="" class="font_s14 line_h17 font_w400">Thị trường</a>
                </div>
            </div>

            <div class="infor_new bg_gray4 pd_tb_24_78">
                <div class="pd_lr_64_80 tan_infor_new_con">
                    <div class="d_flex align_c sp_24">
                        <span class="font_s16 line_h19 font_w400 gray_2">Tác giả: <span
                                class="inline_bl black_md font_s16 line_h19 font_w400 ml_8">Ralph Edwards</span></span>
                        <span class="font_s16 line_h19 font_w400 gray_2">20:00.20/10/2022</span>
                    </div>
                    <div class="shares d_flex align_c mt_32 shares_375">
                        <div class="detail_home_left-btn-click d_flex align_c">
                            <div class="item-btn-lick-icon m_r_24  cursor_p">
                                <span class="item-btn-title" data-title="Sao chép liên kết">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="30" height="30" rx="15" fill="black" />
                                        <path
                                            d="M21.4436 8.48592C20.1291 7.17136 17.9694 7.17136 16.6549 8.48592L12.5234 12.5235C11.2088 13.932 11.2088 15.9977 12.5234 17.4061C12.6173 17.5 12.8051 17.5939 12.899 17.6878L14.3074 16.2794C14.2135 16.1855 14.0258 16.0916 13.9319 15.9977C13.3685 15.4343 13.3685 14.4953 13.9319 13.932L18.0633 9.80048C18.6267 9.2371 19.5657 9.2371 20.1291 9.80048C20.6924 10.3639 20.6924 11.3028 20.1291 11.8662L18.9084 13.0869C19.284 13.8381 19.3779 14.6831 19.284 15.4343L21.4436 13.2747C22.8521 11.9601 22.8521 9.80048 21.4436 8.48592Z"
                                            fill="white" />
                                        <path
                                            d="M17.0306 12.2402L15.6221 13.6487C15.6221 13.6487 15.9038 13.8365 15.9977 13.9304C16.5611 14.4938 16.5611 15.4327 15.9977 15.9961L11.8662 20.1276C11.3028 20.691 10.3639 20.691 9.80048 20.1276C9.2371 19.5642 9.2371 18.6252 9.80048 18.0619L11.0211 16.8412C10.6456 16.09 10.9272 15.6205 10.6456 14.4938L8.48592 16.6534C7.17136 17.968 7.17136 20.1276 8.48592 21.4422C9.80048 22.7567 11.9601 22.7567 13.2747 21.4422L17.4061 17.3107C18.7207 15.9961 18.7207 13.8365 17.4061 12.5219C17.2184 12.428 17.0306 12.2402 17.0306 12.2402Z"
                                            fill="white" />
                                    </svg>
                                </span>
                            </div>
                            <div class="item-btn-lick-icon m_r_24 cursor_p">
                                <span class="item-btn-title" data-title="Twitter">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_656_101035)">
                                            <path
                                                d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71574 23.2843 0 15 0C6.71574 0 0 6.71574 0 15C0 23.2843 6.71574 30 15 30Z"
                                                fill="black" />
                                            <path
                                                d="M24.6177 9.03303C23.9102 9.34699 23.1502 9.55922 22.3512 9.65462C23.1667 9.16632 23.7914 8.39255 24.0863 7.47162C23.3117 7.93169 22.464 8.25558 21.5799 8.42922C20.8605 7.66237 19.8346 7.18359 18.6996 7.18359C16.521 7.18359 14.7542 8.94971 14.7542 11.1295C14.7542 11.4384 14.789 11.7397 14.8558 12.029C11.5763 11.8642 8.66874 10.2933 6.72257 7.90624C6.38274 8.48922 6.18823 9.16704 6.18823 9.89024C6.18823 11.2591 6.88495 12.4668 7.9436 13.1743C7.31689 13.1548 6.70394 12.9857 6.15599 12.6809V12.7308C6.15599 14.6428 7.51596 16.2371 9.32125 16.5997C8.98962 16.6906 8.64159 16.7381 8.28155 16.7381C8.02698 16.7381 7.78 16.714 7.53873 16.6686C8.04088 18.2358 9.4982 19.3765 11.2244 19.4088C9.87393 20.4674 8.17224 21.0985 6.32401 21.0985C6.00568 21.0985 5.69106 21.0795 5.3822 21.0422C7.12877 22.1622 9.20253 22.8159 11.431 22.8159C18.6889 22.8159 22.6582 16.8032 22.6582 11.5888C22.6582 11.4176 22.6544 11.2477 22.6462 11.0784C23.4195 10.519 24.0871 9.82644 24.6177 9.03303Z"
                                                fill="white" />
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
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 22.4869 5.48528 28.6925 12.6562 29.8177V19.3359H8.84766V15H12.6562V11.6953C12.6562 7.93593 14.8957 5.85938 18.3219 5.85938C19.9631 5.85938 21.6797 6.15234 21.6797 6.15234V9.84375H19.7882C17.9249 9.84375 17.3438 11 17.3438 12.1862V15H21.5039L20.8389 19.3359H17.3438V29.8177C24.5147 28.6925 30 22.4869 30 15Z"
                                            fill="black" />
                                        <path
                                            d="M20.8389 19.3359L21.5039 15H17.3438V12.1862C17.3438 11 17.9249 9.84375 19.7882 9.84375H21.6797V6.15234C21.6797 6.15234 19.9631 5.85938 18.3219 5.85938C14.8957 5.85938 12.6562 7.93593 12.6562 11.6953V15H8.84766V19.3359H12.6562V29.8177C14.2093 30.0608 15.7907 30.0608 17.3438 29.8177V19.3359H20.8389Z"
                                            fill="white" />
                                    </svg>
                                </span>

                            </div>
                            <div class="item-btn-lick-icon m_r_24 icon_mess  cursor_p">
                                <span class="item-btn-title" data-title="messenger">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15 1.25C7.25421 1.25 1.25 6.9238 1.25 14.5875C1.25 18.5961 2.89285 22.06 5.56827 24.4526C5.79286 24.6536 5.92844 24.9352 5.93765 25.2366L6.01253 27.6824C6.03646 28.4626 6.84232 28.9703 7.55622 28.6551L10.2854 27.4503C10.5168 27.3483 10.776 27.3293 11.0198 27.3964C12.2739 27.7413 13.6087 27.925 15 27.925C22.7458 27.925 28.75 22.2512 28.75 14.5875C28.75 6.9238 22.7458 1.25 15 1.25Z"
                                            fill="url(#paint0_radial_656_101042)" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M6.74324 18.4889L10.7823 12.0808C11.4248 11.0614 12.8006 10.8076 13.7646 11.5305L16.9771 13.9399C17.2718 14.161 17.6774 14.1598 17.9709 13.9371L22.3095 10.6444C22.8886 10.2049 23.6445 10.8979 23.2569 11.5129L19.2179 17.921C18.5753 18.9404 17.1995 19.1942 16.2355 18.4712L13.023 16.0618C12.7283 15.8408 12.3227 15.8419 12.0292 16.0647L7.69061 19.3574C7.11154 19.7968 6.35562 19.1038 6.74324 18.4889Z"
                                            fill="white" />
                                        <defs>
                                            <radialGradient id="paint0_radial_656_101042" cx="0" cy="0" r="1"
                                                gradientUnits="userSpaceOnUse"
                                                gradientTransform="translate(6.54292 28.6028) scale(29.964)">
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
                    <h2 class="font_s40 line_h56 font_w500 black_md mt_16">Cập nhật bản đồ quy hoạch thành phố Đồng Xoài
                        mới nhất</h2>
                    <p class="font_s18 tan_text_con_tt line_26 font_w400 mt_24">Bản đồ quy hoạch thành phố Đồng Xoài là cơ sở quan trọng
                        cho những khách hàng và nhà đầu tư đang có ý định đầu tư bất động sản tại Đồng Xoài, Bình Phước.
                        Tìm hiểu thông tin, bản đồ quy hoạch Đồng Xoài trong bài viết dưới đây của Homedy.
                        Trước khi tìm hiểu chi tiết về bản đồ quy hoạch thành phố Đồng Xoài, húng ta hãy cùng điểm qua
                        một số nét cơ bản về thành phố Đồng Xoài, tỉnh Bình Phước dưới đây.</p>
                </div>
            </div>

            <div class="details_new pd_lr_80 mt_a101">
                <!-- <div class="thumbnail_share">
                    <img src="<? echo base_url(); ?>assets/images/bg_new.png" alt="">
                </div> -->
                <div class="shares d_flex align_c mt_32">
                    <div class="detail_home_left-btn-click d_flex align_c">
                        <div class="item-btn-lick-icon m_r_24  cursor_p">
                            <span class="item-btn-title" data-title="Sao chép liên kết">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="30" height="30" rx="15" fill="black" />
                                    <path
                                        d="M21.4436 8.48592C20.1291 7.17136 17.9694 7.17136 16.6549 8.48592L12.5234 12.5235C11.2088 13.932 11.2088 15.9977 12.5234 17.4061C12.6173 17.5 12.8051 17.5939 12.899 17.6878L14.3074 16.2794C14.2135 16.1855 14.0258 16.0916 13.9319 15.9977C13.3685 15.4343 13.3685 14.4953 13.9319 13.932L18.0633 9.80048C18.6267 9.2371 19.5657 9.2371 20.1291 9.80048C20.6924 10.3639 20.6924 11.3028 20.1291 11.8662L18.9084 13.0869C19.284 13.8381 19.3779 14.6831 19.284 15.4343L21.4436 13.2747C22.8521 11.9601 22.8521 9.80048 21.4436 8.48592Z"
                                        fill="white" />
                                    <path
                                        d="M17.0306 12.2402L15.6221 13.6487C15.6221 13.6487 15.9038 13.8365 15.9977 13.9304C16.5611 14.4938 16.5611 15.4327 15.9977 15.9961L11.8662 20.1276C11.3028 20.691 10.3639 20.691 9.80048 20.1276C9.2371 19.5642 9.2371 18.6252 9.80048 18.0619L11.0211 16.8412C10.6456 16.09 10.9272 15.6205 10.6456 14.4938L8.48592 16.6534C7.17136 17.968 7.17136 20.1276 8.48592 21.4422C9.80048 22.7567 11.9601 22.7567 13.2747 21.4422L17.4061 17.3107C18.7207 15.9961 18.7207 13.8365 17.4061 12.5219C17.2184 12.428 17.0306 12.2402 17.0306 12.2402Z"
                                        fill="white" />
                                </svg>
                            </span>
                        </div>
                        <div class="item-btn-lick-icon m_r_24 cursor_p">
                            <span class="item-btn-title" data-title="Twitter">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_656_101035)">
                                        <path
                                            d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71574 23.2843 0 15 0C6.71574 0 0 6.71574 0 15C0 23.2843 6.71574 30 15 30Z"
                                            fill="black" />
                                        <path
                                            d="M24.6177 9.03303C23.9102 9.34699 23.1502 9.55922 22.3512 9.65462C23.1667 9.16632 23.7914 8.39255 24.0863 7.47162C23.3117 7.93169 22.464 8.25558 21.5799 8.42922C20.8605 7.66237 19.8346 7.18359 18.6996 7.18359C16.521 7.18359 14.7542 8.94971 14.7542 11.1295C14.7542 11.4384 14.789 11.7397 14.8558 12.029C11.5763 11.8642 8.66874 10.2933 6.72257 7.90624C6.38274 8.48922 6.18823 9.16704 6.18823 9.89024C6.18823 11.2591 6.88495 12.4668 7.9436 13.1743C7.31689 13.1548 6.70394 12.9857 6.15599 12.6809V12.7308C6.15599 14.6428 7.51596 16.2371 9.32125 16.5997C8.98962 16.6906 8.64159 16.7381 8.28155 16.7381C8.02698 16.7381 7.78 16.714 7.53873 16.6686C8.04088 18.2358 9.4982 19.3765 11.2244 19.4088C9.87393 20.4674 8.17224 21.0985 6.32401 21.0985C6.00568 21.0985 5.69106 21.0795 5.3822 21.0422C7.12877 22.1622 9.20253 22.8159 11.431 22.8159C18.6889 22.8159 22.6582 16.8032 22.6582 11.5888C22.6582 11.4176 22.6544 11.2477 22.6462 11.0784C23.4195 10.519 24.0871 9.82644 24.6177 9.03303Z"
                                            fill="white" />
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
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 22.4869 5.48528 28.6925 12.6562 29.8177V19.3359H8.84766V15H12.6562V11.6953C12.6562 7.93593 14.8957 5.85938 18.3219 5.85938C19.9631 5.85938 21.6797 6.15234 21.6797 6.15234V9.84375H19.7882C17.9249 9.84375 17.3438 11 17.3438 12.1862V15H21.5039L20.8389 19.3359H17.3438V29.8177C24.5147 28.6925 30 22.4869 30 15Z"
                                        fill="black" />
                                    <path
                                        d="M20.8389 19.3359L21.5039 15H17.3438V12.1862C17.3438 11 17.9249 9.84375 19.7882 9.84375H21.6797V6.15234C21.6797 6.15234 19.9631 5.85938 18.3219 5.85938C14.8957 5.85938 12.6562 7.93593 12.6562 11.6953V15H8.84766V19.3359H12.6562V29.8177C14.2093 30.0608 15.7907 30.0608 17.3438 29.8177V19.3359H20.8389Z"
                                        fill="white" />
                                </svg>
                            </span>

                        </div>
                        <div class="item-btn-lick-icon m_r_24 icon_mess  cursor_p">
                            <span class="item-btn-title" data-title="messenger">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15 1.25C7.25421 1.25 1.25 6.9238 1.25 14.5875C1.25 18.5961 2.89285 22.06 5.56827 24.4526C5.79286 24.6536 5.92844 24.9352 5.93765 25.2366L6.01253 27.6824C6.03646 28.4626 6.84232 28.9703 7.55622 28.6551L10.2854 27.4503C10.5168 27.3483 10.776 27.3293 11.0198 27.3964C12.2739 27.7413 13.6087 27.925 15 27.925C22.7458 27.925 28.75 22.2512 28.75 14.5875C28.75 6.9238 22.7458 1.25 15 1.25Z"
                                        fill="url(#paint0_radial_656_101042)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.74324 18.4889L10.7823 12.0808C11.4248 11.0614 12.8006 10.8076 13.7646 11.5305L16.9771 13.9399C17.2718 14.161 17.6774 14.1598 17.9709 13.9371L22.3095 10.6444C22.8886 10.2049 23.6445 10.8979 23.2569 11.5129L19.2179 17.921C18.5753 18.9404 17.1995 19.1942 16.2355 18.4712L13.023 16.0618C12.7283 15.8408 12.3227 15.8419 12.0292 16.0647L7.69061 19.3574C7.11154 19.7968 6.35562 19.1038 6.74324 18.4889Z"
                                        fill="white" />
                                    <defs>
                                        <radialGradient id="paint0_radial_656_101042" cx="0" cy="0" r="1"
                                            gradientUnits="userSpaceOnUse"
                                            gradientTransform="translate(6.54292 28.6028) scale(29.964)">
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

            <div class="content_news tan_mucluc pd_lr_80 mt_46 pd_b_26">
                <div class="d_flex tan_flex_375">
                    <div class="content_news-left new_item-desc flex_1 mr_24">
                        <div class="tan_mucluc_content_news_left">
                            <?php for ($i = 0; $i < 5; $i++) : ?>
                            <p <?= $i >= 1 ? 'style="margin-top: 16px"' : '' ?>>Bản đồ quy hoạch thành phố Đồng Xoài là
                                cơ sở quan trọng cho những khách hàng và nhà đầu tư đang có ý định đầu tư bất động sản
                                tại Đồng Xoài, Bình Phước. Tìm hiểu thông tin, bản đồ quy hoạch Đồng Xoài trong bài viết
                                dưới đây của Homedy.
                                Trước khi tìm hiểu chi tiết về bản đồ quy hoạch thành phố Đồng Xoài, húng ta hãy cùng
                                điểm qua một số nét cơ bản về thành phố Đồng Xoài, tỉnh Bình Phước dưới đây.</p>
                            <?php endfor; ?>
                            <div style="margin-top: 32px; display: flex; flex-direction: column; align-items: center">
                                <img src="<? echo base_url(); ?>assets/images/Rectangle 3464262.png" alt="" style="width: 100%">
                                <span
                                    style="font-size: 14px;line-height: 17px;margin-top:8px; font-weight: 400;color: #474747;display: inline-block ">Tiêu
                                    đề ảnh </span>
                            </div>
                            <?php for ($i = 0; $i < 5; $i++) : ?>
                            <p style="margin-top: 16px">Bản đồ quy hoạch thành phố Đồng Xoài là cơ sở quan trọng cho
                                những khách hàng và nhà đầu tư đang có ý định đầu tư bất động sản tại Đồng Xoài, Bình
                                Phước. Tìm hiểu thông tin, bản đồ quy hoạch Đồng Xoài trong bài viết dưới đây của
                                Homedy.
                                Trước khi tìm hiểu chi tiết về bản đồ quy hoạch thành phố Đồng Xoài, húng ta hãy cùng
                                điểm qua một số nét cơ bản về thành phố Đồng Xoài, tỉnh Bình Phước dưới đây.</p>
                            <?php endfor; ?>
                        </div>

                        <div class="box_infor mt_25">
                            <div class="box_infor-title">
                                <h2>Text, text, text</h2>
                            </div>
                            <div class="box_infor-desc d_flex align_c flex_column">
                                <p class="font_s16">Chung cư đang được coi là phân khúc bất động sản cực HOT đi cùng sự
                                    phát triển của xã hội được khá nhiều người quan tâm trong thời điểm hiện tại. Sản
                                    phẩm bất động sản tuyệt vời này giúp xã hội giải được bài toàn về nhà ở đặc biệt là
                                    các thành phố lớn
                                </p>
                                <button
                                    class="btn mt_24 btn_sussess font_s16 line_h19 font_w500 mw_200 pd_11_16 btn_active_bl_w br_8">Text</button>
                            </div>
                        </div>
                    </div>
                    <div class="content_news-right w_386">
                        <div class="index_right br_8 drop_sh bg_white">
                            <div class="index_right-heading d_flex align_c">
                                <div>
                                    <img src="<? echo base_url(); ?>assets/images/menu_gray.png" alt="">
                                </div>
                                <span class="font_s18 line_h21 font_w500">Mục Lục</span>
                            </div>
                            <div class="list_index mt_16">
                                <div class="item_index">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="keywork mt_64">
                    <h2 class="font_s30 line_h32 font_w500 black_md">Từ khóa liên quan</h2>
                    <div class="d_flex tan_khoi_keyword flex_w align_c">
                        <div class="br_8 pd_8_16 keyword_con bg_blue_5">
                            <span class="font_s16 line_h19 font_w400 blue_title">Bất Động Sản Cho Thuê</span>
                        </div>

                        <div class="br_8 pd_8_16 keyword_con bg_blue_5">
                            <span class="font_s16 line_h19 font_w400 blue_title">Bất Động Sản Cho Thuê Tại Quận Ba
                                Đình</span>
                        </div>

                        <div class="br_8 pd_8_16 keyword_con bg_blue_5">
                            <span class="font_s16 line_h19 font_w400 blue_title">Bất Động Sản Cho Thuê Tại Quận Ba
                                Đình</span>
                        </div>

                        <div class="br_8 pd_8_16 keyword_con bg_blue_5">
                            <span class="font_s16 line_h19 font_w400 blue_title">Bất Động Sản Cho Thuê Tại Quận Ba
                                Đình</span>
                        </div>

                        <div class="br_8 pd_8_16 keyword_con bg_blue_5">
                            <span class="font_s16 line_h19 font_w400 blue_title">Bất Động Sản Cho Thuê Tại Quận Ba
                                Đình</span>
                        </div>

                        <div class="br_8 pd_8_16 keyword_con bg_blue_5">
                            <span class="font_s16 line_h19 font_w400 blue_title">Bất Động Sản Cho Thuê Tại Quận Ba
                                Đình</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="market tan_tccm d_flex mt_77 bg_white pd_tb_40">
                <div class="market_left tan_tccm_khoicon flex_1 pd_lr_80">
                    <h2 class="discover_top-title">
                        <span class="font_s30 line_h32 wb_br font_w500 black_md">
                            Tin cùng chuyên mục
                        </span>
                    </h2>

                    <div class="market_left-list mt_24">
                        <div class="row d_flex flex_w">
                            <?php for ($i = 0; $i < 8; $i++) : ?>
                            <div class="col_4 br_8 d_flex flex_column">
                                <div class="item_img position_r mx_h180">
                                    <img src="<? echo base_url(); ?>assets/images/house_demo.png" alt="">
                                </div>
                                <div class="pd_t_16">
                                    <h2 class="font_s16 line_h24 font_w500 ellipsis_3 wb_wr black_md">Bất động sản khách
                                        sạn sẽ là tâm điểm trong cảnh lạm phát tăng cao</h2>
                                    <span class="gray_2 font_s12 line_h14 font_w400 block mt_5">20:00 .
                                        11/11/2023</span>
                                </div>
                            </div>
                            <?php endfor; ?>
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

        active_single_header('tintuc');

        CheckSize('.keywork > div', {
            "marginTop": "16px"
        });
        </script>
</body>

</html>