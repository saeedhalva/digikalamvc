<style>
    .filtertop{
        padding: 0;
        float: right;
        width: 100%;
        margin-top: 15px;
    }
    .filtertop > li{
        width: 140px;
        height: 24px;
        float: right;
        font-size: 9.5pt;
        background: #eee;
        border-radius: 3px;
        border: 1px solid #ccc;
        margin-left: 10px;
        padding-right: 4px;
    }
    .option{
        width: 155px;
        height: 205px;
        background: white;
        box-shadow: -4px 4px 3px rgba(0,0,0,.2);
        border-right: 1px solid #eee;
        margin-left: -11px;
        margin-top: 5px;
        margin-right: 7px;
        overflow-y: auto;
        overflow-x: hidden;
        display: none;
        z-index: 2;

    }
    .filtertop li .option li{
        padding-right: 10px;
    }
    .filtertop li{
        font-size: 9.5pt;
    }
    .filtertop .option input{
        width: 13px;
        height: 13px;

    }
    #filtersselected{
        width: 100%;
        direction: rtl;

    }
    #filtersselected i{
        width: 15px;
        height: 15px;
        background: url("http://127.0.0.1/digikalamvc/public/images/lock.png");
        display: inline-block;
    }
    .filterselectedspan{
        background: #eee;
        font-size: 9.5pt;
        font-family: Vazir;
        margin-left: 10px;
        border-radius: 2px;
    }
</style>
<ul class="Vazir filtertop">
    <li>
        <span class="title">تعداد سیم کارت</span>

        <div class="option">
            <ul class="Vazir">
                <li>
                    نمایش همه
                    <input type="checkbox">
                </li>
                <div class="horizontalrow"></div>
                <li>
                    دو
                    <input type="checkbox">
                </li>
                <li>
                    سه
                    <input type="checkbox">
                </li>

            </ul>
        </div>
    </li>
    <li>
        <span class="title">رزولوشن دوربین </span>
        <div class="option">
            <ul class="Vazir">
                <li>
                    نمایش همه
                    <input type="checkbox">
                </li>
                <div class="horizontalrow"></div>
                <li>
                    دو
                    <input type="checkbox">
                </li>
                <li>
                    سه
                    <input type="checkbox">
                </li>

            </ul>
        </div>
    </li>

    <li>نوع ارتباط</li>

    <li>نوع پنل</li>
    <li>حجم باتری</li>
</ul>
<script>
    var filters=$('.filtertop > li');

    filters.hover(function () {
        $('.option',this).slideDown(200);

    },function () {
        $('.option',this).slideUp(200);
    });



    var items=$('.filtertop .option li');
    $(items).on ("click", function () {
        var title=$(this).parents('li').find('.title').text();
        var value=$(this).text();
        var span='<span class="filterselectedspan">'+title+':'+value+'<i class="removefilter" onclick="removeselected(this)"></i></span>'
        $('#filtersselected').append(span);
    });


    function removeselected(tag) {
        $(tag).parents('span').remove();
    }
</script>