@extends('admin.layouts.default')

@include('admin.user.js')

@section('title',$title)

@section('content')

@if(session('error')) 

   
@endif

<section class="Hui-article-box">
        <nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">添加角色</span></nav>
	<article class="page-container">
		<form class="form form-horizontal" id="form-admin-add" action="/admins/permission/{{$res->id}}" method="post" enctype='multipart/form-data'>

		<div class="row cl">
			@if (count($errors) > 0)
	        <div class="" style="border:1px solid #eee;background:#eee">
	            <ol>
	                @foreach ($errors->all() as $error)
	                    <li style='font-size:15px;margin-left:260px;color:red'>{{ $error }}</li>
	                @endforeach
	            </ol>
	        </div>
	   		@endif
		</div>


		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>权限标题：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{$res->per_title}}"  id="adminName" name="per_title">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>权限路径：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{$res->per_url}}"  id="adminName" name="per_url">
			</div>
		</div>


		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				{{csrf_field()}}
			{{method_field('PUT')}}

				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;修改角色&nbsp;&nbsp;">
			</div>
		</div>
		</form>
	</article>
</section>


@stop
