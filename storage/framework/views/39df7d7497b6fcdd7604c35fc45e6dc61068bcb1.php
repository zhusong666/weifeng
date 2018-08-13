<!doctype html>
<html lang="zh-CN" xml:lang="zh-CN">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta charset="UTF-8" />
    <title>小米商城</title>
    <meta name="description" content="小米商城-直营小米公司旗下所有产品，囊括小米手机、红米手机、小米电视、智能硬件、配件及小米生活周边，同时提供小米客户服务及售后支持。" />
    <meta name="keywords" content="小米,小米官网,小米手机,小米官网首页,小米商城" />
    <meta name="viewport" content="width=1226" />
    <?php $__env->startSection('css'); ?>
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/homes/common/css/base.min.css" />
    <?php echo $__env->yieldSection(); ?>
    <?php $__env->startSection('myCss'); ?>
    <?php echo $__env->yieldSection(); ?>
</head>
<style type="text/css">
    

</style>
<body>
<?php $__env->startSection('header'); ?>
    <div class="site-topbar">
        <div class="container">
            <div class="topbar-nav">
                <a rel="nofollow" href="/" >小米商城</a>

            </div>
            <div class="topbar-cart" id="J_miniCartTrigger">
                <a rel="nofollow" class="cart-mini" id="J_miniCartBtn" href="/cart/"> <i class="iconfont">&#xe60c;</i>
                    购物车
                    <span class="cart-mini-num J_cartNum"></span>
                </a>
                
                    
                        
                    
                
            </div>
            <!--  <?php if(!session('uid')){?> -->
            <div class="topbar-info" id="J_userInfo">
                <a  rel="nofollow" class="link" href="/login" data-needlogin="true">登录</a>
                <span class="sep">|</span>
                <a  rel="nofollow" class="link" href="/login/register" >注册</a>
            </div>
            <!-- <?php 
                }else{ 
            
                    $user = \App\Http\Controllers\Home\UserController::gainUsername();
            ?> -->
            <div class="topbar-info" id="J_userInfo">
                <span class="user">
                    <a rel="nofollow" class="user-name" href="/user/comment" target="_blank">
                        <span class="name"><!-- <?php echo e($user->username); ?> --></span> <i class="iconfont"></i>
                    </a>
                    <ul class="user-menu" style="display: none;">

                        <li>
                            <a rel="nofollow" href="/user/comment" target="_blank">评价晒单</a>
                        </li>
                        <!-- <li>
                            <a rel="nofollow" href="http://order.mi.com/user/favorite" target="_blank">我的喜欢</a>
                        </li> -->
                        <li>
                            <a rel="nofollow" href="/user/logout">退出登录</a>
                        </li>
                    </ul>
                </span>
                <span class="sep">|</span>
                <a rel="nofollow" class="link link-order" href="/user/order/" target="_blank">我的订单</a>
            </div>
            <!-- <?php } ?> -->
        </div>
    </div>
    <div class="site-header">
        <div class="container">
            <div class="header-logo" style="width:220px;">
                <div style="float:left;"><a class="logo ir" href="/" title="小米官网" style=""> 小米官网</a></div>
                <div style="float:left;"><a href="//www.mi.com/a/h/6624.html?client_id=180100041086&amp;masid=17409.0425"><img src="/homes/common/image/163git66.gif" height="55px"></a></div>
                
            </div>
           

  











