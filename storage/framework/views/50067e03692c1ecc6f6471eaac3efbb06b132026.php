<?php echo $__env->make('admin.user.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('title',$title); ?>

<?php $__env->startSection('content'); ?>


<?php if(session('success')): ?> 
	<script>
		swal("修改成功");
	</script>
   
<?php endif; ?>

<?php if(session('error')): ?> 
	<script>
		swal("修改失败");
	</script>
   
<?php endif; ?>

<div class="page-container">
	<form action="/admin/user" method="get">
	<div class="text-c">
		
		<input type="text" class="input-text" style="width:250px" placeholder="输入用户名" name="admin_name" value='<?php echo e($request->input("admin_name")); ?>'>
		
			<span class="select-box" style="width:105px;">
				<select class="select" name="admin_auth" size="1">
					<option value="2" <?php if($request->input('admin_auth') == '2'): ?> selected="selected" <?php endif; ?>>超级管理员</option>
					<option value="1" <?php if($request->input('admin_auth') == '1'): ?> selected="selected" <?php endif; ?>>普通管理员</option>
					<option value="0" <?php if($request->input('admin_auth') == '0'): ?> selected="selected" <?php endif; ?>>普通用户</option>
				</select>
			</span>
		<button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
	</div>
	</form>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="admin_add('添加管理员','admin-add.html','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加管理员</a></span> <span class="r">共有数据：<strong><?php echo e($count); ?></strong> 条</span> </div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="9">员工列表</th>
			</tr>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="40">ID</th>
				<th width="150">用户名</th>
				<th width="150">手机号</th>
				<th width="150">权限</th>
				<th width="130">创建时间</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>  <!-- role="alert" aria-live="polite" aria-relevant="all" -->
			<?php $__currentLoopData = $res; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr class="text-c">  <!-- <?php if($k % 2 == 0): ?>  odd <?php else: ?> even <?php endif; ?> -->
				<td><input type="checkbox" value="1" name=""></td>
				<td><?php echo e($v->admin_id); ?></td>
				<td><?php echo e($v->admin_name); ?></td>
				<td><?php echo e($v->admin_phone); ?></td>
				<td>
					<?php if($v->admin_auth == '0'): ?>
						普通用户
					<?php endif; ?>
					<?php if($v->admin_auth == '1'): ?>
						普通管理员
					<?php endif; ?>
					<?php if($v->admin_auth == '2'): ?>
						超级管理员
					<?php endif; ?>
				</td>
				<td><?php echo e(date('Y-m-d H:i:s',$v->admin_addtime)); ?></td>
				<td class="td-manage">
					<a style="text-decoration:none" title="停用"><i class="Hui-iconfont">&#xe631;</i></a> 
					<a title="编辑" href="/admin/user/<?php echo e($v->admin_id); ?>/edit" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
					<form action="/admin/user/<?php echo e($v->admin_id); ?>" method="post" style="display:inline" title="删除">
						<?php echo e(csrf_field()); ?>

						<?php echo e(method_field('DELETE')); ?>

						<button><i class="Hui-iconfont">&#xe6e2;</i></button>
					</form>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
			 <!-- <?php echo e($res->appends($request->all())->render()); ?> -->
</div>
	
	<script>
	$(function(){
		$('#aa').click(function(){
			swal('hello');
		})
	})
	</script>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>