<?php $__env->startSection('title','我的地址'); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="/homes/common/css/base.min.css" />
<link rel="stylesheet" href="/homes/common/css/main.min.css" />
<link rel="stylesheet" href="/homes/common/css/address-edit.min.css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<script src="/homes/SJLD/js/distpicker.data.js"></script>
<script src="/homes/SJLD/js/distpicker.js"></script>
<script src="/homes/SJLD/js/main.js"></script>


    <div class="breadcrumbs">
        <div class="container">
            <a href='//www.mi.com/index.html'>首页</a>
            <span class="sep">&gt;</span>
            <span>收货地址</span>
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
                                    <li class="active">
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
                                <h1 class="title">收货地址</h1>
                            </div>
                            <div class="box-bd">

                                <div class="user-address-list J_addressList clearfix">
                                    <div class="address-item address-item-new" data-type="" id="J_newAddress"> <i class="iconfont">&#xe609;</i>
                                        添加新地址
                                    </div>

                                    <div data-toggle="distpicker" id="#distpicker">
                                        <select name="sheng"></select>
                                        <select name="shi"></select>
                                        <select name="xian"></select>
                                   </div>

                                   <!--  <div data-toggle="distpicker">
                                     <select name="sheng">w</select>
                                     <select name="shi">w</select>
                                     <select name="xian">w</select>
                                   </div>
                                    -->
                                    <?php if(!empty($address)): ?>
                                    <!-- <?php $__currentLoopData = $address; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="address-item J_addressItem" 
                                     data-address_id='<?php echo e($v->id); ?>'
                                     data-consignee='<?php echo e($v->consignee); ?>'
                                     data-tel='<?php echo e($v->tel); ?>'
                                     data-province_name='<?php echo e($v->province); ?>'
                                     data-city_name='<?php echo e($v->city); ?>'
                                     data-district_name='<?php echo e($v->district); ?>'
                                     data-address='<?php echo e($v->address); ?>'
                                    >
                                        <dl>
                                            <dt>
                                                <span class="tag"></span> <em class="uname"><?php echo e($v->consignee); ?></em>
                                            </dt>
                                            <dd class="utel"><?php echo e($v->tel); ?></dd>
                                            <dd class="uaddress">
                                                <?php echo e($v->province); ?>  <?php echo e($v->city); ?>  <?php echo e($v->district); ?>

                                                <br><?php echo e($v->address); ?></dd>
                                        </dl>
                                        <div class="actions">
                                            <a href="javascript:void(0);" data-id="<?php echo e($v->id); ?>" class="modify J_addressModify">修改</a><a href="javascript:void(0);" class="modify J_addressDel">删除</a>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
                                    <?php endif; ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="J_modalEditAddress" class="modal fade modal-hide modal-edit-address">
                    <div class="modal-body">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>


<script src="/homes/common/myjs/jquery.min.js"></script>
<script src="/homes/common/js/address_all.js"></script>        
<script src="/homes/common/myjs/address.js"></script>
<script src="/data/indexNav.js"></script>
<script src="/data/indexData.js"></script>
<script src="/homes/common/myjs/common.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>