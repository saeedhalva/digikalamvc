<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="http://127.0.0.1/digikalamvc/public/js/jquery-3.6.0.min.js">type="text/javascript"</script>
    <script src="http://127.0.0.1/digikalamvc/public/js/jquery.elevatezoom.js" type="text/javascript"></script>

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

    #main{
        width: 1200px;
        background: #fff;
        margin: 10px auto;
        padding: 6px;

    }


    .horizontalrow{
        float: right;
        background: #ccc;
        height: 1px;
        margin: 15px;
        width: 86%;


    }

    #main::after{
        content:"";
        clear: both;
        display: block;
    }
    .ordersteps .dashed span{
        width: 11px;
        height: 3px;
        background: blue;
        display: block;
        float: right;
        margin-right: 3px;
    }
    .ordersteps .dashed{
        float: right;
    }
    .ordersteps{
        padding-top: 20px;
        padding-right: 110px;
        padding-left: 10px;
    }
    .ordersteps ul{


    }
    .ordersteps ul li{
        position: relative;
        width: 180px;

        float: right;
        height: 50px;
    }
    .ordersteps ul li .circle{
        width: 19px;
        height: 19px;
        display: block;
        border: 3px solid #ccc;
        border-radius: 100%;
        position: absolute;
        top: -10px;
        right: 20px;
    }
    .ordersteps ul li.active .circle{


        background: dodgerblue url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -810px -476px ;
        border: 3px solid dodgerblue;

        border-radius: 100%;
        position: absolute;
        top: -10px;
        right: 20px;



    }
    .ordersteps ul li .title{
        font-size: 11.5pt;
        color: #bbb;
        font-family: Vazir;
        position: absolute;
        top: 20px;
        right: -5px;
    }
    .ordersteps ul li.active .title {

        color: dodgerblue;
    }
    .ordersteps ul li .line{
        width: 128px;
        height: 3px;
        display: block;
        background: #6d717a;
        position: absolute;
        right: 50px;
    }
    .ordersteps ul li.active .line {

        background: dodgerblue;

    }
    #main{
        font-family: Vazir;
    }
    .content{
        float: right;
    }

    .content .right{
        width: 540px;
        float: right;
        direction: rtl;
        text-align: center;
    }
    .content .left{
        width: 540px;
        float: right;
        margin-right: 20px;
        direction: rtl;
        text-align: center;
    }
    .content .right i{
        width: 50px;
        height: 54px;
        display: block;
        margin: auto;
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -795px -22px;
    }
    .content .left i{
        width: 50px;
        height: 54px;
        display: block;
        margin: auto;
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -795px -90px;
    }
    .btngreen{
        display: block;
        width: 170px;
        height: 37px;
        background: #1fbe14;
        box-shadow: 1px 1px 3px #ccc;
        color: white;
        border-radius: 4px;
        font-family: Vazir;
        text-align: center;
        line-height: 35px;
        margin: auto;

    }
    .btnblue{
        display: block;
        width: 170px;
        height: 37px;
        background: #2a79be;
        box-shadow: 1px 1px 3px #ccc;
        color: white;
        border-radius: 4px;
        font-family: Vazir;
        text-align: center;
        line-height: 35px;
        margin: auto;

    }

    .head h4{
        font-family: Vazir;
        font-size: 12.4pt;
        font-weight: normal;
        direction: rtl;
        text-align: right;
    }
</style>

<div id="main">

    <div class="ordersteps">
        <div class="dashed">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <li>
                <span class="circle"></span>
                <span class="title">ورود</span>
                <span class="line"></span>

            </li>
            <li>
                <span class="circle"></span>
                <span class="title">اطلاعات ارسال سفارش</span>
                <span class="line"></span>

            </li>
            <li>
                <span class="circle"></span>
                <span class="title">بازبینی سفارش</span>
                <span class="line"></span>

            </li>
            <li class="active">
                <span class="circle"></span>
                <span class="title">اطلاعات پرداخت</span>


            </li>


        </ul>
        <div class="dashed">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="content">
        <div class="right">
            <i></i>
            <p>عضو دیجی کالا هستید؟</p>
            <p>جهت تکمیل خرید وارد شوید</p>
            <p>
                <a href="http://127.0.0.1/digikalamvc/login" class="btngreen">ورود به دیجی کالا</a>
            </p>
        </div>
        <div class="left">
            <i></i>
            <p>هنوز عضو دیجی کالا نشده اید</p>
            <p>جهت خرید باید ثبت نام کنید</p>
            <p>
                <a href="http://127.0.0.1/digikalamvc/register" class="btnblue">ثبت نام</a>
            </p>
        </div>
    </div>

</div>


<script>


</script>

</body>
</html>