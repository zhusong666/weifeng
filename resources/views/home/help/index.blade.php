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
                   @foreach($rs as $k=>$v)
                   @foreach($v->articles as $k1=>$v1)
                        <h2>{{$v1->article_title}}</h2>
                        <div class="service-right-section">
                            {{$v1->article_content}}
                        </div>
                    @endforeach
                    @endforeach
                    </div>
                </div>
                <style>
        .pagination{
                            margin-top: 30px;
                            margin-left: 40%;
                        }
                .pagination li{

                    float: left;
                    height: 25px;
                    padding: 0 10px;
                    display: block;
                    font-size: 15px;
                    line-height: 20px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    background-color: skyblue;
                    
                    text-decoration: none;
                        border-right: 0px solid rgba(0, 0, 0, 0);
                    border-left: 1px solid rgba(255, 255, 255, 0.15);
                        box-shadow: 0px 1px 0px rgba(0, 0, 0, 0), inset 0px 1px 0px rgba(255, 255, 255, 0.15);

                }

                .pagination li a{
                    color: azure;
                }


                .pagination .active{

                    background-color: whlie;
                    color: slategray;
                    border: none;
                    background-image: none;
                    box-shadow: inset 0px 0px 4px rgba(0, 0, 0, 0.25);
                }

                .pagination{
                    padding:0 auto;
                    margin:50 auto;
                }

            </style>

            {{$rs->appends(request()->all())->links()}}
            </div>
        </div>
    </div>
</div>
@endsection