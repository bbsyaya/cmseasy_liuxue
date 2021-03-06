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


<div class="contentinfo pc_show"><?php echo lang(author);?>：<a><?php echo $archive['author'];?></a>&nbsp;&nbsp; <?php echo lang(adddate);?>：<?php echo $archive['adddate'];?>&nbsp;&nbsp; <?php echo lang(view);?>：<?php echo view_js($archive['aid']);?></div>



<div id="content" class="clear">
<!-- 正文 -->
<?php echo $archive['content'];?>
<div class="clear"></div>


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
<p> <?php echo setting::$var['archive'][$key]['cname'];?>: <?php echo $value;?></p>
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


<!-- 自定义表单开始 -->
<?php if($archive['showform']) { ?>
<?php echo template('myform/nrform.html'); ?>
<?php } ?>
<!-- 自定义表单结束 -->

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

<!-- 评论框开始 -->
<div class="pc_show">
<?php echo template('comment/comment.html'); ?>
</div>
<!-- 评论框结束 -->

<div class="blank30"></div>
<a title="<?php echo lang(gotop);?>" href="#" class="clear floatright"><img alt="<?php echo lang(gotop);?>" src="<?php echo $skin_url;?>/images/gotop.gif"></a>
<div class="blank30"></div>
</div>
<div class="clear"></div>
</div>
<!-- 右侧结束 -->

<div class="c_bottom"></div>
<div class="clear"></div>
</div>
<!-- 中部结束 -->


<?php echo template('width_max.html'); ?>

<?php echo template('footer.html'); ?>