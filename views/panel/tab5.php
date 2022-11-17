<section>
<?php
    $comment=$data['comment'];
?>
    <table>

        <tr>
            <td>ردیف</td>
            <td>تاریخ</td>
            <td>کالا</td>
            <td>میپسندم </td>
            <td>مشاهده</td>
            <td>ویرایش</td>
            <td>حذف ظ</td>
        </tr>
        <?php
            $i=1;
            foreach ($comment as $row) {
                ?>
                <tr>
                    <td><?=$i?></td>
                    <td><?=$row['tarikh']?></td>
                    <td><?=$row['producttitle']?></td>
                    <td><?=$row['likecount']?></td>
                    <td>
                        <a href="http://127.0.0.1/digikalamvc/product/index/<?=$row['idproduct']?>/nazar#comment<?=$row['id']?>">
                        <img src="http://127.0.0.1/digikalamvc/public/images/edit.png">
                        </a>
                    </td>
                    <td>
                       <a href="http://127.0.0.1/digikalamvc/addcomment/index/<?=$row['idproduct']?>">
                           <img src="http://127.0.0.1/digikalamvc/public/images/edit.png">
                       </a>
                    </td>
                    <td>
                        <img onclick="deletecomment(<?=$row['id']?>,this)" src="http://127.0.0.1/digikalamvc/public/images/cancel-button.png">
                    </td>
                </tr>
                <?php
                $i++;
            }
        ?>
    </table>
</section>
<script>
    function deletecomment(commentid,tag) {
        var imgtag=$(tag);
        var parent=imgtag.parents('tr');
        var url='http://127.0.0.1/digikalamvc/panel/deleteComment/'+commentid;
        var data={};
        $.post(url,data,function (msg) {
            parent.remove();
        });


    }
</script>