<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<div class="mianbao">


<?php echo lang(nowposition);?> :
<a title="<?php echo get('sitename');?>" href="<?php echo $base_url;?>/"><?php echo get('sitename');?></a>
            	<?php
                if(front::get('case') == 'area'){
                ?>
                <?php echo area::getpositonhtml(get('province_id'),get('city_id'),get('section_id'),get('id'));?>
<?php
                }elseif($topid==0){
                ?>
<?php
                }elseif(front::get('case') == 'announ'){
                ?>
&gt;&gt;<a title="<?php echo lang(siteannoun);?>" href="#"><?php echo lang(siteannoun);?></a>
<?php
                }elseif(front::get('case') == 'guestbook'){
                ?>
&gt;&gt;<a title="<?php echo lang('guestbook');?>" href="#"><?php echo lang('guestbook');?></a>
<?php
                }elseif(front::get('case') == 'comment'){
                ?>
&gt;&gt;<a title="<?php echo $t['name'];?>" href="<?php echo $t['url'];?>"><?php echo lang('commentlist');?></a>
                <?php
                }elseif(front::get('case') == 'type'){
                ?>
                <?php echo type::getpositionhtml($type['typeid']);?>
                <?php
                }elseif(front::get('case') == 'special'){
                ?>
                &gt;&gt;<a title="<?php echo $special['title'];?>" href="#"><?php echo $special['title'];?></a>
                <?php
                }elseif(front::get('case') == 'tag'){
                ?>
                &gt;&gt;<a title="<?php echo $tag;?>" href="#"><?php echo $tag;?></a>
<?php
                }elseif(front::get('case') == 'mailsubscription'){
                ?>
&gt;&gt;<a href="#" title="<?php echo lang(mailsubscription);?>"><?php echo lang(mailsubscription);?></a>
                <?php
                }else{
                ?>
            	<?php if(is_array(position($catid)))
foreach(position($catid) as $t) { ?>&gt;&gt;<a title="<?php echo $t['name'];?>" href="<?php echo $t['url'];?>"><?php echo $t['name'];?></a>
<?php } ?>
                <?php
                }
                ?>
</div>
