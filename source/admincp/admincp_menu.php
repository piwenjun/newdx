<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: admincp_menu.php 23036 2011-06-15 00:46:53Z monkey $
 */

global $_G;
if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}

$isfounder = isset($isfounder) ? $isfounder : isfounder();

$topmenu = $menu = array();

$topmenu = array (
	'index' => '',
	'global' => '',
	'style' => '',
	'topic' => '',
	'user' => '',
	'portal' => '',
	'forum' => '',
	'group' => '',
	'extended' => '',
	'plugin' => $isfounder ? 'plugins' : '',
	'tools' => '',
	'modules' => ''
);

$menu['index'] = array(
	array('menu_home', 'index'),
	array('menu_custommenu_manage', 'misc_custommenu'),
);

$custommenu = get_custommenu();
$menu['index'] = array_merge($menu['index'], $custommenu);

$menu['global'] = array(
	array('menu_setting_basic', 'setting_basic'),
	array('menu_setting_access', 'setting_access'),
	array('menu_setting_optimize', 'setting_seo'),
	array('menu_setting_functions', 'setting_functions'),
	array('menu_setting_domain', 'domain'),
	array('menu_setting_home', 'setting_home'),
	array('menu_setting_user', 'setting_permissions'),
	array('menu_setting_credits', 'setting_credits'),
	array('menu_setting_sec', 'setting_sec'),
	array('menu_setting_datetime', 'setting_datetime'),
	array('menu_setting_attachments', 'setting_attach'),
	array('menu_setting_imgwater', 'setting_imgwater'),
	array('menu_posting_attachtypes', 'misc_attachtype'),
	array('menu_setting_search', 'setting_search'),
	array('menu_setting_district', 'district'),
	array('menu_setting_ranklist', 'setting_ranklist'),
		//手机版全局设置(IN_MOBILE)
	array('menu_setting_mobile', 'setting_mobile'),
);

$menu['style'] = array(
	array('menu_setting_customnav', 'nav_headernav'),
	array('menu_setting_styles', 'setting_styles'),
	array('menu_styles', 'styles'),
	$isfounder ? array('menu_styles_templates', 'templates') : null,
	array('menu_posting_smilies', 'smilies'),
	array('menu_click', 'click'),
	array('menu_thread_stamp', 'misc_stamp'),
	array('menu_posting_editor', 'setting_editor'),
	array('menu_misc_onlinelist', 'misc_onlinelist'),
);

$menu['topic'] = array(
	array('menu_moderate_posts', 'moderate'),
	array('menu_maint_threads', 'threads'),
	array('menu_maint_prune', 'prune'),
	array('menu_maint_attaches', 'attach'),
	array('menu_maint_threads_group', 'threads_group'),
	array('menu_maint_prune_group', 'prune_group'),
	array('menu_maint_attaches_group', 'attach_group'),
	array('menu_moderate_recyclebin', 'recyclebin'),
	array('menu_posting_censors', 'misc_censor'),
	array('menu_maint_report', 'report'),
	array('menu_threads_forumstick', 'threads_forumstick'),
	array('menu_post_position_index', 'threads_postposition'),
	array('menu_maint_doing', 'doing'),
	array('menu_maint_blog', 'blog'),
	array('menu_maint_feed', 'feed'),
	array('menu_maint_album', 'album'),
	array('menu_maint_pic', 'pic'),
	array('menu_maint_comment', 'comment'),
	array('menu_maint_share', 'share'),
	array('menu_maint_readmodel_travel', 'readmodelTravel'),
	array('menu_question', 'question'),
	array('menu_maint_readmodel_article', 'readmodelArticle'),
	array('menu_bangdan', 'bangdan'),
    array('menu_exam', 'exam'),
	array('menu_hotlistimg', 'hotlistimg')
);

$menu['user'] = array(
	array('menu_members_edit', 'members_search'),
	array('menu_members_add', 'members_add'),
	array('menu_members_profile', 'members_profile'),
	array('menu_members_stat', 'members_stat'),
	array('menu_members_newsletter', 'members_newsletter'),
	array('menu_members_edit_ban_user', 'members_ban'),
	array('menu_members_ipban', 'members_ipban'),
	array('menu_members_credits', 'members_reward'),
	array('menu_moderate_modmembers', 'moderate_members'),
	array('menu_admingroups', 'admingroup'),
	array('menu_usergroups', 'usergroups'),
	array('menu_hotuser', 'specialuser_hotuser'),
	array('menu_defaultuser', 'specialuser_defaultuser'),
	array('members_verify_profile', 'verify_verify'),
	array('menu_members_verify_setting', 'verify'),
);

if(is_array($_G['setting']['verify'])) {
	foreach($_G['setting']['verify'] as $vid => $verify) {
		if($verify['available']) {
			$menu['user'][] = array($verify['title'], "verify_verify_$vid");
		}
	}
}

