<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: class_credit.php 23260 2011-06-29 02:08:54Z monkey $
 */

class credit {

	var $checklowerlimit = true;
	var $coef = 1;
	var $extrasql = array();

	function credit() {}

	function &instance() {
		static $object;
		if(empty($object)) {
			$object = new credit();
		}
		return $object;
	}

	function execrule($action, $uid = 0, $needle = '', $coef = 1, $update = 1, $fid = 0) {
		global $_G;

		$this->coef = $coef;
		$uid = intval($uid ? $uid : $_G['uid']);
		$fid = $fid ? $fid : (isset($_G['fid']) && $_G['fid'] ? $_G['fid'] : 0);
		$rule = $this->getrule($action, $fid);
		$updatecredit = false;

		$enabled = false;
		if($rule) {
			for ($i = 1; $i<=8; $i++) {
				if(!empty($rule['extcredits'.$i])) {
					$enabled = true; break;
				}
			}
		}

		if($enabled) {
			$rulelog = array();
			$fids = $rule['fids'] ? explode(',', $rule['fids']) : array();
			$fid = in_array($fid, $fids) ? $fid : 0;
			$rulelog = $this->getrulelog($rule['rid'], $uid, $fid);
			if($rulelog && $rule['norepeat']) {
				$rulelog = array_merge($rulelog, $this->getchecklogbyclid($rulelog['clid'], $uid));
				$rulelog['norepeat'] = $rule['norepeat'];
			}
			if($rule['rewardnum'] && $rule['rewardnum'] < $coef) {
				$coef = $rule['rewardnum'];
			}
			if(empty($rulelog)) {
				$logarr = array(
					'uid' => $uid,
					'rid' => $rule['rid'],
					'fid' => $fid,
					'total' => $coef,
					'cyclenum' => $coef,
					'dateline' => $_G['timestamp']
				);

				if(in_array($rule['cycletype'], array(2,3))) {
					$logarr['starttime'] = $_G['timestamp'];
				}
				$logarr = $this->addlogarr($logarr, $rule, false);
				if($update) {
					$clid = DB::insert('common_credit_rule_log', $logarr, 1);
					if($rule['norepeat']) {
						$rulelog['isnew'] = 1;
						$rulelog['clid'] = $clid;
						$rulelog['uid'] = $uid;
						$rulelog['norepeat'] = $rule['norepeat'];
						$this->updatecheating($rulelog, $needle, true);
					}
				}
				$updatecredit = true;
			} else {

				$newcycle = false;
				$logarr = array();
				switch($rule['cycletype']) {
					case 0:
						break;
					case 1:
					case 4:
						if($rule['cycletype'] == 1) {
							$today = strtotime(dgmdate($_G['timestamp'], 'Y-m-d'));
							if($rulelog['dateline'] < $today && $rule['rewardnum']) {
								$rulelog['cyclenum'] =  0;
								$newcycle = true;
							}
						}
						if(empty($rule['rewardnum']) || $rulelog['cyclenum'] < $rule['rewardnum']) {
							if($rule['norepeat']) {
								$repeat = $this->checkcheating($rulelog, $needle, $rule['norepeat']);
								if($repeat && !$newcycle) {
									return false;
								}
							}
							if($rule['rewardnum']) {
								$remain = $rule['rewardnum'] - $rulelog['cyclenum'];
								if($remain < $coef) {
									$coef = $remain;
								}
							}
							$cyclenunm = $newcycle ? $coef : "cyclenum+'$coef'";
							$logarr = array(
								'cyclenum' => "cyclenum=$cyclenunm",
								'total' => "total=total+'$coef'",
								'dateline' => "dateline='$_G[timestamp]'"
							);
							$updatecredit = true;
						}
						break;

					case 2:
					case 3:
						$nextcycle = 0;
						if($rulelog['starttime']) {
							if($rule['cycletype'] == 2) {
								$start = strtotime(dgmdate($rulelog['starttime'], 'Y-m-d H:00:00'));
								$nextcycle = $start+$rule['cycletime']*3600;
							} else {
								$nextcycle = $rulelog['starttime']+$rule['cycletime']*60;
							}
						}
						if($_G['timestamp'] <= $nextcycle && $rulelog['cyclenum'] < $rule['rewardnum']) {
							if($rule['norepeat']) {
								$repeat = $this->checkcheating($rulelog, $needle, $rule['norepeat']);
								if($repeat && !$newcycle) {
									return false;
								}
							}
							if($rule['rewardnum']) {
								$remain = $rule['rewardnum'] - $rulelog['cyclenum'];
								if($remain < $coef) {
									$coef = $remain;
								}
							}
							$cyclenunm = 'cyclenum+'.$coef;
							$logarr = array(
								'cyclenum' => "cyclenum=cyclenum+'$cyclenunm'",
								'total' => "total=total+'$coef'",
								'dateline' => "dateline='$_G[timestamp]'"
							);
							$updatecredit = true;
						} elseif($_G['timestamp'] >= $nextcycle) {
							$newcycle = true;
							$logarr = array(
								'cyclenum' => "cyclenum=$coef",
								'total' => "total=total+'$coef'",
								'dateline' => "dateline='$_G[timestamp]'",
								'starttime' => "starttime='$_G[timestamp]'",
							);
							$updatecredit = true;
						}
						break;
				}
				if($update) {
					if($rule['norepeat'] && $needle) {
						$this->updatecheating($rulelog, $needle, $newcycle);
					}
					if($logarr) {
						$logarr = $this->addlogarr($logarr, $rule, true);
						DB::query("UPDATE ".DB::table('common_credit_rule_log')." SET ".implode(',', $logarr)." WHERE clid='$rulelog[clid]'");
					}
				}

			}

		}
		if($update && ($updatecredit || $this->extrasql)) {
			if(!$updatecredit) {
				for($i = 1; $i <= 8; $i++) {
					if(isset($_G['setting']['extcredits'][$i])) {
						$rule['extcredits'.$i] = 0;
					}
				}
			}
			$this->updatecreditbyrule($rule, $uid, $coef, $fid);
		}
		$rule['updatecredit'] = $updatecredit;

		return $rule;
	}

