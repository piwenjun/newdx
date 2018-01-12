<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!--//当发布活动时 页面提示 start-->
<link href="http://static.8264.com/static/css/common/showmessage.css?<?php echo VERHASH;?>" rel="stylesheet" type="text/css">
<style type="text/css">
.mod-wrap{
position: relative;
width: 830px;
background-color: #fff;
margin: 75px auto;
box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
border-radius: 5px;
padding:0px 0px 50px 0px;
}
.title-inner{
height: 80px;
background-color: #f9f9f9;
border-radius: 5px 5px 0 0;
text-align: center;
}
.publish-success{
display: inline-block;
background: url(http://static.8264.com/static/images/tps/v1/SATiXX-2tTxIl-190-123.png) -150px -3px no-repeat;
font-size: 18px;
padding-left: 45px;
height: 40px;
line-height: 40px;
margin: 20px 0
}
.wechat-content{
position: relative;
padding-top: 16px;
text-align: center;
}
.wechat-content .vcode-img{
width: 152px;
height: 152px;
border: 1px solid #eee;
padding: 7px;
background: url(http://static.8264.com/static/images/tps/v1/ewmthbg.jpg) no-repeat 3px 7px;
margin:0 auto;
}
.wechat-content .vcode-img img{
width: 152px;
height: 152px;
}
.wechat-content p{
margin: 0;
}
.wechat-content .w-info{
font-size: 14px;
color: #585858;
margin-top: 15px;
margin-bottom: 10px;
}
.wechat-content .w-tips{
font-size: 14px;
color: #666;
}
.btn-skip{
position: absolute;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
color: #1f6d9b;
font-size: 12px;
border: 1px solid #dcdcdc;
padding: ;
width: 60px;
height: 26px;
line-height: 26px;
right: 38px;
bottom: 20px;
text-align: center;
text-decoration:none;
}
/*于跃开始*/
.bigfont{ text-align:center; padding:25px 0px 0px 0px;}
.bigfont span{ display:block; font-size:24px; color:#37474f;}
.bigfont em{ display:block; font-size:16px; color:#f86335; font-style:normal;}
/*于跃结束*/		
</style>
<div class="mod-wrap">
<div class="title-inner">
<span class="publish-success">发布成功</span>
</div>
<div class="bigfont">
<span>扫一扫，分享到微信朋友圈</span>
</div>
<div class="wechat-content">
<div class="vcode-img"><img src="qrcode.php?output=1&amp;url=<?php echo $param['wechatshare'];?>"></div>
</div>	
<a href="<?php echo $url_forward;?>" class="btn-skip">跳过</a>
</div>
<script type="text/javascript">
jQuery(document).ready(function() {
var wh = jQuery(window).height();
wh > 664 ? jQuery("#wp").css("height", wh - 199) : '';
});
</script>
<!--//当发布活动时 页面提示 end-->