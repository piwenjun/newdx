<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>2015���޻�����Ʒչ����</title>
<link rel="stylesheet" type="text/css" href="http://static.8264.com/oldcms/moban/zt/201506yz/style/style.css">
<script src="http://static.8264.com/oldcms/moban/zt/201506yz/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="http://static.8264.com/oldcms/moban/zt/201506yz/js/jquery.js" type="text/javascript"></script>
</head>

<body>
<div class="branner"></div>
<div class="warpten">
<div class="clear_b pt30">
<div class="newscon">
<div class="title">����ͷ��<em>News Headlines</em></div>
<div class="newsconlist">
<script type="text/javascript">
// ��ȡ����ͷ������
jQuery(function ($) {
$.getJSON("http://www.8264.com/api/blockdata.php?bid=9", function(data){	
var enterbox =$("#newsbig3");
$.each(data, function(i,item){
var content = '<li><a href=" '+ item.url +'" target="_blank">'+ item.title +'</a><span>'+ item.description +'</span></li>'
enterbox.append(content);
if ( i == 3 ) return false;
});
});
});
</script>
<ul id="newsbig3">
</ul>
</div>
</div>
<div class="newsshipin">
<div class="title">����ͷ��<em>News Headlines</em></div>
<div class="shipin"><embed src="http://player.youku.com/player.php/sid/XMTI3NDkwMzA3Ng==/v.swf" allowFullScreen="true" quality="high" width="320" height="230" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed></div>
</div>
</div>
<div class="clear_b pt30">
<div class="title">��չ���� & ��չ�ֲ�<em>Exhibition News & The exhibition handbook</em></div>
<div class="helpcon clear_b">
<a href="http://www.asian-outdoor.com/exhibit.php" target="_blank" class="blueicon">
2015���޻���չ<br>չ������
</a>
<a href="http://www.asian-outdoor.com/audience.php?about=2" target="_blank" class="dateicon">�ճ� / Schedule</a>
<a href="http://www.asian-outdoor.com/live.php?about=2" target="_blank" class="zsicon">ס�� / stay</a>
<a href="http://www.asian-outdoor.com/live.php?about=1" target="_blank" class="jticon">��ͨ / Traffic</a>
<a href="http://www.asian-outdoor.com/audience.php?about=4" target="_blank" class="zsendicon">ע�� / Registered</a>
</div>
</div>
</div>
<div class="graycon">
<div class="warpten">
<div class="title">��չ��̬<em>Exhibition Dynamic</em></div>
<div class="clear_b pt30">
<div class="lunbobig">
<ul class="lunbobigimg">
<li><a><img src="http://static.8264.com/oldcms/moban/zt/201506yz/images/img1.jpg"></a><span></span></li>
<li><a><img src="http://static.8264.com/oldcms/moban/zt/201506yz/images/img2.jpg"></a><span></span></li>
<li><a><img src="http://static.8264.com/oldcms/moban/zt/201506yz/images/img3.jpg"></a><span></span></li>
<li><a><img src="http://static.8264.com/oldcms/moban/zt/201506yz/images/img4.jpg"></a><span></span></li>
<li><a><img src="http://static.8264.com/oldcms/moban/zt/201506yz/images/img5.jpg"></a><span></span></li>
</ul>
</div>
<div class="bgfff">
<div class="newslistcon">
<script type="text/javascript">
// ��ȡ����ͷ������
jQuery(function ($) {
$.getJSON("http://www.8264.com/api/blockdata.php?bid=10", function(data){	
var enterbox =$("#newsbig1");
$.each(data, function(i,item){
var content = '<a href="'+ item.url +'" target="_blank" class="newstop">'+ item.title +'</a><p>'+ item.description +'</p>'
enterbox.append(content);
if ( i == 1 ) return false;
});
});
});
</script>
<div class="newstopcon" id="newsbig1">

