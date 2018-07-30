<!DOCTYPE html>
<!-- saved from url=(0039)https://www.vmall.com/order/confirmcart -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="Content-Language" content="zh-cn">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<script src="./js/push.js"></script><script>

var domainYY   = '//yy.vmall.com';
var domainRush = '//buy.vmall.com';

var domainEdit = 'https://customization.vmall.com';

var domainMain = 'https://www.vmall.com';
var domainWap = 'https://m.vmall.com';
var domainCart = '//cart.vmall.com';
var domainRemark = '//remark.vmall.com';
var domainRms = 'https://rms.vmall.com';
var domainShoppingConfig = '//addr.vmall.com';
var imagePath = 'https://res.vmallres.com/20180720/images';
var domainAccount = '//www.vmall.com';
var isUseAccount = 'false';
var upBindPhoneAddr = 'https://hwid1.vmall.com/oauth2/userCenter/bindAccount/bindMobileAccount_1.jsp?lang=zh-cn&amp;themeName=cloudTheme&amp;reqClientType=26';
var dominWapRecycle ='https://coop.aihuishou.com/huawei?app=false';
var domainCds = 'https://cds.vmall.com';
var domainIps = 'https://cashier.vmall.com/cashier/voucher';
var scriptPath = 'https://res9.vmallres.com/20180720/js';
var domainAms ='https://act.vmall.com';
var domainUc ='https://member.vmall.com';
var openApiDomain='https://openapi.vmall.com';
var addressFrontRegex = '[A-Za-z0-9０-９ａ-ｚＡ-Ｚ一-龥.?!,。？！，、；：＇＂（）［］｛｝;:&#039;&#034;()\\[\\]{}──·····．《》〈〉＜＞.《》〈〉&lt;&gt;·—＿＿＿＿＊____*□=／\/▲●～~……→＠＃@#￥％＆＊%&amp;*\\\\——－＝＼　 -]{1,}';
var easeBuyDomain = 'https://easy.vmall.com';
var scriptPaths = 'https://res10.vmallres.com/20180720/js';


var pmsHttpDomain = '//product.vmall.com/';
</script>
<script>
(function(){
	try
	{
		cookieGet=function(a){var f=null;if(document.cookie&&document.cookie!=""){var d=document.cookie.split(";");for(var c=0;c<d.length;c++){var b=(d[c]||"").replace(/^(\s|\u00A0)+|(\s|\u00A0)+$/g,"");if(b.substring(0,a.length+1)==(a+"=")){var e=function(i){i=i.replace(/\+/g," ");var h='()<>@,;:\\"/[]?={}';for(var g=0;g<h.length;g++){if(i.indexOf(h.charAt(g))!=-1){if(i.startWith('"')){i=i.substring(1)}if(i.endWith('"')){i=i.substring(0,i.length-1)}break}}return decodeURIComponent(i)};f=e(b.substring(a.length+1));break}}}return f};
		var uri = location.href;
			//增加产品详情页判断 
			var prodReg = /\/\d+\.html/;
			var isProDetail = prodReg.test(uri);
			var isHonor = uri.indexOf(".com/honor") >0;
			var isHuawei = uri.indexOf(".com/huawei")>0;
			var isRecyle = uri.indexOf(".com/recycle")>0;
			var isNotice = uri.indexOf(".com/notice")>0;		
			var isList = uri.indexOf(".com/list")>0; //列表页
			if (uri == domainMain || uri == (domainMain + "/index.html")
					|| uri == (domainMain + "/") || isProDetail|| isHonor || isHuawei||isRecyle|| isNotice||isList) {
				if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i
						.test(navigator.userAgent)) {
					var redirectWap = cookieGet("redirectWap");
					if (!redirectWap == "1" && !isProDetail) {
						if (isHonor) {
							window.location.href = domainWap + "/honor";
						} else if (isHuawei) {
							window.location.href = domainWap + "/huawei";
						} else if (isRecyle) {
							window.location.href = dominWapRecycle;
						} else if (isNotice) {
							var wapUri = domainWap
							+ uri.substring(uri.indexOf("/notice"));
							window.location.href = wapUri;
						} else if (isList) {
							var wapUri = domainWap + "/category/detail"
			                   + uri.substring(uri.indexOf("/list")+5)
			                   + uri.substring(uri.indexOf("/list")+5);
			                window.location.href = wapUri;
                        } else {
							window.location.href = domainWap;
						}
					} else if (!redirectWap == "1" && isProDetail) {
						var wapUri = domainWap
								+ uri.substring(uri.indexOf("/product"));
						window.location.href = wapUri;
					}
				}
			}
	}catch (err){}
})();
</script>
<title>确认订单华为商城</title>
<link rel="shortcut icon" href="https://www.vmall.com/favicon.ico">
<link href="./css/ec.core.base.min.css" rel="stylesheet" type="text/css">

<link href="./css/main.min.css" rel="stylesheet" type="text/css">
<script src="./js/jsapi.js" namespace="ec"></script><!--[if lte IE 6]><script>ol.isIE6=true;</script><![endif]--><!--[if IE 7]><script>ol.isIE7=true;</script><![endif]--><!--[if IE 8]><script>ol.isIE8=true;</script><![endif]-->
<script src="./js/jquery-1.4.4.min.js"></script>
<script src="./js/ec.core.js"></script> 
<script src="./js/ec.business.min.js"></script> 
<script src="./js/base.min.js"></script><script id="jsapi_loader0" loadtype="insert" type="text/javascript" src="./js/box-min.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader0');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader0 fail!');} return; }ol._setLoadStatus("ec.box/box-min.js","complete");})();</script>
<script src="./js/slider.min.js"></script>
<script src="./js/swiper.min.js"></script>
<!--[if lt IE 9]><script src="https://res9.vmallres.com/20180720/js/common/html5shiv.js"></script> <![endif]-->
</head>

