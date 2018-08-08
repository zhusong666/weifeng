<!DOCTYPE html>
<!-- saved from url=(0046)https://hwid1.vmall.com/CAS/portal/login.html? -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript">var pageToken = "LcpghcLNVa85SJsQviuwCfcfDbRbuzdP";</script>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit">
<title>登录</title>
<script type="text/javascript">

</script>

<link href="https://hwid1.vmall.com/CAS/up/common/images/default/favicon.ico" type="image/x-icon" rel="shortcut icon"> 
<link href="/home/css/ec.core.css" rel="stylesheet" type="text/css"> 
<link href="/home/css/common.css" rel="stylesheet" type="text/css"> 
<link href="/home/css/dialog.css" rel="stylesheet" type="text/css"> 
<link href="/home/css/dialogEMUIV6.css" rel="stylesheet" type="text/css"> 
<link href="/home/css/common(1).css" rel="stylesheet" type="text/css"> 
<link href="/home/css/zh-cn.css" rel="stylesheet" type="text/css"> 
<script type="text/javascript">var localHttps="https://hwid1.vmall.com/CAS";var currentSiteID="1";var webAppName="CAS";</script>
<script src="/home/js/jquery-1.12.4.min.js" id="jsid"></script>
<script src="/home/js/jquery.validator.js" id="jsid"></script>
<script src="/home/js/commonjs.js"></script>
<script src="/home/js/lazyload-min.js"></script>
<script src="/home/js/uc_base.js"></script>
<script src="/home/js/zh-cn.js"></script>
<script src="/home/js/casAjaxObj.js"></script>
<script src="/home/js/jquery.qrcode.min.js"></script>
<script src="/home/js/casui.js"></script>

<script src="/home/js/lazyload-min.js"></script>
</head>
<body class="login themeName-red">
	<div id="cookies_privacy" class="center cookie hidden">
		本站点使用cookies,继续浏览表示您同意我们使用cookies。
		<a class="cookie-pro" href="https://hwid1.vmall.com/CAS/portal/login.html?#">Cookies和隐私政策&gt;</a>
		<img src="/home/images/cookie-close.png">
	</div>
	<div>
			<!-- 头部  -->
<div class="customer-header">
	<div class="head_center">
			<div class="main-logo"> <img src="/home/images/HUAWEI.png"> </div>
	</div>	
</div>
			<!--登录 -->
			<div class="login_bg" id="loginform">
				<div style="background-image: url(&#39;https://hwid1.vmall.com/CAS/up/rss_20/ads/login_default_bg.png&#39;);" class="g login_adBg">
					<div class="login-area login-right login-area-box"> 
						<div class="userAccountLogin">
							<div class="h">
							
								<span class="loginTitle actived loginTitle-left" data-type="account">帐号登录</span><span class="loginTitle splitLine loginTitle-right" data-type="qrCode">扫码登录</span>
							
							
							</div>
							<div class="b-account">
								<div class="login-form-marginTop">
									<div class="form-edit-area loginEventForm">
										<div class="userAccountLogin-errorTipsDiv"></div>
										<table border="0" cellpadding="0" cellspacing="0">
											<tbody>
												<tr>
													<td class="user-input-tr"><label class="lb_opacity_Class" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; padding-left: 0px; padding-top: 0px;" for="login_userName"><div style="border: none; background: transparent; cursor: text; margin: 2px; color: rgb(204, 204, 204);" tabindex="-1" class="text vam">手机号/邮件地址</div></label><input type="text" autocomplete="off" class="text vam" id="login_userName" name="userAccount" maxlength="50" tabindex="1" validator="validator21533648467359" style="z-index: 1;"></td>
												</tr>
												
												<tr>
													<td class="user-input-tr"><label class="lb_opacity_Class" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; padding-left: 0px; padding-top: 0px;" for="login_password"><div style="border: none; background: transparent; cursor: text; margin: 2px; color: rgb(204, 204, 204);" tabindex="-1" class="text vam">密码</div></label><input oncut="return false;" oncopy="return false" id="login_password" type="password" autocomplete="off" class="text vam" name="password" maxlength="32" tabindex="2" validator="validator31533648467359" style="z-index: 1;"></td>
												</tr>
												<tr>
													<td id="picAuthCode" class="verify-td referenceTarget">
														  
													</td>
												</tr>
												<tr>
													<td class="mt-checkbox">
														<span id="rememberNameSpan"><input type="checkbox" class="checkbox vam" id="remember_name" name="remember_name" tabindex="4"><label for="remember_name"><i id="remember_name_icon" class="checkBox-icon tick-off-icon marginR6"></i>记住华为帐号</label></span>
														<div class="hidden remeberTip"></div>
													</td>
												</tr>
												<tr>
													<td>
														<div style="margin-bottom:0px;"><span class="vam error" id="login_msg" style="display:block"></span></div>
														<input type="button" class="button-login" id="btnLogin" data-type="accountLogin" value="登录" tabindex="5">
														<img class="load" src="/home/login_files/loading3.gif">
													</td>
												</tr>
												<tr>
													<td class="mt-links lineHeightFix" id="operLinkTd">
														<span id="smsLoginEntrance" class="changeLoginType l" data-type="userAccountLogin" title="短信验证码登录"><i class="phoneIcon marginR6"></i>短信验证码登录</span>
														<span class="mt-links-float r clearWidth floatFix referenceTarget">
															<a class="btn-primary vam clearWidth" title="更多" id="btn-more">更多</a>
															<div class="set-more">
																<div id="more_list" class="more-list hiden">
																	<ul>
																		<li id="goSecurity" class="security-menu">安全中心</li>
																	</ul>
																</div>
															</div> 
														</span>
													</td>
												</tr>
												<tr>
													<td class="mt-links p0">
														<div class="mt-links-float vam clearWidth">
															 
																
																	<span class="regist"><a class="btn-primary clearWidth" href="https://hwid1.vmall.com/CAS/portal/userRegister/regbyphone.html?reqClientType=7&amp;loginChannel=7000000&amp;countryCode=cn&amp;loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&amp;service=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2FuserCenter%2Findex.html&amp;lang=zh-cn&amp;themeName=red" title="注册帐号">注册帐号</a></span><span class="forgot"><a class="btn-primary clearWidth" href="javascript:void(0)" onclick="gotoresetpwd()" title="忘记密码？">忘记密码？</a></span>
																
																
															 
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								
									<div class="thirdLoginBlock">
										  
										<div class="thirdLoginDiv"></div>
									</div>
								
								
							</div>
							
							<div class="b-qrCode hiden">
								<div class="qrCode-main">
									<div class="qrCode-content">
									<div id="qrcodeImg" style="left: 109px;">
									    
									    
										<img class="qrcode ">
										
										
										<div class="qrcode-over-time">
										<img src="/home/images/qrCode-over-time.png">	
										<div class="refush-content hiden">
										<div class="des">二维码失效</div>
										<div class="refush">刷新</div>
										</div>
										<div class="scan-success-content hiden">
										<div class="scan-success-img"></div>
										<div class="scan-success">扫码成功</div>
										</div>
										</div>
												
									</div>
									<div class="qrCode-help" style="opacity: 0;"></div>
									</div>
								</div>
								
								<div class="qrCode-desc">
									<p>使用<span class="haweiapp">华为移动服务APP</span>扫一扫</p>
									<p>若您使用华为手机，请进入“设置”&gt;“华为帐号”扫码登录。</p>
								</div>
							</div>
							
						</div>
						<div class="smsValidateLogin hidden">
							<span class="changeLoginType callbackAcctLoginBtn" data-type="smsValidateLogin">&lt;&nbsp;返回</span>
							<div class="b-account">
								<div class="login-form-marginTop smsLogin-form">
									<div class="form-edit-area loginEventForm">
										<div class="smsValidateLogin-errorTipsDiv"></div>
										<table border="0" cellpadding="0" cellspacing="0">
											<tbody>
												<tr>
													<td class="user-input-tr"><label class="lb_opacity_Class" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; padding-left: 0px; padding-top: 0px;" for="login_phoneNum"><div style="border: none; background: transparent; cursor: text; margin: 2px; color: rgb(204, 204, 204);" tabindex="-1" class="text vam">手机号</div></label><input type="text" autocomplete="off" class="text vam" id="login_phoneNum" name="userAccount" maxlength="50" tabindex="1" validator="validator41533648467363" style="z-index: 1;"><input type="hidden" id="completePhoneNum"></td>
												</tr>
												
												<tr>
													<td class="verify-td user-input-tr referenceTarget">
														<div id="smsCaptcha"></div>
														<table>
															<tbody><tr>
																<td>
																	<label class="lb_opacity_Class" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; padding-left: 0px; padding-top: 0px;" for="smsRandomCode"><div style="border: none; background: transparent; cursor: text; margin: 2px; color: rgb(204, 204, 204);" tabindex="-1" class="verify vam">图形验证码</div></label><input type="text" autocomplete="off" class="verify vam" id="smsRandomCode" name="authcode" maxlength="4" tabindex="2" validator="validator11533648467347" style="z-index: 1;">
																</td>
																<td>
																	<img class="vam pointer random_padding r" id="smsRandomCodeImg" width="100" height="40" src="/home/login_files/authCodeImage" alt="验证码：" onclick="chgRandomCodeForLogin(&#39;smsRandomCode&#39;);">
																	<i id="smsAuthCodeRight" class="authCodeRightPosFix"></i>
																</td>
															</tr>
														</tbody></table>
													</td>
												</tr>
												
												<tr>
													<td class="referenceTarget user-input-tr"><label class="lb_opacity_Class" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; padding-left: 0px; padding-top: 0px;" for="smsAuthCode"><div style="border: none; background: transparent; cursor: text; margin: 2px; color: rgb(204, 204, 204);" tabindex="-1" class="text vam">短信验证码</div></label><input type="text" autocomplete="off" class="text vam" id="smsAuthCode" name="smsAuthCode" maxlength="8" tabindex="3" validator="validator51533648467365" style="z-index: 1;"><div id="getSmsRandomCodeDiv"><div id="getSmsRandomCode" intervaltime="60" class="smsAuthBth"><span>获取验证码</span><div id="smsAuthCodeTips"></div></div></div></td>
												</tr>
										
												<tr>
													<td class="mt-checkbox">
														<span id="sms-rememberNameSpan"><input type="checkbox" class="checkbox vam" id="remember_smsName" name="remember_smsName" tabindex="4"><label for="remember_smsName"><i id="remember_smsName_icon" class="checkBox-icon tick-off-icon marginR6"></i>记住华为帐号</label></span>
														<div class="hidden remeberTip"></div>
													</td>
												</tr>
												<tr>
													<td>
														<div style="margin-bottom:0px;"><span class="vam error" id="login_msg" style="display:block"></span></div>
														<input type="button" class="button-login" id="btnSMSLogin" data-type="smsLogin" value="登录" tabindex="5">
														<img class="load" src="/home/login_files/loading3.gif">
													</td>
												</tr>
												<tr>
													<td class="mt-links">
														<div class="mt-links-float  vam">
															 
																
																	<span class="regist"><a class="btn-primary clearWidth" href="https://hwid1.vmall.com/CAS/portal/userRegister/regbyphone.html?reqClientType=7&amp;loginChannel=7000000&amp;countryCode=cn&amp;loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&amp;service=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2FuserCenter%2Findex.html&amp;lang=zh-cn&amp;themeName=red" title="注册帐号">注册帐号</a></span><span class="forgot"><a class="btn-primary clearWidth" href="javascript:void(0)" onclick="gotoresetpwd()" title="忘记密码？">忘记密码？</a></span>
																
																
															 
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>						
							</div>
						</div>
					</div>
				</div>	
			<input type="hidden" name="hwmeta" id="hwmeta" value="JxEAogAhAxEAAAAAANefAAYBAAfNn5+enFkBFgEABM3My8oFAQAVxMOurVxbWllZ4ba12LjQpsusxLHdBAEAEsTDvLtaWVng2rXbvdW637HCrAcBABTDwsHAF9y32b/XuOiS4oTxvty20BYBAATNzMvKBQEADM3OFBFOTUxLSuFbWhYBAATNzMvKBgEAFcPT0tHQZ1Y5VzFZNmocaAJzPFo0VhYBAATNzMvKBAEACc3JNzaenZw/GgcBABTDw8LBX0YpRyFJJnoMeBJjLEokRgcBABTDwsHAxyNOIkYsRRtvHXkKRydLLwcBABTDw8LBtdi71bPbtOye7oj1uti63BYBAATNzMvKBgEAFcORkZCPi+iL5YPrhNyu3rjFiuiK7BYBAATNzMvKBgEAFcPT0tHQy2cKZgJoCVcjUTVGC2sHYwMBACDNzMvKycjHxsXExiopKCXHxsXCwcC/vdzb2t/e3dzY7QwBAFWZqpmskqKWrc3/yKOQv4i3hObR4OvauIW1hbHS4O+ItYPk17fU5NXn3urb4tXi1OPT5tfj27mBtITl3eWASiofekt+RScXLkwoEysYdkZyFyMRJkQlAgEAc8298Z/kiuWI5sr81eTD6r7Uvdi4wMzrpPfW48z6wuG337CZrJCv1uPW/Nub6pn0lsKkwYvjlrqMuIBRY1RzWhJZDEYJJANuBGgCIWcDYQtlTWwoTzxUPlh4QXdYZ0h0QAYzHCIYN2UFYgCN5cv/zfvU4OkBAQAIzczKrL8sXtgUAQAYzcyqyqrGsMG01KbEsdST07zCheGW/JjyFwEABM3MyskLAQAyzeLh4LfCtcSwlbuV/IzihbWa74PjjuHOrsKshMD+roLxn+yf/5K+0b/Zsd7zmu2B7NQWAQAEzczLygcBABTDwsHAud+y3rrQof+L+Z3uo8OvywcBABTDw8LBhGQPYQdvAKDqmvyJxqTOqAcBABTDwsHA7mkEbAxiD1ElVzNAcRF9GQQBAAnNzmVl/Pv6WdcFAQAMzck3Nrm4t7a1EIOCBAEACc3OERItLCuAyQYBAAfN3dzb2xue"></div>
		</div>
	<div>
	<!-- 底部  -->

