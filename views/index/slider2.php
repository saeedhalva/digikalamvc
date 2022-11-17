

<style>
    .slider2{
        width: 890px;
        height: 304px;
        background: white;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 1px 2px #cccccc;
    }
    .slider2_right{
        width:705px;
        height: 100%;
        float: right;
    }
    .slider2_right a{
        display: block;
        height: 100%;
    }
    .slider2_left{
        width: 184px;
        height: 100%;
        border-right: 1px solid #eee;
        background: #dbd6d600;
    }
    .slider2_left ul li{
        height: 38px;
    }
    .slider2_left ul li a{
        display: block;
        height: 100%;
        text-align: center;
        line-height: 37px;
    }
    .slider2_left ul{
        padding: 0;
    }
    .slider2_content_right{
        width: 400px ;
        float: right;
        height: 100%;
    }
    .slider2_content_left{
        width: 305px ;
        float: left;
        height: 100%;
    }
    .slider2_content_left p{
        text-align: center;
    }
    .slider2_content_left img{
        margin-left: 34px;
        width: 220px;
    }
    .slider2_content_right .title{
        color: red;
        direction: rtl;
        padding-right: 30px;
    }
    .slider2_content_right .price_info{

        height: 35px;
        margin-left: 150px;
    }
    .price_info_old{
        width: 75px;
        height: 100%;
        background: #cccccc;
        float: right;
        position: relative;
        margin-right: 18px;
        color: white;
        text-align: center;
        line-height: 37px;
        font-size: 9.5pt;
    }
    .price_info_old::after{
        content: "";
        position: absolute;
        left: -10px;
        top: 10px;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 8px 12px 8px 0;
        border-color: transparent #cccccc transparent transparent;
        z-index: 1;
    }
    .price_info_new{
        width: 155px;
        height: 100%;
        background: red;
        float: left;
        position: relative;
        color: white;
        text-align: center;
        line-height: 32px;
    }
    .price_info_new::after{
        content: "";
        position: absolute;
        right:0;
        top: 10px;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 8px 12px 8px 0;
        border-color: transparent white transparent transparent;
    }
    .price_info p{
        width: 100%;
        float: right;
        text-align: right;
        margin-right: 20px;
    }
    .price_info p:last-of-type{
        margin-top: 0;
    }
    .slider2_left .menu_active::before{
        content: "";
        position: absolute;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 19px 0 19px 17px;
        border-color: transparent transparent transparent #ff0000;
    }
    p{
        color: black;
    }

</style>

<div class="slider2">
    <div class="slider2_right">
        <?php
            $slider2=$data[1];
            foreach ($slider2 as $row){
        ?>
        <a href="<?=url?>product/index/<?=$row['id']?>">
            <div class="slider2_content_right Vazir fontlg">
                <p class="title">جشنواره فروش</p>
                <div class="price_info">
                    <div class="price_info_old Vazir"><?=$row['price']?></div>
                    <div class="price_info_new Vazir"><?=$row['price_total']?></div>
                    <p class="Vazir fontsm">ظرفیت بالا</p>
                    <p class="Vazir fontsm">بسیار کم مصرف</p>
                </div>
            </div>
            <div class="slider2_content_left Vazir fontlg">

                        <p>
                            <?=$row['title'];?>
                        </p>

                <img id="mmm" src="http://127.0.0.1/digikalamvc/public/images/products/<?=$row['id']?>/product_220.jpg">
            </div>
        </a>
                <?php
            }
        ?>

