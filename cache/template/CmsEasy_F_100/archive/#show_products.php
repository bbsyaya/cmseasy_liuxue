<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>
<div class="box box2">
<div class="box2_t"></div>
<div class="box2_b"></div>
<div class="left">
<?php echo template('left.html'); ?>
</div>
<div class="right">
<div class="right_t"></div>
<div class="right_b"></div>
<div class="title20">
<?php echo template('position.html'); ?>
<h5><?php echo $category[$catid]['catname'];?></h5><span><?php echo $category[$catid]['htmldir'];?></span>
</div>
<div class="title21"><?php echo $archive['title'];?></div>




<!-- 文章属性开始 -->
<div class="contentinfo pc_show"><?php echo lang(author);?>：<a href="javascript:void(0);" onclick="javascript:document.getElementById('addcontentuser').style.display='block';"><?php echo $archive['author'];?></a>&nbsp;&nbsp; <?php echo lang(adddate);?>：<?php echo $archive['adddate'];?>&nbsp;&nbsp; <?php echo lang(view);?> :<?php echo view_js($archive['aid']);?></div>
<!-- 文章属性结束 -->

<div id="content">

<!-- 购物车JS -->
<link type="text/css" href="<?php echo $base_url;?>/common/js/jquery/ui/jquery-ui-1.7.3.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="<?php echo $base_url;?>/common/js/jquery/ui/jquery-ui-1.7.3.custom.min.js"></script>
<script type="text/javascript">
$(function() {
$('#dialog').dialog({
autoOpen: false,
width   : 300,
buttons : {
"继续购物"    : function() {
$(this).dialog("close");
}, 
"去购物车结算": function() {
window.location.href= "<?php echo url('archive/orders',true);?>";
$(this).dialog("close");
}
}
});
$('#dialog_link').click(function(){
$.get("<?php echo url('archive/doorders/aid/'.$archive['aid'],true);?>", null,function(data){
if(data == 'limit'){
$("#dialog").html("<p>购物车最多能存12件商品</p>");
}
$('#dialog').dialog('open');
return false;
});
});
});
</script>
<!-- 加入购物车成功之后出现的窗口 -->
<div id="dialog" title="<?php echo lang(prompted);?>"><p><?php echo lang(add_to_cart);?></p></div>
<!-- /加入购物车成功之后出现的窗口 -->
<!-- /购物车JS -->


<div style="margin:0 0px;">
<style>
/*左侧图片*/
.frame_box{width:340px;float:left;}
/*大图*/
 #frame {width:100%;margin:0px;}
.frame {width:100%;  overflow:hidden;  vertical-align:middle; }
.frame .list {  list-style:none;  padding:0;  margin:0;  width:10000px; }
.frame .list li {  width:340px;  float:left;  text-align:center;  vertical-align:middle;  overflow:hidden; }
 #big_list li img {height:270px;max-width:320px;vertical-align:middle; padding:1px;padding:5px;  border:1px solid #ccc;  _border:none;  background:url(<?php echo $skin_path;?>/images/pic_bg.gif) left top no-repeat;  _background:none;  border-right:1px solid #ccc;   border-bottom:1px solid #ccc;}
/*小图 小图宽度要减去两个左右按钮*/
 .l_frame {width:280px;float:left;overflow:hidden;}
 .l_frame .list {list-style:none;padding:0;margin:0;width:10000px;}
 .l_frame .list li {float:left;height:50px;cursor:pointer; margin:0px 5px; padding:3px 2px 2px 3px;overflow:hidden;
  background:url(<?php echo $skin_path;?>/images/pic_bg.gif) left top no-repeat;border-right:1px solid white; border-bottom:1px solid white;}
 .l_frame .list li img {height:50px;width:50px;}
 .l_frame .list .cur {height:50px;overflow:hidden;}/*大图被选中*/