<div class="customer-footer">
	<div class="ft">
		<!--授权  -->
        <div class="warrant-area">
            <p style="text-align: center;line-height:20px;height:20px;">
			 
				
						<a href="https://hwid1.vmall.com/CAS/portal/agreements/userAgreement/zh-cn_userAgreement.html?version=china" class="rule" target="_blank">华为帐号用户协议</a>            	
						<em class="foot_em">|</em>
						<a href="https://hwid1.vmall.com/CAS/portal/agreements/accPrivacyStatement/zh-cn_accPrivacyStatement.html?version=china" class="rule" target="_blank">关于华为帐号与隐私的声明</a>
						<span class="foot_em"><em style="font-style: normal">|</em> <a style="padding:0 10px;" target="blank" href="https://hwid1.vmall.com/CAS/portal/faq/faq.html">常见问题</a></span>
				
				
				
			
			
			
           	
            </p>
            
        	<p style="text-align: center;line-height: 12px;height:12px;margin-top: 10px ">
        	
        		
        			
        				Copyright&nbsp;©&nbsp;2011-2018&nbsp;&nbsp;华为软件技术有限公司&nbsp;&nbsp;版权所有&nbsp;&nbsp;保留一切权利&nbsp;&nbsp;苏B2-20070200号&nbsp;|&nbsp;苏ICP备09062682号-9
        			
        			
        		
        	
        	</p>
        </div>
    </div>
</div>



	</div>
	<div id="layer">
		<div class="mc"></div>
	</div>

	<div id="selectCountryCodeDiv"></div>
	<div class="loginmask" style="display: none;">
		<div>
			<span>登录中...</span>
		</div>
	</div>

