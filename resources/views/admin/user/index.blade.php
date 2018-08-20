@extends('admin.layouts.default')

@section('title',$title)

@section('content')


@if(session('success')) 
	<script>
		var success = "{{session('success')}}";
		swal(success);
	</script>
   
@endif

@if(session('error')) 
	<script>
		var error = "{{session('error')}}";
		swal(error);
	</script>
   
@endif

<section class="Hui-article-box">
    <nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">角色展示</span></nav>
	<div class="page-container" style="overflow-y:scroll;height:600px">
        <form action="/admin/user" method="get">
			<div class="text-c">
				
				<input type="text" class="input-text" style="width:250px" placeholder="输入用户名" name="admin_name" value='{{$request->input("admin_name")}}'>
				
					<!-- <span class="select-box" style="width:105px;">
						<select class="select" name="admin_auth" size="1">
							<option value="2" @if($request->input('admin_auth') == '2') selected="selected" @endif>超级管理员</option>
							<option value="1" @if($request->input('admin_auth') == '1') selected="selected" @endif>普通管理员</option>
							<option value="0" @if($request->input('admin_auth') == '0') selected="selected" @endif>普通用户</option>
						</select>
					</span> -->
				<button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
			</div>
		</form>
			<div class="cl pd-5 bg-1 bk-gray mt-20"> <a href="/admin/user/create" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加管理员</a></span><span class="r">当前页显示：<strong>{{$cou}}</strong> 条&nbsp;&nbsp;</div>
			<table class="table table-border table-bordered table-bg">
				<thead>
					<tr class="text-c">
						<th width="40">ID</th>
						<th width="100">用户名</th>
						<th width="150">手机号</th>
						<th width="150">角色</th>
						<th width="100">状态</th>
						<th width="150">头像</th>
						<th width="130">创建时间</th>
						<th width="100">操作</th>
					</tr>
				</thead>
				<tbody>
					@foreach($res as $k=>$v)
					<tr class="text-c">
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
						<td>@if($v->admin_status == '0')
								<span class="label label-error radius">未启用</span>
							@endif
							@if($v->admin_status == '1')
								<span class="label label-success radius">已启用</span>
							@endif
						</td>
						<td><img src="{{$v->admin_pic}}" alt="" width="150"></td>
						<td>{{date('Y-m-d H:i:s',$v->admin_addtime)}}</td>
						<td class="td-manage">
							<a title="添加角色" href="/admin/user_role/{{$v->admin_id}}" class="ml-5 " style="text-decoration:none"><i class="Hui-iconfont">&#xe62d;</i></a>
							@if($v->admin_status == 0)
								<a href="javascript:;" onclick="member_show({{$v->admin_id}})" style="text-decoration:none" title="启用"><i class="Hui-iconfont">&#xe631;</i></a>
							@endif
							@if($v->admin_status == 1)
								<a href="javascript:;" onclick="member_show({{$v->admin_id}})" style="text-decoration:none" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>
							@endif
							
							<a title="编辑" href="/admin/user/{{$v->admin_id}}/edit" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
							<a title="删除" href="javascript:;" onclick="member_del({{$v->admin_id}})" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
					</tr>
					@endforeach
				</tbody>
			</table>
			{{$res->appends($request->all())->render()}}
</div>

<script>
function member_del(admin_id){
    //询问框
    layer.confirm('是否确认删除？', {
        btn: ['确定','取消'] //按钮
    }, function(){
        $.post("{{url('/admin/user/')}}/"+admin_id,{'_method':'DELETE','_token':"{{csrf_token()}}"},function(data){

        	// console.log(data);
            if(data.status == 0){
                location.href = location.href;
                layer.msg(data.msg, {icon: 5});
            }else{
                location.href = location.href;
                layer.msg(data.msg, {icon: 6});
            }
        });
    }, function(){
    });
}

function member_show(admin_id){
    //询问框
    layer.confirm('是否确认修改状态？', {
        btn: ['确定','取消'] //按钮
    }, function(){
        $.post("{{url('/admin/up/')}}/"+admin_id,{'_method':'DELETE','_token':"{{csrf_token()}}"},function(data){
            if(data.status == 0){
                location.href = location.href;
                layer.msg(data.msg, {icon: 5});
            }else{
                location.href = location.href;
                layer.msg(data.msg, {icon: 6});
            }
        });
    }, function(){
    });
}

</script>

<style>
	.pagination{height:20px;float:right;padding-top: 10px;text-align: right;}
	.pagination li{
				float: left;
                    height: 26px;
	       			color: #eee;
                    padding: 0 10px;
                    display: block;
                    text-decoration: none;
                    font-size: 14px;
                    line-height: 26px;
                    margin-left: 2px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    border: 1px solid #ccc;
                    margin: 0 0 6px 6px;
    }

    .pagination li:hover{
		background: #5a98de;
		color: #fff;

    }
</style>	
</section>
@stop