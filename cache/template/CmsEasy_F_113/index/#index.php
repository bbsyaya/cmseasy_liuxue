<?php defined('ROOT') or exit('Can\'t Access !'); ?>
﻿<link href="../skin/hu.css" rel="stylesheet" type="text/css">
<link href="../skin/style.css" rel="stylesheet" type="text/css">

<?php echo template('header.html'); ?> 
<!---============幻灯片 start===========-->
<div class="focusBoxAll">
<div class="focusleft">
  <div class="focusBox">
    <ul class="pic">
      <?php echo templatetag::tag('首页幻灯片');?>
    </ul>
    <div class="txt-bg"></div>
    <div class="txt">
      <ul>
        <?php echo templatetag::tag('首页幻灯文字');?>
      </ul>
    </div>
    <ul class="num">
      <li><a>1</a><span></span></li>
      <li><a>2</a><span></span></li>
      <li><a>3</a><span></span></li>
      <li><a>4</a><span></span></li>
      <li><a>5</a><span></span></li>
    </ul>
  </div>
</div>	
  <div class="focusRight">
    <div class="title2"> <?php echo templatetag::tag('首页第一行右侧栏目');?> </div>
    <ul class="experts">
  							<?php echo templatetag::tag('首页第一行右侧栏目列表8条');?>
    </ul>
  </div>


</div>



<script type="text/javascript">
jQuery(".focusBox").slide({ titCell:".num li", mainCell:".pic",effect:"fold", autoPlay:true,trigger:"click",
//下面startFun代码用于控制文字上下切换
startFun:function(i){
 jQuery(".focusBox .txt li").eq(i).animate({"bottom":0}).siblings().animate({"bottom":-36});
}
});
</script> 

<!---============幻灯片  end===========-->


<div class="counsellors_huandeng">
  <div class="hd">
    <h2> 名师团队</h2>
  </div>
</div>
  <div class="blank10"></div>


<div class="mingshipic">
  <div class="scrollBox" style="margin:0 auto">
<div class="ohbox">
<ul class="piclist">
 <?php echo templatetag::tag('名师团队');?>

</ul>
</div>
<div class="pageBtn">
<span class="prev"></span>
<span class="next"></span>				
</div>
</div>
<script type="text/javascript">
/* 控制左右按钮显示 */
jQuery(".scrollBox").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.5) },function(){ jQuery(this).find(".prev,.next").fadeOut() });

jQuery(".scrollBox").slide({ titCell:".list li", mainCell:".piclist", effect:"left",vis:4,scroll:2,delayTime:800,trigger:"click",easing:"easeOutCirc"});


</script>

</div>
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