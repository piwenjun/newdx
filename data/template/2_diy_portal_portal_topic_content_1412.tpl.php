<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('portal_topic_content_1412', 'common/header_diy');
block_get('4845,4846,4847');?>
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
<base href="<?php echo $_G['siteurl'];?>" />    <link rel="stylesheet" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_common.css?<?php echo VERHASH;?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_portal_topic.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle'])) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?><script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>';</script>
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
<style id="diy_style" type="text/css">#frameOlopoo {  margin:0px !important;border:#000000 0px none !important;background-color:transparent !important;background-image:none !important;}#portal_block_4845 {  margin:0px !important;border:#000000 0px none !important;background-color:transparent !important;background-image:none !important;}#portal_block_4845 .content {  margin:0px !important;}#frameu27Q5I {  background-color:transparent !important;background-image:none !important;margin:0px !important;border:0px none !important;}#portal_block_4846 {  background-color:transparent !important;background-image:none !important;margin:0px !important;border:0px none !important;}#portal_block_4846 .content {  margin:0px !important;}#frame8zGhT9 {  background-color:transparent !important;background-image:none !important;margin:0px !important;border:0px none !important;}#portal_block_4847 {  background-color:transparent !important;background-image:none !important;margin:0px !important;border:0px none !important;}#portal_block_4847 .content {  margin:0px !important;}</style>
<!--diy样式结束-->

<!--自己样式开始-->
<link rel="stylesheet" type="text/css" href="http://static.8264.com/oldcms/moban/zt/2012yazhang/style/style1.css"/>
<!--自己样式结束-->
<div style=" margin-top:520px;">
    <div class="wap">
        <div class="nav"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/nav.jpg" border="0" usemap="#Map" />
          <map name="Map" id="Map">
            <area shape="rect" coords="28,15,89,31" href="http://www.8264.com/" target="_blank"/>
          </map>
      </div>
        <div class="min">
        	<div class="min_1">
            	<div class="min_1tit">会展聚焦</div>
                <div class="min_lm">
                    <div id="focus_turn">
                        <ul id="focus_pic">
                          <li class="current"><a href="http://www.8264.com/viewnews-78074-page-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/lb-tanluzhe.jpg" /></a></li>
                          <li class="normal"><a href="http://www.8264.com/viewnews-77975-page-1.html" target="_blank"><img src="http://image1.8264.com/portal/201207/26/110143v4klyh4q2z4660kz.jpg" /></a></li>
                          <li class="normal"><a href="http://www.8264.com/viewnews-78021-page-1.html" target="_blank"><img src="http://image1.8264.com/portal/201207/27/010523grfect2et7fg81r4.jpg" /></a></li>
                      </ul>
                        <ul id="focus_tx">
                          <li class="current"><a href="#" target="_blank"></a></li>
                          <li class="normal"><a href="#" target="_blank"></a></li>
                          <li class="normal"><a href="#" target="_blank"></a></li>
                      </ul>
                        <div id="focus_opacity"></div>
                    </div>
        		</div>
           	  	<div class="min_1tit">会展聚焦</div>
                <div class="min_lm" style="height:200px;  text-align:center;">
                	<a href="http://www.asian-outdoor.com/" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/jujiao1.jpg"  width="275" height="200"/></a>
                </div>
                
            </div>
            <div class="min_2">
<div class="min_1tit">展会头条</div>
                <div class="min_lm" style="height:245px;">
                	<div class="min_2wen">
                    	<b>网络驴的力量 2012亚洲户外展8264展位火爆</b>
                        <p>7月26日-29日在南京举行的2012亚洲户外用品展览会，8264（www.8264.com）进行了全程报道，8264展位由采访区，接待区和形象展示区三部分所组成，展位现场人气火爆。 <a href="http://www.8264.com/viewnews-77990-page-1.html" target="_blank"><span>[详细]</span></a></p>
                  </div>
                    <div class="min_2wen">
                    	<b>2012亚洲户外展 透过品牌推广 解析发展趋势</b>
                        <p>2012年亚洲户外展开展第一天，小编走访了各大品牌展位，与大家分享。<a href="http://www.8264.com/viewnews-78026-page-1.html" target="_blank"><span>[详细]</span></a></p>
                    </div>
                    <div class="min_2wen">
                    	<b>2012（第七届）亚洲户外展参展品牌将达到540个</b>
                        <p> 作为古都<a href="http://bbs.8264.com/thread-893527-1-1.html" target="_blank">南京</a>最早的专业性国际<a href="http://bbs.8264.com/thread-893508-1-1.html" target="_blank">合作</a>展会之一，2012（第七届）<a href="http://bbs.8264.com/thread-892106-1-1.html" target="_blank">亚洲</a>户外展将于7月26日至29日在南京国际博览中心开幕。展会总规模将由2011年的4．2万平方米扩大到4．8万平方米，参展品牌预计达到540个，比去年增长近20％ .<a href="http://www.8264.com/viewnews-77197-page-1.html" target="_blank"><span>[详细]</span></a></p>
                    </div>
                </div>
                
