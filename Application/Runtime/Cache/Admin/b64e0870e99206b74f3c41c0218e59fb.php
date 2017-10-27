<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/Admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>管理员管理 - 修改管理员</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-admin-add">
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>名称：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ($datas["username"]); ?>" placeholder="" id="adminName" name="username">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>新密码：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="password" class="input-text" autocomplete="off" value="" placeholder="密码" id="password" name="password">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>确认密码：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="password" class="input-text" autocomplete="off"  placeholder="确认新密码" id="password2" name="password2">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>性别：</label>
		<div class="formControls col-xs-8 col-sm-9 skin-minimal">
			<div class="radio-box">
				<?php if($datas['sex'] == 1): ?><input name="sex" type="radio" id="sex-1" value="1" checked>
					<?php else: ?>
					<input name="sex" type="radio" id="sex-1" value="1"><?php endif; ?>

				<label for="sex-1">男</label>
			</div>
			<div class="radio-box">
				<?php if($datas['sex'] == 2): ?><input type="radio" id="sex-2" name="sex" value="2" checked>
					<?php else: ?>
					<input type="radio" id="sex-2" name="sex" value="2"><?php endif; ?>
				<label for="sex-2">女</label>
			</div>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ($datas["tel"]); ?>" placeholder="" id="phone" name="tel">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>邮箱：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" placeholder="@" name="email" id="email" value="<?php echo ($datas["email"]); ?>">
		</div>
	</div>

		<!--<div class="row cl">-->
		<!--<label class="form-label col-xs-4 col-sm-3">角色：</label>-->
		<!--<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">-->
			<!--<select class="select" name="rid" size="1">-->
				<!--<?php if(is_array($rolelist)): foreach($rolelist as $key=>$d): ?>-->
					<!--<?php if($datas['rid'] == $d['id']): ?>-->
						<!--<option value="<?php echo ($d["id"]); ?>" selected><?php echo ($d["role_name"]); ?></option>-->
						<!--<?php else: ?>-->
						<!--<option value="<?php echo ($d["id"]); ?>"><?php echo ($d["role_name"]); ?></option>-->
					<!--<?php endif; ?>-->
				<!--<?php endforeach; endif; ?>-->
			<!--</select>-->
			<!--</span> </div>-->
	<!--</div>-->
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">备注：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<textarea name="comments" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true"><?php echo ($datas["comments"]); ?></textarea>
			<!--<textarea name="comments" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="$.Huitextarealength(this,100)"><?php echo ($datas["comments"]); ?></textarea>-->
			<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
		</div>
	</div>
		<input type="hidden" value="<?php echo ($datas["id"]); ?>" name="id">
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			<input id='admin-btn' class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;修改&nbsp;&nbsp;">
		</div>
	</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去--> 
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
    $("#form-admin-add").validate({
        //验证规则
        rules:{
            username:{
                required:true,
                minlength:4,
                maxlength:16
            },
            password:{
                required:true,
            },
            password2:{
                required:true,
                equalTo: "#password"
            },
            sex:{
                required:true,
            },
            tel:{
                required:true,
                isPhone:true,
            },
            email:{
                required:true,
                email:true,
            },
            adminRole:{
                required:true,
            },
        },
        onkeyup:false,
        focusCleanup:true,
        success:"valid",
        submitHandler:function () {
            var form = $('#form-admin-add');
            postData = $(form).serialize();
            $.post("<?php echo U('admin/edit');?>",postData,function (data) {
                layer.msg(data['msg'],{icon:1,time:2000});
                setTimeout(close,2000);
            },'json')
		}
    })

	function close() {
        var index = parent.layer.getFrameIndex(window.name);
        parent.$('.btn-refresh').click();
        parent.location.reload();
        parent.layer.close(index);
    }
});
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>