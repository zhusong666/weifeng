<?php $__env->startSection('content'); ?>

	<!-- <?php echo e(session('success')); ?> -->

	<section class="Hui-article-box">
		<nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">分类管理</span><span class="c-999 en">&gt;</span><span class="c-666">浏览分类</span></nav>
		<div class="Hui-article">
			<div class="page-container">
	<form action="/admin/category" method="get">
		<div class="text-c">
			<input type="text"  name="cate_name"  value='<?php echo e($request->input("cate_name")); ?>' placeholder="分类名称、id" style="width:250px" class="input-text">
			<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
		</div>
	</form>
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
		<a class="btn btn-primary radius" onclick="system_category_add('添加资讯','system-category-add.html')" href="/admin/category/create"> <i class="Hui-iconfont">&#xe600;</i> 添加分类</a>
		<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
		
		</span>
		<!-- <span class="r">共有数据：<strong>54</strong> 条</span> -->
	</div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-hover table-bg table-sort">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="80">ID</th>
					<th width="80">分类名</th>
					<th width="80">父级类别</th>
					<th width="80">路径</th>
					<th width="80">状态</th>
					<th width="80">操作</th>
				</tr>
			</thead>
			
			<tbody>
				<?php $__currentLoopData = $res; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr class="<?php if($k % 2 == 0): ?>  odd <?php else: ?> even <?php endif; ?>">
					<td><input type="checkbox" name="" value=""></td>
					<td><?php echo e($v->cate_id); ?></td>
					<td><?php echo e($v->cate_name); ?></td>
					<td><?php echo e(getTypeName($v->cate_pid)); ?></td>
					<td><?php echo e($v->cate_path); ?></td>
					<td><?php echo e($v->cate_status ? '启动' : '禁用'); ?></td>
					<td class="f-14">
						<a title="编辑" href="/admin/category/<?php echo e($v->cate_id); ?>/edit" onclick="system_category_edit('栏目编辑','system-category-add.html','1','700','480')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
						
					<form action="/admin/category/<?php echo e($v->cate_id); ?>" method="post" style="display:inline-block">
			
						<?php echo e(csrf_field()); ?><!-- 防止表单伪造 防止跨站提交 -->
            			<?php echo e(method_field('DELETE')); ?>

						<a title="删除" href="javascript:void(0)" onclick="fun1(this)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
					
					</form>
				</tr>
				<script>
				function fun1(obj){
					var fm = obj.parentNode;
					fm.submit();	
				}
				</script>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</tbody>
		</table>
	</div>
</div>
		<style>
                .pagination li{

                    float: left;
                    height: 25px;
                    padding: 0 10px;
                    display: block;
                    font-size: 15px;
                    line-height: 20px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    background-color: skyblue;
                    
                    text-decoration: none;
                        border-right: 0px solid rgba(0, 0, 0, 0);
                    border-left: 1px solid rgba(255, 255, 255, 0.15);
                        box-shadow: 0px 1px 0px rgba(0, 0, 0, 0), inset 0px 1px 0px rgba(255, 255, 255, 0.15);

                }

                .pagination li a{
                    color: azure;
                }


                .pagination .active{

                    background-color: whlie;
                    color: slategray;
                    border: none;
                    background-image: none;
                    box-shadow: inset 0px 0px 4px rgba(0, 0, 0, 0.25);
                }

                .pagination{
                    padding:0 auto;
                    margin:50 auto;
                }

            </style>

            <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">

                <?php echo e($res->appends($request->all())->links()); ?>

               
            </div>
		</div>


	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>