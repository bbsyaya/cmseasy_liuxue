<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php
if(front::get('case') == 'area'){
?>
<div class="left1">
<div class="left1_1">
<h3><?php echo lang(area);?></h3>
</div>
</div>
<div class="blank20"></div>
<?php
}elseif(front::get('case') == 'announ'){
?>
<div class="left1">
<div class="left1_1">
<h3><?php echo lang(announ);?></h3>
</div>
</div>
<div class="blank20"></div>
<?php
}elseif(front::get('case') == 'guestbook'){
?>
<div class="left1">
<div class="left1_1">
<h3><?php echo lang(guestbook);?></h3>
</div>
</div>
<div class="blank20"></div>
<?php
}elseif(front::get('case') == 'comment'){
?>
<div class="left1">
<div class="left1_1">
<h3><?php echo lang(comment);?></h3>
</div>
</div>
<div class="blank20"></div>
<?php
}elseif(front::get('case') == 'type'){
?>
<!--只展开当前栏目所在一级栏目下的分类-->
<?php $__pid = gettypeparentsid($typeid);?>



<?php if(is_array(typies()))
foreach(typies() as $t) { ?>
<?php if($t['typeid']==$__pid) { ?>
<div class="left1">
<div class="left1_t"></div>
<div class="left1_1">
<h3><?php echo $t['typename'];?></h3><span><?php echo $t['htmldir'];?></span>
</div>
<ul>
<?php if(is_array(typies($t['typeid'])))
foreach(typies($t['typeid']) as $t1) { ?>
<li href="<?php echo $t1['url'];?>"<?php if($t1['catid']==$catid) { ?> class="on"<?php } ?> ><a title="<?php echo $t1['typename'];?>" href="<?php echo $t1['url'];?>"<?php if($t1['typeid']==$typeid) { ?> class="on"<?php } ?>><?php echo $t1['typename'];?></a></li> 
<?php if(is_array(typies($t1['typeid'])))
foreach(typies($t1['typeid']) as $t2) { ?>  
<li><a title="<?php echo $t2['typename'];?>" href="<?php echo $t2['url'];?>"<?php if($t2['typeid']==$typeid) { ?> class="on"<?php } ?>><?php echo $t2['typename'];?></a></li>   
<?php if(is_array(typies($t2['typeid'])))
foreach(typies($t2['typeid']) as $t3) { ?>  
<li><a title="<?php echo $t3['typename'];?>" href="<?php echo $t3['url'];?>"<?php if($t3['typeid']==$typeid) { ?>  class="on"<?php } ?>><?php echo $t3['typename'];?></a></li>   
<?php } ?>  
<?php } ?>  
<?php } ?>
</ul>
<div class="left1_b"></div>
</div>		
<div class="blank20"></div>

<?php } ?>
<?php } ?>
<!--只展开当前栏目所在一级栏目下的分类-->

<?php
}elseif(front::get('case') == 'special'){
?>
<div class="left1">
<div class="left1_1">
<h3><?php echo lang(special);?></h3>
</div>
</div>
<div class="blank20"></div>
<?php
}elseif(front::get('case') == 'tag'){
?>
<div class="left1">
<div class="left1_1">
<h3><?php echo lang(tag);?></h3>
</div>
</div>
<div class="blank20"></div>
<?php
}elseif(front::get('case') == 'mailsubscription'){
?>

<?php
}else{

?>

<!--只展开当前栏目所在一级栏目下的分类-->
<?php $__pid = getcategoryparentsid($catid);?>
<?php if(is_array(categories()))
foreach(categories() as $t) { ?>
<?php if($t['catid']==$__pid) { ?>
<div class="left1">
<div class="left1_t"></div>
<div class="left1_1">
<h3><?php echo $t['catname'];?></h3><span><?php echo $t['htmldir'];?></span>
</div>
<ul>
<?php if(is_array(categories($t['catid'])))
foreach(categories($t['catid']) as $t1) { ?>
<li <?php if($t1['catid']==$catid) { ?> class="on"<?php } ?> ><a title="<?php echo $t1['catname'];?>" href="<?php echo $t1['url'];?>"<?php if($t1['catid']==$catid) { ?> class="on"<?php } ?>><?php echo $t1['catname'];?></a></li>
<?php if(is_array(categories($t1['catid'])))
foreach(categories($t1['catid']) as $t2) { ?>
<?php
$parents = category::getparentsid($catid);
?>
<?php if(in_array($t2['parentid'],$parents)) { ?>
<li><a title="<?php echo $t2['catname'];?>" href="<?php echo $t2['url'];?>"<?php if($t2['catid']==$catid) { ?> class="on"<?php } ?>>&nbsp;&nbsp;└<?php echo $t2['catname'];?></a></li> 
<?php if(is_array(categories($t2['catid'])))
foreach(categories($t2['catid']) as $t3) { ?>  
<li><a title="<?php echo $t3['catname'];?>" href="<?php echo $t3['url'];?>"<?php if($t3['catid']==$catid) { ?>  class="on"<?php } ?>>&nbsp;&nbsp;&nbsp;└<?php echo $t3['catname'];?></a></li>
<?php if(is_array(categories($t3['catid'])))
foreach(categories($t3['catid']) as $t4) { ?>  
<li><a title="<?php echo $t4['catname'];?>" href="<?php echo $t4['url'];?>"<?php if($t4['catid']==$catid) { ?>  class="on"<?php } ?>>&nbsp;&nbsp;&nbsp;&nbsp;└<?php echo $t4['catname'];?></a></li>
<?php if(is_array(categories($t4['catid'])))
foreach(categories($t4['catid']) as $t5) { ?>  
<li><a title="<?php echo $t5['catname'];?>" href="<?php echo $t5['url'];?>"<?php if($t5['catid']==$catid) { ?>  class="on"<?php } ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└<?php echo $t5['catname'];?></a></li>  
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>  
<?php } ?>
</ul>
<div class="left1_b"></div>
</div>			
<div class="blank20"></div>

<?php } ?>
<?php } ?>
<!--只展开当前栏目所在一级栏目下的分类-->


<?php
}
?>

        <div class="lefttitle2"><?php echo lang(contactus);?></div>
        <div class="leftbg">
            <div>
<?php echo lang(address);?>：<?php echo get(address);?><br />
<?php echo lang(tel);?>：<?php echo get(tel);?><br />
<?php echo lang(fax);?>：<?php echo get(fax);?><br />
<?php echo lang(email);?>：<?php echo get(email);?><br />
<?php echo lang(postcode);?>：<?php echo get('postcode');?><br />            </div>
        </div>
        <img src="<?php echo $skin_path;?>/images/leftbottom2.jpg" class="leftbottom"/>












