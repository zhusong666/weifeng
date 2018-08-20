@extends('layout.index')
@section('title','我的地址')
@section('css')
<link rel="stylesheet" href="/homes/common/css/base.min.css" />
<link rel="stylesheet" href="/homes/common/css/main.min.css" />
<link rel="stylesheet" href="/homes/common/css/address-edit.min.css" />
@endsection
<style>
    .aa input{
        width:300px;height:40px;margin-bottom:10px;
    }
    .aa span{
        font-size:12px;
        /*color:#666;*/
    }
</style>
@section('content')



    <div class="breadcrumbs">
        <div class="container">
            <a href='//www.mi.com/index.html'>首页</a>
            <span class="sep">&gt;</span>
            <span>修改收货地址</span>
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
                                    <li>
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
                        <div class="uc-content-box">
                            <div class="box-hd">
                                <h1 class="title">修改收货地址</h1>
                            </div>
                            <div class="box-bd">
                                <div class="user-address-list J_addressList clearfix">
                                     <!-- 收货地址 -->
                                    <div class="span16" style="margin-left:262px;height:300px;margin-top:30px;">
                                      <form action="/user/address/{{$res->address_id}}" method="post">
                                        <div class="box-main" style="width:600px;">
                                            <div class="aa">
                                                <input class="input-text" type="text" name="address_name" placeholder="收货人姓名" value="{{$res->address_name}}">
                                                <span class="hym"></span>
                                            </div>
                                            <div class="aa">  
                                                <input class="input-text" type="text" name="address_phone" placeholder="11位手机号" value="{{$nphone}}">
                                                <span class="sjh"></span>
                                            </div>
                                            <div class="aa" style="margin-bottom:10px;">
                                                <div data-toggle="distpicker">
                                                  <select name="address_sheng"  style="height:40px;" value="{{$res->address_sheng}}"></select>
                                                  <select name="address_shi"  style="height:40px;" value="{{$res->address_shi}}"></select>
                                                  <select name="address_xian"  style="height:40px;" value="{{$res->address_xian}}"></select>
                                                </div>
                                            </div>
                                            <div class="aa">  
                                                <input class="input-text" type="text" name="address_details" placeholder="详细地址" value="{{$res->address_details}}">
                                                <span class="dz"></span>
                                            </div>
                                            <div class="aa">  
                                                <input class="input-text" type="text" name="address_zcode" placeholder="邮编" value="{{$res->address_zcode}}">
                                                <span class="yb"></span>
                                            </div>
                                            {{csrf_field()}}

                                            {{method_field('PUT')}}
                                            <input class="btn btn-primary" type="submit" value="修改">
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
    </div>
@endsection

<script type="text/javascript" src="/homes/common/js/jquery-1.9.1.min.js"></script>

@section('js')

<script src="/homes/SJLD/js/distpicker.data.js"></script>
<script src="/homes/SJLD/js/distpicker.js"></script>
<script src="/homes/SJLD/js/main.js"></script>
<link rel="stylesheet" type="text/css" href="/layer-v3.1.1/layer/theme/default/layer.css" />
<script type="text/javascript" src="/layer-v3.1.1/layer/layer.js"></script>

<script>
    //删除
    function member_del(address_id){
        //询问框
        layer.confirm('是否确认删除？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            $.post("{{url('/user/address/')}}/"+address_id,{'_method':'DELETE','_token':"{{csrf_token()}}"},function(data){
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

<script>
    //定义
    var YV = false;
    var PV = false;
    var DV = false;
    var CV = false;

    //验证收货人
    $('input[name=address_name]').blur(function(){
        var ov = $(this).val();
        var reg = /^[a-zA-Z0-9\u4E00-\u9FA5]{2,8}$/;
        if(!reg.test(ov)){
            $(this).next().text(' *用户名格式不正确').css('color','red');
            $(this).css('border','solid 1px red');
            YV = false;     //禁止提交
        } else {
            $(this).next().text(' 恭喜用户名可用').css('color','green');
            $(this).css('border','solid 1px green');
            $('.baocun').removeAttr('type','button');  
            YV = true; 
        }
    })
    //验证手机号
    $('input[name=address_phone]').blur(function(){
        var tv = $(this).val();
        var reg = /^1[3456789]\d{9}$/;
        if(!reg.test(tv)){
            $(this).next().text(' *请填写正确的手机号').css('color','red');
            $(this).css('border','solid 1px red');
            PV = false;     //禁止提交
        }else{
            $(this).next().text(' *恭喜手机号可用').css('color','green');
            $(this).css('border','solid 1px green');
            $('.baocun').removeAttr('type','button');
            PV = true;
        }
    })
    //验证详细地址
    $('input[name=address_details]').blur(function(){
        var av = $(this).val();
        // console.log(av.length);
        if(av.length >1 && av.length < 50 ){
            $(this).next().text(' 恭喜收货地址可用').css('color','green');
            $(this).css('border','solid 1px green');
            DV = true;
        } else {
            $(this).next().text(' *请填写正确的地址').css('color','red');
            $(this).css('border','solid 1px red');
            DV = false;   //禁止提交
        }
    })
    //邮编
    $('input[name=address_zcode]').blur(function(){
        var zv = $(this).val();
        if(zv.length == 6){
            $(this).next().text(' 恭喜邮编填写正确').css('color','green');
            $(this).css('border','solid 1px green');
            CV = true;
        } else {
            $(this).next().text(' 请填写正确的邮编').css('color','red');
            $(this).css('border','solid 1px red');
            CV = false;
        }
    })
    //不为空可点击
    $(':submit').click(function(){
        if(YV && PV && DV && CV){
           
            return true;
        }

        return false;
    })

    
</script>



@endsection

