<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('portal_topic_content_1353', 'common/header_diy');
block_get('2320,2321,2323,2325,2329,2331,2332,2338,2337,2335,2333');?>
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
<script src="http://static.8264.com/oldcms/moban/zt/2011tibo/js/common.js" type="text/javascript" type="text/javascript" language="javascript"></script>
<script src="template/8264/js/jquery-1.4.min.js" type="text/javascript"></script>
<script src="template/8264/js/jquery.lazy-1.3.1.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function(){
  jQuery.lazy({src:'template/8264/js/jquery.darizi.js',name:'darizi',dependencies:{js:['template/8264/js/jquery.countdown.js']},cache:true});
  // 大日子
  var ndate = new Date(2011,4,13); 
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
<style id="diy_style" type="text/css">#frametLQ28x {  margin:0px !important;border:0px !important;}#portal_block_2320 {  margin:0px !important;border:0px !important;}#portal_block_2320 .content {  margin:0px !important;}#frame938WD5 {  margin:0px !important;border:0px !important;}#portal_block_2321 {  margin:0px !important;border:0px !important;}#portal_block_2321 .content {  margin:0px !important;}#frameoYgQ6L {  margin:0px !important;border:0px !important;}#frameOK2i75 {  margin:0px !important;border:0px !important;}#portal_block_2322 {  margin:0px !important;border:0px !important;}#portal_block_2322 .content {  margin:0px !important;}#portal_block_2323 {  margin:0px !important;border:0px !important;}#portal_block_2323 .content {  margin:0px !important;}#frame3y1TDn {  margin:0px !important;border:0px !important;}#framel3842X {  margin:0px !important;border:0px !important;}#portal_block_2324 {  margin:0px !important;border:0px !important;}#portal_block_2324 .content {  margin:0px !important;}#portal_block_2325 {  margin:0px !important;border:0px !important;}#portal_block_2325 .content {  margin:0px !important;}#frameC1972L {  margin:0px !important;border:0px !important;}#frame358wW6 {  margin:0px !important;border:0px !important;}#portal_block_2328 {  margin:0px !important;border:0px !important;}#portal_block_2328 .content {  margin:0px !important;}#portal_block_2329 {  margin:0px !important;border:0px !important;}#portal_block_2329 .content {  margin:0px !important;}#framestNF7G {  margin:0px !important;border:0px !important;}#frameW4eqWF {  margin:0px !important;border:0px !important;}#portal_block_2330 {  margin:0px !important;border:0px !important;}#portal_block_2330 .content {  margin:0px !important;}#portal_block_2331 {  margin:0px !important;border:0px !important;}#portal_block_2331 .content {  margin:0px !important;}#frameITI8b8 {  margin:0px !important;border:0px !important;}#portal_block_2332 {  margin:0px !important;border:0px !important;}#portal_block_2332 .content {  margin:0px !important;}#frame9HT9Ob {  margin:0px !important;border:0px !important;}#portal_block_2333 {  margin:0px !important;border:0px !important;}#portal_block_2333 .content {  margin:0px !important;}#frameux4RM8 {  margin:0px !important;border:0px !important;}#portal_block_2335 {  margin:0px !important;border:0px !important;}#portal_block_2335 .content {  margin:0px !important;}#frameLLb2Wr {  margin:0px !important;border:0px !important;}#frame6mx5im {  margin:0px !important;border:0px !important;}#portal_block_2337 {  margin:0px !important;border:0px !important;}#portal_block_2337 .content {  margin:0px !important;}#portal_block_2338 {  margin:0px !important;border:0px !important;}#portal_block_2338 .content {  margin:0px !important;}</style>
<!--diy样式结束-->

<!--自己样式开始-->
<link href="http://static.8264.com/oldcms/moban/zt/2011tibo/style/style.css" rel="stylesheet" type="text/css" />
<!--自己样式结束-->

    
    

