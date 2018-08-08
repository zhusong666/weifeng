/**
 * 退换货申请 Last Update:2012-7-11
 */
ec.pkg("ec.member.exchange");
ec.load("ajax", {
	loadType : "lazy"
});
ec.load("jquery.movebar");
ec.member.exchange.pageNumber = 1;
//Tab切换
ec.member.exchange.catelogType = 1;
ec.member.exchange.isLive = 1;
ec.ready(function() {
	$("#li-exchange").addClass("current");
	$("#pathTitle").html("我的退换货");
	ec.member.exchange.tpl = new ec.template(gid('exchange-tpl').value);
	//小导航滑动
	$("#ec-tab").navMove({
		boxClass:"ec-tab-arrow"
	});
});
ec.member.exchange.catelog = function(dom, type) {
	if(ec.member.exchange.catelogType == type) return;
	$(dom).parent().addClass("current").siblings().removeClass("current");
	ec.member.exchange.catelogType = type;
	var page = {
		"pageNumber" : 1,
		"pageSize" : 10
	};
	ec.member.exchange.load(page);
};
ec.member.exchange.cateLive = function(dom, type) {
	if(ec.member.exchange.isLive == type) return;
	$(dom).parent().addClass("current").siblings().removeClass("current");
	ec.member.exchange.isLive = type;
	var page = {
		"pageNumber" : 1,
		"pageSize" : 10
	};
	ec.member.exchange.load(page);
};
ec.member.exchange.load = function(page) {
	var url = (ec.member.exchange.catelogType == 1)
				? '/member/exchange.json'
				: '/member/refunds.json';
	url += ec.member.exchange.isLive == 0 ? "?isLive=0" : "?isLive=1";
	 
	new ec.ajax().get({
		url : url,
		data : {
			"pageNumber" : page.pageNumber
		},
		timeout : 10000,
		timeoutFunction : function() {
			alert("读取超时，请重试！");
		},
		beforeSendFunction : function(){
			ec.ui.loading.show({modal : false});
		},
		afterSendFunction  : ec.ui.loading.hide,
		successFunction : function(json) {
			if (!json.success) {
				ec.showError(json);
				return;
			}
			var title='', html='<div class="list-group-empty">您暂时没有相关记录。</div>';
			if(ec.member.exchange.catelogType == 1){
				title = ec.member.exchange.tpl.parse("exchangeTitle");
				if(json.exchangeRecord.length > 0){
					html = ec.member.exchange.tpl.parse("exchangeList", json.exchangeRecord);
				}
			} else {
				title = ec.member.exchange.tpl.parse("refundTitle");
				if(json.refunds.length > 0){
					html = ec.member.exchange.tpl.parse("orderRefund", json.refunds);
				}
			}
			$("#list-group-title").html(title);
			$("#list-group").html(html);
			//ec.member.exchange.renderPage(json.page);
			ec.ui.scrollTo("#list-group-title");
		}
	});
};

ec.member.exchange.renderPage = function(page) {
	$("#list-pager").pager({
		pageNumber : page.pageNumber,
		pageCount : page.totalPage,
		pageSize : 1,
		text : {
			first : "|&lt;",
			pre : "&lt",
			next : "&gt;",
			last : "&gt;|"
		},
		item : [ "first", "pre", "qpage", "next", "last", "quickPager" ],// 显示样式
		callBack : ec.member.exchange.load
	});
};

ec.member.exchange.cancel = function(dom, code) {
	if (ec.ui.confirm(dom, "您确认要取消该记录吗？")) {
		new ec.ajax().submit({
			url : "/member/exchange/cancel.json",
			data : {"rmaCode" : code},
			timeout : 10000,
			timeoutFunction : function() {
				alert("读取超时，请重试！");
			},
			beforeSendFunction : function(){
				ec.ui.loading.show({modal : false});
			},
			afterSendFunction  : ec.ui.loading.hide,
			successFunction : function(json) {
				if (!json.success) {
					ec.showError(json);
					return;
				}				
				$("#status-"+code+" p").text("作废");
				$(dom).closest("td").html("取消申请中");
				return;
			}
		});
	}
	return;
};