<?php $__env->startSection('title',$title); ?>

<?php $__env->startSection('content'); ?>
<article class="page-container">
	<form class="form form-horizontal" id="form-admin-add" action="" method="post">
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>用户名：</label>
		<div class="formControls col-xs-3 col-sm-3">
			<input type="text" class="input-text" value="" placeholder="请输入8~16位用户名" id="adminName" name="admin_name"><!-- <span> *请输入8~16位用户名</span> -->

		</div>
		<!-- <label class="form-label col-xs-1 col-sm-1" style="margin-left:-20px;width:180px">*请输入8~16位用户名</label> -->

	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>密码：</label>
		<div class="formControls col-xs-3 col-sm-3">
			<input type="password" class="input-text" autocomplete="off" value="" placeholder="请输入8~16位密码" id="password" name="admin_password">
		</div>
		<!-- <label class="form-label col-xs-1 col-sm-1" style="margin-left:-20px;width:165px">*请输入8~12位密码</label> -->

	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>确认密码：</label>
		<div class="formControls col-xs-3 col-sm-3">
			<input type="password" class="input-text" autocomplete="off"  placeholder="请确认密码" id="password2" name="repass">
		</div>
		<!-- <label class="form-label col-xs-1 col-sm-1" style="margin-left:-70px;width:180px">*再次输入密码</label> -->

	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">权限：</label>
		<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:105px;">
			<select class="select" name="admin_auth" size="1">
				<option value="2">超级管理员</option>
				<option value="1">普通管理员</option>
				<option value="0">普通用户</option>
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


<script>
	$('input[type=submit]').click(function(){

		$uname = $('input[name=admin_name]').val();
		// alert($uname);
		if($uname.length < 8 || $uname.length > 16){

			alert('用户名格式错误');
		}
	
	})
	

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>