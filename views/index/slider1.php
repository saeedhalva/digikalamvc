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
    #slider{
        height: 310px;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0,0,0,.3);
        background: white;
        position: relative;
        cursor: pointer;
    }
    #slider_img{
        height: 260px;
    }
    #slider_img img{
        height: 260px;
        width: 100%;
        display: none;
    }
    #slider_navigator{
        height: 50px;
        background: rgba(0,0,0,.5);
    }
    #prev{
        width: 20px;
        height: 25px;
        position: absolute;
        top: 150px;
        right: 5px;
        background: url(http://127.0.0.1/digikalamvc/public/images/right-chevron.png)no-repeat;
        display: block;
        z-index: 3;
    }
    #next{
        width: 20px;
        height: 25px;
        position: absolute;
        top: 150px;
        left: 5px;
        background: url(http://127.0.0.1/digikalamvc/public/images/left-arrow.png)no-repeat;
        display: block;
        z-index: 3;
    }
    #slider #slider_navigator ul li{
        width: 178px;
        height: 100%;
        line-height: 50px;
        text-align: center;
        float: right;
    }
    #slider #slider_navigator ul{
        height: 100%;
        padding: 0;
    }
    #slider #slider_navigator ul li a{
        display: block;
        width: 100%;
        height: 100%;
        color: white;
        position: relative;
    }
    #slider #slider_navigator .activee > a{
        background: white;
        color: red;
    }
    #slider #slider_navigator .activee > a::after{
        content: "";
        width: 0;
        height: 0;
        top: -19px;
        right: 0;
        left: 0;
        margin: auto;
        position: absolute;
        border-style: solid;
        border-width: 0 15px 20px 15px;
        border-color: transparent transparent #ffffff transparent;
    }
</style>

<div id="slider">
    <span id="next"></span>
    <span id="prev"></span>
    <div id="slider_img">
        <?php
        $slider1=$data[0];
            foreach ($slider1 as $slider) {


                ?>
                        <a href="<?= $slider['link']?>">
                            <img src="<?php $slider['img']?>">
                        </a>
                <?php
            }
        ?>
    </div>
    <div id="slider_navigator">
        <ul class="Vazir fontsm">


                <?php
                foreach ($slider1 as $name) {
                    ?>
                    <li>
                    <a class="active">
                       <?=$name['productname']?>
                    </a>
                </li>
                    <?php
                }?>
        </ul>
    </div>
</div>
<script>

</script>
