<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>layout 后台大布局 - Layui</title>
	<link rel="stylesheet" href="<?php echo (CSS_URL); ?>layui.css">
	<style type="text/css">
		.layui-tab-content{
			overflow: hidden;
			padding: 0;
		}
		.layui-tab{
			margin: 0;
		}
		.layui-tab-titlep i:first-child
		{ 
			display:none;
		}
	</style>
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
 	<div class="layui-header">
    	<div class="layui-logo">layui 后台布局</div>
    	<!-- 头部区域（可配合layui已有的水平导航） -->
    <ul class="layui-nav layui-layout-left">
		<li class="layui-nav-item"><a href="">控制台</a></li>
		<li class="layui-nav-item"><a href="">加入触点</a></li>
		<li class="layui-nav-item"><a href="">在线充值</a></li>
		<li class="layui-nav-item">
			<a href="javascript:;">常见问题</a>
			<dl class="layui-nav-child">
			 	<dd><a href="">联系我们</a></dd>
			</dl>
    	</li>
    </ul>
    <ul class="layui-nav layui-layout-right">
		<li class="layui-nav-item">
			<a href="javascript:;">
				<img src="http://t.cn/RCzsdCq" class="layui-nav-img">
				贤心
			</a>
			<!-- <dl class="layui-nav-child">
				<dd><a href="">基本资料</a></dd>
				<dd><a href="">安全设置</a></dd>
			</dl> -->
		</li>
		<li class="layui-nav-item"><a href="">退了</a></li>
    </ul>
  </div>
 
  	<div class="layui-side layui-bg-black">
		<div class="layui-side-scroll">
		<!-- 左侧导航区域（可配合layui已有的垂直导航） -->
			<ul class="layui-nav layui-nav-tree"  lay-filter="test">
				<li class="layui-nav-item layui-nav-itemed">
					<a class="" href="javascript:;">操作</a>
					<dl class="layui-nav-child">
						<dd><a href="javascript:;" class="site-demo-active" data-id="list1" data-title="添加任务" data-url="<?php echo U('Task/add_task');?>">添加任务</a></dd>
						<dd><a href="javascript:;" class="site-demo-active" data-id="list2" data-title="任务管理" data-url="<?php echo U('Task/about_task');?>">任务管理</a></dd>
						<dd><a href="javascript:;" class="site-demo-active" data-id="list3" data-title="挂机详情" data-url="http://www.taobao.com/">挂机详情</a></dd>
					</dl>
				</li>
				<li class="layui-nav-item">
					<a href="javascript:;">解决方案</a>
						<dl class="layui-nav-child">
						<dd><a href="javascript:;">列表一</a></dd>
						<dd><a href="javascript:;">列表二</a></dd>
					</dl>
				</li>
			<li class="layui-nav-item"><a href="">相关搜索</a></li>
			<li class="layui-nav-item"><a href="">帮助文档</a></li>
			</ul>
		</div>
	</div>
  
  <div class="layui-body">
    <!-- 内容主体区域 -->
    <!-- <div style="padding: 15px;">内容主体区域</div> -->
    <div class="layui-tab layui-tab-card" lay-filter="demo" lay-allowClose="true">
  		<ul class="layui-tab-title"></ul>
		<div class="layui-tab-content"></div>
	</div>

  </div>

  
  <div class="layui-footer">
    <!-- 底部固定区域 -->
    © layui.com - 底部固定区域
  </div>
</div>

	<!-- JavaScript代码区域 -->
<script src="<?php echo (JS_URL); ?>layui.all.js"></script>
<script src="<?php echo (JS_URL); ?>lay/modules/jquery.js"></script>
<script>
	layui.use('element', function(){
  		var $ = layui.jquery
  		,element = layui.element; //Tab的切换功能，切换事件监听等，需要依赖element模块
  		
  		//点击事件
  		$(".layui-nav-child a").click(function () {
            var dataid = $(this);
            if ($(".layui-tab-title li[lay-id]").length <= 0) {
            	// alert(dataid.attr("data-id"));
                active.tabAdd(dataid.attr("data-url"), dataid.attr("data-id"), dataid.attr("data-title"));
            } else {
                var isData = false;
                $.each($(".layui-tab-title li[lay-id]"), function () {
                    if ($(this).attr("lay-id") == dataid.attr("data-id")) {
                        isData = true;
                    }
                })
                if (isData == false) {
                    active.tabAdd(dataid.attr("data-url"), dataid.attr("data-id"), dataid.attr("data-title"));
                }
            }
            active.tabChange(dataid.attr("data-id"));
            // alert(dataid.attr("data-id"));
        })

 	 //触发事件
  		var active = {
    		tabAdd: function(url, id, title){
      		//新增一个Tab项
      		element.tabAdd('demo', {
        		title: title //用于演示
        		// ,content:'1'
        		,content: '<iframe data-frameid="' + id + '" frameborder="0" name="content" width="100%"  src="' + url + '"></iframe>'
        		,id:id  //实际使用一般是规定好的id，这里以时间戳模拟下
      		})
      		iframe_h();
      		// FrameWH();//计算框架高度
    	}
    	,tabDelete: function(id){
      		//删除指定Tab项
      		element.tabDelete('demo',id); //删除：“商品管理” 
    	}
    	,tabChange: function(id){
      		 element.tabChange('demo', id); //切换到：用户管理
            $("iframe[data-frameid='" + id + "']").attr("src", $("iframe[data-frameid='" + id + "']").attr("src"))//切换后刷新框架
    	}
  	};

  	//预先设置iframe的高度
  	function iframe_h(){
  		var hei= $(".layui-body").height()-46;
		// alert(hei);
		$("iframe").css("height", hei + "px");
  	}

  	//自动加载控制台选项卡
	function controller(){
		iframe_h();
  		active.tabAdd("<?php echo U('Other/min');?>", "list0","控制台");//登录成功自动加载控制台
  		active.tabChange("list0");
  		$(".layui-this i").hide();

	}

  	$().ready(function(){ 
  		controller();
	}) 
});


</script>



</body>
</html>