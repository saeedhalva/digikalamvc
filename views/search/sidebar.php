<style>

    #sidebar{
        width: 250px;
        border: 1px solid #ccc;
        float: right;
    }
    #sidebar h3{
        height: 30px;
        background: #777780;
        color: #ffffff;
        padding-right: 5px;
        padding-top: 5px;
        margin: 0;
        line-height: 20px;
        direction: rtl;
    }
    #sidebar h3 .arrow{
        width: 14px;
        height: 17px;
        background: url("http://127.0.0.1/digikalamvc/public/images/down-arrow.png");
        display: block;
        float: left;
        margin-left: 5px;
        margin-top: 5px;
    }
    #sidebar > ul {
        font-family: Vazir;

    }
    #sidebar  ul li:nth-child(1) {

        padding-right: 14px;
    }
    .horizontalrow{
        float: right;
        background: #ccc;
        height: 1px;
        margin: 15px;
        width: 86%;


    }
</style>
<div id="sidebar">
    <h3 class="Vazir">گوشی موبایل
        <span class="arrow"></span>
    </h3>
    <ul>
        <li>کالای دیجیتال
            <ul>
                <li>موبایل
                    <ul>
                        <li>گوشی موبایل</li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
    <div class="horizontalrow"></div>
    <ul class="filterul">
        <li class="title">براساس نوع</li>
        <li>
            <label class="checklable"></label>
            <input class="checkinput" type="checkbox">
            سیستم عامل اندروید
        </li>
        <li>
            <label class="checklable"></label>
            <input class="checkinput" type="checkbox">
            سیستم عامل ios
        </li>
    </ul>
    <div class="horizontalrow"></div>
    <ul class="filterul">
        <li class="title">براساس سازنده</li>
        <li>
            <label class="checklable"></label>
            <input class="checkinput" type="checkbox">
            سامسونگ
        </li>
        <li>
            <label class="checklable"></label>
            <input class="checkinput" type="checkbox">
            اپل
        </li>
    </ul>
    <div class="horizontalrow"></div>

    <ul class="filterul">
        <li class="title">براساس رنگ</li>
        <li>
            <label class="checklable"></label>
            <input class="checkinput" type="checkbox">
            <span class="productcollor" style=" background-color: blue"></span>
            آبی
        </li>
        <li>
            <label class="checklable"></label>
            <input class="checkinput" type="checkbox">
            <span class="productcollor" style="background-color: black"></span>
            مشکی
        </li>
    </ul>

</div>