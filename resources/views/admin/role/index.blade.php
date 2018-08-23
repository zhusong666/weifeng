@extends('admin.layouts.default')

@section('content')


 <section class="Hui-article-box">
		<nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">角色管理</span></nav>
		<article class="cl pd-20">
@if (count($errors) > 0)
        <div class="mws-form-message error">
            错误信息是
            <ol>
                @foreach ($errors->all() as $error)
                    <li style='font-size:15px'>{{ $error }}</li>
                @endforeach
            </ol>
        </div>
    @endif


			<div class="cl pd-5 bg-1 bk-gray mt-20"> 
		<span class="l">
			<a class="btn btn-primary radius"  href="/admins/role/create">
			<i class="Hui-iconfont"></i> 添加角色</a></span> <span class="r"></span> </div>

			<div class="mt-20">
				<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
					<div class="dataTables_length" id="DataTables_Table_0_length">
						</div>
						<table class="table table-border table-bordered table-hover table-bg table-sort dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
					<thead>
						<tr class="text-c" role="row">
								<th>角色名称</th>
								<th>操作</th>
						</tr>
					</thead>
					<tbody>
						@foreach($res as $k => $v)
						<tr class="text-c" role="row">
								<th>{{$v->role_name}}</th>
								
							<th class="f-14">
								<a title="添加角色权限" href="/admins/role_per/{{$v->id}}" class="ml-5 " style="text-decoration:none"><i class="Hui-iconfont">&#xe63f;</i></a>
								<a  href="/admins/role/{{$v->id}}/edit" class="ml-5 " style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
								<a  href="javascript:;" class="ml-5 " onclick="DelRole({{$v->id}})" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>

								
								 

							</th>
						</tr>
						@endforeach
					
					</tbody>				
				</table>
				
				<div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
					<script>
				        function DelRole(id){
				            //询问框
				            layer.confirm('是否确认删除？', {
				                btn: ['确定','取消'] //按钮
				            }, function(){
				                $.post("{{url('/admins/role/')}}/"+id,{'_method':'DELETE','_token':"{{csrf_token()}}"},function(data){
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
	    			
	    			
    			<style>
                .pagination li{

                    float: left;
                    height: 20px;
                    padding: 0 10px;
                    display: block;
                    font-size: 12px;
                    line-height: 20px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    background-color: #444444;
                    
                    text-decoration: none;
                        border-right: 1px solid rgba(0, 0, 0, 0.5);
                    border-left: 1px solid rgba(255, 255, 255, 0.15);
                        box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);

                }

                .pagination li a{
                    color: #fff;
                }


                .pagination .active{

                    background-color: #88a9eb;
                    color: #323232;
                    border: none;
                    background-image: none;
                    box-shadow: inset 0px 0px 4px rgba(0, 0, 0, 0.25);
                }

                .pagination{
                    padding:0px;
                    margin:0px;
                }

            </style>

            <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">

               
            </div>

				</div>
			</div>
			</div>
			{{csrf_field()}}
	</section>
@stop
