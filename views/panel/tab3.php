<style>
    .edit{
        position: absolute;
        width: 20px;
        height: 20px;
        z-index: 50
    }
    .savebtn{
        background: forestgreen;
        position: absolute;
        top: 26px;
        left: 0;
        display: none;!important;
    }
</style>
<section class="favorites">

    <ul>
        <li onclick="getFavorite(0)">
            <a>
                <img class="folder" src="http://127.0.0.1/digikalamvc/public/images/folder.png">
                <span>همه ی پوشه ها</span>

            </a>
        </li>
        <?php
            $folder=$data['folder'];
            foreach ($folder as $row) {
                ?>
                <li onclick="getFavorite(<?=$row['id']?>)">
                    <a>
                        <img class="folder" src="http://127.0.0.1/digikalamvc/public/images/folder.png">
                        <span class="title"><?=$row['title']?></span>
                        <img onclick="startEdit(this)" class="edit" src=http://127.0.0.1/digikalamvc/public/images/edit.png>
                        <div onclick="saveedit(<?=$row['id']?>,this)" class="savebtn">ذخیره</div>
                    </a>
                </li>
                <?php
            }
        ?>
    </ul>

<div class="items"></div>


</section>
<script>
    $('.edit').click(function (e) {
       e.stopPropagation();
    });

    function startEdit(tag) {
        $('.savebtn').fadeIn();
        var imgtag=$(tag);
        var litag=imgtag.parents('li');
        var spantitle=litag.find('.title');
        var title=spantitle.text();
        var inputtag='<input type="text" value="'+title+'">';
        spantitle.html(inputtag);
        $('input').click(function (e) {
            e.stopPropagation();
        });
    }
    
    function saveedit(folderId,tag) {
        var spantag=$(tag);
        var litag=spantag.parents('li');
        var inputtag=litag.find('.title input');
        var newname=inputtag.val();
        var url='http://127.0.0.1/digikalamvc/panel/saveEdit';
        var data={'folderId':folderId,'newName':newname};
        $.post(url,data,function (msg) {
            litag.find('.title').html(newname);
            $('.savebtn').fadeOut(100);

        });
    }
    
    function deleteFavorite(favoriteId,tag) {
        var item=$(tag).parents('.item');

        var url='http://127.0.0.1/digikalamvc/panel/deleteFavorite';
        var data={'favoriteId':favoriteId};
        $.post(url,data,function (msg) {
        item.remove();
        });
    }

    function getFavorite(folderId){
        var url='http://127.0.0.1/digikalamvc/panel/getFavorite';
        var data={'folderId':folderId};
        $('.items').html('');
        $.post(url,data,function (msg) {
            $.each(msg,function (index,val) {
                var item='<div class="item"><div class="right"><img src="http://127.0.0.1/digikalamvc/public/images/products/'+val['idproduct']+'/product_220.jpg"></div><div class="left"><h4>'+val['producttitle']+'<img class="deletefavorite" onclick="deleteFavorite('+val['id']+',this)" src="http://127.0.0.1/digikalamvc/public/images/cancel-button.png"><img src="http://127.0.0.1/digikalamvc/public/images/edit.png"></h4></div></div>';
                $('.items').append(item);
            });
            
        },'json');
    }
    $('.favorites ul li ').hover(function () {

        $('.edit',this).show();
    },function () {
        $('.edit',this).hide();
    });
</script>