<div class="min_1tit">会展动态</div>
                <div class="min_lm" style="height:200px;">
                	<!--[diy=zhdt]--><div id="zhdt" class="area"><div id="frameOlopoo" class=" frame move-span cl frame-1"><div id="frameOlopoo_left" class="column frame-1-c"><div id="frameOlopoo_left_temp" class="move-span temp"></div><?php block_display('4845'); ?></div></div></div><!--[/diy]-->
                </div>
            
            </div>
            <div class="min_3">
            	<div class="min_1tit">展会倒计时</div>
                <div class="min_lm" style="height:160px;">
                
                	<div class="min_31">
<script type="text/javascript">
var urodz= new Date("Jul 26,2012"); 
var now = new Date(); 
var ile = urodz.getTime() - now.getTime(); 
var dni = Math.floor(ile / (1000 * 60 * 60 * 24)); 

if (dni > 1) 
document.write(dni+1)
else if (dni == 1) 
document.write("2") 
else if (dni == 0) 
document.write("1") 
else 
document.write("已开始")
</script>
                    </div>
                </div>
<div class="min_1tit">观展手册</div>
                <div class="min_lm" style="height:140px;">
                	<div class="min_32">
                	 <img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/shouce.jpg" border="0" usemap="#Map2" /><map name="Map2" id="Map2">
                       <area shape="rect" coords="12,7,61,30" href="http://www.asian-outdoor.com/" target="_blank" />
                       <area shape="rect" coords="137,11,190,31" href="http://www.asian-outdoor.com/html/Travel%20&%20Accomodation/Overview/" target="_blank"/>
                       <area shape="rect" coords="13,59,61,79" href="http://www.asian-outdoor.com/html/Travel%20&%20Accomodation/Overview/" target="_blank" />
                       <area shape="rect" coords="141,60,189,79" href="http://www.asian-outdoor.com/html/Travel%20&%20Accomodation/Overview/" target="_blank" />
                       <area shape="rect" coords="13,88,60,107" href="http://www.weather.com.cn/weather/101190101.shtml" target="_blank"/>
                       <area shape="rect" coords="140,107,198,127" href="http://www.asian-outdoor.com/visitor-reg.html" target="_blank"/>
                     </map>
                    </div>
                </div>
<div class="min_1tit">8264特别策划</div>
                <div class="min_lm" style="height:90px;">
                	<div class="min_33">
<ul>
                        	<li>&#8226;&nbsp;<a href="http://bbs.8264.com/thread-1288216-1-1.html">8264“亚展”线下驴友大聚会</a></li>
                            <li>&#8226;&nbsp;8264“亚展”版主聚会</li>
                            <li>&#8226;&nbsp;<a href="http://www.8264.com/portal-topic-topicid-1396.html">8264“亚展”露营大会介绍</a></li                          
                        ></ul>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="title11">
        	网上展厅
        </div>
        <div class="min11">
            <div class="zwt"><a href="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/Hall A.pdf" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/A.jpg"  /></a></div>
            <div class="zwt"><a href="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/Hall B.pdf" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/B.jpg"  /></a></div>
            <div class="zwt"><a href="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/Hall C.pdf" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/C.jpg"  /></a></div>
            <div class="zwt"><a href="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/Hall D.pdf" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/D.jpg"  /></a></div>
            <div class="zwt"><a href="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/Hall E.pdf" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/E.jpg"  /></a></div>
            <div class="zwt"><a href="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/Hall F.pdf" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/F.jpg"  /></a></div>
            <div class="clear"></div>

        </div>
        <!--舌签结束-->
        <div class="title11">
        	2012高端访谈
        </div>
        <div class="min2">
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	北京探路者总裁彭昕<br /><p>差异化定位明确品牌价值主张</p>
                </div>
                <div class="imgbox1_m"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/zf-pengxin.jpg" /></div>
                <div class="imgbox1_b">
                	坚持科技创新 为勇敢进取的人提供安全舒适的户外运动装备<a href="http://www.8264.com/viewnews-78074-page-1.html" target="_blank">[详细]</a>
                </div>
</div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	牧高笛总经理陆暾峰<br /><p>打造专业的户外旅行装备</p>
                </div>
                <div class="imgbox1_m"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/zf-ludunfeng.jpg" /></div>
                <div class="imgbox1_b">
                	牧高笛改善产品调研谨慎对待电商平台。<a href="http://www.8264.com/viewnews-78153-page-1.html" target="_blank">[详细]</a>
                </div>
