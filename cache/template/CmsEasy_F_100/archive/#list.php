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

<div class="blank20"></div>

<!-- 内容列表开始 -->
<ul class="news10" >

<?php if(is_array($archives))
foreach($archives as $i => $arc) { ?>	


<?php if($i%4==0  &&   $i> 1) { ?>
<li style="background:none;"></li>
<?php } ?>


<li><span class="date2"><?php echo $arc['adddate'];?></span><span class="num fl"><?php echo $i+1;?></span><a target="_blank" href="<?php echo $arc['url'];?>" style="color:<?php echo $arc['color'];?>;"><?php echo $arc['title'];?></a></li>

<?php } ?>
</ul>
<!-- 内容列表结束 -->

<div id="content">



<div class="blank30"></div>

<!-- 内容列表分页开始 -->
<?php if(isset($pages)) { ?>
<?php echo category_pagination($catid);?>
<?php } ?>
<!-- 内容列表分页结束 -->

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
<?php echo template('footer.html'); ?>