<div class="wrapper">
<div class="toparea">
    	<div class="topleft">
        	<div class="topleft1">
                	<div class="lunboarea">
                        <!--//轮播//-->
            			<!--[diy=lunbo]--><div id="lunbo" class="area"><div id="frametLQ28x" class=" frame move-span cl frame-1"><div id="frametLQ28x_left" class="column frame-1-c"><div id="frametLQ28x_left_temp" class="move-span temp"></div><?php block_display('2320'); ?></div></div></div><!--[/diy]-->
              		</div>
            </div>

          <div class="pic"><a name="p2"></a><img src="http://static.8264.com/oldcms/moban/zt/2011tibo/images/titwangjie.jpg" width="310" height="27" border="0" /></div>
            <div class="pic"><a href="/topic/1182.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2011tibo/images/sport1.jpg" width="310" height="72" border="0" /></a></div>
            <div class="pic"><a href="/topic/1122.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2011tibo/images/sport2.jpg" width="310" height="72" border="0" /></a></div>
            <div class="pic"><a href="/topic/611.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2011tibo/images/sport3.jpg" width="310" height="72" border="0" /></a></div>
            <div class="pic"><a href="/topic/611.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2011tibo/images/sport4.jpg" width="310" height="72" border="0" /></a></div>
        </div>
        <div class="topmid">
        	<div class="topmid1">
                <h2></h2>
                <div class="txt">　　5月17日，第28届中国国际体育用品博览会在成都顺利落下帷幕。据体博会官方统计，本次展览共有超过1100家国内外体育用品及相关行业行业知名企业参展，数量创下了体博会历史上的新高。李宁、安踏、361°等国内体育品牌巨头均对本次展会给予了高度重视，投入了大量时间与资源参展。8264继2010年北京体博会成功组织300平方米户外科技体验区展示后，今年再次携手体博会，组织展区面积达405平方米的全新户外科技体验区。数十个知名户外品牌提供了近两百件体现户外科技的产品参展，覆盖了从航空运动、水上运动、高海拔攀登...<a style=" color:#FF0000;" href="http://www.8264.com/66242.html" target="_blank">[了解更多]</a></div>
            </div>
            <div class="topmid2">
            	<div class="tit"><div class="more"><a href="http://www.8264.com/list/398/" target="_blank">更多</a></div></div>
                <div class="topmid2con">
                <!--//展会动态 17条 标题长度30//-->
            	<!--[diy=zhdt]--><div id="zhdt" class="area"><div id="frame938WD5" class=" frame move-span cl frame-1"><div id="frame938WD5_left" class="column frame-1-c"><div id="frame938WD5_left_temp" class="move-span temp"></div><?php block_display('2321'); ?></div></div></div><!--[/diy]-->
                </div>
            </div>
        </div>
        
        <!--右边-->
        <div class="topright">
        	
<div>
            
                <!--<div class="zhengjishi"><span class="nianshu"></span><span class="yueshu"></span><span class="rishu"></span>
                <br />
                
                
<br />
                <span class="shu tianshu"></span>
               
</div>
                <div class="daojishi"><span class="shu"></span></div>
                <div class="jieshule"></div>-->

                
         <div><a href="http://www.sportshow.com.cn/" target="_blank"><img src="http://www.sportshow.com.cn/shouye/images2010/home.jpg" width="250" height="217" border="0"/></a></div>

<div class="text"><a href="http://www.8264.com/64903.html" target="_blank">第28届中国国际体育用品博览会官网</a></div>
       
    	</div>
            
            
            
            <div class="time">
            	<div><img src="http://static.8264.com/oldcms/moban/zt/2011tibo/images/titshijian.jpg" width="250" height="27" border="0" /></div>
                <div class="timecon">
                    <div class="txtblk">
                    ·&nbsp;2011年5月13日(星期五)<br />
                    →&nbsp;10:30--17:00(16:30后停止入场)
                    </div>
                    <div class="txtblk">·&nbsp;2011年5月14日-15日(星期六-星期日)<br />
→&nbsp;9:00--17:00(16:30后停止入场) </div>
                    <div class="txtblk">·&nbsp;2011年5月16日(星期一)<br />
→&nbsp;9:00--15:00(14:30后停止入场) </div>
                </div>
            </div>
            <div class="shouce"><a name="p3"></a>
            	<div><img src="http://static.8264.com/oldcms/moban/zt/2011tibo/images/titshouce.jpg" width="250" height="27" border="0" /></div>
                <div class="con">
