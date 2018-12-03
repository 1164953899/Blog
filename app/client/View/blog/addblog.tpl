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
</head>
<body>
	{{include file='public/header.html'}}
	<div class="d1">
		<div class="null"> </div>
		<h3>添加博客</h3>
	<table cellspacing="0">
	<form action="?a=doAddBlog&c=Blog" method="post" enctype="multipart/form-data">
			<tr>
				<td>题目</td>
				<td>
					<input type="text" name="title">
				</td>
			</tr>
			<tr>
				<td>图片</td>
				<td>
					<input type="file" name="pic" class="i1">
				</td>
			</tr>
			<tr>
				<td>内容</td>
				<td>
					<textarea type="text" name='content'></textarea> 
				</td>
			</tr>
				<td colspan="2"><button>提交</button></td>
			</tr>
		</form>
	</table>
	</div>
</body>
</html>