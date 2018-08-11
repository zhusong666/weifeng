@extends('admin.layouts.default')

@section('title',$title)

@section('content')


@if(session('success')) 
    <script>
        var success = "{{session('success')}}";
        swal(success);
    </script>
   
@endif

@if(session('error')) 
    <script>
        var error = "{{session('error')}}";
        swal(error);
    </script>
   
@endif

<section class="Hui-article-box">
    <nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a><span class="maincolor">&gt;</span><a href="/admin/order" class="maincolor">订单管理</a><span class="c-999 en">&gt;</span><span class="c-666">订单详情</span></nav>
    <div class="page-container" style="overflow-y:scroll;height:600px">
            <table class="table table-border table-bordered table-bg">
                <thead>
                    <tr class="text-c">
                        <th width="100">商品名称</th>
                        <th width="100">商品图片</th>
                        <th width="150">购买单价</th>
                        <th width="100">购买数量</th>
                        <th width="100">小计</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($good as $k=>$v)
                    <tr class="text-c">
                        <td>{{$v->goods_name}}</td>
                        <td><img src="{{$v->goods_img}}" style="width:150px;height:150px"></td>
                        <td>{{$v->goods_price}}</td>
                        <td>{{$v->goods_status}}</td>
                        <td>{{$v->goods_price}}</td>  <!-- *$v->goods_cnt -->
                    </tr>
                    @endforeach
                </tbody>
            </table>

            
</div>  
</section>
@stop