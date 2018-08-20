@extends('layout.index')
@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/homes/common/css/base.min.css" />
    <link rel="stylesheet" href="/homes/common/css/checkout.min.css" />
    <link rel="stylesheet" href="/homes/common/css/address-edit.min.css" />
@endsection
@section('header')

    <div class="site-header site-mini-header">
        <div class="container">
            <div class="header-logo">
                <a class="logo " href="//www.mi.com/index.html" title="小米官网"></a>
            </div>
            <div class="header-title" id="J_miniHeaderTitle"><h2>确认支付</h2></div>
        </div>
    </div>
@endsection
@section('content')   
<meta name="csrf-token" content="{{ csrf_token() }}">  
    <div class="page-main">
        <div class="container">
            <div class="checkout-box">
                <div class="section section-address">
                    <div class="section-header clearfix">
                        <h3 class="title">收货地址</h3>
                        <div class="more"></div>
                    </div>
                    <div class="section-body clearfix" id="J_addressList">
                     
                        @foreach($res as $k=>$v)
                        <div class="address-item">
                            <dl>
                                <dt>
                                    <span class="tag"></span>
                                    <em class="uname" id="xm">{{$v->address_name}}</em>
                                </dt>
                                <dd class="utel">{{$v->address_phone}}</dd>
                                <dd class="uaddress">{{$v->address_sheng}}{{$v->address_shi}} {{$v->address_xian}}{{$v->address_details}}
                                </dd>
                            </dl>
                            <div class="actions">
                                <a href="javascript:void(0);" data-id="" class="modify J_addressModify">修改</a>
                            </div>
                        </div>
                        
                        @endforeach

                </div>

                <div class="section section-options section-payment clearfix">
                    <div class="section-header">
                        <h3 class="title">支付方式</h3>
                    </div>
                    <div class="section-body clearfix">
                        <ul class="J_optionList options ">
                            <li data-type="pay" class="J_option selected" data-value="1">
                                在线支付
                                <span>（支持支付宝、银联、财付通、小米钱包等）</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="section section-goods">
                    <div class="section-header clearfix">
                        <h3 class="title">商品</h3>
                        <div class="more">
                            <a href="/cart/">
                                返回购物车 <i class="iconfont"></i>
                            </a>
                        </div>
                    </div>
                    
                    @foreach($carts as $k=>$v)
                    <div class="section-body">
                        <ul class="goods-list" id="J_goodsList">
                            <li class="clearfix">
                                <div class="col col-img">
                                    <img src="{{$v[0]->goods_img}}" width="30" height="30">
                                </div>
                                <div class="col col-name">
                                    <a href="//item.mi.com/1161000034.html" target="_blank" data-stat-id="5df49956c521d07e">{{$v['tname']}}</a>
                                </div>
                                <div class="col col-price">{{$v['price']}}元&nbsp;x&nbsp;{{$v['num']}}</div>
                              
                                <div class="col col-total">{{$v['price']*$v['num']}}元</div>
                            </li>
                           
                        </ul>
                    </div>
                    @endforeach

                    
                </div>     
                           
                <div class="section section-count clearfix">
                    @foreach($carts as $k=>$v)
                    <div class="money-box" id="J_moneyBox">
                        <ul>
                            <li class="clearfix">
                                <label>商品件数：</label>
                                <span class="val">{{$v['order_cnt']}}件</span>
                            </li>
                            <li class="clearfix">
                                <label>金额合计：</label>
                                <span class="val">{{$v['prs']}}元</span>
                            </li>
                           
                            <li class="clearfix total-price">
                                <label>应付总额：</label>
                                <span class="val">
                                    <em id="J_totalPrice">
                                        {{$v['prs']}}
                                    </em>
                                    元
                                </span>
                            </li>
                        </ul>
                    </div>
                    @endforeach
                </div>

                <div class="section-bar clearfix">
                    <div class="fl">
                        <div class="seleced-address hide" id="J_confirmAddress"></div>
                        <div class="big-pro-tip hide J_confirmBigProTip"></div>
                    </div>
                    <div class="fr">
                        <a href="javascript:void(0);" class="btn btn-primary" id="J_checkoutToPay">去结算</a>
                    </div>
                </div>
             </div>
        </div>
    </div>

