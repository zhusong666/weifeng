(function(e,t,i){var o,n,a,s;var r=0,c=0,l=0,d=0,u=0,f=0;var p=0,v,m;var h=localInfo.maxTimeDev*60*1e3;var _=localInfo.maxCountDev;var y=localInfo.recoverTimeDev*60*1e3;var g=localInfo.maxTimePhone*60*1e3;var C=localInfo.maxCountPhone;var w=localInfo.recoverTimePhone*60*1e3;var I=localInfo.maxTimeEmail*60*1e3;var b=localInfo.maxCountEmail;var A=localInfo.recoverTimeEmail*60*1e3;var T=false,D=false;secEmailDisabled=false;var x={};var E=function(t){var i=t.accountInfoArr||[];var o="";var n=t.queryCond;var a=t.desc;var s=t.operType;var r=t.opType;var c=t.isLogin;var l=t.checkOperType;var d=t.btnLeftFn;var u=t.siteID;if(i.length==0){getAccountInfo(n,3,function(e,t){i=e;localInfo.userID=t},localInfo.accountType)}o+='<div id="authenDialog"><p class="inptips2">'+a+"</p>";o+='<div class="margin10-EMUI5"><div id="accountDiv" class="fixAccountDrt"></div><input type="hidden" id="selectAccount" value="" /><input type="hidden" id="selectType" value="" /></div>';var f=[];if(i){e.each(i,function(e,t){var i={value:JSON.stringify({type:t.accountType,account:t.userAccount}),label:getExpressPhone(t.userAccount)};f.push(i)})}o+='<div class="dinput authCodeDivCom" id="oldAuthCode-box"><input type="text" id="oldAuthCode" /><div id="getAuthCodeBtn" intervaltime="60" class="dbtn2 drtFix sbtn r"><span>'+rss.sendAuthCode+'</span><div id="authCodeError"></div></div></div><div id="oldAuthCode_error_info" class="error-tips-EMUI5"></div></div>';o+=getAppealChangesLinkDiv(f);var p=rss.account_protect_tip;var v={title:p,btnRight:{text:t.rBtnTxt,fn:function(){var i=this;if(!validator(e("#authenDialog"),true)){return false}var o={opType:"1"};t.callbackFn(o,function(){i.hide()})}},btnLeft:{text:t.lBtnTxt,fn:function(){if(typeof d=="function"){d()}}},html:o,dialogStyle:localInfo.msgDialogStyle,beforeAction:function(){if(localInfo.beforeAction){if(typeof localInfo.beforeAction=="function"){localInfo.beforeAction()}}e("#accountDiv").DropListEMUI5({items:f,onChange:function(t,i){e("#oldUserAccount").val(i);if(i.indexOf("@")>=0){e(".lb_opacity_Class").find("div").html(rss.emailAuthCode)}else{e(".lb_opacity_Class").find("div").html(rss.smsAuthCode)}}});var t=this;t.disabled();e("#oldAuthCode").on("keyup change paste",function(){setTimeout(function(){if(e("#oldAuthCode").val().trim()!=""){t.enable();return false}else{t.disabled()}},0)});e("#getAuthCodeBtn").on("click",function(t){if(e("#getAuthCodeBtn").attr("disabled")){return false}if(!validator(e("#accountDiv"),true)){return false}var i=e.parseJSON(e("#accountDiv input").val());var o={phoneOrEmail:i.account,authCodebtn:e("#getAuthCodeBtn")};if(localInfo.userID){o.userID=localInfo.userID}o.reqType=6;o.account=n;o.siteID=u;o.operType=2;o.accountType=getAccountType(n);o.operType=s;o.isLogin=c;o.errorStyle="EMUI5";o.errorTip=e("#oldAuthCode_error_info");o.errorDiv="";o.failCustomize=true;getAuthCode(o)})}};localInfo.authDialog=e("<div>").Dialog(v).Dialog("show");e(".global_dialog_confirm_content").css("padding-bottom","0px");var m=e("#accountDiv span").text();if(m.indexOf("@")>=0){e.label(e("#oldAuthCode"),rss.emailAuthCode)}else{e.label(e("#oldAuthCode"),rss.smsAuthCode)}validateAuthCode(e("#oldAuthCode"),e("#oldAuthCode-box"),e("#oldAuthCode_error_info"))};var P=function(t){var i=t.accountInfoArr||[];var o="";var n=t.queryCond;var a=t.optType;var s=t.desc;var r=t.operType;var c=t.isLogin;var l=t.checkOperType;var d=t.siteID;var u=t.opType;var d=t.siteID;var f=t.btnLeftFn;if(i.length==0){getAccountInfo(n,3,function(e,t){i=e;localInfo.userID=t},localInfo.accountType)}o+='<div id="authenDialog">';if(t.isRemoteLogin){o+='<div style="line-height:1.3;">'+s+"</div>"}else{o+='<div style="color:#ff3320;line-height:1.3;">'+s+"</div>"}o+='<div class="margin10-EMUI5"><div id="accountDiv" class="fixAccountDrt"></div><input type="hidden" id="selectAccount" value="" /><input type="hidden" id="selectType" value="" /></div>';var p=[];if(i){e.each(i,function(e,t){var i={value:JSON.stringify({type:t.accountType,account:t.userAccount}),label:getExpressPhone(t.userAccount)};p.push(i)})}o+='<div class="dinput authCodeDivCom" id="oldAuthCode-box"><input type="text" id="oldAuthCode"/><div id="getAuthCodeBtn" intervaltime="60" class="dbtn2 sbtn drtFix r"><span>'+rss.sendAuthCode+'</span><div id="authCodeError"></div></div></div><div id="oldAuthCode_error_info" class="error-tips-EMUI5"></div></div>';o+='<div style="width:100%;text-align:center;">'+getAppealChangesLinkDiv(p)+"</div>";var v=rss.enter_authcode_title;if(t.isRemoteLogin){v=rss_new.vertify_identity}var m={title:v,btnRight:{text:rss.next_step,fn:function(){var i=this;if(!validator(e("#authenDialog"),true)){return false}var o=e("#oldAuthCode").val();var n=e.parseJSON(e("#accountDiv input").val());var a=n.account;var s=n.type;if(u=="6"){S(d,s,"7","3",a,o,e("#oldAuthCode_error_info"),function(){var n={userAccount:convPlusOfPhoneAccount(e("#login_userName").val().trim()),userAccountCode:a,accountTypeCode:s,authCode:o,callbackFn:t.callbackFn,opType:t.opType,verifyID:"1",verifyself:i};U(n)})}else if(u=="8"){var r={authCode:o,opType:"8"};r.authAccountType=s;r.authAccount=a;t.callbackFn(r,function(){i.hide()})}}},btnLeft:{text:rss.cancel,fn:function(){if(typeof f=="function"){f()}}},html:o,dialogStyle:localInfo.msgDialogStyle,beforeAction:function(){if(localInfo.beforeAction){if(typeof localInfo.beforeAction=="function"){localInfo.beforeAction()}}e("#accountDiv").DropListEMUI5({items:p,onChange:function(t,i){e("#oldUserAccount").val(i);if(i.indexOf("@")>=0){e(".lb_opacity_Class").find("div").html(rss.emailAuthCode)}else{e(".lb_opacity_Class").find("div").html(rss.smsAuthCode)}}});var t=this;t.disabled();e("#oldAuthCode").on("keyup change paste",function(){setTimeout(function(){if(e("#oldAuthCode").val().trim()!=""){t.enable();return false}else{t.disabled()}},0)});e("#getAuthCodeBtn").on("click",function(t){if(e("#getAuthCodeBtn").attr("disabled")){return false}if(!validator(e("#accountDiv"),true)){return false}var i=e.parseJSON(e("#accountDiv input").val());var o={phoneOrEmail:i.account,authCodebtn:e("#getAuthCodeBtn")};if(localInfo.userID){o.userID=localInfo.userID}o.account=n;o.siteID=d;o.type=a;o.reqType=3;o.accountType=i.type;o.operType=r;o.isLogin=c;o.errorStyle="EMUI5";o.errorTip=e("#oldAuthCode_error_info");o.errorDiv="";o.failCustomize=true;getAuthCode(o)})}};localInfo.authDialog=e("<div>").Dialog(m).Dialog("show");var h=e("#accountDiv span").text();if(h.indexOf("@")>=0){e.label(e("#oldAuthCode"),rss.emailAuthCode)}else{e.label(e("#oldAuthCode"),rss.smsAuthCode)}validateAuthCode(e("#oldAuthCode"),e("#oldAuthCode-box"),e("#oldAuthCode_error_info"))};function S(t,i,o,n,a,s,r,c){var l={accountType:i,userAccount:a,authCode:s,authOprType:n,operType:o,siteID:t,reqClientType:7};var d={"default":rss_new.common_wrong_authcode};casAjaxObj.chkAuthCode(l,u,f,d);function u(){c()}function f(t){showEMUIError(e("#oldAuthCode-box"),r,t)}}function U(t){var i=t.opType;e("<div/>").Dialog({title:rss.set_newpassword,btnRight:{text:rss.next_step,fn:function(){var o=this;if(!validator(e("#newPassword"),true)||!validator(e("#confirmPassword"),true)){return false}if(t.verifyID){var n=t.verifyself;n.hide()}var a=e("#newPassword").val();var s={newPassword:a,opType:t.opType};if(i=="6"){s.authCode=t.authCode;s.authAccountType=t.accountTypeCode;s.authAccount=t.userAccountCode}t.callbackFn(s,function(){o.hide()})}},btnLeft:{text:rss.cancel_btn,fn:function(){}},beforeAction:function(){e("#pwdLength span").html(e("#pwdLength span").html().format(8,32));e("#pwdNumber span").html(e("#pwdNumber span").html().format(1));e.label.defaults.ifRight="10px";e.label(e("#newPassword"),rss.newPwd);e.label(e("#confirmPassword"),rss.confirmNewPwd);o.call(this);e("#pwdPic").click(function(){var t=document.getElementById("newPassword").type;if(t=="password"){document.getElementById("newPassword").type="text";document.getElementById("confirmPassword").type="text";e("#pwdPic").attr("src",localInfo.eyeon)}else{document.getElementById("newPassword").type="password";document.getElementById("confirmPassword").type="password";e("#pwdPic").attr("src",localInfo.eyeoff)}});o.call(this);e("#newPassword").keyup(function(){onPwdKeyUp4EMUI(this,e("#new_pwd_error_info"),e("#passwordDivTip"),"","input-error-EMUI5",true,"",true)})},dialogStyle:localInfo.msgDialogStyle,html:'<p id="authenDialog" class="resetPwd-subtitle">'+rss.risk_control_pwd+"</p>"+'<div class="dinput-UI5" id="passwordDivTip"><div class="ico-div"><img class="eyeoff" id="pwdPic" src="'+localInfo.eyeoff+'"></div>'+'<div class="input-div"><input oncut="return false;" oncopy="return false" class="input-scroll" maxlength="32" id="newPassword" type="password"></div>'+'</div><div id="new_pwd_error_info" class="dinput-UI5-tip error-tips-EMUI5"></div>'+'<div class="dinput-UI5 confirmPwd" id="confirmPasswordDiv"><div class="input-div">'+'<input oncut="return false;" oncopy="return false" class="input-scroll" id="confirmPassword" maxlength="32" type="password"></div></div><div id="confirm_pwd_error_info" class="dinput-UI5-tip error-tips-EMUI5"></div>'+'<div class="line-EMUI5 margin20-EMUI5">'+'<div class="normal-tips-EMUI5 pwd-format-des-head">'+rss.reset_pwd_format_title+" </div>"+'<div id="pwdLength" class="gray-tips-EMUI5 "><img class="pwd-format l" src="'+localInfo.formatNo+'">'+"<span>"+rss.reducePwd_format_1+"</span></div>"+'<div id="pwdChar" class="gray-tips-EMUI5 "> <img class="pwd-format l" src="'+localInfo.formatNo+'">'+"<span>"+rss.reducePwd_format_2+"</span></div>"+'<div id="pwdNumber" class="gray-tips-EMUI5 "> <img class="pwd-format l" src="'+localInfo.formatNo+'"">'+"<span>"+rss.reducePwd_format_3+'</span></div></div><div class="line8-EMUI5">'+'<div class="normal-tips-EMUI5">'+rss.pwd_strength+'&nbsp;<span id="pwdComplexFlag"></span></div></div>'+'<div class="line8-EMUI5"><div class="gray-tips-EMUI5"><div class="pwd-complex" style="margin-bottom:8px;">'+'<div id="pwdStong"></div></div></div>'+'<div style="margin-bottom:-8px;padding-left:8px">'+rss.uc_change_pwd_safe_tip+"</div></div>"}).Dialog("show");function o(){var t=e("#newPassword"),i=e("#confirmPassword"),o=this;this.disabled();validator.bind(t,{type:["require","strLength","hasSpace","pwdComplexity","errorInput"],trim:false,validOnChange:true,compareTo:i,min:8,max:32,msg_ct:"#new_pwd_error_info",errorFunction:function(t,i){e("#passwordDivTip").addClass("input-error-EMUI5");switch(i.type){case"require":e("#new_pwd_error_info").html(rss.common_js_inputpwd);break;case"strLength":e("#new_pwd_error_info").html(rss.reducePwd_format_2);break;case"hasSpace":e("#new_pwd_error_info").html(rss.reducePwd_format_1);break;case"pwdComplexity":e("#new_pwd_error_info").html(rss.reducePwd_format_3);break;case"errorInput":e("#new_pwd_error_info").html(rss.reducePwd_inputError_desc);break}},successFunction:function(e,t){},reInputFunction:function(){e("#new_pwd_error_info").html("");e("#passwordDivTip").removeClass("input-error-EMUI5")}});validator.bind(i,{type:["require","eq"],trim:false,validOnChange:true,compareTo:t,msg_ct:"#confirm_pwd_error_info",errorFunction:function(t,i){e("#confirmPasswordDiv").addClass("input-error-EMUI5");switch(i.type){case"require":e("#confirm_pwd_error_info").html(rss.common_js_confirmpwd);break;case"eq":e("#confirm_pwd_error_info").html(rss.common_js_pwdnotsame)}},successFunction:function(e,t){},reInputFunction:function(){e("#confirm_pwd_error_info").html("");e("#confirmPasswordDiv").removeClass("input-error-EMUI5")}});t.on("blur",function(){}).on("keyup",function(e){a()});i.on("blur",function(){}).on("keyup",function(e){a()});function n(){e("#new_pwd_error_info").empty();e("#confirm_pwd_error_info").empty();validator(e(this),true);a()}function a(){if(t.val()&&i.val()){o.enable()}else{o.disabled()}}registerPwdformatValidator()}}var k=function(t){var i="<div>"+rss.new_cross_login_tip+"</div>";i+="<div id='crossSite_errDiv' style='margin-top:10px;font-size:12px;color:#ff3320'></div>";e("<div></div>").DialogSimple({text:i,btnText:rss.common_go_on,dialogStyle:localInfo.msgDialogStyle,btnFn:function(){var i=this;if(e("#login_userName").is(":hidden")){var o={"mobilePhone":t.mobilePhone,"smsAuthCode":t.smsAuthCode,"authCode":t.authCode}}else{var o={"userAccount":t.userAccount,"password":t.password}}M(o,t.authcode,t.callbackFn,this);this.hide()},btnLeftText:rss.uc_common_cancel,btnLeftFn:function(){},html:i}).show()};function M(t,o,n,a){if(e("#login_userName").is(":hidden")){var s={"userAccount":t.mobilePhone,"smsAuthCode":t.smsAuthCode,"authCode":t.authCode,"operType":"11","reqClientType":localInfo.reqClientType,"loginChannel":localInfo.loginChannel,"lang":localInfo.lang,"service":localInfo.service,"quickAuth":localInfo.quickAuth}}else{var s={"userAccount":t.userAccount,"password":t.password,"operType":1,"reqClientType":localInfo.reqClientType}}ajaxHandler("agreeCrossSiteAgrs",s,function(t){var s=t.isSuccess;var r=t.errorCode;if(s=="1"){n({authcode:o});if(a!=i){a.hide()}}else{if(r=="70002003"){e("#crossSite_errDiv").html(rss.login_wrong)}else if(r=="70002057"){e("#crossSite_errDiv").html(rss.error_70002057_2)}else if(r=="70002058"){e("#crossSite_errDiv").html(rss.error_70002058)}else{e("#crossSite_errDiv").html(rss.overload)}}},function(){},false,"json")}var L=function(i){o=i.password;n=i.userAccount;a=getAccountType(n);var r=i.operType;var c=1;var l,d;var u="";var f=i.btnLeftFn;s=i.pageType;var p=0;e.each(i.authCodeSentList,function(e,t){if(t.name){t.name=htmlencode(t.name)}if(t.sent==1){if(t.accountType=="6"||t.type=="mobile"){c=2;l=6;d=t.name;u=rss.sec_code_sent_phone_email.format(d)}else if(t.accountType=="5"||t.type=="email"){c=2;l=5;d=t.name;u=rss.sec_code_sent_phone_email.format(d)}else{p++;c=1;l=-1;if(p==1){u=rss.security_code_sent_xdevice.format(t.name)}else{u=rss.security_code_sent_other_device}}}});var v="<div id='sendCodeWayTip'>"+u+"</div>";v+='<div style="display:table;height:40px;width:100%;border-radius:20px" id="authCodeDiv" class="authCodeDivCom">';v+='<div id="num1" class="securityCodeDiv securityCodeHead"><input type="tel" maxlength="2" class="securityCodeInput" data-index="1"/></div>';v+='<div id="num2" class="securityCodeDiv securityCode"><input type="tel" maxlength="2" class="securityCodeInput" data-index="2"/></div>';v+='<div id="num3" class="securityCodeDiv securityCode"><input type="tel" maxlength="2" class="securityCodeInput" data-index="3"/></div>';v+='<div id="num4" class="securityCodeDiv securityCode"><input type="tel" maxlength="2" class="securityCodeInput" data-index="4"/></div>';v+='<div id="num5" class="securityCodeDiv securityCode"><input type="tel" maxlength="2" class="securityCodeInput" data-index="5"/></div>';v+='<div id="num6" class="securityCodeDiv securityCodeTail"><input type="tel" maxlength="2" class="securityCodeInput" data-index="6"/></div>';v+="</div>";v+='<div id="msg_error_secAuth" class="error-tips-EMUI5"></div>';v+='<div id="notRevice" style="width:100%;text-align: center;color: #007dff;margin: 20px auto;"><a class="a-EMUI5" style="font-size:14px">'+rss.no_receive_security_code+"</a></div>";localInfo.authDialog=e("<div/>").Dialog({title:rss.account_protect_tip,btnLeft:{text:rss.cancel,fn:function(){if(typeof f=="function"){f()}}},btnRight:{text:rss.iKnowBtn,fn:function(){var e=this;var t=_();if(!t)return;var o={authCode:t,opType:4};if(c==2){o.accountType=l;o.account=d}else if(c==1){o.accountType=-1;o.account=n}i.callbackFn(o,function(){e.hide()})}},html:v,dialogStyle:localInfo.msgDialogStyle,beforeAction:function(){var o=this;o.disabled();setTimeout(function(){e("#num1 input").focus()},0);e(".securityCodeInput").bind("keypress",function(e){e=e||t.event;var i=e.keyCode||e.which});e(".securityCodeInput").bind("keyup",function(i){i=i||t.event;var n=i.keyCode||i.which;var a=this;if(this.value==""){h(e(this).data("index"));return}if(this.value.length==2){var s="";if(/^\d$/.test(this.value[1])){s=this.value[1]}else{s=this.value[0]}this.value=s}if(/^\d$/.test(this.value)){m(e(a).data("index"))}else{this.value=""}e("#authCodeDiv").removeClass("input-error-EMUI5");e("#msg_error_secAuth").html("");if(_()){o.enable()}else{o.disabled()}});e(".securityCodeDiv").click(function(){e("input",e(this)).focus()});e("#notRevice a").click(function(){o.hide();q(n,i.authCodeSentList,function(t){o.show();if(!t){if(e("#sendCodeWayTip").html()&&e("#sendCodeWayTip").html()!=""){e("#sendCodeWayTip").css("margin-bottom","10px")}return}if(t.type==5||t.type==6){e("#sendCodeWayTip").html(rss.sec_code_sent_phone_email.format(t.account));c=2;l=t.type;d=t.account;if(rss.sec_code_sent_phone_email.format(t.account)&&rss.sec_code_sent_phone_email.format(t.account)!=""){e("#sendCodeWayTip").css("margin-bottom","10px")}}else if(t.type==7){e("#sendCodeWayTip").html(rss.security_code_sent_xdevice.format(t.account));if(rss.security_code_sent_xdevice.format(t.account)&&rss.security_code_sent_xdevice.format(t.account)!=""){e("#sendCodeWayTip").css("margin-bottom","10px")}}else if(t.type==8){e("#sendCodeWayTip").html(rss.security_code_sent_other_device);if(rss.security_code_sent_other_device&&rss.security_code_sent_other_device!=""){e("#sendCodeWayTip").css("margin-bottom","10px")}}},r)})}}).Dialog("show");e(".global_dialog_confirm_content").css("padding-bottom","0px");function m(t){t=t*1;if(t>=6){}else t++;e("#num"+t+" input").focus()}function h(t){t=t*1;if(t>1)t--;e("#num"+t+" input").focus()}function _(){var t="";e(".securityCodeDiv").each(function(i,o){t+=e("input",e(this)).val()});if(t.length!=6||isNaN(t*1)){t=false}return t}if(u&&u!=""){e("#sendCodeWayTip").css("margin-bottom","10px")}};function q(i,x,E,P){var S=getAccountType(i);var U=rss.send_seccode_to_sec;var k="";var M='<div class="uc-line" style="padding:0"><div></div></div>';var L="";var q,F,B="",R="";var j={title:rss.no_receive_security_code,btnRight:{text:rss.cancel,fn:function(){this.hide();E()}},cancelFn:function(){this.hide();E()},dialogStyle:localInfo.msgDialogStyle,beforeAction:function(){var i=this;i.$dialog.find(".global_dialog_confirm_content,.global_dialog_alert_content").css("padding-top","0px");if(T){e("#resend").addClass("dialog-line-disabled")}if(D){e("#secPhoneItem").addClass("dialog-line-disabled")}if(secEmailDisabled){e("#secEmailItem").addClass("dialog-line-disabled")}if(q&&F){}else if(F){e("#canNotUseSecAccount").find("a").text(rss.resetPwd_inputSecAuthCode_unableUsePhone)}else if(q){e("#canNotUseSecAccount").find("a").text(rss.resetPwd_inputSecAuthCode_unableUseEmail)}var i=this;var o=e("#howtodo").html();e("#howtodo").parent().append("<a class='a-EMUI5 howtodo' >"+o+"</a>");e("#howtodo").remove();e(".howtodo").click(function(){t.open("/"+webAppName+"/portal/faq/"+localInfo.lang+"_secCodeAndSecondLoginFaq.html")});e("#resend").click(function(){if(e(this).hasClass("dialog-line-disabled")){return}clearTimeout(p);var t=(new Date).getTime();if(t-d>h){d=t;r=1}else{r++}if(r>=_){e("#resend").addClass("dialog-line-disabled");T=true;p=setTimeout(function(){d=0;r=0;e("#resend").removeClass("dialog-line-disabled");T=false},y)}if(e(this).attr("type")=="-1"){J(i)}else if(e(this).attr("type")=="5"){O(q,5,i,function(){i.hide();E({type:5,account:q})},P)}else if(e(this).attr("type")=="6"){O(F,6,i,function(e){i.hide();E({type:6,account:F})},P)}});e("#secPhoneItem").click(function(){if(e(this).hasClass("dialog-line-disabled")){return}clearTimeout(v);var t=(new Date).getTime();if(t-f>g){f=t;l=1}else{l++}if(l>=C){e("#secPhoneItem").addClass("dialog-line-disabled");D=true;v=setTimeout(function(){u=0;c=0;e("#secPhoneItem").removeClass("dialog-line-disabled");D=false},w)}O(F,6,i,function(e){i.hide();E({type:6,account:F})},P)});e("#secEmailItem").click(function(){if(e(this).hasClass("dialog-line-disabled")){return}clearTimeout(m);var t=(new Date).getTime();if(t-u>I){u=t;c=1}else{c++}if(c>=b){e("#secEmailItem").addClass("dialog-line-disabled");secEmailDisabled=true;m=setTimeout(function(){u=0;c=0;e("#secEmailItem").removeClass("dialog-line-disabled");secEmailDisabled=false},A)}O(q,5,i,function(){i.hide();E({type:5,account:q})},P)});addItemActive(e(".dialog-line"),"dialog-line-active","dialog-line-disabled");addItemActive(e(".a-EMUI5"),"a-EMUI5-active")}};e.each(x,function(e,t){if(t.sent==1){if(t.accountType=="6"||t.type=="mobile"){F=t.name;R='<div class="dialog-line" id="secPhoneItem">'+'<span class="item-name item-left"><a class="a-EMUI5">'+U.format(F)+"</a></span>"+'<div class="item-right r"><span class="info-value item-forward" ></span></div>'+"</div>"+M}else if(t.accountType=="5"||t.type=="email"){q=t.name;B='<div class="dialog-line" id="secEmailItem">'+'<span class="item-name item-left"><a class="a-EMUI5">'+U.format(q)+"</a></span>"+'<div class="item-right r"><span class="info-value item-forward" ></span></div>'+"</div>"+M}else{L="<div class='dialog-line' id='resend' type='-1'> <a class='a-EMUI5'>"+rss.send_to_device+"</a></div>"+M}}else{if(t.accountType=="6"||t.type=="mobile"){F=t.name;R='<div class="dialog-line" id="secPhoneItem">'+'<span class="item-name item-left"><a class="a-EMUI5">'+U.format(F)+"</a></span>"+'<div class="item-right r"><span class="info-value item-forward" ></span></div>'+"</div>"+M}else if(t.accountType=="5"||t.type=="email"){q=t.name;B='<div class="dialog-line" id="secEmailItem">'+'<span class="item-name item-left"><a class="a-EMUI5">'+U.format(q)+"</a></span>"+'<div class="item-right r"><span class="info-value item-forward" ></span></div>'+"</div>"+M}}t.value=JSON.stringify({type:t.accountType,account:t.name})});var W="<div class='margin-t16-b16'><div>"+rss.offline_device_problem+"</div><div>"+rss.getcode_onoffline+"</div></div>"+getAppealChangesLinkDiv(x);k=L+R+B+W;j.html=k;e("<div>").Dialog(j).Dialog("show");e(".global_dialog_confirm_content").css("padding-bottom","0px");function J(e){var t={reqClientType:localInfo.reqClientType,languageCode:localInfo.lang,accountType:a,userAccount:n,password:o,operType:s,service:localInfo.service};N(t,function(t){var i={};if(t.length>1){i.type="8"}else if(t.length==1){i.type="7";i.account=t[0].name}e.hide();E(i)},e)}}var F=function(t,i,o){var n="";n+="<div>"+i+"</div>";n+='<div style="width:100%;height:16px;"></div>';e("<div/>").Dialog({title:t,btnLeft:false,btnRight:{text:rss.common_I_know,fn:function(){this.hide();o.show()}},html:n,dialogStyle:localInfo.msgDialogStyle,beforeAction:function(){}}).Dialog("show")};function O(e,t,i,o,a){var s;var r={10000001:rss_new.uc_error_10000001_1,"default":rss_new.uc_error_70002030};if(e.indexOf("@")!=-1){s=1;param={userAccount:n,accountType:getAccountType(n),reqClientType:localInfo.reqClientType,emailReqType:6,operType:a||8,email:e,siteID:localInfo.curAccountSiteID,languageCode:localInfo.lang};r["70001102"]=rss_new.uc_error_70001102_0;r["70001104"]=rss_new.uc_error_70001104_0;casAjaxObj.getEMailAuthCode(param,c,l,r)}else{s=2;param={accountType:getAccountType(n),userAccount:n,reqClientType:localInfo.reqClientType,mobilePhone:e,operType:a||8,smsReqType:6,siteID:localInfo.curAccountSiteID,languageCode:localInfo.lang};r["70001102"]=rss_new.uc_error_70001102_1;r["70001104"]=rss_new.uc_error_70001104_1;casAjaxObj.getSMSAuthCode(param,c,l,r)}function c(){o(t)}function l(e,t){i.hide();var o=t.errorCode;if("70001102"==o||"70001104"==o){F(rss.send_code_too_many_times,e,i)}else{F(rss.hint,e,i)}}}function N(t,i,o){var n="getSecurityCode";e.ajax({url:getWebUrlHttps()+n+"?reflushCode="+Math.random(),type:"POST",data:t,beforeSend:function(e){e.setRequestHeader("Page-Token","undefined"==typeof pageToken?"":pageToken)},success:function(e){if(e.isSuccess=="1"){i(e.authCodeSentList)}else{o.hide();if(e.errorCode=="70001105"){F(rss.send_code_too_many_times,rss.send_code_toomany_tip,o)}else{F(rss.hint,rss.error_10000001_1,o)}}}})}t.crossSiteIDDialog=k;t.updatePWDDialog=U;t.secAuthDialog=E;t.verifyIDDialog=P;t.acctProtectV2Dialog=L;t.sendVerifyCodeError=F;t.noReviceSecCodeDialog=q;t.agreeCrossSiteAgr=M})(jQuery,window);