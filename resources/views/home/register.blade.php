<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0035)http://mm.com/user.php?act=register -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="Generator" content="ECSHOP v2.7.3" />
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />
    <title>小米官网</title>
    <link href="/homes/common/css/login.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/homes/common/js/common.js"></script>
    <script type="text/javascript" src="/homes/common/js/user.js"></script>
</head>
<body>
<script type="text/javascript" src="/homes/common/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/homes/common/js/jquery.json.js"></script>
<script type="text/javascript" src="/homes/common/js/transport_jquery.js"></script>
<script type="text/javascript" src="/homes/common/js/utils.js"></script>
<script type="text/javascript" src="/homes/common/js/jquery.SuperSlide.js"></script>
<script type="text/javascript" src="/homes/common/js/xiaomi_common.js"></script>
<div class="register_wrap">
    <div class="bugfix_ie6 dis_none">
        <div class="n-logo-area clearfix">
            <a href="/" class="fl-l" style="margin-left: 450px"><img src="/homes/common/image/logo.gif" width="55" /></a>
        </div>
    </div>
    <div id="main">
        <div class="n-frame device-frame reg_frame">
            <div class="title-item dis_bot35 t_c">
                <h4 class="title-big">注册小米官网</h4>
            </div>
            <div class="regbox" id="register_box">
                <form action="/doregister" method="post" name="formUser" onsubmit="return submitPwdInfo();">
                    <input type="hidden" value="C4E1AB9A7DE79D7C750E8916875E7DBE" id="validate" />
                    <div class="phone_step1">
                        <style type="text/css">
                            #error{
                                color: orangered;
                                text-align: center;
                            }
                        </style>
                        <div class="enter-area" id="error">
                            @if (count($errors) > 0)
                                @foreach ($errors->all() as $error)
                                    <h3 id="error"> {{ $error }} </h3>
                                @endforeach
                            @endif
                            @if(session('error'))
                                <h3 id="error">
                                    {{ session('error') }}
                                </h3>
                            @endif
                        </div>
                        <input type="hidden" id="sendtype" />
                        <div class="inputbg" style="width:500px">
                            <label class="labelbox"> <input type="text" name="username" id="username" placeholder="用户名" /> </label>
                            <span class="yhm">请填写2-6位用户名</span>
                            <span class="error_icon"></span>
                        </div>
                        <div class="err_tip" id="username_notice">
                            <em></em>
                        </div>
                        <div class="inputbg" style="width:500px">
                            <label class="labelbox"><input type="password" name="password" id="password1" placeholder="密码" /></label>
                            <span class="mima">请填写密码,长度为6-18位</span>
                            
                            <span class="error_icon"></span>
                        </div>
                        <div class="err_tip" id="password_notice">
                            <em></em>
                        </div>
                        <div class="inputbg" style="width:500px">
                            <label class="labelbox"> <input name="confirm_password" type="password" id="conform_password" placeholder="确认密码" /> </label>
                            <span class="czmm">请输入确认密码</span>
                            <span class="error_icon"></span>
                        </div>
                        <div class="err_tip" id="conform_password_notice">
                            <em></em>
                        </div>
                        <div class="inputbg" style="width:500px">
                            <label class="labelbox"> <input name="email" type="text" id="email"placeholder="邮箱" /> </label>
                            <span class="yxx">请输入邮箱</span>
                            <span class="error_icon"></span>
                        </div>
                        <div class="err_tip" id="email_notice">
                            <em></em>
                        </div>
                        <div class="inputbg" style="width:500px">
                            <label class="labelbox"> <input name="phone" type="text" id="phone" placeholder="手机号" /> </label>
                            <span class="sjh">请输入手机号</span>
                            <span class="error_icon"></span>
                        </div>
                        <div class="err_tip">
                            <em></em>
                        </div>
                        <div class="law">

                        </div>
                        <div class="err_tip">
                            <em></em>
                        </div>
                        <div class="fixed_bot mar_phone_dis1">
                            {{csrf_field()}}
                            <input type="submit" value="同意协议并注册" class="btn332 btn_reg_1 submit-step" />
                        </div>
                        <div class="trig">
                            已有账号?
                            <a href="/login" class="trigger-box">点击登录</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="n-footer">
        <div class="nl-f-nav">
        </div>
        <p class="nf-intro"><span>&copy;<a href="http://mm.com/user.php?act=register#">mi.com</a> 京ICP证110507号 京ICP备10046444号 京公网安备1101080212535号 <a href="http://mm.com/user.php?act=register#">京网文[2014]0059-0009号</a></span></p>
    </div>
