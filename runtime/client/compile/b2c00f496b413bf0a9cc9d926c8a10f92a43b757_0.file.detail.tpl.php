<?php
/* Smarty version 3.1.32, created on 2018-08-31 19:17:00
  from 'E:\www\partone\Blog\app\client\View\user\detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8923ac549717_29007117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2c00f496b413bf0a9cc9d926c8a10f92a43b757' => 
    array (
      0 => 'E:\\www\\partone\\Blog\\app\\client\\View\\user\\detail.tpl',
      1 => 1535530837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_5b8923ac549717_29007117 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\www\\partone\\Blog\\vendor\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="app/client/View/user/detail.css">
	<style type="text/css">
		body{
			background: url(resource/images/tp.jpg) no-repeat center;
		}	
	</style>
</head>
<body>
	<?php $_smarty_tpl->_subTemplateRender('file:public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<div class="user">
		<table cellspacing="0">
			<h3>用户详情</h3>
			<tr>
				<td>用户名</td>
				<td><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</td>
			</tr>
			<tr>
				<td>电话</td>
				<td><?php echo $_smarty_tpl->tpl_vars['user']->value->phone;?>
</td>
			</tr>
			<tr>
				<td>邮箱</td>
				<td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
			</tr>
			<tr>
				<td>余额</td>
				<td><?php echo $_smarty_tpl->tpl_vars['user']->value->balance;?>
</td>
			</tr>
			<tr>
				<td>注册时间</td>
				<td><?php echo $_smarty_tpl->tpl_vars['user']->value->create;?>
</td>
			</tr>
		</table>
	</div>
	<div class="blog">
		<table cellpadding="0">
			  <h3>用户博客</h3>
			<tr>
				<td>标题</td>
				<td>阅读量</td>
				<td>创建时间</td>
				<td>修改时间</td>
				<td colspan="3">操作</td>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr2']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
			<tr>
				<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['title'],10);?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['view'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['create'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['update'];?>
</td>
				<td>
					<a href="index.php?c=Blog&a=detail&bid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">查看</a>
				<?php if (isset($_SESSION['uid']) && $_SESSION['uid'] == $_smarty_tpl->tpl_vars['v']->value['uid']) {?>
				<a href="?c=blog&a=edit&bid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑</a>
				<a href="?c=blog&a=delete&bid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a>
				</td>
				<?php }?>
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
