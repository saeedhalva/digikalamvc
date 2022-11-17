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
        background: white;
        margin: 10px auto;
        padding: 5px;

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
    .head{
        direction: rtl;
        margin-top: 50px;
    }
    .head h4 {
        font-family: Vazir;
        font-size: 11pt;
        margin-top: 20px;
        padding-right: 5px;
        float: right;
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

    }
    .head .btngreen{
        float: left;
        margin-top: 2px;
        margin-left: 10px;

    }


    .content{
        direction: rtl;
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
    table{
        direction: rtl;
        font-family: Vazir;
        width: 100%;
        float: right;
        margin-top: 5px;
    }
    .discountcode input{
        width: 180px;
        height: 27px;
        border: 1px solid #eee;
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
    .discountcode td{
        padding: 8px;
    }
    .discountcode{
        border: 1px solid #eee;
    }
    .discountcode .btnblue{
        margin-left: 0;
    }
    .mablagh tr td:first-child{
        width: 1040px;
    }
    .mablagh tr:first-child{
        background: rgba(0,255,0,0.4);
    }
    .pardakhttype{
        width: 100%;
        float: right;
        margin-top: 20px;
    }
    .circle.active{
        background: #3d7ad9;
        border: 0;
        position: relative;
    }
    .pardakhttype .circle.active::after{
        content: "";
        display: block;
        width: 4px;
        height: 4px;
        border-radius: 100%;
        background: white;
        position: absolute;
        top: 8px;
        right:8px;
    }
    .pardakhttype{
        width: 100%;
        direction: rtl;
        font-size: 10.5pt;
        margin-bottom: 10px;
    }
    .pardakhttype td{
        border-left: 1px solid #eee;
        border-bottom: 1px solid #eee;
        padding: 5px;

    }
    .pardakhttype tr td:first-child{
        width: 60px;

    }
    .pardakhttype tr td:nth-child(3){
        width: 60px;
    }
    .pardakhttype tr:nth-child(2)td:first-child{
        width: 200px;
    }
    .pardakhttype tr:nth-child(2)td:nth-child(3){
        width: 200px;
    }
    .pardakhttype tr:last-of-type td:nth-child(1){
        width: 200px;
    }
    .pardakhttype tr:last-of-type td:nth-child(2){
        width: 200px;
    }
    .pardakhttype .circle{
        width: 20px;
        height: 20px;
        border: 1px solid #ccc;
        border-radius: 100%;
        display: inline-block;
        margin: auto;
    }
    .pardakhttype tr:nth-child(1) td:nth-child(3) table{
        width: 100%;
        height: 98px;
    }
    .pardakhttype td{
        border-top: 1px solid #eee;
    }
    .pardakhttype div:first-of-type{
        float: right;
    }
    .pardakhttype div:last-of-type{
        float: right;
        margin-right: 30px;
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
            <li class="active">
                <span class="circle"></span>
                <span class="title">بازبینی سفارش</span>
                <span class="line"></span>

            </li>
            <li >
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


    <div class="head">

        <h4>کد تخفیف</h4>
        <a href="http://127.0.0.1/digikalamvc/showcart4/saveorder" class="btngreen">ادامه خرید</a>
    </div>

    <table cellspacing="0" class="discountcode">
        <tr>
            <td>اگر کد دیجیکالا داری اینجا وارد کن</td>
            <td>
                <form action="http://127.0.0.1/digikalamvc/showcart4/saveorder">
                    <input id="code">
                </form>
            </td>
            <td>
                <span onclick="chekcode()" class="btnblue">اعمال کد تخفیف</span>
            </td>
        </tr>
    </table>

    <div class="head">

        <h4>کارت هدیه</h4>

    </div>

    <table cellspacing="0" class="discountcode">
        <tr>
            <td>اگر کد دیجیکالا داری اینجا وارد کن</td>
            <td>
                <input>
            </td>
            <td>
                <span class="btnblue">اعمال کد هدیه</span>
            </td>
        </tr>
    </table>

    <table cellspacing="0" class="mablagh">
        <tr>
            <td>مبلغ قابل پرداخت</td>
            <td id="totalprice">
                190.000 هزار تومان
            </td>

        </tr>
    </table>
    <div class="head">

        <h4>شیوه پرداخت</h4>

    </div>

    <table cellspacing="0" class=" pardakhttype">
        <tr>
            <td rowspan="3">

                <span class="circle"></span>
                <span class="triangle"></span>
            </td>
            <td colspan="3">

                انتخاب شیوه پرداخت
                <br>
                <div>
                    <span class="circle"></span>
                    درگاه ملت
                </div>
                <div>
                    <span class="circle"></span>
                    درگاه پارسیان
                </div>

            </td>
            <td rowspan="3">
            </td>
        </tr>
    </table>



</div>


<script>

    $('.selectlist').click(function () {
        var ultag=$('ul',this);
        ultag.slideToggle(100);
    });

    $('.selectlist ul li').click(function () {
        var txt=$(this).text();
        $('.selectlist .zemanattitle').text(txt);
    });
    pricetotal=0;
    pricetotall=0;
    function chekcode() {
        var code=$('#code').val();
        var url='http://127.0.0.1/digikalamvc/showcart4/chekcode/'+code;
        var data={};
        $.post(url,data,function (msg) {
            console.log(msg);
            console.log(pricetotal);
               // price();
            if(msg>0) {
                $('#code').css('background', '#38FF28');
                $('#totalprice').text((msg * pricetotal) / 100);
                pricetotall=(msg * pricetotal) /100;
            }
            else {
                alert("invalid code");
            }
        });
    }

    function price() {
        var url='http://127.0.0.1/digikalamvc/showcart4/calculatetotalprice';
        var data={};
        $.post(url,data,function (msg) {
            $('#totalprice').text(msg);
            pricetotal=msg;
        });

    }
    price();
    $('.btn_green').click(function () {

        alert("clicked");
        var url='http://127.0.0.1/digikalamvc/showcart4/saveorder/';
        var data={};
        $.post(url,data,function (msg) {

        })
    });
    

</script>

</body>
</html>