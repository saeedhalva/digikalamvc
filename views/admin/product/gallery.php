<style>
    table.list{
        width: 100%;
    }
    table.list td{
        padding: 4px;
        font-size: 11pt;
        border: 1px solid #eee;
    }
    .btn_green{
        background: #1fbe14;
    }
</style>


<div id="main">
    <?php
    require('views/admin/layout.php');
    $gallery=$data['gallery'];
    $productInfo=$data['productInfo'];
    ?>
    <div class="left">
        <form id="addgallery" action="http://127.0.0.1/digikalamvc/adminproduct/gallery/<?=$productInfo['id']?>" enctype="multipart/form-data" method="post">
            <div class="row">
                <span class="span_title">انتحاب تصویر</span>
                <input type="file" name="image">
                <a class="btn_green" onclick="submitForm2()">افزودن تصویر</a>
            </div>
        </form>

        <form action="">
            <table class="list">
                <tr>

                    <td>
                        ردیف
                    </td>
                    <td>
                        تصویر
                    </td>

                </tr>

                <?php
                    $i=1;
                foreach ($gallery as $row) {

                    ?>
                    <tr>
                        <td>
                            <?= $i ?>
                        </td>
                        <td>
                            <img style="width: 100px;height: 100px" src="http://127.0.0.1/digikalamvc/public/images/products/<?=$row['idproduct']?>/gallery/large/<?= $row['img']?>">
                        </td>
                        <td>

                        </td>

                    </tr>
                    <?php
                    $i++;
                }
                ?>


            </table>
        </form>
    </div>
</div>
<script>
    function submitForm2(){
    $('#addgallery').submit();
    }

</script>


