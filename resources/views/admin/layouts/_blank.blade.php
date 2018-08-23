<section class="Hui-article-box">
	<nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> 
		<span class="c-999 en">&gt;</span>
		<span class="c-666">我的桌面</span> 
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<p class="f-20 text-success">欢迎光临小米米后台
			<table class="table table-border table-bordered table-bg mt-20">
				<thead>
					<tr>
						<th colspan="2" scope="col">服务器信息</th>
			</tr>
		</thead>
				<tbody>
					<tr>
						<th width="30%">系统类型及版本号</th>
						<td><span id="lbServerName"><?php echo  php_uname(); ?></span></td>
					</tr>
					<tr>
						<td>PHP程式版本</td>
						<td> <?PHP echo PHP_VERSION; ?> </td>
					</tr>
					<tr>
						<td>服务器IP地址</td>
						<td><?php  echo GetHostByName($_SERVER['SERVER_NAME']); ?></td>
					</tr>
					<tr>
						<td>服务器域名</td>
						<td><?php echo $_SERVER["HTTP_HOST"]; ?></td>
					</tr>
					<tr>
						<td>服务器端口 </td>
						<td><?php echo  $_SERVER['SERVER_PORT']; ?></td>
					</tr>
					<tr>
						<td>服务器系统目录</td>
						<td><?php echo $_SERVER['SystemRoot']; ?></td>
					</tr>
					<tr>
						<td>服务器端信息： </td>
						<td> <?PHP echo $_SERVER ['SERVER_SOFTWARE']; ?> </td>
					</tr>
					<tr>
						<td>最大上传限制 </td>
						<td><?PHP echo get_cfg_var ("upload_max_filesize")?get_cfg_var ("upload_max_filesize"):"不允许上传附件"; ?> </td>
					</tr>
					<tr>
						<td>最大执行时间 </td>
						<td><?PHP echo get_cfg_var("max_execution_time")."秒 "; ?> </td>
					</tr>
					<tr>
						<td>脚本运行占用最大内存 </td>
						<td><?PHP echo get_cfg_var ("memory_limit")?get_cfg_var("memory_limit"):"无" ?></td>
					</tr>
					<tr>
						<td>通信协议的名称和版本  </td>
						<td><?php echo $_SERVER['SERVER_PROTOCOL']; ?></td>
					</tr>
		</tbody>
	</table>
</article>
		<footer class="footer">
			<p>感谢jQuery、layer、laypage、Validform、UEditor、My97DatePicker、iconfont、Datatables、WebUploaded、icheck、highcharts、bootstrap-Switch<br> Copyright &copy;2015 H-ui.admin v3.0 All Rights Reserved.<br> 本后台系统由<a href="http://www.h-ui.net/" target="_blank" title="H-ui前端框架">H-ui前端框架</a>提供前端技术支持</p>
</footer>
</div>
</section>