<style>
    .direct_acsess{
        width: 283px;
        height: 190px;
        display: block;
        float: right;
        background: white;
        border-radius: 4px;
        overflow: hidden;
        margin-right: 20px;
        box-shadow: 1px 2px #cccccc;
        margin-top: 10px;
    }

    .direct_acsess2{
        width: 590px;
        height: 190px;
        display: block;
        float: right;
        background: white;
        border-radius: 4px;
        overflow: hidden;
        margin-right: 10px;
        box-shadow: 1px 2px #cccccc;
        margin-top: 10px;
    }
    .direct_acsess3{
        width: 290px;
        height: 190px;
        display: block;
        float: right;
        background: white;
        border-radius: 4px;
        overflow: hidden;
        margin-left: 10px;
        box-shadow: 1px 2px #cccccc;
        margin-top: 10px;
    }
</style>
<?php
$directaccsess=$data[3];

    $a=0;

    foreach ($directaccsess as $row) {


        ?>
        <a class="direct_acsess">
            <img src="http://127.0.0.1/digikalamvc/public/images/<?= $row['img']?>">
        </a>

        <?php
    }
?>

<!--<a class="direct_acsess2">-->
<!--    <img src="http://127.0.0.1/digikalamvc/public/images/">-->
<!--</a>-->
<!--<a class="direct_acsess">-->
<!--    <img src="http://127.0.0.1/digikalamvc/public/images/tv.jpg">-->
<!--</a>-->
<!---->
<!--<a class="direct_acsess2">-->
<!--    <img src="http://127.0.0.1/digikalamvc/public/images/slidertop5.jpg">-->
<!--</a>-->