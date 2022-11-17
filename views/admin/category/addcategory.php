<style>
    table.list{
        width: 100%;
    }
    table.list td{
        padding: 4px;
        font-size: 11pt;
        border: 1px solid #eee;
    }
    .spantitle{
        width: 150px;
        display: inline-block;
    }

</style>


<div id="main">
    <?php
    require('views/admin/layout.php');
    ?>
    <form action="http://127.0.0.1/digikalamvc/admincategory/addcategory"method="post">
    <div class="row">
        <span class="spantitle">نام دسته را وارد کنید</span>
        <input type="text"name="title">
        <button>submit</button>

    </div>
        <div class="row">
            <span class="spantitle"> دسته والد را انتخاب کنید</span>
            <select name="parent" autocomplete="off">

                <option>انتخاب کنید</option>
                <?php
                    $category=$data['category'];
                    $parentId=$data['parentId'];






                    foreach ($category as $row) {


                        if ($row['id']==$parentId){
                            $x='selected';

                        }
                        else{
                            $x='';
                        }
                        ?>

                        <option value="<?= $row['id'];?>" <?=$x?>>

                            <?=$row['title'];?>


                        </option>


                        <?php
                    }
                    ?>


            </select>


        </div>
    </form>


</div>


