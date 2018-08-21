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
        <nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a><span class="maincolor">&gt;</span><a href="/admin/order" class="maincolor">订单管理</a><span class="c-999 en">&gt;</span><span class="c-666">修改信息</span></nav>
	<article class="page-container">
	<form class="form form-horizontal" id="form-admin-add" action="/order/update/{{$res->order_id}}" method="post">
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">订单号：</label>
		<div class="formControls col-xs-3 col-sm-3">
			<input type="text" class="input-text" name="order_id" id="adminName" value="{{$res->order_id}}" disabled="disabled">

		</div>

	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">收货人：</label>
		<div class="formControls col-xs-3 col-sm-3">
			<input type="text" class="input-text" name="order_linkman" value="{{$res->order_linkman}}" disabled="disabled">
		</div>
	</div>

	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">订单总金额：</label>
		<div class="formControls col-xs-3 col-sm-3">
			<input type="text" class="input-text" name="order_total" value="{{$res->order_total}}" disabled="disabled">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">订单数量：</label>
		<div class="formControls col-xs-3 col-sm-3">
			<input type="text" class="input-text" name="order_cnt" value="{{$res->order_cnt}}" disabled="disabled">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">收货地址：</label>
		<div class="formControls col-xs-3 col-sm-3">
			<input type="text" class="input-text" name="order_address" value="{{$res->order_address}}">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">联系电话：</label>
		<div class="formControls col-xs-3 col-sm-3">
			<input type="text" class="input-text" name="order_phone" value="{{$nphone}}" disabled="disabled">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">支付状态：</label>
		<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:105px;">
			<select class="select" name="pay_status" size="1" disabled="disabled">
				<option value="1" @if($res->pay_status == '1') selected="selected" @endif>已付款</option>
				<option value="0" @if($res->pay_status == '0') selected="selected" @endif>未付款</option>
			</select>
			</span> 
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">发货状态：</label>
		<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:105px;">
			<select class="select" name="order_status" size="1" disabled="disabled">
				<option value="0" @if($res->order_status == '0') selected="selected" @endif>不给货</option>
				<option value="1" @if($res->order_status == '1') selected="selected" @endif>发货</option>
			</select>
			</span> 
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">买家留言：</label>
		<div class="formControls col-xs-3 col-sm-3">
			<textarea name="" id="" cols="45" rows="10" name="order_msg" disabled="disabled">{{$res->order_msg}}</textarea>
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
