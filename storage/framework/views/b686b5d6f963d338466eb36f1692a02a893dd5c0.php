<?php echo $__env->make('admin.user.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('title',$title); ?>

<?php $__env->startSection('content'); ?>

<?php if(session('error')): ?> 

   
<?php endif; ?>

<section class="Hui-article-box">
        <nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">添加角色</span></nav>
	<article class="page-container">
		<form class="form form-horizontal" id="form-admin-add" action="/admins/role/<?php echo e($res->id); ?>" method="post" enctype='multipart/form-data'>

		<div class="row cl">
			<?php if(count($errors) > 0): ?>
	        <div class="" style="border:1px solid #eee;background:#eee">
	            <ol>
	                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                    <li style='font-size:15px;margin-left:260px;color:red'><?php echo e($error); ?></li>
	                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	            </ol>
	        </div>
	   		<?php endif; ?>
		</div>


		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo e($res->role_name); ?>" placeholder="角色名称" id="adminName" name="role_name">
			</div>
		</div>


		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<?php echo e(csrf_field()); ?>

			<?php echo e(method_field('PUT')); ?>


				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;修改角色&nbsp;&nbsp;">
			</div>
		</div>
		</form>
	</article>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>