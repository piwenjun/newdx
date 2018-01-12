<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="gbk">
<title>��֤�ֻ��� - 8264�����˶�ѧУ</title>
<meta name="viewport" content="minimal-ui,width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="MobileOptimized" content="width">
<meta name="description" content="">
<meta name="author" content="">
<meta name="renderer" content="webkit"/>
<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>

<link rel="stylesheet" href="http://static.8264.com/static/css/exam/style.css?20170907">
<script src="http://static.8264.com/static/js/exam/jquery-1.9.1.min.js" type="text/javascript"></script>
    <style>
        html,body{ background:#fff;}
    </style>
</head>

<body>
<!--ͷ����ʼ-->
<?php if($isWechat == 0) { ?>
<div class="header-content">
<div class="home-icons" style="display: none;">
<a href="http://www.8264.com/xuexiao/">��ҳ</a>
</div>
<div class="goback-icons">
<a href="http://www.8264.com/xuexiao/">����</a>
</div>
<div class="logo">
<a href="#">
<img src="http://static.8264.com/static/images/exam/logo.png" alt="">
</a>
</div>
</div>
<?php } ?>
<!--ͷ������-->
<div class="login" style=" margin: 0px auto; max-width: 630px; min-width: 320px;background: #f8f8f9;position: fixed;top: 0;left: 0;right: 0;bottom: 0;z-index: 99999;"></div>

<div class="page" style=" margin: 0px auto; max-width: 630px; min-width: 320px;padding: 12px 20px 0;font-size: 15px;z-index: 999999;position: fixed;top: 10px;left: 0px;right: 0px;">
    <div class="logintitle">
        <span>��д�ֻ���</span>
        <em>Ϊ�������˻���ȫ������֤�ֻ���</em>
    </div>
    <div id="loginForm" class="mlogin">
        <div class="field tel">
            <div class="label password">�ֻ���</div>
            <div class="field-control">
                <input id="phone" class="input-required" name="phone" placeholder="�ֻ���">
            </div>
            <div class="icon-clear"></div>
        </div>

        <div class="field yzm">
            <div class="label yanzhengma">��֤��</div>
            <div class="field-control">
                <input id="yzcode" type="text" class="input-required" placeholder="��֤��">
            </div>
            <div class="icon-clear"></div>
            <div class="yzmbutton">
                <input id="codebutton" type="button" value="��ȡ��֤��" onclick="sendMessage();">
            </div>
        </div>
        <div class="tips" style="display:none;"><i class="icon-mark"></i>�û����Ѵ���</div>

        <div class="submit">
            <button id="submit-btn" class="button" type="submit"  onclick="validate();">�ύ</button>
        </div>

    </div>
</div>
<script type="text/javascript">
    var InterValObj; //timer����������ʱ��
    var count = 60; //���������1��ִ��
    var curCount;//��ǰʣ������

    function sendMessage() {
        if(curCount){
            curCount = curCount;
        }else{
            curCount = count;
        }

        if(checkMobileState()){

            //����buttonЧ������ʼ��ʱ
            $("#codebutton").attr("disabled", "disabled");
            $("#codebutton").val(curCount + "����ط�");
            InterValObj = window.setInterval(SetRemainTime, 1000); //������ʱ����1��ִ��һ��

            //���̨���ʹ�������
            $.ajax({
                type: 'POST',
                url: 'http://www.8264.com/exam.php?ctl=topic&act=ajaxMobilesend',
                async:false,
                data: {phone:$.trim($("#phone").val())},
                dataType: 'json',
                success: function(data){
                    if(data.return_state=='-1'){
                        alert('������֤������̫Ƶ�������Ժ����ԣ�');
                        //window.location.href=SITE_URL+'/wap.php?app=claim';
                        return false;
                    }
                    if(data.return_state=='-2'){
                        alert("���ŷ���ʧ�ܣ�����ϵ�ͷ�!");
                        return false;
                    }
                }
            });
        }

    }

    //timer��������
    function SetRemainTime() {
        if (curCount == 0) {
            window.clearInterval(InterValObj);//ֹͣ��ʱ��

            $("#codebutton").removeAttr("disabled");//���ð�ť

            $("#codebutton").val("������֤��");
        }
        else {
            curCount--;
            $("#codebutton").val(curCount + "����ط�");
        }
    }

    function checkMobileState(){
        var phone = jQuery("#phone").val();
        phone = jQuery.trim(phone);

        if(phone == ''){
            r_error("�������ֻ���", 'tips', 'tel');
            return false;
        }

        if(!(/^1[3|4|5|7|8]\d{9}$/.test(phone))){
            r_error("��������ȷ�ֻ���", 'tips', 'tel');
            return false;
        }

        rm_error("tips", "tel");
        return true;
    }

    function checkYzCode(){
        var code = jQuery("#yzcode").val();
        code = jQuery.trim(code);
        if(code.length != 4){
            r_error("��֤�����", 'tips', 'yzm');
            return false;
        }

        var phone = jQuery.trim(jQuery("#phone").val());

        //У�� ��֤��
        $.ajax({
            type: 'POST',
            url: '/exam.php?ctl=topic&act=ajaxcheckcode',
            async:false,
            data: {code:$.trim($("#yzcode").val()), phone:phone},
            dataType: 'json',
            success:function(data){
                if(data.return_state == '1'){
                    rm_error("tips", "yzm");
                    up_info(phone, data.vcode);
                }else if(data.return_state == '-1'){
                    r_error("��֤�����,����ϸ�鿴����", 'tips', 'yzm');
                    return false;
                }else if(data.return_state == '-2'){
                    r_error("��֤����ʧЧ�������»�ȡ", 'tips', 'yzm');
                    return false;
                }else{
                    r_error("�Ƿ�����", 'tips', 'yzm');
                    return false;
                }
            }
        });
    }

    function up_info(phone, vcode){
        if(phone == ''){
            alert("�Ƿ�������");
            return false;
        }

        //��¼
        $.ajax({
            type: 'POST',
            url: '/exam.php?ctl=topic&act=up_info',
            async:false,
            data: {phone:phone, vcode:vcode},
            dataType: 'json',
            success:function(data){
                if(data.flag == 1){
                    window.location.href = 'http://www.8264.com/xuexiao/wechat_pay/pay.html?attach=2';
                }else if(data.flag == -1){
                    alert('�Ƿ���Դ');
                }else{
                    alert('�Ƿ��û�');
                }
            }
        });
    }

    function validate() {

        if(checkMobileState()){
            checkYzCode();
        }

        return false;
    }


    function r_error(msg, tipclass, errorclass){
        jQuery("."+tipclass).html("<i class='icon-mark'></i>"+msg).show();
        jQuery("."+errorclass).addClass("error");
    }
    function rm_error(tipclass, errorclass){
        jQuery("."+tipclass).html("").hide();
        jQuery("."+errorclass).removeClass("error");
    }
</script>
</body>
</html>