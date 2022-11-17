<style>
    #details{
        width: 100%;
    }
    #details .right{
        width: 450px;
        float: right;
        text-align: right;
    }
    #details .left{
        width: 700px;
        float: left;

    }
    #details .share i:first-child{
        background: url("http://127.0.0.1/digikalamvc/public/images/share.png");
        width: 16px;
        height:16px;
        display:inline-block;
        float: right;
        margin-right: 6px;
    }
    #details .share i:last-child{
        background: url("http://127.0.0.1/digikalamvc/public/images/heart.png");
        width: 16px;
        height:16px;
        display:inline-block;
        float: left;
        margin-left: 6px;
    }
    #details .share i:last-child.active{
        background:url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -162px -220px ;
        width: 16px;
        height:16px;
        display:inline-block;
        float: left;
        margin-left: 6px;
    }
    #details .share{
        float: right;
        width: 100%;
        padding: 20px 0;
    }
    #details .galery{
        float: right;
        width: 100%;
    }
    #details .galery ul{
        float: right;
        width: 100%;
        padding: 0;
        margin-top: 20px;

    }
    #details .galery ul li{
        float: left;
        width: 80px;
        height: 80px;
        border: 1px solid #eee;
        margin-right: 6px;
        text-align: center;
    }
    #details .galery ul li img{
        margin-top: 5px;
    }
    #details .galery ul li .more{
        background: url(http://127.0.0.1/digikalamvc/public/images/more.png);
        display: block;
        width: 24px;
        height: 24px;
        margin: 0 auto;
        position: relative;
        top: 30px;

    }
    #details .left .title{
        font-family: Vazir;
        font-size: 15pt;

        border-radius: 4px;
        padding: 20px 0;
        text-align: right;
    }
    .gray{
        width: 100px;
        height: 18px;
        background: url(http://127.0.0.1/digikalamvc/public/images/star.png)repeat;
        margin: 0 auto;
        position: relative;
        margin-left: 47px;
    }
    .red{
        width: 50%;
        height: 18px;
        background: url(http://127.0.0.1/digikalamvc/public/images/star-yellow.png)repeat;
        margin: 0 auto;
        position: absolute;
        left: 0;
        top: 0;
    }
    .stars{
        float: left;
    }
    .rate{
        float: right;
        font-size: 10.5pt;
        font-family: Vazir;
        margin-top: 10px;
    }

    #details{
        background-color: white;
        float: right;
    }

    #details .left .right{
        width: 415px;
        float: right;
    }
    #details .left .left{
        width: 300px;
        float: left;

    }
    #details .left .right h4{
        font-size: 9.8pt;
        font-family: Vazir;
    }
    #details .colors{
        padding: 0;
        float: right;
        width: 100%;
        margin-bottom: 13px;

    }
    #details .colors li{
        width: 78px;
        height: 22px;
        float: right;
        margin-left: 6px;
        border: 1px solid #ccc;
        background: #eee;
        font-size: 9pt ;
        font-family: Vazir;
        text-align: left;
        padding: 4px;
    }
    #details .colors li .circle{
        width: 22px;
        height: 22px;
        border-radius: 50%;
        display: block;
        position: relative;
        left: 50px;
        top: -20px;
        background: black;
    }
    #details .colors li .active::after{
        content: "";
        width: 16px;
        height: 16px;
        position: absolute;
        right: 4px;
        top: 3px;
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -140px -80px;
    }
    #selectlist{
        width: 390px;
        height: 37px;
        border: 1px solid #ccc;
        background: #eee;
        position: relative;
        right: -24px;
    }
    #selectlist::after{
        content: "";
        width: 23px;
        height: 23px;
        display: block;
        position: absolute;
        right: 3px;
        top: 6px;
        background: url("http://127.0.0.1/digikalamvc/public/images/tick.png");
    }
    #selectlist::before{
        content: "";
        width: 24px;
        height: 23px;
        display: block;
        position: absolute;
        left: 3px;
        top: 9px;
        background: url("http://127.0.0.1/digikalamvc/public/images/down-arrow (1).png")no-repeat;
    }
    #selectlist span{
        font-size: 10.5pt;
        text-align: center;
        display: block;
        line-height: 38px;


    }
    #selectlist ul{
        padding: 0;
        box-shadow: 0 2px 2px #cacaca;
        display: none;
        background: white;



    }
    #selectlist ul li{
        font-family: Vazir;
        font-size: 11.5pt;
        padding: 4px 5px;

    }
    #selectlist ul li:hover{
        background: #c4c8ce;

    }
    #price{
        float: right;
        width: 100%;
        margin-top: 40px;
    }
    #price span:nth-child(1){
        font-size: 10pt;
    }

    #price > span:nth-child(2){
        font-size: 12pt;
        text-decoration: line-through;

    }

    #price span:nth-child(3){
        font-size: 10pt;
    }
    #price .discount{
        width: 135px;
        height: 22px;
        display: inline-block;
        float: left;
        font-family: Vazir;
        font-size: 9pt;
        margin-left: 100px;


    }
    .discountright{
        width: 50px;
        height: 100%;
        display: block;
        float: right;
        background: red;
        color: white;
        text-align: center;
    }
    .discountleft{
        width: 85px;
        height: 100%;
        display: block;
        float: right;
        background: #db4d4e;
        color: white;
        font-size: 10pt;
        text-align: center;
    }
    #priceforyou{
        float: right;
        width: 100%;
        margin-top: 25px;

    }
    #compare{
        float: right;
        width: 100%;
        margin-top: 30px;
    }
    .comparebtn{
        width: 155px;
        height: 40px;
        background: #ccc;
        border-radius: 4px;
        overflow: hidden;
        float: right;
        display: block;
        position: relative;
        color: white;
        text-align: center;
        line-height: 36px;
    }
    .addtocartbtn{
        width: 210px;
        height: 40px;
        background: green;
        border-radius: 4px;
        overflow: hidden;
        float: right;
        display: block;
        margin-right: 7px;
        text-align: center;
        color: white;
        line-height: 36px;
    }
    #services_fiture{
        width: 690px;
        height: 80px;
        background: white;
        border-radius: 4px;
        overflow: hidden;
        margin-top: -9px;
        position: relative;
        top: 34px;
        box-shadow: 1px 2px #cccccc;
        left: 10px;
    }
    #services_fiture ul{
        padding: 0;
        height: 100%;
    }
    #services_fiture ul li{
        width: 132px;
        height: 100%;
        float: right;
    }
    #services_fiture ul li a{
        display: block;
        width: 100%;
        height: 100%;
        line-height: 80px;
    }
    #services_fiture ul li a i{
        width: 32px;
        height: 32px;
        display: inline-block;
        background: url(http://127.0.0.1/digikalamvc/public/images/free-delivery.png)no-repeat;
        margin-left: 4px;
        float: left;
        margin-top: 21px;
    }
    #services_fiture ul li a span{
        display: block;
        margin-right: 10px;
    }
    #productgalery{
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
    #productgalery h4{
        font-family: Vazir;
        font-size: 13.5pt;
        padding: 8px;
        background: #eee;
        direction: rtl;
        margin: 0;
        position: relative;
    }
    #productgalery h4 .close{
        width: 28px;
        height: 28px;
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -134px -123px;
        display: block;
        position: absolute;
        left: 2px;
        top: 2px;
        cursor: pointer;
    }
    #productgalery .right{
        width: 700px;
        float: right;
        height: 850px;
    }
    #productgalery .right img{
        float: right;
        margin-top: 20px;
        margin-right:100px;
    }

    #productgalery .left{
        width: 228px;
        float: left;
        border-right: 1px solid #ccc;
        overflow-y: auto;
        height: 560px;

    }
    #productgalery .left ul{
        padding: 0;

    }
    #productgalery .left ul li{
        height: 200px;
        border-bottom: 1px solid #ccc;
        text-align: center;
        opacity: .6;
    }
    #productgalery .right .item{
        display: none;
    }
    #productgalery .left ul li.active{
        opacity: 1;

    }
</style>

<div id="details">
    <div class="right">
        <div class="share">
            <i class="social"></i>
            <i class="addtofavorite"></i>
        </div>
        <div class="galery">

                        <img id="zoomproduct"

                             src="http://127.0.0.1/digikalamvc/public/images/products/<?= $productInfo['id']?>/product_390.jpg"
                             data-zoom-image="http://127.0.0.1/digikalamvc/public/images/products/large/<?= $productInfo['id']?>.jpg">

            <ul>
                <?php
                    $thombs=$data['thombs'];
                    foreach ($thombs as $row) {

                        ?>

                        <li>
                            <img src="http://127.0.0.1/digikalamvc/public/images/products/<?=$row['idproduct']?>/gallery/small/<?=$row['img']?>"style="width: 70px">
                        </li>
                        <?php
                    }
                ?>
<!--                <li>-->
<!--                    <img src="http://127.0.0.1/digikalamvc/public/images/downgalery2.jpg">-->
<!--                </li>-->
<!--                <li>-->
<!--                    <img src="http://127.0.0.1/digikalamvc/public/images/downgalery3.jpg">-->
<!--                </li>-->
<!--                <li>-->
<!--                    <img src="http://127.0.0.1/digikalamvc/public/images/downgalery4.jpg">-->
<!--                </li>-->
                <li>
                    <span class="more"></span>
                </li>
            </ul>
        </div>
    </div>
    <div class="left">
        <div class="title">
           <?=$productInfo['title']?>
            <div class="stars textcenter">
                <div class="gray textcenter">

                    <div class="red"></div>

                </div>
                <span class="rate">3از12 رای</span>
            </div>
        </div>
        <div class="right">
            <h4>انتخاب رنگ</h4>



            <ul class="colors">
                <?php
                $all_colors=$productInfo['all_colors'];
                foreach ($all_colors as $color) {
                    ?>
                    <li>
                        <?= $color['title']?>
                        <span data_id="<?=$color['id']?>" class="circle" style="background: <?= $color['hex']?>"></span>
                    </li>
                    <?php
                }
                ?>
               
            </ul>
            <h4>انتخاب گارانتی</h4>
            <div id="selectlist">
                <span class="Vazir zemanattitle">انتخاب کنید</span>
                <ul>
                    <?php
                    $all_garantee=$productInfo['all_garantee'];
                foreach ($all_garantee as $garantee) {
                    ?>
                    <li data_id="<?=$garantee['id']?>"><?=$garantee['title'];?></li>
                    <?php
                        }
                    ?>

                </ul>
            </div>
            <div id="price">
                <span class="Vazir">قیمت:</span>
                <span class="Vazir"><?=$productInfo['price']?></span>
                <span class="Vazir">تومان</span>
                <span class="discount">
                        <span class="discountright">تخفیف</span>
                        <span class="discountleft"><?=$productInfo['price_discount'];?></span>
                    </span>
            </div>
            <div id="priceforyou">
                <span class="Vazir">قیمت برای شما:</span>
                <span class="Vazir"><?=$productInfo['price_total']?></span>
                <span class="Vazir">تومان</span>
            </div>

            <div id="compare">
                <span class="Vazir comparebtn">مقایسه</span>
                <span class="Vazir addtocartbtn" onclick="addToBasket('<?=$productInfo['id']?>')">
                        افزودن به سبد
                        <i></i>
                    </span>
                <script>
                    var garantee_selected="";
                    $('#selectlist ul li').click(function () {
                        garantee_selected=$(this).attr('data_id');
                        var txt=$(this).text();
                        $('#selectlist .zemanattitle').text(txt);
                    });


                    function addToBasket(productId){
                        var color=$('.colors').find('.circle.active').attr('data_id');
                        console.log(garantee_selected);
                        var url='<?=url?>product/addtobasket/<?= $productInfo['id'] ?>/'+color+'/'+garantee_selected+'';
                        var data={};
                        $.post(url,data,function (msg) {
                            alert(msg);
                        });

                    }

                </script>
            </div>
        </div>
        <div class="left"></div>
        <div id="services_fiture">
            <ul class="Vazir fontsm">
                <li>
                    <a>
                        <i></i>
                        <span>ارسال رایگان</span>
                    </a>
                </li>
                <li>
                    <a>
                        <i></i>
                        <span>ارسال رایگان</span>
                    </a>
                </li>
                <li>
                    <a>
                        <i></i>
                        <span>ارسال رایگان</span>
                    </a>
                </li>
                <li>
                    <a>
                        <i></i>
                        <span>ارسال رایگان</span>
                    </a>
                </li>
                <li>
                    <a>
                        <i></i>
                        <span>ارسال رایگان</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="productgalery">
    <h4>
        <?=$productInfo['title']?>
        <span class="close"></span>
    </h4>
    <div class="right">

        <img class="mainimage" src="">


    </div>
    <div class="left">
        <ul>
            <?php
                $gallery=$data['gallery'];
                foreach ($gallery as $row) {


                    ?>
                    <li data-main-image="http://127.0.0.1/digikalamvc/public/images/products/<?=$row['idproduct']?>/gallery/large/<?=$row['img']?>">
                        <img src="http://127.0.0.1/digikalamvc/public/images/products/<?=$row['idproduct']?>/gallery/small/<?=$row['img']?>">
                    </li>
                    <?php
                }
                    ?>
