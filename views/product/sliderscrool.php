<style>
    .sliderscrol{
        width:1200px ;
        height: 310px;
        box-shadow: 1px 2px #cccccc;
        margin-top: 10px;
        background: #ffffff;
        border-radius: 4px;
        overflow: hidden;
    }
    .sliderscrol .justindigi{
        background: #f7f9fa;
        height: 35px;
        text-align: right;
        margin: 0;
        display: block;
        padding-right: 20px;
        padding-top: 9px;
    }
    .sliderscrol_content{
        height:265px ;
    }
    .sliderscrol_prev{
        width: 55px;
        height: 100%;
        float: right;
        position: relative;
    }
    .sliderscrol_main{
        width: 1080px;
        height: 100%;
        float: right;
        overflow: hidden;
    }
    .sliderscrol_next{
        width: 55px;
        height: 100%;
        float: left;
        position: relative;
    }
    .sliderscrol_prev .previcon{
        width: 24px;
        height: 24px;
        background: url(http://127.0.0.1/digikalamvc/public/images/right-chevron.png);
        display: block;
        position: absolute;
        left: 25px;
        top:115px;
        cursor: pointer;

    }
    .nexticon{
        width: 24px;
        height: 24px;
        background: url(http://127.0.0.1/digikalamvc/public/images/left-arrow.png);
        display: block;
        position: absolute;
        left: 8px;
        top:120px;
        cursor: pointer;

    }
    .sliderscrol .sliderscrol_main ul{
        padding: 0;
        height: 100%;
        width:1100px;


    }
    .sliderscrol .sliderscrol_main li{
        width: 195px;
        height: 100%;
        float: right;
        margin-right: 73px;


    }
    .sliderscrol .sliderscrol_main ul li a{

        display: block;
        height: 100%;
        text-align: center;
        margin-top:16px;

    }
    .sliderscrol .price{
        color: green;
        font-size: 13pt;

    }
    .sliderscrol .sliderscrol_main p{
        text-align: center;
        margin: 2px;

    }


</style>
<div class="sliderscrol">

    <p class="Vazir justindigi">فقط در دیجی کالا</p>
    <div class="sliderscrol_content">
        <div class="sliderscrol_prev">
            <span class="previcon"></span>
        </div>
        <div class="sliderscrol_main">
            <ul>
                <?php
                $onlyclicksite=$data['onlyclicksite'];
                foreach ($onlyclicksite as $row) {


                    ?>
                    <li>
                        <a href="<?=url?>product/index/<?=$row['id']?>">
                            <img src="http://127.0.0.1/digikalamvc/public/images/products/<?=$row['id']?>/product_150.jpg">
                            <img src="http://127.0.0.1/digikalamvc/public/images/exclusive-bluesliderscrool.png">
                            <p class="Vazir"><?=$row['title']?></p>
                            <p class="Vazir price"><?=$row['price']?></p>
                        </a>
                    </li>
                    <?php
                }
                ?>
                <!--                <li>-->
                <!--                    <a>-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/phone-Panasonic-KX-TG68215646f3.jpg">-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/exclusive-bluesliderscrool.png">-->
                <!--                        <p class="Vazir">گوشی هواوی</p>-->
                <!--                        <p class="Vazir price">12.500.000</p>-->
                <!--                    </a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a>-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/Mobile-Phone-Samsung-Galaxy-A5-20160df13e.jpg">-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/exclusive-bluesliderscrool.png">-->
                <!--                        <p class="Vazir">گوشی هواوی</p>-->
                <!--                        <p class="Vazir price">12.500.000</p>-->
                <!--                    </a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a>-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/Mobile-Phone-Samsung-Galaxy-S7-SM-G930FD-Dual-SIM-Noroz-Packeeb550.jpg">-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/exclusive-bluesliderscrool.png">-->
                <!--                        <p class="Vazir">گوشی هواوی</p>-->
                <!--                        <p class="Vazir price">12.500.000</p>-->
                <!--                    </a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a>-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/Mobile-Phone-Samsung-Galaxy-A3-20169bd638.jpg">-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/exclusive-bluesliderscrool.png">-->
                <!--                        <p class="Vazir">گوشی هواوی</p>-->
                <!--                        <p class="Vazir price">12.500.000</p>-->
                <!--                    </a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a>-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/Mobile-Phone-Apple-iPhone-SE675e37.jpg">-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/exclusive-bluesliderscrool.png">-->
                <!--                        <p class="Vazir">گوشی هواوی</p>-->
                <!--                        <p class="Vazir price">12.500.000</p>-->
                <!--                    </a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a>-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/Mobile-Alcatel-OneTouch-Pixi-4007D979ecf.jpg">-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/exclusive-bluesliderscrool.png">-->
                <!--                        <p class="Vazir">گوشی هواوی</p>-->
                <!--                        <p class="Vazir price">12.500.000</p>-->
                <!--                    </a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a>-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/Hair-Trimmer-Moser-1400-0050222c60.jpg">-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/exclusive-bluesliderscrool.png">-->
                <!--                        <p class="Vazir">گوشی هواوی</p>-->
                <!--                        <p class="Vazir price">12.500.000</p>-->
                <!--                    </a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a>-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/Book-Ghoghnoos-Padidar-Shenasi-Moosighi5806e5.jpg">-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/exclusive-bluesliderscrool.png">-->
                <!--                        <p class="Vazir">گوشی هواوی</p>-->
                <!--                        <p class="Vazir price">12.500.000</p>-->
                <!--                    </a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a>-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/Book-Ghoghnoos-Padidar-Shenasi-Moosighi5806e5.jpg">-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/exclusive-bluesliderscrool.png">-->
                <!--                        <p class="Vazir">گوشی هواوی</p>-->
                <!--                        <p class="Vazir price">12.500.000</p>-->
                <!--                    </a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a>-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/Book-Ghoghnoos-Padidar-Shenasi-Moosighi5806e5.jpg">-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/exclusive-bluesliderscrool.png">-->
                <!--                        <p class="Vazir">گوشی هواوی</p>-->
                <!--                        <p class="Vazir price">12.500.000</p>-->
                <!--                    </a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a>-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/Book-Ghoghnoos-Padidar-Shenasi-Moosighi5806e5.jpg">-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/exclusive-bluesliderscrool.png">-->
                <!--                        <p class="Vazir">گوشی هواوی</p>-->
                <!--                        <p class="Vazir price">12.500.000</p>-->
                <!--                    </a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a>-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/Book-Ghoghnoos-Padidar-Shenasi-Moosighi5806e5.jpg">-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/exclusive-bluesliderscrool.png">-->
                <!--                        <p class="Vazir">گوشی هواوی</p>-->
                <!--                        <p class="Vazir price">12.500.000</p>-->
                <!--                    </a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a>-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/Book-Ghoghnoos-Padidar-Shenasi-Moosighi5806e5.jpg">-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/exclusive-bluesliderscrool.png">-->
                <!--                        <p class="Vazir">گوشی هواوی</p>-->
                <!--                        <p class="Vazir price">12.500.000</p>-->
                <!--                    </a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a>-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/Book-Ghoghnoos-Padidar-Shenasi-Moosighi5806e5.jpg">-->
                <!--                        <img src="http://127.0.0.1/digikalamvc/public/images/exclusive-bluesliderscrool.png">-->
                <!--                        <p class="Vazir">گوشی هواوی</p>-->
                <!--                        <p class="Vazir price">12.500.000</p>-->
                <!--                    </a>-->
                <!--                </li>-->
            </ul>
        </div>
        <div class="sliderscrol_next">
            <span class="nexticon"></span>
        </div>

    </div>
</div>
<script>
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

</script>