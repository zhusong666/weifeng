<?php $__env->startSection('content'); ?>
	<section class="Hui-article-box">
		<nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">空白页</span></nav>
		<div class="Hui-article">
			<article class="cl pd-20">
				这是个后台空白页，现在可以自己去改页面!
			</article>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>