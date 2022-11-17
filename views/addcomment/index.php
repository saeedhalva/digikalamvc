<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="http://127.0.0.1/digikalamvc/public/js/jquery-3.6.0.min.js">type="text/javascript"</script>
    <script src="http://127.0.0.1/digikalamvc/public/js/jquery.elevatezoom.js" type="text/javascript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="http://127.0.0.1/digikalamvc/public/slider/slider.js"></script>
    <link href="http://127.0.0.1/digikalamvc/public/slider/style.css" rel="stylesheet">

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
    #main > .right{
        width: 350px;
        float: right;
    }
    #main > .left{
        width: 815px;
        float: left;
    }
    h4{
        font-size: 13pt;
        color: #6d717a;
        font-family: Vazir;
        float: right;
        display: block;
    }
    .left .right{
        width: 350px;
        float: right;
        margin-right: -190px;
        margin-top: 50px;
        text-align: right;
    }


    .left .left{
        width: 350px;
        float: right;
        margin-right: 20px;
        margin-top: 50px;
        text-align: right;

    }
    .row2{
        width: 100%;
        float: right;
        margin-bottom: 40px;
    }
    .comment{
        float: right;
        width: 100%;
        padding: 0 20px;
    }
    input{
        width: 300px;
        height: 20px;
        border: 1px solid #eeeeee;
        float: right;
        font-family: Vazir;
        font-size: 10pt;
        text-align: right;
    }
    .comment .row2{
        margin-top: 10px;
    }
    .comment textarea{
        width: 400px;
        height: 200px;
        border: 1px solid #eeeeee;
        float: right;
    }
    .comment .btngreen{
        float: right;
    }
    *{
        font-family: Vazir;
    }


</style>

<div id="main">
    <?php
        $productInfo=$data['productInfo'];
        $commentInfo=$data['commentInfo'];
    ?>
    <form id="ss" method="post" action="http://127.0.0.1/digikalamvc/addcomment/saveComment/<?=$productInfo['id']?>">
    <div class="right">
        <img src="http://127.0.0.1/digikalamvc/public/images/products/1/product_350.jpg">
    </div>
    <div class="left">
        <?php
            $params=$data['params'];
            $number=sizeof($params);
            $right=ceil($number/2);
            $left=$number-$right;
            $params_right=array_slice($params,0,$right);
            $params_left=array_slice($params,$right,$right);
            $comment_result=unserialize($commentInfo['param']);
        ?>
        <h4>امتیاز شما به این محصول</h4>
        <div class="right">
            <?php
            foreach ($params_right as $row) {
                ?>
                <div class="row2">
                    <p><?=$row['title']?></p>
                    <input data-val="<?=$comment_result[$row['id']]?>" type="hidden" class="flat-slider" name="param<?=$row['id']?>" value="<?=$comment_result[$row['id']]?>">
                </div>
                <?php
            }
            ?>
<!--            <div class="row2">-->
<!--                <p>ارزش خرید به نسبت قیمت</p>-->
<!--                <input type="hidden" class="flat-slider">-->
<!--            </div>-->
<!--            <div class="row2">-->
<!--                <p>ارزش خرید به نسبت قیمت</p>-->
<!--                <input type="hidden" class="flat-slider">-->
<!--            </div>-->
        </div>
        <div class="left">
            <?php
                foreach ($params_left as $row) {
                    ?>
                    <div class="row2">
                        <p><?=$row['title']?></p>
                        <input data-val="<?=$comment_result[$row['id']]?>" type="hidden" class="flat-slider" name="param<?=$row['id']?>" value="<?=$comment_result[$row['id']]?>">
                    </div>
                    <?php
                }
            ?>


<!--            <div class="row2">-->
<!--                <p>ارزش خرید به نسبت قیمت</p>-->
<!--                <input type="hidden" class="flat-slider">-->
<!--            </div>-->
<!--            <div class="row2">-->
<!--                <p>ارزش خرید به نسبت قیمت</p>-->
<!--                <input type="hidden" class="flat-slider">-->
<!--            </div>-->
        </div>
        <div class="comment">
            <h4>نقد یا نظر حود را بنویسید</h4>
            <div class="row2">
                <input name="title" placeholder="عنوان" value="<?=$commentInfo['title']?>">
            </div>
            <div class="row2">
                <input name="posotive" placeholder="نقاط قوت" value="<?=$commentInfo['positive']?>">
            </div>
            <div class="row2">
                <input name="negative" placeholder="نقاط ضعف" value="<?=$commentInfo['negative']?>">
            </div>
            <div class="row2">
                <textarea name="comment"><?=$commentInfo['matn']?></textarea>
            </div>
            <div class="row2">
                <span  onclick="submitform22()" class="btngreen">ذخیره</span>
            </div>
        </div>

    </form>
    </div>



    <script>
       function submitform22(){
            $('#ss').submit();
        }
        $(".flat-slider").flatslider({

            min: 1,

        max: 5,

        step: 1,

        value:"",

        range: "min", // false | true | "min" | "max"


        });
    </script>
