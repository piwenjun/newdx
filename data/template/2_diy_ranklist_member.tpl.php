<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('member', 'common/header');
0
|| checktplrefresh('./template/default/ranklist/member.htm', './template/default/common/simplesearchform.htm', 1509433306, 'diy', './data/template/2_diy_ranklist_member.tpl.php', './template/8264', 'ranklist/member')
|| checktplrefresh('./template/default/ranklist/member.htm', './template/default/ranklist/side_left.htm', 1509433306, 'diy', './data/template/2_diy_ranklist_member.tpl.php', './template/8264', 'ranklist/member')
;?><?php include template('common/header'); ?><link href="http://static.8264.com/static/css/home/misc_ranklist.css?<?php echo VERHASH;?>" rel="stylesheet" type="text/css">
<div id="pt" class="bm cl"><?php if($_G['setting']['search']) { ?><?php $slist = array(); if($_G['fid'] && $_G['forum']['status'] != 3 && $mod != 'group') { ?><?php
$slist[forumfid] = <<<EOF
<li><input type="radio" id="mod_curform" class="pr" name="mod" value="curforum" checked="checked" /><label for="mod_curform" title="搜索本版">搜索本版</label></li>
EOF;
?><?php } if($_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)) { ?><?php
$slist[portal] = <<<EOF
<li><input type="radio" id="mod_article" class="pr" name="mod" value="portal"
EOF;
 if(CURSCRIPT == 'portal') { 
$slist[portal] .= <<<EOF
 checked="checked"
EOF;
 } 
$slist[portal] .= <<<EOF
 /><label for="mod_article" title="搜索文章">文章</label></li>
EOF;
?><?php } if($_G['setting']['search']['forum']['status'] && ($_G['group']['allowsearch'] & 2 || $_G['adminid'] == 1)) { ?><?php
$slist[forum] = <<<EOF
<li><input type="radio" id="mod_thread" class="pr" name="mod" value="forum"
EOF;
 if(CURSCRIPT == 'forum' && !$_G['fid']) { 
$slist[forum] .= <<<EOF
 checked="checked"
EOF;
 } 
$slist[forum] .= <<<EOF
 /><label for="mod_thread" title="搜索{$_G['setting']['navs']['2']['navname']}">{$_G['setting']['navs']['2']['navname']}</label></li>
EOF;
?><?php } if($_G['setting']['search']['blog']['status'] && ($_G['group']['allowsearch'] & 4 || $_G['adminid'] == 1)) { ?><?php
$slist[blog] = <<<EOF
<li><input type="radio" id="mod_blog" class="pr" name="mod" value="blog"
EOF;
 if(CURSCRIPT == 'home' && $do != 'album') { 
$slist[blog] .= <<<EOF
 checked="checked"
EOF;
 } 
$slist[blog] .= <<<EOF
 /><label for="mod_blog" title="搜索日志">日志</label></li>
EOF;
?><?php } if($_G['setting']['search']['album']['status'] && ($_G['group']['allowsearch'] & 8 || $_G['adminid'] == 1)) { ?><?php
$slist[album] = <<<EOF
<li><input type="radio" id="mod_album" class="pr" name="mod" value="album"
EOF;
 if(CURSCRIPT == 'home' && $do == 'album') { 
$slist[album] .= <<<EOF
 checked="checked"
EOF;
 } 
$slist[album] .= <<<EOF
 /><label for="mod_album" title="搜索相册">相册</label></li>
EOF;
?><?php } if($_G['setting']['groupstatus'] && $_G['setting']['search']['group']['status'] && ($_G['group']['allowsearch'] & 16 || $_G['adminid'] == 1)) { ?><?php
$slist[group] = <<<EOF
<li><input type="radio" id="mod_group" class="pr" name="mod" value="group"
EOF;
 if(CURSCRIPT == 'group' || $_G['basescript']=='group') { 
$slist[group] .= <<<EOF
 checked="checked"
EOF;
 } 
$slist[group] .= <<<EOF
 /><label for="mod_group" title="搜索{$_G['setting']['navs']['3']['navname']}">{$_G['setting']['navs']['3']['navname']}</label></li>
EOF;
?><?php } ?><?php
$slist[user] = <<<EOF
<li><input type="radio" id="mod_user" class="pr" name="mod" value="user" /><label for="mod_user" title="搜索用户">用户</label></li>
EOF;
?>
<?php if($slist) { ?>
<div id="sc" class="y">
<form id="scform" method="post" autocomplete="off" onsubmit="searchFocus($('srchtxt'))" action="<?php echo $_G['siteurl'];?>search.php?searchsubmit=yes" target="_blank">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="srchtype" value="title" />
<input type="hidden" name="srhfid" value="<?php echo $_G['fid'];?>" />
<table cellspacing="0" cellpadding="0">
<tr>
<td><a href="search.php" target="_blank" id="sctype" class="showmenu" onclick="showMenu(this.id);return false;">搜索</a></td>
<td><input type="text" name="srchtxt" id="srchtxt" class="px z" value="请输入搜索内容" autocomplete="off" onfocus="searchFocus(this);" onblur="searchBlur(this);" /></td>
<td><button id="search_submit" name="searchsubmit" type="submit" value="true" class="xw1">搜索</button></td>
</tr>
</table>
<div id="sctype_menu" class="p_pop cl" style="display: none">
<ul><?php echo implode('', $slist);; ?></ul>
</div>
</form>
<script type="text/javascript">initSearchmenu();</script>
</div>
<?php } } ?><div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="<?php echo $_G['setting']['navs']['8']['filename'];?>"><?php echo $_G['setting']['navs']['8']['navname'];?></a> <em>&rsaquo;</em>
用户排行
</div>
</div>

