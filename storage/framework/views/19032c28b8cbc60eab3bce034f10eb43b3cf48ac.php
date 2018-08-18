<?php $__env->startSection('title','我的评论'); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="/homes/common/css/base.min.css" />
<link rel="stylesheet" href="/homes/common/css/main.min.css" />
<link rel="stylesheet" href="/homes/common/css/address-edit.min.css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
                                        
                                        <?php $__currentLoopData = $not_com; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div style="">
                                                
                                            <li class="xm-goods-item">
                                            <span ><?php echo e($v->goods_name); ?></span>
                                                <div class="figure figure-img" style="margin-top:20px;">
                                                    <a href="" target="_blank">
                                                        <img src="<?php echo e($v->goodsimg->goods_img); ?>" />
                                                    </a>
                                                </div>
                                               
                                                <p class="price"><?php echo e($v->goods_price); ?>元</p>
                                                <div class="actions">
                                                    <a class="btn btn-primary btn-small J_btnComment" data-gid="2161000055" href="/comments/create/<?php echo e($v->goods_id); ?>">去评价</a>
                                                </div>
                                            </li>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                        
                                        <?php $__currentLoopData = $ready_com; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div style="">
                                            
                                            <li class="xm-goods-item">
                                                <span ><?php echo e($v->goods_name); ?></span>
                                                <div class="figure figure-img"  style="margin-top:20px;">
                                                    <a href="" target="_blank">
                                                        <img src="<?php echo e($v->goodsimg->goods_img); ?>" />
                                                    </a>
                                                </div>
                                                <h3 class="title">
                                                    <a href=""></a>
                                                </h3>
                                                <p class="price"><?php echo e($v->goods_price); ?>元</p>
                                                
                                            </li>
                                            </div>    
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                           
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


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="/homes/common/myjs/jquery.min.js"></script>
<script src="/data/indexNav.js"></script>
<script src="/data/indexData.js"></script>
<script src="/homes/common/myjs/common.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>