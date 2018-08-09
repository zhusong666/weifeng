<?php $__env->startSection('content'); ?>
<style type="text/css">
    .mws-form-row {padding: 10px 356px; }
    .mws-form-list {padding: 10px 68px;}
</style>

    <section class="Hui-article-box">
        <nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">浏览分类</span><span class="c-999 en">&gt;</span><span class="c-666">修改分类</span></nav>
        <article class="page-container">
    <form  action="/admin/category/<?php echo e($res->cate_id); ?>" method='post' class="form form-horizontal" id="form-admin-add">
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3" ><span class="c-red"></span >分类名：</label>
        <div class="formControls col-xs-8 col-sm-9">
            <input type="text" class="input-text" value="<?php echo e($res->cate_name); ?>" id="adminName" name="cate_name"style="width:300px;">
        </div>
    </div>

    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3">顶级分类：</label>
        <div class="formControls col-xs-8 col-sm-9"> 
            <span class="select-box" style="width:300px;">
                <select class="select" name="cate_pid" size="1" disabled>
                <!-- disabled 属性 :禁用 在修改时不让其修改父级分类 -->
                    <option value='0'>顶级类别</option>

                    <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($v->cate_id); ?>"<?php if($res->cate_pid == $v->cate_id): ?> selected <?php endif; ?>><?php echo e($v->cate_name); ?></option>
                    <!-- <?php if($res->cate_pid == $v->cate_id): ?> selected <?php endif; ?>  为了修改时其父类别跟着过去 进行if判断-->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </select>
            </span> 
        </div>
    </div>

    <div class="mws-form-row">
        <label class="mws-form-label">状态:</label>
        <div class="mws-form-item clearfix">
            
                <ul class="mws-form-list inline">
                    <li><input type="radio" name='cate_status' value='1' <?php if($res->status=='1'): ?>checked <?php endif; ?>> <label>启动</label></li>
                    <li><input type="radio" name='cate_status' value='0' <?php if($res->status=='0'): ?> <?php endif; ?>> <label>禁用</label></li>        
                </ul>
            
        </div>
    </div>

    <div class="row cl">
        <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
            <?php echo e(csrf_field()); ?><!-- 防止表单伪造 防止跨站提交 -->
            <?php echo e(method_field('PUT')); ?>

            <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;修改&nbsp;&nbsp;">
        </div>
    </div>
    </form>
</article>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>