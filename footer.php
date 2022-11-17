<?php
    $options=Model::getoption();
   // print_r($options);



?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>فروشگاه اینترنتی دیجیکالا</title>
    <script src="http://127.0.0.1/digikalamvc/public/js/jquery-3.6.0.min.js"></script>
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
footer{
height: 300px;
width: 100%;
float: right;
margin-top: 40px;
}
#footertop{
width: 100%;
background:#6d717a ;
height: 45px;
}
#footerbottom{
height: 255px;
background: #f7f8fa;

}
footer .main{
width: 1200px;
height: 100%;
margin: auto;
}
#footertop span{
    color: white;
    text-align: right;
    direction: rtl;
    display: block;
    height: 100%;

}
#footertop i{
width: 24px;
height: 24px;
display: inline-block;
background: url("http://127.0.0.1/digikalamvc/publicimages/phone-call.png");
margin-top: 0;
position: absolute;

}
#footertop ul{
padding: 0;
float: left;
height: 100%;
}
#footertop li {
    float: right;
    height: 100%;
    margin-top: -33px;
    position: absolute;
}
#footertop li a{
    color: #ffffff;
    display: block;
    margin-right: -300px;
}
#footerbottom .right{
width: 220px;
height: 100%;
float: right;
}
#footerbottom .center{
width: 220px;
height: 100%;
float: right;
}
#footerbottom .left{
width: 590px;
height: 100%;
float: left;
}
#footerbottom ul li{
font-family: Vazir;
line-height: 60px;
}
#footerbottom .title{
font-size: 12pt;
text-align: center;
}
#footerbottom .email input{
width:430px ;
height: 38px ;
border-radius: 4px;
font-family: Vazir;
}
#footerbottom .email .btn{
width: 110px;
height: 38px;
background: #2c77af;
display: block;
float: left;
margin-right: 25px;
margin-top: 2px;
text-align: center;
font-family: Vazir;
color: white;
line-height: 34px;
}
footer .social img{
width: 282px;
height: 100px;
float: left;
margin-left: 4px;
}
footer .social{
float: left;
margin-top: 26px;
}
    .matn{
        position: absolute ;
        margin-top: 10px;
    }
</style>

<footer>

    <div id="footertop">
        <div class="main">
            <span class="Vazir">
                <p class="matn">هفت روز هفته پاسخگوی شما هستیم</p>

            </span>
            <ul>
                <li>
                    <a>
                       <?=$options['tel']?>
                        <i></i>
                    </a>
                </li>
                <li> <?=$options['email']?></li>
                <li></li>
            </ul>
        </div>
    </div>

    <div id="footerbottom">
        <div class="main">
            <div class="right">
                <ul>
                    <li><a class="title">راهنمای خرید از دیجیکالا</a></li>
                    <li><a>ثبت سفارش</a></li>
                    <li><a>رویه های ارسال</a></li>
                    <li><a>شیوه ی پرداخت</a></li>
                </ul>
            </div>
            <div class="center">
                <ul>
                    <li><a class="title">راهنمای خرید از دیجیکالا</a></li>
                    <li><a>ثبت سفارش</a></li>
                    <li><a>رویه های ارسال</a></li>
                    <li><a>شیوه ی پرداخت</a></li>
                </ul>
            </div>
            <div class="left">
                <p class="title Vazir">اولین نفر باشید</p>
                <div class="email">
                    <input type="text">
                    <span class="btn">تایید ایمیل</span>
                </div>
                <div class="social">
                    <a>
                        <img src="http://127.0.0.1/digikalamvc/public/images/googleplay.png">
                    </a>
                    <a>
                        <img src="http://127.0.0.1/digikalamvc/public/images/googleplay.png">
                    </a>
                </div>
            </div>
        </div>
    </div>

</footer>
</body>
</html>