<ul>
                    <!--//展会介绍//-->
                    <li><a href="/65047.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2011tibo/images/zhanhuijie.jpg" width="108" height="20" border="0" /></a></li>
                    
                    <!--//观众来源//-->
                    <li><a href="/65049.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2011tibo/images/guanzhonglai.jpg" width="102" height="20" border="0" /></a></li>
                    
                    <!--//展区规划//-->
                    <li><a href="/65044.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2011tibo/images/zhanqu.jpg" width="108" height="20" border="0" /></a></li>
                    <!--//资料下载//-->
                    <li><a href="/65051.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2011tibo/images/ziliao.jpg" width="102" height="20" border="0" /></a></li>
                    <!--//展会交通//-->
                    <li><a href="http://www.8264.com/65045.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2011tibo/images/zhanhuijiao.jpg" width="108" height="20" border="0" /></a></li>
                    
                    <!--//餐饮住宿//-->
                    <li><a href="/65050.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2011tibo/images/canyinzhu.jpg" width="102" height="20" border="0" /></a></li>
                    
                      <!--//展会活动
                    <li><a href="/52328.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2011tibo/images/zhanhuihuo.jpg" width="108" height="20" border="0" /></a></li>//-->
                    
                    <!--//观众报名//-->
                    <li><a href="http://www.sportshow.com.cn/vservice_onlne.aspx" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2011tibo/images/guanzhongbao.jpg" width="102" height="20" border="0" /></a></li>
                  </ul>
                </div>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>

<div class="zhuangbei">
    	<div class="zhuangbeitit"><div class="more"><a href="#" target="_blank">更多</a></div></div>
        <div class="zhuangbeishowarea">
            <div class="zbleft">
            </div>
            <div class="zbcenter">
            	<div class="zbtop">
                    <ul class="sheqian2">
                    	<li><a id="zijia" href="javascript:void(0)" class="active"><span id="zijia-span">自驾</span></a></li>
                        <li><a id="dengshan" href="javascript:void(0)"><span id="dengshan-span">登山</span></a></li>
                        <li><a id="bingxue" href="javascript:void(0)"><span id="bingxue-span">冰雪</span></a></li>
                        <li><a id="shuishang" href="javascript:void(0)"><span id="shuishang-span">水上</span></a></li>
                    </ul>
            	</div>
                <div class="sheqianbody">
                	<div class="zbcon neirong active" id="sq-zijia">

                            <div class="rightarea">
                        	<!--//自驾装备小 6条 标题长度10//-->
            				<!--[diy=zjzbx]--><div id="zjzbx" class="area"><div id="frameOK2i75" class=" frame move-span cl frame-1"><div id="frameOK2i75_left" class="column frame-1-c"><div id="frameOK2i75_left_temp" class="move-span temp"></div><?php block_display('2323'); ?></div></div></div><!--[/diy]-->
                        	</div>
                    </div>
                    <div class="zbcon neirong" id="sq-dengshan">
                    		
                            
                            <div class="rightarea">
                        	<!--//登山装备小 6条 标题长度10//-->
            				<!--[diy=dszbx]--><div id="dszbx" class="area"><div id="framel3842X" class=" frame move-span cl frame-1"><div id="framel3842X_left" class="column frame-1-c"><div id="framel3842X_left_temp" class="move-span temp"></div><?php block_display('2325'); ?></div></div></div><!--[/diy]-->
                            </div>
                    	
                        
                    </div>
                    <div class="zbcon neirong" id="sq-bingxue">
                    		
                            
                            <div class="rightarea">
                        	<!--//冰雪装备小 6条 标题长度10//-->
            				<!--[diy=bxzbx]--><div id="bxzbx" class="area"><div id="frame358wW6" class=" frame move-span cl frame-1"><div id="frame358wW6_left" class="column frame-1-c"><div id="frame358wW6_left_temp" class="move-span temp"></div><?php block_display('2329'); ?></div></div></div><!--[/diy]-->
                            </div>
                    	
                    </div>
           	    	<div class="zbcon neirong" id="sq-shuishang">
                    
                    		
                            <div class="rightarea">
                        	<!--//水上装备小 6条 标题长度10//-->
            				<!--[diy=sszbx]--><div id="sszbx" class="area"><div id="frameW4eqWF" class=" frame move-span cl frame-1"><div id="frameW4eqWF_left" class="column frame-1-c"><div id="frameW4eqWF_left_temp" class="move-span temp"></div><?php block_display('2331'); ?></div></div></div><!--[/diy]-->
                            </div>
                    
                    </div>
                </div>
            </div>
            <div class="zbright">
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>

