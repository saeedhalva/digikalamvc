<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>فروشگاه اینترنتی دیجیکالا</title>
    <script src="http://127.0.0.1/digikalamvc/public/js/jquery-3.6.0.min.js"></script>
<!--    <script src="http://127.0.0.1/digikalamvc/public/js/ckeditor.js"></script>-->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
</head>
<body>

<style>
    @font-face {
        font-family: 'Vazir';
        src: url('http://127.0.0.1/digikalamvc/public/fonts/Vazir.ttf?#iefix') format('truetype');
    }
    .Vazir{
        font-family: Vazir;
    }
    .fontsm{
        font-size: 11.3pt;
    }
    .fontmd{
        font-size: 12.3pt;
    }
    .fontlg{
        font-size: 13.3pt;
    }
    body{
        margin: 0;
        background: #ecf1ec;
    }
    ul{
        margin: 0;
    }
    a{
        text-decoration: none;
    }
    div li ul span a p{
        text-align: right;
        direction: rtl;
    }
    li{
        list-style: none;
        text-align: right;
    }
    #header{
        width: 1200px;
        height: 100px ;
        margin: 0 auto;
        padding-top: 15px;
        background: white;
    }
    #header_left{
        float: left;
    }
    .logo{
        margin-left: 10px;
    }
    #header_right{
        width: 800px;
        height: 100px;
        float: right;
    }
    #header_right_top{
        height: 40px;
        float: right;
        margin-right: 5px;
    }
    #header_right_bottom{
        height: 50px;
        float: right;
        margin-right: 10px;
    }
    #lock_logo{
        width: 20px;
        height: 20px;
        background: url(http://127.0.0.1/digikalamvc/public/images/lockk.png) no-repeat;
        display: block;
        float: right;
    }
    #register_logo{
        width: 20px;
        height: 20px;
        background: url(http://127.0.0.1/digikalamvc/public/images/register.png) no-repeat;
        display: block;
        float: right;
        margin-right: 20px;
    }
    #basket_top{
        width: 228px;
        height: 40px;
        float: right;
    }
    #search_top{
        width: 500px;
        height: 40px;
        float: right;
        position: relative;
    }
    #basket_top_right{
        width: 54px;
        height: 100%;
        float: right;
        background: #0d7c1b url(http://127.0.0.1/digikalamvc/public/images/shopping.png)no-repeat center;
    }
    #basket_top_left{
        width: 166px;
        height: 100%;
        float: right;
        background: #38a844;
    }
    #sabadtxt{
        color: white;
        padding: 0 20px;
        line-height: 36px;
        margin-left: 23px;
    }
    #sabadtedad{

        width: 25px;
        height: 25px;
        border-radius: 100%;
        background: #eee;
        display:block;
        float: left;
        margin-top: 7px;
        margin-left: 10px;
        line-height: 25px;
        text-align: center;
    }
    #input_top{
        width: 480px;
        height: 32px;
        margin-top: 2px;
        border: 1px solid #eee;
        direction: rtl;
        padding-right: 8px;
        color: #767976;
    }
    #search_span{
        width: 42px;
        height: 35px;
        position: absolute;
        background:url(http://127.0.0.1/digikalamvc/public/images/search.png)no-repeat center #ccc;
        display: block;
        left: 0;
        top: 2px;
    }
    #nav_top{
        width: 100%;
        height: 40px;
        background:#f7f8fa;
        box-shadow: 1px 3px 4px #ccc;
        -webkit-box-shadow: 1px 3px 4px #ccc;
        -moz-box-shadow: 1px 3px 4px #ccc;
        border-top:1px solid #e7eae7;
    }
    #menu_top{
        width: 1200px;
        height: 40px;
        margin: auto;
    }
    #menu_top > ul{
        position: relative;
        padding: 0;
    }
    #menu_top > ul > li{
        float: right;
        height: 40px;
    }
    #menu_top > ul > li > a{
        padding: 0 10px;
        display: block;
        height: 40px;
        line-height: 40px;
    }
    .down_arrow{
        background: url(http://127.0.0.1/digikalamvc/public/images/down-arrow.png);
        width: 16px;
        height: 16px;
        display:block;
        float: left;
        margin-right: 8px;
        margin-top: 14px;
    }
    #menu_top > ul > li > ul > li{
        float: right;
    }
    #menu_top > ul > li > ul > li > a{
        padding: 5px 10px;
        display: block;
    }
    #menu_top > ul > li > ul{
        width: 1200px;
        position: absolute;
        padding: 0;
        right: 0;
        background: white;
        -webkit-box-shadow:0 2px 3px #bcbfbc ;
        display: none;
    }
    #menu_top > ul > li > ul > li > div{
        width: 1200px;
        height: 300px;
        background: #fff;
        border-top: 1px solid #eee;
        position: absolute;
        right: 0;
        display: none;
    }
    .top_menu3_col{
        width: 299px;
        height: 100%;
        float: right;
        border-left: 1px solid #eee;
    }
    .top_menu3_col > ul{

        padding: 10px;
    }
    .top_menu3_col_ul li{
        padding-right: 15px;
    }
    .top_menu3_col_ul li:first-child{
        padding-right: 0;
        color: #2c77af;
    }
    .submenu3{
        display: none;
    }
    .menu_active{
        background:#ff0000;
        color: #ffffff;
        box-shadow: 0 -1px 3px #eee;
        position: relative;
    }
