@extends('admin.layouts.default')
@section('content')
	<section class="Hui-article-box">
		<nav class="breadcrumb">
			<i class="Hui-iconfont"></i> 
				<a href="/" class="maincolor">首页</a> 
					<span class="c-999 en">&gt;</span><span class="c-666">修改轮播</span>
		</nav>

		<article class="page-container">
			<form action="/admin/lunbo/{{$res->lunbo_id}}" method="post" class="form form-horizontal" id="form-article-add" enctype="multipart/form-data">
				<div class="row cl">
						<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>图片标题：</label>
						<div class="formControls col-xs-8 col-sm-9">
							<input type="text" class="input-text" value="{{$res->lunbo_name}}" placeholder="" id="" name="lunbo_name">
						</div>
				</div>
				
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">排序值：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text" value="0" placeholder="" id="" name="lunbo_pid">
					</div>
				</div>

				<div class="row cl">
						<label class="form-label col-xs-4 col-sm-2">图片上传：</label>

						<div class="field">
								<img src="{{$res->lunbo_img}}"  width="100" alt="">
          						<input type="file" id="url1" name="lunbo_img" class="input tips" style="width:25%; float:left;" value="{{$res->lunbo_img}}" data-toggle="hover" data-place="right" data-image="" title="">
        				</div>

						
				</div>
				<div class="row cl">
						<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
							{{csrf_field()}}
							{{method_field('PUT')}}
							<button  class="btn btn-primary radius" type="submit">
							<i class="Hui-iconfont">&#xe632;</i> 提交
							</button>
							<!-- <button onClick="article_save();" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存草稿</button> -->
							<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
						</div>
				</div>
			</form>
		</article>

	</section>
@stop