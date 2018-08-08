<<<<<<< HEAD
@extends('layout.index')
@section('myCss')
<link rel="stylesheet" href="/homes/common/css/index.min.css" />
@show
@section('content')
    <div class="home-hero-container container">
        <div class="home-hero">
            <div class="home-hero-slider">
                <div class="ui-wrapper" style="max-width: 100%;">
                    <div class="ui-viewport" style="width: 100%; overflow: hidden; position: relative; height: 460px;">
                        <div id="J_homeSlider" class="xm-slider" data-stat-title="焦点图轮播" style="width: auto; position: relative;">
                            <div class="slide loaded">
                                <a href="/" >
                                   <img src="http://i3.mifile.cn/a4/3df93b73-1f38-41dc-9c19-c6feb05c9cc1" srcset="http://i3.mifile.cn/a4/20c8359e-6e5e-46e1-a017-b2308d9fbbae 2x"></a>
                            </div>

                            <div class="slide loaded">
                                <a href="/" >
                                    <img src="http://i3.mifile.cn/a4/8ebfdc81-ace7-4bfb-b07a-409e17d6d3cf" srcset="http://i3.mifile.cn/a4/5de4e2bb-54fe-45b1-a399-d5b26f106f82 2x"></a>
                            </div>

                            <div class="slide loaded">
                                <a href="/" >
                                    <img src="http://i3.mifile.cn/a4/eadf8c22-c83d-446b-ac04-b3ce72078388" srcset="http://i3.mifile.cn/a4/b3642c09-0d31-49e0-a011-7934fa395697 2x"></a>
                            </div>

                            <div class="slide loaded">
                                <a href="/" >
                                    <img src="http://i3.mifile.cn/a4/c5688819-4791-4b8f-b13e-2d29718f0ed6" srcset="http://i3.mifile.cn/a4/f779d9d8-caac-4f12-8b9c-3032f3daf8e1 2x"></a>
                            </div>

                            <div class="slide loaded">
                                <a href="/" >
                                    <img src="http://i3.mifile.cn/a4/9ea4cb98-3628-4384-bdb1-21646222a53a" srcset="http://i3.mifile.cn/a4/efaf715f-a1cc-4942-a24d-41f7d73e7ff5 2x"></a>
                            </div>

                        </div>
                    </div>
                    <div class="ui-controls-direction">
                        <a class="ui-prev" href="javascript:void(0);">上一张</a>
                        <a class="ui-next" href="javascript:void(0);">下一张</a>
                    </div>
                    <div class="ui-controls ui-has-pager ui-has-controls-direction">
                        <div class="ui-pager ui-default-pager">
                            <div class="ui-pager-item">
                                <a href="javascript:void(0);" class="ui-pager-link">1</a>
                            </div>
                            <div class="ui-pager-item">
                                <a href="javascript:void(0);" class="ui-pager-link">2</a>
                            </div>
                            <div class="ui-pager-item">
                                <a href="javascript:void(0);" class="ui-pager-link">3</a>
                            </div>
                            <div class="ui-pager-item">
                                <a href="javascript:void(0);" class="ui-pager-link active">4</a>
                            </div>
                            <div class="ui-pager-item">
                                <a href="javascript:void(0);" class="ui-pager-link">5</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-hero-sub row">
                <div class="span4">
                    <ul class="home-channel-list clearfix">
                        <li class="top left">
                            <a href="/" data-stat-aid="AA11221" data-stat-pid="2_44_1_250" target="_blank"> <i class="iconfont">&#xe640;</i>
                                电信专场
                            </a>
                        </li>
                        <li class="top">
                            <a href="/" data-stat-aid="AA10868" data-stat-pid="2_44_2_251" target="_blank">
                                <i class="iconfont">&#xe63e;</i>
                                企业团购
                            </a>
                        </li>
                        <li class="top">
                            <a href="/" data-stat-aid="AA10869" data-stat-pid="2_44_3_252" target="_blank">
                                <i class="iconfont">&#xe63b;</i>
                                官翻产品
                            </a>
                        </li>
                        <li class="left">
                            <a href="/" data-stat-aid="AA11244" data-stat-pid="2_44_4_253" target="_blank">
                                <i class="iconfont"></i>
                                小米移动
                            </a>
                        </li>
                        <li class="">
                            <a href="/" data-stat-aid="AA12084" data-stat-pid="2_44_5_254" target="_blank">
                                <i class="iconfont"></i>
                                以旧换新
                            </a>
                        </li>
                        <li class="">
                            <a href="/" data-stat-aid="AA10871" data-stat-pid="2_44_6_255" target="_blank">
                                <i class="iconfont"></i>
                                话费充值
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="span16" id="J_homePromo" data-stat-title="焦点图下方小图">
                    <ul class="home-promo-list clearfix">
                        <li class="first">
                            <a class="item" href="/" data-stat-aid="AA13327" data-stat-pid="2_16_1_77" target="_blank">
                                <img alt="米兔儿童手表-0720" src="http://i3.mifile.cn/a4/bcd96601-1406-4716-8258-975a90e8a706" srcset="http://i3.mifile.cn/a4/fbde1968-89d6-402b-bcee-7451c7b327e3 2x" />
                            </a>
                        </li>
                        <li>
                            <a class="item" href="/" data-stat-aid="AA13313" data-stat-pid="2_16_2_78" target="_blank">
                                <img alt="小米手机5-0720" src="http://i3.mifile.cn/a4/699590cf-1eec-4cbb-84e7-3db5d965bb0d" srcset="http://i3.mifile.cn/a4/cfd68741-d5d4-43aa-9ca9-f71b85483976 2x" />
                            </a>
                        </li>
                        <li>
                            <a class="item" href="/" data-stat-aid="AA13314" data-stat-pid="2_16_3_79" target="_blank">
                                <img alt="红米Note3-0720" src="http://i3.mifile.cn/a4/dc80da21-68df-4d2a-9b3f-3bbea5b539a4" srcset="http://i3.mifile.cn/a4/11f55f19-4011-4e67-be32-d245745c57ea 2x" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="home-star-goods" id="J_homeStar">
            <div class="xm-plain-box">
                <div class="box-hd">
                    <h2 class="title">小米明星单品</h2>
                    <div class="more">
                        <div class="xm-controls xm-controls-line-small xm-carousel-controls">
                            <a class="control control-prev iconfont" href="javascript: void(0);"></a>
                            <a class="control control-next iconfont" href="javascript: void(0);"></a>
                        </div>
                    </div>
                </div>
                <div class="box-bd">
                    <ul class="xm-carousel-list xm-carousel-col-5-list goods-list rainbow-list clearfix J_carouselList">
                        <li class="rainbow-item">
                            <a class="thumb" href=""  target="_blank">
                                <img src="http://i3.mifile.cn/a4/40d24892-317d-4883-ad63-647f1b9e3cdf" srcset="" alt="" />
                            </a>
                            <h3 class="title">
                                <a href="" target="_blank"></a>
                            </h3>
                            <p class="desc"></p>
                            <p class="price"></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="page-main home-main">
        <div class="container">
            <div id="smart" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox" data-from-stat="false">
                <div class="box-hd">
                    <h2 class="title">智能硬件</h2>
                    <div class="more J_brickNav"></div>
                </div>
                <div class="box-bd J_brickBd">
                <!-- 智能硬件 start-->
                    <div class="row">
                        <div class="span4 span-first">
                            <ul class="brick-promo-list clearfix">
                                <li class="brick-item brick-item-l brick-item-active">
                                    <a href="/" data-stat-aid="AA13253" data-stat-pid="2_18_1_90" target="_blank" data-stat-id="AA13253+2_18_1_90" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13253+2_18_1_90', '//www.mi.com/scooter/', 'pcpid']);">
                                        <img src="http://i3.mifile.cn/a4/124d82cc-cfce-44ab-b711-28b21be81683" width="160" height="160" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="span16">
                            <ul class="brick-list clearfix">
                                <li class="brick-item brick-item-m brick-item-m-2" data-gid="1161200059">
                                    <div class="figure figure-img">
                                        <a href=""></a> 
                                    </div>
                                    <h3 class="title">
                                        <a href=""></a>
                                    </h3>
                                    <p class="desc"></p>
                                    <p class="price">
                                        <span class="num"></span>
                                        元
                                    </p>
                                    <!-- <div class="flag flag-postfree">免邮费</div> -->
                                </li>

                            </ul>
                        </div>
                    </div>
                <!-- 智能硬件 end-->
                </div>
            </div>





            <div id="video" class="home-video-box xm-plain-box J_itemBox J_videoBox is-visible">
                <div class="box-hd">
                    <h2 class="title">视频</h2>
                    <div class="more J_brickNav">

                    </div>
                </div>
                <div class="box-bd J_brickBd">
                    <!-- 视频 start -->
                    <ul class="video-list clearfix">
                        <li class="video-item video-item-first">
                            <div class="figure figure-img">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA12841" data-stat-pid="2_43_1_245" data-video="http://player.youku.com/embed/XMTU2NDM3NjEzMg==" data-video-title="小米Max 绝美外观视频" >
                                    <img src="//i3.mifile.cn/a4/T1v3LgBTxv1RXrhCrK.jpg" width="296" height="180" alt="小米Max 绝美外观视频">
                                    <span class="play"> <i class="iconfont"></i>
                                    </span>
                                </a>
                            </div>
                            <h3 class="title">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA12841" data-stat-pid="2_43_1_245" data-video="http://player.youku.com/embed/XMTU2NDM3NjEzMg==" data-video-title="小米Max 绝美外观视频" >小米Max 绝美外观视频</a>
                            </h3>
                            <p class="desc">6.44" 大屏黄金尺寸，看什么都震撼</p>
                        </li>
                        <li class="video-item">
                            <div class="figure figure-img">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA13049" data-stat-pid="2_43_2_246" data-video="http://player.youku.com/embed/XMTU5ODI2NzMyMA==" data-video-title="手机摄影，防抖绷带（教程）" title="点击播放视频" >
                                    <img src="http://i3.mifile.cn/a4/66cbfd29-8e48-4ed1-aee0-e0e46f4cdc8b" width="296" height="180" alt="手机摄影，防抖绷带（教程）">
                                    <span class="play"> <i class="iconfont"></i>
                                    </span>
                                </a>
                            </div>
                            <h3 class="title">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA13049" data-stat-pid="2_43_2_246" data-video="http://player.youku.com/embed/XMTU5ODI2NzMyMA==" data-video-title="手机摄影，防抖绷带（教程）" data-stat-id="AA13049+2_43_2_246">手机摄影，防抖绷带（教程）</a>
                            </h3>
                            <p class="desc">一分钟，拍照手抖迅速见效</p>
                        </li>
                        <li class="video-item">
                            <div class="figure figure-img">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA12771" data-stat-pid="2_43_3_247" data-video="http://player.youku.com/embed/XMTU2MTQ2Njg3Ng==" data-video-title="笑喷了，沈腾爆笑出演，6集联播" title="点击播放视频">
                                    <img src="//i3.mifile.cn/a4/T1k9CgB7Av1RXrhCrK.jpg" width="296" height="180" alt="笑喷了，沈腾爆笑出演，6集联播">
                                    <span class="play">
                                        <i class="iconfont"></i>
                                    </span>
                                </a>
                            </div>
                            <h3 class="title">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA12771" data-stat-pid="2_43_3_247" data-video="XMTU2MTQ2Njg3Ng==" data-video-title="笑喷了，沈腾爆笑出演，6集联播" >笑喷了，沈腾爆笑出演，6集联播</a>
                            </h3>
                            <p class="desc">小米Max沈腾爆笑预告全集</p>
                        </li>
                        <li class="video-item">
                            <div class="figure figure-img">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA12405" data-stat-pid="2_43_4_249" data-video="XMTUwMTEyMjk0MA==" data-video-title="15秒了解小米5 有多快" title="点击播放视频">
                                    <img src="//i3.mifile.cn/a4/T1ZOZgBmYv1RXrhCrK.jpg" width="296" height="180" alt="15秒了解小米5 有多快">
                                    <span class="play">
                                        <i class="iconfont"></i>
                                    </span>
                                </a>
                            </div>
                            <h3 class="title">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA12405" data-stat-pid="2_43_4_249" data-video="XMTUwMTEyMjk0MA==" data-video-title="15秒了解小米5 有多快">15秒了解小米5 有多快</a>
                            </h3>
                            <p class="desc">华少用超快语速告诉你小米5 到底有多快</p>
                        </li>
                    </ul>
                    <!-- 视频 end -->
                </div>
            </div>
        </div>
    </div>

    <div id="J_modalVideo" class="modal modal-video fade modal-hide">
        <div class="modal-hd">
            <h3 class="title">视频播放</h3>
            <a class="close" data-dismiss="modal" href="javascript: void(0);">
                <i class="iconfont">&#xe602;</i>
            </a>
        </div>
        <div class="modal-bd">
            <div class="loading">
                <div class="loader"></div>
            </div>
        </div>
    </div>
@endsection
=======
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="zh-cn" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
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
<title>华为商城（VMALL.COM）_华为手机、荣耀手机、官网正品保障</title>
<meta name="description" content="华为商城是华为旗下面向全国服务的电子商务平台官网，我们提供正品华为手机(华为P20、华为Mate10、荣耀V10、华为P10、华为nova3e、荣耀9、华为Mate9、荣耀V9等)、平板电脑、配件等全新华为产品，品质保证！" />  
<meta name="keywords" content="华为商城,华为官网,华为手机官网,华为平板电脑,华为笔记本" />
<meta name="mobile-agent" content="format=xhtml;url=http://m.vmall.com/">
<meta property="wb:webmaster" content="f62bd8cc2f7d9778" />
<link rel="shortcut icon" href="https://www.vmall.com/favicon.ico" />
<link href="/home/css/ec.core.base.min.css" rel="stylesheet" type="text/css">
<link href="/home/css/index.min.css" rel="stylesheet" type="text/css">
<script src="/home/js/f7b0d26cae4843e8bda588e3c5f6fca7.js" namespace="ec"></script>
<!--[if lt IE 9]><script src="/home/js/html5shiv.js"></script> <![endif]-->
</head>

<body class="wide">
<style type="text/css">.btn-line-primary i,.category .category-info i,.footer-warrant-area .footer-warrant-logo span,.goods-rolling .grid-btn span,.home-channel-list li.s3 .icon-notice span,.hungBar-feedback i,.hungBar-feedback:after,.hungBar-for-help i,.hungBar-for-help:after,.hungBar-olcs-web i,.hungBar-olcs-web:after,.hungBar-top i,.i-mall-huaban .p-img span,.i-mall-prompt .user-info .user-info-detail a:before,.minicart-pro-item .p-choose i,.minicart-pro-item .p-tags:before,.search-bar .search-bar-form .button,.shortcut .s-dropdown .icon-minicart:before,.slogan li i{background:url(/hoem/images/icon-common.png)}.search-bar .search-bar-form .button{background-position:0 -21px}.minicart-pro-item .p-tags:before{background-position:-28px -99px}.goods-rolling .grid-btn.btn-prev span{background-position:-101px -1px}.goods-rolling .grid-btn.btn-next span{background-position:-112px -1px}.hungBar-top i{background-position:-123px -1px}.hungBar-feedback i{background-position:-151px -1px}.hungBar-for-help i{background-position:-166px -1px}.hungBar-olcs-web i{background-position:-136px -1px}.btn-line-primary i{background-position:-101px -23px}.slogan .s1 i{background-position:0 -151px}.slogan .s2 i{background-position:-94px -151px}.slogan .s3 i{background-position:-141px -151px}.slogan .s4 i{background-position:-47px -151px}.hungBar-for-help:after{background-position:-80px -199px}.hungBar-feedback:after{background-position:-40px -199px}.hungBar-olcs-web:after{background-position:0 -199px}.category .category-info i{background-position:-9px -214px}.category-index .category-list li.active i,.category-index .category-list li.active i{background-position:-2px -214px}.i-mall-huaban .p-img span{width:50px;height:50px;display:block}.i-mall-huaban .p-img span.img01{background-position:-50px 0}.i-mall-huaban .p-img span.img02{background-position:-50px -50px}.i-mall-huaban .p-img span.img03{background-position:-50px -100px}.footer-warrant-area .footer-warrant-logo span{width:79px;height:16px;display:block;background-position:-101px -45px}.home-channel-list li.s3 .icon-notice span{width:31px;height:13px;display:block;position:relative;top:17px;margin:0 auto;background-position:-17px -214px}.home-channel-list li.s2 li .p-img{height:40px;margin:0 auto;overflow:hidden;position:relative;width:40px}.home-channel-list li.s2 li .p-img img{position:absolute;width:auto;height:auto}.home-channel-list li.s2 li .p-img .img0{left:0}.home-channel-list li.s2 li .p-img .img1{left:-40px}.home-channel-list li.s2 li .p-img .img2{left:-80px}.home-channel-list li.s2 li .p-img .img3{left:-120px}.home-channel-list li.s2 li .p-img .img4{left:-160px}.home-channel-list li.s2 li .p-img .img5{left:-200px}.home-channel-list li.s3 .p-info li a span{display:inline-block;height:20px;margin-right:6px;overflow:hidden;position:relative;top:6px;width:20px}.home-channel-list li.s3 .p-info li a img{width:auto;height:auto;margin:0;position:absolute}.home-channel-list li.s3 .p-info li a .img0{left:-240px}.home-channel-list li.s3 .p-info li a .img1{left:-260px}.home-channel-list li.s3 .p-info li a .img2{left:-280px}</style>
<div class="top-banner" id="top-banner-block"></div>
<img src="/home/picture/icon-common.png" class="hide">
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
            <img src="/home/picture/bg71.png" class="hide">
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
                                <a class="icon-dropdown" href="https://www.vmall.com/member?t=1532932582899" rel="nofollow" target="_blank" onclick = "pushLoginMsg('已登录','用户名')"><span id="up_loginName"></span></a>&nbsp;
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
                                            <img src="/home/picture/bg71.png" class="user-img-shade">
                                            <p class="user-img">
                                                <a href="https://www.vmall.com/member?t=1532932582899timestamp" rel="nofollow" timeType="timestamp" target="_blank" onclick = "pushLoginMsg('已登录','头像')">
                                                    <img id="customerPic" src="/home/picture/img_not_logged_in.png" alt="默认头像" imgpath="https://res.vmallres.com/20180720/images" />
                                                </a>
                                            </p>
                                        </div>
                                        <div class="user-info fl">
                                             <a href="https://www.vmall.com/member?t=1532932582899timestamp" rel="nofollow" target="_blank" onclick = "pushLoginMsg('已登录','用户名')">
                                                <div class="user-info-name" id="up_loginName_info"></div>
                                             </a>
                                             <div class="user-info-detail clearfix" id="vip-info">
                                                <a id="authentication_y" class="icon-realname hide">已实名</a>
                                                <a id="authentication_n" href="https://www.vmall.com/authmember/accesstoken" rel="nofollow" class="icon-realname disabled hide" onclick = "pushLoginMsg('已登录','未实名')">未实名</a>
                                                <a class="icon-mail" href="https://www.vmall.com/member/msg?t=1532932582899timestamp" rel="nofollow" timeType="timestamp" onclick = "pushLoginMsg('已登录','站内信')">站内信  <span id="top-newMsgCount" class="hide">0</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                     <div class="i-mall-uc">
                                        <dl class="clearfix">
                                            <dt><span class="fl">我的订单</span><a class="fr" href="https://www.vmall.com/member/order?t=1532932582899timestamp" timeType="timestamp" onclick = "pushLoginMsg('已登录','更多')">更多&gt;</a></dt>
                                        </dl>
                                        <div class="i-mall-uc-con"> 
                                            <dl class="clearfix">
                                                <dd><a href="https://www.vmall.com/member/order?t=1532932582899timestamp&tab=unpaid" timeType="timestamp" onclick = "pushLoginMsg('已登录','待支付')">待支付</a></dd>
                                                <dd><a href="https://www.vmall.com/member/order?t=1532932582899timestamp&tab=send" timeType="timestamp" onclick = "pushLoginMsg('已登录','待收货')">待收货</a></dd>
                                                <dd><a href="https://www.vmall.com/member/order?t=1532932582899timestamp&tab=nocomment" timeType="timestamp" onclick = "pushLoginMsg('已登录','待评价')">待评价</a></dd>
                                                <dd><a href="https://www.vmall.com/member/exchange?t=1532932582899timestamp" timeType="timestamp" onclick = "pushLoginMsg('已登录','退换货')">退换货</a></dd>
                                                <dd><a href="https://www.vmall.com/member/recycle/index/aihuishou?t=1532932582899timestamp" timeType="timestamp" onclick = "pushLoginMsg('已登录','旧机回收')">旧机回收</a></dd>
                                            </dl>
                                        </div>
                                    </div>
                                    
                                    <div class="i-mall-huaban">
                                       <ul class="clearfix">
                                            <li>
                                                <p class="p-img">
                                                    <a href="https://www.vmall.com/member/newpoint?t=1532932582899" target="_blank" id="point" onclick = "pushLoginMsg('已登录','积分')">
                                                        <span class="img01"></span>
                                                    </a>
                                                </p>
                                                <p class="p-dec">积分</p>
                                                <p class="p-price"><span id="userPointBalance">--&nbsp;</span></a>分</p>
                                            </li>
                                            <li>
                                                <p class="p-img">
                                                    <a href="https://www.vmall.com/member/coupon?t=1532932582899" rel="nofollow" target="_blank" onclick = "pushLoginMsg('已登录','优惠券')">
                                                        <span class="img02"></span>
                                                    </a>
                                                </p>
                                                <p class="p-dec">优惠券</p>
                                                <p class="p-price"><span id="top-couponCount">--&nbsp;</span>张</p>
                                            </li>
                                            <li>
                                                <p class="p-img">
                                                    <a href="https://www.vmall.com/member/balance?t=1532932582899" rel="nofollow" target="_blank" onclick = "pushLoginMsg('已登录','代金券')">
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
                
                <li><a href="https://www.vmall.com/member/order?t=1532932582899timestamp" timeType="timestamp" onclick = "pushMyOrderMsg()">我的订单</a></li>
                
                    <li>
                        <div class="s-dropdown">
                            <div class="h h-wide" id="header-toolbar-minicart">
                                <a href="/cart2?t=1532932582899timestamp" class="icon-minicart" rel="nofollow" timeType="timestamp" target="blank" onclick = "pushMyCartMsg()">
                                    <span>购物车(<span id="header-cart-total">0</span>)</span>
                                </a>
                            </div>
                            <div class="b" id="header-toolbar-minicart-content">
                                <!-- 2017-06-19-迷你购物车-start -->
                                <div class="dropdown-minicart">
                                    <div class="minicart-pro-empty minicart-pro-empty-index" id="minicart-pro-empty">
                                        <p><span class="icon-minicart"></span></p>
                                        <p id="cartInfo" >您的购物车是空的，赶紧选购吧~</p>

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
        $(this).find("a.code").append('<img src="/home/picture/qrcode_vmall_new_app01.png" class="QRcode">')
    }
});
checkIEVersion();
ec.mediaPath = "https://res.vmallres.com/pimages/";
//document.write('<script src="/home/js/eb7991dc69864c8bb37639a13c6b9971.js'+(new Date()).getTime()+'"></s' + 'cript>');
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
                            <img src="/home/picture/{#item.photopath}78_78_{#item.photoname}" alt="{#item.itemName}" />
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
                            <img src="/home/picture/{#item.photopath}78_78_{#item.photoname}" alt="{#item.itemName}" />
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
            <div class="logo"><a href="https://www.vmall.com/" title="Vmall.com - 华为商城" onclick = "pushIndexLogoClickMsg('https://res.vmallres.com/pimages//common/config/logo/logo20170801113951.png','https://www.vmall.com/')"><img src="/home/picture/logo20170801113951.png" alt="Vmall.com - 华为商城"/></a></div>
            <!-- 2017-02-15-logo-end -->
            
            <!-- 2017-06-19-导航-start --> 
            <div class="naver">
                <ul class="clearfix">
                        <ul id="naver-list">
            <li id="huawei">
            <a href="https://www.vmall.com/huawei" 

            target="_blank">
  
             <span>华为专区</span>
   
        </a> 
     </li>
        <li id="honor">
            <a href="https://www.vmall.com/honor" 

            target="_blank">
  
             <span>荣耀专区</span>
   
        </a> 
     </li>
        <li id="huawei">
            <a href="https://www.vmall.com/product/10086915330134.html" 

            target="_blank">
  
             <span>HUAWEI P20</span>
   
        </a> 
     </li>
        <li id="honor">
            <a href="https://www.vmall.com/product/570379791.html" 

            target="_blank">
  
             <span>荣耀V10</span>
   
        </a> 
     </li>
        <li id="huawei">
            <a href="https://sale.vmall.com/nova.html" 

            target="_blank">
  
             <span>nova 3</span>
   
        </a> 
     </li>
        <li id="honor">
            <a href="https://www.vmall.com/product/10086785341226.html" 

            target="_blank">
  
             <span>荣耀10</span>
   
        </a> 
     </li>
