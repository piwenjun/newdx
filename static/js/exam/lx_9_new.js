function AutoNextExam(a) {
	try {
		if ("Y" == a) return setTimeout("gotoExam(orderNext)", 100), event.returnValue = !1, !1
	} catch (b) {}
}
function showExamTp(a) {
	if (!a) return "";
	var b = a;
	return b.indexOf("flv") > 0 ? '<div id="dhArea"></div>' : (b = getEmTp(b), '<p><img src="' + b + '" onclick="MaxEmTp();"></p>')
}
function MaxEmTp() {
	var a = jQuery("#ExamTit p img").attr("src");
	a = a.replace("mnks.cn/s/", "mnks.cn/"), jQuery("#ExamTit p img").attr("src", a), jQuery("#ExamTit p img").addClass("max"), jQuery("#ExamTit p img").unbind("click"), jQuery("#ExamTit p img").attr("onclick", ""), jQuery("#ExamTit p img").click(function() {
		MinEmTp()
	})
}
function MinEmTp() {
	jQuery("#ExamTit p img").removeClass("max"), jQuery("#ExamTit p img").unbind("click"), jQuery("#ExamTit p img").attr("onclick", ""), jQuery("#ExamTit p img").click(function() {
		MaxEmTp()
	})
}
function gotoExamPre() {
	gotoExam(orderPre)
}
function gotoExamNext() {
	
	gotoExam(orderNext)
}
function gotoExam(order) {
	

	jQuery(".icon-use").parent().attr("onclick", "is_useful(1)");
	jQuery(".icon-useless").parent().attr("onclick", "is_useful(0)");
	jQuery(".is-button").removeClass("active");

	if (order = Math.abs(order), 1 > order) return ExamTip("已经是第一题了"), !1;
	if (order > ExamCount) return ExamTip("已经是最后一题了"), !1;
	0 == xxms && ExamNoteView(""), orderTmp = order, jQuery("#mkT3 i").html("<span>" + order + "</span>/" + ExamCount);
	var EmID = ExamID[order],
		EmTx = ExamTx[order],
		EmTm = ExamTm[order],
		EmTp = ExamTp[order],
		EmVideo = ExamVideo[order],
		EmDa = ExamDa[order],
		EmNote = ExamNote[orderTmp];
	if ("" == EmTm) {
		var url = '/exam.php?ctl=topic&act=getquestion';
		jQuery.ajax({
			type : 'POST',
			url : url,
			data : {'qid':ExamID[order], 'catid':catid},
			dataType : 'json',
			async: false,
			success:function(result){
				var str = eval(result);
				if(str.flag == '1'){
					EmTx = str.qtype; ExamTx[order] = EmTx; 
					EmTm = str.title+"<br/>"+str.answers; ExamTm[order] = EmTm; 
					EmTp = str.imgurl; ExamTp[order] = EmTp; 
					EmVideo = str.videourl; ExamVideo[order] = EmVideo;
					EmDa = str.right_answer; ExamDa[order] = EmDa; 
					EmNote = str.analysis; ExamNote[orderTmp] = EmNote;

					EmQid[order] = str.qid;

					jQuery("#qid").val(EmQid[order]);
				}else{
					jQuery("#J-TitleTrigger").html('<h3 id="ExamTit"><br/><br/><br/>试题读取没有成功！<br/><br/><br/><br/><a href="' + backUrl + '">点击这里重试...</a><br/><br/><br/><br/><br/><br/></div>'), !1
				}
			}
		});
	}

	var tihao = EmQid[order];

	jQuery("body,html").animate({
		scrollTop: 0
	}, 10);
	var EmTmArr = EmTm.split("<br/>"),
		EmTm_T = EmTmArr[0];
		var Em_len = (EmTmArr.length-1);
	EmTm_T = EmTm_T || "";
	var EmTm_1 = EmTmArr[1],
		EmTm_2 = EmTmArr[2],
		EmTm_3 = EmTmArr[3],
		EmTm_4 = EmTmArr[4],
		EmTm_5 = EmTmArr[5],
		EmTm_6 = EmTmArr[6];
	EmTm_1 = EmTm_1 || "", EmTm_2 = EmTm_2 || "", EmTm_3 = EmTm_3 || "", EmTm_4 = EmTm_4 || "", EmTm_5 = EmTm_5 || "", EmTm_6 = EmTm_6 || "", 
	3 == EmTx && (EmTm_T += '<font color="#FF2266">[多选题]</font>'), 
	sflag == 1 && (EmTm_T += ' (题号：<span id="tihao">'+tihao+'</span>)'), 
	jQuery("#ExamTit").html("<b>" + order + ".</b>&nbsp;&nbsp;" + EmTm_T ), 
		jQuery("#ExamOptA").html(EmTm_1), 
		jQuery("#ExamOptB").html(EmTm_2), 
		jQuery("#ExamOptC").html(EmTm_3), 
		jQuery("#ExamOptD").html(EmTm_4),
		jQuery("#ExamOptE").html(EmTm_5),
		jQuery("#ExamOptF").html(EmTm_6),
		EmTp.indexOf("flv") > 0 && (EmTp = EmTp.replace(/\aq2013_/g, ""), __qv__(dhFLV(EmTp), 300, 120, document.getElementById("dhArea"))), 
		jQuery("#ExamOptB").removeClass("e"), jQuery("#ExamOptD").removeClass("e"), jQuery("#ExamOptE").removeClass("e"),jQuery("#ExamOptF").removeClass("e"),
		1 == EmTx ? 
		(jQuery("#ExamOptA").html(EmTm_1), jQuery("#ExamOptB").html(EmTm_2), jQuery("#ExamOptC").hide(), jQuery("#ExamOptD").hide(),jQuery("#ExamOptE").hide(),jQuery("#ExamOptF").hide(),jQuery("#ExamOptB").addClass("e")) : 
		
		(2 == EmTx || 3 == EmTx) && (jQuery("#ExamOptA").show(), 
			jQuery("#ExamOptB").show(), 
			( Em_len > 2 ? jQuery("#ExamOptC").show() : jQuery("#ExamOptC").hide() ), 
			( Em_len > 3 ? jQuery("#ExamOptD").show() : jQuery("#ExamOptD").hide() ), 
			(Em_len> 4 ? jQuery("#ExamOptE").show() : jQuery("#ExamOptE").hide()), 
			(Em_len> 5 ? jQuery("#ExamOptF").show() : jQuery("#ExamOptF").hide()),

			(Em_len == 2 && jQuery("#ExamOptB").addClass("e") ),
			(Em_len == 3 && jQuery("#ExamOptC").addClass("e") ),
			(Em_len == 4 && jQuery("#ExamOptD").addClass("e") ),
			(Em_len == 5 && jQuery("#ExamOptE").addClass("e") ),
			(Em_len == 6 && jQuery("#ExamOptF").addClass("e") )
		),
			jQuery("#ExamArea h5").hide(), jQuery("#ExamArea h5").html(""), 
		3 != EmTx || ExamDaSel[orderTmp] || 0 != xxms || 
		(jQuery("#ExamArea h5").show()), 
		KeyToView("View"), orderPre = order - 1, orderNext = order + 1;
	var bfb = order / ExamCount;
		bfb = 1e3 * bfb, 
		bfb = Math.round(bfb), 
		1 > bfb && (bfb = 1), 
		bfb = bfb / 10 + "%", 
		jQuery("#mkT3").attr("title", "练习进度: " + bfb), 
		jQuery("#mkT3 p em").css("width", bfb), 
		EDS = "";
		
//		if(order != '1'){
//			//记录练习到哪一题
//			var url = '/exam.php?ctl=topic&act=practice_record';
//			jQuery.ajax({
//				type : 'POST',
//				url : url,
//				data : {'order':order, 'qid':ExamID[order], 'catid':catid},
//				dataType : 'json',
//				success:function(result){
//				}
//			});
//		}

		cli_num ++;
		var now_cli = (cli_num)/10;
//		if(cli_num > 1 && parseInt( now_cli ) === now_cli ){
//			jQuery(".bg75black").show();
//			jQuery(".xuexiao_ad").show();
//			
//		}

		//if(cli_num == 10){
		//	jQuery(".bg75black").show();
		//	jQuery(".xuexiao_ad").show();
		//}
		
}
function gotoKey(a) {
	var b = ExamDaSel[orderTmp];
	if (b) return !1;
	if (1 == xxms) return !1;
	a = a.toUpperCase();
	var c = ExamTx[orderTmp];
	if (3 == c) {
		if ("OK" != a) 
			return "A" == a && (EDS.indexOf("A") >= 0 ? (EDS = EDS.replace(/A/g, ""), jQuery("#ExamOptA").removeClass("kS")) : (EDS += "A", jQuery("#ExamOptA").addClass("kS"))), 
			"B" == a && (EDS.indexOf("B") >= 0 ? (EDS = EDS.replace(/B/g, ""), jQuery("#ExamOptB").removeClass("kS")) : (EDS += "B", jQuery("#ExamOptB").addClass("kS"))), 
			"C" == a && (EDS.indexOf("C") >= 0 ? (EDS = EDS.replace(/C/g, ""), jQuery("#ExamOptC").removeClass("kS")) : (EDS += "C", jQuery("#ExamOptC").addClass("kS"))), 
			"D" == a && (EDS.indexOf("D") >= 0 ? (EDS = EDS.replace(/D/g, ""), jQuery("#ExamOptD").removeClass("kS")) : (EDS += "D", jQuery("#ExamOptD").addClass("kS"))), 
			"E" == a && (EDS.indexOf("E") >= 0 ? (EDS = EDS.replace(/E/g, ""), jQuery("#ExamOptE").removeClass("kS")) : (EDS += "E", jQuery("#ExamOptE").addClass("kS"))), 
			"F" == a && (EDS.indexOf("F") >= 0 ? (EDS = EDS.replace(/F/g, ""), jQuery("#ExamOptF").removeClass("kS")) : (EDS += "F", jQuery("#ExamOptF").addClass("kS"))),  
			EDS = formatKey(EDS), !1;
		if (a = EDS, !a) return alert("请给出答案！"), !1;
		jQuery("#ExamArea h5").hide(), jQuery("#ExamArea h5").html("")
	}
	if (ExamDaSel[orderTmp] = a, ("" == a || void 0 == a || void 0 == b) && (b = ""), "" == b) {
		szl_y += 1, ExamDa[orderTmp] == ExamDaSel[orderTmp] && (szl_x += 1);
		var d = Math.round(szl_x / szl_y * 1e3);
		jQuery("#szl").html(d / 10 + "%")
	}
	ExamDaSel[orderTmp] = '';

	KeyToView("Sel");
	var e = type + "-" + catid + "-RE",
		f = ExamBaseID[orderTmp] + "-" + ExamDa[orderTmp] + "-" + ExamDaSel[orderTmp];
	ExamDaSel[orderTmp] == ExamDa[orderTmp] ? 
		(isAuto = "Y", setExamRE("R", e, ExamBaseID[orderTmp]), setExamPlan(ExamPlanCT, f, "RC")) : 
		(isAuto = "N", setExamRE("E", e, ExamBaseID[orderTmp]), setExamPlan(ExamPlanCT, f, "EC"));
	if(1 == c || 2 == c || (3 == c && EDS)){
		//setPreOrder()
		//记录练习到哪一题
		var url = '/exam.php?ctl=topic&act=practice_record';
		jQuery.ajax({
			type : 'POST',
			url : url,
			data : {'order':orderTmp, 'qid':ExamBaseID[orderTmp], 'ExamDaSel':ExamDaSel[orderTmp], 'catid':catid, 'isright':isAuto},
			dataType : 'json',
			success:function(result){
			}
		});
	}
	
	AutoNextExam(isAuto)
}
function formatKey(a) {
	return a ? (a = a.toUpperCase(), svT = "", a.indexOf("A") >= 0 && (svT += "A"), a.indexOf("B") >= 0 && (svT += "B"), a.indexOf("C") >= 0 && (svT += "C"), a.indexOf("D") >= 0 && (svT += "D"), a.indexOf("E") >= 0 && (svT += "E"), a.indexOf("F") >= 0 && (svT += "F"), svT) : ""
}
function KeyToView(a) {
	var b = ExamDa[orderTmp];
	b = b.toUpperCase();
	var c = ExamDa[orderTmp],
		d = ExamTx[orderTmp];
	jQuery("#ExamOpt li").removeClass("kR"), 
		jQuery("#ExamOpt li").removeClass("kE"), 
		jQuery("#ExamOpt li").removeClass("kH"), 
		jQuery("#ExamOpt li").removeClass("kK"), 
		jQuery("#ExamOpt li").removeClass("kS"), 
		jQuery("#ExamOpt li").addClass("kH"), 
		b ? 3 == d ? (
		b.indexOf("A") >= 0 ? c.indexOf("A") >= 0 ? jQuery("#ExamOptA").addClass("kR") : jQuery("#ExamOptA").addClass("kE") : c.indexOf("A") >= 0 && jQuery("#ExamOptA").addClass("kK"), 
		b.indexOf("B") >= 0 ? c.indexOf("B") >= 0 ? jQuery("#ExamOptB").addClass("kR") : jQuery("#ExamOptB").addClass("kE") : c.indexOf("B") >= 0 && jQuery("#ExamOptB").addClass("kK"), 
		b.indexOf("C") >= 0 ? c.indexOf("C") >= 0 ? jQuery("#ExamOptC").addClass("kR") : jQuery("#ExamOptC").addClass("kE") : c.indexOf("C") >= 0 && jQuery("#ExamOptC").addClass("kK"), 
		b.indexOf("D") >= 0 ? c.indexOf("D") >= 0 ? jQuery("#ExamOptD").addClass("kR") : jQuery("#ExamOptD").addClass("kE") : c.indexOf("D") >= 0 && jQuery("#ExamOptD").addClass("kK"),
		b.indexOf("E") >= 0 ? c.indexOf("E") >= 0 ? jQuery("#ExamOptE").addClass("kR") : jQuery("#ExamOptE").addClass("kE") : c.indexOf("E") >= 0 && jQuery("#ExamOptE").addClass("kK"),
		b.indexOf("F") >= 0 ? c.indexOf("F") >= 0 ? jQuery("#ExamOptF").addClass("kR") : jQuery("#ExamOptF").addClass("kE") : c.indexOf("F") >= 0 && jQuery("#ExamOptF").addClass("kK")
		) : (b = b.replace("对", "A"), b = b.replace("错", "B"), c = c.replace("对", "A"), c = c.replace("错", "B"), b == c ? 
		jQuery("#ExamOpt" + b).addClass("kR") : (jQuery("#ExamOpt" + c).addClass("kK"), jQuery("#ExamOpt" + b).addClass("kE"))) : 1 == xxms && (3 == d ? (c.indexOf("A") >= 0 && jQuery("#ExamOptA").addClass("kK"), c.indexOf("B") >= 0 && jQuery("#ExamOptB").addClass("kK"), c.indexOf("C") >= 0 && jQuery("#ExamOptC").addClass("kK"), c.indexOf("D") >= 0 && jQuery("#ExamOptD").addClass("kK")) : (c = c.replace("对", "A"), c = c.replace("错", "B"), jQuery("#ExamOpt" + c).addClass("kK"))), (b || 1 == xxms) && (jQuery("#ExamNote").hide(), 
		1 == xxms ? ExamNoteView("") : "Sel" == a ? b != c && ExamNoteView("") : ExamNoteView(""))
}
function ExamNoteView(a) {
	if ("close" == a) return jQuery("#ExamNote").hide(), jQuery("#mkT52").hide(), jQuery("#mkT51").show(), !1;
	jQuery("#ENC").html("");
	var b = ExamNote[orderTmp];
	b = b.replace("N404", ""), b || (b = "暂无分析"), 
	RightKeyVal = ExamDa[orderTmp], 
	RightKeyVal = RightKeyVal.replace("对", "正确"), 
	RightKeyVal = RightKeyVal.replace("错", "错误"), 
	b = "<strong>参考答案</strong>：" + RightKeyVal + "<br/><strong>本题分析</strong>：" + b + EmNoteAD;
	if(ExamTp[orderTmp] != ''){
		b += "<br><br><img src="+ ExamTp[orderTmp] +" />";
	}
	if(ExamVideo[orderTmp] != ''){
		b += '<span class="shipinbox"><iframe src="'+ ExamVideo[orderTmp] +'" frameborder=0 "allowfullscreen"></iframe></span>';
	}
	jQuery("#ENC").html(b); 
	jQuery("#ExamNote").slideDown(200);
	jQuery("#mkT51").hide();
	jQuery("#mkT52").show(); 
	b = "";
}
function ViewExamOrderKep(a) {
	if ("0px" == jQuery("#ExamOrderKep").css("height")) {
		// jQuery("#ExamOrderKep").show(), jQuery("#ExamOrderKep").animate({
		// 	height: "100%"
		// }, 200), 
		// jQuery("#ExamOrderKep p").css("width", Math.round(.95 * jQuery(window).width()) + "px");
		jQuery("#ExamOrderKep").show(), jQuery("#ExamOrderKep").animate({
			height: "100%"
		}, 200);
		var b = jQuery("#ExamOrderKep p").width(),
			c = Math.floor(b / 60),
			d = Math.ceil(ExamCount / c),
			e = Math.ceil(orderTmp / c);
		if (Math.round(60 * d) > Math.round(jQuery(window).height() - 120)) {
			if (e > 3) var f = 60 * Math.round(e - 3);
			else var f = 0;
			jQuery("#ExamOrderKep").scrollTop(f)
		}
		var b = 61 * c,
			g = Math.floor(Math.round(jQuery(window).width() - b) / 2);
		// jQuery("#ExamOrderKep p").css({
		// 	width: b,
		// 	left: g
		// });
		var h = 61 * d;
		// h += 80, jQuery("#ExamOrderKep p").css({
		// 	height: h,
		// 	padding: "80px 0 0 0"
		// });

		for (var i = "", j = 1; ExamCount >= j; j++) {
			var k = "",
				l = "";
			orderTmp == j && (l = " h"), (k = j == 1 ? ' class=""' : ' '), i = i + "<u id='flag_"+j+"'" + k + ">" + j + "</u>"
		}
		jQuery("#ExamOrderKep p").html(i), i = "", 
		jQuery("#ExamOrderKep p").find("u").eq(Math.round(orderTmp - 1)).addClass("h"), 
		jQuery("#ExamOrderKep p u").click(function() {
			gotoExam(jQuery(this).html())
		}), jQuery("#HR p").unbind("click"), jQuery("#HR p").attr("onclick", ""), jQuery("#HR p").click(function() {
			return ViewExamOrderKep(""), !1
		}), jQuery("#HR p img").attr("src", "http://sucimg.itc.cn/sblog/j68a8588cc9dc750080f74bc942fbd1b9"), jQuery("#HL p img").hide(), jQuery("#HC h2 a").html("<!--" + jQuery("#HC h2 a").html() + "-->选题");
		
		if(ExamREs != 'null'){
			var rearr = eval(ExamREs);
			for(var myi=1; myi<=ExamCount; myi++){
				for(var myj=0; myj<rearr.length; myj++){
					if(ExamID[myi] == rearr[myj][0]){
							jQuery("#flag_"+myi).addClass('r');
					}
				}
			}
		}
		//var m = getExamPlan(ExamPlanCT, "RC") || 0,
			//n = getExamPlan(ExamPlanCT, "EC") || 0,
			//o = Math.round(ExamCount - m - n);
			//0 > o && (o = 0), i = "<p>答对 <b>" + m + "</b>　答错 <i>" + n + "</i>　未答 <u>" + o + "</u><span>清空记录</span></p>", 
			//jQuery("#ExamAnswerPlan").html(i), i = "", 
			//jQuery("#ExamAnswerPlan").fadeIn(), 
			//jQuery("#ExamAnswerPlan p span").click(function() {
			//	removeExamPlan("Tip")
			//}), 
			jQuery("#ExamOrderArea").show(),jQuery(".MaskTip").css("z-index", "9999"), jQuery("#ExamTipArea").css("z-index", "9999")
	} else {
		jQuery("#ExamOrderKep").animate({
			height: "0px"
		}, 200), jQuery("#HR p").unbind("click"), jQuery("#HR p").attr("onclick", ""), jQuery("#HR p").click(function() {
			return BackPage("/autodown/"), !1
		}), jQuery("#HR p img").attr("src", "http://sucimg.itc.cn/sblog/j0fc3a42b802d9665015fb8e372608187"), jQuery("#HL p img").show();
		jQuery("#ExamAnswerPlan").fadeOut(), jQuery("#ExamOrderArea").hide(), jQuery(".MaskTip").css("z-index", "999"), jQuery("#ExamTipArea").css("z-index", "999")
	}
}
function goExamOrder(a) {
	if (a && !isNaN(a)) {
		if (a = Math.abs(a), 1 > a || a > ExamCount) return alert("题号输入超出范围［1～" + ExamCount + "］"), jQuery("#ExamOrderV").val(""), jQuery("#ExamOrderV").focus(), !1;
		gotoExam(a), jQuery("#ExamOrderV").val(""), ViewExamOrderKep()
	}
}
//function CTJvICO() {
//	var a = "YXL" + getCTJData(kTikuID, "");
//	a.indexOf(ExamID[orderTmp]) > 0 ? (jQuery("#mkT61").hide(), jQuery("#mkT62").show()) : (jQuery("#mkT62").hide(), jQuery("#mkT61").show())
//}
//function lx_AddCTJ() {
//	AddCTJ(kTikuID, ExamID[orderTmp], ExamID[orderTmp]), CTJvICO(), ExamTip("加入错题集成功")
//}
//function lx_RemoveCTJ() {
//	try {
//		if (RemoveCTJ(kTikuID, ExamID[orderTmp], ExamID[orderTmp]), kModel.indexOf("_ctj") > 0) {
//			for (ExamDaSel[orderTmp] && (ExamDa[orderTmp] == ExamDaSel[orderTmp] ? setExamPlan(ExamPlanCT, ExamID[orderTmp], "RC", "remove") : setExamPlan(ExamPlanCT, ExamID[orderTmp], "EC", "remove")), i = orderTmp; i <= ExamCount; i++) SortID[i] = ExamBaseID[i + 1], ExamID[i] = ExamBaseID[i + 1], ExamTm[i] = "", ExamDaSel[i] = ExamDaSel[i + 1], ExamNote[i] = "", ExamBaseID[i] = ExamBaseID[i + 1];
//			if (ExamCount--, orderTmp > ExamCount && (orderTmp = ExamCount), 0 >= ExamCount) return jQuery("#ExamArea").html('<h3><br/><br/><br/>\u5f53\u524d\u5df2\u7ecf\u6ca1\u6709错题\u4e86<br/><br/><br/><br/><br/><a href="/' + kKm + '_ctj">\u70b9\u51fb\u8fd9\u91cc\u5148\u8fdb\u884c\u7ec3\u4e60...</a><br/><br/><br/><br/></h3>'), jQuery("#mkTools").html(""), !1;
//			gotoExam(orderTmp), jQuery("#ViewExamCount").html(ExamCount)
//		}
//		CTJvICO(), ExamTip("移出错题集完成")
//	} catch (a) {}
//}
function setPreOrder() {
	if (!(kModel.indexOf("_sxlx") > 0)) return !1;
	try {
		var a = "" + kModel + kCx + zid;
		setExamOrder(a, orderTmp)
	} catch (b) {}
}
function ReadPreOrder() {
	//if (!(kModel.indexOf("_sxlx") > 0)) return !1;
	//var a = "" + kModel + kCx + zid;
	//orderTval = getExamOrder(a) || "", 
	var orderTval = '';
	var url = '/exam.php?ctl=topic&act=get_practice_record';
	jQuery.ajax({
		type : 'POST',
		url : url,
		data : {'catid':catid},
		dataType : 'json',
		async: false,
		success:function(result){
			orderTval = result;
			if(orderTval && orderTval > 1){
				MaskTip("", "您上次练习到了第 <b>" + orderTval + "</b> 题，<br/>是否从上次位置开始继续练习?", "是", "否", function(){
					gotoExam(orderTval);
				}, function(){
					clearPra(catid);
				});
			} 
		}
	});
	
}

