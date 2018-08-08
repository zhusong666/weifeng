<script>

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
<title>华为手机大全_华为智能手机_华为商城</title>
<meta name="keywords" content="华为手机大全,华为智能手机,华为商城" />
<meta name="description" content="华为商城是华为旗下面向全国服务的电子商务官网,我们提供最新款的华为智能手机的价格、参数、图片等信息。VMALL.COM 正品保障!" />

<link rel="shortcut icon" href="https://www.vmall.com/favicon.ico" />
<!--[if lt IE 9]><script src="js/html5shiv_1.js"></script> <![endif]-->
</head>

<body class="wide">
<style type="text/css">.btn-line-primary i,.category .category-info i,.footer-warrant-area .footer-warrant-logo span,.goods-rolling .grid-btn span,.home-channel-list li.s3 .icon-notice span,.hungBar-feedback i,.hungBar-feedback:after,.hungBar-for-help i,.hungBar-for-help:after,.hungBar-olcs-web i,.hungBar-olcs-web:after,.hungBar-top i,.i-mall-huaban .p-img span,.i-mall-prompt .user-info .user-info-detail a:before,.minicart-pro-item .p-choose i,.minicart-pro-item .p-tags:before,.search-bar .search-bar-form .button,.shortcut .s-dropdown .icon-minicart:before,.slogan li i{background:url(images/icon-common_1.png)}.search-bar .search-bar-form .button{background-position:0 -21px}.minicart-pro-item .p-tags:before{background-position:-28px -99px}.goods-rolling .grid-btn.btn-prev span{background-position:-101px -1px}.goods-rolling .grid-btn.btn-next span{background-position:-112px -1px}.hungBar-top i{background-position:-123px -1px}.hungBar-feedback i{background-position:-151px -1px}.hungBar-for-help i{background-position:-166px -1px}.hungBar-olcs-web i{background-position:-136px -1px}.btn-line-primary i{background-position:-101px -23px}.slogan .s1 i{background-position:0 -151px}.slogan .s2 i{background-position:-94px -151px}.slogan .s3 i{background-position:-141px -151px}.slogan .s4 i{background-position:-47px -151px}.hungBar-for-help:after{background-position:-80px -199px}.hungBar-feedback:after{background-position:-40px -199px}.hungBar-olcs-web:after{background-position:0 -199px}.category .category-info i{background-position:-9px -214px}.category-index .category-list li.active i,.category-index .category-list li.active i{background-position:-2px -214px}.i-mall-huaban .p-img span{width:50px;height:50px;display:block}.i-mall-huaban .p-img span.img01{background-position:-50px 0}.i-mall-huaban .p-img span.img02{background-position:-50px -50px}.i-mall-huaban .p-img span.img03{background-position:-50px -100px}.footer-warrant-area .footer-warrant-logo span{width:79px;height:16px;display:block;background-position:-101px -45px}.home-channel-list li.s3 .icon-notice span{width:31px;height:13px;display:block;position:relative;top:17px;margin:0 auto;background-position:-17px -214px}.home-channel-list li.s2 li .p-img{height:40px;margin:0 auto;overflow:hidden;position:relative;width:40px}.home-channel-list li.s2 li .p-img img{position:absolute;width:auto;height:auto}.home-channel-list li.s2 li .p-img .img0{left:0}.home-channel-list li.s2 li .p-img .img1{left:-40px}.home-channel-list li.s2 li .p-img .img2{left:-80px}.home-channel-list li.s2 li .p-img .img3{left:-120px}.home-channel-list li.s2 li .p-img .img4{left:-160px}.home-channel-list li.s2 li .p-img .img5{left:-200px}.home-channel-list li.s3 .p-info li a span{display:inline-block;height:20px;margin-right:6px;overflow:hidden;position:relative;top:6px;width:20px}.home-channel-list li.s3 .p-info li a img{width:auto;height:auto;margin:0;position:absolute}.home-channel-list li.s3 .p-info li a .img0{left:-240px}.home-channel-list li.s3 .p-info li a .img1{left:-260px}.home-channel-list li.s3 .p-info li a .img2{left:-280px}</style>
<div class="top-banner" id="top-banner-block"></div>
<img src="picture/icon-common_1.png" class="hide">
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
                <li><a href="https://www.vmall.com" onclick = "pushHeaderMsg('首页','https://www.vmall.com')">首页</a></li>
                <li><a href="http://consumer.huawei.com/cn/" target="_blank" onclick = "pushHeaderMsg('华为官网','http://consumer.huawei.com/cn/')">华为官网</a></li>
                <li><a href="http://www.honor.cn/" target="_blank" onclick = "pushHeaderMsg('荣耀官网','http://www.honor.cn/')">荣耀官网</a></li>
                <li><a href="http://club.huawei.com" target="_blank" onclick = "pushHeaderMsg('花粉俱乐部','http://club.huawei.com')">花粉俱乐部</a></li>
                <li><a href="https://www.vmall.com/help/index.html" onclick = "pushHeaderMsg('帮助中心','https://www.vmall.com/help/index.html')">帮助中心</a></li>
                <li><a href="https://www.vmall.com/priority" rel="nofollow" onclick = "pushHeaderMsg('V码(优购码)','https://www.vmall.com/priority')">V码(优购码)</a></li>
                <li><a href="/company" target="_blank" onclick = "pushHeaderMsg('企业购','/company')">企业购</a></li>
                <li class="s-hwep hide" id="li-enterprise-preferential"></li>
                <li><a href="javascript:;" onclick="showSelectRegion();pushHeaderMsg('Select Region','')">Select Region</a></li>
                <li class="downloadApp">
				<div class="s-dropdown">
					<div class="h">
						<a class="icon-dropdown">下载APP</a>
				 	</div>
				 		<div class="b">
				 			<div class="dropdown-more">
				 				<div class="code">
                                    <a class="code" href="https://www.vmall.com/appdownload" target="_blank" onclick = "pushHeaderMsg('下载客户端img','https://www.vmall.com/appdownload')">
                                        
                                    </a>
                                    <p>扫一扫，<a href="https://www.vmall.com/appdownload" target="_blank" onclick = "pushHeaderMsg('下载客户端','https://www.vmall.com/appdownload')">下载客户端</a></p>
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
                               
                                    <dt><a href="http://emui.huawei.com/cn/" target="_blank" onclick = "pushHeaderMsg('EMUI','http://emui.huawei.com/cn/')">EMUI</a></dt>
                                    <dt><a href="http://appstore.huawei.com/" target="_blank" onclick = "pushHeaderMsg('应用市场','http://appstore.huawei.com/')">应用市场</a></dt>
                                    <dt><a href="http://cloud.huawei.com" target="_blank" onclick = "pushHeaderMsg('华为终端云空间','http://cloud.huawei.com')">华为终端云空间</a></dt>
                                    <dt><a href="http://developer.huawei.com/" target="_blank" onclick = "pushHeaderMsg('开发者联盟','http://developer.huawei.com/')">开发者联盟</a></dt>
                               
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        
        <div class="s-main ">
            <img src="picture/bg71_1.png" class="hide">
            <ul>
                <li id="unlogin_status">
                    <div id="top_unlogin" class="header-toolbar">
                        <!-- 2017-02-15-头部-工具栏-焦点为header-toolbar-item增加ClassName:hover -->
                        <div class="header-toolbar-item">
                            <div class="i-login">
                                <div class="h">
                                    <div class="">
                                            <script>document.write('<a id="top-index-loginUrl" href="https://hwid1.vmall.com/CAS/remoteLogin?loginChannel=26000000&reqClientType=26&lang=zh-cn&loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Facaslogin%3Furl%3D'+encodeURIComponent(encodeURIComponent(window.location.href))+'" rel="nofollow" onclick="pushLoginMsg(\'登录\',\'\')">请登录</a>');</script>
                                            <a href="https://hwid1.vmall.com/CAS/portal/userRegister/regbyphone.html?service=https://www.vmall.com/account/caslogin&loginChannel=26000000&reqClientType=26&lang=zh-cn" rel="nofollow" onclick = "pushLoginMsg('注册','')">&nbsp;&nbsp;注册</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                
                <li id="login_status" class="hide">
                    <div id="top_login" class="header-toolbar hide">
                        <div class="s-dropdown">
                            <div class="h h-wide" id="up_loginName-hover">
                                <a class="icon-dropdown" href="https://www.vmall.com/member?t=1532932749756" rel="nofollow" target="_blank" onclick = "pushLoginMsg('已登录','用户名')"><span id="up_loginName"></span></a>&nbsp;
                            </div>
                            <div class="b">
                                <!-- 2017-06-19-个人信息-start -->
                                <div class="dropdown-i-mall">
                                    <div class="i-mall-prompt clearfix">
                                        <div class="user-head fl">
                                            <div class="user-canvas "> 
                                                <span id="user-vip-level-tips" class="icon-vip-level-0"></span>
                                                <div class="canvas-bg">
                                                    <div class="canvas-left"><div id="canvas-left" style="transform: rotateZ(-121deg);"></div></div>
                                                    <div class="canvas-right"><div id="canvas-right"></div></div>
                                                </div>
                                            </div>
											<img src="picture/bg71_1.png" class="user-img-shade">
                                            <p class="user-img">
                                                <a href="https://www.vmall.com/member?t=1532932749756timestamp" rel="nofollow" timeType="timestamp" target="_blank" onclick = "pushLoginMsg('已登录','头像')">
                                                    <img id="customerPic" src="picture/img_not_logged_in_1.png" alt="默认头像" imgpath="https://res.vmallres.com/20180720/images" />
                                                </a>
                                            </p>
                                        </div>
                                        <div class="user-info fl">
                                             <a href="https://www.vmall.com/member?t=1532932749756timestamp" rel="nofollow" target="_blank" onclick = "pushLoginMsg('已登录','用户名')">
                                                <div class="user-info-name" id="up_loginName_info"></div>
                                             </a>
                                             <div class="user-info-detail clearfix" id="vip-info">
                                                <a id="authentication_y" class="icon-realname hide">已实名</a>
                                                <a id="authentication_n" href="https://www.vmall.com/authmember/accesstoken" rel="nofollow" class="icon-realname disabled hide" onclick = "pushLoginMsg('已登录','未实名')">未实名</a>
                                                <a class="icon-mail" href="https://www.vmall.com/member/msg?t=1532932749756timestamp" rel="nofollow" timeType="timestamp" onclick = "pushLoginMsg('已登录','站内信')">站内信  <span id="top-newMsgCount" class="hide">0</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                     <div class="i-mall-uc">
                                        <dl class="clearfix">
                                            <dt><span class="fl">我的订单</span><a class="fr" href="https://www.vmall.com/member/order?t=1532932749756timestamp" timeType="timestamp" onclick = "pushLoginMsg('已登录','更多')">更多&gt;</a></dt>
                                        </dl>
                                        <div class="i-mall-uc-con"> 
                                            <dl class="clearfix">
                                                <dd><a href="https://www.vmall.com/member/order?t=1532932749756timestamp&tab=unpaid" timeType="timestamp" onclick = "pushLoginMsg('已登录','待支付')">待支付</a></dd>
                                                <dd><a href="https://www.vmall.com/member/order?t=1532932749756timestamp&tab=send" timeType="timestamp" onclick = "pushLoginMsg('已登录','待收货')">待收货</a></dd>
                                                <dd><a href="https://www.vmall.com/member/order?t=1532932749756timestamp&tab=nocomment" timeType="timestamp" onclick = "pushLoginMsg('已登录','待评价')">待评价</a></dd>
                                                <dd><a href="https://www.vmall.com/member/exchange?t=1532932749756timestamp" timeType="timestamp" onclick = "pushLoginMsg('已登录','退换货')">退换货</a></dd>
                                                <dd><a href="https://www.vmall.com/member/recycle/index/aihuishou?t=1532932749756timestamp" timeType="timestamp" onclick = "pushLoginMsg('已登录','旧机回收')">旧机回收</a></dd>
                                            </dl>
                                        </div>
                                    </div>
                                    
                                    <div class="i-mall-huaban">
                                       <ul class="clearfix">
                                            <li>
                                                <p class="p-img">
                                                    <a href="https://www.vmall.com/member/newpoint?t=1532932749756" target="_blank" id="point" onclick = "pushLoginMsg('已登录','积分')">
                                                        <span class="img01"></span>
                                                    </a>
                                                </p>
                                                <p class="p-dec">积分</p>
                                                <p class="p-price"><span id="userPointBalance">--&nbsp;</span></a>分</p>
                                            </li>
                                            <li>
                                                <p class="p-img">
                                                    <a href="https://www.vmall.com/member/coupon?t=1532932749756" rel="nofollow" target="_blank" onclick = "pushLoginMsg('已登录','优惠券')">
                                                        <span class="img02"></span>
                                                    </a>
                                                </p>
                                                <p class="p-dec">优惠券</p>
                                                <p class="p-price"><span id="top-couponCount">--&nbsp;</span>张</p>
                                            </li>
                                            <li>
                                                <p class="p-img">
                                                    <a href="https://www.vmall.com/member/balance?t=1532932749756" rel="nofollow" target="_blank" onclick = "pushLoginMsg('已登录','代金券')">
                                                        <span class="img03"></span>
                                                    </a>
                                                </p>
                                                <p class="p-dec">代金券</p>
                                                <p class="p-price"><span id="balanceAmount">--&nbsp;</span>元</p>
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
                
                <li><a href="https://www.vmall.com/member/order?t=1532932749756timestamp" timeType="timestamp" onclick = "pushMyOrderMsg()">我的订单</a></li>
                
                    <li>
                        <div class="s-dropdown">
                            <div class="h h-wide" id="header-toolbar-minicart">
                                <a href="/cart2?t=1532932749756timestamp" class="icon-minicart" rel="nofollow" timeType="timestamp" target="blank" onclick = "pushMyCartMsg()">
                                    <span>购物车(<span id="header-cart-total">0</span>)</span>
                                </a>
                            </div>
                            <div class="b" id="header-toolbar-minicart-content">
                                <!-- 2017-06-19-迷你购物车-start -->
                                <div class="dropdown-minicart">
                                    <div class="minicart-pro-empty " id="minicart-pro-empty">
                                        <p><span class="icon-minicart"></span></p>
                                        <p id="cartInfo" >您的购物车是空的，赶紧选购吧~</p>
<a href="https://www.vmall.com">去逛逛吧</a>
                                    </div>
                                    <div class="minicart-pro-list minicart-pro-list-scroll hide" id="minicart-pro-list-block">
                                        <ul class="minicart-pro-list" id="minicart-goods-list"></ul>
                                        <div class="minicart-pro-settleup" id="minicart-pro-settleup">
                                            <p>
                                                <span>总计：</span>
                                                <span><b id="micro-cart-totalPrice">&yen;&nbsp;0</b><s id="micro-cart-totalOriginPrice">&yen;&nbsp;0</s></span>
                                            </p>
                                            <a class="button-minicart" id="button-minicart-go2confirm" href="javascript:;" onclick="ec.minicart.confirm()" >结算</a>
                                            <a class="button-minicart disabled" id="disbutton-minicart-go2confirm" style="display:none;">结算</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2017-06-19-迷你购物车-end -->
                            </div>
                        </div>
                    </li>
            </ul>
        </div>
    </div>
