<?php
/* Smarty version 3.1.32, created on 2018-08-25 10:19:48
  from 'E:\www\Blog\app\client\View\home\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b80bcc48c4023_71922739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ae40192cdd9b6716fb6a4cebcb1039ab158823b' => 
    array (
      0 => 'E:\\www\\Blog\\app\\client\\View\\home\\index.html',
      1 => 1535163335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b80bcc48c4023_71922739 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
				background-color: black;
				position: absolute;
				z-index: 10;
				height: 50px;
				line-height: 50px;
				opacity: 0.8;
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
									margin-top: -680px;
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
								}
								.butm:hover{
									background: rgba(0,0,0,1);
								}
								.slider-item1{
								background-image:url(../../../../resource/images/1.jpg);
								}
								.slider-item2{
								background-image:url(../../../../resource/images/2.jpg);
								}
								.slider-item3{
								background-image:url(../../../../resource/images/3.jpg);
								}
								.slider-item4{
								background-image:url(../../../../resource/images/4.jpg);
								}
								.slider-item5{
								background-image:url(../../../../resource/images/5.jpg);
								}
								.slider,.slider-item{
								padding-bottom:50%;
								}
								
								</style>
								</head>
								<body>
									<div class='nav'>
										<ul>
											<li><a href="#">首页</a></li>
											<li>|</li>
											<li><a href="#">登录</a></li>
											<li>|</li>
											<li><a href="#">注册</a></li>		
										</ul>
									</div>
	
								<div class="slider-contaner">
									<ul class="slider">
										<li class="slider-item slider-item1"></li>
										<li class="slider-item slider-item2"></li>
										<li class="slider-item slider-item3"></li>
										<li class="slider-item slider-item4"></li>
										<li class="slider-item slider-item5"></li>
									</ul>
								</div>
                                <div class="img"><img src="../../../../resource/images/wz.png"/></div>
								<div class="butm"><a href="#">>>进入博客</a></div>
								<div class="bot">技术支持:Tedu.cn达内教育&nbsp&nbsp&nbsp PSD1806 | FuLin</div>
								</body>
								</html>
<?php }
}
