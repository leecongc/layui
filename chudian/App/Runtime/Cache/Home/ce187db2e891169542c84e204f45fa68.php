<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>layui后台管理</title>
</head>
<body>
<form action="<?php echo U('Login/login');?>" method="post" >
	<input type="text" name="user">
	<input type="password" name="pwd">
	<input type="text" name="yzm">
	<img src="<?php echo U('Login/yzm');?>">
	<input type="submit" value="登录">
</form>
</body>
</html>