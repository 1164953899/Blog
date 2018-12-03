<?php
/* Smarty version 3.1.32, created on 2018-09-04 13:32:43
  from '/Library/WebServer/Documents/Blog/app/admin/View/home/users.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8e897b2afff8_37004161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bf5ea5436c18566c1cd483524c64d3cd2b078d3' => 
    array (
      0 => '/Library/WebServer/Documents/Blog/app/admin/View/home/users.html',
      1 => 1536063588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/top.html' => 1,
    'file:public/left.html' => 1,
  ),
),false)) {
function content_5b8e897b2afff8_37004161 (Smarty_Internal_Template $_smarty_tpl) {
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
		<table cellspacing="0" cellpadding="5" align="center" border="1px">
			<tr>
				<td>用户id</td>
				<td>用户名</td>
				<td>用户密码</td>
				<td>用户手机号</td>
				<td>用户邮箱</td>
				<td>用户余额</td>
				<td>注册时间</td>
				<td>用户权限</td>
				<td>操作</td>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['password'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['balance'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['create'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['admin'];?>
</td>
				<td>
					<a href="">查看</a>
					<a href="">编辑</a>
					<a href="?m=admin&c=home&a=deleteuser&bid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a>
				</td>
			</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
		</div>
	</body>
</html><?php }
}