/*只有按钮*/
 .slide_nav_left {height:56px;width:26px;background:url(<?php echo $base_url;?>/images/goleft.gif) left center no-repeat; display:block;float:left;margin-left:2px;text-indent:-10000px;}
 .slide_nav_right { height:56px; width:26px;background:url(<?php echo $base_url;?>/images/goright.gif) right center no-repeat;display:block;float:left;text-indent:-10000px; }
/*右侧列表*/
 #pro_baseinfo{float:left;width:240px;margin: 0 0 0 20px;}
 #pro_baseinfo img{background:none;}
 .pro_baseinfo2 li{width:100%;}
 #content .pro_baseinfo2 li.buyshopping img{width:45%;max-width: 130px;min-width: 80px;}
 </style>
 <!-- 添加css结束 -->
<div class="blank30"></div>
<!-- 幻灯片开始 -->

<div class="frame_box">
<?php if($archive['pics']) { ?>
<div id="frame">
<!-- 大图片列表开始 -->
<div id="big_frame" class="frame">
<ul id="big_list" class="list">
<?php if(is_array($archive['pics']))
foreach($archive['pics'] as $pic) { ?><li><img src="<?php echo $pic['url'];?>" onerror='this.src="<?php echo config::get('onerror_pic');?>"' /></li><?php } ?>
</ul>
</div>
<!-- 大图片列表结束 -->
</div>
<?php } ?>
<div class="blank10"></div>
<!-- 小图片列表开始 -->
<a id="back" class="slide_nav_left" href="#">left</a>
<div id="small_frame" class="l_frame">
<ul id="small_list" class="list">
<?php if(is_array($archive['pics']))
foreach($archive['pics'] as $pic) { ?><li><img src="<?php echo $pic['url'];?>" onerror='this.src="<?php echo config::get('onerror_pic');?>"' /></li><?php } ?>
</ul>
</div>
<a id="forward" class="slide_nav_right" href="#">right</a>
<!-- 小图片列表结束 -->
<!-- 幻灯片结束 -->
</div>
<!-- 右侧说明 -->
<div id="pro_baseinfo">
<ul>
<li><strong><?php echo lang(productname);?>：</strong><?php echo $archive['title'];?></li>
<?php if($archive['attr2']) { ?>
<?php if($archive['attr2']==$archive['oldprice']) { ?>
<li><strong><?php echo lang(price);?>：</strong><span><?php echo $archive['attr2'];?></span><?php echo lang(unit);?></li>
<?php } else { ?>
<li><strong><?php echo lang(list_price);?>：</strong><span style="text-decoration:line-through;"><?php echo $archive['oldprice'];?></span><?php echo lang(unit);?> </li>
<li><strong><?php echo lang(discount);?>：</strong><span><?php echo $archive['attr2'];?></span><?php echo lang(unit);?></li>
<?php } ?>
</li>
<?php } ?>
<li><strong><?php echo lang(view);?>：</strong><?php echo view_js($archive['aid']);?></li>
<li><strong><?php echo lang(adddate);?>：</strong><?php echo $archive['adddate'];?></li>
<li>&nbsp;</li>
<?php if($archive['attr2']) { ?><li><a target="_blank" href="<?php echo url('archive/orders/aid/'.$archive['aid'],true);?>"><img style="width:45%;" src="<?php echo $skin_path;?>/images/buy.gif" /></a>&nbsp;&nbsp;<a id="dialog_link" title="<?php echo lang(makeorders);?>" href="#"><img style="width:45%;" src="<?php echo $skin_path;?>/images/shopping.gif" /></a></li><?php } ?>
</ul>
</div>
</div><!-- margin:0 20px; -->


