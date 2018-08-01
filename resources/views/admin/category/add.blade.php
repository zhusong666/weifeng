@extends('admin.layouts.default')

@section('content')
	<section class="Hui-article-box">
		<nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">空白页</span></nav>
		<div class="Hui-article">
			<article class="cl pd-20">
				<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>{{$title}}</span>
    </div>
    <div class="mws-panel-body no-padding">

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

    	<form action="/admins/category" method='post' class="mws-form">
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">分类名</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name='catename'>
    				</div>
    			</div>

                <div class="mws-form-row">
                    <label class="mws-form-label">顶级分类</label>
                    <div class="mws-form-item">
                        <select class="small" name='pid'>
                            <option value='0'>请选择</option>
                            
                            
                        </select>
                    </div>
                </div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">状态</label>
    				<div class="mws-form-item clearfix">
    					<ul class="mws-form-list inline">
    						<li><input type="radio" name='status' value='1' checked> <label>启动</label></li>
    						<li><input type="radio" name='status' value='0'> <label>禁用</label></li>
    						
    					</ul>
    				</div>
    			</div>
    		</div>
    		<div class="mws-button-row">
                {{csrf_field()}}
    			<input type="submit" class="btn btn-info" value="添加">
    		</div>
    	</form>
    </div>    	
</div>
			</article>
		</div>
	</section>
@stop