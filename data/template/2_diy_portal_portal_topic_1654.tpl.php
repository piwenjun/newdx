<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>ISPO BEIJING 2016ʱ���˶�չ</title>
<link rel="stylesheet" type="text/css" href="http://static.8264.com/oldcms/moban/zt/201602ispo/style/style.css">
<script src="http://static.8264.com/oldcms/moban/zt/201602ispo/js/jquery-1.9.1.min.js" type="text/javascript"></script>
</head>

<body>
<div class="branner"></div>
<div class="fg"></div>

<div class="warpten">
<div class="clear_b mt25">
<div class="helpbox">
<a href="http://www.ispo.com.cn/page/994J2zQ/beijing/VISITORS/Arrival-Accomodation.html"  target="_blank" class="icon1"></a>
<a href="http://www.ispo.com.cn/page/04aJ2zP/beijing/VISITORS/OPENING-HOURS-AND-LOCATION.html"  target="_blank" class="icon2"></a>
<a href="http://www.ispo.com.cn/page/04aJ2zP/beijing/VISITORS/OPENING-HOURS-AND-LOCATION.html"  target="_blank" class="icon3"></a>
<a href="http://www.dianping.com/mylist/1328049"  target="_blank" class="icon4"></a>
            <a href="http://www.ispo.com.cn/page/dbcJ2DM/beijing/Media/Download.html" target="_blank" class="icon5"></a>
</div>
<!--���ſ�ʼ-->
<div class="newslistcon">
        	<script type="text/javascript">
// ��ȡ����ͷ������
jQuery(function ($) {
$.getJSON("http://www.8264.com/api/blockdata.php?bid=14", function(data){
var enterbox =$("#news_top_con");
$.each(data, function(i,item){
var content = '<a href="  '+ item.url +' " target="_blank" class="newstop">'+ item.title +'</a><p>'+ item.description +'</p>';
enterbox.append(content);
if ( i == 0 ) return false;
});
});
});
</script>
            <div class="newstopcon" id="news_top_con">
            </div>
            <script type="text/javascript" charset="utf-8">
// ��ȡ����ͷ������
jQuery(function ($) {
$.getJSON("http://www.8264.com/api/blockdata.php?bid=15", function(data){	
var enterbox =$("#newslist_con");
$.each(data, function(i,item){
var content = '<li><a href="  '+ item.url +' " target="_blank"> '+ item.title +' </a><span> '+ item.showdate +' </span></li>';
enterbox.append(content);
if ( i == 6 ) return false;
});
});
});
</script>
            <div class="newslist">
                <ul id="newslist_con">
                    
                </ul>
            </div>
        </div>
<!--���Ž���-->
<div class="newsrightcon">
<div class="newrightimg"><a><img src="http://static.8264.com/oldcms/moban/zt/201602ispo/images/newsimg.jpg"/></a></div>
            <script type="text/javascript" charset="utf-8">
// ��ȡ����ͷ������
jQuery(function ($) {
$.getJSON("http://www.8264.com/api/blockdata.php?bid=16", function(data){	
var enterbox =$("#newslist_con_r");
$.each(data, function(i,item){
var content = '<li><a href="  '+ item.url +' " target="_blank"> '+ item.title +' </a></li>';
enterbox.append(content);
if ( i == 6 ) return false;
});
});
});
</script>
<div class="newsrightlist">
<ul id="newslist_con_r">
</ul>
</div>
</div>
</div>
<div class="mt30">
<div class="title"><span>8264���ֳ�</span></div>
<div class="clear_b mt30">
<div class="lunbobig">
<ul class="lunbobigimg">
<li><a href="http://www.8264.com/viewnews-106112-page-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/201602ispo/images/l1.jpg"></a><span>2015�й������ҵ�����ѡ�佱�������뺯</span></li>
<li><a href="http://bbs.8264.com/thread-5226532-1-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/201602ispo/images/l2.jpg"></a><span>8264 & ���� 2016�����˶���ҵ�߾ۻ�</span></li>				
</ul>
</div>
<div class="newsrightcon" style="width:275px;">
            	<script type="text/javascript" charset="utf-8">