<!-- 右侧说明 -->
<div class="pro_baseinfo2 mp_show">
<ul>
<li><strong><?php echo lang(productname);?>：</strong><?php echo $archive['title'];?></li>
<?php if($archive['attr2']) { ?>
<?php if($archive['attr2']==$archive['oldprice']) { ?>
<li><strong><?php echo lang(price);?>：</strong><span><?php echo $archive['attr2'];?></span><?php echo lang(unit);?></li>
<?php } else { ?>
<li><strong><?php echo lang(list_price);?>：</strong><span style="text-decoration:line-through;"><?php echo $archive['oldprice'];?></span><?php echo lang(unit);?> </li>
<li><strong><?php echo lang(discount);?>：</strong><span><?php echo $archive['attr2'];?></span><?php echo lang(unit);?></li>
<?php } ?>
</li>
<?php } ?>
<li><strong><?php echo lang(view);?>：</strong><?php echo view_js($archive['aid']);?></li>
<li><strong><?php echo lang(adddate);?>：</strong><?php echo $archive['adddate'];?></li>
<li><strong><?php echo lang(strgrades);?>：</strong><?php echo $archive['strgrade'];?></li>
<li>&nbsp;</li>
<?php if($archive['attr2']) { ?><li class="buyshopping"><a target="_blank" href="<?php echo url('archive/orders/aid/'.$archive['aid'],true);?>"><img  src="<?php echo $skin_path;?>/images/buy.gif" /></a>&nbsp;&nbsp;<a id="dialog_link" title="<?php echo lang(makeorders);?>" href="#"><img src="<?php echo $skin_path;?>/images/shopping.gif" /></a></li><?php } ?>
</ul>
</div>



<div class="blank30"></div>

<!-- 正文 -->
<?php echo $archive['content'];?>

<div class="blank30"></div>


<?php if($archive['attr2']) { ?>
<!-- 价格 -->
<div class="blank10"></div>
<?php echo lang(productprice);?>： <?php echo $archive['attr2'];?>
<?php } ?>

<?php if($archive['tag']) { ?>
<!-- tag -->
<div class="blank10"></div>
<?php echo lang(tag);?>： <?php echo $archive['tag'];?>
<?php } ?>

<?php if($archive['special']) { ?>
<!-- 专题 -->
<div class="blank10"></div>
<?php echo lang(special);?>： <?php echo $archive['special'];?>
<?php } ?>


<?php if($archive['type']) { ?>
<!-- 分类 -->
<div class="blank10"></div>
<?php echo lang(type);?>： <?php echo $archive['type'];?>
<?php } ?>


<?php if($archive['area']) { ?>
<!-- 地区 -->
<div class="blank10"></div>
<?php echo lang(area);?>： <?php echo $archive['area'];?>
<?php } ?>

<div class="blank30"></div>
<?php if($pages>1) { ?>
<!-- 内页分页 -->
<div class="blank10"></div>
<div class="pages">
<?php echo archive_pagination($archive);?>
</div>
<div class="blank30"></div>
<?php } ?>


<?php
/*$set_field=type::getpositionlink($data['typeid']);
$set_fields=array();
if(is_array($set_field))
foreach($set_field as $key => $value) {
    $set_fields[]=$value['id'];
}*/
?><!--自动调用自定义字段-->
<?php echo cb_data($archive);?>
<?php if(is_array($archive))
foreach($archive as $key => $value) { ?>
<?php
/*if(setting::$var['archive'][$name]['typeid'] && !in_array(setting::$var['archive'][$name]['typeid'],$set_fields)){
  unset($field[$name]);
  continue;
}*/
?>
<?php if(!preg_match('/^my/',$key) || !$value) continue; ?>
<?php
$category = category::getInstance();
$sonids = $category->sons(setting::$var['archive'][$key]['catid']);
if(setting::$var['archive'][$key]['catid'] != $archive['catid'] && !in_array($archive['catid'],$sonids) && (setting::$var['archive'][$key]['catid'])){
unset($field[$key]);
    continue;
}
?>
<?php } ?>
<div class="blank20"></div>


<?php if(archive_attachment($archive['aid'],'id')) { ?>
<!-- 附件 -->
<p>
<?php echo lang(attachment);?>：<?php echo attachment_js($archive['aid']);?>
</p>
<?php } ?>
<div class="blank30"></div>

