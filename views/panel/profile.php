<style>
    @font-face {
        font-family: 'Vazir';
        src: url('http://127.0.0.1/digikalamvc/public/fonts/Vazir.ttf?#iefix') format('truetype');
    }
    .Vazir{
        font-family: Vazir;
    }
    .fontsm{
        font-size: 11.3pt;
    }
    .fontmd{
        font-size: 12.3pt;
    }
    .fontlg{
        font-size: 13.3pt;
    }
    body{
        margin: 0;
        background: #ecf1ec;

    }
    ul{
        margin: 0;
    }
    a{
        text-decoration: none;
    }
    div li ul span a p{
        text-align: right;
        direction: rtl;
    }
    li{
        list-style: none;
        text-align: right;
    }

    #main{
        width: 1200px;

        margin: 10px auto;

    }

    .horizontalrow{
        float: right;
        background: #ccc;
        height: 1px;
        margin: 15px;
        width: 86%;


    }

    #main::after{
        content:"";
        clear: both;
        display: block;
    }
    .row2{
        width: 100%;
        float: right;
        margin-bottom: 15px;
    }
    .row2 input[type=text]{
        width: 250px;
        height: 22px;
        padding: 2px;
        font-family: Vazir;
        float: right;
    }
    .row2 .title{
        width: 200px;
        font-family: Vazir;
        font-size: 10.5pt;
        float: right;
    }
    h4{
        font-family: Vazir;
        vertical-align: center;
        text-align: center;

    }
    .btngreen{
        display: block;
        width: 170px;
        height: 37px;
        background: #1fbe14;
        box-shadow: 1px 1px 3px #ccc;
        color: white;
        border-radius: 4px;
        font-family: Vazir;
        text-align: center;
        line-height: 35px;

    }




</style>

<div id="main">
    <form method="post" action="http://127.0.0.1/digikalamvc/panel/editProfile">
    <?php
    $profile=$data['userInfo'];
    ?>
    <h4>اطلاعات کاربری</h4>
    <div class="row2">
        <span class="title">
            ایمیل:
        </span>
        <input value="<?=$profile['email']?>" type="text" name="email">
    </div>
    <div class="row2">
        <span class="title">
            نام:
        </span>
        <input value="<?=$profile['family']?> "type="text" name="family">
    </div>
    <div class="row2">
        <span class="title">
            کدملی:
        </span>
        <input value="<?=$profile['code_melli']?>" type="text" name="codemelli">
    </div>
    <div class="row2">
        <span class="title">
            تلفن ثابت:
        </span>
        <input value="<?=$profile['tell']?>" type="text" name="tell">
    </div>
    <div class="row2">
        <span class="title">
            شماره همراه:
        </span>
        <input value="<?=$profile['mobile']?>" type="text" name="mobile">
    </div>
    <div class="row2">
        <span class="title">
            محل سکونت:
        </span>
        <input value="<?=$profile['address']?>" type="text" name="address">
    </div>
    <div class="row2">
        <span class="title">
            جنسیت:
        </span>
    </div>
    <div class="row2">
        <span class="title">
            مرد:
        </span>
        <input type="radio" name="jensiat" value="1"  <?php if ($profile['jensiat']==1){echo 'checked="true"';}?>>
    </div>
    <div class="row2">
        <span class="title">
            زن:
        </span>
        <input type="radio" name="jensiat" value="2">
    </div>

    <span onclick="submit()" class="">ذخیره</span>


</div>
</form>
<script>
    function submit() {
        $('form').submit();
    }

</script>