<?php
/* Smarty version 3.1.32, created on 2018-11-23 13:25:55
  from '/Users/furin/Desktop/www/Blog/app/client/View/public/header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf7f1d35c4508_71943607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c81f3cc5d565d6fd65a44c74cb664059051148cc' => 
    array (
      0 => '/Users/furin/Desktop/www/Blog/app/client/View/public/header.html',
      1 => 1535513602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf7f1d35c4508_71943607 (Smarty_Internal_Template $_smarty_tpl) {
?>	<div class="nav">
		<ul>
			<li><a href="index.php?a=index">首页</a></li>
			<li>|</li>
			<li><a href="?a=bloglist&c=blog">博客列表</a></li>
			<li>|</li>
			<?php if (isset($_SESSION['uid'])) {?>
			<li><a href="?c=User&a=detail&uid=<?php echo $_SESSION['uid'];?>
"><?php echo $_SESSION['username'];?>
</a></li>
			<li>|</li>
			<li><a href="index.php?c=Blog&a=addblog">添加博客</a></li>
			<li>|</li>
			<li><a href="index.php?a=logout&c=User">退出</a></li>
			<?php } else { ?>
			<li><a href="index.php?a=showdenglu&c=User">登录</a></li>
			<li>|</li>
			<li><a href="index.php?a=showzhuce&c=User">注册</a></li>		
			<?php }?>
		</ul>
	</div>
<?php }
}