$menu['portal'] = array(
	array('menu_portalcategory', 'portalcategory'),
	array('menu_blogcategory', 'blogcategory'),
	array('menu_albumcategory', 'albumcategory'),
	array('menu_article', 'article'),
	array('menu_blockstyle', 'blockstyle'),
	array('menu_block', 'block'),
	array('menu_topic', 'topic'),
	array('menu_diytemplate', 'diytemplate'),
	array('menu_zblunbo', 'zblunbo'),
	array('menu_actplatform', 'actplatform'),
	array('menu_collecthddemand', 'collecthddemand'),
);

$menu['forum'] = array(
	array('menu_forums', 'forums'),
	array('menu_forums_merge', 'forums_merge'),
	array('menu_forums_infotypes', 'threadtypes'),
);

$menu['group'] = array(
	array('menu_group_setting', 'group_setting'),
	array('menu_group_type', 'group_type'),
	array('menu_group_manage', 'group_manage'),
	array('menu_group_userperm', 'group_userperm'),
	array('menu_group_level', 'group_level'),
);

$menu['extended'] = array(
	array('menu_adv_custom', 'adv'),
	array('menu_tasks', 'tasks'),
	array('menu_magics', 'magics'),
	array('menu_medals', 'medals'),
	array('menu_misc_help', 'faq'),
	array('menu_ec', 'setting_ec'),
	array('menu_misc_link', 'misc_link'),
	array('memu_focus_topic', 'misc_focus'),
);

if(file_exists($menudir = DISCUZ_ROOT.'./source/admincp/menu')) {
	$adminextend = $adminextendnew = array();
	//查看缓存方式 modify by wangqi 20121010
	if($isfilecache === null) {
		$isfilecache = getglobal('config/cache/type') == 'file';
		$allowmem = memory('check');
	}
	if ($allowmem) {
		$adminextend = memory('get', 'cache_adminextend');
	}
	if ($isfilecache){
		if(file_exists($adminextendfile = DISCUZ_ROOT.'./data/cache/cache_adminextend.php')) {
			@include $adminextendfile;
		}
	}
	//end

	$menudirhandle = dir($menudir);
	while($entry = $menudirhandle->read()) {
		if(!in_array($entry, array('.', '..')) && preg_match("/^menu\_([\w\.]+)$/", $entry, $entryr) && substr($entry, -4) == '.php' && strlen($entry) < 30 && is_file($menudir.'/'.$entry)) {
			@include_once $menudir.'/'.$entry;
			$adminextendnew[] = $entryr[1];
		}
	}
	if($adminextend != $adminextendnew) {
		@unlink($adminextendfile);
		if($adminextendnew) {
			//增加memcache modify by wangqi 20121010
			$allowmem && (memory('set', 'cache_adminextend', $adminextendnew));
			if ($isfilecache){
				require_once libfile('function/cache');
				writetocache('adminextend', getcachevars(array('adminextend' => $adminextendnew)));
			}
			//end
		}
		unset($_G['lang']['admincp']);
	}
}

if($isfounder) {
	$menu['plugin'] = array(
		array('menu_addons', 'addons'),
		array('menu_plugins', 'plugins'),
	);
}
loadcache('adminmenu');
if(is_array($_G['cache']['adminmenu'])) {
	foreach($_G['cache']['adminmenu'] as $row) {
		$menu['plugin'][] = array($row['name'], $row['action']);
	}
}
if(!$menu['plugin']) {
	unset($topmenu['plugin']);
}

$menu['tools'] = array(
	array('menu_tools_updatecaches', 'tools_updatecache'),
	array('menu_misc_announce', 'announce'),
	array('menu_tools_updatecounters', 'counter'),
	array('menu_logs', 'logs'),
	array('menu_misc_cron', 'misc_cron'),
	$isfounder ? array('menu_tools_fileperms', 'tools_fileperms') : null,
	$isfounder ? array('menu_tools_filecheck', 'checktools_filecheck') : null,
	array('SEO数据统计', 'analytic'),
	array('点评发帖量统计', 'dianping_stat'),
);

// 130827 rinne 新加功能菜单
$menu['modules'] = array(
	array('menu_module_demo', 'demo_index')
);

if($isfounder) {
	$topmenu['founder'] = '';

	$menu['founder'] = array(
		array('menu_founder_perm', 'founder_perm'),
		array('menu_setting_mail', 'setting_mail'),
		array('menu_setting_uc', 'setting_uc'),
		array('menu_db', 'db_export'),
		array('menu_postsplit', 'postsplit_manage'),
		array('menu_threadsplit', 'threadsplit_manage'),
	);

	$menu['uc'] = array();
}

if(!isfounder() && !isset($GLOBALS['admincp']->perms['all'])) {
	$menunew = $menu;
	foreach($menu as $topkey => $datas) {
		if($topkey == 'index') {
			continue;
		}
		$itemexists = 0;
		foreach($datas as $key => $data) {
			if(array_key_exists($data[1], $GLOBALS['admincp']->perms)) {
				$itemexists = 1;
			} else {
				unset($menunew[$topkey][$key]);
			}
		}
		if(!$itemexists) {
			unset($topmenu[$topkey]);
			unset($menunew[$topkey]);
		}
	}
	$menu = $menunew;
}

?>