<div class="site-category"> 
   <ul id="J_categoryList" class="site-category-list clearfix"> 

    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catek => $catev): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="category-item"> <a class="title" href="//www.mi.com/p/3469.html?client_id=180100041086&amp;masid=17409.0245" data-stat-id="886b68ab740e29bb" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-886b68ab740e29bb', '//www.mi.com/p/3469.htmlclient_id=180100041086&amp;masid=17409.0245', 'pcpid', '']);"><?php echo e($catev->cate_name); ?><i class="iconfont"></i></a> 
    <div class="children clearfix children-col-3"  >
        <ul class="children-list children-list-col children-list-col-1" style=" width:1000px;">
            <?php $__currentLoopData = $catev['goods']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $goodsk => $goodsv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div >
                <li style=" display:inline;"> 
                     <a class="link" href="https://www.mi.com/aircondition/third" data-stat-id="0cb048b7c1ea5757" >
                      
                        <img class="thumb" src="<?php echo e($goodsv->imgs); ?>" width="40" height="40" alt="" />
                        
                         <span class="text"> <?php echo e($goodsv->goods_name); ?></span>
                    </a> 
                </li>
            </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
     </div>

    </li> 
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

   </ul>
  </div>















            <div class="header-search">

                <form id="J_searchForm" class="search-form clearfix" action="/list_search" method="get">
                    <label for="search" class="hide">站内搜索</label>
                    <input class="search-text" type="search" id="search" name="kWord" autocomplete="off" style="width:400px;"/>
                    <input type="submit" class="search-btn iconfont" value="&#xe616;" />
                    <div class="search-hot-words">
                        <a href="/list_search?kWord=小米手机5">小米手机5</a>
                    </div>
                </form>
            </div>

        </div>

        <div id="J_navMenu" class="header-nav-menu" style="display: none;"><div class="container"></div></div>
    </div>
