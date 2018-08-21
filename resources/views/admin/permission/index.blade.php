@extends('admin.layouts.default')

@section('content')


 <section class="Hui-article-box" style="overflow-y:scroll;height:1000px">
		<nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">权限管理</span></nav>
		<article class="cl pd-20">
		
		<div class="cl pd-5 bg-1 bk-gray mt-20"> 
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
		<span class="l">
			<a class="btn btn-primary radius"  href="/admins/permission/create">
			<i class="Hui-iconfont"></i> 添加权限</a></span> <span class="r"></span> </div>

			<div class="mt-20" style="overflow-y:scroll;height:1000px">
				<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
					<div class="dataTables_length" id="DataTables_Table_0_length">
						</div>
						<table class="table table-border table-bordered table-hover table-bg table-sort dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
					<thead>
						<tr class="text-c" role="row">
								<th>权限标题</th>
								<th>权限路径</th>
								<th>操作</th>

						</tr>
					</thead>
					
					<tbody>
						@foreach($res as $k => $v)
						<tr class="text-c" role="row">
							<th>{{$v->per_title}}</th>
							<th>{{$v->per_url}}</th>

							<th class="f-14">
								 <a href="javascript:;" onclick="DelPermission({{$v->id}})" class="tpl-table-black-operation-del"> <i class="am-icon-trash"></i> 删除</a>
								 <a href="/admins/permission/{{$v->id}}/edit" onclick="" class="tpl-table-black-operation-del"> <i class="am-icon-trash"></i> 修改</a>

							</th>
						</tr>
					
						@endforeach	
					
					</tbody>
								
				</table>
				
				<!-- <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"></div> -->
				

					
	    		
    		

				
			</div>
			</div>
			{{csrf_field()}}
	</section>
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
<script>
    function DelPermission(id){
        //询问框
        layer.confirm('是否确认删除？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            $.post("{{url('/admins/permission/')}}/"+id,{'_method':'DELETE','_token':"{{csrf_token()}}"},function(data){
                if(data.status == 0){
                    location.href = location.href;
                    layer.msg(data.msg, {icon: 6});
                }else{
                    location.href = location.href;
                    layer.msg(data.msg, {icon: 5});
                }
            });
        }, function(){
        });
    }

</script>
@stop
