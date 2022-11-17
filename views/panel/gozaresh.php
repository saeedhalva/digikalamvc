<?php
    $stat=$data['stat'];
?>
<div class="box">
    <div class="header">گزارش عملکرد</div>
    <div class="content">
        <table>
            <tr>
                <td>
                    <span class="title">تعداد کل سفارشات:</span>
                    <span class="value"><?=$stat['order_number']?></span>
                </td>
                <td>
                    <span class="title">تعداد کل دیجی بن دریافتی:</span>
                    <span class="value">سعید حلوائی</span>
                </td>
                <td>
                    <span class="title">تعداد نظرات ارسال شده:</span>
                    <span class="value"><?=$stat['tedad_comment']?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="title">تعداد سفارشات در انتظار:</span>
                    <span class="value">سعید حلوائی</span>
                </td>
                <td>
                    <span class="title">دیجی بن مصرفی:</span>
                    <span class="value">سعید حلوائی</span>
                </td>
                <td>
                    <span class="title">تعداد نقد:</span>
                    <span class="value">سعید حلوائی</span>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="title">سفارشات در حال پردازش:</span>
                    <span class="value"><?=$stat['order_taeed_number']?></span>
                </td>
                <td>
                    <span class="title">دیجی بن باطل شده:</span>
                    <span class="value">سعید حلوائی</span>
                </td>
                <td>
                    <span class="title">پیغام ها:</span>
                    <span class="value"><?=$stat['tedad_message']?></span>
                </td>
            </tr>

        </table>
    </div>
</div>