<body class="wide order">
<style type="text/css">.btn-line-primary i,.category .category-info i,.footer-warrant-area .footer-warrant-logo span,.goods-rolling .grid-btn span,.home-channel-list li.s3 .icon-notice span,.hungBar-feedback i,.hungBar-feedback:after,.hungBar-for-help i,.hungBar-for-help:after,.hungBar-olcs-web i,.hungBar-olcs-web:after,.hungBar-top i,.i-mall-huaban .p-img span,.i-mall-prompt .user-info .user-info-detail a:before,.minicart-pro-item .p-choose i,.minicart-pro-item .p-tags:before,.search-bar .search-bar-form .button,.shortcut .s-dropdown .icon-minicart:before,.slogan li i{background:url(https://res.vmallres.com/20180720/images/echannel/icon-common.png)}.search-bar .search-bar-form .button{background-position:0 -21px}.minicart-pro-item .p-tags:before{background-position:-28px -99px}.goods-rolling .grid-btn.btn-prev span{background-position:-101px -1px}.goods-rolling .grid-btn.btn-next span{background-position:-112px -1px}.hungBar-top i{background-position:-123px -1px}.hungBar-feedback i{background-position:-151px -1px}.hungBar-for-help i{background-position:-166px -1px}.hungBar-olcs-web i{background-position:-136px -1px}.btn-line-primary i{background-position:-101px -23px}.slogan .s1 i{background-position:0 -151px}.slogan .s2 i{background-position:-94px -151px}.slogan .s3 i{background-position:-141px -151px}.slogan .s4 i{background-position:-47px -151px}.hungBar-for-help:after{background-position:-80px -199px}.hungBar-feedback:after{background-position:-40px -199px}.hungBar-olcs-web:after{background-position:0 -199px}.category .category-info i{background-position:-9px -214px}.category-index .category-list li.active i,.category-index .category-list li.active i{background-position:-2px -214px}.i-mall-huaban .p-img span{width:50px;height:50px;display:block}.i-mall-huaban .p-img span.img01{background-position:-50px 0}.i-mall-huaban .p-img span.img02{background-position:-50px -50px}.i-mall-huaban .p-img span.img03{background-position:-50px -100px}.footer-warrant-area .footer-warrant-logo span{width:79px;height:16px;display:block;background-position:-101px -45px}.home-channel-list li.s3 .icon-notice span{width:31px;height:13px;display:block;position:relative;top:17px;margin:0 auto;background-position:-17px -214px}.home-channel-list li.s2 li .p-img{height:40px;margin:0 auto;overflow:hidden;position:relative;width:40px}.home-channel-list li.s2 li .p-img img{position:absolute;width:auto;height:auto}.home-channel-list li.s2 li .p-img .img0{left:0}.home-channel-list li.s2 li .p-img .img1{left:-40px}.home-channel-list li.s2 li .p-img .img2{left:-80px}.home-channel-list li.s2 li .p-img .img3{left:-120px}.home-channel-list li.s2 li .p-img .img4{left:-160px}.home-channel-list li.s2 li .p-img .img5{left:-200px}.home-channel-list li.s3 .p-info li a span{display:inline-block;height:20px;margin-right:6px;overflow:hidden;position:relative;top:6px;width:20px}.home-channel-list li.s3 .p-info li a img{width:auto;height:auto;margin:0;position:absolute}.home-channel-list li.s3 .p-info li a .img0{left:-240px}.home-channel-list li.s3 .p-info li a .img1{left:-260px}.home-channel-list li.s3 .p-info li a .img2{left:-280px}</style>
<div class="top-banner" id="top-banner-block"></div>
<img src="./images/icon-common.png" class="hide">
<!-- 20130605-qq-彩贝-start -->
<div class="qq-caibei-bar hide" id="caibeiMsg">
    <div class="layout">
        <div class="qq-caibei-bar-tips" id="HeadShow"></div>
        <div class="qq-caibei-bar-userInfo" id="ShowMsg"></div>
    </div>
</div>
<!-- 20130605-qq-彩贝-end -->

	<div class="shortcut">
    <div class="layout">
        <div class="s-sub">
            <ul>
                <li><a href="https://www.vmall.com/" onclick="pushHeaderMsg(&#39;首页&#39;,&#39;https://www.vmall.com&#39;)">首页</a></li>
                <li><a href="http://consumer.huawei.com/cn/" target="_blank" onclick="pushHeaderMsg(&#39;华为官网&#39;,&#39;http://consumer.huawei.com/cn/&#39;)">华为官网</a></li>
                <li><a href="http://www.honor.cn/" target="_blank" onclick="pushHeaderMsg(&#39;荣耀官网&#39;,&#39;http://www.honor.cn/&#39;)">荣耀官网</a></li>
                <li><a href="http://club.huawei.com/" target="_blank" onclick="pushHeaderMsg(&#39;花粉俱乐部&#39;,&#39;http://club.huawei.com&#39;)">花粉俱乐部</a></li>
                <li><a href="https://www.vmall.com/help/index.html" onclick="pushHeaderMsg(&#39;帮助中心&#39;,&#39;https://www.vmall.com/help/index.html&#39;)">帮助中心</a></li>
                <li><a href="https://www.vmall.com/priority" rel="nofollow" onclick="pushHeaderMsg(&#39;V码(优购码)&#39;,&#39;https://www.vmall.com/priority&#39;)">V码(优购码)</a></li>
                <li><a href="https://www.vmall.com/company" target="_blank" onclick="pushHeaderMsg(&#39;企业购&#39;,&#39;/company&#39;)">企业购</a></li>
                <li class="s-hwep hide" id="li-enterprise-preferential"></li>
                <li><a href="javascript:;" onclick="showSelectRegion();pushHeaderMsg(&#39;Select Region&#39;,&#39;&#39;)">Select Region</a></li>
                <li class="downloadApp">
				<div class="s-dropdown">
					<div class="h">
						<a class="icon-dropdown">下载APP</a>
				 	</div>
				 		<div class="b">
				 			<div class="dropdown-more">
				 				<div class="code">
                                    <a class="code" href="https://www.vmall.com/appdownload" target="_blank" onclick="pushHeaderMsg(&#39;下载客户端img&#39;,&#39;https://www.vmall.com/appdownload&#39;)">
                                        
                                    </a>
                                    <p>扫一扫，<a href="https://www.vmall.com/appdownload" target="_blank" onclick="pushHeaderMsg(&#39;下载客户端&#39;,&#39;https://www.vmall.com/appdownload&#39;)">下载客户端</a></p>
                                </div>
				 			</div>
				 		</div>
				</div>                
                </li>
                <li>
                    <div class="s-dropdown">
                        <div class="h">
                            <a class="icon-dropdown">更多精彩</a>
                        </div>
                        <div class="b">
                            <div class="dropdown-more">
                               
                                    <dt><a href="http://emui.huawei.com/cn/" target="_blank" onclick="pushHeaderMsg(&#39;EMUI&#39;,&#39;http://emui.huawei.com/cn/&#39;)">EMUI</a></dt>
                                    <dt><a href="http://appstore.huawei.com/" target="_blank" onclick="pushHeaderMsg(&#39;应用市场&#39;,&#39;http://appstore.huawei.com/&#39;)">应用市场</a></dt>
                                    <dt><a href="http://cloud.huawei.com/" target="_blank" onclick="pushHeaderMsg(&#39;华为终端云空间&#39;,&#39;http://cloud.huawei.com&#39;)">华为终端云空间</a></dt>
                                    <dt><a href="http://developer.huawei.com/" target="_blank" onclick="pushHeaderMsg(&#39;开发者联盟&#39;,&#39;http://developer.huawei.com/&#39;)">开发者联盟</a></dt>
                               
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        
        <div class="s-main s-main-no-minicart">
            <img src="./images/bg71.png" class="hide">
            <ul>
                <li id="unlogin_status" style="display: none;">
                    <div id="top_unlogin" class="header-toolbar hide">
                        <!-- 2017-02-15-头部-工具栏-焦点为header-toolbar-item增加ClassName:hover -->
                        <div class="header-toolbar-item">
                            <div class="i-login">
                                <div class="h">
                                    <div class="">
                                            <script>document.write('<a id="top-index-loginUrl" href="https://hwid1.vmall.com/CAS/remoteLogin?loginChannel=26000000&reqClientType=26&lang=zh-cn&loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Facaslogin%3Furl%3D'+encodeURIComponent(encodeURIComponent(window.location.href))+'" rel="nofollow" onclick="pushLoginMsg(\'登录\',\'\')">请登录</a>');</script><a id="top-index-loginUrl" href="https://hwid1.vmall.com/CAS/remoteLogin?loginChannel=26000000&amp;reqClientType=26&amp;lang=zh-cn&amp;loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&amp;service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Facaslogin%3Furl%3Dhttps%253A%252F%252Fwww.vmall.com%252Forder%252Fconfirmcart" rel="nofollow" onclick="pushLoginMsg(&#39;登录&#39;,&#39;&#39;)">请登录</a>
                                            <a href="https://hwid1.vmall.com/CAS/portal/userRegister/regbyphone.html?service=https://www.vmall.com/account/caslogin&amp;loginChannel=26000000&amp;reqClientType=26&amp;lang=zh-cn" rel="nofollow" onclick="pushLoginMsg(&#39;注册&#39;,&#39;&#39;)">&nbsp;&nbsp;注册</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                
                <li id="login_status" class="hide" style="display: list-item;">
                    <div id="top_login" class="header-toolbar">
                        <div class="s-dropdown">
                            <div class="h h-wide" id="up_loginName-hover">
                                <a class="icon-dropdown" href="https://www.vmall.com/member?t=1532950496816" rel="nofollow" target="_blank" onclick="pushLoginMsg(&#39;已登录&#39;,&#39;用户名&#39;)"><span id="up_loginName">only&nbsp;time</span></a>&nbsp;
                            </div>
                            <div class="b">
                                <!-- 2017-06-19-个人信息-start -->
                                <div class="dropdown-i-mall">
                                    <div class="i-mall-prompt clearfix">
                                        <div class="user-head fl">
                                            <div class="user-canvas "> 
                                                <span id="user-vip-level-tips" class="icon-vip-level-0"></span>
                                                <div class="canvas-bg">
                                                    <div class="canvas-left"><div id="canvas-left" style="transform: rotateZ(-125deg); background: -webkit-gradient(linear, 0 100%, 0 0, from(rgb(240, 92, 32)), to(rgb(245, 133, 85)));"></div></div>
                                                    <div class="canvas-right"><div id="canvas-right" style="transform: rotateZ(-180deg);"></div></div>
                                                </div>
                                            </div>
											<img src="./images/bg71.png" class="user-img-shade">
                                            <p class="user-img">
                                                <a href="https://www.vmall.com/member?t=15329504968161532950497583" rel="nofollow" timetype="timestamp" target="_blank" onclick="pushLoginMsg(&#39;已登录&#39;,&#39;头像&#39;)">
                                                    <img id="customerPic" src="./images/1afe9e5e47c8faa437b47c141355c0df42e1d093b6e7f0e0fcb3c61a9ecc3425.jpg" alt="默认头像" imgpath="https://res.vmallres.com/20180720/images">
                                                </a>
                                            </p>
                                        </div>
                                        <div class="user-info fl">
                                             <a href="https://www.vmall.com/member?t=1532950496816timestamp" rel="nofollow" target="_blank" onclick="pushLoginMsg(&#39;已登录&#39;,&#39;用户名&#39;)">
                                                <div class="user-info-name" id="up_loginName_info">only&nbsp;time</div>
                                             </a>
                                             <div class="user-info-detail clearfix" id="vip-info">
                                                <a id="authentication_y" class="icon-realname hide" style="display: none;">已实名</a>
                                                <a id="authentication_n" href="https://www.vmall.com/authmember/accesstoken" rel="nofollow" class="icon-realname disabled hide" onclick="pushLoginMsg(&#39;已登录&#39;,&#39;未实名&#39;)" style="display: inline;">未实名</a>
                                                <a class="icon-mail" href="https://www.vmall.com/member/msg?t=15329504968161532950497583" rel="nofollow" timetype="timestamp" onclick="pushLoginMsg(&#39;已登录&#39;,&#39;站内信&#39;)">站内信  <span id="top-newMsgCount" class="">1</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                     <div class="i-mall-uc">
                                        <dl class="clearfix">
                                            <dt><span class="fl">我的订单</span><a class="fr" href="https://www.vmall.com/member/order?t=15329504968161532950497583" timetype="timestamp" onclick="pushLoginMsg(&#39;已登录&#39;,&#39;更多&#39;)">更多&gt;</a></dt>
                                        </dl>
                                        <div class="i-mall-uc-con"> 
                                            <dl class="clearfix">
                                                <dd><a href="https://www.vmall.com/member/order?t=15329504968161532950497583&amp;tab=unpaid" timetype="timestamp" onclick="pushLoginMsg(&#39;已登录&#39;,&#39;待支付&#39;)">待支付</a></dd>
                                                <dd><a href="https://www.vmall.com/member/order?t=15329504968161532950497583&amp;tab=send" timetype="timestamp" onclick="pushLoginMsg(&#39;已登录&#39;,&#39;待收货&#39;)">待收货</a></dd>
                                                <dd><a href="https://www.vmall.com/member/order?t=15329504968161532950497583&amp;tab=nocomment" timetype="timestamp" onclick="pushLoginMsg(&#39;已登录&#39;,&#39;待评价&#39;)">待评价</a></dd>
                                                <dd><a href="https://www.vmall.com/member/exchange?t=15329504968161532950497583" timetype="timestamp" onclick="pushLoginMsg(&#39;已登录&#39;,&#39;退换货&#39;)">退换货</a></dd>
                                                <dd><a href="https://www.vmall.com/member/recycle/index/aihuishou?t=15329504968161532950497583" timetype="timestamp" onclick="pushLoginMsg(&#39;已登录&#39;,&#39;旧机回收&#39;)">旧机回收</a></dd>
                                            </dl>
                                        </div>
                                    </div>
                                    
                                    <div class="i-mall-huaban">
                                       <ul class="clearfix">
                                            <li>
                                                <p class="p-img">
                                                    <a href="https://www.vmall.com/member/newpoint?t=1532950496816" target="_blank" id="point" onclick="pushLoginMsg(&#39;已登录&#39;,&#39;积分&#39;)">
                                                        <span class="img01"></span>
                                                    </a>
                                                </p>
                                                <p class="p-dec">积分</p>
                                                <p class="p-price"><span id="userPointBalance">505</span>分</p>
                                            </li>
                                            <li>
                                                <p class="p-img">
                                                    <a href="https://www.vmall.com/member/coupon?t=1532950496816" rel="nofollow" target="_blank" onclick="pushLoginMsg(&#39;已登录&#39;,&#39;优惠券&#39;)">
                                                        <span class="img02"></span>
                                                    </a>
                                                </p>
                                                <p class="p-dec">优惠券</p>
                                                <p class="p-price"><span id="top-couponCount">4</span>张</p>
                                            </li>
                                            <li>
                                                <p class="p-img">
                                                    <a href="https://www.vmall.com/member/balance?t=1532950496816" rel="nofollow" target="_blank" onclick="pushLoginMsg(&#39;已登录&#39;,&#39;代金券&#39;)">
                                                        <span class="img03"></span>
                                                    </a>
                                                </p>
                                                <p class="p-dec">代金券</p>
                                                <p class="p-price"><span id="balanceAmount">0.00</span>元</p>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="i-out">
                                        <a href="https://www.vmall.com/account/logout" rel="nofollow">退出登录</a>
                                    </div>
                                </div>
                                <!-- 2017-06-19-个人信息-end -->
                            </div>
                        </div>
                    </div>
                </li>
                
                <li><a href="https://www.vmall.com/member/order?t=15329504968171532950497583" timetype="timestamp" onclick="pushMyOrderMsg()">我的订单</a></li>
                
            </ul>
        </div>
    </div>
</div>
<!-- 2017-06-19-捷径栏-end -->

<textarea id="selectRegion-tips" style="display: none;">&lt;!-- 20151105-全球语言弹出框-width:910px-start --&gt;
&lt;div class="box-content"&gt;&lt;div class="box-lan-choose"&gt;&lt;dl&gt;&lt;dt&gt;Asia Pacific&lt;/dt&gt;&lt;dd class="box-button"&gt;&lt;a class="box-choose" href="http://www.vmall.hk/"&gt;香港&lt;/a&gt;&lt;a class="box-choose" href="https://store.hihonor.com/in/?utm_source=vmall&amp;utm_medium=navigation&amp;utm_campaign=daily"&gt;India&lt;/a&gt;&lt;a class="box-choose" href="http://www.vmall.my/"&gt;Malaysia&lt;/a&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;dl class="box-lan-choose-area"&gt;&lt;dt&gt;The United States&lt;/dt&gt;&lt;dd class="box-button"&gt;&lt;a class="box-choose" href="https://store.hihonor.com/us"&gt;United States&lt;/a&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;dl class="box-lan-choose-area"&gt;&lt;dt&gt;Europe&lt;/dt&gt;&lt;dd class="box-button"&gt;&lt;a class="box-choose" href="http://www.vmall.ru/"&gt;Россия&lt;/a&gt;&lt;a class="box-choose" href="https://store.hihonor.com/fr"&gt;France&lt;/a&gt;&lt;a class="box-choose" href="https://store.hihonor.com/de"&gt;Deutschland&lt;/a&gt;&lt;a class="box-choose" href="https://store.hihonor.com/it"&gt;Italia&lt;/a&gt;&lt;a class="box-choose" href="https://store.hihonor.com/es"&gt;España&lt;/a&gt;&lt;a class="box-choose" href="https://store.hihonor.com/uk"&gt;UK&lt;/a&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;dl class="box-lan-choose-area"&gt;&lt;dt&gt;Middle East&lt;/dt&gt;&lt;dd class="box-button"&gt;&lt;a href="http://www.vmall.hk/" target="_self" textvalue="Saudi Arabia"&gt;&lt;/a&gt;&lt;a class="box-choose" href="http://www.honorarabia.com/uae/"&gt;United Arab Emirates&lt;/a&gt;&lt;a class="box-choose" href="http://www.honorarabia.com/ksa/"&gt;Saudi Arabia&lt;/a&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;/div&gt;&lt;/div&gt;
&lt;!-- 20151105-全球语言弹出框-width:910px-end --&gt;
</textarea>
<input type="hidden" value="" id="context">
<input type="hidden" value="https://member.vmall.com" id="domainUc">
<input type="hidden" value="vmall_index" id="vmall_index">

<script type="text/javascript">
$(".downloadApp").hover(function(){
	console.log($(this));
	if(!$(this).find(".QRcode").length){
		$(this).find("a.code").append('<img src="https://res.vmallres.com/appdownload/home/qrcode_vmall_new_app01.png?20170221" class="QRcode">')
	}
});
checkIEVersion();
ec.mediaPath = "https://res.vmallres.com/pimages/";
//document.write('<script src="/account/status?'+(new Date()).getTime()+'"></s' + 'cript>');
</script>

<textarea id="micro-cart-tpl" class="hide">&lt;!--#macro microCartList data--&gt;
&lt;!--#list data.itemInfos as item--&gt;
		&lt;!--#var classChoose='';--&gt;
		
      
        
			
			
            &lt;!--#var skuId='#'+item.skuId;--&gt;
            
           
            
            &lt;!--#if (item.subItems &amp;&amp; item.subItems.length &gt; 0)--&gt;
            &lt;!--#list item.subItems as sub--&gt;
 				&lt;!--#if (classChoose)--&gt;           
   					&lt;!--#var  classChoose='false';--&gt;
   				&lt;!--/#if--&gt;         
           		&lt;!--#if (sub.itemType == 'S1' || sub.itemType == 'S6')--&gt;
        				&lt;!--#var  classChoose='true';--&gt;
            	&lt;!--/#if--&gt;
           		&lt;!--#if (sub.itemType == 'G' )--&gt;
        				&lt;!--#var gGift='true';--&gt;
            	&lt;!--/#if--&gt;
            	&lt;!--#if (sub.itemType == 'J' )--&gt;
        				&lt;!--#var jBuy='true';--&gt;
            	&lt;!--/#if--&gt;
	        &lt;!--/#list--&gt;
	       &lt;!--/#if--&gt;
	       
	        &lt;!--#if (classChoose == 'true' )--&gt;
        	    &lt;li class="minicart-pro-item minicart-pro-item-suit &lt;!--#if ( (item.show))--&gt;disabled&lt;!--/#if--&gt;"&gt;
            &lt;!--#else--&gt;
                &lt;li class="minicart-pro-item &lt;!--#if ( (item.show)) --&gt;disabled&lt;!--/#if--&gt;"&gt;	
            &lt;!--/#if--&gt;
            
            &lt;div class="pro-info clearfix"&gt;
           	&lt;!--#if (item.itemType=='B')--&gt;	
           			
                    
                     &lt;!--#if (item.invalidCauseReason == 0) --&gt;
                        &lt;div class="p-choose"&gt;&lt;i class="&lt;!--#if (item.selected)--&gt;icon-choose&lt;!--#else--&gt;icon-choose-normal&lt;!--/#if--&gt;" id="icon-choose-{#item.itemkd}" onclick="ec.minicart.click(this)" value="{#item.itemCode}" type="{#item.itemType}" data-itemId="{#item.itemId}"&gt;&lt;/i&gt;&lt;/div&gt;
                        &lt;input class="hide" id="checkbox-{#item.itemkd}" name="bundleIds" value="{#item.itemCode}" data-itemId="{#item.itemId}" type="checkbox" &lt;!--#if (item.selected)--&gt;checked="checked"&lt;!--/#if--&gt; /&gt;
                        &lt;input class="hide" id="quantity-{#item.itemCode}" value="{#item.qty}" data-type="{#item.itemType}" type="text" &lt;!--#if (item.selected)--&gt;checked="checked"&lt;!--/#if--&gt; /&gt;
                    &lt;!--#elseif ((item.invalidCauseReason == 7)&amp;&amp;( !item.numblimit   )&amp;&amp;(!item.show) )--&gt;
                         &lt;div class="p-choose"&gt;&lt;i class="&lt;!--#if (item.selected)--&gt;icon-choose&lt;!--#else--&gt;icon-choose-normal&lt;!--/#if--&gt;" id="icon-choose-{#item.itemkd}" onclick="ec.minicart.click(this)" value="{#item.itemCode}" type="{#item.itemType}" data-itemId="{#item.itemId}"&gt;&lt;/i&gt;&lt;/div&gt;
                        &lt;input class="hide" id="checkbox-{#item.itemkd}" name="bundleIds" value="{#item.itemCode}" data-itemId="{#item.itemId}" type="checkbox" &lt;!--#if (item.selected)--&gt;checked="checked"&lt;!--/#if--&gt; /&gt;
                        &lt;input class="hide" id="quantity-{#item.itemCode}" value="{#item.qty}" data-type="{#item.itemType}" type="text" &lt;!--#if (item.selected)--&gt;checked="checked"&lt;!--/#if--&gt; /&gt;
                    &lt;!--#else--&gt;
                        &lt;div class="p-choose"&gt;&lt;i class="icon-choose-normal" id="icon-choose-{#item.itemCode}"&gt;&lt;/i&gt;&lt;/div&gt;
                        &lt;input class="hide" id="checkbox-{#item.itemCode}" name="bundleIds" value="{#item.itemCode}" type="checkbox" /&gt;
                        &lt;input class="hide" id="quantity-{#item.itemCode}" value="{#item.qty}" data-type="{#item.itemType}" type="text" /&gt;
                    &lt;!--/#if--&gt;
                    
                    &lt;div class="p-img"&gt;
                        &lt;a href="/product/{#item.photoId}.html{#skuId}" title="" target="_blank" onclick = "pushCartProMsg('{#skuId}','/product/{#item.photoId}.html{#skuId}','{#item_index+1}')"&gt;
                            &lt;img src="https://res.vmallres.com/pimages/{#item.photoPath}78_78_{#item.photoName}" alt="{#item.itemName}" /&gt;
                        &lt;/a&gt;
                    &lt;/div&gt;
                    
                    &lt;div class="p-name"&gt;
                        &lt;a href="/product/{#item.photoId}.html{#skuId}" title="{#item.itemName}" target="_blank" onclick = "pushCartProMsg('{#skuId}','/product/{#item.photoId}.html{#skuId}','{#item_index+1}')"&gt;{#item.itemName}&lt;/a&gt;
                    &lt;/div&gt;
           	
           				
            &lt;!--#else--&gt;	
                    &lt;!--#if ((item.invalidCauseReason == 0) &amp;&amp;(!item.bnumblimit) &amp;&amp;(!item.numblimit)) --&gt;
                    	
                        &lt;div class="p-choose"&gt;
                        &lt;!--#if (item.itemType == "P") --&gt;
                        &lt;i class="&lt;!--#if (item.selected) --&gt;icon-choose&lt;!--#else--&gt;icon-choose-normal&lt;!--/#if--&gt;" id="icon-choose-{#item.itemkd}" onclick="ec.minicart.click(this)" value="{#item.skuId}" type="{#item.itemType}" data-itemId="{#item.itemId}"&gt;&lt;/i&gt;
                         &lt;input class="hide" name="skuIds" id="checkbox-{#item.itemkd}" value="{#item.skuId}" data-scode="{#item.itemCode}" data-itemId="{#item.itemId}" type="checkbox" &lt;!--#if (item.selected)--&gt;checked="checked"&lt;!--/#if--&gt;&gt;
            		  &lt;!--#else--&gt;
                        &lt;i class="&lt;!--#if (item.selected) --&gt;icon-choose&lt;!--#else--&gt;icon-choose-normal&lt;!--/#if--&gt;" id="icon-choose-{#item.itemkd}" onclick="ec.minicart.click(this)" value="{#item.skuId}" type="{#item.itemType}" data-itemId="{#item.itemId}"&gt;&lt;/i&gt;
                        &lt;input class="hide" name="skuIds" id="checkbox-{#item.itemkd}" value="{#item.skuId}" data-scode="{#item.itemCode}" data-itemId="{#item.itemId}" type="checkbox" &lt;!--#if (item.selected)--&gt;checked="checked"&lt;!--/#if--&gt;&gt;
                        &lt;!--/#if--&gt;
                        &lt;/div&gt;
                        
                        &lt;input class="hide" id="quantity-{#item.skuId}" value="{#item.qty}" data-type="{#item.itemType}" type="text" &lt;!--#if (item.selected)--&gt;checked="checked"&lt;!--/#if--&gt; /&gt;
                     
                     &lt;!--#elseif ((item.invalidCauseReason == 7)&amp;&amp;( !item.numblimit  )&amp;&amp;(!item.show) )--&gt;
                     
                                  &lt;div class="p-choose"&gt;
                        &lt;!--#if (item.itemType == "P") --&gt;
                        &lt;i class="&lt;!--#if (item.selected) --&gt;icon-choose&lt;!--#else--&gt;icon-choose-normal&lt;!--/#if--&gt;" id="icon-choose-{#item.itemkd}" onclick="ec.minicart.click(this)" value="{#item.skuId}" type="{#item.itemType}" data-itemId="{#item.itemId}"&gt;&lt;/i&gt;
                         &lt;input class="hide" name="skuIds" id="checkbox-{#item.itemkd}" value="{#item.skuId}" data-scode="{#item.itemCode}" data-itemId="{#item.itemId}" type="checkbox" &lt;!--#if (item.selected)--&gt;checked="checked"&lt;!--/#if--&gt;&gt;
            		  &lt;!--#else--&gt;
                        &lt;i class="&lt;!--#if (item.selected) --&gt;icon-choose&lt;!--#else--&gt;icon-choose-normal&lt;!--/#if--&gt;" id="icon-choose-{#item.itemkd}" onclick="ec.minicart.click(this)" value="{#item.skuId}" type="{#item.itemType}" data-itemId="{#item.itemId}"&gt;&lt;/i&gt;
                        &lt;input class="hide" name="skuIds" id="checkbox-{#item.itemkd}" value="{#item.skuId}" data-scode="{#item.itemCode}" data-itemId="{#item.itemId}" type="checkbox" &lt;!--#if (item.selected)--&gt;checked="checked"&lt;!--/#if--&gt;&gt;
                        &lt;!--/#if--&gt;
                        &lt;/div&gt;
                        
                        &lt;input class="hide" id="quantity-{#item.skuId}" value="{#item.qty}" data-type="{#item.itemType}" type="text" &lt;!--#if (item.selected)--&gt;checked="checked"&lt;!--/#if--&gt; /&gt;
                  
                      
                    &lt;!--#else--&gt;
                        &lt;div class="p-choose"&gt;&lt;i class="icon-choose-normal" id="icon-choose-{#item.skuId}"&gt;&lt;/i&gt;&lt;/div&gt;
                        &lt;input class="hide" name="skuIds" id="checkbox-{#item.skuId}" value="{#item.skuId}" type="checkbox" /&gt;
                        &lt;input class="hide" id="quantity-{#item.skuId}" value="{#item.qty}" data-type="{#item.itemType}" type="text" /&gt;
                    &lt;!--/#if--&gt;
                    
        			&lt;!--#if ((item.attrsMap)&amp;&amp;(item.attrsMap.package_code)) --&gt;
        			 &lt;input class="hide" name="newBundle" id="bundle-{#item.itemkd}" value="{#item.attrsMap.package_code}" data-scode="&lt;!--#list item.subItems as sku--&gt;&lt;!--#if ((sku.itemType=='B')||(sku.itemType=='P'))--&gt;{#sku.itemCode},&lt;!--/#if--&gt;&lt;!--/#list--&gt;" type="checkbox" /&gt;
        			&lt;!--/#if--&gt;
        			
        			
                 	 &lt;div class="p-img"&gt;
                        &lt;a href="/product/{#item.productId}.html{#skuId}" title="" target="_blank" onclick = "pushCartProMsg('{#skuId}','/product/{#item.productId}.html{#skuId}','{#item_index+1}')"&gt;
                            &lt;img src="https://res.vmallres.com/pimages/{#item.photoPath}78_78_{#item.photoName}" alt="{#item.itemName}" /&gt;
                        &lt;/a&gt;
                    &lt;/div&gt;
                    
                    &lt;div class="p-name"&gt;
                        &lt;a href="/product/{#item.productId}.html{#skuId}" title="{#item.itemName}" target="_blank" onclick = "pushCartProMsg('{#skuId}','/product/{#item.productId}.html{#skuId}','{#item_index+1}')"&gt;{#item.itemName}&lt;/a&gt;
                    &lt;/div&gt;
                 &lt;!--/#if--&gt;   
                    &lt;div class="p-dec"&gt;
                        &lt;span class="p-slogan"&gt;
                           
                        &lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class="p-status"&gt;
                        
                        &lt;!--#if (gGift == "true") --&gt;
                        &lt;!--#list item.subItems as gif--&gt;
                         &lt;!--#if (gif.itemType=="G")--&gt;
                        &lt;input type="checkbox" name="giftId" class="hide" value="{#gif.itemCode}" /&gt;
                        &lt;!--/#if--&gt;
                        &lt;!--/#list--&gt;
                        &lt;!--/#if--&gt;
                        
                      	&lt;!--#if (   (item.showP)&amp;&amp;( (item.invalidCauseReason==0) ||  ( (item.invalidCauseReason==7)  &amp;&amp; (  !item.numblimit  )  )  )    ) --&gt;
 						&lt;div class="p-tags"&gt;此商品已失效&lt;/div&gt;              
                        &lt;!--#else--&gt;
                        &lt;!--#if (item.invalidCauseReason == 1) --&gt;
                        &lt;div class="p-tags"&gt;此商品已失效&lt;/div&gt;
                        &lt;!--#elseif (item.invalidCauseReason == 2) --&gt;
                        &lt;div class="p-tags"&gt;此商品已失效 &lt;/div&gt;
                        &lt;!--#elseif (item.invalidCauseReason == 3) --&gt;
                        &lt;div class="p-tags"&gt;此商品已失效 &lt;/div&gt;
                        &lt;!--#elseif (item.invalidCauseReason == 4) --&gt;
                        &lt;div class="p-tags"&gt;此商品已失效 &lt;/div&gt;
                        &lt;!--#elseif (item.invalidCauseReason == 5) --&gt;
                        &lt;div class="p-tags"&gt;此商品暂不可购买 &lt;/div&gt;
                        &lt;!--#elseif (item.invalidCauseReason == 6) --&gt;
                        &lt;div class="p-tags"&gt;此商品暂时缺货 &lt;/div&gt;
                        &lt;!--#elseif (item.invalidCauseReason == 7) --&gt;
                        &lt;div class="p-tags"&gt;此商品限购{#item.invalidCauseLeftValue}件&lt;/div&gt;
                        &lt;!--#elseif (item.invalidCauseReason == 8) --&gt;
                        &lt;div class="p-tags"&gt;此商品已失效 &lt;/div&gt;
                         &lt;!--#elseif (item.invalidCauseReason == 9) --&gt;
                        &lt;div class="p-tags"&gt;此商品不在本渠道销售&lt;/div&gt;
                         &lt;!--#elseif (item.invalidCauseReason == 10) --&gt;
                        &lt;div class="p-tags"&gt;此商品已失效 &lt;/div&gt;
                        &lt;!--/#if--&gt;
                        &lt;!--/#if--&gt;
                        
                        &lt;div class="p-price"&gt;
                            &lt;!--#if (item.salePrice != item.originalPrice) --&gt;&lt;s&gt;¥&nbsp;{#item.originalPrice.toFixed(2)}&lt;/s&gt;&nbsp;&nbsp;&lt;!--/#if--&gt;
                            &lt;b&gt;¥&nbsp;{#item.salePrice.toFixed(2)}&lt;/b&gt;&lt;strong&gt;&lt;em&gt;x&lt;/em&gt;&lt;span&gt;{#item.qty}&lt;/span&gt;&lt;/strong&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            
					&lt;!--#if ((item.itemType=='B')||(item.itemType=='P'))--&gt;	
					&lt;div class="p-pack &lt;!--#if (item.show) --&gt;disabled&lt;!--/#if--&gt;"&gt;
                    &lt;span class="p-mini-tag-suit"&gt;套餐&lt;/span&gt;
                    &lt;a href="javascript:;" title="&lt;!--#list item.subItems as sku--&gt;&lt;!--#if ((sku.itemType=='B')||(sku.itemType=='P'))--&gt;{#sku.itemName}x{#sku.qty}&lt;!--/#if--&gt;&lt;!--/#list--&gt;"&gt;
                        &lt;!--#list item.subItems as sku--&gt;
                        &lt;!--#if ((sku.itemType=='B')||(sku.itemType=='P'))--&gt;
                        &lt;span&gt;
                        {#sku.itemName}&lt;em&gt;x{#sku.qty}&lt;/em&gt;
						&lt;/span&gt;
						&lt;!--/#if--&gt;	
                        &lt;!--/#list--&gt;
                    	&lt;/a&gt;
                	&lt;/div&gt;
					&lt;!--/#if--&gt;	
            		
            	
            	
            
				&lt;!--#if ((classChoose=='true') || (jBuy=='true'))--&gt;
                &lt;div class="pro-other clearfix" id={#classChoose}&gt;
                    &lt;ol&gt;            
					    &lt;!--#list item.subItems as sub--&gt;
                        &lt;!--#if (sub.itemType == "S1") --&gt;
                        
                        &lt;li class="&lt;!--#if (sub.invalidCauseReason != 0) --&gt;disabled&lt;!--/#if--&gt;"&gt;
                            &lt;div class="p-title"&gt;
                                &lt;span class="p-mini-tag-long"&gt;延保&lt;/span&gt;{#sub.itemName}
                            &lt;/div&gt;
                            &lt;input class="hide" name="extendIds" value="{#sub.skuId}" data-scode="{#sub.itemCode}" type="checkbox" data-id="{#sub.itemId}" /&gt;
                            &lt;div class="p-price"&gt;&lt;b&gt;¥&nbsp;{#sub.salePrice.toFixed(2)}&lt;/b&gt;&lt;strong&gt;&lt;em&gt;x&lt;/em&gt;&lt;span&gt;{#item.qty}&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;
                        &lt;/li&gt;
                       
                        &lt;!--/#if--&gt;
                        &lt;!--/#list--&gt;         
	         	
	         			  &lt;!--#list item.subItems as sub--&gt;
                        &lt;!--#if (sub.itemType == "S6") --&gt;
                       
                        &lt;li class="&lt;!--#if (sub.invalidCauseReason != 0) --&gt;disabled&lt;!--/#if--&gt;"&gt;
                            &lt;div class="p-title"&gt;
                                &lt;span class="p-mini-tag-extend"&gt;碎屏保&lt;/span&gt;{#sub.itemName}
                            &lt;/div&gt;
                            &lt;input class="hide" name="accidentIds" value="{#sub.skuId}" data-scode="{#sub.itemCode}" data-id="{#sub.itemId}" type="checkbox" /&gt;
                            &lt;div class="p-price"&gt;&lt;b&gt;¥&nbsp;{#sub.salePrice.toFixed(2)}&lt;/b&gt;&lt;strong&gt;&lt;em&gt;x&lt;/em&gt;&lt;span&gt;{#item.qty}&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;
                        &lt;/li&gt;
                        
                        &lt;!--/#if--&gt;
                        &lt;!--/#list--&gt;
            			
            			&lt;!--#if (jBuy=="true")--&gt;
                        &lt;input type="hidden" id="preferIds_{#item.skuId}" 
                        value="&lt;!--#list item.subItems as ea--&gt;&lt;!--#if (ea.itemType == "J") --&gt;{#ea.itemCode},&lt;!--/#if--&gt;&lt;!--/#list--&gt;" 
                        skuids="&lt;!--#list item.subItems as ea--&gt;&lt;!--#if (ea.itemType == "J") --&gt;{#ea.skuId},&lt;!--/#if--&gt;&lt;!--/#list--&gt;" 
                        newId="&lt;!--#list item.subItems as ea--&gt;&lt;!--#if (ea.itemType == "J") --&gt;{#ea.itemId},&lt;!--/#if--&gt;&lt;!--/#list--&gt;" /&gt;
                        &lt;!--/#if--&gt;
                        
                        &lt;!--#list item.subItems as sub--&gt;
                         &lt;!--#if (sub.itemType == "J") --&gt;
                         
                        &lt;li class="&lt;!--#if ((sub.Jlost)||(sub.invalidCauseReason!=0)) --&gt;disabled&lt;!--/#if--&gt;"&gt;
                            &lt;div class="p-title p-add"&gt;
                                &lt;span class="p-mini-tag-extend"&gt;加价购&lt;/span&gt;{#sub.itemName}
                            &lt;/div&gt;
                            &lt;div class="p-price"&gt;
                                &lt;!--#if (sub.salePrice != sub.originalPrice) --&gt;&lt;s&gt;¥&nbsp;{#sub.originalPrice.toFixed(2)}&lt;/s&gt;&nbsp;&nbsp;&lt;!--/#if--&gt;
                                &lt;b&gt;¥&nbsp;{#sub.salePrice.toFixed(2)}&lt;/b&gt;&lt;strong&gt;&lt;em&gt;x&lt;/em&gt;&lt;span&gt;{#sub.qty}&lt;/span&gt;&lt;/strong&gt;
                            &lt;/div&gt;
                        &lt;/li&gt;
                        
                         &lt;!--/#if--&gt;
                        &lt;!--/#list--&gt;
            
      				&lt;/ol&gt;
      			&lt;/div&gt;	      
				&lt;!--/#if--&gt;     
				
				&lt;!--#if (gGift=="true")--&gt;
                &lt;input type="hidden" id="gift_sbomCodes_{#item.skuId}" value="&lt;!--#list item.subItems as gift--&gt;&lt;!--#if (gift.itemType == "G") --&gt;{#gift.skuId},&lt;!--/#if--&gt;&lt;!--/#list--&gt;" /&gt;
                &lt;div class="p-pack"&gt;
                    &lt;span class="p-mini-tag-suit"&gt;配&lt;/span&gt;
                    &lt;a href="javascript:;" style="cursor: default;" title="&lt;!--#list item.subItems as gift--&gt;&lt;!--#if (gift.itemType == "G") --&gt;{#gift.itemName}x{#gift.qty*item.qty},&lt;!--/#if--&gt;&lt;!--/#list--&gt;"&gt;
                        &lt;!--#list item.subItems as gift--&gt;&lt;!--#if (gift.itemType == "G") --&gt;
                        &lt;span class="&lt;!--#if (gift.invalidCauseReason != 0) --&gt;disabled&lt;!--/#if--&gt;"&gt;
                        {#gift.itemName}&lt;em&gt;x{#gift.qty*item.qty}&lt;/em&gt;
                        &lt;/span&gt; 
						&lt;!--/#if--&gt;					
                        &lt;!--/#list--&gt;
                    &lt;/a&gt;
                &lt;/div&gt;
                &lt;!--/#if--&gt;
                     
            &lt;/li&gt;        
		
		
		  
       
      &lt;!--/#list--&gt;
&lt;!--/#macro--&gt;
</textarea>

<textarea class="hide" id="ec-binding-phone">    &lt;div id="ec-binding-phone-1" class="ec-binding-phone-box hide"&gt;
        &lt;!-- 20141011-绑定安全手机号提示-start --&gt;
        &lt;div class="safetyPhone-prompt-area"&gt;
            &lt;div class="h"&gt;
                &lt;i&gt;&lt;/i&gt;
            &lt;/div&gt;
            &lt;div class="b"&gt;
                &lt;p&gt;为了给您提供更好的服务，建议您将登录的邮箱帐号进行手机号码绑定，绑定后邮箱帐号和绑定的手机号码都可以作为登录帐号，&lt;em style="font-color:red;"&gt;不绑定将不能提交订单。&lt;/em&gt;&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="box-custom-button"&gt;
            &lt;a class="box-button-style-3" href="javascript:;" id="ec-binding-phone-url-1"&gt;&lt;span&gt;立即绑定&lt;/span&gt;&lt;/a&gt;&lt;/a&gt;
        &lt;/div&gt;
        &lt;!-- 20141011-绑定安全手机号提示-end --&gt;
    &lt;/div&gt;
    &lt;div id="ec-binding-phone-2" class="ec-binding-phone-box hide"&gt;
        &lt;!-- 20141424-绑定安全手机号提示-start --&gt;
        &lt;div class="safetyPhone-prompt-area"&gt;
            &lt;div class="h"&gt;
                &lt;i&gt;&lt;/i&gt;
            &lt;/div&gt;
            &lt;div class="b"&gt;
                &lt;p&gt;请您在新打开的页面中完成绑定安全手机号操作。&lt;/p&gt;
                &lt;p&gt;完成绑定后请根据您的情况点击下面的按钮。&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="box-custom-button"&gt;
            &lt;a class="box-button-style-3" href="javascript:;" onclick="ec.binding.resetShow()"&gt;&lt;span&gt;绑定成功&lt;/span&gt;&lt;/a&gt;&lt;a class="box-change box-button-style-3" href="javascript:;" id="ec-binding-phone-url-2"&gt;&lt;span&gt;重新绑定&lt;/span&gt;&lt;/a&gt;
        &lt;/div&gt;
        &lt;!-- 20141424-绑定安全手机号提示-end --&gt;
    &lt;/div&gt;
    &lt;div id="ec-binding-phone-3" class="ec-binding-phone-box hide"&gt;
        &lt;!-- 20141424-安全手机号绑定提示失败-start --&gt;
        &lt;div class="box-prompt-error-area"&gt;
            &lt;div class="h"&gt;
                &lt;i&gt;&lt;/i&gt;
            &lt;/div&gt;
            &lt;div class="b"&gt;
                &lt;p class="tal f12"&gt;对不起，您未成功绑定手机号。&lt;/p&gt;
                &lt;p class="tal f12 black"&gt;为了您在商城正常购物、保护您的权益，请您绑定一个手机号码以享受华为商城的所有服务。&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="box-custom-button"&gt;
            &lt;a href="javascript:;" class="box-button-style-3" onclick="ec.binding.showOk()" id="ec-binding-phone-url-3" &gt;&lt;span&gt;立即绑定&lt;/span&gt;&lt;/a&gt;
        &lt;/div&gt;
        &lt;!-- 20141424-安全手机号绑定提示失败-end --&gt;
    &lt;/div&gt;
    &lt;div id="ec-binding-phone-4" class="ec-binding-phone-box hide"&gt;
        &lt;!-- 20150824-手机号绑定未绑定-start --&gt;
        &lt;div class="safetyPhone-prompt-area"&gt;
            &lt;div class="h"&gt;
                &lt;i&gt;&lt;/i&gt;
            &lt;/div&gt;
            &lt;div class="b"&gt;
                &lt;p class="tal f12"&gt;为了给您提供更好的服务，建议您将登录的邮箱帐号进行手机号码绑定，绑定后邮箱帐号和绑定的手机号码都可以作为登录帐号；&lt;em style="font-color:red;"&gt;自&lt;/em&gt;&lt;em id="bindEndDate4State4" style="font-color:red;"&gt;&lt;/em&gt;&lt;em style="font-color:red;"&gt;号起，若不绑定将不能提交订单。&lt;/em&gt;&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div&gt;&nbsp;&lt;/div&gt;
        &lt;div class="box-custom-button"&gt;
            &lt;a class="box-change box-button-style-3" href="javascript:;" id="ec-binding-phone-url-4"&gt;&lt;span&gt;立即绑定&lt;/span&gt;&lt;/a&gt;
            &lt;a class="box-button-style-1" href="javascript:;" onclick="ec.binding.closeState4();"&gt;&lt;span&gt;下次再说&lt;/span&gt;&lt;/a&gt;
        &lt;/div&gt;
        &lt;!-- 20150824-安全手机号绑定提示失败-end --&gt;
    &lt;/div&gt;
    &lt;div id="ec-binding-phone-5" class="ec-binding-phone-box hide"&gt;
        &lt;!-- 20141424-安全手机号绑定提示失败-start --&gt;
        &lt;div class="box-prompt-error-area"&gt;
            &lt;div class="h"&gt;
                &lt;i&gt;&lt;/i&gt;
            &lt;/div&gt;
            &lt;div class="a"&gt;
                &lt;p class="tal f12"&gt;您输入的手机已被注册，您可以选择使用手机号重新登录或者重新绑定手机！&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div&gt;&nbsp;&lt;/div&gt;
        &lt;div class="box-custom-button"&gt;
            &lt;a class="box-button-style-3" href="https://www.vmall.com/account/login" id="ec-binding-phone-reLogin-5"&gt;&lt;span&gt;重新登录&lt;/span&gt;&lt;/a&gt;')
            &lt;a class="box-change box-button-style-3" href="javascript:;" id="ec-binding-phone-url-5"&gt;&lt;span&gt;重新绑定&lt;/span&gt;&lt;/a&gt;
        &lt;/div&gt;
        &lt;!-- 20141424-安全手机号绑定提示失败-end --&gt;
    &lt;/div&gt;
</textarea><div class="header order-header">
    <div class="layout">
        <div class="left"> 
            <!-- 2017-06-19-logo-文字-start -->
            <div class="logo logo-word">
                <a href="https://www.vmall.com/" title="华为商城"><img src="./images/20170703105852645577.png" alt="华为商城"></a>
                <span>确认订单</span>
            </div>
            <!-- 2017-06-19-logo-文字-end -->
        </div>
        
        <div class="right">
            <!--头部 -->
            <!-- <div class="order-header">
                <div class="fr"> -->
                        <!--步骤条-三步骤 -->
                        <div class="progress-area progress-area-3">
                            <!--我的购物车 -->
                            <div id="progress-cart" class="progress-sc-area hide">我的购物车</div>
                            <!--核对订单 -->
                            <div id="progress-confirm" class="progress-co-area hide" style="display: block;">填写核对订单信息</div>
                            <!--成功提交订单 -->
                            <div id="progress-submit" class="progress-sso-area hide">成功提交订单</div>
                        </div>
                <!-- </div>
            </div> -->
            <script>ec.code.addService({showService : true , showTools : true , live800Url4Web : "http://robotim.vmall.com/live800/chatClient/chatbox.jsp?companyID=8922&configID=10&location=B_002&chatfrom=web&channelType=Vmall%e5%95%86%e5%9f%8e%e7%94%b5%e8%84%91%e7%ab%af"});</script>
            
            <textarea class="hide" id="ec-binding-phone">                &lt;div id="ec-binding-phone-1" class="ec-binding-phone-box hide"&gt;
                    &lt;!-- 20141011-绑定安全手机号提示-start --&gt;
                    &lt;div class="safetyPhone-prompt-area"&gt;
                        &lt;div class="h"&gt;
                            &lt;i&gt;&lt;/i&gt;
                        &lt;/div&gt;
                        &lt;div class="b"&gt;
                            &lt;p&gt;为了给您提供更好的服务，建议您将登录的邮箱帐号进行手机号码绑定，绑定后邮箱帐号和绑定的手机号码都可以作为登录帐号，&lt;em style="font-color:red;"&gt;不绑定将不能提交订单。&lt;/em&gt;&lt;/p&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="box-custom-button"&gt;
                        &lt;a class="box-button-style-3" href="javascript:;" id="ec-binding-phone-url-1"&gt;&lt;span&gt;立即绑定&lt;/span&gt;&lt;/a&gt;&lt;/a&gt;
                    &lt;/div&gt;
                    &lt;!-- 20141011-绑定安全手机号提示-end --&gt;
                &lt;/div&gt;
                &lt;div id="ec-binding-phone-2" class="ec-binding-phone-box hide"&gt;
                    &lt;!-- 20141424-绑定安全手机号提示-start --&gt;
                    &lt;div class="safetyPhone-prompt-area"&gt;
                        &lt;div class="h"&gt;
                            &lt;i&gt;&lt;/i&gt;
                        &lt;/div&gt;
                        &lt;div class="b"&gt;
                            &lt;p&gt;请您在新打开的页面中完成绑定安全手机号操作。&lt;/p&gt;
                            &lt;p&gt;完成绑定后请根据您的情况点击下面的按钮。&lt;/p&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="box-custom-button"&gt;
                        &lt;a class="box-button-style-3" href="javascript:;" onclick="ec.binding.resetShow()"&gt;&lt;span&gt;绑定成功&lt;/span&gt;&lt;/a&gt;&lt;a class="box-change box-button-style-3" href="javascript:;" target="_blank" id="ec-binding-phone-url-2"&gt;&lt;span&gt;重新绑定&lt;/span&gt;&lt;/a&gt;
                    &lt;/div&gt;
                    &lt;!-- 20141424-绑定安全手机号提示-end --&gt;
                &lt;/div&gt;
                &lt;div id="ec-binding-phone-3" class="ec-binding-phone-box hide"&gt;
                    &lt;!-- 20141424-安全手机号绑定提示失败-start --&gt;
                    &lt;div class="box-prompt-error-area"&gt;
                        &lt;div class="h"&gt;
                            &lt;i&gt;&lt;/i&gt;
                        &lt;/div&gt;
                        &lt;div class="b"&gt;
                            &lt;p class="tal f12"&gt;对不起，您未成功绑定手机号。&lt;/p&gt;
                            &lt;p class="tal f12 black"&gt;为了您在商城正常购物、保护您的权益，请您绑定一个手机号码以享受华为商城的所有服务。&lt;/p&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="box-custom-button"&gt;
                        &lt;a href="javascript:;" class="box-button-style-3" onclick="ec.binding.showOk()" id="ec-binding-phone-url-3" &gt;&lt;span&gt;立即绑定&lt;/span&gt;&lt;/a&gt;
                    &lt;/div&gt;
                    &lt;!-- 20141424-安全手机号绑定提示失败-end --&gt;
                &lt;/div&gt;
                &lt;div id="ec-binding-phone-4" class="ec-binding-phone-box hide"&gt;
                    &lt;!-- 20150824-手机号绑定未绑定-start --&gt;
                    &lt;div class="safetyPhone-prompt-area"&gt;
                        &lt;div class="h"&gt;
                            &lt;i&gt;&lt;/i&gt;
                        &lt;/div&gt;
                        &lt;div class="b"&gt;
                            &lt;p class="tal f12"&gt;为了给您提供更好的服务，建议您将登录的邮箱帐号进行手机号码绑定，绑定后邮箱帐号和绑定的手机号码都可以作为登录帐号；&lt;em style="font-color:red;"&gt;自&lt;/em&gt;&lt;em id="bindEndDate4State4" style="font-color:red;"&gt;&lt;/em&gt;&lt;em style="font-color:red;"&gt;号起，若不绑定将不能提交订单。&lt;/em&gt;&lt;/p&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div&gt;&nbsp;&lt;/div&gt;
                    &lt;div class="box-custom-button"&gt;
                        &lt;a class="box-change box-button-style-3" href="javascript:;" id="ec-binding-phone-url-4"&gt;&lt;span&gt;立即绑定&lt;/span&gt;&lt;/a&gt;
                        &lt;a class="box-button-style-1" href="javascript:;" onclick="ec.binding.closeState4();"&gt;&lt;span&gt;下次再说&lt;/span&gt;&lt;/a&gt;
                    &lt;/div&gt;
                    &lt;!-- 20150824-安全手机号绑定提示失败-end --&gt;
                &lt;/div&gt;
                &lt;div id="ec-binding-phone-5" class="ec-binding-phone-box hide"&gt;
                    &lt;!-- 20141424-安全手机号绑定提示失败-start --&gt;
                    &lt;div class="box-prompt-error-area"&gt;
                        &lt;div class="h"&gt;
                            &lt;i&gt;&lt;/i&gt;
                        &lt;/div&gt;
                        &lt;div class="a"&gt;
                            &lt;p class="tal f12"&gt;您输入的手机已被注册，你可以选择使用手机号重新登录或者重新绑定手机！&lt;/p&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div&gt;&nbsp;&lt;/div&gt;
                    &lt;div class="box-custom-button"&gt;
                        &lt;a class="box-button-style-3" href="https://www.vmall.com/account/login" id="ec-binding-phone-reLogin-5"&gt;&lt;span&gt;重新登录&lt;/span&gt;&lt;/a&gt;')
                        &lt;a class="box-change box-button-style-3" href="javascript:;" id="ec-binding-phone-url-5"&gt;&lt;span&gt;重新绑定&lt;/span&gt;&lt;/a&gt;
                    &lt;/div&gt;
                    &lt;!-- 20141424-安全手机号绑定提示失败-end --&gt;
                &lt;/div&gt;
            </textarea>
        </div>
    </div>
</div>
<script type="text/javascript">$("#progress-confirm").show();</script>
<script type="text/javascript">window._to = { start: new Date() };</script>
<script type="text/javascript">document.body.className = "wide order";</script>

<div class="layout order">
<!--订单-表单 -->
<div>
     <!--20170717-全局提示-start -->
        <!--20170717-全局提示-end -->
    
    <div class="hr-20" id="order-address-hr"></div>
    
    <!-- 20170717-订单表单-地址-start -->
    <div class="order-detail-area order-address" id="order-address-mod">
        <div class="h">
                        收货地址
            <a id="upAddAddressButton" href="javascript:;" onclick="ec.order.myAddress.add()" class="address-add-btn" style="display: none;">新增收货地址</a>
        </div>
        <div class="order-address-list" id="order-address-list">
            <ul class="clearfix"><li id="myAddress-58693559" index="58693559" class="current"><div class="address-supplement hide"><a href="javascript:;" onclick="ec.order.myAddress.edit(58693559)" class="address-add-btn">完善街道信息</a></div><span id="defaultAddress-58693559" class="address-status">默认地址</span><div class="address-main" onclick="ec.order.myAddress.select(this);"><p class="clearfix"><b id="consignee-name-58693559">北京</b><span id="consignee-tel-58693559">17600084798</span></p><div class="address-detail" id="address-detail-58693559">北京&nbsp;北京&nbsp;丰台区&nbsp;丰台街道&nbsp;丰台区</div></div><input type="hidden" id="needL4Addr" value="false"><input type="hidden" id="needModify" value="false"><input type="hidden" name="streetName" value="丰台街道"><input type="hidden" name="myAddress" id="input-myAddress58693559" data-province="3510" data-city="6921" data-district="6926" data-id="58693559" value="58693559"><div class="address-sub"><a class="address-edit" href="javascript:;" onclick="ec.order.myAddress.edit(58693559)">编辑</a><a class="address-del" href="javascript:;" onclick="ec.order.myAddress.del(this,58693559)">删除</a><a id="setAddress-58693559" class="address-default hide" href="javascript:;" onclick="ec.order.myAddress.setDetault(58693559)">设为默认</a></div></li><li id="address-empty"><div class="address-empty"><a href="javascript:;" class="address-add-btn" onclick="ec.order.myAddress.add()">新增收货地址</a></div></li></ul>
        </div>
        <div class="f">
            <div id="address-more">
            <a href="javascript:;" class="address-expand hide" style="display: none;">查看全部地址</a><!--收缩class="address-shrink"-->
            <a href="javascript:;" class="address-shrink hide" style="display: none;">收起地址</a>
            </div>
        </div>
           <input name="orderDistrict" id="order-district" type="hidden">
    </div>
    <!--20170717-订单表单-地址-end -->
    
    <div class="hr-10"></div>

     <!--20170717-订单表单-发票信息-start -->
    <div class="order-detail-area order-invoice hide">
        <input type="hidden" id="huaweiTerminalName" name="huaweiTerminalName" value="华为终端（东莞）有限公司">
            <input type="hidden" id="invoiceLimitCorp-0" value="华为终端(东莞)有限公司">
            <input type="hidden" id="invoiceLimitCorp-1" value="华为终端(东莞)有限公司">
            <input type="hidden" id="invoiceLimitCorp-2" value="华为 终端(东莞)有限公司">
            <input type="hidden" id="invoiceLimitCorp-3" value="华为终端 (东莞)有限公司">
            <input type="hidden" id="invoiceLimitCorp-4" value="华为 终端(东莞)有限 公司">
            <input type="hidden" id="invoiceLimitCorp-5" value="华为终端(东莞)有限 公司">
            <input type="hidden" id="invoiceLimitCorp-6" value="华为终端 (东莞) 有限公司">
            <input type="hidden" id="invoiceLimitCorp-7" value="华为 终端 (东莞)有限公司">
            <input type="hidden" id="invoiceLimitCorp-8" value="华为终端(东莞) 有限公司">
            <input type="hidden" id="invoiceLimitCorp-9" value="华为终端东莞有限公司">
            <input type="hidden" id="invoiceLimitCorp-10" value="华为终端  (东莞) 有限公司">
            <input type="hidden" id="invoiceLimitCorp-11" value="华为终端《东莞》有限公司">
            <input type="hidden" id="invoiceLimitCorp-12" value="华为终端&lt;东莞&gt;有限公司">
        <input type="hidden" id="isProxyOrder" name="isProxyOrder" value="false">
        <input name="shopCode" id="order-shopCode" type="hidden" value="">
        <input type="hidden" id="invoiceCorpMsg" value="华为商城销售实体为“华为终端（东莞）有限公司”，购方主体不能与销方相同，请更换您的发票抬头">
    </div>
    <!--20170717-订单表单-发票信息-end -->


    <form id="order-confirm-form" action="https://www.vmall.com/order/createcart" autocomplete="off" method="post">
        <input name="consigneeAddressId" id="order-address" type="hidden">
        <input name="orderReq" type="hidden" value="[{&quot;itemId&quot;:&quot;2601010014004&quot;,&quot;id&quot;:&quot;dux.S0.2601010014004&quot;,&quot;qty&quot;:1,&quot;itemType&quot;:&quot;S0&quot;}]">
        <input name="deliveryMethod" id="order-deliveryMethod" type="hidden" value="1">
        <input name="couponCode" id="order-couponCode" type="hidden">
        <input type="hidden" name="_sf" value="7906106f999a2a4aa0e1059562497d1c">
        <input name="usePointFlag" id="usePointFlag" type="hidden" value="false">
        <input name="usePetalFlag" id="usePetalFlag" type="hidden" value="false">
            <input name="state" id="order-state" type="hidden" value="1">

            <input name="orderType" id="orderType" type="hidden" value="0">
        <input name="shopCodes" id="order-shopCodes" type="hidden" value="VMALL-HUAWEIDEVICE|">
		        <input name="effectiveListVMALL-HUAWEIDEVICE" id="order-effectiveListVMALL-HUAWEIDEVICE" type="hidden" value="1|3|50">
		        <input name="uneffectiveListVMALL-HUAWEIDEVICE" id="order-uneffectiveListVMALL-HUAWEIDEVICE" type="hidden" value="">
		        <input class="order-titleType" name="titleTypeVMALL-HUAWEIDEVICE" id="order-titleTypeVMALL-HUAWEIDEVICE" type="hidden" value="50">
		        <input name="invoiceTitleVMALL-HUAWEIDEVICE" id="order-invoiceTitleVMALL-HUAWEIDEVICE" type="hidden" value="个人">
		        <input name="taxpayerIdentityNumVMALL-HUAWEIDEVICE" id="order-taxpayerIdentityNumVMALL-HUAWEIDEVICE" type="hidden" value="">
		        <input name="vatInvoiceJsonVMALL-HUAWEIDEVICE" id="order-vatInvoiceJsonVMALL-HUAWEIDEVICE" type="hidden">
		        <input name="vatInvoiceDeliveryJsonVMALL-HUAWEIDEVICE" id="order-vatInvoiceDeliveryJsonVMALL-HUAWEIDEVICE" type="hidden">
    </form>
</div>

    <div class="hr-10"></div>
    <div class="order-detail-area">
     
    <div class="order-detail clearfix" id="order-pro-list">
    
        <div class="order-list">
	        
            <div class="order-list-detail">
                <div class="order-main clearfix ">
                    <a style="cursor:default" ahref="/product/570379791.html#2601010014004" class="p-img" target="_blank">
                        <img alt="荣耀V10 全网通标配版 4GB+64GB（魅丽红）" src="./images/142_142_1511858796676mp.jpg">
                        
                    </a>
                    <ul class="">
                        <li>
                            <a style="cursor:default" ahref="/product/570379791.html#2601010014004" class="p-name" title="荣耀V10 全网通标配版 4GB+64GB（魅丽红）" target="_blank" seed="item-name">荣耀V10 全网通标配版 4GB+64GB（魅丽红）</a>
	                        <input type="hidden" class="skuCodeQuanClass" value="1" id="2601010014004">
                        </li>
                        <li>x1</li>
                        <li class="p-price">
                                ¥&nbsp;1999.00
                        </li>
                    </ul>
                </div>
                
                
                
            </div>
        

            
<!--自营订单-赠品-start-->

<!--自营订单-赠品-end-->            
            
            <div class="order-list-info">
                    <!--20170717-订单表单-发票信息-start -->
                    <div class="order-invoice">
                        <div class="h"><span>发票信息</span><em>注：如果商品由第三方卖家销售，发票内容由其卖家决定，发票由卖家开具并寄出</em></div>
                        <div class="b">
                            <em id="invoice-info-typeVMALL-HUAWEIDEVICE">电子普通发票</em>
                            <span id="invoice-info-titleVMALL-HUAWEIDEVICE">个人</span>
                            <a id="invoiceEditVMALL-HUAWEIDEVICE" class="invoiceEdit" href="javascript:;" onclick="ec.order.invoice.popup.edit(&#39;VMALL-HUAWEIDEVICE&#39;);">修改</a>
                        </div>
                    </div>
                    <!--20170717-订单表单-发票信息-end -->
<!-- 20170718-订单优惠-start -->
<div class="order-discount">
            <div class="h"><span>优惠与抵用</span><em>仅适用于自营实物商品</em></div>
    
    <!--仅仅只是为了上传数据没有任何逻辑-->
    <form id="order-normal-form" autocomplete="off" method="post">
            <input name="couSkuIds" type="hidden" value="2601010014004">
            <input name="couSkuCode" type="hidden" value="2601010014004">
		    <input name="couSkuNum" type="hidden" value="1">
    </form>
    <!--仅仅只是为了上传数据没有任何逻辑-->
    
    <!--计算运费begin-->
    <script>
        ec.load("ajax");
        ec.pkg("ec.order");
        ec.order.deliveryCharge=0;
    </script><script id="jsapi_loader1" loadtype="insert" type="text/javascript" src="./js/jquery.form-2.49.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader1');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader1 fail!');} return; }ol._setLoadStatus("jquery.form","complete");})();</script><script id="jsapi_loader2" loadtype="insert" type="text/javascript" src="./js/ajax.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader2');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader2 fail!');} return; }ol._setLoadStatus("ajax","complete");})();</script>
    <!--计算运费end-->                        
    
    <!--自营商品优惠券管理-->
            <form autocomplete="off" method="post"><!--不是真正意义上的表单 是为了 防止firefox刷新的时候 页面数据没有刷新-->
            <div class="order-coupon">
                <span id="order-couponDiscount" class="hide"></span>
                    <input id="couponInfo" type="hidden" value="">
            	    <p id="coupon-info-desc"><span id="coupon-info-amount"></span><b id="b_yuan"><span id="coupon-info-discount"></span></b></p>
            	    <a href="javascript:;" class="hide" onclick="ec.order.openPopWindow(&#39;order-coupon-tpl&#39;,&#39;order-coupon-box&#39;,700,500,&#39;- 使用优惠券 -&#39;);" id="coupon-edit-link">修改</a>
                    <a href="javascript:;" class="red" onclick="ec.order.openPopWindow(&#39;order-coupon-tpl&#39;,&#39;order-coupon-box&#39;,700,500,&#39;- 使用优惠券 -&#39;);" id="coupon-use-link">使用优惠券</a>
            </div>
            </form>
    
     <textarea id="order-coupon-tpl" class="hide">        &lt;!--20170728-优惠券-start --&gt;
        &lt;div class="order-roll"&gt;
            &lt;div class="order-roll-tab"&gt;
                &lt;a href="javascript:;" class="current" id="coupon_tab" onclick="javascript:ec.order.couponTabChange('coupon_tab');"&gt;优惠券&lt;/a&gt;
                &lt;a href="javascript:;" id="coupon_code_tab" onclick="javascript:ec.order.couponTabChange('coupon_code_tab');"&gt;优惠券码&lt;/a&gt;
            &lt;/div&gt;
            
            &lt;!--优惠券列表start--&gt;
            &lt;div id="order-roll-coupon"&gt;
                &lt;div class="order-roll-con"&gt;
                    	&lt;div class="order-roll-tip" id="coupon-not-available"&gt;暂无可用券&lt;/div&gt;
	                    &lt;div class="order-roll-list"&gt;
	                        &lt;ul class="clearfix"&gt;
		                               &lt;li class="order-roll-detail disabled "&gt;
		                                   &lt;div class="order-roll-info"&gt;
		                                       &lt;em&gt;¥&lt;/em&gt;
		                                       &lt;div class="order-roll-price clearfix"&gt;
		                                            &lt;span&gt;50&lt;/span&gt;&lt;strong&gt;优惠券&lt;/strong&gt;
		                                       &lt;/div&gt;
		                                       &lt;p title="华为配件满149减50元优惠券" class="order-roll-word"&gt;华为配件满149减50元优惠券&lt;/p&gt;
		                                   &lt;/div&gt;
		                                   	 &lt;p class="order-roll-explain"&gt;使用要求：2018.07.25 - 2018.08.09，
		                                   		限华为品类指定配件使用，不与其他任何配件优惠叠加&lt;a href="javascript:;" class="btn"&gt;&lt;/a&gt;&lt;/p&gt;
		                               &lt;/li&gt;
		                               &lt;li class="order-roll-detail disabled "&gt;
		                                   &lt;div class="order-roll-info"&gt;
		                                       &lt;em&gt;¥&lt;/em&gt;
		                                       &lt;div class="order-roll-price clearfix"&gt;
		                                            &lt;span&gt;20&lt;/span&gt;&lt;strong&gt;优惠券&lt;/strong&gt;
		                                       &lt;/div&gt;
		                                       &lt;p title="华为配件满79减20元优惠券" class="order-roll-word"&gt;华为配件满79减20元优惠券&lt;/p&gt;
		                                   &lt;/div&gt;
		                                   	 &lt;p class="order-roll-explain"&gt;使用要求：2018.07.25 - 2018.08.09，
		                                   		限华为品类指定配件使用，不与其他任何配件优惠叠加&lt;a href="javascript:;" class="btn"&gt;&lt;/a&gt;&lt;/p&gt;
		                               &lt;/li&gt;
		                               &lt;li class="order-roll-detail disabled "&gt;
		                                   &lt;div class="order-roll-info"&gt;
		                                       &lt;em&gt;¥&lt;/em&gt;
		                                       &lt;div class="order-roll-price clearfix"&gt;
		                                            &lt;span&gt;10&lt;/span&gt;&lt;strong&gt;优惠券&lt;/strong&gt;
		                                       &lt;/div&gt;
		                                       &lt;p title="华为配件满29减10优惠券" class="order-roll-word"&gt;华为配件满29减10优惠券&lt;/p&gt;
		                                   &lt;/div&gt;
		                                   	 &lt;p class="order-roll-explain"&gt;使用要求：2018.07.25 - 2018.08.09，
		                                   		限华为品类指定配件使用，不与其他任何配件优惠叠加&lt;a href="javascript:;" class="btn"&gt;&lt;/a&gt;&lt;/p&gt;
		                               &lt;/li&gt;
		                               &lt;li class="order-roll-detail disabled "&gt;
		                                   &lt;div class="order-roll-info"&gt;
		                                       &lt;em&gt;¥&lt;/em&gt;
		                                       &lt;div class="order-roll-price clearfix"&gt;
		                                            &lt;span&gt;10&lt;/span&gt;&lt;strong&gt;优惠券&lt;/strong&gt;
		                                       &lt;/div&gt;
		                                       &lt;p title="【新人频道】荣耀家庭产品10元优惠券" class="order-roll-word"&gt;【新人频道】荣耀家庭产品10元优惠券&lt;/p&gt;
		                                   &lt;/div&gt;
		                                   	 &lt;p class="order-roll-explain"&gt;使用要求：2018.07.16 - 2018.07.31，
		                                   		限荣耀品牌指定家庭产品 （荣耀MagicBook、荣耀平板类、荣耀手表S1）满459元可用，且不可叠加使用；&lt;a href="javascript:;" class="btn"&gt;&lt;/a&gt;&lt;/p&gt;
		                               &lt;/li&gt;
	                        &lt;/ul&gt;
	                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="box-button"&gt;
                	&lt;a href="javascript:;" class="box-ok" id="not_use_coupon_btn"&gt;&lt;span&gt;关闭&lt;/span&gt;&lt;/a&gt;
            	&lt;/div&gt;
            &lt;/div&gt;
            &lt;!--优惠券列表end--&gt;
            
            &lt;!--优惠券码操作区start--&gt;
            &lt;div id="order-roll-code"&gt;
                &lt;div class="order-rollcode hide"&gt;
                    &lt;ul class="clearfix"&gt;
                        &lt;li&gt;优惠券码&lt;/li&gt;
                        &lt;li&gt;
                            &lt;input type="text" id="couponCode2" class="text vam span-150" /&gt;
                            &lt;div id="couponCode2-report-errors"&gt;&lt;/div&gt;
                        &lt;/li&gt;
                        &lt;li&gt;&lt;a href="javascript:;" onclick="ec.order.addCoupon2();"&gt;确认&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                    &lt;div id="coupon-code-div" class="hide"&gt;
                        &lt;div class="order-roll-detail current" id="li_coupon"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="box-button hide"&gt;
                    &lt;a href="javascript:;" class="box-ok" id="code_not_use_coupon_btn" onclick="ec.order.couponNotUse()"&gt;&lt;span id="not_use_coupon_text"&gt;不使用优惠券&lt;/span&gt;&lt;/a&gt;
                    &lt;a href="javascript:;" class="box-sure disabled" id="code_use_coupon_btn" onclick="ec.order.couponUse(this)"&gt;&lt;span&gt;立即使用&lt;/span&gt;&lt;/a&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;!--优惠券码操作区end--&gt;
      </textarea>
    <!--自营商品优惠券管理-->

   <!--后壳定制和O2O和订金订单不支持积分和花瓣使用-->
	    <div class="order-discount-choose">
               <i class="icon-choose-normal" id="point-checkbox" checked="false"></i>
               <p>积分余额<span id="point_des"></span><span id="point-count">505</span><span id="canUserPoint"></span></p>
               <a href="javascript:;" onclick="ec.order.openPopWindow(&#39;point-rule-tpl&#39;,&#39;order-point-rule-box&#39;,700,435,&#39;- 积分使用规则 -&#39;);">积分使用规则</a>
        </div>
	    <div class="order-discount-choose">
               <i class="icon-choose-normal icon-choose-disabled" id="huaban-checkbox" onclick="ec.order.huaban.toggle()" checked="false"></i>
               <p><span id="huaban_des">花瓣余额&nbsp;0</span><span id="huaban-count"></span><span id="canUserPetal">，不足100不可使用</span></p>
               <a href="javascript:;" onclick="ec.order.openPopWindow(&#39;flower-rule-tpl&#39;,&#39;order-flower-rule-box&#39;,700,435,&#39;- 花瓣使用规则 -&#39;);">花瓣使用规则</a>
        </div>
	    <div class="order-discount-tip hide" id="order-discount-tip" style="display: none;">注：积分与花瓣合计抵扣不能超过自营商品应付款的30%</div>  
</div>
<!-- 20170718-订单优惠-end -->                </div>
        </div>
        
        <div class="order-total"><!-- 20170718-订单结算-start -->
          <!--TCS商品不展示快递方式-->
            <div class="order-total-info">
                 <p>商品由<span>华为商城</span>选择合作快递</p>
            </div>
            <div class="order-total-price">
           		<div class="clearfix">
           		<div class="order-price-detail">
	                <ul>
	                    <li><strong>商品总金额：</strong>
	                       <span>
		                                ¥<em id="order-cost-area" data-oldval=" 1999.00">1999.00</em>
	                       </span>
	                    </li>
	                    <li><strong>运费：</strong>
	                        <span>
	                               ¥<em id="order-deliveryCharge">0.00</em>
	                        </span>
	                    </li>
	                    
		                    <li><strong>优惠金额：</strong>
		                        <span>
		                            -¥<em>0.00</em>
		                        </span>
		                    </li>
		                    <li>
		                        <strong>结算金额：</strong>
		                        <span><b></b>
		              					<span><b>¥</b><b id="order-price-VMALL-HUAWEIDEVICE" data-oldval="1993.95">1993.95</b></span>
		                            
		                        </span>
		                    </li>
	                </ul>
	                
                        
	                </div>
	            </div>
               
            </div>
             
        </div><!--20170718-订单结算-end-->
    </div>
    <!--201701227-礼品购-start -->
        <!--20171227-礼品购-end -->
<!--展示代销商品 start-->
<!-- 代销商品展示结束 -->    </div>
    <div class="hr-10"></div>
<div class="order-detail-area clearfix">
    <div class="order-submit"><!-- 20170718-订单提交-start -->
                
        <div class="order-submit-info">
	               <div class="order-submit-price">应付总额：<b>¥<span id="payableTotal">1993.95</span></b></div>
            
            <div class="order-submit-integral">
                <span id="isHidePoint"><em>可获得积分：<em id="canHavePoint">199</em></em></span>
            </div>
        </div>
        
        <div class="order-submit-address" id="peopleTelAddressID">
            <ul>
                <li>
                    <label>配送至：</label>
                    <p id="deliveryAddress"><span id="addressID">北京&nbsp;北京&nbsp;丰台区&nbsp;丰台街道&nbsp;丰台区</span></p>
                </li>
                <li>
                    <p><span id="peopleID">北京</span><span id="telID">17600084798</span></p>
                </li>
            </ul>
        </div>
        
        <div class="clearfix hide" id="no-delivery-address-tips" style="display: none;"><div class="report-errors"><span id="no-choose-address">未选择收货地址不可下单</span>，<a href="https://www.vmall.com/order/confirmcart#" id="link-choose-address">点击选择</a></div></div>
        
         <div class="clearfix">
            <a href="javascript:;" onclick="ec.order.submit();" class="order-submit-btn" seed="checkout-submit"><span>提交订单</span></a>
         </div>
    </div><!-- 20170718-订单提交-end -->
</div></div>

<div class="hr-45"></div>

<!--订单发票 -->
<textarea id="invoice-edit-box" class="hide">    &lt;!-- 20170729-发票信息-start --&gt;
    &lt;!-- 鼠标悬停追加ClassName： hover 选择追加ClassName： selected 不可选择追加ClassName： disabled --&gt;
    &lt;div class="invoice-new"&gt;
    &lt;div class="invoice-new-tab"&gt;
            &lt;a id="invoice_click_1" href="javascript:;" class="" onclick="ec.order.invoice.popup.select(1)" dis-flag="0"&gt;纸质普通发票&lt;em class="a-tip"&gt;&lt;/em&gt;&lt;/a&gt;&lt;!--选中时添加class="current"--&gt;
            &lt;a id="invoice_click_2" href="javascript:;" class="" onclick="ec.order.invoice.popup.select(2)" dis-flag="0"&gt;电子普通发票&lt;em class="a-tip"&gt;&lt;/em&gt;&lt;/a&gt;
            &lt;a id="invoice_click_3" href="javascript:;" class="" onclick="ec.order.invoice.popup.select(3)" dis-flag="0"&gt;专用发票&lt;em class="a-tip"&gt;&lt;/em&gt;&lt;/a&gt;
            &lt;a id="invoice_click_0" href="javascript:;" class="" onclick="ec.order.invoice.popup.select(0)" dis-flag="0"&gt;不开发票&lt;em class="a-tip"&gt;&lt;/em&gt;&lt;/a&gt;
    &lt;/div&gt;
    
    &lt;div class="invoice-new-info-content"&gt;
    
        &lt;!--个人发票--&gt;
        &lt;div class="invoice-new-info-normal" id="invoice-info-normal"&gt;
            &lt;ul&gt;
                &lt;li class="clearfix"&gt;
                    &lt;div class="invoice-new-main"&gt;
                        &lt;i class="icon-radio-normal" id="invoiceTitle-normalPerson" onclick="ec.order.invoice.select(11)" &gt;&lt;/i&gt;
                        &lt;!--未选择class="icon-radio-normal",选中添加class="icon-radio"--&gt;
                        &lt;label&gt;个人&lt;/label&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="clearfix"&gt;
                    &lt;div class="invoice-new-main"&gt;
                        &lt;i class="icon-radio-normal " id="invoiceTitle-normalCompany" onclick="ec.order.invoice.select(12)"&gt;&lt;/i&gt;
                        &lt;label&gt;单位&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;form id="invoice-normal-form"&gt;
                    &lt;div class="invoice-new-info-name"&gt;
                          &lt;dl&gt;
                             &lt;dd&gt;
                                 &lt;input id="invoice-normal-company" type="text" class="invoice-new-text" placeholder="请输入单位名称" onfocus="this.placeholder=''"  onblur="this.placeholder='请输入单位名称'" &gt;
                                 &lt;div id="normalCompanyError"&gt;&lt;/div&gt;
                             &lt;/dd&gt;
                          &lt;/dl&gt;
                          &lt;dl&gt;
                             &lt;label&gt;&lt;span&gt;&lt;/span&gt;纳税人识别号&lt;/label&gt;
                             &lt;dd&gt;
                                 &lt;input id="invoice-normal-taxpayerIdentityNum" type="text" class="invoice-new-text" placeholder="请按税务登记证填写" onfocus="this.placeholder=''"  onblur="this.placeholder='请按税务登记证填写'"&gt;
                                 &lt;div id="invoice-normal-taxpayerIdentityNum-error"&gt;&lt;/div&gt;
                             &lt;/dd&gt;
                          &lt;/dl&gt;
                    &lt;/div&gt;
                    &lt;/form&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
        
        
        &lt;!--电子发票--&gt;
        &lt;div class="invoice-new-info-normal hide" id="invoice-info-electronic"&gt;
            &lt;ul&gt;
                &lt;li class="clearfix"&gt;
                    &lt;div class="invoice-new-main"&gt;
                        &lt;i class="icon-radio-normal" id="invoiceTitle-elecPerson" onclick="ec.order.invoice.select(21)"&gt;&lt;/i&gt;
                        &lt;!--未选择class="icon-radio-normal",选中添加class="icon-radio"--&gt;
                        &lt;label&gt;个人&lt;/label&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="clearfix"&gt;
                    &lt;div class="invoice-new-main"&gt;
                        &lt;i class="icon-radio-normal" id="invoiceTitle-elecCompany" onclick="ec.order.invoice.select(22)"&gt;&lt;/i&gt;
                        &lt;label&gt;单位&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;form id="invoice-electronic-form"&gt;
                    &lt;div class="invoice-new-info-name"&gt;
                          &lt;dl&gt;
                             &lt;dd&gt;
                                 &lt;input id="invoice-electronic-company" type="text" class="invoice-new-text" placeholder="请输入单位名称" onfocus="this.placeholder=''"  onblur="this.placeholder='请输入单位名称'"&gt;
                                 &lt;div id="elecCompanyError"&gt;&lt;/div&gt;
                             &lt;/dd&gt;
                          &lt;/dl&gt;
                          &lt;dl&gt;
                             &lt;label&gt;&lt;span class="red"&gt;*&lt;/span&gt;纳税人识别号&lt;/label&gt;
                             &lt;dd&gt;
                                 &lt;input id="invoice-electronic-taxpayerIdentityNum" type="text" class="invoice-new-text" placeholder="请按税务登记证填写" onfocus="this.placeholder=''"  onblur="this.placeholder='请按税务登记证填写'" &gt;
                                 &lt;div id="invoice-electronic-taxpayerIdentityNum-error"&gt;&lt;/div&gt;
                             &lt;/dd&gt;
                          &lt;/dl&gt;
                    &lt;/div&gt;
                    &lt;/form&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;

        &lt;!--不开发票--&gt;
        &lt;div class="invoice-new-info-normal hide" id="invoice-info-notuse"&gt;
            &lt;ul&gt;
                &lt;li class="clearfix"&gt;
                    &lt;div class="invoice-new-main"&gt;
                        &lt;i class="icon-radio-normal" id="invoiceTitle-notuse" onclick="ec.order.invoice.select(0)"&gt;&lt;/i&gt;
                        &lt;label&gt;不开发票&lt;/label&gt;
                    &lt;/div&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
        
        &lt;div class="invoice-new-info-add hide" id="invoice-info-add"&gt;
            &lt;div class="add-title"&gt;
                &lt;ul class="clearfix"&gt;
                    &lt;li id="vat-step-1" class="current"&gt;&lt;em&gt;1&lt;/em&gt;填写公司信息&lt;/li&gt;
                    &lt;li&gt;&gt;&lt;/li&gt;
                    &lt;li id="vat-step-2"&gt;&lt;em&gt;2&lt;/em&gt;填写收票人信息&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
            &lt;div class="form-area" id="invoice-company"&gt;
            &lt;form action="" id="vatinvoice-company-form" autocomplete="off"&gt;
                &lt;table cellspacing="0" cellpadding="0" border="0"&gt;
                    &lt;tr&gt;
                        &lt;th&gt;
                            &lt;span class="red"&gt;*&lt;/span&gt;
                            &lt;label for=""&gt;单位名称&lt;/label&gt;
                        &lt;/th&gt;
                        &lt;td&gt;
                        	&lt;div class="relative"&gt;
                            	&lt;input id="vatInvoice-companyName" type="text" class="invoice-new-text" onkeyup="ec.order.invoice.autoFillForm()"&gt;
                            	&lt;div id="vatInvoice-companyName-error"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th&gt;
                            &lt;span class="red"&gt;*&lt;/span&gt;
                            &lt;label for=""&gt;纳税人识别号&lt;/label&gt;
                        &lt;/th&gt;
                        &lt;td&gt;
                            &lt;input id="vatInvoice-taxpayerIdentityNum" type="text" class="invoice-new-text"&gt;
                            &lt;div id="vatInvoice-taxpayerIdentityNum-error"&gt;&lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th&gt;
                            &lt;span class="red"&gt;*&lt;/span&gt;
                            &lt;label for=""&gt;注册地址&lt;/label&gt;
                        &lt;/th&gt;
                        &lt;td&gt;
                            &lt;input id="vatInvoice-registeredAddress" type="text" class="invoice-new-text"&gt;
                            &lt;div id="vatInvoice-registeredAddress-error"&gt;&lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th&gt;
                            &lt;span class="red"&gt;*&lt;/span&gt;
                            &lt;label for=""&gt;注册电话&lt;/label&gt;
                        &lt;/th&gt;
                        &lt;td&gt;
                            &lt;input id="vatInvoice-registeredTelephone" type="text" class="invoice-new-text"&gt;
                            &lt;div id="vatInvoice-registeredTelephone-error"&gt;&lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th&gt;
                            &lt;span class="red"&gt;*&lt;/span&gt;
                            &lt;label for=""&gt;开户银行&lt;/label&gt;
                        &lt;/th&gt;
                        &lt;td&gt;
                            &lt;input id="vatInvoice-depositBank" type="text" class="invoice-new-text"&gt;
                            &lt;div id="vatInvoice-depositBank-error"&gt;&lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th&gt;
                            &lt;span class="red"&gt;*&lt;/span&gt;
                            &lt;label for=""&gt;银行帐户&lt;/label&gt;
                        &lt;/th&gt;
                        &lt;td&gt;
                            &lt;input id="vatInvoice-bankAccount" type="text" class="invoice-new-text"&gt;
                            &lt;div id="vatInvoice-bankAccount-error"&gt;&lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/table&gt;
                 &lt;/form&gt;
            &lt;/div&gt;
            
            
            
            &lt;div class="form-area hide" id="invoice-person"&gt;
              &lt;form action="" id="vatinvoice-person-form"&gt;
              	&lt;input type="hidden" name="province" value=""&gt;
				&lt;input type="hidden" name="city" value=""&gt;
				&lt;input type="hidden" name="district" value=""&gt;
				&lt;input type="hidden" name="street" value=""&gt;
				
              	&lt;input type="hidden" name="provinceG" value=""&gt;
				&lt;input type="hidden" name="cityG" value=""&gt;
				&lt;input type="hidden" name="districtG" value=""&gt;
				&lt;input type="hidden" name="streetG" value=""&gt;
				
				&lt;input type="hidden" name="needL4Addr" id="needL4Addr" value=""&gt;
				&lt;input type="hidden" name="needL4AddrG" id="needL4AddrG" value=""&gt;
				
                &lt;table cellspacing="0" cellpadding="0" border="0"&gt;
                    &lt;tr&gt;
                        &lt;th&gt;
                            &lt;span class="red"&gt;*&lt;/span&gt;
                            &lt;label for=""&gt;姓名&lt;/label&gt;
                        &lt;/th&gt;
                        &lt;td&gt;
                            &lt;input id="vatInvoice-consignee" type="text" class="invoice-new-text"&gt;
                            &lt;div id="vatInvoice-consignee-error"&gt;&lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th&gt;
                            &lt;span class="red"&gt;*&lt;/span&gt;
                            &lt;label for=""&gt;手机号码&lt;/label&gt;
                        &lt;/th&gt;
                        &lt;td&gt;
                            &lt;input id="vatInvoice-mobile" onblur="limitNum(event,this)" onchange="limitNum(event,this)" maxlength="20" type="text" class="invoice-new-text"&gt;
                            &lt;div id="vatInvoice-mobile-error"&gt;&lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th class="form-address-label"&gt;
                            &lt;span class="red"&gt;*&lt;/span&gt;
                            &lt;label for=""&gt;所在地区&lt;/label&gt;
                        &lt;/th&gt;
                        &lt;td class="relative"&gt;
                           &lt;!--以下内容隐藏时添加class="hide"，显示去掉class="hide"--&gt;
&lt;div class="form-address"&gt;
    &lt;div id="current-address" class="form-address-detail"&gt;选择省-市-区-街道&lt;/div&gt;&lt;!--有内容时添加class="form-address-detailcon"--&gt;
&lt;/div&gt;
&lt;div id="address-tab" class="form-address selected hide"&gt;
    &lt;a href="javascript:;" class="btn-address-close"&gt;关闭&lt;/a&gt;
    &lt;div id="form-address-choose-normal" class="form-address-choose"&gt;
        &lt;div class="form-address-name"&gt;
            &lt;div id="provice_info" class="form-address-name-tab clearfix"&gt;&lt;!--已选择内容时添加class="current"--&gt;
            	&lt;a id="provice" level-value="1" data-value=""&gt;请选择&lt;/a&gt;
            	&lt;a id="city" level-value="2" data-value=""&gt;请选择&lt;/a&gt;
            	&lt;a id="district" level-value="3" data-value=""&gt;请选择&lt;/a&gt;
            	&lt;a id="street" level-value="4" class="hide" data-value=""&gt;请选择&lt;/a&gt;
            &lt;/div&gt;
            &lt;div id="address_table" class="form-address-name-con"&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="link-address"&gt;&lt;a href="javascript:ec.address.change(1)"&gt;搜索地址快速定位&gt;&lt;/a&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div id="address-search" class="form-address selected hide"&gt;
    &lt;a href="javascript:;" class="btn-address-close"&gt;关闭&lt;/a&gt;
    &lt;div id="form-address-choose-search" class="form-address-choose"&gt;
        &lt;div class="form-address-search"&gt;
            &lt;div class="form-address-search-text"&gt;&lt;a href="javascript:;"&gt;清除&lt;/a&gt;
            	&lt;input type="text" placeholder="输入街道、乡镇、小区或商圈名称"&gt;
            &lt;/div&gt;
            &lt;p class="form-address-example"&gt;例如：&lt;span&gt;深圳 天安云谷&lt;/span&gt;&lt;/p&gt;
            &lt;div class="form-address-search-list"&gt;
                &lt;div id="form-address-no" class="form-address-no hide"&gt;没有找到这个地方，试试通过城市名+地点名来搜索&lt;br&gt;例如：&lt;span&gt;深圳 天安云谷&lt;/span&gt;&lt;/div&gt;
                &lt;ul&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="link-address"&gt;&lt;a href="javascript:ec.address.change(2)"&gt;直接选择地址&gt;&lt;/a&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!-- &lt;div id="myAddress-region" class="inline-block"&gt;&lt;/div&gt; --&gt;
&lt;label id="myAddress-msg"&gt;&lt;/label&gt;                           &lt;div id="vatInvoice-myAddress-error"&gt;&lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr id="invoice-address-detail"&gt;
                    &lt;/tr&gt;
                    &lt;input type="hidden" id="gouldAddress" name="unionPaySwitch" value="1" /&gt;
                &lt;/table&gt;
                &lt;/form&gt;
            &lt;/div&gt;                                    
        &lt;/div&gt;
        &lt;div class="box-button"&gt;
        	&lt;span class="report-errors hide" id="invoice-unsupport-tips"&gt;&lt;/span&gt;
	        &lt;a id="invoice_return_step" href="javascript:;" class="invoice-pre"  onclick="ec.order.invoice.popup.select(5)" style="display: none;"&gt;&lt;span&gt;上一步&lt;/span&gt;&lt;/a&gt;
	        &lt;a id="invoice_next_step" href="javascript:;" class="invoice-pre"  onclick="ec.order.invoice.popup.select(4)" style="display: none;"&gt;&lt;span&gt;下一步&lt;/span&gt;&lt;/a&gt;
	        &lt;a id="invoice_save_step" href="javascript:;" class="box-sure" onclick='ec.order.invoice.popup.save("confirm")'&gt;&lt;span&gt;确认&lt;/span&gt;&lt;/a&gt;
	    &lt;/div&gt;
        
    &lt;/div&gt;
    
    
    &lt;div class="invoice-new-tips"&gt;
    
       &lt;p id="invoiceMemoText1" class="hide" /&gt;
       &lt;p id="invoiceMemoText2" class="hide" /&gt;
       &lt;p id="invoiceMemoText3" class="hide" /&gt;
       &lt;p id="invoiceMemoText0" class="hide" /&gt;
       
    &lt;/div&gt;
    &lt;!-- 20170729-发票信息-end --&gt;
    &lt;/div&gt;
</textarea><!--优惠活动列表 -->
<textarea id="order-promoPremiums-tpl" class="hide">    &lt;!--#macro promoPremiums data--&gt;
    &lt;table cellspacing="0" cellpadding="0" border="0"&gt;
        &lt;tbody&gt;
        &lt;!--#list data as lst--&gt;
        &lt;tr&gt;
            &lt;td class="tal"&gt;
                &lt;dl&gt;
                    &lt;dt&gt;{#lst.premiumsName}&lt;/dt&gt;
                    &lt;dd&gt;商家活动：{#lst.promoCampaignName} &lt;/dd&gt;
                &lt;/dl&gt;
            &lt;/td&gt;
            &lt;td class="tr-span-3"&gt;&lt;em&gt;1个&lt;/em&gt;&lt;/td&gt;
            &lt;td class="tr-span-4"&gt;&nbsp;&lt;/td&gt;
        &lt;/tr&gt;
        &lt;!--/#list--&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
    &lt;!--/#macro--&gt;
</textarea>
<textarea id="point-rule-tpl" class="hide">    &lt;!--20170728-积分规则-start --&gt;
    &lt;div class="order-rule"&gt;
        &lt;p style="padding:0px 26px;font-size:14px;color:#888888;line-height:25px;font-family:arial, 微软雅黑;margin-top:0px;margin-bottom:0px;"&gt;&lt;strong&gt;&lt;span style="font-size:16px;"&gt;● Vmall积分是什么？&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;&lt;/p&gt;&lt;p style="padding:0px 26px;font-size:14px;color:#888888;line-height:21px;font-family:arial, 微软雅黑;text-indent:2em;margin-top:8px;margin-bottom:8px;"&gt;&lt;span style="line-height:21px;font-family:微软雅黑, sans-serif;"&gt;&lt;span style="line-height:21px;"&gt;积分是用户在Vmall网站（www.vmall.com）进行购物行为时给予的回馈。积分仅可在Vmall使用，每100积分可在购物付款时抵扣1元。如遇用户帐号暂停使用等场景，Vmall将暂停该用户帐号内积分相关使用权益。获得但未使用的积分，将在下一个自然年底过期（例如2017年12月31日将清空用户在2016年度获得但未使用的积分），Vmall将对过期积分进行作废处理，请注意及时使用。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style="padding:0px 26px;font-size:14px;color:#888888;line-height:25px;font-family:arial, 微软雅黑;margin-top:0px;margin-bottom:25px;"&gt;&lt;br /&gt;&lt;/p&gt;&lt;p style="padding:0px 26px;font-size:14px;color:#888888;line-height:25px;font-family:arial, 微软雅黑;"&gt;&lt;span style="color:#333333;"&gt;&lt;span style="font-family:微软雅黑, sans-serif;"&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style="padding:0px 26px;font-size:14px;color:#888888;line-height:25px;font-family:arial, 微软雅黑;"&gt;&lt;strong&gt;&lt;span style="font-size:16px;"&gt;● 如何获取积分？&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;&lt;p style="padding:0px 26px;font-size:14px;color:#888888;line-height:21px;font-family:arial, 微软雅黑;margin-left:28px;"&gt;&lt;span style="line-height:21px;font-family:微软雅黑, sans-serif;"&gt;&lt;span style="line-height:21px;"&gt;1.在&lt;/span&gt;&lt;span style="line-height:21px;"&gt;Vmall购买自主品牌商品可获得实际支付金额（不含运费）数值的&lt;/span&gt;&lt;span style="line-height:21px;"&gt;10%的积分，规则如下（具体请以页面提示为准）：&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style="padding:0px 26px;font-size:14px;color:#888888;line-height:21px;font-family:arial, 微软雅黑;margin-left:56px;"&gt;&lt;span style="line-height:21px;font-family:微软雅黑, sans-serif;"&gt;&lt;span style="line-height:21px;"&gt;1)&lt;/span&gt;&lt;span style="font-variant-numeric:normal;font-stretch:normal;line-height:normal;"&gt; &lt;/span&gt;&lt;/span&gt;&lt;span style="line-height:21px;font-family:微软雅黑, sans-serif;"&gt;&lt;span style="line-height:21px;"&gt;必须是购买自主品牌实物产品订单（代销商品、虚拟商品不赠送积分），积分发放时小数点后数字按四舍五入计算，例如：购买&lt;/span&gt;&lt;span style="line-height:21px;"&gt;999元的产品，发放&lt;/span&gt;&lt;span style="line-height:21px;"&gt;100个积分；&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style="padding:0px 26px;font-size:14px;color:#888888;line-height:21px;font-family:arial, 微软雅黑;margin-left:56px;"&gt;&lt;span style="line-height:21px;font-family:微软雅黑, sans-serif;"&gt;&lt;span style="line-height:21px;"&gt;2)&lt;/span&gt;&lt;span style="font-variant-numeric:normal;font-stretch:normal;line-height:normal;"&gt; &lt;/span&gt;&lt;/span&gt;&lt;span style="line-height:21px;font-family:微软雅黑, sans-serif;"&gt;&lt;span style="line-height:21px;"&gt;实际支付金额是指用户实际以银行卡&lt;/span&gt;&lt;span style="line-height:21px;"&gt;/第三方支付&lt;/span&gt;&lt;span style="line-height:21px;"&gt;/Vmall代金券等支付的金额，不包括订单中使用花瓣、积分以及各种形式的优惠券等发生的抵扣；&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style="padding:0px 26px;font-size:14px;color:#888888;line-height:21px;font-family:arial, 微软雅黑;margin-left:56px;"&gt;&lt;span style="line-height:21px;font-family:微软雅黑, sans-serif;"&gt;&lt;span style="line-height:21px;"&gt;3)&lt;/span&gt;&lt;span style="font-variant-numeric:normal;font-stretch:normal;line-height:normal;"&gt; &lt;/span&gt;&lt;/span&gt;&lt;span style="line-height:21px;"&gt;订单完成（订单已显示完成且未办理退货手续）才可获得积分，积分会在订单完成后回馈到用户的个人中心；&lt;/span&gt;&lt;/p&gt;&lt;p style="padding:0px 26px;font-size:14px;color:#888888;line-height:21px;font-family:arial, 微软雅黑;margin-left:56px;"&gt;&lt;span style="line-height:21px;font-family:微软雅黑, sans-serif;"&gt;&lt;span style="line-height:21px;"&gt;4)&lt;/span&gt;&lt;span style="font-variant-numeric:normal;font-stretch:normal;line-height:normal;"&gt; &lt;/span&gt;&lt;/span&gt;&lt;span style="line-height:21px;"&gt;如订单包含不同类型商品，将按照上述规则对商品金额进行计算，具体以页面显示为准。&lt;/span&gt;&lt;/p&gt;&lt;p style="padding:0px 26px;font-size:14px;color:#888888;line-height:21px;font-family:arial, 微软雅黑;margin-top:8px;margin-bottom:8px;margin-left:28px;"&gt;&lt;span style="line-height:21px;font-family:微软雅黑, sans-serif;"&gt;&lt;span style="line-height:21px;"&gt;2.&lt;/span&gt;&lt;span style="font-variant-numeric:normal;font-stretch:normal;line-height:normal;"&gt; &lt;/span&gt;&lt;/span&gt;&lt;span style="line-height:21px;font-family:微软雅黑, sans-serif;"&gt;&lt;span style="line-height:21px;"&gt;用户在&lt;/span&gt;&lt;span style="line-height:21px;"&gt;Vmall&lt;span&gt;首次&lt;/span&gt;实名认证、首次填写地址信息、评价商品、或参与积分翻倍购等促销活动时，可获赠积分，具体以活动规则为准。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style="padding:0px 26px;font-size:14px;color:#888888;line-height:25px;font-family:arial, 微软雅黑;margin-top:0px;margin-bottom:25px;"&gt;&lt;br /&gt;&lt;/p&gt;&lt;p style="padding:0px 26px;font-size:14px;color:#888888;line-height:25px;font-family:arial, 微软雅黑;"&gt;&lt;strong&gt;&lt;span style="font-size:16px;"&gt;● 如何使用积分？&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;&lt;p style="padding:0px 26px;font-size:14px;color:#888888;line-height:21px;font-family:arial, 微软雅黑;margin-left:28px;"&gt;&lt;span style="line-height:21px;font-family:微软雅黑, sans-serif;"&gt;&lt;span style="line-height:21px;"&gt;1.&lt;/span&gt;&lt;span style="font-variant-numeric:normal;font-stretch:normal;line-height:normal;"&gt; &lt;/span&gt;&lt;/span&gt;&lt;span style="line-height:21px;font-family:微软雅黑, sans-serif;"&gt;&lt;span style="line-height:21px;"&gt;用户可在订单结算页面使用积分抵扣订单金额，积分使用的最小值是&lt;/span&gt;&lt;span style="line-height:21px;"&gt;100；商品是否可用积分抵扣以实际页面提示为准；&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style="padding:0px 26px;font-size:14px;color:#888888;line-height:21px;font-family:arial, 微软雅黑;margin-left:28px;"&gt;&lt;span style="line-height:21px;font-family:微软雅黑, sans-serif;"&gt;&lt;span style="line-height:21px;"&gt;2.&lt;/span&gt;&lt;span style="font-variant-numeric:normal;font-stretch:normal;line-height:normal;"&gt; &lt;/span&gt;&lt;/span&gt;&lt;span style="line-height:21px;font-family:微软雅黑, sans-serif;"&gt;&lt;span style="line-height:21px;"&gt;当前&lt;/span&gt;&lt;span style="line-height:21px;"&gt;Vmall的抢购商品、优购码商品、优享购商品、代销和虚拟商品不支持使用积分抵扣；&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style="padding:0px 26px;font-size:14px;color:#888888;line-height:21px;font-family:arial, 微软雅黑;margin-left:28px;"&gt;&lt;span style="line-height:21px;font-family:微软雅黑, sans-serif;"&gt;&lt;span style="line-height:21px;"&gt;3.&lt;/span&gt;&lt;span style="font-variant-numeric:normal;font-stretch:normal;line-height:normal;"&gt; &lt;/span&gt;&lt;/span&gt;&lt;span style="line-height:21px;font-family:微软雅黑, sans-serif;"&gt;&lt;span style="line-height:21px;"&gt;使用积分、花瓣及其他优惠时，可用花瓣、积分抵扣不超过订单中可抵扣商品实付金额的&lt;/span&gt;&lt;span style="line-height:21px;"&gt;30%；&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style="padding:0px 26px;font-size:14px;color:#888888;line-height:21px;font-family:arial, 微软雅黑;margin-left:28px;"&gt;&lt;span style="line-height:21px;font-family:微软雅黑, sans-serif;"&gt;&lt;span style="line-height:21px;"&gt;4.&lt;/span&gt;&lt;span style="font-variant-numeric:normal;font-stretch:normal;line-height:normal;"&gt; &lt;/span&gt;&lt;/span&gt;&lt;span style="line-height:21px;font-family:微软雅黑, sans-serif;"&gt;&lt;span style="line-height:21px;"&gt;当订单中包含多个商品时，该笔订单可用积分抵扣的上限为所有允许使用积分支付的商品的实付金额上限之和的&lt;/span&gt;&lt;span style="line-height:21px;"&gt;30%；使用积分支付的订单，消费的积分会在各个商品中按一定比例进行分摊；&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style="padding:0px 26px;font-size:14px;color:#888888;line-height:21px;font-family:arial, 微软雅黑;margin-left:28px;"&gt;&lt;span style="line-height:21px;font-family:微软雅黑, sans-serif;"&gt;&lt;span style="line-height:21px;"&gt;5.&lt;/span&gt;&lt;span style="font-variant-numeric:normal;font-stretch:normal;line-height:normal;"&gt; &lt;/span&gt;&lt;/span&gt;&lt;span style="line-height:21px;"&gt;订单一经提交无法再修改积分使用数量，如需修改请重新提交订单，用户自行取消订单后积分将在一定时间内返还到账户；&lt;/span&gt;&lt;/p&gt;&lt;p style="padding:0px 26px;font-size:14px;color:#888888;line-height:21px;font-family:arial, 微软雅黑;margin-left:28px;"&gt;&lt;span style="line-height:21px;font-family:微软雅黑, sans-serif;"&gt;&lt;span style="line-height:21px;"&gt;6.&lt;/span&gt;&lt;span style="font-variant-numeric:normal;font-stretch:normal;line-height:normal;"&gt; &lt;/span&gt;&lt;/span&gt;&lt;span style="line-height:21px;"&gt;积分不可兑现、不可跨帐号使用，且使用积分抵扣部分不开发票，使用积分抵扣部分作为销售折扣行在发票上单独列示。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;
    &lt;/div&gt;
    &lt;!--20170728-积分规则-start --&gt;
    &lt;div class="box-button"&gt;
        &lt;a href="javascript:;" class="box-ok"&gt;&lt;span&gt;知道了&lt;/span&gt;&lt;/a&gt;
    &lt;/div&gt;
</textarea>

<textarea id="flower-rule-tpl" class="hide">    &lt;!--20170728-花瓣规则-start --&gt;
    &lt;div class="order-rule"&gt;
        &lt;h1 style="margin:0px;padding:0px;font-size:12px;font-weight:400;"&gt;&lt;strong&gt;1、 什么是花瓣？&lt;/strong&gt;&lt;/h1&gt;&lt;p style="padding:0px 0px 19px;margin-top:0px;margin-bottom:0px;"&gt;花瓣是华为消费者业务推出的一种虚拟货币，当前的“汇率”是0.01（100花瓣=1元人民币），从获取花瓣之日起2年内有效。&lt;/p&gt;&lt;h1 style="margin:0px;padding:0px;font-size:12px;font-weight:400;"&gt;&lt;strong&gt;2、如何获取花瓣？&lt;/strong&gt;&lt;/h1&gt;&lt;p style="padding:0px 0px 19px;margin-top:0px;margin-bottom:0px;"&gt;花瓣可在花粉俱乐部通过登录、签到、发帖、回帖、参加活动等形式获取。&lt;a href="http://cn.club.vmall.com/forum.php?mod=viewthread&amp;tid=31974" title="了解更多" target="_blank" style="text-decoration-line:none;color:#0077d2;cursor:pointer;"&gt;了解更多&gt;&gt;&lt;/a&gt;&lt;/p&gt;&lt;h1 style="margin:0px;padding:0px;font-size:12px;font-weight:400;"&gt;&lt;strong&gt;3、如何查看花瓣？&lt;/strong&gt;&lt;/h1&gt;&lt;p style="padding:0px 0px 19px;margin-top:0px;margin-bottom:0px;"&gt;花瓣的消费及返还记录可以在“个人中心”—&lt;a title="地址链接" href="https://www.vmall.com/member/petal" target="_blank" style="text-decoration-line:none;color:#0077d2;cursor:pointer;"&gt;"我的花瓣"&lt;/a&gt;中查看。&lt;/p&gt;&lt;h1 style="margin:0px;padding:0px;font-size:12px;font-weight:400;"&gt;&lt;strong&gt;4、如何使用花瓣？&lt;/strong&gt;&lt;/h1&gt;&lt;p style="padding:0px 0px 19px;margin-top:0px;margin-bottom:0px;"&gt;1) 用户可在填写订单页面使用花瓣抵扣订单金额，商品是否可以使用花瓣支付以实际订单页面提示为准。&lt;/p&gt;&lt;p style="padding:0px 0px 19px;margin-top:0px;margin-bottom:0px;"&gt;2) 所有允许使用花瓣支付的商品最多可用花瓣抵扣30%金额。&lt;/p&gt;&lt;p style="padding:0px 0px 19px;margin-top:0px;margin-bottom:0px;"&gt;3) 当订单中包含多个商品时，该笔订单可用花瓣抵扣的上限为所有允许使用花瓣支付的商品的花瓣支付上限之和。使用花瓣支付的订单，消费的花瓣会在各个商品中按商品单价从高到低顺序进行分摊。&lt;/p&gt;&lt;p style="padding:0px 0px 19px;margin-top:0px;margin-bottom:0px;"&gt;4) 订单一经提交无法再修改花瓣使用数量，如需修改请重新提交订单，用户自行取消订单后花瓣将于10分钟后返还账户。&lt;/p&gt;&lt;p style="padding:0px 0px 19px;margin-top:0px;margin-bottom:0px;"&gt;5) 花瓣不可兑现，且不开发票。&lt;/p&gt;&lt;h1 style="margin:0px;padding:0px;font-size:12px;font-weight:400;"&gt;&lt;strong&gt;5、退货时消费的花瓣如何返还？&lt;/strong&gt;&lt;/h1&gt;&lt;p style="padding:0px 0px 19px;margin-top:0px;margin-bottom:0px;"&gt;使用花瓣支付的订单若产生退货 ，花瓣将不予退回。&lt;/p&gt;&lt;h1 style="margin:0px;padding:0px;font-size:12px;font-weight:400;"&gt;&lt;strong&gt;6、华为商城依法保留对花瓣使用规则的解释权。&lt;/strong&gt;&lt;/h1&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;
    &lt;/div&gt;
    &lt;!--20170728-花瓣规则-start --&gt;
    &lt;div class="box-button"&gt;
        &lt;a href="javascript:;" class="box-ok"&gt;&lt;span&gt;知道了&lt;/span&gt;&lt;/a&gt;
    &lt;/div&gt;
</textarea>

<!-- 公用弹窗对话框 -->
<textarea id="order-confim-box-tpl" class="hide">    &lt;div class="box-prompt01-error"&gt;
        &lt;div class="h"&gt;
            &lt;i&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;div class="b"&gt;msg&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="box-button"&gt;
        &lt;a href="javascript:;" class="box-ok"&gt;&lt;span&gt;知道了&lt;/span&gt;&lt;/a&gt;
    &lt;/div&gt;
</textarea>
<input type="hidden" id="gouldAddress" name="unionPaySwitch" value="1">
<input type="hidden" id="updateOrder" name="updateOrder" value="0">

<script src="./js/address_common.min.js"></script><script id="jsapi_loader3" loadtype="insert" type="text/javascript" src="./js/bigInt.min.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader3');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader3 fail!');} return; }ol._setLoadStatus("dh/bigInt.min.js","complete");})();</script><script id="jsapi_loader4" loadtype="insert" type="text/javascript" src="./js/aes.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader4');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader4 fail!');} return; }ol._setLoadStatus("aes/aes.js","complete");})();</script><script id="jsapi_loader5" loadtype="insert" type="text/javascript" src="./js/aesUtil.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader5');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader5 fail!');} return; }ol._setLoadStatus("aes/aesUtil.js","complete");})();</script><script id="jsapi_loader6" loadtype="insert" type="text/javascript" src="./js/pbkdf2.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader6');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader6 fail!');} return; }ol._setLoadStatus("aes/pbkdf2.js","complete");})();</script>
<script src="./js/order_addresss_box.min.js"></script>
<script src="./js/confirm.min.js"></script><script id="jsapi_loader7" loadtype="insert" type="text/javascript" src="./js/rc4.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader7');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader7 fail!');} return; }ol._setLoadStatus("crypt/rc4.js","complete");})();</script><script id="jsapi_loader8" loadtype="insert" type="text/javascript" src="./js/region-min.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader8');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader8 fail!');} return; }ol._setLoadStatus("linkSelect/region-min.js?20161011","complete");})();</script>
<script src="./js/confirmProxy.min.js"></script>
<script src="./js/invoiceNew.min.js"></script>
<script src="./js/order_expected_delivery.min.js"></script>
<script type="text/javascript">
ec.load("ajax");
    <!--商品实际支付金额除去优惠价格-->
    ec.order.totalPrice = 1999;
    <!--全部自营商品的折扣金额-->
    ec.order.discountTotalPrice = 0;
    
    <!--商品重量-->
    ec.order.weight = parseInt("100");
    
    <!--自营商品总价格-->
    ec.order.totalOriginalPrice = 1999.00
    <!--门店编码-->
    ec.order.shopCode = "VMALL-HUAWEIDEVICE";
    
    <!--是否是虚拟商品-->
    ec.order.isAllPrdVirtual = "false" ;

        ec.order.petalFlagTotalPrice = ec.order.totalPrice;
        ec.order.balancePrice = 0;
        ec.order.realTotalPrice = 0;
    ec.order.petalValidPetalTotal = 0;
    ec.order.petalAmount = 0.00;
    ec.order.pointAmount = 0.00;
  
    
    
    <!--商品的原始总价格-->
    ec.order.allTotalOriginalPrice = 1999.00;
    <!--商品优惠价格-->
    ec.order.allTotalDiscountPrice = 0.00;
    
