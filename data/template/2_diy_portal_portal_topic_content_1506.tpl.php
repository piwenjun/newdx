<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('portal_topic_content_1506', 'common/header_diy');
block_get('6909,6910,6911,6912,6913,6914,6915,6916');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<title><?php if(!empty($topic['title'])) { ?><?php echo $topic['title'];?> <?php } if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if($_G['setting']['bbname']) { ?><?php echo $_G['setting']['bbname'];?> - <?php } ?></title>
<?php echo $_G['setting']['seohead'];?>

<meta name="keywords" content="<?php if($_G['seokeywords']) { echo htmlspecialchars($_G['seokeywords']); } ?> <?php if(!empty($metakeywords)) { echo htmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php echo htmlspecialchars($_G['seodescription']); ?> <?php if(!empty($metadescription)) { echo htmlspecialchars($metadescription); } ?> Discuz! Board" />
<meta name="generator" content="8264" />
<meta name="author" content="8264.com" />
<meta name="copyright" content="2001-2010" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo $_G['siteurl'];?>" />
<!--自己js开始-->
<script src="http://static.8264.com/oldcms/moban/zt/2014ispo/js/jquery-1.4.min.js" type="text/javascript"></script>
<script src="http://static.8264.com/oldcms/moban/zt/2014ispo/js/jquery.lazy-1.3.1.js" type="text/javascript"></script>
<script>
  $(document).ready(function(){
        jQuery.lazy({src:'http://static.8264.com/oldcms/moban/zt/2014ispo/js/jquery.darizi.js',name:'darizi',dependencies:{js:['http://static.8264.com/oldcms/moban/zt/2014ispo/js/jquery.countdown.js']},cache:true});
        // 大日子
        var ndate = new Date(2014,1,19); 
        jQuery('.darizi').darizi({ bigDay:ndate,last:3});

  });
