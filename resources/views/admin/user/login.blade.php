<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
<title>{{$title}}</title>
<link href="/admin_login/css/bootstrap.min.css" title="" rel="stylesheet" />

<link title="orange" href="/admin_login/css/login.css" rel="stylesheet" type="text/css"/>
<style>
	
	/*padding: 30px 90px;*/
</style>

</head>

<body>

@include('admin.user.js')

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
  
  <div style="height:1px;"></div>
  <div class="login">
     <header>
	    <h1>登录</h1>
	 </header>
	 <div class="mam">
	    <form action="/admin/dologin" method="post">
		    <div class="name">
				<label>
				<i class="sublist-icon glyphicon glyphicon-user"></i>
				</label>
				<input type="text"  placeholder="这里输入登录名" class="name_inp" name="username">
			</div>
			<div class="name">
				<label>
				<i class="sublist-icon glyphicon glyphicon-pencil"></i>
				</label>
				<input type="password"  placeholder="这里输入登录密码" class="name_inp" name="password">
			</div>
			<div class="man">
				<label>
				<i class="sublist-icon glyphicon glyphicon-envelope"  style="padding-left:10px;margin-top:10px"></i>
				</label>
				<input name="code" style="width:50px" type="text" placeholder="验证码" class="codee" >
			</div>

			<img src="/admin/captcha" alt="" onclick="this.src = this.src +='?1'">

			<div class="hhh">
			</div>

			{{ csrf_field() }}
			<button class="dl">登录</button>
		</form>
	 </div>
  </div>

<div style="text-align:center;">
<p><a href="#" style="text-">威锋网欢迎您的到来!!!</a></p>
</div>
</body>
</html>