<!--是否显示预计送达提示-->
ec.order.isSupportDisTime = 0 ;
ec.order.productSeCode = "VMALL-HUAWEIDEVICE" ;
ec.order.isProxySale = "false" ;
ec.order.cart = "//cart.vmall.com" ;
ec.order.productId = "";
ec.order.skuId = "";
ec.order.huabanLowestUsage=100;
ec.order.shippingDate = "" ;

//优享购订单展示预计发货时间   改成所有订单类型 只要有预计发货时间 就展示
	
    var skuIds = [];
        skuIds.push(2601010014004);
    ec.order.inventorySku = skuIds.join(',')
</script><!--口号-20121025 -->
<div class="slogan-container">
    <div class="slogan">
        <ul>
            <li class="s1"><a target="_blank" href="https://www.vmall.com/help/faq-934.html" rel="nofollow" onclick="pushFootAdvertMsg(&#39;公司介绍&#39;,&#39;https://www.vmall.com/help/faq-934.html&#39;)"><i></i>百强企业&nbsp;品质保证</a></li>
            <li class="s2"><a target="_blank" href="https://www.vmall.com/help/faq-834.html" rel="nofollow" onclick="pushFootAdvertMsg(&#39;退换货政策&#39;,&#39;https://www.vmall.com/help/faq-834.html&#39;)"><i></i>7天退货&nbsp;15天换货</a></li>
            <li class="s3">
                <a target="_blank" href="https://www.vmall.com/help/faq-4367.html" rel="nofollow" onclick="pushFootAdvertMsg(&#39;物流帮助&#39;,&#39;https://www.vmall.com/help/faq-4367.html&#39;)"><i></i>
                    <span>48元起免运费</span>
                </a>
            </li>
            <li class="s4"><a target="_blank" href="http://consumer.huawei.com/cn/support/service-center/index.htm" rel="nofollow" onclick="pushFootAdvertMsg(&#39;服务中心&#39;,&#39;http://consumer.huawei.com/cn/support/service-center/index.htm&#39;)"><i></i>448家维修网点&nbsp;全国联保</a></li>
        </ul>
    </div>
