<?php $__env->startSection('content'); ?>
	<section class="Hui-article-box">
		<nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">分类管理</span><span class="c-999 en">&gt;</span><span class="c-666">浏览分类</span></nav>
		<div class="Hui-article">
			<div class="page-container">
	<form action="/admin/category" method="get">
		<div class="text-c">
			<input type="text"  name="cate_name"  value='' placeholder="分类名称、id" style="width:250px" class="input-text">
			<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
		</div>
	</form>
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
		<a class="btn btn-primary radius" onclick="system_category_add('添加资讯','system-category-add.html')" href="/admin/category/create"> <i class="Hui-iconfont">&#xe600;</i> 添加分类</a>
		
		
		</span>
		<!-- <span class="r">共有数据：<strong>54</strong> 条</span> -->
	</div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-hover table-bg table-sort">
			<thead>
				<tr class="text-c">
					
					<th width="70">评论ID</th>
					<th width="80">用户名称</th>
					<th width="150">评论内容</th>
					<th width="3">操作</th>
				</tr>
			</thead>
			
			<tbody>
				<?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr class="">
					
					<td><?php echo e($comment->id); ?></td>
					<td><?php echo e($comment->user->username); ?></td>
					<td><?php echo e($comment->content); ?></td>
					
					
					<td class="f-14">
						
					<form action="/admin/comment/<?php echo e($comment->id); ?>" method="post" style="display:inline-block">
			
						<?php echo e(csrf_field()); ?><!-- 防止表单伪造 防止跨站提交 -->
            			<?php echo e(method_field('DELETE')); ?>

						<a title="删除" href="javascript:void(0)" onclick="fun1(this)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
					
					</form>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<script>
				function fun1(obj){
					var fm = obj.parentNode;
					fm.submit();	
				}
				</script>
				

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

                
               
            </div>
            
		</div>


	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>