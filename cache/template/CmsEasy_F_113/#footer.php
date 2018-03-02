<?php defined('ROOT') or exit('Can\'t Access !'); ?>












<div class="linksbg">
    <p class="tree"></p>
    <div class="linksbg2">
        <div class="links">
           <?php if(is_array(friendlink('text',0,20)))
foreach(friendlink('text',0,20) as $flink) { ?>
<a href="<?php echo $flink['url'];?>" target="_blank"><?php echo $flink['name'];?></a>
   <?php } ?>
                    </div>
    </div>
</div>
<div class="footbg">
    <div class="foot">
        <div class="footnav">
          <?php if(is_array(categories_nav()))
foreach(categories_nav() as $i => $t) { ?>
  <?php if($i>0) { ?>|<?php } ?>
  <a class="one<?php if(isset($topid) && $topid==$t['catid']) { ?> on<?php } ?>" href="<?php echo $t['url'];?>" title="<?php echo $t['catname'];?>" target="<?php if(config::get('nav_blank')==1) { ?> _blank<?php } ?>"><?php echo $t['catname'];?></a>
  <?php } ?>
                    </div>
    <p><span><?php echo lang(address);?>：<?php echo get(address);?></span><span><?php echo lang(tel);?>：<?php echo get(tel);?></span><span><?php echo lang(fax);?>：<?php echo get(fax);?></span></p>
<p><span><?php echo get('sitename');?>  <?php echo get(site_right);?></span><span><?php if(config::get('site_icp')) { ?>&nbsp;&nbsp;<a rel="nofollow" href="http://www.miibeian.gov.cn/" rel="nofollow" target="_blank"><?php echo get('site_icp');?></a><?php } ?><?php if(config::get('site_beian_number')) { ?>&nbsp;&nbsp;<a rel="nofollow" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=<?php echo get('site_beian_number');?>" rel="nofollow" target="_blank"><?php echo get('site_beian');?><?php echo lang(site_beian);?><?php echo get('site_beian_number');?><?php echo lang(number);?></a><?php } ?></span><span><?php echo getCopyRight();?></span><?php if($topid==0) { ?><span><?php echo lang(hotkeys);?>： <?php echo gethotsearch(10);?></span><?php } ?></p>
    </div>
</div>



<?php if(get('share')=='1') { ?>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"6","bdPos":"right","bdTop":"100"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<?php } ?>


<?php if(config::get('site_push')=='1') { ?>
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
<?php } ?>


<script type="text/javascript" src="<?php echo $base_url;?>/js/common.js"></script>
<script type="text/javascript"> 
// 公告滚动js
var t=setInterval(myfunc,1000); 
var oBox=document.getElementById("announ"); 
function myfunc(){ 
var o=oBox.firstChild 
oBox.removeChild(o) 
oBox.appendChild(o) 
} 
oBox.onmouseover=function()
{
clearInterval(t)
} 
oBox.onmouseout=function()
{
t=setInterval(myfunc,2000)//滚动时间，默认2秒
} 
</script>
<!-- 在线客服 -->
<?php echo template('system/servers.html'); ?>
<!-- 短信 -->
<?php echo template('system/sms.html'); ?>


<style>
.cleft_b{z-index:10000;}
</style>




</body>
</html>