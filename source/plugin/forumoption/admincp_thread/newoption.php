<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
require_once DISCUZ_ROOT.'./source/plugin/forumoption/admincp_thread/class.php';

if (!empty($_POST)) {
	$tid = (int)$_POST['tid'];
	$option = DB::fetch_first("SELECT * FROM ".DB::table('plugin_threadoption')." WHERE tid = {$tid} AND class = {$_POST['class']}");
	if (!empty($option)) {
		cpmsg('设置己存在', 'action=plugins&operation=config&do='.$pluginid.'&identifier=forumoption&pmod=admincp_thread&op=newop', 'error');
	} else {
		DB::query("INSERT INTO ".DB::table('plugin_threadoption')."
			  (tid, class) VALUES ({$tid}, {$_POST['class']})");
		cpmsg('新建设置成功', 'action=plugins&operation=config&do='.$pluginid.'&identifier=forumoption&pmod=admincp_thread', 'succeed');
	}
}
?>

<form action="" method="post">
<?php showtableheader(); ?>
<tr><th class="partition" colspan="15">新建设置</th></tr>
<tr><td class="td27" colspan="2">贴子id:</td></tr>
<tr class="noborder">
	<td class="vtop rowform">
		<input type="text" name="tid" class="txt" id="" />
	</td>
	<td class="vtop tips2">
		
	</td>
</tr>
<tr><td class="td27" colspan="2">分类:</td></tr>
<tr class="noborder">
	<td class="vtop rowform">
		<select name="class">
			<?php foreach(ThreadClass::getClasses() as $i => $item) { ?>
			<option value="<?php echo $i; ?>"><?php echo $item['name']; ?></option>
			<?php } ?>
		</select>
	</td>
	<td class="vtop tips2">
		
	</td>
</tr>
<tr>
	<td colspan="15">
		<div class="fixsel">
			<input type="submit" value="提交" title="按 Enter 键可随时提交你的修改" name="editsubmit" id="submit_editsubmit" class="btn">
		</div>
	</td>
</tr>
<?php showtablefooter(); ?>
</form>