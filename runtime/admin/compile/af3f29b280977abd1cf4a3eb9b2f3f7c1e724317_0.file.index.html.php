<?php
/* Smarty version 3.1.32, created on 2018-09-04 13:32:41
  from '/Library/WebServer/Documents/Blog/app/admin/View/home/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8e8979cad262_36232640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af3f29b280977abd1cf4a3eb9b2f3f7c1e724317' => 
    array (
      0 => '/Library/WebServer/Documents/Blog/app/admin/View/home/index.html',
      1 => 1535788256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/top.html' => 1,
    'file:public/left.html' => 1,
  ),
),false)) {
function content_5b8e8979cad262_36232640 (Smarty_Internal_Template $_smarty_tpl) {
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
