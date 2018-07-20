@extends('admin.layouts.default')


@section('title',$title)

@section('content')
<article class="page-container">
	<form class="form form-horizontal" id="form-admin-add" action="/admin/user/{{$res->admin_id}}" method="post">
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>用户名：</label>
		<div class="formControls col-xs-3 col-sm-3">
			<input type="text" class="input-text" placeholder="请输入8~16位用户名" id="adminName" name="admin_name" value="{{$res->admin_name}}"><!-- <span> *请输入8~16位用户名</span> -->

		</div>

	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>密码：</label>
		<div class="formControls col-xs-3 col-sm-3">
			<input type="password" class="input-text" autocomplete="off" placeholder="请输入8~16位密码" id="password" name="admin_password" value="{{$pass}}">
		</div>

	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机号：</label>
		<div class="formControls col-xs-3 col-sm-3">
			<input type="text" class="input-text" autocomplete="off" placeholder="请输入手机号" name="admin_phone" value="{{$res->admin_phone}}">
		</div>

	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">权限：</label>
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

@endsection
