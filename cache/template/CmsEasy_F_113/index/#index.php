<?php defined('ROOT') or exit('Can\'t Access !'); ?>
﻿<style type="text/css">
.test {
width: 1180px;
height: 300px;
display: block;
float: none;
background-color: #00B0FB;
clear: both;
margin-left: auto;
margin-right: auto;
margin-top: 440px;
}


    .counsellors_xxx {
width: 1180px;
height: 40px;
/*text-align: center;*/
background: #efefef;
margin: 0 auto 20px auto;
line-height: 40px;
float: none;        /*display: block;*/
    }

    .counsellors_xxx h2 {
        height: 40px;
        width: 240px;
        background: #e84444;
        float: left;
        line-height: 40px;
        color: #FFFFFF;
    }


    .maketion_xxx {
        width: 1180px;
        height: 400px;
        /*margin: 20px auto;*/
        float: left;

    }

    .make_left_xxx {
        width: 398px;
        height: 400px;
        border: 1px solid #dcdcdc;
        float: left;
    }

    .make_right_xxx {
        width: 757px;
        height: 400px;
        border: 1px solid #dcdcdc;
        float: right;
        margin-left: 20px;
        margin-bottom: 10px;
        /*position: relative;*/
        text-align: center;
    }

    /* 本例子css */
    .slideTxtBox {
        width: 100%;

        text-align: center;
    }

    .slideTxtBox .hd {
        height: 40px;
        line-height: 40px;
        background: #f4f4f4;
        border: 1px solid #ddd;
        /*padding: 0 10px 0 20px;*/
        /*border-bottom: 1px solid #ddd;*/
        position: relative;
    }

    .slideTxtBox .hd ul {
        height: 40px;
        /*width: 540px;*/
        /*background: #b2afb6;*/
        /*padding-left: 20px;*/
        /*padding-right: 20px;*/
        line-height: 40px;
        float: right;
    }

    .slideTxtBox .hd ul li {
        float: left;
        height: 40px;
        width: 100px;
        padding: 0 15px;
        cursor: pointer;
        background: #b2afb6;
        text-align: center;
    }

    .slideTxtBox .hd ul li.on {
        height: 40px;
        background: #fff;
        /*border: 1px solid #ddd;*/
        /*border-bottom: 2px solid #fff;*/
    }

    .slideTxtBox .bd{
        /*float: left;*/
        height: 400px;
        width: 1180px;
        /*margin: 20px 0px;*/
        margin: 20px auto;

    }

    .slideTxtBox .bd ul {
        /*width: 100%;*/
        /*height: 518px;*/
        /*border: 1px solid #dcdcdc;*/
        /*position: relative;*/
        /*padding: 15px;*/
        /*zoom: 1;*/

    }

    .slideTxtBox .bd li {
        width: 100%;
        height: 400px;
        float: left;
    }

    .slideTxtBox .bd li .date {
        /*float: right;*/
        color: #999;
    }

</style>


<?php echo template('header.html'); ?> 

<!---=======================-->

<div class="counsellors_xxx">
  <div class="slideTxtBox">
    <div class="hd">
      <h2> 这是一个测试</h2>
      <ul>
        <li>美国</li>
        <li>英国</li>
        <li>法国</li>
      </ul>
    </div>
    <div class="bd">
      <ul>
        <li>
          <div class="maketion_xxx">
            <div class="make_left_xxx">1</div>
            <div class="make_right_xxx">2</div>
          </div>
        </li>
      </ul>
      <ul>
        <li>
          <div class="maketion_xxx">
            <div class="make_left_xxx">10</div>
            <div class="make_right_xxx">20</div>
          </div>
        </li>
      </ul>
      <ul>
        <li>
          <div class="maketion_xxx">
            <div class="make_left_xxx">100</div>
            <div class="make_right_xxx">200</div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <script type="text/javascript">jQuery(".slideTxtBox").slide();</script> 
</div>

<div class="test"> 

<!--============================================================--> 
<!--<div class="con1">--> 
<!--<div class="con1left">--> 
<!--<div class="title1">--> 
<!--<?php echo templatetag::tag('首页第一行左侧栏目');?>--> 
<!--</div>--> 
<!--<div class="newstop">--> 
<!--<?php echo templatetag::tag('首页第一行左侧栏目图文头条');?>--> 
<!--</div>--> 
<!--<ul class="newsul">--> 
<!--<?php echo templatetag::tag('首页第一行左侧栏目列表3条');?>--> 
<!--</ul>--> 
<!--</div>--> 
<!--<div class="con1right">--> 
<!--<div class="title2">--> 
<!--<?php echo templatetag::tag('首页第一行右侧栏目');?>--> 
<!--</div>--> 
<!--<ul class="experts">--> 
<!--<?php echo templatetag::tag('首页第一行右侧栏目图文2条');?>--> 
<!--</ul>--> 
<!--</div>--> 
<!--</div>--> 
<!--<div class="con2">--> 
<!--<div class="con2title">--> 
<!--<?php echo templatetag::tag('首页第二行栏目');?>--> 
<!--</div>--> 
<!--<div class="con2_class">--> 
<!--<?php echo templatetag::tag('首页第二行子栏目');?>--> 
<!--</div>--> 
<!--<ul class="product">--> 
<!--<?php echo templatetag::tag('首页第二行栏目图片4条');?>--> 
<!--</ul>--> 
<!--</div>--> 
<!--<div class="con3">--> 
<!--<div class="con3left">--> 
<!--<div class="title1">--> 
<!--<?php echo templatetag::tag('首页第三行左侧栏目');?>--> 
<!--</div>--> 
<!--<script language="JavaScript" type="text/javascript" src="<?php echo $skin_path;?>/js/xFocus.o.js"></script>--> 
<!--<script language="JavaScript" type="text/javascript" src="<?php echo $skin_path;?>/js/nav.js"></script>--> 
<!--<div class="con3_about">--> 
<!--<div class="focus2" id="focus2">--> 
<!--<?php echo templatetag::tag('首页第三行左侧栏目图片4条');?>--> 
<!--</div>--> 
<!--<div class="con3_con"><?php echo templatetag::tag('首页第三行栏目说明');?></div>--> 
<!--</div>--> 
<!--</div>--> 
<!--<div class="con3right">--> 
<!--<div class="title2">--> 
<!--<?php echo templatetag::tag('首页第三行右侧栏目');?>--> 
<!--</div>--> 
<!--<div class="con3_contact">--> 
<!--<?php echo templatetag::tag('首页第三行右侧栏目图片');?>--> 
<!--</div>--> 
<!--</div>--> 
<!--</div>--> 
</div>
<?php echo template('footer.html'); ?>