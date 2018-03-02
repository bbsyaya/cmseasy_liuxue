<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>




<div class="con1">
    <div class="con1title">
        <?php echo templatetag::tag('首页第一行栏目子栏目');?>
    </div>
    <div class="con1left">
        <div class="focus2" id="focus2">
            <?php echo templatetag::tag('首页第一行栏目图片幻灯');?>
                    </div>
    </div>
    <div class="con1right">
        <div class="con1top">
            <?php echo templatetag::tag('首页第一行栏目头条');?>
        </div>
        <ul class="con1ul">
                     <?php echo templatetag::tag('首页第一行栏目列表8条');?>
                    </ul>
    </div>
</div>
<div class="marquee">
    <span><?php echo lang(siteannoun);?>：</span>
    <marquee><?php if(is_array(announ(3)))
foreach(announ(3) as $an) { ?><a href="<?php echo $an['url'];?>" title="<?php echo $an['title'];?>"><?php echo cut($an['title'],30);?>   [<?php echo $an['adddate'];?>]</a><?php } ?></marquee>
<div class="search10">
<form name='search' action="<?php echo url('archive/search');?>" onsubmit="search_check();" method="post">
<input type="text" name="keyword" value="<?php echo lang(pleaceinputtext);?>" onfocus="if(this.value=='<?php echo lang(pleaceinputtext);?>') {this.value=''}" onblur="if(this.value=='') this.value='<?php echo lang(pleaceinputtext);?>'" class="text10 png" />
<input name='submit' type="submit" value="" align="middle" class="button10 png" />
</form>
</div>
</div>
<div class="con2">
    <div class="con2title">
        <?php echo templatetag::tag('首页第二行栏目');?>
    </div>
    <div class="con2_box">
        <ul>
                        <?php echo templatetag::tag('首页第二行栏目4条');?>
                    </ul>
    </div>
</div>
<div class="con3">
    <div class="con3left">
        <div class="con3title">
            <?php echo templatetag::tag('首页第三行左侧栏目');?>
        </div>
        <div class="newstop">
           <?php echo templatetag::tag('首页第三行左侧栏目头条');?>
        </div>
        <ul class="newsul">
                        <?php echo templatetag::tag('首页第三行左侧栏目列表4条');?>
                    </ul>
    </div>
    <div class="con3right">
        <div class="con3title2">
            <?php echo templatetag::tag('首页第三行右侧栏目');?>
        </div>
        <div class="contact">
            <p class="telbg"><?php echo get(tel);?></p>
            <div>
                <?php echo lang(address);?>：<?php echo get(address);?><br />
<?php echo lang(tel);?>：<?php echo get(tel);?><br />
<?php echo lang(fax);?>：<?php echo get(fax);?><br />
<?php echo lang(email);?>：<?php echo get(email);?><br />
<?php echo lang(postcode);?>：<?php echo get('postcode');?><br />          </div>
        </div>
    </div>
</div>









<?php echo template('footer.html'); ?>