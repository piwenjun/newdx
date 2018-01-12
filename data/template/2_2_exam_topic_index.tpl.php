<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="gbk">
<title><?php echo $catname;?><?php echo $basename;?><?php echo $mode;?> - 8264户外运动学校</title>
<meta name="viewport" content="minimal-ui,width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="MobileOptimized" content="width">
<meta name="description" content="">
<meta name="author" content="">
<meta name="renderer" content="webkit"/>
<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
<title>首页</title>
<link rel="stylesheet" href="http://static.8264.com/static/css/exam/kaoshistyle.css?<?php echo VERHASH;?>">
<link rel="stylesheet" href="http://static.8264.com/static/css/exam/exam.css?<?php echo VERHASH;?>">
<link rel="stylesheet" href="http://static.8264.com/static/css/exam/css_style.css?<?php echo VERHASH;?>">
<link rel="stylesheet" href="http://static.8264.com/static/css/exam/style.css?<?php echo VERHASH;?>">
<style>
html,body{ height: 100%;}
</style>

<script src="http://static.8264.com/static/js/exam/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="http://static.8264.com/static/js/exam/app.min.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script>
    jQuery("#h_ctj").addClass("s3");
    var kModel="kmy_sxlx";
    var kTikuID="2013";
    var HotKeyModel="lx";
    var kCx="xc";
    var kKm="kmy";
    var kMk="sjlx";
    var zid="";
    var type = "<?php echo $type;?>";
    var catid = "<?php echo $catid;?>";
    var backUrl="/km1";
    var TitUrl="/km1_fzks";
    jQuery("#h_sjlx").addClass("hot");
