<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
</div>
</div>
</div>
</div>
<style>
.notetips{font-size:12px;color:#ff7e00}
div.form-box div.info-hd{cursor: pointer;}
</style>
<script src="http://static.8264.com/static/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(function(){
// jQuery('.mt-menu-tree ul').affix({
//   	offset: {
//     	top: 260
//   	}
// });
// jQuery('.notelist').on('click', 'li[id^=more_list]>p>a', function(){
// 	var url = this.href;
// 	var notelist = jQuery(this).parents('.notelist');
// 	jQuery(this).parents("li[id^=more_list]").remove();
// 	if(url.length > 20){
// 		jQuery.get(url,{
// 			inajax:1
// 		}, function(data, status){
// 			notelist.append(jQuery(data).find('root').text());
// 			//jQuery('.menuall>span.zhong').click();
// 		}, 'xml');
// 	}
// });
// function autofixmsg(){
// 	return;
// 	if(jQuery('#more_list').length > 0){
// 		if(jQuery('#more_list').offset().top < jQuery(window).height() + jQuery(window).scrollTop()){
// 			if(jQuery('#more_list>p>a').length > 0 && jQuery('#more_list').is(':visible')){
// 				if(jQuery('#more_list>p>a').attr('href').replace(/.*page=(\d+).*/, "$1") <= 5){
// 					jQuery('#more_list>p>a').click();
// 				}
// 			}
// 		}
// 	}
// 	var topweidu = jQuery(window).height() - 56 + jQuery(window).scrollTop();
// 	var weiduwidth = jQuery('div.main-wrap').width(); 
// 	<?php if(!empty($newdata['1'])) { ?>
// 	var nofixed = true;
// 	var weidubox = jQuery('div.weidumsg');
// 	var weiduarrow = weidubox.children('.info-hd').children('span.arrow');
// 	<?php } ?>
// 	<?php if(!empty($newdata['0'])) { ?>
// 	var yidubox = jQuery('div.yidumsg');
// 	var yiduarrow = yidubox.children('.info-hd').children('span.arrow');
// 	if(yidubox.offset().top > topweidu){
// 		if(BROWSER.ie > 0 && BROWSER.ie < 7){
// 			yidubox.children('.info-hd').css({position:'absolute', top:topweidu, width:weiduwidth, border:"1px solid #eee",borderTop:"none 0", backgroundColor:"#f6f6f6",width:"729px"});
// 		}else{
// 			yidubox.children('.info-hd').css({position:'fixed', bottom:0, width:weiduwidth, border:"1px solid #eee",borderTop:"none 0", backgroundColor:"#f6f6f6",width:"729px"});
// 		}
// 		yiduarrow.show();
// 	}else{
// 		<?php if(!empty($newdata['1'])) { ?>
// 		if(topweidu >= jQuery('div.weidumsg').offset().top + jQuery('div.weidumsg').height() + 10){
// 		<?php } ?>
// 			if(yidubox.offset().top <= 56 + jQuery(window).scrollTop()){
// 				if(BROWSER.ie > 0 && BROWSER.ie < 7){
// 					yidubox.children('.info-hd').css({position:'absolute', top:jQuery(window).scrollTop() + 58, width:weiduwidth, borderBottom:"3px solid #EFEFEF", backgroundColor:"#FFFFFF"<?php if(empty($newdata['1'])) { ?>, borderTop:"15px solid #EFEFEF", borderRight:"1px solid #EFEFEF"<?php } ?>});
// 				}else{
// 					yidubox.children('.info-hd').css({position:'fixed', top:<?php if(!empty($newdata['1'])) { ?>70<?php } else { ?>0<?php } ?>, width:weiduwidth, borderBottom:"3px solid #EFEFEF", backgroundColor:"#FFFFFF"<?php if(empty($newdata['1'])) { ?>, borderTop:"15px solid #EFEFEF", borderRight:"1px solid #EFEFEF"<?php } ?>});
// 					<?php if(!empty($newdata['1'])) { ?>weidubox.find('.menuall').insertBefore('div.yidumsg>.info-hd>span.arrow');<?php } ?>
// 				}
// 				yiduarrow.hide();
// 				<?php if(!empty($newdata['1'])) { ?>
// 				weiduarrow.show();weidubox.children('.info-hd').css({backgroundColor:"#f6f6f6"});
// 				nofixed = false;
// 				<?php } ?>
// 			}else{
// 				yidubox.children('.info-hd').removeAttr('style');
// 				yiduarrow.show();
// 				<?php if(!empty($newdata['1'])) { ?>
// 				weiduarrow.hide();
// 				yidubox.find('.menuall').insertBefore('div.weidumsg>.info-hd>span.arrow');
// 				<?php } ?>
// 			}
// 		<?php if(!empty($newdata['1'])) { ?>	
// 		}else{
// 			yiduarrow.show();
// 			if(BROWSER.ie > 0 && BROWSER.ie < 7){
// 				yidubox.css('top', topweidu);
// 			}
// 		}
// 		<?php } ?>
// 	}
// 	<?php } ?>
// 	<?php if(!empty($newdata['1'])) { ?>
// 	if(weidubox.offset().top < jQuery(window).scrollTop()){
// 		if(BROWSER.ie > 0 && BROWSER.ie < 7){
// 			weidubox.children('.info-hd').css({position:'absolute',left:jQuery('.main-wrap').offset().left-1, top:jQuery(window).scrollTop(), width:weiduwidth,borderLeft:"1px solid #EFEFEF", borderRight:"1px solid #EFEFEF",borderTop:"15px solid #efefef"});
// 		}else{
// 			weidubox.children('.info-hd').css({position:'fixed',left:jQuery('.main-wrap').offset().left-1, top:0, width:weiduwidth, borderLeft:"1px solid #EFEFEF", borderRight:"1px solid #EFEFEF",borderTop:"15px solid #efefef"});
// 		}
// 		if(nofixed){
// 			weidubox.children('.info-hd').css({backgroundColor:"#FFFFFF"});
// 		}
// 	}else{
// 		weidubox.children('.info-hd').removeAttr('style');
// 	}
// 	<?php } ?>
// }
// autofixmsg();
// jQuery(window).scroll(autofixmsg);
// jQuery(window).resize(autofixmsg);
// jQuery('div.weidumsg>div.info-hd').click(function(){
// 	jQuery('html,body').animate({scrollTop:jQuery('div.weidumsg').offset().top}, 800);
// });
// jQuery('div.yidumsg>div.info-hd').click(function(){
//     jQuery('html,body').animate({scrollTop:<?php if(!empty($newdata['1'])) { ?>jQuery('div.weidumsg').offset().top + jQuery('div.weidumsg').height() + 10<?php } else { ?>jQuery('div.yidumsg').offset().top<?php } ?>}, 800);
// });
jQuery(document).ready(function() {
jQuery('#wp').css({minHeight: jQuery(window).height()-125});
var li = jQuery('ul.navigate_notification li.active');
var span = li.find('span').last();
var showclass = span.attr('showclass');
if(! showclass) return true;
var showname = span.html();
jQuery('span.notice_type').html(showname);
jQuery('#more_tips_new p em').html(showname);
});
});
</script><?php $nobottomad = false; include template('common/footer_8264_new'); ?>