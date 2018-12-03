<?php
/* Smarty version 3.1.32, created on 2018-09-04 13:29:44
  from '/Library/WebServer/Documents/Blog/app/client/View/blog/detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8e88c8eff3f3_58472160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ede66e9f0ddcb4a367d36ac7619727db4647d73f' => 
    array (
      0 => '/Library/WebServer/Documents/Blog/app/client/View/blog/detail.tpl',
      1 => 1535544908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_5b8e88c8eff3f3_58472160 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="app\client\View\blog\detail.css">
	<style type="text/css">
		body{
			background: url(resource/images/1.jpg);
		}
	</style>
</head>
<body>
	<?php $_smarty_tpl->_subTemplateRender('file:public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<div class="container">
			<br>
			<h1><?php echo $_smarty_tpl->tpl_vars['blog']->value->title;?>
</h1>
			<br>
			<br>
			<p>
				<span>作者名:<a href="?c=user&a=detail&uid=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" class="a1"><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</a></span>
				<span>&nbsp</span>
				<span>创建时间:<?php echo $_smarty_tpl->tpl_vars['blog']->value->create;?>
</span>
				<span>&nbsp</span>
				<span>更新时间:<?php echo $_smarty_tpl->tpl_vars['blog']->value->update;?>
</span>
				<span>&nbsp</span>
				<span>阅读量: <?php echo $_smarty_tpl->tpl_vars['blog']->value->view;?>
</span>
			</p>
			<hr class="hr1">
			<br>
			<br>
			<!-- 如果图片非空, 才显示图片 -->
			<?php if (!empty($_smarty_tpl->tpl_vars['blog']->value->image)) {?>
			<p>
				<!-- 数据库中保存的是图片名, 而显示图片需要路径 -->
				<img src="upload/<?php echo $_smarty_tpl->tpl_vars['blog']->value->image;?>
" width="40%">
			</p>
			<br>
			<br>
			<?php }?>
			<div class="content">
				<?php echo nl2br($_smarty_tpl->tpl_vars['blog']->value->content);?>

			</div>
			<br>
			<br>
			<br>
		</div>
		<div class="container">
			<table>
				<hr>
				<br>
				<br>
				<br>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
				<tr>
					<td>来自用户:<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
					<td>发表时间:<?php echo $_smarty_tpl->tpl_vars['v']->value['create'];?>
</td>
				</tr>
				<tr bgcolor="#E5E2CC">
				<td colspan="2" align="left"><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</td>
				</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</table>
			<?php if (isset($_SESSION['uid'])) {?>
			<br>
			<br>
			<form action="?c=comment&a=add&uid=<?php echo $_SESSION['uid'];?>
&bid=<?php echo $_smarty_tpl->tpl_vars['blog']->value->id;?>
" method="post">
				<textarea type="text" name="content" placeholder="请输入评论内容"></textarea>
				<div><button>提交评论</button></div>
			</form>
			<?php }?>
			<br>
			<br>
			<br>
			<br>

		</div>

</body>
</html><?php }
}
