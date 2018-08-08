<?php echo $__env->make('admin.user.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('title',$title); ?>

<?php $__env->startSection('content'); ?>

<?php if(session('error')): ?> 
  <script>
    var error = "<?php echo e(session('error')); ?>";
    swal(error);
  </script>
   
<?php endif; ?>

<section class="Hui-article-box">
        <nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">添加角色</span></nav>
	<article class="page-container">
		<form class="form form-horizontal" id="form-admin-add" action="/admin/user" method="post" enctype='multipart/form-data'>

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
				<input type="text" class="input-text" value="" placeholder="请输入6~16位用户名" name="admin_name"><span id="yhm" style="display:none"> *请输入6~16位用户名</span>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>密码：</label>
			<div class="formControls col-xs-3 col-sm-3">
				<input type="password" class="input-text" autocomplete="off" value="" placeholder="请输入8~12位密码" name="admin_password"><span id="mm" style="display:none">*请输入8~12位密码</span>
			</div>

		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>确认密码：</label>
			<div class="formControls col-xs-3 col-sm-3">
				<input type="password" class="input-text" autocomplete="off"  placeholder="请确认密码" name="admin_repass">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机号：</label>
			<div class="formControls col-xs-3 col-sm-3">
				<input type="text" class="input-text" autocomplete="off"  placeholder="请输入手机号" name="admin_phone">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span>头像：</label>
			<div class="formControls col-xs-3 col-sm-3">
				<input type="file" autocomplete="off" name="image" >
			</div>
		</div>
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">角色：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:105px;">
				<select class="select" name="admin_auth" size="1">
					<option value="0">普通用户</option>
					<option value="1">普通管理员</option>
					<option value="2">超级管理员</option>
				</select>
				</span> 
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<?php echo e(csrf_field()); ?>

				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;添加&nbsp;&nbsp;">
			</div>
		</div>
		</form>
	</article>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>