<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

		
if (!empty($_GET['tid']) && $_G['uid']) {
	$tid = $_GET['tid'];
	$type = $_GET['type'];	
	$attentions = array('want', 'used','worth','unworth');
	$query = DB::query("SELECT * FROM ".DB::table('plugin_produce_users')." WHERE uid = {$_G['uid']} AND tid = {$tid}");
	$user_attentions = array();
	while ($value = DB::fetch($query)) {
		$user_attentions[$value['type']] = $value;
	}
	
	if ($_GET['op'] == 'new') {
		if (!$_G['uid'] || !$tid || !$type || !in_array($type, $attentions)) {
			echo 'error';
		} elseif (!empty($user_attentions[$type])) {
			echo 'repeat';
		} else {
			DB::query("INSERT INTO ".DB::table('plugin_produce_users')." (uid, tid, type) VALUES ({$_G['uid']}, {$tid}, '{$type}')");		
			echo 'success';
		}
	}
}
