<head>
    <script src="http://127.0.0.1/digikalamvc/public/js/jquery-3.6.0.min.js"></script>

</head>
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
    textarea{
        width: 500px;
        border: 1px solid #eee;
        height: 250px;
        vertical-align: top;
    }
    .span_item{
        display: block;
        padding: 3px 4px;
        height: 55px ;
        width:55px ;
        background: #bc0084;
        color: white;
        text-align: center;
        position: relative;
        float: right;

    }

</style>


<div id="main">
    <?php
    require('views/admin/layout.php');
    @$productInfo=$data['productInfo'];
    @$naghdInfo=$data['naghdInfo'];
    $edit=0;
//    if (isset($productInfo['title'])){
//        $edit=1;
//    }
    if (isset($naghdInfo['title'])){
        $edit=1;
    }
    ?>
    ?>

    <span>مدیریت نقد وبررسی برای محصول
        <?=$productInfo['title']?>
        </span>
    <form action="http://127.0.0.1/digikalamvc/adminproduct/addnaghd/<?=@$productInfo['id']?>//<?=@$naghdInfo['id']?>" method="post">
        <div class="row">
            <span class="spantitle">عنوان نقد را وارد کنید</span>
            <input type="text" name="title" value="<?=$naghdInfo['title']?>" >
        </div>


        <div class="row">
            <span class="spantitle">معرفی اجمالی</span>
            <textarea class="editor" id="editor" name="description"><?=$naghdInfo['description']?></textarea>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>



        <button>submit</button>
</div>
</form>


</div>




