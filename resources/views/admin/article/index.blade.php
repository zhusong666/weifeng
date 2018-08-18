@extends('admin.layouts.default')

@section('content')
	<section class="Hui-article-box">
		<nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">帮助中心</span></nav>
		<div class="Hui-article">
		<!-- <form action="/admin/article/index" method="get"> -->
			<article class="cl pd-20">
				<div class="page-container">
					<div class="text-c">
						<!-- <button onclick="removeIframe()" class="btn btn-primary radius">关闭选项卡</button> -->
					 <span class="select-box inline">
						<select name="" class="select">
							<option value="0">全部分类</option>
							<option value="1">常见问题</option>
							<option value="2">账户管理</option>
							<option value="3">购物指南</option>
							<option value="4">订单操作</option>
							<option value="5">技术支持</option>
							<option value="6">售后服务</option>
						</select>
						</span> 
						<input type="text" name="" id="" placeholder=" 资讯名称" style="width:250px" class="input-text">
						<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
					</div>
					<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l">
						<a href="/admin/article/create" onclick="datadel()" class="btn btn-danger radius">
						<!-- <i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" data-title="添加资讯" data-href="article-add.html" onclick="Hui_admin_tab(this)" href="javascript:;"> -->
						<i class="Hui-iconfont">&#xe600;</i> 添加帮助</a></span>
					</div>
					<div class="mt-20">
						<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
							<thead>
								<tr class="text-c">
									
									<th width="80">ID</th>
									<th width="80">标题</th>
									<th width="80">分类</th>



									<th width="75">帮助内容</th>
									<!-- <th width="75">发布时间</th> -->
									<th width="60">发布状态</th>
									<th width="120">操作</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $k => $v)
			

									<tr class="text-c">
									
									<td>{{$v->article_id}}</td>
									<td class="text-l"><u style="cursor:pointer" class="text-primary" onClick="article_edit('查看','article-zhang.html','10001')" title="查看">{{$v->article_title}}</u></td>
									<td>{{$v->cate->articlecate_name}}</td>

									<td>{{str_limit($v->article_content,30,'......')}}</td>
									<td class="td-status"><span class="label label-success radius">已发布</span></td>
									<td class="f-14 td-manage">
										
										<!-- 修改 -->
										<a style="text-decoration:none" class="ml-5" onClick="article_edit('资讯编辑','article-add.html','10001')" href="/admin/article/{{$v->article_id}}/edit" title="编辑">
											<i class="Hui-iconfont">&#xe6df;</i>
										</a> 

										<!-- 删除 -->

										<form action="/admin/article/{{$v->article_id}}" method="post" style="display:inline"> 
											{{csrf_field()}}
											{{method_field("DELETE")}}
											<!-- <a style="text-decoration:none" class="ml-5" onClick="article_del(this,'10001')" href="javascript:;" title="删除"></a> -->
											<button class='ml-5'style="text-decoration:none">删除</button>
											<!-- <i class="Hui-iconfont">&#xe6e2;</i> -->

										
										</form>
										


									</td>
								</tr>
								@endforeach		
							</tbody>
						</table>
						<style>
						.pagination{
							margin-top: 30px;
							margin-left: 40%;
						}
                .pagination li{

                    float: left;
                    height: 25px;
                    padding: 0 10px;
                    display: block;
                    font-size: 15px;
                    line-height: 20px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    background-color: skyblue;
                    
                    text-decoration: none;
                        border-right: 0px solid rgba(0, 0, 0, 0);
                    border-left: 1px solid rgba(255, 255, 255, 0.15);
                        box-shadow: 0px 1px 0px rgba(0, 0, 0, 0), inset 0px 1px 0px rgba(255, 255, 255, 0.15);

                }

                .pagination li a{
                    color: azure;
                }


                .pagination .active{

                    background-color: whlie;
                    color: slategray;
                    border: none;
                    background-image: none;
                    box-shadow: inset 0px 0px 4px rgba(0, 0, 0, 0.25);
                }

                .pagination{
                    padding:0 auto;
                    margin:50 auto;
                }

            </style>
						{{$data->links()}}
					</div>
				</div>

			</article>
			<!-- </form> -->
		</div>
	</section>
@stop