function clearPra(catid){
	var url = '/exam.php?ctl=topic&act=clear_practice_record';
	jQuery.ajax({
		type : 'POST',
		url : url,
		data : {'catid':catid},
		dataType : 'json',
		async: false,
		success:function(result){
			if(result == '1'){
				location.reload();
			}
		}
	});
}

function jxlx() {
	try {
		gotoExam(orderTval), MaskTip()
	} catch (a) {}
}

function removeExamPlan(a) {
	"Tip" == a ? MaskTip("", "是否清空答题记录?", "", "", removeExamPlan) : (RemoveExamPlan(ExamPlanCT), orderTmp = 1, setPreOrder(), ExamTip("答题记录清空完成"), setTimeout("window.location=window.location.href", 900))
}
function mkToolOut(a) {
	var b = "";
	1 == a ? (
		b += '<a id="mkT1" style="width:33%;"><img src="' + ICO_Path + 'i-11.png"><b>上一题</b></a>', 
		b += '<a id="mkT3" style="width:33%;"><p><em></em></p><i><span>123</span>/567</i></a>',
		b += '<a id="mkT2" style="width:33%;"><img src="' + ICO_Path + 'i-12.png"><b>下一题</b></a>'
		) : 
	2 == a ? (
		b += '<a id="mkT1"><img src="' + ICO_Path + 'i-11.png"><b>上一题</b></a>', 
		b += '<a id="mkT2"><img src="' + ICO_Path + 'i-12.png"><b>下一题</b></a>', 
		b += '<a id="mkT3"><p><em></em></p><i><span>123</span>/567</i></a>') : 
		(
			b += '<a id="mkT3"><p><em></em></p><i><span>123</span>/567</i></a>', 
			b += '<a id="mkT1"><img src="' + ICO_Path + 'i-11.png"><b>上一题</b></a>', 
			b += '<a id="mkT2"><img src="' + ICO_Path + 'i-12.png"><b>下一题</b></a>'), 
		jQuery("#mkTools").html(b), b = ""
}
function ExamLoadTip(a) {
	jQuery("#J-TitleTrigger").html('<h3 id="ExamTit"><br/><br/><br/>' + a + "<br/><br/><br/><br/><br/><br/></div>")
}
function ExamStart() {
	if (ectip = '没有取到符合条件的试题！<br/><br/><br/><br/><a href="' + backUrl + '">点击这里重试...</a>', kModel.indexOf("_ctj") > 0 && (ectip = '您还没有错题产生！<br/><br/><br/><br/><a href="' + TitUrl.replace("_ctj", "_sxlx") + '">点击这里答题产生错题<br/><br/>或<br/><br/>您自己手动添加题目到错题集。</a>'), !ExamCount) return ExamLoadTip(ectip), !1;
	if (!zid) {
		var a = type + "-" + catid + "_ExamCount";
		setExamCount(a, ExamCount)
	}
	jQuery("#ExamArea").html('<h3 id="ExamTit"></h3><ul id="ExamOpt"><li id="ExamOptA"></li><li id="ExamOptB"></li><li id="ExamOptC"></li><li id="ExamOptD"></li><li id="ExamOptE"></li><li id="ExamOptF"></li></ul><h5></h5><h6></h6>'),
		jQuery("#ExamOrderArea").html('<p>转到第<input type="text" name="ExamOrderV" value="" onKeyUp="if(/D/.test(this.value)){alert(\'只能输入数字\');this.value=\'\';}" id="ExamOrderV">题 <input type="button" value="确定" id="ExamOrderQ"><input type="button" value="关闭" id="ExamOrderC"></p>'), 
		mkToolOut(1), setExamDaSel(ExamBaseID, ExamPlanCT), 
		jQuery("#mkT3 i").text(ExamCount), jQuery("#mkT1").show(), 
		jQuery("#mkT2").show(), jQuery("#mkT3").show(), jQuery("#mkT41").show(), 
		jQuery("#mkT42").hide(), jQuery("#mkT42 b").addClass("hot"), jQuery("#mkT61").show(), 
		jQuery("#mkT62").hide(), jQuery("#mkT62 b").addClass("hot"), jQuery("#mkT1").click(function() {
		gotoExamPre();
//		window.location="http://www.8264.com/xuexiao/catinfo-" + catid + ".html";
	}), jQuery("#mkT2").click(function() {
		
		gotoExamNext();
	}), jQuery("#mkT41").click(function() {
		jQuery("#mkT41").hide(), jQuery("#mkT42").show(), xxms = 1, gotoExam(orderTmp), ExamTip("学习模式　开启")
	}), jQuery("#mkT42").click(function() {
		jQuery("#mkT42").hide(), jQuery("#mkT41").show(), xxms = 0, gotoExam(orderTmp), ExamTip("学习模式　关闭")
	}), jQuery("#mkT61").click(function() {
		lx_AddCTJ()
	}), jQuery("#mkT62").click(function() {
		lx_RemoveCTJ()
	}), jQuery("#mkT3").click(function() {
		ViewExamOrderKep("")
	}), jQuery("#ExamOrderQ").click(function() {
		jQuery("#ExamOrderV").val() ? goExamOrder(jQuery("#ExamOrderV").val()) : jQuery("#ExamOrderV").focus()
	}), jQuery("#ExamOrderC").click(function() {
		ViewExamOrderKep("")
	}), jQuery("#ExamOrderKep").click(function() {
		ViewExamOrderKep("")
	}), jQuery("#ExamOrderKep").html('<p class="fcc"></p>'), 
		jQuery("#ExamOrderKep").hide(), 
		gotoExam(1), 
		LoadSuccess = "Y", 
		jQuery(".Content").hide()
}
function chkStart() {
	ExamCountY = "Y" + ExamCount, "Y" != ExamCountY && (ExamStart(), window.clearInterval(chkES))
}
var ExamPlanCT = kCx + "_" + kModel + "_" + zid,
	orderTmp = 1,
	orderPre = 0,
	orderNext = 0,
	xxms = 0,
	szl_x = 0,
	szl_y = 0,
	EDS = "",
	EmNoteAD = EmNoteAD || "",
	orderTval = "";

var cli_num = 0;

	//清空所有的localstorage
//	localStorage.clear();

//	setTimeout("ReadPreOrder()", 500);
var ExamCount = ExamCount || "";
ExamLoadTip("试题读取中...");
var chkES = self.setInterval(chkStart, 100);