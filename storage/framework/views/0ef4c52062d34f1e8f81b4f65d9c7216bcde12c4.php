<?php $__env->startSection('title','购物车'); ?>
<?php $__env->startSection('css'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/homes/common/css/base.min.css" />
    <link rel="stylesheet" href="/homes/common/css/cart.min.css" />
<?php $__env->stopSection(); ?>  

<?php $__env->startSection('header'); ?>
<style type="text/css">
     #xxoo{
        /*去除浏览器默认样式*/
        /*-webkit-appearance: none;*/
        -moz-appearance: none;
        appearance: none;
        /*自定义样式*/
        position: relative;
        display: inline-block;
        vertical-align: top;
        margin-left:20px; 
        width: 20px;
        height: 20px;
        border: 1px solid orange;
        outline: none;
        cursor: pointer;
        /*设置为圆形，看起来是个单选框*/
      

</style>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"> 
<div class="site-header site-mini-header">
    <div class="container">
        <div class="header-logo">
            <a class="logo ir" href="/" title="小米官网" data-stat-id="f4006c1551f77f22" onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-f4006c1551f77f22', '//www.mi.com/index.html', 'pcpid']);">小米官网</a>
        </div>
        <div class="header-title has-more" id="J_miniHeaderTitle">
            <h2>我的购物车</h2>
            <p>温馨提示：产品是否购买成功，以最终下单为准哦，请尽快结算</p>
        </div>
       
        <div class="topbar-info" id="J_userInfo">
            <a  rel="nofollow" class="link" href="/login" data-needlogin="true">登录</a>
            <span class="sep">|</span>
            <a  rel="nofollow" class="link" href="/register" >注册</a>
        </div>
        <div class="topbar-info" id="J_userInfo">
                <span class="user">
                    <a rel="nofollow" class="user-name" href="/user/comment" target="_blank">
                        <span class="name"></span> <i class="iconfont"></i>
                    </a>
                    <ul class="user-menu" style="display: none;">
                        <li>
                            <a rel="nofollow" href="/portal">个人中心</a>
                        </li>
                        <li>
                            <a rel="nofollow" href="/user/comment" target="_blank">评价晒单</a>
                        </li>
                        <!-- <li>
                            <a rel="nofollow" href="http://order.mi.com/user/favorite" target="_blank">我的喜欢</a>
                        </li> -->
                        <li>
                            <a rel="nofollow" href="/user/logout">退出登录</a>
                        </li>
                    </ul>
                </span>
            <span class="sep">|</span>
            <a rel="nofollow" class="link link-order" href="/user/order/" target="_blank">我的订单</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="page-main">

    <div class="container">
        <div class="cart-loading loading hide" id="J_cartLoading">
            <div class="loader"></div>
        </div>
       



        <div id="J_cartBox" class="">
            <div class="cart-goods-list">
                
                <div class="list-head clearfix">
                     <div class="col col-check"> <input style="margin-top:24px" type="checkbox" id="selectAll" value="true" >
                        全选
                    </div>
                    <div class="col col-img">&nbsp;</div>
                    <div class="col col-name">商品名称</div>
                    <div class="col col-price">单价</div>
                    <div class="col col-num">数量</div>
                    <div class="col col-total">小计</div>
                    <div class="col col-action">操作</div>
                </div>
                
              <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="list-body" id="J_cartListBody">
                     
                    <div class="item-box" data-cid="">
                        <div class="item-table J_cartGoods" data-sid="" >
                            <div class="item-row clearfix">
                                <div  class="col col-check"> 
                                    <input type="checkbox" name="checked" class='ches' id="xxoo" cart_id="<?php echo e($v->cart_id); ?>" gid="<?php echo e($v->gid); ?>" uid="<?php echo e($v->uid); ?>">
                                </div>
                                <div class="col col-img">
                                    <a href="//item.mi.com/1151900011.html" target="_blank">
                                    <img alt="" src="<?php echo e($res[$k]->goods_img); ?>" width="80" height="80"></a>
                                </div>
                                <div class="col col-name">
                                    <div class="tags"></div>
                                    <h3 class="name">
                                        <a href="/home/details/<?php echo e($v->goods_id); ?>" id="tname" target="_blank"><?php echo e($v->goods_name); ?>&nbsp;&nbsp;<?php echo e($v->tname); ?>&nbsp;&nbsp;<?php echo e($v->colour); ?></a>
                                    </h3>
                                </div>
                                <div class="col col-price"><?php echo e($v->price); ?></div>
                                <div class="col col-num">
                                    <div class="change-goods-num clearfix J_changeGoodsNum">
                                        <a href="javascript:void(0)" class="minus">
                                            <i class="iconfont"></i>
                                        </a>
                                        <input tyep="text" name="" id="num" value="<?php echo e($v->num); ?>"  autocomplete="off" class="numss  qty">
                                        <a href="javascript:void(0)" class="plus">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col col-total">
                                    <p id="xiaoji"  style="margin:0;font-size:12px;color:#b0b0b0;"><?php echo e($v->price * $v->num); ?></p>元
                                </div>    
                                <div class="col col-action">
                                    <a id="2151900016_0_buy" onclick="DelGood(<?php echo e($v->gid); ?>)" href="javascript:void(0);" title="删除" class="del J_delGoods">
                                        <i class="iconfont"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                      
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    

              
        <div class="cart-bar clearfix" id="J_cartBar">
                <div class="section-left">
                    <a href="//list.mi.com/0" class="back-shopping J_goShoping" data-stat-id="cb50063b4f1b9ef0" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-cb50063b4f1b9ef0', '//list.mi.com/0', 'pcpid', '']);">继续购物</a>
                    <span class="cart-total">共 <i id="unselectnum">0</i> 件商品，已选择 <i class="sb" id="selectnum">0</i> 件</span>

                    <span class="cart-coudan hide" id="J_coudanTip">
                        ，还需 <i id="J_postFreeBalance">0.00</i> 元即可免邮费  <a href="javascript:void(0);" id="J_showCoudan" data-stat-id="bb6e0fb00a971e12" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-bb6e0fb00a971e12', 'javascript:void0', 'pcpid', '']);">立即凑单</a>
                    </span>
                </div>
                
                <span class="total-price">
                    合计（不含运费）： <em id="sum" class="number">0</em>
                    元
                </span>
                 
                <a href="javascript:void(0);" id="J_Go" class="btn btn-a btn btn-primary"   >去结算</a>

                <div class="no-select-tip hide" id="J_noSelectTip">
                    请勾选需要结算的商品
                    <i class="arrow arrow-a"></i>
                    <i class="arrow arrow-b"></i>
                </div>
        </div>
          

</div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
</script>
<script src="/homes/common/myjs/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/layer-v3.1.1/layer/theme/default/layer.css" />
<script type="text/javascript" src="/layer-v3.1.1/layer/layer.js"></script>
<!-- <script src="/homes/common/myjs/cart.js"></script> -->
<script>
        function DelGood(gid){
            //询问框
            layer.confirm('是否确认删除？', {
            btn: ['确定','取消'] //按钮
            }, function(){
            $.post("<?php echo e(url('/home/del/')); ?>/"+gid,{'_method':'DELETE','_token':"<?php echo e(csrf_token()); ?>"},function(data){
             if(data.status == 0){
                location.href = location.href;
                layer.msg(data.msg, {icon: 6});
            }else{
                location.href = location.href;
                layer.msg(data.msg, {icon: 5});
                }
             });
                }, function(){
            });
        }

</script>
<script>
    //鼠标滑过显示个人中心菜单效果
    $('#J_userInfo').on('mouseenter','.user',function(){
        $(this).addClass('user-active');
        $(this).find('.user-menu').stop().slideDown(200);
    }).on('mouseleave','.user',function(){
        $(this).removeClass('user-active');
        $(this).find('.user-menu').stop().slideUp(200);
    })
</script>
<script type="text/javascript">

    //  全选  
     var swith_All=true; 
     $('#selectAll').click(function(){
         if(swith_All){
             $('input[name="checked"]').attr('checked',true);
         }else{
             $('input[name="checked"]').attr('checked',false);
         }
         swith_All = !swith_All;
         tols();
         all();  
     });


    //  加1
    $('.plus').click(function(){
        //  获取数量
        var num = $(this).prev('#num').val();
        // console.log(num);
        num++;
        $(this).prev('#num').val(num);

        //  获取单价
        var price = $(this).parents('.item-row').find('.col-price').text();
        
        function accMul(arg1, arg2) {

            var m = 0, s1 = arg1.toString(), s2 = arg2.toString();

            try { m += s1.split(".")[1].length } catch (e) { }

            try { m += s2.split(".")[1].length } catch (e) { }

            return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m)

        }
        //让小计发生改变   数量*单价
        $(this).parents('.item-row').find('#xiaoji').text(accMul(num,price));
        tols();
        all();
    })

    //  减1
    $('.minus').click(function(){
        var num = $(this).next('#num').val();
        // console.log(typeof num);
        num--;

        if(num <=1){
            num = 1;
        }

        $(this).next('#num').val(num);

        //获取的是单价
        var price = $(this).parents('.item-row').find('.col-price').text();

        function accMul(arg1, arg2) {

            var m = 0, s1 = arg1.toString(), s2 = arg2.toString();

            try { m += s1.split(".")[1].length } catch (e) { }

            try { m += s2.split(".")[1].length } catch (e) { }

            return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m)

        }

        //让小计发生改变   数量*单价
        $(this).parents('.item-row').find('#xiaoji').text(accMul(num,price));
        tols();
        all();
    })

   //让总计发生改变
    $('.ches').click(function(){

        tols();
        all();
    })


    //封装
    function tols()
    {
        var sum = 0;
        var cnt = 0;
        //判断多选框有没有选中
        $('.ches:checked').each(function(){
            //获取小计
            prs = parseFloat($(this).parents('.item-row').find('#xiaoji').text());

            //  获取数量
            num = $(this).parents('.item-row').find('#num').val();
            // console.log(num);


            function accAdd(arg1,arg2){  
            var r1,r2,m;  
            try{r1=arg1.toString().split(".")[1].length}catch(e){r1=0}  
            try{r2=arg2.toString().split(".")[1].length}catch(e){r2=0}  
            m=Math.pow(10,Math.max(r1,r2))  
            return (arg1*m+arg2*m)/m  
            }

            sum = accAdd(sum, prs);
            cnt = accAdd(cnt,num);
        })

        $('#sum').text(sum);
        $('#selectnum').text(cnt);
    }

    function all()
    {
        var shu = 0;
         $('.ches').each(function(){
            //  获取数量
            num = $(this).parents('.item-row').find('#num').val();
            // console.log(num);

            function accAdd(arg1,arg2){  
            var r1,r2,m;  
            try{r1=arg1.toString().split(".")[1].length}catch(e){r1=0}  
            try{r2=arg2.toString().split(".")[1].length}catch(e){r2=0}  
            m=Math.pow(10,Math.max(r1,r2))  
            return (arg1*m+arg2*m)/m  
            }
            
            shu = accAdd(shu,num);
            // console.log(shu);
        })
         $('#unselectnum').text(shu);

    }
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    $('#J_Go').click(function(){
    var arr = [];
    var brr = [];
        $('.ches:checked').each(function(){
            //获取id
            var cart_id = $(this).attr('cart_id');
            //获取商品id
            var gid = $(this).attr('gid');
            //获取用户id
            var uid = $(this).attr('uid');
            //获取数量
            var num = $(this).parents('.item-row').find('.numss').val();
            //获取总数量
            var order_cnt =  $('.sb').text();
            //获取总价
            var prs = $(this).parents('div').find('.number').text();
            //获取商品名称
            var tname = $(this).parents('.item-row').find('#tname').text();
            //获取商品单价
            var price = $(this).parents('.item-row').find('.col-price').text();

            arr.push([cart_id,gid,uid,num,order_cnt,prs,tname,price]);
            brr.push([cart_id]);

        })
        $.post('/home/ajaxcart',{arr:arr,id:brr},function(data){
            //console.log();
            if(data){
                location.replace('/home/order');
            }else{
                location.href = location.href;
                layer.msg(data.msg, {icon: 5});
            }
        })

       
    })
   
</script>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>