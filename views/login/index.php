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

    .regheader{
        width:100%;
        float: right;
        background: #fafcfc;
        text-align: center;

    }
    .regheader p {

        text-align: center;
        line-height: 100px ;
    }
    .regheader .right,.regheader .left{
        width:50%;
        direction: rtl;
        text-align: right;

    }
    .regheader .right{
        text-align: right;
        direction: rtl;
        padding-right: 40px;
        padding-top: 31px;
        float: right;
    }
    .regheader input{
        width:230px ;
        height:32px ;
        border: 1px solid #ccc;

    }
    .regheader label{
        font-family: Vazir;
        display: inline-block;
        width: 109px;
    }
    .regheader .right > div{
        margin-top: 25px;
        font-family: Vazir;
    }
    .regheader .btn{
        width: 110px;
        height: 38px;
        background: #2c77af;
        display: block;
        float: left;
        margin-right: 25px;
        margin-bottom: 35px;
        text-align: center;
        font-family: Vazir;
        color: white;
        line-height: 34px;
    }
    .check{
        width: 16px !important;
        height: 16px !important;
        opacity: 0;
    }
    .check_lable{
        width: 16px !important;
        height: 16px !important;
        display: block;
        background: #2c77af;
        position: absolute;
        top: 3px;
        right: 4px;
        z-index: 2;
    }
    .right > div{
        position: relative;
    }
</style>

<div id="main">
    <div class="regheader">
        <p class="Vazir fontlg">به دیجیکالا بپیوندید</p>
        <div class="right">
            <form action="login/checkuser" method="post">
            <div>
                <label>پست الکترونیک</label>
                <input name="email">
            </div>
            <div>
                <label>رمز عبور</label>
                <input name="password">
            </div>


            <div>
                <span class="btn" onclick="submitForm()">ورود</span>
            </div>
            </form>
        </div>
        <div class="left">

        </div>
    </div>
</div>


<script>
    function submitForm() {
        $('form').submit();

    }
    //    function aaa(){
    //
    //        var rr=$("#mmm").attr("src");
    //        for (i=0;i<=8;i++){
    //              var maintag=$(".slider2_right img");
    //              var fttag=$("#mmm");
    //              var x= $(maintag.eq(i)).attr("src");
    //              $(fttag).attr("src",x);
    //
    //
    //             if(i>=8){
    //                 var maintag=$(".slider2_right img");
    //
    //                 var z= maintag.eq(0);
    //                 $("#mmm").attr("src",rr);
    //                 i=0;
    //
    //             }
    //
    //           // alert(i);
    //    };
    //
    //    }
    //
    // //   $("#mmm").on("click",function () {
    //        aaa();
    //  //  });

    function f() {
        var arr5=[];
        var maintag5=$(".slider2_right  img");
        var maintag6=$(".slider2 .slider2_right  a");
        var maintag7=$(" .slider2_left ul li ");
        var maintag8=$(" .slider2_left ul li ").eq(0);
        //alert(maintag6.length);

        // maintag6.fadeOut(0);
        // for (i=0;i<=maintag5.length;i++){
        //     arr5.push(maintag5.eq(i).attr("src"));
        // };
        maintag8.addClass("menu_active");
        maintag6.eq(0).fadeIn;
        i5=1;
        ff=    setInterval (function () {
            maintag7.removeClass("menu_active");


            //$("#mmm").attr("src",arr5[i5]);
            maintag6.eq(i5-1).fadeOut(0);
            maintag6.eq(i5).fadeIn(0);

            maintag7.eq(i5).addClass("menu_active");
            i5++;
            if (i5==8){
                i5=0;
            }
        },2500);
    };

    f();

    function cliked(index) {
        clearInterval(ff);

        var maintag6=$(".slider2 .slider2_right  a");
        maintag6.fadeOut(0);
        maintag6.eq(index).fadeIn(0);
        var maintag7=$(" .slider2_left ul li ");
        maintag7.removeClass("menu_active");
        maintag7.eq(index).addClass("menu_active");
    };

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

        // if (t==-4) {
        //
        //         $(litagg).eq(0).show(0);
        //         $(litagg).eq(1).show(0);
        //         $(litagg).eq(2).show(0);
        //         $(litagg).eq(3).show(0);
        //         t=0;
        //         v=3;
        //
        //
        //     };



    }

    $(".sliderscrol_prev .previcon").on("click",function () {
        scrool2();
        // alert(t);
    });
    /////////////////////////////////////////




    //
    // $(".sliderscrol_prev .previcon").on("click",function () {
    //     var x44=  $(".sliderscrol_main ul li");
    //     var arr44=[];
    //
    //     for (i44=0;i44<x44.length;i44++){
    //         arr44.push(x44.eq(i44));
    //     }
    //
    //     for (a44=0;a44<arr44.length;a44++){
    //     };
    //
    //         arr44[a44-11].show(200);
    //         arr44[a44-10].show(200);
    //         arr44[a44-9].show(200);
    //         arr44[a44-8].show(200);
    //
    //    b--;
    //
    //
    //
    // });

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    var imgtag=$("#slider_img > a > img:eq(0)");
    var arr=["images/slidettop.jpg","images/slidertop2.jpg","images/slidertop3.jpg","images/slidertop4.jpg","images/slidertop5.jpg"];
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










    // $( "#menu_top li" ).hover(
    //     function() {
    //          tag1=$(this);
    //        maintag= $( "#menu_top >ul > li" );
    //             for(name=0;name<maintag.length;name++){
    //                 array = [];
    //                 array.push(name+1);
    //                 for (name=0;name<array.length;name++){
    //                      tag1=$(this);
    //                     name=setTimeout(function () {
    //                         $( "> ul",tag1 ).fadeIn(0);
    //                     },1000);
    //                 };
    //             };
    //
    //     }, function() {
    //         clearTimeout(name);
    //         $( "#menu_top li" );
    //         var tag2=$(this);
    //         setTimeout(function () {
    //             $( "> ul",tag2).fadeOut(0);
    //         },1000)
    //     }
    // );

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