<?php if(hasflash()) { ?>
<div style="color:red;font-size:16px;"><?php echo showflash(); ?></div><?php } ?>

<!-- 投票 -->
<?php echo vote_js($archive['aid']);?>


<?php if(get('share')=='1') { ?>
<!-- 分享 -->
<div class="blank30"></div>
<?php echo template('system/share.html'); ?>
<?php } ?>

<div class="blank10"></div>

<!-- 相关文章开始 -->
<?php if(is_array($likenews)) { ?>
<div class="blank30"></div>
<div class="p_info"><?php echo lang(relatedcontent);?>：<?php echo $archive['tag'];?></div>
<div class="blank10"></div>
<ul class="news_list">
  <?php if(is_array($likenews))
foreach($likenews as $item) { ?>
  <li><a href="<?php echo url('archive/show/id/'.$item['aid']);?>"><?php echo cut($item['title'],20);?></a></li>
  <?php } ?>
  </ul>
<?php } ?>
<!-- 相关文章结束 -->

<!-- 打印本文 关闭本页面 留言评论 -->
<div class="pc_show">
<div class="blank10"></div>
<?php if(hasflash()) { ?>
<div style="color:red;font-size:16px;"><?php echo showflash(); ?></div><?php } ?>
<script language="JavaScript">
function shutwin(){
window.close();
return;}
</script>
<div class="blank10"></div>
<div class="line_2"></div>
<div id="tool">
<ul>
<li><a href="javascript:window.print()" class="print"><?php echo lang(printcontent);?></a></li>
<li><a href="javascript:shutwin()" class="close"><?php echo lang(shutwin);?></a></li>
<li style="width:90px; padding-left:5px;"><a href='<?php echo url('comment/list/aid/'.$archive['aid']); ?>' class="t_4"><?php echo lang(comment);?></a></li>
<?php if($archive['attr2']) { ?>
<li><a title="<?php echo lang(makeorders);?>" target="_blank" href="<?php echo url('archive/orders/aid/'.$archive['aid'],true);?>" class="orders"><?php echo lang(makeorders);?></a></li>
<?php } ?>
</ul>
</div>
<div class="line_2"></div>
<div class="blank30"></div>
</div>
<!-- /打印本文 关闭本页面 留言评论 -->

<!-- 上下页开始 -->
<div id="page">
<?php if($archive['p']['aid']) { ?>
<strong><?php echo lang(archivep);?>：</strong><a href="<?php echo $archive['p']['url'];?>"><?php echo $archive['p']['title'];?></a>
<?php } else { ?>
<strong><?php echo lang(archivep);?>：</strong><?php echo lang(nopage);?>	
<?php } ?>
<div class="clear"></div>
<?php if($archive['n']['aid']) { ?>
 <strong><?php echo lang(archiven);?>：</strong><a href="<?php echo $archive['n']['url'];?>"><?php echo $archive['n']['title'];?></a>
<?php } else { ?>
<strong><?php echo lang(archiven);?>：</strong><?php echo lang(nopage);?>	
<?php } ?>
</div>
<!-- 上下页结束 -->

<!-- 相关产品 -->
<div class="blank30 pc_show"></div>
<div class="p_info pc_show"><?php echo lang(related_products);?>：</div>
<div class="blank30 pc_show"></div>




<!-- 滚动图片开始 -->
<script type="text/javascript" src="<?php echo $skin_path;?>/js/jquery.bxSlider.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
<!--用于滚动图片-->
    if($('#scroll a').length > 0){
$('#scroll').bxSlider({
auto: true,
displaySlideQty:4,
prevText: '',
nextText: '',
moveSideQty: 1
});
}
});
</script>

