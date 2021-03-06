<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

//定义一个函数用于输出调试信息
function show_bug($msg){
	echo "<pre style='color:red'>";
	var_dump($msg);
	echo "<pre>";
}



//定义CSS/JS/IMG常量
define("SITE_URL","http://www.ceshi.com/");
define("CSS_URL",SITE_URL."Public/layui/css/");
define("ADMIN_IMG_URL",SITE_URL."Public/Admin/images/");
define("JS_URL",SITE_URL."Public/layui/");
define("JQ_URL",SITE_URL."Public/layui/lay/modules/");




// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./App/');

//定义默认模块
define('BIND_MODULE','Yuiadmin');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单