<!DOCTYPE html>
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
	{{include file='public/header.html'}}
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
