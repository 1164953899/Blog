<?php
/* Smarty version 3.1.32, created on 2018-09-01 16:11:02
  from 'E:\www\partone\Blog\app\admin\View\public\top.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8a49968be059_63583012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4f2b42605fa8b4277a79b4c440c9b3a07db6000' => 
    array (
      0 => 'E:\\www\\partone\\Blog\\app\\admin\\View\\public\\top.html',
      1 => 1535788615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8a49968be059_63583012 (Smarty_Internal_Template $_smarty_tpl) {
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
