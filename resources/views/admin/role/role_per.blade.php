@extends('admin.layouts.default')

@include('admin.user.js')

@section('title',$title)

@section('content')



<section class="Hui-article-box">
        <nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">添加角色权限</span></nav>
	<article class="page-container">
		<form class="form form-horizontal" id="form-admin-add" action="/admins/do_role_per?id={{$rname->id}}" method="post" enctype='multipart/form-data'>

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
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>角色名：</label>
			<div class="formControls col-xs-3 col-sm-3">
				<input type="text" class="input-text" value="{{$rname->role_name}}"  name="role_name" disabled ><span id="yhm"  style="display:none" ></span>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>添加角色：</label>
			
		<div class="skin-minimal">
			@foreach($permission as $k => $v)
				<div class="check-box" style="margin-left:15px ">
				    <input type="checkbox" id="checkbox-1" name='per_id[]' value='{{$v->id}}'  @if(in_array($v->id,$parr)) checked @endif><label for="checkbox-1">{{$v->per_title}}</label>
				</div>
		  	@endforeach
		</div>
		
		</div>
		
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				{{csrf_field()}}
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;添加用户角色&nbsp;&nbsp;">
			</div>
		</div>
		</form>
	</article>
</section>
<script type="text/javascript">
	$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	})});
</script>

@stop
