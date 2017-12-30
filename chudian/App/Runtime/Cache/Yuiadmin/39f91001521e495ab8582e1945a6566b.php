<?php if (!defined('THINK_PATH')) exit();?><head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo (CSS_URL); ?>layui.css">
	<style type="text/css">
		#user_msg{
			padding: 2px 10px;
		}
		#upd_log{
			margin-top:20px; 
		}
		#about span{
			font-size: 14px;
		}
		#about li{
			margin-left: 40px;
		}
	</style>
</head>
<body>
<div id="user_msg">
	<table class="layui-table">
		<colgroup>
			<col width="150" >
			<col width="200">
			<col width="300">
			<col width="300">
		</colgroup>
		<thead>
			<tr>
			  	<th colspan="5">用户信息</th>
			</tr> 
		</thead>
		<tbody>
			<tr>
				<td>用户名:&nbsp;&nbsp;<?php echo ($use_other["username"]); ?></td>
			  	<td>积分总数:</td>
			  	<td>安全手机:</td>
			  	<td>安全邮箱:</td>
			  	<td>QQ:</td>
			</tr>
		</tbody>
	</table>

	<table class="layui-table">
		<colgroup>
			<col width="200" >
			<col width="200">
			<col width="220">
			<col width="200">
		</colgroup>
		<thead>
			<tr>
			  	<th colspan="6">用户信息</th>
			</tr> 
		</thead>
		<tbody>
			<tr>
				<td>日点击预计:</td>
			  	<td>积分日需求:</td>
			  	<td>在线任务数:</td>
			  	<td>昨日消费:</td>
			  	<td>今日挂机:</td>
			  	<td>临界值:</td>
			</tr>
		</tbody>
	</table>
	<table class="layui-table">
		<colgroup>
			<col width="500" >
		</colgroup>
		<thead>
			<tr>
			  	<th colspan="2">登录信息</th>
			</tr> 
		</thead>
		<tbody>
			<tr>
				<td>上次登录地址:</td>
			  	<td>上次登录时间:&nbsp;&nbsp;<?php echo (date("Y-m-d H:i",$use_other["time"])); ?></td>
			  	<!-- &nbsp;<?php echo (date("Y-m-d H:i",$user["time"])); ?> -->
			</tr>
		</tbody>
	</table>
	<div id="upd_log">
		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
			<legend>公 - 告</legend>
		</fieldset>
		<ul class="layui-timeline">
			<li class="layui-timeline-item">
					<i class="layui-icon layui-timeline-axis"></i>
				<div class="layui-timeline-content layui-text">
					<h3 class="layui-timeline-title">关于触点</h3>
					<p>
						<ul id="about">
								<span style="color:#00688B">支持所有主流搜索引擎，挂机是会看到全面，功能强大！</span>
							<li>支持百度、360、搜狗、神马等主流搜索引擎的模拟点击，整个点击过程完全模拟真实用户，搜索，翻页，寻找，停留，内页点击，浏览，每一步都是真实的无可挑剔。</li>
								<span style="color:#008B8B">挂机端IP遍布全国 以及挂机环境的优势</span>
							<li>遍布全国的随机IP执行点击任务，几十万IP池，切挂机环境各不相同，将提升效果发挥到极致。</li>
								<span style="color:#00C5CD">不限区域，排名提升，全国用户均可查看到效果</span>
							<li>不限地区，不限快照的排名提升，更具挂机端更新最后一次快照的排名。后台严格的任务跟配机制，让每一次点击都是真实的！</li>
								<span style="color:#00CED1;">效果更稳定，更持久</span>
							<li>通过对IP，挂机环境，搜索引擎的算法等部署，快照皮阿明提升效果稳定，持久，绝不会被百度任务作弊而受惩罚，用得舒心，放心。</li>
								<span style="color: orange">警告</span>
							<li>严禁点击违规，违法的快照内容，将不定期检查，一经发现坚决封号，积分不予退还。<i class="layui-icon"></i></li>
								<span style="color:#00688B">...</span>
						</ul>
					</p>
				</div>
			</li>
		</ul>  
	</div>
</div>




	<!-- JavaScript代码区域 -->
<script src="<?php echo (JS_URL); ?>layui.all.js"></script>
<script src="<?php echo (JS_URL); ?>lay/modules/jquery.js"></script>
<script type="text/javascript">
	layui.use('element', function(){
	  	var element = layui.element;
	  
	  //…
	});
</script>
</body>