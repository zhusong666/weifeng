<?php echo $__env->make('admin.user.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('title',$title); ?>

<?php $__env->startSection('content'); ?>



<section class="Hui-article-box">
        <nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">添加用户角色</span></nav>
	<article class="page-container">
		<form class="form form-horizontal" id="form-admin-add" action="/admin/do_user_role?id=<?php echo e($uname->admin_id); ?>" method="post" enctype='multipart/form-data'>

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
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>用户名：</label>
			<div class="formControls col-xs-3 col-sm-3">
				<input type="text" class="input-text" value="<?php echo e($uname->admin_name); ?>"  name="admin_name" disabled ><span id="yhm"  style="display:none" ></span>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>添加角色：</label>
			
		<div class="skin-minimal">
			<?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="check-box" style="margin-left:15px ">
				    <input type="checkbox" id="checkbox-1" name='roles[]' value='<?php echo e($v->id); ?>' <?php if(in_array($v->id,$uarr)): ?> checked <?php endif; ?>><label for="checkbox-1"><?php echo e($v->role_name); ?></label>
				</div>
		  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
		
		</div>

		
				
		
		
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<?php echo e(csrf_field()); ?>

				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;添加用户角色&nbsp;&nbsp;">
			</div>
		</div>
		</form>
	</article>
</section>
<script type="text/javascript">
	$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	})});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>