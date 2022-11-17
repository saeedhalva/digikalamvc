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
    $naghd=$data['naghd'];
    $productInfo=$data['productInfo'];
    ?>
    <div class="left">

        <button class="btngreen">

            <a href="http://127.0.0.1/digikalamvc/adminproduct/addnaghd/<?=$productInfo['id']?>">افزودن نقد</a>


        </button>
        <button class="btngreen">

            <a href="http://127.0.0.1/digikalamvc/adminproduct/addproduct">افزودن حذف</a>


        </button>
        <span>مدیریت نقد وبررسی برای محصول
            <?=$productInfo['title']?>
        </span>
        <form action="">
            <table class="list">
                <tr>

                    <td>
                        عنوان
                    </td>

                    <td>
                        ویرایش
                    </td>

                    <td>
                        انتخاب
                    </td>
                </tr>

                <?php

                foreach ($naghd as $row) {

                    ?>
                    <tr>

                        <td>
                            <?= $row['title'] ?>
                        </td>

                        <td>
                            <a href="http://127.0.0.1/digikalamvc/adminproduct/addnaghd/<?= $row['idproduct']?>/<?= $row['id']?>">ویرایش</a>
                        </td>

                    </tr>
                    <?php
                }
                ?>


            </table>
        </form>
    </div>
</div>