</div>
<script type="text/javascript">
// ��ȡ����ͷ������
jQuery(function ($) {
$.getJSON("http://www.8264.com/api/blockdata.php?bid=11", function(data){	
var enterbox =$("#newslist");
$.each(data, function(i,item){
var content = '<li><a href="'+ item.url +'" target="_blank">'+ item.title +'</a></li>'
enterbox.append(content);
if ( i == 7 ) return false;
});
});
});
</script>
<div class="newslist">
<ul id="newslist">						
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="warpten pt30">
<div class="title">2015���޻���չ�ٷ��<em>Official Activities</em></div>
<div class="actionbox clear_b">
<ul>
<li>
<img src="http://static.8264.com/oldcms/moban/zt/201506yz/images/img6.jpg"/>
<p>
<a href="http://www.asian-outdoor.com/activity.php?about=1&id=10" target="_blank">�׽�COA����߷���̳</a>
<em>ʱ�䣺7��24��ȫ�졢25������</em>
<em>�ص㣺�Ͼ�����������ģ��Ͼ��н�����·300�ţ�</em>
</p>
<a href="http://www.asian-outdoor.com/activity.php?about=1&id=10" target="_blank" class="acticonbg"></a>
</li>
<li>
<img src="http://static.8264.com/oldcms/moban/zt/201506yz/images/img7.jpg"/>
<p>
<a href="http://www.asian-outdoor.com/activity.php?about=1&id=7" target="_blank">�ܲ�ר��</a>
<em>ʱ�䣺7��23-26��ȫչ��</em>
<em>�ص㣺4��չ��4.5300</em>
</p>
<a href="http://www.asian-outdoor.com/activity.php?about=1&id=7" target="_blank" class="acticonbg"></a>
</li>
<li>
<img src="http://static.8264.com/oldcms/moban/zt/201506yz/images/img8.jpg"/>
<p>
<a href="http://www.asian-outdoor.com/activity.php?about=1&id=13" target="_blank">������ֲ�ר��</a>
<em>ʱ�䣺7��23-26��ȫչ��</em>
<em>�ص㣺6��չ��6.6100</em>
</p>
<a href="http://www.asian-outdoor.com/activity.php?about=1&id=13" target="_blank" class="acticonbg"></a>
</li>
<li>
<img src="http://static.8264.com/oldcms/moban/zt/201506yz/images/img9.jpg"/>
<p>
<a href="http://www.asian-outdoor.com/activity.php?about=1&id=12" target="_blank">�����껧��ר��</a>
<em>ʱ�䣺7��21-25��</em>
<em>�ص㣺5��չ������ר��</em>
</p>
<a href="http://www.asian-outdoor.com/activity.php?about=1&id=12" target="_blank" class="acticonbg"></a>
</li>
<li>
<img src="http://static.8264.com/oldcms/moban/zt/201506yz/images/img10.jpg"/>
<p>
<a href="http://www.asian-outdoor.com/activity.php?about=1&id=9" target="_blank">ˮ����Ʒר��</a>
<em>ʱ�䣺7��23-26��ȫչ��</em>
<em>�ص㣺4��չ����ڴ�4.1500</em>
</p>
<a href="http://www.asian-outdoor.com/activity.php?about=1&id=9" target="_blank" class="acticonbg"></a>
</li>
<li>
<img src="http://static.8264.com/oldcms/moban/zt/201506yz/images/img11.jpg"/>
<p>
<a href="http://www.asian-outdoor.com/activity.php?about=1&id=9" target="_blank">Ǳˮר��</a>
<em>ʱ�䣺7��23-26��ȫչ��</em>
<em>�ص㣺4��չ����ڴ� 4.1300</em>
</p>
<a href="http://www.asian-outdoor.com/activity.php?about=1&id=9" target="_blank" class="acticonbg"></a>
</li>
<li>
<img src="http://static.8264.com/oldcms/moban/zt/201506yz/images/img12.jpg"/>
<p>
<a href="http://www.asian-outdoor.com/activity.php?about=1&id=1" target="_blank">���޻����ҵ��</a>
<em>ʱ�䣺7��23��15:30-16:30</em>
<em>�ص㣺5A��½������Ļʽ��̨����</em>
</p>
<a href="http://www.asian-outdoor.com/activity.php?about=1&id=1" target="_blank" class="acticonbg"></a>
</li>
<li>
<img src="http://static.8264.com/oldcms/moban/zt/201506yz/images/img13.jpg"/>
<p>
<a href="http://www.asian-outdoor.com/activity.php?about=1&id=6" target="_blank">���޻���չ������ս��</a>
<em>ʱ�䣺7��23-26��</em>
<em>�ص㣺6��չ��������</em>
</p>
<a href="http://www.asian-outdoor.com/activity.php?about=1&id=6" target="_blank" class="acticonbg"></a>
</li>
<li>
<img src="http://static.8264.com/oldcms/moban/zt/201506yz/images/img14.jpg"/>
<p>
<a href="http://www.asian-outdoor.com/activity.php?about=1&id=4" target="_blank">������</a>
<em>ʱ�䣺7��23-26��ȫչ��</em>
<em>�ص㣺7��չ��</em>
</p>
<a href="http://www.asian-outdoor.com/activity.php?about=1&id=4" target="_blank" class="acticonbg"></a>
</li>
            <li>
