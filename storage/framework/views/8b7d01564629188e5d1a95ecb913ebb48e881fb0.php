<?php $__env->startSection('title','去付款'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="//s01.mifile.cn/css/base.min.css?v2016d22" />
    <link rel="stylesheet" type="text/css" href="//s01.mifile.cn/css/pay-confirm.min.css?v=2016063001" />
    <script src="/homes/common/myjs/jquery.min.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('header'); ?>
    <div class="site-header site-mini-header">
        <div class="container">
            <div class="header-logo">
                <a class="logo " href="/" title="小米官网"></a>
            </div>
            <div class="header-title" id="J_miniHeaderTitle"><h2>支付完成</h2></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php if(session('error')): ?> 
    <script>
        var error = "<?php echo e(session('error')); ?>";
        swal(error);
    </script>
   
<?php endif; ?>
    <div class="page-main">
        <div class="container confirm-box">
            <form target="_blank" action="#" id="J_payForm" method="post">
                <div class="section section-order" style="height: 100px;">
                    <div class="order-info clearfix">
                        <div class="fl">
                        <h2 class="title" style="padding-top:10px;">交易完成~ 谢谢.您的光临</h2>
                        <h4><em id="asd">3</em>s之后自动跳转回<a href="/user/order">我的订单</a></h4>
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
var time = setInterval(function(){
    n--;
    asd.innerHTML = n;
console.log(n);
    if(n==0){
        // console.log(n);
        // clearInterval(time);
        window.location.replace('/user/order');
        clearInterval(time);
        
    }
},1000)
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>