</div>
<script>
    var UV  = false;
    var PV  = false;
    var RPV = false;
    var EV  = false;
    var NV  = false;

        //获取焦点
        $('input[name=username]').focus(function(){

            // $(this).css('border','solid 1px purple');
        })

        //失去焦点
        $('input[name=username]').blur(function(){

            //获取值
            var tv = $(this).val(); 

            //设置正则
            var reg = /^\w{2,12}$/;

            var inps = $(this);

            if(!reg.test(tv)){

                $('.yhm').text(' *用户名格式不正确').css('color','red');

                // $(this).css('border','solid 1px red');

                UV = false;
            } else {

                //发送ajax
                $.get('/checkuser',{username:tv},function(data){

                    if(data == '1'){

                        $('.yhm').text(' *用户名已存在').css({color:'red'});

                        // $('.yhm').css('border','solid 1px red');

                        UV = false;
                    } else {

                        $('.yhm').text(' 恭喜用户名可用').css('color','green');

                        // inps.css('border','solid 1px green');

                        UV = true;
                    }
                })
            }
        })

        //密码
        $('input[name=password]').focus(function(){

            // $(this).css('border','solid 1px purple');
        })

        $('input[name=password]').blur(function(){

            var pv = $(this).val();

            var reg = /^\w{6,18}$/;

            if(!reg.test(pv)){

                $('.mima').text(' *密码格式不正确').css('color','red');

                // $(this).css('border','solid 1px red');

                PV = false;

            } else {
                $('.mima').text(' 恭喜密码可用').css('color','green');

                // $(this).css('border','solid 1px green');

                PV = true;
            }
        })

        //确认密码
        $('input[name=confirm_password]').focus(function(){

            // $(this).css('border','solid 1px purple');
        })

        $('input[name=confirm_password]').blur(function(){

            var rpv = $(this).val();

            var pv = $('input[name=password]').val();

            if(rpv != pv){

                $('.czmm').text(' *两次密码不一致').css('color','red');

                // $(this).css('border','solid 1px red');

                RPV = false;
            } else {

                $('.czmm').text(' 两次密码一致').css('color','green');

                // $(this).css('border','solid 1px green');

                RPV = true;
            }
        })

        //邮箱
        $('input[name=email]').focus(function(){

        })

        $('input[name=email]').blur(function(){

            var yx = $(this).val();

            var reg =  /^[0-9a-zA-Z]\w{5,}@[0-9a-zA-Z]{1,10}(\.[a-zA-Z]{2,5}){1,2}$/;

            if(!reg.test(yx)){

                $('.yxx').text(' *请填写正确的邮箱').css('color','red');

                EV = false;
            } else {

                $('.yxx').text(' *恭喜邮箱可用').css('color','green');

                EV = true;
            }
        })

        //手机号
        $('input[name=phone]').focus(function(){

            // $(this).css('border','solid 1px purple');
        })

        $('input[name=phone]').blur(function(){

            var sj = $(this).val();

            var reg = /^1[3456789]\d{9}$/;

            if(!reg.test(sj)){

                $('.sjh').text(' *请填写正确的手机号').css('color','red');

                // $(this).css('border','solid 1px red');

                NV = false;
            } else {

                $('.sjh').text(' 恭喜手机号可用').css('color','green');

                // $(this).css('border','solid 1px green');

                NV = true;
            }
        })

        //控制提交功能
        $(':submit').click(function(){

            if(UV && PV && RPV && EV && NV){

                return true;
            }

            return false;
        })
</script>
</body>
</html>