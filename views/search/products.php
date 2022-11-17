<style>
    #products{
        float: right;
        margin-top: 30px;
        width: 100%;
    }
    #products ul li{
        width: 208px;
        height: 300px;
        border:1px solid #eee ;
        float: right;
        margin-right: 10px;
        margin-bottom: 8px ;
    }
    #products ul li a{
        display: block;
        height: 100%;

    }
    #products ul{
        padding: 0;
        width: 100%;
    }
    #products .colors .color{
        width: 12px;
        height: 12px;
        display: inline-block;
        border: 1px solid #eee;
    }
    #products .colors{
        text-align: center;
    }
    #products .color:nth-child(1){
        background: silver;
    }
    #products .color:nth-child(2){
        background: blue;
    }
    #products .color:nth-child(3){
        background: black;
    }
    .textcenter{
        text-align: center;
    }
    #products a > div{
        margin-top: 5px;
    }
    .gray{
        width: 100px;
        height: 18px;
        background: url(http://127.0.0.1/digikalamvc/public/images/star.png)repeat;
        margin: 0 auto;
        position: relative;
    }
    .red{
        width: 50%;
        height: 18px;
        background: url(http://127.0.0.1/digikalamvc/public/images/star-yellow.png)repeat;
        margin: 0 auto;
        position: absolute;
        left: 0;
        top: 0;

    }
    #products .title{
        text-align: left;
        padding: 0 6px;
    }
    .pricered{
        color: red;
        font-size: 10pt;
        text-decoration: line-through;
        margin: 0;
    }
    .pricegreen{
        color: green;
        font-size: 11pt;
        margin: 0;
    }
    .price{
        padding:1px 6px;
        position: relative;
    }
    .addtocart{
        width: 30px;
        height: 30px;
        display: inline-block;
        background: url(http://127.0.0.1/digikalamvc/public/images/shopping-cart.png) no-repeat;
        position: absolute;
        left: 2px;
        top: 15px;
    }
    .display1 li{
        width: 100% !important;

    }
    .display1 .right{
        float: right;
        width: 217px;
    }
    .display1 .left{
        float: left;
        width: 660px;
    }
    .display1 .title{
        text-align: right!important;
        font-size: 14pt!important;
    }
    #products .description{
        height: 208px;
        display: none;
        font-family: Vazir;

    }
    .display1 .description{
        display: block!important;
    }
</style>
<div id="products" class="display1">
    <ul>
        <li>
            <a>
                <div class="right">
                    <div class="textcenter">
                        <img src="http://127.0.0.1/digikalamvc/public/images/searchpage.jpg">
                    </div>
                    <div class="colors">

                        <span class="color"></span>
                        <span class="color"></span>
                        <span class="color"></span>

                    </div>
                    <div class="stars textcenter">
                        <div class="gray textcenter">

                            <div class="red"></div>

                        </div>
                    </div>
                </div>
                <div class="left">
                    <div class="title Vazir">aplle</div>
                    <div class="description">توضیحات محصول</div>
                    <div class="price Vazir">
                        <p class="Vazir pricered">تومان 200.000</p>
                        <p class="Vazir pricegreen">تومان 100.000</p>
                        <span class="addtocart"></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a>
                <div class="textcenter">
                    <img src="http://127.0.0.1/digikalamvc/public/images/searchpage2.jpg">
                </div>
            </a>
        </li>
        <li>
            <a></a>
        </li>
        <li>
            <a></a>
        </li>
        <li>
            <a></a>
        </li>
    </ul>
</div>
<script>
    $('.type1').click(function () {
        $('#products').addClass('display1')
    });

    $('.type2').click(function () {
        $('#products').removeClass('display1')
    });
</script>