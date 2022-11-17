<style>
    #offer{
        height: 60px;
        background: #fff5f5;
        position: relative;
    }
    #offer .discount{
        width: 235px;
        height: 28px;
        display: block;
        position: absolute;
        top: 10px;
        left: 50px;
        border-radius: 3px;
        overflow: hidden;
    }
    #offer .discount .right{
        width: 158px;
        height: 100%;
        display: block;
        float: right;
        background: red;
    }
    #offer .discount .left{
        width: 75px;
        height: 100%;
        display: block;
        float: right;
        background: #e54949;
    }
    #offer .discount .right .number{


        font-size: 15pt;
        color: #fff;
        margin-left: 2px;
    }

    #offer .discount .right .tuman{
        font-family: Vazir;
        display: inline-block;
        width: 50px;
        font-size: 12pt;
        color: #fff;
        position: absolute;
        right: 14px;
    }
    #offer .left span{
        font-family: Vazir;
        font-size: 10pt;
        padding-left: 8px;
        position: relative;
        top: 2px;
        left: 10px;
        color: #fff;
    }
</style>

<div id="offer">
        <span class="discount">
            <span class="right">
                <span class="number"><?=$productInfo['price_discount'];?></span>
                <span class="tuman">هزارتومان</span>
            </span>
            <span class="left">
                <span>تخفیف</span>
            </span>
        </span>
</div>