<div class="scroll pc_show" >
<ul id="scroll" class="">
<?php if(is_array(archive($catid,0,0,'0,0,0',20,'rand()',10,true,0)))
foreach(archive($catid,0,0,'0,0,0',20,'rand()',10,true,0) as $i => $archive) { ?>
<li><div class="img-wrap"><a title="<?php echo $archive['stitle'];?>" target="_blank" href="<?php echo $archive['url'];?>"><img alt="<?php echo $archive['stitle'];?>" src="<?php echo $archive['thumb'];?>" onerror='this.src="<?php echo $base_url;?>/<?php echo config::get('onerror_pic');?>"' /></a></div>
<h5><a title="<?php echo $archive['stitle'];?>" target="_blank" href="<?php echo $archive['url'];?>"><?php echo $archive['title'];?></a></h5>
</li>
<?php } ?>
</ul>
</div>
<!-- 滚动图片结束 -->



<!-- 评论框开始 -->
<div class="pc_show">
<?php echo template('comment/comment.html'); ?>
</div>
<!-- 评论框结束 -->

<!-- 自定义表单开始 -->
<?php if($archive['showform']) { ?>
<?php echo template('myform/nrform.html'); ?>
<?php } ?>
<!-- 自定义表单结束 -->

<div class="blank30"></div>
<a title="<?php echo lang(gotop);?>" href="#" class="clear floatright"><img alt="<?php echo lang(gotop);?>" src="<?php echo $skin_url;?>/images/gotop.gif"></a>
<div class="blank30"></div>
<div class="clear"></div>
</div>
</div>
<!-- 右侧结束 -->

<div class="c_bottom"></div>
<div class="clear"></div>
</div>
<!-- 中部结束 -->

