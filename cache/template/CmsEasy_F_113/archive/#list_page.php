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
<div id="content">


<!-- 内容 -->
<?php
$page = intval(front::$get['page']);
if($page==0)$page=1;
$content = $category[$catid][categorycontent];
$contents = preg_split('%<div style="page-break-after(.*?)</div>%si', $content);
if ($contents) {
$pages = count($contents);
front::$record_count = $pages * config::get('list_pagesize');
$category[$catid][categorycontent] = $contents[$page - 1];
}
?>
<?php echo $category[$catid]['categorycontent'];?>

<div class="blank30"></div>
<?php if($pages>1) { ?>
<!-- 内页分页 -->
<div class="blank10"></div>
<div class="pages">
<?php echo category_pagination($catid);?>
</div>
<div class="blank30"></div>
<?php } ?>
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



<?php echo template('width_max.html'); ?>

<?php echo template('footer.html'); ?>