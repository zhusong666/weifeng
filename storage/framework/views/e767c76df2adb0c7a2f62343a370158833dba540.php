<?php $__env->startSection('title',$title); ?>

<?php $__env->startSection('content'); ?>


<?php if(session('success')): ?> 
    <script>
        var success = "<?php echo e(session('success')); ?>";
        swal(success);
    </script>
   
<?php endif; ?>

<?php if(session('error')): ?> 
    <script>
        var error = "<?php echo e(session('error')); ?>";
        swal(error);
    </script>
   
<?php endif; ?>

<section class="Hui-article-box">
    <nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a><span class="maincolor">&gt;</span><a href="/admin/order" class="maincolor">订单管理</a><span class="c-999 en">&gt;</span><span class="c-666">订单详情</span></nav>
    <div class="page-container" style="overflow-y:scroll;height:600px">
            <table class="table table-border table-bordered table-bg">
                <thead>
                    <tr class="text-c">
                        <th width="100">商品名称</th>
                        <th width="100">商品图片</th>
                        <th width="150">购买单价</th>
                        <th width="100">购买数量</th>
                        <th width="100">小计</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $good; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                       
                    <tr class="text-c">
                        <td><?php echo e($v->goods_name); ?></td>
                        <td><?php echo e($v->carts['tname']); ?></td>
                        <td><img src="<?php echo e($v->goods_img); ?>" style="width:150px;height:150px"></td>
                        <td><?php echo e($v->goods_price); ?></td>
                        <td><?php echo e($v->details->details_cnt); ?></td>
                        <td><?php echo e($v->goods_price*$v->details->details_cnt); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

            
</div>  
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>