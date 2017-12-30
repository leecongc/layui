<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>layui后台管理</title>
	<link rel="stylesheet" href="<?php echo (CSS_URL); ?>layui.css">
	<style type="text/css">
		#head{
			font-size: 16px;
			font-weight: bold;
			height: 50px;
			text-align: center;
			line-height: 50px;
		}

		#mit {
			background: white;
			box-shadow: 5px 4px 5px #888888;
			width:400px;
			height:250px;
			left:50%;
			top:50%;
			margin-left:-200px;
			margin-top:-125px;
			position:fixed;
			border-radius: 8px;
		}
		.yzm{
			width: 100px !important;
			margin-right: 10px !important;
		}
		.layui-input{
			display: inline !important;
			margin: 5px 0;
			width: 60%;
		}
		#foot{
			padding-right: 50px;
			float: right;
		}
		.layui-form-label{
			text-align: center;	
			padding: 9px 8px;
			margin: 5px 0;
		}
	</style>
</head>
<body style="background:url('<?php echo (ADMIN_IMG_URL); ?>back.jpg')" >
	<div id="mit">
		<div id="head">
			Layui - 后台管理
		</div>
		<form class="layui-form" action="<?php echo U('Login/login');?>" method="post">
			<div class="layui-input-inline">
				<label class="layui-form-label">用户名</label>
					<input type="text" name="user" required  lay-verify="required" placeholder="请输入帐号" autocomplete="off" class="layui-input">
				<label class="layui-form-label">用户名</label>
					<input type="password" name="pwd" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
				<label class="layui-form-label">验证码</label>
					<input type="text" name="yzm" required lay-verify="required" placeholder="验证码" autocomplete="off" class="layui-input yzm"> 
					<img id="imgs"  class="yzm" src="<?php echo U('Login/yzm');?>">
				<div id="foot">
					<button class="layui-btn" >登 录</button>
				</div>
			</div>
		</form>
	</div>
<script src="<?php echo (JS_URL); ?>layui.all.js"></script>
<script src="<?php echo (JQ_URL); ?>jquery.js"></script>
<script>
	layui.use('element', function(){
  		var $ = layui.jquery
  		,element = layui.element; //Tab的切换功能，切换事件监听等，需要依赖element模块
		$('#imgs').click(function(event) {
			$(this).attr('src',"<?php echo U('Login/yzm');?>");
		});

	});
</script>		
</body>
</html>