<?php echo $__env->yieldSection(); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->yieldSection(); ?>
    <div class="site-footer">
        <div class="container">
            <div class="footer-service">
                <ul class="list-service clearfix">
                    <li>
                        <a rel="nofollow" href="/" target="_blank">
                            <i class="iconfont">&#xe634;</i>
                            1小时快修服务
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="/" target="_blank">
                            <i class="iconfont">&#xe635;</i>
                            7天无理由退货
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="/" target="_blank">
                            <i class="iconfont">&#xe636;</i>
                            15天免费换货
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="/" target="_blank">
                            <i class="iconfont">&#xe638;</i>
                            满150元包邮
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="/" target="_blank">
                            <i class="iconfont">&#xe637;</i>
                            520余家售后网点
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer-links clearfix">
                <!-- 友情链接 -->    
                <dl class="col-links col-links-first">
                    <dt>帮助中心</dt>
                    
                    <dd><a rel="nofollow" href="//www.mi.com/service/account/register/"   target="_blank">账户管理</a></dd>
                    
                    <dd><a rel="nofollow" href="//www.mi.com/service/buy/buytime/"   target="_blank">购物指南</a></dd>
                    
                    <dd><a rel="nofollow" href="//www.mi.com/service/order/sendprogress/"   target="_blank">订单操作</a></dd>
                    
                </dl>
                    
                <dl class="col-links ">
                    <dt>服务支持</dt>
                    
                    <dd><a rel="nofollow" href="//www.mi.com/service/exchange"   target="_blank">售后政策</a></dd>
                    
                    <dd><a rel="nofollow" href="//www.mi.com/service/"   target="_blank">自助服务</a></dd>
                    
                    <dd><a rel="nofollow" href="//www.mi.com/c/service/download/"   target="_blank">相关下载</a></dd>
                    
                </dl>
                    
                <dl class="col-links ">
                    <dt>线下门店</dt>
                    
                    <dd><a rel="nofollow" href="//www.mi.com/c/xiaomizhijia/"   target="_blank">小米之家</a></dd>
                    
                    <dd><a rel="nofollow" href="//www.mi.com/static/maintainlocation/"   target="_blank">服务网点</a></dd>
                    
                    <dd><a rel="nofollow" href="//www.mi.com/static/familyLocation/"   target="_blank">授权体验店</a></dd>
                    
                </dl>
                    
                <dl class="col-links ">
                    <dt>关于小米</dt>
                    
                    <dd><a rel="nofollow" href="//www.mi.com/about/"   target="_blank">了解小米</a></dd>
                    
                    <dd><a rel="nofollow" href="http://hr.xiaomi.com/"   target="_blank">加入小米</a></dd>
                    
                    <dd><a rel="nofollow" href="//www.mi.com/ir/"   target="_blank">投资者关系</a></dd>
                    
                </dl>
                    
                <dl class="col-links ">
                    <dt>关注我们</dt>
                    
                    <dd><a rel="nofollow" href="https://weibo.com/xiaomishangcheng"   target="_blank">新浪微博</a></dd>
                    
                    <dd><a rel="nofollow" href="#J_modalWeixin" data-toggle="modal" >官方微信</a></dd>
                    
                    <dd><a rel="nofollow" href="//www.mi.com/about/contact/"   target="_blank">联系我们</a></dd>
                    
                </dl>
                    
                <dl class="col-links ">
                    <dt>特色服务</dt>
                    
                    <dd><a rel="nofollow" href="//order.mi.com/queue/f2code"   target="_blank">F 码通道</a></dd>
                    
                    <dd><a rel="nofollow" href="//www.mi.com/giftcode/"   target="_blank">礼物码</a></dd>
                    
                    <dd><a rel="nofollow" href="//order.mi.com/misc/checkitem"   target="_blank">防伪查询</a></dd>
                    
                </dl>
 

                <div class="col-contact">
                    <p class="phone">400-100-5678</p>
                    <p>
                        <span class="J_serviceTime-normal">周一至周日 8:00-18:00</span>
                        <span class="J_serviceTime-holiday" style="display:none;">2月7日至13日服务时间 9:00-18:00</span>
                        <br>（仅收市话费）</p>
                    <a rel="nofollow" class="btn btn-line-primary btn-small" href="/" target="_blank">
                        <i class="iconfont">&#xe600;</i>
                        24小时在线客服
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="site-info">
        <div class="container">
            <div class="logo ir">小米官网</div>
            <div class="info-text">

                <p>
                    &copy;
                    <a href="//www.mi.com/" target="_blank" title="mi.com">mi.com</a>
                    京ICP证00001号 京ICP备0000000号
                    <a rel="nofollow"  href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134" target="_blank">京公网安备0000000000000000号</a>
                    <a rel="nofollow"  href="//c1.mifile.cn/f/i/2013/cn/jingwangwen.jpg" target="_blank" rel="nofollow">京网文[2014]0059-0009号</a>

                    <br>违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</p>
            </div>
            <div class="info-links">
                <a  rel="nofollow" href="//privacy.truste.com/privacy-seal/validation?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&lang=zh-cn" target="_blank">
                    <img  rel="nofollow" src="//privacy-policy.truste.com/privacy-seal/seal?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8" alt="TRUSTe Privacy Certification" />
                </a>
                <a  rel="nofollow" href="//search.szfw.org/cert/l/CX20120926001783002010" target="_blank">
                    <img  rel="nofollow" src="//s01.mifile.cn/i/v-logo-2.png" alt="诚信网站" />
                </a>
                <a  rel="nofollow" href="https://ss.knet.cn/verifyseal.dll?sn=e12033011010015771301369&ct=df&pa=461082" target="_blank">
                    <img  rel="nofollow" src="//s01.mifile.cn/i/v-logo-1.png" alt="可信网站" />
                </a>
                <a  rel="nofollow" href="http://www.315online.com.cn/member/315140007.html" target="_blank">
                    <img  rel="nofollow" src="//s01.mifile.cn/i/v-logo-3.png" alt="网上交易保障中心" />
                </a>
            </div>
        </div>
        <div class="slogan ir">探索黑科技，小米为发烧而生</div>
    </div>
    <div id="J_modalWeixin" class="modal fade modal-hide modal-weixin" data-width="480" data-height="520">
        <div class="modal-hd">
            <a class="close" data-dismiss="modal">
                <i class="iconfont">&#xe602;</i>
            </a>
            <span class="title">小米手机官方微信二维码</span>
        </div>
        <div class="modal-bd">
            <p style="margin: 0 0 10px;">
                打开微信，点击右上角的“+”，选择“扫一扫”功能，
                <br/>
                对准下方二维码即可。
            </p>
            <img alt="" src="//c1.mifile.cn/f/i/2014/cn/qr.png" width="375" height="375" />
        </div>
    </div>
    <?php $__env->startSection('js'); ?>
    <script src="/homes/common/myjs/jquery.min.js"></script>
    <script src="/data/indexNav.js"></script>
    <script src="/data/indexData.js"></script>
    <script src="/homes/common/myjs/jquery.SuperSlide.js"></script>
    <script src="/homes/common/myjs/common.js"></script>
    <script src="/homes/common/myjs/index.js"></script>
    <?php echo $__env->yieldSection(); ?>
    <?php $__env->startSection('LDjs'); ?>
    <?php echo $__env->yieldSection(); ?>
</body>
</html>
   