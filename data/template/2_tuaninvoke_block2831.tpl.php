<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); 
block_get('2831');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=gbk" />
    <title></title>
</head>
<body>
<div id="warpper" style="width:100%;overflow:hidden;">
    <?php block_display('2831'); ?></div>
<script src="http://www.8264.com/static/js/jquery-1.6.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery.noConflict();
</script>
<script type="text/javascript">
;(function($){
    function resize_style() {
        var width = 215;
        var max_width = $('#warpper').width() - 2;
        var item_num = parseInt(max_width / width);
        var item_margin = parseInt((max_width % width) / (item_num + 1) / 2);
        var padding_left = item_margin;
        $('#photoList').css({'padding-left': '18px','margin-top':'5px'});
        $('#photoList > div').css({'margin-left':item_margin+'px', 'margin-right':item_margin+'px'});
    }
    $(window).resize(resize_style);
    setTimeout(function(){
        resize_style();
    }, 200);
})(jQuery);
</script>
</body>
</html>