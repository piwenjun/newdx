<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: cloud_union.php 22964 2011-06-09 08:30:24Z yexinhao $
 */
if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}

if(!$_G['inajax']) {
	cpheader();
	shownav('navcloud', 'cloud_stats');
}

$unionDomain = 'http://union.discuz.qq.com';
$signUrl = generateSiteSignUrl();
headerLocation($unionDomain.'/site/application/?'.$signUrl);

?>