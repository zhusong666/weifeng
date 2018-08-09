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
    <nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">角色展示</span></nav>
	<div class="page-container" style="overflow-y:scroll;height:600px">
        <form action="/admin/user" method="get">
			<div class="text-c">
				
				<input type="text" class="input-text" style="width:250px" placeholder="输入用户名" name="admin_name" value='<?php echo e($request->input("admin_name")); ?>'>
				
					<!-- <span class="select-box" style="width:105px;">
						<select class="select" name="admin_auth" size="1">
							<option value="2" <?php if($request->input('admin_auth') == '2'): ?> selected="selected" <?php endif; ?>>超级管理员</option>
							<option value="1" <?php if($request->input('admin_auth') == '1'): ?> selected="selected" <?php endif; ?>>普通管理员</option>
							<option value="0" <?php if($request->input('admin_auth') == '0'): ?> selected="selected" <?php endif; ?>>普通用户</option>
						</select>
					</span> -->
				<button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
			</div>
		</form>
			<div class="cl pd-5 bg-1 bk-gray mt-20"> <a href="/admin/user/create" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加管理员</a></span><span class="r">当前页显示：<strong><?php echo e($cou); ?></strong> 条&nbsp;&nbsp;</div>
			<table class="table table-border table-bordered table-bg">
				<thead>
					<tr class="text-c">
						<th width="40">ID</th>
						<th width="100">用户名</th>
						<th width="150">手机号</th>
						<th width="150">角色</th>
						<th width="100">状态</th>
						<th width="150">头像</th>
						<th width="130">创建时间</th>
						<th width="100">操作</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $res; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr class="text-c">
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
						<td><?php if($v->admin_status == '0'): ?>
								<span class="label label-error radius">未启用</span>
							<?php endif; ?>
							<?php if($v->admin_status == '1'): ?>
								<span class="label label-success radius">已启用</span>
							<?php endif; ?>
						</td>
						<td><img src="<?php echo e($v->admin_pic); ?>" alt="" width="150"></td>
						<td><?php echo e(date('Y-m-d H:i:s',$v->admin_addtime)); ?></td>
						<td class="td-manage">
							<?php if($v->admin_status == 0): ?>
								<a href="javascript:;" onclick="member_show(<?php echo e($v->admin_id); ?>)" style="text-decoration:none" title="启用"><i class="Hui-iconfont">&#xe631;</i></a>
							<?php endif; ?>
							<?php if($v->admin_status == 1): ?>
								<a href="javascript:;" onclick="member_show(<?php echo e($v->admin_id); ?>)" style="text-decoration:none" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>
							<?php endif; ?>
							
							<a title="编辑" href="/admin/user/<?php echo e($v->admin_id); ?>/edit" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
							<a title="删除" href="javascript:;" onclick="member_del(<?php echo e($v->admin_id); ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
			<?php echo e($res->appends($request->all())->render()); ?>

</div>

<script>
function member_del(admin_id){
    //询问框
    layer.confirm('是否确认删除？', {
        btn: ['确定','取消'] //按钮
    }, function(){
        $.post("<?php echo e(url('/admin/user/')); ?>/"+admin_id,{'_method':'DELETE','_token':"<?php echo e(csrf_token()); ?>"},function(data){

        	// console.log(data);
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
}

function member_show(admin_id){
    //询问框
    layer.confirm('是否确认修改状态？', {
        btn: ['确定','取消'] //按钮
    }, function(){
        $.post("<?php echo e(url('/admin/dset/')); ?>/"+admin_id,{'_method':'DELETE','_token':"<?php echo e(csrf_token()); ?>"},function(data){
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
}

</script>

<style>
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