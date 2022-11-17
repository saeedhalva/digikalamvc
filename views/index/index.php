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

    #main{
        width: 1200px;
        margin: 10px auto;
    }
    #baner_top{
        width: 100%;
        height: 138px;
        background: url(http://127.0.0.1/digikalamvc/public/images/5726fd90.jpg);
    }

</style>
<div id="main">
    <div id="baner_top"></div>

    <?php
        require ('sidebarright.php');
    ?>
    <div id="content">
        <?php
        require ('slider1.php');
        require ('servicesfirures.php');
        ?>
    </div>

    <?php
        require ('slider2.php');
        require ('sliderscrool.php');
        require ('directaccess.php');
    ?>

    </div>

<script>


    ////////////////////////////////////////////////////////////
    maintagg =$(".sliderscrol_main");
    litagg=$(".sliderscrol_main li");
    len1=litagg.length;
    len2= Math.floor(litagg.length/4);
    $(litagg).hide(0);
    v=3;
    t=0;
    t2=4;
    t3=1;

    $(litagg).eq(0).show(0);
    $(litagg).eq(1).show(0);
    $(litagg).eq(2).show(0);
    $(litagg).eq(3).show(0);

    function scrool(){

        $(litagg).eq(v).hide(300);
        $(litagg).eq(v-1).hide(300);
        $(litagg).eq(v-2).hide(300);
        $(litagg).eq(v-3).hide(300);
        // $(litagg).eq(v-4).hide(300);

        $(litagg).eq(v+1).show(300);
        $(litagg).eq(v+2).show(300);
        $(litagg).eq(v+3).show(300);
        $(litagg).eq(v+4).show(300);

        v++;
        v++;
        v++;
        v++;

        t++;
        t++;
        t++;
        t++;



        if (t==len1+1) {
            $(litagg).eq(0).show(0);
            $(litagg).eq(1).show(0);
            $(litagg).eq(2).show(0);
            $(litagg).eq(3).show(0);
            t=0;
            v=3;


        };



    };
    $(".sliderscrol_next .nexticon").on("click",function () {

        scrool();

    });

    ////////////////////////////////////////////////////////////////////

    function scrool2(){

        t--;
        t--;
        t--;
        t--;

        $(litagg).eq(v).hide(300);
        $(litagg).eq(v-1).hide(300);
        $(litagg).eq(v-2).hide(300);
        $(litagg).eq(v-3).hide(300);
        $(litagg).eq(v-4).hide(300);

        $(litagg).eq(v-4).show(300);
        $(litagg).eq(v-5).show(300);
        $(litagg).eq(v-6).show(300);
        $(litagg).eq(v-7).show(300);

        v--;
        v--;
        v--;
        v--;

    }

    $(".sliderscrol_prev .previcon").on("click",function () {
        scrool2();

    });
    /////////////////////////////////////////


    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    var imgtag=$("#slider_img > a > img:eq(0)");
    var arr=["http://127.0.0.1/digikalamvc/public/images/slidettop.jpg","http://127.0.0.1/digikalamvc/public/images/slidertop2.jpg","http://127.0.0.1/digikalamvc/public/images/slidertop3.jpg","http://127.0.0.1/digikalamvc/public/images/slidertop4.jpg","http://127.0.0.1/digikalamvc/public/images/slidertop5.jpg"];
    var a=0;
    var timer=2500;
    var x;
    var litag= $("#slider #slider_navigator li");

    function slider() {
        (imgtag).fadeIn(0);
        $(imgtag).attr("src",arr[0]);
        $("#slider #slider_navigator li:first-of-type").addClass("activee");
        ab=setInterval(function () {
            if(a<5){
                $("#slider #slider_navigator li").removeClass("activee")
                $(imgtag).attr("src",arr[a]);
                a++;
                litag.eq(a-1).addClass("activee");
            }
            else {
                a=0;
            }
        },timer);
    }
    $("#slider #slider_navigator li").on("click",function () {
        var tag=$(this);
        var index=$(tag).index()+1;
        $("#slider #slider_navigator li").removeClass("activee");

        $(tag).addClass("activee");

        gotoslide(index);
    });
    function gotoslide(index) {
        clearInterval(ab);
        a=index-1;
        $(imgtag).attr("src",arr[a]);
    }

    $("#next").on("click", function(){
        clearInterval(ab);
        if(a<5){
            $(imgtag).attr("src",arr[a]);
            a++;
            $("#slider #slider_navigator li").removeClass("activee");
            litag.eq(a-1).addClass("activee");
        }
        else {
            a=0;
            $(imgtag).attr("src",arr[a]);
            a++;
            $("#slider #slider_navigator li").removeClass("activee");
            litag.eq(a-1).addClass("activee");
        }
    });
    $("#prev").on("click", function(){
        clearInterval(ab);
        if(a<5){
            a--;
            $(imgtag).attr("src",arr[a]);
            $("#slider #slider_navigator li").removeClass("activee");
            litag.eq(a).addClass("activee");
        }
        else {
            a=0;
            a--;
            $(imgtag).attr("src",arr[a]);
        }
        if(a==-1){
            a=5;
            a--;
            $(imgtag).attr("src",arr[a]);

        }
    });
    arr.each(slider());

    // end main slider


    var timer={};
    i=0;
    i2=0;
    x=0;
    x2=0;
    arr=[];
    arr2=[];
    var len=$("#menu_top li").length;
    $( "#menu_top li" ).hover(

        function() {

            x++;
            tag1=$(this);

            for(;i>=len;i++){
                arr.push(i+1);
            }

            $(arr).each(function () {
                $(tag1).attr("data-time",x);
            });

            var timerAttr=tag1.attr("data-time");

            clearTimeout(timer[timerAttr]);

            timer[timerAttr]= setTimeout (function () {
                $( "> ul",tag1 ).fadeIn(0);

                $("> .submenu3",tag1).fadeIn(0);
            },1000);

        },
        function() {

            x2++;
            var tag2=$(this);
            for(;i2<len;i2++){
                arr2.push(i2+1);
            }

            $(arr2).each(function () {
                $(tag2).attr("data-time",x2);
            });

            var timerAttr=tag2.attr("data-time");

            clearTimeout(timer[timerAttr]);

            timer[timerAttr]= setTimeout (function () {
                $( "> ul",tag2).fadeOut(0);

                $("> .submenu3",tag2).fadeOut(0);
            },1000);
        }

    );
</script>

</body>