<div class="keji">
    	<div class="kejitit"><div class="more"><a href="http://www.8264.com/list/746/" target="_blank">更多</a></div></div>

        	<div class="titlebg"></div>
            <div class="fangtan">
                <div class="mid5wen">2010 北京体博会中，8264对参展户外科技体验区的众多品牌进行了专访，通过对科技在户外产品和户外运动中的应用，体现了科技创造户外新生活的理念。2011成都体博会，8264将再度出击，邀请众多参展商就科技与后危机时代的户外运动作出精彩论述， ……<br>访谈关键词：户外科技体验区 后危机时代 环境保护</div>
                <div class="mid5imgcon">
                
                	<!--//高端访谈 10条 标题长度36//-->
            		<!--[diy=gdft]--><div id="gdft" class="area"><div id="frameITI8b8" class=" frame move-span cl frame-1"><div id="frameITI8b8_left" class="column frame-1-c"><div id="frameITI8b8_left_temp" class="move-span temp"></div><?php block_display('2332'); ?></div></div></div><!--[/diy]-->
                
                    <div style="clear:both;"></div>
                </div>
</div>

    </div>
    
    
    <div class="mid">
            <div class="lvyouall">
<div class="lvyoul">
                	<div class="lvyoutitle"></div>
                    <div class="lvyoulshowarea">
                    	
                        <div class="lvyoult">
                                <div class="lvlunall">
                                
                                <!--//驴友录推荐大图 1条 标题长度32//-->
            					<!--[diy=lyltjd]--><div id="lyltjd" class="area"><div id="frameLLb2Wr" class=" frame move-span cl frame-1"><div id="frameLLb2Wr_left" class="column frame-1-c"><div id="frameLLb2Wr_left_temp" class="move-span temp"></div><?php block_display('2338'); ?></div></div></div><!--[/diy]-->
                                
                                
                                </div>
                                <div class="lvlunr">
                                	
                                	<!--//驴友录推荐小图 4条 标题长度12//-->
            						<!--[diy=lyltjx]--><div id="lyltjx" class="area"><div id="frame6mx5im" class=" frame move-span cl frame-1"><div id="frame6mx5im_left" class="column frame-1-c"><div id="frame6mx5im_left_temp" class="move-span temp"></div><?php block_display('2337'); ?></div></div></div><!--[/diy]-->
                                    
                                    <div style="clear: both;"></div>
                                </div>
        						<div style="clear: both;"></div>
                      </div>
                      <div class="lvyoullist">
                      		
                            <!--//驴友报道列表 14条 标题长度//-->
            				<!--[diy=lybd]--><div id="lybd" class="area"><div id="frameux4RM8" class=" frame move-span cl frame-1"><div id="frameux4RM8_left" class="column frame-1-c"><div id="frameux4RM8_left_temp" class="move-span temp"></div><?php block_display('2335'); ?></div></div></div><!--[/diy]-->
                            
                          
                      </div>
                    </div>
                </div>
                <div class="lvyour">
                <div class="blogtitle"></div>
                	<div class="photoarea">
                    
                    	<div class="lvyourimgall">
                        <div class="lvyourimg"><a href="http://u.8264.com/?34170351" target="_blank"><img 
src="http://ucenter.8264.com/data/avatar/034/17/03/51_avatar_middle.jpg" width="48" height="48" border="0"></a></div>
                        <div class="lvyourwen"><a href="http://u.8264.com/?34170351" target="_blank">阿索</a></div>
                        </div>
                        
                        
                    	<div class="lvyourimgall"><div class="lvyourimg"><a
 href="http://u.8264.com/?33833475" target="_blank"><img 
src="http://ucenter.8264.com/data/avatar/033/83/34/75_avatar_middle.jpg" width="48" height="48" border="0"></a></div>
                        <div class="lvyourwen"><a 
