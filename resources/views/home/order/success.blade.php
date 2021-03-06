@extends('layout.index')
@section('title','去付款')
@section('css')
    <link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="//s01.mifile.cn/css/base.min.css?v2016d22" />
    <link rel="stylesheet" type="text/css" href="//s01.mifile.cn/css/pay-confirm.min.css?v=2016063001" />
    <script src="/homes/common/myjs/jquery.min.js"></script>
@endsection
@section('header')
    <div class="site-header site-mini-header">
        <div class="container">
            <div class="header-logo">
                <a class="logo " href="/" title="小米官网"></a>
            </div>
            <div class="header-title" id="J_miniHeaderTitle"><h2>支付完成</h2></div>
        </div>
    </div>
@endsection
@section('content')
@if(session('error')) 
    <script>
        var error = "{{session('error')}}";
        swal(error);
    </script>
   
@endif
    <div class="page-main">
        <div class="container confirm-box">
            <form target="_blank" action="#" id="J_payForm" method="post">
                <div class="section section-order" style="height: 100px;">
                    <div class="order-info clearfix">
                        <div class="fl">
                        <h2 class="title" style="padding-top:10px;">交易完成~ 谢谢.您的光临</h2>
                        <h4><em id="asd">3</em>s之后自动跳转回<a href="/user/order" id="stop">我的订单</a></h4>
                        </div>
                        <div class="fr">
                           
                        </div>
                    </div> <i class="iconfont icon-right">&#x221a;</i>

                </div>

            </div>
        </form>
    </div>
</div>
<script>
var n = 3;
var asd = document.getElementById('asd');
var stop = document.getElementById('stop');

var time = setInterval(function(){
    n--;
    asd.innerHTML = n;

    $('#stop').click(function(){
        window.location.replace('/user/order');
        clearInterval(time);
    })

    if(n==0){
        // console.log(n);
        // clearInterval(time);
        window.location.replace('/user/order');
        clearInterval(time);
        
    }
},1000)
</script>
@endsection