<style id="diy_style" type="text/css"></style>

<!--[diy=diyranklisttop]--><div id="diyranklisttop" class="area"></div><!--[/diy]-->

<div id="ct" class="ct2_a wp cl">
<div class="mn">
<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
<div class="bm bw0">
<h1 class="mt">用户排行</h1>
<ul class="tb cl">
<li<?php echo $a_actives['show'];?>><a href="misc.php?mod=ranklist&amp;type=member">竞价排行</a></li>
<li<?php echo $a_actives['beauty'];?>><a href="misc.php?mod=ranklist&amp;type=member&amp;view=beauty">美女排行</a></li>
<li<?php echo $a_actives['handsome'];?>><a href="misc.php?mod=ranklist&amp;type=member&amp;view=handsome">帅哥排行</a></li>
<li<?php echo $a_actives['credit'];?>><a href="misc.php?mod=ranklist&amp;type=member&amp;view=credit">积分排行</a></li>
<li<?php echo $a_actives['friendnum'];?>><a href="misc.php?mod=ranklist&amp;type=member&amp;view=friendnum">好友数排行</a></li>
<li<?php echo $a_actives['post'];?>><a href="misc.php?mod=ranklist&amp;type=member&amp;view=post">发帖数排行</a></li>
<li<?php echo $a_actives['blog'];?>><a href="misc.php?mod=ranklist&amp;type=member&amp;view=blog">日志数排行</a></li>		
</ul>

