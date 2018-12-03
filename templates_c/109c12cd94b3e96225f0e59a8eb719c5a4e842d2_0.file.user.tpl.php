<?php
/* Smarty version 3.1.32, created on 2018-08-27 09:53:42
  from 'E:\www\Blog\app\client\View\user\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8359a66d33c7_68385570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '109c12cd94b3e96225f0e59a8eb719c5a4e842d2' => 
    array (
      0 => 'E:\\www\\Blog\\app\\client\\View\\user\\user.tpl',
      1 => 1535333789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8359a66d33c7_68385570 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			body{	
				background: url(resource/images/tp.jpg) no-repeat center;
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
			
			.bd {
				width:600px;
				height: 540px;
				border-radius: 20px;
				background:rgba(255,255,255,0.3);
				margin: 0 auto;
				margin-top:100px;
			}
			
			.bd table{
				width: 550px;
	
				margin:0 auto;
			}
			.bd tr{
			
				color:dark gray;
				height: 50px;
			}
			.buttom{
				width: 120px;
				height: 36px;
				font-weight:bold;
				font-size: 20px;
				border: none;
				border-radius: 10px;
				background-color:white;
				margin-top: 15px;
			}

		</style>
	</head>
	<body>
		<div class="nav">
			    <ul>
					<li><a href="index.php?a=index">首页</a></li>
					<li>|</li>
					<li><a href="index.php?a=showdenglu">登录</a></li>
					<li>|</li>
					<li><a href="#">注册</a></li>		
				</ul>
			</div>
			<div class="bd">
				<form action="" method="post" >
					<table align="center" cellspacing="5">
						<tr align="center">
							<td colspan="3"><b><font size="5">用户注册</font></b></td>
						</tr>
						<tr>
							<td>用户名</td>
							<td>
								<input type="text" name="userName" placeholder="请输入用户名" />
							</td>
							<td><span>&nbsp&nbsp&nbsp</span>用户名长度是2-100位</td>
						</tr>
						<tr>
							<td>密码</td>
							<td>
								<input type="password" name="pwd1" placeholder="请输入密码"/>
							</td>
							<td><span>&nbsp&nbsp&nbsp</span>密码长度大于6位,包含数字和字母</td>					
						</tr>
						<tr>
							<td>确认密码</td>
							<td>
								<input type="password" name="pwd2" placeholder="请确认密码"/>
							</td>
							<td><span>&nbsp&nbsp&nbsp</span>请确保两次密码输入一致</td>
						</tr>
						<tr>
							<td>邮箱</td>
							<td>
								<input type="text" name="email" placeholder="请输入邮箱"/>
							</td>
							<td><span>&nbsp&nbsp&nbsp</span>请输入合法邮箱</td>
						</tr>
						<tr>
							<td>手机号</td>
							<td>
								<input type='text' name="phone" placeholder="请输入手机号" />
							</td>
							<td><span>&nbsp&nbsp&nbsp</span>请输入合法手机号</td>
						</tr>
						<tr>
			                <td>验证码:</td>
			                <td>
			                    <input type="text" name="captcha" placeholder="请输入验证码">
			                </td>
			          
			                <td><span>&nbsp&nbsp&nbsp</span>请输入验证码</td>
			            </tr>
			            <tr>
			                <td></td>
			                <td>
			                    <img src="libs/Captcha.php">
			                </td>
			                <td></td>
			            </tr>
			            <tr align="center">
			                <td colspan="3">
			                    <input class="buttom" type="submit" value="注册">
			                </td>
			            </tr>
					</table>
				</form>
			</div>
	</body>
</html>
<?php }
}
