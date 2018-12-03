<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="app/client/View/user/detail.css">
	<style type="text/css">
		body{
			background: url(resource/images/tp.jpg) no-repeat center;
		}	
	</style>
</head>
<body>
	{{include file='public/header.html'}}
	<div class="user">
		<table cellspacing="0">
			<h3>用户详情</h3>
			<tr>
				<td>用户名</td>
				<td>{{$user->username}}</td>
			</tr>
			<tr>
				<td>电话</td>
				<td>{{$user->phone}}</td>
			</tr>
			<tr>
				<td>邮箱</td>
				<td>{{$user->email}}</td>
			</tr>
			<tr>
				<td>余额</td>
				<td>{{$user->balance}}</td>
			</tr>
			<tr>
				<td>注册时间</td>
				<td>{{$user->create}}</td>
			</tr>
		</table>
	</div>
	<div class="blog">
		<table cellpadding="0">
			  <h3>用户博客</h3>
			<tr>
				<td>标题</td>
				<td>阅读量</td>
				<td>创建时间</td>
				<td>修改时间</td>
				<td colspan="3">操作</td>
			</tr>
			{{foreach $arr2 as $v}}
			<tr>
				<td>{{$v.title|truncate:10}}</td>
				<td>{{$v.view}}</td>
				<td>{{$v.create}}</td>
				<td>{{$v.update}}</td>
				<td>
					<a href="index.php?c=Blog&a=detail&bid={{$v.id}}">查看</a>
				{{if isset($smarty.session.uid) && $smarty.session.uid == $v.uid}}
				<a href="?c=blog&a=edit&bid={{$v.id}}">编辑</a>
				<a href="?c=blog&a=delete&bid={{$v.id}}">删除</a>
				</td>
				{{/if}}
			</tr>
			{{/foreach}}
		</table>
	</div>
</body>
</html>