

@extends('admin.layouts.default')


@section('content')

	<article class="cl pd-20">
		
	<form action="/admins/goods/{{$res->goods_id}}"   method="post" class="form form-horizontal" id="form-admin-add"  enctype='multipart/form-data' novalidate="novalidate">
		
		<div class="row cl" >
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{$res->goods_name}}" placeholder="商品名称" id="adminName" name="goods_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>价格：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="" class="input-text" autocomplete="off" value="{{$res->goods_price}}" placeholder="商品价格" id="password" name="goods_price">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>库存：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="" class="input-text" autocomplete="off" placeholder="商品库存" id="password2" value="{{$res->goods_count}}" name="goods_count">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">描述：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="goods_selecnt" class="textarea"  >{{$res->goods_selecnt}}</textarea>
			</div>
		</div>


		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">详情：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<script id="editor" name='goods_content' value="{{$res->goods_content}}" type="text/plain" style="width:900px;height:500px;"></script>
			</div>
			<script>
    			var ue = UE.getEditor('editor');
    		</script>
		</div>


		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">商品图片：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="file" name="goods_img[]"  class="webuploader-element-invisible" multiple="multiple">
			</div>
		</div>
		


		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>状态：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input type="radio" name='goods_status' value='1' @if($res->goods_status == '1') checked @endif checked > <label>新品</label>
				</div>
				<div class="radio-box">
					<input type="radio" name='goods_status' value='2' @if($res->goods_status == '2') checked @endif  checked > <label>上架</label>
				</div>
				<div class="radio-box">
					<input type="radio" name='goods_status' value='3' @if($res->goods_status == '3') checked @endif  checked > <label>下架</label>
				</div>
			</div>
		</div>

		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;修改&nbsp;&nbsp;">
			</div>
		</div>
		{{csrf_field()}}
		{{method_field('PUT')}}
	</form>

</article>

@stop

@section('js')

 


@endsection


