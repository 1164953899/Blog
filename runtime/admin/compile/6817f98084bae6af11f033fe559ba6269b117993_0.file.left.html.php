<?php
/* Smarty version 3.1.32, created on 2018-09-04 13:32:41
  from '/Library/WebServer/Documents/Blog/app/admin/View/public/left.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8e8979cd1e60_47628156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6817f98084bae6af11f033fe559ba6269b117993' => 
    array (
      0 => '/Library/WebServer/Documents/Blog/app/admin/View/public/left.html',
      1 => 1535535532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8e8979cd1e60_47628156 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="left">
	<ul>
		<li>
			<span>用户列表</span>
			<ul>
				<li><a href="?m=admin&c=home&a=users">用户列表</a></li>
			</ul>
		</li>
		<li>
			<span>博客列表</span>
			<ul>
				<li><a href="?m=admin&c=home&a=blogs">博客列表</a></li>
			</ul>
		</li>
		<li>
			<span>评论列表</span>
			<ul>
				<li><a href="?m=admin&c=home&a=comments">评论列表</a></li>
			</ul>
		</li>
	</ul>
</div><?php }
}
