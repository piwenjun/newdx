<?php

/**
 *  �������ֲ��б�ҳ����
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

function build_cache_dp_hostel_comment_rate()
{
	global $_G;
	require_once libfile('dianping/comment', 'class');
	$comment_obj = new comment();
	$comment_rate = $comment_obj->getpostlist($_G['config']['fids']['hostel']);
	memory('set', 'dp_hostel_comment_rate', $comment_rate, 86400);
}

?>
