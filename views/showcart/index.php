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
        background: #ff633f;
    }
    .content table .removeicon{
        width: 16px;
        height: 16px;
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -813px -510px;
        display: block;
        margin: auto;
    }
    .content > table tr:first-child td:last-child{
        background: #ff633f;
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
    #pardakhtprice{
        float: right;
        width: 100%;
        padding: 6px 2px;
        color: #26e822;

        background:rgba(0,255,0,0.1)  ;
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
</style>

<div id="main">

    <div class="head">

        <h4>سبد خرید شما</h4>
        <a href="http://127.0.0.1/digikalamvc/showcart1" class="btngreen">خرید خود را نهایی کنید</a>
    </div>
    <div class="content">
        <table cellspacing="0">
            <thead>
            <tr>
                <td>شرح محصول</td>
                <td>تعداد</td>
                <td>قیمت واحد</td>
                <td>قیمت کل</td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            <?php
                $basket=$data['basket'];
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
                            <div class="selectlist">
                                <span class="Vazir zemanattitle"><?=$row['tedad']?></span>
                                <ul style="z-index: 5;position: relative">
                                   <?php
                                      for($i=1;$i<31;$i++) {
                                          ?>
                                          <li onclick="apdatebasket(<?=$i?>,<?=$row['basketRow']?>)"><?=$i?></li>


                                          <?php
                                      }?>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <span class="price"><?=$row['price']?></span>
                            <span class="tooman">تومان</span>
                        </td>
                        <td>
                            <span class="price"><?=$row['price']*$row['tedad']?></span>
                            <span class="tooman">تومان</span>
                        </td>
                        <td class="removetd" onclick="removeBasket(<?=$row['basketRow']?>)">
                            <i class="removeicon"></i>

                        </td>
                    </tr>
                    <?php
                }
            ?>
            </tbody>
        </table>
    </div>
    <div id="finalprice">
        <div id="totalprice">
            <span class="totalprice1">جمع کل خرید شما</span>
            <span class="totalprice2"><?=$data['pricetotalall']?></span>
            <span class="totalprice3">تومان</span>
        </div>
        <div id="pardakhtprice">
            <span class="totalprice1">مبلغ قابل پرداخت</span>
            <span class="totalprice2"><?=$data['pricetotalall']?></span>
            <span class="totalprice3">تومان</span>
        </div>


    </div>

    <div id="divbtn">
        <span class="btngreen">انتخاب شیوه اسال کالا</span>
    </div>


</div>


<script>
    $('.selectlist').click(function () {
        var ultag=$('ul',this);
        ultag.slideToggle(100);
    });


    function apdatebasket(tedad,basketrow){
        var url='<?=url?>showcart/updatebasket/';
        var data={'basketrow':basketrow,'tedad':tedad};
        $.post(url,data,function (msg) {
            $('table tbody tr').remove();
            var basket=msg[0];
            var pricetotalall=msg[1];
            $.each(basket,function (index,value) {

                var trtag='<tr><td><div class="right"><img src="http://127.0.0.1/digikalamvc/public/images/products/'+value['id']+'/product_220.jpg"></div><div class="left"> <p>'+value['title']+'</p><p>'+value['colorTitle']+'</p><p>'+value['garanteeTitle']+'</p></div></td><td><div class="selectlist"><span class="Vazir zemanattitle">'+value['tedad']+'</span><ul><li>1</li><li>2</li> <li>3</li></ul></div></td><td><span class="price">'+value['price']+'</span><span class="tooman"></span></td><td><span class="price">'+value['price']*value['tedad']+'</span> <span class="tooman">تومان</span></td><td class="removetd" onclick="removeBasket('+value['basketRow']+')"><i class="removeicon"></i></td></tr>';



                $('table tbody').append(trtag);

            });
            $('.totalprice2').text(pricetotalall);
            
        },'json');

    }

    function removeBasket(productId){
        var url='<?=url?>showcart/deletebasket/'+productId;
        var data={};
        $.post(url,data,function (msg) {
            $('table tbody tr').remove();
            var basket=msg[0];
            var pricetotalall=msg[1];
            $.each(basket,function (index,value) {


                var trtag='<tr><td><div class="right"><img src="http://127.0.0.1/digikalamvc/public/images/products/'+value['id']+'/product_220.jpg"></div><div class="left"> <p>'+value['title']+'</p><p></p><p></p></div></td><td><div class="selectlist"><span class="Vazir zemanattitle">'+value['tedad']+'</span><ul><li>1</li><li>2</li> <li>3</li></ul></div></td><td><span class="price">'+value['price']+'</span><span class="tooman"></span></td><td><span class="price">'+value['price']*value['tedad']+'</span> <span class="tooman">تومان</span></td><td class="removetd" onclick="removeBasket('+value['basketRow']+')"><i class="removeicon"></i></td></tr>';


                $('table tbody').append(trtag);

            });
            $('.totalprice2').text(pricetotalall);
            console.log(msg);
        },'json');
    }





</script>

</body>
</html>