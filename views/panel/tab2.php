<section class="myorders">
<?php
    $order=$data['order'];
?>
    <table cellspacing="0">

        <tr>
            <td>ردیف</td>
            <td>کد</td>
            <td>تاریخ</td>
            <td>مبلغ کل</td>
            <td>وضعیت</td>
            <td>عملیات پرداخت</td>
            <td>نوع</td>
            <td>جزییات</td>
        </tr>
<?php
    $i=1;
    foreach ($order as $row){
?>
        <tr>
            <td><?=$i?></td>
            <td><?=$row['id']?></td>
            <td><?=$row['tarikh']?></td>
            <td><?=number_format($row['gheymat'])?></td>
            <td><?=$row['title']?></td>
            <td>پرداخت</td>
            <td>سفارش</td>
            <td>
                <img src="http://127.0.0.1/digikalamvc/public/images/down-arrow.png" onclick="showdetailstr(this)">
            </td>
        </tr>
        <tr class="details">

            <td colspan="8">
                <div class="subtable">
                    <table cellspacing="0">
                        <tr>
                            <td>کالا</td>
                            <td>تعداد</td>
                            <td>قیمت واحد</td>
                            <td>قیمت کل</td>
                            <td>تخفیف کل</td>
                            <td>مبلغ کل</td>
                        </tr>
                        <?php
                        $basket=unserialize($row['basket']);
                        foreach ($basket as $row2){
                        ?>
                        <tr>
                            <td><?=$row2['title']?></td>
                            <td><?=$row2['tedad']?></td>
                            <td><?=$row2['price']?></td>
                            <td><?=$row2['price']*$row2['tedad']?></td>
                            <td><?=$row2['discountTotal']?></td>
                            <td><?=$row2['price']?></td>
                        </tr>
                            <?php
                        }
                        ?>
                    </table>
                    <h4>
                        رهگیری سفارش
                    </h4>
                    <div class="ordersteps">
                        <div class="dashed">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <ul>
                            <li>
                                <span class="circle"></span>
                                <span class="title">تایید سفارش</span>
                                <span class="line"></span>
                            </li>
                            <li>
                                <span class="circle"></span>
                                <span class="title">پرداخت</span>
                                <span class="line"></span>
                            </li>
                            <li>
                                <span class="circle"></span>
                                <span class="title">آماده ارسال</span>
                                <span class="line"></span>
                            </li>
                            <li class="active">
                                <span class="circle"></span>
                                <span class="title">تحویل شده</span>
                                <span class="line"></span>
                            </li>
                            <li class="active">
                                <span class="circle"></span>
                                <span class="title">تایید سفارش</span>
                            </li>
                        </ul>
                        <div class="dashed">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="more">
                        <table cellspacing="0">
                            <tr>
                                <td>روش ارسل
                                </td>
                                <td>زمان ارسال بازه: تاریخ:</td>
                                <td>کد مرسوله:نامشخص</td>
                            </tr>
                            <tr>
                                <td><?=$row['address']?></td>
                                <td>تحویل گیرنده:<?=$row['family']?></td>
                                <td>شماره تماس:<?=$row['mobile']?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </td>
        </tr>
        <?php
            $i++;
            }
        ?>


    </table>


</section>