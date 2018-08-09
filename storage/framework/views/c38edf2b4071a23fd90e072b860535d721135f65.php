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
    <nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">订单管理</span></nav>
    <div class="page-container" style="overflow-y:scroll;height:600px">
        <form action="/admin/order" method="get">
            <div class="text-c">
                <input type="text" class="input-text" style="width:250px" placeholder="输入订单号" name="order_id" value='<?php echo e($request->input("order_id")); ?>'>
                <button type="submit" class="btn btn-success"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
            </div>
        </form>
            <div class="cl pd-5 bg-1 bk-gray mt-20"></span><span class="r">当前页显示：<strong><?php echo e($cou); ?></strong> 条&nbsp;&nbsp;</div>
            <table class="table table-border table-bordered table-bg">
                <thead>
                    <tr class="text-c">
                        <th width="100">订单号</th>
                        <th width="100">订单类型</th>
                        <th width="150">下单时间</th>
                        <th width="100">收货人</th>
                        <th width="100">订单总金额</th>
                        <th width="100">商品数量</th>
                        <th width="150">收货地址</th>
                        <th width="130">联系电话</th>
                        <th width="130">订单状态</th>
                        <th width="150">买家留言</th>
                        <th width="100">操作</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $res; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="text-c">
                        <td><?php echo e($v->order_id); ?></td>
                        <td><?php if($v->order_type == '1'): ?> 普通订单 <?php else: ?> 加急订单 <?php endif; ?></td>
                        <td><?php echo e(date('Y-m-d H:i:s',$v->order_time)); ?></td>
                        <td><?php echo e($v->order_linkman); ?></td>
                        <td><?php echo e($v->order_total); ?></td>
                        <td><?php echo e($v->order_cnt); ?></td>
                        <td><?php echo e($v->order_address); ?></td>
                        <td><?php echo e($v->order_phone); ?></td>
                        <td>
                            <?php if($v->order_status == 1): ?> 
                                未发货 
                            <?php endif; ?>
                            <?php if($v->order_status == 2): ?> 
                                未收货
                            <?php endif; ?>
                            <?php if($v->order_status == 3): ?> 
                                已收货
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($v->order_msg); ?></td>
                        <td class="td-manage">
                            <?php if($v->order_status == 1): ?> 
                                <a href="javascript:;" onclick="status_show(<?php echo e($v->orders_id); ?>)" style="text-decoration:none">发货</a>|
                            <?php endif; ?>
                            
                            <?php if($v->order_status == 2): ?> 
                                <a style="text-decoration:none" href="javascript:;">已发货</a>|
                            <?php endif; ?>
                            
                            <?php if($v->order_status == 3): ?>
                                <a style="text-decoration:none" href="javascript:;">完成</a>|
                            <?php endif; ?>
                           
                            <a href="/admin/detail/<?php echo e($v->order_id); ?>" style="text-decoration:none">订单详情</a>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php echo e($res->appends($request->all())->render()); ?>

            
</div>

<script>
//更改状态
function status_show(orders_id){
    //询问框
    layer.confirm('是否确发货吗？', {
        btn: ['确定','取消'] //按钮
    }, function(){
        $.post("<?php echo e(url('/admin/dset/')); ?>/"+orders_id,{'_method':'DELETE','_token':"<?php echo e(csrf_token()); ?>"},function(data){
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
};

</script>

<style>
    /*.shuju{ width: 100px;height:10px;}*/
    .pagination{height:20px;float:right;padding-top: 10px;text-align: right;}
    .pagination li{
                float: left;
                    height: 26px;
                    color: #eee;
                    padding: 0 10px;
                    display: block;
                    text-decoration: none;
                    font-size: 14px;
                    line-height: 26px;
                    margin-left: 2px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    border: 1px solid #ccc;
                    margin: 0 0 6px 6px;
    }

    .pagination li:hover{
        background: #5a98de;
        color: #fff;

    }
</style>    
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>