<!--            <li  data-main-image="http://127.0.0.1/digikalamvc/public/images/products/large/galery2.jpg">-->
<!--                <img src="http://127.0.0.1/digikalamvc/public/images/products/medium/galery2.jpg">-->
<!--            </li>-->
<!--            <li>-->
<!--                <img src="http://127.0.0.1/digikalamvc/public/images/products/medium/galery3.jpg">-->
<!--            </li>-->
<!--            <li>-->
<!--                <img src="http://127.0.0.1/digikalamvc/public/images/products/medium/galery4.jpg">-->
<!--            </li>-->
<!--            <li>-->
<!--                <img src="http://127.0.0.1/digikalamvc/public/images/products/medium/galery5.jpg">-->
<!--            </li>-->
        </ul>
    </div>
</div>
<div id="dark"></div>

<script>









    $('#zoomproduct').elevateZoom({'zoomWindowOffetx':-800,'scrollZoom':true,'tint':true});


    var productgalery=$('#productgalery');
    var productgaleryitems=productgalery.find('.item');
    function showGalery(index) {
        productgaleryitems.fadeOut(0);
        productgaleryitems.eq(index).fadeIn(200);



    }

    var productgalerythumbs=  productgalery.find('.left ul li');
    productgalerythumbs.click(function () {

        $(productgalerythumbs).removeClass('active');
        $(this).addClass('active');


        var mainimageurl=$(this).attr('data-main-image');
        productgalery.find('.mainimage').attr('src',mainimageurl);


    });

    productgalery.find('.close').click(function () {

        productgalery.hide();
        $('#dark').hide();
    });

    $('.galery ul').click(function () {
        $('#productgalery').show();
        $('#dark').show();
    });
    $('#details .galery ul li').click(function () {
        var index22=  $(this).index();
        $('#productgalery .left ul li').removeClass('active');

        if (index22==0){
            $('#productgalery').show();
            $('#dark').show();
            $('#productgalery .left ul li').eq(0).addClass('active');
            $('#productgalery .left').scrollTop(0);
            var src= $('#productgalery .left ul li').eq(0);
            var src2=src.attr('data-main-image');
            $('.mainimage').attr('src',src2);


        }



        if (index22==1){
            $('#productgalery').show();
            $('#dark').show();
            $('#productgalery .left ul li').eq(1).addClass('active');
            $('#productgalery .left').scrollTop(180);
            var src= $('#productgalery .left ul li').eq(1);
            var src3=src.attr('data-main-image');
            $('.mainimage').attr('src',src3);




        }

        if (index22==2){
            $('#productgalery').show();
            $('#dark').show();
            $('#productgalery .left ul li').eq(2).addClass('active');
            $('#productgalery .left').scrollTop(380);
            var src= $('#productgalery .left ul li').eq(2);
            var src4=src.attr('data-main-image');
            $('.mainimage').attr('src',src4);


        }


        if (index22==3){
            $('#productgalery').show();
            $('#dark').show();
            $('#productgalery .left ul li').eq(3).addClass('active');
            $('#productgalery .left').scrollTop(450);
            var src= $('#productgalery .left ul li').eq(3);
            var src5=src.attr('data-main-image');
            $('.mainimage').attr('src',src5);


        }

        if (index22==4){
            $('#productgalery').show();
            $('#dark').show();
            $('#productgalery .left ul li').eq(4).addClass('active');
            $('#productgalery .left').scrollTop(450);
            var src= $('#productgalery .left ul li').eq(4);
            var src2=src.attr('data-main-image');
            $('.mainimage').attr('src',src2);




        }


    });

    $('#details .share i:last-child').click(function () {
        $('#details .share i:last-child').toggleClass('active');

        //$('#details .share i:last-child').css(backgroundPosition:-128px -23px);

    })
</script>