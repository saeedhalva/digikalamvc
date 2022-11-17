<style>
    #qustions{
        font-family: Vazir;
    }
    #qustions h4{
        font-size: 12.5pt;
    }
    #qustionsmatn{
        width: 98%;
        height: 190px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
     .btn_blue{
         width: 110px;
         height: 38px;
         background: #2c77af;
         display: block;
         float: left;
         margin-left: 19px;
         margin-top: 5px;
         text-align: center;
         font-family: Vazir;
         color: white;
         line-height: 34px;
    }

    .row{
        width: 100%;
        float: right;
    }
    .question .questionheader{
        height: 35px;
        background: #ccc;

    }
    .questionheader  .date{
        float: right;
        font-size: 10pt;
        margin-right: 6px;
        direction: rtl;
        margin-top: 6px;
    }
    .questionheader i{
        float: right;
        margin-right: 7px;
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -284px -126px;
        width: 24px;
        height: 24px;
        display: block;
        margin-top: 6px;
    }
    .question .qustioncontent{
        height: 35px;
        background: #eee;
        padding: 10px;

    }
    #qustionscontiner{
        width: 98%;
    }
    .questionheader .name{
        float: left;
        display: block;
        margin-top: 6px;
        font-size: 10pt;
    }
    .questionheader .date{
        float: left;
        display: block;
        margin-top: 6px;
        font-size: 10pt;
        margin-left: 5px;
    }
    .qustioncontent p{
        font-size: 11.5pt;
        margin: 0;

    }
    #qustions .question{
        box-shadow: 0 2px 3px rgba(0,0,0,0.15);
        border-radius: 3px;
        overflow: hidden;
        margin-bottom: 8px;
    }
    .horizontalrow {
        float: right;
        background: #ccc;
        height: 1px;
        margin: 15px;
        width: 96%;
    }
    .answer{
        padding: 10px;
        background: white;
        font-size: 11pt;

    }
    *{
        direction: rtl;
    }
</style>

    <h4>پرسش خود را مطرح نمایید</h4>
    <textarea id="qustionsmatn"></textarea>
    <div class="row">
        <div class="email">

            <span class="btn_blue">ثبت پرسش</span>
        </div>
    </div>
    <h4>پرسش خود را مطرح نمایید</h4>
    <div class="horizontalrow"></div>
    <div id="qustionscontiner" class="row">
        <?php
        $questions=$data[0];
        $answers=$data[1];
        foreach ($questions as $row){
        ?>
        <div class="question">
            <div class="questionheader">
                <i></i>
                <span class="title">پرسش </span>
                <span class="date"><?=$row['tarikh']?> </span>
                <span class="name">سعید حلوائی </span>

            </div>
            <div class="qustioncontent">
                <p> <?=$row['matn']?> </p>
            </div>
            <div class="answer">

                <p>پاسخ:</p>
                <?=$answers[$row['id']]['matn'];?>
            </div>
        </div>
        <?php
            }
        ?>
    </div>

