<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scss/style.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
    <title>小松トマト</title>
</head>
<body>
    <div id="js-mouse">
        </div>
      <nav class="header_nav">
                <div class="header-nav__padding header-nav__flex">
                    <h1 class="logo">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rogo.svg" alt=""></a>
                    </h1>
                    <ul class="head_right_list">
                        <li class="head_right_cartbox">
                            <a href="">
                                <div class="header__link-wrapper">
                                    <span>カート</span>
                                    <span id="CartCount">
                                        <span>0</span>
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="hamburger drawer__nav__link">
                                <span class="inner_line" id="line1"></span>
                                <span class="inner_line" id="line2"></span>
                                <span class="inner_line" id="line3"></span>
                            </div>  
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="hamburger_open_content">
            <div class="globalMenuPc">
                <div>
                    <ul class="header-nav__flexPc">
                        <li>
                            <a href="" class="icon_box">
                                <span>ログイン</span>
                                <span class="person_icon icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/person_icon.svg" alt=""></span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="icon_box">
                                <span>お気に入り</span>
                                <span class="heart_icon icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/heart_icon.svg" alt=""></span>
                            </a>
                        </li>
                        <li class="head_right_cartbox min-width768px">
                            <a href="">
                                <div class="header__link-wrapper">
                                    <span>カート</span>
                                    <span id="CartCount">
                                        <span>0</span>
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="sp_CartCount_flex">
                            <div class="hamburger">
                                <span class="inner_line" id="line1"></span>
                                <span class="inner_line" id="line3"></span>
                            </div> 
                            <div class="head_right_cartbox max-width768px">
                                <a href="">
                                    <div class="header__link-wrapper">
                                        <span>カート</span>
                                        <span id="CartCount">
                                            <span>0</span>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <ul class="globalMenuPc_section">
                        <li><a href="#features" class="drawer__nav__link"><span>Features</span><span>小松トマトについて</span></a></li>
                        <li><a href="#brand_vision" class="drawer__nav__link"><span>Brand vision</span><span>企業理念</span></a></li>
                        <li><a href="#Journal" class="drawer__nav__link"><span>Journal</span><span>定期日誌</span></a></li>
                        <li><a href="product_file/product_menu.html" class="drawer__nav__link"><span>Product</span><span>製品</span></a></li>
                        <li><a href="news_file/news_menu.html" class="drawer__nav__link"><span>News</span><span>お知らせ</span></a></li>
                    </ul>
                    <ul class="globalMenuPc_sns">
                        <li><a href="" class="icon_box"><span class="sns_icon_size"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/x_hover.svg" alt=""></span><span>X</span></a></li>
                        <li><a href="" class="icon_box"><span class="sns_icon_size"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/facebook_hover.svg" alt=""></span><span>Facebook</span></a></li>
                        <li><a href="" class="icon_box"><span class="sns_icon_size"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/instagram_hover.svg" alt=""></span><span>Instagram</span></a></li>
                        </ul>
                </div>
            </div>
            <div class="hamburger_img_content">
                <div class="hamburger_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/hanburger_img.jpg" alt="">
                </div>
            </div>
            </div>
    <?php if(is_front_page()): ?><header class="top-header"><section class="fv_content"></section></header><?php endif; ?>