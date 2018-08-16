<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0022)http://mm.com/user.php -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Generator" content="ECSHOP v2.7.3">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <title>小米官网</title>
    <link href="/homes/common/css/login.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/homes/common/js/common.js"></script>
    <script type="text/javascript" src="/homes/common/js/user.js"></script>
    <style>
        .humm{
                background: #fff;
    width: 298px;
    height: 20px;
    line-height: 20px;
    padding: 12px 10px;
    border: 1px solid #e6e6e6;
    color: #333;
    font-size: 14px;
    font-weight: bold;
        }
    </style>
</head>
<body>
<script type="text/javascript" src="/homes/common/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/homes/common/js/jquery.json.js"></script>
<script type="text/javascript" src="/homes/common/js/transport_jquery.js"></script>
<script type="text/javascript" src="/homes/common/js/utils.js"></script>
<script type="text/javascript" src="/homes/common/js/jquery.SuperSlide.js"></script>
<script type="text/javascript" src="/homes/common/js/xiaomi_common.js"></script>
<div id="main" class="layout">
    <div class="nl-content">
        <div class="nl-logo-area">
            <a href="/"><img src="/homes/common/image/logo.gif" width="55"></a>
        </div>
        <h1 class="nl-login-title">一个帐号，玩转所有小米官网！</h1>
        <p class="nl-login-intro" style="color:#ff5340;">

        </p>
        <div id="login-box" class="nl-frame-container">
            <div class="ng-form-area show-place">
                <form name="formLogin" action="/dologin" method="post">
                    <div class="shake-area">
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
                                <h3 id="error">
                                    {{ session('error') }}
                                </h3>
                            @endif
                        </div>
                        <div class="enter-area" style="width:500px">
                            <input name="username" type="text" class="humm" placeholder="请输入用户名">
                            <span class="yhm"></span>
                        </div>
                        <div class="enter-area">
                            <input name="password" type="password" class="enter-item last-enter-item" placeholder="请输入密码">
                            <i class="placeholder">密码</i>
                        </div>
                    </div>
                    <div class="enter-area img-code-area">
                        <input name="code" style="width: 150px;float:left;" type="text" class="enter-item first-enter-item" placeholder="请输入验证码">
                        <i class="placeholder">验证码</i>
                        <img src="/home/captcha" alt="" onclick="this.src = this.src +='?1'" style="margin-left:10px;margin-top:5px">
                    </div>
                    {{csrf_field()}}
                    <input type="submit" name="submit" class="button orange" value="立即登录" id="qqq">
                    <div class="ng-foot clearfix">
                        <div class="ng-link-area">
                            <span><a href="/editpass">忘记密码?</a></span>
                            <div class="third-area hide">
                                <a class="ta-weibo" target="_blank" href="http://mm.com/user.php?act=oath&amp;type=weibo" title="weibo">weibo</a>
                                <a class="ta-qq" target="_blank" href="http://mm.com/user.php?act=oath&amp;type=qq" title="qq">qq</a>
                                <a class="ta-alipay" target="_blank" href="http://mm.com/user.php?act=oath&amp;type=alipay" title="alipay">alipay</a>
                                <em class="corner"></em>
                                <em class="corner-inner"></em>
                            </div>
                        </div>
                    </div>
                    <a class="button" href="/register">注册小米官网</a>
                </form>
            </div>
        </div>
    </div>
    <div class="nl-footer">
        <div class="nl-f-nav">
            <p class="nl-f-copyright">©<a href="http://mm.com/user.php#">mi.com</a> 京ICP证110507号 京ICP备10046444号 京公网安备1101080212535号 <a href="http://mm.com/user.php#">京网文[2014]0059-0009号</a></p>
        </div>
    </div>
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

                UV = true;
            }
        })

        //密码
        $('input[name=password]').focus(function(){

        })

        $('input[name=password]').blur(function(){

            var pv = $(this).val();

            if(pv == ''){

                PV = false;

            } else {
                
                PV = true;
            }
        })

        //密码
        $('input[name=code]').focus(function(){

        })

        $('input[name=code]').blur(function(){

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