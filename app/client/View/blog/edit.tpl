<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="app/client/View/blog/addblog.css">
	<style type="text/css">
	body{
		background: url(resource/images/111.jpg);
	}
	</style>
	<body>
	</body>
</head>
<body>
	{{include file='public/header.html'}}
	<div class="d1">
		<div class="null"> </div>
		<h3>修改博客</h3>
	<table cellspacing="0">
	<form action="?a=doEdit&c=Blog&bid={{$blog->id}}" method="post" enctype="multipart/form-data">
			<tr>
				<td>题目</td>
				<td>
					<input type="text" name="title" value="{{$blog->title}}">
				</td>
			</tr>
			<tr>
				<td>图片</td>
				<td>
					<input type="file" name="pic" class="i1" value="修改图片">
				</td>
			</tr>
			<tr>
				<td>内容</td>
				<td>
					<textarea type="text" name='content'>{{$blog->content}}</textarea> 
				</td>
			</tr>
				<td colspan="2"><button>确认修改</button></td>
			</tr>
		</form>
	</table>
	</div>
</body>
</html>