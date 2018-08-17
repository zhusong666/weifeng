<?php $__env->startSection('title'); ?>
<?php $__env->startSection('myCss'); ?>
<link rel="stylesheet" href="/homes/common/css/exchange/index.min.css" />
<link rel="stylesheet" href="/homes/common/css/exchange/serviceList.min.css" />
<?php echo $__env->yieldSection(); ?>
<?php $__env->startSection('content'); ?>
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
                            <?php $__currentLoopData = $rs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <h3><?php echo e($v->articlecate_name); ?></h3>
                                <ul class="uc-nav-list">
                                <!-- 遍历侧边栏 -->
                                <?php $__currentLoopData = $v->articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k1=>$v1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li >
                                        <a href="" ><?php echo e($v1->article_title); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <!-- 结束 -->
                                </ul>
                                <span class="line"></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                   <?php $__currentLoopData = $rs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <?php $__currentLoopData = $v->articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k1=>$v1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <h2><?php echo e($v1->article_title); ?></h2>
                        <div class="service-right-section">
                            <?php echo e($v1->article_content); ?>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>