	function lowerlimit($rule, $uid = 0, $coef = 1, $fid = 0) {
		global $_G;

		$uid = $uid ? $uid : intval($_G['uid']);
		if($this->checklowerlimit && $uid && $_G['setting']['creditspolicy']['lowerlimit']) {
			$member = DB::fetch_first("SELECT * FROM ".DB::table('common_member_count')." WHERE uid='$uid'");
			$fid = $fid ? $fid : (isset($_G['fid']) && $_G['fid'] ? $_G['fid'] : 0);
			$rule = is_array($rule) ? $rule : $this->getrule($rule, $fid);
			for($i = 1; $i <= 8; $i++) {
				if($_G['setting']['extcredits'][$i] && $rule['extcredits'.$i]) {
					$limit = (float)$_G['setting']['creditspolicy']['lowerlimit'][$i];
					$extcredit = (float)$rule['extcredits'.$i] * $coef;
					if($extcredit < 0 && ($member['extcredits'.$i] + $extcredit) < $limit) {
						return $i;
					}
				}
			}
		}
		return true;
	}

	function updatecreditbyrule($rule, $uids = 0, $coef = 1, $fid = 0) {
		global $_G;

		$this->coef = intval($coef);
		$fid = $fid ? $fid : (isset($_G['fid']) && $_G['fid'] ? $_G['fid'] : 0);
		$uids = $uids ? $uids : intval($_G['uid']);
		$rule = is_array($rule) ? $rule : $this->getrule($rule, $fid);
		$creditarr = array();
		$updatecredit = false;
		for($i = 1; $i <= 8; $i++) {
			if(isset($_G['setting']['extcredits'][$i])) {
				$creditarr['extcredits'.$i] = intval($rule['extcredits'.$i]) * $this->coef;
				$updatecredit = true;
			}
		}
		if($updatecredit || $this->extrasql) {
			$this->updatemembercount($creditarr, $uids, is_array($uids) ? false : true, $this->coef > 0 ? urldecode($rule['rulenameuni']) : '');
		}
	}

