<section>
<?php
    $message=$data['message'];
?>
    <table cellspacing="0">
<?php
    $i=1;
    foreach ($message as $row) {
        ?>
        <tr>
            <td>ردیف</td>
            <td>کد</td>
            <td>تاریخ</td>
            <td>عنوان</td>
            <td>متن</td>
            <td>وضعیت</td>
        </tr>
        <tr>
            <td><?=$i?></td>
            <td><?=$row['id']?></td>
            <td><?=$row['tarikh']?></td>
            <td><?=$row['title']?></td>
            <td><?=$row['matn']?></td>
            <?php
                if ($row['status']==0){
                    $st="خوانده نشده";
                }else{
                    $st="خوانده شده";
                }
            ?>
            <td><?=$st?></td>
        </tr>
        <?php
            $i++;
            }
        ?>
    </table>
</section>