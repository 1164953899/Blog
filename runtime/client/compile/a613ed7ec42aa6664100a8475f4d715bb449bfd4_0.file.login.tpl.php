<?php
/* Smarty version 3.1.32, created on 2018-08-31 19:16:45
  from 'E:\www\partone\Blog\app\client\View\user\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b89239df2d434_25872366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a613ed7ec42aa6664100a8475f4d715bb449bfd4' => 
    array (
      0 => 'E:\\www\\partone\\Blog\\app\\client\\View\\user\\login.tpl',
      1 => 1535504478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_5b89239df2d434_25872366 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="app/client/View/user/login.css">
		<style type="text/css">
		body{

			background: url(resource/images/tp.jpg) no-repeat center;
			
			}	
		</style>
	</head>
	<body>
	<?php $_smarty_tpl->_subTemplateRender('file:public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	 <div class="bd">
		<div class="d1">
				<img src="resource/images/233.jpg"/>
		</div>
		<div class="d2">
			<form action="?a=doLogin&c=User" method="post">
				<table align="center">
					<tr>
						<th colspan="4">用户登录</th>
					</tr>
					<tr>
						<td>用户名:</td>
						<td colspan="3">
							<input type="text" name="userName" placeholder="请输入用户名" />
						</td>
					</tr>
					<tr>
						<td>密码:</td>
						<td colspan="3">
							<input type="password" name="Pwd" placeholder="请输入密码" />
						</td>
					</tr>
					<tr>
			                <td>验证码:</td>
			                <td colspan="3">
			                    <input type="text" name="captcha" placeholder="请输入验证码">
			                </td>
			            </tr>
			            <tr>
			                <td colspan="4">
			                    <img src="?c=User&a=captcha">
			                </td>
			            </tr>
			            <tr>
						<td colspan="4">
							<button>登录</button>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	</body>
</html>
<?php }
}