	function updatemembercount($creditarr, $uids = 0, $checkgroup = true, $ruletxt = '') {
		global $_G;

		if(!$uids) $uids = intval($_G['uid']);
		$uids = is_array($uids) ? $uids : array($uids);
		if($uids && ($creditarr || $this->extrasql)) {
			if($this->extrasql) $creditarr = array_merge($creditarr, $this->extrasql);
			$sql = array();
			$allowkey = array('extcredits1', 'extcredits2', 'extcredits3', 'extcredits4', 'extcredits5', 'extcredits6', 'extcredits7', 'extcredits8', 'friends', 'posts', 'threads', 'oltime', 'digestposts', 'doings', 'blogs', 'albums', 'sharings', 'attachsize', 'views');
			$creditnotice = $_G['setting']['creditnotice'] && $_G['uid'] && $uids == array($_G['uid']);
			if($creditnotice) {
				if(!isset($_G['cookiecredits'])) {
					$_G['cookiecredits'] = !empty($_COOKIE['creditnotice']) ? explode('D', $_COOKIE['creditnotice']) : array_fill(0, 9, 0);
					for($i = 1; $i <= 8; $i++) {
						$_G['cookiecreditsbase'][$i] = getuserprofile('extcredits'.$i);
					}
				}
				if($ruletxt) {
					$_G['cookiecreditsrule'][$ruletxt] = $ruletxt;
				}
			}
			foreach($creditarr as $key => $value) {
				if(!empty($key) && in_array($key, $allowkey)) {
					$value = intval($value);
					$sql[] = "$key=$key+'$value'";
					if($creditnotice && substr($key, 0, 10) == 'extcredits') {
						$i = substr($key, 10);
						$_G['cookiecredits'][$i] += $value;
					}
				}
			}
			if($creditnotice) {
				dsetcookie('creditnotice', implode('D', $_G['cookiecredits']).'D'.$_G['uid']);
				dsetcookie('creditbase', '0D'.implode('D', $_G['cookiecreditsbase']));
				if(!empty($_G['cookiecreditsrule'])) {
					dsetcookie('creditrule', strip_tags(implode("\t", $_G['cookiecreditsrule'])));
				}
			}
			if($sql) {
				DB::query("UPDATE ".DB::table('common_member_count')." SET ".implode(',', $sql)." WHERE uid IN (".dimplode($uids).")", 'UNBUFFERED');
			}
			if($checkgroup && count($uids) == 1) $this->checkusergroup($uids[0]);
			$this->extrasql = array();
		}
	}

	function countcredit($uid, $update = true) {
		global $_G;

		$credits = 0;
		if($uid && !empty($_G['setting']['creditsformula'])) {
			$member = DB::fetch_first("SELECT * FROM ".DB::table('common_member_count')." WHERE uid='$uid'");
			eval("\$credits = round(".$_G['setting']['creditsformula'].");");
			if($uid == $_G['uid']) {
				if($update && $_G['member']['credits'] != $credits) {
					DB::update('common_member', array('credits'=>intval($credits)), array('uid' => $uid));
					$_G['member']['credits'] = $credits;
				}
			} elseif($update) {
				DB::update('common_member', array('credits'=>intval($credits)), array('uid' => $uid));
			}
		}
		return $credits;
	}

	function checkusergroup($uid) {
		global $_G;
		loadcache('usergroups');
		$uid = intval($uid ? $uid : $_G['uid']);
		$groupid = 0;
		if(!$uid) return $groupid;
		if($uid != $_G['uid']) {
			$member = DB::fetch_first("SELECT * FROM ".DB::table('common_member')." WHERE uid='$uid'");
		} else {
			$member = $_G['member'];
		}
		if(empty($member)) return $groupid;

		$credits = $this->countcredit($uid, false);
		$updatearray = array();
		$groupid = $member['groupid'];
		$group = $_G['cache']['usergroups'][$member['groupid']];
		if($member['credits'] != $credits) {
			$updatearray['credits'] = $credits;
			$member['credits'] = $credits;
		}
		$member['credits'] = $member['credits'] == '' ? 0 : $member['credits'] ;
		$sendnotify = false;
		if(empty($group) || $group['type'] == 'member' && !($member['credits'] >= $group['creditshigher'] && $member['credits'] < $group['creditslower'])) {
			$newgroup = DB::fetch_first("SELECT grouptitle, groupid FROM ".DB::table('common_usergroup')." WHERE type='member' AND $member[credits]>=creditshigher AND $member[credits]<creditslower LIMIT 1");
			if(!empty($newgroup)) {
				if($member['groupid'] != $newgroup['groupid']) {
					$updatearray['groupid'] = $groupid = $newgroup['groupid'];
					$sendnotify = true;
				}
			}
		}
		if($updatearray) {
			DB::update('common_member', $updatearray, array('uid' => $uid));
		}
		if($sendnotify) {
			notification_add($uid, 'system', 'user_usergroup', array('usergroup' => '<a href="home.php?mod=spacecp&ac=credit&op=usergroup">'.$newgroup['grouptitle'].'</a>'), 1);
		}

		return $groupid;

	}

	function deletelogbyfid($rid, $fid) {

		$fid = intval($fid);
		if($rid && $fid) {
			$lids = array();
			$query = DB::query("SELECT * FROM ".DB::table('common_credit_rule_log')." WHERE rid='$rid' AND fid='$fid'");
			while($value = DB::fetch($query)) {
				$lids[$value['clid']] = $value['clid'];
			}
			if($lids) {
				DB::query("DELETE FROM ".DB::table('common_credit_rule_log')." WHERE clid IN (".dimplode($lids).")");
				DB::query("DELETE FROM ".DB::table('common_credit_rule_log_field')." WHERE clid IN (".dimplode($lids).")");
			}
		}
	}

