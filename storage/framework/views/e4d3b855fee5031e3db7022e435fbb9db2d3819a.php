<?php $__env->startSection('content'); ?>	
<article class="cl pd-20" style="overflow-y:scroll;height:2000px">
		
	<form action="/admins/goods" method="post" class="form form-horizontal" id="form-admin-add"  enctype='multipart/form-data' novalidate="novalidate">
	<?php if(count($errors) > 0): ?>
        <div class="mws-form-message error">
            错误信息是
            <ol>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li style='font-size:15px'><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
        </div>
    <?php endif; ?>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">分类：</label>
			<div class="formControls col-xs-8 col-sm-9">
			 <span class="select-box" style="width:150px;">
				<select class="select" name="cate_id" size="1">
                        <?php $__currentLoopData = $res; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($v->cate_id); ?>"><?php echo e($v->cate_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
				</span> 
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="商品名称" id="adminName" name="goods_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>价格：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="" class="input-text" autocomplete="off" value="" placeholder="商品价格" id="password" name="goods_price">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>库存：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="" class="input-text" autocomplete="off" placeholder="商品库存" id="password2" name="goods_count">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">描述：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="goods_selecnt" cols="" rows="" class="textarea" placeholder="商品描述" dragonfly="true" ></textarea>
			</div>
		</div>


		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">详情：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<script id="editor" name='goods_content' type="text/plain" style="width:900px;height:500px;"></script>
			</div>
			<script>
    			var ue = UE.getEditor('editor');
    		</script>
		</div>


		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">商品图片：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="file" name="goods_img[]" class="webuploader-element-invisible" multiple="multiple">
			</div>
		</div>
		


		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>状态：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input type="radio" name='goods_status' value='1' checked> <label>新品</label>
				</div>
				<div class="radio-box">
					<input type="radio" name='goods_status' value='2' > <label>上架</label>
				</div>
				<div class="radio-box">
					<input type="radio" name='goods_status' value='3' > <label>下架</label>
				</div>
			</div>
		</div>

		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
		<?php echo e(csrf_field()); ?>

	</form>

</article>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

 


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>