</ul>
<script>
    $(function () {
        $('#naver-list li').hover(function () {
            $(this).addClass('hover');
        },function () {
            $(this).removeClass('hover');
        });

    });
</script>
                </ul>
            </div>
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
function pushIndexLogoClickMsg(adid,url)
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
    _paq.push(["trackLink","300010201", "link", value]);
}

$(".naver .clearfix").find("li").find("a").click(function(){
    var url = $(this).attr("href");
    var name =  $(this).find("span").html();
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
    _paq.push(["trackLink","300010301", "link", value]);
});
</script><!-- 导航 -->
<div class="naver-main">
    <div class="layout">
    
    
       <!-- 20130909-导航-start -->
               <!-- 20130909-导航-end -->
        <!-- 20140823-分类-start -->
        <div class="category category-index" id="category-block">
            <!-- 20170223-分类-start -->
    <div class="b">
        <ol class="category-list">
            <!-- 鼠标悬停增加ClassName： hover -->
                            <li id="zxnav_0"  class="category-item " onmouseenter="showProList('zxnav_0')">
                    <input id="zxnav_0_flag" type="hidden" autocomplete="off" value="no">
                    <input id="zxnav_0_name" type="hidden" autocomplete="off" value="手机">
                    <div class="category-info">
                        <div>
                            <a href="/list-36" target="_blank">
                                <span>手机
                                                                    </span>
                            </a>
                        </div>
                                        <a href="/list-75" target="_blank">
                                            <span>荣耀
                                            </span>
                                        </a>
                                        <a href="/list-285" target="_blank">
                                            <span>HUAWEI P系列
                                            </span>
                                        </a>
                        <i class=""></i>
                    </div>
                      <div class="category-panels relative">
                            <div class="p-title">
                                <a class="clearfix" href="/list-36" target="_blank">
                                    <span class="fl">浏览手机频道</span>
                                    <span class="fr btn-next"> > </span>
                                </a>
                            </div>
                            <ul class="subcate-list clearfix">
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="荣耀">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-75" target="_blank">
                                                        <span>荣耀</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="HUAWEI P系列">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-285" target="_blank">
                                                        <span>HUAWEI P系列</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="荣耀畅玩系列">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-77" target="_blank">
                                                        <span>荣耀畅玩系列</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="HUAWEI Mate系列">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-76" target="_blank">
                                                        <span>HUAWEI Mate系列</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="HUAWEI nova系列">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-277" target="_blank">
                                                        <span>HUAWEI nova系列</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="HUAWEI 麦芒系列">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-81" target="_blank">
                                                        <span>HUAWEI 麦芒系列</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="华为畅享系列">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-275" target="_blank">
                                                        <span>华为畅享系列</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="移动4G+专区">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-38" target="_blank">
                                                        <span>移动4G+专区</span>
                                                </a>
                                            </li>
                              </ul>
                            
                            <div class="p-pro">
                                <input id="pro_size" type="hidden" value="7">
                                <ul id="zxnav_0_prolist" class="grid-list clearfix">
                                    <!--通过添加current 来实现 hover效果-->
                                                    <input id="name_10086795400652" type="hidden" value="HUAWEI nova 3">
                                                    <input id="name_10086608202937" type="hidden" value="荣耀Play">
                                                    <input id="name_10086425688564" type="hidden" value="HUAWEI P20">
                                                    <input id="name_10086671638910" type="hidden" value="荣耀9i">
                                  </ul>
                                  <input id="zxnav_0_skuIds" type="hidden" value="10086795400652,10086608202937,10086425688564,10086671638910,">
                            </div>
                          </div>
                         </li>
                <li id="zxnav_1"  class="category-item odd" onmouseenter="showProList('zxnav_1')">
                    <input id="zxnav_1_flag" type="hidden" autocomplete="off" value="no">
                    <input id="zxnav_1_name" type="hidden" autocomplete="off" value="笔记本 &amp; 平板">
                    <div class="category-info">
                        <div>
                            <a href="/list-40" target="_blank">
                                <span>笔记本 &amp; 平板
                                                                    </span>
                            </a>
                        </div>
                                        <a href="/list-41" target="_blank">
                                            <span>平板电脑
                                            </span>
                                        </a>
                                        <a href="/list-42" target="_blank">
                                            <span>笔记本电脑
                                            </span>
                                        </a>
                        <i class=""></i>
                    </div>
                      <div class="category-panels relative">
                            <div class="p-title">
                                <a class="clearfix" href="/list-40" target="_blank">
                                    <span class="fl">浏览笔记本 &amp; 平板频道</span>
                                    <span class="fr btn-next"> > </span>
                                </a>
                            </div>
                            <ul class="subcate-list clearfix">
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="平板电脑">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-41" target="_blank">
                                                        <span>平板电脑</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="笔记本电脑">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-42" target="_blank">
                                                        <span>笔记本电脑</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="笔记本配件">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-317" >
                                                        <span>笔记本配件</span>
                                                </a>
                                            </li>
                              </ul>
                            
                            <div class="p-pro">
                                <input id="pro_size" type="hidden" value="7">
                                <ul id="zxnav_1_prolist" class="grid-list clearfix">
                                    <!--通过添加current 来实现 hover效果-->
                                                    <input id="name_10086514290855" type="hidden" value="HUAWEI MateBook X Pro">
                                                    <input id="name_10086165908070" type="hidden" value="荣耀MagicBook">
                                                    <input id="name_10086483867071" type="hidden" value="华为平板 M5 8.4英寸">
                                                    <input id="name_887012722" type="hidden" value="荣耀畅玩平板2 9.6英寸">
                                  </ul>
                                  <input id="zxnav_1_skuIds" type="hidden" value="10086514290855,10086165908070,10086483867071,887012722,">
                            </div>
                          </div>
                         </li>
                <li id="zxnav_2"  class="category-item " onmouseenter="showProList('zxnav_2')">
                    <input id="zxnav_2_flag" type="hidden" autocomplete="off" value="no">
                    <input id="zxnav_2_name" type="hidden" autocomplete="off" value="智能穿戴">
                    <div class="category-info">
                        <div>
                            <a href="/list-59" target="_blank">
                                <span>智能穿戴
                                                                    </span>
                            </a>
                        </div>
                                        <a href="/list-241" target="_blank">
                                            <span>手环
                                            </span>
                                        </a>
                                        <a href="/list-247" target="_blank">
                                            <span>手表
                                            </span>
                                        </a>
                                        <a href="/list-329" target="_blank">
                                            <span>VR
                                            </span>
                                        </a>
                        <i class=""></i>
                    </div>
                      <div class="category-panels relative">
                            <div class="p-title">
                                <a class="clearfix" href="/list-59" target="_blank">
                                    <span class="fl">浏览智能穿戴频道</span>
                                    <span class="fr btn-next"> > </span>
                                </a>
                            </div>
                            <ul class="subcate-list clearfix">
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="手环">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-241" target="_blank">
                                                        <span>手环</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="手表">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-247" target="_blank">
                                                        <span>手表</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="VR">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-329" target="_blank">
                                                        <span>VR</span>
                                                </a>
                                            </li>
                              </ul>
                            
                            <div class="p-pro">
                                <input id="pro_size" type="hidden" value="7">
                                <ul id="zxnav_2_prolist" class="grid-list clearfix">
                                    <!--通过添加current 来实现 hover效果-->
                                                    <input id="name_10086972979696" type="hidden" value="华为手环 B5">
                                                    <input id="name_419942774" type="hidden" value="荣耀手环3">
                                                    <input id="name_976288056" type="hidden" value="HUAWEI WATCH 2 Pro">
                                                    <input id="name_860462675" type="hidden" value="荣耀畅玩手环 A2">
                                  </ul>
                                  <input id="zxnav_2_skuIds" type="hidden" value="10086972979696,419942774,976288056,860462675,">
                            </div>
                          </div>
                         </li>
                <li id="zxnav_3"  class="category-item odd" onmouseenter="showProList('zxnav_3')">
                    <input id="zxnav_3_flag" type="hidden" autocomplete="off" value="no">
                    <input id="zxnav_3_name" type="hidden" autocomplete="off" value="智能家居">
                    <div class="category-info">
                        <div>
                            <a href="/list-43" target="_blank">
                                <span>智能家居
                                                                    </span>
                            </a>
                        </div>
                                        <a href="/list-45" >
                                            <span>路由器
                                            </span>
                                        </a>
                                        <a href="/list-46" >
                                            <span>电视盒子
                                            </span>
                                        </a>
                                        <a href="/list-371" >
                                            <span>照明
                                            </span>
                                        </a>
                        <i class=""></i>
                    </div>
                      <div class="category-panels relative">
                            <div class="p-title">
                                <a class="clearfix" href="/list-43" target="_blank">
                                    <span class="fl">浏览智能家居频道</span>
                                    <span class="fr btn-next"> > </span>
                                </a>
                            </div>
                            <ul class="subcate-list clearfix">
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="路由器">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-45" >
                                                        <span>路由器</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="电视盒子">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-46" >
                                                        <span>电视盒子</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="照明">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-371" >
                                                        <span>照明</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="清洁">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-421" >
                                                        <span>清洁</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="子母/分布式路由">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-263" >
                                                        <span>子母/分布式路由</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="电力猫/wifi放大器">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-44" >
                                                        <span>电力猫/wifi放大器</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="随行wifi">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-97" >
                                                        <span>随行wifi</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="节能">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-423" >
                                                        <span>节能</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="环境">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-373" >
                                                        <span>环境</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="安防">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-379" >
                                                        <span>安防</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="健康">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-403" >
                                                        <span>健康</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="厨电">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-377" >
                                                        <span>厨电</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="影音">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-407" >
                                                        <span>影音</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="卫浴">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-375" target="_blank">
                                                        <span>卫浴</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="其他">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-381" target="_blank">
                                                        <span>其他</span>
                                                </a>
                                            </li>
                              </ul>
                            
                            <div class="p-pro">
                                <input id="pro_size" type="hidden" value="7">
                                <ul id="zxnav_3_prolist" class="grid-list clearfix">
                                    <!--通过添加current 来实现 hover效果-->
                                                    <input id="name_964803411" type="hidden" value="荣耀分布式路由">
                                                    <input id="name_22571160" type="hidden" value="华为路由WS5100">
                                                    <input id="name_480239066" type="hidden" value="荣耀路由2">
                                                    <input id="name_10086061866500" type="hidden" value="华为路由 Q2">
                                  </ul>
                                  <input id="zxnav_3_skuIds" type="hidden" value="964803411,22571160,480239066,10086061866500,">
                            </div>
                          </div>
                         </li>
                <li id="zxnav_4"  class="category-item " onmouseenter="showProList('zxnav_4')">
                    <input id="zxnav_4_flag" type="hidden" autocomplete="off" value="no">
                    <input id="zxnav_4_name" type="hidden" autocomplete="off" value="通用配件">
                    <div class="category-info">
                        <div>
                            <a href="/list-54" target="_blank">
                                <span>通用配件
                                                                    </span>
                            </a>
                        </div>
                                        <a href="/list-56" target="_blank">
                                            <span>移动电源
                                            </span>
                                        </a>
                                        <a href="/list-229" target="_blank">
                                            <span>耳机
                                            </span>
                                        </a>
                                        <a href="/list-55" target="_blank">
                                            <span>音箱
                                            </span>
                                        </a>
                        <i class=""></i>
                    </div>
                      <div class="category-panels relative">
                            <div class="p-title">
                                <a class="clearfix" href="/list-54" target="_blank">
                                    <span class="fl">浏览通用配件频道</span>
                                    <span class="fr btn-next"> > </span>
                                </a>
                            </div>
                            <ul class="subcate-list clearfix">
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="移动电源">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-56" target="_blank">
                                                        <span>移动电源</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="耳机">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-229" target="_blank">
                                                        <span>耳机</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="音箱">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-55" target="_blank">
                                                        <span>音箱</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="自拍杆/支架">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-231" target="_blank">
                                                        <span>自拍杆/支架</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="充电器/线材">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-58" target="_blank">
                                                        <span>充电器/线材</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="U盘/存储卡">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-83" target="_blank">
                                                        <span>U盘/存储卡</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="摄像机/镜头">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-235" target="_blank">
                                                        <span>摄像机/镜头</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="智能硬件">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-239" target="_blank">
                                                        <span>智能硬件</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="生活周边">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-237" target="_blank">
                                                        <span>生活周边</span>
                                                </a>
                                            </li>
                              </ul>
                            
                            <div class="p-pro">
                                <input id="pro_size" type="hidden" value="7">
                                <ul id="zxnav_4_prolist" class="grid-list clearfix">
                                    <!--通过添加current 来实现 hover效果-->
                                                    <input id="name_937100113" type="hidden" value="华为10000mAh 移动电源  充电宝">
                                                    <input id="name_189161731" type="hidden" value="荣耀xSport运动蓝牙耳机">
                                                    <input id="name_534967719" type="hidden" value="华为智能体脂秤">
                                                    <input id="name_10086132726986" type="hidden" value="荣耀心晴耳机">
                                  </ul>
                                  <input id="zxnav_4_skuIds" type="hidden" value="937100113,189161731,534967719,10086132726986,">
                            </div>
                          </div>
                         </li>
                <li id="zxnav_5"  class="category-item odd" onmouseenter="showProList('zxnav_5')">
                    <input id="zxnav_5_flag" type="hidden" autocomplete="off" value="no">
                    <input id="zxnav_5_name" type="hidden" autocomplete="off" value="专属配件">
                    <div class="category-info">
                        <div>
                            <a href="/list-47" target="_blank">
                                <span>专属配件
                                                                    </span>
                            </a>
                        </div>
                                        <a href="/list-48" target="_blank">
                                            <span>保护壳
                                            </span>
                                        </a>
                                        <a href="/list-49" target="_blank">
                                            <span>保护套
                                            </span>
                                        </a>
                                        <a href="/list-50" target="_blank">
                                            <span>贴膜
                                            </span>
                                        </a>
                        <i class=""></i>
                    </div>
                      <div class="category-panels relative">
                            <div class="p-title">
                                <a class="clearfix" href="/list-47" target="_blank">
                                    <span class="fl">浏览专属配件频道</span>
                                    <span class="fr btn-next"> > </span>
                                </a>
                            </div>
                            <ul class="subcate-list clearfix">
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="保护壳">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-48" target="_blank">
                                                        <span>保护壳</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="保护套">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-49" target="_blank">
                                                        <span>保护套</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="贴膜">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-50" target="_blank">
                                                        <span>贴膜</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="盒子专属配件">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-223" target="_blank">
                                                        <span>盒子专属配件</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="表带">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-225" target="_blank">
                                                        <span>表带</span>
                                                </a>
                                            </li>
                                             <li class="subcate-item">
                                                <input id="child_name" type="hidden" value="触控笔">
                                                <input id="child_status" type="hidden" value="1">
                                                <input id="child_type" type="hidden" value="1">
                                                <a href="/list-397" target="_blank">
                                                        <span>触控笔</span>
                                                </a>
                                            </li>
                              </ul>
                            
                            <div class="p-pro">
                                <input id="pro_size" type="hidden" value="7">
                                <ul id="zxnav_5_prolist" class="grid-list clearfix">
                                    <!--通过添加current 来实现 hover效果-->
                                                    <input id="name_10086348260851" type="hidden" value="HUAWEI P20 Pro手机导航套件">
                                                    <input id="name_70658365" type="hidden" value="荣耀9 炫彩保护壳">
                                                    <input id="name_10086141297300" type="hidden" value="HUAWEI Mate RS 保时捷设计 智能视窗皮套">
                                                    <input id="name_780670805" type="hidden" value="荣耀V10 PU磁吸保护套">
                                  </ul>
                                  <input id="zxnav_5_skuIds" type="hidden" value="10086348260851,70658365,10086141297300,780670805,">
                            </div>
                          </div>
                         </li>
        </ol>
    </div>
<!-- 20170223-分类-end -->
        
        <!-- 20140823-分类-end -->
        
        </div>
    </div>
</div>
<script>
(function () {
     //获取二级菜单元素
    var $panels = $(".category-panels");
    //判断鼠标是否进入二级菜单
    var mouseInPanels = false;
    //用于存储鼠标移动过程中,开始位置和结束位置的数组
    var mouseTrach = [];
    var activeRow,  //选中的一级菜单
        activeMenu, //对应的右侧二级菜单
        timer;      //延时器
   
    $panels.live("mouseenter",function() {
            mouseInPanels = true;
        }).live("mouseleave",function() {
            mouseInPanels = false;
        });
    
    var moveHandler = function(e) {
        mouseTrach.push({
            x: e.pageX,
            y: e.pageY
        });
        if (mouseTrach.length > 2) {
            mouseTrach.shift();
        }
    };
    $('.category-item').each(function(){
        $(this).find('.category-panels').addClass('none');
    })
    $('.category-list').live('mouseenter',function(){
        $(document).bind("mousemove", moveHandler);
    }).live('mouseleave',function(){
        if (activeRow) {
            activeRow.removeClass("active");
            activeRow = null;
        }
        if (activeMenu) {
            activeMenu.addClass("none");
            activeMenu = null;
        }
        $(document).unbind("mousemove", moveHandler);
    });
    //鼠标进入每个li
    $('.category-item ').live('mouseenter',function(e){
        if (!activeRow) {
            activeRow = $(this).addClass("active");
            activeMenu = $(this).find('.category-panels');
            activeMenu.removeClass("none");
        }
        if (timer) {
            clearTimeout(timer);
        }
        //当前鼠标位置坐标
        var curMouse = mouseTrach[mouseTrach.length - 1];
        //前面鼠标位置坐标
        var prevMouse = mouseTrach[mouseTrach.length - 2];
        var delay = needDelay($('.category-list'), curMouse, prevMouse);
        if (delay) {
            var $this = $(this);
            timer = setTimeout(function() {
                if (mouseInPanels) {
                    return
                }
                if (activeRow&&activeRow.hasClass('active')) {
                    activeRow.removeClass("active");
                }
                if (activeMenu) {
                    activeMenu.addClass("none");
                }
                activeRow = $this;
                activeRow.addClass("active");
                activeMenu = $this.find('.category-panels');
                activeMenu.removeClass("none");
                timer = null;
            },500);
        } else {
            var prevActiveRow = activeRow;
            var prevActiveMenu = activeMenu;
            activeRow =$(this);
            activeMenu = $(this).find('.category-panels');
            prevActiveRow.removeClass("active");
            prevActiveMenu.addClass("none");
            activeRow.addClass("active");
            activeMenu.removeClass("none");
        }
    });
    
    //所有分类显示隐藏控制
    var isIndex =  true ,
        categoryBlock = gid('category-block');
        
    if(isIndex) return;
    
    $("#category-block").hover(function(){
        $(this).addClass("category-hover");
    },function(){
        $(this).removeClass("category-hover");
    });
    
    /*categoryBlock.onmouseover = function () {
        categoryBlock.className = 'category category-hover';
    };
    categoryBlock.onmouseout = function () {
        categoryBlock.className = 'category';
    };*/
    
}());

/**
*功能：给鼠标移动到category-list li上面的时候，记得给他多添加一个hover类样式
*目的是兼容ie6,以及调整二级分类的弹出框的位置。
*@author 李峰
*/
/**
$(function(){
    $(".category-item").hover(function(){
        $(this).addClass("hover");
        //1.二级分类的top值
        var childrenTop = $(this).offset().top;
        //2.一级分类的top值
        var parentTop = $(".category-list").offset().top;
        //3.二级分类到一级分类顶部的距离
        var top = childrenTop - parentTop;
        //4.二级分类的弹出层的高度
        var childrenHeight = $(this).find(".category-panels").innerHeight();
        //5.一级分类容器的总高度
        var totalHeight = $(".category-list").height();
        alert("childrenTop:"+childrenTop+";parentTop:"+parentTop+";top:"+top+";childrenHeight:"+childrenHeight+";totalHeight:"+totalHeight) ;

        //6.如果二级分类.category-panels的内容高度大于总容量totalHeight,那么.category-panels置顶，然后多余的自动往下延续
        //如果二级分类childrenHeight内容高度(childrenHeight + top )大于totalHeight,那么.category-panels往上移动childrenHeight + top -totalHeight
        if((top + childrenHeight) > totalHeight)
        {
            if(childrenHeight > totalHeight)
            {
                $(this).find(".category-panels").css("top",-top);
            }else{
                //上移动
                var topX = (childrenHeight+top) - totalHeight;
                $(this).find(".category-panels").css("top",-topX);
                
            }
            
        }
        
    },function(){
        $(this).removeClass("hover");
    });

});
 */
 
 //显示导航右侧商品数据
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
        new ec.ajax().get({
            url :  "/querySbomInfo.json?skuIdsStr="+skuIds,
            async:true,//使用异步的Ajax请求
            timeout : 10000,
            successFunction : function(json){
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
                                price = "暂无报价";
                            } else {
                                price = "&yen;" + sbomInfo.price;
                            }
                            //一级分类导航名称
                            var oneNavName=$("#"+id+"_name").val();
                            var onShowName="分类导航_"+oneNavName+"_"+sbomInfo.sbomCode;
                            //var clickContent="_paq.push(['trackLink','"+onShowName+"', 'link', ' ']);ec.code.addAnalytics({hicloud:true});";
                            html += '<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)" >';
                            html += '     <a class="thumb" target="_blank" href="'+urlPath+'" onclick = "pushNavIndexProImgMsg(\''+skuId+'\',\''+urlPath+'\')">';
                            html += '         <p class="grid-img">';
                            html += '           <img alt="" src="' + imgPath + '">';
                            html += '          </p>';
                            html += '          <div class="grid-title">' + proName + '</div>';
                            html += '          <p class="grid-price">' + price + '</p>';
                            //html += '          <p class="grid-tips"><img src="" alt=""></p>';
                            html += '       </a>';
                            html += '  </li>';
                        }
                    }
                    $("#"+id+"_prolist").html(html);
                }
                
            }
        }); 
    }
 };
function vector(a, b) {
    return {
        x: b.x - a.x,
        y: b.y - a.y
    }
}

function vectorPro(v1, v2) {
    return v1.x * v2.y - v1.y * v2.x;
}

/**
 *功能:判断两个值是否同正负
 *入参:两个number类型的值
 *出参:布尔值,同正负返回true,反之false
*/ 
function sameSign(a, b) {
    return (a ^ b) >= 0;
}

/**
 *功能:判断p是否在三角形abc内
 *入参:p, a, b, c;p是需要判断的点，a,b,c是三角形的三个点，如果p在三角形内部，那么pa,pb,pc两个向量之间的差乘应该符号相同。（同正负）
 *出参:布尔值。如果p在a,b,c构成的三角形内,返回true,反之false
*/

function isPoint(p, a, b, c) {
    var pa = vector(p, a);
    var pb = vector(p, b);
    var pc = vector(p, c);

    var t1 = vectorPro(pa, pb);
    var t2 = vectorPro(pb, pc);
    var t3 = vectorPro(pc, pa);

    return sameSign(t1, t2) && sameSign(t2, t3);
}

