<?php
/* Smarty version 3.1.32, created on 2018-08-29 20:09:54
  from 'E:\www\Blog\app\client\View\blog\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b868d128a1707_14180122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '097b52668def8d615096def9a54e3bd57b024b8d' => 
    array (
      0 => 'E:\\www\\Blog\\app\\client\\View\\blog\\edit.tpl',
      1 => 1535530914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_5b868d128a1707_14180122 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="app/client/View/blog/addblog.css">
	<style type="text/css">
	body{
		background: url(resource/images/111.jpg);
	}
	</style>
	<body>
	</body>
</head>
<body>
	<?php $_smarty_tpl->_subTemplateRender('file:public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<div class="d1">
		<div class="null"> </div>
		<h3>修改博客</h3>
	<table cellspacing="0">
	<form action="?a=doEdit&c=Blog&bid=<?php echo $_smarty_tpl->tpl_vars['blog']->value->id;?>
" method="post" enctype="multipart/form-data">
			<tr>
				<td>题目</td>
				<td>
					<input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['blog']->value->title;?>
">
				</td>
			</tr>
			<tr>
				<td>图片</td>
				<td>
					<input type="file" name="pic" class="i1" value="修改图片">
				</td>
			</tr>
			<tr>
				<td>内容</td>
				<td>
					<textarea type="text" name='content'><?php echo $_smarty_tpl->tpl_vars['blog']->value->content;?>
</textarea> 
				</td>
			</tr>
				<td colspan="2"><button>确认修改</button></td>
			</tr>
		</form>
	</table>
	</div>
</body>
</html><?php }
}
