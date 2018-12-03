<?php
/* Smarty version 3.1.32, created on 2018-09-01 15:51:10
  from 'E:\www\partone\Blog\app\admin\View\home\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8a44eeec4616_09732972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76c85e9cb833dcec562d61ffe437dbbd488b5493' => 
    array (
      0 => 'E:\\www\\partone\\Blog\\app\\admin\\View\\home\\index.html',
      1 => 1535788254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/top.html' => 1,
    'file:public/left.html' => 1,
  ),
),false)) {
function content_5b8a44eeec4616_09732972 (Smarty_Internal_Template $_smarty_tpl) {
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
		<div class="right"></div>
	</body>
</html><?php }
}
