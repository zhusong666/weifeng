<?php $__env->startSection('title','我的地址'); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="/homes/common/css/base.min.css" />
<link rel="stylesheet" href="/homes/common/css/main.min.css" />
<link rel="stylesheet" href="/homes/common/css/address-edit.min.css" />
<?php $__env->stopSection(); ?>
<style>
    .aa input{
        width:300px;height:40px;margin-bottom:10px;
    }
    .aa span{
        font-size:12px;
        /*color:#666;*/
    }
</style>
<?php $__env->startSection('content'); ?>



    <div class="breadcrumbs">
        <div class="container">
            <a href='//www.mi.com/index.html'>首页</a>
            <span class="sep">&gt;</span>
            <span>收货地址</span>
        </div>
    </div>

    <div class="page-main user-main">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="uc-box uc-sub-box">
                        <div class="uc-nav-box">
                            <div class="box-hd">
                                <h3 class="title">订单中心</h3>
                            </div>
                            <div class="box-bd">
                                <ul class="uc-nav-list">
                                    <li>
                                        <a href="/user/order/">我的订单</a>
                                    </li>
                                    
                                    <li>
                                        <a href="/user/comment/">评价晒单</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="uc-nav-box">
                            <div class="box-hd">
                                <h3 class="title">个人中心</h3>
                            </div>
                            <div class="box-bd">
                                <ul class="uc-nav-list">
                                    <li>
                                        <a href="/user/details">个人资料</a>
                                    </li>
                                    <li class="active">
                                        <a href="/user/address">收货地址</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="span16">
                    <div class="uc-box uc-main-box">
                        <div class="uc-content-box">
                            <div class="box-hd">
                                <h1 class="title">收货地址</h1>
                                <style type="text/css">
                                    #success{
                                        color: green;
                                        text-align: center;
                                    }
                                    #error{
                                        color: orangered;
                                        text-align: center;
                                    }
                                </style>
                                <div class="enter-area" id="success">
                                    <?php if(session('success')): ?>
                                        <h4 id="success">
                                            <?php echo e(session('success')); ?>

                                        </h4>
                                    <?php endif; ?>
                                </div>
                                <div class="enter-area" id="error">
                                    <?php if(session('error')): ?>
                                        <h3 id="error">
                                            <?php echo e(session('error')); ?>

                                        </h3>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="box-bd">
                                <div class="user-address-list J_addressList clearfix">
                                    <?php if(!empty($res)): ?>
                                    <?php $__currentLoopData = $res; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="address-item">
                                            <dl>
                                                <dt>
                                                    <span class="tag"></span> <em class="uname"><?php echo e($v->address_name); ?></em>
                                                </dt>
                                                <dd class="utel"><?php echo e($v->address_phone); ?></dd>
                                                <dd class="uaddress">
                                                    <?php echo e($v->address_sheng); ?>  <?php echo e($v->address_shi); ?>  <?php echo e($v->address_xian); ?>

                                                    <br><?php echo e($v->address_details); ?><br><?php echo e($v->address_zcode); ?></dd>
                                            </dl>
                                            <div class="actions">
                                                <a href="/user/address/<?php echo e($v->address_id); ?>/edit" class="modify">修改</a>
                                                <a title="删除" class="modify" href="javascript:;" onclick="member_del(<?php echo e($v->address_id); ?>)">删除</a>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 收货地址 -->
                <div class="span16" style="height:300px;background:#eee;margin-top:50px;margin-left:262px;">
                  <form action="/user/address" method="post">
                    <div class="box-main" style="width:450px;margin-left:300px;margin-top:5px;">
                    
                        <div class="aa">
                            <input class="input-text" type="text" name="address_name" placeholder="收货人姓名">
                            <span class="hym"></span>
                        </div>
                        <div class="aa">  
                            <input class="input-text" type="text" name="address_phone" placeholder="11位手机号">
                            <span class="sjh"></span>
                        </div>
                        <div class="aa" style="margin-bottom:10px;">
                            <div data-toggle="distpicker">
                              <select name="address_sheng"  style="height:40px;"></select>
                              <select name="address_shi"  style="height:40px;"></select>
                              <select name="address_xian"  style="height:40px;"></select>
                            </div>
                        </div>
                        <div class="aa">  
                            <input class="input-text" type="text" name="address_details" placeholder="详细地址">
                            <span class="dz"></span>
                        </div>
                        <div class="aa">  
                            <input class="input-text" type="text" name="address_zcode" placeholder="邮编">
                            <span class="yb"></span>
                        </div>
                        <?php echo e(csrf_field()); ?>

                        <input class="btn btn-primary" type="submit" value="添加" style="margin-left:70px;">
                       
                    </div>
                  </form>
                </div>

                <div id="J_modalEditAddress" class="modal fade modal-hide modal-edit-address">
                    <div class="modal-body"></div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<script type="text/javascript" src="/homes/common/js/jquery-1.9.1.min.js"></script>