</div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	KAILAS市场总监付显凯<br /><p>商场与专业渠道并重</p>
                </div>
                <div class="imgbox1_m"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/zf-fuxiankai01.jpg" /></div>
                <div class="imgbox1_b">
                	KAILAS商场与专业渠道并重“两条腿”稳步上升。<a href="http://www.8264.com/viewnews-78088-page-1.html" target="_blank">[详细]</a>
                </div>
</div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	Vasque全球销售总监George<br /><p>制定策略走出窘境</p>
                </div>
                <div class="imgbox1_m"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/zf-Vasque.jpg" /></div>
                <div class="imgbox1_b">
                	针对中国市场而打造符合中国户外爱好者喜好的产品<a href="http://www.8264.com/viewnews-78025-page-1.html" target="_blank">[详细]</a>
                </div>
            </div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	上海砂岩公司董事长李军<br /><p>渠道线上线下同时进行</p>
                </div>
                <div class="imgbox1_m"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/zf-Sandstone.jpg" /></div>
                <div class="imgbox1_b">
                	Sandstone进入中国后如何平衡线上线下两种渠道<a href="http://www.8264.com/viewnews-78079-page-1.html" target="_blank">[详细]</a>
                </div>
</div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	BD全球销售经理Dave<br /><p>2014将推出女款科技服装</p>
                </div>
                <div class="imgbox1_m"><img src="http://image1.8264.com/portal/201207/27/013025yxn33lwwa4u0zyno.jpg" /></div>
                <div class="imgbox1_b">
                	Dave介绍了Black Diamond在中国动态、未来收购计划<a href="http://www.8264.com/viewnews-78023-page-1.html" target="_blank">[详细]</a>
                </div>
            </div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	KingCamp品牌创始人徐国庆<br /><p>谈十年发展稳健步伐</p>
                </div>
                <div class="imgbox1_m"><img src="http://image1.8264.com/portal/201207/27/235300se16ek6111eoo6xf.jpg" /></div>
                <div class="imgbox1_b">
                	kingCamp品牌创始人徐国庆分享KingCamp“去户外学会爱”<a href="http://www.8264.com/viewnews-78071-page-1.html" target="_blank">[详细]</a>
                </div>
            </div>
        	<div class="imgbox1">
            	<div class="imgbox1_t">
                	喀尔沃总经理 李炯波<br /><p>与策划公司合作制定方案</p>
                </div>
                <div class="imgbox1_m"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/zf-caervo.jpg" /></div>
                <div class="imgbox1_b">
                	合作主要包括在整体渠道的推广和市场占有率的提升。<a href="http://www.8264.com/viewnews-78075-page-1.html" target="_blank">[详细]</a>
                </div>
</div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	思凯乐总经理曾花<br /><p>思凯乐将迎接十周年</p>
                </div>
                <div class="imgbox1_m"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/zf-zenghua.jpg" /></div>
                <div class="imgbox1_b">
                	上市就像财富的积累但并不像是考核思凯乐的依据。<a href="http://www.8264.com/viewnews-78216-page-1.html" target="_blank">[详细]</a>
                </div>
</div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	深圳一电科技营销总监王文超<br /><p>要打造值得骄傲的民族品牌</p>
                </div>
                <div class="imgbox1_m"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/zf-wangwenchao.jpg" /></div>
                <div class="imgbox1_b">
                	AEE产品也会像单反相机分为低端和中高端进入大众市场。<a href="http://www.8264.com/viewnews-78161-page-1.html" target="_blank">[详细]</a>
                </div>
</div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	夏多吉户外用品总经理任玉龙<br /><p>拓展产品线推出更多休闲鞋品</p>
                </div>
                <div class="imgbox1_m"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/zf-renyulong.jpg" /></div>
                <div class="imgbox1_b">
                	以前注重高帮和中帮专业鞋 今年推出休闲大众鞋。<a href="http://www.8264.com/viewnews-78155-page-1.html" target="_blank">[详细]</a>
                </div>
</div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	极星营销总监周磊先生<br /><p>打造极星品牌DNA</p>
                </div>
                <div class="imgbox1_m"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/zf-zhoulei.jpg" /></div>
                <div class="imgbox1_b">
                	自主研发方面推出最新的科技面料和全新第三极系列装备。<a href="http://www.8264.com/viewnews-78148-page-1.html" target="_blank">[详细]</a>
                </div>
</div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	山东众磊联合创业董事长刘荣杰<br /><p>不断提升产品的品质</p>
                </div>
                <div class="imgbox1_m"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/zf-liurongjie.jpg" /></div>
                <div class="imgbox1_b">
                	硬骨 不断提升产品的品质和系列满足消费者。<a href="http://www.8264.com/viewnews-78121-page-1.html" target="_blank">[详细]</a>
                </div>
</div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	南京边城体育集团副总经理王凡<br /><p>延续以奥地利为载体的产品系列</p>
                </div>
                <div class="imgbox1_m"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/zf-wangfan.jpg" /></div>
                <div class="imgbox1_b">
                	NORTHLAND：未来将加大休闲和城市产品宽度。<a href="http://www.8264.com/viewnews-78131-page-1.html" target="_blank">[详细]</a>
                </div>
