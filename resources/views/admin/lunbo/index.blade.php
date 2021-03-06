@extends('admin.layouts.default')
@section('content')
	<section class="Hui-article-box">
		<nav class="breadcrumb">
			<i class="Hui-iconfont"></i> 
				<a href="/" class="maincolor">首页</a> 
					<span class="c-999 en">&gt;</span><span class="c-666">轮播浏览</span>
		</nav>

		
<div class="page-container">
	<div class="text-c"> 日期范围：
		<input type="text" onfocus="WdatePicker({ maxDate:'#F{$dp.$D(\'logmax\')||\'%y-%M-%d\'}' })" id="logmin" class="input-text Wdate" style="width:120px;">
		-
		<input type="text" onfocus="WdatePicker({ minDate:'#F{$dp.$D(\'logmin\')}',maxDate:'%y-%M-%d' })" id="logmax" class="input-text Wdate" style="width:120px;">
		<input type="text" name="" id="" placeholder=" 图片名称" style="width:250px" class="input-text">
		<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜图片</button>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> 
		<span class="l">
			<a class="btn btn-primary radius" onclick="picture_add('添加图片','picture-add.html')" href="/admin/lunbo/create">
			<i class="Hui-iconfont">&#xe600;</i> 添加图片</a></span> <span class="r"></span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="40"><input name="" type="checkbox" value=""></th>
					<th width="80">ID</th>
					
					<th width="100">图片</th>
					<th width="100">图片名称</th>
					
					
					<th width="60">发布状态</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
				@foreach($res as $k=>$v)
				<tr class="text-c">
					<td><input name="" type="checkbox" value=""></td>
					<td>{{$v->lunbo_id}}</td>
					
					<td>
						<a href="javascript:;" onClick="picture_edit('图库编辑','picture-show.html','10001')">
							<img width="210" class="picture-thumb" src="{{$v->lunbo_img}}">
						</a>
					</td>
					<td class="text-l">
						<a class="maincolor" href="javascript:;" onClick="picture_edit('图库编辑','picture-show.html','10001')">{{$v->lunbo_name}}
						</a>
					</td>
				
					<td class="td-status"><span class="label label-success radius">已发布</span></td>

					<td class="td-manage">
						<!-- <a style="text-decoration:none" onClick="picture_stop(this,'10001')" href="javascript:;" title="下架">
							<i class="Hui-iconfont">&#xe6de;</i>
						</a>  -->

						<a style="text-decoration:none" class="ml-5" onClick="picture_edit('图库编辑','picture-add.html','10001')" href="/admin/lunbo/{{$v->lunbo_id}}/edit" title="编辑">
							<i class="Hui-iconfont">&#xe6df;</i>
						</a> 
						<form action="/admin/lunbo/{{$v->lunbo_id}}" method="post" style="display:inline"> 
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
	</div>
</div>

@stop