// ��ȡ����ͷ������
jQuery(function ($) {
$.getJSON("http://www.8264.com/api/blockdata.php?bid=17", function(data){	
var enterbox =$("#xianchang_r");
$.each(data, function(i,item){
var content = '<li><a href="  '+ item.url +' " target="_blank"> '+ item.title +' </a></li>';
enterbox.append(content);
if ( i == 8 ) return false;
});
});
});
</script>
<div class="newsrightlist" style="padding-top:0px;">
<ul class="xianchang_r" id="xianchang_r">
</ul>
</div>
</div>			
</div>
<div class="eqlist clear_b">
        	<script type="text/javascript" charset="utf-8">
// ��ȡ����ͷ������
jQuery(function ($) {
$.getJSON("http://www.8264.com/api/blockdata.php?bid=18", function(data){	
var enterbox =$("#xianchang_tw");
$.each(data, function(i,item){
var content = '<li><a href="  '+ item.url +' " target="_blank"><img src=" ' + item.showimg + ' "/></a><a href="  '+ item.url +' " target="_blank" class="name"> '+ item.title +' </a></li>';
enterbox.append(content);
if ( i == 20 ) return false;
});
});
});
</script>
<ul id="xianchang_tw">
</ul>
</div>
</div>
<div class="mt30">
<div class="title"><span>չ���̸ & װ��</span></div>
<div class="eqlist clear_b">
        	<script type="text/javascript" charset="utf-8">
// ��ȡ����ͷ������
jQuery(function ($) {
$.getJSON("http://www.8264.com/api/blockdata.php?bid=19", function(data){	
var enterbox =$("#ft_tw");
$.each(data, function(i,item){
var content = '<li><a href="  '+ item.url +' " target="_blank"><img src=" ' + item.showimg + ' "/></a><a href="  '+ item.url +' " target="_blank" class="name"> '+ item.title +' </a></li>';
enterbox.append(content);
if ( i == 15 ) return false;
});
});
});
</script>
<ul id="ft_tw">
</ul>
</div>
</div>
</div>
<div class="footer">
    <div class="footercon clear_b">
        <p class="footer_l">8264 ��Ȩ���� ��ICP��05004140��-10 ICP֤ ��B2-20110106<br>
            <a href="http://bx.8264.com" target="_blank">�����з��գ�8264�����������Ᵽ��</a></p>
        <p class="footer_r"><a target="_blank" href="http://www.8264.com/about-index.html">8264���</a> | <a target="_blank" href="http://www.8264.com/about-contact.html">��ϵ����</a> | <a target="_blank" href="http://www.8264.com/about-adservice.html">������</a> | <a target="_blank" href="http://www.8264.com/link/">������ַ��ȫ</a> | <a target="_blank" href="http://www.8264.com/sitemap">��վ��ͼ</a></p>
    </div>
</div>
<script>
// �ֲ���ʼ
$(function(){
 var shuliang = $(".lunbobigimg li").size();
 var lunbotime;
 var index = 0;
 	$(".lunbobig").append("<ul class='shuzi_1'></ul>"); 
for ( i=0 ; i< shuliang ;i){
i++	
$(".shuzi_1").append("<span></span>"); 	
};
$(".shuzi_1 span").eq(0).addClass("tsshuzi");
$(".shuzi_1 span").mouseenter(function(){	
var index = $(this).index();
$(this).addClass("tsshuzi").siblings().removeClass("tsshuzi");
$(".lunbobigimg li").eq(index).fadeIn().siblings().hide(0);
});	
$(".lunbobig").hover(
function(){
clearInterval(lunbotime);		
},function(){
lunbotime = setInterval(function(){	
$(".shuzi_1 span").eq(index).addClass("tsshuzi").siblings().removeClass("tsshuzi");
$(".lunbobigimg li").eq(index).fadeIn().siblings().hide(0);	
index++;
if(index == shuliang ){
index=0;
};		
},3000);					
}).trigger("mouseleave");
});
// �ֲ�����
</script>    
    
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>