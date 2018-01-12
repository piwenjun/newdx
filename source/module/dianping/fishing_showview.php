<?php
/**
 *    山峰详情页
 */
if (!defined('IN_DISCUZ')) {
    exit('Access Denied');
}
ob_start();
$tid = $_G['gp_tid'];

if ($tid <= 0) {
    showmessage('参数错误');
}

//点评评论页面ajax分页处理
$page = max(1, $_G['gp_page']);
$perpage = 10;
$start = ($page - 1) * $perpage;
$where = " ";
if($_G['gp_starnum']){
	$where.=' and starnum='.$_G['gp_starnum'].' ';
	$starnum=$_G['gp_starnum'];
}
require_once libfile('dianping/comment', 'class');
$comment_obj = new comment();
$commentlist = $comment_obj->getlist($tid, '', $start, $perpage, 'p.dateline', 1,$where);
$recordnum = $comment_obj->recordnum;
$multipage = multi($recordnum, $perpage, $page, "{$_G['config']['web']['portal']}dianping.php?mod={$mod}&act=showview&tid={$tid}");

//登陆状态我的点评
if ($_G['uid']) {
    $mycomment = $comment_obj->getdetail('', $tid, $_G['uid']);
    //我的点评 为了统一模板赋值
    $comment['tid'] = $mycomment['tid'];
    $comment['pid'] = $mycomment['pid'];
    unset($commentlist[$mycomment['pid']]);
}

//AJAX返回评论列表数据
if ($_GET['ajaxreply'] == 1) {
    @header('Content-Type: text/html; charset=gbk');
    include template('dianping/fishing_comment');
    exit;
}

require_once libfile('dianping/detail', 'class');
$detail_obj = new detail($tid);
$detail = $detail_obj->getdetail('fishing', 'i.lon, i.lat, i.addr,i.provinceid,i.cityid,i.type,i.isfree');

$catetype = $dp_category['fishing']['catetype'];
$cate_childtype = $dp_category['fishing']['childtype'];
$alltypename = $dp_category['fishing']['alltypename'];
$cate_isfree = $dp_category['fishing']['isfree'];

if(empty($detail) || $detail['fid'] != $dp_modules['fishing']['fid'] || ($detail['ispublish'] == 0 && $_G['adminid'] != 1)) { showmessage('您要查看的内容不存在或未审核，请返回'); }
//title, description, keywords
$pageTitle= $detail['subject']."官网|地址|电话|怎么样-钓鱼场地点评 - [page]{$_G['setting']['bbname']}";
if($page>1){
    $pageTitle = strtr($pageTitle,'[page]',' 第'.$page.'页 -');
}else{
    $pageTitle = str_replace('[page]','',$pageTitle);
}
$metadescription = '关于'.$detail['subject'].'的详细介绍包括价格,地址,联系方式,服务水平，场地环境以及真实用户点评感受，为前往'.$detail['subject'].'的钓鱼爱好者提供权威靠谱的信息参考';
$metakeywords= $detail['subject'];

$seccodecheck = ($_G['setting']['seccodestatus'] & 4) && (! $_G['setting']['seccodedata']['minposts'] || getuserprofile('posts') < $_G['setting']['seccodedata']['minposts']);
$secqaacheck = $_G['setting']['secqaa']['status'] & 2 && (! $_G['setting']['secqaa']['minposts'] || getuserprofile('posts') < $_G['setting']['secqaa']['minposts']);

//更新点击量
$detail_obj->updateviews();

//侧栏活动线路广告
$hddata = gethddata('fishing', 13, 0, 7, $_G['clientip']);

//热门列表及同地区列表
require_once libfile('dianping/modlist', 'class');
$list_obj = new modlist;
$_G['cache']['dp_fishing_list_hot'] ? $sidebar_list_hot = $_G['cache']['dp_fishing_list_hot'] : updatecache('dp_fishing_list_hot');
if ($detail['provinceid']) {
    $sidebar_list_same = $list_obj->getlist($mod, '', 'ispublish=1 and provinceid=' . $detail['provinceid'], 0, 4, 'id asc');
}

$modlistall = $list_obj->getlist($mod, 'type,cityid,provinceid,addr,cnum', 'ispublish=1', $start, '', $orderby, '', 0);

/*start----为省市（涵盖国内外所有）获取及对省市进行过滤,info表存在才将其显示出来***************************/
$allcodeList = array();
foreach ($modlistall as $key => $val) {
    $allcodeList[$val['provinceid']] = 1;
    $allcodeList[$val['cityid']] = 1;
}
$_G['cache']['dp_country_region'] ? $countries = $_G['cache']['dp_country_region'] : updatecache('dp_country_region');
foreach ($countries as $rk => $rv) {
    if (!$allcodeList[$rk]) {
        unset($countries[$rk]);
        continue;
    }
    if (!$rv['shengid']) {
        $proList[$rk] = $rv;
    }
}
/*此行开始，点评详情页头图logo图及详细内容中图片的获取**********************/
if ($detail_obj->attach) {
    $piclist = $detail_obj->attach->get_img($tid, $detail['pid'], 'plugin');
} else {
    require_once libfile('dianping/attach','class');
    $attach = new attach();
    $piclist = $attach->get_img($tid, $detail['pid'], 'plugin');
}
/*此行结束，点评详情页头图logo图及详细内容中图片的获取**********************/

//调取在外线路的数据  hd.8264.com
$keyword = "海钓";
$result = requestRemoteData("http://m.hd.8264.com/wap.php?app=api&act=getData&data_type=search&keyword={$keyword}&limit=0-6");
$result_data = json_decode($result, true);
foreach($result_data as $k=>$v){
       $title = diconv($v['title'], "utf-8", "gbk");
       $place = diconv($v['start_place'], "utf-8", "gbk");
       $result_data[$k]['subject'] = $title;
       //去掉集合地两端逗号
       //$place = trim($place, ",");
       //$place = ltrim($place, ",");
       $result_data[$k]['place'] = $place;
       $url = str_replace('m.', "", $v['url']);
       $result_data[$k]['url_zaiwai'] = $url;  
    }


include template('dianping/fishing_showview');
?>
