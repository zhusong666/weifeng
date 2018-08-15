@extends('layout.index')
@section('title','购物车')
@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/homes/common/css/base.min.css" />
    <link rel="stylesheet" href="/homes/common/css/cart.min.css" />
@endsection  

@section('header')
<div class="site-header site-mini-header">
    <div class="container">
        <div class="header-logo">
            <a class="logo ir" href="/" title="小米官网" data-stat-id="f4006c1551f77f22" onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-f4006c1551f77f22', '//www.mi.com/index.html', 'pcpid']);">小米官网</a>
        </div>
        <div class="header-title has-more" id="J_miniHeaderTitle">
            <h2>我的购物车</h2>
            <p>温馨提示：产品是否购买成功，以最终下单为准哦，请尽快结算</p>
        </div>
        <?php if(!session('uid')){?>
        <div class="topbar-info" id="J_userInfo">
            <a  rel="nofollow" class="link" href="/login" data-needlogin="true">登录</a>
            <span class="sep">|</span>
            <a  rel="nofollow" class="link" href="/register" >注册</a>
        </div>
        <?php
        }else{

        $user = \App\Http\Controllers\Home\UserController::gainUsername();
        ?>
        <div class="topbar-info" id="J_userInfo">
                <span class="user">
                    <a rel="nofollow" class="user-name" href="/user/comment" target="_blank">
                        <span class="name">{{$user->username}}</span> <i class="iconfont"></i>
                    </a>
                    <ul class="user-menu" style="display: none;">
                        <li>
                            <a rel="nofollow" href="/portal">个人中心</a>
                        </li>
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
        <?php } ?>
    </div>
</div>
@endsection
@section('content')
<div class="page-main">

    <div class="container">
        <div class="cart-loading loading hide" id="J_cartLoading">
            <div class="loader"></div>
        </div>
       



        <div id="J_cartBox" class="">
            <div class="cart-goods-list">
                <div class="list-head clearfix">
                    <div class="col col-check"> <i class="iconfont icon-checkbox icon-checkbox-selected" id="J_selectAll">√</i>
                        全选
                    </div>
                    <div class="col col-img">&nbsp;</div>
                    <div class="col col-name">商品名称</div>
                    <div class="col col-price">单价</div>
                    <div class="col col-num">数量</div>
                    <div class="col col-total">小计</div>
                    <div class="col col-action">操作</div>
                </div>
                <div class="list-body" id="J_cartListBody">
                    <div class="item-box" data-cid="">
                        <div class="item-table J_cartGoods" data-sid="" >
                            <div class="item-row clearfix">
                                <div class="col col-check"> <i class="iconfont icon-checkbox icon-checkbox-selected J_itemCheckbox">√</i>
                                </div>
                                <div class="col col-img">
                                    <a href="//item.mi.com/1151900011.html" target="_blank">
                                        <img alt="" src="" width="80" height="80"></a>
                                </div>
                                <div class="col col-name">
                                    <div class="tags"></div>
                                    <h3 class="name">
                                        <a href="//item.mi.com/1151900011.html" target="_blank"></a>
                                    </h3>
                                </div>
                                <div class="col col-price">元</div>
                                <div class="col col-num">
                                    <div class="change-goods-num clearfix J_changeGoodsNum">
                                        <a href="javascript:void(0)" class="J_minus">
                                            <i class="iconfont"></i>
                                        </a>
                                        <input tyep="text" name="" value=""  autocomplete="off" class="goods-num J_goodsNum">
                                        <a href="javascript:void(0)" class="J_plus">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-total">
                                    元
                                    <p class="pre-info"></p>
                                </div>
                                <div class="col col-action">
                                    <a id="2151900016_0_buy" data-msg="确定删除吗？" href="javascript:void(0);" title="删除" class="del J_delGoods">
                                        <i class="iconfont"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

    </div>
    <div class="cart-bar clearfix" id="J_cartBar">
                <div class="section-left">
                    <a href="//list.mi.com/0" class="back-shopping J_goShoping" data-stat-id="cb50063b4f1b9ef0" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-cb50063b4f1b9ef0', '//list.mi.com/0', 'pcpid', '']);">继续购物</a>
                    <span class="cart-total">共 <i id="J_cartTotalNum">1</i> 件商品，已选择 <i id="J_selTotalNum">1</i> 件</span>
                    <span class="cart-coudan hide" id="J_coudanTip">
                        ，还需 <i id="J_postFreeBalance">0.00</i> 元即可免邮费  <a href="javascript:void(0);" id="J_showCoudan" data-stat-id="bb6e0fb00a971e12" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-bb6e0fb00a971e12', 'javascript:void0', 'pcpid', '']);">立即凑单</a>
                    </span>
                </div>
               
                <span class="total-price">
                    合计：<em id="J_cartTotalPrice">2999</em>元
                </span>
                <a href="javascript:void(0);" class="btn btn-a btn btn-primary" id="J_goCheckout" data-stat-id="cbf6ab939b361639" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-cbf6ab939b361639', 'javascript:void0', 'pcpid', '']);">去结算</a>

                <div class="no-select-tip hide" id="J_noSelectTip">
                    请勾选需要结算的商品
                    <i class="arrow arrow-a"></i>
                    <i class="arrow arrow-b"></i>
                </div>
            </div>
</div>

@endsection
@section('js')
<script>
    
</script>
<script src="/homes/common/myjs/jquery.min.js"></script>
<script src="/homes/common/myjs/cart.js"></script>
<script>
    //鼠标滑过显示个人中心菜单效果
    $('#J_userInfo').on('mouseenter','.user',function(){
        $(this).addClass('user-active');
        $(this).find('.user-menu').stop().slideDown(200);
    }).on('mouseleave','.user',function(){
        $(this).removeClass('user-active');
        $(this).find('.user-menu').stop().slideUp(200);
    })
</script>
@endsection