</div>
<!-- 2017-06-19-捷径栏-end -->

<textarea id="selectRegion-tips" style="display: none;">
<!-- 20151105-全球语言弹出框-width:910px-start -->
<div class="box-content"><div class="box-lan-choose"><dl><dt>Asia Pacific</dt><dd class="box-button"><a class="box-choose" href="http://www.vmall.hk/">香港</a><a class="box-choose" href="https://store.hihonor.com/in/?utm_source=vmall&amp;utm_medium=navigation&amp;utm_campaign=daily">India</a><a class="box-choose" href="http://www.vmall.my/">Malaysia</a></dd></dl><dl class="box-lan-choose-area"><dt>The United States</dt><dd class="box-button"><a class="box-choose" href="https://store.hihonor.com/us">United States</a></dd></dl><dl class="box-lan-choose-area"><dt>Europe</dt><dd class="box-button"><a class="box-choose" href="http://www.vmall.ru/">Россия</a><a class="box-choose" href="https://store.hihonor.com/fr">France</a><a class="box-choose" href="https://store.hihonor.com/de">Deutschland</a><a class="box-choose" href="https://store.hihonor.com/it">Italia</a><a class="box-choose" href="https://store.hihonor.com/es">España</a><a class="box-choose" href="https://store.hihonor.com/uk">UK</a></dd></dl><dl class="box-lan-choose-area"><dt>Middle East</dt><dd class="box-button"><a href="http://www.vmall.hk/" target="_self" textvalue="Saudi Arabia"></a><a class="box-choose" href="http://www.honorarabia.com/uae/">United Arab Emirates</a><a class="box-choose" href="http://www.honorarabia.com/ksa/">Saudi Arabia</a></dd></dl></div></div>
<!-- 20151105-全球语言弹出框-width:910px-end -->
</textarea>
<input type="hidden" value="" id="context"/>
<input type="hidden" value="https://member.vmall.com" id="domainUc"/>
<input type="hidden" value="vmall_index" id="vmall_index"/>

<script type="text/javascript">
$(".downloadApp").hover(function(){
	console.log($(this));
	if(!$(this).find(".QRcode").length){
		$(this).find("a.code").append('<img src="picture/qrcode_vmall_new_app01_1.png" class="QRcode">')
	}
});
checkIEVersion();
ec.mediaPath = "https://res.vmallres.com/pimages/";
//document.write('<script src="js/242228f49f334b36aa2a14e83c1344fd.js'+(new Date()).getTime()+'"></s' + 'cript>');
</script>

