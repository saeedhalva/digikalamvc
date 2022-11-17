<style>
    #tabchilds section:first-child{
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

        width: 1120px;
        height: 1px;
        position: absolute;
        background: #eee;
        top: 21px;
        content: "";
        left: 0px;


    }
</style>
<div id="tabchilds">

        <div class="itemcontiner">

                <?php


                    //$naghd=$data[0];
                if (isset($naghd)){
                   //echo "kjhdkjhdkjhdkjhdjkh";
                    // print_r($naghd);
                    foreach ($naghd as $row) {

                        ?>


                        <div class="item">
                            <h4>
                                <i></i>
                                <span><?=$row['title']?></span>

                            </h4>
                            <div class="description">
                                <p><?=$row['description']?></p>

                            </div>


                        </div>
                        <?php
                    }
                }
                else{
                    $naghd=$data[0];
                    foreach ($naghd as $row) {

                        ?>


                        <div class="item">
                            <h4>
                                <i></i>
                                <span><?=$row['title']?></span>

                            </h4>
                            <div class="description">
                                <p><?=$row['description']?></p>

                            </div>


                        </div>
                        <?php
                    }
                }

            ?>



<!--            <div class="item">-->
<!--                <h4>-->
<!--                    <i></i>-->
<!--                    <span>نمایشگر</span>-->
<!--                </h4>-->
<!--                <div  class="description">-->
<!--                    <p>abcdefu</p>-->
<!--                    <p>abcdefu</p>-->
<!--                    <p>abcdefu</p>-->
<!--                    <p>abcdefu</p>-->
<!--                    <p>abcdefu</p>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="item">-->
<!--                <h4>-->
<!--                    <i></i>-->
<!--                    <span> سخت افزار و باتری</span>-->
<!--                </h4>-->
<!--                <div class="description">-->
<!--                    <p>abcdefu</p>-->
<!--                    <p>abcdefu</p>-->
<!--                    <p>abcdefu</p>-->
<!--                    <p>abcdefu</p>-->
<!--                    <p>abcdefu</p>-->
<!--                </div>-->
<!--            </div>-->
        </div>

    <script>
    $('.itemcontiner .item h4').click(function () {

    var item=$(this).parents('.item');

    $(this).toggleClass('active');

    $('.description',item).slideToggle(200);

    });
    </script>