</script>
<!--自己js结束--><link rel="stylesheet" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_common.css?<?php echo VERHASH;?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_portal_topic.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle'])) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?><script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
 
 <?php if(defined('CURMODULE') && ($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') && (CURMODULE == 'index' || CURMODULE == 'forumdisplay' || CURMODULE == 'group')) { ?><?php echo $rsshead;?><?php } if($_G['basescript'] == 'forum') { if(!empty($_G['cookie']['widthauto']) && empty($_G['disabledwidthauto'])) { ?>
<link rel="stylesheet" id="css_widthauto" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_widthauto.css?<?php echo VERHASH;?>" />
<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
<?php } ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'home' || $_G['basescript'] == 'userapp') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'portal') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && ($_G['mod'] == 'topic' || $_G['group']['allowdiy']) && !empty($_G['style']['tplfile'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_GET['diy'] == 'yes' && ($_G['mod'] == 'topic' || $_G['group']['allowdiy']) && !empty($_G['style']['tplfile'])) { ?>
<link rel="stylesheet" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_css_diy.css?<?php echo VERHASH;?>" />
<?php } ?>
</head>
<body id="nv_<?php echo $_G['basescript'];?>" class="pg_<?php echo CURMODULE;?>" onkeydown="if(event.keyCode==27) return false;">
<?php if(($_G['mod']!='topic' && $_G['group']['allowdiy'] && !empty($_G['style']['tplfile'])) || (!empty($_G['style']['tplfile']) && $_G['mod']=='topic' && (($_G['group']['allowaddtopic'] && $topic['uid']==$_G['uid']) || $_G['group']['allowmanagetopic']))) { ?>
<a id="diy-tg" href="javascript:openDiy();" title="打开 DIY 面板"><img src="<?php echo STATICURL;?>image/diy/panel-toggle.png" alt="DIY" /></a>
<?php } ?>
<div id="append_parent"></div><div id="ajaxwaitid"></div>
<?php if($_GET['diy'] == 'yes' && (CURMODULE == 'topic' || $_G['group']['allowdiy']) && !empty($_G['style']['tplfile'])) { include template('common/header_diy'); } if(empty($topic) || $topic['useheader']) { ?><?php echo adshow("headerbanner/wp a_h"); ?><?php if(!empty($_G['setting']['pluginhooks']['global_header'])) echo $_G['setting']['pluginhooks']['global_header']; } ?>   
<!--dx代码结束-->
<!--diy样式开始-->
<style id="diy_style" type="text/css">#frameFEJEkx {  background-color:transparent !important;background-image:none !important;margin:0px !important;border:none !important;}#portal_block_6909 {  background-color:transparent !important;background-image:none !important;margin:0px !important;border:none !important;}#portal_block_6909 .content {  margin:0px !important;}#frameDZyR05 {  margin:0px !important;border:none !important;}#portal_block_6910 {  margin:0px !important;border:none !important;}#portal_block_6910 .content {  margin:0px !important;}#frame5odtaL {  margin:0px !important;border:none !important;}#portal_block_6911 {  margin:0px !important;border:none !important;}#portal_block_6911 .content {  margin:0px !important;}#framek4Q43W {  margin:0px !important;border:none !important;}#portal_block_6912 {  margin:0px !important;border:none !important;}#portal_block_6912 .content {  margin:0px !important;}#frameV9i612 {  margin:0px !important;border:none !important;}#portal_block_6913 {  margin:0px !important;border:none !important;}#portal_block_6913 .content {  margin:0px !important;}#frameEc22ca {  margin:0px !important;border:none !important;}#portal_block_6914 {  margin:0px !important;border:none !important;}#portal_block_6914 .content {  margin:0px !important;}#frameNDXzdx {  margin:0px !important;border:none !important;}#portal_block_6915 {  margin:0px !important;border:none !important;}#portal_block_6915 .content {  margin:0px !important;}#frame9D9Pmz {  margin:0px !important;border:none !important;}#portal_block_6916 {  margin:0px !important;border:none !important;}#portal_block_6916 .content {  margin:0px !important;}</style>
<!--diy样式结束-->
<link href="http://static.8264.com/oldcms/moban/zt/2014ispo/style/style.css" rel="stylesheet" type="text/css" />
<div class="branner"><img src="http://static.8264.com/oldcms/moban/zt/2014ispo/images/branner1.jpg"/></div>
<div class="navwarpper">
<div class="navcon">| <a target="_blank" href="http://www.8264.com/">8264首页</a> | <a href="/topic/1506.html#n1">展会动态</a> | <a href="http://static.8264.com/oldcms/moban/zt/2014ispo/ziliao/2013_ISPO_zw%20.pdf">展会地图</a> | <a href="/topic/1506.html#n3">互动专区</a> | <a href="http://www.8264.com/topic/1506.html#n4">专访</a> | <a href="/topic/1506.html#n5">新品</a> | <a href="/topic/1506.html#n6">驴友看ispo</a> | <a href="/topic/1506.html#n8">花絮</a> | <a href="http://beijing.ispo.com.cn/templates_home_article.aspx?classid=344791192718" target="_blank">历届回顾</a> |</div>
</div>
<div class="warpper">
<!--第一模块开始 头条/展会快讯-->
    <div class="mid">
    	<div class="l1">
        	<!--轮播开始-->
            <div class="lunbo">
                <div id="focus_turn">
                    <ul id="focus_pic">
                        <li class="current"><a href="http://www.8264.com/viewnews-92147-page-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2014ispo/images/lunbo/lunbo1.jpg" /></a></li>
                        <li class="normal"><a href="http://www.8264.com/viewnews-91924-page-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2014ispo/images/lunbo/lunbo2.jpg" /></a></li>
                        <li class="normal"><a href="http://www.8264.com/viewnews-91945-page-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2014ispo/images/lunbo/lunbo3.jpg" /></a></li>
<li class="normal"><a href="http://www.8264.com/viewnews-92219-page-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2014ispo/images/lunbo/lunbo4.jpg" /></a></li>
                    </ul>
                    <ul id="focus_tx">
                        <li class="current"><a href="http://www.8264.com/viewnews-92147-page-1.html" target="_blank">凝聚户外力量 三强联手创建户外先锋营</a></li>
                        <li class="normal"><a href="http://www.8264.com/viewnews-91924-page-1.html" target="_blank">2014ISPO MUNICH展会规模再创新纪录</a></li>
                        <li class="normal"><a href="http://www.8264.com/viewnews-91945-page-1.html" target="_blank">2014ISPO AWARD大奖中国品牌大放异彩</a></li>
<li class="normal"><a href="http://www.8264.com/viewnews-92219-page-1.html" target="_blank">儿童户外装备 开启户外产业新蓝海</a></li>
                    </ul>
                    <div id="focus_opacity"></div>
                </div>
            </div>
            <!--轮播结束-->
            <div class="title">观展指南</div>
            <table width="307" border="0" cellspacing="0" cellpadding="0" class="gzzn">
                <tr>
                    <td valign="bottom" align="left"><a href="http://beijing.ispo.com.cn/templates_home_article.aspx?classid=952573075948" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2014ispo/images/z1.jpg"/></a></td>
                    <td valign="bottom" align="right"><a href="http://j.map.baidu.com/XIE3" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2014ispo/images/z2.jpg"/></a></td>
                </tr>
                <tr>
                    <td valign="bottom" align="left"><a href="http://map.baidu.com/?newmap=1&amp;l=15&amp;tn=B_NORMAL_MAP&amp;c=12957145,4839149&amp;cc=bj&amp;i=-1|-1|-1&amp;s=nb%26c%3D131%26wd%3D%E5%AE%BE%E9%A6%86%26on_gel%3D1%26l%3D15%26gr%3D1%26uid%3D7f507ae588813cb716c8f6c0%26nb_x%3D12957460.53%26nb_y%3D4839137.4&amp;sc=0" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2014ispo/images/z3.jpg"/></a></td>
                    <td valign="bottom" align="right"><a href="http://beijing.ispo.com.cn/templates_detail.aspx?id=144" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2014ispo/images/z4.jpg"/></a></td>
                </tr>
                <tr>
                    <td valign="bottom" align="left"><a href="http://www.weather.com.cn/weather/101010100.shtml" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2014ispo/images/z5.jpg"/></a></td>
                    <td valign="bottom" align="right"><a href="http://beijing.ispo.com.cn/templates_home_article.aspx?classid=020741930115" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2014ispo/images/z6.jpg"/></a></td>
                </tr>
            </table>
        </div>
        <div class="m1"><a name="n1"></a>
        	<div class="title">焦点关注</div>
            
            <div class="newstoutiao">
                <h3 class="newstitle"><a href="http://www.8264.com/viewnews-92147-page-1.html" target="_blank">凝聚户外力量 三强联手创建户外先锋营</a></h3>
                <p class="newscon">为了更好的与广大户外爱好者近距离沟通并分享正确的户外理念，户外先锋营于2月19日下午1点在国家会议中心3层观景平台举办“凝聚户外力量-三强联手创建户外先锋营”主题发布会。三大品牌的负责人GORE-TEX(R)品牌中国区市场总监张静葳、8264CEO杨伟及巅峰户外运动学校校长孙斌悉数到场，并在现场为8位特聘导师进行颁奖.</p>
<h3 class="newstitle"><a href="http://www.8264.com/viewnews-92217-page-1.html" target="_blank">ISPO 自由梦想—天伦天2014骑行66号公路庆功晚宴</a></h3>
                <p class="newscon">梦想，总是存在人们心里深处，那是心灵上的一种寄托；让我们未来的路不会迷茫，再大的风雨也无法阻挡我们心中有个共同的梦想，坚持不懈我们前进的方向</p>
            </div>
            <div class="title">展会快讯</div>
            <div class="newslist">
            	<ul>
                    <!--[diy=isponewslist]--><div id="isponewslist" class="area"><div id="frameFEJEkx" class=" frame move-span cl frame-1"><div id="frameFEJEkx_left" class="column frame-1-c"><div id="frameFEJEkx_left_temp" class="move-span temp"></div><?php block_display('6909'); ?></div></div></div><!--[/diy]-->
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div class="r1">
        	<div class="title"></div>
            <div class="r1con">
            	<div class="darizi">
                    <div class="zhengjishi"><span class="shu"></span></div>
                    <div class="daojishi"><span class="shu"></span></div>
                    <div class="jieshule"></div>
                </div>
                <div class="r1newslist">
                	<ul>
                    	<li><a href="http://www.8264.com/viewnews-91713-page-1.html" target="_blank">ISPO十年与你共成长</a></li>
<li><a href="http://www.8264.com/viewnews-85741-page-1.html" target="_blank">六月开讲国际零售专家亲临授课</a></li>
                        <li><a href="http://www.8264.com/viewnews-87417-page-1.html" target="_blank">从纯粹购物娱乐中优化购物效率</a></li>
                        <li><a href="http://www.8264.com/viewnews-87418-page-1.html" target="_blank">多品牌店铺观念与户外行业实际</a></li>
                        <li><a href="http://www.8264.com/viewnews-88869-page-1.html" target="_blank">2014爆棚 众多国际品牌首次亮相</a></li>
                        <li><a href="http://www.8264.com/viewnews-91157-page-1.html" target="_blank">2015年起在华举办ISPO夏季展</a></li>
                        <li><a href="http://www.8264.com/viewnews-91696-page-1.html" target="_blank">深圳喜马拉雅携三大品牌2014新品亮相</a></li>
                        <li><a href="http://www.8264.com/viewnews-91642-page-1.html" target="_blank">2014亚洲户外展首次设跑步主题区</a></li>
                        <li><a href="http://www.8264.com/viewnews-91347-page-1.html" target="_blank">抓住核心户外人群 避免大体育尴尬</a></li>
                    </ul>
                </div>
                <div class="r1_logo"><img src="http://static.8264.com/oldcms/moban/zt/2014ispo/images/8264_logo_right.jpg"/></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <!--第一模块结束-->
    <!--第三模块开始 互动专区-->
    <div class="mid">
    	<div class="title">互动专区</div><a name="n3"></a>
<div class="fangtan">
          <div class="hudongl">
              <div id="hotttdiv1_2" onmouseover="setttHotph_2(1);"><div id="hotttdiv1_3" class="sheqian"></div></div>
              <div id="hotttdiv2_2" onmouseover="setttHotph_2(2);"><div id="hotttdiv2_3" class="sheqian1"></div></div>
              <div id="hotttdiv4_2" onmouseover="setttHotph_2(4);"><div id="hotttdiv4_3" class="sheqian1"></div></div>
              <div id="hotttdiv5_2" onmouseover="setttHotph_2(5);"><div id="hotttdiv5_3" class="sheqian1"></div></div>
          </div>
          <script language="javascript">
              function setttHotph_2(i)
              {
               selectttHot2(i);
              }
              function selectttHot2(i)
              {
                for(var id = 1;id<=5;id++)
               {
                var bbb="hotttcomment0"+id;
                if(id==i)
                document.getElementById(bbb).style.display="";
                else
                document.getElementById(bbb).style.display="none";
               } 
                for(var id = 1;id<=5;id++)
               {
                var bb="hotttdiv"+id+"_3";
                if(id==i)
                document.getElementById(bb).className="sheqian1";
                else
                document.getElementById(bb).className="sheqian";
               } 
              }
          </script>
          <div class="hudongr" style=" display:;" id="hotttcomment01">
              <div class="hudongall">
                  <div class="hudongimg"><a href="http://beijing.ispo.com.cn/templates_detail.aspx?id=947" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2014ispo/images/liuxing.jpg" width="120" height="80" border="0" /></a></div>
                  <div class="hudongwen"><a href="http://beijing.ispo.com.cn/templates_detail.aspx?id=947" target="_blank">中国运动时尚流行趋势论坛</a><br>
                  地点：会议区M-307会议室<br>
                  时间：2月19日全天</div>
                  <div style="clear:both;"></div>
              </div>
              <div class="hudongall">
                  <div class="hudongimg"><a href="http://beijing.ispo.com.cn/templates_detail.aspx?id=949" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012ispo/images/yataixue.jpg" width="120" height="80" border="0" /></a></div>
                  <div class="hudongwen"><a href="http://beijing.ispo.com.cn/templates_detail.aspx?id=949" target="_blank">亚太雪地产业论坛APSC</a><br>地点：会议区M-306B会议室<br>时间：2月20日全天</div>
                  <div style="clear:both;"></div>
              </div>
              <div class="hudongall">
                  <div class="hudongimg"><a href="http://beijing.ispo.com.cn/templates_detail.aspx?id=946" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2014ispo/images/chanye.jpg" width="120" height="80" border="0" /></a></div>
                  <div class="hudongwen"><a href="http://beijing.ispo.com.cn/templates_detail.aspx?id=946" target="_blank">2014 ISPO 运动产业论坛</a><br>
                  地点：会议区307会议室  <br>
                  时间：2月21日全天</div>
                  <div style="clear:both;"></div>
              </div>
              <div class="hudongall">
                  <div class="hudongimg"><a href="http://beijing.ispo.com.cn/templates_detail.aspx?id=950" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012ispo/images/lingshoult.jpg" width="120" height="80" border="0" /></a></div>
                  <div class="hudongwen"><a href="http://beijing.ispo.com.cn/templates_detail.aspx?id=950" target="_blank">2014 ISPO中国儿童户外发展论坛</a><br>地点：M-307A 会议室<br>时间：2月20日全天</div>
                  <div style="clear:both;"></div>
              </div>
          </div>
          <div class="hudongr" style=" display:none;" id="hotttcomment02">
              
              <div class="hudongall">
                  <div class="hudongimg"><a href="http://beijing.ispo.com.cn/templates_home_article.aspx?classid=095614625495" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2014ispo/images/liuxing.jpg" width="120" height="80" border="0" /></a></div>
                  <div class="hudongwen"><a href="http://beijing.ispo.com.cn/templates_home_article.aspx?classid=095614625495" target="_blank">流行趋势发布区</a><br></div>
                  <div style="clear:both;"></div>
              </div>
          </div>
          <div class="hudongr" style=" display:none;" id="hotttcomment03">

          </div>
          <div class="hudongr" style=" display:none;" id="hotttcomment04">
              <div class="hudongall">
                  <div class="hudongimg"><a href="http://www.8264.com/viewnews-92230-page-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012ispo/images/jinxiniu.jpg" width="120" height="80" border="0" /></a></div>
                  <div class="hudongwen"><a href="http://www.8264.com/viewnews-92230-page-1.html" target="_blank">第八届金犀牛奖颁奖典礼</a><br>&nbsp;<br>&nbsp;<br>&nbsp;</div>
                  <div style="clear:both;"></div>
              </div>
              <div class="hudongall">
                  <div class="hudongimg"><a href="http://beijing.ispo.com.cn/templates_home_article.aspx?classid=802673784962" target="_blank"><img src="http://beijing.ispo.com.cn/images/news/banff_title.png" width="120" height="80" border="0" /></a></div>
                  <div class="hudongwen"><a href="http://beijing.ispo.com.cn/templates_home_article.aspx?classid=802673784962" target="_blank">2014班夫山地电影节世界巡展</a><br>会议区三层观景平台 舞台区<br>2月20日 14:00-15:00</div>
                  <div style="clear:both;"></div>
              </div>
          </div>
          <div class="hudongr" style=" display:none;" id="hotttcomment05">
              <div class="hudongall">
                  <div class="hudongimg"><a href="#" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2014ispo/images/hudong/8264.jpg" width="120" height="80" border="0" /></a></div>
                  <div class="hudongwen"><a href="#" target="_blank">8264展位欣赏</a><br>地点：0201<br>&nbsp;</div>
                  <div style="clear:both;"></div>
              </div>
             <!-- <div class="hudongall">
                  <div class="hudongimg"><a href="http://bbs.8264.com/thread-1619193-1-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012ispo/images/lvyoujuhui.jpg" width="120" height="80" border="0" /></a></div>
                  <div class="hudongwen"><a href="http://bbs.8264.com/thread-1619193-1-1.html" target="_blank">8264公益爱心晚宴</a><br>地点：B3.103 8264展位集合<br>时间：2月27日18点</div>
                  <div style="clear:both;"></div>
              </div>-->
             <!-- <div class="hudongall">
                  <div class="hudongimg"><a href="http://bbs.8264.com/thread-1597899-1-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2014ispo/images/hudong/dianfeng.jpg" width="120" height="80" border="0" /></a></div>
                  <div class="hudongwen"><a href="http://bbs.8264.com/thread-1597899-1-1.html" target="_blank">8264·巅峰户外运动学校揭牌仪式</a><br>地点：展会现场T台区<br>时间：2月28日15:30-16:30</div>
                  <div style="clear:both;"></div>
              </div>-->
              <div class="hudongall">
                  <div class="hudongimg"><a href="http://www.8264.com/list/880" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2014ispo/images/hudong/yong.jpg" width="120" height="80" border="0" /></a></div>
                  <div class="hudongwen"><a href="http://www.8264.com/list/880" target="_blank">8264栏目<br>《勇者先行》</a></div>
                  <div style="clear:both;"></div>
              </div>
              <div class="hudongall">
                  <div class="hudongimg"><a href="http://www.8264.com/list/842" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012ispo/images/meiriyitu.jpg" width="120" height="80" border="0" /></a></div>
                  <div class="hudongwen"><a href="http://www.8264.com/list/842" target="_blank">8264栏目<br>《每日一图》</a></div>
                  <div style="clear:both;"></div>
              </div>
              <div class="hudongall">
                  <div class="hudongimg"><a href="http://www.8264.com/pp" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2014ispo/images/hudong/meigui.jpg" width="120" height="80" border="0" /></a></div>
                  <div class="hudongwen"><a href="http://www.8264.com/pp" target="_blank">8264栏目<br>《铿锵玫瑰》</a></div>
                  <div style="clear:both;"></div>
              </div>
              <div class="hudongall">
                  <div class="hudongimg"><a href="http://bbs.8264.com/thread-1609763-1-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2014ispo/images/hudong/luying.jpg" width="120" height="80" border="0" /></a></div>
                  <div class="hudongwen"><a href="http://bbs.8264.com/thread-1609763-1-1.html" target="_blank">8264户外节</a><br>联系人：阿索：13920440860</div>
                  <div style="clear:both;"></div>
              </div>
  <div class="hudongall">
                  <div class="hudongimg"><a href="http://www.8264.com/list/881" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2014ispo/images/hudong/xianlu.jpg" width="120" height="80" border="0" /></a></div>
                  <div class="hudongwen"><a href="http://www.8264.com/list/881" target="_blank">8264户外线路推荐</a></div>
                  <div style="clear:both;"></div>
              </div>
          </div>
          <div style="clear:both"></div>
</div>
    </div>
    <!--第三模块结束-->
    <!--第四模块开始  ISPO MUNICH-->
    <div class="mid">
    	<div class="title">ISPO MUNICH 2014 8264 报道</div>
<div class="mid4">
        	<div class="l4">
            	<a href="http://www.8264.com/viewnews-91835-page-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2014ispo/images/ouzhan.jpg"/></a>
                <p>德国当地时间1月26日，2014ISPO MUNICH展将在慕尼黑展览中心再次拉开帷幕。在展前的新闻发布会上慕尼黑国际博览集团总裁兼首席执行官Klaus Dittrich表示今年展会的规模要比上年有所扩大。截止日前，共有2565家公司报名参加本届展会，这个数字比上年同比增加3%，其中85%的展商来自德国以外。<a href="http://www.8264.com/viewnews-91835-page-1.html" target="_blank" style="color:#FF0000">[详细报道]</a></p>
            </div>
            <div class="m4">
                <!--[diy=ispo_mgwtw]--><div id="ispo_mgwtw" class="area"><div id="frameDZyR05" class=" frame move-span cl frame-1"><div id="frameDZyR05_left" class="column frame-1-c"><div id="frameDZyR05_left_temp" class="move-span temp"></div><?php block_display('6910'); ?></div></div></div><!--[/diy]-->
                <div class="clear"></div>
            </div>
            <div class="r4">
            	<ul>
                	<!-- 15条<li>&#8226;&nbsp;<a href="#" target="_blank">全国100多个城市，并成为国际露营联合会中国区官方合作品牌，中国汽车露营协会唯一指定用品，装备类产品</a></li>-->
                    <!--[diy=ispo_rgw]--><div id="ispo_rgw" class="area"><div id="frame5odtaL" class=" frame move-span cl frame-1"><div id="frame5odtaL_left" class="column frame-1-c"><div id="frame5odtaL_left_temp" class="move-span temp"></div><?php block_display('6911'); ?></div></div></div><!--[/diy]-->
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!--第四模块结束-->
<!--第二模块开始-->
    
    <!--第二模块结束-->
    
    <!--0225第五模块开始  展会装备-->
    <div class="mid">
    	<div class="title">展会装备</div><a name="n5"></a>
        <div class="mid4">
        	<div class="zblunbo">
            	<iframe width="700" scrolling="no" height="270" frameborder="0" marginwidth="0" marginheight="0" src="http://static.8264.com/oldcms/moban/zt/2014ispo/zblunbo.html"></iframe>
            </div>
            <div class="r5">
            	<ul>
                    <!--[diy=ispozblist]--><div id="ispozblist" class="area"><div id="framek4Q43W" class=" frame move-span cl frame-1"><div id="framek4Q43W_left" class="column frame-1-c"><div id="framek4Q43W_left_temp" class="move-span temp"></div><?php block_display('6912'); ?></div></div></div><!--[/diy]-->
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <div class="zbimglist">
            <!--[diy=ispozbimglist]--><div id="ispozbimglist" class="area"><div id="frameV9i612" class=" frame move-span cl frame-1"><div id="frameV9i612_left" class="column frame-1-c"><div id="frameV9i612_left_temp" class="move-span temp"></div><?php block_display('6913'); ?></div></div></div><!--[/diy]-->
            <div class="clear"></div>
        </div>
    </div>
    <!--0225第五模块结束-->
    <!--0225第六模块开始-->
    <div class="mid">
    	<div class="title">展会访谈</div><a name="n4"></a>
        <div class="mid4">
            <!--[diy=ispozfimglist]--><div id="ispozfimglist" class="area"><div id="frameEc22ca" class=" frame move-span cl frame-1"><div id="frameEc22ca_left" class="column frame-1-c"><div id="frameEc22ca_left_temp" class="move-span temp"></div><?php block_display('6914'); ?></div></div></div><!--[/diy]-->
            <div class="clear"></div>
        </div>
    </div>
    <!--0225第六模块结束-->
    <!--0225第七模块开始-->
    <div class="mid">
    	<div class="title">驴友观展</div><a name="n6"></a>
        <div class="mid4">
        	<div class="wybg"></div>
            <div class="wylist">
            	<ul>
                    <!--[diy=ispowylist]--><div id="ispowylist" class="area"><div id="frameNDXzdx" class=" frame move-span cl frame-1"><div id="frameNDXzdx_left" class="column frame-1-c"><div id="frameNDXzdx_left_temp" class="move-span temp"></div><?php block_display('6915'); ?></div></div></div><!--[/diy]-->
                </ul>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!--0225第七模块结束-->
    <!--0225第八模块开始-->
    <div class="mid">
    	<div class="title">展会花絮</div><a name="n8"></a>
        <div class="mid4">
            <div class="conimg" id="de">
                <table width="100%"  cellspacing="0" cellpadding="0">
                    <tr>
                        <td id="de1">
                            <table width="100%"  cellspacing="0" cellpadding="0">
                                <tr>
                                    <!--[diy=hx]--><div id="hx" class="area"><div id="frame9D9Pmz" class=" frame move-span cl frame-1"><div id="frame9D9Pmz_left" class="column frame-1-c"><div id="frame9D9Pmz_left_temp" class="move-span temp"></div><?php block_display('6916'); ?></div></div></div><!--[/diy]--> 
                                </tr>
                            </table>
                        </td>
                        <td id="de2">&nbsp;</td>
                    </tr>
                </table>
<SCRIPT language=JavaScript type=text/javascript>
                function GetObj01(objName){
                if(document.getElementById){
                return eval('document.getElementById("' + objName + '")');
                }else if(document.layers){
                return eval("document.layers['" + objName +"']");
                }else{
                return eval('document.all.' + objName);
                }
                }
                var speed01 = 20 //速度数值越大速度越慢
                GetObj01("de2").innerHTML=GetObj01("de1").innerHTML
                function Marquee01(){
                if(GetObj01("de").scrollLeft<=0)
                GetObj01("de").scrollLeft=GetObj01("de1").offsetWidth
                else{
                GetObj01("de").scrollLeft--
                }
                }
                var MyMar01=setInterval(Marquee01,speed01)
                GetObj01("de").onmouseover=function() {clearInterval(MyMar01)}
                GetObj01("de").onmouseout=function() {MyMar01=setInterval(Marquee01,speed01)}
                </SCRIPT>
            </div>
        </div>
    </div>
    <!--0225第八模块结束-->
    
    
    
    
</div>
<div class="footer">
<div class="footercon">
<p class="footer_l">8264 版权所有 津ICP备05004140号-10 ICP证 津B2-20110106<br><a href="http://bx.8264.com" target="_blank">户外有风险，8264提醒您购买户外保险</a></p>
    <p class="footer_r"><a target="_blank" href="http://www.8264.com/about-index.html">8264简介</a> | <a target="_blank" href="http://www.8264.com/about-contact.html">联系我们</a> | <a target="_blank" href="http://www.8264.com/about-adservice.html">广告服务</a> | <a target="_blank" href="http://www.8264.com/link/">户外网址大全</a> | <a target="_blank" href="http://www.8264.com/sitemap">网站地图</a></p>
    <div class="clear"></div>
    </div>
</div>
<script src="http://static.8264.com/oldcms/moban/zt/2014ispo/js/common.js" type="text/javascript" type="text/javascript" language="javascript"></script>
<!--//waper结束//-->
<?php if(empty($topic) || ($topic['usefooter'])) { ?><?php $focusid = getfocus_rand($_G[basescript]); if($focusid !== null) { ?><?php $focus = $_G['cache']['focus']['data'][$focusid]; ?><div class="focus" id="sitefocus">
<h3 class="flb">
<em><?php if($_G['cache']['focus']['title']) { ?><?php echo $_G['cache']['focus']['title'];?><?php } else { ?>站长推荐<?php } ?></em>
<span><a href="javascript:;" onclick="setcookie('nofocus_<?php echo $focusid;?>', 1, 86400);$('sitefocus').style.display='none'" class="flbc" title="关闭">关闭</a></span>
</h3>
<hr class="l" />
<div class="detail">
<h4><a href="<?php echo $focus['url'];?>" target="_blank"><?php echo $focus['subject'];?></a></h4>
<p>
<?php if($focus['image']) { ?>
<a href="<?php echo $focus['url'];?>" target="_blank"><img src="<?php echo $focus['image'];?>" onload="thumbImg(this, 1)" _width="58" _height="58" /></a>
<?php } ?>
<?php echo $focus['summary'];?>
</p>
</div>
<hr class="l" />
<a href="<?php echo $focus['url'];?>" class="moreinfo" target="_blank">查看</a>
</div>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_footer'])) echo $_G['setting']['pluginhooks']['global_footer']; } ?>

<ul id="usersetup_menu" class="p_pop" style="display:none;">
<li><a href="home.php?mod=spacecp&amp;ac=avatar">修改头像</a></li>
<li><a href="home.php?mod=spacecp&amp;ac=profile">个人资料</a></li>
<?php if($_G['setting']['verify']['enabled'] || $_G['setting']['my_app_status'] && $_G['setting']['videophoto']) { ?>
<li><a href="<?php if($_G['setting']['verify']['enabled']) { ?>home.php?mod=spacecp&ac=profile&op=verify<?php } else { ?>home.php?mod=spacecp&ac=videophoto<?php } ?>">认证</a></li>
<?php } ?>
<li><a href="home.php?mod=spacecp&amp;ac=credit">积分</a></li>
<li><a href="home.php?mod=spacecp&amp;ac=usergroup">用户组</a></li>
<li><a href="home.php?mod=spacecp&amp;ac=privacy">隐私筛选</a></li>
<?php if($_G['setting']['sendmailday']) { ?>
<li><a href="home.php?mod=spacecp&amp;ac=sendmail">邮件提醒</a></li>
<?php } ?>
<li><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=password">密码安全</a></li>
<?php if(!empty($_G['setting']['plugins']['spacecp'])) { if(is_array($_G['setting']['plugins']['spacecp'])) foreach($_G['setting']['plugins']['spacecp'] as $id => $module) { if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?><li<?php if($_G['gp_id'] == $id) { ?> class="a"<?php } ?>><a href="home.php?mod=spacecp&amp;ac=plugin&amp;id=<?php echo $id;?>"><?php echo $module['name'];?></a></li><?php } } } ?>
</ul>

<?php if($upgradecredit !== false) { ?>
<div id="g_upmine_menu" class="g_up" style="display:none;">
<div class="crly">
积分 <?php echo $_G['member']['credits'];?>, 距离下一级还需 <?php echo $upgradecredit;?> 积分
</div>
<div class="mncr"></div>
</div>
<?php } if(!$_G['setting']['bbclosed']) { if($_G['uid'] && !isset($_G['cookie']['checkpm'])) { ?>
<script src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if(!isset($_G['cookie']['sendmail'])) { ?>
<script src="home.php?mod=misc&ac=sendmail&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } } if($_GET['diy'] == 'yes' && ($_G['mod'] == 'topic' || $_G['group']['allowdiy']) && (empty($do) || $do != 'index') && !empty($_G['style']['tplfile'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>portal_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_GET['diy'] == 'yes' && $space['self'] && $_G['mod'] == 'space' && $do == 'index') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>space_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_G['member']['newprompt'] && (empty($_G['cookie']['promptstate_'.$_G['uid']]) || $_G['cookie']['promptstate_'.$_G['uid']] != $_G['member']['newprompt']) && $_G['gp_do'] != 'notice') { ?>
<script type="text/javascript">noticeTitle();</script>
<?php } ?><?php output(); ?><!--dx代码结束-->


<!-- 广告位：ispo专题广告 -->
<script type="text/javascript" >BAIDU_CLB_SLOT_ID = "598667";</script>
<script src="http://cbjs.baidu.com/js/o.js" type="text/javascript"></script>


</body>
</html>