<script type="text/javascript">
	var jsdevswfpath = htmlDecodeJQ("https:&#x2F;&#x2F;hwid1.vmall.com&#x2F;CAS&#x2F;up&#x2F;rss_20&#x2F;js&#x2F;pc_rss&#x2F;secrisk&#x2F;JSdev.swf?UP_CAS_2.6.2.202");
	var rss={
			login_js_inputaccount :htmlDecodeJQ("&#35831;&#36755;&#20837;&#24744;&#30340;&#24080;&#21495;"),
			login_js_accountlimit :htmlDecodeJQ("&#24080;&#21495;&#24517;&#39035;&#26159;&#37038;&#20214;&#22320;&#22336;&#25110;&#25163;&#26426;&#21495;"),
			login_js_accountlength :htmlDecodeJQ("&#21326;&#20026;&#24080;&#21495;&#38480;&#21046;&#22312;4~50 &#20010;&#23383;&#31526;"),
			common_js_inputpwd :htmlDecodeJQ("&#35831;&#36755;&#20837;&#24744;&#30340;&#23494;&#30721;"),
			common_js_pwdlimit :htmlDecodeJQ("&#23494;&#30721;&#38271;&#24230;&#20026;8~32&#20010;&#23383;&#31526;"),
			common_js_inputcode :htmlDecodeJQ("&#35831;&#36755;&#20837;&#39564;&#35777;&#30721;"),
			common_js_inputpiccode :htmlDecodeJQ("&#35831;&#36755;&#20837;&#22270;&#24418;&#39564;&#35777;&#30721;"),
			common_js_inputsmscode :htmlDecodeJQ("&#35831;&#36755;&#20837;&#30701;&#20449;&#39564;&#35777;&#30721;"),
			common_js_inputgeetestcode :htmlDecodeJQ("&#35831;&#28857;&#20987;&#25353;&#38062;&#36827;&#34892;&#39564;&#35777;"),
			login_js_codeerror :htmlDecodeJQ("&#39564;&#35777;&#30721;&#38169;&#35823;"),
			common_js_ignorecase :htmlDecodeJQ("&#19981;&#21306;&#20998;&#22823;&#23567;&#20889;"),
			login_js_hwaccount :htmlDecodeJQ("&#25163;&#26426;&#21495;/&#37038;&#20214;&#22320;&#22336;"),
			login_js_password :htmlDecodeJQ("&#23494;&#30721;"),
			login_wrong:htmlDecodeJQ("&#24080;&#21495;&#25110;&#23494;&#30721;&#38169;&#35823;"),
			risk_auth:htmlDecodeJQ("&#26816;&#27979;&#21040;&#24744;&#24080;&#21495;&#23384;&#22312;&#23433;&#20840;&#39118;&#38505;&#65292;&#35831;&#36873;&#25321;&#39564;&#35777;&#26041;&#24335;&#21518;&#33719;&#21462;&#39564;&#35777;&#30721;&#36827;&#34892;&#39564;&#35777;&#12290;"),
			risk_motify_pwd:htmlDecodeJQ("&#24744;&#24080;&#21495;&#30340;&#23494;&#30721;&#36807;&#20110;&#31616;&#21333;&#25110;&#23384;&#22312;&#23433;&#20840;&#39118;&#38505;&#65292;&#35831;&#31435;&#21363;&#20462;&#25913;&#23494;&#30721;&#12290;&#23494;&#30721;&#30001;8-32&#20301;&#23383;&#31526;&#32452;&#25104;&#65292;&#38656;&#33267;&#23569;&#21253;&#21547;&#19968;&#20010;&#22823;&#20889;&#23383;&#27597;&#12289;&#19968;&#20010;&#23567;&#20889;&#23383;&#27597;&#21644;&#19968;&#20010;&#25968;&#23383;&#65292;&#24314;&#35758;&#19981;&#19982;&#20854;&#20182;&#23494;&#30721;&#30456;&#21516;&#12290;&#22914;&#26377;&#20854;&#20182;&#35774;&#22791;&#20351;&#29992;&#27492;&#24080;&#21495;&#65292;&#20462;&#25913;&#23494;&#30721;&#21518;&#38656;&#37325;&#26032;&#30331;&#24405;&#65292;&#25165;&#33021;&#27491;&#24120;&#20351;&#29992;&#21326;&#20026;&#26381;&#21153;&#12290;"),
			login_user_pwd_error_exceed:htmlDecodeJQ("&#24744;&#30331;&#24405;&#38169;&#35823;&#27425;&#25968;&#36807;&#22810;&#65292;&#35831;&#31245;&#21518;&#37325;&#35797;.."),
			common_js_wrongcode:htmlDecodeJQ("&#39564;&#35777;&#30721;&#38169;&#35823;"),
			
			representation_not_receive_verification_code: htmlDecodeJQ("&#27809;&#26377;&#25910;&#21040;&#65311;"),
			
			IGetIt:htmlDecodeJQ("&#30830;&#23450;"),
			hint:htmlDecodeJQ("&#25552;&#31034;"),
			loginOverdue:htmlDecodeJQ("&#24403;&#21069;&#39029;&#38754;&#24050;&#36807;&#26399;&#65292;&#35831;&#21047;&#26032;&#24403;&#21069;&#39029;&#38754;&#21518;&#37325;&#35797;&#12290;"),
			overload:htmlDecodeJQ("&#31995;&#32479;&#32321;&#24537;&#65292;&#35831;&#31245;&#21518;&#20877;&#35797;&#65281;"),
			authcode_name:htmlDecodeJQ("&#39564;&#35777;&#30721;&#65306;"),
			more_details:htmlDecodeJQ("&#26356;&#22810;&#35814;&#24773;"),
			agree_date:htmlDecodeJQ("&#21516;&#24847;&#26085;&#26399;&#65306;"),
			user_agreement:htmlDecodeJQ("&#29992;&#25143;&#21327;&#35758;"),
			next_step:htmlDecodeJQ("&#19979;&#19968;&#27493;"),
			unverified_email_addr:htmlDecodeJQ("&#37038;&#20214;&#22320;&#22336;&#26410;&#39564;&#35777;"),
			email_has_sendto:htmlDecodeJQ("&#39564;&#35777;&#37038;&#20214;&#24050;&#32463;&#21457;&#36865;&#33267;{0}&#35831;&#30331;&#24405;&#37038;&#31665;&#26816;&#26597;&#25910;&#20214;&#31665;&#25110;&#22403;&#22334;&#31665;&#26159;&#21542;&#25910;&#21040;&#39564;&#35777;&#37038;&#20214;&#65292;&#24182;&#25353;&#29031;&#37038;&#20214;&#35828;&#26126;&#23436;&#25104;&#37038;&#20214;&#22320;&#22336;&#39564;&#35777;&#12290;"),
			rummageEmail:htmlDecodeJQ("null"),
			resend:htmlDecodeJQ("&#37325;&#26032;&#33719;&#21462;"),
			resend_time:htmlDecodeJQ("&#37325;&#26032;&#33719;&#21462; ({0})"),
			resend_email:htmlDecodeJQ("&#37325;&#26032;&#21457;&#36865;"),
			getAuthCode:htmlDecodeJQ("&#33719;&#21462;&#39564;&#35777;&#30721;"),
			exit:htmlDecodeJQ("&#21462;&#28040;"),
			cancel:htmlDecodeJQ("&#21462;&#28040;"),
			verify:htmlDecodeJQ("&#39564;&#35777;"),
			verified:htmlDecodeJQ("&#24050;&#39564;&#35777;"),
			verification_not_completed:htmlDecodeJQ( "&#39564;&#35777;&#26410;&#23436;&#25104;&#12290;&#35831;&#30331;&#24405;&#37038;&#31665;&#26816;&#26597;&#25910;&#20214;&#31665;&#25110;&#22403;&#22334;&#31665;&#26159;&#21542;&#25910;&#21040;&#39564;&#35777;&#37038;&#20214;&#65292;&#24182;&#19988;&#25353;&#29031;&#37038;&#20214;&#35828;&#26126;&#23436;&#25104;&#39564;&#35777;&#12290;"),
			account_protect_tip:htmlDecodeJQ("&#24080;&#21495;&#20445;&#25252;"),
			get_activate_email_URL_Error:htmlDecodeJQ("&#21457;&#36865;&#28608;&#27963;&#37038;&#20214;&#22833;&#36133;&#12290;"),
			btn_auth:htmlDecodeJQ("&#39564;&#35777;"),
			cancel_btn:htmlDecodeJQ("&#21462;&#28040;"),
			global_cross_site_login:htmlDecodeJQ("&#38656;&#35201;&#24744;&#21516;&#24847;&#24403;&#21069;&#22269;&#23478;/&#22320;&#21306;&#30340;&#38544;&#31169;&#25919;&#31574;&#12290;&#28857;&#20987;&#21516;&#24847;&#65292;&#21363;&#34920;&#31034;&#24744;&#24050;&#38405;&#35835;&#21644;&#21516;&#24847;&#21326;&#20026;&lt;a class='a-EMUI5' id='globalCrossPrivacyPolicy' target='_blank'&gt;&#38544;&#31169;&#25919;&#31574;&lt;/a&gt;&#12290;"),
			global_cross_page_redirect:htmlDecodeJQ("&#24403;&#21069;&#32593;&#31449;&#19981;&#25903;&#25345;&#35813;&#24080;&#21495;&#30331;&#24405;&#65292;&#23558;&#36339;&#36716;&#21040;&#24080;&#21495;&#27880;&#20876;&#22269;&#23478;/&#22320;&#21306;&#23545;&#24212;&#30340;&#32593;&#31449;&#30331;&#24405;&#12290;"),
			uc_common_agree:htmlDecodeJQ("&#21516;&#24847;"),
			uc_common_no_agree:htmlDecodeJQ("&#19981;&#21516;&#24847;"),
			agree_DFVersion_login:htmlDecodeJQ("&#20026;&#38450;&#27490;&#27450;&#35784;&#34892;&#20026;&#65292;&#21326;&#20026;&#38656;&#37319;&#38598;&#27983;&#35272;&#22120;&#20449;&#24687; (&#20363;&#22914;&#31867;&#22411;&#12289;&#26102;&#21306;&#12289;&#25554;&#20214;&#12289;&#35821;&#35328;&#12289;&#23383;&#20307;&#12289;canvas&#22270;&#29255;&#28210;&#26579;&#21704;&#24076;&#20540;&#12289;webgl&#22270;&#29255;&#28210;&#26579;&#21704;&#24076;&#20540;)&#65292;IP&#22320;&#22336;&#65292;&#24744;&#22312;&#39029;&#38754;&#19978;&#30340;&#40736;&#26631;&#21644;&#38190;&#30424;&#25805;&#20316;&#20449;&#24687;&#65292;&#24182;&#20351;&#29992;cookie&#12289;local storage&#21644;flash cookie&#12290;"),
			agree_DFVersion_cliagree:htmlDecodeJQ("&#28857;&#20987;&#21516;&#24847;&#65292;&#21363;&#34920;&#31034;&#24744;&#21516;&#24847;&#19978;&#36848;&#20869;&#23481;&#21450;&lt;a href=&quot;{$root}/portal/agreements/userAgreement/{$lang}_userAgreement.html?version=china&quot; target=&quot;_blank&quot; class=&quot;loginAndRegLink&quot;&gt;&#21326;&#20026;&#24080;&#21495;&#29992;&#25143;&#21327;&#35758;&lt;/a&gt;&#24182;&#30830;&#35748;&#24744;&#24050;&#38405;&#35835;&lt;a href=&quot;{$root}/portal/agreements/userPrivacyPolicy/{$lang}_userPrivacyPolicy.html&quot; target=&quot;_blank&quot; class=&quot;loginAndRegLink&quot;&gt;&#21326;&#20026;&#38544;&#31169;&#25919;&#31574;&lt;/a&gt;&#12290;"),
			
			//authDialog.js
			verifyLoginPwd:htmlDecodeJQ("&#39564;&#35777;&#30331;&#24405;&#23494;&#30721;"),
			inputLingPwd:htmlDecodeJQ("&#35831;&#36755;&#20837;&#23494;&#30721;"),
			sendAuthCode:htmlDecodeJQ("&#33719;&#21462;&#39564;&#35777;&#30721;"),
			rememberBrowser:htmlDecodeJQ("&#35760;&#20303;&#27492;&#27983;&#35272;&#22120;"),
			rememberBrowserTip:htmlDecodeJQ("&#19979;&#27425;&#30331;&#24405;&#26080;&#38656;&#36755;&#20837;&#39564;&#35777;&#30721;&#65292;&#28165;&#38500;Cookies&#21487;&#21024;&#38500;&#27492;&#35774;&#32622;&#12290;"),
			huaweiAccount:htmlDecodeJQ("&#21326;&#20026;&#24080;&#21495;&#65306;"),
			huaweiAccount_colon_space:htmlDecodeJQ("&#21326;&#20026;&#24080;&#21495;"),
			getAuthCodeError:htmlDecodeJQ("&#33719;&#21462;&#39564;&#35777;&#30721;&#22833;&#36133;"),
			authCodeLength:htmlDecodeJQ("&#39564;&#35777;&#30721;&#38169;&#35823;"),
			smsAuthCodeLength:htmlDecodeJQ("&#30701;&#20449;&#39564;&#35777;&#30721;&#38169;&#35823;"),
			picAuthCodeLength:htmlDecodeJQ("&#22270;&#24418;&#39564;&#35777;&#30721;&#38169;&#35823;"),
			picCodeExpired:htmlDecodeJQ("&#22270;&#24418;&#39564;&#35777;&#30721;&#24050;&#22833;&#25928;"),
			verifyPwdError:htmlDecodeJQ("&#23494;&#30721;&#39564;&#35777;&#22833;&#36133;"),
			inputAuthCodeTip:htmlDecodeJQ("&#35831;&#36755;&#20837;&#39564;&#35777;&#30721;"),
			authentication:htmlDecodeJQ("&#38656;&#35201;&#39564;&#35777;&#24744;&#30340;&#36523;&#20221;"),
			enter_authcode_title:htmlDecodeJQ("&#36755;&#20837;&#39564;&#35777;&#30721;"),
			emialHasSendTo:htmlDecodeJQ("&#37038;&#20214;&#39564;&#35777;&#30721;&#24050;&#32463;&#21457;&#36865;&#33267;&lt;em class='nophonewrap userAccount'&gt;{0}&lt;/em&gt;,&#35831;&#30331;&#24405;&#37038;&#31665;&#26816;&#26597;&#25910;&#20214;&#31665;&#25110;&#22403;&#22334;&#31665;&#26159;&#21542;&#25910;&#21040;&#39564;&#35777;&#37038;&#20214;,10&#20998;&#38047;&#20869;&#26377;&#25928;"),
			phoneMegHasSendTo:htmlDecodeJQ("&#30701;&#20449;&#39564;&#35777;&#30721;&#24050;&#32463;&#21457;&#36865;&#33267;&lt;span class=&quot;nophonewrap userAccount&quot;&gt;{0}&lt;/span&gt;, 10&#20998;&#38047;&#20869;&#26377;&#25928;"),
			getAuthCodeAgain:htmlDecodeJQ("&#37325;&#26032;&#33719;&#21462;"),
			authCodeError:htmlDecodeJQ("&#39564;&#35777;&#30721;&#38169;&#35823;"),
			autoCodeSuccess:htmlDecodeJQ("&#39564;&#35777;&#30721;&#27491;&#30830;"),
			randomCodeIsInvalid:htmlDecodeJQ("&#39564;&#35777;&#30721;&#24050;&#22833;&#25928;"),
			prompt:htmlDecodeJQ("&#25552;&#31034;"),
			iKnowBtn:htmlDecodeJQ("&#30830;&#23450;"),
			noSupportService:htmlDecodeJQ("&#24403;&#21069;&#32593;&#31449;&#30340;&#26381;&#21153;&#33539;&#22260;&#19982;&#24744;&#36755;&#20837;&#30340;&#24080;&#21495;&#19981;&#21305;&#37197;&#65292;&#31995;&#32479;&#26080;&#27861;&#20026;&#24744;&#25552;&#20379;&#26381;&#21153;&#65292;&#25964;&#35831;&#35845;&#35299;&#12290;"),
			uc_common_get_auth_email_error:htmlDecodeJQ("&#33719;&#21462;&#39564;&#35777;&#37038;&#20214;&#22833;&#36133;"),
			
			password:htmlDecodeJQ("&#23494;&#30721;&#65306;"),
			confirmPwdTips:htmlDecodeJQ("&#30830;&#35748;&#23494;&#30721;&#65306;"),
			
			changePwd:htmlDecodeJQ("&#20462;&#25913;&#23494;&#30721;"),
			set_newpassword:htmlDecodeJQ("&#35774;&#32622;&#26032;&#23494;&#30721;"),
			reset_pwd_format_title:htmlDecodeJQ("&#23494;&#30721;&#38656;&#28385;&#36275;&#20197;&#19979;&#35201;&#27714;&#65306;"),
			pwd_format_1:htmlDecodeJQ("&#33267;&#23569;8&#20010;&#23383;&#31526;&#65288;&#19981;&#36229;&#36807;32&#20010;&#65289;"),
			pwd_format_2:htmlDecodeJQ("&#22823;&#20889;&#19982;&#23567;&#20889;&#23383;&#27597;"),
			pwd_format_3:htmlDecodeJQ("&#33267;&#23569;&#19968;&#20010;&#25968;&#23383;"),
			pwd_strength:htmlDecodeJQ("&#23494;&#30721;&#24378;&#24230;&#65306;"),
			weak:htmlDecodeJQ("&#24369;"),
			mid:htmlDecodeJQ("&#20013;"),
			strong:htmlDecodeJQ("&#24378;"),

			newPwd:htmlDecodeJQ("&#26032;&#23494;&#30721;"),
			confirmPwd:htmlDecodeJQ("&#20877;&#27425;&#36755;&#20837;&#26032;&#23494;&#30721;"),
			confirmNewPwd:htmlDecodeJQ("&#30830;&#35748;&#26032;&#23494;&#30721;"),
			
			pwdInputTip:htmlDecodeJQ("&#23494;&#30721;&#30001; 8-32 &#20301;&#23383;&#31526;&#32452;&#25104;&#65292;&#38656;&#33267;&#23569;&#21253;&#21547;&#19968;&#20010;&#22823;&#20889;&#23383;&#27597;&#12289;&#19968;&#20010;&#23567;&#20889;&#23383;&#27597;&#21644;&#19968;&#20010;&#25968;&#23383;&#65292;&#24314;&#35758;&#19981;&#19982;&#20854;&#20182;&#23494;&#30721;&#30456;&#21516;"),
			ok:htmlDecodeJQ("&#30830;&#23450;"),
			common_js_pwdnotsame:htmlDecodeJQ("&#23494;&#30721;&#19982;&#30830;&#35748;&#23494;&#30721;&#19981;&#19968;&#33268;"),
			common_js_confirmpwd:htmlDecodeJQ("&#30830;&#35748;&#23494;&#30721;&#65306;"),
			updatePwdError:htmlDecodeJQ("&#20462;&#25913;&#23494;&#30721;&#22833;&#36133;"),
			uc_common_second_protect:htmlDecodeJQ("&#24744;&#24050;&#24320;&#21551;&#24080;&#21495;&#20445;&#25252;&#65292;&#35831;&#36755;&#20837;&#39564;&#35777;&#30721;&#20197;&#23436;&#25104;&#30331;&#24405;&#12290;"),
			smsAuthCode:htmlDecodeJQ("&#30701;&#20449;&#39564;&#35777;&#30721;"),
			imgCode:htmlDecodeJQ("&#22270;&#24418;&#39564;&#35777;&#30721;"),
			emailAuthCode:htmlDecodeJQ("&#37038;&#20214;&#39564;&#35777;&#30721;"),
			uc_useragreement_update:htmlDecodeJQ("&#29992;&#25143;&#21327;&#35758;&#26356;&#26032;"),
			remeber_account_tip:htmlDecodeJQ("&#22312;&#20844;&#29992;&#30005;&#33041;&#19978;&#19981;&#35201;&#36873;&#25321;&#27492;&#39033;&#65292;&#25512;&#33616;&#22312;&#20010;&#20154;&#30005;&#33041;&#19978;&#36873;&#25321;&#27492;&#39033;&#12290;"),
			new_cross_login_tip:htmlDecodeJQ("&#24744;&#20351;&#29992;&#30340;&#26412;&#22320;&#26381;&#21153;&#23558;&#35775;&#38382;&#24744;&#27880;&#20876;&#21306;&#22495;&#30340;&#24080;&#21495;&#20449;&#24687;&#65292;&#26412;&#22320;&#26381;&#21153;&#21644;&#24744;&#24080;&#21495;&#27880;&#20876;&#21306;&#22495;&#19981;&#22312;&#21516;&#19968;&#21306;&#22495;&#12290;"),
			uc_common_cancel:htmlDecodeJQ("&#21462;&#28040;"),
			common_go_on:htmlDecodeJQ("&#32487;&#32493;"),
			
			uc_verify_phone_tip:htmlDecodeJQ("&#24744;&#30340;&#25163;&#26426;&#24080;&#21495;&#38656;&#35201;&#39564;&#35777;&#21518;&#25165;&#21487;&#20351;&#29992;&#65292;&#24453;&#28608;&#27963;&#30340;&#25163;&#26426;&#24080;&#21495;&#20026;&#65306;&lt;span class=\&quot;nophonewrap unactivephone\&quot;&gt;{0}&lt;/span&gt;"),
			uc_verify_phone:htmlDecodeJQ("&#39564;&#35777;&#25163;&#26426;"),
			setSuccess:htmlDecodeJQ("&#35774;&#32622;&#25104;&#21151;"),
			close_btn:htmlDecodeJQ("&#20851;&#38381;"),
			uc_common_phone_use_tip:htmlDecodeJQ("&#35813;&#25163;&#26426;&#21495;&#21487;&#29992;&#20110;&#30331;&#24405;&#12289;&#37325;&#32622;&#23494;&#30721;&#21644;&#39564;&#35777;&#36523;&#20221;"),
			risk_control_high:htmlDecodeJQ("&#28201;&#39336;&#25552;&#31034;&#65306;&#35813;&#24080;&#21495;&#30097;&#20284;&#23384;&#22312;&#23433;&#20840;&#39118;&#38505;&#65292;&#20026;&#20102;&#36991;&#20813;&#24080;&#21495;&#34987;&#24694;&#24847;&#20351;&#29992;&#65292;&#35831;&#36827;&#34892;&#36523;&#20221;&#39564;&#35777;&#21644;&#20462;&#25913;&#23494;&#30721;&#12290;"),
			risk_control_pwd:htmlDecodeJQ("&#28201;&#39336;&#25552;&#31034;&#65306;&#35813;&#24080;&#21495;&#30097;&#20284;&#23384;&#22312;&#23433;&#20840;&#39118;&#38505;&#65292;&#20026;&#20102;&#36991;&#20813;&#24080;&#21495;&#34987;&#24694;&#24847;&#20351;&#29992;&#65292;&#35831;&#24744;&#20462;&#25913;&#23494;&#30721;&#12290;"),
			risk_control_low:htmlDecodeJQ("&#20026;&#20102;&#24744;&#30340;&#24080;&#21495;&#23433;&#20840;&#65292;&#35831;&#36827;&#34892;&#36523;&#20221;&#39564;&#35777;&#12290;"),
			pwd_safe_tip:htmlDecodeJQ("&#21247;&#20351;&#29992;&#20854;&#20182;&#24080;&#21495;&#30340;&#23494;&#30721;&#12290;"),
			uc_common_set_sec_account_failed:htmlDecodeJQ("&#35774;&#32622;&#22833;&#36133;"),
			base_agr_update_title:htmlDecodeJQ("&#21326;&#20026;&#24080;&#21495;&#26381;&#21153;&#26465;&#27454;&#26356;&#26032;"),

			
			error_70001201:htmlDecodeJQ("&#31995;&#32479;&#32321;&#24537;&#65292;&#35831;&#31245;&#21518;&#20877;&#35797;&#65281;"),
			error_70008001:htmlDecodeJQ("&#19981;&#21487;&#26159;&#24120;&#35265;&#23494;&#30721;&#25110;&#24369;&#23494;&#30721;"),
			error_70002020:htmlDecodeJQ("&#26032;&#26087;&#23494;&#30721;&#19981;&#33021;&#30456;&#21516;"),
			error_70002003_1:htmlDecodeJQ("&#26087;&#23494;&#30721;&#36755;&#20837;&#38169;&#35823;"),
			error_70002016_2:htmlDecodeJQ("&#20462;&#25913;&#23494;&#30721;&#21518;&#65292;&#21024;&#38500;&#19994;&#21153;Token&#22833;&#36133;"),
			error_70002057_2:htmlDecodeJQ("&#36755;&#20837;&#38169;&#35823;&#27425;&#25968;&#36807;&#22810;&#65292;&#35831;&#30830;&#35748;&#21518;&#20877;&#35797;"),
			error_70002058_1: htmlDecodeJQ("&#36755;&#20837;&#38169;&#35823;&#27425;&#25968;&#36807;&#22810;&#65292;&#35831;24&#23567;&#26102;&#21518;&#37325;&#35797;&#12290;"),
			error_70001102_2: htmlDecodeJQ("&#21457;&#36865;&#37038;&#20214;&#27425;&#25968;&#36739;&#39057;&#32321;&#65292;&#35831;&#26816;&#26597;&#25910;&#20214;&#31665;&#25110;&#22403;&#22334;&#31665;&#26159;&#21542;&#25910;&#21040;&#39564;&#35777;&#37038;&#20214;&#65292;1 &#23567;&#26102;&#21518;&#21487;&#37325;&#35797;&#12290;"),
			
			error_70002003:htmlDecodeJQ("&#24080;&#21495;&#25110;&#32773;&#23494;&#30721;&#38169;&#35823;"),
			error_10000001:htmlDecodeJQ("&#31995;&#32479;&#32321;&#24537;&#65292;&#35831;&#31245;&#21518;&#20877;&#35797;&#65281;"),
			error_10000001_1:htmlDecodeJQ("&#33719;&#21462;&#39564;&#35777;&#30721;&#22833;&#36133;&#65292;&#35831;&#31245;&#21518;&#20877;&#35797;"),
			error_10000001_2:htmlDecodeJQ("&#23494;&#30721;&#38169;&#35823;"),
			error_10000001_3:htmlDecodeJQ("&#35831;&#36755;&#20837;&#27491;&#30830;&#30340;&#24080;&#21495;"),
			error_10000002:htmlDecodeJQ("&#19981;&#25552;&#20379;&#26381;&#21153;"),
			error_10000004:htmlDecodeJQ("&#38750;&#27861;&#25805;&#20316;!"),
			error_70001401:htmlDecodeJQ("&#31995;&#32479;&#20869;&#37096;&#38169;&#35823;"),
			error_70002001:htmlDecodeJQ("&#29992;&#25143;&#19981;&#23384;&#22312;"),
			error_70002028:htmlDecodeJQ("&#29992;&#25143;&#27809;&#26377;&#20256;&#20837;&#30340;&#25163;&#26426;&#21495;"),
			error_70002046:htmlDecodeJQ("&#25163;&#26426;&#21495;&#24050;&#32463;&#28608;&#27963;"),
			error_70002030:htmlDecodeJQ("&#30701;&#20449;&#39564;&#35777;&#30721;&#21457;&#36865;&#22833;&#36133;"),
			error_70001101:htmlDecodeJQ("&#27809;&#26377;&#26435;&#38480;&#25191;&#34892;&#27492;&#25805;&#20316;"),
			error_70001102_0:htmlDecodeJQ("&#33719;&#21462;&#39564;&#35777;&#30721;&#37038;&#20214;&#27425;&#25968;&#36739;&#20026;&#39057;&#32321;&#65292;&#35831;&#26816;&#26597;&#25910;&#20214;&#31665;&#25110;&#22403;&#22334;&#31665;&#26159;&#21542;&#25910;&#21040;&#39564;&#35777;&#37038;&#20214;&#65292;1&#23567;&#26102;&#21518;&#21487;&#37325;&#35797;&#12290;"),
			error_70001102_1:htmlDecodeJQ("&#33719;&#21462;&#39564;&#35777;&#30721;&#30701;&#20449;&#27425;&#25968;&#36739;&#20026;&#39057;&#32321;&#65292; 1&#23567;&#26102;&#21518;&#21487;&#37325;&#35797;&#12290;"),
			error_70001104_0:htmlDecodeJQ("&#33719;&#21462;&#39564;&#35777;&#30721;&#37038;&#20214;&#27425;&#25968;&#36807;&#20110;&#39057;&#32321;&#65292;&#35831;&#26816;&#26597;&#25910;&#20214;&#31665;&#25110;&#22403;&#22334;&#31665;&#26159;&#21542;&#25910;&#21040;&#39564;&#35777;&#37038;&#20214;&#65292;24&#23567;&#26102;&#21518;&#21487;&#37325;&#35797;&#12290;"),
			error_70001104_1:htmlDecodeJQ("&#33719;&#21462;&#39564;&#35777;&#30721;&#30701;&#20449;&#27425;&#25968;&#36807;&#20110;&#39057;&#32321;&#65292; 24&#23567;&#26102;&#21518;&#21487;&#37325;&#35797;"),
			error_70001104_3: htmlDecodeJQ("&#21457;&#36865;&#37038;&#20214;&#27425;&#25968;&#36807;&#20110;&#39057;&#32321;&#65292;&#35831;&#26816;&#26597;&#25910;&#20214;&#31665;&#25110;&#22403;&#22334;&#31665;&#26159;&#21542;&#25910;&#21040;&#39564;&#35777;&#37038;&#20214;&#65292;24 &#23567;&#26102;&#21518;&#21487;&#37325;&#35797;&#12290;"),
			error_70006007_0:htmlDecodeJQ("&#20351;&#29992;&#35813;&#23433;&#20840;&#37038;&#20214;&#22320;&#22336;&#30340;&#21326;&#20026;&#24080;&#21495;&#25968;&#37327;&#24050;&#36798;&#19978;&#38480;"),
			error_70006007_1:htmlDecodeJQ("&#20351;&#29992;&#35813;&#23433;&#20840;&#25163;&#26426;&#21495;&#30340;&#21326;&#20026;&#24080;&#21495;&#25968;&#37327;&#24050;&#36798;&#19978;&#38480;"),
			error_70002055:htmlDecodeJQ("&#29992;&#25143;&#24080;&#21495;&#19981;&#23384;&#22312;"),
			error_70006006:htmlDecodeJQ("&#24080;&#21495;&#19981;&#34987;&#25903;&#25345;"),
			error_70002002:htmlDecodeJQ("&#24080;&#21495;&#24050;&#23384;&#22312;"),
			error_70002070:htmlDecodeJQ("&#23494;&#30721;&#22797;&#26434;&#24230;&#36807;&#20302;"),
			error_70002057_0:htmlDecodeJQ("&#39564;&#35777;&#30721;&#24050;&#36830;&#32493;&#38169;&#35823;&#36229;&#36807;&#19977;&#27425;"),
			error_70002057_1:htmlDecodeJQ("&#36755;&#20837;&#30340;&#39564;&#35777;&#30721;&#38169;&#35823;&#27425;&#25968;&#36807;&#22810;"),
			error_70002058:htmlDecodeJQ("&#36755;&#20837;&#30340;&#39564;&#35777;&#30721;&#38169;&#35823;&#27425;&#25968;&#36807;&#22810;&#65292;&#35831;&#26126;&#22825;&#20877;&#35797;"),
			error_70002039:htmlDecodeJQ("&#39564;&#35777;&#30721;&#19981;&#23384;&#22312;&#25110;&#24050;&#36807;&#26399;"),
			error_70002073:htmlDecodeJQ("&#29992;&#25143;&#24517;&#39035;&#20445;&#30041;&#19968;&#20010;&#25163;&#26426;&#24080;&#21495;&#25110;&#37038;&#31665;&#24080;&#21495;"),
			error_70002043:htmlDecodeJQ("&#29992;&#25143;&#20851;&#38381;&#25163;&#26426;&#25214;&#22238;&#23494;&#30721;&#21518;&#65292;&#19981;&#33021;&#21024;&#38500;&#20165;&#26377;&#30340;&#19968;&#20010;&#37038;&#31665;&#25110;&#32773;&#23433;&#20840;&#37038;&#31665;"),
			error_70002053:htmlDecodeJQ("&#24453;&#21024;&#38500;&#30340;&#24080;&#21495;&#20449;&#24687;&#19981;&#23384;&#22312;"),
			error_70002016:htmlDecodeJQ("&#21024;&#38500;&#23433;&#20840;&#37038;&#31665;&#24080;&#21495;&#22833;&#36133;"),
			error_70002016_1:htmlDecodeJQ("&#21464;&#26356;&#24080;&#21495;&#21518;&#65292;&#21024;&#38500;&#19994;&#21153;Token&#22833;&#36133;"),
			error_70001201_0:htmlDecodeJQ("&#24080;&#21495;&#21644;&#31867;&#22411;&#19981;&#21305;&#37197;"),
			error_70001201_1:htmlDecodeJQ("&#39564;&#35777;&#30721;&#38169;&#35823;"),
			error_70001201_2: htmlDecodeJQ("&#35831;&#31245;&#21518;&#20877;&#35797;"),
			error_70002018:htmlDecodeJQ("&#21457;&#36865;&#28608;&#27963;&#37038;&#20214;&#22833;&#36133;&#12290;"),
			error_70002019:htmlDecodeJQ("&#37038;&#31665;&#24080;&#21495;&#24050;&#32463;&#28608;&#27963;&#12290;"),
			error_70002008:htmlDecodeJQ("&#29992;&#25143;&#27809;&#26377;&#20256;&#20837;email"),
			error_70002009:htmlDecodeJQ("&#24080;&#21495;&#26410;&#28608;&#27963;"),
			error_70002058:htmlDecodeJQ("&#36755;&#20837;&#38169;&#35823;&#27425;&#25968;&#36807;&#22810;&#65292;&#35831;24&#23567;&#26102;&#21518;&#37325;&#35797;&#12290;"),
			uc_error_70002058_3:htmlDecodeJQ("&#36755;&#20837;&#38169;&#35823;&#27425;&#25968;&#36807;&#22810;&#65292;&#35831;24&#23567;&#26102;&#21518;&#37325;&#35797;&#12290;"),
			error_70002076:htmlDecodeJQ("&#24744;&#30340;&#24080;&#21495;&#24050;&#20923;&#32467;&#65292;&#33509;&#30830;&#35748;&#24080;&#21495;&#22788;&#20110;&#23433;&#20840;&#29366;&#24577;&#65292;&#21487;&#28857;&#20987;&ldquo;&#30830;&#23450;&rdquo;&#35299;&#20923;&#12290;"),
			error_70005004:htmlDecodeJQ("&#27492;&#24080;&#21495;&#24050;&#34987;&#21478;&#19968;&#20010;&#21516;&#31867;&#22411;&#30340;&#31532;&#19977;&#26041;&#24080;&#21495;&#32465;&#23450;"),
			error_10000505:htmlDecodeJQ("&#31532;&#19977;&#26041;&#24080;&#21495;&#32465;&#23450;&#22833;&#36133;"),
			uc_change_pwd_safe_tip:htmlDecodeJQ("&#21247;&#20351;&#29992;&#20854;&#20182;&#24080;&#21495;&#30340;&#23494;&#30721;&#12290;"),
			enter_authcode_title:htmlDecodeJQ("&#36755;&#20837;&#39564;&#35777;&#30721;"),
			uc_common_resend_email:htmlDecodeJQ("&#37325;&#26032;&#21457;&#36865;"),
			getcode_onoffline:htmlDecodeJQ("&#22312;&#24744;&#30340;&#21463;&#20449;&#35774;&#22791;&#19978;&#33719;&#21462;&#39564;&#35777;&#30721;&#12290;&lt;span id=&quot;howtodo&quot; class=&quot;a-EMUI5&quot;&gt;&#22914;&#20309;&#25805;&#20316;&lt;/span&gt;"),
			send_seccode_to_sec:htmlDecodeJQ("&#21457;&#36865;&#39564;&#35777;&#30721;&#33267;&lt;span class=&quot;nophonewrap userAccount&quot;&gt;{0}&lt;/span&gt;"),
			offline_device_problem:htmlDecodeJQ("&#35774;&#22791;&#22788;&#20110;&#31163;&#32447;&#29366;&#24577;&#27809;&#26377;&#25910;&#21040;&#39564;&#35777;&#30721;&#65311;"),
			getcode_onoffline:htmlDecodeJQ("&#22312;&#24744;&#30340;&#21463;&#20449;&#35774;&#22791;&#19978;&#33719;&#21462;&#39564;&#35777;&#30721;&#12290;&lt;span id=&quot;howtodo&quot; class=&quot;a-EMUI5&quot;&gt;&#22914;&#20309;&#25805;&#20316;&lt;/span&gt;"),
			noway_to_use_security_device:htmlDecodeJQ("&#26080;&#27861;&#20351;&#29992;&#23433;&#20840;&#25163;&#26426;&#21495;&#25110;&#23433;&#20840;&#37038;&#20214;&#22320;&#22336;"),
			sec_code_sent_phone_email:htmlDecodeJQ("&#23433;&#20840;&#39564;&#35777;&#30721;&#24050;&#21457;&#36865;&#33267; &lt;span class=&quot;nophonewrap userAccount&quot;&gt;{0}&lt;/span&gt;&#65292;&#20026;&#20102;&#24744;&#30340;&#24080;&#21495;&#23433;&#20840;&#65292;&#35831;&#36827;&#34892;&#36523;&#20221;&#39564;&#35777;&#12290;"),
			no_receive_security_code:htmlDecodeJQ("&#27809;&#26377;&#25910;&#21040;&#23433;&#20840;&#39564;&#35777;&#30721;&#65311;"),
			send_code_too_many_times:htmlDecodeJQ("&#21457;&#36865;&#39564;&#35777;&#30721;&#30340;&#27425;&#25968;&#36807;&#22810;"),
			common_I_know:htmlDecodeJQ("&#30693;&#36947;&#20102;"),
			send_to_device:htmlDecodeJQ("&#21457;&#36865;&#39564;&#35777;&#30721;&#33267;&#35774;&#22791;"),
			can_not_use_sec_phone_email_tip_web:htmlDecodeJQ("&#22914;&#26524;&#24744;&#26080;&#27861;&#20351;&#29992;&#23433;&#20840;&#25163;&#26426;&#21495;&#25110;&#23433;&#20840;&#37038;&#31665;&#22320;&#22336;&#65292;&#35831;&#21069;&#24448;&ldquo;&#24080;&#21495;&#20013;&#24515;&rdquo;&#20013;&#26356;&#25913;&#23433;&#20840;&#25163;&#26426;&#21495;&#25110;&#23433;&#20840;&#37038;&#31665;&#22320;&#22336;&#12290;"),
			can_not_use_sec_phone_tip_web:htmlDecodeJQ("&#22914;&#26524;&#24744;&#26080;&#27861;&#20351;&#29992;&#23433;&#20840;&#25163;&#26426;&#21495;&#65292;&#35831;&#21069;&#24448;&ldquo;&#24080;&#21495;&#20013;&#24515;&rdquo;&#20013;&#26356;&#25913;&#23433;&#20840;&#25163;&#26426;&#21495;&#12290;"),
			can_not_use_sec_email_tip_web:htmlDecodeJQ("&#22914;&#26524;&#24744;&#26080;&#27861;&#20351;&#29992;&#23433;&#20840;&#37038;&#31665;&#22320;&#22336;&#65292;&#35831;&#21069;&#24448;&ldquo;&#24080;&#21495;&#20013;&#24515;&rdquo;&#20013;&#26356;&#25913;&#23433;&#20840;&#37038;&#31665;&#22320;&#22336;&#12290;"),
			security_code_sent_xdevice:htmlDecodeJQ("&#23433;&#20840;&#39564;&#35777;&#30721;&#24050;&#21457;&#36865;&#33267; &lt;span class=&quot;nophonewrap userAccount&quot;&gt;{0}&lt;/span&gt;&#65292;&#20026;&#20102;&#24744;&#30340;&#24080;&#21495;&#23433;&#20840;&#65292;&#35831;&#36827;&#34892;&#36523;&#20221;&#39564;&#35777;&#12290;"),
			resetPwd_inputSecAuthCode_unableUsePhone:htmlDecodeJQ("&#26080;&#27861;&#20351;&#29992;&#23433;&#20840;&#25163;&#26426;&#21495;"),
			resetPwd_inputSecAuthCode_unableUseEmail:htmlDecodeJQ("&#26080;&#27861;&#20351;&#29992;&#23433;&#20840;&#37038;&#20214;&#22320;&#22336;"),
			send_code_toomany_tip:htmlDecodeJQ("&#35831;&#36755;&#20837;&#24744;&#26368;&#21518;&#25910;&#21040;&#30340;&#39564;&#35777;&#30721;&#25110;&#31245;&#21518;&#37325;&#35797;&#12290;"),
			login_error_100080041:htmlDecodeJQ("&#20026;&#30830;&#35748;&#26159;&#24744;&#26412;&#20154;&#25805;&#20316;&#65292;&#35831;&#23436;&#25104;&#20197;&#19979;&#39564;&#35777;&#25165;&#33021;&#30331;&#24405;"),
			security_code_sent_other_device:htmlDecodeJQ("&#23433;&#20840;&#39564;&#35777;&#30721;&#24050;&#21457;&#36865;&#33267;&#24744;&#30340;&#20854;&#20182;&#35774;&#22791;&#65292;&#35831;&#36755;&#20837;&#39564;&#35777;&#30721;&#12290;"),
			error_70009016: htmlDecodeJQ("&#35774;&#32622;&#30340;&#26032;&#23494;&#30721;&#19981;&#33021;&#19982;&#36817;&#20960;&#27425;&#21382;&#21490;&#23494;&#30721;&#30456;&#21516;&#65292;&#35831;&#37325;&#26032;&#35774;&#32622;"),
			get_authcode_error:htmlDecodeJQ("&#33719;&#21462;&#39564;&#35777;&#30721;&#38169;&#35823;"),
			loginUserPhone:htmlDecodeJQ("&#25163;&#26426;&#21495;"),
			emptyphone:htmlDecodeJQ("&#25163;&#26426;&#21495;&#20026;&#31354;&#65292;&#35831;&#27491;&#30830;&#22635;&#20889;"),
			phoneNumError:htmlDecodeJQ("&#25163;&#26426;&#21495;&#19981;&#27491;&#30830;"),	
			smsLoginError_70001401:htmlDecodeJQ("&#31995;&#32479;&#32321;&#24537;&#65292;&#35831;&#31245;&#21518;&#20877;&#35797;&#65281;"),
			smsLoginError_70008805:htmlDecodeJQ("&#24744;&#30340;&#24080;&#21495;&#24050;&#24320;&#21551;&#24080;&#21495;&#20445;&#25252;&#65292;&#35831;&#20351;&#29992;&#24080;&#21495;&#21644;&#23494;&#30721;&#30331;&#24405;"),
			smsLoginError_70002058:htmlDecodeJQ("&#36755;&#20837;&#30340;&#39564;&#35777;&#30721;&#38169;&#35823;&#27425;&#25968;&#36807;&#22810;&#65292;&#35831;&#26126;&#22825;&#20877;&#35797;"),
			smsLoginError_70002057:htmlDecodeJQ("&#39564;&#35777;&#30721;&#24050;&#36830;&#32493;&#38169;&#35823;&#36229;&#36807;&#19977;&#27425;"),
			smsLoginError_10000402:htmlDecodeJQ("&#24080;&#21495;&#25110;&#32773;&#30701;&#20449;&#39564;&#35777;&#30721;&#38169;&#35823;&#65292;&#35831;&#37325;&#26032;&#36755;&#20837;"),
			appeal_label_cantReceiveByPhone:htmlDecodeJQ("&#26080;&#27861;&#20351;&#29992;&#25163;&#26426;&#21495;&#33719;&#21462;&#39564;&#35777;&#30721;&#65311;"),
			appeal_label_cantReceiveByEmail:htmlDecodeJQ("&#26080;&#27861;&#20351;&#29992;&#37038;&#20214;&#22320;&#22336;&#33719;&#21462;&#39564;&#35777;&#30721;&#65311;"),
			appeal_label_cantReceiveByPhoneOrEmail:htmlDecodeJQ("&#26080;&#27861;&#20351;&#29992;&#25163;&#26426;&#21495;&#25110;&#37038;&#20214;&#22320;&#22336;&#33719;&#21462;&#39564;&#35777;&#30721;&#65311;"),
			appeal_label_cantReceiveBysecPhone:htmlDecodeJQ("&#26080;&#27861;&#20351;&#29992;&#23433;&#20840;&#25163;&#26426;&#21495;&#33719;&#21462;&#39564;&#35777;&#30721;&#65311;"),
			appeal_label_cantReceiveBysecEmail:htmlDecodeJQ("&#26080;&#27861;&#20351;&#29992;&#23433;&#20840;&#37038;&#20214;&#22320;&#22336;&#33719;&#21462;&#39564;&#35777;&#30721;&#65311;"),
			appeal_label_cantReceiveBysecPhoneOrsecEmail:htmlDecodeJQ("&#26080;&#27861;&#20351;&#29992;&#23433;&#20840;&#25163;&#26426;&#21495;&#25110;&#23433;&#20840;&#37038;&#20214;&#22320;&#22336;&#33719;&#21462;&#39564;&#35777;&#30721;&#65311;"),
			appeal_label_appealChange:htmlDecodeJQ("&#30003;&#35785;&#26356;&#25913;"),
			trustBrowser_label_DialogTitle:htmlDecodeJQ("&#26159;&#21542;&#20449;&#20219;&#27492;&#27983;&#35272;&#22120;&#65311;"),
			trustBrowser_label_content:htmlDecodeJQ("&#33509;&#20449;&#20219;&#65292;&#24403;&#24744;&#19979;&#27425;&#30331;&#24405;&#26102;&#65292;&#31995;&#32479;&#23558;&#19981;&#20250;&#35201;&#27714;&#24744;&#25552;&#20379;&#39564;&#35777;&#30721;&#12290;"),
			trustBrowser_btn_trust:htmlDecodeJQ("&#20449;&#20219;"),
			trustBrowser_btn_dontTrust:htmlDecodeJQ("&#19981;&#20449;&#20219;"),
			trustBrowser_btn_remainNextTime:htmlDecodeJQ("&#31245;&#21518;&#20877;&#35828;"),
			agree_DFVersion_Content1:htmlDecodeJQ("&#21326;&#20026;&#24080;&#21495;&#26159;&#29992;&#20110;&#35775;&#38382;&#25152;&#26377;&#21326;&#20026;&#26381;&#21153;&#30340;&#24080;&#21495;&#65292;&#22312;&#29305;&#23450;&#22330;&#26223;&#19979;&#38656;&#35201;&#25910;&#38598;&#21644;&#20351;&#29992;&#24744;&#30340;&#20449;&#24687;&#65306;&lt;div class=&quot;DFVersion-item-EMUI6&quot;&gt;&lt;i class=&quot;DFVersion-item-point&quot;&gt;.&lt;/i&gt;&#24744;&#27880;&#20876;&#21326;&#20026;&#24080;&#21495;&#26102;&#25552;&#20379;&#30340;&#20449;&#24687;&#65306;&#25163;&#26426;&#21495;&#25110;&#37038;&#20214;&#22320;&#22336;&#12289;&#21326;&#20026;&#24080;&#21495;&#23494;&#30721;&#65307;&lt;/div&gt;&lt;div class=&quot;DFVersion-item-EMUI6&quot;&gt;&lt;i class=&quot;DFVersion-item-point&quot;&gt;.&lt;/i&gt;IP &#22320;&#22336;&#65307;&lt;/div&gt;"),
			agree_DFVersion_Content1_info1:htmlDecodeJQ("&#20026;&#38450;&#27490;&#27450;&#35784;&#34892;&#20026;&#65292;&#21326;&#20026;&#38656;&#37319;&#38598;&#27983;&#35272;&#22120;&#20449;&#24687; (&#31867;&#22411;&#12289;&#26102;&#21306;&#12289;&#25554;&#20214;&#12289;&#35821;&#35328;&#12289;&#23383;&#20307;&#12289;canvas&#22270;&#29255;&#28210;&#26579;&#21704;&#24076;&#20540;&#12289;webgl&#22270;&#29255;&#28210;&#26579;&#21704;&#24076;&#20540;)&#65307;&#30331;&#24405;&#24322;&#24120;&#26102;&#65292;&#21326;&#20026;&#38656;&#37319;&#38598;&#22270;&#29255;&#39564;&#35777;&#30721;&#39029;&#38754;&#30340;&#40736;&#26631;&#25110;&#23631;&#24149;&#28369;&#21160;&#20449;&#24687;&#65292;&#20197;&#39564;&#35777;&#36523;&#20221;&#12290;&lt;div class=&quot;DFVersion-item-EMUI6&quot;&gt;&#21326;&#20026;&#25910;&#38598;&#12289;&#20351;&#29992;&#20449;&#24687;&#30340;&#35814;&#24773;&#35831;&#35265;&lt;a href=&quot;{$root}/portal/agreements/accPrivacyStatement/{$lang}_accPrivacyStatement.html?version=china&quot; target=&quot;_blank&quot; class=&quot;DFVersion-link-EMUI6&quot;&gt;&#20851;&#20110;&#21326;&#20026;&#24080;&#21495;&#19982;&#38544;&#31169;&#30340;&#22768;&#26126;&lt;/a&gt;&#12290;&lt;/div&gt;"),
			agree_DFVersion_Content1_info2:htmlDecodeJQ("&#20010;&#20154;&#20449;&#24687;&#65292;&#21253;&#25324;&lt;b class=&quot;DFVersion-attentionTip&quot;&gt;&#25163;&#26426;&#21495;&#12289;&#37038;&#20214;&#22320;&#22336;&#21644;&#23494;&#30721;&lt;/b&gt;&#65307;"),
			agree_DFVersion_Content1_info3:htmlDecodeJQ("&#32593;&#32476;&#20449;&#24687;&#65292;&#21253;&#25324; IP &#22320;&#22336;&#12290;"),
			agree_DFVersion_Content2:htmlDecodeJQ("&#19978;&#36848;&#25968;&#25454;&#23558;&#20250;&#20256;&#36755;&#24182;&#20445;&#23384;&#33267;&#20013;&#21326;&#20154;&#27665;&#20849;&#21644;&#22269;&#22659;&#20869;&#30340;&#26381;&#21153;&#22120;&#12290;"),
			agree_DFVersion_Content3:htmlDecodeJQ("&#22914;&#26524;&#24744;&#19981;&#21516;&#24847;&#25105;&#20204;&#37319;&#38598;&#19978;&#36848;&#20449;&#24687;&#65292;&#25105;&#20204;&#23558;&#26080;&#27861;&#20026;&#24744;&#25552;&#20379;&#30456;&#24212;&#30340;&#26381;&#21153;&#12290;"),
			agree_DFVersion_title2Login:htmlDecodeJQ("&#21326;&#20026;&#24080;&#21495;&#36890;&#30693;&#26356;&#26032;"),
			agree_DFVersion_cancle:htmlDecodeJQ("&#21462;&#28040;"),
			reducePwd_format_1:htmlDecodeJQ("&#19981;&#33021;&#21253;&#21547;&#31354;&#26684;"),
			reducePwd_format_2:htmlDecodeJQ("&#33267;&#23569;&#21253;&#21547;8&#20010;&#23383;&#31526;"),
			reducePwd_format_3:htmlDecodeJQ("&#33267;&#23569;&#21253;&#21547;&#23383;&#27597;&#12289;&#25968;&#23383;&#12289;&#31526;&#21495;&#20013;&#30340;2&#31181;"),
			reducePwd_inputError_desc:htmlDecodeJQ("&#33267;&#23569;&#21253;&#21547;8&#20010;&#23383;&#31526;&#65307;&#33267;&#23569;&#21253;&#21547;&#23383;&#27597;&#12289;&#25968;&#23383;&#12289;&#31526;&#21495;&#20013;&#30340;2&#31181;&#65307;&#19981;&#33021;&#21253;&#21547;&#31354;&#26684;&#65307;&#24314;&#35758;&#21247;&#20351;&#29992;&#20854;&#20182;&#24080;&#21495;&#30340;&#23494;&#30721;")
	};
	
	var localInfo={
			thirdLoginUrlAddrass:htmlDecodeJQ("https:&#x2F;&#x2F;hwid1.vmall.com&#x2F;CAS"),
			authCodeValidate:htmlDecodeJQ(""),
			webssoLoginSessionCode:htmlDecodeJQ("https:&#x2F;&#x2F;hwid1.vmall.com&#x2F;Captcha&#x2F;authCodeImage?session_code_key=login_session_ramdom_code_key"),
			webssoSMSLoginSessionCode:htmlDecodeJQ("https:&#x2F;&#x2F;hwid1.vmall.com&#x2F;Captcha&#x2F;authCodeImage?session_code_key=sms_login_session_ramdom_code_key"),
			findPwd:htmlDecodeJQ("https://hwid1.vmall.com/CAS/portal/resetPwd/forgetbyid.html"),
			urlCountryCode:htmlDecodeJQ("cn"),
			submit:htmlDecodeJQ("true"),
			loginUrl:htmlDecodeJQ("https://hwid1.vmall.com/CAS/portal/login.html"),
			service:htmlDecodeJQ("https:&#x2F;&#x2F;hwid1.vmall.com&#x2F;CAS&#x2F;portal&#x2F;userCenter&#x2F;index.html"),
			loginChannel:htmlDecodeJQ("7000000"),
			reqClientType:htmlDecodeJQ("7"),
			adUrl:htmlDecodeJQ(""),
			lang:htmlDecodeJQ("zh-cn"),
			inviterUserID:htmlDecodeJQ(""),
			inviter:htmlDecodeJQ(""),
			userID:htmlDecodeJQ(""),
			emailPng:htmlDecodeJQ("https:&amp;#x2F;&amp;#x2F;hwid1.vmall.com&amp;#x2F;CAS&amp;#x2F;up&amp;#x2F;rss_20&amp;#x2F;css&amp;#x2F;portal&amp;#x2F;register_rss&amp;#x2F;red&amp;#x2F;images&amp;#x2F;email-imp.png?UP_CAS_2.6.2.202"),
			cookiePrivacyPolicyUrl:htmlDecodeJQ("https:&#x2F;&#x2F;hwid1.vmall.com&#x2F;CAS&#x2F;portal&#x2F;agreements&#x2F;cookiePrivacyPolicy&#x2F;zh-cn_cookiePrivacyPolicy.html"),
			bgImgUrl:htmlDecodeJQ("https:&#x2F;&#x2F;hwid1.vmall.com&#x2F;CAS&#x2F;up&#x2F;rss_20&#x2F;ads&#x2F;login_default_bg.png"),
			currentSiteID:htmlDecodeJQ("1"),
			quickAuth:htmlDecodeJQ("false"),
			newsign:htmlDecodeJQ(""),
			cookiePrivateAgreement:htmlDecodeJQ("false"),
			globalCrossPrivacyPolicy:htmlDecodeJQ("https:&#x2F;&#x2F;hwid1.vmall.com&#x2F;CAS&#x2F;portal&#x2F;agreements&#x2F;userPrivacyPolicy&#x2F;zh-cn_userPrivacyPolicy.html?version=europe"),
			queryString:htmlDecodeJQ("?reqClientType=7&amp;loginChannel=7000000&amp;countryCode=cn&amp;loginUrl=https&#37;3A&#37;2F&#37;2Fhwid1.vmall.com&#37;2FCAS&#37;2Fportal&#37;2Flogin.html&amp;service=https&#37;3A&#37;2F&#37;2Fhwid1.vmall.com&#37;2FCAS&#37;2Fportal&#37;2FuserCenter&#37;2Findex.html&amp;lang=zh-cn&amp;themeName=red"),
			requestURIQuery:htmlDecodeJQ("&#x2F;CAS&#x2F;portal&#x2F;login.html?reqClientType=7&amp;loginChannel=7000000&amp;countryCode=cn&amp;loginUrl=https&#37;3A&#37;2F&#37;2Fhwid1.vmall.com&#37;2FCAS&#37;2Fportal&#37;2Flogin.html&amp;service=https&#37;3A&#37;2F&#37;2Fhwid1.vmall.com&#37;2FCAS&#37;2Fportal&#37;2FuserCenter&#37;2Findex.html&amp;lang=zh-cn&amp;themeName=red"),
			accountSiteID:htmlDecodeJQ("1"),
			successImgPath:htmlDecodeJQ("https:&amp;#x2F;&amp;#x2F;hwid1.vmall.com&amp;#x2F;CAS&amp;#x2F;up&amp;#x2F;rss_20&amp;#x2F;css&amp;#x2F;portal&amp;#x2F;userCenter_rss&amp;#x2F;images&amp;#x2F;suc.png?UP_CAS_2.6.2.202"),
			representationLink:htmlDecodeJQ("https:&#x2F;&#x2F;hwid1.vmall.com&#x2F;CAS&#x2F;portal&#x2F;appealSelf&#x2F;applyChangeAccount.html?reqClientType=7&amp;loginChannel=7000000&amp;countryCode=cn&amp;loginUrl=https&#37;3A&#37;2F&#37;2Fhwid1.vmall.com&#37;2FCAS&#37;2Fportal&#37;2Flogin.html&amp;service=https&#37;3A&#37;2F&#37;2Fhwid1.vmall.com&#37;2FCAS&#37;2Fportal&#37;2FuserCenter&#37;2Findex.html&amp;lang=zh-cn&amp;themeName=red"),
			isOpenApealSelf:htmlDecodeJQ("true"),
			hasExtInfo:htmlDecodeJQ(""),
			extInfo:htmlDecodeJQ(""),
			rememberAccount:htmlDecodeJQ( ""),
			loginSMSNum:htmlDecodeJQ( ""),
			eyeoff:htmlDecodeJQ("https://hwid1.vmall.com/CAS/up/rss_20/css/portal/vmall_rss/images/eyeoff.png?UP_CAS_2.6.2.202"),
			eyeon:htmlDecodeJQ( "https://hwid1.vmall.com/CAS/up/rss_20/css/portal/vmall_rss/images/eyeon.png?UP_CAS_2.6.2.202"),
			formatNo:htmlDecodeJQ("https:&#x2F;&#x2F;hwid1.vmall.com&#x2F;CAS&#x2F;up&#x2F;rss_20&#x2F;css&#x2F;portal&#x2F;vmall_rss&#x2F;images&#x2F;format_no.png?UP_CAS_2.6.2.202"),
			isOpenLocalCacheRisk:htmlDecodeJQ("false"),
			displayCaptchaType:htmlDecodeJQ("1"),
			formatOk:htmlDecodeJQ("https:&#x2F;&#x2F;hwid1.vmall.com&#x2F;CAS&#x2F;up&#x2F;rss_20&#x2F;css&#x2F;portal&#x2F;vmall_rss&#x2F;images&#x2F;format_ok.png?UP_CAS_2.6.2.202"),
			maxTimeDev:htmlDecodeJQ("1"),
			maxCountDev:htmlDecodeJQ("4"),
			recoverTimeDev:htmlDecodeJQ("30"),
			maxTimePhone:htmlDecodeJQ("1"),
			maxCountPhone:htmlDecodeJQ("4"),
			recoverTimePhone:htmlDecodeJQ("30"),
			maxTimeEmail:htmlDecodeJQ("1"),
			maxCountEmail:htmlDecodeJQ("4"),
			normalLoginTooManyTimes:htmlDecodeJQ(false),
			lastInputAccount:htmlDecodeJQ(""),
			isCurSiteOpenDeviceFinger:htmlDecodeJQ("true"),
			curInputAccount:htmlDecodeJQ(""),
			curAccountSiteID:htmlDecodeJQ(""),
			recoverTimeEmail:htmlDecodeJQ("30"),
			isOpenDimensionalCode:htmlDecodeJQ("true"),
			getqrURL:htmlDecodeJQ("https:&#x2F;&#x2F;hwid1.vmall.com&#x2F;DimensionalCode&#x2F;getqrWeb?appID=com.huawei.hwidweb&amp;loginChannel=7000700&amp;reqClientType=700&amp;confirmFlag=1&amp;version=13000"),
			asyncURL:htmlDecodeJQ("https:&#x2F;&#x2F;hwid1.vmall.com&#x2F;DimensionalCode&#x2F;async?version=13000"),
			agree_DFVersion_cliagree:htmlDecodeJQ("点击同意，即表示您同意上述内容及&lt;a href=&quot;https:&#x2F;&#x2F;hwid1.vmall.com&#x2F;CAS&#x2F;portal&#x2F;agreements&#x2F;userAgreement&#x2F;zh-cn_userAgreement.html?version=china&quot; target=&quot;_blank&quot; class=&quot;loginAndRegLink&quot;&gt;华为帐号用户协议&lt;&#x2F;a&gt;并确认您已阅读&lt;a href=&quot;https:&#x2F;&#x2F;hwid1.vmall.com&#x2F;CAS&#x2F;portal&#x2F;agreements&#x2F;userPrivacyPolicy&#x2F;zh-cn_userPrivacyPolicy.html&quot; target=&quot;_blank&quot; class=&quot;loginAndRegLink&quot;&gt;华为隐私政策&lt;&#x2F;a&gt;。"),
			getqrContent:htmlDecodeJQ("https:&#x2F;&#x2F;hwid1.vmall.com&#x2F;DimensionalCode&#x2F;getqrInfo?appID=com.huawei.hwidweb&amp;loginChannel=7000700&amp;reqClientType=700&amp;confirmFlag=1&amp;version=13000"),
			createQrCodeType:htmlDecodeJQ("0"),
			postRemoteLogin:htmlDecodeJQ("https:&#x2F;&#x2F;hwid1.vmall.com&#x2F;CAS&#x2F;stRemoteLogin"),
			isIfmLogin:htmlDecodeJQ(false),
			resetPwdLink:htmlDecodeJQ("?reqClientType=7&loginChannel=7000000&countryCode=cn&loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&service=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2FuserCenter%2Findex.html&lang=zh-cn&themeName=red"),
			isOpenSMSLogin:htmlDecodeJQ("false"),
			randomCodeImgLoading:htmlDecodeJQ("https:&#x2F;&#x2F;hwid1.vmall.com&#x2F;CAS&#x2F;up&#x2F;rss_20&#x2F;css&#x2F;mobile&#x2F;standard_rss&#x2F;images&#x2F;loading.gif?UP_CAS_2.6.2.202"),
			isOpenImgCode:htmlDecodeJQ("false"),
			agree_DFVersion_Content1_info1:htmlDecodeJQ("为防止欺诈行为，华为需采集浏览器信息 &#40;类型、时区、插件、语言、字体、canvas图片渲染哈希值、webgl图片渲染哈希值&#41;；登录异常时，华为需采集图片验证码页面的鼠标或屏幕滑动信息，以验证身份。&lt;div class=&quot;DFVersion-item-EMUI6&quot;&gt;华为收集、使用信息的详情请见&lt;a href=&quot;https:&#x2F;&#x2F;hwid1.vmall.com&#x2F;CAS&#x2F;portal&#x2F;agreements&#x2F;accPrivacyStatement&#x2F;zh-cn_accPrivacyStatement.html?version=china&quot; target=&quot;_blank&quot; class=&quot;DFVersion-link-EMUI6&quot;&gt;关于华为帐号与隐私的声明&lt;&#x2F;a&gt;。&lt;&#x2F;div&gt;"),
			agree_DFVersion_Content4:htmlDecodeJQ("点击“同意”，即表示您同意上述内容及&lt;a href=&quot;https:&#x2F;&#x2F;hwid1.vmall.com&#x2F;CAS&#x2F;portal&#x2F;agreements&#x2F;userAgreement&#x2F;zh-cn_userAgreement.html?version=china&quot; target=&quot;_blank&quot; class=&quot;DFVersion-link-EMUI6&quot;&gt;华为帐号用户协议&lt;&#x2F;a&gt;。")
	};
	
	
</script>
<script src="/home/js/loginAuthDialog.js"></script>
<script src="/home/js/login.js"></script>
<script src="/home/js/swfobject.js"></script>
<script src="/home/js/acctguard-secure.min.js"></script>



</body></html>