<!--        <a>-->
<!--            <div class="slider2_content_right Vazir fontlg">-->
<!--                <p class="title">جشنواره فروش</p>-->
<!--                <div class="price_info">-->
<!--                    <div class="price_info_old Vazir">19هزارتومان</div>-->
<!--                    <div class="price_info_new Vazir"> 15 هزارتومان</div>-->
<!--                    <p class="Vazir fontsm">مناسب تمام کودکان</p>-->
<!--                    <p class="Vazir fontsm"></p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="slider2_content_left Vazir fontlg">-->
<!--                <p>-->
<!--                    صندلی کودک-->
<!--                </p>-->
<!--                <img src="http://127.0.0.1/digikalamvc/public/images/slider2-1.jpg">-->
<!--            </div>-->
<!--        </a>-->
<!---->
<!--        <a>-->
<!--            <div class="slider2_content_right Vazir fontlg">-->
<!--                <p class="title">جشنواره فروش</p>-->
<!--                <div class="price_info">-->
<!--                    <div class="price_info_old Vazir">20هزارتومان</div>-->
<!--                    <div class="price_info_new Vazir"> 15 هزارتومان</div>-->
<!--                    <p class="Vazir fontsm">قدرت بالا</p>-->
<!--                    <p class="Vazir fontsm">بسیار کم مصرف</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="slider2_content_left Vazir fontlg">-->
<!--                <p>-->
<!--                    دستگاه لیزر-->
<!--                </p>-->
<!--                <img src="http://127.0.0.1/digikalamvc/public/images/slider2-2.jpg">-->
<!--            </div>-->
<!--        </a>-->
<!--        <a>-->
<!--            <div class="slider2_content_right Vazir fontlg">-->
<!--                <p class="title">جشنواره فروش</p>-->
<!--                <div class="price_info">-->
<!--                    <div class="price_info_old Vazir">21هزارتومان</div>-->
<!--                    <div class="price_info_new Vazir"> 15 هزارتومان</div>-->
<!--                    <p class="Vazir fontsm">ظرفیت بالا</p>-->
<!--                    <p class="Vazir fontsm">جادار</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="slider2_content_left Vazir fontlg">-->
<!--                <p>-->
<!--                    کیف مشسافرتی-->
<!--                </p>-->
<!--                <img src="http://127.0.0.1/digikalamvc/public/images/slider2-3.jpg">-->
<!--            </div>-->
<!--        </a>-->
<!--        <a>-->
<!--            <div class="slider2_content_right Vazir fontlg">-->
<!--                <p class="title">جشنواره فروش</p>-->
<!--                <div class="price_info">-->
<!--                    <div class="price_info_old Vazir">22هزارتومان</div>-->
<!--                    <div class="price_info_new Vazir"> 15 هزارتومان</div>-->
<!--                    <p class="Vazir fontsm">قابل حمل</p>-->
<!--                    <p class="Vazir fontsm">قیمت مناسب</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="slider2_content_left Vazir fontlg">-->
<!--                <p>-->
<!--                    صندلی-->
<!--                </p>-->
<!--                <img src="http://127.0.0.1/digikalamvc/public/images/slider2-4.jpg">-->
<!--            </div>-->
<!--        </a>-->
<!--        <a>-->
<!--            <div class="slider2_content_right Vazir fontlg">-->
<!--                <p class="title">جشنواره فروش</p>-->
<!--                <div class="price_info">-->
<!--                    <div class="price_info_old Vazir">23هزارتومان</div>-->
<!--                    <div class="price_info_new Vazir"> 15 هزارتومان</div>-->
<!--                    <p class="Vazir fontsm">ضدآب</p>-->
<!--                    <p class="Vazir fontsm">بسیار کم مصرف</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="slider2_content_left Vazir fontlg">-->
<!--                <p>-->
<!--                    ماشین اصلاح1-->
<!--                </p>-->
<!--                <img src="http://127.0.0.1/digikalamvc/public/images/slider2-5.jpg">-->
<!--            </div>-->
<!--        </a>-->
<!--        <a>-->
<!--            <div class="slider2_content_right Vazir fontlg">-->
<!--                <p class="title">جشنواره فروش</p>-->
<!--                <div class="price_info">-->
<!--                    <div class="price_info_old Vazir">24هزارتومان</div>-->
<!--                    <div class="price_info_new Vazir"> 15 هزارتومان</div>-->
<!--                    <p class="Vazir fontsm">ضد آب</p>-->
<!--                    <p class="Vazir fontsm">بسیار کم مصرف</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="slider2_content_left Vazir fontlg">-->
<!--                <p>-->
<!--                    ماشین اصلاح2-->
<!--                </p>-->
<!--                <img src="http://127.0.0.1/digikalamvc/public/images/slider2-6.jpg">-->
<!--            </div>-->
<!--        </a>-->
<!--        <a>-->
<!--            <div class="slider2_content_right Vazir fontlg">-->
<!--                <p class="title">جشنواره فروش</p>-->
<!--                <div class="price_info">-->
<!--                    <div class="price_info_old Vazir">25هزارتومان</div>-->
<!--                    <div class="price_info_new Vazir"> 15 هزارتومان</div>-->
<!--                    <p class="Vazir fontsm">ظرفیت بالا</p>-->
<!--                    <p class="Vazir fontsm">بسیار کم مصرف</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="slider2_content_left Vazir fontlg">-->
<!--                <p>-->
<!--                    ساعت-->
<!--                </p>-->
<!--                <img src="http://127.0.0.1/digikalamvc/public/images/slider2-7.jpg">-->
<!--            </div>-->
<!--        </a>-->
    </div>
    <div class="slider2_left">
        <ul class="Vazir fontsm">
            <?php
            foreach ($slider2 as $row) {
                ?>
                <li>
                    <a><?= $row['title']; ?></a>
                </li>
                <?php
            }
            ?>



<!--            <li onclick="cliked(1)">-->
<!--                <a></a>-->
<!--            </li>-->
<!--            <li onclick="cliked(2)">-->
<!--                <a>دستگاه لیزر</a>-->
<!--            </li>-->
<!--            <li  onclick="cliked(3)">-->
<!--                <a>کیف مسافرتی</a>-->
<!--            </li>-->
<!--            <li  onclick="cliked(4)" >-->
<!--                <a>صندلی همراه</a>-->
<!--            </li>-->
<!--            <li  onclick="cliked(5)">-->
<!--                <a>ماشین اصلاح1</a>-->
<!--            </li>-->
<!--            <li  onclick="cliked(6)">-->
<!--                <a>ماشین اصلاح2</a>-->
<!--            </li>-->
<!--            <li  onclick="cliked(7)">-->
<!--                <a>ساعت هوشمند</a>-->
<!--            </li>-->


        </ul>
    </div>
</div>
<script>
    function f() {
        var arr5=[];
        var maintag5=$(".slider2_right  img");
        var maintag6=$(".slider2 .slider2_right  a");
        var maintag7=$(" .slider2_left ul li ");
        var maintag8=$(" .slider2_left ul li ").eq(0);
        maintag8.addClass("menu_active");
        maintag6.eq(0).fadeIn;
        i5=1;
        ff=    setInterval (function () {
            maintag7.removeClass("menu_active");
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


    function remove(){
        litag12=$('.slider2_left ul li');
        litag12.removeClass("menu_active");
    }

       mainul=$('.slider2_left ul');
       litag12=$('.slider2_left ul li');
       litag12.click(function () {
           clearInterval(ff);
           remove();
           var tag=$(this);
           ind=tag.index();

          tag.addClass("menu_active");
           var maintag66=$(".slider2 .slider2_right a");

           maintag66.hide();

           maintag66.eq(ind).show();

       });



</script>