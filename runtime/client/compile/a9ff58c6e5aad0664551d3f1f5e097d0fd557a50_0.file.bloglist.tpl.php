<?php
/* Smarty version 3.1.32, created on 2018-11-23 13:26:12
  from '/Users/furin/Desktop/www/Blog/app/client/View/blog/bloglist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf7f1e476d638_73840893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9ff58c6e5aad0664551d3f1f5e097d0fd557a50' => 
    array (
      0 => '/Users/furin/Desktop/www/Blog/app/client/View/blog/bloglist.tpl',
      1 => 1535589302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_5bf7f1e476d638_73840893 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/furin/Desktop/www/Blog/vendor/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="app/client/View/blog/bloglist.css"">
	<style type="text/css">
		body{
			background: url(resource/images/2.jpg);	
		}
	</style>
</head>
<body>
	<?php $_smarty_tpl->_subTemplateRender('file:public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<div class="bloglist">
		<div class="left">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
			<div class="l1">
				<h2><a href="?c=blog&a=detail&bid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="a1"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
				</h2>
				<br>
				<p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['content'],100);?>
</p>
				<p>
					<span>作者名: <a href="?c=blog&a=detail&bid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="a1"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</a></span>
					<span>&nbsp</span>
					<span>创建时间:<?php echo $_smarty_tpl->tpl_vars['v']->value['create'];?>
</span>
					<span>&nbsp</span>
					<span>阅读量: (<?php echo $_smarty_tpl->tpl_vars['v']->value['view'];?>
)</span>
					<span>&nbsp</span>
				</p>
				<hr>
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
			<div class="right">
				<div class="r1">
					<h3>浏览量排行榜</h3>
					<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['views']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
						<li class="a1"><a href="?c=blog&a=detail&bid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="a1"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>(<?php echo $_smarty_tpl->tpl_vars['v']->value['view'];?>
)</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
				<div class="r2">
					<h3>最新排行榜</h3>
					<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latest']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
						<li class="a1"><a href="?c=blog&a=detail&bid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="a1"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			</div>
	</div>
</body>
</html><?php }
}
