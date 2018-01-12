<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div class="review-comment-box">
<div class="ui-block ui-block-title">
<div class="ui-title ui-title-line">
<h3>我的点评</h3><span>假如您的点评没有奖励8264币，请联系工作人员QQ1919501975询问原因</span>
</div>
</div>
<div class="ui-block ui-block-content">
<div class="comment-main">
<div id="post_<?php echo $mycomment['pid'];?>" class="comment-list-box">
<div class="avatar-box">
<a href="home.php?mod=space&amp;uid=<?php echo $mycomment['authorid'];?>" class="user-avatar" target="_blank" rel="nofollow"><?php echo avatar($mycomment['authorid'], small); ?><span class="user-name"><?php echo $mycomment['author'];?></span>
</a>
</div>
<div class="comment-word">
<div class="rows-content row-color-1">
<div class="commAttr">
<i class="attrs-icon comm"></i>难度评价
</div>
<div class="attrValues">
<div class="rating-level big-rating clist-rating">
<span class="score-value score-value-<?php echo $mycomment['starnum']*2; ?>">
<em></em>
</span>
<span>(<?php if($mycomment['starnum']==1) { ?>非常简单<?php } elseif($mycomment['starnum']==2) { ?>简单<?php } elseif($mycomment['starnum']==3) { ?>难<?php } elseif($mycomment['starnum']==4) { ?>困难<?php } elseif($mycomment['starnum']==5) { ?>非常困难<?php } ?>)</span>
</div>
</div>
</div>
<div class="rows-content row-color-2">
<div class="commAttr">
<i class="attrs-icon date"></i>攀登日期
</div>
<div class="attrValues">
<p><?php echo dgmdate($mycomment['ext1'], 'Y-m-d'); ?> 至 <?php echo dgmdate($mycomment['ext2'], 'Y-m-d'); ?> 
共
<?php if(date($mycomment['ext1'], 'Y-m-d')==date($mycomment['ext2'], 'Y-m-d')) { echo floor($mycomment['ext2']-$mycomment['ext1'])/3600;; ?>小时
<?php } else { echo floor(($mycomment['ext2']-$mycomment['ext1'])/86400); ?>天
<?php } ?>
</p>
</div>
</div>
<div class="rows-content row-color-3">
<div class="commAttr">
<i class="attrs-icon price"></i>费用协作
</div>
<div class="attrValues">
<p><?php echo $mycomment['ext3'];?></p>
</div>
</div>
<div class="rows-content row-color-4">
<div class="commAttr">
<i class="attrs-icon note"></i>我的建议
</div>
<div class="attrValues">
<p><?php echo $mycomment['ext4'];?></p>
</div>
</div>
<div class="rows-content row-color-5">
<div class="commAttr">
<i class="attrs-icon complex"></i>攀登综述
</div>
<div class="attrValues">
<p><?php echo $mycomment['message'];?></p>
</div>
</div>
<?php if($mycomment['attachlist']) { ?>
<div class="rows-content row-color-6">
<div class="commAttr">
<i class="attrs-icon picture"></i>图片
</div>
<div class="attrValues">
<ul class="attrPic-list"><?php if(is_array($mycomment['attachlist'])) foreach($mycomment['attachlist'] as $item) { ?><li>
<a href="http://<?php if($item['serverid']==1) { ?>image<?php } elseif($item['serverid']==99) { ?>image1<?php } ?>.8264.com/<?php echo $item['dir'];?>/<?php echo $item['attachment'];?>" target="_blank" title="点击查看大图"><img src="<?php echo getimagethumb(80,80,2, $item['dir'].'/'.$item['attachment'], '', $item['serverid']); ?>" alt="<?php echo $mycomment['subject'];?>"></a>
</li>
<?php } ?>
</ul>
</div>
</div>
<?php } ?>
<div class="rows-content row-color-6">
<div class="attrValues rows-detail">
<span class="rows-time"><?php echo dgmdate($mycomment['dateline']); ?></span>
<span class="rows-title"><a href="http://www.8264.com/dianping.php?mod=<?php echo $mod;?>&amp;act=showview&amp;tid=<?php echo $mycomment['tid'];?>"><?php echo $mycomment['subject'];?></a></span>
<div class="rows-praise">
<a href="javascript:void(0);" id="support_<?php echo $mycomment['pid'];?>" onclick="support(<?php echo $mycomment['pid'];?>);"><i class="rows-icon<?php if($mycomment['supports']) { ?> icon-praise<?php } ?>"></i>有用<em><?php if($mycomment['supports']) { ?>(<?php echo $mycomment['supports'];?>)<?php } ?></em></a>
</div>
</div>
</div>
<?php if($act=='showview' && $_G['uid']) { include template('dianping/cplist_comment'); } ?>
</div>
<?php if($mycomment['rate']) { ?><span class="b8264icon"></span><?php } ?>
</div>
</div>
</div>
</div>
<?php if($_GET['inajax'] == 1) { ?><?php dp_output(); } ?>
