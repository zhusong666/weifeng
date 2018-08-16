@extends('layout.index')
@section('title')
@section('myCss')
<link rel="stylesheet" href="/homes/common/css/exchange/index.min.css" />
<link rel="stylesheet" href="/homes/common/css/exchange/serviceList.min.css" />
@show
@section('content')
<div class="xm-service-box">
    <!-- 服务支持面包屑 -->
    <div class="container">
        <div class="breadcrumbs">
            <a href="/">首页</a>
            <span class="sep">/</span>
            <a href="//www.mi.com/service/buy/">帮助中心</a>
            <span class="sep">/</span>
            <a href="//www.mi.com/service/buy/buytime/"></a>

        </div>
    </div>
    <div class="container clearfix">
        <div class="row">
            <!-- 左侧菜单列表 -->
            <div class="span4">
                <div class="xm-service-sidebar">
                    <div class="content">
                        <div class="xm-sidebar-content">
                            <div class="nav-list" id="serviceMenuList">
                            @foreach($rs as $k=>$v)
                                <h3>{{$v->articlecate_name}}</h3>
                                <ul class="uc-nav-list">
                                <!-- 遍历侧边栏 -->
                                @foreach($v->articles as $k1=>$v1)
                                    <li >
                                        <a href="" >{{$v1->article_title}}</a>
                                    </li>
                                @endforeach
                                <!-- 结束 -->
                                </ul>
                                <span class="line"></span>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span16">
                <div class="content" id="serviceListCon">
                <style>
                .service-right img{max-width: 856px;}
                </style>
                    <div class="service-right">
                        <h2>小标题</h2>
                        <div class="service-right-section">
                            内容
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection