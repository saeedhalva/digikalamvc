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
    $option=Model::getoption();
   ?>
    <form action="http://127.0.0.1/digikalamvc/adminproduct/addproduct/<?=@$productInfo['id']?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <span class="spantitle">تعداد محصولات در اسلایدر ها</span>
            <input type="text" name="limit_slider" value="<?=$option['limit_sliders']?>" >

        <button>submit</button>
</div>
        <div class="row">
            <span class="spantitle">شماره های تماس</span>
            <input type="text" name="tell" value="<?=$option['tel']?>" >

            <button>submit</button>
        </div>
        <div class="row">
            <span class="spantitle">ایمیل</span>
            <input type="text" name="email" value="<?=$option['email']?>" >

            <button>submit</button>
        </div>
</form>


</div>

<script>

</script>