<img src="http://static.8264.com/oldcms/moban/zt/201506yz/images/img16.jpg"/>
<p>
<a href="http://www.asian-outdoor.com/activity.php?about=1&id=8" target="_blank">��ɽ�ú��Ͻ�ɽӫ����</a>
<em>ʱ�䣺7��25��</em>
<em>�ص㣺�Ͼ���ɽ�˶���԰���Ͻ�ɽ������</em>
</p>
<a href="http://www.asian-outdoor.com/activity.php?about=1&id=8" target="_blank" class="acticonbg"></a>
</li>
</ul>
</div>
<div class="arrowbox" style="display:none;">
<span class="leftarrow"></span>
<span class="rigihtarrow hover"></span>
</div>
</div>
<div class="ftbox" style="display:none;">
<div class="warpten">
<div class="title">2015�߶˷�̸<em>High-end Interview</em></div>
<div class="fangtanlist clear_b">
<script type="text/javascript" charset="utf-8">
// ��ȡ����ͷ������
jQuery(function ($) {
$.getJSON("http://www.8264.com/api/blockdata.php?bid=12", function(data){
var enterbox =$("#ftimglist");
$.each(data, function(i,item){
var content = '<li><div class="ftimg"><a href=" '+ item.url +' " target="_blank"><img src=" ' + item.showimg + ' "/></a><span></span></div><a href="'+ item.url +'" class="name">'+ item.title +'</a></li>';
enterbox.append(content);
if ( i == 30 ) return false;
});
});
});
</script>
<ul id="ftimglist">
</ul>
</div>
</div>
</div>
<div class="warpten pt30" style="display:none;">
<div class="title">2014���޻���չװ����Ʒ<em>New Equipment</em></div>
<div class="porductbox clear_b">
<script type="text/javascript" charset="utf-8">
// ��ȡ����ͷ������
jQuery(function ($) {
$.getJSON("http://www.8264.com/api/blockdata.php?bid=13", function(data){
var enterbox =$("#xinpin");
$.each(data, function(i,item){
var content = '<li><img src="' + item.showimg + '"/><div><a href="'+ item.url +'" target="_blank">'+ item.description +'</a></div></li>';
enterbox.append(content);
if ( i == 30 ) return false;
});
});
});
</script>
<ul id="xinpin">
</ul>
</div>
</div>

<div class="ewm"><a href="http://www.asian-outdoor.com/audience.php?about=4&type=2" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/201506yz/images/ewm.jpg"/></a></div>

<div class="footer">
<div class="footercon clear_b">
<p class="footer_l">8264 ��Ȩ���� ��ICP��05004140��-10 ICP֤ ��B2-20110106<br>
<a href="http://bx.8264.com" target="_blank">�����з��գ�8264�����������Ᵽ��</a></p>
<p class="footer_r"><a target="_blank" href="http://www.8264.com/about-index.html">8264���</a> | <a target="_blank" href="http://www.8264.com/about-contact.html">��ϵ����</a> | <a target="_blank" href="http://www.8264.com/about-adservice.html">������</a> | <a target="_blank" href="http://www.8264.com/link/">������ַ��ȫ</a> | <a target="_blank" href="http://www.8264.com/sitemap">��վ��ͼ</a></p>
</div>
</div>


<div class="adfd">
<div class="adfd980">
<div class="close"></div>
<div class="ewmbottom"><img src="http://static.8264.com/oldcms/moban/zt/201506yz/images/ewmbottom.jpg"/></div>
<a href="http://app.zaiwai.com/android_download" target="_blank" class="android"></a>
<a href="https://itunes.apple.com/cn/app/zai-wai/id942808722?mt=8" target="_blank" class="apple"></a>
</div>
</div>


</body>
</html>