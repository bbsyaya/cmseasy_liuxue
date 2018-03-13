<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="CmsEasy 5_7_0_20180208_UTF8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title><?php echo getTitle($archive,$category,$catid,$type);?><?php if($topid==0) { ?><?php } else { ?> - <?php echo get(sitename);?><?php } ?></title>
<meta name="keywords" content="<?php echo getKeywords($archive,$category,$catid,$type);?>" />
<meta name="description" content="<?php echo getDescription($archive,$category,$catid,$type);?>" />
<meta name="author" content="CmsEasy Team" />
<link rel="icon" href="<?php echo get(site_ico);?>" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo get(site_ico);?>" type="image/x-icon" />
<!-- 调用样式表 -->
<link rel="stylesheet" href="<?php echo $skin_path;?>/base.css" type="text/css" media="all"  />
<link rel="stylesheet" href="<?php echo $skin_path;?>/reset.css" type="text/css" media="all"  />
<link rel="stylesheet" href="<?php echo $skin_path;?>/hu.css" type="text/css" media="all"  />
<link rel="stylesheet" href="<?php echo $skin_path;?>/style.css" type="text/css"  media="all"  />
<?php if(get('mobile_open')=='1') { ?><script type="text/javascript">var cmseasy_wap_tpa=1,cmseasy_wap_tpb=1,cmseasy_wap_url='<?php echo $base_url;?>/wap';</script>

<script src="<?php echo $skin_path;?>/js/mobile.js" type="text/javascript"></script><?php } ?>
<script type="text/javascript" src="<?php echo $skin_path;?>/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo $skin_path;?>/js/jquery.SuperSlide.2.1.1.js"></script>

<!--[if IE 6]>
<SCRIPT src="<?php echo $skin_path;?>/js/iepng.js"></SCRIPT>
<SCRIPT>DD_belatedPNG.fix('div,img,span,li,a')</SCRIPT>
<![endif]-->
<script language="javascript" type="text/javascript">
function killerrors()
{
return true;
}
window.onerror = killerrors;
</script>
</head>
 <body>




<div class="banner-box">
    	<div class="banner">
<script type="text/javascript" src="<?php echo $skin_path;?>/js/lrtk.js"></script>
<style>
.fla{height:<?php echo get('slide_height');?>px;}
.banner{height:<?php echo get('slide_height');?>px;}
.focus{height:<?php echo get('slide_height');?>px;}
.rslides{height:<?php echo get('slide_height');?>px;}
.rslides li{height:<?php echo get('slide_height');?>px;}
.rslides .rslides_li1 a{background:url(<?php echo get(slide_pic1);?>) center center no-repeat;display:block;height:<?php echo get('slide_height');?>px;}
.rslides .rslides_li2 a{background:url(<?php echo get(slide_pic2);?>) center center no-repeat;display:block;height:<?php echo get('slide_height');?>px;}
.rslides .rslides_li3 a{background:url(<?php echo get(slide_pic3);?>) center center no-repeat;display:block;height:<?php echo get('slide_height');?>px;}
.rslides .rslides_li4 a{background:url(<?php echo get(slide_pic4);?>) center center no-repeat;display:block;height:<?php echo get('slide_height');?>px;}
.rslides .rslides_li5 a{background:url(<?php echo get(slide_pic5);?>) center center no-repeat;display:block;height:<?php echo get('slide_height');?>px;}
</style>
<div class="focus">
<ul class="rslides f426x240">
<?php if(get('slide_number')=='1') { ?>
<li class="rslides_li1"><a href="<?php echo get(slide_pic1_url);?>" target="_blank"></a></li>
<?php } elseif (get('slide_number')=='2') { ?>
<li class="rslides_li1"><a href="<?php echo get(slide_pic1_url);?>" target="_blank"></a></li>
<li class="rslides_li2"><a href="<?php echo get(slide_pic2_url);?>" target="_blank"></a></li>
<?php } elseif (get('slide_number')=='3') { ?>
<li class="rslides_li1"><a href="<?php echo get(slide_pic1_url);?>" target="_blank"></a></li>
<li class="rslides_li2"><a href="<?php echo get(slide_pic2_url);?>" target="_blank"></a></li>
<li class="rslides_li3"><a href="<?php echo get(slide_pic3_url);?>" target="_blank"></a></li>
<?php } elseif (get('slide_number')=='4') { ?>
<li class="rslides_li1"><a href="<?php echo get(slide_pic1_url);?>" target="_blank"></a></li>
<li class="rslides_li2"><a href="<?php echo get(slide_pic2_url);?>" target="_blank"></a></li>
<li class="rslides_li3"><a href="<?php echo get(slide_pic3_url);?>" target="_blank"></a></li>
<li class="rslides_li4"><a href="<?php echo get(slide_pic4_url);?>" target="_blank"></a></li>
<?php } elseif (get('slide_number')=='5') { ?>
<li class="rslides_li1"><a href="<?php echo get(slide_pic1_url);?>" target="_blank"></a></li>
<li class="rslides_li2"><a href="<?php echo get(slide_pic2_url);?>" target="_blank"></a></li>
<li class="rslides_li3"><a href="<?php echo get(slide_pic3_url);?>" target="_blank"></a></li>
<li class="rslides_li4"><a href="<?php echo get(slide_pic4_url);?>" target="_blank"></a></li>
<li class="rslides_li5"><a href="<?php echo get(slide_pic5_url);?>" target="_blank"></a></li>
<?php } ?>
</ul>
</div>
</div><!-- banner结束 -->
    <div class="topbg">
        <a class="logo" title="<?php echo get(sitename);?>" href="<?php echo $base_url;?>/"><img src="<?php echo get('site_logo');?>" alt="<?php echo get(sitename);?>" width="<?php echo get(logo_width);?>" height="<?php echo get(logo_height);?>" /><span><?php echo get(sitename);?></span></a>
        <p class="toptel"><?php echo get(tel);?></p>
    </div>
    <div class="nav">
         <ul id="navmenu"> 
