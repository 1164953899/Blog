<?php
/* Smarty version 3.1.32, created on 2018-08-29 12:06:27
  from 'E:\www\Blog\app\client\View\public\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b861bc3e368f3_31926617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7cc516c3e7163d09825bec57234e5b33cff901c' => 
    array (
      0 => 'E:\\www\\Blog\\app\\client\\View\\public\\header.html',
      1 => 1535513600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b861bc3e368f3_31926617 (Smarty_Internal_Template $_smarty_tpl) {
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
