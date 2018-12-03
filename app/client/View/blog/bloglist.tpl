<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="app/client/View/blog/bloglist.css"">
	<style type="text/css">
		body{
			background: url(resource/images/2.jpg);	
		}
	</style>
</head>
<body>
	{{include file='public/header.html'}}
	<div class="bloglist">
		<div class="left">
			{{foreach $blogs as $v}}
			<div class="l1">
				<h2><a href="?c=blog&a=detail&bid={{$v.id}}" class="a1">{{$v.title}}</a>
				</h2>
				<br>
				<p>{{$v.content|truncate:100}}</p>
				<p>
					<span>作者名: <a href="?c=blog&a=detail&bid={{$v.id}}" class="a1">{{$v.username}}</a></span>
					<span>&nbsp</span>
					<span>创建时间:{{$v.create}}</span>
					<span>&nbsp</span>
					<span>阅读量: ({{$v.view}})</span>
					<span>&nbsp</span>
				</p>
				<hr>
			</div>
			{{/foreach}}
		</div>
			<div class="right">
				<div class="r1">
					<h3>浏览量排行榜</h3>
					<ul>
						{{foreach $views as $v}}
						<li class="a1"><a href="?c=blog&a=detail&bid={{$v.id}}" class="a1">{{$v.title}}</a>({{$v.view}})</li>
						{{/foreach}}
					</ul>
				</div>
				<div class="r2">
					<h3>最新排行榜</h3>
					<ul>
						{{foreach $latest as $v}}
						<li class="a1"><a href="?c=blog&a=detail&bid={{$v.id}}" class="a1">{{$v.title}}</a></li>
						{{/foreach}}
					</ul>
				</div>
			</div>
	</div>
</body>
</html>