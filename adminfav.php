<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: adminfav.php 16805 2010-09-15 03:56:11Z aQ $
 */

define('APPTYPEID', 0);
define('CURSCRIPT', 'adminfav');
require_once './source/class/class_core.php';
require_once './source/function/function_home.php';
$discuz = & discuz_core::instance();
$cachelist = array('');
$discuz->cachelist = $cachelist;
$discuz->init();


$mod = getgpc('mod');
if(!in_array($mod, array('view','ajax'))) {
	$mod = 'index';
	$_GET['mod'] = 'index';
}


require_once libfile('adminfav/'.$mod, 'module');
?>