href="http://u.8264.com/?33833475" target="_blank">星光下守望</a></div>
                        </div> 
                        
                                               
 <div class="lvyourimgall"><div class="lvyourimg"><a
 href="http://u.8264.com/space-16777431.html" target="_blank"><img 
src="http://ucenter.8264.com/data/avatar/016/77/74/31_avatar_middle.jpg" width="48" height="48" border="0"></a></div>
                        <div class="lvyourwen"><a 
href="http://u.8264.com/space-16777431.html" target="_blank">￥瘦马￥</a></div>
                        </div>
                        
<div class="lvyourimgall"><div class="lvyourimg"><a
 href="http://u.8264.com/space-33820042.html#" target="_blank"><img 
src="http://ucenter.8264.com/data/avatar/033/82/00/42_avatar_middle.jpg" width="48" height="48" border="0"></a></div>
                        <div class="lvyourwen"><a 
href="http://u.8264.com/space-33820042.html" target="_blank">kopmine</a></div>
                        </div>
                        
<div class="lvyourimgall"><div class="lvyourimg"><a
 href="http://u.8264.com/33779829" target="_blank"><img 
src="http://ucenter.8264.com/data/avatar/033/77/98/29_avatar_middle.jpg" width="48" height="48" border="0"></a></div>
                        <div class="lvyourwen"><a 
href="http://u.8264.com/33779829" target="_blank">capafu</a></div>
                        </div>                        
                 
                        
<div class="lvyourimgall"><div class="lvyourimg"><a
 href="http://u.8264.com/16748285" target="_blank"><img 
src="http://ucenter.8264.com/data/avatar/016/74/82/85_avatar_middle.jpg" width="48" height="48" border="0"></a></div>
                        <div class="lvyourwen"><a 
href="http://u.8264.com/16748285" target="_blank">2008bj</a></div>
                        </div>
              
                        
<div class="lvyourimgall"><div class="lvyourimg"><a
 href="http://u.8264.com/16704429" target="_blank"><img 
src="http://ucenter.8264.com/data/avatar/016/70/44/29_avatar_middle.jpg" width="48" height="48" border="0"></a></div>
                        <div class="lvyourwen"><a 
href="http://u.8264.com/16704429" target="_blank">活结</a></div>
                        </div>
                        
                        
<div class="lvyourimgall"><div class="lvyourimg"><a
 href="http://u.8264.com/space-33675570.html" target="_blank"><img 
src="http://ucenter.8264.com/data/avatar/033/67/55/70_avatar_middle.jpg" width="48" height="48" border="0"></a></div>
                        <div class="lvyourwen"><a 
href="http://u.8264.com/space-33675570.html" target="_blank">奔跑的鱼</a></div>
                        </div>   
                                             

<div class="lvyourimgall"><div class="lvyourimg"><a
 href="http://u.8264.com/space-127363.html" target="_blank"><img 
src="http://ucenter.8264.com/data/avatar/000/12/73/63_avatar_middle.jpg" width="48" height="48" border="0"></a></div>
                        <div class="lvyourwen"><a 
href="http://u.8264.com/space-127363.html" target="_blank">老尹</a></div>
                        </div>
                        
                        
<div class="lvyourimgall"><div class="lvyourimg"><a
 href="http://u.8264.com/space-33722077.html" target="_blank"><img 
src="http://ucenter.8264.com/data/avatar/033/72/20/77_avatar_middle.jpg" width="48" height="48" border="0"></a></div>
                        <div class="lvyourwen"><a 
href="http://u.8264.com/space-33722077.html" target="_blank">飞狗</a></div>
                        </div>
                        
                        
<div class="lvyourimgall"><div class="lvyourimg"><a
 href="http://u.8264.com/space-16808541.html" target="_blank"><img 
src="http://ucenter.8264.com/data/avatar/016/80/85/41_avatar_middle.jpg" width="48" height="48" border="0"></a></div>
                        <div class="lvyourwen"><a 
href="http://u.8264.com/space-16808541.html" target="_blank">想停的云</a></div>
                        </div>    
                             
                                            
 <div class="lvyourimgall"><div class="lvyourimg"><a
 href="http://u.8264.com/space-581.html" target="_blank"><img 