</div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	悠度营销中心总经理林焱先生<br /><p>悠度进军软壳市场</p>
                </div>
                <div class="imgbox1_m"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/zf-linyan.jpg" /></div>
                <div class="imgbox1_b">
                	悠度推广"软户外"概念 进军软壳市场。<a href="http://www.8264.com/viewnews-78124-page-1.html" target="_blank">[详细]</a>
                </div>
</div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	BEAUME中国区市场总监徐伟杰<br /><p>用科技与行动说话</p>
                </div>
                <div class="imgbox1_m"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/zf-xuweijie.jpg" /></div>
                <div class="imgbox1_b">
                	BEAUME的产品用料用的VENTAIR3层覆膜技术。<a href="http://www.8264.com/viewnews-78116-page-1.html" target="_blank">[详细]</a>
                </div>
</div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	Sympatex CEO：Micheal Kamm<br /><p>将环保面料的理念带到中国</p>
                </div>
                <div class="imgbox1_m"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/zf-kamm.jpg" /></div>
                <div class="imgbox1_b">
                	Sympatex面料进入中国市场后根据其差异性进行部分调整。<a href="http://www.8264.com/viewnews-78104-page-1.html" target="_blank">[详细]</a>
                </div>
</div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	爱路客品牌经理王芃<br /><p>一切为了户外</p>
                </div>
                <div class="imgbox1_m"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/zf-wangpeng.jpg" /></div>
                <div class="imgbox1_b">
                	一切为了户外 为了户外的一切研发产品。<a href="http://www.8264.com/viewnews-78108-page-1.html" target="_blank">[详细]</a>
                </div>
</div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	图途市场推广总监林章锋<br /><p>品牌销售的渠道保障</p>
                </div>
                <div class="imgbox1_m"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/zf-linzhangfeng.jpg" /></div>
                <div class="imgbox1_b">
                	针对现在的电子商务来讲主要的竞争优势就是性价比。<a href="http://www.8264.com/viewnews-78107-page-1.html" target="_blank">[详细]</a>
                </div>
</div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	Actionfox营销总监张萍女士<br /><p>商场与专业渠道并重</p>
                </div>
                <div class="imgbox1_m"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/zf-zhangping.jpg" /></div>
                <div class="imgbox1_b">
                	Actionfox(快乐狐狸) 持续拓展产品线。<a href="http://www.8264.com/viewnews-78106-page-1.html" target="_blank">[详细]</a>
                </div>
</div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	伊思佳总经理张莉<br /><p>伊思佳的未来发展目标是上市</p>
                </div>
                <div class="imgbox1_m"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/zf-zhangli.jpg" /></div>
                <div class="imgbox1_b">
                	伊思佳确保公司年销售业绩保持40%以上的增长态势。<a href="http://www.8264.com/viewnews-78084-page-1.html" target="_blank">[详细]</a>
                </div>
</div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	ROYALWAY销售总监张健<br /><p>ROYALWAY过去 现在 未来</p>
                </div>
                <div class="imgbox1_m"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/zf-zhangjian.jpg" /></div>
                <div class="imgbox1_b">
                	ROYALWAY在产品研发层面一直坚持人性化的细节设计与创新。<a href="http://www.8264.com/viewnews-78083-page-1.html" target="_blank">[详细]</a>
                </div>