</div><!--口号-end -->

<!-- 2017-02-15-服务-start -->
<div class="service-container">
    <div class="service">
        <div class="service-l fl">
            <dl class="s1">
                <dt>
                <p class="line"></p>
                <p class="title">购物相关</p>
                </dt>
                <dd>
                    <ol>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-4355.html" rel="nofollow">购物指南</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-4367.html" rel="nofollow">配送方式</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-4357.html" rel="nofollow">支付方式</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/category-16.html" rel="nofollow">常见问题</a></li>
                    </ol>
                </dd>
            </dl>
            <dl class="s2">
                <dt>
                <p class="line"></p>
                <p class="title">保修与退换货</p>
                </dt>
                <dd>
                    <ol>
                          <li><a target="_blank" href="https://www.vmall.com/help/faq-833.html" rel="nofollow">保修政策</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-834.html" rel="nofollow">退换货政策</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-5259.html" rel="nofollow">退换货流程</a></li>
                        <li><a target="_blank" href="http://consumer.huawei.com/cn/support/warranty-query/index.htm" rel="nofollow">保修状态查询</a></li>
                    </ol>
                </dd>
            </dl>
            <dl class="s3">
                <dt>
                <p class="line"></p>
                <p class="title">维修与技术支持</p></dt>
                <dd>
                    <ol>
                          <li><a target="_blank" href="http://consumer.huawei.com/cn/support/service-center/index.htm" rel="nofollow">售后网点</a></li>
                          <li><a target="_blank" href="http://consumer.huawei.com/cn/support/reservation/index.htm" rel="nofollow">预约维修</a></li>
                          <li><a target="_blank" href="http://consumer.huawei.com/cn/support/express-repair/index.htm" rel="nofollow">手机寄修</a></li>
                            <li><a target="_blank" href="http://consumer.huawei.com/cn/support/sparepart-price/index.htm" rel="nofollow">备件价格查询</a></li>
                            <li><a target="_blank" href="http://consumer.huawei.com/cn/support/door-to-door-service/" rel="nofollow">上门服务</a></li>
                    </ol>
                </dd>
            </dl>
            <dl class="s4">
                <dt>
                <p class="line"></p>
                <p class="title">关于我们</p></dt>
                <dd>
                    <ol>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-934.html" rel="nofollow">公司介绍</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-939.html" rel="nofollow">华为商城简介</a></li>
                        <li><a target="_blank" href="http://consumer.huawei.com/cn/support/where-to-buy/" rel="nofollow">华为线下门店</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/offshop/shoplist" rel="nofollow">荣耀线下门店</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/common/zhaopin" rel="nofollow">诚征英才</a></li>
                    </ol>
                </dd>
            </dl>
            <dl class="s5">
                <dt>
                <p class="line"></p>
                <p class="title">关注我们</p></dt>
                <dd>
                    <ol>
                           <li><a class="sina" rel="nofollow" href="http://weibo.com/shophuawei" target="_blank">新浪微博</a></li>
                        <li><a class="qq" rel="nofollow" href="http://t.qq.com/shophuawei" target="_blank">腾讯微博</a></li>
                           <li><a class="huafen" href="http://club.huawei.com/" target="_blank">花粉俱乐部</a></li>
                    </ol>
                </dd>
            </dl>
            <dl class="s6" id="serverlink">
                <dt class="relative">
                <p class="line"></p>
                <p class="title">友情链接</p>
                <p class="button"><span class="btn btn-prev disabled"> &lt; </span><span class="btn btn-next"> &gt; </span></p>
                </dt>
                <dd class="">
                   <div class="service-list clearfix" style="width: 1431px;"><ol><li><a onclick="jump_link(&#39;http://www.huawei.com/cn/&#39;)">华为官网</a></li><li><a href="https://m.vmall.com/" target="_blank">华为商城手机版</a></li><li><a onclick="jump_link(&#39;http://www.honor.cn/&#39;)">荣耀官网</a></li><li><a onclick="jump_link(&#39;http://club.huawei.com/&#39;)" textvalue="花粉俱乐部">花粉俱乐部</a></li><li><a href="https://www.vmall.com/shopdc/sitemap.html" target="_blank">网站地图</a><br></li></ol><ol><li><a onclick="jump_link(&#39;http://www.hwtrip.com/&#39;)">爱旅官网</a></li><li><a onclick="jump_link(&#39;http://app.vmall.com/&#39;)">华为应用市场</a></li><li><a onclick="jump_link(&#39;http://www.wbiao.cn/&#39;)">万表网</a></li><li><a onclick="jump_link(&#39;http://www.askci.com/&#39;)">中商情报网</a></li><li><a onclick="jump_link(&#39;http://www.shuame.com/&#39;)">刷机精灵</a></li></ol><ol><li><a onclick="jump_link(&#39;https://www.vmall.com&#39;)" textvalue="华为手机">华为手机</a></li><li><a onclick="jump_link(&#39;http://www.17ugo.com/&#39;)">优购物官网</a></li><li><a onclick="jump_link(&#39;http://www.znds.com/&#39;)">智能电视</a></li><li> <a onclick="jump_link(&#39;http://www.uc.cn/&#39;)">UC浏览器</a></li><li><a onclick="jump_link(&#39;http://www.zol.com/&#39;)">中关村商城</a></li></ol><ol><li><a onclick="jump_link(&#39;http://www.kugou.com/&#39;)">酷狗音乐</a></li><li><a onclick="jump_link(&#39;http://www.958shop.com/&#39;)">百信手机网</a></li><li><a onclick="jump_link(&#39;http://www.cardbaobao.com/&#39;)">卡宝宝网</a></li><li><a onclick="jump_link(&#39;http://www.duote.com/&#39;)" textvalue="多特软件下载">多特软件下载</a></li></ol><ol><li><a onclick="jump_link(&#39;http://www.tongbu.com/&#39;)">同步助手</a></li><li><a onclick="jump_link(&#39;http://www.fengniao.com/&#39;)">蜂鸟摄影网</a></li><li><a onclick="jump_link(&#39;http://www.7po.com/&#39;)">奇珀论坛</a></li><li><a onclick="jump_link(&#39;http://www.homekoo.com/&#39;)">家具商城</a></li><li><a onclick="jump_link(&#39;http://www.paixie.net/&#39;)">拍鞋网商城</a></li></ol><ol><li><a onclick="jump_link(&#39;http://www.obolee.com/&#39;)">欧宝丽珠宝</a></li><li><a onclick="jump_link(&#39;http://www.xungou.com/&#39;)">寻购网</a></li><li><a onclick="jump_link(&#39;http://www.yzmg.com/&#39;)">亿智蘑菇</a></li><li><a onclick="jump_link(&#39;http://www.wandoujia.com/&#39;)">安卓市场</a></li><li><a onclick="jump_link(&#39;http://baike.1688.com/&#39;)">阿里巴巴生意经</a></li></ol><ol><li><a onclick="jump_link(&#39;http://product.cnmo.com/&#39;)">手机大全</a></li><li><a onclick="jump_link(&#39;http://www.anzow.com/&#39;)">安卓软件园</a></li><li><a onclick="jump_link(&#39;http://www.dashi.com/&#39;)">卓大师刷机</a></li><li><a onclick="jump_link(&#39;http://www.wpxap.com/&#39;)">智机论坛</a></li><li><a onclick="jump_link(&#39;http://www.eepw.com.cn/&#39;)">电子产品世界</a></li></ol><ol><li><a onclick="jump_link(&#39;http://www.liqucn.com/&#39;)">历趣网</a></li><li><a onclick="jump_link(&#39;http://www.51bi.com/&#39;)">网购返利</a></li><li><a title="Apple110" onclick="jump_link(&#39;http://www.apple110.com/&#39;)">Apple110</a></li><li><a onclick="jump_link(&#39;http://www.91.com/&#39;)" textvalue="91手机门户网">91手机门户网</a></li><li><a onclick="jump_link(&#39;http://www.ydss.cn/&#39;)">移动叔叔</a></li></ol><ol><li><a onclick="jump_link(&#39;http://www.outlets365.com/&#39;)">奥特莱斯</a></li><li><a onclick="jump_link(&#39;https://www.vmall.com&#39;)">荣耀Magic</a></li><li><a onclick="jump_link(&#39;http://car.ctrip.com/&#39;)">携程租车</a></li></ol></div><script>
	jump_link = function(url)
	{
		var win = window.open(url,"_blank") ;
		win.opener = null ;
	};
	if((typeof  ec.product.productshopName) != 'undefined'){
	
	
	
ec.product.getFeature = function(skuId) {
    //后台已经带过来的skudetail 则不再调接口获取
     if(ec.product.getSkuForFeature(skuId) != undefined || $("#pro-detail-content-"+skuId).length > 0){
         $("#pro-tab-parameter").removeClass("selected");
         $("#pro-tab-feature").addClass("selected").show();
         $("#pro-detail-contents").show();
         $('#pro-detail-content-' + (ec.product.setSkuId || skuId)).show().siblings().hide();
        //处理视频播放
         if(playerDetailVideo){
        	 playerDetailVideo.dispose();
            }
//       $("#video-box").remove();
         ec.product.payVideo();
         return ;
     }
    // 请求商品详情
    new ec.ajax().get({
        url : "/product/querySkuDetailFeature/"+ec.product.getSku()+".json",
        /*data : {
             skuId : ec.product.getSku()
        },*/
        timeout : 10000,
        timeoutFunction : function() {
            $("#pro-detail-contents > div:first-child").html("正在加载...");
        },
        successFunction : function(json) {
            if (!json.success) {
                $("#pro-tab-feature").removeClass("selected").hide();
                $("#pro-tab-parameter").addClass("selected");
                $("#pro-detail-contents").hide();
                return;
            }
            if(json.length==0){
                $("#pro-tab-feature").removeClass("selected").hide();
                $("#pro-tab-parameter").addClass("selected");
                $("#pro-tab-feature").hide();
                $("#pro-detail-contents").hide();
                return;
            }
            $("#pro-tab-parameter").removeClass("selected");
            $("#pro-tab-feature").addClass("selected");
            $("#pro-tab-feature").show();
            $("#pro-detail-contents").show();
            ec.product.setSkuForFeature(skuId);
            var content = [];
            content.push('<div id="pro-detail-content-' + json.id + '" class="pro-detail-see">');
            
            content.push('<div id="kindPicture-'+json.id+'">');
            content.push(json.detail);
            content.push('</div>');
            
            content.push('<div id="detail-content-button-'+json.id +'" class="product-shade hide"><p>');
            content.push('<a id="pro-detail-down-btn-'+json.id+'" class="product-detail-btn">');
            content.push('查看全部产品详情</a></p></div>');
            content.push('<a href="javascript:;" id="pro-detail-up-btn-'+json.id+'" class="product-detail-btnup hide">收起全部产品详情</a>');
            content.push('</div>');
            var feature = $("#pro-tab-feature-content > div:first-child");
            feature.prepend(content.join(''));
            
            
            //<video id="player-container-id" preload="auto" width="1920" height="1080" playsinline webkit-playinline x5-playinline src=""></video>//处理视频播放
            if(playerDetailVideo){
                setTimeout(function(){
                	playerDetailVideo.dispose();
                },300)
            }
//          $("#video-box").remove();
            ec.product.payVideo();
            
            $('#pro-detail-content-' + (ec.product.setSkuId || skuId)).show().siblings().hide();
            var imgHeight = 0;
            $('#pro-detail-content-' + (ec.product.setSkuId || skuId)+' img').each(function(index){
                $(this).load(function(){
                    imgHeight = imgHeight +$(this).height();
                    if(imgHeight>=2000){
                            $('#pro-detail-content-'+json.id).height('2000');
                            $('#detail-content-button-'+json.id).show();
                            $("#pro-detail-down-btn-"+json.id).click(function(){
                                $('#pro-detail-content-'+json.id).height($('#kindPicture-' + json.id).height()+$('#pro-detail-up-btn-'+json.id).height()+40);
                                $('#detail-content-button-'+json.id).hide();
                                $("#pro-detail-up-btn-"+json.id).css("display","block");
                                upDownButton = "true";
                            });
                            
                            $("#pro-detail-up-btn-"+json.id).click(function(){
                                $('#pro-detail-content-'+json.id).height('2000');
                                $('#detail-content-button-'+json.id).show();
                                $("#pro-detail-up-btn-"+json.id).css("display","none");
                                upDownButton = "false";
                                $("body,html").animate({
                                    scrollTop : tit1+1575
                                }, 0);
                            });
                        return false        
                    }
                });
            });
            if(imgHeight<2000){
                $('#detail-content-button-'+json.id).hide();
            }
        },
        errorFunction : function() {
            $("#pro-tab-feature").removeClass("selected").hide();
            $("#pro-tab-parameter").addClass("selected");
            $("#pro-detail-contents").hide();
        },
        timeoutFunction : function() {                      
            $("#pro-tab-feature").removeClass("selected").hide();
            $("#pro-tab-parameter").addClass("selected");
            $("#pro-detail-contents").hide();
        }
    });

};
//视频播放器实例
var playerDetailVideo;
ec.product.payVideo = function() {
//	$("#video-box").remove();
	var skuId = ec.product.getSku();
	//处理视频播放
	var video = $("#pro-detail-content-" + skuId).find(".J_videoTrigger");
	$("#player-container-id").remove();
	if (video) {
		//video标签是否存在
		if(!$("#pro-detail-content-" + skuId).find("video") || $("#pro-detail-content-" + skuId).find("video").length == 0){
			var videoUrl = video.attr("data-video");
			var videoPic = video.attr("data-video-poster");
			if (videoUrl && videoUrl !="") {
				video.append("<span class='video-btn'></span>");
				var playerContainerId = "player-container-id-"+skuId;
				//video.prepend('<video id="' + playerContainerId + '" preload="auto" width="'+ width +'" height="' + height + '" playsinline webkit-playinline x5-playinline src="'+ videoUrl +'"></video>');
				
				
				video.click(function(){
					videoUrl = $(this).attr("data-video");
					var videoHtml = '<video id="' + playerContainerId + '" preload="auto"  playsinline webkit-playinline x5-playinline src="'+ videoUrl +'"></video>';
					var videoBox = new ec.box(videoHtml,{
	                    boxid:"video-box",
	                    boxclass:'ol_box_4 video-detail',
	                    width:800,
	                    height:450,
	                    draggable:false,
	                    showButton: false,
	                    zIndex:700,
	                    onclose:function(dom){
	                    	playerDetailVideo.dispose();
//	                    	$("#video-box").remove();
	                    }
	                 }).open();					
					playerDetailVideo = TCPlayer(playerContainerId, {
				        autoplay: true 
				    });
				});
			}
		}
	}
}
	};
 </script>
                </dd>
            </dl>
        </div>
        <div class="service-r fl">
            <dl class="s7">
                <dt>
                <p class="line"></p>
                <p class="title">400-088-6888</p></dt>
                <dd>
                    <ol>
                        <li><a>24小时客服热线（仅收市话费）</a></li>
                    </ol>
                </dd>
                <dd>
                    <a id="tools-nav-service-robotim-button" rel="nofollow" class="service-btn btn-line-primary" href="http://robotim.vmall.com/live800/chatClient/chatbox.jsp?companyID=8922&amp;configID=10&amp;location=B_002&amp;chatfrom=web&amp;channelType=Vmall%e5%95%86%e5%9f%8e%e7%94%b5%e8%84%91%e7%ab%af&amp;enterurl=https%3A%2F%2Fwww.vmall.com%2Forder%2Fconfirmcart&amp;k=1&amp;remark=" target="_blank" style="display: block;"><i class=""></i> 在线客服</a>
                </dd>
            </dl>
        </div>
    </div>
