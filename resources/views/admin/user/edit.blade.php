@extends('admin.layouts.default')


@section('title',$title)

@section('content')

@if(session('error')) 
  <script>
    var error = "{{session('error')}}";
    swal(error);
  </script>
   
@endif

<section class="Hui-article-box">
        <nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">修改信息</span></nav>
	<article class="page-container">
	<form class="form form-horizontal" id="form-admin-add" action="/admin/user/{{$res->admin_id}}" method="post" enctype='multipart/form-data'>
	<div class="row cl">
		@if (count($errors) > 0)
        <div class="" style="border:1px solid #eee;background:#eee">
            <ol>
                @foreach ($errors->all() as $error)
                    <li style='font-size:15px;margin-left:215px;color:red'>{{ $error }}</li>
                @endforeach
            </ol>
        </div>
   		@endif
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>用户名：</label>
		<div class="formControls col-xs-3 col-sm-3">
			<input type="text" class="input-text" placeholder="请输入8~16位用户名" id="adminName" name="admin_name" value="{{$res->admin_name}}"><!-- <span> *请输入8~16位用户名</span> -->

		</div>

	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机号：</label>
		<div class="formControls col-xs-3 col-sm-3">
			<input type="text" class="input-text" autocomplete="off" placeholder="请输入手机号" name="admin_phone" value="{{$res->admin_phone}}">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>头像：</label>
		<div class="formControls col-xs-3 col-sm-3">
			<img src="{{$res->admin_pic}}" alt="" width="260">
			<input type="file" autocomplete="off" placeholder="" name="image" value="{{$res->admin_pic}}">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">状态：</label>
		<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:105px;">
			<select class="select" name="admin_status" size="1">
				<option value="1" @if($res->admin_status == '1') selected="selected" @endif>启用</option>
				<option value="0" @if($res->admin_status == '0') selected="selected" @endif>未启用</option>
			</select>
			</span> 
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">角色：</label>
		<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:105px;">
			<select class="select" name="admin_auth" size="1">
				<option value="2" @if($res->admin_auth == '2') selected="selected" @endif>超级管理员</option>
				<option value="1" @if($res->admin_auth == '1') selected="selected" @endif>普通管理员</option>
				<option value="0" @if($res->admin_auth == '0') selected="selected" @endif>普通用户</option>
			</select>
			</span> 
		</div>
	</div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			{{csrf_field()}}

            {{method_field('PUT')}}
			<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;修改&nbsp;&nbsp;">
		</div>
	</div>
	</form>
</article>
</section>


@stop