<!-- 大家点缺货提示 -->
<div class="big-pro-tip-pop hide" id="J_popBigProTip"></div>

<!-- 禮品卡提示 S-->
<div class="modal fade modal-hide modal-lipin" id="J_lipinTip">
<div class="modal-header">
    <h3 class="title">温馨提示</h3>
</div>
<div class="modal-body">
    <p>
        为保障您的利益与安全，下单后礼品卡将会被使用，
        <br>且订单信息将不可修改。请确认收货信息：</p>
    <ul>
        <li class="clearfix"> <strong>收&nbsp;&nbsp;货&nbsp;&nbsp;人：</strong>
            <span id="J_lipinUserName"></span>
        </li>
        <li class="clearfix"> <strong>联系电话：</strong>
            <span id="J_lipinUserPhone"></span>
        </li>
        <li class="clearfix">
            <strong>收货地址：</strong>
            <span id="J_lipinUserAddress"></span>
        </li>
    </ul>
</div>
<div class="modal-footer">
    <a href="javascript:void(0);" class="btn btn-primary" id="J_lipinSubmit">确认下单</a>
    <a href="javascript:void(0);" class="btn btn-gray" data-dismiss="modal">返回修改</a>
</div>
</div>
<!--  禮品卡提示 E-->

<!-- 预售提示 S-->
<div class="modal fade modal-hide modal-yushou" id="J_yushouTip">
<div class="modal-header">
    <h3 class="title">请确认收货地址及发货时间</h3>
</div>
<div class="modal-body">
    <ul class="content">
        <li>
            <h3>请确认配送地址，提交后不可变更：</h3>
            <p id="J_yushouAddress"></p>
            <span class="icon icon-1"></span>
        </li>
        <li>
            <h3>支付后发货</h3>
            <p>如您随预售商品一起购买的商品，将与预售商品一起发货</p>
            <span class="icon icon-2"></span>
        </li>
        <li>
            <h3>以支付价格为准</h3>
            <p>如预售产品发生调价，已支付订单价格将不受影响。</p>
            <span class="icon icon-3"></span>
        </li>
    </ul>
</div>
<div class="modal-footer">
    <a href="javascript:void(0);" class="btn btn-gray" data-dismiss="modal">返回修改地址</a>
    <a href="javascript:void(0);" class="btn btn-primary" id="J_yushouSubmit">确认并继续下单</a>
</div>
</div>
<!--  预售提示 E-->

<div class="modal fade modal-hide modal-edit-address" id="J_modalEditAddress">
<div class="modal-body">
    <iframe height="100%" width="100%"  frameborder="0" allowfullscreen=""></iframe>
</div>
</div>

<div class="modal fade modal-hide fade modal-alert" id="J_modalAlert">
<div class="modal-bd">
    <div class="text">
        <h3 id="J_alertMsg"></h3>
    </div>
    <div class="actions">
        <button class="btn btn-primary" data-dismiss="modal">确定</button>
    </div>
    <a class="close" data-dismiss="modal" href="javascript: void(0);">
        <i class="iconfont">&#xe602;</i>
    </a>
</div>
</div>

<div class="address-top-bar" id="J_addressTopBar">
<div class="container">
    <a href="javascript:void(0);" class="btn btn-primary" id="J_addressTopBarBtn">选择该收货地址</a>
    <div class="content" id="J_addressTopCon">
        <span class="asdas">名字</span>
        <span class="asdsad">名字</span>
    </div>
</div>
</div>

