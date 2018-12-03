<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			*{
				margin:0;
				padding:0;
			}
			.nav{
				width: 100%;
				background:rgba(0,0,0,0.6);
				position: absolute;
				z-index: 10;
				height: 45px;
				line-height: 45px;
			}
			.nav li{
				float: left;
				margin-left: 20px;
			}
			.nav ul{
				font-size: 18px;
				margin-left: 20px;
			}
			.bot{
	
				height: 60px;
				margin-left:38%;
				line-height: 60px;
			}
			
								ul,li,a{
								list-style: none;
								text-decoration: none;
								color: white;
								text-align: center;
								}
								.floatfix:after {
								content: "";
								display: table;
								clear: both;
								}
								.butm{
									position: absolute;
									background:rgba(0,0,0,0.6);
									margin-top: -160px;
									margin-left: 70%;
									width: 200px;
									height: 60px;
									border-radius: 5px;
									text-align: center;
									line-height: 60px;
									font-size: 20px;
								}
								.img img{
									width: 450px;
									position: absolute;
									margin-top: -600px;
									margin-left: 33%;
									
								}
		
								.slider-contaner{
								width:100%;
								position:relative;
								z-index: -1;
								}
								.slider-item + .slider-item{
								opacity:0.5;
								}
								.slider-item{
								width:100%;
								position:absolute;
								animation-timing-function: linear;
								animation-name:fade;
								animation-iteration-count: infinite;
								background-size:100%;
								}
								/*设置动画，请根据实际需要修改秒数*/
								.slider-item,.focus-item{
								animation-duration: 20s;
								}
								.slider-item1,.focus-item1{
								animation-delay: -1s;
								}
								.slider-item2,.focus-item2{
								animation-delay: 3s;
								}
								.slider-item3,.focus-item3{
								animation-delay: 7s;
								}
								.slider-item4,.focus-item4{
								animation-delay: 11s;
								}
								.slider-item5,.focus-item5{
								animation-delay: 15s;
								}
								@keyframes fade{
								0%{
								opacity:0;
								z-index:2;
								}
								5%{
								opacity:1;
								z-index: 1;
								}
								20%{
								opacity:1;
								z-index:1;
								}
								25%{
								opacity:0;
								z-index:0;
								}
								100%{
								opacity:0;
								z-index:0;
								}
								}
								.nav  a:hover{
									text-decoration:underline;
								}
								.butm a:hover{
									text-decoration:underline;
									font-weight: bold;
								}
								.butm:hover{
									background: rgba(129, 129, 129,0.5);
								}
								.slider-item1{
								background-image:url(resource/images/1.jpg);
								}
								.slider-item2{
								background-image:url(resource/images/4.jpg);
								}
								.slider-item3{
								background-image:url(resource/images/3.jpg);
								}
								.slider-item4{
								background-image:url(resource/images/668.jpg);
								}
								.slider-item5{
								background-image:url(resource/images/5.jpg);
								}
								.slider,.slider-item{
								padding-bottom:50%;
								}
								</style>
								</head>
								<body>
								{{include file='public/header.html'}}
								<div class="slider-contaner">
									<ul class="slider">
										<li class="slider-item slider-item1"></li>
										<li class="slider-item slider-item2"></li>
										<li class="slider-item slider-item3"></li>
										<li class="slider-item slider-item4"></li>
										<li class="slider-item slider-item5"></li>
									</ul>
								</div>
                                <div class="img"><img src="resource/images/wz.png"/></div>
								<div class="butm"><a href="?a=bloglist&c=blog">>>进入博客</a></div>
								<div class="bot">技术支持:Tedu.cn达内教育&nbsp&nbsp&nbsp PSD1806 | FuLin</div>
								</body>
								</html>