<textarea id="micro-cart-tpl" class="hide">
<!--#macro microCartList data-->
<!--#list data.itemInfos as item-->
		<!--#var classChoose='';-->
		
      
        
			
			
            <!--#var skuId='#'+item.skuId;-->
            
           
            
            <!--#if (item.subItems && item.subItems.length > 0)-->
            <!--#list item.subItems as sub-->
 				<!--#if (classChoose)-->           
   					<!--#var  classChoose='false';-->
   				<!--/#if-->         
           		<!--#if (sub.itemType == 'S1' || sub.itemType == 'S6')-->
        				<!--#var  classChoose='true';-->
            	<!--/#if-->
           		<!--#if (sub.itemType == 'G' )-->
        				<!--#var gGift='true';-->
            	<!--/#if-->
            	<!--#if (sub.itemType == 'J' )-->
        				<!--#var jBuy='true';-->
            	<!--/#if-->
	        <!--/#list-->
	       <!--/#if-->
	       
	        <!--#if (classChoose == 'true' )-->
        	    <li class="minicart-pro-item minicart-pro-item-suit <!--#if ( (item.show))-->disabled<!--/#if-->">
            <!--#else-->
                <li class="minicart-pro-item <!--#if ( (item.show)) -->disabled<!--/#if-->">	
            <!--/#if-->
            
            <div class="pro-info clearfix">
           	<!--#if (item.itemType=='B')-->	
           			
                    
                     <!--#if (item.invalidCauseReason == 0) -->
                        <div class="p-choose"><i class="<!--#if (item.selected)-->icon-choose<!--#else-->icon-choose-normal<!--/#if-->" id="icon-choose-{#item.itemkd}" onclick="ec.minicart.click(this)" value="{#item.itemCode}" type="{#item.itemType}" data-itemId="{#item.itemId}"></i></div>
                        <input class="hide" id="checkbox-{#item.itemkd}" name="bundleIds" value="{#item.itemCode}" data-itemId="{#item.itemId}" type="checkbox" <!--#if (item.selected)-->checked="checked"<!--/#if--> />
                        <input class="hide" id="quantity-{#item.itemCode}" value="{#item.qty}" data-type="{#item.itemType}" type="text" <!--#if (item.selected)-->checked="checked"<!--/#if--> />
                    <!--#elseif ((item.invalidCauseReason == 7)&&( !item.numblimit   )&&(!item.show) )-->
                         <div class="p-choose"><i class="<!--#if (item.selected)-->icon-choose<!--#else-->icon-choose-normal<!--/#if-->" id="icon-choose-{#item.itemkd}" onclick="ec.minicart.click(this)" value="{#item.itemCode}" type="{#item.itemType}" data-itemId="{#item.itemId}"></i></div>
                        <input class="hide" id="checkbox-{#item.itemkd}" name="bundleIds" value="{#item.itemCode}" data-itemId="{#item.itemId}" type="checkbox" <!--#if (item.selected)-->checked="checked"<!--/#if--> />
                        <input class="hide" id="quantity-{#item.itemCode}" value="{#item.qty}" data-type="{#item.itemType}" type="text" <!--#if (item.selected)-->checked="checked"<!--/#if--> />
                    <!--#else-->
                        <div class="p-choose"><i class="icon-choose-normal" id="icon-choose-{#item.itemCode}"></i></div>
                        <input class="hide" id="checkbox-{#item.itemCode}" name="bundleIds" value="{#item.itemCode}" type="checkbox" />
                        <input class="hide" id="quantity-{#item.itemCode}" value="{#item.qty}" data-type="{#item.itemType}" type="text" />
                    <!--/#if-->
                    
                    <div class="p-img">
                        <a href="/product/{#item.photoId}.html{#skuId}" title="" target="_blank" onclick = "pushCartProMsg('{#skuId}','/product/{#item.photoId}.html{#skuId}','{#item_index+1}')">
                            <img src="picture/{#item.photopath}78_78_{#item.photoname}" alt="{#item.itemName}" />
                        </a>
                    </div>
                    
                    <div class="p-name">
                        <a href="/product/{#item.photoId}.html{#skuId}" title="{#item.itemName}" target="_blank" onclick = "pushCartProMsg('{#skuId}','/product/{#item.photoId}.html{#skuId}','{#item_index+1}')">{#item.itemName}</a>
                    </div>
           	
           				
            <!--#else-->	
                    <!--#if ((item.invalidCauseReason == 0) &&(!item.bnumblimit) &&(!item.numblimit)) -->
                    	
                        <div class="p-choose">
                        <!--#if (item.itemType == "P") -->
                        <i class="<!--#if (item.selected) -->icon-choose<!--#else-->icon-choose-normal<!--/#if-->" id="icon-choose-{#item.itemkd}" onclick="ec.minicart.click(this)" value="{#item.skuId}" type="{#item.itemType}" data-itemId="{#item.itemId}"></i>
                         <input class="hide" name="skuIds" id="checkbox-{#item.itemkd}" value="{#item.skuId}" data-scode="{#item.itemCode}" data-itemId="{#item.itemId}" type="checkbox" <!--#if (item.selected)-->checked="checked"<!--/#if-->>
            		  <!--#else-->
                        <i class="<!--#if (item.selected) -->icon-choose<!--#else-->icon-choose-normal<!--/#if-->" id="icon-choose-{#item.itemkd}" onclick="ec.minicart.click(this)" value="{#item.skuId}" type="{#item.itemType}" data-itemId="{#item.itemId}"></i>
                        <input class="hide" name="skuIds" id="checkbox-{#item.itemkd}" value="{#item.skuId}" data-scode="{#item.itemCode}" data-itemId="{#item.itemId}" type="checkbox" <!--#if (item.selected)-->checked="checked"<!--/#if-->>
                        <!--/#if-->
                        </div>
                        
                        <input class="hide" id="quantity-{#item.skuId}" value="{#item.qty}" data-type="{#item.itemType}" type="text" <!--#if (item.selected)-->checked="checked"<!--/#if--> />
                     
                     <!--#elseif ((item.invalidCauseReason == 7)&&( !item.numblimit  )&&(!item.show) )-->
                     
                                  <div class="p-choose">
                        <!--#if (item.itemType == "P") -->
                        <i class="<!--#if (item.selected) -->icon-choose<!--#else-->icon-choose-normal<!--/#if-->" id="icon-choose-{#item.itemkd}" onclick="ec.minicart.click(this)" value="{#item.skuId}" type="{#item.itemType}" data-itemId="{#item.itemId}"></i>
                         <input class="hide" name="skuIds" id="checkbox-{#item.itemkd}" value="{#item.skuId}" data-scode="{#item.itemCode}" data-itemId="{#item.itemId}" type="checkbox" <!--#if (item.selected)-->checked="checked"<!--/#if-->>
            		  <!--#else-->
                        <i class="<!--#if (item.selected) -->icon-choose<!--#else-->icon-choose-normal<!--/#if-->" id="icon-choose-{#item.itemkd}" onclick="ec.minicart.click(this)" value="{#item.skuId}" type="{#item.itemType}" data-itemId="{#item.itemId}"></i>
                        <input class="hide" name="skuIds" id="checkbox-{#item.itemkd}" value="{#item.skuId}" data-scode="{#item.itemCode}" data-itemId="{#item.itemId}" type="checkbox" <!--#if (item.selected)-->checked="checked"<!--/#if-->>
                        <!--/#if-->
                        </div>
                        
                        <input class="hide" id="quantity-{#item.skuId}" value="{#item.qty}" data-type="{#item.itemType}" type="text" <!--#if (item.selected)-->checked="checked"<!--/#if--> />
                  
                      
                    <!--#else-->
                        <div class="p-choose"><i class="icon-choose-normal" id="icon-choose-{#item.skuId}"></i></div>
                        <input class="hide" name="skuIds" id="checkbox-{#item.skuId}" value="{#item.skuId}" type="checkbox" />
                        <input class="hide" id="quantity-{#item.skuId}" value="{#item.qty}" data-type="{#item.itemType}" type="text" />
                    <!--/#if-->
                    
        			<!--#if ((item.attrsMap)&&(item.attrsMap.package_code)) -->
        			 <input class="hide" name="newBundle" id="bundle-{#item.itemkd}" value="{#item.attrsMap.package_code}" data-scode="<!--#list item.subItems as sku--><!--#if ((sku.itemType=='B')||(sku.itemType=='P'))-->{#sku.itemCode},<!--/#if--><!--/#list-->" type="checkbox" />
        			<!--/#if-->
        			
        			
                 	 <div class="p-img">
                        <a href="/product/{#item.productId}.html{#skuId}" title="" target="_blank" onclick = "pushCartProMsg('{#skuId}','/product/{#item.productId}.html{#skuId}','{#item_index+1}')">
                            <img src="picture/{#item.photopath}78_78_{#item.photoname}" alt="{#item.itemName}" />
                        </a>
                    </div>
                    
                    <div class="p-name">
                        <a href="/product/{#item.productId}.html{#skuId}" title="{#item.itemName}" target="_blank" onclick = "pushCartProMsg('{#skuId}','/product/{#item.productId}.html{#skuId}','{#item_index+1}')">{#item.itemName}</a>
                    </div>
                 <!--/#if-->   
                    <div class="p-dec">
                        <span class="p-slogan">
                           
                        </span>
                    </div>
                    <div class="p-status">
                        
                        <!--#if (gGift == "true") -->
                        <!--#list item.subItems as gif-->
                         <!--#if (gif.itemType=="G")-->
                        <input type="checkbox" name="giftId" class="hide" value="{#gif.itemCode}" />
                        <!--/#if-->
                        <!--/#list-->
                        <!--/#if-->
                        
                      	<!--#if (   (item.showP)&&( (item.invalidCauseReason==0) ||  ( (item.invalidCauseReason==7)  && (  !item.numblimit  )  )  )    ) -->
 						<div class="p-tags">此商品已失效</div>              
                        <!--#else-->
                        <!--#if (item.invalidCauseReason == 1) -->
                        <div class="p-tags">此商品已失效</div>
                        <!--#elseif (item.invalidCauseReason == 2) -->
                        <div class="p-tags">此商品已失效 </div>
                        <!--#elseif (item.invalidCauseReason == 3) -->
                        <div class="p-tags">此商品已失效 </div>
                        <!--#elseif (item.invalidCauseReason == 4) -->
                        <div class="p-tags">此商品已失效 </div>
                        <!--#elseif (item.invalidCauseReason == 5) -->
                        <div class="p-tags">此商品暂不可购买 </div>
                        <!--#elseif (item.invalidCauseReason == 6) -->
                        <div class="p-tags">此商品暂时缺货 </div>
                        <!--#elseif (item.invalidCauseReason == 7) -->
                        <div class="p-tags">此商品限购{#item.invalidCauseLeftValue}件</div>
                        <!--#elseif (item.invalidCauseReason == 8) -->
                        <div class="p-tags">此商品已失效 </div>
                         <!--#elseif (item.invalidCauseReason == 9) -->
                        <div class="p-tags">此商品不在本渠道销售</div>
                         <!--#elseif (item.invalidCauseReason == 10) -->
                        <div class="p-tags">此商品已失效 </div>
                        <!--/#if-->
                        <!--/#if-->
                        
                        <div class="p-price">
                            <!--#if (item.salePrice != item.originalPrice) --><s>&yen;&nbsp;{#item.originalPrice.toFixed(2)}</s>&nbsp;&nbsp;<!--/#if-->
                            <b>&yen;&nbsp;{#item.salePrice.toFixed(2)}</b><strong><em>x</em><span>{#item.qty}</span></strong>
                        </div>
                    </div>
                </div>
            
					<!--#if ((item.itemType=='B')||(item.itemType=='P'))-->	
					<div class="p-pack <!--#if (item.show) -->disabled<!--/#if-->">
                    <span class="p-mini-tag-suit">套餐</span>
                    <a href="javascript:;" title="<!--#list item.subItems as sku--><!--#if ((sku.itemType=='B')||(sku.itemType=='P'))-->{#sku.itemName}x{#sku.qty}<!--/#if--><!--/#list-->">
                        <!--#list item.subItems as sku-->
                        <!--#if ((sku.itemType=='B')||(sku.itemType=='P'))-->
                        <span>
                        {#sku.itemName}<em>x{#sku.qty}</em>
						</span>
						<!--/#if-->	
                        <!--/#list-->
                    	</a>
                	</div>
					<!--/#if-->	
            		
            	
            	
            
				<!--#if ((classChoose=='true') || (jBuy=='true'))-->
                <div class="pro-other clearfix" id={#classChoose}>
                    <ol>            
					    <!--#list item.subItems as sub-->
                        <!--#if (sub.itemType == "S1") -->
                        
                        <li class="<!--#if (sub.invalidCauseReason != 0) -->disabled<!--/#if-->">
                            <div class="p-title">
                                <span class="p-mini-tag-long">延保</span>{#sub.itemName}
                            </div>
                            <input class="hide" name="extendIds" value="{#sub.skuId}" data-scode="{#sub.itemCode}" type="checkbox" data-id="{#sub.itemId}" />
                            <div class="p-price"><b>&yen;&nbsp;{#sub.salePrice.toFixed(2)}</b><strong><em>x</em><span>{#item.qty}</span></strong></div>
                        </li>
                       
                        <!--/#if-->
                        <!--/#list-->         
	         	
	         			  <!--#list item.subItems as sub-->
                        <!--#if (sub.itemType == "S6") -->
                       
                        <li class="<!--#if (sub.invalidCauseReason != 0) -->disabled<!--/#if-->">
                            <div class="p-title">
                                <span class="p-mini-tag-extend">碎屏保</span>{#sub.itemName}
                            </div>
                            <input class="hide" name="accidentIds" value="{#sub.skuId}" data-scode="{#sub.itemCode}" data-id="{#sub.itemId}" type="checkbox" />
                            <div class="p-price"><b>&yen;&nbsp;{#sub.salePrice.toFixed(2)}</b><strong><em>x</em><span>{#item.qty}</span></strong></div>
                        </li>
                        
                        <!--/#if-->
                        <!--/#list-->
            			
            			<!--#if (jBuy=="true")-->
                        <input type="hidden" id="preferIds_{#item.skuId}" 
                        value="<!--#list item.subItems as ea--><!--#if (ea.itemType == "J") -->{#ea.itemCode},<!--/#if--><!--/#list-->" 
                        skuids="<!--#list item.subItems as ea--><!--#if (ea.itemType == "J") -->{#ea.skuId},<!--/#if--><!--/#list-->" 
                        newId="<!--#list item.subItems as ea--><!--#if (ea.itemType == "J") -->{#ea.itemId},<!--/#if--><!--/#list-->" />
                        <!--/#if-->
                        
                        <!--#list item.subItems as sub-->
                         <!--#if (sub.itemType == "J") -->
                         
                        <li class="<!--#if ((sub.Jlost)||(sub.invalidCauseReason!=0)) -->disabled<!--/#if-->">
                            <div class="p-title p-add">
                                <span class="p-mini-tag-extend">加价购</span>{#sub.itemName}
                            </div>
                            <div class="p-price">
                                <!--#if (sub.salePrice != sub.originalPrice) --><s>&yen;&nbsp;{#sub.originalPrice.toFixed(2)}</s>&nbsp;&nbsp;<!--/#if-->
                                <b>&yen;&nbsp;{#sub.salePrice.toFixed(2)}</b><strong><em>x</em><span>{#sub.qty}</span></strong>
                            </div>
                        </li>
                        
                         <!--/#if-->
                        <!--/#list-->
            
      				</ol>
      			</div>	      
				<!--/#if-->     
				
				<!--#if (gGift=="true")-->
                <input type="hidden" id="gift_sbomCodes_{#item.skuId}" value="<!--#list item.subItems as gift--><!--#if (gift.itemType == "G") -->{#gift.skuId},<!--/#if--><!--/#list-->" />
                <div class="p-pack">
                    <span class="p-mini-tag-suit">配</span>
                    <a href="javascript:;" style="cursor: default;" title="<!--#list item.subItems as gift--><!--#if (gift.itemType == "G") -->{#gift.itemName}x{#gift.qty*item.qty},<!--/#if--><!--/#list-->">
                        <!--#list item.subItems as gift--><!--#if (gift.itemType == "G") -->
                        <span class="<!--#if (gift.invalidCauseReason != 0) -->disabled<!--/#if-->">
                        {#gift.itemName}<em>x{#gift.qty*item.qty}</em>
                        </span> 
						<!--/#if-->					
                        <!--/#list-->
                    </a>
                </div>
                <!--/#if-->
                     
            </li>        
		
		
		  
       
      <!--/#list-->
<!--/#macro-->
</textarea>

<textarea class="hide" id="ec-binding-phone">
    <div id="ec-binding-phone-1" class="ec-binding-phone-box hide">
        <!-- 20141011-绑定安全手机号提示-start -->
        <div class="safetyPhone-prompt-area">
            <div class="h">
                <i></i>
            </div>
            <div class="b">
                <p>为了给您提供更好的服务，建议您将登录的邮箱帐号进行手机号码绑定，绑定后邮箱帐号和绑定的手机号码都可以作为登录帐号，<em style="font-color:red;">不绑定将不能提交订单。</em></p>
            </div>
        </div>
        <div class="box-custom-button">
            <a class="box-button-style-3" href="javascript:;" id="ec-binding-phone-url-1"><span>立即绑定</span></a></a>
        </div>
        <!-- 20141011-绑定安全手机号提示-end -->
    </div>
    <div id="ec-binding-phone-2" class="ec-binding-phone-box hide">
        <!-- 20141424-绑定安全手机号提示-start -->
        <div class="safetyPhone-prompt-area">
            <div class="h">
                <i></i>
            </div>
            <div class="b">
                <p>请您在新打开的页面中完成绑定安全手机号操作。</p>
                <p>完成绑定后请根据您的情况点击下面的按钮。</p>
            </div>
        </div>
        <div class="box-custom-button">
            <a class="box-button-style-3" href="javascript:;" onclick="ec.binding.resetShow()"><span>绑定成功</span></a><a class="box-change box-button-style-3" href="javascript:;" id="ec-binding-phone-url-2"><span>重新绑定</span></a>
        </div>
        <!-- 20141424-绑定安全手机号提示-end -->
    </div>
    <div id="ec-binding-phone-3" class="ec-binding-phone-box hide">
        <!-- 20141424-安全手机号绑定提示失败-start -->
        <div class="box-prompt-error-area">
            <div class="h">
                <i></i>
            </div>
            <div class="b">
                <p class="tal f12">对不起，您未成功绑定手机号。</p>
                <p class="tal f12 black">为了您在商城正常购物、保护您的权益，请您绑定一个手机号码以享受华为商城的所有服务。</p>
            </div>
        </div>
        <div class="box-custom-button">
            <a href="javascript:;" class="box-button-style-3" onclick="ec.binding.showOk()" id="ec-binding-phone-url-3" ><span>立即绑定</span></a>
        </div>
        <!-- 20141424-安全手机号绑定提示失败-end -->
    </div>
    <div id="ec-binding-phone-4" class="ec-binding-phone-box hide">
        <!-- 20150824-手机号绑定未绑定-start -->
        <div class="safetyPhone-prompt-area">
            <div class="h">
                <i></i>
            </div>
            <div class="b">
                <p class="tal f12">为了给您提供更好的服务，建议您将登录的邮箱帐号进行手机号码绑定，绑定后邮箱帐号和绑定的手机号码都可以作为登录帐号；<em style="font-color:red;">自</em><em id="bindEndDate4State4" style="font-color:red;"></em><em style="font-color:red;">号起，若不绑定将不能提交订单。</em></p>
            </div>
        </div>
        <div>&nbsp;</div>
        <div class="box-custom-button">
            <a class="box-change box-button-style-3" href="javascript:;" id="ec-binding-phone-url-4"><span>立即绑定</span></a>
            <a class="box-button-style-1" href="javascript:;" onclick="ec.binding.closeState4();"><span>下次再说</span></a>
        </div>
        <!-- 20150824-安全手机号绑定提示失败-end -->
    </div>
    <div id="ec-binding-phone-5" class="ec-binding-phone-box hide">
        <!-- 20141424-安全手机号绑定提示失败-start -->
        <div class="box-prompt-error-area">
            <div class="h">
                <i></i>
            </div>
            <div class="a">
                <p class="tal f12">您输入的手机已被注册，您可以选择使用手机号重新登录或者重新绑定手机！</p>
            </div>
        </div>
        <div>&nbsp;</div>
        <div class="box-custom-button">
            <a class="box-button-style-3" href="https://www.vmall.com/account/login" id="ec-binding-phone-reLogin-5"><span>重新登录</span></a>')
            <a class="box-change box-button-style-3" href="javascript:;" id="ec-binding-phone-url-5"><span>重新绑定</span></a>
        </div>
        <!-- 20141424-安全手机号绑定提示失败-end -->
    </div>
</textarea><!-- 2017-02-15-头部-start -->
<div class="header">
    <div class="layout">
        <div class="left">
            <!-- 2017-02-15-logo-start -->
            <div class="logo"><a href="https://www.vmall.com/" title="Vmall.com - 华为商城" onclick = "pushLogoClickMsg('https://res.vmallres.com/pimages/temp/product/201706301129294766528.png','https://www.vmall.com/')"><img src="picture/201706301129294766528.png" alt="Vmall.com - 华为商城"/></a></div>
            <!-- 2017-02-15-logo-end -->
            
            <!-- 2017-06-19-导航-start --> 
                <div class="naver">
    <ul id="naver" class="clearfix">
    	    					<li id="zxnav_0" data-id="0">
        					<a href="/list-36" target="_blank"><span>手机</span></a>
        					<input id="zxnav_0_flag" type="hidden" autocomplete="off" value="no">
							<input id="zxnav_0_name" type="hidden" autocomplete="off" value="手机">
        				</li>
    					<li id="zxnav_1" data-id="1">
        					<a href="/list-40" target="_blank"><span>笔记本 &amp; 平板</span></a>
        					<input id="zxnav_1_flag" type="hidden" autocomplete="off" value="no">
							<input id="zxnav_1_name" type="hidden" autocomplete="off" value="笔记本 &amp; 平板">
        				</li>
    					<li id="zxnav_2" data-id="2">
        					<a href="/list-59" target="_blank"><span>智能穿戴</span></a>
        					<input id="zxnav_2_flag" type="hidden" autocomplete="off" value="no">
							<input id="zxnav_2_name" type="hidden" autocomplete="off" value="智能穿戴">
        				</li>
    					<li id="zxnav_3" data-id="3">
        					<a href="/list-43" target="_blank"><span>智能家居</span></a>
        					<input id="zxnav_3_flag" type="hidden" autocomplete="off" value="no">
							<input id="zxnav_3_name" type="hidden" autocomplete="off" value="智能家居">
        				</li>
    					<li id="zxnav_4" data-id="4">
        					<a href="/list-54" target="_blank"><span>通用配件</span></a>
        					<input id="zxnav_4_flag" type="hidden" autocomplete="off" value="no">
							<input id="zxnav_4_name" type="hidden" autocomplete="off" value="通用配件">
        				</li>
    					<li id="zxnav_5" data-id="5">
        					<a href="/list-47" target="_blank"><span>专属配件</span></a>
        					<input id="zxnav_5_flag" type="hidden" autocomplete="off" value="no">
							<input id="zxnav_5_name" type="hidden" autocomplete="off" value="专属配件">
        				</li>
    </ul>
</div>
<div class="naver-sub">
            <div id="naverSub00" class="naver-sub-wrap hide">
                <div class="p-title clearfix">
                    <div class="s1 fl">
                        <a href="/list-36" target="_blank" class="">全部手机></a>
                    </div>
                    <div class="s2 fl clearfix">
									<input id="child_name" type="hidden" value="荣耀">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-75" target="_blank" class="fl">荣耀</a> 	
									<input id="child_name" type="hidden" value="HUAWEI P系列">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-285" target="_blank" class="fl">HUAWEI P系列</a> 	
									<input id="child_name" type="hidden" value="荣耀畅玩系列">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-77" target="_blank" class="fl">荣耀畅玩系列</a> 	
									<input id="child_name" type="hidden" value="HUAWEI Mate系列">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-76" target="_blank" class="fl">HUAWEI Mate系列</a> 	
									<input id="child_name" type="hidden" value="HUAWEI nova系列">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-277" target="_blank" class="fl">HUAWEI nova系列</a> 	
									<input id="child_name" type="hidden" value="HUAWEI 麦芒系列">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-81" target="_blank" class="fl">HUAWEI 麦芒系列</a> 	
									<input id="child_name" type="hidden" value="华为畅享系列">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-275" target="_blank" class="fl">华为畅享系列</a> 	
									<input id="child_name" type="hidden" value="移动4G+专区">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-38" target="_blank" class="fl">移动4G+专区</a> 	
                    </div>
                    <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>-->
                </div>
                
                <ul id="zxnav_0_prolist" class="grid-list clearfix">
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/357339492.html" onclick="pushNaverCategoryMsg(0,'/product/357339492.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1509691622924mp.jpg"></p>
								<div class="grid-title">HUAWEI Mate 10 Pro</div>
								<p class="grid-price">&yen;4999.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/135859985.html" onclick="pushNaverCategoryMsg(1,'/product/135859985.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1530667438922mp.jpg"></p>
								<div class="grid-title">HUAWEI nova 2s</div>
								<p class="grid-price">&yen;2399.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/10086915330134.html" onclick="pushNaverCategoryMsg(2,'/product/10086915330134.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1522652355294mp.jpg"></p>
								<div class="grid-title">HUAWEI P20</div>
								<p class="grid-price">&yen;3788.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/10086785341226.html" onclick="pushNaverCategoryMsg(3,'/product/10086785341226.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1523952379540mp.jpg"></p>
								<div class="grid-title">荣耀10</div>
								<p class="grid-price">&yen;2599.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/10086576787089.html" onclick="pushNaverCategoryMsg(4,'/product/10086576787089.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1527925630247mp.jpg"></p>
								<div class="grid-title">荣耀Play</div>
								<p class="grid-price">&yen;1999.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/10086291890006.html" onclick="pushNaverCategoryMsg(5,'/product/10086291890006.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1527841436401mp.jpg"></p>
								<div class="grid-title">荣耀9i</div>
								<p class="grid-price">&yen;1399.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/10086568474763.html" onclick="pushNaverCategoryMsg(6,'/product/10086568474763.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1531368626642mp.jpg"></p>
								<div class="grid-title">HUAWEI nova 3</div>
								<p class="grid-price">&yen;2999.00</p>
							</a>
						</li>
                	<!--通过添加current 来实现 hover效果-->
	                        <input id="name_10086795400652" type="hidden" value="HUAWEI nova 3">
	                        <input id="name_10086608202937" type="hidden" value="荣耀Play">
	                        <input id="name_10086425688564" type="hidden" value="HUAWEI P20">
	                        <input id="name_10086671638910" type="hidden" value="荣耀9i">
	                        <input id="name_10086431508342" type="hidden" value="荣耀10">
	                        <input id="name_838609944" type="hidden" value="HUAWEI nova 2s">
	                        <input id="name_209635140" type="hidden" value="HUAWEI Mate 10 Pro">
                </ul>
                <input id="zxnav_0_skuIds" type="hidden" value="10086795400652,10086608202937,10086425688564,10086671638910,10086431508342,838609944,209635140,">
            </div>
            <div id="naverSub01" class="naver-sub-wrap hide">
                <div class="p-title clearfix">
                    <div class="s1 fl">
                        <a href="/list-40" target="_blank" class="">全部笔记本 &amp; 平板></a>
                    </div>
                    <div class="s2 fl clearfix">
									<input id="child_name" type="hidden" value="平板电脑">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-41" target="_blank" class="fl">平板电脑</a> 	
									<input id="child_name" type="hidden" value="笔记本电脑">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-42" target="_blank" class="fl">笔记本电脑</a> 	
									<input id="child_name" type="hidden" value="笔记本配件">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-317"  class="fl">笔记本配件</a> 	
                    </div>
                    <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>-->
                </div>
                
                <ul id="zxnav_1_prolist" class="grid-list clearfix">
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/405225095.html" onclick="pushNaverCategoryMsg(0,'/product/405225095.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1494904534464mp.jpg"></p>
								<div class="grid-title">荣耀畅玩平板2 9.6英寸</div>
								<p class="grid-price">&yen;999.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/312318362.html" onclick="pushNaverCategoryMsg(1,'/product/312318362.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1495096799385mp.jpg"></p>
								<div class="grid-title">华为平板 M3 青春版</div>
								<p class="grid-price">&yen;1899.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/21046116.html" onclick="pushNaverCategoryMsg(2,'/product/21046116.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1513592270915mp.jpg"></p>
								<div class="grid-title">HUAWEI MateBook D</div>
								<p class="grid-price">&yen;5188.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/306161153.html" onclick="pushNaverCategoryMsg(3,'/product/306161153.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1500629825123mp.jpg"></p>
								<div class="grid-title">荣耀畅玩平板2 7英寸</div>
								<p class="grid-price">&yen;599.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/10086030735533.html" onclick="pushNaverCategoryMsg(4,'/product/10086030735533.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1531378475117mp.jpg"></p>
								<div class="grid-title">华为平板 M5 8.4英寸</div>
								<p class="grid-price">&yen;2488.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/10086000689735.html" onclick="pushNaverCategoryMsg(5,'/product/10086000689735.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1523525059850mp.jpg"></p>
								<div class="grid-title">HUAWEI MateBook X Pro</div>
								<p class="grid-price">&yen;7988.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/10086350349834.html" onclick="pushNaverCategoryMsg(6,'/product/10086350349834.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1524125706599mp.jpg"></p>
								<div class="grid-title">荣耀MagicBook</div>
								<p class="grid-price">&yen;5699.00</p>
							</a>
						</li>
                	<!--通过添加current 来实现 hover效果-->
	                        <input id="name_10086514290855" type="hidden" value="HUAWEI MateBook X Pro">
	                        <input id="name_10086165908070" type="hidden" value="荣耀MagicBook">
	                        <input id="name_10086483867071" type="hidden" value="华为平板 M5 8.4英寸">
	                        <input id="name_887012722" type="hidden" value="荣耀畅玩平板2 9.6英寸">
	                        <input id="name_777872533" type="hidden" value="HUAWEI MateBook D">
	                        <input id="name_234223211" type="hidden" value="荣耀畅玩平板2 7英寸">
	                        <input id="name_547224994" type="hidden" value="华为平板 M3 青春版">
                </ul>
                <input id="zxnav_1_skuIds" type="hidden" value="10086514290855,10086165908070,10086483867071,887012722,777872533,234223211,547224994,">
            </div>
            <div id="naverSub02" class="naver-sub-wrap hide">
                <div class="p-title clearfix">
                    <div class="s1 fl">
                        <a href="/list-59" target="_blank" class="">全部智能穿戴></a>
                    </div>
                    <div class="s2 fl clearfix">
									<input id="child_name" type="hidden" value="手环">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-241" target="_blank" class="fl">手环</a> 	
									<input id="child_name" type="hidden" value="手表">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-247" target="_blank" class="fl">手表</a> 	
									<input id="child_name" type="hidden" value="VR">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-329" target="_blank" class="fl">VR</a> 	
                    </div>
                    <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>-->
                </div>
                
                <ul id="zxnav_2_prolist" class="grid-list clearfix">
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/184868333.html" onclick="pushNaverCategoryMsg(0,'/product/184868333.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1496800616726mp.jpg"></p>
								<div class="grid-title">荣耀手表 S1</div>
								<p class="grid-price">&yen;549.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/369652507.html" onclick="pushNaverCategoryMsg(1,'/product/369652507.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1528879217312mp.jpg"></p>
								<div class="grid-title">荣耀畅玩手环 A2</div>
								<p class="grid-price">&yen;149.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/993405255.html" onclick="pushNaverCategoryMsg(2,'/product/993405255.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1496627594147mp.jpg"></p>
								<div class="grid-title">荣耀手环3</div>
								<p class="grid-price">&yen;149.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/798789671.html" onclick="pushNaverCategoryMsg(3,'/product/798789671.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1498099225036mp.jpg"></p>
								<div class="grid-title">华为运动手环</div>
								<p class="grid-price">&yen;388.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/270976970.html" onclick="pushNaverCategoryMsg(4,'/product/270976970.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1507769117117mp.jpg"></p>
								<div class="grid-title">HUAWEI WATCH 2 Pro</div>
								<p class="grid-price">&yen;2588.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/10086572258093.html" onclick="pushNaverCategoryMsg(5,'/product/10086572258093.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1530684880869mp.jpg"></p>
								<div class="grid-title">华为手环 B5</div>
								<p class="grid-price">&yen;999.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/922041175.html" onclick="pushNaverCategoryMsg(6,'/product/922041175.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1516357223894mp.jpg"></p>
								<div class="grid-title">HUAWEI VR 2</div>
								<p class="grid-price">&yen;1999.00</p>
							</a>
						</li>
                	<!--通过添加current 来实现 hover效果-->
	                        <input id="name_10086972979696" type="hidden" value="华为手环 B5">
	                        <input id="name_419942774" type="hidden" value="荣耀手环3">
	                        <input id="name_976288056" type="hidden" value="HUAWEI WATCH 2 Pro">
	                        <input id="name_860462675" type="hidden" value="荣耀畅玩手环 A2">
	                        <input id="name_814138592" type="hidden" value="华为运动手环">
	                        <input id="name_969439161" type="hidden" value="荣耀手表 S1">
	                        <input id="name_86471537" type="hidden" value="HUAWEI VR 2">
                </ul>
                <input id="zxnav_2_skuIds" type="hidden" value="10086972979696,419942774,976288056,860462675,814138592,969439161,86471537,">
            </div>
            <div id="naverSub03" class="naver-sub-wrap hide">
                <div class="p-title clearfix">
                    <div class="s1 fl">
                        <a href="/list-43" target="_blank" class="">全部智能家居></a>
                    </div>
                    <div class="s2 fl clearfix">
									<input id="child_name" type="hidden" value="路由器">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-45"  class="fl">路由器</a> 	
									<input id="child_name" type="hidden" value="电视盒子">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-46"  class="fl">电视盒子</a> 	
									<input id="child_name" type="hidden" value="照明">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-371"  class="fl">照明</a> 	
									<input id="child_name" type="hidden" value="清洁">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-421"  class="fl">清洁</a> 	
									<input id="child_name" type="hidden" value="子母/分布式路由">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-263"  class="fl">子母/分布式路由</a> 	
									<input id="child_name" type="hidden" value="电力猫/wifi放大器">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-44"  class="fl">电力猫/wifi放大器</a> 	
									<input id="child_name" type="hidden" value="随行wifi">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-97"  class="fl">随行wifi</a> 	
									<input id="child_name" type="hidden" value="节能">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-423"  class="fl">节能</a> 	
									<input id="child_name" type="hidden" value="环境">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-373"  class="fl">环境</a> 	
									<input id="child_name" type="hidden" value="安防">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-379"  class="fl">安防</a> 	
									<input id="child_name" type="hidden" value="健康">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-403"  class="fl">健康</a> 	
									<input id="child_name" type="hidden" value="厨电">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-377"  class="fl">厨电</a> 	
									<input id="child_name" type="hidden" value="影音">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-407"  class="fl">影音</a> 	
									<input id="child_name" type="hidden" value="卫浴">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-375" target="_blank" class="fl">卫浴</a> 	
									<input id="child_name" type="hidden" value="其他">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-381" target="_blank" class="fl">其他</a> 	
                    </div>
                    <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>-->
                </div>
                
                <ul id="zxnav_3_prolist" class="grid-list clearfix">
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/3053.html" onclick="pushNaverCategoryMsg(0,'/product/3053.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1466760144449mp.jpg"></p>
								<div class="grid-title">荣耀路由Pro</div>
								<p class="grid-price">&yen;328.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/310439420.html" onclick="pushNaverCategoryMsg(1,'/product/310439420.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1495075512638mp.jpg"></p>
								<div class="grid-title">华为随行WiFi 2</div>
								<p class="grid-price">&yen;499.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/202235028.html" onclick="pushNaverCategoryMsg(2,'/product/202235028.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1507802394680mp.jpg"></p>
								<div class="grid-title">荣耀分布式路由</div>
								<p class="grid-price">&yen;899.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/611513952.html" onclick="pushNaverCategoryMsg(3,'/product/611513952.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1507545954611mp.jpg"></p>
								<div class="grid-title">荣耀路由2</div>
								<p class="grid-price">&yen;199.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/515922308.html" onclick="pushNaverCategoryMsg(4,'/product/515922308.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1507605356006mp.jpg"></p>
								<div class="grid-title">华为路由WS5100</div>
								<p class="grid-price">&yen;159.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/10086500145070.html" onclick="pushNaverCategoryMsg(5,'/product/10086500145070.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1521184530843mp.jpg"></p>
								<div class="grid-title">华为路由 Q2</div>
								<p class="grid-price">&yen;799.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/10086603105278.html" onclick="pushNaverCategoryMsg(6,'/product/10086603105278.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1521187245348mp.jpg"></p>
								<div class="grid-title">品多智能指纹门锁M1</div>
								<p class="grid-price">&yen;2999.00</p>
							</a>
						</li>
                	<!--通过添加current 来实现 hover效果-->
	                        <input id="name_964803411" type="hidden" value="荣耀分布式路由">
	                        <input id="name_22571160" type="hidden" value="华为路由WS5100">
	                        <input id="name_480239066" type="hidden" value="荣耀路由2">
	                        <input id="name_10086061866500" type="hidden" value="华为路由 Q2">
	                        <input id="name_7219" type="hidden" value="荣耀路由Pro">
	                        <input id="name_190047935" type="hidden" value="华为随行WiFi 2">
	                        <input id="name_10086114286979" type="hidden" value="品多智能指纹门锁M1">
                </ul>
                <input id="zxnav_3_skuIds" type="hidden" value="964803411,22571160,480239066,10086061866500,7219,190047935,10086114286979,">
            </div>
            <div id="naverSub04" class="naver-sub-wrap hide">
                <div class="p-title clearfix">
                    <div class="s1 fl">
                        <a href="/list-54" target="_blank" class="">全部通用配件></a>
                    </div>
                    <div class="s2 fl clearfix">
									<input id="child_name" type="hidden" value="移动电源">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-56" target="_blank" class="fl">移动电源</a> 	
									<input id="child_name" type="hidden" value="耳机">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-229" target="_blank" class="fl">耳机</a> 	
									<input id="child_name" type="hidden" value="音箱">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-55" target="_blank" class="fl">音箱</a> 	
									<input id="child_name" type="hidden" value="自拍杆/支架">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-231" target="_blank" class="fl">自拍杆/支架</a> 	
									<input id="child_name" type="hidden" value="充电器/线材">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-58" target="_blank" class="fl">充电器/线材</a> 	
									<input id="child_name" type="hidden" value="U盘/存储卡">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-83" target="_blank" class="fl">U盘/存储卡</a> 	
									<input id="child_name" type="hidden" value="摄像机/镜头">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-235" target="_blank" class="fl">摄像机/镜头</a> 	
									<input id="child_name" type="hidden" value="智能硬件">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-239" target="_blank" class="fl">智能硬件</a> 	
									<input id="child_name" type="hidden" value="生活周边">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-237" target="_blank" class="fl">生活周边</a> 	
                    </div>
                    <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>-->
                </div>
                
                <ul id="zxnav_4_prolist" class="grid-list clearfix">
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/706470980.html" onclick="pushNaverCategoryMsg(0,'/product/706470980.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1484107261446mp.jpg"></p>
								<div class="grid-title">华为10000mAh 移动电源  充电宝</div>
								<p class="grid-price">&yen;159.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/875753311.html" onclick="pushNaverCategoryMsg(1,'/product/875753311.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1489548822739mp.jpg"></p>
								<div class="grid-title">荣耀xSport运动蓝牙耳机</div>
								<p class="grid-price">&yen;249.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/210876330.html" onclick="pushNaverCategoryMsg(2,'/product/210876330.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1494492831899mp.jpg"></p>
								<div class="grid-title">ROCK-M车载手机支架</div>
								<p class="grid-price">&yen;78.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/194128141.html" onclick="pushNaverCategoryMsg(3,'/product/194128141.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1518397678332mp.jpg"></p>
								<div class="grid-title">荣耀体脂秤</div>
								<p class="grid-price">&yen;169.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/10086576602689.html" onclick="pushNaverCategoryMsg(4,'/product/10086576602689.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1524193497007mp.jpg"></p>
								<div class="grid-title">华为主动降噪耳机3</div>
								<p class="grid-price">&yen;399.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/10086872833199.html" onclick="pushNaverCategoryMsg(5,'/product/10086872833199.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1528429275342mp.jpg"></p>
								<div class="grid-title">荣耀心晴耳机</div>
								<p class="grid-price">&yen;129.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/936223974.html" onclick="pushNaverCategoryMsg(6,'/product/936223974.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1512699241768mp.jpg"></p>
								<div class="grid-title">华为智能体脂秤</div>
								<p class="grid-price">&yen;169.00</p>
							</a>
						</li>
                	<!--通过添加current 来实现 hover效果-->
	                        <input id="name_937100113" type="hidden" value="华为10000mAh 移动电源  充电宝">
	                        <input id="name_189161731" type="hidden" value="荣耀xSport运动蓝牙耳机">
	                        <input id="name_534967719" type="hidden" value="华为智能体脂秤">
	                        <input id="name_10086132726986" type="hidden" value="荣耀心晴耳机">
	                        <input id="name_10086097429247" type="hidden" value="华为主动降噪耳机3">
	                        <input id="name_553811697" type="hidden" value="荣耀体脂秤">
	                        <input id="name_412884028" type="hidden" value="ROCK-M车载手机支架">
                </ul>
                <input id="zxnav_4_skuIds" type="hidden" value="937100113,189161731,534967719,10086132726986,10086097429247,553811697,412884028,">
            </div>
            <div id="naverSub05" class="naver-sub-wrap hide">
                <div class="p-title clearfix">
                    <div class="s1 fl">
                        <a href="/list-47" target="_blank" class="">全部专属配件></a>
                    </div>
                    <div class="s2 fl clearfix">
									<input id="child_name" type="hidden" value="保护壳">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-48" target="_blank" class="fl">保护壳</a> 	
									<input id="child_name" type="hidden" value="保护套">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-49" target="_blank" class="fl">保护套</a> 	
									<input id="child_name" type="hidden" value="贴膜">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-50" target="_blank" class="fl">贴膜</a> 	
									<input id="child_name" type="hidden" value="盒子专属配件">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-223" target="_blank" class="fl">盒子专属配件</a> 	
									<input id="child_name" type="hidden" value="表带">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-225" target="_blank" class="fl">表带</a> 	
									<input id="child_name" type="hidden" value="触控笔">
									<input id="child_status" type="hidden" value="1">
									<input id="child_type" type="hidden" value="1">
									<a href="/list-397" target="_blank" class="fl">触控笔</a> 	
                    </div>
                    <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>-->
                </div>
                
                <ul id="zxnav_5_prolist" class="grid-list clearfix">
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/730942535.html" onclick="pushNaverCategoryMsg(0,'/product/730942535.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1497318865289mp.jpg"></p>
								<div class="grid-title">荣耀9 炫彩保护壳</div>
								<p class="grid-price">&yen;109.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/10086287469614.html" onclick="pushNaverCategoryMsg(1,'/product/10086287469614.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1524563372310mp.jpg"></p>
								<div class="grid-title">HUAWEI P20 Pro手机导航套件</div>
								<p class="grid-price">&yen;199.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/10086668532068.html" onclick="pushNaverCategoryMsg(2,'/product/10086668532068.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1531796854776mp.jpg"></p>
								<div class="grid-title">HUAWEI nova 3 硅胶保护壳</div>
								<p class="grid-price">&yen;69.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/862627470.html" onclick="pushNaverCategoryMsg(3,'/product/862627470.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1512723338638mp.jpg"></p>
								<div class="grid-title">荣耀V10 PU磁吸保护套</div>
								<p class="grid-price">&yen;119.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/10086251302060.html" onclick="pushNaverCategoryMsg(4,'/product/10086251302060.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1523611666567mp.jpg"></p>
								<div class="grid-title">华为平板 M5 8.4英寸 翻盖保护套</div>
								<p class="grid-price">&yen;129.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/10086874783322.html" onclick="pushNaverCategoryMsg(5,'/product/10086874783322.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1523436939454mp.jpg"></p>
								<div class="grid-title">HUAWEI Mate RS 保时捷设计 智能视窗皮套</div>
								<p class="grid-price">&yen;1999.00</p>
							</a>
						</li>
                		<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)">
							<a class="thumb" target="_blank" href="/product/100667556.html" onclick="pushNaverCategoryMsg(6,'/product/100667556.html')">
								<p class="grid-img"><img alt="" src="picture/142_142_1515374504627mp.jpg"></p>
								<div class="grid-title">FKM氟橡胶表带</div>
								<p class="grid-price">&yen;149.00</p>
							</a>
						</li>
                	<!--通过添加current 来实现 hover效果-->
	                        <input id="name_10086348260851" type="hidden" value="HUAWEI P20 Pro手机导航套件">
	                        <input id="name_70658365" type="hidden" value="荣耀9 炫彩保护壳">
	                        <input id="name_10086141297300" type="hidden" value="HUAWEI Mate RS 保时捷设计 智能视窗皮套">
	                        <input id="name_780670805" type="hidden" value="荣耀V10 PU磁吸保护套">
	                        <input id="name_10086280278904" type="hidden" value="华为平板 M5 8.4英寸 翻盖保护套">
	                        <input id="name_10086233654524" type="hidden" value="HUAWEI nova 3 硅胶保护壳">
	                        <input id="name_249481832" type="hidden" value="FKM氟橡胶表带">
                </ul>
                <input id="zxnav_5_skuIds" type="hidden" value="10086348260851,70658365,10086141297300,780670805,10086280278904,10086233654524,249481832,">
            </div>
</div>
<script>
	function pushNaverCategoryMsg(index,url)
	{
		var skuids = $("#zxnav_"+index+"_skuIds").val().split(",");
		var skuid = skuids[index]; 
		var value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
    		{
			"SKUID":skuid,
  			"URL":url,
  			"click":"1"
  			}
		};
		ec.code.addAnalytics({hicloud:true});
		_paq.push(["trackLink","300020202", "link", value]);
	}
</script>
            <!-- 2017-06-19-导航-end -->
        </div>
        
        <div class="right">
            <!-- 2017-02-15-搜索条-焦点为search-form增加className:hover -start -->
            <div class="search-bar relative" id="searchBar-area">
                <div class="search-bar-form" id="search-bar-form">
                   <form method="get" onsubmit="return search(this)">
                        <input type="text" class="text" maxlength="200" id="search-kw" autocomplete="off"/>
                        <input type="submit" class="button" value="搜索" />
                            <input type="hidden" id="channelType" name="channelType" value="0"/>
                        <input type="hidden" id="default-search" value="HUAWEI P20 Pro|荣耀10"/>
                    </form>
                </div>
                <div class="search-bar-key" id="search-bar-key">
                        <div class="searchBar-key">
		<a href="/search?keyword=HUAWEI+P20+Pro" target="_blank" rel="nofollow">HUAWEI P20 Pro</a>
		<a href="/search?keyword=%E8%8D%A3%E8%80%80Play" target="_blank" rel="nofollow">荣耀Play</a>
</div>
                </div>
                 <div id="search-history" class="search-bar-history hide">
                	<p>
                        <label>历史记录</label><span id="cleanUp" class="search-history-btn">清空历史数据</span>
                    </p>
                    <ul id="search-history-list"></ul>
                </div>
            </div>
            <!-- 2017-02-15-搜索条-end -->
        </div>
    </div>
</div><!-- 2017-02-15-头部-end -->
<script type="text/javascript">
   ec.load("ec.slider", {
   loadType : "lazy", 
   callback : function() {
        $("#ec-erweima").slider({
                 width:     91, //必须
                 height:     96, //必须
                 style : 1, //1显示分页，2只显示左右箭头,3两者都显示
                 pause : 120000, //间隔时间
                 auto : true
        });
   }
});
ec.ready(function(){
    $("#search-kw").val('');
    if (typeof (topSearchKeyword) != "undefined") {
        var keyword = topSearchKeyword;
        if (keyword != null && keyword != "") {
            $("#search-kw").val(ec.freemarkerDecode(keyword));
            $("#search-bar-key").css("display", "none");
        }
    }
    
    $('#search-history').bind({
        mouseover:function(){
            $("#search-history").show();
        },
        mousedown:function(e){
            $("#search-kw").blur();
            $("#search-bar-key").hide();
            $("#search-history").show();
            if($(e.target)[0].nodeName=='A'){
                $("#search-kw").val(decodeURIComponent($(e.target).attr('data-value')));
                //如果是IE浏览器，则需要重新执行跳转
                if (ec.checkBrowerIE()) {
                    window.location.href=$(e.target).attr('href');
                }
            } else if($(e.target)[0].nodeName == 'SPAN'){
                ec.search.deleteSearchHistory();
                $("#search-history").hide();
            }
        }
    
    });
    
    $("#search-kw").bind({
        focus:function() {
            $("#search-bar-key").hide();
            //隐藏搜索历史
            $("#search-history").hide();
            if ($("#search-kw").val().trim() == '') {
                //查询用户搜索历史
                ec.search.querySearchHistory();
            }
        },
        blur:function() {
            if ($("#search-kw").val().trim() == '') {
                $("#search-bar-key").show();
            } else {
                $("#search-bar-key").hide();
            }
            //隐藏搜索历史
            $("#search-history").hide();
        },
        keydown:function(){
            //隐藏搜索历史
            $("#search-history").hide();
        },
        keyup:function(){
            if ($("#search-kw").val().trim() == '') {
                ec.search.querySearchHistory();
            } else {
                //隐藏搜索历史
                $("#search-history").hide();
            }
        }
    });
    
    ec.ui.hover("#searchBar-area" , {captureInput : true });
});
ec.code.addService({showService : true , showTools : true , live800Url4Web : "http://robotim.vmall.com/live800/chatClient/chatbox.jsp?companyID=8922&configID=10&location=B_002&chatfrom=web&channelType=Vmall%e5%95%86%e5%9f%8e%e7%94%b5%e8%84%91%e7%ab%af"});

//头部logo点击上报
function pushLogoClickMsg(adid,url)
{
	var value = {
		"UID":ec.util.cookie.get("uid"),
		"TID":getPtid(),
		"TIME":getTime(),
		"CONTENT":
		{
		"ADID":adid,
  		"URL":url,
  		"click":"1"
  		}
	};
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300020101", "link", value]);
}

//类别横向点击上报
$("#naver").find("li").find("a").click(function(){
	var url = $(this).attr("href");
	var name  =$(this).find("span").html();
	var value = {
		"UID":ec.util.cookie.get("uid"),
		"TID":getPtid(),
		"TIME":getTime(),
		"CONTENT":
		{
		"name":name,
  		"URL":url,
  		"click":"1"
  		}
	};
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300020201", "link", value]);
});

$(".s1.fl").find("a").click(function(){
	var url = $(this).attr("href");
	var name = $(this).html().substring(0,$(this).html().length-1);
	var value = {
		"UID":ec.util.cookie.get("uid"),
		"TID":getPtid(),
		"TIME":getTime(),
		"CONTENT":
		{
		"name":name,
  		"URL":url,
  		"click":"1"
  		}
	};
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300020201", "link", value]);
});

$(".s2.fl.clearfix").find("a").click(function(){
	var url = $(this).attr("href");
	var name = $(this).html();
	var value = {
		"UID":ec.util.cookie.get("uid"),
		"TID":getPtid(),
		"TIME":getTime(),
		"CONTENT":
		{
		"name":name,
  		"URL":url,
  		"click":"1"
  		}
	};
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300020201", "link", value]);
});

$(".grid-list.clearfix").find("li").find("a").live("click",function(){
		var num = $(this).parent().parent().attr("id").substring(6,7);
		var index = $("#zxnav_"+num+"_prolist li").index($(this).parent());
		var skuid = $("#zxnav_"+num+"_skuIds").val();
		var skuids = skuid.split(",");
		var skuId = skuids[index];
		var value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
			{
				"SKUID":skuId ,
  				"URL":this.href,
  				"click":"1"
  			}
		};
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300020202", "link", value]);
});
</script><script>
//显示导航下拉菜单商品数据
function showProList(id){
     //查询标志
    var flag=$("#"+id+"_flag").val();
     var skuIds=$("#"+id+"_skuIds").val();
     
     var mediaPath = "https://res.vmallres.com/pimages/";
     //未查询过且有商品时才能执行
     if(skuIds!="" && flag=="no"){
         skuIds=skuIds.substring(0,skuIds.length-1);
         var skuIdArr=skuIds.split(",");

        skuIdArr=removeDuplicatedItem(skuIdArr);
        
         //标记标志位
         $("#"+id+"_flag").val("yes");
         $.ajax({
            url :  "/querySbomInfo.json?skuIdsStr="+skuIds,
            async:true,//使用异步的Ajax请求
            type : "GET",
            dataType : "json",
            timeout : 10000,
            success : function(json){
                if(json.success){
                    var infoMap=json.sbomInfoMap;
                    var html = '';
                    for(var i=0;i<skuIdArr.length;i++){
                        var skuId=skuIdArr[i];
                        var sbomInfo=json.sbomInfoMap[skuId];
                        if(sbomInfo!=null){
                             //商品图片URL
                            var imgPath = mediaPath + sbomInfo.photoPath+"142_142_"+sbomInfo.photoName;
                            //商品URL
                            var urlPath = "/product/"+sbomInfo.disPrdId+".html";
                            //商品名称
                            //var proName = sbomInfo.sbomName;
                            var proName = $('#name_' + skuId).val();
                            var price;
                            //取得价格显示方式
                            var priceMode = sbomInfo.priceMode;
                            if (priceMode == 2 || sbomInfo.price == 0) {
                                price = "<span>暂无报价</span>";
                            } else {
                                price = "&yen;" + sbomInfo.price;
                            }
                            //一级分类导航名称
                            var oneNavName=$("#"+id+"_name").val();
                            var onShowName="分类导航_"+oneNavName+"_"+sbomInfo.sbomCode;
                            //var clickContent="_paq.push(['trackLink','"+onShowName+"', 'link', ' ']);ec.code.addAnalytics({hicloud:true});";
                            html += '<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)" >';
                            html += '     <a class="thumb" target="_blank" href="'+urlPath+'">';
                            html += '         <p class="grid-img">';
                            html += '             <img alt="" src="' + imgPath + '">';
                            html += '          </p>';
                            html += '          <div class="grid-title">' + proName + '</div>';
                            html += '          <p class="grid-price">' + price + '</p>';
                            html += '       </a>';
                            html += '  </li>';
                        }
                    }
                    $("#"+id+"_prolist").html(html);
                }
            },
            error : function() {
                
            }
        }); 
     }
 };
 
 //定位当前推荐商品
 function fixCurrent(obj){
    $(obj).addClass('current');
 }
 
  //离开当前推荐商品
 function leaveCurrent(obj){
     $(obj).removeClass('current');
 }
 //去重
 function removeDuplicatedItem(ar) {
    var ret = [];
    for (var i = 0, j = ar.length; i < j; i++) {
        if (ret.indexOf(ar[i]) === -1) {
            ret.push(ar[i]);
        }
    }
    return ret;
}
(function () {
 /*
         *   专区导航下拉列表
         *   @version  1.2.0
         *   @update  2017-05-08
         *
         * */
        var $nav =                          $('.naver li'),
            $naverSub =                     $('.naver-sub'),
            navLen =                        $nav.length,
            navWidth =                      $nav.width(),
            navListCount =                  null,
            timer =                         null;

        $nav.bind({
            mouseenter: function () {
                {
                    var count =             $(this).attr('data-id') || null,
                        $naverSubItem =     $('#naverSub0' + count),
                        $this =             $(this),
                        openItem =          null;

                    if ($naverSubItem.length <= 0) {
                        $naverSub
                            .children()
                            .slideUp(200);
                        clearTimeout(timer);
                        return;
                    }
                    navListCount = count;

                    $naverSub
                        .children()
                        .each(function (index, item) {
                            if ($(this).css('display') == 'block') {
                                openItem = true;
                            }
                        });

                    if (timer) clearTimeout(timer);

                    if (openItem) {
                        showProList('zxnav_' + count);
                        $naverSub.show();
                        $naverSubItem
                            .show()
                            .unbind('mouseenter')
                            .mouseleave(function (e) {
                                itemsLeave.call(this, e , $naverSubItem);
                            })
                            .siblings()
                            .hide();

                    } else {
                        showProList('zxnav_' + count);
                        timer = setTimeout(function () {
                            $naverSub
                                .show();
                            $naverSubItem
                                .slideDown(200)
                                .unbind('mouseenter')
                                .mouseleave(function (e) {
                                    itemsLeave.call(this, e , $naverSubItem);
                                })
                            ;
                        }, 200);
                    }
                }
            },
            mouseleave: function (e) {
                var $target =               $(e.target),
                    eX =                    e.pageX,
                    eY =                    e.pageY,
                    oX =                    $target.offset().left,
                    oY =                    $target.offset().top,
                    yy =                    oY-eY,
                    xx =                    oX - eX,
                    xx2 =                   eX - (oX + navWidth),
                    index =                 $nav.index(this),
                    $naverSubItem =         $('#naverSub0' + navListCount);

                if (timer) clearTimeout(timer);

                $naverSubItem.mouseenter(function () {
                    if (timer) clearTimeout(timer);
                });

                //确认上划//第一个左滑动时//最后一个右滑动时
                if (yy <= 10 && yy > 0 || (xx <= 10 && xx > 0 && index == 0) || (xx2 <= 10 && xx2 > 0 && index == navLen - 1 )) {
                    $naverSubItem.unbind('mouseleave');
                    $naverSub
                        .children()
                        .slideUp(300)
                } else {
                    timer = setTimeout(function () {
                        $naverSubItem.unbind('mouseenter');
                        $naverSub
                            .children()
                            .slideUp(300)
                    }, 200)
                }
            }
        });
        function itemsLeave(e , obj) {
            var $target =                   $(e.target),
                eX =                        e.pageX,
                eY =                        e.pageY,
                oX =                        $target.offset().left,
                oY =                        $target.offset().top,
                _this =                     $(this);

            clearTimeout(timer);
            //确认上划 并保证上划区域排除logo区域
            if ((oY - eY) <= 10 && (oY - eY) > 0 && (eX - oX) > 300) {
                _this
                    .show();
            } else {
                timer = setTimeout(function () {
                    _this.slideUp(200);
                }, 200)
            }
        }
    })();
</script><div class="hr-10"></div>
<div class="g">
    <!--面包屑 -->
	<div class="breadcrumb-area fcn">
			<a href="/" title="首页">首页</a>&nbsp;>&nbsp;
		
		<span>手机</span>
	</div>
</div>	
<div class="hr-10"></div>
<!-- 20180620-广告位-start -->
<!-- 20180620-广告位-end -->

<div class="layout">
	<!-- 20140726-商品类别-start -->
	<div class="pro-cate-area">
		<!-- 20140726-商品类别-属性-start -->
		<div class="pro-cate-attr clearfix">
			<div class="p-title">分类：</div>
			<div class="p-default">
				<ul>
                    <li id="first-category" class="selected"><a href="/list-36">全部</a></li>
					<!--<li class="selected"><a href="javascript:;">全部</a></li>-->
				</ul>
			</div>
			
			<!-- 二级虚拟分类 -->
			<div class="p-values">
				<div class="p-operate" style="display: none;">
					<!-- 追加ClassName： more-expand more-drop -->
					<a href="javascript:;" onclick="ec.product.more(this)" class="more more-expand">更多<s></s></a>
				</div>
				<!-- 一行的高度为30px,显示n行，p-expand的高度为nx30 -->
				<div class="p-expand">
					<ul class="clearfix">					
	                    <li ><a href="/list-75">荣耀</a></li>
	                    <li ><a href="/list-285">HUAWEI P系列</a></li>
	                    <li ><a href="/list-77">荣耀畅玩系列</a></li>
	                    <li ><a href="/list-76">HUAWEI Mate系列</a></li>
	                    <li ><a href="/list-277">HUAWEI nova系列</a></li>
	                    <li ><a href="/list-81">HUAWEI 麦芒系列</a></li>
	                    <li ><a href="/list-275">华为畅享系列</a></li>
	                    <li ><a href="/list-38">移动4G+专区</a></li>
					</ul>
				</div>
			</div>
			
		</div><!-- 20140726-商品类别-属性-end -->
		
		<!-- 20140726-商品类别-属性-start -->
        <!-- 20140726-商品类别-属性-end -->		
		
		<!-- 20140726-商品类别-排序-start -->
		<div class="pro-cate-sort clearfix">
			<div class="p-title">排序：</div>
			<div class="p-values" style="margin-left:95px;">
				<div class="p-expand">					
					<ul class="clearfix">
					    <!-- 升序选择（从低到高）： sort-asc selected   降序选择（从高到低）： sort-desc selected -->
					    <li id="sort-3"><a href="javascript:;" class="sort-added" onclick="ec.product.sort('3')">上架时间<s></s></a></li>
						<li id="sort-1"><a href="javascript:;" class="sort-price" onclick="ec.product.sort('1')">价格<s></s></a></li>
						<li id="sort-2"><a href="javascript:;" class="sort-eval" onclick="ec.product.sort('2')">评价数<s></s></a></li>
					</ul>
				</div>
			</div>
		</div><!-- 20140726-商品类别-排序-end -->
		
		<form id="listForm" method="post">
			<input type='hidden' id='sortField' name='sortField' value='' />
			<input type='hidden' id='sortType' name='sortType' value='' />
			<input type='hidden' id='prdAttrList' name='prdAttrList' value='' />
		</form>
		
	</div><!-- 20140726-商品类别-end -->

	<div class="hr-20"></div>
</div>				

<!--到货通知弹出框-->
<textarea id="product-arrival-html" class="hide">
	<div class="arrival-remind-area">
		<ul class="clearfix">
			<li id="arrival-email">
				<p class="a-title">邮件通知</p>
				<p id="account-email" class="a-txt">xxxxxxxxxxxxxxxxxxxx@huawei.com</p>
				<s></s>
			</li>
			<li id="arrival-mobile">
				<p class="a-title">短信通知</p>
				<p id="account-mobile" class="a-txt">185&nbsp;6644&nbsp;5856</p>
				<s></s>
			</li>		
		</ul>
	</div>
	<div class="box-custom-button">
		<input type="submit" class="box-ok box-button-style-1" value="提交"/>
	</div>
	<div id="arrival-error" class="box-form-tips hide">
		<span class="icon-error">输入有误</span>
	</div>
</textarea>
<input id='sField' type='hidden' value='3'/>
<input id='sType' type='hidden' value='0'/>
<script>
	ec.load("ec.pager");
</script>
<div class="layout">
	<!-- 20140726-频道-列表-start -->
    <div class="channel-list">
        <!-- 20140727-商品列表-start -->
		<div class="pro-list clearfix">
			<ul>
            				<li>
					<div class="pro-panels">
						<p class="p-img"><a target="_blank" href="/product/922640972.html"  title="荣耀9" onclick = "pushListProClickMsg('2601010002101')"><img alt="荣耀9 全网通标配版 4GB+64GB（魅海蓝）" src="picture/428_428_1496990939106mp_1.jpg"/></a></p>
						<p class="p-name">
							<a target="_blank" href="/product/922640972.html" title="荣耀9" onclick = "pushListProClickMsg('2601010002101')">
								<span>荣耀9</span>
								<span class="red"></span>
							</a>
						</p>
						<p class="p-price"><b>&yen;1899</b><span>起</span></p>
						<div class="p-button clearfix">
							<table colspan="0" border="0" rowspan="0">
								<tbody>
									<tr>
										    <td><a target="_blank" href="/product/922640972.html" class="p-button-cart"><span>选购</span></a></td>
										<td><label class="p-button-score"><span>556人评价</span></a></td>
									</tr>
								</tbody>
							</table>
						</div>
						
					</div>
				</li>
				<li>
					<div class="pro-panels">
						<p class="p-img"><a target="_blank" href="/product/10086295543075.html"  title="荣耀 Note10" onclick = "pushListProClickMsg('2601010050804')"><img alt="荣耀 Note10 6GB+128GB 幻影蓝 全网通" src="picture/428_428_1532491259054mp.jpg"/></a></p>
						<p class="p-name">
							<a target="_blank" href="/product/10086295543075.html" title="荣耀 Note10" onclick = "pushListProClickMsg('2601010050804')">
								<span>荣耀 Note10</span>
								<span class="red"></span>
							</a>
						</p>
						<p class="p-price"><em>暂无报价</em></p>
						<div class="p-button clearfix">
							<table colspan="0" border="0" rowspan="0">
								<tbody>
									<tr>
									<td><a href="https://sale.vmall.com/note10dj.html" target="_blank"  class="p-button-an"><span>参加抢购</span></a></td>
										<td><label class="p-button-score"><span>0人评价</span></a></td>
									</tr>
								</tbody>
							</table>
						</div>
						<s class="p-tag"><img alt="【99元订金预订】荣耀 Note10 6GB+128GB 幻影蓝 全网通" src="picture/1497575938261.png" /></s>
					</div>
				</li>
				<li>
					<div class="pro-panels">
						<p class="p-img"><a target="_blank" href="/product/10086469642595.html"  title="荣耀畅玩7 移动4G+" onclick = "pushListProClickMsg('2601010050005')"><img alt="荣耀畅玩7 2GB+16GB（蓝色）" src="picture/428_428_1531301537269mp.jpg"/></a></p>
						<p class="p-name">
							<a target="_blank" href="/product/10086469642595.html" title="荣耀畅玩7 移动4G+" onclick = "pushListProClickMsg('2601010050005')">
								<span>荣耀畅玩7 移动4G+</span>
								<span class="red"></span>
							</a>
						</p>
						<p class="p-price"><b>&yen;599</b><span>起</span></p>
						<div class="p-button clearfix">
							<table colspan="0" border="0" rowspan="0">
								<tbody>
									<tr>
										<td><a href="javascript:;" onclick="ec.product.arrival(10086365969841,'2601010050005')" class="p-button-an"><span>到货通知</span></a></td>
										<td><label class="p-button-score"><span>0人评价</span></a></td>
									</tr>
								</tbody>
							</table>
						</div>
						
					</div>
				</li>
				<li>
					<div class="pro-panels">
						<p class="p-img"><a target="_blank" href="/product/10086083900639.html"  title="【50元订金抵100元】HUAWEI nova 3" onclick = "pushListProClickMsg('2601010049402')"><img alt="HUAWEI nova 3 6GB+64GB 全网通版（亮黑色）" src="picture/428_428_1531368379226mp.jpg"/></a></p>
						<p class="p-name">
							<a target="_blank" href="/product/10086083900639.html" title="【50元订金抵100元】HUAWEI nova 3" onclick = "pushListProClickMsg('2601010049402')">
								<span>【50元订金抵100元】HUAWEI nova 3</span>
								<span class="red"></span>
							</a>
						</p>
						<p class="p-price"><b>&yen;2799</b><span>起</span></p>
						<div class="p-button clearfix">
							<table colspan="0" border="0" rowspan="0">
								<tbody>
									<tr>
										<td><label class="p-button-score"><span>2966人评价</span></a></td>
									</tr>
								</tbody>
							</table>
						</div>
						
					</div>
				</li>
				<li>
					<div class="pro-panels">
						<p class="p-img"><a target="_blank" href="/product/10086568474763.html"  title="HUAWEI nova 3" onclick = "pushListProClickMsg('2601010048810')"><img alt="HUAWEI nova 3 6GB+64GB 全网通版（浅艾蓝 ）" src="picture/428_428_1531368379226mp.jpg"/></a></p>
						<p class="p-name">
							<a target="_blank" href="/product/10086568474763.html" title="HUAWEI nova 3" onclick = "pushListProClickMsg('2601010048810')">
								<span>HUAWEI nova 3</span>
								<span class="red"></span>
							</a>
						</p>
						<p class="p-price"><b>&yen;2799</b><span>起</span></p>
						<div class="p-button clearfix">
							<table colspan="0" border="0" rowspan="0">
								<tbody>
									<tr>
									<td><a href="https://www.vmall.com/product/10086083900639.html" target="_blank"  class="p-button-an"><span>立即预约</span></a></td>
										<td><label class="p-button-score"><span>2966人评价</span></a></td>
									</tr>
								</tbody>
							</table>
						</div>
						
					</div>
				</li>
				<li>
					<div class="pro-panels">
						<p class="p-img"><a target="_blank" href="/product/10086291890006.html"  title="荣耀9i" onclick = "pushListProClickMsg('2601010042602')"><img alt="荣耀9i 全网通 4GB+64GB（魅海蓝）" src="picture/428_428_1527841544655mp.jpg"/></a></p>
						<p class="p-name">
							<a target="_blank" href="/product/10086291890006.html" title="荣耀9i" onclick = "pushListProClickMsg('2601010042602')">
								<span>荣耀9i</span>
								<span class="red"></span>
							</a>
						</p>
						<p class="p-price"><b>&yen;1399</b><span>起</span></p>
						<div class="p-button clearfix">
							<table colspan="0" border="0" rowspan="0">
								<tbody>
									<tr>
										    <td><a target="_blank" href="/product/10086291890006.html" class="p-button-cart"><span>选购</span></a></td>
										<td><label class="p-button-score"><span>15424人评价</span></a></td>
									</tr>
								</tbody>
							</table>
						</div>
						<s class="p-tag"><img alt="荣耀9i 全网通 4GB+64GB（魅海蓝）" src="picture/1497576023361_1.png" /></s>
					</div>
				</li>
				<li>
					<div class="pro-panels">
						<p class="p-img"><a target="_blank" href="/product/10086576787089.html"  title="荣耀Play" onclick = "pushListProClickMsg('2601010042503')"><img alt="荣耀Play 全网通 4GB+64GB（星云紫）" src="picture/428_428_1527925630247mp.jpg"/></a></p>
						<p class="p-name">
							<a target="_blank" href="/product/10086576787089.html" title="荣耀Play" onclick = "pushListProClickMsg('2601010042503')">
								<span>荣耀Play</span>
								<span class="red"></span>
							</a>
						</p>
						<p class="p-price"><b>&yen;1999</b><span>起</span></p>
						<div class="p-button clearfix">
							<table colspan="0" border="0" rowspan="0">
								<tbody>
									<tr>
										    <td><a target="_blank" href="/product/10086576787089.html" class="p-button-cart"><span>选购</span></a></td>
										<td><label class="p-button-score"><span>17398人评价</span></a></td>
									</tr>
								</tbody>
							</table>
						</div>
						<s class="p-tag"><img alt="荣耀Play 全网通 4GB+64GB（星云紫）" src="picture/1497576023361_1.png" /></s>
					</div>
				</li>
				<li>
					<div class="pro-panels">
						<p class="p-img"><a target="_blank" href="/product/10086158977116.html"  title="华为畅享 8e 青春" onclick = "pushListProClickMsg('2601010041702')"><img alt="华为畅享 8e 青春 2GB+32GB 全网通版（金色）" src="picture/428_428_1526973397070mp.jpg"/></a></p>
						<p class="p-name">
							<a target="_blank" href="/product/10086158977116.html" title="华为畅享 8e 青春" onclick = "pushListProClickMsg('2601010041702')">
								<span>华为畅享 8e 青春</span>
								<span class="red"></span>
							</a>
						</p>
						<p class="p-price"><b>&yen;799</b><span>起</span></p>
						<div class="p-button clearfix">
							<table colspan="0" border="0" rowspan="0">
								<tbody>
									<tr>
										    <td><a target="_blank" href="/product/10086158977116.html" class="p-button-cart"><span>选购</span></a></td>
										<td><label class="p-button-score"><span>842人评价</span></a></td>
									</tr>
								</tbody>
							</table>
						</div>
						
					</div>
				</li>
				<li>
					<div class="pro-panels">
						<p class="p-img"><a target="_blank" href="/product/10086094364044.html"  title="荣耀畅玩7" onclick = "pushListProClickMsg('2601010040601')"><img alt="荣耀畅玩7 全网通版 2GB+16GB（黑色）" src="picture/428_428_1526434333470mp.jpg"/></a></p>
						<p class="p-name">
							<a target="_blank" href="/product/10086094364044.html" title="荣耀畅玩7" onclick = "pushListProClickMsg('2601010040601')">
								<span>荣耀畅玩7</span>
								<span class="red"></span>
							</a>
						</p>
						<p class="p-price"><b>&yen;599</b><span>起</span></p>
						<div class="p-button clearfix">
							<table colspan="0" border="0" rowspan="0">
								<tbody>
									<tr>
										    <td><a target="_blank" href="/product/10086094364044.html" class="p-button-cart"><span>选购</span></a></td>
										<td><label class="p-button-score"><span>3065人评价</span></a></td>
									</tr>
								</tbody>
							</table>
						</div>
						
					</div>
				</li>
				<li>
					<div class="pro-panels">
						<p class="p-img"><a target="_blank" href="/product/10086785341226.html"  title="荣耀10" onclick = "pushListProClickMsg('2601010038102')"><img alt="荣耀10 AI摄影手机 6GB+64GB 幻影蓝 全网通" src="picture/428_428_1523952379540mp_1.jpg"/></a></p>
						<p class="p-name">
							<a target="_blank" href="/product/10086785341226.html" title="荣耀10" onclick = "pushListProClickMsg('2601010038102')">
								<span>荣耀10</span>
								<span class="red"></span>
							</a>
						</p>
						<p class="p-price"><b>&yen;2599</b><span>起</span></p>
						<div class="p-button clearfix">
							<table colspan="0" border="0" rowspan="0">
								<tbody>
									<tr>
										    <td><a target="_blank" href="/product/10086785341226.html" class="p-button-cart"><span>选购</span></a></td>
										<td><label class="p-button-score"><span>56721人评价</span></a></td>
									</tr>
								</tbody>
							</table>
						</div>
						<s class="p-tag"><img alt="荣耀10 GT游戏加速 AIS手持夜景 AI摄影手机 6GB+64GB 幻影蓝 全网通 双卡双待 荣耀10GT" src="picture/1497575918300_1.png" /></s>
					</div>
				</li>
				<li>
					<div class="pro-panels">
						<p class="p-img"><a target="_blank" href="/product/10086059981846.html"  title="HUAWEI Mate RS 保时捷设计" onclick = "pushListProClickMsg('2601010036901')"><img alt="HUAWEI Mate RS 保时捷设计 6GB+256GB 全网通版（玄黑）" src="picture/428_428_1523430506694mp_1.jpg"/></a></p>
						<p class="p-name">
							<a target="_blank" href="/product/10086059981846.html" title="HUAWEI Mate RS 保时捷设计" onclick = "pushListProClickMsg('2601010036901')">
								<span>HUAWEI Mate RS 保时捷设计</span>
								<span class="red"></span>
							</a>
						</p>
						<p class="p-price"><b>&yen;9999</b><span>起</span></p>
						<div class="p-button clearfix">
							<table colspan="0" border="0" rowspan="0">
								<tbody>
									<tr>
										    <td><a target="_blank" href="/product/10086059981846.html" class="p-button-cart"><span>选购</span></a></td>
										<td><label class="p-button-score"><span>6324人评价</span></a></td>
									</tr>
								</tbody>
							</table>
						</div>
						
					</div>
				</li>
				<li>
					<div class="pro-panels">
						<p class="p-img"><a target="_blank" href="/product/10086070385182.html"  title="荣耀畅玩7A" onclick = "pushListProClickMsg('2601010034901')"><img alt="荣耀畅玩7A 全网通标配版 2GB+32GB（幻夜黑）" src="picture/428_428_1522134758889mp_1.jpg"/></a></p>
						<p class="p-name">
							<a target="_blank" href="/product/10086070385182.html" title="荣耀畅玩7A" onclick = "pushListProClickMsg('2601010034901')">
								<span>荣耀畅玩7A</span>
								<span class="red"></span>
							</a>
						</p>
						<p class="p-price"><b>&yen;699</b><span>起</span></p>
						<div class="p-button clearfix">
							<table colspan="0" border="0" rowspan="0">
								<tbody>
									<tr>
										    <td><a target="_blank" href="/product/10086070385182.html" class="p-button-cart"><span>选购</span></a></td>
										<td><label class="p-button-score"><span>4824人评价</span></a></td>
									</tr>
								</tbody>
							</table>
						</div>
						
					</div>
				</li>
				<li>
					<div class="pro-panels">
						<p class="p-img"><a target="_blank" href="/product/10086157327552.html"  title="华为畅享8e" onclick = "pushListProClickMsg('2601010029604')"><img alt="华为畅享8e 3GB+32GB 全网通版（粉色）" src="picture/428_428_1521789024901mp.jpg"/></a></p>
						<p class="p-name">
							<a target="_blank" href="/product/10086157327552.html" title="华为畅享8e" onclick = "pushListProClickMsg('2601010029604')">
								<span>华为畅享8e</span>
								<span class="red"></span>
							</a>
						</p>
						<p class="p-price"><b>&yen;999</b><span>起</span></p>
						<div class="p-button clearfix">
							<table colspan="0" border="0" rowspan="0">
								<tbody>
									<tr>
										    <td><a target="_blank" href="/product/10086157327552.html" class="p-button-cart"><span>选购</span></a></td>
										<td><label class="p-button-score"><span>1068人评价</span></a></td>
									</tr>
								</tbody>
							</table>
						</div>
						
					</div>
				</li>
				<li>
					<div class="pro-panels">
						<p class="p-img"><a target="_blank" href="/product/10086195106339.html"  title="华为畅享8 Plus" onclick = "pushListProClickMsg('2601010028713')"><img alt="华为畅享8 Plus 4GB+64GB 全网通版（金色）" src="picture/428_428_1532448366979mp.jpg"/></a></p>
						<p class="p-name">
							<a target="_blank" href="/product/10086195106339.html" title="华为畅享8 Plus" onclick = "pushListProClickMsg('2601010028713')">
								<span>华为畅享8 Plus</span>
								<span class="red"></span>
							</a>
						</p>
						<p class="p-price"><b>&yen;1499</b><span>起</span></p>
						<div class="p-button clearfix">
							<table colspan="0" border="0" rowspan="0">
								<tbody>
									<tr>
										    <td><a target="_blank" href="/product/10086195106339.html" class="p-button-cart"><span>选购</span></a></td>
										<td><label class="p-button-score"><span>6110人评价</span></a></td>
									</tr>
								</tbody>
							</table>
						</div>
						
					</div>
				</li>
				<li>
					<div class="pro-panels">
						<p class="p-img"><a target="_blank" href="/product/10086733534868.html"  title="华为畅享8" onclick = "pushListProClickMsg('2601010028822')"><img alt="华为畅享8 3GB+32GB 全网通标配NFC版（蓝色）" src="picture/428_428_1530498234677mp.jpg"/></a></p>
						<p class="p-name">
							<a target="_blank" href="/product/10086733534868.html" title="华为畅享8" onclick = "pushListProClickMsg('2601010028822')">
								<span>华为畅享8</span>
								<span class="red"></span>
							</a>
						</p>
						<p class="p-price"><b>&yen;1099</b><span>起</span></p>
						<div class="p-button clearfix">
							<table colspan="0" border="0" rowspan="0">
								<tbody>
									<tr>
										    <td><a target="_blank" href="/product/10086733534868.html" class="p-button-cart"><span>选购</span></a></td>
										<td><label class="p-button-score"><span>3770人评价</span></a></td>
									</tr>
								</tbody>
							</table>
						</div>
						
					</div>
				</li>
				<li>
					<div class="pro-panels">
						<p class="p-img"><a target="_blank" href="/product/10086471194207.html"  title="HUAWEI P20 Pro" onclick = "pushListProClickMsg('2601010026804')"><img alt="HUAWEI P20 Pro 6GB+64GB 全网通版（极光色）" src="picture/428_428_1532787463506mp.jpg"/></a></p>
						<p class="p-name">
							<a target="_blank" href="/product/10086471194207.html" title="HUAWEI P20 Pro" onclick = "pushListProClickMsg('2601010026804')">
								<span>HUAWEI P20 Pro</span>
								<span class="red"></span>
							</a>
						</p>
						<p class="p-price"><b>&yen;4988</b><span>起</span></p>
						<div class="p-button clearfix">
							<table colspan="0" border="0" rowspan="0">
								<tbody>
									<tr>
										    <td><a target="_blank" href="/product/10086471194207.html" class="p-button-cart"><span>选购</span></a></td>
										<td><label class="p-button-score"><span>37836人评价</span></a></td>
									</tr>
								</tbody>
							</table>
						</div>
						
					</div>
				</li>
				<li>
					<div class="pro-panels">
						<p class="p-img"><a target="_blank" href="/product/10086915330134.html"  title="HUAWEI P20" onclick = "pushListProClickMsg('2601010026702')"><img alt="HUAWEI P20 6GB+64GB 全网通版（宝石蓝）" src="picture/428_428_1532788138363mp.jpg"/></a></p>
						<p class="p-name">
							<a target="_blank" href="/product/10086915330134.html" title="HUAWEI P20" onclick = "pushListProClickMsg('2601010026702')">
								<span>HUAWEI P20</span>
								<span class="red"></span>
							</a>
						</p>
						<p class="p-price"><b>&yen;3788</b><span>起</span></p>
						<div class="p-button clearfix">
							<table colspan="0" border="0" rowspan="0">
								<tbody>
									<tr>
										    <td><a target="_blank" href="/product/10086915330134.html" class="p-button-cart"><span>选购</span></a></td>
										<td><label class="p-button-score"><span>21538人评价</span></a></td>
									</tr>
								</tbody>
							</table>
						</div>
						
					</div>
				</li>
				<li>
					<div class="pro-panels">
						<p class="p-img"><a target="_blank" href="/product/10086570096517.html"  title="HUAWEI nova 3e" onclick = "pushListProClickMsg('2601010025201')"><img alt="HUAWEI nova 3e 4GB+64GB 全网通版（幻夜黑）" src="picture/428_428_1525334948370mp.jpg"/></a></p>
						<p class="p-name">
							<a target="_blank" href="/product/10086570096517.html" title="HUAWEI nova 3e" onclick = "pushListProClickMsg('2601010025201')">
								<span>HUAWEI nova 3e</span>
								<span class="red"></span>
							</a>
						</p>
						<p class="p-price"><b>&yen;1999</b><span>起</span></p>
						<div class="p-button clearfix">
							<table colspan="0" border="0" rowspan="0">
								<tbody>
									<tr>
										    <td><a target="_blank" href="/product/10086570096517.html" class="p-button-cart"><span>选购</span></a></td>
										<td><label class="p-button-score"><span>10619人评价</span></a></td>
									</tr>
								</tbody>
							</table>
						</div>
						
					</div>
				</li>
				<li>
					<div class="pro-panels">
						<p class="p-img"><a target="_blank" href="/product/10086612047184.html"  title="荣耀9青春版 移动4G+" onclick = "pushListProClickMsg('2601010028302')"><img alt="荣耀9青春版 移动4G+高配版 4GB+32GB（珠光白）" src="picture/428_428_1520588262693mp.jpg"/></a></p>
						<p class="p-name">
							<a target="_blank" href="/product/10086612047184.html" title="荣耀9青春版 移动4G+" onclick = "pushListProClickMsg('2601010028302')">
								<span>荣耀9青春版 移动4G+</span>
								<span class="red"></span>
							</a>
						</p>
						<p class="p-price"><b>&yen;1399</b><span>起</span></p>
						<div class="p-button clearfix">
							<table colspan="0" border="0" rowspan="0">
								<tbody>
									<tr>
										<td><a href="javascript:;" onclick="ec.product.arrival(10086853783893,'2601010028302')" class="p-button-an"><span>到货通知</span></a></td>
										<td><label class="p-button-score"><span>8人评价</span></a></td>
									</tr>
								</tbody>
							</table>
						</div>
						
					</div>
				</li>
				<li>
					<div class="pro-panels">
						<p class="p-img"><a target="_blank" href="/product/461751298.html"  title="HUAWEI 麦芒5" onclick = "pushListProClickMsg('1001010036301')"><img alt="HUAWEI 麦芒5 全网通高配版（香槟金）" src="picture/428_428_1467859642209mp.jpg"/></a></p>
						<p class="p-name">
							<a target="_blank" href="/product/461751298.html" title="HUAWEI 麦芒5" onclick = "pushListProClickMsg('1001010036301')">
								<span>HUAWEI 麦芒5</span>
								<span class="red"></span>
							</a>
						</p>
						<p class="p-price"><b>&yen;2399</b><span>起</span></p>
						<div class="p-button clearfix">
							<table colspan="0" border="0" rowspan="0">
								<tbody>
									<tr>
										<td><a href="javascript:;" onclick="ec.product.arrival(444314191,'1001010036301')" class="p-button-an"><span>到货通知</span></a></td>
										<td><label class="p-button-score"><span>4365人评价</span></a></td>
									</tr>
								</tbody>
							</table>
						</div>
						
					</div>
				</li>
			</ul>
		</div>
		<!-- 20140727-商品列表-end -->
		<!-- 分页-start -->
		<div id="list-pager-36" class="pager">
					<input id= "pageTotal" value="2" type='hidden'>
				    <ul id="page_ul">
						<li class="pgNext link first">|&lt;</li>
						<li class="pgNext link pre">&lt;</li>
						
							    <a id="page_1" href='/list-36-1' title="第1页" >
									<li class="page-number link">1</li>									
								</a>
							    <a id="page_2" href='/list-36-2' title="第2页" >
									<li class="page-number link">2</li>									
								</a>
						<li class="pgNext link next">&gt;</li>
						<li class="pgNext link last">&gt;|</li>
						<li class="text quickPager"><select id="pageChecked"><option value="1" selected>1</option><option value="2">2</option></select></li>
					</ul>
	    </div>
    </div><!-- 20140726-频道-列表-end -->
    
</div>

<!--弹出层-成功添加到购物车 -->
<textarea id="cart-tips" class="hide">
<div class="pro-add-success" style="margin:-14px -30px 0;">
	<dl>
		<dt><s></s></dt>
		<dd>
			<div id="cart-briefName" class="pro-add-success-name">华为 Ascend P1 U9200 3G手机（晶钻黑）WCDMA</div>
			<div class="pro-add-success-msg">成功加入购物车!</div>
			<div class="pro-add-success-total">购物车中共&nbsp;<b id="cart-total">0</b>&nbsp;件商品，金额合计&nbsp;<b  id="cart-price">¥&nbsp;2699</b></div>
			<div class="pro-add-success-button"><a href="javascript:;" class="box-ok button-style-1 button-go-cart">去结算</a><a class="box-cancel button-style-4 button-walking" href="javascript:;">继续逛逛&nbsp;>></a></div>
		</dd>
	</dl>
</div>
</textarea>
<!-- 20131218-商品简介-弹出层-成功添加到购物车-end -->

<!--弹出层-添加到购物车失败 -->
<textarea id="popup-tips" class="hide">
    <!-- 20131230-商品简介-弹出层-添加到购物车失败-start -->
	<div class="pro-add-error" style="margin-top:-40px;">
		<i></i>
		<div id="popup-tips-msg" class="pro-add-error-msg">非常抱歉！该商品不能单独销售！</div>
		<div class="pro-add-error-button"><a href="javascript:;"  title="知道了" class="box-cancel button-style-4 button-par-define">知道了</a></div>
	</div>
</textarea>
<!-- 20131230-商品简介-弹出层-添加到购物车失败-end -->


                        

<form action="#" id="gotourl" method="get"></form>
<script>
	//去结算
	ec.product.gotoshoppingCart = function(){
		//BI统计
//		_paq.push(['trackLink','加入购物车-去支付', 'link', ' ']);
//		ec.code.addAnalytics({hicloud:true});
		setTimeout(function () {
			var url = '/cart2';
			$('#gotourl').attr('action', url).submit();
		}, 500);
	};
</script><div class="hr-40"></div>
<script>
    ec.ready(function(){
        //封装已选属性列表
        var attrList = [];
	    ec.product.renderPage(36, attrList, $("#sField").val(),  $("#sType").val(), {
		    pageNumber : 1,
		    totalPage : 2,
		    recordCount : 33
	    });
    });
    
    /**
     *描述：当点击一级分类，在展现属性中，可能出在存在相同的属性名称。
     *所以现在暂时弥补的方法  当点击分类---"全部"的时候，隐藏下面属性的列
     *@lifeng
    */
    ec.ready(function(){
    	var result = $("#first-category").attr("class");
    	if(result == "selected"){
    		//把分类下面的属性全部隐藏
    		$(".pro-cate-area").find("div[id^='pro-cate-attr-']").hide();
    	}
    	
    	//分页链接重新赋值
		var cid = ec.product.cid;
    	var pageTotal = $("#pageTotal").val();
		for (var i=0;i<pageTotal;i++)
		{
			$("#page_"+(i+1)).attr("href","list-" + cid +"-"+(i+1)+"-"+ec.product.sortField+"-"+ec.product.sortType); 
		}
	
    })
    
    //商品点击上报
    function pushListProClickMsg(skuCode)
    {
    	var value = {
			"UID":ec.util.cookie.get("uid"),
			"TID":getPtid(),
			"TIME":getTime(),
			"CONTENT":
			{
  			"SKUCODE":skuCode,
  			"click":"1"
  			}

	};
	ec.code.addAnalytics({hicloud:true});
	_paq.push(["trackLink","300120101", "link", value]);
    }
    
</script><!--口号-20121025 -->
<div class="slogan-container">
    <div class="slogan">
        <ul>
            <li class="s1"><a target="_blank" href="https://www.vmall.com/help/faq-934.html"  rel="nofollow" onclick = "pushFootAdvertMsg('公司介绍','https://www.vmall.com/help/faq-934.html')"><i></i>百强企业&nbsp;品质保证</a></li>
            <li class="s2"><a target="_blank" href="https://www.vmall.com/help/faq-834.html"  rel="nofollow" onclick = "pushFootAdvertMsg('退换货政策','https://www.vmall.com/help/faq-834.html')"><i></i>7天退货&nbsp;15天换货</a></li>
            <li class="s3">
                <a target="_blank" href="https://www.vmall.com/help/faq-4367.html"  rel="nofollow" onclick = "pushFootAdvertMsg('物流帮助','https://www.vmall.com/help/faq-4367.html')"><i></i>
                    <span>48元起免运费</span>
                </a>
            </li>
            <li class="s4"><a target="_blank" href="http://consumer.huawei.com/cn/support/service-center/index.htm"  rel="nofollow" onclick = "pushFootAdvertMsg('服务中心','http://consumer.huawei.com/cn/support/service-center/index.htm')"><i></i>448家维修网点&nbsp;全国联保</a></li>
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
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-4355.html"  rel="nofollow">购物指南</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-4367.html"  rel="nofollow">配送方式</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-4357.html"  rel="nofollow">支付方式</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/category-16.html"  rel="nofollow">常见问题</a></li>
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
                          <li><a target="_blank" href="https://www.vmall.com/help/faq-833.html"  rel="nofollow">保修政策</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-834.html"  rel="nofollow">退换货政策</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-5259.html"  rel="nofollow">退换货流程</a></li>
                        <li><a target="_blank" href="http://consumer.huawei.com/cn/support/warranty-query/index.htm"  rel="nofollow">保修状态查询</a></li>
                    </ol>
                </dd>
            </dl>
            <dl class="s3">
                <dt>
                <p class="line"></p>
                <p class="title">维修与技术支持</p></dt>
                <dd>
                    <ol>
                          <li><a target="_blank" href="http://consumer.huawei.com/cn/support/service-center/index.htm"  rel="nofollow">售后网点</a></li>
                          <li><a target="_blank" href="http://consumer.huawei.com/cn/support/reservation/index.htm"  rel="nofollow">预约维修</a></li>
                          <li><a target="_blank" href="http://consumer.huawei.com/cn/support/express-repair/index.htm"  rel="nofollow">手机寄修</a></li>
                            <li><a target="_blank" href="http://consumer.huawei.com/cn/support/sparepart-price/index.htm"  rel="nofollow">备件价格查询</a></li>
                            <li><a target="_blank" href="http://consumer.huawei.com/cn/support/door-to-door-service/"  rel="nofollow">上门服务</a></li>
                    </ol>
                </dd>
            </dl>
            <dl class="s4">
                <dt>
                <p class="line"></p>
                <p class="title">关于我们</p></dt>
                <dd>
                    <ol>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-934.html"  rel="nofollow">公司介绍</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-939.html"  rel="nofollow">华为商城简介</a></li>
                        <li><a target="_blank" href="http://consumer.huawei.com/cn/support/where-to-buy/"  rel="nofollow">华为线下门店</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/offshop/shoplist"  rel="nofollow">荣耀线下门店</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/common/zhaopin"  rel="nofollow">诚征英才</a></li>
                    </ol>
                </dd>
            </dl>
            <dl class="s5">
                <dt>
                <p class="line"></p>
                <p class="title">关注我们</p></dt>
                <dd>
                    <ol>
                           <li><a class="sina" rel="nofollow" href="http://weibo.com/shophuawei" target="_blank" >新浪微博</a></li>
                        <li><a class="qq" rel="nofollow" href="http://t.qq.com/shophuawei" target="_blank" >腾讯微博</a></li>
                           <li><a class="huafen" href="http://club.huawei.com" target="_blank">花粉俱乐部</a></li>
                    </ol>
                </dd>
            </dl>
            <dl class="s6" id="serverlink">
                <dt class="relative">
                <p class="line"></p>
                <p class="title">友情链接</p>
                <p class="button"><span class="btn btn-prev disabled"> < </span><span class="btn btn-next"> > </span></p>
                </dt>
                <dd class="">
                   <div class="service-list clearfix"><ol><li><a onclick="jump_link(&#39;http://www.huawei.com/cn/&#39;)">华为官网</a></li><li><a href="https://m.vmall.com" target="_blank">华为商城手机版</a></li><li><a onclick="jump_link(&#39;http://www.honor.cn/&#39;)">荣耀官网</a></li><li><a onclick="jump_link(&#39;http://club.huawei.com/&#39;)" textvalue="花粉俱乐部">花粉俱乐部</a></li><li><a href="https://www.vmall.com/shopdc/sitemap.html" target="_blank">网站地图</a><br /></li></ol><ol><li><a onclick="jump_link(&#39;http://www.hwtrip.com/&#39;)">爱旅官网</a></li><li><a onclick="jump_link(&#39;http://app.vmall.com/&#39;)">华为应用市场</a></li><li><a onclick="jump_link(&#39;http://www.wbiao.cn/&#39;)">万表网</a></li><li><a onclick="jump_link(&#39;http://www.askci.com/&#39;)">中商情报网</a></li><li><a onclick="jump_link(&#39;http://www.shuame.com/&#39;)">刷机精灵</a></li></ol><ol><li><a onclick="jump_link(&#39;https://www.vmall.com&#39;)" textvalue="华为手机">华为手机</a></li><li><a onclick="jump_link(&#39;http://www.17ugo.com/&#39;)">优购物官网</a></li><li><a onclick="jump_link(&#39;http://www.znds.com/&#39;)">智能电视</a></li><li> <a onclick="jump_link(&#39;http://www.uc.cn/&#39;)">UC浏览器</a></li><li><a onclick="jump_link(&#39;http://www.zol.com/&#39;)">中关村商城</a></li></ol><ol><li><a onclick="jump_link(&#39;http://www.kugou.com/&#39;)">酷狗音乐</a></li><li><a onclick="jump_link(&#39;http://www.958shop.com/&#39;)">百信手机网</a></li><li><a onclick="jump_link(&#39;http://www.cardbaobao.com/&#39;)">卡宝宝网</a></li><li><a onclick="jump_link(&#39;http://www.duote.com/&#39;)" textvalue="多特软件下载">多特软件下载</a></li></ol><ol><li><a onclick="jump_link(&#39;http://www.tongbu.com/&#39;)">同步助手</a></li><li><a onclick="jump_link(&#39;http://www.fengniao.com/&#39;)">蜂鸟摄影网</a></li><li><a onclick="jump_link(&#39;http://www.7po.com/&#39;)">奇珀论坛</a></li><li><a onclick="jump_link(&#39;http://www.homekoo.com/&#39;)">家具商城</a></li><li><a onclick="jump_link(&#39;http://www.paixie.net/&#39;)">拍鞋网商城</a></li></ol><ol><li><a onclick="jump_link(&#39;http://www.obolee.com/&#39;)">欧宝丽珠宝</a></li><li><a onclick="jump_link(&#39;http://www.xungou.com/&#39;)">寻购网</a></li><li><a onclick="jump_link(&#39;http://www.yzmg.com/&#39;)">亿智蘑菇</a></li><li><a onclick="jump_link(&#39;http://www.wandoujia.com/&#39;)">安卓市场</a></li><li><a onclick="jump_link(&#39;http://baike.1688.com/&#39;)">阿里巴巴生意经</a></li></ol><ol><li><a onclick="jump_link(&#39;http://product.cnmo.com/&#39;)">手机大全</a></li><li><a onclick="jump_link(&#39;http://www.anzow.com/&#39;)">安卓软件园</a></li><li><a onclick="jump_link(&#39;http://www.dashi.com/&#39;)">卓大师刷机</a></li><li><a onclick="jump_link(&#39;http://www.wpxap.com/&#39;)">智机论坛</a></li><li><a onclick="jump_link(&#39;http://www.eepw.com.cn/&#39;)">电子产品世界</a></li></ol><ol><li><a onclick="jump_link(&#39;http://www.liqucn.com/&#39;)">历趣网</a></li><li><a onclick="jump_link(&#39;http://www.51bi.com/&#39;)">网购返利</a></li><li><a title="Apple110" onclick="jump_link(&#39;http://www.apple110.com/&#39;)">Apple110</a></li><li><a onclick="jump_link(&#39;http://www.91.com/&#39;)" textvalue="91手机门户网">91手机门户网</a></li><li><a onclick="jump_link(&#39;http://www.ydss.cn/&#39;)">移动叔叔</a></li></ol><ol><li><a onclick="jump_link(&#39;http://www.outlets365.com/&#39;)">奥特莱斯</a></li><li><a onclick="jump_link(&#39;https://www.vmall.com&#39;)">荣耀Magic</a></li><li><a onclick="jump_link(&#39;http://car.ctrip.com/&#39;)">携程租车</a></li></ol></div><script>
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
                    <a id="tools-nav-service-robotim-button" rel="nofollow" class="service-btn btn-line-primary" href="javascript:;" target="_blank"><i class=""></i> 在线客服</a>
                </dd>
            </dl>
        </div>
    </div>
</div>
<!-- 2017-02-15-服务-end -->

<!--确认对话框-->
<div id="ec_ui_confirm" class="popup-area popup-define-area hide">
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
    <a href="#" class="hungBar-top fr" id="hungBar-top" title="返回顶部"><i>返回顶部</i></a>
    <div class="hungBar-content fr relative">
        <!--添加hover 来实现弹出-->
        <a href="https://www.vmall.com/help/index.html" class="hungBar-for-help" title="帮助中心" target="_blank" onclick = "pushRightHelpMsg('帮助中心')"><i>帮助中心</i></a>
        <a id="tools-nav-survery" href="javascript:;" class="hungBar-feedback" title="意见反馈" onclick="ec.survery.open();pushRightHelpMsg('意见反馈')"><i>意见反馈</i></a>
        <a id="tools-nav-service-robotim" href="javascript:;" class="hungBar-olcs-web" title="在线客服" target="_blank" onclick = "pushRightHelpMsg('在线客服')"><i>在线客服</i></a>
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