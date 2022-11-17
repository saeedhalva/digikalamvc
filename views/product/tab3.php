<style>
    #commentsresult{
        width: 520px;
        float: right;
    }
    #commentssend{
        width: 630px;
        float: right;
        margin-right: 10px;
    }
    #commentsresult .emtiazkarbaranbe{
        font-family: Vazir;
        font-size: 13.5pt;
    }
    #commentsresult .namemodel{
        font-family: Vazir;
        font-size: 11pt;
    }
    #commentsresult .row{
        width: 100%;
        float: right;
        margin-bottom: 10px;

    }
    .navbar .row .title{
        font-size: 10.3pt;
        float: right;
        width: 155px;
        display: block;
    }
    .navbar ul{
        padding: 0;
        height: 10px;
        float: right;
        margin-right: 10px;
        margin-top: 6px;

    }
    .navbar ul li{
        width: 64px;
        height: 100%;
        float: right;
        background: #eee;
        border-left: 1px solid #fff;

    }
    .navbar ul li span{
        background: green;
        width: 100%;
        height: 100%;
        display: block;
    }
    .navbar ul li span.full{
        width: 100%;
    }
    .lazemast{
        font-family: Vazir;
        font-size: 11pt;
    }
    .shomaham{
        font-family: Vazir;
        font-size: 13.5pt;
    }
    #comments{
        font-family: Vazir;
        float: right;
        width: 100%;
    }
    #comments .horizontalrow{
        width: 96%;
    }
    #comments .comment{
        float: right;
        width: 1180px;
        box-shadow: 0 2px 3px rgba(0,0,0,0.15);
        border-radius: 2px;
        overflow: hidden;
        margin-bottom: 10px;
    }
    #comments .comment .commentheadr{
        height: 57px;
        background: #eee;
        font-family: Vazir;
        padding: 0 15px ;

    }

    #comments .comment .commentheadr .right{
        float: right;


    }
    #comments .comment .commentheadr .left{
        float: left;


    }

    #comments .comment .commentheadr .right span{
        display: block;
        font-size: 12.8pt;

    }
    #comments .comment .commentheadr .right span:last-child{
        display: block;
        font-size: 9pt;

    }
    #comments .comment .commentheadr .left span{
        float: left;
        display: block;
        margin-right: 8px;
        font-size: 10.6pt;
        margin-top: 13px;
    }
    #comments .comment .commentheadr .left .like span{
        margin: 0;
        margin-left: 10px;

    }
    #comments .comment .commentheadr .left .dislike span{
        margin: 0;
        margin-left: 10px;
    }

    #comments .comment .commentheadr .left .like{
        width: 65px;
        height: 25px;
        background: #fff;

    }
    #comments .comment .commentheadr .left .dislike{
        width: 65px;
        height: 25px;
        background: #fff;

    }
    #comments .comment .commentheadr .left .like i{
        width: 20px;
        height: 20px;
        display: block;
        float: right;
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -305px -190px  ;
        margin-right: 3px;
        margin-top: 4px;
    }
    #comments .comment .commentheadr .left .dislike i{
        width: 20px;
        height: 20px;
        display: block;
        float: right;
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -267px -193px  ;
        margin-right: 3px;
        margin-top: 4px;

    }
    #comments .comment .commentcontent .right{
        float: right;
        width: 490px;
    }
    .navbar .row{
        width: 100%;
        float: right;
    }
    #comments .comment .commentcontent{
        float: right;
        padding: 10px;
        width: 98%;
    }
    #comments .comment .commentcontent .left{
        width: 665px;
        float: right;
    }
    #comments .comment .commentcontent .left .top{
        font-family: Vazir;
        font-size: 13pt;
    }
    #comments .comment .commentcontent .left .center{
        font-family: Vazir;
        font-size: 10pt;
        float: right;
        width: 100%;
    }
    #comments .comment .commentcontent .left .bottom{

    }
    .ghovvat{
        width: 280px;
        float: right;
        color: green;
        font-size: 10.5pt;
    }
    .zaaf{
        width: 280px;
        float: right;
        margin-right: 15px;
        color: red;
        font-size: 10.5pt;
    }
</style>

    <div id="commentsresult" class="navbar">

        <?php
            $comment_param=$data[0];
            $comment_param_score=$data[2];


        ?>

        <p class="emtiazkarbaranbe">
            امتیاز کاربران به:
            <span class="namemodel">سامسونگ گلکسی اس 22</span>
        </p>
        <?php
            foreach ($comment_param as $row) {
                $score=$comment_param_score[$row['id']];
                $part1=$score=floor($score);
                $part2=$score-$part1;
                ?>
                <div class="row">
                    <span class="title"><?=$row['title']?></span>
                    <ul>
                        <?php
                            for ($i=0;$i<$part1;$i++) {
                                if ($i>5){
                                    $i=5;
                                }
                                ?>
                                <li>
                                    <span></span>
                                </li>
                                <?php
                            }
                        ?>
<!--                        <li></li>-->
<!--                        <li></li>-->
<!--                        <li></li>-->
<!--                        <li></li>-->
                    </ul>
                </div>

                <?php
            }
        ?>

<!--        <div class="row">-->
<!--            <span class="title">ارزش خرید به نسبت قیمت</span>-->
<!--            <ul>-->
<!--                <li>-->
<!--                    <span></span>-->
<!--                </li>-->
<!--                <li></li>-->
<!--                <li></li>-->
<!--                <li></li>-->
<!--                <li></li>-->
<!--            </ul>-->
<!--        </div>-->
    </div>
    <div id="commentssend">
        <p class="shomaham">شما هم میتوانید نظر خود را ارسال نمایید</p>
        <p class="lazemast">برای ثبت نظرات لازم است ابتدا وارد حساب کاربری خود شوید</p>

        <div class="email">

            <span class="btn">ارسال نمایید</span>
        </div>

    </div>

                <div id="comments">
                    <p>نظرات کاربران</p>
                    <div class="horizontalrow"></div>
                    <?php
                        $comments=$data[1];
                        foreach ($comments as $row){
                    ?>
                    <div id="comment<?=$row['id']?>" class="comment">
                        <div class="commentheadr">
                            <div class="right">
                                <span class="name">سعید</span>
                                <span class="date"><?=$row['tarikh']?></span>
                            </div>
                            <div class="left">
                            <span class="dislike">
                                 <i></i>
                                <span><?=$row['dislikecount']?></span>
                            </span>
                                <span class="like">
                                <i></i>
                                <span><?=$row['likecount']?></span>
                            </span>
                                <span class="">آیا این نظر مفید بود؟</span>
                            </div>
                        </div>
                        <div class="commentcontent">
                            <div class="right">
                                <div class="navbar">
                                    <div class="row">
                                        <span class="title">ارزش خرید به نسبت قیمت</span>
                                        <ul>
                                            <li>
                                                <span></span>
                                            </li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>

                                    <div class="row">
                                        <span class="title">ارزش خرید به نسبت قیمت</span>
                                        <ul>
                                            <li>
                                                <span></span>
                                            </li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="left">
                                <div class="top"><?=$row['title']?></div>
                                <div class="center">
                                    <div class="ghovvat">
                                        <p>نقاط قوت</p>
                                        <p><?=$row['positive']?></p>

                                    </div>
                                    <div class="zaaf">
                                        <p>نقاط ضعف</p>
                                        <p><?=$row['negative']?></p>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <?=$row['matn']?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php
}
?>

