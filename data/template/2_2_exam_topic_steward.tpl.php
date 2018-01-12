<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="gbk">
<title>超级管家 - 8264户外运动学校</title>
<meta name="viewport" content="minimal-ui,width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="MobileOptimized" content="width">
<meta name="description" content="">
<meta name="author" content="">
<meta name="renderer" content="webkit"/>
<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
<title>首页</title>

<link rel="stylesheet" href="http://static.8264.com/static/css/exam/style.css?20170901">
<script src="http://static.8264.com/static/js/exam/jquery-1.9.1.min.js" type="text/javascript"></script>
    <style>
        body,html{ background-color: #f8f8f9; }
        .ewmboxxjbgimg{ padding:20% 0px 0px 0px; text-align: center;  }
        .ewmboxxjbgimg img{ width:50%; height:; }
        .sfxjbgimg img{ width: 100%; }

        .fontxjbg span{ font-size:20px; color: #333333; display: block; text-align: center; padding:7% 0px 3% 0px; }
        .fontxjbg em{ font-size: 14px; color: #999999; display: block;text-align: center; padding-bottom: 15%; }
    </style>
</head>

<body style="background: #f8f8f9;">
<!--头部开始-->
<?php if($isWechat == 0) { ?>
<div class="header-content">
<div class="home-icons" style="display: none;">
<a href="http://www.8264.com/xuexiao/">首页</a>
</div>
<div class="goback-icons">
<a href="http://www.8264.com/xuexiao/">返回</a>
</div>
<div class="logo">
<a href="#">
<img src="http://static.8264.com/static/images/exam/logo.png" alt="">
</a>
</div>
</div>
<?php } if($phonetype == 'android') { ?>
<a href="<?php echo $back_url;?>" class="chat-back"></a>
<?php } ?>
<!--头部结束-->
<div class="zixunbox">
    <div class="zixunbranner">
        <img src="http://static.8264.com/static/images/exam/zixunbg.jpg" alt="">
        <div class="zixunwembox"><img src="http://static.8264.com/static/images/exam/zixunewm.png" alt=""></div>
    </div>
    <div class="zixuntitle">超级管家</div>
    <?php if($steward_zh) { ?>
    <div style="font-size:16px; color:#c49c56; text-align: center; padding:10px 0px 0px 0px;"><?php echo $steward_zh;?></div>
    <?php } ?>
    <div class="zixuntitlebg">
        1v1专属咨询服务
    </div>
    <div class="zixunlistbox">
        <ul>
            <li><i>1</i>价格包含咨询</li>
            <li><i>2</i>服务项目咨询</li>
            <li><i>3</i>供应商对接服务</li>
            <li><i>4</i>秒杀名额对接</li>
            <li><i>5</i>装备筛选寄送</li>
            <li><i>6</i>客诉及时解决</li>
        </ul>
    </div>
</div>

<div class="zixunbottom"><img src="http://static.8264.com/static/images/exam/zixunbottom.png" alt=""></div>
</body>
</html>