</div>
<!-- 2017-02-15-服务-end -->

<!--确认对话框-->
<div id="ec_ui_confirm" class="popup-area popup-define-area hide" style="display: none;">
    <div class="b">
        <p id="ec_ui_confirm_msg"></p>
        <div class="popup-button-area"><a id="ec_ui_confirm_yes" href="javascript:;" class="button-action-yes"><span>是</span></a><a id="ec_ui_confirm_no" href="javascript:;" class="button-action-no"><span>否</span></a></div>
    </div>
    <div class="f"><s class="icon-arrow-down"></s></div>
</div>

<!--新确认对话框-->
<div id="ec_ui_confirm_new" class="popup-area-new hide">
    <div class="b">
        <p id="ec_ui_confirm_new_msg"></p>
        <div class="popup-button-area"><a id="ec_ui_confirm_new_yes" href="javascript:;" class="box-button-style-1"><span>是</span></a><a id="ec_ui_confirm_new_no" href="javascript:;" class="box-button-style-1"><span>否</span></a></div>
    </div>
    <div class="f"><s class="icon-arrow-down-new"></s></div>
</div>

<!--提示对话框-->
<div id="ec_ui_tips" class="popup-area popup-define-area hide">
    <div class="b">
        <p id="ec_ui_tips_msg" class="tac"></p>
        <div class="popup-button-area tac"><a id="ec_ui_tips_yes" href="javascript:;" class="button-action-yes" title="确定"><span>确定</span></a></div>
    </div>
    <div class="f"><s class="icon-arrow-down"></s></div>
