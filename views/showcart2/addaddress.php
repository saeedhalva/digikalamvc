<form id="addaddress" action="http://127.0.0.1/digikalamvc/showcart2" method="post">
<div id="addaddres">
    <h4>
        افزودن آدرس جدید
        <span class="close"></span>
    </h4>

    <div class="row">
        <div class="right">
            <span class="title">نام و نام خانوادگی تحویل گیرنده:</span>
        </div>
        <div class="left">
            <input name="family" value="">
        </div>
    </div>
    <div class="row">
        <div class="right">
            <span class="title">شماره همراه:</span>
        </div>
        <div class="left">
            <input name="mobile">
        </div>
    </div>
    <div class="row">
        <div class="right">
            <span class="title">شماره ثابت:</span>
        </div>
        <div class="left">
            <input name="tell">
        </div>
    </div>
    <div class="row">
        <div class="right">
            <span class="title">انتخاب استان و شهر:</span>
        </div>
        <div class="left">

        </div>
    </div>
    <div class="row">
        <div class="right">
            <span class="title">انتخاب محله:</span>
        </div>
        <div class="left">

        </div>
    </div>
    <div class="row">
        <div class="right">
            <span class="title">آدرس پستی:</span>
        </div>
        <div class="left">
            <textarea name="address"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="right">
            <span class="title">کد پستی:</span>
        </div>
        <div class="left">
            <input name="codeposti">
        </div>
        <div class="row">
            <div class="right">
                <span class="title"></span>
            </div>
            <div class="left akhar">
                <span onclick="submitform()" class="btngreen">ذخیره اطلاعات</span>
            </div>
        </div>

    </div>
</div>
</form>
<script>

    // $('#addaddres').click(function () {
    //     $('#addaddres').show();
    //     $('#dark').show();
    // });
    // $('.close').click(function () {
    //     alert("dddd");
    //     $('#addaddres').hide();
    //     $('#dark').hide();
    // });
</script>