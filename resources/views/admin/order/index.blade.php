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
    <nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">订单管理</span></nav>
    <div class="page-container" style="overflow-y:scroll;height:600px">
        <form action="/admin/order" method="get">
            <div class="text-c">
                <input type="text" class="input-text" style="width:250px" placeholder="输入订单号" name="order_id" value='{{$request->input("order_id")}}'>
                <button type="submit" class="btn btn-success"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
            </div>
        </form>
            <div class="cl pd-5 bg-1 bk-gray mt-20"></span><span class="r">当前页显示：<strong>{{$cou}}</strong> 条&nbsp;&nbsp;</div>
            <table class="table table-border table-bordered table-bg">
                <thead>
                    <tr class="text-c">
                        <th width="100">订单号</th>
                        <th width="100">订单类型</th>
                        <th width="150">下单时间</th>
                        <th width="100">收货人</th>
                        <th width="100">订单总金额</th>
                        <th width="100">商品数量</th>
                        <th width="150">收货地址</th>
                        <th width="130">联系电话</th>
                        <th width="130">订单状态</th>
                        <th width="150">买家留言</th>
                        <th width="100">操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($res as $k=>$v)
                    <tr class="text-c">
                        <td>{{$v->order_id}}</td>
                        <td>@if($v->order_type == '1') 普通订单 @else 加急订单 @endif</td>
                        <td>{{date('Y-m-d H:i:s',$v->order_time)}}</td>
                        <td>{{$v->order_linkman}}</td>
                        <td>{{$v->order_total}}</td>
                        <td>{{$v->order_cnt}}</td>
                        <td>{{$v->order_address}}</td>
                        <td>{{$v->order_phone}}</td>
                        <td>
                            @if($v->pay_status == 0) 
                                未付款
                            @endif
                            @if($v->pay_status == 1) 
                                已付款
                            @endif
                        </td>
                        <td>{{$v->order_msg}}</td>
                        <td class="td-manage">
                            @if($v->order_status == 0) 
                                <a href="javascript:;" style="text-decoration:none">未付款</a>|
                            @endif
                            @if($v->order_status == 1) 
                                <a href="javascript:;" onclick="status_show({{$v->order_id}})" style="text-decoration:none">发货</a>|
                            @endif
                            
                            @if($v->order_status == 2) 
                                <a style="text-decoration:none" href="javascript:;">已发货</a>|
                            @endif
                            
                            @if($v->order_status == 3)
                                <a style="text-decoration:none" href="javascript:;">完成</a>|
                            @endif
                           
                            <a href="/admin/detail/{{$v->order_id}}" style="text-decoration:none">订单详情</a>
                    </tr>
                  @endforeach
                </tbody>
            </table>
            {{$res->appends($request->all())->render()}}
            
</div>

<script>
//更改状态
function status_show(order_id){
    //询问框
    layer.confirm('是否确发货吗？', {
        btn: ['确定','取消'] //按钮
    }, function(){
        $.post("{{url('/admin/dset/')}}/"+order_id,{'_method':'DELETE','_token':"{{csrf_token()}}"},function(data){
            if(data.status == 0){
                location.href = location.href;
                layer.msg(data.msg, {icon: 5});
            }else{
                location.href = location.href;
                layer.msg(data.msg, {icon: 6});
            }
        });
    }, function(){
    });
};

</script>

<style>
    /*.shuju{ width: 100px;height:10px;}*/
    .pagination{height:20px;float:right;padding-top: 10px;text-align: right;}
    .pagination li{
                float: left;
                    height: 26px;
                    color: #eee;
                    padding: 0 10px;
                    display: block;
                    text-decoration: none;
                    font-size: 14px;
                    line-height: 26px;
                    margin-left: 2px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    border: 1px solid #ccc;
                    margin: 0 0 6px 6px;
    }

    .pagination li:hover{
        background: #5a98de;
        color: #fff;

    }
</style>    
</section>
@stop