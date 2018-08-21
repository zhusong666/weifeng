@extends('layout.index')
@section('title','个人中心')
@section('css')

<link rel="stylesheet" href="/homes/common/css/base.min.css" />
<link rel="stylesheet" href="/homes/common/css/main.min.css" />
<script type="text/javascript" src="/homes/common/js/jquery-1.9.1.min.js"></script>
@endsection

@section('content')
<style>
    .label{
            float: left;
            height: 18px;
            line-height: 18px;
            padding: 6px 0;
            width: 100px;
            text-align: right;
            font: 13px Arial,Verdana,"\5b8b\4f53";
            color: #666;
    }

    .mr{
        margin-right:10px;
    }
    .jdradio{
        margin-right:5px;
        margin-top:8px;
    }
    .em{
        color:red;
        margin-right:3px;
    }
    #user-info{
        overflow: hidden;
        width: 190px;
        float: left;
        padding: 10px;
        margin-bottom: 10px;
        height: 102px;
        background: #f9f9f9;
        border: 1px solid #ccc;
        color: #666;
        line-height: 20px;
        margin-left:60px;
        margin-top:20px;
    }
    .u-pic{
        margin-left: 35px;
        position: relative;
        z-index: 0;
        width: 104px;
        height: 104px;
        overflow: hidden;
        text-align: center;
    }

    #user-info .u-pic img {
        width: 100px;
        height: 100px;
        border: 0;
        vertical-align: middle;
    }
    #user-info .info-m {
        float: left;
        width: 170px;
    }
    #user-info .u-pic .mask {
        background: url('/homes/common/image/myjd-bg2.png') 0 0;
        width: 104px;
        height: 104px;
        position: absolute;
        left: 0;
        top: 0;
        z-index: 2;
    }
</style>
<div class="breadcrumbs">
    <div class="container">
        <a href="//www.mi.com/index.html">首页</a><span class="sep">&gt;</span><span>个人资料</span>
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
                                    <a href="/comments">评价晒单</a>
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
                                    <a href="/user/details">个人资料</a>
                                </li>
                                <li>
                                    <a href="/user/address">收货地址</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span16">
                <div class="uc-box uc-main-box">
                    <div class="uc-content-box order-list-box">
                        <div class="box-hd" style="height:500px;">
                        
                            <div style="float:left;">
                            <style type="text/css">
                                #success{
                                    color: green;
                                    text-align: center;
                                }
                                #error{
                                    color: orangered;
                                    text-align: center;
                                }
                            </style>
                            <div class="enter-area" id="success">
                                @if(session('success'))
                                    <h4 id="success">
                                        {{ session('success') }}
                                    </h4>
                                @endif
                            </div>
                            <div class="enter-area" id="error">
                                @if(session('error'))
                                    <h3 id="error">
                                        {{ session('error') }}
                                    </h3>
                                @endif
                            </div>
                             <form action="/user/doedit/{{$res->user_id}}" method="post" enctype='multipart/form-data'>
                                <h3>基本信息</h3>
                                <div class="more clearfix" style="margin-top:30px;width:300px">
                                    <span class="label">用户名：</span>
                                    <input type="text" name="username" value="{{$res->username}}" disabled="false">
                                </div>
                                <div class="more clearfix" style="margin-top:30px;width:380px">
                                    <span class="label">用户图片：</span>
                                    <input type="file" name="image" >
                                </div>
                                <div id="user-info">
                                    <div class="u-pic">
                                        <img name="smallimg" src="{{$res->user_face}}" />
                                        <div class="mask"></div>
                                        <div class="face-link-box"></div>
                                    </div>
                                </div>
                                <div class="more clearfix" style="margin-top:40px;width:300px">
                                    <span class="label"><em class="em">*</em>性别：</span>
                                    <div style="width:280px">
                                        <input type="radio" name="user_sex" class="jdradio" value="0" @if($res->user_sex=='0')checked @endif ><label class="mr">男</label>
                                        <input type="radio" name="user_sex" class="jdradio" value="1" @if($res->user_sex=='1')checked @endif ><label class="mr">女</label>
                                        <input type="radio" name="user_sex" class="jdradio" value="2" @if($res->user_sex=='2')checked @endif ><label class="mr">保密</label>
                                    </div>
                                </div>
                                <div class="more clearfix" style="margin-top:30px;width:400px">
                                    <span class="label"><em class="em">*</em>年龄：</span>
                                    <input type="text" name="user_age" value="{{$res->user_age}}">
                                    <span class="nl"></span>
                                </div>
                                <div class="more clearfix" style="margin-top:30px;width:400px">
                                    <span class="label"><em class="em">*</em>电话：</span>
                                    <input type="text" name="user_phone" value="{{$nphone}}">
                                    <span class="sjh"></span>
                                </div>
                                <div class="more clearfix" style="margin-top:30px;">
                                    {{csrf_field()}}
                                    <input type="submit" value="&nbsp;&nbsp;修改&nbsp;&nbsp;" style="margin-left:130px;">
                                </div>
                                </form>
                            </div>
                        
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="deliver-beta hide" id="J_deliverBeta">
    <p>预计送达时间功能处于测试阶段，若您在下单时已选择“周末送货”或“工作日送货”，则会顺延至您要求的时间，如果发现预计送达时间不准确，期待您的反馈，我们会及时改进。</p>
    <a href="//static.mi.com/feedback/" target="_blank">问题反馈 &gt;</a>
    <i class="arrow arrow-a"></i>
    <i class="arrow arrow-b"></i>
</div>
<script>
        var NV = true;
        var SV = true;

        //手机号
        $('input[name=user_phone]').focus(function(){

            $(this).css('border','solid 1px purple');
        })

        $('input[name=user_phone]').blur(function(){

            var sj = $(this).val();

            var reg = /^1[3456789]\d{9}$/;

            if(!reg.test(sj)){

                $('.sjh').text(' *请填写正确的手机号').css('color','red');

                $(this).css('border','solid 1px red');

                NV = false;
            } else {

                $('.sjh').text(' 恭喜手机号可用').css('color','green');

                $(this).css('border','solid 1px green');

                NV = true;
            }
        })

        //年龄
        $('input[name=user_age]').focus(function(){

             $(this).css('border','solid 1px purple');
        }).blur(function(){

            var nj = $(this).val();

            if(nj<=0 || nj >= 150){

                $('.nl').text(' *您填写的年龄有误').css('color','red');

                $(this).css('border','solid 1px red');

                SV = false;
            } else {

                $('.nl').text(' 验证正确').css('color','green');

                $(this).css('border','solid 1px green');

                SV = true;

            }
        })

        //控制提交功能
        $(':submit').click(function(){

            if(NV && SV){

                return true;
            }

            return false;
        })

</script>



<div class="modal modal-appcode modal-hide fade" id="J_modalAppcode">
  <a class="close" data-dismiss="modal" href="javascript: void(0);"><i class="iconfont">&#xe602;</i></a>
  <div class="modal-header">
    <h3 class="title">查看电子门票</h3>
  </div>
  <div class="modal-body">
    <p>发布会电子门票仅支持在小米商城 App 查看<br>扫码下载小米商城</p>
    <img src="//s1.mi.com/m/ghd/2016/0422max/images/2-2efadb9f14.png" alt="">
  </div>
</div>


@endsection
@section('js')
<script src="/homes/common/myjs/jquery.min.js"></script>
<script src="/data/indexNav.js"></script>
<script src="/data/indexData.js"></script>
<script src="/homes/common/myjs/common.js"></script>
@endsection