<?php $__env->startSection('js'); ?>

<script src="/homes/SJLD/js/distpicker.data.js"></script>
<script src="/homes/SJLD/js/distpicker.js"></script>
<script src="/homes/SJLD/js/main.js"></script>
<link rel="stylesheet" type="text/css" href="/layer-v3.1.1/layer/theme/default/layer.css" />
<script type="text/javascript" src="/layer-v3.1.1/layer/layer.js"></script>

<script>
    //删除
    function member_del(address_id){
        //询问框
        layer.confirm('是否确认删除？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            $.post("<?php echo e(url('/user/address/')); ?>/"+address_id,{'_method':'DELETE','_token':"<?php echo e(csrf_token()); ?>"},function(data){
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
    }

</script>

<script>
    //定义
    var YV = false;
    var PV = false;
    var DV = false;
    var CV = false;

    //验证收货人
    $('input[name=address_name]').blur(function(){
        var ov = $(this).val();
        var reg = /^[a-zA-Z0-9\u4E00-\u9FA5]{2,8}$/;
        if(!reg.test(ov)){
            $(this).next().text(' *用户名格式不正确').css('color','red');
            $(this).css('border','solid 1px red');
            YV = false;     //禁止提交
        } else {
            $(this).next().text(' 恭喜用户名可用').css('color','green');
            $(this).css('border','solid 1px green');
            $('.baocun').removeAttr('type','button');  
            YV = true; 
        }
    })
    //验证手机号
    $('input[name=address_phone]').blur(function(){
        var tv = $(this).val();
        var reg = /^1[3456789]\d{9}$/;
        if(!reg.test(tv)){
            $(this).next().text(' *请填写正确的手机号').css('color','red');
            $(this).css('border','solid 1px red');
            PV = false;     //禁止提交
        }else{
            $(this).next().text(' *恭喜手机号可用').css('color','green');
            $(this).css('border','solid 1px green');
            $('.baocun').removeAttr('type','button');
            PV = true;
        }
    })
    //验证详细地址
    $('input[name=address_details]').blur(function(){
        var av = $(this).val();
        // console.log(av.length);
        if(av.length >1 && av.length < 50 ){
            $(this).next().text(' 恭喜收货地址可用').css('color','green');
            $(this).css('border','solid 1px green');
            DV = true;
        } else {
            $(this).next().text(' *请填写正确的地址').css('color','red');
            $(this).css('border','solid 1px red');
            DV = false;   //禁止提交
        }
    })
    //邮编
    $('input[name=address_zcode]').blur(function(){
        var zv = $(this).val();
        if(zv.length == 6){
            $(this).next().text(' 恭喜邮编填写正确').css('color','green');
            $(this).css('border','solid 1px green');
            CV = true;
        } else {
            $(this).next().text(' 请填写正确的邮编').css('color','red');
            $(this).css('border','solid 1px red');
            CV = false;
        }
    })
    //不为空可点击
    $(':submit').click(function(){
        if(YV && PV && DV && CV){
           
            return true;
        }

        return false;
    })

    
</script>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>