src="http://ucenter.8264.com/data/avatar/000/00/05/81_avatar_middle.jpg" width="48" height="48" border="0"></a></div>
                        <div class="lvyourwen"><a 
href="http://u.8264.com/space-581.html" target="_blank">老特</a></div>
                        </div>
                        
                        
<div class="lvyourimgall"><div class="lvyourimg"><a 
href="http://u.8264.com/space-33894714.html" target="_blank"><img 
src="http://ucenter.8264.com/data/avatar/033/89/47/14_avatar_middle.jpg" width="48" height="48" border="0"></a></div>
                        <div class="lvyourwen"><a 
href="http://u.8264.com/space-33894714.html" target="_blank">卷毛狮子</a></div>
                        </div>
                        
                        
<div class="lvyourimgall"><div class="lvyourimg"><a 
href="http://u.8264.com/space-16777878.html" target="_blank"><img 
src="http://ucenter.8264.com/data/avatar/016/77/78/78_avatar_middle.jpg" width="48" height="48" border="0"></a></div>
                        <div class="lvyourwen"><a 
href="http://u.8264.com/space-16777878.html" target="_blank">花连城</a></div>
                        </div>
                        
                        
<div class="lvyourimgall"><div class="lvyourimg"><a 
href="http://u.8264.com/space-16755149.html" target="_blank"><img 
src="http://ucenter.8264.com/data/avatar/016/75/51/49_avatar_middle.jpg" width="48" height="48" border="0"></a></div>
                        <div class="lvyourwen"><a 
href="http://u.8264.com/space-16755149.html" target="_blank">唐月美</a></div>
                        </div>
           	    	</div>
                </div>
                <div style="clear: both;"></div>
</div>
        </div>
    
    <div class="tuwen">
    	<div class="tuwentitle"><div class="more"><a href="#" target="_blank">更多</a></div></div>
        <div class="tuwenshowarea">
        
        	<!--//图文报道 10条 标题长度36//-->
            <!--[diy=twbd]--><div id="twbd" class="area"><div id="frame9HT9Ob" class=" frame move-span cl frame-1"><div id="frame9HT9Ob_left" class="column frame-1-c"><div id="frame9HT9Ob_left_temp" class="move-span temp"></div><?php block_display('2333'); ?></div></div></div><!--[/diy]-->
        
        </div>
    </div>
    
    <div class="brandshow"><a name="p1"></a>
    	<div class="brandtit"></div>
        <div class="brandarea"><!--//品牌区 logo及其链接//-->
        
            <!--//kailas//-->
        	<div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=45" target="_blank"><img src="http://image1.8264.com/album/201001/18/16723445_1263799500Xs4n.jpg" width="100" height="50" border="0" /></a></div>
            
             <!--//Millet//-->
        	<div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=148" target="_blank"><img src="http://image1.8264.com/album/200811/27/16723445_12277689637WJn.jpg" width="100" height="50" border="0" /></a></div>
            
            <!--//Shehe//-->
        	<div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=53" target="_blank"><img src="http://image1.8264.com/album/brand/2007-05/1179799950.jpg" width="100" height="50" border="0" /></a></div>
            
        	<!--//highrock//-->
        	<div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=60" target="_blank"><img src="http://image1.8264.com/album/200811/13/16723445_1226544727PS70.jpg" width="100" height="50" border="0" /></a></div>
            
             <!--//傲峰雪//-->
            <div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=290" target="_blank"><img src="http://image1.8264.com/album/200811/24/16723445_12274947255m9K.jpg" width="100" height="50" border="0" /></a></div>
            
             <!--//PETZL//-->
            <div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=212" target="_blank"><img src="http://image1.8264.com/album/200811/30/16723445_1228033575UHGe.jpg" width="100" height="50" border="0" /></a></div>
            
            <!--//Marmot//-->
            <div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=228" target="_blank"><img src="http://image1.8264.com/album/200811/27/16723445_1227769582OBJ1.jpg" width="100" height="50" border="0" /></a></div>
            
            <!--//火枫//-->
            <div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=193" target="_blank"><img src="http://image1.8264.com/album/200811/11/16723445_1226382157V6kf.jpg" width="100" height="50" border="0" /></a></div>
            
            <!--//Granite Gear//-->
