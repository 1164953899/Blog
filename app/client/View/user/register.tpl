<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="app/client/View/user/register.css">
		<style type="text/css">
		body{
			background: url(resource/images/tp.jpg) no-repeat center;
			}	
			
		</style>
	</head>
	<body>
		{{include file='public/header.html'}}
			<div class="bd">
				<form action="?a=doRegister&c=User" method="post" >
					<table align="center" cellspacing="5">
						<tr align="center">
							<td colspan="3"><b><font size="5">用户注册</font></b></td>
						</tr>
						<tr>
							<td>用户名:</td>
							<td>
								<input type="text" name="userName" placeholder="请输入用户名" />
							</td>
							<td><span>&nbsp&nbsp&nbsp</span>用户名长度是2-100位</td>
						</tr>
						<tr>
							<td>密码:</td>
							<td>
								<input type="password" name="pwd1" placeholder="请输入密码"/>
							</td>
							<td><span>&nbsp&nbsp&nbsp</span>密码长度大于6位,包含数字和字母</td>					
						</tr>
						<tr>
							<td>确认密码:</td>
							<td>
								<input type="password" name="pwd2" placeholder="请确认密码"/>
							</td>
							<td><span>&nbsp&nbsp&nbsp</span>请确保两次密码输入一致</td>
						</tr>
						<tr>
							<td>邮箱:</td>
							<td>
								<input type="text" name="email" placeholder="请输入邮箱"/>
							</td>
							<td><span>&nbsp&nbsp&nbsp</span>请输入合法邮箱</td>
						</tr>
						<tr>
							<td>手机号:</td>
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
			                    <img src="?c=User&a=captcha">
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
