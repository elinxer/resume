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
</head>
<body>
	<div class="wrap">
		<ul class="nav nav-tabs">
			<li><a href="<?php echo U('plugin/index');?>"><?php echo L('ADMIN_PLUGIN_INDEX');?></a></li>
			<li class="active"><a><?php echo L('ADMIN_PLUGIN_SETTING');?></a></li>
		</ul>
		<form method="post" class="form-horizontal js-ajax-form" action="<?php echo U('plugin/setting_post');?>">
			<?php if(empty($custom_config)): if(is_array($data['config'])): foreach($data['config'] as $key=>$form): ?><div class="control-group">
						<label class="control-label" for="<?php echo ($key); ?>">
							<?php echo ((isset($form["title"]) && ($form["title"] !== ""))?($form["title"]):''); ?>
						</label>
						<?php switch($form["type"]): case "text": ?><div class="controls">
								<input type="text" name="config[<?php echo ($key); ?>]" class="text input-large" value="<?php echo ($form["value"]); ?>" id="<?php echo ($key); ?>">
								<?php if(isset($form["tip"])): ?><span class="help-block"><?php echo ($form["tip"]); ?></span><?php endif; ?>
							</div><?php break;?>
							<?php case "password": ?><div class="controls">
								<input type="password" name="config[<?php echo ($key); ?>]" class="text input-large" value="<?php echo ($form["value"]); ?>" id="<?php echo ($key); ?>">
								<?php if(isset($form["tip"])): ?><span class="help-block"><?php echo ($form["tip"]); ?></span><?php endif; ?>
							</div><?php break;?>
							<?php case "hidden": ?><input type="hidden" name="config[<?php echo ($key); ?>]" value="<?php echo ($form["value"]); ?>"><?php break;?>
							<?php case "radio": ?><div class="controls">
								<?php if(is_array($form["options"])): foreach($form["options"] as $opt_k=>$opt): ?><label class="radio inline">
										<?php $radio_checked=$opt_k==$form['value']?"checked":""; ?>
										<input type="radio" name="config[<?php echo ($key); ?>]" value="<?php echo ($opt_k); ?>" <?php echo ($radio_checked); ?>><?php echo ($opt); ?>
									</label><?php endforeach; endif; ?>
								<?php if(isset($form["tip"])): ?><span class="help-block"><?php echo ($form["tip"]); ?></span><?php endif; ?>
							</div><?php break;?>
							<?php case "checkbox": ?><div class="controls">
								<?php if(is_array($form["options"])): foreach($form["options"] as $opt_k=>$opt): ?><label class="checkbox inline">
										<?php is_null($form["value"]) && $form["value"] = array(); ?>
										<input type="checkbox" name="config[<?php echo ($key); ?>][]" value="<?php echo ($opt_k); ?>" <?php if(in_array(($opt_k), is_array($form["value"])?$form["value"]:explode(',',$form["value"]))): ?>checked<?php endif; ?>><?php echo ($opt); ?>
									</label><?php endforeach; endif; ?>
								<?php if(isset($form["tip"])): ?><span class="help-block"><?php echo ($form["tip"]); ?></span><?php endif; ?>
							</div><?php break;?>
							<?php case "select": ?><div class="controls">
								<select name="config[<?php echo ($key); ?>]" id="<?php echo ($key); ?>">
									<?php if(is_array($form["options"])): foreach($form["options"] as $opt_k=>$opt): ?><option value="<?php echo ($opt_k); ?>" <?php if(($form["value"]) == $opt_k): ?>selected<?php endif; ?>><?php echo ($opt); ?></option><?php endforeach; endif; ?>
								</select>
								<?php if(isset($form["tip"])): ?><span class="help-block"><?php echo ($form["tip"]); ?></span><?php endif; ?>
							</div><?php break;?>
							<?php case "textarea": ?><div class="controls">
								<textarea name="config[<?php echo ($key); ?>]" id="<?php echo ($key); ?>"><?php echo ($form["value"]); ?></textarea>
								<?php if(isset($form["tip"])): ?><span class="help-block"><?php echo ($form["tip"]); ?></span><?php endif; ?>
							</div><?php break; endswitch;?>
					</div><?php endforeach; endif; ?>
			<?php else: ?>
				<?php if(isset($custom_config)): echo ($custom_config); endif; endif; ?>
			<input type="hidden" name="id" value="<?php echo I('id');?>" readonly>
			<div class="form-actions">
	            <button type="submit" class="btn btn-primary js-ajax-submit">保存</button>
	            <a class="btn" href="<?php echo U('plugin/index');?>">返回</a>
	      	</div>
		</form>
	</div>
	<script src="/resume/public/js/common.js"></script>
</body>
</html>