/**
 *功能:判断是正常切换一级菜单，还是需要延时
 *入参:鼠标滑入的DOM元素
 *出参:布尔值。需要延时返回true,正常切换一级菜单返回false
*/ 
function needDelay(ele, curMouse, prevMouse) {
    if (!curMouse || !prevMouse) {
        return
    }
    var offset = ele.offset();
    var topleft = {
        x: offset.left+240,
        y: offset.top
    };
    var leftbottom = {
        x: offset.left+240,
        y: offset.top + ele.height()
    };
    return isPoint(curMouse, prevMouse, topleft, leftbottom);
}

 
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

//商品分类纵向导航数据上报
function pushNavIndexProMsg(name,url)
{
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
        _paq.push(["trackLink","300010501", "link", value]);
}
//商品分类纵向导航数据上报(图片)
function pushNavIndexProImgMsg(skuId,url)
{
    var value = {
            "UID":ec.util.cookie.get("uid"),
            "TID":getPtid(),
            "TIME":getTime(),
            "CONTENT":
            {
            "SKUID":skuId,
            "URL":url,
            "click":"1"
            }
        };
        ec.code.addAnalytics({hicloud:true});
        _paq.push(["trackLink","300010601", "link", value]);
}

$("#category-block .category-info").find("a").click(function(){
    var name = $(this).find("span").html().trim();
    var url = $(this).attr("href");
    pushNavIndexProMsg(name,url);
});

$("#category-block .category-panels.relative").find("a").each(function(){$(this).bind('click','a',function(){
    var name = "";
    var src = "";
    var url = this.href;
    if($(this).hasClass("clearfix"))
    {
        name = $(this).find(".fl").html().trim();
        pushNavIndexProMsg(name,url);
    }
    if($(this).parent().attr("class")=="subcate-item")
    {
        name = $(this).find("span").html().trim();
        pushNavIndexProMsg(name,url);
    }
})});
















</script><!--双12 header增加背景图的 字体颜色改变-->
<!-- 20130904-热门板-start -->
<div class="hot-board">
    <!--ads start-->
    <div class="ec-slider" id="index_slider">
    <ul>
            <li ID='firstImg' style="background:url('/home/images/20180724211634587.jpg') 50% 0px no-repeat ;display: block;">
                <div style="width:100%;">
                        <img src="/home//home/picture/20180724211634587.jpg" style="display:none;"/>
                    <a style="width:100%;height:450px;display:block;" href="https://sale.vmall.com/nova.html" target="_blank" onclick="pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-07/20180724211634587.jpg','https://sale.vmall.com/nova.html','1')"></a>
                </div>
            </li>
        
    </ul>
</div>
<ul></ul><ul></ul>

<script>
ec.ready(function(){
                var imgLi=document.createElement("li");
                imgLi.setAttribute("class","ec-slider-item");
                imgLi.setAttribute("style","background: url('home/images/20180726092719539.jpg') 50% 0px no-repeat; ; width: 100%; height: 450px; display: none; position: absolute;");
                imgLi.innerHTML="<div style=\"width:100%;\" class=\"ec-slider-item-img\"><a style=\"width:100%;height:450px;display:block;\" href=\"https://sale.vmall.com/note10.html\" target=\"_blank\" onclick=\"pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-07/20180726092719539.jpg','https://sale.vmall.com/note10.html',2);\"></a></div>";
               $("#index_slider").children("ul").append(imgLi);
                var imgLi=document.createElement("li");
                imgLi.setAttribute("class","ec-slider-item");
                imgLi.setAttribute("style","background: url('https://res.vmallres.com/pimages//sale/2018-07/2018072519013106.jpg') 50% 0px no-repeat; ; width: 100%; height: 450px; display: none; position: absolute;");
                imgLi.innerHTML="<div style=\"width:100%;\" class=\"ec-slider-item-img\"><a style=\"width:100%;height:450px;display:block;\" href=\"https://www.vmall.com/product/10086572258093.html\" target=\"_blank\" onclick=\"pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-07/2018072519013106.jpg','https://www.vmall.com/product/10086572258093.html',3);\"></a></div>";
               $("#index_slider").children("ul").append(imgLi);
                var imgLi=document.createElement("li");
                imgLi.setAttribute("class","ec-slider-item");
                imgLi.setAttribute("style","background: url('https://res.vmallres.com/pimages//sale/2018-07/20180729121315799.jpg') 50% 0px no-repeat; ; width: 100%; height: 450px; display: none; position: absolute;");
                imgLi.innerHTML="<div style=\"width:100%;\" class=\"ec-slider-item-img\"><a style=\"width:100%;height:450px;display:block;\" href=\"https://sale.vmall.com/honor.html\" target=\"_blank\" onclick=\"pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-07/20180729121315799.jpg','https://sale.vmall.com/honor.html',4);\"></a></div>";
               $("#index_slider").children("ul").append(imgLi);
                var imgLi=document.createElement("li");
                imgLi.setAttribute("class","ec-slider-item");
                imgLi.setAttribute("style","background: url('https://res.vmallres.com/pimages//sale/2018-07/20180724213224980.jpg') 50% 0px no-repeat; ; width: 100%; height: 450px; display: none; position: absolute;");
                imgLi.innerHTML="<div style=\"width:100%;\" class=\"ec-slider-item-img\"><a style=\"width:100%;height:450px;display:block;\" href=\"https://sale.vmall.com/huawei.html\" target=\"_blank\" onclick=\"pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-07/20180724213224980.jpg','https://sale.vmall.com/huawei.html',5);\"></a></div>";
               $("#index_slider").children("ul").append(imgLi);
                var imgLi=document.createElement("li");
                imgLi.setAttribute("class","ec-slider-item");
                imgLi.setAttribute("style","background: url('https://res.vmallres.com/pimages//sale/2018-07/20180724202354178.jpg') 50% 0px no-repeat; ; width: 100%; height: 450px; display: none; position: absolute;");
                imgLi.innerHTML="<div style=\"width:100%;\" class=\"ec-slider-item-img\"><a style=\"width:100%;height:450px;display:block;\" href=\"https://www.vmall.com/product/10086576787089.html\" target=\"_blank\" onclick=\"pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-07/20180724202354178.jpg','https://www.vmall.com/product/10086576787089.html',6);\"></a></div>";
               $("#index_slider").children("ul").append(imgLi);
                var imgLi=document.createElement("li");
                imgLi.setAttribute("class","ec-slider-item");
                imgLi.setAttribute("style","background: url('https://res.vmallres.com/pimages//sale/2018-07/20180724121308365.jpg') 50% 0px no-repeat; ; width: 100%; height: 450px; display: none; position: absolute;");
                imgLi.innerHTML="<div style=\"width:100%;\" class=\"ec-slider-item-img\"><a style=\"width:100%;height:450px;display:block;\" href=\"https://www.vmall.com/product/10086291890006.html\" target=\"_blank\" onclick=\"pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-07/20180724121308365.jpg','https://www.vmall.com/product/10086291890006.html',7);\"></a></div>";
               $("#index_slider").children("ul").append(imgLi);
                var imgLi=document.createElement("li");
                imgLi.setAttribute("class","ec-slider-item");
                imgLi.setAttribute("style","background: url('https://res.vmallres.com/pimages//sale/2018-07/20180725172204563.jpg') 50% 0px no-repeat; ; width: 100%; height: 450px; display: none; position: absolute;");
                imgLi.innerHTML="<div style=\"width:100%;\" class=\"ec-slider-item-img\"><a style=\"width:100%;height:450px;display:block;\" href=\"https://mm.vmall.com/cx8.html\" target=\"_blank\" onclick=\"pushSliderMsg('https://res.vmallres.com/pimages//sale/2018-07/20180725172204563.jpg','https://mm.vmall.com/cx8.html',8);\"></a></div>";
               $("#index_slider").children("ul").append(imgLi);

ec.load("ec.slider", {
         loadType : "lazy",
         callback : function() {
                            $("#index_slider").slider({
                                     width:     '100%', //必须
                                     height:     450, //必须
                                     style : 1,                    //1显示分页，2只显示左右箭头,3两者都显示
                                     pause : 5000,           //间隔时间
                                     auto : true,
                                     minWidth : 1200,
                                     showNumber:false,
                                     circleBtn:true
                            });
         }
});

});

//首页轮播数据上报
function pushSliderMsg(adid,url,location)
{
    var value = {
            "UID":ec.util.cookie.get("uid"),
            "TID":getPtid(),
            "TIME":getTime(),
            "CONTENT":
            {
            "ADID":adid,
            "URL":url,
            "location":location,
            "click":"1"
            }
        };
        ec.code.addAnalytics({hicloud:true});
        _paq.push(["trackLink","300010701", "link", value]);
}
</script>
    <!--ads end-->
</div><!-- 20130904-热门板-end -->

 <!--//20161123 弹出框-->
            

<!-- 2017-02-15-菜单栏-start -->
    <div class="home-channel-menu" style="background:#f5f5f5;">

    <div class="layout relative">
        
        
        <div class="channel-floor-0 relative">
            <div class="h">
                <div class="">
                    <ul class="home-channel-list clearfix">
                       <li class="fl s1">
                            <div id="gg_login" class="i-mall-prompt clearfix hide">
                                <div class="relative fl w-name">
                                    <a  href="/member?t=1532932582907timestamp" rel="nofollow" timeType="timestamp" onclick = "pushMemberMsg('头像','/member?t=1532932582907timestamp')">
                                        <img id="gg_customerPic" src="/home/picture/img_not_logged_in.png" alt="">
                                        <i id="vip-Active-gg" class="icon-vip-level-5"></i>
                                    </a>
                                </div>
                                <div class="fl pdl-20">
                                    <div class="w-info"><span id="gg_loginName"></span></div>
                                    <div class="w-number">
                                        <span id="gg_jyz" class="" style="width: 0%"></span>
                                    </div>
                                    <div class="w-btn">
                                          <a id="oldPeople" style="display:none" class="new" href="/member/msg?t=1532932582907timestamp" onclick = "pushMemberMsg('站内信','/member/msg?t=1532932582907timestamp">站内信</a>
                                          <a id="newPeople" class="new" href="https://sale.vmall.com/welcome.html" target="_blank" onclick = "pushMemberMsg('新人福利','href="https://sale.vmall.com/welcome.html')">新人福利</a>
                                        <a class="" href="/privilege" target="_blank" onclick = "pushMemberMsg('会员频道','/privilege')">会员频道</a>
                                    </div>
                                </div>
                            </div>
                            <div id="gg_unlogin" class="i-mall-prompt clearfix">
                                <div class="relative fl w-name">
                                    <img src="/home//home/picture/img_not_logged_in.png" alt="">
                                </div>
                                <div class="fl pdl-20">
                                    <div id="gg_login_url" class="w-reg">
                                                             欢迎来到华为商城，请&nbsp;<script>document.write('<a href="https://hwid1.vmall.com/CAS/remoteLogin?loginChannel=26000000&reqClientType=26&lang=zh-cn&loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Facaslogin%3Furl%3D'+encodeURIComponent(encodeURIComponent(window.location.href))+'" rel="nofollow" target="_blank" onclick = "pushMemberMsg(\'登录\',\'https://hwid1.vmall.com/CAS/remoteLogin?loginChannel=26000000&reqClientType=26&lang=zh-cn&loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Facaslogin%3Furl%3D'+encodeURIComponent(encodeURIComponent(window.location.href))+'\')">登录</a>');</script><br>还没账号？&nbsp;<a href="https://hwid1.vmall.com/CAS/portal/userRegister/regbyphone.html?service=https://www.vmall.com/account/caslogin&loginChannel=26000000&reqClientType=26&lang=zh-cn" rel="nofollow" target="_blank" onclick = "pushMemberMsg('注册','https://hwid1.vmall.com/CAS/portal/userRegister/regbyphone.html?service=https://www.vmall.com/account/caslogin&loginChannel=26000000&reqClientType=26&lang=zh-cn')">注册</a>&nbsp;即可享受&nbsp;&nbsp;&nbsp;&nbsp;>
                                    </div>
                                    <div class="w-btn">
                                        <a class="new" href="https://sale.vmall.com/welcome.html" target="_blank" onclick = "pushMemberMsg('新人福利','https://sale.vmall.com/welcome.html')">新人福利</a>
                                        <a class="" href="/privilege" target="_blank" onclick = "pushMemberMsg('会员频道','/privilege')">会员频道</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="fl s2">
                           <ul class="clearfix">
                                                    <li>
                                                        <a href="https://www.vmall.com/company" target="_blank" onclick="pushMsgMenu(1,'300010901','PC首页功能导航_企业购特惠','https://www.vmall.com/company')">
                                                            <div class="p-img">
                                                                    <img class="img0" src="/home/picture/3de02df18f7fd36e8598b4ac32e30f45.png" alt="企业购特惠">
                                                            </div>
                                                        <div class="p-dec">企业购特惠</div></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.vmall.com/recycle" target="_blank" onclick="pushMsgMenu(2,'300010901','PC首页功能导航_以旧换新','https://www.vmall.com/recycle')">
                                                            <div class="p-img">
                                                                    <img class="img1" src="/home/picture/3de02df18f7fd36e8598b4ac32e30f45.png" alt="以旧换新">
                                                            </div>
                                                        <div class="p-dec">以旧换新</div></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://sale.vmall.com/note10.html" target="_blank" onclick="pushMsgMenu(3,'300010901','PC首页功能导航_Note10','https://sale.vmall.com/note10.html')">
                                                            <div class="p-img">
                                                                    <img class="img2" src="/home/picture/3de02df18f7fd36e8598b4ac32e30f45.png" alt="Note10">
                                                            </div>
                                                        <div class="p-dec">Note10</div></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.vmall.com/privilege" target="_blank" onclick="pushMsgMenu(4,'300010901','PC首页功能导航_会员领券','https://www.vmall.com/privilege')">
                                                            <div class="p-img">
                                                                    <img class="img3" src="/home/picture/3de02df18f7fd36e8598b4ac32e30f45.png" alt="会员领券">
                                                            </div>
                                                        <div class="p-dec">会员领券</div></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://sale.vmall.com/home.html" target="_blank" onclick="pushMsgMenu(5,'300010901','PC首页功能导航_数码特惠','https://sale.vmall.com/home.html')">
                                                            <div class="p-img">
                                                                    <img class="img4" src="/home/picture/3de02df18f7fd36e8598b4ac32e30f45.png" alt="数码特惠">
                                                            </div>
                                                        <div class="p-dec">数码特惠</div></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://m.dahanbank.cn/ThirdPlatformActivity/huaweipc/huaPC.html" target="_blank" onclick="pushMsgMenu(6,'300010901','PC首页功能导航_手机充值','https://m.dahanbank.cn/ThirdPlatformActivity/huaweipc/huaPC.html')">
                                                            <div class="p-img">
                                                                    <img class="img5" src="/home/picture/3de02df18f7fd36e8598b4ac32e30f45.png" alt="手机充值">
                                                            </div>
                                                        <div class="p-dec">手机充值</div></a>
                                                    </li>
                           </ul>
                         </li>
                         <li class="fl s3">
                            <div class="p-notice clearfix">
                                <div class="icon-notice fl">
                                    <a href="/notice-list" title="商城公告" onclick="pushMsgNotice('2')">
                                        <span></span>
                                    </a>
                                </div>
                                <div class="p-notice-content" id="notice">
                                    <ul class="p-notice-list fl">
                                                        <li><a href="/notice-5579" target="_blank" onclick="pushMsgNotice('1')">荣耀品牌7月系列活动中奖名单公布</a></li>
                                                        <li><a href="/notice-5573" target="_blank" onclick="pushMsgNotice('1')">荣耀Note10新品首发 预约购机享多重好礼</a></li>
                                                        <li><a href="/notice-5567" target="_blank" onclick="pushMsgNotice('1')">【华为818】燃烧吧，华为星球</a></li>
                                                        <li><a href="/notice-5561" target="_blank" onclick="pushMsgNotice('1')">荣耀MagicBook 触屏版/集显版新品首发</a></li>
                                                        <li><a href="/notice-5555" target="_blank" onclick="pushMsgNotice('1')">【华为众测第二期】这个神奇的黑科技产品带回家，舒适而健康的精致生活不再是梦</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-info">
                                <ul class="clearfix">
                                                            <li>
                                                                <a href="https://www.vmall.com/priority" target="_blank" rel="nofollow" onclick="pushMsgMenu(1,'300011101','PC首页功能导航_优购码','https://www.vmall.com/priority')">                                                                   
                                                                    <span><img class="img0" src="/home/picture/3de02df18f7fd36e8598b4ac32e30f45.png" alt="优购码"></span>优购码
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="https://sale.vmall.com/smrz.html" target="_blank" rel="nofollow" onclick="pushMsgMenu(2,'300011101','PC首页功能导航_实名认证','https://sale.vmall.com/smrz.html')">                                                                  
                                                                    <span><img class="img1" src="/home/picture/3de02df18f7fd36e8598b4ac32e30f45.png" alt="实名认证"></span>实名认证
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="https://www.vmall.com/order/tcsProductIndex" target="_blank" rel="nofollow" onclick="pushMsgMenu(3,'300011101','PC首页功能导航_补购保障','https://www.vmall.com/order/tcsProductIndex')">                                                                    
                                                                    <span><img class="img2" src="/home/picture/3de02df18f7fd36e8598b4ac32e30f45.png" alt="补购保障"></span>补购保障
                                                                </a>
                                                            </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="hr-12"></div>
                <div class="">
                    <ul class="home-promo-list clearfix">
            <li><a target="_blank" href="https://www.vmall.com/product/10086576787089.html" class="item"><img alt="荣耀" src="/home/picture/20180724201408253.png" /></a></li>
        <li><a target="_blank" href="https://www.vmall.com/product/10086471194207.html" class="item"><img alt="华为" src="/home/picture/20180625151214918.png" /></a></li>
        <li><a target="_blank" href="https://www.vmall.com/product/10086291890006.html" class="item"><img alt="荣耀" src="/home/picture/20180607151142377.png" /></a></li>
        <li><a target="_blank" href="https://sale.vmall.com/nova.html" class="item"><img alt="华为" src="/home/picture/20180725181635227.png" /></a></li>
</ul>
                </div>
            </div>
            <div class="b">
                <!--20170222 热销单品 start-->
<!-- 20170222-首页--热销单品-start -->
<div class="home-recommend-goods home-hot-goods">
    <div class="h">
        <h2 class="title change-title">热销单品</h2>
    </div>
    <div class="b clearfix">
        <div class="span-232 fl">
            <ul class="grid-promo-list clearfix">
                    <li class="grid-items grid-items-sm">
                        <a class="thumb" href="https://www.vmall.com/product/10086570096517.html" target="_blank" onclick = "pushHomeHotGoodsAdvertMsg('https://res0.vmallres.com/pimages//frontLocation/content/1289553/1532403751657.jpg','https://www.vmall.com/product/10086570096517.html')">
                            <img data-lazy-src="/home//home/picture/1532403751657.jpg" alt="" />
                        </a>
                    </li>
            </ul>
        </div>
        <div class="span-968 fl">
            <ul class="grid-list clearfix">
                        <!--通过添加current 来实现 hover效果-->
                        <li class="grid-items ">
                            <a class="thumb" href="https://www.vmall.com/product/10086785341226.html" target="_blank" onclick = "pushHomeHotGoodsMsg(this,2,'10086431508342')">
                                <p class="grid-img">
                                        <img data-lazy-src="/home/picture/428_428_1523952379540mp.jpg" alt="荣耀10 GT游戏加速 AIS手持夜景 AI摄影手机 6GB+64GB 幻影蓝 全网通 双卡双待 荣耀10GT"/>
                                </p>
                                <div class="grid-title">荣耀10</div>
                                <p class="grid-desc">限时优惠100 赠豪华配件礼包&nbsp; </p>
                                <p class="grid-price">&yen;2599</p>
                                <p class="grid-tips">
                                        <img data-lazy-src="/home//home/picture/1497575918300.png" alt="荣耀10 GT游戏加速 AIS手持夜景 AI摄影手机 6GB+64GB 幻影蓝 全网通 双卡双待 荣耀10GT"/>
                                </p>
                            </a>
                        </li>
                        <!--通过添加current 来实现 hover效果-->
                        <li class="grid-items ">
                            <a class="thumb" href="/product/10086915330134.html" target="_blank" onclick = "pushHomeHotGoodsMsg(this,3,'10086100716467')">
                                <p class="grid-img">
                                        <img data-lazy-src="/home//home/picture/428_428_1525340794041mp.jpg" alt="HUAWEI P20 6GB+64GB 全网通版（极光色）"/>
                                </p>
                                <div class="grid-title">HUAWEI P20</div>
                                <p class="grid-desc">限量送精美配件&nbsp; </p>
                                <p class="grid-price">&yen;3788</p>
                            </a>
                        </li>
                        <!--通过添加current 来实现 hover效果-->
                        <li class="grid-items ">
                            <a class="thumb" href="https://www.vmall.com/product/570379791.html" target="_blank" onclick = "pushHomeHotGoodsMsg(this,4,'397363249')">
                                <p class="grid-img">
                                        <img data-lazy-src="/home//home/picture/428_428_1511858796676mp.jpg" alt="荣耀V10 全网通标配版 4GB+64GB（魅丽红）"/>
                                </p>
                                <div class="grid-title">荣耀V10</div>
                                <p class="grid-desc">最高直降700元 享多重好礼&nbsp; </p>
                                <p class="grid-price">&yen;1999</p>
                                <p class="grid-tips">
                                        <img data-lazy-src="/home//home/picture/1497575814983.png" alt="荣耀V10 全网通标配版 4GB+64GB（魅丽红）"/>   
                                </p>
                            </a>
                        </li>
                        <!--通过添加current 来实现 hover效果-->
                        <li class="grid-items ">
                            <a class="thumb" href="https://www.vmall.com/product/10086059981846.html" target="_blank" onclick = "pushHomeHotGoodsMsg(this,5,'10086962031830')">
                                <p class="grid-img">
                                        <img data-lazy-src="/home/picture/428_428_1523430506694mp.jpg" alt="HUAWEI Mate RS 保时捷设计 6GB+256GB 全网通版（玄黑）"/>
                                </p>
                                <div class="grid-title">HUAWEI Mate RS 保时捷设计</div>
                                <p class="grid-desc">限量典藏&nbsp; </p>
                                <p class="grid-price">&yen;9999</p>
                            </a>
                        </li>
                        <!--通过添加current 来实现 hover效果-->
                        <li class="grid-items ">
                            <a class="thumb" href="https://www.vmall.com/product/478362844.html" target="_blank" onclick = "pushHomeHotGoodsMsg(this,6,'963367996')">
                                <p class="grid-img">
                                        <img data-lazy-src="/home//home/picture/428_428_1514859154553mp.jpg" alt="荣耀畅玩7X 全网通标配版（魅焰红）"/>
                                </p>
                                <div class="grid-title">荣耀畅玩7X</div>
                                <p class="grid-desc">最高优惠320+高配尊享送耳机&nbsp; </p>
                                <p class="grid-price">&yen;1099</p>
                            </a>
                        </li>
                        <!--通过添加current 来实现 hover效果-->
                        <li class="grid-items ">
                            <a class="thumb" href="https://www.vmall.com/product/357339492.html" target="_blank" onclick = "pushHomeHotGoodsMsg(this,7,'120151168')">
                                <p class="grid-img">
                                        <img data-lazy-src="/home//home/picture/428_428_1509690934839mp.jpg" alt="HUAWEI Mate 10 Pro 6GB+64GB 全网通版（宝石蓝）"/>
                                </p>
                                <div class="grid-title">HUAWEI Mate 10 Pro</div>
                                <p class="grid-desc">限时优惠500元&nbsp; </p>
                                <p class="grid-price">&yen;3999</p>
                            </a>
                        </li>
                        <!--通过添加current 来实现 hover效果-->
                        <li class="grid-items ">
                            <a class="thumb" href="https://www.vmall.com/product/501317311.html" target="_blank" onclick = "pushHomeHotGoodsMsg(this,8,'165093905')">
                                <p class="grid-img">
                                        <img data-lazy-src="/home//home/picture/428_428_1513560677378mp.jpg" alt="荣耀9青春版 全网通标配版（魅海蓝）"/>
                                </p>
                                <div class="grid-title">荣耀9青春版</div>
                                <p class="grid-desc">最高优惠400+高配尊享送耳机&nbsp; </p>
                                <p class="grid-price">&yen;999</p>
                            </a>
                        </li>
                        <!--通过添加current 来实现 hover效果-->
                        <li class="grid-items ">
                            <a class="thumb" href="https://www.vmall.com/product/10086195106339.html" target="_blank" onclick = "pushHomeHotGoodsMsg(this,9,'10086221210400')">
                                <p class="grid-img">
                                        <img data-lazy-src="/home/picture/428_428_1521296102232mp.jpg" alt="华为畅享8 Plus 4GB+128GB 全网通版（金色）"/>
                                </p>
                                <div class="grid-title">华为畅享8 Plus</div>
                                <p class="grid-desc">限时直降200元&nbsp; </p>
                                <p class="grid-price">&yen;1699</p>
                            </a>
                        </li>
            </ul>
        </div>
    </div>
