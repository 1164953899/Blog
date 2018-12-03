<?php
/* Smarty version 3.1.32, created on 2018-08-31 19:18:15
  from 'E:\www\partone\Blog\app\client\View\blog\addblog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8923f769a110_14148706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '830f3584e5833a87567d9050bf1c633a750979df' => 
    array (
      0 => 'E:\\www\\partone\\Blog\\app\\client\\View\\blog\\addblog.tpl',
      1 => 1535530652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_5b8923f769a110_14148706 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<body>
	<?php $_smarty_tpl->_subTemplateRender('file:public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<div class="d1">
		<div class="null"> </div>
		<h3>添加博客</h3>
	<table cellspacing="0">
	<form action="?a=doAddBlog&c=Blog" method="post" enctype="multipart/form-data">
			<tr>
				<td>题目</td>
				<td>
					<input type="text" name="title">
				</td>
			</tr>
			<tr>
				<td>图片</td>
				<td>
					<input type="file" name="pic" class="i1">
				</td>
			</tr>
			<tr>
				<td>内容</td>
				<td>
					<textarea type="text" name='content'></textarea> 
				</td>
			</tr>
				<td colspan="2"><button>提交</button></td>
			</tr>
		</form>
	</table>
	</div>
</body>
</html><?php }
}
