<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

require_once DISCUZ_ROOT.'./source/plugin/forumoption/shop.php';
$tid = $_GET['tid'];
$notip = $_GET['edit'];
if($tid){
	$shop = ForumOptionShop::getShopEditmapBytId($tid);	
}
include template('outshop:editmap');