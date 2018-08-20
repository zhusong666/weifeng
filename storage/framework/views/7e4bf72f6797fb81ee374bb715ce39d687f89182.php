<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl">
			<nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover" <?php if(!session('admin_name')): ?> style="display:none" <?php endif; ?>><a href="javascript:;" class="dropDown_A" ><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onclick="article_add('添加资讯','article-add.html')"><i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>
							<li><a href="javascript:;" onclick="picture_add('添加资讯','picture-add.html')"><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>
							<li><a href="javascript:;" onclick="product_add('添加资讯','product-add.html')"><i class="Hui-iconfont">&#xe620;</i> 产品</a></li>
							<li><a href="/admin/user/create"<i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">		
					<li>
						欢迎您!&nbsp;<?php if(session('admin_auth') == '0'): ?>普通用户 <?php endif; ?> <?php if(session('admin_auth') == '1'): ?> 普通管理员 <?php endif; ?> <?php if(session('admin_auth') == '2'): ?> 超级管理员 <?php endif; ?>
					</li>
					<li class="dropDown dropDown_hover" <?php if(!session('admin_name')): ?> style="display:none" <?php endif; ?>> 
						<a href="#" class="dropDown_A"><?php echo e(session('admin_name')); ?><i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul id="opt" class="dropDown-menu menu radius box-shadow">
							<li><a href="/admin/user">角色列表</a></li>
							<li><a href="/admin/pass">修改密码</a></li>
							<li><a href="/admin/logout">退出</a></li>
						</ul>
						
					</li>
					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
							<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>