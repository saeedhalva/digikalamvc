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
    $category=[];
    if (isset($data['category'])){
        $category=$data['category'];
    }
    $allcategory=[];
    if (isset($data['allcategory'])){
        $allcategory=$data['allcategory'];
    }


    $categoryInfo=[];
    if (isset($data['categoryInfo'])) {
        $categoryInfo = $data['categoryInfo'];
    }
    $parents=[];
    if (isset($data['parents'])) {
        $parents=$data['parents'];
        $parents = array_reverse($parents);
    }
    ?>
    <div class="left">
        <a href="http://127.0.0.1/digikalamvc/admincategory/maincategory">
            مشاهده دسته های اصلی
        </a>
        <p class="title">
            مدیریت دسته ها
            (
            <?php
                foreach ($parents as $row) { ?>
                    <a href="http://127.0.0.1/digikalamvc/admincategory/showchildren/<?=$row['id']?>">
                    <?=$row['title']?></a>-
                    <?php
                }
            ?>

                <?php
                    if (isset($categoryInfo['title'])){
                         echo $categoryInfo['title'];
                    }
                    else{}
                ?>
            </a>

            )
        </p>
        <button class="btngreen">

            <a href="http://127.0.0.1/digikalamvc/admincategory/addcategory/<?=$categoryInfo['id']?>">افزودن دسته</a>


        </button>
        <table class="list">
            <tr>
                <td>
                    ردیف
                </td>
                <td>
                    عنوان دسته
                </td>
                <td>
                    مشاهده کردن زیر دسته ها
                </td>
                <td>
                    انتخاب
                </td>
            </tr>

            <?php
            if (isset($category)) {
                foreach ($category as $row) {

                    ?>
                    <tr>
                        <td>
                            <?= $row['id'] ?>
                        </td>
                        <td>
                            <?= $row['title'] ?>
                        </td>
                        <td>
                            <a href="http://127.0.0.1/digikalamvc/admincategory/showchildren/<?= $row['id']; ?>">مشاهده
                                زیر دسته ها</a>
                        </td>
                        <td>
                            <input type="checkbox">
                        </td>
                    </tr>
                    <?php
                }
            }
            if (isset($allcategory)){
                foreach ($allcategory as $row) {

                    ?>
                    <tr>
                        <td>
                            <?= $row['id'] ?>
                        </td>
                        <td>
                            <?= $row['title'] ?>
                        </td>
                        <td>
                            <a href="http://127.0.0.1/digikalamvc/admincategory/showchildren/<?= $row['id']; ?>">مشاهده
                                زیر دسته ها</a>
                        </td>
                        <td>
                            <input type="checkbox">
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>


        </table>
    </div>
</div>