<li class="one<?php if($topid==0) { ?> on<?php } ?>"><a class="navbtn1 aa<?php if($topid==0) { ?> on<?php } ?>" title="<?php echo lang(backhome);?>" href="<?php echo $base_url;?>/"><?php echo lang(homepage);?></a></li>
<?php if(is_array(categories_nav()))
foreach(categories_nav() as $i => $t) { ?>
<li class="one<?php if(isset($topid) && $topid==$t['catid']) { ?> on<?php } ?>"><a class="navbtn<?php echo $i+2;?> aa<?php if(isset($topid) && $topid==$t['catid']) { ?> on<?php } ?>" href="<?php echo $t['url'];?>" title="<?php echo $t['catname'];?>" target="<?php if(config::get('nav_blank')==1) { ?> _blank<?php } ?>"><?php echo $t['catname'];?></a>
<?php if(count(categories($t['catid']))) { ?><ul>
<?php if(is_array(categories_nav($t['catid'])))
foreach(categories_nav($t['catid']) as $t1) { ?>
<li><a title="<?php echo $t1['catname'];?>" href="<?php echo $t1['url'];?>"><?php echo $t1['catname'];?></a>
<?php if(count(categories($t1['catid']))) { ?><ul><?php if(is_array(categories_nav($t1['catid'])))
foreach(categories_nav($t1['catid']) as $t2) { ?><span></span>
<li><a title="<?php echo $t2['catname'];?>" href="<?php echo $t2['url'];?>"><?php echo $t2['catname'];?></a>
<?php if(count(categories($t2['catid']))) { ?><ul><?php if(is_array(categories_nav($t2['catid'])))
foreach(categories_nav($t2['catid']) as $t3) { ?><span></span>
<li><a title="<?php echo $t3['catname'];?>" href="<?php echo $t3['url'];?>"><?php echo $t3['catname'];?></a>
<?php if(count(categories($t3['catid']))) { ?><ul><?php if(is_array(categories_nav($t3['catid'])))
foreach(categories_nav($t3['catid']) as $t4) { ?><span></span>
<li><a title="<?php echo $t4['catname'];?>" href="<?php echo $t4['url'];?>"><?php echo $t4['catname'];?></a>
<?php if(count(categories($t4['catid']))) { ?><ul><?php if(is_array(categories($t4['catid'])))
foreach(categories($t4['catid']) as $t5) { ?><span></span>
<li><a title="<?php echo $t5['catname'];?>" href="<?php echo $t5['url'];?>"><?php echo $t5['catname'];?></a></li> 
<?php } ?></ul><?php } ?>
</li> 
<?php } ?></ul><?php } ?>
</li>
<?php } ?></ul><?php } ?>
</li>
<?php } ?></ul><?php } ?>
</li> 
<?php } ?></ul><?php } ?>
</li><?php } ?>
      </ul>
            </div>
    <p class="waves"></p>
</div>
<div class="marqueebg">
    <div class="marquee">
        <span><?php echo lang(siteannoun);?>：</span>
        <marquee><?php if(is_array(announ(3)))
foreach(announ(3) as $an) { ?><a href="<?php echo $an['url'];?>" title="<?php echo $an['title'];?>"><?php echo cut($an['title'],30);?>   [<?php echo $an['adddate'];?>]</a><?php } ?></marquee>
         <div class="sousuo10">
<form name='search' action="<?php echo url('archive/search');?>" onsubmit="search_check();" method="post">
<input type="text" name="keyword" value="<?php echo lang(pleaceinputtext);?>" onfocus="if(this.value=='<?php echo lang(pleaceinputtext);?>') {this.value=''}" onblur="if(this.value=='') this.value='<?php echo lang(pleaceinputtext);?>'" class="text10" />
<input name='submit' type="submit" value="搜索" align="middle" class="btn10" />
</form>
</div>
    </div>
</div>