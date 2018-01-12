<?php
/**
 *	点评详情页
 */
if(! defined('IN_DISCUZ')){
	exit('Access Denied');
}
ob_start();
$tid = $_G['gp_tid'];
$pid = $_G['gp_pid'];
$uid = $_G['gp_uid'];

if($tid <= 0) { showmessage('参数错误'); }
$category = $dp_category['chain']['category'];
require_once libfile('dianping/modlist', 'class');
require_once libfile('dianping/comment', 'class');


$comment_obj = new comment();
$commentlist = $comment_obj->getdetail($pid,$tid,$uid,0);
if(empty($commentlist) || $commentlist['uid'] != $uid || $commentlist['pid'] != $pid || $commentlist['tid'] != $tid) {
    showmessage('您要查看的内容不存在或未审核，请返回');
}

//获取上几条或者下几条数据
$max = $comment_obj->get_max($tid);
$min = $comment_obj->get_min($tid);
$comm_next = "";
$comm_pre = "";
if($min < $pid && $pid <$max){
    $comm_next = $comment_obj->getpre_next($pid, '>', $tid,'asc', 2);
    $comm_pre = $comment_obj->getpre_next($pid, '<',$tid,'desc', 2);
    if(count($comm_next)==1){
        $comm_pre = $comment_obj->getpre_next($pid, '<',$tid,'desc', 3);
    }else{
        $comm_pre = $comment_obj->getpre_next($pid, '<',$tid,'desc', 2);
    }
    if(count($comm_pre)==1){
        $comm_next = $comment_obj->getpre_next($pid, '>', $tid,'asc', 3);
    }else{
        $comm_next = $comment_obj->getpre_next($pid, '>', $tid,'asc', 2);
    }
}else if($pid == $min){
    $comm_next = $comment_obj->getpre_next($pid, '>', $tid,'asc', 4);
}else if($pid == $max){
    $comm_pre = $comment_obj->getpre_next($pid, '<',$tid,'desc', 4);
}
require_once libfile('dianping/detail', 'class');
$detail_obj =  new detail($tid);
$detail = $detail_obj->getdetail('chain', 'i.cid, cname, i.pcid, i.pcname, i.provinceid, i.dir,i.serverid');
$pageTitle = $detail['subject']."-{$commentlist['author']}的点评/评价/测评-{$_G['setting']['bbname']}";
$allcount = 0;
//查dianping_star_logs
$sql   = "select f_p.pid, f_p.fid, f_p.tid, f_p.dateline, f_p.authorid, f_p.author, f_p.message, f_p.rate from " . DB::table('dianping_star_logs');
$sql  .= " s_l left join " . DB::table('forum_post');
$sql  .= " f_p on s_l.pid=f_p.pid where s_l.uid={$uid}";
$sql  .= " order by s_l.dateline desc ";
$sql  .= " limit 200 " . getSlaveID();
$query = DB::query($sql);
while ($v = DB::fetch($query)) {

    $allcount++;
}

include template('dianping/chain_commentdetail');
?>