</div>

<!-- 2017-02-15-悬浮工具栏-start -->
<div class="hungBar">
    <a href="https://www.vmall.com/order/confirmcart#" class="hungBar-top fr" id="hungBar-top" title="返回顶部"><i>返回顶部</i></a>
    <div class="hungBar-content fr relative">
        <!--添加hover 来实现弹出-->
        <a href="https://www.vmall.com/help/index.html" class="hungBar-for-help" title="帮助中心" target="_blank" onclick="pushRightHelpMsg(&#39;帮助中心&#39;)"><i>帮助中心</i></a>
        <a id="tools-nav-survery" href="javascript:;" class="hungBar-feedback" title="意见反馈" onclick="ec.survery.open();pushRightHelpMsg(&#39;意见反馈&#39;)" style="display: block;"><i>意见反馈</i></a>
        <a id="tools-nav-service-robotim" href="http://robotim.vmall.com/live800/chatClient/chatbox.jsp?companyID=8922&amp;configID=10&amp;location=B_002&amp;chatfrom=web&amp;channelType=Vmall%e5%95%86%e5%9f%8e%e7%94%b5%e8%84%91%e7%ab%af&amp;enterurl=https%3A%2F%2Fwww.vmall.com%2Forder%2Fconfirmcart&amp;k=1&amp;remark=" class="hungBar-olcs-web" title="在线客服" target="_blank" onclick="pushRightHelpMsg(&#39;在线客服&#39;)" style="display: block;"><i>在线客服</i></a>
    </div>
