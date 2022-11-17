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
    #baner_top{
        width: 100%;
        height: 138px;
        background: url(http://127.0.0.1/digikalamvc/public/images/5726fd90.jpg);
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
        background: urlhttp://127.0.0.1/digikalamvc/public/(images/slices.png)no-repeat -795px -90px;
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
    #main .head{
        width: 100%;
        margin-top: 50px;
        float: right;
    }
    .head h4{
        font-family: Vazir;
        font-size: 12.4pt;
        font-weight: normal;
        direction: rtl;
        text-align: right;
        float: right;
    }
    .btngray{
        display: block;
        width: 170px;
        height: 37px;
        background: #767976;
        box-shadow: 1px 1px 3px #ccc;
        color: white;
        border-radius: 4px;
        font-family: Vazir;
        text-align: center;
        line-height: 35px;
        margin: auto;
    }
    .head .btngray{
        float: left;
        margin: 13px 3px;
    }
    .content{
        float: right;
        margin-top: 20px;
        width: 100%;
    }
    .content table{
        width: 100%;
        direction: rtl;
        font-size: 10.5pt;
        margin-bottom: 10px;
    }
    table td{
        border-left: 1px solid #eee;
        border-bottom: 1px solid #eee;
        padding: 5px;

    }
    .content table tr td:first-child{
        width: 60px;

    }
    .content table tr td:nth-child(3){
        width: 60px;
    }
    .content table tr:nth-child(2)td:first-child{
        width: 200px;
    }
    .content table tr:nth-child(2)td:nth-child(3){
        width: 200px;
    }
    .content table tr:last-of-type td:nth-child(1){
        width: 200px;
    }
    .content table tr:last-of-type td:nth-child(2){
        width: 200px;
    }
    table .circle{
        width: 20px;
        height: 20px;
        border: 1px solid #ccc;
        border-radius: 100%;
        display: block;
        margin: auto;
    }
    .content table tr:nth-child(1) td:nth-child(3) table{
        width: 100%;
        height: 98px;
    }
    .content table tr:nth-child(1) td:nth-child(2){
        text-align: center;
    }
    .content table tr:nth-child(1) td:nth-child(3) table td{
        border: 0;
    }
    .content table tr:nth-child(1) td:nth-child(3){
        padding: 0;
    }
    .edit{
        background: #9ed5f0;
    }
    .remove{
        background:#eca092;
    }
    .edit i{
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -812px -446px;
        width: 19px;
        height: 19px;
        display: block;
        margin: auto;
    }
    .remove i{
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -812px -510px;
        width: 19px;
        height: 19px;
        display: block;
        margin: auto;
    }
    table.active .circle{
        background: #3d7ad9;
        border: 0;
        position: relative;
    }
    table.active .circle::after{
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
    .content  table.active .triangle{
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 42px  42px 0;
        border-color: transparent #3fd30e transparent transparent;
        position: absolute;
        top: 0;
        right: 0;
        z-index: 1;

    }
    .content table tr:nth-child(1) td:nth-child(1){
        position: relative;
    }
    table.active > tbody > tr:nth-child(1) > td:nth-child(1){

        background: #78ff76;

    }
    .content  table.active{
        border: 3px solid #57bf55;
    }
    .sendtypes{
        margin-top: 30px;
        width: 100%;
        float: right;
    }
    .sendtypes table{
        width: 100%;
    }
    .sendtypes table tr:first-child td:first-child{
        position: relative;
        width: 60px;
    }
    .sendtypes table{
        width: 100%;
        direction: rtl;
        font-size: 10.5pt;
        margin-bottom: 10px;
    }
    table tr:first-child td{
        border-top: 1px solid #eee;
    }
    .sendtypes table tr td:nth-child(2){
        width: 980px;
    }
    .sendtypes table tr td:nth-child(2) img{
        float: right;
        margin-top: 5px;
    }
    .sendtypes table tr td:nth-child(2) div{
        float: right;

    }
    .sendtypes table tr td:nth-child(2) p{
        margin: 1px 0;
        margin-right: 0px;
        line-height: 4;
        margin-right: 10px;
    }
    .sendtypes table tr td:nth-child(3) p:first-child{
        margin: 1px 0;
        text-align: center;
        color: #2ed90f ;
    }
    .sendtypes table tr td:nth-child(3) p:last-child{
        margin: 1px 0;

        text-align: center;
    }

    #addaddres{
        width: 950px;
        height: 600px;
        position: fixed;
        background: #fff;
        left: 0;
        top: 250px;
        right: 0;
        margin: auto;
        z-index: 5;
        overflow: hidden;
        display: none;

    }
    #dark{
        width: 100%;
        height: 100%;
        position: fixed;
        background: rgba(0,0,0,.3);
        top: 0;
        left: 0;
        z-index: 4;
        display: none;

    }
    #addaddres h4{
        font-family: Vazir;
        font-size: 13.5pt;
        padding: 8px;
        background: #eee;
        direction: rtl;
        margin: 0;
        position: relative;
    }
    #addaddres h4 .close{
        width: 28px;
        height: 28px;
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -134px -123px;
        display: block;
        position: absolute;
        left: 2px;
        top: 2px;
        cursor: pointer;
    }
    #dark{
        width: 100%;
        height: 100%;
        position: fixed;
        background: rgba(0,0,0,.3);
        top: 0;
        left: 0;
        z-index: 4;
        display: none;

    }
    .row{
        float: right;
        width: 98%;
        font-family: Vazir;
        direction: rtl;
        padding: 12px 20px;
    }
    .row .right{
        width: 225px;
        float: right;
    }
    .row .left{
        width: 120px ;
        float: right;
    }
    .row .right .title{
        font-size: 10.5pt;


    }
    .row .left input{
        width: 260px;
        height: 28px;
        border: 1px solid #eee;
    }
    .row .left textarea{
        width: 260px;
        height: 120px;
        border: 1px solid #eee;
    }
    .akhar{
        text-align: left;
        width: 100%;
        float: left !important;
        margin-left: 20px;
    }
    .akhar .btngreen{
        float: left;
    }
    .zakhire .btnblue{
        float: left;
    }
    .zakhire{
        float: left;
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
        <h4>انتخاب آدرس</h4>
        <span class="btngray addadd">افزودن آدرس جدید</span>
    </div>
    <div class="content">
        <?php
            $address=$data['address'];
            foreach ($address as $row) {

                ?>
                <table data-id="<?=$row['id']?>" cellspacing="0" class="first table_address">
                    <tr>
                        <td rowspan="3">

                            <span class="circle"></span>
                            <span class="triangle"></span>
                        </td>
                        <td colspan="3"><?=$row['family']?></td>
                        <td rowspan="3">
                            <table cellspacing="0">
                                <tr>
                                    <td onclick="editAddress(<?=$row['id']?>)" class="edit">
                                        <i></i>
                                    </td>

                                </tr>
                                <tr>
                                    <td onclick="deleteaddress(<?=$row['id']?>)" class="remove">
                                        <i></i>
                                    </td>

                                </tr>
                            </table>
                        </td>

                    </tr>
                    <tr>
                        <td>خراسان رضوی</td>
                        <td rowspan="2"><?=$row['address']?></td>
                        <td>شماره اضطراری:<?=$row['mobile']?></td>

                    </tr>
                    <tr>
                        <td>مشهد</td>
                        <td>شماره ثابت:<?=$row['tell']?></td>
                    </tr>
                </table>
                <?php
            }
        ?>

    </div>
    <div class="head">
        <h4>انتخاب شیوه ارسال</h4>
    </div>
    <div class="sendtypes">
        <table cellspacing="0">
            <tr>
                <td>
                    <span class="circle"></span>
                </td>
                <td>

                    <img src="http://127.0.0.1/digikalamvc/public/images/16060603.png">
                    <div>
                        <p>پست پیشتاز</p>
                    </div>
                </td>
                <td>
                    <p>38.000</p>
                    <p>هزار تومان</p>
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr>
                <td>
                    <span class="circle"></span>
                </td>
                <td>

                    <img src="http://127.0.0.1/digikalamvc/public/images/16060603.png">
                    <div>
                        <p>پست پیشتاز</p>
                    </div>
                </td>
                <td>
                    <p>38.000</p>
                    <p>هزار تومان</p>
                </td>
            </tr>
        </table>
        <div class="zakhire">
            <a href="http://127.0.0.1/digikalamvc/showcart3/index" class="btnblue"> ذخیره و مرحله ی بعد</a>
        </div>
    </div>
</div>


<?php
    require ('addaddress.php')
?>
<div id="dark"></div>

<script>
    function deleteaddress(id) {
        var url='http://127.0.0.1/digikalamvc/showcart2/deleteAddress/'+id;
        var data={};
        $.post(url,data,function (msg) {
            window.location='http://127.0.0.1/digikalamvc/showcart2/index'

        });
        
    }

    var editAddressId=0;
    function editAddress(addressId){
        editAddressId=addressId;

        var url='http://127.0.0.1/digikalamvc/showcart2/editaddress/'+addressId;
        var data='';
        $.post(url,data,function (msg) {
            console.log(msg);
            $('input[name=family]').val(msg['family']);
            $('input[name=mobile]').val(msg['mobile']);
            $('input[name=tell]').val(msg['tell']);
            $('textarea[name=address]').val(msg['address']);
            $('input[name=codeposti]').val(msg['codeposti']);

        },'json');

    }

    $('.close').click(function () {
        $('#addaddres').hide();
        $('#dark').hide();
    });
    $('.edit').click(function () {
        $('#addaddres').show();
        $('#dark').show();
    });
    $('.addadd').click(function () {
        editAddressId=0;
        $('#addaddress')[0].reset();
        $('#addaddres').show();
        $('#dark').show();
    });
    function submitform() {
        var url='showcart2/addaddress/'+editAddressId;
        var data=$('#addaddress').serializeArray();
        $.post(url,data,function (msg) {
            window.location='showcart2';
            alert(msg);

        });

    }
    $(' table .circle').click(function () {
        $('table').removeClass('active');
        $(this).parents('table').addClass('active');
        //$(this).parents('table').removeClass('active');
        var addressId=$('.table_address.active').attr('data-id');
        var url='http://127.0.0.1/digikalamvc/showcart2/makesession/'+addressId;
        var data={'addressId':addressId};
        $.post(url,data,function (msg) {
            alert(msg);
            
        });

    });

</script>

</body>
</html>