<div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=229" target="_blank"><img src="http://image1.8264.com/album/200811/11/16723445_1226392911L1AE.jpg" width="100" height="50" border="0" /></a></div>
            
            <!--//SunRee//-->
<div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=533" target="_blank"><img src="http://image1.8264.com/album/200812/4/16723445_1228369356jXOj.jpg" width="100" height="50" border="0" /></a></div>
            
            <!--//PineWood//-->
<div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=478" target="_blank"><img src="http://image1.8264.com/album/200812/1/16723445_1228099830ICyb.jpg" width="100" height="50" border="0" /></a></div>
           
            <!--//鲁滨逊//-->
        	<div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=1931" target="_blank"><img src="http://8.8264.com/file/upload/201103/18/16-34-16-11-1.jpg" width="100" height="50" border="0" /></a></div>
            
             <!--//atunas//-->
            <div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=54" target="_blank"><img src="http://image1.8264.com/album/200810/31/16723445_1225440041d0TA.jpg" width="100" height="50" border="0" /></a></div>
            
            <!--//bestard//-->
            <div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=1788" target="_blank"><img src="http://8.8264.com/file/upload/201103/15/13-12-32-27-1.jpg" width="100" height="50" border="0" /></a></div>
            
            <!--//icepeak//-->
            <div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=1721" target="_blank"><img src="http://8.8264.com/file/upload/201011/01/18-32-20-56-3514.jpg" width="100" height="50" border="0" /></a></div>
            
            <!--//Edelrid//-->
            <div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=386" target="_blank"><img src="http://image1.8264.com/album/200811/7/16723445_1226048222orZi.jpg" width="100" height="50" border="0" /></a></div>
          
           
            
            <!--// Hummer//-->
            <div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=1860" target="_blank"><img src="http://8.8264.com/file/upload/201103/17/08-57-08-51-1.jpg" width="100" height="50" border="0" /></a></div>
            
            <!--//FERRARI//-->
            <div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=1832" target="_blank"><img src="http://8.8264.com/file/upload/201103/16/16-22-34-15-1.jpg" width="100" height="50" border="0" /></a></div>
            
            <!--//ALOCS //-->
            <div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=512" target="_blank"><img src="http://8.8264.com/file/upload/201103/30/09-19-46-75-1.jpg" width="100" height="50" border="0" /></a></div>
            
            <!--//Tecnica//-->
<div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=122" target="_blank"><img src="http://image1.8264.com/album/brand/2007-05/1180000733.jpg" width="100" height="50" border="0" /></a></div>
            
            <!--//RollerBlade//-->
<div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=1933" target="_blank"><img src="http://8.8264.com/file/upload/201103/18/17-09-00-61-1.jpg" width="100" height="50" border="0" /></a></div>
            
            <!--//Track Man//-->
            <div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=680" target="_blank"><img src="http://image1.8264.com/album/200902/4/16723445_1233712204qQaj.jpg" width="100" height="50" border="0" /></a></div>
            
            <!--//Yodo//-->
            <div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=771" target="_blank"><img src="http://image1.8264.com/album/200903/27/16723445_1238124658cr2B.jpg" width="100" height="50" border="0" /></a></div>
            
           <!--//Xtar//-->
            <div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=1727" target="_blank"><img src="http://8.8264.com/file/upload/201011/09/11-12-43-79-2021.jpg" width="100" height="50" border="0" /></a></div>
            
            
            
            <!--//Nordica//-->
            <div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=1911" target="_blank"><img src="http://8.8264.com/file/upload/201103/18/10-59-33-88-1.jpg" width="100" height="50" border="0" /></a></div>
            
            <!--//Nitro//-->
            <div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=1910" target="_blank"><img src="http://8.8264.com/file/upload/201103/18/10-47-56-20-1.jpg" width="100" height="50" border="0" /></a></div>
            
           
            
             <!--//FoxGuider//-->
<div class="brand"><a href="http://www.8264.com/65040.html" target="_blank"><img src="http://image1.8264.com/portal/201104/15/142722f9szefgf6vkpt7nj.jpg" width="100" height="50" border="0" /></a></div>
            
             <!--//pacsafe//-->