</div>
<!-- 2017-02-15-悬浮工具栏-end -->

<!--意见反馈box-->
<div id="survery-box" class="ol_box_4 hide" style="width:600px;">
    <div class="box-ct">
        <div class="box-header">
            <div class="box-tl"></div>
            <div class="box-tc">
                <div class="box-tc1"></div>
                <div class="box-tc2"><a class="box-close" title="关闭" onclick="ec.survery.close();" href="javascript:;"></a><span class="box-title"></span></div>
            </div>
            <div class="box-tr"></div>
        </div>
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody>
            <tr>
                <td class="box-cl"></td>
                <td class="box-cc">
                    <div class="box-content">
                        <!-- -表单-意见反馈-start -->
                        <div class="form-feedback-area">
                            <div class="b">
                                <div class="form-edit-area">
                                    <form autocomplete="off" id="form-feedback">
                                        <div class="form-edit-table">
                                            <table cellspacing="0" cellpadding="0" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <select name="type" id="surverytype">
                                                                <option>请选择疑问类型</option>
                                                                    <option>商品质量（手机、平板等软、硬件质量）</option>
                                                                    <option>商品缺货</option>
                                                                    <option>物流发货（发货快慢、发错货、送件人态度等）</option>
                                                                    <option>售后服务（服务网点、维修、退换货、客服）</option>
                                                                    <option>网站问题（商城功能失效、不好用等）</option>    
                                                                    <option>其他问题</option>   
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>您的问题与建议</b><span id="errMsg"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><textarea name="content" id="surveryContent" type="textarea" class="textarea"></textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>您的联系方式</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" name="contact" id="surveryContact"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="fl">
                                                                <input type="text" maxlength="4" class="identify" name="code" id="surveryVerify" onkeyup="if(this.value.length==4){ec.survery.validate();}">&nbsp;&nbsp;<img id="surveryVerifyImg" onclick="ec.survery.reloadCode()" class="vam" alt="验证码">&nbsp;&nbsp;&nbsp;&nbsp;<span class="vam"><a class="u" href="javascript:;" onclick="ec.survery.reloadCode();">换一张</a></span>
                                                            </div>
                                                            <div class="fr">
                                                                <a href="javascript:;" onclick="ec.survery.submit();" class="button-action-yes"><span>提交</span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- -表单-意见反馈-end -->
                    </div>
                </td>
                <td class="box-cr"></td>
            </tr>
            </tbody>
        </table>
        <div class="box-bottom">
            <div class="box-bl"></div>
            <div class="box-bc"></div>
            <div class="box-br"></div>
        </div>
    </div>