</style>
<header>
    <div id="header">
        <div id="header_right">
            <div id="header_right_top">
                    <span id="lock_logo">
                    </span>
                <a class="Vazir fontsm" style="margin-right: 10px;float: right" href="<?=url?>login">
                    فروشگاه اینترنتی دیجیکالا.وارد شوید
                </a>
                <span id="register_logo">
                    </span>
                <a class="Vazir fontsm" style="margin-right: 10px;float: right" href="<?=url?>register">
                    ثبت نام کنید
                </a>
            </div>
            <div id="header_right_bottom">
                <div id="basket_top">
                    <div id="basket_top_right"></div>
                    <div id="basket_top_left">
                        <span id="sabadtxt" class="Vazir fontsm">سبد خرید</span>
                        <span id="sabadtedad">0</span>
                    </div>
                </div>
                <div id="search_top">
                    <input id="input_top" class="Vazir fontsm" placeholder="محصول دسته یا برند مورد نظر خود ر ا سرچ کنید...">
                    <span id="search_span"></span>
                </div>
            </div>
        </div>
        <div id="header_left">
            <img class="logo" src="http://127.0.0.1/digikalamvc/public/images/digikala-logo-slogan.png">
        </div>
    </div>
</header>
<nav id="nav_top">
    <div id="menu_top">
        <ul>

            <li>
                <a class="Vazir fontsm">کالای دیجیتال
                    <span class="down_arrow"></span>
                </a>
                <ul>
                    <li>
                        <a class="Vazir fontsm">
                            موبایل
                        </a>
                        <div class="submenu3">
                            <div class="top_menu3_col">
                                <ul class="top_menu3_col_ul Vazir fontsm">
                                    <li>گوشی موبایل</li>
                                    <li>سونی</li>
                                    <li>سامسونگ</li>
                                </ul>
                            </div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                        </div>
                    </li>

                    <li>
                        <a class="Vazir fontsm">
                            تبلت و کتابخوان
                        </a>
                        <div class="submenu3">
                            <div class="top_menu3_col">
                                <ul class="top_menu3_col_ul Vazir fontsm">
                                    <li>تبلت</li>
                                    <li>samsung</li>
                                    <li>microsoft</li>
                                </ul>
                            </div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <a class="Vazir fontsm">لوازم خانگی
                    <span class="down_arrow"></span>
                </a>
                <ul>
                    <li>
                        <a class="Vazir fontsm">
                            صوتی تصویری
                        </a>
                        <div class="submenu3">
                            <div class="top_menu3_col">
                                <ul class="top_menu3_col_ul Vazir fontsm">
                                    <li>tv</li>
                                    <li>samsung</li>
                                    <li>lg</li>
                                </ul>
                            </div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                        </div>

                    </li>
                    <li>
                        <a class="Vazir fontsm">
                            جاروبرقی
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
</body>
</html>