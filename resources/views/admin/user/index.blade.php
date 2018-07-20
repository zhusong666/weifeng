@extends('admin.layouts.default')

@include('admin.user.js')

@section('title',$title)

@section('content')


@if(session('success')) 
	<script>
		swal("修改成功");
	</script>
   
@endif

@if(session('error')) 
	<script>
		swal("修改失败");
	</script>
   
@endif

<div class="page-container">
	<form action="/admin/user" method="get">
	<div class="text-c">
		
		<input type="text" class="input-text" style="width:250px" placeholder="输入用户名" name="admin_name" value='{{$request->input("admin_name")}}'>
		
			<span class="select-box" style="width:105px;">
				<select class="select" name="admin_auth" size="1">
					<option value="2" @if($request->input('admin_auth') == '2') selected="selected" @endif>超级管理员</option>
					<option value="1" @if($request->input('admin_auth') == '1') selected="selected" @endif>普通管理员</option>
					<option value="0" @if($request->input('admin_auth') == '0') selected="selected" @endif>普通用户</option>
				</select>
			</span>
		<button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
	</div>
	</form>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="admin_add('添加管理员','admin-add.html','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加管理员</a></span> <span class="r">共有数据：<strong>{{$count}}</strong> 条</span> </div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="9">员工列表</th>
			</tr>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="40">ID</th>
				<th width="150">用户名</th>
				<th width="150">手机号</th>
				<th width="150">权限</th>
				<th width="130">创建时间</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>  <!-- role="alert" aria-live="polite" aria-relevant="all" -->
			@foreach($res as $k=>$v)
			<tr class="text-c">  <!-- @if($k % 2 == 0)  odd @else even @endif -->
				<td><input type="checkbox" value="1" name=""></td>
				<td>{{$v->admin_id}}</td>
				<td>{{$v->admin_name}}</td>
				<td>{{$v->admin_phone}}</td>
				<td>
					@if($v->admin_auth == '0')
						普通用户
					@endif
					@if($v->admin_auth == '1')
						普通管理员
					@endif
					@if($v->admin_auth == '2')
						超级管理员
					@endif
				</td>
				<td>{{date('Y-m-d H:i:s',$v->admin_addtime)}}</td>
				<td class="td-manage">
					<a style="text-decoration:none" title="停用"><i class="Hui-iconfont">&#xe631;</i></a> 
					<a title="编辑" href="/admin/user/{{$v->admin_id}}/edit" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
					<form action="/admin/user/{{$v->admin_id}}" method="post" style="display:inline" title="删除">
						{{csrf_field()}}
						{{method_field('DELETE')}}
						<button><i class="Hui-iconfont">&#xe6e2;</i></button>
					</form>
			</tr>
			@endforeach
		</tbody>
	</table>
			 <!-- {{$res->appends($request->all())->render()}} -->
</div>
	
	<script>
	$(function(){
		$('#aa').click(function(){
			swal('hello');
		})
	})
	</script>

@endsection