</div>

<div id="globleParameter" class="hide" context="" stylepath="https://res8.vmallres.com/20180720/css" scriptpath="https://res9.vmallres.com/20180720/js" imagepath="https://res.vmallres.com/20180720/images" mediapath="https://res.vmallres.com/pimages/"></div>


<!-- 2017-02-15-底部-start -->
<div class="footer-container">
    <div class="footer">
        <div class="footer-warrant-area clearfix"><p class="footer-warrant-logo fl"><a href="https://www.vmall.com/"><img src="./images/flogo.png"></a></p><p class="fl"><a href="https://www.vmall.com/help/faq-2635.html" target="_blank" title="隐私声明" rel="nofollow">隐私声明</a><a href="https://www.vmall.com/help/faq-778.html" target="_blank" title="服务协议" rel="nofollow"> 服务协议</a> Copyright © 2012-2018 华为软件技术有限公司 版权所有 保留一切权利<br>公安备案 <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=32011402010009" target="_blank" rel="nofollow">苏公网安备32011402010009号</a><em> | </em><a target="_blank" href="http://www.miitbeian.gov.cn/" rel="nofollow">苏ICP备17040376号-6</a><em> | </em> 增值电信业务经营许可证：苏B2-20130048号<em>| </em><br></p><p class="fr footer-warrant-img"><a class="fl" href="http://privacy.truste.com/privacy-seal/validation?rid=81be9ca0-c821-4e2c-ad4b-ff7cff98f75f&amp;lang=zh-cn" target="_blank" rel="nofollow"><img src="./images/20180522101715775.jpg" alt="TRUSTe隐私认证" title="TRUSTe隐私认证"></a>                        <a class="fl" href="https://res.vmallres.com/pimages//sale/2018-06/20180615181402966.jpg" target="_blank" rel="nofollow"><img src="./images/20160226162415360.png" alt="电子营业执照" title="电子营业执照"></a>        <a class="fl" href="https://ss.knet.cn/verifyseal.dll?sn=e13010932010038497pwz6000000&amp;trustKey=dn&amp;trustValue=vmall.com" target="_blank" rel="nofollow"><img src="./images/20160226162521265.png" title="可信网站" alt="可信网站"></a>        <a class="fl" href="http://sq.ccm.gov.cn/ccnt/sczr/service/business/emark/toDetail/2E50AF12E8B14A8B9721D1548FC0CDD2" target="_blank" rel="nofollow"><img src="./images/20180626164548324.png" title="网络文化经营许可证" alt="网络文化经营许可证"></a>  <a class="fl" id="___szfw_logo___" href="https://credit.szfw.org/CX20170724001650181088.html" target="_blank" rel="nofollow"><img src="./images/20170725194955862.jpg" border="0"></a></p><script type="text/javascript">(function(){document.getElementById('___szfw_logo___').oncontextmenu = function(){return false;}})();</script>    <p><br></p></div><script>
ec.code.addAnalytics({
  baidu : true,
  google : false,
  hicloud : true,
  cnzz : true,
  suning : false,
  dmp:true
});</script>
    </div>
</div>
<!-- 2017-02-15-底部-end -->
<!--<script src="https://res9.vmallres.com/20180720/js/echannel/slider.min.js?20170426"></script>-->
<!--<script src="https://res9.vmallres.com/20180720/js/echannel/swiper.min.js?20170426"></script>-->
<script>
    new Slider({//友情链接
        objid: '#serverlink',
        listname: '.service-list',
        listitem: 'ol',
        shownum: 1
    }).init();
</script>
<script type="text/javascript">
ec.load("ec.box" , {loadType : "lazy"});
/**
*功能：给鼠标移动到s-dropdown上面的时候，记得给他多添加一个hover类样式
*目的是兼容ie6
*@author 李峰
*/
$(function(){
    $(".s-dropdown").hover(function(){
        $(this).addClass("hover");
    },function(){
        $(this).removeClass("hover");
    });
    var maxcolor=$('.top-banner-max').find('p').children('a').css("background-color");
    var mincolor=$('.top-banner-min').find('p').children('a').css("background-color");
    
    $('.top-banner-max').css({"background-color":maxcolor,overflow:"hidden"});
    $('.top-banner-min').css({"background-color":mincolor,overflow:"hidden"});
});

//显示全球导航选择层
function showSelectRegion()
{
    var box = new ec.box($("#selectRegion-tips").val(),
    {
            boxid : "region-select-box",
            boxclass : "ol_box_4",
            title : "Please select your country or region.",
            width : 940,            
            showButton : false,
            autoPosition:false,
            onopen: function(box){
            },
            onok : function(box){
            },
            oncancel : function(box){
                box.close();
                $(".ol_box_mask").remove();
            },   
            onclose : function(box){
                $(".ol_box_mask").remove();
            }
        });    

        box.open();
                
        $(".box-title").css("font-size","28px").css("font-weight","normal");
        $("#region-select-box").css("height","auto");
        $(".ol_box_mask").click(function(){box.close();});
        
        $(".box-header").unbind("mousemove");
        $(".box-header").unbind("mousedown");
        
        var divTop=document.getElementById("region-select-box").offsetTop;
        $("#region-select-box").mousedown(function (e) 
        {
            var e=e||window.event;
            var region = document.getElementById("region-select-box");
                                
            var leftX = e.clientX - region.offsetLeft;
            var topY = e.clientY - region.offsetTop;
            $("#region-select-box").mousemove(function (event) 
            {
              var e=event||window.event;
              var left=    e.clientX - leftX;
              var top=e.clientY - topY;
               
              if(e.clientX - leftX<20-region.offsetWidth){
              left=20-region.offsetWidth;
              }
              if(e.clientY - topY<20-region.offsetHeight){
              top=20-region.offsetHeight;
              }    
             
             if(e.clientY - topY+20>=$(window).height()){
              top=$(window).height() - 20;
              }
              if(e.clientX - leftX+20>=$(window).width()){
              left=$(window).width() - 20;
              }
              $("#region-select-box").css({"left": left, "top": top});
              divTop=top;
                
            });
        });
        $("#region-select-box").mouseup(function () {
        $("#region-select-box").unbind("mousemove");
        });
        $(window).scroll(function () {
            $("#region-select-box").offset({ top: divTop });
        });
}
</script>
<script type="text/javascript">
ec.load("ec.slider", {
   loadType : "lazy", 
   callback : function() {
        $("#ec-erweima").slider({
                 width:     91, //必须
                 height:     96, //必须
                 style : 1,                    //1显示分页，2只显示左右箭头,3两者都显示
                 pause : 120000,           //间隔时间
                 auto : true
        });
   }
});

ec.ready(function(){
    try
    {
        
        $('#up_loginName-hover').hover(function ()
        {
            if(ec.checkBrowerIE())
            {
                var act = document.activeElement.id;
                if(act=='search-kw')
                {
                    $("#search-kw").blur();
                }
            }
            
            $(this).unbind("mouseenter");
        }, function () 
        {
            $(this).bind("mouseenter",function()
            {
                if(ec.checkBrowerIE())
                {
                    var act = document.activeElement.id;
                    if(act=='search-kw')
                    {
                        $("#search-kw").blur();
                    }
                }
                
                $(this).unbind("mouseenter");
            });
        });
        
}
catch (err)
{
    // console.log(err);
}

});
</script>
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https'){
   bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
  }
  else{
  bp.src = 'http://push.zhanzhang.baidu.com/push.js';
  }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>

<iframe src="javascript:false" style="display: none;" src="./确认订单华为商城_files/saved_resource.html"></iframe><script src="./js/dmpa-min.js" async="" id="dmpa"></script><script>

function pushHeaderMsg(name,url)
{
	var value ={
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
		    {
			"name":name,
			"URL":url,
			"click":"1",
			}
	};
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300000101", "link", value]);
}

function pushLoginMsg(name,subName)
{
	var value ={
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
		    {
			"name":name,   
  			"subName":subName ,       
  			"click":"1"
  			}
	};
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300000201", "link", value]);
}

function pushMyOrderMsg()
{
	var value ={
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
		    {
  			"click":"1"
  			}
	};
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300000301", "link", value]);
}

function pushMyCartMsg()
{
	var value ={
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
		    {
  			"click":"1"
  			}
	};
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300000401", "link", value]);
}


function pushCartProMsg(skuId,url,location)
{
	var value ={
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
		    {
  			"SKUID":skuId ,
  			"URL":url, 
  			"location":location,          
   			"click":"1"
   			}
	};
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300000402", "link", value]);
}

function pushFootAdvertMsg(name,url)
{
	var value ={
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
    		{
  			"name":name ,
  			"URL":url,            
   			"click":"1"
   			}
	};
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300000501", "link", value]);
}


$(".fl").find("dd").find("a").bind("click",function(){
	var HREF = "";
	HREF = this.href;
	var name = this.innerHTML;
	if(HREF==null || HREF == "")
	{
		return;
	}
	if(this.id=="tools-nav-service-robotim-button")
	{
		name = "在线客服";
	}
	if(this.className=="service-btn btn-report")
	{
		name = "不良信息举报";
	}
	pushFootAdvertMsg(name,HREF);
});


$(".footer-warrant-area.clearfix").find("p").find("a").click(function()
{	
	var url = $(this).attr("href");
	var value  = {};
	if(url != "" && url != null)
	{
		if($(this).attr("class")=="fl")
		{
			value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
		    {
  			"ADID":$(this).find("img").attr("src"),
  			"URL":url,
   			"click":"1"
   			}
			};
		}
		else
		{
			value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
		    {
  			"name":$(this).html(),
  			"URL":url,
   			"click":"1"
   			}
			};
		}
		ec.code.addAnalytics({hicloud:true});
		_paq.push(["trackLink","300000502", "link", value]);
		
	}
	else
	{
		return;
	}
});

function pushRightHelpMsg(buttonName)
{
	var value ={
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
		    {
  			"buttonName":buttonName,
  			"click":"1"
  			}
	};
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300000601", "link", value]);
}


jump = function(url,obj)
{	
	if(typeof(obj.html()) != "undefined" && obj.html() != null && obj.html() != "")
	{
		pushFootAdvertMsg($(this).html(),url);
	}
	var win = window.open(url,"_blank") ;
	win.opener = null ;
}
 
function pushProRelationMsg(productId,column)
    {
    	var value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
			{
			"productId":productId, 
  			"row":"1",
  			"column":column,
  			"click":"1"
  			}
		};
		ec.code.addAnalytics({hicloud:true});
		_paq.push(["trackLink","300020601", "link", value]);
    	
    }
    
    function pushProHotMsg(skuCode)
    {
    	var value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
			{
			"SKUCode":skuCode ,
  			"click":"1"
  			}
		};
		ec.code.addAnalytics({hicloud:true});
		_paq.push(["trackLink","300020701", "link", value]);
    	
    }
</script>

<div id="ec_ui_loading" class="ec_ui_loading" style="display: none;"></div><div id="AutocompleteContainter_55090" style="position: absolute; z-index: 9999; top: 0px; left: 0px;"><div class="autocomplete-w1"><div class="autocomplete" id="Autocomplete_55090" style="display: none; width: 0px; max-height: 400px;"></div></div></div></body></html>