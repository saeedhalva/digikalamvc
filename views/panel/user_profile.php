<style>
    .box{
        font-family: Vazir;
        direction: rtl;
    }
    .box .header{
        height: 40px;
        background: #3c3c3c;
        color: #fff;
        font-size: 11pt;
        padding-right: 10px;
        line-height: 35px;
    }
    .content{
        direction: rtl;
    }
    .content table{
        direction: rtl;
        text-align: right;
        width: 100%;
        background: #ffffff;
        margin-bottom: 10px;

    }
    .content table td{
        padding: 5px;
    }

    table .title{
        font-size: 10.5pt;
        color: darkblue;
        font-family: Vazir;
        direction: rtl;
        text-align: right;
    }
    table .value{
        font-size: 10pt;
        font-family: Vazir;
        direction: rtl;
        text-align: right;

    }
</style>
<?php
    $userInfo=$data['userInfo'];
?>
<div class="box">
    <div class="header">اطلاعات کاربر</div>
    <div class="content">
        <table>
            <tr>
                <td>
                    <span class="title">نام و نام خانوادگی:</span>
                    <span class="value"><?=$userInfo['family']?></span>
                </td>
                <td>
                    <span class="title">آدرس ایمیل:</span>
                    <span class="value"><?=$userInfo['email']?></span>
                </td>
                <td>
                    <span class="title">کد ملی:</span>
                    <span class="value"><?=$userInfo['code_melli']?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="title">شماره تلفن:</span>
                    <span class="value"><?=$userInfo['tell']?></span>
                </td>
                <td>
                    <span class="title">شماره تلفن همراه:</span>
                    <span class="value"><?=$userInfo['mobile']?></span>
                </td>
                <td>
                    <span class="title">تاریخ تولد:</span>
                    <span class="value">tavalod</span>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="title">محل سکونت:</span>
                    <span class="value"><?=$userInfo['address']?></span>
                </td>
                <td>
                    <span class="title">جنسیت:</span>
                    <?php
                        $jensiat=$userInfo['jensiat'];
                        if ($jensiat==0){
                            $jensiat="men";
                        }else{
                            $jensiat="women";
                        }
                    ?>
                    <span class="value"><?=$jensiat?></span>
                </td>
                <td>
                    <span class="title">دریافت خبرنامه</span>
                    <?php
                    $khabarname=$userInfo['khabarname'];
                    if ($khabarname==0){
                        $khabarname="yes";
                    }else{
                        $khabarname="no";
                    }
                    ?>
                    <span class="value"><?=$khabarname?></span>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: left">
                    <a href="http://127.0.0.1/digikalamvc/panel/profile">
                        <img src="http://127.0.0.1/digikalamvc/public/images/edit-user-female.png">
                    </a>
                    <a href="http://127.0.0.1/digikalamvc/panel/profile">
                        <img src="http://127.0.0.1/digikalamvc/public/images/edit-user-female.png">
                    </a>
                </td>
            </tr>
        </table>
    </div>
</div>