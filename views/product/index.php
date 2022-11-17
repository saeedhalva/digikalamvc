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

        margin: 10px auto;

    }

    #content{
        width: 880px;
        float: left;
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


</style>
<header>
</header>
<div id="main">

   <?php
   $naghd=$data['naghd'];



       $productInfo['special']=0;
       $productInfo=$data['productInfo'];
       if ($productInfo['special']==1) {
           require('ofer.php');
       }
       require ('details.php');
       require ('introduction.php');
       require ('sliderscrool.php');
       require ('tabs.php');
   ?>

</div>

<script>


    $('.colors li').click(function () {
        $('.circle').removeClass('active');
        $('.circle',this).toggleClass('active');
        //$(this).find('.circle');

    });

    $('#selectlist').click(function () {
        var ultag=$('ul',this);
        ultag.slideToggle(100);
    });

    // $('#selectlist ul li').click(function () {
    //     var txt=$(this).text();
    //     $('#selectlist .zemanattitle').text(txt);
    // });
    ////////////////////////////////////////////////


    ////////////////////////////////////////////

    // $('#tab li').click(function () {
    //     var index=$(this).index();
    //     $('#tab li').removeClass('active');
    //     $(this).addClass('active');
    //     $('#tabchilds section').fadeOut(0);
    //     $('#tabchilds section').eq(index).fadeIn(200);
    // });
    /////////////////////////////////////////

    // $('.itemcontiner .item h4').click(function () {
    //
    //     var item=$(this).parents('.item');
    //
    //     $(this).toggleClass('active');
    //
    //     $('.description',item).slideToggle(200);
    //
    // });
    ///////////////////////////////////////////////////////


    ///////////////////////////////////////////////////////


</script>

</body>
</html>