</div>
<!-- 20170222-首页-热销单品-end -->
<script>
    function pushHomeHotGoodsAdvertMsg(adid,url)
    {
        var value = {
            "UID":ec.util.cookie.get("uid"),
            "TID":getPtid(),
            "TIME":getTime(),
            "CONTENT":
            {
            "ADID":adid,
            "URL":url,
            "location":"1", 
            "click":"1"
            }
        };
        ec.code.addAnalytics({hicloud:true});
        _paq.push(["trackLink","300011301", "link", value]);
    }
    
    function pushHomeHotGoodsMsg(obj,location,skuId)
    {
        var row;
        var column;
        if(location<6)
        {
            row = "1";
            column = location;
        }
        else if(location<10)
        {
            row = "2";
            column = location-4;
        }
        var url = obj.href;
        var value = {
            "UID":ec.util.cookie.get("uid"),
            "TID":getPtid(),
            "TIME":getTime(),
            "CONTENT":
            {
            "SKUID":skuId ,
            "URL":url,
            "location":location, 
            "row":row,
            "column ":""+column,
            "click":"1"
            }
        };
        ec.code.addAnalytics({hicloud:true});
        _paq.push(["trackLink","300011401", "link", value]);
    }
</script>               <!--20170222 热销单品 end-->
            </div>
            <div class="b">
                <!--20170223 精品推荐 start-->
<!-- 20170223-首页-精品推荐-start -->
<div class="home-recommend-goods">
    <div class="h">
        <h2 class="title">精品推荐</h2>
    </div>
    <div class="b">
        <div id="goodsRecommend-recommend" class="goods-rolling swiper-container relative">
            <ul id="" class="grid-list swiper-wrapper clearfix">
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="https://www.vmall.com/product/10086572258093.html" target="_blank" onclick="pushGoodsRecommendMsg('10086972979696',this,'1')">
                            <p class="grid-img">
                                    <img data-lazy-src="/hoem//home/picture/428_428_1530684880869mp.jpg" alt="【新品首发】华为手环 B5 运动版（韵律黑）"/>
                            </p>
                            <div class="grid-title">华为手环 B5</div>
                            <p class="grid-desc">享3期分期免息&nbsp; </p>
                            <p class="grid-price">&yen;999</p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="https://www.vmall.com/product/993405255.html" target="_blank" onclick="pushGoodsRecommendMsg('419942774',this,'2')">
                            <p class="grid-img">
                                    <img data-lazy-src="/hoem//home/picture/428_428_1496627594147mp.jpg" alt="荣耀手环3 标准版（碳晶黑）"/>
                            </p>
                            <div class="grid-title">荣耀手环3</div>
                            <p class="grid-desc">最高直降30元&nbsp; </p>
                            <p class="grid-price">&yen;139</p>
                            <p class="grid-tips">
                                    <img data-lazy-src="/hoem//home/picture/1497575814983.png" alt="荣耀手环3 标准版（碳晶黑）"/>
                            </p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="https://www.vmall.com/product/10086641545699.html" target="_blank" onclick="pushGoodsRecommendMsg('10086693833946',this,'3')">
                            <p class="grid-img">
                                    <img data-lazy-src="/hoem//home/picture/428_428_1523156485899mp.jpg" alt="HUAWEI FreeBuds 无线耳机（碳晶黑）"/>
                            </p>
                            <div class="grid-title">HUAWEI FreeBuds无线耳机</div>
                            <p class="grid-desc">新品热销赠好礼&nbsp; </p>
                            <p class="grid-price">&yen;799</p>
                            <p class="grid-tips">
                                    <img data-lazy-src="/hoem//home/picture/1497576023361.png" alt="HUAWEI FreeBuds 无线耳机（碳晶黑）"/>    
                            </p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="https://www.vmall.com/product/10086350349834.html" target="_blank" onclick="pushGoodsRecommendMsg('10086734411761',this,'4')">
                            <p class="grid-img">
                                    <img data-lazy-src="/hoem//home/picture/428_428_1524125610580mp.jpg" alt="荣耀MagicBook 14英寸轻薄笔记本电脑 i5-8250U 8GB 256GB 独显（冰河银）"/>
                            </p>
                            <div class="grid-title">荣耀MagicBook</div>
                            <p class="grid-desc">最高降100 加赠背包&nbsp; </p>
                            <p class="grid-price">&yen;4899</p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="https://www.vmall.com/product/312318362.html" target="_blank" onclick="pushGoodsRecommendMsg('604808235',this,'5')">
                            <p class="grid-img">
                                    <img data-lazy-src="/hoem//home/picture/428_428_1496386580348mp.jpg" alt="华为平板 M3 青春版 10.1英寸 3GB+32GB WiFi版（苍穹灰）"/>
                            </p>
                            <div class="grid-title">华为平板 M3 青春版 10.1英寸</div>
                            <p class="grid-desc">最高直降300&nbsp; </p>
                            <p class="grid-price">&yen;1699</p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="https://www.vmall.com/product/194128141.html" target="_blank" onclick="pushGoodsRecommendMsg('553811697',this,'6')">
                            <p class="grid-img">
                                    <img data-lazy-src="/hoem//home/picture/428_428_1518397678332mp.jpg" alt="荣耀智能体脂秤（白色）"/>
                            </p>
                            <div class="grid-title">荣耀智能体脂秤</div>
                            <p class="grid-desc">直降40元仅需129&nbsp; </p>
                            <p class="grid-price">&yen;129</p>
                            <p class="grid-tips">
                                    <img data-lazy-src="/hoem//home/picture/1497575918300.png" alt="荣耀智能体脂秤（白色）"/>  
                            </p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="/product/114230598.html" target="_blank" onclick="pushGoodsRecommendMsg('380594861',this,'7')">
                            <p class="grid-img">
                                    <img data-lazy-src="/hoem//home/picture/428_428_1508417706375mp.jpg" alt="华为经典耳机（USB Type-c版）"/>
                            </p>
                            <div class="grid-title">华为经典耳机</div>
                            <p class="grid-desc">限时优惠10元&nbsp; </p>
                            <p class="grid-price">&yen;89</p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="https://www.vmall.com/product/15662504.html" target="_blank" onclick="pushGoodsRecommendMsg('10086382647472',this,'8')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/428_428_1528702031369mp.jpg" alt="华为9V2A车载充电器"/>
                            </p>
                            <div class="grid-title">华为9V2A车载充电器</div>
                            <p class="grid-desc">&nbsp; </p>
                            <p class="grid-price">&yen;69</p>
                            <p class="grid-tips">
                                    <img data-lazy-src="/home//home/picture/1497575918300.png" alt="华为9V2A车载充电器"/>  
                            </p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="https://www.vmall.com/product/10086883263315.html" target="_blank" onclick="pushGoodsRecommendMsg('10086555041694',this,'9')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/428_428_1531100299627mp.jpg" alt="荣耀畅玩7C 全网通标配版 3GB+32GB（极光蓝）"/>
                            </p>
                            <div class="grid-title">荣耀畅玩7C</div>
                            <p class="grid-desc">最高优惠100+送耳机&nbsp; </p>
                            <p class="grid-price">&yen;899</p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="https://www.vmall.com/product/936223974.html" target="_blank" onclick="pushGoodsRecommendMsg('534967719',this,'10')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/428_428_1512699241768mp.jpg" alt="华为智能体脂秤"/>
                            </p>
                            <div class="grid-title">华为智能体脂秤</div>
                            <p class="grid-desc">健康减脂必备&nbsp; </p>
                            <p class="grid-price">&yen;169</p>
                            <p class="grid-tips">
                                    <img data-lazy-src="/home//home/picture/1497575814983.png" alt="华为智能体脂秤"/>  
                            </p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="https://www.vmall.com/product/369652507.html" target="_blank" onclick="pushGoodsRecommendMsg('532696479',this,'11')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/428_428_1495598460509mp.jpg" alt="荣耀畅玩手环 A2（魔法黑）"/>
                            </p>
                            <div class="grid-title">荣耀畅玩手环 A2</div>
                            <p class="grid-desc">OLED大屏，防尘防水&nbsp; </p>
                            <p class="grid-price">&yen;129</p>
                            <p class="grid-tips">
                                    <img data-lazy-src="/home//home/picture/1497576073762.png" alt="荣耀畅玩手环 A2（魔法黑）"/>   
                            </p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="/product/19037861.html" target="_blank" onclick="pushGoodsRecommendMsg('524443770',this,'12')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/428_428_1499659052133mp.jpg" alt="华为10000 移动电源 SuperCharge 4.5V5A 快充版（银色）"/>
                            </p>
                            <div class="grid-title">华为10000移动电源</div>
                            <p class="grid-desc">银色限时优惠30元&nbsp; </p>
                            <p class="grid-price">&yen;199</p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="https://www.vmall.com/product/516255415.html" target="_blank" onclick="pushGoodsRecommendMsg('553104015',this,'13')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/428_428_1506671611280mp.jpg" alt="荣耀Waterplay 防水影音平板 3GB+32GB WiFi版（皓月银）"/>
                            </p>
                            <div class="grid-title">荣耀WaterPlay</div>
                            <p class="grid-desc">最高直降100&nbsp; </p>
                            <p class="grid-price">&yen;1599</p>
                            <p class="grid-tips">
                                    <img data-lazy-src="/home//home/picture/1497575918300.png" alt="荣耀Waterplay 防水影音平板 3GB+32GB WiFi版（皓月银）"/>   
                            </p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="/product/10086821090867.html" target="_blank" onclick="pushGoodsRecommendMsg('10086510169963',this,'14')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/428_428_1521457453383mp.jpg" alt="华为补光灯自拍杆（黑色）"/>
                            </p>
                            <div class="grid-title">华为补光灯自拍杆</div>
                            <p class="grid-desc">限时优惠10元&nbsp; </p>
                            <p class="grid-price">&yen;129</p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="https://www.vmall.com/product/405225095.html" target="_blank" onclick="pushGoodsRecommendMsg('887012722',this,'15')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/428_428_1494904534464mp.jpg" alt="荣耀畅玩平板2 9.6英寸 WiFi版（苍穹灰）"/>
                            </p>
                            <div class="grid-title">荣耀畅玩平板2 9.6英寸</div>
                            <p class="grid-desc">最高直降100元&nbsp; </p>
                            <p class="grid-price">&yen;969</p>
                            <p class="grid-tips">
                                    <img data-lazy-src="/home//home/picture/1497575918300.png" alt="荣耀畅玩平板2 9.6英寸 WiFi版（苍穹灰）"/> 
                            </p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="/product/10086504211371.html" target="_blank" onclick="pushGoodsRecommendMsg('10086611913317',this,'16')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/428_428_1520390104691mp.jpg" alt="华为移动电源20000mAh 标准版"/>
                            </p>
                            <div class="grid-title">华为移动电源20000mAh</div>
                            <p class="grid-desc">限时优惠20元&nbsp; </p>
                            <p class="grid-price">&yen;179</p>
                            <p class="grid-tips">
                                    <img data-lazy-src="/home//home/picture/1497576023361.png" alt="华为移动电源20000mAh 标准版"/>   
                            </p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="https://www.vmall.com/product/875753311.html" target="_blank" onclick="pushGoodsRecommendMsg('189161731',this,'17')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/428_428_1489548822739mp.jpg" alt="荣耀xSport 运动蓝牙耳机（魅焰红）"/>
                            </p>
                            <div class="grid-title">荣耀xSport 运动蓝牙耳机</div>
                            <p class="grid-desc">11h长续航 狂甩不掉&nbsp; </p>
                            <p class="grid-price">&yen;229</p>
                            <p class="grid-tips">
                                    <img data-lazy-src="/home//home/picture/1497575918300.png" alt="荣耀xSport 运动蓝牙耳机（魅焰红）"/> 
                            </p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="/product/706470980.html" target="_blank" onclick="pushGoodsRecommendMsg('354944296',this,'18')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/428_428_1493028283606mp.jpg" alt="华为10000mAh 移动电源 9V2A 快充版（玫瑰金）"/>
                            </p>
                            <div class="grid-title">华为10000mAh移动电源</div>
                            <p class="grid-desc">限时优惠10元&nbsp; </p>
                            <p class="grid-price">&yen;149</p>
                            <p class="grid-tips">
                                    <img data-lazy-src="/home//home/picture/1497575814983.png" alt="华为10000mAh 移动电源 9V2A 快充版（玫瑰金）"/>    
                            </p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="https://www.vmall.com/product/13278818.html" target="_blank" onclick="pushGoodsRecommendMsg('306666179',this,'19')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/428_428_1513061872226mp.jpg" alt="荣耀平板2 4GB+64GB WiFi版（珍珠白）"/>
                            </p>
                            <div class="grid-title">荣耀平板2</div>
                            <p class="grid-desc">限时直降100元&nbsp; </p>
                            <p class="grid-price">&yen;1399</p>
                            <p class="grid-tips">
                                    <img data-lazy-src="/home//home/picture/1497575964613.png" alt="荣耀平板2 4GB+64GB WiFi版（珍珠白）"/>    
                            </p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="https://www.vmall.com/product/611513952.html" target="_blank" onclick="pushGoodsRecommendMsg('480239066',this,'20')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/428_428_1507545954611mp.jpg" alt="荣耀路由2（白色）"/>
                            </p>
                            <div class="grid-title">荣耀路由2</div>
                            <p class="grid-desc">限时直降20元&nbsp; </p>
                            <p class="grid-price">&yen;179</p>
                            <p class="grid-tips">
                                    <img data-lazy-src="/home//home/picture/1497575918300.png" alt="荣耀路由2（白色）"/>    
                            </p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="/product/270976970.html" target="_blank" onclick="pushGoodsRecommendMsg('976288056',this,'21')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/428_428_1507769117117mp.jpg" alt="HUAWEI WATCH 2 Pro华为新款智能手表 4G版（钛银灰）"/>
                            </p>
                            <div class="grid-title">HUAWEI WATCH 2 Pro</div>
                            <p class="grid-desc">独立通话(eSIM技术)&nbsp; </p>
                            <p class="grid-price">&yen;2588</p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="/product/129656917.html" target="_blank" onclick="pushGoodsRecommendMsg('961348112',this,'22')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/428_428_1532916215842mp.jpg" alt="华为路由器WS5200（白色）"/>
                            </p>
                            <div class="grid-title">华为路由器WS5200</div>
                            <p class="grid-desc">支持5G信号智能优先选择&nbsp; </p>
                            <p class="grid-price">&yen;269</p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="/product/121088789.html" target="_blank" onclick="pushGoodsRecommendMsg('8150711',this,'23')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/428_428_1506139200867mp.jpg" alt="华为手环B3 青春版（黑色）"/>
                            </p>
                            <div class="grid-title">华为手环B3 青春版</div>
                            <p class="grid-desc">蓝牙通话 活动记录 智能提醒&nbsp; </p>
                            <p class="grid-price">&yen;499</p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="/product/658947392.html" target="_blank" onclick="pushGoodsRecommendMsg('564446217',this,'24')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/1496236124208.png" alt="HUAWEI WATCH 2" />
                            </p>
                            <div class="grid-title">HUAWEI WATCH 2</div>
                            <p class="grid-desc">华为第二代智能运动手表&nbsp; </p>
                            <p class="grid-price">&yen;1688</p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="/product/241920871.html" target="_blank" onclick="pushGoodsRecommendMsg('58267447',this,'25')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/1496236247761.png" alt="华为平板 M3" />
                            </p>
                            <div class="grid-title">华为平板 M3</div>
                            <p class="grid-desc">2K高清屏幕 麒麟950&nbsp; </p>
                            <p class="grid-price">&yen;1888</p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="/product/10086029405648.html" target="_blank" onclick="pushGoodsRecommendMsg('10086943852365',this,'26')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/428_428_1523947314310mp.jpg" alt="荣耀多口充电器SuperCharge快充版（白色）"/>
                            </p>
                            <div class="grid-title">荣耀多口充电器SuperCharge快充版</div>
                            <p class="grid-desc">赠价值29元数据线&nbsp; </p>
                            <p class="grid-price">&yen;149</p>
                            <p class="grid-tips">
                                    <img data-lazy-src="/home//home/picture/1497575918300.png" alt="荣耀多口充电器SuperCharge快充版（白色）"/>    
                            </p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="https://www.vmall.com/product/190355030.html" target="_blank" onclick="pushGoodsRecommendMsg('10904718',this,'27')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/1493696851151.png" alt="华为路由器 A1 畅享版" />
                            </p>
                            <div class="grid-title">华为路由器 A1 畅享版</div>
                            <p class="grid-desc">优选5G信号 WiFi自动加速&nbsp; </p>
                            <p class="grid-price">&yen;169</p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="https://www.vmall.com/product/478362844.html" target="_blank" onclick="pushGoodsRecommendMsg('98670947',this,'28')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/428_428_1514860379284mp.jpg" alt="荣耀畅玩7X 全网通标配版（极光蓝）"/>
                            </p>
                            <div class="grid-title">荣耀畅玩7X</div>
                            <p class="grid-desc">最高优惠320+高配尊享送耳机&nbsp; </p>
                            <p class="grid-price">&yen;1099</p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="https://www.vmall.com/product/10086070385182.html" target="_blank" onclick="pushGoodsRecommendMsg('10086232227906',this,'29')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/428_428_1522135590524mp.jpg" alt="荣耀畅玩7A 全网通标配版 2GB+32GB（极光蓝）"/>
                            </p>
                            <div class="grid-title">荣耀畅玩7A</div>
                            <p class="grid-desc">高配版减100+送耳机&nbsp; </p>
                            <p class="grid-price">&yen;699</p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="https://www.vmall.com/product/10086733534868.html" target="_blank" onclick="pushGoodsRecommendMsg('10086212501655',this,'30')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/428_428_1521287027365mp.jpg" alt="华为畅享8 3GB+32GB 全网通标配版（粉色）"/>
                            </p>
                            <div class="grid-title">华为畅享8</div>
                            <p class="grid-desc">直降200元！&nbsp; </p>
                            <p class="grid-price">&yen;1099</p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="/product/10086030735533.html" target="_blank" onclick="pushGoodsRecommendMsg('10086679949457',this,'31')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/428_428_1531378553233mp.jpg" alt="华为平板 M5 8.4英寸 4GB+32GB WiFi版（香槟金）"/>
                            </p>
                            <div class="grid-title">华为平板 M5 8.4英寸</div>
                            <p class="grid-desc">8.4英寸2K屏开启高清视界&nbsp; </p>
                            <p class="grid-price">&yen;2088</p>
                        </a>
                    </li>
                    <!--通过添加current 来实现 hover效果-->
                    <li class="grid-items swiper-slide">
                        <a class="thumb" href="https://www.vmall.com/product/21046116.html" target="_blank" onclick="pushGoodsRecommendMsg('777872533',this,'32')">
                            <p class="grid-img">
                                    <img data-lazy-src="/home//home/picture/428_428_1513592270915mp.jpg" alt="【新品】（华为）HUAWEI MateBook D（2018版）15.6英寸轻薄笔记本电脑 曜石黑+I5/8GB/256GB"/>
                            </p>
                            <div class="grid-title">HUAWEI MateBook D（2018版）</div>
                            <p class="grid-desc">15.6英寸大屏&nbsp; </p>
                            <p class="grid-price">&yen;5188</p>
                        </a>
                    </li>
            </ul>
            <div class="grid-btn swiper-button-prev btn-prev disabled"><span></span></div>
            <div class="grid-btn swiper-button-next btn-next"><span></span></div>
            <input type="hide" value = "10086972979696,419942774,10086693833946,10086734411761,604808235,553811697,380594861,10086382647472,10086555041694,534967719,532696479,524443770,553104015,10086510169963,887012722,10086611913317,189161731,354944296,306666179,480239066,976288056,961348112,8150711,564446217,58267447,10086943852365,10904718,98670947,10086232227906,10086212501655,10086679949457,777872533," id = "recommendSkuIds"/>
        </div>
    </div>
</div>
<!-- 20170223-首页-精品推荐-end -->
<script>
    function pushGoodsRecommendMsg(skuid,obj,location)
    {
        var value = {
            "UID":ec.util.cookie.get("uid"),
            "TID":getPtid(),
            "TIME":getTime(),
            "CONTENT":
            {
            "SKUID":skuid ,
            "URL":obj.href,  
            "location":location,
            "click":"1"
            }
    };
    ec.code.addAnalytics({hicloud:true});
    _paq.push(["trackLink","300011501", "link", value]);
    }
</script>
                <!--20170223 精品推荐 end-->
            </div>
            <div></div>
        </div>
    </div>
    <div class="hr-10"></div>
</div>
<!-- 2017-02-15-菜单栏-end -->

<!-- 20160812 首页轮播图下方 end -->
<div class="channel-floor">
    <div class="layout">
        <!-- 2017-02-15-banner-1200*110-start -->
        <div class="home-banner">
            <!-- 2017-02-15-banner-图片轮换-start -->
            <div class="home-banner-slideshow">
                <!-- 20130903-ad-图片轮换-start -->
<div class="banner-slideshow">
    <div id="m-banner" class="ec-slider">
        <ul class="ec-slider-list">
                            <li class="ec-slider-item" style="background:;"><div class="ec-slider-item-img"><a href="https://sale.vmall.com/hwcompany.html" onclick="_paq.push([&#39;trackLink&#39;,&#39;首页中间通栏广告第1位&#39;, &#39;link&#39;, &#39;&#39;]);ec.code.addAnalytics({hicloud:true});" target="_blank"><img src="/home/picture/20180704170138915.jpg" /></a></div></li>
                <li class="ec-slider-item" style="background:;"><div class="ec-slider-item-img"><a href="https://www.vmall.com/recycle" onclick="_paq.push([&#39;trackLink&#39;,&#39;首页中间通栏广告第2位&#39;, &#39;link&#39;, &#39;&#39;]);ec.code.addAnalytics({hicloud:true});" target="_blank"><img src="/home/picture/20180724204150636.png" /></a></div></li>
                <li class="ec-slider-item" style="background:;"><div class="ec-slider-item-img"><a href="https://sale.vmall.com/honorhome.html" onclick="_paq.push([&#39;trackLink&#39;,&#39;首页中间通栏广告第3位&#39;, &#39;link&#39;, &#39;&#39;]);ec.code.addAnalytics({hicloud:true});" target="_blank"><img src="/home/picture/20180718084432792.jpg" /></a></div></li>
                <li class="ec-slider-item" style="background:;"><div class="ec-slider-item-img"><a href="https://sale.vmall.com/honorsmart.html" onclick="_paq.push([&#39;trackLink&#39;,&#39;首页中间通栏广告第4位&#39;, &#39;link&#39;, &#39;&#39;]);ec.code.addAnalytics({hicloud:true});" target="_blank"><img src="/home/picture/2018062214341386.jpg" /></a></div></li>
                <li class="ec-slider-item" style="background:;"><div class="ec-slider-item-img"><a href="https://sale.vmall.com/hwpj.html" onclick="_paq.push([&#39;trackLink&#39;,&#39;首页中间通栏广告第5位&#39;, &#39;link&#39;, &#39;&#39;]);ec.code.addAnalytics({hicloud:true});" target="_blank"><img src="/home/picture/2018061215194493.png" /></a></div></li>
                <li class="ec-slider-item" style="background:;"><div class="ec-slider-item-img"><a href="https://sale.vmall.com/vmallsmarthome.html" onclick="_paq.push([&#39;trackLink&#39;,&#39;首页中间通栏广告第6位&#39;, &#39;link&#39;, &#39;&#39;]);ec.code.addAnalytics({hicloud:true});" target="_blank"><img src="/home/picture/20180530170758589.jpg" /></a></div></li>
        </ul>
    </div>
    <script>
        ec.load("ec.slider", {
            loadType : "lazy",
            callback : function() { 
                $("#m-banner").slider({
                    width: 1200, //　必须
                    height: 120, //　必须
                    style : 1, //　1显示分页，2只显示左右箭头,3两者都显示
                    pause : 5000,   //间隔时间
                    auto : true
                });
            }
        });
        
    </script>
