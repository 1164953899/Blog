<?php
/* Smarty version 3.1.32, created on 2018-09-04 13:32:41
  from '/Library/WebServer/Documents/Blog/app/admin/View/public/top.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8e8979ccd1a0_64683109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '451b7c33ad25e10a2e005e7459ac7232a6ab6a36' => 
    array (
      0 => '/Library/WebServer/Documents/Blog/app/admin/View/public/top.html',
      1 => 1535788616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8e8979ccd1a0_64683109 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="top">
	<h2>博客管理后台</h2>
	<div>
		<?php if (isset($_SESSION['uid'])) {?>
		<span><?php echo $_SESSION['username'];?>
</span>
		<a href="?m=admin&a=logout&c=home">退出</a>
		<?php } else { ?>
		<a href="?m=admin&a=login&c=home">登录</a>
		<?php }?>
	</div>
</div><?php }
}