<div class="modal modal-warning modal-hide" id="warning-bargain-1463">
<div class="modal-hd">
    <h2 class="title">温馨提示</h2>
    <a class="close" data-dismiss="modal" href="javascript: void(0);">
        <i class="iconfont">&#xe602;</i>
    </a>
</div>
<div class="modal-bd">
    <p> <b>换卡说明：</b>
        <br/>
        <br/>
        移动2G / 3G卡升级为移动4G卡
        <br/>
        传统SIM大卡换小米手机适配的micro卡
    </p>
</div>
</div>

<div class="modal modal-warning modal-hide" id="warning-bargain-1464">
<div class="modal-hd">
    <h2 class="title">温馨提示</h2>
    <a class="close" data-dismiss="modal" href="javascript: void(0);">
        <i class="iconfont">&#xe602;</i>
    </a>
</div>
<div class="modal-bd">
    <p> <b>换卡说明：</b>
        <br/>
        <br/>
        移动2G / 3G卡升级为移动4G卡
        <br/>
        传统SIM大卡换小米手机适配的nano卡
    </p>
</div>
</div>

<!-- 保险弹窗 -->
<!-- 保险弹窗 -->

<div class="modal in hide modal-baoxian" id="J_baoxian">
<div class="modal-header">
    <h3>小米意外保障服务</h3>
    <span class="close" data-dismiss="modal">
        <i class="iconfont">&#xe602</i>
    </span>
</div>
<div class="modal-body">
    <div class="con-1">
        <h4>购买保障服务的设备在意外受损时可获得免费维修</h4>
        <ul class="icon-list clearfix">
            <li>
                <span class="icon icon-1"></span>
                屏幕碎裂免费换新屏
            </li>
            <li>
                <span class="icon icon-2"></span>
                进水、摔落免费修
            </li>
            <li>
                <span class="icon icon-3"></span>
                修好为止
            </li>
        </ul>
        <dl class="xuzhi">
            <dt>为保障您的权益，购买前请仔细阅读：</dt>
            <dd>· 本保障服务目前仅适用于小米/平板用户。</dd>
            <dd>· 本保障服务自您收到设备起生效，有效期为一年，若您在收到设备7日内需要取消保障服务，请连同设备一起申请退货。</dd>
            <dd>
                · 故意行为导致的设备损坏以及盗窃、抢劫、遗失设备等不在服务保障范围内（具体以小米意外保障服务条款为准）。
                <br>
                <a href="http://www.mi.com/service/safe" target="_blank" class="J_baoxianMore">了解《小米意外保障服务》详细条款></a>
            </dd>
        </dl>
    </div>
</div>
<div class="modal-footer clearfix">
    <p>
        <span class="J_baoxianAgree">
            <i class="iconfont icon-checkbox">&#x221a;</i>
            我已经阅读并同意
        </span>
        《
        <a  href="http://www.mi.com/service/safe" target="_blank"  class="J_baoxianMore">小米意外保障服务条款</a>
        》
    </p>
    <a class="btn btn-primary J_buyBaoxian" >确认并购买服务</a>
    <a class="btn btn-gray" data-dismiss="modal" aria-hidden="true">取消</a>
</div>
</div>
@endsection

@section('js')
<script>

</script>
<script src="/homes/common/myjs/jquery.min.js"></script>
<script type="text/javascript">
    $('.address-item').click(function(){
        $(this).css('border','solid 3px #ff6700');
    })

    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    $('#J_checkoutToPay').click(function(){
        var add = [];
        $('.address-item').each(function(){
            var order_linkman =  $('.uname').text();
            var order_address =  $('.uaddress').text();
            var order_phone =  $('.utel').text();
            add.push([order_linkman,order_address,order_phone]);
        })
        
         $.post('/home/count',{add:add},function(data){
           if(data){
                location.replace('/user/pay?id={{session("order_id")}}');
            }else{
                location.href = location.href;
                layer.msg(data.msg, {icon: 5});
            }
        })

    })

</script>    
@endsection