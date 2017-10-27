<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
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
<!--<link rel="stylesheet" href="lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">-->
<!--[if IE 6]>
<script type="text/javascript" src="/Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>文章分类</title>
	<style>
		.table td {
			background-color: #00b7ee;
			height: 40px;
			font-weight: 700;
			font-size: 14px;
			line-height: 40px;
			border: 1px solid #666;
		}
	</style>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>分类管理 <span class="c-gray en">&gt;</span> 分类列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<table class="table">
	<?php if(is_array($dataslist)): foreach($dataslist as $key=>$d): ?><tr>
			<td title="<?php echo ($d["category_name"]); ?>"><?php echo (str_repeat('&nbsp;',$d["level"]*9)); ?>
				<?php if(mb_strlen($d['category_name']) > 8): echo (mb_substr($d["category_name"],0,8)); ?>...
					<?php else: ?>
					<?php echo (mb_substr($d["category_name"],0,8)); endif; ?>
			</td>
			<td><a href="<?php echo U('edit',array('id'=>$d['id']));?>" style="color: yellow">编辑</a></td>
			<td><a href="<?php echo U('del',array('id'=>$d['id']));?>" style="color: red">删除</a></td>
		</tr><?php endforeach; endif; ?>
	<!--<tr>-->
		<!--<td width="200" class="va-t">-->
			<!--&lt;!&ndash;<ul id="treeDemo" class="ztree"></ul>&ndash;&gt;-->
			<!--<ul class="ztree">-->
				<!--<?php if(is_array($dataslist)): foreach($dataslist as $key=>$d): ?>-->
					<!--<li style="background-color: #00b7ee;height: 40px;font-weight: 700;font-size: 14px;line-height: 40px;border: 1px solid #666;" title="<?php echo ($d["category_name"]); ?>"><?php echo (str_repeat('&nbsp;',$d["level"]*9)); ?>-->
						<!--<?php if(mb_strlen($d['category_name']) > 8): ?>-->
							<!--<?php echo (mb_substr($d["category_name"],0,8)); ?>...-->
							<!--<?php else: ?>-->
							<!--<?php echo (mb_substr($d["category_name"],0,8)); ?>-->
						<!--<?php endif; ?>-->
					<!--</li>-->
				<!--<?php endforeach; endif; ?>-->
			<!--</ul>-->
		<!--</td>-->
		<!--<td>编辑</td>-->
		<!--<td>删除</td>-->
	<!--</tr>-->
</table>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<!--<script type="text/javascript" src="/Public/Admin/lib/zTree/v3/js/jquery.ztree.all-3.5.min.js"></script> -->
<script type="text/javascript">
//var setting = {
//	view: {
//		dblClickExpand: false,
//		showLine: false,
//		selectedMulti: false
//	},
//	data: {
//		simpleData: {
//			enable:true,
//			idKey: "id",
//			pIdKey: "pId",
//			rootPId: ""
//		}
//	},
//	callback: {
//		beforeClick: function(treeId, treeNode) {
//			var zTree = $.fn.zTree.getZTreeObj("tree");
//			if (treeNode.isParent) {
//				zTree.expandNode(treeNode);
//				return false;
//			} else {
//				demoIframe.attr("src",treeNode.file + ".html");
//				return true;
//			}
//		}
//	}
//};


		
//$(document).ready(function(){
//	var t = $("#treeDemo");
//	t = $.fn.zTree.init(t, setting, zNodes);
//	demoIframe = $("#testIframe");
//	//demoIframe.on("load", loadReady);
//	var zTree = $.fn.zTree.getZTreeObj("tree");
//	//zTree.selectNode(zTree.getNodeByParam("id",'11'));
//});
</script>
</body>
</html>