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
    <button>
        <a onclick="submitformmulti()">
            اجرای عملیات
        </a>
    </button>
    <select class="selecttag" name="action">
        <option value="1">انتشار</option>
        <option value="2">عدم انتشار</option>
        <option value="3">حذف</option>
    </select>
    <?php
    require('views/admin/layout.php');
    $comments=$data['comment'];
    ?>
    <div class="left">
        <a>مدیریت نظرات</a>
        <form action="" method="post">
            <table class="list">
                <tr>
                    <td>
                        کد
                    </td>
                    <td>
                        عنوان
                    </td>
                    <td>
                        متن
                    </td>
                    <td>
                        قوت
                    </td>
                    <td>
                        ضعف
                    </td>
                    <td>
                        وضعیت
                    </td>
                    <td>
                        ویرایش
                    </td>
                    <td>
                        حذف
                    </td>
                </tr>

                <?php

                foreach ($comments as $row) {

                    ?>
                    <tr>
                        <td>
                            <?= $row['id'] ?>
                        </td>
                        <td>
                            <input name="title<?=$row['id']?>" value="<?= $row['title'] ?>">

                        </td>
                        <td>
                            <textarea name="matn<?=$row['id']?>"> <?= $row['matn']?></textarea>
                        </td>
                        <td>
                            <input name="posotive<?=$row['id']?>" value="<?= $row['positive'] ?>">
                        </td>
                        <td>
                            <input name="negative<?=$row['id']?>" value="<?= $row['negative'] ?>">
                        </td>
                        <td>
                            <?php
                                if ($row['confirm']==1){
                                    echo "تایید شده";
                                }else{
                                    echo "تایید نشده";
                                }
                            ?>
                        </td>
                        <td>
                            <a href="http://127.0.0.1/digikalamvc/adminproduct/addproduct/<?= $row['id'] ?>">ویرایش</a>
                        </td>
                        <td>
                            <a href="http://127.0.0.1/digikalamvc/adminproduct/addproduct/<?= $row['id'] ?>">جذف</a>
                        </td>
                        <td>
                            <input type="checkbox" name="id[]" value="<?=$row['id']?>">
                        </td>
                    </tr>
                    <?php
                }
                ?>


            </table>
        </form>
    </div>
</div>
<script>
    function submitformmulti() {
        var actionselected=$('.selecttag option:selected').val();
        var action="";
        if (actionselected==1){
            action="admincomment/confirm";
        }
        if (actionselected==2){
            action="admincomment/unconfirm";
        }
        if (actionselected==3){
            action="admincomment/delete";
        }
        $('form').attr('action',action);
        $('form').submit();
        
    }
</script>


