@extends('layout.index')
@section('title','我的评论')
@section('css')
<link rel="stylesheet" href="/homes/common/css/base.min.css" />
<link rel="stylesheet" href="/homes/common/css/main.min.css" />
<link rel="stylesheet" href="/homes/common/css/address-edit.min.css" />
@endsection

@section('content')
    <link rel="stylesheet" href="//s01.mifile.cn/css/base.min.css?v20180524a" />
        <link rel="stylesheet" type="text/css" href="//s01.mifile.cn/css/comment/index.min.css?_v=2017081101" />
        <div class="breadcrumbs">
            <div class="container">
                <a href='//www.mi.com/index.html'>首页</a>
                <span class="sep">&gt;</span>
                <span>商品评价</span>
            </div>
        </div>
        <div class="page-main user-main">
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <div class="uc-box uc-sub-box">
                            <div class="uc-nav-box">
                                <div class="box-hd">
                                    <h3 class="title">订单中心</h3>
                                </div>
                                <div class="box-bd">
                                    <ul class="uc-nav-list">
                                        <li>
                                            <a href="/user/order/">我的订单</a>
                                        </li>
                                        
                                        <li class="active">
                                            <a href="/user/comment/">评价晒单</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="uc-nav-box">
                                <div class="box-hd">
                                    <h3 class="title">个人中心</h3>
                                </div>
                                <div class="box-bd">
                                    <ul class="uc-nav-list">
                                        <li>
                                            <a href="/user/details">个人资料</a>
                                        </li>
                                        <li >
                                            <a href="/user/address">收货地址</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>

            <!-- 评论模块 -->
                    <div class="span16">

                        <div class="uc-box uc-main-box">
                            <div class="uc-content-box">
                                <div class="box-hd">
                                    <h1 class="title">商品评价</h1>
                                    <div class="more clearfix">
                                        <ul class="filter-list J_addrType">
                                            <li class="first ">
                                                <a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;待评价商品&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                            </li>
                                            <li >
                                                <a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;已评价商品</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-bd">
                                    <div class="xm-goods-list-wrap">
                                        
                                        <ul class="xm-goods-list clearfix">
                                        
                                        @foreach ($not_com as $k=>$v)
                                        <div style="">
                                                
                                            <li class="xm-goods-item">
                                            <span >{{$v->goods_name}}</span>
                                                <div class="figure figure-img" style="margin-top:20px;">
                                                    <a href="" target="_blank">
                                                        <img src="{{$v->goodsimg->goods_img}}" />
                                                    </a>
                                                </div>
                                               
                                                <p class="price">{{$v->goods_price}}元</p>
                                                <div class="actions">
                                                    <a class="btn btn-primary btn-small J_btnComment" data-gid="2161000055" href="/comments/create/{{$v->goods_id}}">去评价</a>
                                                    <!-- <a class="btn btn-small btn-primary" href="/user/del/{{$v->goods_id}}" target="_blank" id="del" onclick="member_del({{$v->goods_id}})" title="删除订单">删除订单</a> -->
                                                </div>
                                            </li>
                                            </div>
                                        @endforeach
                                        
                                        
                                        @foreach ($ready_com as $k=>$v)
                                            <div style="">
                                            
                                            <li class="xm-goods-item">
                                                <span >{{$v->goods_name}}</span>
                                                <div class="figure figure-img"  style="margin-top:20px;">
                                                    <a href="" target="_blank">
                                                        <img src="{{$v->goodsimg->goods_img}}" />
                                                    </a>
                                                </div>
                                                <h3 class="title">
                                                    <a href=""></a>
                                                </h3>
                                                <p class="price">{{$v->goods_price}}元</p>
                                                
                                            </li>
                                            </div>    
                                        @endforeach  
                                           
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <!-- 模块结束     -->
            
                </div>

            </div>
        </div>


@endsection

<script>
    function member_del(order_id){
        //询问框
        layer.confirm('是否确认删除？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            $.post("{{url('/user/del/')}}/"+order_id,{'_method':'DELETE','_token':"{{csrf_token()}}"},function(data){

                // console.log(data);
                if(data.status == 0){
                    location.href = location.href;
                    layer.msg(data.msg, {icon: 5});
                }else{
                    location.href = location.href;
                    layer.msg(data.msg, {icon: 6});
                }
            });
        }, function(){
        });
    }
</script>

@section('js')
<script src="/homes/common/myjs/jquery.min.js"></script>
<script src="/data/indexNav.js"></script>
<script src="/data/indexData.js"></script>
<script src="/homes/common/myjs/common.js"></script>
@endsection