<div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=479" target="_blank"><img src="http://image1.8264.com/album/200811/30/16723445_12280340312Jyu.jpg" width="100" height="50" border="0" /></a></div>
            
             <!--//lizard//-->
<div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=397" target="_blank"><img src="http://image1.8264.com/album/200811/24/16723445_12275176245Iur.jpg" width="100" height="50" border="0" /></a></div>
            
             <!--//suretex//-->
<div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=1953" target="_blank"><img src="http://8.8264.com/file/upload/201103/21/14-14-03-14-1.jpg" width="100" height="50" border="0" /></a></div>
            
           
             <!--//buerstner房车//-->
<div class="brand"><a href="http://www.buerstner.com.cn/" target="_blank"><img src="http://www.buerstner.com.cn/images/buerstner_logo_de.png" width="100" height="50" border="0" /></a></div>
            
            
             <!--//BackPackers Gear//-->
<div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=204" target="_blank"><img src="http://image1.8264.com/album/201006/4/16723445_1275618799R9WG.jpg" width="100" height="50" border="0" /></a></div>
            
              <!--//youout//-->
<div class="brand"><a href="http://www.youout.com.cn/" target="_blank"><img src="http://image1.8264.com/album/201105/26/094816vowl3w2mmiudmjpb.jpg.thumb.jpg" width="100" height="50" border="0" /></a></div>
            
            
             <!--//cmarte//-->
<div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=841" target="_blank"><img src="http://image1.8264.com/album/200905/9/33716296_1241836375lUFF.jpg" width="100" height="50" border="0" /></a></div>
            
            
 <!--//Ten Thirty//-->
<div class="brand"><a href="http://8.8264.com/brand/show.php?itemid=1717" target="_blank"><img src="http://image1.8264.com/album/201010/8/16723445_1286523134jABC.jpg" width="100" height="50" border="0" /></a></div>
            
            
             <!--//DexShell//-->
<div class="brand"><a href="http://www.papbout.com/vipcom/dexshell/VipProduct1.htm" target="_blank"><img src="http://www.dexshell.com/_t2-270728303-2a9s110211092109_mergeid_267_70.png" width="100" height="50" border="0" /></a></div>
            
            <!--//
<div class="brand"><a href="***" target="_blank"><img src="***" width="100" height="50" border="0" /></a></div>//-->
            
             <!--//
<div class="brand"><a href="***" target="_blank"><img src="***" width="100" height="50" border="0" /></a></div>//-->
            
             <!--//
<div class="brand"><a href="***" target="_blank"><img src="***" width="100" height="50" border="0" /></a></div>//-->
            
            
            
            <div style="clear:both;"></div>
        </div>
    </div>
    

</div>

<DIV class=bottom>
            <A href="http://www.8264.com/ziliao/about/aboutus.php" 
    target=_blank>关于我们</A> | <A href="http://www.8264.com/ziliao/about/aboutus.php" 
    target=_blank>联系我们</A> | <A href="http://www.8264.com/8954.html">给我留言</A> | <A 
    href="http://www.8264.com/ziliao/sitemap.html" target=_blank>网站地图</A> | <A 
    href="http://www.8264.com/ziliao/ggservice/index.html" target=_blank>广告服务</A> | 
    <A href="http://www.8264.com/list/531/" target=_blank>编辑部的故事</A> | <A 
    href="http://www.8264.com/sitelink/index.html" 
    target=_blank>友情连接</A><BR>服务热线：022-23708264 | 传真：022-23708323 | 
    地址：天津市新技术产业园区华天道8号海泰信息广场C座1001号<BR>除了脚印什么都不留下除了摄影什么都不带走，欢迎各种媒体转载我们的原创作品[转载请注明出处]。&nbsp;&nbsp;&nbsp;&nbsp;<A 
    href="http://www.miibeian.gov.cn/" 
    target=_blank>津ICP备05004140号-1</A>
  </DIV>
    
    
    
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
<script src="http://static.8264.com/oldcms/moban/zt/2011tibo/js/common.js" type="text/javascript" type="text/javascript" language="javascript"></script>
</html>
