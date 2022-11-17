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
    $edit=0;
    if (isset($productInfo['title'])){
        $edit=1;
    }
    ?>
    <form action="http://127.0.0.1/digikalamvc/adminproduct/addproduct/<?=@$productInfo['id']?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <span class="spantitle">نام محصول را وارد کنید</span>
            <input type="text" name="title" placeholder=" <?=@$productInfo['title']?>">


        </div>
        <div class="row">
            <span class="spantitle"> دسته والد را انتخاب کنید</span>
            <select name="categoryId" autocomplete="off">

                <option>انتخاب کنید</option>
                <?php
                $category=$data['category'];
                @$categoryId=$productInfo['cat'];



                foreach ($category as $row) {
                    if ($row['id']==$categoryId){
                        $selected="selected";
                    }
                    else{
                        $selected="";
                    }
                    ?>

                    <option value="<?= $row['id'];?>"<?=$selected?>>

                        <?=$row['title'];?>


                    </option>


                    <?php
                }
                ?>


            </select>
        </div>
            <div class="row">
                <span class="spantitle">قیمت را وارد کنید</span>
                <input type="text" name="price" placeholder="<?=@$productInfo['price']?>">

            </div>
        <div class="row">
            <span class="spantitle">تصویر را وارد کنید</span>
            <input type="file" name="image">

        </div>

            <div class="row">
                <span class="spantitle">معرفی اجمالی</span>
                <textarea class="editor" id="editor" name="introduction"><?=@$productInfo['introduction']?></textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>

            </div>

            <div class="row">
                <span class="spantitle">تعداد موجود</span>
                <input type="text" name="tedadmojood" placeholder="<?=@$productInfo['tedad_mojood']?>">
            </div>

            <div class="row">
                <span class="spantitle">تخفیف</span>
                <input type="text" name="discount" placeholder="<?=@$productInfo['discount']?>">
            </div>

        <div class="row">
            <span class="spantitle">انتخاب رنگ</span>

            <?php
            $color=$data['color'];
            $x=[];
            foreach ($color as $row) {
                array_push($x,$row);
                $s=$row['title'];
                ?>
                <?php
            }

            ?>
            <select id="selecttag" autocomplete="off" onchange= "clicked(this)">

                <option onclick="clicked(this)">select</option>

                <?php
                foreach ($color as $row) {
                ?>
                <option class="opt" onclick="addcolor(this,<?php echo $row['id']?>)">
                        <?= $row['title'];?>
                </option>

                <?php
                }
                ?>
                <?php


                ?>
            </select>

            <?php
                $colorsInfo=$productInfo['colorsInfo'];
                $colorsInfo=array_filter($colorsInfo);
                foreach ($colorsInfo as $row) {
                    ?>
                    <span class="span_item"><?=$row['title']?> </span>

                    <?php
                }
            ?>





            <select name="" autocomplete="off">

                <option>انتخاب رنگ</option>
                <?php
                $color=$data['color'];



                foreach ($color as $row) {
                    ?>
                    <option onclick=addcolorr("<?php echo $row['title'];?>",this)>
                        <?=$row['title'];?>
                    </option>

                    <?php
                }
                ?>
            </select>
        </div>

    <div class="row">

        <select name="" autocomplete="off">

            <option>انتخاب گارانتی</option>
            <?php
            $garantee=$data['garantee'];



            foreach ($garantee as $row) {
                ?>
                <option onclick="addgarantee(this,<?php echo $row['id'];?>)">
                    <?=$row['title'];?>
                </option>

                <?php
            }
            ?>
        </select>
        <?php
        $garanteesInfo=$productInfo['garanteesInfo'];
        $garanteesInfo=array_filter($garanteesInfo);
        foreach ($garanteesInfo as $row) {
        ?>
            <span class="span_item"> <?=$row['title']?></span>

                         <?php
                         }
                         ?>
    </div>

        <button>submit</button>
        </div>
    </form>


</div>

<script>
     i=1;
//     function clicked(tag) {
//
//         //var ad=$( "#selecttag" ).children();
//
// //alert(ad);
//         var plus=1;
//
//        var optointag=$(tag);
//       // var ad=optointag.children();
//        //var vava=optointag:nth-child(1);
//      //  var vava= optointag.children().eq(1);
//        var txt=optointag.text();
//
//         alert("انجام شد");
//         i=i+plus;
//
//       // var txt=tag.text();
//
//       return txt;
//        // alert(txt);
//         //alert(txt);
//
//     }

    function addcolor(tag,colorid) {
        var optointag=$(tag);
        var txt=optointag.text();
        var spantag='<span class="span_item"><input type="hidden" value="'+colorid+'" name="color[]">'+txt+'</span>';
        var divrow=optointag.parents('.row');
        divrow.append(spantag);

        //alert("djdk");

    }

     function addgarantee(tag,garanteeid) {
         var optointag=$(tag);
         var txt=optointag.text();
         var spantag='<span class="span_item"><input type="hidden" value="'+garanteeid+'" name="garantee[]">'+txt+'</span>';
         var divrow=optointag.parents('.row');
         divrow.append(spantag);

         //alert("djdk");

     }
</script>


