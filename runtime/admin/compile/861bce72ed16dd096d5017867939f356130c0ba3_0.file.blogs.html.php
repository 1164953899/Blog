<?php
/* Smarty version 3.1.32, created on 2018-09-06 19:04:15
  from 'E:\www\partone\Blog\app\admin\View\home\blogs.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9109af09bbd3_52634434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '861bce72ed16dd096d5017867939f356130c0ba3' => 
    array (
      0 => 'E:\\www\\partone\\Blog\\app\\admin\\View\\home\\blogs.html',
      1 => 1536231734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/top.html' => 1,
    'file:public/left.html' => 1,
  ),
),false)) {
function content_5b9109af09bbd3_52634434 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\www\\partone\\Blog\\vendor\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?><!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="app/admin/view/public/style.css">
	</head>
	<body>
		<?php $_smarty_tpl->_subTemplateRender("file:public/top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender("file:public/left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<div class="right">
			<table cellpadding="5" cellspacing="0" align="center" border="1px">
				<tr>
					<td>博客id</td>
					<td>用户id</td>
					<td>用户名</td>
					<td>标题</td>
					<td>内容</td>
					<td>阅读数</td>
					<td>创建时间</td>
					<td>修改时间</td>
					<td>操作</td>
				</tr>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
					<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['content'],20);?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['view'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['create'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['update'];?>
</td>
					<td>
						<a href="">查看</a>
						<a href="?m=admin&c=home&a=deleteblog&bid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"
						>删除</a>
					</td>
				</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<tr>
					<td colspan="9"><?php echo $_smarty_tpl->tpl_vars['page']->value->show();?>
</td>
				</tr>
			</table>
		</div>
	</body>
</html><?php }
}
