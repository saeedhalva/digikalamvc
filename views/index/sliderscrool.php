<style>
    .sliderscrol{
        width:890px ;
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
        width: 780px;
        height: 100%;
        float: right;
        overflow: hidden;
    }
    .sliderscrol_next{
        width: 55px;
        height: 100%;
        float: right;
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
        width:780px;


    }
    .sliderscrol .sliderscrol_main li{
        width: 195px;
        height: 100%;
        float: right;


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
                $result=$data[2];
                    foreach ($result as $row) {


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