</script>


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
        <?php if($isWechat == 0) { ?>
        <div class="header-content">
                <div class="home-icons" style="display: none;">
                        <a href="http://www.8264.com/xuexiao/">首页</a>
                </div>
                <div class="goback-icons">
                        <a href="http://www.8264.com/xuexiao/catinfo-<?php echo $catid;?>.html">返回</a>
                </div>
                <div class="logo">
                        <a href="#">
                                <img src="http://static.8264.com/static/images/exam/logo.png" alt="">
                        </a>
                </div>
        </div>
        <?php } ?>

        <!--主体内容开始-->
        <div class="examTitle-wrapper">
            <div id="J-TitleTrigger" class="exam-title"></div>
        </div>
        <div class="w980">
            <script>function cleanII(){jQuery(".header_b i").html("");}setTimeout(cleanII,100);</script>
            <input type="hidden" id="qid" value="">
            <div class="mainBox" id="mainBox">
                <script>
                    var ICO_Path="http://static.8264.com/static/images/exam/icons/";
    //                var ICO_Path="/static/images/exam/icons/";
                    var kModel="8264_ep";var kTikuID="2016";
                    var kKm="km1";var kCx="xc";var kDrive="C1";
                    var zid="";
                </script>
                <div id="ExamArea">
                </div>
                <div id="ExamNote">
                    <div class="fcc">
                        <b>试题分析</b><i></i>
                    </div>
                    <p id="ENC"></p>
                </div>
                <br>
                <div class="extra-container">
                    <p><i class="icon-tips"></i>此题对你有用么？</p><br /><br />
                    <a href="javascript:void(0);" onclick="is_useful(1)" class="is-button"><i class="icon-use"></i>有用</a>
                    <a href="javascript:void(0);" onclick="is_useful(0)" class="is-button"><i class="icon-useless"></i>无用</a>
                    <?php if($type == 'practice') { ?><a href="javascript:void(0);" onclick="add_correction()" class="is-button" style="background: #fff8e8;color: #6b3712;padding: 0 20px;border: 1px solid #fff8e8"></i>纠错</a><?php } ?>
                </div>
                <?php if($type == 'practice') { ?>
                    <div class="qqlinkme">
                        <span style="display:none;">战略合作联系 微信号：yxm8264</span>
                        <style>
                            .qqlinkme{ padding:5px 0px 0px 0px; border-top:0 none; background:url(http://static.8264.com/static/css/exam/images/ewmbg.jpg) top center no-repeat; background-size:100% auto; margin-top: 30px;}
                            .qqlinkme img{ width:100%;}
                        </style>
                        <img src="http://static.8264.com/static/css/exam/images/hw.jpg?<?php echo VERHASH;?>">
                    </div>
                <?php } ?>
                <script type="text/javascript">
                    function is_useful(flag){
                        var url = '/exam.php?ctl=topic&act=do_useful';
                        var qid = jQuery("#qid").val();
                        if(!qid){
                            qid = 0;
                        }

                        jQuery.ajax({
                            type : 'POST',
                            url : url,
                            data : {'qid':qid, 'flag':flag},
                            dataType : 'json',
                            async: false,
                            success:function(result){
                                jQuery(".icon-use").parent().attr("onclick", "");
                                jQuery(".icon-useless").parent().attr("onclick", "");
                                if(flag == 1){
                                    jQuery(".icon-use").parent().addClass("active");
                                }else{
                                    jQuery(".icon-useless").parent().addClass("active");
                                }
                            }
                        });
                    }
                    function add_correction(){
                        var url = '/exam.php?ctl=topic&act=correction&qid=';
                        var qid = jQuery("#qid").val();
                        if(!qid) {
                            alert('qid缺失！');
                            return false;
                        }
                        window.location.href = url+qid;
                    }
                </script>
                <div id="ExamAnswerPlan"></div>
                <div id="ExamOrderArea">

                </div>
                <div id="ExamTipArea" style="display: none;"></div>
                <div id="ExamOrderKep" style="display: block; height: 0px;">

                </div>

                <div class="Content" style="display: none;">
                    <p class="RndExam"></p>
                </div>
                <?php if($type == 'practice') { ?>
                <script>
                    var sflag = '<?php echo $_G['groupid'];?>';
                    var ExamCount = '<?php echo $count;?>';
//                    var ExamRecordID = '<?php echo $record_id;?>';
                    var ExamBaseID = new Array(ExamCount);
                    var EmQid = new Array(ExamCount);
                    var ExamNote = new Array(ExamCount);
                    var ExamIDs = '<?php echo $str;?>';
                    ExamBaseID = eval(ExamIDs);
                    var ExamREs = '<?php echo $REs;?>';
                    var ExamID = new Array(ExamCount);
                    var ExamTm = new Array(ExamCount);
                    var ExamTp = new Array(ExamCount);
                    var ExamVideo = new Array(ExamCount);
                    var ExamTx = new Array(ExamCount);
                    var ExamDa = new Array(ExamCount);
                    var ExamDaSel = new Array(ExamCount);
                    for (ExmC = 1; ExmC <= ExamCount; ExmC++) {
                            ExamID[ExmC] = ExamBaseID[ExmC];
                            ExamTm[ExmC] = '';
                            ExamTp[ExmC] = '';
                            ExamVideo[ExmC] = '';
                            ExamTx[ExmC] = '';
                            ExamDa[ExmC] = '';
                            ExamDaSel[ExmC] = '';
                            ExamNote[ExmC] = '';
                            EmQid[ExmC] = '';
                    }
                </script>
                <script src="http://static.8264.com/static/js/exam/lx_9_new.js?201788" type="text/javascript"></script>
                <?php } else { ?>
                <script>
                    var sflag = '<?php echo $_G['groupid'];?>';
                    var ExamCatid = '<?php echo $catid;?>';
                    var Exam_base = '<?php echo $base;?>';
                    var ExamCount = '<?php echo $count;?>';
                    var Exams = new Array(ExamCount);
                    var ExamID = new Array(ExamCount);
                    var ExamTm = new Array(ExamCount);
                    var ExamTp = new Array(ExamCount);
                    var ExamVideo = new Array(ExamCount);
                    var ExamTx = new Array(ExamCount);
                    var ExamDa = new Array(ExamCount);
                    var SortID = new Array(ExamCount);
                    var ExamDaSel = new Array(ExamCount);
                    var ExamNote = new Array(ExamCount);
                    var ExamsCnt = '<?php echo $str;?>';
                    Exams = eval(ExamsCnt);
                    for (ExmC in Exams) {
                            ExamID[ExmC] = Exams[ExmC][0];
                            ExamTm[ExmC] = Exams[ExmC][2];
                            ExamTp[ExmC] = Exams[ExmC][3];
                            ExamTx[ExmC] = Exams[ExmC][1];
                            ExamDa[ExmC] = Exams[ExmC][4];
                            SortID[ExmC] = Exams[ExmC][5];
                            ExamDaSel[ExmC] = "";
                            ExamNote[ExmC] = Exams[ExmC][6];
                            ExamVideo[ExmC] = Exams[ExmC][7];
                    }
                </script>
                <script src="http://static.8264.com/static/js/exam/ks_9_new.js?201788" type="text/javascript"></script>
                <?php } ?>
            </div>
            <div class="TipMask"></div>
            <div class="MaskTip"></div>

            <!--黑色封屏开始-->
            <div class="bg75black" style="display:none;" ></div>
            <!--黑色封屏结束-->

            <!--弹出层开始-->
            <div class="black70"></div>
            <div class="popbox">
                    <div class="popcon">
                            <b>很遗憾</b>
                            <span>你没有通过本次测试，下次加油！</span>
                            <div class="buttonlink">
                                    <a href="javascript:void(0)" onclick="ExamReLoadErr();"class="cuoti">查看错题</a>
                                    <a href="javascript:void(0)" onclick="ExamReLoad();" class="chongxin">重新考试</a>
                            </div>
                    </div>
            </div>
            <!--弹出层结束-->

            <!--弹出主体开始-->
            <div class="kspopcon" style="display:none;" >
                <div class="xinfengbox">
                    <div class="contentbox">
                        <div class="xintop">你的户外考试成绩</div>
                        <div class="fenshu">
                            0<i>分</i>
                        </div>
                        <div class="pingyubox">
                            <div class="pingyucon">
                                <b>评语：</b>8264.com
                            </div>
                        </div>   
                    </div>
                    <div class="xinbottom">
                        <a href="javascript:void(0)" onclick="ExamReLoadErr();">查看错题</a>
                        <a href="javascript:void(0)" onclick="ExamReLoad();" class="cxks">重新考试</a>
                    </div>
                </div>
                <div class="sharebottom">
                    <div class="bdsharebuttonbox">
                        <span>分享到：</span>
                        <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信" style="margin-right:5px;"></a>
                        <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博" style="margin-right:5px;"></a>
                        <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间" style="margin-right:5px;"></a>
                        <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                    </div>
                </div>
            </div>
            <!--弹出主体结束-->

            <!--提示开始-->
            <div class="noticepopbox" style="display:none;">
                <div class="noticepopcon">
                    <div class="noticetitle">
                        <span>提示</span>
                        <em></em>
                    </div>
                    <div class="noticebox">
                        <span class="notice_left">您了答完题了就交卷。</span>
                        <div class="noticebutton clear_b">
                            <a href="javascript:void(0)" onclick="ExamSubmit();">交卷</a>
                            <a href="javascript:void(0)" class="cancel">取消</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--提示结束-->

            <script type="text/javascript">
                jQuery(document).ready(function() {
                    jQuery(".xinbottom a").click(function() {
                        jQuery(".kspopcon").hide();
                        jQuery(".bg75black").hide();
                    });
                });
                jQuery(document).ready(function() {
                    jQuery(".noticetitle em").click(function() {
                        jQuery(".noticepopbox").hide();
                        jQuery(".bg75black").hide();
                    });
                    jQuery(".noticebutton a").click(function() {
                        jQuery(".noticepopbox").hide();
                    });
                    jQuery(".noticebutton .cancel").click(function() {
                        jQuery(".noticepopbox").hide();
                        jQuery(".bg75black").hide();
                    });

                });
            </script>

        </div>
        <!--主体内容结束-->
    <div style="height:65px;"></div>
    <div class="examTools-wrapper">
        <div id="mkTools"></div>
    </div>


    <?php include template('exam/topic/wechat_share'); ?></body>
</html>