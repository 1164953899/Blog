<!DOCTYPE html>
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
	{{include file='public/header.html'}}
	<div class="container">
			<br>
			<h1>{{$blog->title}}</h1>
			<br>
			<br>
			<p>
				<span>作者名:<a href="?c=user&a=detail&uid={{$user->id}}" class="a1">{{$user->username}}</a></span>
				<span>&nbsp</span>
				<span>创建时间:{{$blog->create}}</span>
				<span>&nbsp</span>
				<span>更新时间:{{$blog->update}}</span>
				<span>&nbsp</span>
				<span>阅读量: {{$blog->view}}</span>
			</p>
			<hr class="hr1">
			<br>
			<br>
			<!-- 如果图片非空, 才显示图片 -->
			{{if !empty($blog->image)}}
			<p>
				<!-- 数据库中保存的是图片名, 而显示图片需要路径 -->
				<img src="upload/{{$blog->image}}" width="40%">
			</p>
			<br>
			<br>
			{{/if}}
			<div class="content">
				{{$blog->content|nl2br}}
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
				{{foreach $comments as $v}}
				<tr>
					<td>来自用户:{{$v.username}}</td>
					<td>发表时间:{{$v.create}}</td>
				</tr>
				<tr bgcolor="#E5E2CC">
				<td colspan="2" align="left">{{$v.content}}</td>
				</tr>
				{{/foreach}}
			</table>
			{{if isset($smarty.session.uid)}}
			<br>
			<br>
			<form action="?c=comment&a=add&uid={{$smarty.session.uid}}&bid={{$blog->id}}" method="post">
				<textarea type="text" name="content" placeholder="请输入评论内容"></textarea>
				<div><button>提交评论</button></div>
			</form>
			{{/if}}
			<br>
			<br>
			<br>
			<br>

		</div>

</body>
</html>