<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/wow.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <title>株式会社フロンティアグループ</title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="c-header">
        <div class="c-header__inner">
            <h1>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/img-logo.jpg" alt="logo">
                </a>
            </h1>
            <div class="c-header-right ">
                <ul class="c-header__items">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">事業ドメイン</a>
                        <!-- <ul class="dropdown">
                            <li><a href="#">Sub-1</a></li>
                            <li><a href="#">Sub-2</a></li>
                            <li><a href="#">Sub-3</a></li>
                        </ul> -->
                        <ul class="submenu">
                            <li><a href="#">不動産事業</a></li>
                            <li><a href="#">不動産<br>クラウドファンディング</a></li>
                            <li><a href="#">M&A/投資育成</a></li>
                            <li><a href="#">再生エネルギー事業</a></li>
                        </ul>
                    </li>
                    <li><a href="#">所有不動産一覧</a></li>
                    <li><a href="#">お知らせ</a></li>
                    <li><a href="#">IR情報</a></li>
                    <li><a href="#">採用情報</a></li>
                    <li><a href="#">企業情報</a>
                        <ul class="submenu">
                            <li><a href="#">会社概要</a></li>
                            <li><a href="#">企業理念</a></li>
                            <li><a href="#">代表挨拶</a></li>
                            <li><a href="#">企業沿革</a></li>
                        </ul>
                    </li>
                    <li><a href="#">お問い合わせ</a>
                        <ul class="submenu">
                            <li><a href="#">お問い合わせフォーム</a></li>
                            <li><a href="#">各種書式ダウンロード</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
            <div class="hambtn hamburger-menu-icon-wrap">
                <span class="hamburger-menu-line top"></span>
                <span class="hamburger-menu-line middle"></span>
                <span class="hamburger-menu-line bottom"></span>
            </div>
        </div>
    </div>
    <div class="hamburger-menu">
        <div class="hamburger-menu-container">
            <div class="hambuger-menu-head">
                <figure>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/img-logo.jpg" alt="">
                    </a>
                </figure>

                <svg class="open-modal-btn" width="14" height="15" viewBox="0 0 14 15" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 1.5L1 13.5" stroke="#333333" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M1 1.5L13 13.5" stroke="#333333" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>

            </div>
            <ul class="hamburger-menu-list">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">About us</a>
                </li>
                <li>
                    <a href="#">企業ドメイン</a>
                </li>
                <li>
                    <a href="#">所有不動産一覧</a>
                </li>
                <li>
                    <a href="#">NEWS</a>
                </li>
                <li>
                    <a href="#">採用情報</a>
                </li>
                <li>
                    <a href="#">IR情報</a>
                </li>
                <li>
                    <a href="#">企業情報</a>
                </li>
                <li>
                    <a href="#">お問い合わせ</a>
                </li>
            </ul>

        </div>
    </div>