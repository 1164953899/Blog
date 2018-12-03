<?php
/* Smarty version 3.1.32, created on 2018-08-27 10:08:40
  from 'E:\www\Blog\app\client\View\user\denglu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b835d28157628_87884243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76f0d23374d1581dc9ed50b823188d9bc513d136' => 
    array (
      0 => 'E:\\www\\Blog\\app\\client\\View\\user\\denglu.tpl',
      1 => 1535335703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b835d28157628_87884243 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			body{
				background: url(resource/images/tp.jpg) no-repeat;
			}	
			
		   .nav a:hover{
				text-decoration:underline;
			}
			
			*{
				margin: 0;
				padding: 0;
			}

			ul,li,a{
				list-style: none;
				text-decoration: none;
				color: white;
				text-align: center;
			}

			.nav{
				width: 100%;
				background:rgba(0,0,0,0.8);
				height: 45px;
			}
			
			.nav li{
				float: left;
				margin-left: 20px;
				line-height: 45px;
			}
			
			.nav ul{

				font-size: 15px;
				margin-left: 20px;
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
				 -webkit-box-shadow:2px 2px 5px #333333;
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
			}
			.div2{
				border-top: 3px solid green;
				margin-top: 10px;
		</style>
	</head>
	<body>
	<div class="nav">
		<ul>
			<li><a href="index.php?a=index">首页</a></li>
			<li>|</li>
			<li><a href="#">登录</a></li>
			<li>|</li>
			<li><a href="index.php?a=showzhuce">注册</a></li>		
		</ul>
	</div>
	 <div class="bd">
		<div class="d1">
				<img src="resource/images/233.jpg"/>
		</div>
		<div class="d2">
			<form>
				<table align="center">
					<tr>
						<th colspan="4">用户登录</th>
					</tr>
					<tr>
						<td colspan="4"></td>
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
			                    <img src="libs/Captcha.php">
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
