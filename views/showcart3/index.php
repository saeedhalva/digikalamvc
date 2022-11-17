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
    }
    .head h4 {
        font-family: Vazir;
        font-size: 11pt;
        margin-top: 5px;
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

    }
    .content > table{
        width: 100%;
        font-family: Vazir;
        font-size: 11pt;
        float: right;
        margin-top: 10px;
    }
    .content{
        direction: rtl;
    }
    .content > table tr:first-child{
        background: #f7f9fa;
    }
    .content table .right{

        float: right;


    }
    .content > table tr:first-child td{
        text-align: center;
    }
    .content > table tr td:first-child{
        border-right: 1px solid #eee;
    }
    .content table td{
        border-left: 1px solid #ccc;
        padding: 3px;
        border-bottom: 1px solid  #eee;

    }
    .content table .right img{
        max-width: 83px;
        max-height: 83px;
    }
    .content table .left{
        float: right;
        margin-right: 8px;
    }
    .content table .left p {

        margin: 2px 0;

    }
    .selectlist{
        width: 55px;
        height: 30px;
        border: 1px solid #ccc;
        background: #eee;
        position: relative;
        right: 65px;
        padding-right: 5px;
    }
    .selectlist ul{
        width: 60px;
        position: absolute;
        right: 0;

    }

    .selectlist::before{
        content: "";
        width: 24px;
        height: 23px;
        display: block;
        position: absolute;
        left: 3px;
        top: 9px;
        background: url("http://127.0.0.1/digikalamvc/public/images/down-arrow.png")no-repeat;
    }
    .selectlist span{
        font-size: 10.5pt;
        text-align: center;
        display: block;
        line-height: 34px;
        margin-right: -25px;


    }
    .selectlist ul{
        padding: 0;
        box-shadow: 0 2px 2px #cacaca;
        display: none;
        background: white;



    }
    .selectlist ul li{
        font-family: Vazir;
        font-size: 11.5pt;
        padding: 4px 5px;
        text-align: center;

    }
    .selectlist ul li:hover{
        background: #c4c8ce;

    }
    .content table .price{
        font-size: 12pt;

    }
    .content table .tooman{
        font-size: 10pt;

    }
    .content table tr td:not(:first-child){
        text-align: center;
    }
    .content table .removetd{
        background: #96bcff;
    }
    .content table .removeicon{
        width: 16px;
        height: 16px;
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -811px -413px;
        display: block;
        margin: auto;
    }
    .content > table tr:first-child td:last-child{
        background: #96bcff;
        border-bottom: 0;
    }
    .content table tr:not(:first-child) td:last-child{
        border-bottom: 0;
    }
    #finalprice{
        width: 600px;
        float: left;
        font-family: Vazir;
        direction: rtl;
        margin-top: 50px;
        border: 1px solid greenyellow;

    }
    #finalprice #totalprice{
        border-bottom: 1px solid greenyellow;
        float: right;
        width: 100%;
        padding: 5px 2px;
    }
    #finalprice #totalprice .totalprice1{
        float: right;
        color: #53575c;
        font-size: 10pt;
        margin-right: 7px;

    }
    #finalprice #totalprice .totalprice2{
        float: right;
        color: #53575c;
        font-size: 12pt;
        margin-right: 383px;
    }
    #finalprice #totalprice .totalprice3{
        float: right;
        color: #53575c;
        font-size: 9pt;
        margin-right: 10px;
        margin-top: 3px;
    }
    #pardakhtprice,#sendprice{
        float: right;
        width: 100%;
        padding: 6px 2px;

    }
    #pardakhtprice .totalprice1{
        margin-right: 5px;

    }
    #pardakhtprice .totalprice2{
        margin-right: 363px;


    }
    #divbtn{
        float: left;
        width: 100%;
        padding: 3px;
    }
    #sendprice .totalprice2{
        margin-right: 320px;
    }
    #discuntprice .totalprice2{
        margin-right: 348px;
    }
    #pardakhtprice{
        color: #26e822;

        background:rgba(0,255,0,0.1)  ;
    }
    .head{
        float: right;
        width: 100%;
        margin-top: 35px;
    }
    .reviewsendinfo{
        width: 100%;
        float: right;
        margin-top: 30px;
        font-family: Vazir;
        direction: rtl;
    }
    .reviewsendinfo td{
        border-right: 1px solid #eee;
        border-bottom: 1px solid #eee;
        padding: 5px;
    }
    .reviewsendinfo tr:first-child td{
        border-top: 1px solid #eee;
    }
    .reviewsendinfo tr td:last-child{
        border-left: 1px solid #eee;
    }

    .reviewsendinfo i{
        width: 29px;
        height: 29px;
        display: block;
    }
    .reviewsendinfo .first{
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -810px -205px;
    }
    .reviewsendinfo .second{
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -806px -250px;

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


    <div class="head">

        <h4>سبد خرید شما</h4>
        <a href="http://127.0.0.1/digikalamvc/showcart4" class="btngreen">ادامه خرید</a>
    </div>
    <div class="content">
        <table cellspacing="0">
            <tr>
                <td>شرح محصول</td>
                <td>تعداد</td>
                <td>قیمت واحد</td>
                <td>قیمت کل</td>
                <td></td>
            </tr>
            <?php
                $basketInfo=$data['basketInfo'];
                $basket=$basketInfo[0];
                foreach ($basket as $row) {
                    ?>
                    <tr>
                        <td>
                            <div class="right">
                                <img src="http://127.0.0.1/digikalamvc/public/images/products/<?=$row['id']?>/product_220.jpg">
                            </div>
                            <div class="left">
                                <p><?=$row['title']?></p>
                                <p><?=$row['colorTitle']?></p>
                                <p><?=$row['garanteeTitle']?></p>
                            </div>
                        </td>
                        <td>
                            <div>
                                <span class="Vazir zemanattitle"><?=$row['tedad']?> </span>
                            </div>
                        </td>
                        <td>
                            <span class="price"><?=$basketInfo[1]?></span>
                            <span class="tooman">تومان</span>
                        </td>
                        <td>
                            <span class="price"><?=$row['tedad']*$basketInfo[1]?></span>
                            <span class="tooman">تومان</span>
                            <br>
                            <span style="color: red">تخفیف:<?=$row['discountTotal']?></span>
                            <span class="tooman">تومان</span>
                        </td>
                        <td class="removetd">
                            <a href="http://127.0.0.1/digikalamvc/showcart"><i class="removeicon"></i></a>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </div>
    <div id="finalprice">
        <div id="totalprice">
            <span class="totalprice1">جمع کل خرید شما</span>
            <span class="totalprice2"><?=$basketInfo[1]?></span>
            <span class="totalprice3">تومان</span>
        </div>

        <div id="sendprice">
            <span class="totalprice1">هزینه ارسال و بسته بندی</span>
            <span class="totalprice2">0</span>
            <span class="totalprice3">تومان</span>
        </div>
        <div id="discuntprice">
            <span class="totalprice1">جمع کل مبلغ تخفیف</span>
            <span class="totalprice2"><?=$basketInfo[2]?></span>
            <span class="totalprice3">تومان</span>
        </div>

        <div id="pardakhtprice">
            <span class="totalprice1">مبلغ قابل پرداخت</span>
            <span class="totalprice2"><?=$basketInfo[1]-$basketInfo[2]?></span>
            <span class="totalprice3">تومان</span>
        </div>



    </div>

    <div class="head">

        <h4>اطلاعات ارسال سفارش</h4>

    </div>
    <table cellspacing="0" class="reviewsendinfo">
        <?php
            $addressInfo=$data['addressInfo'];
        ?>
        <tr>
            <td>
                <i class="first"></i>
            </td>
            <td>این سفارش به <?=$addressInfo['family']?> به آدرس <?=$addressInfo['address']?> ارسال میگردد</td>
        </tr>
        <tr>
            <td>
                <i class="second"></i>
            </td>
            <td>این سفارش از طریق پست پیشتاز با هزینه 30.000 ارسال میگردد</td>
        </tr>
    </table>
    <div id="divbtn">
        <http://127.0.0.1/digikalamvc/showcart3 class="btngreen">ادامه خرید</a>
    </div>


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

</script>

</body>
</html>