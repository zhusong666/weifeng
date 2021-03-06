@extends('admin.layouts.default')

@section('content')
<style type="text/css">
    .mws-form-row {padding: 10px 356px; }
    .mws-form-list {padding: 10px 68px;}
</style>

    <section class="Hui-article-box">
        <nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">分类管理</span></nav>
    <article class="page-container">
        <form  action="/admin/category" method='post' class="form form-horizontal" id="form-admin-add">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3" ><span class="c-red"></span >添加分类：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" id="adminName" name="cate_name"style="width:300px;">
            </div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">顶级分类：</label>
            <div class="formControls col-xs-8 col-sm-9"> 
                <span class="select-box" style="width:300px;">
                    <select class="select" name="cate_pid" size="1">
                        <option value='0'>请选择</option>

                        @foreach($res as $k=>$v)
                        <option value="{{$v->cate_id}}">{{$v->cate_name}}</option>
                        @endforeach
                        
                    </select>
                </span> 
            </div>
        </div>

        <div class="mws-form-row">
            <label class="mws-form-label">状态:</label>
            <div class="mws-form-item clearfix">
                
                    <ul class="mws-form-list inline">
                        <li><input type="radio" name='cate_status' value='1' checked> <label>启动</label></li>
                        <li><input type="radio" name='cate_status' value='0'> <label>禁用</label></li>        
                    </ul>
                
            </div>
        </div>

        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                {{csrf_field()}}<!-- 防止表单伪造 防止跨站提交 -->
                <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;添加&nbsp;&nbsp;">
            </div>
        </div>
    </form>
</article>

    </section>
@stop