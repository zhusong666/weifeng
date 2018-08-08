<?php $__env->startSection('content'); ?>


 <section class="Hui-article-box">
		<nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">商品管理</span></nav>
		<article class="cl pd-20">
			<div class="row cl">
		<form action="/admins/goods" method="get">
			<label>
                    显示
                    <select name="num" size="1" aria-controls="DataTables_Table_1">
                        <option value="5" <?php if($request->input('num') == '5'): ?> selected="selected" <?php endif; ?> >
                            5
                        </option>
                        <option value="10" <?php if($request->input('num') == '10'): ?> selected="selected" <?php endif; ?>>
                            10
                        </option>
                        <option value="15" <?php if($request->input('num') == '15'): ?> selected="selected" <?php endif; ?>>
                            15
                        </option>
                      
                    </select>
                    条数据
                </label>
			<div class="text-c">
					
				<input type="text" class="input-text" style="width:250px" placeholder="输入商品名称" name="goods_name" value='<?php echo e($request->input("goods_name")); ?>'>


					价格区间:<input type="text" class="input-text" style="width:100px" placeholder="最低价格" name="goods_price1" value='<?php echo e($request->input("goods_price")); ?>'>-
					<input type="text" class="input-text" style="width:100px" placeholder="最高价格" name="goods_price2" value='<?php echo e($request->input("goods_price")); ?>'>

						<!-- <span class="select-box" style="width:105px;">
						<select class="select" name="" size="1">
							<?php $__currentLoopData = $res; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($request->input("cate_id")); ?>"><?php echo e($v->cate_name); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</span> -->
					<button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
				</div>
			</form>
		</div>


			
			<div class="mt-20">
				<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
					<div class="dataTables_length" id="DataTables_Table_0_length">
						</div>
						<table class="table table-border table-bordered table-hover table-bg table-sort dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
					<thead>
						<tr class="text-c" role="row">
								<th>ID</th>
								<th>名称</th>
								<th>所属类别</th>
								<th>价格</th>
								<th>库存</th>
								<th>添加时间</th>
								<th>描述</th>
								<th>状态</th>
								<th>操作</th>
							</tr>
					</thead>
					<tbody>
					
					<?php $__currentLoopData = $goods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					
					<tr class="text-c odd" role="row">
								<th><?php echo e($v->goods_id); ?></th>
								<th><?php echo e($v->goods_name); ?></th>
								<th><?php echo e($v->cate_id); ?></th>
								<th><?php echo e($v->goods_price); ?></th>
								<th><?php echo e($v->goods_count); ?></th>
								<th><?php echo e(date('Y-m-d H:i:s',$v->goods_time)); ?></th>
								<th><?php echo e($v->goods_selecnt); ?></th>
								<?php if($v->goods_status==1): ?>
                                    <th>新品</th>
                                <?php elseif($v->goods_status==2): ?>
                                    <th>上架</th>
                                <?php elseif($v->goods_status==3): ?>
                                    <th>下架</th>
                                <?php endif; ?>

							<td class="f-14">
								 <a href="javascript:;" onclick="DelGood(<?php echo e($v->goods_id); ?>)" class="tpl-table-black-operation-del"> <i class="am-icon-trash"></i> 删除</a>
								 <a href="/admins/goods/<?php echo e($v->goods_id); ?>/edit" onclick="" class="tpl-table-black-operation-del"> <i class="am-icon-trash"></i> 修改</a>

						<?php if($v->goods_status == 1 || $v->goods_status == 3): ?>
						<a href="javascript:;" onclick="Status(<?php echo e($v->goods_id); ?>)"  class="tpl-table-black-operation-del"> 上架</a>
						<?php elseif($v->goods_status ==2): ?>
						<a href="javascript:;"  onclick="Status(<?php echo e($v->goods_id); ?>)" class="tpl-table-black-operation-del"> 下架</a>
						<?php endif; ?>
							</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					
				</tbody>				
				</table>
				
				<div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
					<script>
				        function DelGood(goods_id){
				            //询问框
				            layer.confirm('是否确认删除？', {
				                btn: ['确定','取消'] //按钮
				            }, function(){
				                $.post("<?php echo e(url('/admins/goods/')); ?>/"+goods_id,{'_method':'DELETE','_token':"<?php echo e(csrf_token()); ?>"},function(data){
				                    if(data.status == 0){
				                        location.href = location.href;
				                        layer.msg(data.msg, {icon: 6});
				                    }else{
				                        location.href = location.href;
				                        layer.msg(data.msg, {icon: 5});
				                    }
				                });
				            }, function(){
				            });
				        }

	    			</script>
	    			<script>
				        function Status(goods_id){
				            //询问框
				            layer.confirm('是否确认执行此操作？', {
				                btn: ['确定','取消'] //按钮
				            }, function(){
				                $.post("<?php echo e(url('/admin/status/')); ?>/"+goods_id,{'_method':'DELETE','_token':"<?php echo e(csrf_token()); ?>"},function(data){
				                    if(data.status == 0){
				                        location.href = location.href;
				                        layer.msg(data.msg, {icon: 6});
				                    }else{
				                        location.href = location.href;
				                        layer.msg(data.msg, {icon: 5});
				                    }
				                });
				            }, function(){
				            });
				        }

	    			</script>
	    			
    			<style>
                .pagination li{

                    float: left;
                    height: 20px;
                    padding: 0 10px;
                    display: block;
                    font-size: 12px;
                    line-height: 20px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    background-color: #444444;
                    
                    text-decoration: none;
                        border-right: 1px solid rgba(0, 0, 0, 0.5);
                    border-left: 1px solid rgba(255, 255, 255, 0.15);
                        box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);

                }

                .pagination li a{
                    color: #fff;
                }


                .pagination .active{

                    background-color: #88a9eb;
                    color: #323232;
                    border: none;
                    background-image: none;
                    box-shadow: inset 0px 0px 4px rgba(0, 0, 0, 0.25);
                }

                .pagination{
                    padding:0px;
                    margin:0px;
                }

            </style>

            <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">

                <?php echo e($goods->appends($request->all())->links()); ?>

               
            </div>

				</div>
			</div>
			</div>
			<?php echo e(csrf_field()); ?>

	</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>