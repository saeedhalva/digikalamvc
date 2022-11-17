 <style>
    #tab{
        width: 1200px;
        margin-top: 20px;
        padding: 0;
        background: #f5f6f7;
        float: right;


    }
    #tab li{
        float: right;
        padding: 15px;
        font-size: 11.5pt;
        font-family: Vazir;
        border-left: 1px solid #eee;

    }
    #tab li.active{
        background: white;
        box-shadow: 0 0 4px rgba(0,0,0,.2);
        border-top: 2px solid blue;
    }
    #tabchilds {
        width: 1184px;
        float: right;
        direction: rtl;
        background: white;
    }
    section{
        padding: 10px 10px 20px;
        font-family: Vazir;
        font-size: 12pt;
        display: none;
        float: right;
        width: 98%;
        background: white;

    }
    .item h4{
        font-size: 13.5pt;
        font-family: Vazir;
        position: relative;
        margin: 0;
        padding:5px 0 ;
        padding-right: 40px;
    }
     .item h4::after{
         width: 1120px;
         height: 1px;
         position: absolute;
         background: #eee;
         top: 21px;
         content: "";
         left: 0px;

     }
     .avvali{
        display: block;
    }
    #tabchilds .item:first-child h4 i{
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -153px -615px;
        width: 31px;
        height: 44px;
        display: block;
        position: absolute;
        right: -16px;
        top: -4px;
    }
    #tabchilds .item:first-child h4.active i{
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -98px -615px;

    }
    #tabchilds .item:last-child h4 i{
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -313px -615px;
        width: 31px;
        height: 44px;
        display: block;
        position: absolute;
        right: -17px;
        top: 15px;


    }
    #tabchilds .item:last-child h4.active i{
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -207px -606px;
    }
    #tabchilds .item h4 i{
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -259px -606px;
        width: 31px;
        height: 56px;
        display: block;
        position: absolute;
        right: -17px;

    }
    #tabchilds .item h4.active i{
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -207px -606px;

    }
    #tabchilds .item{
        padding: 0;
    }
    .itemcontiner{
        margin-right: 20px;
        border-right: 3px solid #f0f1f2;
    }
    #tabchilds .item h4 span{
        z-index: 2;
        position: relative;
        background: white;

    }
    #tabchilds .item  p {
        padding-right: 20px;
    }
    #tabchilds .item  img {
        padding-right: 20px;
    }
    .itemcontiner .item .description{
        display: none;
    }

    #tabchilds .item h4::after {

        width: 1100px;
        height: 1px;
        position: absolute;
        background: #eee;
        top: 21px;
        left: 35px;
        content: "";
    }


</style>
<ul id="tab">
    <li class="active naghd">نقد و بررسی تخصصی</li>
    <li class="fanni">مشخصات فنی</li>
    <li  class="nazar">نظرات کاربران</li>
    <li>پرسش و پاسخ</li>
</ul>

 <section class="avvali">
     <?php
     require ('tab1.php');
     ?>
 </section>
 <section class="sectionfanni"></section>
 <section></section>
 <section id="qustions"></section>

<?php
   //  require ('tab1.php');
////        require ('tab2.php');
////        require ('tab3.php');
////        require ('tab4.php');
//    ?>


<script>

    //$('section').eq(0).fadein(0);

    $('#tab li').click(function () {
        changetab($(this));
        //$('#tab li').removeClass('active');
        //$(this).addClass('active');
        //$(' section').fadeOut(0);
        //var index=$(this).index();
        //    var selected=$(' section').eq(index);
        //    <?php
        //        $index=0;
        //    ?>
        //    var url='<?//=url?>///product/tab/<?//=$productInfo['id']?>///<?//=$productInfo['idcategory']?>//';
        //    var data={'number':index};
        //    $.post(url,data,function (msg,status) {
        //        selected.html(msg);
        //       // alert(status);
        //
        //    });
        //    selected.fadeIn(0);
    });
    
    function changetab(tag) {
        $('#tab li').removeClass('active');
        tag.addClass('active');
        $(' section').fadeOut(0);
        var index=tag.index();
        var selected=$(' section').eq(index);
        <?php
        $index=0;
        ?>
        var url='<?=url?>/product/tab/<?=$productInfo['id']?>/<?=$productInfo['idcategory']?>';
        var data={'number':index};
        $.post(url,data,function (msg,status) {
            selected.html(msg);
            // alert(status);

        });
        selected.fadeIn(0);
    }




</script>
<!-- --><?php
// //echo $sta;
// if ($index==0)
// require ('tab1.php');
// else{
//
// }

 ?>