<script type="text/javascript">
//初始化
function C_slider(frame,list,Lframe,Llist,forwardEle,backEle,scrollType,LscrollType,acitonType,autoInterval){
 this.frame = frame;
 this.list = list;
 this.Lframe = Lframe;
 this.Llist = Llist;
 this.forwardEle = forwardEle;
 this.backEle = backEle;
 this.scrollType = scrollType;
 this.LscrollType = LscrollType;
 this.acitonType = acitonType;
 this.autoInterval = autoInterval;
 this.slideLength = $("#"+this.Llist+" > li").length;//总的slider数量
 this.currentSlide = 0;
 this.FrameHeight = $("#"+this.frame).height();
 this.FrameWidth = $("#"+this.frame).width();
 this.lFrameHeight = $("#"+this.Lframe).height();
 this.lFrameWidth = $("#"+this.Lframe).width();
 this.lListHeight = $("#"+this.Llist+" >li").eq(0).outerHeight(true);
 this.lListWidth = $("#"+this.Llist+" >li").eq(0).outerWidth(true);
 var self = this;
 for(var i = 0; i<this.slideLength; i++) {
  $("#"+this.Llist+" > li").eq(i).data("index",i);
  $("#"+this.Llist+" > li").eq(i).bind(this.acitonType,function(){
   self.go($(this).data("index"));
  });
 };
 //给"上一个"、"下一个"按钮添加动作
 $("#"+this.forwardEle).bind('click',function(){
  self.forward();
  return false;
 });
 $("#"+this.backEle).bind('click',function(){
  self.back();
  return false;
 });
 //定论鼠标划过时，自动轮换的处理
 $("#"+this.frame+",#"+this.Lframe+",#"+this.forwardEle+",#"+this.backEle).bind('mouseover',function(){
  clearTimeout(self.autoExt);
 });
 $("#"+this.frame+",#"+this.Lframe+",#"+this.forwardEle+",#"+this.backEle).bind('mouseout',function(){
  clearTimeout(self.autoExt);
  self.autoExt = setTimeout(function(){
   self.extInterval();
  },self.autoInterval);
 }); 
 //开始自动轮换
 this.autoExt = setTimeout(function(){
  self.extInterval();
 },this.autoInterval);
}
//执行运动
C_slider.prototype.go = function(index){
 this.currentSlide = index;
 if (this.scrollType == "left"){
  $("#"+this.list).animate({
   marginLeft: (-index*this.FrameWidth)+"px"
  }, {duration:600,queue:false});   
 } else if (this.scrollType == "top"){
  $("#"+this.list).animate({
   marginTop: (-index*this.FrameHeight)+"px"
  }, {duration:600,queue:false});   
 }
 $("#"+this.Llist+" > li").removeClass("cur");
 $("#"+this.Llist+" > li").eq(index).addClass("cur");
 //对于缩略图的滚动处理
 if(this.LscrollType == "left"){
  if(this.slideLength*this.lListWidth > this.lFrameWidth){
   var spaceWidth = (this.lFrameWidth - this.lListWidth)/2;
   var hiddenSpace = this.lListWidth*this.currentSlide - spaceWidth;
   
   if (hiddenSpace > 0){
    if(hiddenSpace+this.lFrameWidth <= this.slideLength*this.lListWidth){
     $("#"+this.Llist).animate({
      marginLeft: -hiddenSpace+"px"
     }, {duration:600,queue:false}); 
    } else {
     var endHidden = this.slideLength*this.lListWidth - this.lFrameWidth;
     $("#"+this.Llist).animate({
      marginLeft: -endHidden+"px"
     }, {duration:600,queue:false}); 
    }
   } else {
    $("#"+this.Llist).animate({
     marginLeft: "0px"
    }, {duration:600,queue:false}); 
   }
  }
 } else if (this.LscrollType == "top"){
  if(this.slideLength*this.lListHeight > this.lFrameHeight){
   var spaceHeight = (this.lFrameHeight - this.lListHeight)/2;
   var hiddenSpace = this.lListHeight*this.currentSlide - spaceHeight;
   if (hiddenSpace > 0){
    if(hiddenSpace+this.lFrameHeight <= this.slideLength*this.lListHeight){
     $("#"+this.Llist).animate({
      marginTop: -hiddenSpace+"px"
     }, {duration:600,queue:false}); 
    } else {
     var endHidden = this.slideLength*this.lListHeight - this.lFrameHeight;
     $("#"+this.Llist).animate({
      marginTop: -endHidden+"px"
     }, {duration:600,queue:false}); 
    }
   } else {
    $("#"+this.Llist).animate({
     marginTop: "0px"
    }, {duration:600,queue:false}); 
   }
  }
 }
}
//前进
C_slider.prototype.forward = function(){
 if(this.currentSlide<this.slideLength-1){
  this.currentSlide += 1;
  this.go(this.currentSlide);
 }else {
  this.currentSlide = 0;
  this.go(0);
 }
}
//后退
C_slider.prototype.back = function(){
 if(this.currentSlide>0){
  this.currentSlide -= 1;
  this.go(this.currentSlide);
 }else {
  this.currentSlide = this.slideLength-1;
  this.go(this.slideLength-1);
 }
}
//自动执行
C_slider.prototype.extInterval = function(){
 if(this.currentSlide<this.slideLength-1){
  this.currentSlide += 1;
  this.go(this.currentSlide);
 }else {
  this.currentSlide = 0;
  this.go(0);
 }
 var self = this;
 this.autoExt = setTimeout(function(){
  self.extInterval();
 },this.autoInterval);
}
//实例化对象 
var goSlide1 = new C_slider("big_frame","big_list","small_frame","small_list","forward","back","left","left","click",3000);
var goSlide2 = new C_slider("big_frame2","big_list2","small_frame2","small_list2","forward2","back2","top","left","click",5000);
var goSlide3 = new C_slider("big_frame3","big_list3","small_frame3","small_list3","forward3","back3","left","top","click",3000);
var goSlide4 = new C_slider("big_frame4","big_list4","small_frame4","small_list4","forward4","back4","top","top","click",2000);
</script>

<?php echo template('width_max.html'); ?>

<?php echo template('footer.html'); ?>