	function updatecheating($rulelog, $needle, $newcycle) {
		if($needle) {
			$logarr = array();
			switch($rulelog['norepeat']) {
				case 0:
					break;
				case 1:
					$info = empty($rulelog['info'])||$newcycle ? $needle : $rulelog['info'].','.$needle;
					$logarr['info'] = addslashes($info);
					break;
				case 2:
					$user = empty($rulelog['user'])||$newcycle ? $needle : $rulelog['user'].','.$needle;
					$logarr['user'] = addslashes($user);
					break;
				case 3:
					$app = empty($rulelog['app'])||$newcycle ? $needle : $rulelog['app'].','.$needle;
					$logarr['app'] = addslashes($app);
				break;
			}
			if($rulelog['isnew']) {
				$logarr['clid'] = $rulelog['clid'];
				$logarr['uid'] = $rulelog['uid'];
				DB::insert('common_credit_rule_log_field', $logarr);
			} elseif($logarr) {
				DB::update('common_credit_rule_log_field', $logarr, array('uid'=>$rulelog['uid'], 'clid'=>$rulelog['clid']));
			}
		}
	}

	function addlogarr($logarr, $rule, $issql = 0) {
		global $_G;

		for($i = 1; $i <= 8; $i++) {
			if($_G['setting']['extcredits'][$i]) {
				$extcredit = intval($rule['extcredits'.$i]) * $this->coef;
				if($issql) {
					$logarr['extcredits'.$i] = 'extcredits'.$i."='$extcredit'";
				} else {
					$logarr['extcredits'.$i] = $extcredit;
				}
			}
		}
		return $logarr;
	}

	function getrule($action, $fid = 0) {
		global $_G;

		if(empty($action)) {
			return false;
		}
		$fid = $fid ? $fid : (isset($_G['fid']) && $_G['fid'] ? $_G['fid'] : 0);
		if($_G['forum'] && $_G['forum']['status'] == 3) {
			$group_creditspolicy = $_G['grouplevels'][$_G['forum']['level']]['creditspolicy'];
			if(is_array($group_creditspolicy) && empty($group_creditspolicy[$action])) {
				return false;
			} else {
				$fid = 0;
			}
		}
		loadcache('creditrule');
		$rule = false;
		if(is_array($_G['cache']['creditrule'][$action])) {
			$rule = $_G['cache']['creditrule'][$action];
			$rulenameuni = $rule['rulenameuni'];
			if($rule['fids'] && $fid) {
				$fid = intval($fid);
				$fids = explode(',', $rule['fids']);
				if(in_array($fid, $fids)) {
					$policy = unserialize(DB::result_first("SELECT creditspolicy FROM ".DB::table('forum_forumfield')." WHERE fid='$fid'"));
					if(isset($policy[$action])) {
						$rule = $policy[$action];
						$rule['rulenameuni'] = $rulenameuni;
					}
				}
			}

			for($i = 1; $i <= 8; $i++) {
				if(empty($_G['setting']['extcredits'][$i])) {
					unset($rule['extcredits'.$i]);
					continue;
				}
				$rule['extcredits'.$i] = intval($rule['extcredits'.$i]);
			}
		}
		return $rule;
	}

	function getrulelog($rid, $uid = 0, $fid = 0) {
		global $_G;

		$log = array();
		$uid = $uid ? $uid : $_G['uid'];
		if($rid && $uid) {
			$sql = " AND fid='$fid'";
			$query = DB::query("SELECT * FROM ".DB::table('common_credit_rule_log')." WHERE uid='$uid' AND rid='$rid' $sql");
			$log = DB::fetch($query);
		}
		return $log;
	}

	function checkcheating($rulelog, $needle, $checktype) {

		$repeat = false;
		switch($checktype) {
			case 0:
				break;
			case 1:
				$infoarr = explode(',', $rulelog['info']);
				if(!empty($rulelog['info']) && in_array($needle, $infoarr)) {
					$repeat = true;
				}
				break;
			case 2:
				$userarr = explode(',', $rulelog['user']);
				if(!empty($rulelog['user']) && in_array($needle, $userarr)) {
					$repeat = true;
				}
				break;
			case 3:
				$apparr = explode(',', $rulelog['app']);
				if(!empty($rulelog['app']) && in_array($needle, $apparr)) {
					$repeat = true;
				}
				break;
		}
		return $repeat;
	}

	function getchecklogbyclid($clid, $uid = 0) {
		global $_G;

		$logarr = array();
		$uid = $uid ? $uid : $_G['uid'];
		if($clid && $uid) {
			$query = DB::query("SELECT info, user, app FROM ".DB::table('common_credit_rule_log_field')." WHERE uid='$uid' AND clid='$clid'");
			if(DB::num_rows($query)) {
				$logarr = DB::fetch($query);
			}
		}
		return $logarr;
	}
}

?>