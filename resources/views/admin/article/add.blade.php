@extends('admin.layouts.default')
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>

@section('content')
	<section class="Hui-article-box">
		<nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">添加帮助</span></nav>
		<article class="page-container">
			<form class="form form-horizontal" id="form-article-add" action="/admin/article">
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>帮助名称：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" name="article_title" class="input-text" value="" placeholder="" id="articletitle" >
					</div>
				</div>

				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><!-- <span class="c-red">*</span> -->分类栏目：</label>
					<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
						<select name="article_pid" class="select">
							<option value="0">全部分类</option>
							<option value="1">购物指南</option>
							<option value="11">账户管理</option>
							<option value="12">用户权益</option>
							<option value="13">售后服务</option>
							<option value="14">关于商城</option>
						</select>
						</span> </div>
				</div>
				
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>帮助内容：</label>
					<div class="formControls col-xs-8 col-sm-9"> 
						<script id="editor" type="text/plain" name="article_content" tyle="width:100%;height:400px;"></script> 
					</div>
				</div>


				<script>
    
    				var ue = UE.getEditor('editor');
    

				</script>
				<div class="row cl">
					<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
						{{csrf_field()}}
						<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;添加&nbsp;&nbsp;">
						<!-- <button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交审核</button> -->
						<button onClick="removeIframe();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
					

					<!-- 表单验证 -->
						@if (count($errors) > 0)
						    <div class="c-red">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif
					
					</div>
				</div>
			</form>
		</article>
	</section>
@stop