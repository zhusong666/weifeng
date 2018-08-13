<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039)http://mm.com/user.php?act=get_password -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="Generator" content="ECSHOP v2.7.3" />
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />
    <title>小米官网</title>
    <link rel="stylesheet" href="/homes/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/homes/bootstrap/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="/homes/bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="/homes/bootstrap/js/bootstrap.min.js"></script>
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
<style type="text/css">
    img{
        position: absolute;
        left: 640px;
        top:20px;

    }
    #error{
        color: orangered;
        text-align: center;
    }

</style>

<div class="register_wrap">
    <div class="bugfix_ie6 dis_none">
        <div class="n-logo-area clearfix">
            <a href="/" class="fl-l"><img src="/homes/common/image/logo.gif" width="55" /></a>
        </div>
    </div>
    <div id="main" class="">
        <div class="n-frame device-frame reg_frame">
            <div class="title-item dis_bot35 t_c">
                <h4 class="title-big">请输入您注册时填写的用户名、手机号和电子邮箱。 </h4>
            </div>
            <div class="regbox">
                <form action="/doeditpass" method="post" name="getPassword">
                    <style type="text/css">
                        #error{
                            color: orangered;
                            text-align: center;
                        }
                    </style>
                    <div class="enter-area" id="error">
                        @if(session('error'))
                            <h4 id="error">
                                {{ session('error') }}
                            </h4>
                        @endif
                    </div>
                    <div class="inputbg" style="width:500px">
                        <label class="labelbox"> <input name="username" type="text" size="30" placeholder="请输入用户名" /> </label>
                        <span class="yhm" style="margin-top:10px"></span>
                        <span class="error_icon"></span>
                    </div>
                    <div class="inputbg">
                        <label class="labelbox"> <input name="phone" type="text" size="30" placeholder="请输入手机号" /> </label>
                        <span class="t_text">手机号</span>
                        <span class="error_icon"></span>
                    </div>
                    <div class="inputbg">
                        <label class="labelbox"> <input name="email" type="text" size="30" class="inputBg" placeholder="请输入电子邮箱" /> </label>
                        <span class="t_text">电子邮箱</span>
                        <span class="error_icon"></span>
                    </div>
                    <div class="fixed_bot mar_phone_dis1">
                        {{csrf_field()}}
                        <input type="submit" name="submit" value="提 交" class="btn332 btn_reg_1 submit-step" style="border:none;" />
                        <input name="button" type="button" onclick="history.back()" value="返回上一页" style="border:none;" class="button" />
                    </div>
                </form>
            </div>
        </div>


        <div class="n-footer">
            <p class="nf-intro"><span>&copy;<a href="http://mm.com/user.php?act=get_password#">mi.com</a> 京ICP证110507号 京ICP备10046444号 京公网安备1101080212535号 <a href="http://mm.com/user.php?act=get_password#">京网文[2014]0059-0009号</a></span></p>
        </div>
    </div>

        <button type="button" id="but" class="btn btn-primary col-xs-offset-4 hidden" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"></button>

</div>

<script>

    var UV = false;
    var PV = false;
    var EV = false;
    //获取焦点
        $('input[name=username]').focus(function(){

        })

        //失去焦点
        $('input[name=username]').blur(function(){

            //获取值
            var tv = $(this).val(); 
            var inps = $(this);

            if(tv == ''){

                UV = false;
            } else {

                //发送ajax
                $.get('/checkname',{username:tv},function(data){

                    if(data == '0'){

                        $('.yhm').text(' *用户名错误').css({color:'red'});

                        UV = false;
                    } else {

                        $('.yhm').text(' 恭喜用户名正确').css('color','green');

                        UV = true;
                    }
                })
            }
        })

        //密码
        $('input[name=phone]').focus(function(){

        })

        $('input[name=phone]').blur(function(){

            var pv = $(this).val();

            if(pv == ''){

                PV = false;

            } else {
                
                PV = true;
            }
        })

        //邮箱
        $('input[name=email]').focus(function(){

        })

        $('input[name=email]').blur(function(){

            var yxx = $(this).val();

            if(yxx == ''){

                EV = false;
            } else {

                EV = true;
            }
        })

    $(':submit').click(function(){

            if(UV && PV && EV){

                return true;
            }

            return false;
        })
</script>

</body>
</html>