<script type="text/javascript">
function checkCredit(id) {
var maxCredit = parseInt(<?php echo $space['credit'];?>);
var idval = parseInt($(id).value);
if(/^(\d+)$/.test(idval) == false) {
showDialog('你所填写的<?php echo $extcredits[$creditid]['title'];?>不是一个合法数值', 'notice', '提示信息', null, 0);
return false;
} else if(idval > maxCredit) {
showDialog('你的当前<?php echo $extcredits[$creditid]['title'];?>为 <?php echo $space['credit'];?>，请填写一个小于该值的数字', 'notice', '提示信息', null, 0);
return false;
} else if(idval < 1) {
showDialog('你所填写的<?php echo $extcredits[$creditid]['title'];?>不能小于1', 'notice', '提示信息', null, 0);
return false;
}
if(id == 'showcredit') {
var price = parseInt($('unitprice').value);
if(/^(\d+)$/.test(price) == false) {
showDialog('您所填写的单价不是一个合法数值', 'notice', '提示信息', null, 0);
return false;
} else if(price < 1) {
showDialog('您所填写的单价不能小于1', 'notice', '提示信息', null, 0);
return false;
} else if(price > idval+parseInt(<?php echo $myallcredit;?>)) {
showDialog('您所填写的单价不能高于竞价总额', 'notice', '提示信息', null, 0);
return false;
}
}
return true;
}
</script>
<?php if($creditsrank_change) { ?>
<p id="orderby" class="tbmu">
<a href="misc.php?mod=ranklist&amp;type=member&amp;view=credit&amp;orderby=all" id="all"<?php if($now_choose == 'all') { ?> class="a"<?php } ?>>全部</a>
<?php if($extcredits) { if(is_array($extcredits)) foreach($extcredits as $key => $credit) { ?><span class="pipe">|</span><a href="misc.php?mod=ranklist&amp;type=member&amp;view=credit&amp;orderby=<?php echo $key;?>" id="<?php echo $key;?>"<?php if($now_choose == $key) { ?> class="a"<?php } ?>><?php echo $credit['title'];?></a>
<?php } } ?>
</p>
<?php } if($now_pos >= 0) { ?>
<div class="tbmu">
<?php if($_GET['view']=='show') { ?>
<h3 class="mbn">排行榜公告:</h3>
<?php if($space['unitprice']) { ?>
自己当前的竞价单价: <?php echo $space['unitprice'];?> <?php echo $extcredits[$creditid]['unit'];?>,当前排名 <span style="font-size:20px;color:red;"><?php echo $now_pos;?></span> ,再接再厉!
<?php } else { ?>
你现在还没有上榜。让自己上榜吧，这会大大提升你的主页曝光率。
<?php } ?>
<br />竞价单价越多，竞价排名越靠前，你的主页曝光率也会越高；
<br />上榜用户的主页被别人有效浏览一次，将从竞价<?php echo $extcredits[$creditid]['title'];?>中扣除您设定的竞价值(恶意刷新访问不扣减)。
<?php } else { if($_GET['view']=='credit') { ?>
<a href="home.php?mod=spacecp&amp;ac=credit">你当前的<?php if($now_choose=='all') { ?>积分<?php } else { ?><?php echo $extcredits[$now_choose]['title'];?><?php } ?>: <?php echo $mycredits;?></a>
<?php } elseif($_GET['view']=='friendnum') { ?>
<a href="home.php?mod=space&amp;do=friend">你当前的好友数: <?php echo $space['friends'];?></a>
<?php } ?>
,当前排名 <span style="font-size:20px;color:red;"><?php echo $now_pos;?></span> ,再接再厉!
<?php } if($cache_mode) { ?>
<p>
下面列出的为排行前100名，数据每 <?php echo $cache_time;?> 分钟更新一次。
</p>
<?php } ?>
</div>

<?php if($_GET['view']=='show') { if($creditid) { ?>
<div class="tbmu mbm pbw cl">
<form method="post" autocomplete="off" action="home.php?mod=spacecp&amp;ac=top" onsubmit="return checkCredit('showcredit');" class="z">
<table>
<caption><h3 class="mbn">我也要上榜</h3></caption>
<tr>
<th class="pbn">
我的上榜宣言
<p class="xg1">最多50个汉字，会显示在榜单中</p>
</th>
<th class="pbn">
竞价单价
<p class="xg1"><?php if($_G['uid']) { ?><a href="home.php?mod=spacecp&amp;ac=common&amp;op=modifyunitprice" id="a_modify_unitprice" onclick="showWindow(this.id, this.href, 'get', 0);">(修改单价)</a><?php } ?></p>
</th>
<th class="pbn">
增加竞价<?php echo $extcredits[$creditid]['title'];?>
<p class="xg1">不要超过自己的<?php echo $extcredits[$creditid]['title'];?> <?php echo $space['credit'];?> <?php echo $extcredits[$creditid]['unit'];?></p>
</th>
</tr>
<tr>
<td><input type="text" name="note" class="px" value="" size="25" /></td>
<td>
&nbsp;<input type="text" id="unitprice" name="unitprice" class="px vm" value="1" size="7" onblur="checkCredit('showcredit');" />
</td>
<td>
&nbsp;<input type="text" id="showcredit" name="showcredit" class="px vm" value="100" size="7" onblur="checkCredit('showcredit');" />&nbsp;
<button type="submit" name="show_submit" class="pn vm"><em>增加</em></button>
</td>
</tr>
</table>
<input type="hidden" name="showsubmit" value="true" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
</form>

<form method="post" autocomplete="off" action="home.php?mod=spacecp&amp;ac=top" onsubmit="return checkCredit('stakecredit');" class="y">
<table>
<caption><h3 class="mbn">帮助好友来上榜</h3></caption>
<tr>
<td class="pbn">
要帮助的好友
<p class="xg1">请输入好友的用户名</p>
</td>
<td class="pbn">
赠送竞价<?php echo $extcredits[$creditid]['title'];?>
<p class="xg1">不要超过自己的<?php echo $extcredits[$creditid]['title'];?> <?php echo $space['credit'];?> <?php echo $extcredits[$creditid]['unit'];?></p>
</td>
</tr>
<tr>
<td><input type="text" name="fusername" class="px" value="" size="15" /></td>
<td>
&nbsp;<input type="text" name="stakecredit" id="stakecredit" class="px vm" value="20" size="7" onblur="checkCredit('stakecredit');" />&nbsp;
<button type="submit" name="friend_submit" class="pn vm"><em>赠送</em></button>
</td>
</tr>
</table>
<input type="hidden" name="friendsubmit" value="true" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
</form>
</div>
<?php } else { ?>
<div class="mbm bbda emp">管理员已关闭竞价,暂时无法继续上榜</div>
<?php } } } include template('ranklist/member_list'); ?></div>
<!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->
</div>
<div class="appl">
<!--[diy=diysidetop]--><div id="diysidetop" class="area"></div><!--[/diy]--><div class="tbn">
<h2 class="mt bbda"><?php echo $_G['setting']['navs']['8']['navname'];?></h2>
<ul>
<li class="cl<?php if($_G['gp_type'] == 'index' || !$_G['gp_type']) { ?> a<?php } ?>"><a href="misc.php?mod=ranklist">全部</a></li>
<?php if($ranklist_setting['member']['available']) { ?>
<li class="cl<?php if($_G['gp_type'] == 'member') { ?> a<?php } ?>"><a href="misc.php?mod=ranklist&amp;type=member">用户</a></li>
<?php } if($ranklist_setting['thread']['available']) { ?>
<li class="cl<?php if($_G['gp_type'] == 'thread') { ?> a<?php } ?>"><a href="misc.php?mod=ranklist&amp;type=thread&amp;orderby=replies&amp;before=thisweek">帖子</a></li>
<?php } if($ranklist_setting['blog']['available']) { ?>
<li class="cl<?php if($_G['gp_type'] == 'blog') { ?> a<?php } ?>"><a href="misc.php?mod=ranklist&amp;type=blog&amp;orderby=heats&amp;before=thisweek">日志</a></li>
<?php } if($ranklist_setting['poll']['available']) { ?>
<li class="cl<?php if($_G['gp_type'] == 'poll') { ?> a<?php } ?>"><a href="misc.php?mod=ranklist&amp;type=poll&amp;orderby=heats&amp;before=thisweek">投票</a></li>
<?php } if($ranklist_setting['activity']['available']) { ?>
<li class="cl<?php if($_G['gp_type'] == 'activity') { ?> a<?php } ?>"><a href="misc.php?mod=ranklist&amp;type=activity&amp;orderby=heats&amp;before=thismonth">活动</a></li>
<?php } if($ranklist_setting['picture']['available']) { ?>
<li class="cl<?php if($_G['gp_type'] == 'picture') { ?> a<?php } ?>"><a href="misc.php?mod=ranklist&amp;type=picture&amp;orderby=heats&amp;before=thismonth">图片</a></li>
<?php } if($ranklist_setting['forum']['available']) { ?>
<li class="cl<?php if($_G['gp_type'] == 'forum') { ?> a<?php } ?>"><a href="misc.php?mod=ranklist&amp;type=forum&amp;orderby=threads&amp;before=all">版块</a></li>
<?php } if($ranklist_setting['group']['available']&&$_G['setting']['groupstatus']) { ?>
<li class="cl<?php if($_G['gp_type'] == 'group') { ?> a<?php } ?>"><a href="misc.php?mod=ranklist&amp;type=group&amp;orderby=credit&amp;before=all">群组</a></li>
<?php } ?>
</ul>
<?php if(!empty($_G['setting']['pluginhooks']['ranklist_nav_extra'])) echo $_G['setting']['pluginhooks']['ranklist_nav_extra']; ?>
</div><!--[diy=diysidebottom]--><div id="diysidebottom" class="area"></div><!--[/diy]-->
</div>
</div>

<!--[diy=diyranklistbottom]--><div id="diyranklistbottom" class="area"></div><!--[/diy]--><?php include template('common/footer'); ?>