</div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	Rywan总经理Maxime<br /><p>携带近百种袜子进入中国</p>
                </div>
                <div class="imgbox1_m"><img src="http://image1.8264.com/portal/201207/26/2200087gz4rr3w777yzn1z.jpg" /></div>
                <div class="imgbox1_b">
                	Rywan品牌、在欧洲发展状况、欧洲整体户外市场发展现状等<a href="http://www.8264.com/viewnews-78012-page-1.html" target="_blank">[详细]</a>
                </div>
            </div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	天秦科技销售经理郭广永<br /><p>推广户外安全饮水</p>
                </div>
                <div class="imgbox1_m"><img src="http://image1.8264.com/portal/201207/26/2135220opls6ipz68sw7d5.jpg" /></div>
                <div class="imgbox1_b">
                	未来还有更多新产品投放到市场，请大家拭目以待。<a href="http://www.8264.com/viewnews-78008-page-1.html" target="_blank">[详细]</a>
                </div>
            </div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	户外科技智慧运动<br /><p>宜准打造最专业的户外腕表</p>
                </div>
                <div class="imgbox1_m"><img src="http://image1.8264.com/portal/201207/27/221747wwr1g1dp2dcn5wg7.jpg" /></div>
                <div class="imgbox1_b">
                	EZON(宜准）的品牌优势来源于多年的沉淀与不断的创新<a href="http://www.8264.com/viewnews-78069-page-1.html" target="_blank">[详细]</a>
                </div>
            </div>
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	理念 定位 改革<br /><p>致力打造中国户外鞋标杆品牌</p>
                </div>
                <div class="imgbox1_m"><img src="http://image1.8264.com/portal/201207/27/232919gdoomdia7umwpd4s.jpg" /></div>
                <div class="imgbox1_b">
                	 Clorts(洛弛）产品设计总监介绍了产品理念与设计原素<a href="http://www.8264.com/viewnews-78070-page-1.html" target="_blank">[详细]</a>
                </div>
            </div>           
            <div class="imgbox1">
            	<div class="imgbox1_t">
                	HAGLOFS品牌总监范勇先生<br /><p>卓越的户外装备</p>
                </div>
                <div class="imgbox1_m"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/zf-HAGLOFS.jpg" /></div>
                <div class="imgbox1_b">
                	HAGLOFS在中国的本土化建设绝不以牺牲其产品品质为代价<a href="http://www.8264.com/viewnews-78316-page-1.html" target="_blank">[详细]</a>
                </div>
</div>                  
        	<div class="clear"></div>
        </div>
            
<!--2012高端访谈结束-->
        <div class="title11">
        	2012欧洲户外展
        </div>
        
        <div class="min3">
        	<div class="min3_1">
            	<div><a href="http://www.8264.com/viewnews-77661-page-1.html" target=""><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/ouzhouhuwaizhan.jpg" /></a></div>
                <p>当地时间7月12-15日，欧洲户外展在德国菲德列斯哈芬市腓德烈斯哈芬展览中心举行，来自39个国家的907名展商参展，同比上涨2%，打破以往记录，200多件新品首次参展。越来越多的企业不再集中精力注重产品，追求可持续发展过程，这个过程被定义为产品的耐用和功能性、企业的透明度和责任。2011年，欧洲户外用品总收入100亿欧元，其中销售额增幅较高的品牌主要有Jack Wolfskin、Petzl、La Sportiva和Original Buff。<a href="http://www.8264.com/viewnews-77661-page-1.html" target="_blank" style="color:#F00; margin-left:10px;">[全文]</a><a href="http://www.8264.com/viewnews-77658-page-1.html" target="_blank"  style="color:#F00; margin-left:10px;">[精粹]</a><a href="http://www.8264.com/list/733" target="_blank"  style="color:#F00; margin-left:10px;">[更多相关内容]</a></p>
            </div>
        	<div class="min3_2">
            	<div class="imgbox2">
                	<div class="imgbox2_img"><a href="http://www.8264.com/viewnews-77714-page-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/oz-zhanhuitiyan.jpg" /></a></div>
                    <div class="imgbox2_text"><a href="http://www.8264.com/viewnews-77714-page-1.html" target="_blank">展会体验</a></div>
                </div>
                <div class="imgbox2">
                	<div class="imgbox2_img"><a href="http://www.8264.com/viewnews-77716-page-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/oz-huaxu.jpg" /></a></div>
                    <div class="imgbox2_text"><a href="http://www.8264.com/viewnews-77716-page-1.html" target="_blank">展会花絮</a></div>
                </div>
                <div class="imgbox2">
                	<div class="imgbox2_img"><a href="http://www.8264.com/viewnews-77821-page-1.html" target="_blank"><img src=
"http://static.8264.com/oldcms/moban/zt/2012yazhang/image/oz-xiezixinpin.jpg" /></a></div>
                    <div class="imgbox2_text"><a href="http://www.8264.com/viewnews-77821-page-1.html" target="_blank">鞋类篇</a></div>
                </div>
                <div class="imgbox2">
                	<div class="imgbox2_img"><a href="http://www.8264.com/viewnews-77695-page-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/oz-fuzhuangxinpin.jpg" /></a></div>
                    <div class="imgbox2_text"><a href="http://www.8264.com/viewnews-77695-page-1.html" target="_blank">服装篇</a></div>
                </div>
                <div class="imgbox2">
                	<div class="imgbox2_img"><a href="http://www.8264.com/viewnews-77777-page-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/oz-peijianxinpin.jpg" /></a></div>
                    <div class="imgbox2_text"><a href="http://www.8264.com/viewnews-77777-page-1.html" target="_blank">配件篇</a></div>
                </div>
                <div class="imgbox2">
                	<div class="imgbox2_img"><a href="http://www.8264.com/viewnews-77748-page-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/oz-panyanjixian.jpg" /></a></div>
                    <div class="imgbox2_text"><a href="http://www.8264.com/viewnews-77748-page-1.html" target="_blank">攀岩极限篇</a></div>
                </div>
            	<div class="clear"></div>
            </div>
            <div class="min3_3">
            	<b>欧洲户外户外产业设计大奖</b>
            	<p>8264（www.8264.com)讯，德国时间7月12日，2012欧洲户外展（7月12-15日）在菲德烈斯哈芬展览中心如期开幕，第7届欧洲户外产业设计大奖获奖名单也同期发布。本次评选共有来自25个国家的322件产品参赛，经过专业评审团严格评选48件产品最终获的本届欧洲户外产业设计大奖，所有获奖产品都将在展会上特别展出。</p>
                <a href="http://www.8264.com/viewnews-77675-page-1.html" target="_blank" style="color:#F00; float:right;">[全文]</a>
                <div class="clear"></div>
<div class="imgbox21">
                	<div class="imgbox21_img"><a href="http://www.8264.com/viewnews-77685-page-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/pic1.jpg" /></a></div>
                    <div class="imgbox21_text"><a href="http://www.8264.com/viewnews-77685-page-1.html" target="_blank">欧洲户外展篇</a></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
<!--2012欧洲户外展结束-->
<div class="title11">
        	2012亚洲户外展装备新品
        </div>
        
        <div class="min4">
       		<div class="zhuangbeitop">
                <div class="zhuangbeitop_l">
                    <div class="zhuangbeitop_l11"><a href="http://www.8264.com/zb-1325588" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/da1.jpg" width="348" height="170" border="0" /></a></div>
                    <div style=" background:#000; height:25px; margin-top:5px; padding-top:5px; font-size:14px; font-weight:bold; color:#FFFFFF; text-align:center;">KingCamp碳纤维登山杖</div>
                    <div class="zhuangbeilist">
<!--[diy=zblist]--><div id="zblist" class="area"><div id="frameu27Q5I" class=" frame move-span cl frame-1"><div id="frameu27Q5I_left" class="column frame-1-c"><div id="frameu27Q5I_left_temp" class="move-span temp"></div><?php block_display('4846'); ?></div></div></div><!--[/diy]-->
                    </div>
                </div>
                <div class="zhuangbeitop_r">
                    <div class="zhungbeitopall">
                        <div class="zhungbeitopall_l">
                            <div class="zhuangbeibg"><a href="http://www.8264.com/zb-1326131" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/da2.jpg" width="170" height="120" border="0"/></a></div>
                        </div>
                      <div class="zhungbeitopall_r"><a href="http://www.8264.com/zb-1326131" target="_blank"> KAILAS（凯乐石）新一代的“主”力军</a><br>MountwireHMS主锁Keylock无钩锁门设计使其易于挂取，避免钩住绳索或挂片。锁的内部增加的钢丝门能够挂入安全带中，令保护操作时锁不会旋转。主锁重量轻，坚固耐用的大丝扣锁功能齐全，可进行HWS（意大利半扣/单环结）操作。</div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="zhungbeitopall">
                        <div class="zhungbeitopall_l">
                        <div class="zhuangbeibg"><a href="http://www.8264.com/viewnews-78078-page-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/da3.jpg" width="170" height="120" border="0"/></a></div></div>
                        <div class="zhungbeitopall_r"><a href="http://www.8264.com/viewnews-78078-page-1.html" target="_blank">Edelrid超轻量超强度高科技登山绳 
    </a><br>Edelrid超轻量超强度的高科技攀登绳，获得2012亚洲户外展会产业大奖。高强度合成纤维制成的绳索成为完美的下降和索引绳。同时获得了Bluesign认证。直经6MM，拉力为20kn的拉力，这是所有制造绳索厂家没有的独家技术</div>
                        <div style="clear:both;"></div>
                    </div>
<div class="zhungbeitopall">
                        <div class="zhungbeitopall_l">
                        <div class="zhuangbeibg"><a href="http://www.8264.com/zb-1326553" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/da4.jpg" width="170" height="120" border="0"/></a></div></div>
                        <div class="zhungbeitopall_r">
                          <p><a href="http://www.8264.com/zb-1326553" target="_blank">鞋面无缝线的VASQUE2013越野跑新品 
                          </a><br>这款鞋子的最大特点是鞋面无缝线，减少了缝线面积，和脚面没有接触。脚面比较敏感，无缝线的鞋子穿起来很舒适、灵活自如。鞋底很特别，内底是平的，消费者自己的脚型来决定鞋垫的形状。这款鞋是VASQUE推出的360度鞋线、超轻、有男女两款、4种颜色。</p>
                         
                      </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div>
            
            <div class="zhuangbeidown">
<!--[diy=zbtw]--><div id="zbtw" class="area"><div id="frame8zGhT9" class=" frame move-span cl frame-1"><div id="frame8zGhT9_left" class="column frame-1-c"><div id="frame8zGhT9_left_temp" class="move-span temp"></div><?php block_display('4847'); ?></div></div></div><!--[/diy]-->
            </div>
       </div>
        <!--2012欧洲户外展装备新品结束-->
       	<div class="title11">2012亚洲户外展装官方活动</div>
        
        <div class="min5">
       		<div class="imgbox3">
            	<div class="imgbox3_tit">
            	  <div align="center"><a href="http://www.asian-outdoor.com/html/Supportingprogramme/AWARD/" target="_blank"><strong>亚洲户外产业大奖</strong></a></div>
           	  </div>
            	<div> <a href="http://www.asian-outdoor.com/html/Supportingprogramme/AWARD/" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/hd9.jpg" /></a> </div>
                <div class="imgbox3_text">时间：7月26日<br />地点：展会现场</div>
            </div>
            <div class="imgbox3">
            	<div class="imgbox3_tit">
            	  <div align="center"><a href="http://www.asian-outdoor.com/html/Supporting%20programme/Schedule/" target="_blank"><strong>产业发展论坛</strong></a></div>
           	  </div>
            	<div> <a href="http://www.asian-outdoor.com/html/Supporting%20programme/Schedule/" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/hd2.jpg" /></a> </div>
                <div class="imgbox3_text">时间：7月28日<br />
                地点：B02 C02会议室</div>
            </div>
            <div class="imgbox3">
            	<div class="imgbox3_tit">
            	  <div align="center"><a href="http://www.asian-outdoor.com/html/Supporting%20programme/Party/" target="_blank"><strong>摇滚音乐晚会</strong></a></div>
           	  </div>
            	<div> <a href="http://www.asian-outdoor.com/html/Supporting%20programme/Party/" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/hd3.jpg" /></a> </div>
                <div class="imgbox3_text">时间：2012年7月28日晚<br />地点：AB厅之间登录厅</div>
            </div>
            <div class="imgbox3">
            	<div class="imgbox3_tit"> 
            	  <div align="center"><a href="http://www.asian-outdoor.com/html/Supporting%20programme/Tent%20City/" target="_blank"><strong>帐篷区</strong></a></div>
                </div>
            	<div> <a href="http://www.asian-outdoor.com/html/Supporting%20programme/Tent%20City/" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/hd4.jpg" /></a> </div>
                <div class="imgbox3_text">时间：展会期间<br />地点：F展厅</div>
            </div>
            <div class="imgbox3">
            	<div class="imgbox3_tit"> 
            	  <div align="center"><a href="http://www.asian-outdoor.com/html/Supporting%20programme/Climbing%20Competitions/" target="_blank"><strong>攀登节</strong><strong></strong></a></div>
              </div>
            	<div> <a href="http://www.asian-outdoor.com/html/Supporting%20programme/Climbing%20Competitions/" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/hd5.jpg" /></a> </div>
                <div class="imgbox3_text">时间：2012年7月26—29日<br />
                地点：  E厅</div>
            </div>
            <div class="clear"></div>
       </div>
<!--2012亚洲户外展装备官方活动结束-->
        
<div class="title11">
        	2012亚洲户外展8264展位图集
        </div>
        
    	<div class="min6">
            <div class="min6_l">
                <img src="http://image1.8264.com/portal/201207/27/0206058tsw4dkhtu4hfszd.jpg" />
            </div>
            <div class="min6_r">
                <div class="min6_r_img"><img src="http://image1.8264.com/portal/201207/27/020614nk5nd5eey3xkte53.jpg" /></div>
                <div class="min6_r_img"><img src="http://image1.8264.com/portal/201207/27/0206224woyyz8ewzoj2bz4.jpg" /></div>
                <div class="min6_r_img"><img src="http://image1.8264.com/portal/201207/27/020630aaqddtpf7gqlq3p7.jpg" /></div>
                <div class="min6_r_img"><img src="http://image1.8264.com/portal/201207/27/020638gtaqgz9sqkq3ag93.jpg" /></div>
                <div class="min6_r_img"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/zhanweitu01.jpg" /></div>
                <div class="min6_r_img"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/zhanweitu02.jpg" /></div>
                
                
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
<!--2012亚洲户外展8264展位图集结束-->
<div class="title2">
        	户外美女
        </div>
        <div class="min7">
        	<div class="min71">
            	<div class="min71_bigimg"><a href="http://bbs.8264.com/thread-1327118-1-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/meinv01.jpg" /></a>
            	  <div style="text-align:center; margin-top:5px;"><a href="http://bbs.8264.com/thread-1327118-1-1.html" target="_blank">美女</a></div>
                </div>
                <div class="min71_small">
                	<div class="min71_smallbox">
                        <a href="http://bbs.8264.com/thread-1327118-1-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/meinv04.jpg" /></a>
                        <div style="text-align:center; margin-top:5px;"><a href="http://bbs.8264.com/thread-1327118-1-1.html" target="_blank">单车美女</a></div>                    	
                    </div>
   					<div class="min71_smallbox">
                        <a href="http://bbs.8264.com/thread-1327118-1-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/meinv05.jpg" /></a>
                        <div style="text-align:center; margin-top:5px;"><a href="http://bbs.8264.com/thread-1327118-1-1.html" target="_blank">这是在干啥</a></div>                    	
                    </div>
                    <div class="min71_smallbox">
                        <a href="http://bbs.8264.com/thread-1327118-1-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/meinv06.jpg" /></a>
                        <div style="text-align:center; margin-top:5px;"><a href="http://bbs.8264.com/thread-1327118-1-1.html" target="_blank">功夫美女</a></div>                    	
                    </div>
                    <div class="min71_smallbox">
                        <a href="http://bbs.8264.com/thread-1327118-1-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/meinv07.jpg" /></a>
                        <div style="text-align:center; margin-top:5px;"><a href="http://bbs.8264.com/thread-1327118-1-1.html" target="_blank">可爱的美女</a></div>                    	
                    </div>
                	<div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="min71">
                <div class="min71_small">
                	<div class="min71_smallbox1">
                        <a href="http://bbs.8264.com/thread-1327118-1-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/meinv08.jpg" /></a>
                        <div style="text-align:center; margin-top:5px;"><a href="http://bbs.8264.com/thread-1327118-1-1.html" target="_blank">力量女神</a></div>                    	
                    </div>
   					<div class="min71_smallbox1">
                        <a href="http://bbs.8264.com/thread-1327118-1-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/meinv02.jpg" /></a>
                        <div style="text-align:center; margin-top:5px;"><a href="http://bbs.8264.com/thread-1327118-1-1.html" target="_blank">靓丽呀</a></div>                    	
                    </div>
                    <div class="min71_smallbox1">
                        <a href="http://bbs.8264.com/thread-1327118-1-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/meinv03.jpg" /></a>
                        <div style="text-align:center; margin-top:5px;"><a href="http://bbs.8264.com/thread-1327118-1-1.html" target="_blank">这个可以有</a></div>                    	
                    </div>
                    <div class="min71_smallbox1">
                        <a href="http://bbs.8264.com/thread-1327118-1-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/meinv09.jpg" /></a>
                        <div style="text-align:center; margin-top:5px;"><a href="http://bbs.8264.com/thread-1327118-1-1.html" target="_blank">一对儿美女</a></div>                    	
                    </div>
                	<div class="clear"></div>
                </div>
                <div class="min71_bigimg"><a href="http://bbs.8264.com/thread-1327118-1-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/meinv01.jpg" /></a>
                  <div style="text-align:center; margin-top:5px;"><a href="http://bbs.8264.com/thread-1327118-1-1.html" target="_blank">美女</a></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div><img src="http://static.8264.com/oldcms/moban/zt/2012yazhang/image/bottom_bg.jpg" /></div>
<!--户外美女结束-->
      
        <div class="bottom">
    	<a href="http://www.8264.com/template/8264/about/aboutus.htm" target="_blank">8264简介</a>&nbsp;|&nbsp;<a href="http://www.8264.com/template/8264/about/ggservice/index.html" target="_blank" >广告服务</a>&nbsp;|&nbsp;<a href="http://www.8264.com/zhuanti" target="_blank">户外热点</a>&nbsp;|&nbsp;<a href="http://www.8264.com/template/8264/about/aboutus.htm" target="_blank">联系方式</a>&nbsp;|&nbsp;<a href="http://bbs.8264.com/plugin.php?id=drc_qqgroup:main" target="_blank" >QQ群联盟</a>&nbsp;|&nbsp;<a href="http://www.8264.com/link/" target="_blank">户外网址大全</a><br>
          服务热线：022-23708264&nbsp;|&nbsp;传真：022-23857291&nbsp;|&nbsp;地址：天津市华苑产业园区鑫茂科技园C2座6层AB单元<br>
          <a href="http://bx.8264.com" target="_blank">户外活动有风险，8264提醒您购买</a> <a href="http://bx.8264.com">户外保险</a><br>
          除了脚印什么都不留下 除了摄影什么都不带走，欢迎各种媒体转载我们的原创作品[转载请注明出处]。8264&nbsp;版权所有   <a href="http://www.miibeian.gov.cn/" target="_blank">津ICP备05004140号-10</a>&nbsp;&nbsp;&nbsp;<a href="http://www.8264.com/template/8264/http://static.8264.com/oldcms/moban/zt/2012yazhang/image/icp.jpg" target="_blank">ICP证 津B2-20110106</a>
    </div>
    	<!--底部结束-->
        <div class="topl"></div>
        <div class="topr"></div>
        <div class="bottoml"></div>
        <div class="bottomr"></div>
    		
    
    </div>
</div>
   
<!--dx代码开始-->  
<?php if(!empty($_G['setting']['pluginhooks']['global_footerlink'])) echo $_G['setting']['pluginhooks']['global_footerlink']; ?><?php updatesession(); ?><!--dx代码结束-->
  

<!--dx代码开始-->



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


</body>
</html>
