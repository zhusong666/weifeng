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
                                        
                                        <li>
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
                                        
                                        
                                        <li class="active">
                                            <a href="/user/address">收货地址</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>

            <!-- 评论模块 -->
                    <div class="span16">

                        <div class="row">
                            <div class="span13 h-comment-main  m-comment-main J_commentCon">
                                <div class="comment-top">
                                    <h2 class="m-tit">热门评价</h2>
                                       
                                </div>

                                <div class="m-comment-box J_commentList">
                                    <ul class="m-comment-list J_listBody">
                                    @foreach( $comments as $k => $v)

                                        <li class="com-item J_resetImgCon J_canZoomBox" data-id="156841065">
                                            <a class="user-img" href="/comment/user?user_id=1159681005" data-stat-id="d4f60288c1a24306" onclick="_msq.push(['trackEvent', '59306e6a924b745c-d4f60288c1a24306', '/comment/useruser_id=1159681005', 'pcpid', '']);">
                                                <img src="{{$v->user->user_face}}">
                                            </a>

                                            <div class="comment-info">
                                                <a class="user-name" href="/comment/user?user_id=1159681005" data-stat-id="7a1200dcfda8b153" onclick="_msq.push(['trackEvent', '59306e6a924b745c-7a1200dcfda8b153', '/comment/useruser_id=1159681005', 'pcpid', '']);">{{$v->user->username}}</a>
                                                <p class="time">日期:{{$v->created_at}}</p>
                                            </div>
                                            
                                            <div class="comment-txt">
                                                <a href="/comment/detail?comment_id=156841065" target="_blank" data-stat-id="7c19ad84787f2671" onclick="_msq.push(['trackEvent', '59306e6a924b745c-7c19ad84787f2671', '/comment/detailcomment_id=156841065', 'pcpid', '']);">{{$v->content}}</a>
                                            </div>

                                            <div class="m-img-list clearfix h-img-list">
                                                <div class="img-item img-item1  showimg">
                                                    <img data-src="//i1.mifile.cn/a2/1533950871_7000458_s756_1008wh.jpg" class="J_resetImgItem J_canZoom" data-index="0" src="//i1.mifile.cn/a2/1533950871_7000458_s756_1008wh.jpg" data-width="756" data-height="1008" style="width: 160px; margin-top: -26.6667px;">
                                                    <div class="loader loader-gray"></div>
                                                </div>
                                                <div class="img-item img-item2  showimg">
                                                    <img data-src="//i1.mifile.cn/a2/1533950871_4632659_s864_1152wh.jpg" class="J_resetImgItem J_canZoom" data-index="1" src="//i1.mifile.cn/a2/1533950871_4632659_s864_1152wh.jpg" data-width="864" data-height="1152" style="width: 160px; margin-top: -26.6667px;">
                                                    <div class="loader loader-gray"></div>
                                                </div>
                                                <div class="J_zoomImgList" style="display: none;">
                                                    <span data-src="//i1.mifile.cn/a2/1533950871_7000458_s756_1008wh.jpg"></span>
                                                    <span data-src="//i1.mifile.cn/a2/1533950871_4632659_s864_1152wh.jpg"></span>
                                                </div>
                                            </div>
                                            
                                            <div class="comment-input">
                                                <input type="text" placeholder="回复楼主" class="J_commentAnswerInput">
                                                <a href="javascript:void(0);" class="btn  answer-btn J_commentAnswerBtn" data-commentid="156841065" data-stat-id="aa3322089cd30d48" onclick="_msq.push(['trackEvent', '59306e6a924b745c-aa3322089cd30d48', 'javascript:void0', 'pcpid', '']);">回复</a></div>
                                            <div class="comment-answer">
                                                
                                                <div class="answer-item">
                                                    <a class="answer-img" href="/comment/user?user_id=70556052" data-stat-id="d053d4b2b6f0db45" onclick="_msq.push(['trackEvent', '59306e6a924b745c-d053d4b2b6f0db45', '/comment/useruser_id=70556052', 'pcpid', '']);">
                                                        <img src="https://s1.mi-img.com/mfsv2/avatar/s008/p01X4nUw0qD8/NrTffttrNMptK9.jpg"></a>
                                                    <div class="answer-content">
                                                        <h3 class="">{{$v->user->username}}</h3>
                                                        <p>{{$v->content}}</p>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                            <div class="J_canZoomData">
                                                <div class="h-userInfo" data-username="于大大" data-showtime="星期六" data-txt="111111" data-avatar="https://cdn.cnbj0.fds.api.mi-img.com/b2c-data-mishop/c52c11c915d43e0ac3286161eec4fcaf.jpg" data-upnum="268" data-commentid="156841065"></div>
                                                <div class="h-answerInfo">
                                                    <div class="answer-item" data-name="官方回复" data-txt="22222" data-upnum="545" data-office="true"></div>
                                                </div>
                                            </div>
                                        </li>

                                         @endforeach

                                    </ul>
                                    <div class="comment-more">
                                        <a class="load-more J_loadMore" href="javascript:;" data-stat-id="6976d3572d4ed38f" onclick="_msq.push(['trackEvent', '59306e6a924b745c-6976d3572d4ed38f', 'javascript:', 'pcpid', '']);" style="display: block;">加载更多</a>
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

@section('js')
<script src="/homes/common/myjs/jquery.min.js"></script>
<script src="/data/indexNav.js"></script>
<script src="/data/indexData.js"></script>
<script src="/homes/common/myjs/common.js"></script>
@endsection
