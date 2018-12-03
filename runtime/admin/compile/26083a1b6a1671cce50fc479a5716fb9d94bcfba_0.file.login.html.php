<?php
/* Smarty version 3.1.32, created on 2018-09-04 13:32:32
  from '/Library/WebServer/Documents/Blog/app/admin/View/home/login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8e8970b64e94_55602815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26083a1b6a1671cce50fc479a5716fb9d94bcfba' => 
    array (
      0 => '/Library/WebServer/Documents/Blog/app/admin/View/home/login.html',
      1 => 1535785332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8e8970b64e94_55602815 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<style type="text/css">	
			*{
				margin: 0;
				padding: 0;
			}
			body{
				background: url('resource/images/tp.jpg');
			}
			.d1{
				float: left;
				margin-left: 50px;
				margin-top: 70px;
			}
			.d1 img{
				float: left;
				height: 400px;
				width: 600px;
			}
			.d2{
				float: left;
				background-color:white;
				width: 500px;
				height: 401px;
				margin-top: 70px;
			}
			.a1{
				margin-top: 40px;
				margin-left: 30px;
		     }
			.text{
				margin-top: 50px;
				margin-left: 36px;
			}
			.text input{
				height: 25px;
				width: 200px;
			}
			.pwd{
				margin-top: 20px;
				margin-left: 20px;
			}
			.pwd input{
				height: 25px;
				width: 200px;
			}
			.bd{
				width: 1200px;
				height: 560px;
				margin: 0 auto;
				margin-top:70px;
				border-radius: 5px;
				background:white;
		/*		 -webkit-box-shadow:2px 2px 5px #333333;*/
				  box-shadow:2px 2px 5px #333333;
			}
			.d2 table{
				width: 400px;
				margin:0 auto;
			}
			.d2 tr{
				width: 300px;
				height: 54px;
				text-align: center;
			}
			.d2 input{
				width: 300px;
				height: 30px;
			}
			.d2 th{
				font-size: 25px;
			}
			button{
				width: 120px;
				height: 40px;
				font-size:18px;
				border-radius: 8px;
				border: none;
				background: darkseagreen;
				margin-top: 40px;
				color: white;
				box-shadow:1px 1px 2px #333333;
			}
			.div2{
				border-top: 3px solid green;
				margin-top: 10px;
		</style>
	</head>
	<body>
		<div class="bd">
		<div class="d1">
				<img src="resource/images/666.jpg"/>
		</div>
		<div class="d2">
			<form action="?m=admin&c=home&a=doLogin" method="post">
				<table align="center">
					<tr>
						<th colspan="4">后台登录页面</th>
					</tr>
					<tr>
						<td>用户名:</td>
						<td colspan="3">
							<input type="text" name="username">
						</td>
					</tr>
					<tr>
						<td>密码:</td>
						<td colspan="3">
							<input type="password" name="password">
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
			                    <img src="?m=admin&c=home&a=captcha">
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
</html><?php }
}
