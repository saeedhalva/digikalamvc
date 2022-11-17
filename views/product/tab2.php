<style>
     h4{
        font-size: 13pt;
        font-family: Vazir;
         text-align: right;
    }
     .row{
        width: 100%;
        float: right;
    }
     .row .right{
        width: 230px;
        float: right;
        background: #efefef;
        font-family: Vazir;
        font-size: 10pt;
        padding: 5px;
        margin-left: 25px;
        border-radius: 4px;
        margin-bottom: 10px;
         text-align: center;
    }
     .left{
        width: 880px;
        float: left;
        background: #f7f9fa;
        font-family: Vazir;
        font-size: 10pt;
        padding: 5px;
        border-radius: 4px;
        margin-left: -10px;
         text-align: right;


    }
</style>



<?php
    $fanni=$data[0];
   // print_r($naghd);
    foreach ($fanni as $attr_parent){
        $children=$attr_parent['children']
    ?>
    <h4><?=$attr_parent['title']?></h4>
        <?php foreach ($children as $child)
        {
            ?>
    <div class="row">
        <div class="right"><?=$child['title']?></div>
        <div class="left"><?=$child['value']?></div>
    </div>
            <?php
        }
        ?>
<?php
    }
?>
<!--    <div class="row">-->
<!--        <div class="right">وزن</div>-->
<!--        <div class="left">200گرم</div>-->
<!--    </div>-->





<!--    <h4>مشخصات فیزیکی</h4>-->
<!--    <div class="row">-->
<!--        <div class="right">ابعاد</div>-->
<!--        <div class="left">   200میلیمتر </div>-->
<!--    </div>-->
