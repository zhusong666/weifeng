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
            <a href="/" class="fl-l" style="margin-left:450px;"><img src="/homes/common/image/logo.gif" width="55" /></a>
        </div>
    </div>
    <div id="main">
        <div class="n-frame device-frame reg_frame">
            <div class="title-item dis_bot35 t_c">
                <h4 class="title-big">重置密码</h4>
            </div>
            <div class="regbox" id="register_box">
                <form action="/dorepass" method="post" name="formUser">
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
                        @if(session('success'))
                            <h4 id="success">
                                {{ session('success') }}
                            </h4>
                        @endif
                    </div>
                    <div class="enter-area" id="error">
                        @if(session('error'))
                            <h4 id="error">
                                {{ session('error') }}
                            </h4>
                        @endif
                    </div>
                    <input type="hidden" value="C4E1AB9A7DE79D7C750E8916875E7DBE" id="validate" />
                    <div class="phone_step1">
                        <input type="hidden" id="sendtype" />
                        <div class="inputbg" style="width:500px">
                            <label class="labelbox"> <input type="password" name="password" id="password1" placeholder="请输入密码"/> </label>
                            <span class="mima">请填写密码,长度为6-18位</span>
                        </div>
                        <div class="inputbg" style="width:500px">
                            <label class="labelbox"> <input name="confirm_password" type="password" id="conform_password" placeholder="请确认密码"/> </label>
                            <span class="mimam">请确认密码</span>
                        </div>
                        <div class="fixed_bot mar_phone_dis1">
                            {{csrf_field()}}
                            <input name="Submit" type="submit" value="确定提交" class="btn332 btn_reg_1 submit-step" />
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

    var PV = false;
    var RPV = false;
        //密码
        $('input[name=password]').focus(function(){

        })

        $('input[name=password]').blur(function(){

            var pv = $(this).val();

            var reg = /^\w{6,18}$/;

            if(!reg.test(pv)){

                $('.mima').text(' *密码格式不正确').css('color','red');


                PV = false;

            } else {
                $('.mima').text(' 恭喜密码可用').css('color','green');


                PV = true;
            }
        })

        //确认密码
        $('input[name=confirm_password]').focus(function(){

        })

        $('input[name=confirm_password]').blur(function(){

            var rpv = $(this).val();

            var pv = $('input[name=password]').val();

            if(rpv != pv){

                $('.mimam').text(' *两次密码不一致').css('color','red');


                RPV = false;
            } else {

                $('.mimam').text(' 两次密码一致').css('color','green');


                RPV = true;
            }
        })
    $(':submit').click(function(){

            if(PV && RPV){

                return true;
            }

            return false;
        })
</script>
</body>
</html>