<style>
    table.list{
        width: 100%;
    }
    table.list td{
        padding: 4px;
        font-size: 11pt;
        border: 1px solid #eee;
    }

</style>


<div id="main">
    <?php
    require('views/admin/layout.php');
    $orders=$data['orders'];
    ?>
    <div class="left">
            <a>مدیریت سفارشات</a>
        <form action="">
            <table class="list">
                <tr>
                    <td>
                        کد
                    </td>
                    <td>
                        تحویل گیرنده
                    </td>
                    <td>
                        مبلغ
                    </td>
                    <td>
                        تاریخ
                    </td>
                    <td>
                        ویرایش
                    </td>
                </tr>

                <?php

                foreach ($orders as $row) {

                    ?>
                    <tr>
                        <td>
                            <?= $row['id'] ?>
                        </td>
                        <td>
                            <?= $row['family'] ?>
                        </td>
                        <td>
                            <?= $row['gheymat'] ?>
                        </td>
                        <td>
                            <?= $row['tarikh'] ?>
                        </td>
                        <td>
                            <a href="http://127.0.0.1/digikalamvc/adminproduct/addproduct/<?= $row['id'] ?>">ویرایش</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>


            </table>
        </form>
    </div>
</div>


