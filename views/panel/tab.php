<style>
    #tab{
        width: 1200px;
        margin-top: 20px;
        padding: 0;
        background: #f5f6f7;
        float: right;


    }
    #tab li{
        float: right;
        padding: 15px;
        font-size: 11.5pt;
        font-family: Vazir;
        border-left: 1px solid #eee;

    }
    #tab li.active{
        background: white;
        box-shadow: 0 0 4px rgba(0,0,0,.2);
        border-top: 2px solid blue;
    }
    #tabchilds {
        width: 1200px;
        float: right;
        direction: rtl;
        background: white;
    }
    #tabchilds section{
        padding: 10px 10px 20px;
        font-family: Vazir;
        font-size: 12pt;
        display: none;
        float: right;
        width: 100%;

    }



    #tabchilds section:first-child{
        display: block;
    }
    #tabchilds .item:first-child h4 i{
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -153px -615px;
        width: 31px;
        height: 44px;
        display: block;
        position: absolute;
        right: -16px;
        top: -4px;
    }
    #tabchilds .item:first-child h4.active i{
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -98px -615px;

    }
    #tabchilds .item:last-child h4 i{
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -313px -615px;
        width: 31px;
        height: 44px;
        display: block;
        position: absolute;
        right: -17px;
        top: 15px;


    }
    #tabchilds .item:last-child h4.active i{
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -207px -606px;
    }
    #tabchilds .item h4 i{
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -259px -606px;
        width: 31px;
        height: 56px;
        display: block;
        position: absolute;
        right: -17px;

    }
    #tabchilds .item h4.active i{
        background: url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -207px -606px;

    }
    #tabchilds .item{
        padding: 0;
    }
    .itemcontiner{
        margin-right: 20px;
        border-right: 3px solid #f0f1f2;
    }
    #tabchilds .item h4 span{
        z-index: 2;
        position: relative;
        background: white;

    }
    #tabchilds .item  p {
        padding-right: 20px;
    }

    .itemcontiner .item .description{
        display: none;
    }
    .sectionfanni h4{
        font-size: 13pt;
        font-family: Vazir;
    }
    .sectionfanni .row{
        width: 100%;
        float: right;
    }
    .sectionfanni .row .right{
        width: 255px;
        float: right;
        background: #efefef;
        font-family: Vazir;
        font-size: 10pt;
        padding: 5px;
        margin-left: 25px;
        border-radius: 4px;
        margin-bottom: 10px;
    }
    .sectionfanni .row .left{
        width: 880px;
        float: left;
        background: #f7f9fa;
        font-family: Vazir;
        font-size: 10pt;
        padding: 5px;
        border-radius: 4px;


    }
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
        width: 99%;
    }
    #comments .comment{
        float: right;
        width: 100%;
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
    #tabchilds section > table tr{

        background: #eee;
        color:black ;
        font-size: 10pt;
        font-family: Vazir;

    }
    #tabchilds section > table tr:first-child{

        background: #3c3c3c;
        color: white;
        font-size: 10.7pt;
        font-family: Vazir;

    }
    #tabchilds section > table{
        width: 97%;
    }
    #tabchilds section  > table td{
        text-align: center;
        padding: 4px;
        border-left: 1px solid #ccc;
        border-bottom: 3px solid #ccc;
    }
    #tabchilds .myorders > table td:last-child{
        text-align: center;
        padding: 4px;
        border-left: 0;
        border-bottom: 3px solid #ccc;
    }
    #tabchilds section > table .subtable{

        box-shadow: 0 0 5px #ccc;

        background: #ffffff;
        padding: 10px;
    }
    #tabchilds .myorders > table .subtable > table{
        width: 100%;
    }
    #tabchilds .myorders > table .subtable > table  tr{
        background: #ffffff!important;
        color: #000;
        font-size: 11pt;
    }
    #tabchilds .myorders > table .subtable > table  tr td:first-child{
        border-right: 1px solid #ccc;


    }
    #tabchilds .myorders > table .subtable > table  tr:first-child{
        background: #eee!important;
        color: #000;
        font-size: 11pt;
    }
    .subtable h4{
        font-family: Vazir;
        font-size: 11pt;
        margin: 0;
        background: #eee;
        font-weight: normal;
        padding-right: 10px;
        direction: rtl;
        text-align: right;
    }
    .ordersteps .dashed span{
        width: 11px;
        height: 3px;
        background: blue;
        display: block;
        float: right;
        margin-right: 3px;
    }
    .ordersteps .dashed{
        float: right;
    }
    .ordersteps{
        padding-top: 20px;
        padding-right: 10px;
        padding-left: 10px;
    }
    .ordersteps ul{


    }
    .ordersteps ul li{
        position: relative;
        width: 180px;

        float: right;
        height: 50px;
    }
    .ordersteps ul li .circle{
        width: 19px;
        height: 19px;
        display: block;
        border: 3px solid #ccc;
        border-radius: 100%;
        position: absolute;
        top: -10px;
        right: 20px;
    }
    .ordersteps ul li.active .circle{


        background: dodgerblue url(http://127.0.0.1/digikalamvc/public/images/slices.png)no-repeat -810px -476px ;
        border: 3px solid dodgerblue;

        border-radius: 100%;
        position: absolute;
        top: -10px;
        right: 20px;



    }
    .ordersteps ul li .title{
        font-size: 11.5pt;
        color: #bbb;
        font-family: Vazir;
        position: absolute;
        top: 20px;
        right: -5px;
    }
    .ordersteps ul li.active .title {

        color: dodgerblue;
    }
    .ordersteps ul li .line{
        width: 128px;
        height: 3px;
        display: block;
        background: #6d717a;
        position: absolute;
        right: 50px;
    }
    .ordersteps ul li.active .line {

        background: dodgerblue;

    }
    .myorders .subtable .more table{
        width: 100%;


    }
    .myorders .subtable .more table tr {
        background: #fff!important;
        color: #000!important;

    }
    .myorders .subtable .more table td {
        width: 100px;
        height: 100px;
    }
    .myorders .subtable .more{

    }
    .details{
        display: none;
    }
    .favorites ul{
        padding: 10px;
        background: #eee;
        border: 1px dashed #ccc;
        width: 96%;
        float: right;
    }
    .favorites ul li{
        width: 280px;
        height: 50px;
        margin-right: 20px;
        padding: 5px;
        float: right;
    }
    .favorites ul li a{
        display: block;
        width: 100%;
        position: relative;
    }
    .favorites ul li a span{
        display: block;
        font-family: Vazir;
        font-size: 10.3pt;
        margin-right: 40px;
        margin-top: -30px;
    }
    .favorites ul li a .edit{
        position: absolute;
        left: 0;
        top: 5px;
        display: none;
    }
    .favorites ul li.active{
        background: #fff;
        border: 1px solid #ccc;
    }
    .favorites ul li:hover {
        border: 1px solid #ccc;
        background: white;

    }
    .favorites .item{
        float: right;
        width:96%;
        margin-top: 10px;
        border: 1px dashed #eee;
    }
    .favorites .item .right{
        float: right;
    }
    .favorites .item .right img {

        width: 100px;
        height: 100px;
        border: 1px solid #eee;
        border-radius: 3px;
        overflow: hidden;

    }
    .favorites .item .left{
        float: right;
        margin-right: 5px;
        width: 1000px;
        position: relative;
    }
    .favorites .item .left  h4{
        font-family: Vazir;
        margin: 0;

    }
    .favorites .item .left  h4 img:nth-child(1){
        position: absolute;
        left: 5px;
        top: 5px;
    }
    .favorites .item .left  h4 img:nth-child(2){
        position: absolute;
        left:60px;
        top: 5px;
    }
    #adddigibon{
        padding: 10px;
        background: #eee;
        border: 1px dotted #ccc;
        width: 96%;
        padding-bottom: 20px;
        margin-bottom: 25px;
    }
    #adddigibon input{
        width: 300px;
        border: 1px solid  #ccc;
        margin-right:10px ;
    }
    #adddigibon img{
        margin-top: 5px;
        margin-right: 7px;
        position: relative;
        top: 10px;
        right: 8px;
    }
    .digibon .sub{
        box-shadow: 0 0 5px  #ccc;
    }
    .digibon .sub table{
        width: 100%;
    }
    .digibon .sub table tr:first-child{
        background: #eee!important;
        color: black;

    }


</style>
<ul id="tab">
    <li class="active"> پیغام های من</li>
    <li> سفارشات من</li>
    <li>لیست مورد علاقه من</li>
    <li>نقد های من</li>
    <li> نظرات من</li>
    <li> دیجی بن من</li>
</ul>

<div id="tabchilds">
   <?php
       require ('tab1.php');
       require ('tab2.php');
       require ('tab3.php');
       require ('tab4.php');
       require ('tab5.php');
       require ('tab6.php');
   ?>

</div>