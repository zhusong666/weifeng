@extends('admin.layouts.default')
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
@if (count($errors) > 0)
	<div class="c-red">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
@endif

@section('content')
	<section class="Hui-article-box">
		<nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">添加帮助</span></nav>
		<article class="page-container">
			<form class="form form-horizontal" id="form-article-add" action="/admin/article/{{$res->article_id}}" method="post" enctype='multipart/form-data'>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">
					<span class="c-red">*</span>帮助名称：</label>
						<div class="formControls col-xs-8 col-sm-9">
							<input type="text" name="article_name" class="input-text" value="{{$res->article_name}}" placeholder="" id="articletitle" >
						</div>
				</div>


				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><!-- <span class="c-red">*</span> -->分类栏目：</label>
					
					<div class="formControls col-xs-8 col-sm-9"> 
						<span class="select-box">
							<select name="article_pid" class="select">
								<option value="0">全部分类</option>
								<option value="1">购物指南</option>
								<option value="11">账户管理</option>
								<option value="12">用户权益</option>
								<option value="13">售后服务</option>
								<option value="14">关于商城</option>
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
							<script id="editor" type="text/plain" name="article_content" tyle="width:100%;height:400px;">
								{!!$res->article_content!!}
							</script> 
						</div>
				</div>
					<!-- input type="text"value="{{$res->article_content}}"> -->
					
				<!-- //百度编辑器 -->
				<script>
    				
    				var ue = UE.getEditor('editor');
    					// editor.setContent('$res->article_content')
    			// 		// editor准备好之后才可以使用
							// ue.addListener("ready", function () {
							// //赋值
							// ue.setContent("{{$res->article_content}}");
							// //取值
							// var content = ue.getContent();

    
				</script>

				<div class="row cl">
					<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
						{{csrf_field()}}
						{{method_field('PUT')}}
						<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;完成&nbsp;&nbsp;">
						<!-- <button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交审核</button> -->
						<button onClick="removeIframe();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
					
						
					
					</div>
				</div>
			</form>
		</article>
	</section>
@stop