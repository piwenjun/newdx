<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('trade_info', 'common/header');
0
|| checktplrefresh('./template/default/forum/trade_info.htm', './template/default/common/simplesearchform.htm', 1509518293, '2', './data/template/2_2_forum_trade_info.tpl.php', './template/8264', 'forum/trade_info')
;?><?php include template('common/header'); if(!$_G['inajax']) { ?>

<script src="<?php echo $_G['setting']['jspath'];?>forum_viewthread.js?<?php echo VERHASH;?>" type="text/javascript"></script>

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
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a><?php echo $navigation;?> <em>&rsaquo;</em> <?php if($_G['gp_from']=='home') { ?><a href="home.php?mod=space&amp;do=trade">商品</a> <em>&rsaquo;</em><?php } ?> <a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>">查看主题</a>
</div>
</div>

<?php if($_G['forum']['ismoderator']) { ?>
<script type="text/javascript">var fid = parseInt('<?php echo $_G['fid'];?>'), tid = parseInt('<?php echo $_G['tid'];?>');</script>
<script src="<?php echo $_G['setting']['jspath'];?>forum_moderate.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<form method="post" autocomplete="off" name="modactions" id="modactions">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="optgroup" />
<input type="hidden" name="operation" />
<input type="hidden" name="listextra" value="" />
</form>
<?php } ?>

<div id="ct" class="wp ct2 cl">
<div class="mn">
<div class="bm bw0">

<div class="ih cl bbda">
<div class="icn avt"><a href="home.php?mod=space&amp;uid=<?php echo $trade['sellerid'];?>"><?php echo avatar($trade[sellerid],small); ?></a></div>
<dl>
<dt class="ptn">
<span class="y">
<a href="home.php?mod=spacecp&amp;ac=pm&amp;op=showmsg&amp;handlekey=showmsg_<?php echo $post['authorid'];?>&amp;touid=<?php echo $post['authorid'];?>&amp;pmid=0&amp;daterange=2" onclick="showWindow('sendpm', this.href)" style="font-weight: 200"><img src="<?php echo IMGDIR;?>/pmto.gif" style="vertical-align:middle" />发短消息</a>&nbsp;
<?php if($post['qq']) { ?>&nbsp;<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $post['qq'];?>&amp;Site=<?php echo $_G['setting']['bbname'];?>&amp;Menu=yes" target="_blank" title="QQ"><img src="<?php echo IMGDIR;?>/qq.gif" alt="QQ" style="vertical-align:middle" /></a><?php } if($post['icq']) { ?>&nbsp;<a href="http://wwp.icq.com/scripts/search.dll?to=<?php echo $post['icq'];?>" target="_blank" title="ICQ"><img src="<?php echo IMGDIR;?>/icq.gif" alt="ICQ" style="vertical-align:middle" /></a><?php } if($post['yahoo']) { ?>&nbsp;<a href="http://edit.yahoo.com/config/send_webmesg?.target=<?php echo $post['yahoo'];?>&amp;.src=pg" target="_blank" title="Yahoo"><img src="<?php echo IMGDIR;?>/yahoo.gif" alt="Yahoo!" style="vertical-align:middle" /></a><?php } if($post['taobao']) { ?>&nbsp;<a href="javascript:;" onclick="window.open('http://amos.im.alisoft.com/msg.aw?v=2&uid='+encodeURIComponent('<?php echo $post['taobaoas'];?>')+'&site=cntaobao&s=2&charset=utf-8')" title="阿里旺旺"><img src="<?php echo IMGDIR;?>/taobao.gif" alt="阿里旺旺" style="vertical-align:middle" /></a><?php } ?>
</span>
<?php echo $trade['seller'];?>
<?php if($_G['setting']['verify']['enabled']) { if(is_array($_G['setting']['verify'])) foreach($_G['setting']['verify'] as $vid => $verify) { if($verify['available'] && $post['verify'.$vid] == 1) { ?>
<a href="home.php?mod=spacecp&amp;ac=profile&amp;op=verify&amp;vid=<?php echo $vid;?>" target="_blank"><?php if($verify['icon']) { ?><img src="<?php echo $verify['icon'];?>" class="vm" alt="<?php echo $verify['title'];?>" title="<?php echo $verify['title'];?>" /><?php } else { ?><?php echo $verify['title'];?><?php } ?></a>&nbsp;
<?php } } } if($online) { ?> <img class="vm" title="在线" alt="online" src="<?php echo IMGDIR;?>/ol.gif"><?php } ?>
</dt>
<dd class="mtn"><a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?><?php if($_G['gp_from']) { ?>&amp;from=<?php echo $_G['gp_from'];?><?php } ?>"><?php echo $_G['forum_thread']['subject'];?></a> <em>&rsaquo;</em> 查看商品</dd>
</dl>
</div>
<?php if($_G['inajax']) { ?><span class="y"><a href="javascript:;" onclick="$('tradeinfo<?php echo $trade['pid'];?>').style.display = 'none';display('trade<?php echo $trade['pid'];?>');" title="收起"><img src="<?php echo STATICURL;?>image/common/collapsed_no.gif" alt="" class="vm" /> 收起</a></span><?php } ?>
<h1 class="ph mtm"><a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;do=tradeinfo&amp;pid=<?php echo $post['pid'];?>" target="_blank"><?php echo $trade['subject'];?></a></h1>
<?php } ?>


<div class="bbda ptm act cl"<?php if($_G['inajax']) { ?> style="border:0"<?php } ?>>
<div class="cl">
<div class="spvimg">
<?php if($trade['displayorder'] > 0) { ?><em class="hot">推荐商品</em><?php } if($trade['thumb']) { ?>
<a href="javascript:;"><img src="<?php echo $trade['thumb'];?>" onclick="zoom(this, '<?php echo $trade['attachurl'];?>')" width="<?php if($trade['width'] > 300) { ?>300<?php } else { ?><?php echo $trade['width'];?><?php } ?>" _width="300" _height="300" alt="<?php echo $trade['subject'];?>" /></a>
<?php } else { ?>
<img src="<?php echo IMGDIR;?>/nophoto.gif" alt="<?php echo $trade['subject'];?>" />
<?php } if(!$_G['forum_thread']['is_archived']) { if((($_G['forum']['ismoderator'] && $_G['group']['alloweditpost'] && (!in_array($post['adminid'], array(1, 2, 3)) || $_G['adminid'] < $post['adminid'])) || ($_G['forum']['alloweditpost'] && $_G['uid'] && $post['authorid'] == $_G['uid'])) && !$post['first'] || $_G['forum']['ismoderator'] && $_G['group']['allowdelpost']) { ?>
<p class="ptm pbm">
<?php if($_G['forum']['ismoderator'] && $_G['group']['allowdelpost']) { ?><span class="y"><a href="javascript:;" onclick="modaction('delpost', <?php echo $_G['gp_pid'];?>)">删除</a>&nbsp;&nbsp;</span><?php } ?>
<a class="editp" style="padding-left: 20px; " href="forum.php?mod=post&amp;action=edit&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?><?php if(!empty($_G['gp_modthreadkey'])) { ?>&amp;modthreadkey=<?php echo $_G['gp_modthreadkey'];?><?php } ?>&amp;page=<?php echo $page;?>">编辑商品</a>
</p>
<?php } } ?>
</div>

<div class="spi cl">
<?php if($_G['inajax']) { ?>
<span class="y"><a href="javascript:;" onclick="$('tradeinfo<?php echo $trade['pid'];?>').style.display = 'none';display('trade<?php echo $trade['pid'];?>');" title="收起"><img src="<?php echo STATICURL;?>image/common/collapsed_no.gif" alt="" class="vm" /> 收起</a></span>
<h4 class="wx mbm bbda"><a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;do=tradeinfo&amp;pid=<?php echo $post['pid'];?>" target="_blank"><?php echo $trade['subject'];?></a></h4>
<?php } ?>
<dl>
<dt>商品类型:</dt>
<dd>
<?php if($trade['quality'] == 1) { ?>全新<?php } if($trade['quality'] == 2) { ?>二手<?php } ?>
商品
</dd>
<dt>运费:</dt>
<dd>
<?php if($trade['transport'] == 1) { ?>卖家承担运费<?php } if($trade['transport'] == 2 || $trade['transport'] == 4) { if($trade['transport'] == 4) { ?>买家收到货物后直接支付给物流公司<?php } if(!empty($trade['ordinaryfee']) || !empty($trade['expressfee']) || !empty($trade['emsfee'])) { if(!empty($trade['ordinaryfee'])) { ?>平邮 <?php echo $trade['ordinaryfee'];?> 元<?php } if(!empty($trade['expressfee'])) { ?> 快递 <?php echo $trade['expressfee'];?> 元<?php } if(!empty($trade['emsfee'])) { ?> EMS <?php echo $trade['emsfee'];?> 元<?php } } elseif($trade['transport'] == 2) { ?>
无运费
<?php } } if($trade['transport'] == 3) { ?>虚拟物品<?php } ?>
</dd>
<dt>剩余时间:</dt>
<dd>
<?php if($trade['closed']) { ?>
<em>成交结束</em>
<?php } elseif($trade['expiration'] > 0) { ?>
<?php echo $trade['expiration'];?> 天 <?php echo $trade['expirationhour'];?> 小时
<?php } elseif($trade['expiration'] == 0) { ?>
<?php echo $trade['expirationhour'];?> 小时
<?php } elseif($trade['expiration'] == -1) { ?>
<em>成交结束</em>
<?php } else { ?>
&nbsp;
<?php } ?>
</dd>
<dt>商品数量:</dt><dd><?php echo $trade['amount'];?></dd>
<?php if($trade['locus']) { ?><dt>地点:</dt><dd><?php echo $trade['locus'];?></dd><?php } ?>
<dt>累计售出:</dt><dd><?php echo $trade['totalitems'];?></dd>
</dl>
<dl class="nums">
<dt>现价:</dt>
<dd>
<?php if($trade['price'] > 0) { ?>
<p><em><?php echo $trade['price'];?></em>&nbsp;元</p>
<?php } if($_G['setting']['creditstransextra']['5'] != -1 && $trade['credit']) { ?>
<p><?php if($trade['price'] > 0) { ?>附加 <?php } ?><em><?php echo $trade['credit'];?></em>&nbsp;<?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['5']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['5']]['title'];?></p>
<?php } ?>
</dd>
</dl>
<dl>
<?php if($trade['price'] && $trade['costprice'] > 0 || $_G['setting']['creditstransextra']['5'] != -1 && $trade['credit'] && $trade['costcredit'] > 0) { ?>
<dt>原价:</dt>
<dd class="xg1">
<?php if($trade['costprice'] > 0) { ?>
<del><?php echo $trade['costprice'];?> 元</del><br />
<?php } if($_G['setting']['creditstransextra']['5'] != -1 && $trade['costcredit'] > 0) { ?>
<del><?php if($trade['costprice'] > 0) { ?>附加 <?php } ?><?php echo $trade['costcredit'];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['5']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['5']]['title'];?></del>
<?php } ?>
</dd>
<?php } ?>
</dl>
<?php if($post['authorid'] != $_G['uid'] && empty($thread['closed']) && $trade['expiration'] > -1) { ?>
<p class="pns mbm">
<?php if($trade['amount']) { ?>
<button onclick="<?php if($_G['uid']) { ?>window.open('forum.php?mod=trade&tid=<?php echo $post['tid'];?>&pid=<?php echo $post['pid'];?>','','');<?php } else { ?>showWindow('login', 'member.php?mod=logging&action=login&guestmessage=yes');<?php } ?>" class="pn"><span>购买</span></button> &nbsp;
<?php } else { ?>
<button disabled="yes" class="pn"><span>已售完</span></button> &nbsp;
<?php } if($_G['uid']) { ?><button onclick="showWindow('sendpm', 'home.php?mod=spacecp&ac=pm&op=showmsg&handlekey=showmsg_<?php echo $post['authorid'];?>&touid=<?php echo $post['authorid'];?>&pmid=0&daterange=2&tradeid=<?php echo $post['pid'];?>')" class="pn"><span><?php if($online) { ?>在线<?php } ?>砍价</span></button><?php } ?>
</p>
<?php } if($trade['tenpayaccount']) { ?>
<p><em>(此商品支持财付通，你可以先验货后付款)</em></p>
<?php } ?>
</div>
</div>
<div class="cl mtw">
<div class="c pbm">
<?php echo $post['message'];?>
</div>
<?php if($post['attachment']) { ?>
<div class="notice postattach">附件: <em>你所在的用户组无法下载或查看附件</em></div>
<?php } elseif($post['imagelist'] || $post['attachlist']) { ?>
<div class="pattl">
<?php if($post['imagelist']) { ?>
<?php echo $post['imagelist'];?>
<?php } if($post['attachlist']) { ?>
<?php echo $post['attachlist'];?>
<?php } ?>
</div>
<?php } if(!$_G['inajax']) { ?><div id="comment_<?php echo $post['pid'];?>" class="cl tpst cm"></div><?php } ?>
</div>
<?php if(!$_G['inajax'] && $allowpostreply && $post['allowcomment'] && $_G['setting']['commentnumber']) { ?><div class="pob"><em><a class="fastre" href="javascript:;" onclick="showWindow('comment', 'forum.php?mod=misc&action=comment&pid=<?php echo $post['pid'];?>', 'get', 0)">点评</a></em></div><?php } ?>
</td></tr>
</td></tr></table></div>

