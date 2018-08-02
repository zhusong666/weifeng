@extends('admin.layouts.default')

@section('content')
	<section class="Hui-article-box">
		<nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">商品管理</span></nav>
		<article class="cl pd-20">
			<div class="text-c"> 日期范围：
				<input type="text" onfocus="WdatePicker({maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}'})" id="datemin" class="input-text Wdate" style="width:120px;">
				-
				<input type="text" onfocus="WdatePicker({minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d'})" id="datemax" class="input-text Wdate" style="width:120px;">
				<input type="text" class="input-text" style="width:250px" placeholder="" id="" name="">
				<button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont"></i> 搜记录</button>
			</div>
			<div class="cl pd-5 bg-1 bk-gray mt-20">  <span class="r">共有数据：<strong>88</strong> 条</span> </div>
			<div class="mt-20">
				<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
					<div class="dataTables_length" id="DataTables_Table_0_length">
						</div>
						<table class="table table-border table-bordered table-hover table-bg table-sort dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
					<thead>
						<tr class="text-c" role="row">
								<th>ID</th>
								<th>名称</th>
								<th>所属类别</th>
								<th>价格</th>
								<th>库存</th>
								<th>添加时间</th>
								<th>描述</th>
								<th>图片</th>
								<th>状态</th>
								<th>操作</th>
							</tr>
					</thead>
					<tbody>
					@foreach($goods as $k => $v)
					<tr class="text-c odd" role="row">
								<th>{{$v->goods_id}}</th>
								<th>{{$v->goods_name}}</th>
								<th>{{$v->type_id}}</th>
								<th>{{$v->goods_price}}</th>
								<th>{{$v->goods_count}}</th>
								<th>{{$v->goods_time}}</th>
								<th>{{$v->goods_selecnt}}</th>
								<th>图片</th>
								<th>{{$v->goods_status}}</th>
							<td class="f-14"><a title="删除" href="https://www.baidu.com" onclick="user_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont"></i></a></td>
					</tr>
					@endforeach
				</tbody>
				</table><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">显示 1 到 1 ，共 1 条</div><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">上一页</a><span><a class="paginate_button current" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" id="DataTables_Table_0_next">下一页</a></div></div>
			</div>
			{{csrf_field()}}
	</section>
@stop
