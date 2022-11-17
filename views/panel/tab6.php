<section class="digibon">
    <div id="adddigibon">
        <span>کد دریافت دیجی بن</span>
        <input>
        <img src=http://127.0.0.1/digikalamvc/public/images/folder.png>
    </div>

    <table>
        <?php
            $code=$data['code'];
        ?>

        <tr>
            <td>ردیف</td>
            <td>کد</td>
            <td>سفارش</td>
            <td>شرح </td>
            <td>تاریخ ثبت</td>
            <td>تاریخ انقضا</td>
            <td>اعتبار اولیه</td>
            <td>اعتبار مصرفی</td>
            <td>اعتبار مانده</td>
            <td>وضعیت</td>
            <td>جزئیات</td>
        </tr>
        <?php
        $i=1;
            foreach ($code as $row) {
                ?>
                <tr>
                    <td><?=$i?></td>
                    <td><?=$row['code']?></td>
                    <td>سفارش</td>
                    <td>شرح</td>
                    <td>تاریخ ثبت</td>
                    <td>تاریخ انقضا</td>
                    <td><?=$row['max']?></td>
                    <td><?=$row['used']?></td>
                    <td><?=$row['used']?></td>
                    <td>وضعیت</td>
                    <td><img src="http://127.0.0.1/digikalamvc/public/images/down-arrow.png"
                             onclick="showdetailstr(this)"></td>
                </tr>
                <tr>
                    <td colspan="11">
                        <div class="sub">
                            <table cellspacing="0">
                                <tr>
                                    <td>سفارش</td>
                                    <td>نوع</td>
                                    <td>تاریخ</td>
                                    <td>اعتبار مصرفی</td>
                                </tr>
                                <?php
                                $orders=$row['orders'];
                                foreach ($orders as $row2) {
                                    ?>
                                    <tr>
                                        <td>سفارش</td>
                                        <td>نوع</td>
                                        <td><?=$row2['tarikh']?></td>
                                        <td>اعتبار مصرفی</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </table>
                        </div>
                    </td>
                </tr>
                <?php
                $i++;
            }
        ?>
    </table>
</section>