<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

	<link href="/resume/public/simpleboot/themes/<?php echo C('SP_ADMIN_STYLE');?>/theme.min.css" rel="stylesheet">
    <link href="/resume/public/simpleboot/css/simplebootadmin.css" rel="stylesheet">
    <link href="/resume/public/js/artDialog/skins/default.css" rel="stylesheet" />
    <link href="/resume/public/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
    <style>
		.length_3{width: 180px;}
		form .input-order{margin-bottom: 0px;padding:3px;width:40px;}
		.table-actions{margin-top: 5px; margin-bottom: 5px;padding:0px;}
		.table-list{margin-bottom: 0px;}
	</style>
	<!--[if IE 7]>
	<link rel="stylesheet" href="/resume/public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/resume/",
    JS_ROOT: "public/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/resume/public/js/jquery.js"></script>
    <script src="/resume/public/js/wind.js"></script>
    <script src="/resume/public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
<?php if(APP_DEBUG): ?><style>
		#think_page_trace_open{
			z-index:9999;
		}
	</style><?php endif; ?>
<body>
<div class="wrap js-check-wrap">
  <ul class="nav nav-tabs">
     <li class="active"><a>插件演示后台</a></li>
  </ul>
  <div class="common-form">
  <div class="well">

	<p>
		<b>当前登录管理员id:</b><?php echo ((isset($adminid) && ($adminid !== ""))?($adminid):'管理员未登录'); ?>
	</p>
	<p>
		<b>插件根目录:</b>/resume/plugins/CodeEditor
	</p>

	<p>
		<b>插件模板根目录:</b>/resume/plugins/CodeEditor/View/
	</p>

</div>
    <form method="post" class="js-ajax-form" action="#">
      <div class="table_list">
	    <table width="100%" class="table table-hover">
	        <thead>
	          <tr>
	            <th width="50">ID</th>
	            <th>用户名</th>
	            <th>邮箱</th>
	            <th>注册时间</th>
	            <th width="120">操作</th>
	          </tr>
	        </thead>
	        <tbody>
	        	<?php if(is_array($users)): foreach($users as $key=>$vo): ?><tr>
		            <td><?php echo ($vo["id"]); ?></td>
		            <td><?php echo ($vo["user_login"]); ?></td>
		            <td><?php echo ($vo["user_email"]); ?></td>
		            <td><?php echo ($vo["create_time"]); ?></td>
		            <td>
		            	<a href="javascript:;" >修改</a>|
			            <a href="javascript:;" class="js-ajax-delete" >删除</a>
			        </td>
	          	</tr><?php endforeach; endif; ?>
			</tbody>
	      </table>
  		</div>
    </form>
  </div>
</div>
<script src="/resume/public/js/common.js?"></script>
</body>
</html>