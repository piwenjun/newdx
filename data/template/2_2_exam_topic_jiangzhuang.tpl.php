<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="gbk">
<title>奖状</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<meta name="renderer" content="webkit"/>
<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
<title>首页</title>

<link rel="stylesheet" href="http://static.8264.com/static/css/exam/style.css?<?php echo VERHASH;?>">
<script src="/static/js/exam/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/static/js/exam/swiper.min.js" type="text/javascript"></script>


<script>
var _hmt = _hmt || [];
(function() {
var hm = document.createElement("script");
hm.src = "https://hm.baidu.com/hm.js?49299785f8cc72bacc96c9a5109227da";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hm, s);
})();
</script>

</head>

<body>
<!--头部开始-->
<?php if($isWechat == 0) { ?>
<div class="header-content">
<div class="home-icons" style="display: none;">
<a href="http://www.8264.com/xuexiao/">首页</a>
</div>
<div class="goback-icons">
<a href="<?php echo $ref;?>">返回</a>
</div>
<div class="logo">
<a href="#">
<img src="/static/images/exam/logo.png" alt="">
</a>
</div>
</div>
<?php } ?>
<!--头部结束-->
<div class="jiangzhuang">
<img src="<?php echo $url;?>" alt="">
</div><?php include template('exam/topic/footer'); ?><!--底部弹出开始-->
<div class="bottompopbox">
<div class="bottompopcon">
<div class="bottominfo"><span>此图可保存到手机或电脑</span></div>
<i></i>
</div>
</div>
<!--底部弹出结束-->


<!--黑色封屏开始-->
<div class="bg75black" style="display:none;" ></div>
<!--黑色封屏结束-->

<script type="text/javascript">
jQuery(function(){
$(".bottompopbox i").click(function() {
$(".bottompopbox").hide();
});
$(".xuexiao_ad").show();
$(".bg75black").show();
});
</script>
</body>
</html>