<?php if($aimgs[$post['pid']]) { ?>
<script type="text/javascript" reload="1">var aimgcount = new Array();aimgcount[<?php echo $_G['gp_pid'];?>] = [<?php echo implode(',', $aimgs[$_G['gp_pid']]);; ?>];attachimgshow(<?php echo $_G['gp_pid'];?>);</script>
<?php } if(!$_G['inajax'] && $post['comment']) { ?>
<script type="text/javascript" reload="1">ajaxget('forum.php?mod=misc&action=commentmore&tid=<?php echo $post['tid'];?>&pid=<?php echo $post['pid'];?>', 'comment_<?php echo $post['pid'];?>');</script>
<?php } if(!$_G['inajax']) { ?>
</div></div>
<div class="sd">
<div class="bm">
<div class="bm_h">
<h2>信用评价</h2>
</div>
<div class="bm_c">
<table cellpadding="4" cellspacing="4" border="0" width="100%">
<tr><th width="60">卖家实名</th><td><?php if($post['realname']) { ?><?php echo $post['realname'];?><?php } ?></td></tr>
<tr><th width="60">卖家信用</th><td><a href="home.php?mod=space&amp;uid=<?php echo $post['authorid'];?>&amp;do=trade&amp;view=eccredit#sellcredit" target="_blank"><?php echo $post['buyercredit'];?>&nbsp;<img src="<?php echo STATICURL;?>image/traderank/buyer/<?php echo $post['buyerrank'];?>.gif" border="0" style="vertical-align: middle"></a></td></tr>
<tr><th>买家信用</th><td><a href="home.php?mod=space&amp;uid=<?php echo $post['authorid'];?>&amp;do=trade&amp;view=eccredit#buyercredit" target="_blank"><?php echo $post['sellercredit'];?>&nbsp;<img src="<?php echo STATICURL;?>image/traderank/seller/<?php echo $post['sellerrank'];?>.gif" border="0" style="vertical-align: middle"></td></tr>
</table>
</div>
</div>
<?php if($usertrades) { ?>
<div class="bm">
<div class="bm_h">
<h2>柜台其它商品</h2>
</div>
<div class="bm_c">		
<div class="xld cl"><?php if(is_array($usertrades)) foreach($usertrades as $usertrade) { ?><dl class="cl">
<dd class="m">
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $usertrade['tid'];?>&amp;do=tradeinfo&amp;pid=<?php echo $usertrade['pid'];?>" class="tn">
<?php if($usertrade['displayorder'] > 0) { ?><em class="hot">推荐商品</em><?php } if($usertrade['aid']) { ?><img src="<?php echo getforumimg($usertrade['aid']); ?>" width="60" alt="<?php echo $usertrade['subject'];?>" /><?php } else { ?><img src="<?php echo IMGDIR;?>/nophoto.gif" width="130" alt="<?php echo $usertrade['subject'];?>" /><?php } ?>
</a>
</dd>
<dt><a href="forum.php?mod=viewthread&amp;tid=<?php echo $usertrade['tid'];?>&amp;do=tradeinfo&amp;pid=<?php echo $usertrade['pid'];?>"><?php echo $usertrade['subject'];?></a></dt>
<dd>
<?php if($usertrade['price'] > 0) { ?>
<p class="p">&yen; <em class="xi1"><?php echo $usertrade['price'];?></em></p>
<?php } if($_G['setting']['creditstransextra']['5'] != -1 && $usertrade['credit']) { ?>
<p class="<?php if($usertrade['price'] > 0) { ?>xg1<?php } else { ?>p<?php } ?>"><?php if($usertrade['price'] > 0) { ?>附加 <?php } ?><em class="xi1"><?php echo $usertrade['credit'];?></em>&nbsp;<?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['5']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['5']]['title'];?></p>
<?php } ?>
</dd>
</dl>
<?php } ?>
</div>
</div>
</div>
<?php } if($userthreads) { ?>
<div class="bm">
<div class="bm_h">
<h2><?php echo $trade['seller'];?> 的其它商品</h2>
</div>
<div class="bm_c cl xl">
<ul><?php if(is_array($userthreads)) foreach($userthreads as $userthread) { ?><li><span class="z xg1">[<?php echo dgmdate($userthread[dateline], 'n-j'); ?>]</span>&nbsp;<a href="forum.php?mod=viewthread&amp;tid=<?php echo $userthread['tid'];?>"><?php echo $userthread['subject'];?></a></li>
<?php } ?>
</ul>
</div>
</div>
<?php } ?>
</div>
</div>
<?php } include template('common/footer'); ?>