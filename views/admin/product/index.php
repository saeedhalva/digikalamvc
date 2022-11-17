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
    $products=$data['product'];
    ?>
    <div class="left">

        <button class="btngreen">

            <a href="http://127.0.0.1/digikalamvc/adminproduct/addproduct">افزودن محصول</a>


        </button>
        <form action="">
        <table class="list">
            <tr>
                <td>
                    کد
                </td>
                <td>
                    عنوان
                </td>
                <td>
                   قیمت
                </td>
                <td>
                    تخفیف
                </td>
                <td>
                    ویرایش
                </td>
                <td>
                    نقد
                </td>
                <td>
                    گالری
                </td>
                <td>
                    انتخاب
                </td>
            </tr>

            <?php

                foreach ($products as $row) {

                    ?>
                    <tr>
                        <td>
                            <?= $row['id'] ?>
                        </td>
                        <td>
                            <?= $row['title'] ?>
                        </td>
                        <td>
                            <?= $row['price'] ?>
                        </td>
                        <td>
                            <?= $row['discount'] ?>
                        </td>
                        <td>
                            <a href="http://127.0.0.1/digikalamvc/adminproduct/addproduct/<?= $row['id'] ?>">ویرایش</a>
                        </td>
                        <td>
                            <a href="http://127.0.0.1/digikalamvc/adminproduct/naghd/<?= $row['id'] ?>">نقد و بررسی</a>
                        </td>
                        <td>
                            <a href="http://127.0.0.1/digikalamvc/adminproduct/gallery/<?= $row['id'] ?>">گالری تصاویر</a>
                        </td>
                    </tr>
                    <?php
                }
            ?>


        </table>
        </form>
    </div>
</div>