</div>
            </div><!-- 2017-02-15-banner-图片轮换-end -->
        </div><!-- 2017-02-15-banner-1200*110-end -->
    </div>
</div>

<div class="event-float-layout">
    <!--添加 fixed  position: fixed !important;top: 20px;z-index: 500;-->
    <div class="event-float">
        <div>
            <ul class="hover-list">
            </ul>
        </div>
    </div>
</div>


<!-- 2017-05-12-HOME right side navigation -start -->       
<!-- 2017-05-12-HOME right side navigation -end -->


<!-- 2017-02-15-HOME GOOGLIST-start -->
<div class="home-channel-container relative">
    
    
        <!-- 初始值 -->
        <!-- 分列式 march-past 计算显示商品数量-->
            <!-- 商品是否为4的倍数 -->
            <!-- 优先填充第一行数据 -->
                <!-- 排除非4倍数的商品 -->
        <!-- 非对称式 asym_array -->

        <div class="layout" id="lc_533191">
            <div class="home-channel-floor">
                <div class="h">
                    <h2 class="channel-title fl">手机</h2>
                    <ul class="channel-nav fl">
                            <li><a href="/list-75" target="_blank" onclick="pushFoolChildrenMsg('1','手机','荣耀','/list-75')">荣耀</a></li>
                            <li><a href="/list-285" target="_blank" onclick="pushFoolChildrenMsg('1','手机','HUAWEI P系列','/list-285')">HUAWEI P系列</a></li>
                            <li><a href="/list-77" target="_blank" onclick="pushFoolChildrenMsg('1','手机','荣耀畅玩系列','/list-77')">荣耀畅玩系列</a></li>
                            <li><a href="/list-76" target="_blank" onclick="pushFoolChildrenMsg('1','手机','HUAWEI Mate系列','/list-76')">HUAWEI Mate系列</a></li>
                            <li><a href="/list-277" target="_blank" onclick="pushFoolChildrenMsg('1','手机','HUAWEI nova系列','/list-277')">HUAWEI nova系列</a></li>
                            <li><a href="/list-81" target="_blank" onclick="pushFoolChildrenMsg('1','手机','HUAWEI 麦芒系列','/list-81')">HUAWEI 麦芒系列</a></li>
                            <li><a href="/list-275" target="_blank" onclick="pushFoolChildrenMsg('1','手机','华为畅享系列','/list-275')">华为畅享系列</a></li>
                            <li><a href="/list-38" target="_blank" onclick="pushFoolChildrenMsg('1','手机','移动4G+专区','/list-38')">移动4G+专区</a></li>
                    </ul>
                    <div class="channel-more fr"><span></span><span></span><span></span>
                        <a href="/list-36" target="_blank" onclick="pushFoolMsg('1','手机','/list-36')">更多></a>
                    </div>
                </div>
                <div class="b">
                    <div class="goods-list">
                        <ul class="grid-list clearfix">
                                        <li class="grid-items grid-items-md ">
                                            <a class="thumb" href="https://www.vmall.com/product/10086094364044.html" target="_blank" onclick="pushFoolAdvertMsg('1','手机','https://res0.vmallres.com/pimages//frontLocation/content/1268817/1531452485136.jpg','1531452485136.jpg','https://www.vmall.com/product/10086094364044.html')">
                                                <img data-lazy-src="/home/picture/1531452485136.jpg" alt="" />
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/396602535.html" target="_blank" onclick = "pushFoolGoodsMsg(this,2,'1','手机','616330979','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1507794825491mp.jpg" alt="HUAWEI Mate 10 4GB+64GB 全网通版（亮黑色）"/>
                                                </p>
                                                <div class="grid-title">HUAWEI Mate 10</div>
                                                <p class="grid-desc">限时优惠200元&nbsp;</p>
                                                <p class="grid-price">&yen;3399</p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/10086883263315.html" target="_blank" onclick = "pushFoolGoodsMsg(this,3,'1','手机','10086555041694','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1531100299627mp.jpg" alt="荣耀畅玩7C 全网通标配版 3GB+32GB（极光蓝）"/>
                                                </p>
                                                <div class="grid-title">荣耀畅玩7C</div>
                                                <p class="grid-desc">最高优惠100 送耳机&nbsp;</p>
                                                <p class="grid-price">&yen;899</p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/135859985.html" target="_blank" onclick = "pushFoolGoodsMsg(this,4,'1','手机','776034951','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1530668345992mp.jpg" alt="HUAWEI nova 2s 6GB+64GB 全网通版（樱粉金）"/>
                                                </p>
                                                <div class="grid-title">HUAWEI nova 2s</div>
                                                <p class="grid-desc">赠精美配件&nbsp;</p>
                                                <p class="grid-price">&yen;2599</p>
                                                <p class="grid-tips">
                                                        <img data-lazy-src="/home/picture/1497576073762.png" alt="HUAWEI nova 2s 6GB+64GB 全网通版（樱粉金）"/>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/10086070385182.html" target="_blank" onclick = "pushFoolGoodsMsg(this,5,'1','手机','10086765914411','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1522134758889mp.jpg" alt="荣耀畅玩7A 全网通标配版 2GB+32GB（幻夜黑）"/>
                                                </p>
                                                <div class="grid-title">荣耀畅玩7A</div>
                                                <p class="grid-desc">优惠100 高配送耳机&nbsp;</p>
                                                <p class="grid-price">&yen;699</p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/10086733534868.html" target="_blank" onclick = "pushFoolGoodsMsg(this,6,'1','手机','10086212501655','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1521287027365mp.jpg" alt="华为畅享8 3GB+32GB 全网通标配版（粉色）"/>
                                                </p>
                                                <div class="grid-title">华为畅享8</div>
                                                <p class="grid-desc">直降200元！&nbsp;</p>
                                                <p class="grid-price">&yen;1099</p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/337476941.html" target="_blank" onclick = "pushFoolGoodsMsg(this,7,'1','手机','44652558','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1504174265912mp.jpg" alt="荣耀畅玩6 全网通标配版（白色）"/>
                                                </p>
                                                <div class="grid-title">荣耀畅玩6</div>
                                                <p class="grid-desc">荣耀高性价比手机&nbsp;</p>
                                                <p class="grid-price">&yen;599</p>
                                                <p class="grid-tips">
                                                        <img data-lazy-src="/home/picture/1497575814983.png" alt="荣耀畅玩6 全网通标配版（白色）"/>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="/product/10086158977116.html" target="_blank" onclick = "pushFoolGoodsMsg(this,8,'1','手机','10086138654132','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1526973272209mp.jpg" alt="华为畅享 8e 青春 2GB+32GB 全网通版（蓝色）"/>
                                                </p>
                                                <div class="grid-title">华为畅享 8e 青春</div>
                                                <p class="grid-desc">赠配件礼包&nbsp;</p>
                                                <p class="grid-price">&yen;799</p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/10086157327552.html" target="_blank" onclick = "pushFoolGoodsMsg(this,9,'1','手机','10086478125358','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1521789402333mp.jpg" alt="华为畅享8e 3GB+32GB 全网通版（金色）"/>
                                                </p>
                                                <div class="grid-title">华为畅享8e</div>
                                                <p class="grid-desc">赠精美礼品&nbsp;</p>
                                                <p class="grid-price">&yen;999</p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/315957963.html" target="_blank" onclick = "pushFoolGoodsMsg(this,10,'1','手机','28580224','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1505273258208mp.jpg" alt="HUAWEI 麦芒6 4GB+64GB 全网通版（流光金）"/>
                                                </p>
                                                <div class="grid-title">麦芒6</div>
                                                <p class="grid-desc">5.9英寸全面屏&nbsp;</p>
                                                <p class="grid-price">&yen;2199</p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/922640972.html#913558219" target="_blank" onclick = "pushFoolGoodsMsg(this,11,'1','手机','913558219','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1496990939106mp.jpg" alt="荣耀9 全网通标配版 4GB+64GB（魅海蓝）"/>
                                                </p>
                                                <div class="grid-title">荣耀9</div>
                                                <p class="grid-desc">最高优惠400元&nbsp;</p>
                                                <p class="grid-price">&yen;1899</p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/173840389.html" target="_blank" onclick = "pushFoolGoodsMsg(this,12,'1','手机','81139976','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1509692219632mp.jpg" alt="HUAWEI Mate 10 保时捷设计 6GB+256GB 全网通版（钻石黑）"/>
                                                </p>
                                                <div class="grid-title">HUAWEI Mate 10 保时捷设计</div>
                                                <p class="grid-desc">赠豪华礼包+12期免息&nbsp;</p>
                                                <p class="grid-price">&yen;8999</p>
                                                <p class="grid-tips">
                                                        <img data-lazy-src="/home/picture/1497575900592.png" alt="HUAWEI Mate 10 保时捷设计 6GB+256GB 全网通版（钻石黑）"/>
                                                </p>
                                            </a>
                                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- 初始值 -->
        <!-- 分列式 march-past 计算显示商品数量-->
            <!-- 商品是否为4的倍数 -->
            <!-- 优先填充第一行数据 -->
        <!-- 非对称式 asym_array -->

        <div class="layout" id="lc_533199">
            <div class="home-channel-floor">
                <div class="h">
                    <h2 class="channel-title fl">笔记本电脑</h2>
                    <ul class="channel-nav fl">
                            <li><a href="/list-41" target="_blank" onclick="pushFoolChildrenMsg('2','笔记本电脑','平板电脑','/list-41')">平板电脑</a></li>
                            <li><a href="/list-42" target="_blank" onclick="pushFoolChildrenMsg('2','笔记本电脑','笔记本电脑','/list-42')">笔记本电脑</a></li>
                            <li><a href="/list-317" target="_blank" onclick="pushFoolChildrenMsg('2','笔记本电脑','笔记本配件','/list-317')">笔记本配件</a></li>
                    </ul>
                    <div class="channel-more fr"><span></span><span></span><span></span>
                        <a href="/list-40" target="_blank" onclick="pushFoolMsg('2','笔记本电脑','/list-40')">更多></a>
                    </div>
                </div>
                <div class="b">
                    <div class="goods-list">
                        <ul class="grid-list clearfix">
                                        <li class="grid-items grid-items-md ">
                                            <a class="thumb" href="https://www.vmall.com/product/10086350349834.html" target="_blank" onclick="pushFoolAdvertMsg('2','笔记本电脑','https://res0.vmallres.com/pimages//frontLocation/content/1947317/1531702366389.png','1531702366389.png','https://www.vmall.com/product/10086350349834.html')">
                                                <img data-lazy-src="/home/picture/1531702366389.png" alt="" />
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="/product/10086000689735.html" target="_blank" onclick = "pushFoolGoodsMsg(this,2,'2','笔记本电脑','10086488837838','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1523525018367mp.jpg" alt="（华为）HUAWEI MateBook X Pro 13.9英寸笔记本电脑 深空灰 i5 8GB 256GB 独显"/>
                                                </p>
                                                <div class="grid-title">HUAWEI MateBook X Pro</div>
                                                <p class="grid-desc">13.9英寸笔记本电脑&nbsp;</p>
                                                <p class="grid-price">&yen;8688</p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/10086786653860.html" target="_blank" onclick = "pushFoolGoodsMsg(this,3,'2','笔记本电脑','10086953522941','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1527144296463mp.jpg" alt="荣耀MagicBook 锐龙版 14英寸轻薄笔记本电脑 Ryzen R5-2500U（冰河银）"/>
                                                </p>
                                                <div class="grid-title">荣耀MagicBook 锐龙版</div>
                                                <p class="grid-desc">限时直降100元&nbsp;</p>
                                                <p class="grid-price">&yen;3899</p>
                                                <p class="grid-tips">
                                                        <img data-lazy-src="/home/picture/1497576023361.png" alt="荣耀MagicBook 锐龙版 14英寸轻薄笔记本电脑 Ryzen R5-2500U（冰河银）"/>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/21046116.html" target="_blank" onclick = "pushFoolGoodsMsg(this,4,'2','笔记本电脑','648692702','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1513571794593mp.jpg" alt="【新品】（华为）HUAWEI MateBook D（2018版）15.6英寸轻薄笔记本电脑 皓月银+I5/8GB/256GB"/>
                                                </p>
                                                <div class="grid-title">HUAWEI MateBook D（2018版）</div>
                                                <p class="grid-desc">15.6英寸笔记本电脑&nbsp;</p>
                                                <p class="grid-price">&yen;5188</p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="/product/417236260.html" target="_blank" onclick = "pushFoolGoodsMsg(this,5,'2','笔记本电脑','227874837','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1495008740731mp.jpg" alt="（华为）HUAWEI MateBook X 13英寸轻薄笔记本电脑 流光金 （I5/4GB/256GB）"/>
                                                </p>
                                                <div class="grid-title">HUAWEI MateBook X</div>
                                                <p class="grid-desc">尊享6期分期免息&nbsp;</p>
                                                <p class="grid-price">&yen;6188</p>
                                                <p class="grid-tips">
                                                        <img data-lazy-src="/home/picture/1497575900592.png" alt="（华为）HUAWEI MateBook X 13英寸轻薄笔记本电脑 流光金 （I5/4GB/256GB）"/>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="/product/889979598.html" target="_blank" onclick = "pushFoolGoodsMsg(this,6,'2','笔记本电脑','530206332','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1495007794253mp.jpg" alt="（华为）HUAWEI MateBook E 12英寸时尚二合一笔记本电脑"/>
                                                </p>
                                                <div class="grid-title">HUAWEI MateBook E</div>
                                                <p class="grid-desc">时尚二合一笔记本电脑&nbsp;</p>
                                                <p class="grid-price">&yen;4988</p>
                                                <p class="grid-tips">
                                                        <img data-lazy-src="/home/picture/1497575900592.png" alt="（华为）HUAWEI MateBook E 12英寸时尚二合一笔记本电脑"/>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/10086350349834.html" target="_blank" onclick = "pushFoolGoodsMsg(this,7,'2','笔记本电脑','10086429894528','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1525665745494mp.jpg" alt="荣耀MagicBook 14英寸轻薄笔记本电脑 i5-8250U 8GB 256GB 独显（星云紫）"/>
                                                </p>
                                                <div class="grid-title">荣耀MagicBook 星云紫</div>
                                                <p class="grid-desc">高颜值时尚轻薄本&nbsp;</p>
                                                <p class="grid-price">&yen;4988</p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/21046116.html" target="_blank" onclick = "pushFoolGoodsMsg(this,8,'2','笔记本电脑','262886379','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1513571901868mp.jpg" alt="【新品】（华为）HUAWEI MateBook D（2018版）15.6英寸轻薄笔记本电脑 皓月银+I7/8GB/128GB/1TB"/>
                                                </p>
                                                <div class="grid-title">HUAWEI MateBook D（2018版）</div>
                                                <p class="grid-desc">杜比全景声音响系统&nbsp;</p>
                                                <p class="grid-price">&yen;6188</p>
                                            </a>
                                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- 初始值 -->
        <!-- 分列式 march-past 计算显示商品数量-->
            <!-- 商品是否为4的倍数 -->
            <!-- 优先填充第一行数据 -->
        <!-- 非对称式 asym_array -->

        <div class="layout" id="lc_533201">
            <div class="home-channel-floor">
                <div class="h">
                    <h2 class="channel-title fl">精品平板</h2>
                    <ul class="channel-nav fl">
                            <li><a href="/list-41" target="_blank" onclick="pushFoolChildrenMsg('3','精品平板','平板电脑','/list-41')">平板电脑</a></li>
                            <li><a href="/list-42" target="_blank" onclick="pushFoolChildrenMsg('3','精品平板','笔记本电脑','/list-42')">笔记本电脑</a></li>
                            <li><a href="/list-317" target="_blank" onclick="pushFoolChildrenMsg('3','精品平板','笔记本配件','/list-317')">笔记本配件</a></li>
                    </ul>
                    <div class="channel-more fr"><span></span><span></span><span></span>
                        <a href="/list-40" target="_blank" onclick="pushFoolMsg('3','精品平板','/list-40')">更多></a>
                    </div>
                </div>
                <div class="b">
                    <div class="goods-list">
                        <ul class="grid-list clearfix">
                                        <li class="grid-items grid-items-md ">
                                            <a class="thumb" href="https://www.vmall.com/product/10086030735533.html" target="_blank" onclick="pushFoolAdvertMsg('3','精品平板','https://res0.vmallres.com/pimages//frontLocation/content/1948737/1524040941875.jpg','1524040941875.jpg','https://www.vmall.com/product/10086030735533.html')">
                                                <img data-lazy-src="/home/picture/1524040941875.jpg" alt="" />
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/516255415.html" target="_blank" onclick = "pushFoolGoodsMsg(this,2,'3','精品平板','553104015','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1506671611280mp.jpg" alt="荣耀Waterplay 防水影音平板 3GB+32GB WiFi版（皓月银）"/>
                                                </p>
                                                <div class="grid-title">荣耀Waterplay</div>
                                                <p class="grid-desc">最高直降100&nbsp;</p>
                                                <p class="grid-price">&yen;1599</p>
                                                <p class="grid-tips">
                                                        <img data-lazy-src="/home/picture/1497575918300.png" alt="荣耀Waterplay 防水影音平板 3GB+32GB WiFi版（皓月银）"/>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/312318362.html" target="_blank" onclick = "pushFoolGoodsMsg(this,3,'3','精品平板','547224994','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1495096799385mp.jpg" alt="华为平板 M3 青春版 10.1英寸 3GB+32GB WiFi版（皎月白）"/>
                                                </p>
                                                <div class="grid-title">华为平板 M3 青春版 10.1英寸</div>
                                                <p class="grid-desc">哈曼卡顿品质立体声&nbsp;</p>
                                                <p class="grid-price">&yen;1699</p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/405225095.html" target="_blank" onclick = "pushFoolGoodsMsg(this,4,'3','精品平板','852174199','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1500455962969mp.jpg" alt="荣耀畅玩平板2 9.6英寸 WiFi高配版（苍穹灰）"/>
                                                </p>
                                                <div class="grid-title">荣耀畅玩平板2 9.6英寸</div>
                                                <p class="grid-desc">最高直降100元&nbsp;</p>
                                                <p class="grid-price">&yen;1199</p>
                                                <p class="grid-tips">
                                                        <img data-lazy-src="/home/picture/1497575918300.png" alt="荣耀畅玩平板2 9.6英寸 WiFi高配版（苍穹灰）"/>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="/product/142312570.html" target="_blank" onclick = "pushFoolGoodsMsg(this,5,'3','精品平板','121657460','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1497422265771mp.jpg" alt="华为平板M3 青春版 8英寸 3GB+32GB WiFi版（皎月白）"/>
                                                </p>
                                                <div class="grid-title">华为平板M3 青春版 8英寸</div>
                                                <p class="grid-desc">增强护眼功能&nbsp;</p>
                                                <p class="grid-price">&yen;1399</p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/13278818.html" target="_blank" onclick = "pushFoolGoodsMsg(this,6,'3','精品平板','811569431','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1476778957240mp.jpg" alt="荣耀平板2 3GB+32GB WiFi版（香槟金）"/>
                                                </p>
                                                <div class="grid-title">荣耀平板2</div>
                                                <p class="grid-desc">优惠直降100元&nbsp;</p>
                                                <p class="grid-price">&yen;1299</p>
                                                <p class="grid-tips">
                                                        <img data-lazy-src="/home/picture/1497575964613.png" alt="荣耀平板2 3GB+32GB WiFi版（香槟金）"/>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="/product/10086868573443.html" target="_blank" onclick = "pushFoolGoodsMsg(this,7,'3','精品平板','10086385882893','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1531379309228mp.jpg" alt="华为平板 M5 10.8英寸 4GB+32GB WiFi版（香槟金）"/>
                                                </p>
                                                <div class="grid-title">华为平板 M5 10.8英寸</div>
                                                <p class="grid-desc">2K高清屏&nbsp;</p>
                                                <p class="grid-price">&yen;2488</p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/121879018.html" target="_blank" onclick = "pushFoolGoodsMsg(this,8,'3','精品平板','729361012','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1500455384160mp.jpg" alt="荣耀畅玩平板2 8英寸 WiFi高配版（苍穹灰）"/>
                                                </p>
                                                <div class="grid-title">荣耀畅玩平板2 8英寸</div>
                                                <p class="grid-desc">最高直降100元&nbsp;</p>
                                                <p class="grid-price">&yen;999</p>
                                            </a>
                                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- 初始值 -->
        <!-- 分列式 march-past 计算显示商品数量-->
            <!-- 商品是否为4的倍数 -->
            <!-- 优先填充第一行数据 -->
                <!-- 排除非4倍数的商品 -->
        <!-- 非对称式 asym_array -->

        <div class="layout" id="lc_533187">
            <div class="home-channel-floor">
                <div class="h">
                    <h2 class="channel-title fl">智能穿戴</h2>
                    <ul class="channel-nav fl">
                            <li><a href="/list-241" target="_blank" onclick="pushFoolChildrenMsg('4','智能穿戴','手环','/list-241')">手环</a></li>
                            <li><a href="/list-247" target="_blank" onclick="pushFoolChildrenMsg('4','智能穿戴','手表','/list-247')">手表</a></li>
                            <li><a href="/list-329" target="_blank" onclick="pushFoolChildrenMsg('4','智能穿戴','VR','/list-329')">VR</a></li>
                    </ul>
                    <div class="channel-more fr"><span></span><span></span><span></span>
                        <a href="/list-59" target="_blank" onclick="pushFoolMsg('4','智能穿戴','/list-59')">更多></a>
                    </div>
                </div>
                <div class="b">
                    <div class="goods-list">
                        <ul class="grid-list clearfix">
                                        <li class="grid-items grid-items-md ">
                                            <a class="thumb" href="https://www.vmall.com/product/10086572258093.html" target="_blank" onclick="pushFoolAdvertMsg('4','智能穿戴','https://res0.vmallres.com/pimages//frontLocation/content/2440103/1531926044073.png','1531926044073.png','https://www.vmall.com/product/10086572258093.html')">
                                                <img data-lazy-src="/home/picture/1531926044073.png" alt="" />
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/369652507.html" target="_blank" onclick = "pushFoolGoodsMsg(this,2,'4','智能穿戴','532696479','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1495598460509mp.jpg" alt="荣耀畅玩手环 A2（魔法黑）"/>
                                                </p>
                                                <div class="grid-title">荣耀畅玩手环 A2</div>
                                                <p class="grid-desc">直降20元仅需129&nbsp;</p>
                                                <p class="grid-price">&yen;129</p>
                                                <p class="grid-tips">
                                                        <img data-lazy-src="/home/picture/1497576073762.png" alt="荣耀畅玩手环 A2（魔法黑）"/>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="/product/270976970.html" target="_blank" onclick = "pushFoolGoodsMsg(this,3,'4','智能穿戴','976288056','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1507769117117mp.jpg" alt="HUAWEI WATCH 2 Pro华为新款智能手表 4G版（钛银灰）"/>
                                                </p>
                                                <div class="grid-title">HUAWEI WATCH 2 Pro</div>
                                                <p class="grid-desc">eSIM一号双终端&nbsp;</p>
                                                <p class="grid-price">&yen;2588</p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/993405255.html" target="_blank" onclick = "pushFoolGoodsMsg(this,4,'4','智能穿戴','636006496','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1496627716396mp.jpg" alt="荣耀手环3 标准版（活力橙）"/>
                                                </p>
                                                <div class="grid-title">荣耀手环3</div>
                                                <p class="grid-desc">限时最高降30元&nbsp;</p>
                                                <p class="grid-price">&yen;139</p>
                                                <p class="grid-tips">
                                                        <img data-lazy-src="/home/picture/1497575814983.png" alt="荣耀手环3 标准版（活力橙）"/>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/658947392.html" target="_blank" onclick = "pushFoolGoodsMsg(this,5,'4','智能穿戴','790651961','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1488181445263mp.jpg" alt="HUAWEI WATCH 2 华为第二代智能运动手表 蓝牙版（星空灰）"/>
                                                </p>
                                                <div class="grid-title">HUAWEI WATCH 2</div>
                                                <p class="grid-desc">独立通话  移动支付&nbsp;</p>
                                                <p class="grid-price">&yen;1688</p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/798789671.html" target="_blank" onclick = "pushFoolGoodsMsg(this,6,'4','智能穿戴','821498449','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1498098860450mp.jpg" alt="华为运动手环 标准版（黑色）"/>
                                                </p>
                                                <div class="grid-title">华为运动手环</div>
                                                <p class="grid-desc">50米防水游泳&nbsp;</p>
                                                <p class="grid-price">&yen;298</p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/184868333.html" target="_blank" onclick = "pushFoolGoodsMsg(this,7,'4','智能穿戴','791219487','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/1488161147740.png" alt="荣耀手表 S1" />
                                                </p>
                                                <div class="grid-title">荣耀手表 S1</div>
                                                <p class="grid-desc">限时直降50元&nbsp;</p>
                                                <p class="grid-price">&yen;499</p>
                                                <p class="grid-tips">
                                                        <img data-lazy-src="/home/picture/1497575918300.png" alt="荣耀手表 S1 表体（深空灰）+长腕带（黑色）"/>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/121088789.html" target="_blank" onclick = "pushFoolGoodsMsg(this,8,'4','智能穿戴','8150711','12')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1506139200867mp.jpg" alt="华为手环B3 青春版（黑色）"/>
                                                </p>
                                                <div class="grid-title">华为手环B3 青春版</div>
                                                <p class="grid-desc">是手环 也是耳机&nbsp;</p>
                                                <p class="grid-price">&yen;499</p>
                                            </a>
                                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- 初始值 -->
        <!-- 分列式 march-past 计算显示商品数量-->
        <!-- 非对称式 asym_array -->

        <div class="layout" id="lc_533193">
            <div class="home-channel-floor">
                <div class="h">
                    <h2 class="channel-title fl">智能家居</h2>
                    <ul class="channel-nav fl">
                            <li><a href="/list-45" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','路由器','/list-45')">路由器</a></li>
                            <li><a href="/list-263" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','子母/分布式路由','/list-263')">子母/分布式路由</a></li>
                            <li><a href="/list-44" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','电力猫','/list-44')">电力猫</a></li>
                            <li><a href="/list-97" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','随行wifi','/list-97')">随行wifi</a></li>
                            <li><a href="/list-46" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','电视盒子','/list-46')">电视盒子</a></li>
                            <li><a href="/list-371" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','照明','/list-371')">照明</a></li>
                            <li><a href="/list-421" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','清洁','/list-421')">清洁</a></li>
                            <li><a href="/list-423" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','节能','/list-423')">节能</a></li>
                            <li><a href="/list-373" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','环境','/list-373')">环境</a></li>
                            <li><a href="/list-379" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','安防','/list-379')">安防</a></li>
                            <li><a href="/list-403" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','健康','/list-403')">健康</a></li>
                            <li><a href="/list-377" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','厨电','/list-377')">厨电</a></li>
                            <li><a href="/list-407" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','影音','/list-407')">影音</a></li>
                            <li><a href="/list-375" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','卫浴','/list-375')">卫浴</a></li>
                            <li><a href="/list-381" target="_blank" onclick="pushFoolChildrenMsg('5','智能家居','其他','/list-381')">其他</a></li>
                    </ul>
                    <div class="channel-more fr"><span></span><span></span><span></span>
                        <a href="/list-43" target="_blank" onclick="pushFoolMsg('5','智能家居','/list-43')">更多></a>
                    </div>
                </div>
                <div class="b">
                    <div class="goods-list">
                        <ul class="grid-list clearfix">
                                        <!--通过添加current 来实现 hover效果-->
                                        <li class="grid-items grid-items-lg">
                                            <a class="thumb" href="https://www.vmall.com/product/10086500145070.html" target="_blank"  onclick="pushFoolAdvertMsg('5','智能家居','https://res0.vmallres.com/pimages//frontLocation/content/957167/1523520344098.png','1523520344098.png','https://www.vmall.com/product/10086500145070.html')">
                                                <img data-lazy-src="/home/picture/1523520344098.png" alt="" />
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/611513952.html" target="_blank" onclick = "pushFoolGoodsMsg(this,2,'5','智能家居','480239066','13')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1507545954611mp.jpg" alt="荣耀路由2（白色）"/>
                                                </p>
                                                <div class="grid-title">荣耀路由2</div>
                                                <p class="grid-desc">限时直降20元&nbsp;</p>
                                                <p class="grid-price">&yen;179</p>
                                                <p class="grid-tips">
                                                        <img data-lazy-src="/home/picture/1497575918300.png" alt="荣耀路由2（白色）"/>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="/product/538499714.html" target="_blank" onclick = "pushFoolGoodsMsg(this,3,'5','智能家居','874932810','13')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/1500436144767.png" alt="华为子母路由器 Q1" />
                                                </p>
                                                <div class="grid-title">华为子母路由器 Q1</div>
                                                <p class="grid-desc">直降80&nbsp;</p>
                                                <p class="grid-price">&yen;599</p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/3053.html" target="_blank" onclick = "pushFoolGoodsMsg(this,4,'5','智能家居','7219','13')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/1482233802925.png" alt="荣耀路由Pro" />
                                                </p>
                                                <div class="grid-title">荣耀路由Pro</div>
                                                <p class="grid-desc">限时直降14元&nbsp;</p>
                                                <p class="grid-price">&yen;314</p>
                                                <p class="grid-tips">
                                                        <img data-lazy-src="/home/picture/1497575918300.png" alt="荣耀路由Pro 大户型穿墙1200Mbps智能AC有线无线双千兆旗舰路由器（白色）"/>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="/product/310439420.html" target="_blank" onclick = "pushFoolGoodsMsg(this,5,'5','智能家居','190047935','13')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1495075512638mp.jpg" alt="华为随行WiFi 2（深灰色）"/>
                                                </p>
                                                <div class="grid-title">华为随行WiFi 2</div>
                                                <p class="grid-desc">4G全网通&nbsp;</p>
                                                <p class="grid-price">&yen;499</p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/1822.html" target="_blank" onclick = "pushFoolGoodsMsg(this,6,'5','智能家居','329588060','13')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/1482233766254.png" alt="荣耀路由标准版" />
                                                </p>
                                                <div class="grid-title">荣耀路由标准版</div>
                                                <p class="grid-desc">限时直降20元&nbsp;</p>
                                                <p class="grid-price">&yen;139</p>
                                                <p class="grid-tips">
                                                        <img data-lazy-src="/home/picture/1497575964613.png" alt="荣耀路由 标准版（白色）"/>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="/product/129656917.html" target="_blank" onclick = "pushFoolGoodsMsg(this,7,'5','智能家居','961348112','13')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1532916215842mp.jpg" alt="华为路由器WS5200（白色）"/>
                                                </p>
                                                <div class="grid-title">华为路由WS5200</div>
                                                <p class="grid-desc">支持5G信号智能优先选择&nbsp;</p>
                                                <p class="grid-price">&yen;269</p>
                                            </a>
                                        </li>
                        </ul>
                    </div>
                        <div id="goodsContent4" class="goods-rolling swiper-container relative pdt-12">
                        <ul class="grid-list swiper-wrapper clearfix">
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="8">
                                        <a class="thumb" href="https://www.vmall.com/product/23860218.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1493972111510mp.jpg" alt="荣耀路由X1 增强版（白色）"/>
                                            </p>
                                            <div class="grid-title">荣耀路由X1 增强版</div>
                                            <p class="grid-desc">限时直降20元&nbsp; </p>
                                            <p class="grid-price">&yen;129</p>
                                            <p class="grid-tips">
                                                    <img data-lazy-src="/home/picture/1497575918300.png" alt="荣耀路由X1 增强版（白色）"/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="9">
                                        <a class="thumb" href="/product/10086059855192.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1524909241917mp.jpg" alt="【新品首发】华为4G路由 2（白色）"/>
                                            </p>
                                            <div class="grid-title">华为4G路由 2（白色）</div>
                                            <p class="grid-desc">千兆网口 一机两用&nbsp; </p>
                                            <p class="grid-price">&yen;389</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="10">
                                        <a class="thumb" href="https://www.vmall.com/product/690174055.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1469695994751mp.jpg" alt="荣耀盒子Pro （白色）"/>
                                            </p>
                                            <div class="grid-title">荣耀盒子Pro</div>
                                            <p class="grid-desc">限时直降20元&nbsp; </p>
                                            <p class="grid-price">&yen;399</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="11">
                                        <a class="thumb" href="https://www.vmall.com/product/515922308.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1507605356006mp.jpg" alt="华为路由器WS5100（白色）"/>
                                            </p>
                                            <div class="grid-title">华为路由器WS5100</div>
                                            <p class="grid-desc">支持5G信号智能优先选择&nbsp; </p>
                                            <p class="grid-price">&yen;139</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="12">
                                        <a class="thumb" href="https://www.vmall.com/product/202235028.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1507802394680mp.jpg" alt="荣耀分布式路由（白色）"/>
                                            </p>
                                            <div class="grid-title">荣耀分布式路由</div>
                                            <p class="grid-desc">大平层/复式/别墅高速覆盖&nbsp; </p>
                                            <p class="grid-price">&yen;849</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="13">
                                        <a class="thumb" href="/product/190355030.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/1493696328524.png" alt="华为路由器A1 畅享版" />
                                            </p>
                                            <div class="grid-title">华为路由器A1 畅享版</div>
                                            <p class="grid-desc">优选5G信号 Wifi自动加速&nbsp; </p>
                                            <p class="grid-price">&yen;169</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="14">
                                        <a class="thumb" href="https://www.vmall.com/product/582146467.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1500025136978mp.jpg" alt="荣耀路由X1（白色）"/>
                                            </p>
                                            <div class="grid-title">荣耀路由X1</div>
                                            <p class="grid-desc">时刻高速上网且稳定不掉线&nbsp; </p>
                                            <p class="grid-price">&yen;89</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="15">
                                        <a class="thumb" href="/product/2380.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/1484100325589.jpg" alt="华为WS832" />
                                            </p>
                                            <div class="grid-title">华为WS832</div>
                                            <p class="grid-desc">1200M无线路由器&nbsp; </p>
                                            <p class="grid-price">&yen;249</p>
                                            <p class="grid-tips">
                                                    <img data-lazy-src="/home/picture/1497575918300.png" alt="华为路由器WS832（白色）"/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="16">
                                        <a class="thumb" href="https://www.vmall.com/product/3061.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/1482233776849.png" alt="荣耀WiFi穿墙宝" />
                                            </p>
                                            <div class="grid-title">荣耀WiFi穿墙宝</div>
                                            <p class="grid-desc">插座变热点 信号变满格&nbsp; </p>
                                            <p class="grid-price">&yen;255</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="17">
                                        <a class="thumb" href="https://www.vmall.com/product/1169.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/1489245789451.jpg" alt="华为 WS550" />
                                            </p>
                                            <div class="grid-title">华为 WS550</div>
                                            <p class="grid-desc">双核450M路由器&nbsp; </p>
                                            <p class="grid-price">&yen;169</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="18">
                                        <a class="thumb" href="/product/1168.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/1489246047722.jpg" alt="华为 WS331c" />
                                            </p>
                                            <div class="grid-title">华为 WS331c</div>
                                            <p class="grid-desc">300Mbps 无线扩展器&nbsp; </p>
                                            <p class="grid-price">&yen;119</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="19">
                                        <a class="thumb" href="https://www.vmall.com/product/902.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/1489753563752.jpg" alt="华为 PT500" />
                                            </p>
                                            <div class="grid-title">华为 PT500</div>
                                            <p class="grid-desc">500M电力线适配器&nbsp; </p>
                                            <p class="grid-price">&yen;139</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="20">
                                        <a class="thumb" href="/product/746829270.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/1496281828441.jpg" alt="华为路由 WS318 增强版" />
                                            </p>
                                            <div class="grid-title">华为路由 WS318 增强版</div>
                                            <p class="grid-desc">高性能双天线&nbsp; </p>
                                            <p class="grid-price">&yen;99</p>
                                        </a>
                                    </li>
                        </ul>
                        <div class="grid-btn swiper-button-prev btn-prev disabled"><span></span></div>
                        <div class="grid-btn swiper-button-next btn-next"><span></span></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 初始值 -->
        <!-- 分列式 march-past 计算显示商品数量-->
        <!-- 非对称式 asym_array -->

        <div class="layout" id="lc_533189">
            <div class="home-channel-floor">
                <div class="h">
                    <h2 class="channel-title fl">热销配件</h2>
                    <ul class="channel-nav fl">
                            <li><a href="/list-56" target="_blank" onclick="pushFoolChildrenMsg('6','热销配件','移动电源','/list-56')">移动电源</a></li>
                            <li><a href="/list-229" target="_blank" onclick="pushFoolChildrenMsg('6','热销配件','耳机','/list-229')">耳机</a></li>
                            <li><a href="/list-58" target="_blank" onclick="pushFoolChildrenMsg('6','热销配件','充电器/线材','/list-58')">充电器/线材</a></li>
                            <li><a href="/list-231" target="_blank" onclick="pushFoolChildrenMsg('6','热销配件','自拍杆/支架','/list-231')">自拍杆/支架</a></li>
                            <li><a href="/list-55" target="_blank" onclick="pushFoolChildrenMsg('6','热销配件','音箱','/list-55')">音箱</a></li>
                            <li><a href="/list-83" target="_blank" onclick="pushFoolChildrenMsg('6','热销配件','U盘/存储卡','/list-83')">U盘/存储卡</a></li>
                            <li><a href="/list-235" target="_blank" onclick="pushFoolChildrenMsg('6','热销配件','摄像机/镜头','/list-235')">摄像机/镜头</a></li>
                            <li><a href="/list-239" target="_blank" onclick="pushFoolChildrenMsg('6','热销配件','智能硬件','/list-239')">智能硬件</a></li>
                            <li><a href="/list-237" target="_blank" onclick="pushFoolChildrenMsg('6','热销配件','生活周边','/list-237')">生活周边</a></li>
                    </ul>
                    <div class="channel-more fr"><span></span><span></span><span></span>
                        <a href="/list-54" target="_blank" onclick="pushFoolMsg('6','热销配件','/list-54')">更多></a>
                    </div>
                </div>
                <div class="b">
                    <div class="goods-list">
                        <ul class="grid-list clearfix">
                                        <!--通过添加current 来实现 hover效果-->
                                        <li class="grid-items grid-items-lg">
                                            <a class="thumb" href="https://www.vmall.com/product/10086641545699.html" target="_blank"  onclick="pushFoolAdvertMsg('6','热销配件','https://res0.vmallres.com/pimages//frontLocation/content/951979/1530701658255.jpg','1530701658255.jpg','https://www.vmall.com/product/10086641545699.html')">
                                                <img data-lazy-src="/home/picture/1530701658255.jpg" alt="" />
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/875753311.html" target="_blank" onclick = "pushFoolGoodsMsg(this,2,'6','热销配件','189161731','13')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1489548822739mp.jpg" alt="荣耀xSport 运动蓝牙耳机（魅焰红）"/>
                                                </p>
                                                <div class="grid-title">荣耀xSport 运动蓝牙耳机</div>
                                                <p class="grid-desc">直降20元仅需229&nbsp;</p>
                                                <p class="grid-price">&yen;229</p>
                                                <p class="grid-tips">
                                                        <img data-lazy-src="/home/picture/1497575918300.png" alt="荣耀xSport 运动蓝牙耳机（魅焰红）"/>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/194128141.html" target="_blank" onclick = "pushFoolGoodsMsg(this,3,'6','热销配件','553811697','13')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1518397678332mp.jpg" alt="荣耀智能体脂秤（白色）"/>
                                                </p>
                                                <div class="grid-title">荣耀智能体脂秤</div>
                                                <p class="grid-desc">直降40元仅需129&nbsp;</p>
                                                <p class="grid-price">&yen;129</p>
                                                <p class="grid-tips">
                                                        <img data-lazy-src="/home/picture/1497575918300.png" alt="荣耀智能体脂秤（白色）"/>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/936223974.html" target="_blank" onclick = "pushFoolGoodsMsg(this,4,'6','热销配件','534967719','13')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1512699241768mp.jpg" alt="华为智能体脂秤"/>
                                                </p>
                                                <div class="grid-title">华为智能体脂秤</div>
                                                <p class="grid-desc">关注你的每一克&nbsp;</p>
                                                <p class="grid-price">&yen;169</p>
                                                <p class="grid-tips">
                                                        <img data-lazy-src="/home/picture/1497575814983.png" alt="华为智能体脂秤"/>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/706470980.html" target="_blank" onclick = "pushFoolGoodsMsg(this,5,'6','热销配件','497334871','13')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1493028354138mp.jpg" alt="华为10000mAh 移动电源 9V2A 快充版（摩卡金）"/>
                                                </p>
                                                <div class="grid-title">华为10000mAh 移动电源</div>
                                                <p class="grid-desc">18W双向快充&nbsp;</p>
                                                <p class="grid-price">&yen;159</p>
                                                <p class="grid-tips">
                                                        <img data-lazy-src="/home/picture/1497575814983.png" alt="华为10000mAh 移动电源 9V2A 快充版（摩卡金）"/>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/259735704.html#10086829950914" target="_blank" onclick = "pushFoolGoodsMsg(this,6,'6','热销配件','10086829950914','13')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1518168609693mp.jpg" alt="荣耀移动电源10000mAh快充版 （黑色）"/>
                                                </p>
                                                <div class="grid-title">荣耀移动电源10000mAh快充版</div>
                                                <p class="grid-desc">直降40元&nbsp;</p>
                                                <p class="grid-price">&yen;129</p>
                                                <p class="grid-tips">
                                                        <img data-lazy-src="/home/picture/1497575918300.png" alt="荣耀移动电源10000mAh快充版 （黑色）"/>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/812952235.html" target="_blank" onclick = "pushFoolGoodsMsg(this,7,'6','热销配件','221865572','13')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1467185984175mp.jpg" alt="荣耀引擎耳机2代（皓月银）"/>
                                                </p>
                                                <div class="grid-title">荣耀引擎耳机2代</div>
                                                <p class="grid-desc">直降40元&nbsp;</p>
                                                <p class="grid-price">&yen;89</p>
                                                <p class="grid-tips">
                                                        <img data-lazy-src="/home/picture/1497575918300.png" alt="荣耀引擎耳机2代（皓月银）"/>
                                                </p>
                                            </a>
                                        </li>
                        </ul>
                    </div>
                        <div id="goodsContent5" class="goods-rolling swiper-container relative pdt-12">
                        <ul class="grid-list swiper-wrapper clearfix">
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="8">
                                        <a class="thumb" href="https://www.vmall.com/product/10086747772894.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1531829562563mp.jpg" alt="华为全景相机酷玩版（星云蓝）"/>
                                            </p>
                                            <div class="grid-title">华为全景相机酷玩版</div>
                                            <p class="grid-desc">新品上市 套餐享优惠&nbsp; </p>
                                            <p class="grid-price">&yen;599</p>
                                            <p class="grid-tips">
                                                    <img data-lazy-src="/home/picture/1497576023361.png" alt="华为全景相机酷玩版（星云蓝）"/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="9">
                                        <a class="thumb" href="https://www.vmall.com/product/10086872833199.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1528429275342mp.jpg" alt="荣耀心晴耳机 心率智能耳机（幻夜黑）"/>
                                            </p>
                                            <div class="grid-title">荣耀心晴耳机</div>
                                            <p class="grid-desc">心率智能耳机&nbsp; </p>
                                            <p class="grid-price">&yen;129</p>
                                            <p class="grid-tips">
                                                    <img data-lazy-src="/home/picture/1497576023361.png" alt="荣耀心晴耳机 心率智能耳机（幻夜黑）"/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="10">
                                        <a class="thumb" href="https://www.vmall.com/product/15662504.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1528702031369mp.jpg" alt="华为9V2A车载充电器"/>
                                            </p>
                                            <div class="grid-title">华为车载充电器快充版</div>
                                            <p class="grid-desc">支持9V2A快充&nbsp; </p>
                                            <p class="grid-price">&yen;69</p>
                                            <p class="grid-tips">
                                                    <img data-lazy-src="/home/picture/1497575918300.png" alt="华为9V2A车载充电器"/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="11">
                                        <a class="thumb" href="https://www.vmall.com/product/3281.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1479716427569mp.jpg" alt="荣耀 AM116半入耳式耳机（白色）"/>
                                            </p>
                                            <div class="grid-title">荣耀 AM116半入耳式耳机</div>
                                            <p class="grid-desc">直降40元/高性价比&nbsp; </p>
                                            <p class="grid-price">&yen;49</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="12">
                                        <a class="thumb" href="https://www.vmall.com/product/327369106.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1513330471940mp.jpg" alt="华为6700mAh 移动电源 标准版（黑色）"/>
                                            </p>
                                            <div class="grid-title">华为6700mAh 移动电源</div>
                                            <p class="grid-desc">限时优惠20元&nbsp; </p>
                                            <p class="grid-price">&yen;79</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="13">
                                        <a class="thumb" href="https://www.vmall.com/product/10086262026261.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1523936863031mp.jpg" alt="荣耀魔声耳机2（深海蓝）"/>
                                            </p>
                                            <div class="grid-title">荣耀魔声耳机2（深海蓝）</div>
                                            <p class="grid-desc">直降20元&nbsp; </p>
                                            <p class="grid-price">&yen;229</p>
                                            <p class="grid-tips">
                                                    <img data-lazy-src="/home/picture/1497576023361.png" alt="荣耀魔声耳机2（深海蓝）"/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="14">
                                        <a class="thumb" href="https://www.vmall.com/product/794044956.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1501064909833mp.jpg" alt="华为全景相机（灰色）"/>
                                            </p>
                                            <div class="grid-title">华为全景相机</div>
                                            <p class="grid-desc">360度无界视野&nbsp; </p>
                                            <p class="grid-price">&yen;499</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="15">
                                        <a class="thumb" href="https://www.vmall.com/product/10086029405648.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1523947314310mp.jpg" alt="荣耀多口充电器SuperCharge快充版（白色）"/>
                                            </p>
                                            <div class="grid-title">荣耀多口充电器SuperCharge快充版</div>
                                            <p class="grid-desc">赠29元数据线&nbsp; </p>
                                            <p class="grid-price">&yen;149</p>
                                            <p class="grid-tips">
                                                    <img data-lazy-src="/home/picture/1497575918300.png" alt="荣耀多口充电器SuperCharge快充版（白色）"/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="16">
                                        <a class="thumb" href="/product/602512743.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1512356560498mp.jpg" alt="华为运动心率蓝牙耳机R1 Pro（红色）"/>
                                            </p>
                                            <div class="grid-title">华为运动心率蓝牙耳机R1 Pro</div>
                                            <p class="grid-desc">从心率到“心晴” 从运动到心动&nbsp; </p>
                                            <p class="grid-price">&yen;699</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="17">
                                        <a class="thumb" href="https://www.vmall.com/product/927153142.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1515376079265mp.jpg" alt="荣耀车载充电器 快充版（黑色）"/>
                                            </p>
                                            <div class="grid-title">荣耀车载充电器 快充版</div>
                                            <p class="grid-desc">直降10元+赠数据线&nbsp; </p>
                                            <p class="grid-price">&yen;89</p>
                                            <p class="grid-tips">
                                                    <img data-lazy-src="/home/picture/1497575918300.png" alt="荣耀车载充电器 快充版（黑色）"/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="18">
                                        <a class="thumb" href="/product/104065115.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/1489245031509.jpg" alt="华为9V2A充电器" />
                                            </p>
                                            <div class="grid-title">华为9V2A充电器</div>
                                            <p class="grid-desc">高速快充 智能兼容&nbsp; </p>
                                            <p class="grid-price">&yen;69</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="19">
                                        <a class="thumb" href="https://www.vmall.com/product/2247.html#7659" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1468287675019mp.jpg" alt="荣耀引擎耳机PLUS（香槟金）"/>
                                            </p>
                                            <div class="grid-title">荣耀引擎耳机PLUS</div>
                                            <p class="grid-desc">直降20元&nbsp; </p>
                                            <p class="grid-price">&yen;79</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="20">
                                        <a class="thumb" href="/product/20999181.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1491028084525mp.jpg" alt="华为三脚架自拍杆 无线版（黑色）"/>
                                            </p>
                                            <div class="grid-title">华为无线三脚架自拍杆</div>
                                            <p class="grid-desc">开启自拍新时代&nbsp; </p>
                                            <p class="grid-price">&yen;99</p>
                                            <p class="grid-tips">
                                                    <img data-lazy-src="/home/picture/1497575814983.png" alt="华为三脚架自拍杆 无线版（黑色）"/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="21">
                                        <a class="thumb" href="https://www.vmall.com/product/200162339.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1513827604555mp.jpg" alt="荣耀音乐小巨蛋（红色）"/>
                                            </p>
                                            <div class="grid-title">荣耀音乐小巨蛋</div>
                                            <p class="grid-desc">直降20元&nbsp; </p>
                                            <p class="grid-price">&yen;179</p>
                                            <p class="grid-tips">
                                                    <img data-lazy-src="/home/picture/1497575918300.png" alt="荣耀音乐小巨蛋（红色）"/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="22">
                                        <a class="thumb" href="/product/944393591.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/1489245920315.jpg" alt="华为车载快速充电器" />
                                            </p>
                                            <div class="grid-title">华为车载快速充电器</div>
                                            <p class="grid-desc">5A快充 4重保护&nbsp; </p>
                                            <p class="grid-price">&yen;159</p>
                                            <p class="grid-tips">
                                                    <img data-lazy-src="/home/picture/1497575814983.png" alt="华为4.5V5A车载充电器套装（含 5A Type-C数据线）"/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="23">
                                        <a class="thumb" href="https://www.vmall.com/product/430223039.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1495018208785mp.jpg" alt="荣耀三脚架自拍杆 无线版（白色）"/>
                                            </p>
                                            <div class="grid-title">荣耀三脚架自拍杆 无线版</div>
                                            <p class="grid-desc">直降30元&nbsp; </p>
                                            <p class="grid-price">&yen;89</p>
                                            <p class="grid-tips">
                                                    <img data-lazy-src="/home/picture/1497575814983.png" alt="荣耀三脚架自拍杆 无线版（白色）"/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="24">
                                        <a class="thumb" href="/product/327369106.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1513330615701mp.jpg" alt="华为6700mAh 移动电源 标准版（粉色）"/>
                                            </p>
                                            <div class="grid-title">华为6700mAh 移动电源</div>
                                            <p class="grid-desc">时尚简约 多重安全防护&nbsp; </p>
                                            <p class="grid-price">&yen;79</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="25">
                                        <a class="thumb" href="https://www.vmall.com/product/570114585.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1468293433526mp.jpg" alt="荣耀小天鹅蓝牙音箱（白色）"/>
                                            </p>
                                            <div class="grid-title">荣耀小天鹅蓝牙音箱</div>
                                            <p class="grid-desc">直降20元&nbsp; </p>
                                            <p class="grid-price">&yen;89</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="26">
                                        <a class="thumb" href="/product/10086641545699.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1523156485899mp.jpg" alt="HUAWEI FreeBuds 无线耳机（碳晶黑）"/>
                                            </p>
                                            <div class="grid-title">HUAWEI FreeBuds无线耳机</div>
                                            <p class="grid-desc">&nbsp; </p>
                                            <p class="grid-price">&yen;799</p>
                                            <p class="grid-tips">
                                                    <img data-lazy-src="/home/picture/1497576023361.png" alt="HUAWEI FreeBuds 无线耳机（碳晶黑）"/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="27">
                                        <a class="thumb" href="https://www.vmall.com/product/10086441148894.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1523952310070mp.jpg" alt="荣耀月光棒 柔光自拍杆（幻夜黑）"/>
                                            </p>
                                            <div class="grid-title">荣耀月光棒 柔光自拍杆</div>
                                            <p class="grid-desc">暗光自拍也清晰靓丽&nbsp; </p>
                                            <p class="grid-price">&yen;119</p>
                                            <p class="grid-tips">
                                                    <img data-lazy-src="/home/picture/1497575918300.png" alt="荣耀月光棒 柔光自拍杆（幻夜黑）"/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="28">
                                        <a class="thumb" href="/product/10086641545699.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1523156485899mp.jpg" alt="HUAWEI FreeBuds 无线耳机（碳晶黑）"/>
                                            </p>
                                            <div class="grid-title">HUAWEI FreeBuds无线耳机</div>
                                            <p class="grid-desc">&nbsp; </p>
                                            <p class="grid-price">&yen;799</p>
                                            <p class="grid-tips">
                                                    <img data-lazy-src="/home/picture/1497576023361.png" alt="HUAWEI FreeBuds 无线耳机（碳晶黑）"/>
                                            </p>
                                        </a>
                                    </li>
                        </ul>
                        <div class="grid-btn swiper-button-prev btn-prev disabled"><span></span></div>
                        <div class="grid-btn swiper-button-next btn-next"><span></span></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 初始值 -->
        <!-- 分列式 march-past 计算显示商品数量-->
        <!-- 非对称式 asym_array -->

        <div class="layout" id="lc_533197">
            <div class="home-channel-floor">
                <div class="h">
                    <h2 class="channel-title fl">品牌配件</h2>
                    <ul class="channel-nav fl">
                            <li><a href="/list-56" target="_blank" onclick="pushFoolChildrenMsg('7','品牌配件','移动电源','/list-56')">移动电源</a></li>
                            <li><a href="/list-229" target="_blank" onclick="pushFoolChildrenMsg('7','品牌配件','耳机','/list-229')">耳机</a></li>
                            <li><a href="/list-58" target="_blank" onclick="pushFoolChildrenMsg('7','品牌配件','充电器/线材','/list-58')">充电器/线材</a></li>
                            <li><a href="/list-231" target="_blank" onclick="pushFoolChildrenMsg('7','品牌配件','自拍杆/支架','/list-231')">自拍杆/支架</a></li>
                            <li><a href="/list-55" target="_blank" onclick="pushFoolChildrenMsg('7','品牌配件','音箱','/list-55')">音箱</a></li>
                            <li><a href="/list-83" target="_blank" onclick="pushFoolChildrenMsg('7','品牌配件','U盘/存储卡','/list-83')">U盘/存储卡</a></li>
                            <li><a href="/list-235" target="_blank" onclick="pushFoolChildrenMsg('7','品牌配件','摄像机/镜头','/list-235')">摄像机/镜头</a></li>
                            <li><a href="/list-239" target="_blank" onclick="pushFoolChildrenMsg('7','品牌配件','智能硬件','/list-239')">智能硬件</a></li>
                            <li><a href="/list-237" target="_blank" onclick="pushFoolChildrenMsg('7','品牌配件','生活周边','/list-237')">生活周边</a></li>
                    </ul>
                    <div class="channel-more fr"><span></span><span></span><span></span>
                        <a href="/list-54" target="_blank" onclick="pushFoolMsg('7','品牌配件','/list-54')">更多></a>
                    </div>
                </div>
                <div class="b">
                    <div class="goods-list">
                        <ul class="grid-list clearfix">
                                        <!--通过添加current 来实现 hover效果-->
                                        <li class="grid-items grid-items-lg">
                                            <a class="thumb" href="https://www.vmall.com/product/10086468259602.html" target="_blank"  onclick="pushFoolAdvertMsg('7','品牌配件','https://res0.vmallres.com/pimages//frontLocation/content/1268659/1532425699953.png','1532425699953.png','https://www.vmall.com/product/10086468259602.html')">
                                                <img data-lazy-src="/home/picture/1532425699953.png" alt="" />
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/10086108103006.html" target="_blank" onclick = "pushFoolGoodsMsg(this,2,'7','品牌配件','10086432427912','13')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1503562216889mp.jpg" alt="欧普 智清读写台灯（白色）（支持HUAWEI HiLink）"/>
                                                </p>
                                                <div class="grid-title">欧普 智清读写台灯</div>
                                                <p class="grid-desc">限时直降40元&nbsp;</p>
                                                <p class="grid-price">&yen;219</p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/10086132466242.html" target="_blank" onclick = "pushFoolGoodsMsg(this,3,'7','品牌配件','10086361738676','13')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1521603037469mp.jpg" alt="科沃斯（Ecovacs）地宝D36F 智能扫地机器人（支持HUAWEI HiLink）"/>
                                                </p>
                                                <div class="grid-title">科沃斯地宝D36F 机器人</div>
                                                <p class="grid-desc">限时直降150元 送599擦窗机&nbsp;</p>
                                                <p class="grid-price">&yen;949</p>
                                                <p class="grid-tips">
                                                        <img data-lazy-src="/home/picture/1497576073762.png" alt="科沃斯（Ecovacs）地宝D36F 智能扫地机器人（支持HUAWEI HiLink）"/>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/10086831361357.html" target="_blank" onclick = "pushFoolGoodsMsg(this,4,'7','品牌配件','10086967428860','13')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1526031501025mp.jpg" alt="55度moscup智能降温杯（银河灰）"/>
                                                </p>
                                                <div class="grid-title">55度moscup智能降温杯</div>
                                                <p class="grid-desc">一分钟快速降温&nbsp;</p>
                                                <p class="grid-price">&yen;269</p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/1858.html#3531" target="_blank" onclick = "pushFoolGoodsMsg(this,5,'7','品牌配件','3531','13')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1532572178485mp.jpg" alt="大康 Dacom Athlete（G05）专用运动型蓝牙耳机（黑色）"/>
                                                </p>
                                                <div class="grid-title">大康专用运动型蓝牙耳机</div>
                                                <p class="grid-desc">出色音质体验 待机时间更长&nbsp;</p>
                                                <p class="grid-price">&yen;128</p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/10086603105278.html" target="_blank" onclick = "pushFoolGoodsMsg(this,6,'7','品牌配件','10086114286979','13')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1521187245348mp.jpg" alt="品多（PINTOS）全自动智能指纹门锁M1（亚光银）（支持HUAWEI HiLink）"/>
                                                </p>
                                                <div class="grid-title">品多全自动智能指纹门锁</div>
                                                <p class="grid-desc">送258元香薰灯 晒图返50元&nbsp;</p>
                                                <p class="grid-price">&yen;2999</p>
                                            </a>
                                        </li>
                                        <li class="grid-items">
                                            <a class="thumb" href="https://www.vmall.com/product/898148996.html#10086555265713" target="_blank" onclick = "pushFoolGoodsMsg(this,7,'7','品牌配件','10086555265713','13')">
                                                <p class="grid-img">
                                                            <img data-lazy-src="/home/picture/428_428_1527122275679mp.jpg" alt="闪迪 SanDisk内存卡ClASS10高速存储TF卡读取速度98MB/秒16G（红灰色）"/>
                                                </p>
                                                <div class="grid-title">闪迪 高速存储TF卡</div>
                                                <p class="grid-desc">海量存储 携带方便&nbsp;</p>
                                                <p class="grid-price">&yen;45.90</p>
                                            </a>
                                        </li>
                        </ul>
                    </div>
                        <div id="goodsContent6" class="goods-rolling swiper-container relative pdt-12">
                        <ul class="grid-list swiper-wrapper clearfix">
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="8">
                                        <a class="thumb" href="https://www.vmall.com/product/269949436.html#283394672" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1480320498180mp.jpg" alt="耐翔 Type-C 手机电脑通用U盘 32GB（银色）"/>
                                            </p>
                                            <div class="grid-title">耐翔 手机电脑通用U盘</div>
                                            <p class="grid-desc">直降50元&nbsp; </p>
                                            <p class="grid-price">&yen;99</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="9">
                                        <a class="thumb" href="/product/10086581901040.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1527669939419mp.jpg" alt="Sleepace享睡-香薰助眠灯SA1001-2"/>
                                            </p>
                                            <div class="grid-title">享睡-香薰助眠灯</div>
                                            <p class="grid-desc">直降50元&nbsp; </p>
                                            <p class="grid-price">&yen;299</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="10">
                                        <a class="thumb" href="/product/10086131105122.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1515654939579mp.jpg" alt="720全智能净化器EP800（支持HUAWEI HiLink）"/>
                                            </p>
                                            <div class="grid-title">720全智能净化器EP800</div>
                                            <p class="grid-desc">限时直降300元&nbsp; </p>
                                            <p class="grid-price">&yen;2299</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="11">
                                        <a class="thumb" href="/product/10086305290078.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1530262316224mp.png" alt="M5 10.8、M5 Pro平板电脑皮套键盘（棕色）"/>
                                            </p>
                                            <div class="grid-title">M5平板电脑皮套键盘</div>
                                            <p class="grid-desc">直降100元&nbsp; </p>
                                            <p class="grid-price">&yen;498</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="12">
                                        <a class="thumb" href="/product/10086072295004.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1526635727042mp.png" alt="Momax 精英3合1编织线（Micro转lightning转USB C-1m）（黑色）"/>
                                            </p>
                                            <div class="grid-title">Momax 精英3合1编织线</div>
                                            <p class="grid-desc">随时随地 快速切换&nbsp; </p>
                                            <p class="grid-price">&yen;98</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="13">
                                        <a class="thumb" href="/product/10086769167918.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1525414197951mp.jpg" alt="三思智能彩色球泡灯（支持HUAWEI HiLink）"/>
                                            </p>
                                            <div class="grid-title">三思智能彩色球泡灯</div>
                                            <p class="grid-desc">限时直降10元&nbsp; </p>
                                            <p class="grid-price">&yen;89</p>
                                            <p class="grid-tips">
                                                    <img data-lazy-src="/home/picture/1497575814983.png" alt="三思智能彩色球泡灯（支持HUAWEI HiLink）"/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="14">
                                        <a class="thumb" href="/product/10086154525129.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1522028875460mp.jpg" alt="海雀摄像头Q1（白色）（支持HUAWEI HiLink）"/>
                                            </p>
                                            <div class="grid-title">海雀摄像头Q1</div>
                                            <p class="grid-desc">限时直降30元&nbsp; </p>
                                            <p class="grid-price">&yen;229</p>
                                            <p class="grid-tips">
                                                    <img data-lazy-src="/home/picture/1497575918300.png" alt="海雀摄像头Q1（白色）（支持HUAWEI HiLink）"/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="15">
                                        <a class="thumb" href="https://www.vmall.com/product/10086293883115.html#10086232642654" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1526025470932mp.jpg" alt="BroadLink博联智能分控带USB插排MP1-1K3S2U-TL（白色）（支持HUAWEI HiLink）"/>
                                            </p>
                                            <div class="grid-title">博联智能分控带USB插排</div>
                                            <p class="grid-desc">限时直降14元&nbsp; </p>
                                            <p class="grid-price">&yen;125</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="16">
                                        <a class="thumb" href="/product/10086588456490.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1527470413646mp.jpg" alt="P20晶彩系列保护壳（黑色）"/>
                                            </p>
                                            <div class="grid-title">P20/ P20 Pro 晶彩系列保护壳</div>
                                            <p class="grid-desc">直降8.1元&nbsp; </p>
                                            <p class="grid-price">&yen;29.90</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide" id="17">
                                        <a class="thumb" href="/product/2615.html" target="_blank">
                                            <p class="grid-img">
                                                        <img data-lazy-src="/home/picture/428_428_1526521652558mp.jpg" alt="锐力 Relee RL108 商务便携式 WIFI云端摄像笔升级版（黑色）"/>
                                            </p>
                                            <div class="grid-title">锐力商务便携式 WIFI云端摄像笔</div>
                                            <p class="grid-desc">限时直降40元&nbsp; </p>
                                            <p class="grid-price">&yen;259</p>
                                        </a>
                                    </li>
                        </ul>
                        <div class="grid-btn swiper-button-prev btn-prev disabled"><span></span></div>
                        <div class="grid-btn swiper-button-next btn-next"><span></span></div>
                    </div>
                </div>
            </div>
        </div>
    <div class="hr-20"></div>
</div>
<!-- 2017-02-15-HOME GOOGLIST-end -->

<div class="channel-floor">
    <div class="layout">
        <!-- 20130903-ad-762*132-start --><div class="ad fl"><a target="_blank" href="https://sale.vmall.com/welcome.html"><img src="/home/picture/20180718170944826.jpg" title="新人见面礼.jpg" style="float:none;" /></a></div><!-- 20130903-ad-762*132-end -->
    </div>
    <div class="hr-60"></div>
</div>  

<!-- 2017-02-15-top-banner-start -->
<textarea id="top-banner" class="hide">
    <!-- 顶部banner -->
    <div class="top-banner-max hide" id="top-banner-max">
        <div class="top-banner-img">
            
            <a title="折叠" href="javascript:;" class="button-top-banner-min" id="top-banner-max-toggle">-</a>
        </div>
    </div>
    <div class="top-banner-min hide" id="top-banner-min">
        <div class="top-banner-img">
            <p style="font-size:0;">
            <a style="display:block;position:relative;width:1920px;text-align:center;left:50%;background-color:;margin-left:-960px;" title="nova3" target="_blank" href="https://sale.vmall.com/nova.html"><img src="/home/picture/20180729113425465.jpg" title="nova3" /></a>
</p>
            <a title="展开" href="javascript:;" class="button-top-banner-max hide" id="top-banner-min-toggle">+</a>
            <a class="button-top-banner-close" href="javascript:;" title="关闭" id="top-banner-min-close">关闭</a>
        </div>
    </div>
    <!-- 顶部banner end -->
</textarea>
<!-- 2017-02-15-top-banner-end -->

<!-- 2017-09-21-bottom-banner-start -->
    
<!-- 2017-09-21-bottom-banner-end -->

<script>
 // 改为异步调用
 // document.write('<script src="/home/js/servertime.js'+ new Date().getTime() +'"></' + 'script>');
</script>
<script>
ec.load("ajax");
ec.pkg("ec.index");
ec.index.clickHref = function (a) {
    window.open(a)
};
ec.index.sales = function (e) {};
ec.index.salesStatus = [];
ec.index.salesCallBack = function (h, k) {
    var f,
    d = [],
    b = new Date();
    b.setTime(ec.index.now.parseDate("yyyy-MM-dd HH:mm:ss"));
    var a = function (i, o) {
        var n = $(o),
        l = n.attr("data-skutype"),
        m = $(".channel-button", n);
        switch (parseInt(i, 10)) {
        case 0:
            m.html("\u9a6c\u4e0a\u5f00\u59cb").attr("title", "\u9a6c\u4e0a\u5f00\u59cb");
            if (l == 3 || l == 4) {
                m.attr("class", "channel-button-begin")
            }
            break;
        case 1:
            if (l == 3) {
                m.html("\u53bb\u770b\u770b").attr("title", "\u53bb\u770b\u770b")
            } else {
                m.html("\u7acb\u5373\u62a2\u8d2d").attr("title", "\u7acb\u5373\u62a2\u8d2d")
            }
            m.attr("class", "channel-button");
            break;
        case 2:
            m.html("\u6d3b\u52a8\u7ed3\u675f").attr("title", "\u6d3b\u52a8\u7ed3\u675f");
            if (l == 2 || l == 3) {
                m.attr("class", "channel-button-end")
            }
            break
        }
    };
    for (var c = 0; c < k.infoList.length; c += 1) {
        f = h[c];
        d = k.infoList[c];
        $(".channel-button", f).css("visibility", "");
        if (!d || !d.id) {
            continue
        }
        if (d.status == 1) {
            if (d.startTime && d.startTime >= b) {
                d.status = 0
            }
            if (d.endTime && d.endTime <= b) {
                d.status = 2
            }
        }
        a(d.status, f);
        if (d.startTime || d.endTime || d.limitAmount > 0) {
            $(".p-countdown", f).show()
        }
        if (d.limitAmount > 0) {
            $(".p-quantity", f).html("\u9650<b>" + d.limitAmount + "</b>\u53f0").show()
        }
        var e = parseFloat($(f).attr("data-price"), 10);
        if (d.price > 0) {
            if (parseInt(d.price) == d.price) {
                $(".p-sale-price span, .p-price span", f).html((d.price));
                if (parseInt(e) == e) {
                    $(".economize", f).html(e - d.price)
                } else {
                    $(".economize", f).html((e - d.price).toFixed(2))
                }
            } else {
                $(".p-sale-price span, .p-price span", f).html((d.price).toFixed(2));
                if (e - d.price == 0) {
                    $(".economize", f).html("0")
                } else {
                    $(".economize", f).html((e - d.price).toFixed(2))
                }
            }
        }
        $(".sale-quantity", f).html(d.saleAmount);
        if (d.status != 2 && (d.startTime || d.endTime)) {
            var g = ($(f).attr("data-block") == "slider") ? true : false,
            j = [];
            if (d.startTime) {
                j.push(new Date(d.startTime).format("yyyy-MM-dd HH:mm:ss"))
            }
            if (d.endTime) {
                j.push(new Date(d.endTime).format("yyyy-MM-dd HH:mm:ss"))
            }
            ec.index.salesStatus[c] = d.status;
            ec.ui.countdown($(".p-time", f), {
                html : "<b>" + (g ? "" : "\u5269\u4f59") + "</b><ins><i>{#hours}</i><s></s></ins><em>\u65f6</em><ins><i>{#minutes}</i><s></s></ins><em>\u5206</em><ins><i>{#seconds}</i><s></s></ins><em>\u79d2</em>",
                now : b,
                times : j,
                index : c,
                callback : function (i) {
                    ec.index.salesStatus[i.index]++;
                    a(ec.index.salesStatus[i.index], h[i.index])
                }
            })
        }
    }
};
ec.ready(function () {

    var skuids = $("#recommendSkuIds").val();
    var value = {
        "UID":ec.util.cookie.get("uid"),
        "TID":getPtid(),
        "TIME":getTime(),
        "CONTENT":
        {
        "SKUID":skuids ,
        "load":"1"
        }
    }
    ec.code.addAnalytics({hicloud:true});
    _paq.push(["trackLink","300011501", "link", value]);
    
    if (ec.account.isLogin()) {
        $("#cust_login_info").hide()
    }
    var a = ec.index.bigAd,
    g = ec.index.smallAd,
    f = ec.index.bigadShowTime,
    e,
    b,
    c = function () {
        var j = b.innerHeight();
        var i = e.innerHeight();
        var k = $("#search-bar-form").offset().top - i + j;
        var h = $("#search-bar-form").innerHeight();
        $(".autocomplete-w1").parent().hide();
        e.slideUp(1000, function () {
            if (g) {
                b.show()
            }
            $(".autocomplete-w1").parent().css({
                top : (k + h + "px")
            });
            $(".autocomplete-w1").parent().show();
            ec.index.SCROLL_GET = ec.index.getscrollLayout()
        });
        if (d) {
            clearTimeout(d)
        }
    },
    d;
    $("#top-banner-block").html(gid("top-banner").value);
    e = $("#top-banner-max");
    b = $("#top-banner-min");
    $("#top-banner-min-close").click(function () {
        $("#top-banner-block").hide();
        ec.index.SCROLL_GET = ec.index.getscrollLayout()
    });
    if (a) {
        e.show();
        ec.index.SCROLL_GET = ec.index.getscrollLayout();
        $("#top-banner-max-toggle").click(c);
        d = setTimeout(c, f)
    }
    if (g && !a) {
        b.show();
        ec.index.SCROLL_GET = ec.index.getscrollLayout()
    }
    if (!g && !a) {
        ec.index.SCROLL_GET = ec.index.getscrollLayout()
    }
    $("body .layout .channel-pro-item").hover(function () {
        $(this).addClass("pro-info-hover")
    }, function () {
        $(this).removeClass("pro-info-hover")
    });
    ec.index.sales("#main-sale-list .activity-list, #slider-sale-list .activity-list");
    ec.index.floatLayout()
});
ec.index.SCROLL_GET = {};
ec.index.getscrollLayout = function () {
    var b = $(".home-channel-container .layout"),
    d = $(".event-float-layout"),
    a = [],
    c = [];
    if (b.length == 0 || d.length == 0) {
        return false
    }
    b.each(function (e, f) {
        c.push($(this).offset().top);
        a.push($(this).outerHeight())
    });
    return {
        scrollListHeight : a,
        scrollList : c,
        top : d.offset().top
    }
};
ec.index.floatLayout = function () {
    var a = $(".event-float-layout");
    if (a.length == 0 || ec.index.SCROLL_GET === false) {
        return false
    }
    $("body").css({
        "min-width" : "1200px",
        "overflow-x" : "hidden"
    });
    var d = $(".event-float"),
    n = $(".hungBar-top"),
    h = $(".home-channel-container .layout"),
    p = $(".home-channel-container"),
    m = $(".home-channel-container .layout .channel-title"),
    l = "";
    a.find("ul").children().remove();
    function f(i) {
        return $("<span/>").text(i).html()
    }
    h.each(function (i, q) {
    var name = f(m.eq(i).text());
        l += '<li><a data-id="' + i + '" href="javascript:;" onclick = "pushMsg(\''+name+'\');">' + name + "</a></li>"
    });
    a.find("ul").append(l);
    a.bind("click", function (r) {
        var q = $(r.target);
        if (q[0].nodeName.toLowerCase() === "a") {
            var i = parseInt(q.attr("data-id"));
            q.parent().addClass("hover").siblings().removeClass("hover");
            $("html,body").animate({
                scrollTop : ec.index.SCROLL_GET.scrollList[i] + "px"
            }, 400)
        }
    });
    var o = a.outerHeight(),
    e = d.offset(),
    c = e.left,
    b = $(window).height(),
    k = b / 2 - (o / 2),
    j = h.length,
    g = true;
    a.css({
        height : j * 47 + "px",
        top : k + "px"
    });
    if (document.body.clientWidth <= 1400) {
        a.hide();
        g = false
    }
    if ($.browser.msie && parseInt($.browser.version) <= 9) {
        a.hide()
    }
    if ($.browser.msie && parseInt($.browser.version) <= 7) {
        g = false
    } else {
        $(window).scroll(function () {
            if (!g) {
                return
            }
            var i = $(window).scrollTop();
            if (i >= b) {
                n.fadeIn(80)
            } else {
                n.fadeOut(80)
            }
            if (i >= ec.index.SCROLL_GET.scrollList[0] - k) {
                a.css({
                    top : k + "px"
                }).addClass("tool-Fixed");
                if ($.browser.msie && parseInt($.browser.version) >= 8 && parseInt($.browser.version) <= 9) {
                    a.show()
                }
                $.each(ec.index.SCROLL_GET.scrollList, function (q, r) {
                    if (i >= r - ec.index.SCROLL_GET.scrollListHeight[q] / 2) {
                        a.find("li").eq(q).addClass("hover").siblings().removeClass("hover")
                    }
                });
                if (i >= (ec.index.SCROLL_GET.scrollList[j - 1] + ec.index.SCROLL_GET.scrollListHeight[j - 1] / 2 - j * 47)) {
                    a.removeClass("tool-Fixed");
                    if ($.browser.msie && parseInt($.browser.version) >= 8 && parseInt($.browser.version) <= 9) {
                        a.hide()
                    }
                }
            } else {
                a.removeClass("tool-Fixed");
                if ($.browser.msie && parseInt($.browser.version) >= 8 && parseInt($.browser.version) <= 9) {
                    a.hide()
                }
            }
        }, 200)
    }
    $(window).resize(function () {
        if (document.body.clientWidth > 1400) {
            a.show();
            g = true;
            return
        }
        a.hide();
        g = false;
        $("body").css({
            "min-width" : "1200px",
            "overflow-x" : "auto"
        })
    }, 200);
    if ($(window).scrollTop() > 0) {
        $(window).trigger("scroll")
    }
};
$(document).ready(function () {
    var c = $(".goods-rolling"),
    a = [];
    c.each(function (f, g) {
        a.push($(this).attr("id"))
    });
    $.each(a, function (f, g) {
    var totalLen =  $("#" + g).find('.swiper-slide').length;
    if(totalLen<=5.5){
        $("#" + g).find('.swiper-button-prev').addClass('disabled');
        $("#" + g).find('.swiper-button-next').addClass('disabled');
    }else{
        $("#" + g).find('.swiper-button-next').removeClass('disabled');
  
    }
    var mySwiper = new Swiper("#" + g, {
        slidesPerView: 5.5,
        slidesPerGroup: 5.5
    });
         // 左边箭头
    $("#" + g).find('.btn-prev').click(function(){
//      插件向左切换效果
        mySwiper.swipePrev();
    })
//  右边箭头
    $("#" + g).find('.btn-next').click(function(){
        mySwiper.swipeNext();
    })

    });
    
    new Slider({
        objid : "#notice",
        listname : ".p-notice-list",
        shownum : 1,
        type : 2,
        autoplay : true
    }).init();
    var b = $(".bottomImage");
    if (b.attr("src")) {
        b.show().bind("click", function () {
            var f = $("#adsArearLink").val();
            if (f != null && f.trim() != "") {
                var g = window.open(f, "_blank");
                g.opener = null
            }
        })
    }
    var e = $(".grid-list .grid-items,.grid-promo-list .grid-items");
    e.hover(function () {
        $(this).addClass("current")
    }, function () {
        $(this).removeClass("current")
    });
    var d = $(".hungBar-top");
    d.bind("click", function () {
        $("html,body").animate({
            scrollTop : "0px"
        }, 400)
    })
})


</script>
<script>
"use strict";var Slider=function(a){this.i=0;this.objid=a.objid||null;this.preclassname=a.preclassname||".btn-prev";this.nextclassname=a.nextclassname||".btn-next";this.listname=a.listname||".grid-list";this.listitem=a.listitem||"li";this.shownum=a.shownum||5.5;this.type=a.type||1;this.autoplay=a.autoplay||false};Slider.prototype={init:function(){var b=this;var a=b.set();if(b.autoplay){b.auto(a)}else{b.next(a);b.pre(a)}},auto:function(e){var d=this,c=null;$(d.listname).find(d.listitem).eq(0).clone().appendTo(d.listname);e.len+=1;var b=(e.itemHeight)*(e.len-1),a=function(){d.i++;if(Math.abs(parseInt(e.$grid.css("margin-top")))==b){e.$grid.css("margin-top",0);d.i=1}e.$grid.animate({"margin-top":"-"+(d.i*e.itemHeight*d.shownum)+"px"},500)};if(d.autoplay){c=setInterval(a,2000);e.$grid.hover(function(){clearInterval(c)},function(){c=setInterval(a,2000)})}},set:function(){var d=this,g=$(d.objid+" "+d.listitem),i=$(d.objid+" "+d.listname),h=$(d.objid+" "+d.preclassname),b=$(d.objid+" "+d.nextclassname),e=g.length,f=g.outerWidth(),a=g.outerHeight(),c=Math.ceil(e/d.shownum);switch(d.type){default:case 1:i.css("width",(f+1)*e+"px");break;case 2:i.css("height",(a)*e+"px");break}return{$item:g,$grid:i,$pre:h,$next:b,len:e,itemWidth:f,itemHeight:a,num:c}},pre:function(b){var a=this;b.$pre.bind("click",function(){if($(this).hasClass("disabled")){return}a.i--;if(a.i-1<0){b.$pre.addClass("disabled")}b.$next.removeClass("disabled");switch(a.type){default:case 1:b.$grid.animate({"margin-left":a.i==0?0:parseInt(b.$grid.css("margin-left"))+(b.itemWidth*a.shownum)+"px"},500);break;case 2:b.$grid.animate({"margin-top":a.i==0?0:parseInt(b.$grid.css("margin-top"))+(b.itemHeight*a.shownum)+"px"},500)}})},next:function(b){var a=this;b.$next.bind("click",function(){if($(this).hasClass("disabled")){return}a.i++;b.$pre.removeClass("disabled");switch(a.type){default:case 1:if(a.shownum>1){if(a.i+1==b.num){var d=parseInt(b.$grid.css("margin-left"));var c=(b.len-((a.i)*parseInt(a.shownum))-1/2)*b.itemWidth;b.$grid.animate({"margin-left":d-c+"px"},500)}else{b.$grid.animate({"margin-left":"-"+(a.i*b.itemWidth*parseInt(a.shownum))+"px"},500)}}else{b.$grid.animate({"margin-left":"-"+(a.i*b.itemWidth*a.shownum)+"px"},500)}break;case 2:b.$grid.animate({"margin-top":"-"+(a.i*b.itemHeight*a.shownum)+"px"},500);break}if(a.i+1==b.num){b.$next.addClass("disabled")}})}};
</script>
<script>
(function (_ec) {
//顶部banner
    _ec.bigAd = false;
    _ec.smallAd = true;
    _ec.bigadShowTime = 8000;
    _ec.now = new Date().format('yyyy-MM-dd HH:mm:ss');
    
    _ec.configNowTime = function(){
        if(_serverTime)
        {
            _ec.now = new Date(_serverTime).format('yyyy-MM-dd HH:mm:ss');
        }
    }
    
    //ec.load({
    //  url : "/serverTime.jsp?"+(new Date()).getTime(),
    //  type : "js",
    //  loadType:"lazy",
    //  onload : _ec.configNowTime
    //});
    
})(ec.index);


/*
 *
 * 首页左浮动位置
 *
 * */ 
(function($){
     function floatShow(){
        function getScrollTop(){
            var scrollTop = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
            return scrollTop;
        }
        if(getScrollTop()>1080){
            if( $(".leftfloat")){
               $(".leftfloat").addClass('leftfloat-show');
               }
        }else{
             if( $(".leftfloat")){
               $(".leftfloat").removeClass('leftfloat-show');
               }
        }
    };
    floatShow();
    
     
    
    window.onscroll=function(){
        floatShow();
    }; 
    function floatPosition() {
        if( $(".leftfloat")){
            var floatLeft =($(window).width()-1200)/2-$('.leftfloat').width()-10,
                floatTop =$(window).height()/2 - $('.leftfloat').height()/2;
            $(".leftfloat").css('left',floatLeft);
            $(".leftfloat").css('top',floatTop);
            setTimeout(floatPosition,100);
            }
    };
    floatPosition();
    window.onresize=function(){
        floatPosition();
    }; 
    /*
     *
     * 首页底部浮动位置
     *
     * */ 
     var $top = $('.home-channel-container .layout').eq(0).offset().top,
         $height = $('.bottom-banner').height();
     $(window).scroll(function (){
        var bottomV = $height*(-1);
        $(".bottom-banner").css("bottom",bottomV+"px");
        var scrollTop = $(window).scrollTop();
        if(scrollTop>=($top-$height)){
            $(".footer-container").css("padding-bottom",$height+"px");
            $(".bottom-banner").addClass('bm-0');
        }else{
             $(".bottom-banner").removeClass('bm-0');
             $(".footer-container").css("padding-bottom","0");
        }
     })
    
})(jQuery);

//会员频道点击上报
function pushMemberMsg(name,url)
{
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
    _paq.push(["trackLink","300010801", "link", value]);
}

//中通广告数据上报
function pushBannerMsg(adid,url)
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
    _paq.push(["trackLink","300011601", "link", value]);
    
}

$(".home-banner-slideshow").find("li").find("a").click(function(){
    var adid = $(this).find("img").attr("src");
    var url = $(this).attr("href");
    pushBannerMsg(adid,url);
});
//商品楼层更多点击上报
function pushFoolMsg(index,category,url){
    var value = {
        "UID":ec.util.cookie.get("uid"),
        "TID":getPtid(),
        "TIME":getTime(),
        "CONTENT":
        {
        "index":index ,
        "category":category,
        "URL":url, 
        "click":"1"
        }
    };
    ec.code.addAnalytics({hicloud:true});
    _paq.push(["trackLink","300011703", "link", value]);
}
//商品楼层商品楼层子分类点击上报
function pushFoolChildrenMsg(index,category,subCategory,url){
    var value = {
        "UID":ec.util.cookie.get("uid"),
        "TID":getPtid(),
        "TIME":getTime(),
        "CONTENT":
        {
        "index":index ,
        "category":category,
        "subCategory":subCategory,
        "URL":url, 
        "click":"1"
        }
    };
    ec.code.addAnalytics({hicloud:true});
    _paq.push(["trackLink","300011701", "link", value]);
}

//底部通栏广告数据上报
$(".ad.fl").find("a").click(function(){
    var value = {
        "UID":ec.util.cookie.get("uid"),
        "TID":getPtid(),
        "TIME":getTime(),
        "CONTENT":
        {
        "name":$(this).find("img").attr("src") ,
        "URL":$(this).attr("href"),            
        "click":"1"
        }
    };
    ec.code.addAnalytics({hicloud:true});
    _paq.push(["trackLink","300011801", "link", value]);
});

//楼层广告数据上报
function pushFoolAdvertMsg(index,category,adid,url)
{
    var value = {
        "UID":ec.util.cookie.get("uid"),
        "TID":getPtid(),
        "TIME":getTime(),
        "CONTENT":
        {
        "index":index, 
        "category":category,             
        "ADID":adid,
        "URL":url,
        "click":"1"
        }
    };
    ec.code.addAnalytics({hicloud:true});
    _paq.push(["trackLink","300011702", "link", value]);
}

//右浮动导航数据上报
$(".hover-list").find("li").find("a").click(function(){
    var value = {
        "UID":ec.util.cookie.get("uid"),
        "TID":getPtid(),
        "TIME":getTime(),
        "CONTENT":
        {
        "buttonName":$(this).html(), 
        "click":"1"
        }
    };
    ec.code.addAnalytics({hicloud:true});
    _paq.push(["trackLink","300010001", "link", value]);
});

//首页弹窗数据上报
$("#web_popup_ads").find("a").click(function(){
    var value = {
        "UID":ec.util.cookie.get("uid"),
        "TID":getPtid(),
        "TIME":getTime(),
        "CONTENT":
        {
        "ADID":$(this).find("img").attr("src"),
        "URL":$(this).attr("href"),
        "click":"1"
        }
    };
    ec.code.addAnalytics({hicloud:true});
    _paq.push(["trackLink","300010002", "link", value]);
});

//楼层商品点击上报
function pushFoolGoodsMsg(obj,location,index,category,skuId,type)
    {
        var row;
        var column;
        if(type == "13")
        {
            var num = (location)/4;
            row = parseInt(num)+1;
            if(row == 1 )
            {
                    column = location+1;
            }
            else
            {
                column = parseInt((location)%4)+1;
            }
        }
        else if(type == "12")
        {
            row = parseInt((location-1)/4)+1;
            column = parseInt((location-1)%4)+1;
        }
        
        
        var url = obj.href;
        var value = {
            "UID":ec.util.cookie.get("uid"),
            "TID":getPtid(),
            "TIME":getTime(),
            "CONTENT":
            {
            "index":index ,
            "category":category,
            "SKUID":skuId,
            "URL" : url,
            "row":""+row,
            "column ":""+column,
            "click":"1"
            }
        };
        ec.code.addAnalytics({hicloud:true});
        _paq.push(["trackLink","300011704", "link", value]);
    }
    
/*  $(".bottom-banner").find("a").click(function(){
        var url = $(this).attr("href");
        var src = $(this).find("img").attr("src");
        var value = {
            "UID":ec.util.cookie.get("uid"),
            "TID":getPtid(),
            "TIME":getTime(),
            "CONTENT":
            {
            "ADID":src,
            "URL":url,
            "type":"1",
            "click":"1"
            }
        };
        ec.code.addAnalytics({hicloud:true});
        _paq.push(["trackLink","300010102", "link", value]);
    });
*/  
    $(".top-banner-min").find("a").live("click",function(){
        var name = $(this).attr("title");
        var type;
        var src;
        var url;
        if($(this).attr("class")=="undefined"||$(this).attr("class")==""||$(this).attr("class")==null)
        {
            type = "1";
            src = $(this).find("img").attr("src");
            url = $(this).attr("href");
        }
        else
        {
            type = "2";
            src = "";
            url = "";
        }
        
        var value = {
            "UID":ec.util.cookie.get("uid"),
            "TID":getPtid(),
            "TIME":getTime(),
            "CONTENT":
            {
            "ADID":src,
            "URL":url,
            "type":type,
            "click":"1"
            }
        };
        ec.code.addAnalytics({hicloud:true});
        _paq.push(["trackLink","300010102", "link", value]);
    });
    
    $(".top-banner-max").find("a").live("click",function(){
        var name = $(this).attr("title");
        var type;
        var src;
        var url;
        if($(this).attr("class")=="undefined"||$(this).attr("class")==""||$(this).attr("class")==null)
        {
            type = "1";
            src = $(this).find("img").attr("src");
            url = $(this).attr("href");
        }
        else
        {
            type = "2";
            src = "";
            url = "";
        }
        
        var value = {
            "UID":ec.util.cookie.get("uid"),
            "TID":getPtid(),
            "TIME":getTime(),
            "CONTENT":
            {
            "ADID":src,
            "URL":url,
            "type":type,
            "click":"1"
            }
        };
        ec.code.addAnalytics({hicloud:true});
        _paq.push(["trackLink","300010101", "link", value]);
    });
    
    function pushMsg(name) {
    var value = {
            "UID":ec.util.cookie.get("uid"),
            "TID":getPtid(),
            "TIME":getTime(),
            "CONTENT":
            {
            "buttonName":name,
            "click":"1"
            }

    };
    ec.code.addAnalytics({hicloud:true});
    _paq.push(["trackLink","300010001", "link", value]);
};

function pushMsgMenu(location,key,name,url){
    var value = {
            "UID":ec.util.cookie.get("uid"),
            "TID":getPtid(),
            "TIME":getTime(),
            "CONTENT":
            {
            "name":name ,
            "URL":url,
            "location":location,
            "click":"1"
            }

    };
    ec.code.addAnalytics({hicloud:true});
    _paq.push(["trackLink",key, "link", value]);
};

function pushMsgNotice(location){
    var value = {
            "UID":ec.util.cookie.get("uid"),
            "TID":getPtid(),
            "TIME":getTime(),
            "CONTENT":
            {
            "location":location,
            "click":"1"
            }

    };
    ec.code.addAnalytics({hicloud:true});
    _paq.push(["trackLink","300011001", "link", value]);
};

$('.home-promo-list.clearfix li a').click(function(){
    var value = {
        "UID":ec.util.cookie.get("uid"),
        "TID":getPtid(),
        "TIME":getTime(),
        "CONTENT":
        {
        "ADID":$(this).parent().find('img').attr("src"),
        "URL":$(this).attr('href'),
        "locaion":$(this).parent().index()+1,   
        "click":"1"
        }
    };
    ec.code.addAnalytics({hicloud:true});
    _paq.push(["trackLink","300011201", "link", value]);
});
</script>
<!--口号-20121025 -->
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
//  $("#video-box").remove();
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
//                          $("#video-box").remove();
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

<div id="globleParameter" class="hide" context="" stylePath="https://res8.vmallres.com/20180720/css" scriptPath="https://res9.vmallres.com/20180720/js" imagePath="https://res.vmallres.com/20180720/images" mediaPath="https://res.vmallres.com/pimages/" ></div>










<!-- 2017-02-15-底部-start -->
<div class="footer-container">
    <div class="footer">
        <div class="footer-warrant-area clearfix"><p class="footer-warrant-logo fl"><a href="https://www.vmall.com"><img src="/home/picture/flogo.png" /></a></p><p class="fl"><a href="https://www.vmall.com/help/faq-2635.html" target="_blank" title="隐私声明" rel="nofollow">隐私声明</a><a href="https://www.vmall.com/help/faq-778.html" target="_blank" title="服务协议" rel="nofollow"> 服务协议</a> Copyright © 2012-2018 华为软件技术有限公司 版权所有 保留一切权利<br />公安备案 <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=32011402010009" target="_blank" rel="nofollow">苏公网安备32011402010009号</a><em> | </em><a target="_blank" href="http://www.miitbeian.gov.cn" rel="nofollow">苏ICP备17040376号-6</a><em> | </em> 增值电信业务经营许可证：苏B2-20130048号<em>| </em><br /></a></p><p class="fr footer-warrant-img"><a class="fl" href="http://privacy.truste.com/privacy-seal/validation?rid=81be9ca0-c821-4e2c-ad4b-ff7cff98f75f&amp;lang=zh-cn" target="_blank" rel="nofollow"><img src="/home/picture/20180522101715775.jpg" alt="TRUSTe隐私认证" title="TRUSTe隐私认证" /></a>                        <a class="fl" href="https://res.vmallres.com/pimages//sale/2018-06/20180615181402966.jpg" target="_blank" rel="nofollow"><img src="/home/picture/20160226162415360.png" alt="电子营业执照" title="电子营业执照" /></a>        <a class="fl" href="https://ss.knet.cn/verifyseal.dll?sn=e13010932010038497pwz6000000&amp;trustKey=dn&amp;trustValue=vmall.com" target="_blank" rel="nofollow"><img src="/home/picture/20160226162521265.png" title="可信网站" alt="可信网站" /></a>        <a class="fl" href="http://sq.ccm.gov.cn:80/ccnt/sczr/service/business/emark/toDetail/2E50AF12E8B14A8B9721D1548FC0CDD2" target="_blank" rel="nofollow"><img src="/home/picture/20180626164548324.png" title="网络文化经营许可证" alt="网络文化经营许可证" /></a>  <a class="fl" id="___szfw_logo___" href="https://credit.szfw.org/CX20170724001650181088.html" target="_blank" rel="nofollow"><img src="/home/picture/20170725194955862.jpg" border="0" /></a></p><script type="text/javascript">(function(){document.getElementById('___szfw_logo___').oncontextmenu = function(){return false;}})();</script>    <p><br /></p></div><script>
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
<!--<script src="/home/js/slider.min.js"></script>-->
<!--<script src="/home/js/swiper.min.js"></script>-->
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
            ec.minicart.readyContent();
            ec.minicart.microCartTpl = new ec.template($('#micro-cart-tpl').val());
            var $miniCart = $('#header-toolbar-minicart-content');
            $('#header-toolbar-minicart').hover(function ()
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
                ec.minicart.content();
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
                    ec.minicart.content();
                });
            });
        
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

<script>

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
</body>
</html>
>>>>>>> origin/zoushuai