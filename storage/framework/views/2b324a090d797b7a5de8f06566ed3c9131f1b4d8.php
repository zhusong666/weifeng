<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<?php if(count($errors) > 0): ?>
	<div class="c-red">
						        <ul>
						            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						                <li><?php echo e($error); ?></li>
						            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						        </ul>
						    </div>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
	<section class="Hui-article-box">
		<nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">添加帮助</span></nav>
		<article class="page-container">
			<form class="form form-horizontal" id="form-article-add" action="/admin/article/<?php echo e($res->article_id); ?>" method="post" enctype='multipart/form-data'>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">
					<span class="c-red">*</span>帮助名称：</label>
						<div class="formControls col-xs-8 col-sm-9">
							<input type="text" name="article_title" class="input-text" value="<?php echo e($res->article_title); ?>" placeholder="" id="articletitle" >
						</div>
				</div>


				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><!-- <span class="c-red">*</span> -->分类栏目：</label>
					
					<div class="formControls col-xs-8 col-sm-9"> 
						<span class="select-box">
							<select name="articlecate_id" class="select">
							
							<option value="1">常见问题</option>
							<option value="2">账户管理</option>
							<option value="3">购物指南</option>
							<option value="4">订单操作</option>
							<option value="5">技术支持</option>
							<option value="6">售后服务</option>
							</select>
						</span> 
					</div>
				</div>

				<!-- <div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">创建日期：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" name="article_time" onfocus="WdatePicker({ dateFmt:'yyyy-MM-dd HH:mm:ss',maxDate:'#F{$dp.$D(\'commentdatemax\')||\'%y-%M-%d\'}' })" id="commentdatemin"  class="input-text Wdate">
					</div>
				</div> -->
				
				
				
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">
					
						<span class="c-red">*</span>帮助内容：
					</label>
						<div class="formControls col-xs-8 col-sm-9"> 
						<script id="editor" type="text/plain" name="article_content" style="width:100%;height:400px;">
								<?php echo $res->article_content; ?>

						</script> 
					</div>
				</div>
					<!-- input type="text"value="<?php echo e($res->article_content); ?>"> -->
					
				<!-- //百度编辑器 -->
				<script>
    
    				var ue = UE.getEditor('editor');
    

				</script>

				<div class="row cl">
					<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
						<?php echo e(csrf_field()); ?>

						<?php echo e(method_field('PUT')); ?>

						<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;完成&nbsp;&nbsp;">
						<!-- <button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交审核</button> -->
						<button onClick="removeIframe();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
					
						
					
					</div>
				</div>
			</form>
		</article>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>