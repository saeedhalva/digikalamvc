<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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
        width: 1150px;
        padding: 25px;
        margin: 10px auto;
        background-color: white;
    }








    #content{
        width: 880px;
        float: left;
    }

    .filterul{
        padding-right: 5px;
        font-family: Vazir;
    }

    .filterul li{
        font-family: Vazir;
        font-size: 10pt;
    }
    .filterul .title{
        font-size: 12pt;
    }
    .productcollor{
        width:4px ;
        height:12px ;
        display:inline-block;
        position: relative;
        right: 27px;
    }
    #main::after{
        content:"";
        clear: both;
        display: block;
    }


    #filtersselected{
        width: 100%;
        direction: rtl;

    }
    #filtersselected i{
        width: 15px;
        height: 15px;
        background: url("http://127.0.0.1/digikalamvc/public/images/lock.png");
        display: inline-block;
    }
    .filterselectedspan{
        background: #eee;
        font-size: 9.5pt;
        font-family: Vazir;
        margin-left: 10px;
        border-radius: 2px;
    }

    .faghatmojood{
        float: right
    }
    .displaytype{
        float: left;
        display: inline-block;
    }
    .type1,.type2{
        width: 24px;
        height: 24px;
        background: url(http://127.0.0.1/digikalamvc/public/images/lock.png) no-repeat;
        display: block;
        float: left;
    }
    #sort{
        float: right;
        width: 100%;
        text-align: right;
        margin-top: 13px;
    }
    #pagination{
        float: right;
        width: 100%;
        text-align: left;

    }
    #pagination .prev{
        font-family: Vazir;
        float: left;
    }
    #pagination .next{
        font-family: Vazir;
        float: left;
    }
    #pagination ul{
        padding: 0;
        float: left;
    }
    #pagination ul li{
        float: right;
        font-family: Vazir;
        margin-right:2px ;
        margin-left: 2px ;
    }



</style>

<div id="main">
<?php
    require ('sidebar.php');
?>

    <div id="content">

       <?php
           require ('pagenavigator.php');
       ?>
        <div id="filtersselected">


        </div>
        <?php
        require ('filter_top.php');
        ?>



        <div class="horizontalrow"></div>
        <?php
            require ('search.php');
        ?>
        <div id="sort">
            <span class="Vazir">مرتب سازی بر اساس</span>
            <select>
                <option>پربازدیدترین</option>
                <option>جدیدترین</option>
                <option>پیشنهاد ویژه</option>
                <option>پرفروشترین</option>
                <option>قیمت</option>
            </select>
            <select>
                <option>سعئدی</option>
                <option>نزولی</option>
            </select>

            <select>
                <option>24</option>
                <option>36</option>
                <option>48</option>
            </select>
            <span class="Vazir">تعداد نمایش</span>
        </div>
        <div id="pagination">
            <span class="next">صفحهی یعد</span>

            <ul>
                <li>1</li>
                <li>2</li>
            </ul>
            <span class="prev">صفحه ی قبل</span>
        </div>

        <?php
            require ('products.php');
        ?>

    </div>

</div>


<script>


</script>

</body>
</html>